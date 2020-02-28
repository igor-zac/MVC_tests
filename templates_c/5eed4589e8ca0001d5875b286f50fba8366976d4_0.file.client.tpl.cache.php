<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-28 14:24:09
  from 'C:\wamp64\www\boutiquePOO\MVC\View\Client\client.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e59228916d2f9_61576064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5eed4589e8ca0001d5875b286f50fba8366976d4' => 
    array (
      0 => 'C:\\wamp64\\www\\boutiquePOO\\MVC\\View\\Client\\client.tpl',
      1 => 1582876153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e59228916d2f9_61576064 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '1700969185e5922890718f6_15478720';
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7440226815e59228911fd40_63464142', 'title');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1605904715e5922891287e8_02425379', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../Shared/Layout.tpl');
}
/* {block 'title'} */
class Block_7440226815e59228911fd40_63464142 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7440226815e59228911fd40_63464142',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Un titre pour ma page<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_1605904715e5922891287e8_02425379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1605904715e5922891287e8_02425379',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">Adresse</th>
            <th scope="col">Code Postal</th>
            <th scope="col">Ville</th>
        </tr>
        </thead>
        <tbody>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getPrenom();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getNom();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getAdresse();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getCP();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value->getVille();?>
</td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

<?php
}
}
/* {/block 'content'} */
}
