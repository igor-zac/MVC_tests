<?php
require_once "Model.class.php";
require_once "Article.class.php";

class CatalogueManager extends Model
{
    public function getCatPage($page)
    {
        $limit = Catalogue::$PAGE_LENGTH;

        if(is_int($page)){
            $currentPage = $page;
        } else {
            $currentPage = 1;
        }

        $offset = ($currentPage - 1) * Catalogue::$PAGE_LENGTH;

        $list = $this->generatePage($limit, $offset);



        $productList = [];

        foreach($list as $productData) {
//            if ($product['idCategorie'] == 5) {
//                $productList[] = new Chaussure($product);
//            } elseif ($product['idCategorie'] == 6) {
//                $productList[] = new Vetement($product);
//            } else {
            $product = new Article();

            $this->hydrateObject($product, $productData);
            $productList[] = $product;
            }
//        }

        $catLength = ceil($this->numberOfPages(Catalogue::$PAGE_LENGTH)/Catalogue::$PAGE_LENGTH);
        return new Catalogue($productList, $catLength);
    }

    private function generatePage($limit, $offset){
        $sql = 'SELECT id, nom, nomImage, poids, prix, description, stock, dispo, idCategorie
            FROM produit ORDER BY id LIMIT '.$limit.' OFFSET '.$offset;

        $req = $this->executeRequest($sql);

        return $req->fetchAll();
    }

    private function numberOfPages(){
        $sql = 'SELECT count(id) as nb FROM produit';

        $req = $this->executeRequest($sql);

        return $req->fetch()['nb'];

    }

}