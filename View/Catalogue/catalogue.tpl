{extends file='../Shared/Layout.tpl'}


{block name=title}Un titre pour ma page{/block}


{block name=content}

    <form action="panier.php" method="GET" class="block">

        {foreach from=$catalogue key=key item=article}
            <div class="article">
                <div>
                    <img class="image_article" src="Content/img/{$article->getImage()}" alt="L'image de mon article">
                </div>

                <div class="infosArticles">
                    <p class="nomArticle">{$article->getNom()}</p>
                    <p class="poidsArticle">Poids : {$article->getPoids()/1000} kg</p>

{*            {if (get_class($article) == 'Chaussure'){*}
{*                $article->afficherPointures();*}
{*                    } elseif (get_class($article) == 'Vetement'){*}
{*                    $article->afficherTailles();*}
{*                    }*}
{*                    ?>*}

                </div>

                <div class="prix">
                    <p>{$article->getPrix()/100} €</p>
                </div>


                <div class="check">
                    <input type="checkbox" name="articles[]" value="{$article->getId()}">
                    <!---->

                </div>


            </div>

        {/foreach}

        <div class="bouton">
            <button type="submit" name="add" class="btn btn-primary">Ajouter au panier</button>
        </div>

    </form>

{/block}