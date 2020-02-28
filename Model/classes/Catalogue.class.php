<?php
class Catalogue
{

    private $productList;
    public static $PAGE_LENGTH = 10;

    private $nbPages;


    public function __construct($productList, $catLenght)
    {
        $this->productList = $productList;
        $this->nbPages = $catLenght;
    }

    public function getListeArticles()
    {
        return $this->productList;
    }

    public function getNbPages()
    {
        return $this->nbPages;
    }
}