<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:07
  from '/home/legion/serwerphp/centrummateracy/modules/psproductcountdown/views/templates/hook/psproductcountdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f576e3f39_03964127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d2bc5bf94c1545861bb7aee907ec1c85f4b7ea3' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/modules/psproductcountdown/views/templates/hook/psproductcountdown.tpl',
      1 => 1607251391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f576e3f39_03964127 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="psproductcountdown buttons_bottom_block pspc-inactive" data-to="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['countdown']->value['to_time'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <div class="pspc-main days-diff-<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['days_diff']->value), ENT_QUOTES, 'UTF-8');?>
 weeks-diff-<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['weeks_diff']->value), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['weeks_diff']->value == 0 && $_smarty_tpl->tpl_vars['hide_zero_weeks']->value) {?>hide_zero_weeks<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['countdown']->value['name']) {?><h4><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['countdown']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4><?php }?>
    </div>
    <input type="hidden" class="pspc-checker">
</div><?php }
}
