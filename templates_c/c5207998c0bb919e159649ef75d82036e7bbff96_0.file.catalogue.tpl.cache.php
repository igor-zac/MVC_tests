<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-27 15:35:50
  from 'C:\wamp64\www\boutiquePOO\MVC\View\Catalogue\catalogue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e57e1d642f698_75673276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5207998c0bb919e159649ef75d82036e7bbff96' => 
    array (
      0 => 'C:\\wamp64\\www\\boutiquePOO\\MVC\\View\\Catalogue\\catalogue.tpl',
      1 => 1582817749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e57e1d642f698_75673276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '5483925565e57e1d63ca275_58563872';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9914842495e57e1d63ee528_97068318', 'title');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19349130545e57e1d63f9910_33903892', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../Shared/Layout.tpl');
}
/* {block 'title'} */
class Block_9914842495e57e1d63ee528_97068318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9914842495e57e1d63ee528_97068318',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Un titre pour ma page<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_19349130545e57e1d63f9910_33903892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19349130545e57e1d63f9910_33903892',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <form action="panier.php" method="GET" class="block">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalogue']->value, 'article', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['article']->value) {
?>
            <div class="article">
                <div>
                    <img class="image_article" src="Content/img/<?php echo $_smarty_tpl->tpl_vars['article']->value->getImage();?>
" alt="L'image de mon article">
                </div>

                <div class="infosArticles">
                    <p class="nomArticle"><?php echo $_smarty_tpl->tpl_vars['article']->value->getNom();?>
</p>
                    <p class="poidsArticle">Poids : <?php echo $_smarty_tpl->tpl_vars['article']->value->getPoids()/1000;?>
 kg</p>


                </div>

                <div class="prix">
                    <p><?php echo $_smarty_tpl->tpl_vars['article']->value->getPrix()/100;?>
 €</p>
                </div>


                <div class="check">
                    <input type="checkbox" name="articles[]" value="<?php echo $_smarty_tpl->tpl_vars['article']->value->getId();?>
">
                    <!---->

                </div>


            </div>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <div class="bouton">
            <button type="submit" name="add" class="btn btn-primary">Ajouter au panier</button>
        </div>

    </form>

<?php
}
}
/* {/block 'content'} */
}
