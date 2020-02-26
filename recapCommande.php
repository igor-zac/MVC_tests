<?php
include('functions.php');
include ('classes.php');
session_start();

$bdd = dbConnect();

$myOM = new OrderManager($bdd);
$myOrder = $_SESSION['order'];

$myClient = new Client($_POST);
$clientID = $myOM->saveClient($myClient);

$myOrder = $_SESSION['order'];
$myOrder->setClient($myClient);
$myOrder->generateOrderReference($clientID);

$myOM->saveOrder($myOrder, $clientID);


$_SESSION['order']=$myOrder;
unset($_SESSION['panier']);



?>

<!doctype html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Titre de la page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles.css">

    </head>
    <body>
        <?php include("entete.php"); ?>

        <p class="titreRecap mt-5"><u>Votre commande a bien été passée!</u></p>

        <a href="orderPDF.php" target="_blank" class="d-block mt-4">Afficher le récapitulatif de la commande</a>
        <a href="catalogue.php?empty_choice=" class="btn btn-primary m-5">Revenir au catalogue</a>
    </body>
</html>
