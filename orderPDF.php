<?php
include ("MYPDF.php");
include ("classes.php");

session_start();

$myOrder = $_SESSION['order'];
$orderPDF = new OrderRecap($myOrder);

$orderPDF->Output('recapCommande.pdf', 'I');