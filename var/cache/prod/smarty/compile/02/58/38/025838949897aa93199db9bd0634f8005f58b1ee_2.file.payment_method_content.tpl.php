<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:47:28
  from '/home/legion/serwerphp/centrummateracy/modules/supercheckout/views/templates/front/payment_method_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f30081a23_42931504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '025838949897aa93199db9bd0634f8005f58b1ee' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/modules/supercheckout/views/templates/front/payment_method_content.tpl',
      1 => 1607622422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f30081a23_42931504 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="supercheckout-blocks js-additional-information definition-list additional-information">
    <?php echo $_smarty_tpl->tpl_vars['payment_method_content']->value['additionalInformation'];?>
</div>
<div id="pay-with-form">
    <?php if ($_smarty_tpl->tpl_vars['payment_method_content']->value['form']) {?>
        <?php echo $_smarty_tpl->tpl_vars['payment_method_content']->value['form'];?>
    <?php } else { ?>
        <form id="payment-form" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['payment_method_content']->value['action'];?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_method_content']->value['inputs'], 'input');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['input']->value) {
?>
                <input type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['type'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['value'], ENT_QUOTES, 'UTF-8');?>
">
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <button style="display:none" id="pay-with-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method_content']->value['id'], ENT_QUOTES, 'UTF-8');?>
" type="submit"></button>
        </form>
    <?php }?>
</div>
<?php }
}
