<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:49:21
  from '/home/legion/serwerphp/centrummateracy/psadmin/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25fa11645c8_49018920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '361cd53786e6dc113043c3b8a53f277201b55ac4' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/psadmin/themes/default/template/content.tpl',
      1 => 1605521391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25fa11645c8_49018920 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
