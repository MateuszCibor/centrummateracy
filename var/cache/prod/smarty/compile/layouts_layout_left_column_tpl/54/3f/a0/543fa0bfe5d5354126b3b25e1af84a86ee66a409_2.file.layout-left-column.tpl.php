<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:25
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/layouts/layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f691a7370_96302323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '543fa0bfe5d5354126b3b25e1af84a86ee66a409' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/layouts/layout-left-column.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f691a7370_96302323 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14698314565fd25f691a5687_61464306', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4721742485fd25f691a5af8_79322404', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_14698314565fd25f691a5687_61464306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_14698314565fd25f691a5687_61464306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_wrapper_start'} */
class Block_14291137285fd25f691a5d92_51011553 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <div id="content-wrapper"
         class="left-column col-12 col-md-9 <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['g_sidebars_width'] == 'narrow') {?>col-lg-10<?php }?>"><?php
}
}
/* {/block 'content_wrapper_start'} */
/* {block 'content'} */
class Block_10316783325fd25f691a6b03_93237726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p>Hello world! This is HTML5 Boilerplate.</p>
        <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_4721742485fd25f691a5af8_79322404 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_4721742485fd25f691a5af8_79322404',
  ),
  'content_wrapper_start' => 
  array (
    0 => 'Block_14291137285fd25f691a5d92_51011553',
  ),
  'content' => 
  array (
    0 => 'Block_10316783325fd25f691a6b03_93237726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14291137285fd25f691a5d92_51011553', 'content_wrapper_start', $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10316783325fd25f691a6b03_93237726', 'content', $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
