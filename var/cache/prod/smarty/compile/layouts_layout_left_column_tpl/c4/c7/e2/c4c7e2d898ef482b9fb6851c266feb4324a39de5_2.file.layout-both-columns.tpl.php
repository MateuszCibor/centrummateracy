<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:25
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f691c6f42_74694295',
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
function content_5fd25f691c6f42_74694295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3915142015fd25f691a8d41_82996331', 'head');
?>

    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_head']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_head']) {?> <?php echo $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_head'];?>
 <?php }?>
</head>

<body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 body-desktop-header-style-w-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'], ENT_QUOTES, 'UTF-8');?>
">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13640437415fd25f691aaca2_75791735', 'body_gtm');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_970140925fd25f691ac083_35530646', 'hook_after_body_opening_tag');
?>


<main id="main-page-content" <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader'] == "pre" && isset($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader_icon_pre'])) {?>style="opacity: 0;"<?php }?> >
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16821330035fd25f691ae678_76960465', 'product_activation');
?>


    <header id="header" class="desktop-header-style-w-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'], ENT_QUOTES, 'UTF-8');?>
">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14543634965fd25f691af262_52471256', 'header');
?>

    </header>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_459855425fd25f691af9e9_41286056', 'checkout_header');
?>


    <section id="wrapper">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1102471235fd25f691b0b18_50229652', 'hook_display_wrapper_top');
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div id="inner-wrapper" class="container">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7505093495fd25f691b2041_96395060', 'hook_display_wrapper_top_container');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21055481965fd25f691b2fc0_66833964', 'notifications');
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18163354865fd25f691b3f12_48378868', "layout_row_start");
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13802848505fd25f691b48c3_55850752', "content_wrapper");
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19010882655fd25f691b78b6_09749065', "left_column");
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1381920015fd25f691bb0e7_88012585', "right_column");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7400550035fd25f691bd3c1_63943628', "layout_row_end");
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19366481025fd25f691bde18_01550185', 'hook_display_wrapper_bottom_ontainer');
?>

        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13131358585fd25f691bec37_49408377', 'hook_display_wrapper_bottom');
?>

    </section>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18370196965fd25f691bfc07_85301402', 'checkout_footer');
?>

    <div class="cointeiner1">
        <div class="element">
            <div class="opinniePasek">Opinnie produktów: <span class="colorOpinnie">100</span></div>
            <p class="topDown"><span><i class="footer-bar__expand-button-arrow" style="transform: rotate(270deg);">»</i></span></p>
        </div>
    <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20297887025fd25f691c04e9_11102528', "footer");
?>

    </footer>
    </div>
</main>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_402733575fd25f691c1391_40220942', 'javascript_bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4169816085fd25f691c27c5_43424962', 'hook_before_body_closing_tag');
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
class Block_3915142015fd25f691a8d41_82996331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_3915142015fd25f691a8d41_82996331',
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
class Block_13640437415fd25f691aaca2_75791735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body_gtm' => 
  array (
    0 => 'Block_13640437415fd25f691aaca2_75791735',
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
class Block_970140925fd25f691ac083_35530646 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_970140925fd25f691ac083_35530646',
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
class Block_16821330035fd25f691ae678_76960465 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_16821330035fd25f691ae678_76960465',
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
class Block_14543634965fd25f691af262_52471256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_14543634965fd25f691af262_52471256',
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
class Block_459855425fd25f691af9e9_41286056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkout_header' => 
  array (
    0 => 'Block_459855425fd25f691af9e9_41286056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'checkout_header'} */
/* {block 'hook_display_wrapper_top'} */
class Block_1102471235fd25f691b0b18_50229652 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_wrapper_top' => 
  array (
    0 => 'Block_1102471235fd25f691b0b18_50229652',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );
}
}
/* {/block 'hook_display_wrapper_top'} */
/* {block 'hook_display_wrapper_top_container'} */
class Block_7505093495fd25f691b2041_96395060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_wrapper_top_container' => 
  array (
    0 => 'Block_7505093495fd25f691b2041_96395060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTopInContainer"),$_smarty_tpl ) );
}
}
/* {/block 'hook_display_wrapper_top_container'} */
/* {block 'notifications'} */
class Block_21055481965fd25f691b2fc0_66833964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_21055481965fd25f691b2fc0_66833964',
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
class Block_18163354865fd25f691b3f12_48378868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_row_start' => 
  array (
    0 => 'Block_18163354865fd25f691b3f12_48378868',
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
class Block_11782929295fd25f691b6504_36395213 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <p>Hello world! This is HTML5 Boilerplate.</p>
                        <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_13802848505fd25f691b48c3_55850752 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_13802848505fd25f691b48c3_55850752',
  ),
  'content' => 
  array (
    0 => 'Block_11782929295fd25f691b6504_36395213',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="content-wrapper" class="left-column right-column col-12 col-md-6 <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['g_sidebars_width'] == 'narrow') {?>col-lg-8<?php }?>">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11782929295fd25f691b6504_36395213', "content", $this->tplIndex);
?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_column"} */
class Block_19010882655fd25f691b78b6_09749065 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_19010882655fd25f691b78b6_09749065',
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
class Block_1381920015fd25f691bb0e7_88012585 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_1381920015fd25f691bb0e7_88012585',
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
class Block_7400550035fd25f691bd3c1_63943628 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_row_end' => 
  array (
    0 => 'Block_7400550035fd25f691bd3c1_63943628',
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
class Block_19366481025fd25f691bde18_01550185 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_wrapper_bottom_ontainer' => 
  array (
    0 => 'Block_19366481025fd25f691bde18_01550185',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottomInContainer"),$_smarty_tpl ) );
}
}
/* {/block 'hook_display_wrapper_bottom_ontainer'} */
/* {block 'hook_display_wrapper_bottom'} */
class Block_13131358585fd25f691bec37_49408377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_wrapper_bottom' => 
  array (
    0 => 'Block_13131358585fd25f691bec37_49408377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );
}
}
/* {/block 'hook_display_wrapper_bottom'} */
/* {block 'checkout_footer'} */
class Block_18370196965fd25f691bfc07_85301402 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkout_footer' => 
  array (
    0 => 'Block_18370196965fd25f691bfc07_85301402',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'checkout_footer'} */
/* {block "footer"} */
class Block_20297887025fd25f691c04e9_11102528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_20297887025fd25f691c04e9_11102528',
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
class Block_402733575fd25f691c1391_40220942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_402733575fd25f691c1391_40220942',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_4169816085fd25f691c27c5_43424962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_4169816085fd25f691c27c5_43424962',
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
