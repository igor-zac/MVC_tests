<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-28 13:48:18
  from 'C:\wamp64\www\boutiquePOO\MVC\View\Shared\Layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e591a2235f9a0_94824565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f3f95d9838dfb5f3f22dd706f01682512d90dd1' => 
    array (
      0 => 'C:\\wamp64\\www\\boutiquePOO\\MVC\\View\\Shared\\Layout.tpl',
      1 => 1582897697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e591a2235f9a0_94824565 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '186291385e591a223488a2_19064583';
?>
<!doctype html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9149676475e591a22358d92_61870203', 'title');
?>
</title>
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

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15665969505e591a2235e389_70717391', 'content');
?>


    </body>
</html><?php }
/* {block 'title'} */
class Block_9149676475e591a22358d92_61870203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9149676475e591a22358d92_61870203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_15665969505e591a2235e389_70717391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15665969505e591a2235e389_70717391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
