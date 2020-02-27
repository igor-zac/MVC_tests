<?php


class CatalogueManager extends Model
{
    public function getCatalogue($currentPage)
    {
        $start = ($currentPage - 1) * Catalogue::$PAGE_LENGTH;

// #################### REQUETE SQL NON SECURE ###############################
//        $sql = 'SELECT id, nom, nomImage, poids, prix, description, stock, dispo, idCategorie
//            FROM produit ORDER BY id LIMIT '.Catalogue::$PAGE_LENGTH.' OFFSET '.$start;

//        $sql = 'SELECT id, nom, nomImage, poids, prix, description, stock, dispo, idCategorie
//            FROM produit ORDER BY id LIMIT :limite OFFSET :start';
//
//        $param = array("limite" => Catalogue::$PAGE_LENGTH, "start" => $start);

        $sql = 'SELECT id, nom, nomImage, poids, prix, description, stock, dispo, idCategorie
            FROM produit';


        $req = $this->executeRequest($sql);



        $productList = [];

        while ($product = $req->fetch()) {
//            if ($product['idCategorie'] == 5) {
//                $productList[] = new Chaussure($product);
//            } elseif ($product['idCategorie'] == 6) {
//                $productList[] = new Vetement($product);
//            } else {
                $productList[] = new Article($product);
            }
//        }
        return new Catalogue($productList);
    }
}