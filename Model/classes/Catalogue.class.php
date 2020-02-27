<?php
class Catalogue
{

    private $productList;
    public static $PAGE_LENGTH = 10;
//    private $nbPages;

//    private $bdd;


    public function __construct($productList)
    {
//        $this->bdd = dbConnect();

        $this->productList = $productList;

//        $this->setNbPages();


    }

    public function getListeArticles()
    {
        return $this->productList;
    }

//    public function getNbPages(){
//        return $this->nbPages;
//    }

//    private function setNbPages(){
//        $req = $this->bdd->query('SELECT COUNT(id) as nbArticles FROM produit');
//        $data = $req->fetch();
//
//        $this->nbPages = ceil($data['nbArticles']/$this->artPerPage);
//
//    }
}