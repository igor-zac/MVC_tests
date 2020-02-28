{extends file='../Shared/Layout.tpl'}


{block name=title}Un titre pour ma page{/block}


{block name=content}

    <form action="index.php?action=cart" method="get" class="block">

        {if $display}

            {foreach from=$cart->getProducts() key=key item=article}

                <div class="article">
                    <div>
                        <img class="image_article" src="Content/img/{$article->getNomImage()}" alt="L'image de mon article">
                    </div>

                    <div class="infosArticles">
                        <p class="nomArticle">{$article->getNom()}</p>
                        <p class="poidsArticle">Poids : {$article->getPoids()} kg</p>
                    </div>

                    <div class="prix">
                        <p>{$article->getPrix()} €</p>
                    </div>


                    <div class="quantities d-flex flex-column">
                        <div class="d-flex flex-column">
                            <div class="quantity d-flex flex-row">
                                <label>Quantité :
                                    <input type="number" name="quantites[{$article->getId()}]" value="{$article->getQuantite}">
                                </label>
                            </div>
                            <!--<p class="error"> </p>-->

                        </div>

                        <button type="submit" name="update" value="{$article->getId()}" class="btn btn-secondary mb-1">Recalculer</button>

                        <button type="submit" name="delete" value="{$article->getId()}" class="btn btn-danger">Supprimer
                        </button>
                    </div>

                </div>

            {/foreach}

            <p class="total"><strong>Total :</strong> {$cart->getTotal|string_format:"%.2f"} €</p>
            <!--            <p class="total"><strong>Frais de port :</strong>  €</p>-->
            <!--            <p class="total"><strong>Total commande :</strong> €</p>-->

            <div class="bouton">
                <a class="btn btn-primary" href="infosClient.php">Continuer</a>
            </div>

        {else}

            <p>Le panier est vide</p>

        {/if}

    </form>

{/block}