
<?php
include("functions.php");
include("classes.php");

session_start();
if(isset($_SESSION['panier'])){
    $panier=$_SESSION['panier'];
} else {
    $panier = new Panier();
}

//$errorTable = []; //Tableau contenant les erreurs relatives a la saisie des quantités sur les articles


if ($_SERVER['REQUEST_METHOD'] === 'GET'){

    if(isset($_GET['empty_cart'])){
        $panier->emptyCart();
    } elseif (isset($_GET['add'])){
    // Si le champ add est initialisé, alors on arrive depuis la page catalogue.php

        if(isset($_GET['articles'])) {


            /* Chaque article coché a son nom ajouté au tableau $_GET['articles']
            On initialise articles choisis avec pour chaque article son nom et une quantité à 1 */
            foreach ($_GET['articles'] as $article){
                $panier->add($article);
            }
        }


    } elseif(isset($_GET['delete'])){
        $panier->delete($_GET['delete']);
    } elseif(isset($_GET['update'])){
        $panier->update($_GET['update'], $_GET['quantites'][$_GET['update']]);
    }

}


$_SESSION['panier'] = $panier;
?>

        <!-- Inclus le fichier functions.php et appelle ses fonctions pour générer les blocs article de la page -->
<!--        <form action="--><?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?><!--" method="get" class="block">-->

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get" class="block">
        <?php
        if(!empty($panier->getContenuPanier())) {
            //Si le panier n'est pas vide, on affiche les différents prix, le bouton recalculer et le bouton continuer

            displayPanier($panier);
            ?>
            <p class="total"><strong>Total :</strong> <?= number_format($panier->getTotal(), 2) ?> €</p>
<!--            <p class="total"><strong>Frais de port :</strong> --><?//= number_format($fraisDePort, 2) ?><!-- €</p>-->
<!--            <p class="total"><strong>Total commande :</strong> --><?//= number_format($totalPanier + $fraisDePort, 2) ?><!-- €</p>-->



            <div class="bouton">
                <a class="btn btn-primary" href="infosClient.php">Continuer</a>
            </div>
            <?php

        } else {
            // Si le panier est vide, on affiche simplement le message ce-dessous
            ?>
            <p>Le panier est vide </p>
            <?php
        }
        ?>


</form>
    </body>
</html>