<?php
/* Smarty version 3.1.33, created on 2020-12-10 20:17:36
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd2745018ca48_81436755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eec70addecb887414b5ae8c2bbccf94ae16b8e90' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/product-flags.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd2745018ca48_81436755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3130382805fd2745018b755_23915044', 'product_flags');
}
/* {block 'product_flags'} */
class Block_3130382805fd2745018b755_23915044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_3130382805fd2745018b755_23915044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
