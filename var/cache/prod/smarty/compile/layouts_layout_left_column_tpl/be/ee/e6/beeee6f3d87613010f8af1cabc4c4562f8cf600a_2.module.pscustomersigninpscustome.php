<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:25
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f692a21b5_87798236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beeee6f3d87613010f8af1cabc4c4562f8cf600a' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1607168843,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f692a21b5_87798236 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['logged']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer']->value['firstname'],15,'...' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>

<?php }
}
