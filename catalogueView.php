<?php
$title = 'Un titre pour ma page';

ob_start();
displayCat($myCatalogue, $page);
$content = ob_get_clean();

require ("template.php");
