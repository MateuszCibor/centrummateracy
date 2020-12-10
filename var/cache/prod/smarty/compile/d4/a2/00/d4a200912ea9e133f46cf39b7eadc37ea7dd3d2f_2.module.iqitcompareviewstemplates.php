<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:47:22
  from 'module:iqitcompareviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f2ae7b443_11786618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4a200912ea9e133f46cf39b7eadc37ea7dd3d2f' => 
    array (
      0 => 'module:iqitcompareviewstemplates',
      1 => 1607168843,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f2ae7b443_11786618 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['update']->value) {?>
<div id="iqitcompare-notification" class="ns-box ns-effect-thumbslider ns-text-only">
    <div class="ns-box-inner">
        <div class="ns-content">
            <span class="ns-title"><i class="fa fa-check" aria-hidden="true"></i> <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product added to compare.','mod'=>'iqitcompare'),$_smarty_tpl ) );?>
</strong></span>
        </div>
    </div>
</div>
<?php }?>


<?php if (!$_smarty_tpl->tpl_vars['comparePage']->value) {?>
<div id="iqitcompare-floating-wrapper">
<?php if ($_smarty_tpl->tpl_vars['compareProductsNb']->value) {?>
<div id="iqitcompare-floating" class="">
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitcompare','controller'=>'comparator'),$_smarty_tpl ) );?>
">
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','mod'=>'iqitcompare'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['compareProductsNb']->value, ENT_QUOTES, 'UTF-8');?>
) </span>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['covers']->value, 'cover', false, 'myId', 'compareCovers', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['myId']->value => $_smarty_tpl->tpl_vars['cover']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_compareCovers']->value['index']++;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_compareCovers']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_compareCovers']->value['index'] : null) < 6) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['cover']->value;?>
" class="img-fluid" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['myId']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php } else { ?>
                <span>...</span>
                <?php break 1;?>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </a>
</div>
<?php }?>
</div>
<?php }?>


<?php }
}
