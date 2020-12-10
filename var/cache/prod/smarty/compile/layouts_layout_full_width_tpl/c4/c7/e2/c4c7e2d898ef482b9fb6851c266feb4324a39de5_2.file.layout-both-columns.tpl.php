<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:47:22
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f2abbc5b0_31283087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4c7e2d898ef482b9fb6851c266feb4324a39de5' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/layouts/layout-both-columns.tpl',
      1 => 1607256840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5fd25f2abbc5b0_31283087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1399266485fd25f2abad655_81949725', 'head');
?>

    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_head']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_head']) {?> <?php echo $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_head'];?>
 <?php }?>
</head>

<body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 body-desktop-header-style-w-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'], ENT_QUOTES, 'UTF-8');?>
">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5621484065fd25f2abaf439_13912456', 'body_gtm');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18913348505fd25f2abb0386_20761721', 'hook_after_body_opening_tag');
?>


<main id="main-page-content" <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader'] == "pre" && isset($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader_icon_pre'])) {?>style="opacity: 0;"<?php }?> >
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17878100035fd25f2abb1416_81538814', 'product_activation');
?>


    <header id="header" class="desktop-header-style-w-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'], ENT_QUOTES, 'UTF-8');?>
">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4951955965fd25f2abb1dc1_17230854', 'header');
?>

    </header>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2427641155fd25f2abb2447_13765289', 'checkout_header');
?>


    <section id="wrapper">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12991520625fd25f2abb27f0_89818366', 'hook_display_wrapper_top');
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div id="inner-wrapper" class="container">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18771136005fd25f2abb3155_76358701', 'hook_display_wrapper_top_container');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4034899195fd25f2abb3816_71108284', 'notifications');
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3814280045fd25f2abb3f35_14451571', "layout_row_start");
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9447396495fd25f2abb43e6_80087737', "content_wrapper");
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23628795fd25f2abb5bd2_49201337', "left_column");
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1388410935fd25f2abb73c7_11766179', "right_column");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3743281615fd25f2abb80a6_50914169', "layout_row_end");
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5140172405fd25f2abb8491_86019639', 'hook_display_wrapper_bottom_ontainer');
?>

        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10133027815fd25f2abb8b55_25012274', 'hook_display_wrapper_bottom');
?>

    </section>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18549941855fd25f2abb91e0_30354177', 'checkout_footer');
?>

    <div class="cointeiner1">
        <div class="element">
            <div class="opinniePasek">Opinnie produktów: <span class="colorOpinnie">100</span></div>
            <p class="topDown"><span><i class="footer-bar__expand-button-arrow" style="transform: rotate(270deg);">»</i></span></p>
        </div>
    <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6487711175fd25f2abb9668_08280845', "footer");
?>

    </footer>
    </div>
</main>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13826958985fd25f2abb9da3_39218674', 'javascript_bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13317154375fd25f2abba6d0_32686044', 'hook_before_body_closing_tag');
?>


<button id="back-to-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</button>

<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader'] == "pre" && isset($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader_icon_pre'])) {?>
    <div id="page-preloader" style="">
        <div class="loader-wrapper">
            <div class="loader loader-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader_icon_pre'], ENT_QUOTES, 'UTF-8');?>
"></div>
        </div>
    </div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_body']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_body']) {?> <?php echo $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_body'];?>
 <?php }?>

</body>

</html>
<?php }
/* {block 'head'} */
class Block_1399266485fd25f2abad655_81949725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1399266485fd25f2abad655_81949725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'body_gtm'} */
class Block_5621484065fd25f2abaf439_13912456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body_gtm' => 
  array (
    0 => 'Block_5621484065fd25f2abaf439_13912456',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_gtm']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_gtm']) {?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_gtm'], ENT_QUOTES, 'UTF-8');?>
"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php }
}
}
/* {/block 'body_gtm'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_18913348505fd25f2abb0386_20761721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_18913348505fd25f2abb0386_20761721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_17878100035fd25f2abb1416_81538814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_17878100035fd25f2abb1416_81538814',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_4951955965fd25f2abb1dc1_17230854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_4951955965fd25f2abb1dc1_17230854',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'checkout_header'} */
class Block_2427641155fd25f2abb2447_13765289 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkout_header' => 
  array (
    0 => 'Block_2427641155fd25f2abb2447_13765289',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'checkout_header'} */
/* {block 'hook_display_wrapper_top'} */
class Block_12991520625fd25f2abb27f0_89818366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_wrapper_top' => 
  array (
    0 => 'Block_12991520625fd25f2abb27f0_89818366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );
}
}
/* {/block 'hook_display_wrapper_top'} */
/* {block 'hook_display_wrapper_top_container'} */
class Block_18771136005fd25f2abb3155_76358701 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_wrapper_top_container' => 
  array (
    0 => 'Block_18771136005fd25f2abb3155_76358701',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTopInContainer"),$_smarty_tpl ) );
}
}
/* {/block 'hook_display_wrapper_top_container'} */
/* {block 'notifications'} */
class Block_4034899195fd25f2abb3816_71108284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_4034899195fd25f2abb3816_71108284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'notifications'} */
/* {block "layout_row_start"} */
class Block_3814280045fd25f2abb3f35_14451571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_row_start' => 
  array (
    0 => 'Block_3814280045fd25f2abb3f35_14451571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="row">
            <?php
}
}
/* {/block "layout_row_start"} */
/* {block "content"} */
class Block_3990529115fd25f2abb4f13_21863891 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <p>Hello world! This is HTML5 Boilerplate.</p>
                        <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_9447396495fd25f2abb43e6_80087737 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_9447396495fd25f2abb43e6_80087737',
  ),
  'content' => 
  array (
    0 => 'Block_3990529115fd25f2abb4f13_21863891',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="content-wrapper" class="left-column right-column col-12 col-md-6 <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['g_sidebars_width'] == 'narrow') {?>col-lg-8<?php }?>">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3990529115fd25f2abb4f13_21863891', "content", $this->tplIndex);
?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_column"} */
class Block_23628795fd25f2abb5bd2_49201337 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_23628795fd25f2abb5bd2_49201337',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="left-column" class="col-12 col-md-3 <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['g_sidebars_width'] == 'narrow') {?>col-lg-2<?php }?> order-first">
                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] != 6 && $_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] != 7) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayVerticalMenu"),$_smarty_tpl ) );
}?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

                        </div>
                <?php
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_1388410935fd25f2abb73c7_11766179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_1388410935fd25f2abb73c7_11766179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="right-column" class="col-12 col-md-3 <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['g_sidebars_width'] == 'narrow') {?>col-lg-2<?php }?>">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block "right_column"} */
/* {block "layout_row_end"} */
class Block_3743281615fd25f2abb80a6_50914169 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_row_end' => 
  array (
    0 => 'Block_3743281615fd25f2abb80a6_50914169',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                </div>
            <?php
}
}
/* {/block "layout_row_end"} */
/* {block 'hook_display_wrapper_bottom_ontainer'} */
class Block_5140172405fd25f2abb8491_86019639 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_wrapper_bottom_ontainer' => 
  array (
    0 => 'Block_5140172405fd25f2abb8491_86019639',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottomInContainer"),$_smarty_tpl ) );
}
}
/* {/block 'hook_display_wrapper_bottom_ontainer'} */
/* {block 'hook_display_wrapper_bottom'} */
class Block_10133027815fd25f2abb8b55_25012274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_wrapper_bottom' => 
  array (
    0 => 'Block_10133027815fd25f2abb8b55_25012274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );
}
}
/* {/block 'hook_display_wrapper_bottom'} */
/* {block 'checkout_footer'} */
class Block_18549941855fd25f2abb91e0_30354177 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkout_footer' => 
  array (
    0 => 'Block_18549941855fd25f2abb91e0_30354177',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'checkout_footer'} */
/* {block "footer"} */
class Block_6487711175fd25f2abb9668_08280845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6487711175fd25f2abb9668_08280845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_13826958985fd25f2abb9da3_39218674 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_13826958985fd25f2abb9da3_39218674',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_13317154375fd25f2abba6d0_32686044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_13317154375fd25f2abba6d0_32686044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
