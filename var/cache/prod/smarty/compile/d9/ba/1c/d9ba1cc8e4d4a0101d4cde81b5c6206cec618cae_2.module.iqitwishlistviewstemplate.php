<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:47:22
  from 'module:iqitwishlistviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f2adbd979_17715465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9ba1cc8e4d4a0101d4cde81b5c6206cec618cae' => 
    array (
      0 => 'module:iqitwishlistviewstemplate',
      1 => 1607168843,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f2adbd979_17715465 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'])) {?>
    <div class="col col-sm-auto">
        <button type="button" data-toggle="tooltip" data-placement="top"  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to wishlist','mod'=>'iqitwishlist'),$_smarty_tpl ) );?>
"
           class="btn btn-secondary btn-lg btn-iconic btn-iqitwishlist-add js-iqitwishlist-add" data-animation="false" id="iqit-wishlist-product-btn"
           data-id-product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
"
           data-id-product-attribute="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
"
           data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitwishlist','controller'=>'actions'),$_smarty_tpl ) );?>
">
            <i class="fa fa-heart-o not-added" aria-hidden="true"></i> <i class="fa fa-heart added"
                                                                          aria-hidden="true"></i>
        </button>
    </div>
<?php }
}
}
