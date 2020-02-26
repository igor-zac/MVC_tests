<?php
include("functions.php");
include("classes.php");

$listeClients = new ListeClients();
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
<?php include("entete.php");

displayListeClients($listeClients);

    ?>

</body>
</html>
