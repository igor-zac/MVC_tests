<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="styles.css">

    </head>
    <body>
        <?php include("header.php"); ?>
        <form action="panier.php" method="GET" class="block">
            <?= $content ?>
        </form>
    </body>
</html>