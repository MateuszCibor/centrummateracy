<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:47:22
  from '/home/legion/serwerphp/centrummateracy/modules/psproductcountdown/views/templates/hook/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f2ab61362_73259616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '057737a1f8475c54f95c8dee89a33fad9b1cffa0' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/modules/psproductcountdown/views/templates/hook/header.tpl',
      1 => 1607251391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f2ab61362_73259616 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- module psproductcountdown start -->
<?php echo '<script'; ?>
 type="text/javascript">
    <?php if ($_smarty_tpl->tpl_vars['show_weeks']->value) {?>
        var pspc_labels = ['weeks', 'days', 'hours', 'minutes', 'seconds'];
        var pspc_labels_lang = {
            'weeks': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'weeks','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
',
            'days': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'days','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
',
            'hours': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'hours','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
',
            'minutes': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'minutes','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
',
            'seconds': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'seconds','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
'
        };
    <?php } else { ?>
    var pspc_labels = ['days', 'hours', 'minutes', 'seconds'];
    var pspc_labels_lang = {
        'days': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'days','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
',
        'hours': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'hours','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
',
        'minutes': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'minutes','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
',
        'seconds': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'seconds','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
'
    };
    <?php }?>
    var pspc_show_weeks = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['show_weeks']->value), ENT_QUOTES, 'UTF-8');?>
;
    var pspc_psv = <?php echo htmlspecialchars(floatval($_smarty_tpl->tpl_vars['psv']->value), ENT_QUOTES, 'UTF-8');?>
;
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['custom_css']->value) {?>
    <style type="text/css">
        <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['custom_css']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

    </style>
<?php }?>
<!-- module psproductcountdown end --><?php }
}
