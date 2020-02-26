<header>
    <h1>Nom de la boutique</h1>
</header>
<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-right justify-content-end">
    <ul class="navbar-nav">
        <li class="nav-item
        <?php //checkActivePage('clients.php'); ?>">
            <a class="nav-link" href="clients.php">Clients</a>
        </li>
        <li class="nav-item
        <?php //checkActivePage('catalogue.php'); ?>">
            <a class="nav-link" href="catalogue.php">Catalogue</a>
        </li>
        <li class="nav-item
        <?php //checkActivePage('panier.php'); ?> ">
            <a class="nav-link" href="panier.php">Mon panier</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="panier.php?empty_cart=">Vider le panier</a>
            <!--            Renvoie sur le panier en passant par une requete GET avec le champ empty_cart -->
        </li>
    </ul>
</nav>
