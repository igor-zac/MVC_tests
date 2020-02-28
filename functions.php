<?php


function displayNavPages($nbPages, $currentPage){
    ?>
    <ul class="nav justify-content-center">
        <?php
        if($currentPage>1) { ?>
            <li class="nav-item">
                <a class="nav-link" href="?page=<?= $currentPage - 1 ?>"><</a>
            </li>
<?php   }

        for($i = 1; $i <= $nbPages; $i++){?>
            <li class="nav-item">
                <a class="nav-link mx-0 px-1" <?php if($currentPage==$i){ echo 'style="text-decoration: underline;"'; }?> href="?page=<?= $i ?>"><?= $i ?></a>
            </li>
<?php   }
        if($currentPage<$nbPages){?>
            <li class="nav-item">
                <a class="nav-link" href="?page=<?= $currentPage + 1 ?>">></a>
            </li>
<?php   }


        ?>

    </ul>
    <?php
}


//function displayClient(Client $client){
//    $prenom = $client->getPrenom();
//    $nom = $client->getNom();
//    $adresse = $client->getAdresse();
//    $cp = $client->getCP();
//    $ville = $client->getVille();
//
//    ?>
<!--<tr>-->
<!--    <td>--><?//= $prenom ?><!--</td>-->
<!--    <td>--><?//= $nom ?><!--</td>-->
<!--    <td>--><?//= $adresse ?><!--</td>-->
<!--    <td>--><?//= $cp ?><!--</td>-->
<!--    <td>--><?//= $ville ?><!--</td>-->
<!--</tr>-->
<?php
//}

//function displayListeClients(ListeClients $listeClients){
//
//
//    ?>
<!--    <table class="table table-dark">-->
<!--        <thead>-->
<!--            <tr>-->
<!--                <th scope="col">Prenom</th>-->
<!--                <th scope="col">Nom</th>-->
<!--                <th scope="col">Adresse</th>-->
<!--                <th scope="col">Code Postal</th>-->
<!--                <th scope="col">Ville</th>-->
<!--            </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        --><?php
//        foreach ($listeClients->getListeClients() as $client){
//            displayClient($client);
//        }
//        ?>
<!--        </tbody>-->
<!--    </table>-->
<?php
//}

//function displayPanier(Panier $panier){
//    $bdd = dbConnect();
//
//    foreach($panier->getContenuPanier() as $idArticle => $quantite) {
//
//
//        $sql = 'SELECT nom, nomImage, poids, idCategorie, prix FROM produit WHERE id='.$idArticle;
//        $req = $bdd->query($sql);
//        $article = $req->fetch();
//
//
//        ?>
<!---->
<!--        <div class="article">-->
<!--            <div>-->
<!--                <img class="image_article" src="img/--><?//= $article['nomImage'] ?><!--" alt="L'image de mon article">-->
<!--            </div>-->
<!---->
<!--            <div class="infosArticles">-->
<!--                <p class="nomArticle">--><?//= $article['nom'] ?><!--</p>-->
<!--                <p class="poidsArticle">Poids : --><?//= $article['poids']/1000 ?><!-- kg</p>-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="prix">-->
<!--                <p>--><?//= $article['prix']/100 ?><!-- €</p>-->
<!--            </div>-->
<!---->
<!---->
<!--                    /*Si $check est mis à true, on génère une checkbox dans le bloc article-->
<!--                    Sinon, on est dans le panier, on affiche la quantité, le bouton de suppression de l'article et les-->
<!--                    éventuelles erreurs */-->
<!---->
<!--            <div class="quantities d-flex flex-column">-->
<!--                <div class="d-flex flex-column">-->
<!--                    <div class="quantity d-flex flex-row">-->
<!--                        <label>Quantité :-->
<!--                            <input type="number" name="quantites[--><?//= $idArticle ?><!--]" value="--><?//= $quantite ?><!--">-->
<!---->
<!--                        </label>-->
<!---->
<!---->
<!--                    </div>-->
<!--                   <p class="error">--><?php ////echo htmlspecialchars($errTable[$nom_article]) ?><!--</p>-->
<!---->
<!--                </div>-->
<!---->
<!--                    <button type="submit" name="update" value="--><?//= $idArticle ?><!--" class="btn btn-secondary mb-1">Recalculer</button>-->
<!---->
<!--                    <button type="submit" name="delete" value="--><?//= $idArticle ?><!--" class="btn btn-danger">Supprimer-->
<!--                </button>-->
<!--            </div>-->
<!---->
<!---->
<!--        </div>-->
<!---->
<!--        --><?php
//    }
//}






?>

