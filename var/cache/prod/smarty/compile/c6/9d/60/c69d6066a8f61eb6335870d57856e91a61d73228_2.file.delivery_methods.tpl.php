<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:47:27
  from '/home/legion/serwerphp/centrummateracy/modules/supercheckout/views/templates/front/delivery_methods.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f2f3a1743_61020193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c69d6066a8f61eb6335870d57856e91a61d73228' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/modules/supercheckout/views/templates/front/delivery_methods.tpl',
      1 => 1607622422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f2f3a1743_61020193 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['settings']->value['hide_ship_pay']) && $_smarty_tpl->tpl_vars['settings']->value['hide_ship_pay'] == 1 && $_smarty_tpl->tpl_vars['address_selector']->value == 'new') {?>
    <span class="permanent-warning" style="display: inline-block;"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save your address first in order to check actual shipping methods & cost','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 </span>
<?php } else { ?>
<div class="velsof_sc_overlay"></div>
<?php if (isset($_smarty_tpl->tpl_vars['is_virtual_cart']->value) && $_smarty_tpl->tpl_vars['is_virtual_cart']->value) {?>
    <input id="input_virtual_carrier" class="hidden" type="hidden" name="id_carrier" value="0" />
    <div class="supercheckout-checkout-content" style="display:block">
        <div class="not-required-msg" style="display: block;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Delivery Method Required','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
    </div>
<?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars['shipping_errors']->value) && is_array($_smarty_tpl->tpl_vars['shipping_errors']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping_errors']->value, 'shippig_error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['shippig_error']->value) {
?>
            <div class="supercheckout-checkout-content" style="display:block">
                <div class="permanent-warning" style="display: block;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shippig_error']->value, ENT_QUOTES, 'UTF-8');?>
</div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <div class="supercheckout-checkout-content" style="display:block"></div>
        <div id="hook-display-before-carrier">
            <?php echo $_smarty_tpl->tpl_vars['hookDisplayBeforeCarrier']->value;?>
        </div>
        <?php if (count($_smarty_tpl->tpl_vars['delivery_options']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('selected', 0);?>
            <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['delivery_options']->value, 'carrier', false, 'carrier_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['carrier_id']->value => $_smarty_tpl->tpl_vars['carrier']->value) {
?>
                
                <li class="highlight">
                    <div class="radio ">
                    <?php if (!empty($_smarty_tpl->tpl_vars['delivery_option']->value) && $_smarty_tpl->tpl_vars['delivery_option']->value == $_smarty_tpl->tpl_vars['carrier_id']->value && $_smarty_tpl->tpl_vars['selected']->value == 0) {?>
                                                       <input class='supercheckout_shipping_option delivery_option_radio' type="radio" name="delivery_option[<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_address']->value), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->tpl_vars['carrier_id']->value;?>
" id="shipping_method_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_address']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['carrier']->value['id']), ENT_QUOTES, 'UTF-8');?>
" checked="checked" />
                                <?php $_smarty_tpl->_assignInScope('selected', 1);?>
                            <?php } elseif (isset($_smarty_tpl->tpl_vars['default_shipping_method']->value) && $_smarty_tpl->tpl_vars['carrier']->value['id'] == $_smarty_tpl->tpl_vars['default_shipping_method']->value && $_smarty_tpl->tpl_vars['selected']->value == 0) {?>
                                                                        <input class='supercheckout_shipping_option delivery_option_radio' type="radio" name="delivery_option[<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_address']->value), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->tpl_vars['carrier_id']->value;?>
" id="shipping_method_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_address']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['carrier']->value['id']), ENT_QUOTES, 'UTF-8');?>
" checked="checked" />
                                    <?php } else { ?>
                                                                                       <input class='supercheckout_shipping_option delivery_option_radio' type="radio" name="delivery_option[<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_address']->value), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->tpl_vars['carrier_id']->value;?>
" id="shipping_method_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_address']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['carrier']->value['id']), ENT_QUOTES, 'UTF-8');?>
" />
                                            <?php }?>

                                            <label for="shipping_method_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_address']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['carrier']->value['id']), ENT_QUOTES, 'UTF-8');?>
">
                                                <?php if ($_smarty_tpl->tpl_vars['display_carrier_style']->value != 0) {?>
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['logo'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['carrier']->value['logo_width']) && $_smarty_tpl->tpl_vars['carrier']->value['logo_width'] != '' && $_smarty_tpl->tpl_vars['carrier']->value['logo_width'] != 'auto') {?>width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['logo_width'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>width='50'<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['carrier']->value['logo_height']) && $_smarty_tpl->tpl_vars['carrier']->value['logo_height'] != '' && $_smarty_tpl->tpl_vars['carrier']->value['logo_height'] != "auto") {?>height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['logo_height'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>/><?php if ($_smarty_tpl->tpl_vars['display_carrier_style']->value != 2) {
}?>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['display_carrier_style']->value != 2) {?>
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8');?>
                                                       
                                                <?php }?>
                                                <span class="supercheckout-shipping-small-title shippingPrice"><?php echo $_smarty_tpl->tpl_vars['carrier']->value['price'];?>
</span></label>                                            <p class="shippingInfo supercheckout-shipping-small-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['delay'], ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>
                                    </li>
                                       
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                   </ul>
                                <?php } else { ?>
                                    <div class="supercheckout-checkout-content" style="display:block">
                                        <div class="permanent-warning" style="display: block;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Delivery Method Available','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                                    </div>
                                <?php }?>
                                <div id="hook-display-after-carrier">
                                    <?php echo $_smarty_tpl->tpl_vars['hookDisplayAfterCarrier']->value;?>
                                </div>
                            <?php }?>
                        <?php }
}?>
                        <?php }
}
