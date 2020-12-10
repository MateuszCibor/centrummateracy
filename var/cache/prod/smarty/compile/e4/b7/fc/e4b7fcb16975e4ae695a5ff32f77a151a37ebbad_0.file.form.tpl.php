<?php
/* Smarty version 3.1.33, created on 2020-12-10 20:09:25
  from '/home/legion/serwerphp/centrummateracy/modules/iqitelementor/views/templates/admin/iqitelementor/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd272652d2fa7_74473854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4b7fcb16975e4ae695a5ff32f77a151a37ebbad' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/modules/iqitelementor/views/templates/admin/iqitelementor/helpers/form/form.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd272652d2fa7_74473854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3379702755fd272652cb945_67985592', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_3379702755fd272652cb945_67985592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_3379702755fd272652cb945_67985592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'elementor_trigger') {?>

        <div class="form-group">
            <label class="control-label col-lg-3"></label>
            <div class="col-lg-9">
                <?php if ($_smarty_tpl->tpl_vars['input']->value['url']) {?>
                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['url'],'html','UTF-8' ));?>
" class="m-b-2 m-r-1 btn pointer btn-edit-with-elementor"><i class="icon-external-link"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit with Elementor - Visual Page Builder','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</a>
                <?php } else { ?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Save page first to enable page builder','mod'=>'iqitelementor'),$_smarty_tpl ) );?>

                <?php }?>
            </div>
        </div>

    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "input_row"} */
}
