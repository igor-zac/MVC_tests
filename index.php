<?php

require_once ("Modele.php");

$page = (!empty($_GET['page']) ? intval($_GET['page']) : 1);
$myCatalogue = getCatalogue($page);

require_once ("catalogueView.php");

