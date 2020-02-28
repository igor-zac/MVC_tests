<?php
require_once "Model/classes/CatalogueManager.class.php";
require_once "Model/classes/Catalogue.class.php";
require_once "MySmarty.class.php";

class CatalogueController
{
    private $manager;


    public function __construct()
    {
        $this->manager = new  CatalogueManager();
    }

    public function catalogue($templateEngine){
        $catalogue = $this->manager->getCatPage(1);


        $templateEngine->assign('catalogue', $catalogue->getListeArticles());

        $templateEngine->display('Catalogue/catalogue.tpl');
    }
}