<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:28
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f6cbb9740_06847729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b1941e4e803cff9703cffa4208b550060b244b0' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/products-top.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 2,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_5fd25f6cbb9740_06847729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/legion/serwerphp/centrummateracy/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="products-selection">
    <div class="row align-items-center justify-content-between small-gutters">
        <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets']) || (!empty($_smarty_tpl->tpl_vars['af']->value) && $_smarty_tpl->tpl_vars['iqitTheme']->value['pl_faceted_position'] == 1)) {?>
            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_faceted_position'] == 1) {?>
                <div class="col col-auto facated-toggler">
                    <div class="filter-button">
                        <button id="search_center_filter_toggler" class="btn btn-secondary">
                            <i class="fa fa-filter" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                        </button>
                    </div>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_faceted_position'] == 0) {?>
                <div class="col col-auto facated-toggler hidden-md-up">
                    <div class="filter-button">
                        <button id="search_filter_toggler" class="btn btn-secondary">
                            <i class="fa fa-filter" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                        </button>
                    </div>
                </div>
            <?php }?>
        <?php } else { ?>
            <div class="col col-auto facated-toggler"></div>
        <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['sort_orders'], 'sort_order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['sort_order']->value['current']) {?>
                <?php if (isset($_smarty_tpl->tpl_vars['sort_order']->value['url'])) {?>
                <?php $_smarty_tpl->_assignInScope('currentSortUrl', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['sort_order']->value['url'],"/&productListView=\d+"."$"."/",''));?>
                <?php }?>
                <?php break 1;?>

            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php if (!isset($_smarty_tpl->tpl_vars['currentSortUrl']->value)) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['sort_order']->value['url'])) {?>
                 <?php $_smarty_tpl->_assignInScope('currentSortUrl', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['sort_order']->value['url'],"/&productListView=\d+"."$"."/",''));?>
            <?php }?>
        <?php }?>




        <?php if (isset($_smarty_tpl->tpl_vars['currentSortUrl']->value)) {?>
        <div class="col view-switcher hidden-sm-down">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentSortUrl']->value, ENT_QUOTES, 'UTF-8');?>
&productListView=grid" class="<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_default_view'] == 'grid') {?>current<?php }?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
" data-button-action="change-list-view" data-view="grid"  rel="nofollow"><i class="fa fa-th" aria-hidden="true"></i></a>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentSortUrl']->value, ENT_QUOTES, 'UTF-8');?>
&productListView=list" class="<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_default_view'] == 'list') {?>current<?php }?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
" data-button-action="change-list-view" data-view="list"  rel="nofollow"><i class="fa fa-th-list" aria-hidden="true"></i></a>
        </div>
            <?php } else { ?>

            <?php if (isset($_GET['q']) || isset($_GET['page']) || isset($_GET['productListView'])) {?>


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['pagination']['pages'], 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?>
                        <?php $_smarty_tpl->_assignInScope('currentSortUrl2', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['page']->value['url'],"/&productListView=\d+"."$"."/",''));?>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


               <div class="col view-switcher hidden-sm-down">
                   <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentSortUrl2']->value, ENT_QUOTES, 'UTF-8');?>
&productListView=grid" class="<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_default_view'] == 'grid') {?>current<?php }?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
" data-button-action="change-list-view" data-view="grid"  rel="nofollow"><i class="fa fa-th" aria-hidden="true"></i></a>
                   <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentSortUrl2']->value, ENT_QUOTES, 'UTF-8');?>
&productListView=list" class="<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_default_view'] == 'list') {?>current<?php }?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
" data-button-action="change-list-view" data-view="list"  rel="nofollow"><i class="fa fa-th-list" aria-hidden="true"></i></a>
               </div>


            <?php } else { ?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['pagination']['pages'], 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?>
                        <?php $_smarty_tpl->_assignInScope('currentSortUrl2', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['page']->value['url'],"/&productListView=\d+"."$"."/",''));?>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <div class="col view-switcher hidden-sm-down">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentSortUrl2']->value, ENT_QUOTES, 'UTF-8');?>
?productListView=grid" class="<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_default_view'] == 'grid') {?>current<?php }?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
" data-button-action="change-list-view" data-view="grid"  rel="nofollow"><i class="fa fa-th" aria-hidden="true"></i></a>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentSortUrl2']->value, ENT_QUOTES, 'UTF-8');?>
?productListView=list" class="<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_default_view'] == 'list') {?>current<?php }?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
" data-button-action="change-list-view" data-view="list"  rel="nofollow"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                </div>

            <?php }?>


        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_top_pagination'] && !$_smarty_tpl->tpl_vars['iqitTheme']->value['pl_infinity']) {?>
            <div class="col col-auto col-left-sort">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15893562695fd25f6cbb5485_05706926', 'sort_by');
?>

            </div>
            <div class="col col-auto pagination-wrapper hidden-sm-down">
                <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
            </div>
        <?php } else { ?>
            <div class="col col-auto">
            <span class="showing hidden-sm-down">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>

            </span>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8458580335fd25f6cbb8a29_33251276', 'sort_by');
?>

            </div>
        <?php }?>
    </div>
</div>

<?php }
/* {block 'sort_by'} */
class Block_15893562695fd25f6cbb5485_05706926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_15893562695fd25f6cbb5485_05706926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
                <?php
}
}
/* {/block 'sort_by'} */
/* {block 'sort_by'} */
class Block_8458580335fd25f6cbb8a29_33251276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_8458580335fd25f6cbb8a29_33251276',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, true);
?>
                <?php
}
}
/* {/block 'sort_by'} */
}
