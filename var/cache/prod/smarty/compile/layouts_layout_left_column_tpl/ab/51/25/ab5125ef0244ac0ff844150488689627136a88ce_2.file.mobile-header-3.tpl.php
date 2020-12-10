<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:25
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/_partials/_variants/mobile-header-3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f6929c463_51730631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab5125ef0244ac0ff844150488689627136a88ce' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/_partials/_variants/mobile-header-3.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:iqitsearch/views/templates/hook/search-bar-mobile.tpl' => 1,
    'module:ps_customersignin/ps_customersignin-mobile.tpl' => 1,
    'module:ps_shoppingcart/ps_shoppingcart-mqty.tpl' => 1,
  ),
),false)) {
function content_5fd25f6929c463_51730631 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="mobile-main-bar">
        <div class="col-mobile-logo text-center">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                <img class="logo img-fluid"
                     src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo'] != '') {?> srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo'], ENT_QUOTES, 'UTF-8');?>
 2x"<?php }?>
                     alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            </a>
        </div>
    </div>
</div>
<div id="mobile-header-sticky">
    <div class="mobile-buttons-bar">
        <div class="container">
            <div class="row no-gutters align-items-center row-mobile-buttons">
                <div class="col  col-mobile-btn col-mobile-btn-menu text-center col-mobile-menu-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['mm_type'], ENT_QUOTES, 'UTF-8');?>
">
                    <a class="m-nav-btn"  data-toggle="dropdown" data-display="static"><i class="fa fa-bars" aria-hidden="true"></i>
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span></a>
                    <div id="mobile_menu_click_overlay"></div>
                    <div id="_mobile_iqitmegamenu-mobile" class="text-left dropdown-menu-custom dropdown-menu"></div>
                </div>
                <div id="mobile-btn-search" class="col col-mobile-btn col-mobile-btn-search text-center">
                    <a class="m-nav-btn" data-toggle="dropdown" data-display="static"><i class="fa fa-search" aria-hidden="true"></i>
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></a>
                    <div id="search-widget-mobile" class="dropdown-content dropdown-menu dropdown-mobile search-widget">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiBegin",'m'=>"ps_shoppingcart",'field'=>"widget_block",'tpl'=>"module:iqitsearch/views/templates/hook/search-bar-mobile.tpl"),$_smarty_tpl ) );?>

                        <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"iqitsearch"));
$_block_repeat=true;
echo $_block_plugin2->smartyWidgetBlock(array('name'=>"iqitsearch"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_subTemplateRender('module:iqitsearch/views/templates/hook/search-bar-mobile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_block_repeat=false;
echo $_block_plugin2->smartyWidgetBlock(array('name'=>"iqitsearch"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiEnd"),$_smarty_tpl ) );?>

                    </div>


                </div>
                <div class="col col-mobile-btn col-mobile-btn-account text-center">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="m-nav-btn"><i class="fa fa-user" aria-hidden="true"></i>
                        <span>     <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiBegin",'m'=>"ps_customersignin",'field'=>"widget_block",'tpl'=>"module:ps_customersignin/ps_customersignin-mobile.tpl"),$_smarty_tpl ) );?>

                            <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_customersignin"));
$_block_repeat=true;
echo $_block_plugin3->smartyWidgetBlock(array('name'=>"ps_customersignin"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php $_smarty_tpl->_subTemplateRender('module:ps_customersignin/ps_customersignin-mobile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php $_block_repeat=false;
echo $_block_plugin3->smartyWidgetBlock(array('name'=>"ps_customersignin"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiEnd"),$_smarty_tpl ) );?>
</span></a>
                </div>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderButtonsMobile'),$_smarty_tpl ) );?>


                <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
                <div class="col col-mobile-btn col-mobile-btn-cart ps-shoppingcart text-center <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['cart_style']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['cart_style'] == "floating") {?>dropdown<?php } else { ?>side-cart<?php }?>">
                   <div id="mobile-cart-wrapper">
                    <a id="mobile-cart-toogle" class="m-nav-btn" data-display="static" data-toggle="dropdown"><i class="fa fa-shopping-bag mobile-bag-icon" aria-hidden="true"><span id="mobile-cart-products-count" class="cart-products-count cart-products-count-btn">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiBegin",'m'=>"ps_shoppingcart",'field'=>"widget_block",'tpl'=>"module:ps_shoppingcart/ps_shoppingcart-mqty.tpl"),$_smarty_tpl ) );?>

                                <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_shoppingcart"));
$_block_repeat=true;
echo $_block_plugin4->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart-mqty.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php $_block_repeat=false;
echo $_block_plugin4->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiEnd"),$_smarty_tpl ) );?>

                            </span></i>
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span></a>
                    <div id="_mobile_blockcart-content" class="dropdown-menu-custom dropdown-menu"></div>
                   </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>

<?php }
}
