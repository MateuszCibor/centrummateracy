<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:25
  from 'module:iqitsearchviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f6929f9c4_21273743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a3038780284d52e9fcd7a66e51e5b86a166106b' => 
    array (
      0 => 'module:iqitsearchviewstemplatesh',
      1 => 1607168843,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f6929f9c4_21273743 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Block search module TOP -->
<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="input-group">
        <input type="text" name="s" value=""
               placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"
               data-all-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show all results','mod'=>'iqitsearch'),$_smarty_tpl ) );?>
"
               data-blog-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog post','mod'=>'iqitsearch'),$_smarty_tpl ) );?>
"
               data-product-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product','mod'=>'iqitsearch'),$_smarty_tpl ) );?>
"
               data-brands-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','mod'=>'iqitsearch'),$_smarty_tpl ) );?>
"
               class="form-control form-search-control">
        <button type="submit" class="search-btn">
            <i class="fa fa-search"></i>
        </button>
    </div>
</form>
<!-- /Block search module TOP -->

<?php }
}
