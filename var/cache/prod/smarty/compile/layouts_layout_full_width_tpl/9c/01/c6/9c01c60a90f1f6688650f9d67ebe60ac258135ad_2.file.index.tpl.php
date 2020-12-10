<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:07
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f5780c237_73215021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c01c60a90f1f6688650f9d67ebe60ac258135ad' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/index.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f5780c237_73215021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14102873365fd25f57808093_60834098', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20990808115fd25f578095c5_26976343', 'head');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_13369969165fd25f57808399_56888085 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_12415661385fd25f57808a47_47358726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

            <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_2121923075fd25f578087d7_26694247 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12415661385fd25f57808a47_47358726', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14102873365fd25f57808093_60834098 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_14102873365fd25f57808093_60834098',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13369969165fd25f57808399_56888085',
  ),
  'page_content' => 
  array (
    0 => 'Block_2121923075fd25f578087d7_26694247',
  ),
  'hook_home' => 
  array (
    0 => 'Block_12415661385fd25f57808a47_47358726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13369969165fd25f57808399_56888085', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2121923075fd25f578087d7_26694247', 'page_content', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'head'} */
class Block_20990808115fd25f578095c5_26976343 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_20990808115fd25f578095c5_26976343',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/legion/serwerphp/centrummateracy/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

    <?php $_smarty_tpl->_assignInScope('searchUrl', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['urls']->value['pages']['search'],"/\?controller=search+"."$"."/",''));?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        
		{
			"@context": "https://schema.org",
			"@type": "WebSite",
			"url": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
",
			"potentialAction": {
			    "@type": "SearchAction",
			    "target": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchUrl']->value, ENT_QUOTES, 'UTF-8');?>
?controller=search&s={s}",
			    "query-input": "required name=s"
			}
		}
		
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
}
