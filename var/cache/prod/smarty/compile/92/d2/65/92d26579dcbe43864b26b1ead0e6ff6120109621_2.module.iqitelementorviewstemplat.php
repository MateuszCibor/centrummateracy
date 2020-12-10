<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:47:22
  from 'module:iqitelementorviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f2ae0a803_55871158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92d26579dcbe43864b26b1ead0e6ff6120109621' => 
    array (
      0 => 'module:iqitelementorviewstemplat',
      1 => 1607168843,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f2ae0a803_55871158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10976426605fd25f2ae0a0e7_34752405', 'iqitelementor');
?>

<?php }
/* {block 'iqitelementor'} */
class Block_10976426605fd25f2ae0a0e7_34752405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iqitelementor' => 
  array (
    0 => 'Block_10976426605fd25f2ae0a0e7_34752405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php
}
}
/* {/block 'iqitelementor'} */
}
