<?php

require_once "Controller/classes/MySmarty.class.php";
require_once "Model/modele.php";


$myCM = new CatalogueManager();
$myCatalogue= $myCM->getCatalogue(1);

$smarty = new MySmarty();
$smarty->assign('catalogue', $myCatalogue->getListeArticles());


$smarty->display('Catalogue/catalogue.tpl');


//
//$myCL = new ClientManager();
//$myClientList = $myCL->getClientList();
//
//$smarty = new MySmarty();
//$smarty->assign('clients', $myClientList->getClients());
//
//$smarty->display('Client/client.tpl');

