<?php

require_once "Controller/classes/MySmarty.class.php";
require_once "Model/modele.php";

$myCM = new CatalogueManager();
$myCatalogue= $myCM->getCatalogue(1);

$smarty = new MySmarty();
$smarty->assign('catalogue', $myCatalogue->getListeArticles());


$smarty->display('Catalogue/catalogue.tpl');
