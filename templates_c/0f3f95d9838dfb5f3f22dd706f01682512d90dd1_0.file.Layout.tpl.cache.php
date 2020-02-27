<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-27 14:27:42
  from 'C:\wamp64\www\boutiquePOO\MVC\View\Shared\Layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e57d1dee96248_46508472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f3f95d9838dfb5f3f22dd706f01682512d90dd1' => 
    array (
      0 => 'C:\\wamp64\\www\\boutiquePOO\\MVC\\View\\Shared\\Layout.tpl',
      1 => 1582810904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e57d1dee96248_46508472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '10914222835e57d1dee0c817_81782865';
?>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8250512765e57d1dee8a4d8_42412571', 'title');
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

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18953192225e57d1dee921e5_09702751', 'content');
?>


    </body>
</html><?php }
/* {block 'title'} */
class Block_8250512765e57d1dee8a4d8_42412571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8250512765e57d1dee8a4d8_42412571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_18953192225e57d1dee921e5_09702751 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18953192225e57d1dee921e5_09702751',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
