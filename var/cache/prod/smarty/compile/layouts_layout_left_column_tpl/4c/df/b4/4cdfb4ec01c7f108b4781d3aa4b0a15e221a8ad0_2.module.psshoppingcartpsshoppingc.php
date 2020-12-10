<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:25
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f692740f7_78589572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cdfb4ec01c7f108b4781d3aa4b0a15e221a8ad0' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1607168843,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f692740f7_78589572 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row no-gutters align-items-center">
    <div class="col-3">
        <span class="product-image media-middle">
      <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?> <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                                        alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'quotes' )), ENT_QUOTES, 'UTF-8');?>
"
                                                        class="img-fluid"></a><?php }?>
</span>
    </div>
    <div class="col col-info">
        <div class="pb-1">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
        </div>

        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes']) && $_smarty_tpl->tpl_vars['product']->value['attributes']) {?>
            <div class="product-attributes text-muted pb-1">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'value', false, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <div class="product-line-info">
                        <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
:</span>
                        <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>

        <div class="row align-items-center mt-2 no-gutters">
            <div class="col mr-2">
                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_gift']) && $_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
                    <input
                            class="form-control block-cart-product-quantity-gift"
                            type="number"
                            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
                            disabled
                    />
                <?php } else { ?>
                    <input
                            class="block-cart-product-quantity form-control js-cart-line-product-quantity"
                            data-down-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['down_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
                            data-up-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['up_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
                            data-update-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['update_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
                            data-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
                            data-link-place="cart-preview"
                            type="number"
                            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
                            name="product-quantity-spin"
                            min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
                    />
                <?php }?>
            </div>
            <div class="col">
                <span class="text-muted">x</span> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
            </div>

            <div class="col col-auto">
                <a class="remove-from-cart"
                   rel="nofollow"
                   href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
                   data-link-action="delete-from-cart"
                   data-link-place="cart-preview"
                   data-id-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
                   data-id-product-attribute="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
                   data-id-customization="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
                   title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                >
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                </a>
            </div>

        </div>

    </div>
</div>


<?php }
}
