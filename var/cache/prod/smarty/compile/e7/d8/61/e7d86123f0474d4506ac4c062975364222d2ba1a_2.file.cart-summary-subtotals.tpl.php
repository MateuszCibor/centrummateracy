<?php
/* Smarty version 3.1.33, created on 2020-12-10 21:04:07
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/checkout/_partials/cart-summary-subtotals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd27f375f3ee3_95431535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7d86123f0474d4506ac4c062975364222d2ba1a' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/checkout/_partials/cart-summary-subtotals.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd27f375f3ee3_95431535 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card-block cart-summary-subtotals-container">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['subtotal']->value && $_smarty_tpl->tpl_vars['subtotal']->value['type'] !== 'tax') {?>
            <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
                <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['type'] === 'discount') {?>
                    <span class="value">-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php } else { ?>
                    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
            </div>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
<?php }
}
