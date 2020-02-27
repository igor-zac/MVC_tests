<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>{block name=title}{/block}</title>
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
                    <a class="nav-link" href="">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Catalogue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Mon panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Vider le panier</a>
                </li>
            </ul>
        </nav>

                {block name=content}{/block}

    </body>
</html>