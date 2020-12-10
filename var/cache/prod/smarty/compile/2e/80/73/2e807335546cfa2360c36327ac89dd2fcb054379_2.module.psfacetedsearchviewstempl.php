<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:25
  from 'module:psfacetedsearchviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f691691c7_99414236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e807335546cfa2360c36327ac89dd2fcb054379' => 
    array (
      0 => 'module:psfacetedsearchviewstempl',
      1 => 1607168843,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f691691c7_99414236 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div id="js-active-search-filters" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide<?php }?>">
    <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
        <div id="active-search-filters">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4499656085fd25f69165fc7_06954726', 'active_filters_title');
?>

            <ul class="filter-blocks">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeFilters']->value, 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5292027225fd25f69166ce3_94402046', 'active_filters_item');
?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value) > 1) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17039682915fd25f691685e5_63748559', 'facets_clearall_button');
?>

                <?php }?>
            </ul>
        </div>
    <?php }?>
</div>
<?php }
/* {block 'active_filters_title'} */
class Block_4499656085fd25f69165fc7_06954726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_title' => 
  array (
    0 => 'Block_4499656085fd25f69165fc7_06954726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <span class="active-filter-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active filters','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
            <?php
}
}
/* {/block 'active_filters_title'} */
/* {block 'active_filters_item'} */
class Block_5292027225fd25f69166ce3_94402046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_item' => 
  array (
    0 => 'Block_5292027225fd25f69166ce3_94402046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <li class="filter-block">
                            <a class="js-search-link btn btn-secondary btn-sm" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
">
                                <i class="fa fa-times" aria-hidden="true"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$s: ','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl ) );?>

                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            </a>
                        </li>
                    <?php
}
}
/* {/block 'active_filters_item'} */
/* {block 'facets_clearall_button'} */
class Block_17039682915fd25f691685e5_63748559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_clearall_button' => 
  array (
    0 => 'Block_17039682915fd25f691685e5_63748559',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <li class="filter-block filter-block-all">
                            <a class="js-search-link btn btn-secondary btn-sm" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <i class="fa fa-times" aria-hidden="true"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                            </a>
                        </li>
                    <?php
}
}
/* {/block 'facets_clearall_button'} */
}
