<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    $path = 'classes/';

    require $path.$className.'.class.php';
}
//----------------------------------------------------------------------------------------------------------


function getCatalogue($currentPage){

    $start=($currentPage-1)*Catalogue::$PAGE_LENGTH;

    $bdd = dbConnect();
// ######### REQUETE SQL NON SECURE
    $req = $bdd->query('SELECT id, nom, nomImage, poids, prix, description, stock, dispo, idCategorie
            FROM produit ORDER BY id LIMIT '.Catalogue::$PAGE_LENGTH.' OFFSET '.$start);

    $productList = [];

    while ($product = $req->fetch()) {
        if ($product['idCategorie'] == 5) {
            $productList[] = new Chaussure($product);
        } elseif ($product['idCategorie'] == 6) {
            $productList[] = new Vetement($product);
        } else {
            $productList[] = new Article($product);
        }
    }

    return new Catalogue($productList);
}

