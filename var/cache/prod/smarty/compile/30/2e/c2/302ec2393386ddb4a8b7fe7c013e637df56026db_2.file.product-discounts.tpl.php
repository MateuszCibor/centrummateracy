<?php
/* Smarty version 3.1.33, created on 2020-12-10 20:41:52
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/product-discounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd27a004527f5_58916987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '302ec2393386ddb4a8b7fe7c013e637df56026db' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/product-discounts.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd27a004527f5_58916987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section class="product-discounts mb-3">
<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_discounts']) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9848871975fd27a0044f612_95883644', 'product_discount_table');
?>

    <?php }?>
</section>

<?php }
/* {block 'product_discount_table'} */
class Block_9848871975fd27a0044f612_95883644 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_discount_table' => 
  array (
    0 => 'Block_9848871975fd27a0044f612_95883644',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <table class="table table-bordered table-product-discounts">
        <thead>
        <tr>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</th>
          <th><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configuration']->value['quantity_discount']['label'], ENT_QUOTES, 'UTF-8');?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You Save','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['quantity_discounts'], 'quantity_discount', false, NULL, 'quantity_discounts', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->value) {
?>
          <tr data-discount-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'], ENT_QUOTES, 'UTF-8');?>
" data-discount="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'], ENT_QUOTES, 'UTF-8');?>
" data-discount-quantity="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
">
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['discount'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Up to %discount%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%discount%'=>$_smarty_tpl->tpl_vars['quantity_discount']->value['save'])),$_smarty_tpl ) );?>
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
/* {/block 'product_discount_table'} */
}
