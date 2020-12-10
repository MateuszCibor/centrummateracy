<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:47:27
  from '/home/legion/serwerphp/centrummateracy/modules/supercheckout/views/templates/front/cart_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f2fa75317_48125270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9d87369c778b140daaee20106e4df9f3226e984' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/modules/supercheckout/views/templates/front/cart_summary.tpl',
      1 => 1607622422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f2fa75317_48125270 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var subtotal_msg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subtotal','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var shipping_msg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var taxex_msg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Taxes','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
<?php echo '</script'; ?>
>
<div class="velsof_sc_overlay"></div>
<div class="table-responsive">
    <table class="supercheckout-summary table table-bordered shoppingTable">
        <!-- <thead>
             <tr>                                
                 <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                 <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-model"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Model','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
        <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_availability']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_availability']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-qty" style="text-align:center;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
        <?php }?>
                <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-qty" style="text-align:center;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
        <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
        <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
        <th class="supercheckout-qty"></th>
    </tr>
</thead> -->
        <tbody>
            <?php $_smarty_tpl->_assignInScope('image_display', 0);?>
            <?php $_smarty_tpl->_assignInScope('odd', 0);?>
            <?php $_smarty_tpl->_assignInScope('have_non_virtual_products', false);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_virtual'] == 0) {?>
                    <?php $_smarty_tpl->_assignInScope('have_non_virtual_products', true);?>
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('productId', $_smarty_tpl->tpl_vars['product']->value['id_product']);?>
                <?php $_smarty_tpl->_assignInScope('product_url', $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']));?>
                <?php $_smarty_tpl->_assignInScope('productAttributeId', $_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
                <?php $_smarty_tpl->_assignInScope('odd', ($_smarty_tpl->tpl_vars['odd']->value+1)%2);?>

                <tr id="product_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('image_display', $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_image']['logged']['display']);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('image_display', $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_image']['guest']['display']);?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['image_display']->value == 1) {?>
                        <td>
                            <img class="product_img" width='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['width'], ENT_QUOTES, 'UTF-8');?>
' height='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['height'], ENT_QUOTES, 'UTF-8');?>
' src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'],'quotes' )), ENT_QUOTES, 'UTF-8');?>
" alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
' onclick="showEnlargedImage(this)"/>
                        </td>
                    <?php }?>
                    <td class="supercheckout-name text-left td-product" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;">
                        <?php if ($_smarty_tpl->tpl_vars['image_display']->value == 1) {?>
                            <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_url']->value,'quotes' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                        <?php } else { ?>
                            <a data-toggle="popover" data-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" data-content="<img width='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['width'], ENT_QUOTES, 'UTF-8');?>
' height='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['height'], ENT_QUOTES, 'UTF-8');?>
' src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8');?>
' alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
' onclick='showEnlargedImage(this)' />" data-placement="right" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_url']->value,'quotes' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                        <?php }?>

                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes']) && count($_smarty_tpl->tpl_vars['product']->value['attributes']) > 0) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'value', false, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                                <p> <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
: </b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</p>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                        <p style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-model"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Model','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:</b> <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');
}?></p>
                        <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
                            <p style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_availability']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_availability']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:</b> <span class="badge badge-success">
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_available'] <= 0) {?>
                                        <span class="kblabel<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_available'] <= 0 && isset($_smarty_tpl->tpl_vars['product']->value['allow_oosp']) && !$_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?> label-danger<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['quantity_available'] <= 0) {?> label-warning<?php } else { ?> label-success<?php }?>">
                                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['allow_oosp']) && $_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?>
                                                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_later']) && $_smarty_tpl->tpl_vars['product']->value['available_later']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['available_later'], ENT_QUOTES, 'UTF-8');?>

                                                <?php } else { ?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                                <?php }?>

                                            <?php } else { ?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                            <?php }?>
                                        </span>
                                    <?php } else { ?>

                                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_now']) && $_smarty_tpl->tpl_vars['product']->value['available_now']) {?>
                                            <span class="kblabel label-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['stock_quantity'] < $_smarty_tpl->tpl_vars['product']->value['quantity']) {?>
                                            <span class="kblabel label-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                        <?php } else { ?>
                                            <span class="kblabel label-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                                        <?php }?>
                                    <?php }?>
                                </span></p>
                            <?php }?>
                            <?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                                        <p style="max-width: 268px;">
                                        <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
:</b>
                                        <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                                            <?php if ((int)$_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>
                                            <?php } else { ?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                                            <?php }?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?>
                                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" onclick="showEnlargedImage(this)" style="width: 29%;height: auto;">
                                        <?php }?>    
                                    </p>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </td>
                    <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-qty supercheckout-product-qty-input" >
                        <div class="input-group">
                            <input type="hidden" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['quantity']), ENT_QUOTES, 'UTF-8');?>
" name="quantity_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
_hidden" />
                                                        <input type='hidden' name="quantity_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
_minqty" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']), ENT_QUOTES, 'UTF-8');?>
">
                                                        <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['qty_update_option']) && $_smarty_tpl->tpl_vars['settings']->value['qty_update_option'] == 0) {?>
                                 <span class="input-group-btn">
                                    <button type="button" class="cart_quantity_down qty-btn increase_button quantity-left-minus btn btn-primary btn-number" onclick="upQty('quantity_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
')"  data-type="minus" data-field="">
                                        <span class="fas fa-chevron-up"></span>
                                    </button>
                                </span>                                
                                <input min="1" max="100" autocomplete="off" type="text" id="quantity" class="form-control input-number quantitybox" name="quantity_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['quantity']), ENT_QUOTES, 'UTF-8');?>
">
                                <span class="input-group-btn">
                                    <button type="button" class="cart_quantity_down qty-btn decrease_button quantity-right-plus btn btn-primary btn-number" data-type="plus" data-field="" onclick="downQty('quantity_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
')">
                                        <span class="fas fa-chevron-down"></span>
                                    </button>
                                </span>
                                
                            <?php } else { ?>
                                <input min="1" max="100" autocomplete="off" type="text" id="quantity" class="form-control input-number quantitybox" name="quantity_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['quantity']), ENT_QUOTES, 'UTF-8');?>
">
                                <a href="javascript:void(0)" id="demo_2_s" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'update quantity','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" onclick="updateQtyByBtn('quantity_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
')" ><small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</small></a>    
                                    <?php }?>
                        </div>
                    </td>											
                    <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-unit-total text-right td-price">
                        <span class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['unit_price_full']) {?>
                            <div class="unit-price-cart"><?php echo $_smarty_tpl->tpl_vars['product']->value['unit_price_full'];?>
</div>
                        <?php }?></td>
                    <td id="total_product_price_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-total text-right td-total">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value['total'];?>
</td>	


                    <td class="supercheckout-qty" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['logged']['display'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['logged']['display'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['logged']['display'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['logged']['display'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['guest']['display'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['guest']['display'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['guest']['display'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['guest']['display'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;">
                        <span id="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
" onclick="deleteProductFromCart(this.id);" class="removeProduct supercheckout-product-delete delete_product"><i class="fas fa-times"></i></span></td>

                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<table class="supercheckout-totals table table-bordered totalTable">

    <tfoot>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subtotals']->value, 'subtotal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
?>

            <?php if (isset($_smarty_tpl->tpl_vars['subtotal']->value['value']) && $_smarty_tpl->tpl_vars['subtotal']->value['value']) {?>
                <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['type'] == 'products') {?>
                    <tr id="supercehckout_summary_total_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['product_sub_total']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['product_sub_total']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;">
                    <?php } elseif ($_smarty_tpl->tpl_vars['subtotal']->value['type'] == 'shipping') {?>
                    <tr id="supercehckout_summary_total_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['shipping_price']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['shipping_price']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;">
                    <?php } elseif ($_smarty_tpl->tpl_vars['subtotal']->value['type'] == 'tax') {?>
                    <tr id="supercehckout_summary_total_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['total_tax']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['total_tax']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;">
                    <?php } else { ?>
                    <tr id="supercehckout_summary_total_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php }?>
                    <td colspan="5" class="text-right title"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['subtotal']->value['label'],'mod'=>'supercheckout'),$_smarty_tpl ) );?>
: </strong></td>
                    <td class="value text-right"><span id="supercehckout_total_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
_value" class="price"><?php echo $_smarty_tpl->tpl_vars['subtotal']->value['value'];?>
</span></td>
                </tr>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tfoot>
</table>

<div class="custom-panel rewardsection">
    <?php if ($_smarty_tpl->tpl_vars['vouchers']->value['allowed']) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vouchers']->value['added'], 'voucher');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
?>
            <div style="margin-bottom: 1%;" id="cart_discount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['id_cart_rule'], ENT_QUOTES, 'UTF-8');?>
" class="cart_discount text-right" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['voucher']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['voucher']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;">

                <span style="float:left;"><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
</b></span><a href="javascript:void(0)" style="float: left;margin-left: 2%;" onclick="removeDiscount('<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['voucher']->value['id_cart_rule']), ENT_QUOTES, 'UTF-8');?>
')"><div title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Redeem','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" class="removeProduct"><i class="fas fa-trash"></i></div></a>
                <span class="price text-right"><?php echo $_smarty_tpl->tpl_vars['voucher']->value['reduction_formatted'];?>
</span>                            
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div class="rewardHeader" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['voucher']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['voucher']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;">
            <a href="javascript:void(0)" onclick="$('.rewardBody').toggle();"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Have a promo code?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 </a>
        </div>
        <div class="rewardBody" style="display:none">
            <!--h2>Coupon / Voucher / Reward</h2-->
            <div id="supercheckout_voucher_input_row" class="form-group form-coupon" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['voucher']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['voucher']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;">
                <!--label for="input-coupon" class="control-label">Enter your coupon here</label-->
                <div class="input-group" id="voucher-form">
                    <input type="hidden" value="1" name="submitDiscount">
                    <input name="discount_name" id="discount_name" type="text" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your coupon here','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" class="voucherText form-control"> 
                    <span class="input-group-btn"><button id="button-coupon" onClick="callCoupon();" type="button" data-loading-text="Loading..." class="btn btn-primary orangebuttonapply" style="min-height: 33px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</button>
                    </span>
                </div>								
            </div>
        </div>
    <?php } else { ?>
        <div id="supercheckout_voucher_input_row" style="display:none;"></div>
    <?php }?>
    <div class="totalAmount" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['total']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['total']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;">
        <h3>
            <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Amount','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Tax excl.)','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:
                <span id="total_price" class="price amountMoney"><?php echo $_smarty_tpl->tpl_vars['totals']->value['total']['value'];?>
</span>
                <input type="hidden" id="total_price_wfee" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['totals']->value['total']['value'], ENT_QUOTES, 'UTF-8');?>
"></td>
            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Amount','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Tax incl.)','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                <span id="total_price" class="price amountMoney"><?php echo $_smarty_tpl->tpl_vars['totals']->value['total']['value'];?>
</span>
                <input type="hidden" id="total_price_wfee" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['totals']->value['total']['value'], ENT_QUOTES, 'UTF-8');?>
">            <?php }?>
        </h3>
    </div><br>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['kb_free_shipping_percent']->value)) {?>
    <div class="" id="kb_cart_summary_free_shipping" style="display:none;">
                <?php if ($_smarty_tpl->tpl_vars['hidden_amount']->value == 0) {?>
                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Congratulations!! You have reached the minumum amount limit to get Free Shipping.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 </h3>
                <?php } else { ?>
                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Almost there, Add ','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['kb_free_shipping_amount']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' more to get Free Shipping','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                <?php }?>
                <div class="progress red">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                         aria-valuenow="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['kb_free_shipping_percent']->value, ENT_QUOTES, 'UTF-8');?>
" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['kb_free_shipping_percent']->value, ENT_QUOTES, 'UTF-8');?>
%">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['kb_free_shipping_percent']->value, ENT_QUOTES, 'UTF-8');?>
% <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Complete (success) ','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 
                    </div>
                </div>
        </div>
<?php }?>

<div id="highlighted_cart_rules">
    <?php if (count($_smarty_tpl->tpl_vars['other_available_vouchers']->value) > 0) {?>
        <p id="title" class="title-offers" style="font-weight: 600;color: black!important;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our exclusive offers','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:</p>
        <div id="display_cart_vouchers">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['other_available_vouchers']->value, 'voucher');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['voucher']->value['code'] != '') {?><span onclick="$('#discount_name').val('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8');?>
');
                        return false;" class="voucher_name" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8');?>
</span> - <?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
<br />
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <?php }?>
                    </div>

                    <!-- INSERT INTO #CART BLOCK -->
                    <!-- Start - Code to insert custom fields in cart block -->
                    <div class="div_custom_fields">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_fields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['position'] == 'cart_block') {?>
                                <div class="supercheckout-blocks form-group">
                                    <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "textbox") {?>
                                        <label class="cursor_help" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_help_text'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['required'] == "1") {?><span style="display:inline;" class="supercheckout-required">*</span><?php }?></label>
                                        <input type="text" name="custom_fields[field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['default_value'], ENT_QUOTES, 'UTF-8');?>
" class="supercheckout-large-field width_100 form-control">
                                        <span id="error_field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
" class="errorsmall_custom hidden_custom"></span>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "textarea") {?>
                                        <label class="cursor_help" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_help_text'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['required'] == "1") {?><span style="display:inline;" class="supercheckout-required">*</span><?php }?></label>
                                        <textarea name="custom_fields[field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
]" class="supercheckout-large-field width_100 form-control" style="width: 100%; height: 100px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['default_value'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                                        <span id="error_field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
" class="errorsmall_custom hidden_custom"></span>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "selectbox") {?>
                                        <label class="cursor_help" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_help_text'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['required'] == "1") {?><span style="display:inline;" class="supercheckout-required">*</span><?php }?></label>
                                        <select name="custom_fields[field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
]" class="supercheckout-large-field width_100 form-control">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'field_options');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field_options']->value) {
?>
                                                <option <?php if ($_smarty_tpl->tpl_vars['field_options']->value['default_value'] == $_smarty_tpl->tpl_vars['field_options']->value['option_value']) {?>selected<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_options']->value['option_value'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_options']->value['option_label'], ENT_QUOTES, 'UTF-8');?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                        <span id="error_field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
" class="errorsmall_custom hidden_custom"></span>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "radio") {?>
                                        <label class="cursor_help" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_help_text'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['required'] == "1") {?><span style="display:inline;" class="supercheckout-required">*</span><?php }?></label>
                                        <?php $_smarty_tpl->_assignInScope('radio_counter', 1);?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'field_options');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field_options']->value) {
?>
                                            <div class="supercheckout-extra-wrap">
                                                <div class="radio" id="uniform-field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
"><span>
                                                        <input type="radio" name="custom_fields[field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_options']->value['option_value'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field_options']->value['default_value'] == $_smarty_tpl->tpl_vars['field_options']->value['option_value']) {?>checked<?php }?>>
                                                        <label for="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_options']->value['option_label'], ENT_QUOTES, 'UTF-8');?>
</label>
                                                    </span></div>
                                                
                                            </div>
                                            <?php $_smarty_tpl->_assignInScope('radio_counter', $_smarty_tpl->tpl_vars['radio_counter']->value+1);?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <span id="error_field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
" class="errorsmall_custom hidden_custom"></span>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "checkbox") {?>
                                        <label class="cursor_help" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_help_text'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['required'] == "1") {?><span style="display:inline;" class="supercheckout-required">*</span><?php }?></label>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'field_options');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field_options']->value) {
?>
                                            <div class="input-box input-field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
">
                                                <div class="checker checkbox" id="uniform-field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
">
                                                    <span class="checked">
                                                        <input <?php if ($_smarty_tpl->tpl_vars['field_options']->value['default_value'] == $_smarty_tpl->tpl_vars['field_options']->value['option_value']) {?>checked<?php }?> type="checkbox" name="custom_fields[field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_options']->value['option_value'], ENT_QUOTES, 'UTF-8');?>
">
                                                        <label for="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
"><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_options']->value['option_label'], ENT_QUOTES, 'UTF-8');?>
</b></label>
                                                    </span>
                                                </div>
                                                
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <span id="error_field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
" class="errorsmall_custom hidden_custom"></span>
                                    <?php }?>

                                                                        <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "date") {?>                         
                                        <label class="cursor_help" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_help_text'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['required'] == "1") {?><span style="display:inline;" class="supercheckout-required">*</span><?php }?></label>
                                        <input style="position: relative;" type="text" id="" name="custom_fields[field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['default_value'], ENT_QUOTES, 'UTF-8');?>
" class="supercheckout-large-field width_100 kb_sc_custom_field_date form-control" readonly="true">
                                        <span id="error_field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
" class="errorsmall_custom hidden_custom"></span>
                                        <?php if (isset($_smarty_tpl->tpl_vars['field']->value['validation_type']) && $_smarty_tpl->tpl_vars['field']->value['validation_type'] == 'isDate') {?>
                                            <span style="color:#999999">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date format is Y-m-d','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                            </span>
                                        <?php }?>
                                    <?php }?>
                                    
                                                                        <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "file") {?>                         
                                        <label class="cursor_help" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_help_text'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['required'] == "1") {?><span style="display:inline;" class="supercheckout-required">*</span><?php }?></label>
                                        <input type="file" data-buttonText="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose file','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="kb_sc_custom_field_file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
" name="custom_fields[field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['default_value'], ENT_QUOTES, 'UTF-8');?>
" class="supercheckout-large-field width_100 kbfiletype form-control">
                                        <span id="error_field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
" class="errorsmall_custom hidden_custom"></span>
                                        <?php if (isset($_smarty_tpl->tpl_vars['field']->value['validation_type']) && $_smarty_tpl->tpl_vars['field']->value['validation_type'] == 'isFile') {?>
                                            <span style="color:#999999">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Supported file formats are PDF, JPEG, PNG, DOCX, CSV & GIF.','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                            </span>
                                        <?php }?>
                                    <?php }?>
                                                                    </div>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <!-- End - Code to insert custom fields in registration form block -->

                    <?php }
}
