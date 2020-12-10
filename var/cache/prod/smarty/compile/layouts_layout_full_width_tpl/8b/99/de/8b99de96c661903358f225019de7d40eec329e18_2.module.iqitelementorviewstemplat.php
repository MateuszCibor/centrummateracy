<?php
/* Smarty version 3.1.33, created on 2020-12-10 20:09:27
  from 'module:iqitelementorviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd27267b9d219_29461722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b99de96c661903358f225019de7d40eec329e18' => 
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
function content_5fd27267b9d219_29461722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19053948315fd27267b9cb13_22431743', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content'} */
class Block_19053948315fd27267b9cb13_22431743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_19053948315fd27267b9cb13_22431743',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="elementor" class="elementor"></div>
<?php
}
}
/* {/block 'page_content'} */
}
