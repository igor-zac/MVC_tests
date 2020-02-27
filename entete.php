<?php

function checkActivePage(string $str){
    //Fonction responsable d'identifier la page actuelle pour la mettre en valeur dans la barre de navigation
    $path = explode('/',$_SERVER['PHP_SELF']);
    if(end($path) == $str) {
        echo 'active';
    }


}

function displayActivePage(){
    //Fonction affichant le nom de la page en haut de celle ci, en prenant le nom du fichier
    $path = explode('/',$_SERVER['PHP_SELF']);
    $file = explode(".",end($path));
    $page = $file[0];
    echo $page;

}
?>

<!-- Fichier se chargeant d'afficher le header et la navigation de la boutique, communs entre les différentes pages -->
