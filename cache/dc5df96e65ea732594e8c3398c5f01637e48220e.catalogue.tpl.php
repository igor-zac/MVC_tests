<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-28 13:48:18
  from 'C:\wamp64\www\boutiquePOO\MVC\View\Catalogue\catalogue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e591a223dba71_43938657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5207998c0bb919e159649ef75d82036e7bbff96' => 
    array (
      0 => 'C:\\wamp64\\www\\boutiquePOO\\MVC\\View\\Catalogue\\catalogue.tpl',
      1 => 1582897618,
      2 => 'file',
    ),
    '0f3f95d9838dfb5f3f22dd706f01682512d90dd1' => 
    array (
      0 => 'C:\\wamp64\\www\\boutiquePOO\\MVC\\View\\Shared\\Layout.tpl',
      1 => 1582897697,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5e591a223dba71_43938657 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Un titre pour ma page</title>
        <link rel="stylesheet" href="Content/styles/bootstrap.min.css">
        <link rel="stylesheet" href="Content/styles/styles.css">

    </head>
    <body>
        <header>
            <h1>Nom de la boutique</h1>
        </header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-right justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=client">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Catalogue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=cart">Mon panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Vider le panier</a>
                </li>
            </ul>
        </nav>

                

    <form action="panier.php" method="GET" class="block">

                    <div class="article">
                <div>
                    <img class="image_article" src="Content/img/articleA1.jpg" alt="L'image de mon article">
                </div>

                <div class="infosArticles">
                    <p class="nomArticle">articleA1</p>
                    <p class="poidsArticle">Poids : 1 kg</p>


                </div>

                <div class="prix">
                    <p>100 €</p>
                </div>


                <div class="check">
                    <input type="checkbox" name="articles[]" value="1">
                    <!---->

                </div>


            </div>

                    <div class="article">
                <div>
                    <img class="image_article" src="Content/img/articleA2.jpg" alt="L'image de mon article">
                </div>

                <div class="infosArticles">
                    <p class="nomArticle">articleA2</p>
                    <p class="poidsArticle">Poids : 1 kg</p>


                </div>

                <div class="prix">
                    <p>100 €</p>
                </div>


                <div class="check">
                    <input type="checkbox" name="articles[]" value="2">
                    <!---->

                </div>


            </div>

                    <div class="article">
                <div>
                    <img class="image_article" src="Content/img/articleB1.jpg" alt="L'image de mon article">
                </div>

                <div class="infosArticles">
                    <p class="nomArticle">articleB1</p>
                    <p class="poidsArticle">Poids : 0.5 kg</p>


                </div>

                <div class="prix">
                    <p>10 €</p>
                </div>


                <div class="check">
                    <input type="checkbox" name="articles[]" value="3">
                    <!---->

                </div>


            </div>

                    <div class="article">
                <div>
                    <img class="image_article" src="Content/img/articleB2.jpg" alt="L'image de mon article">
                </div>

                <div class="infosArticles">
                    <p class="nomArticle">articleB2</p>
                    <p class="poidsArticle">Poids : 0.5 kg</p>


                </div>

                <div class="prix">
                    <p>10 €</p>
                </div>


                <div class="check">
                    <input type="checkbox" name="articles[]" value="4">
                    <!---->

                </div>


            </div>

                    <div class="article">
                <div>
                    <img class="image_article" src="Content/img/articleC1.jpg" alt="L'image de mon article">
                </div>

                <div class="infosArticles">
                    <p class="nomArticle">articleC1</p>
                    <p class="poidsArticle">Poids : 0.5 kg</p>


                </div>

                <div class="prix">
                    <p>10 €</p>
                </div>


                <div class="check">
                    <input type="checkbox" name="articles[]" value="5">
                    <!---->

                </div>


            </div>

                    <div class="article">
                <div>
                    <img class="image_article" src="Content/img/articleC2.jpg" alt="L'image de mon article">
                </div>

                <div class="infosArticles">
                    <p class="nomArticle">articleC2</p>
                    <p class="poidsArticle">Poids : 0.5 kg</p>


                </div>

                <div class="prix">
                    <p>10 €</p>
                </div>


                <div class="check">
                    <input type="checkbox" name="articles[]" value="6">
                    <!---->

                </div>


            </div>

                    <div class="article">
                <div>
                    <img class="image_article" src="Content/img/articleD1.jpg" alt="L'image de mon article">
                </div>

                <div class="infosArticles">
                    <p class="nomArticle">articleD1</p>
                    <p class="poidsArticle">Poids : 0.5 kg</p>


                </div>

                <div class="prix">
                    <p>13 €</p>
                </div>


                <div class="check">
                    <input type="checkbox" name="articles[]" value="7">
                    <!---->

                </div>


            </div>

                    <div class="article">
                <div>
                    <img class="image_article" src="Content/img/articleD2.jpg" alt="L'image de mon article">
                </div>

                <div class="infosArticles">
                    <p class="nomArticle">articleD2</p>
                    <p class="poidsArticle">Poids : 0.5 kg</p>


                </div>

                <div class="prix">
                    <p>13 €</p>
                </div>


                <div class="check">
                    <input type="checkbox" name="articles[]" value="8">
                    <!---->

                </div>


            </div>

                    <div class="article">
                <div>
                    <img class="image_article" src="Content/img/articleE1.jpg" alt="L'image de mon article">
                </div>

                <div class="infosArticles">
                    <p class="nomArticle">articleE1</p>
                    <p class="poidsArticle">Poids : 1.2 kg</p>


                </div>

                <div class="prix">
                    <p>50 €</p>
                </div>


                <div class="check">
                    <input type="checkbox" name="articles[]" value="9">
                    <!---->

                </div>


            </div>

                    <div class="article">
                <div>
                    <img class="image_article" src="Content/img/articleE2.jpg" alt="L'image de mon article">
                </div>

                <div class="infosArticles">
                    <p class="nomArticle">articleE2</p>
                    <p class="poidsArticle">Poids : 1.2 kg</p>


                </div>

                <div class="prix">
                    <p>50 €</p>
                </div>


                <div class="check">
                    <input type="checkbox" name="articles[]" value="10">
                    <!---->

                </div>


            </div>

        
        <div class="bouton">
            <button type="submit" name="add" class="btn btn-primary">Ajouter au panier</button>
        </div>

    </form>



    </body>
</html><?php }
}
