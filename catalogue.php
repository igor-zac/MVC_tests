<?php
include("functions.php");
include("classes.php");

session_start();

$page = (!empty($_GET['page']) ? intval($_GET['page']) : 1);

$monCatalogue = (!empty($_SESSION['catalogue']) ? $_SESSION['catalogue']: new Catalogue(6));


$monCatalogue->setListeArticles($page);


