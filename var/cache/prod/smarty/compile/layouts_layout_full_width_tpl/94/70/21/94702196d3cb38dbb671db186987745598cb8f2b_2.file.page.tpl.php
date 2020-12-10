<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:47:26
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f2e5b9076_01859956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94702196d3cb38dbb671db186987745598cb8f2b' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/page.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f2e5b9076_01859956 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10697556755fd25f2e5b5b85_17040546', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_6526839305fd25f2e5b6180_63473136 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
            <h1 class="h1 page-title"><span><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</span></h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_15150841895fd25f2e5b5e40_22523803 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6526839305fd25f2e5b6180_63473136', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_9380218575fd25f2e5b7f71_93189598 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_13691258355fd25f2e5b8304_52382926 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_21119680735fd25f2e5b7cd7_94533664 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9380218575fd25f2e5b7f71_93189598', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13691258355fd25f2e5b8304_52382926', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_14641080195fd25f2e5b8a83_06011264 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_8912476235fd25f2e5b8821_83143627 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14641080195fd25f2e5b8a83_06011264', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10697556755fd25f2e5b5b85_17040546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10697556755fd25f2e5b5b85_17040546',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_15150841895fd25f2e5b5e40_22523803',
  ),
  'page_title' => 
  array (
    0 => 'Block_6526839305fd25f2e5b6180_63473136',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_21119680735fd25f2e5b7cd7_94533664',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9380218575fd25f2e5b7f71_93189598',
  ),
  'page_content' => 
  array (
    0 => 'Block_13691258355fd25f2e5b8304_52382926',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_8912476235fd25f2e5b8821_83143627',
  ),
  'page_footer' => 
  array (
    0 => 'Block_14641080195fd25f2e5b8a83_06011264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15150841895fd25f2e5b5e40_22523803', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21119680735fd25f2e5b7cd7_94533664', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8912476235fd25f2e5b8821_83143627', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
