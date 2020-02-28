<?php


class CartController
{
    private $manager;


    public function __construct()
    {
        $this->manager = new  CartManager();
    }

    public function catalogue($templateEngine){
        $catalogue = $this->manager->getCatPage(1);


        $templateEngine->assign('catalogue', $catalogue->getListeArticles());

        $templateEngine->display('Catalogue/catalogue.tpl');
    }
}