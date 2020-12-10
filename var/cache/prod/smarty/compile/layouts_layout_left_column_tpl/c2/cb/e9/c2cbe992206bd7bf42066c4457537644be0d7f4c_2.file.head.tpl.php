<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:25
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f691e9fb9_44610123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2cbe992206bd7bf42066c4457537644be0d7f4c' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/_partials/head.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5fd25f691e9fb9_44610123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20487102765fd25f691cb4c7_91003453', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_367433945fd25f691cbd85_12414383', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16462892895fd25f691cc581_86135462', 'head_gtag');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6547234845fd25f691cf761_40569184', 'head_gtm');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_289485075fd25f691d1ca0_53745261', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8573272305fd25f691db050_78469856', 'head_og_tags');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8187471305fd25f691e15b1_45742745', 'head_viewport');
?>



<?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_address_bg']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_address_bg'] != '') {?>
  <meta name="theme-color" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_address_bg'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="msapplication-navbutton-color" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_address_bg'], ENT_QUOTES, 'UTF-8');?>
">
<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14684097645fd25f691e33c7_50800949', 'head_icons');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61969045fd25f691e5c16_02810837', 'hook_fonts');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21323958215fd25f691e70b8_76450386', 'head_organization_snippet');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13452902935fd25f691e80f1_76235307', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1356889305fd25f691e8a83_93092963', 'javascript_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8822475185fd25f691e9533_91494791', 'hook_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21252518325fd25f691e9c21_53599771', 'hook_extra');
?>

<?php }
/* {block 'head_charset'} */
class Block_20487102765fd25f691cb4c7_91003453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_20487102765fd25f691cb4c7_91003453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta charset="utf-8">
<?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_367433945fd25f691cbd85_12414383 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_367433945fd25f691cbd85_12414383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta http-equiv="x-ua-compatible" content="ie=edge">
<?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_gtag'} */
class Block_16462892895fd25f691cc581_86135462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_gtag' => 
  array (
    0 => 'Block_16462892895fd25f691cc581_86135462',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_gtag']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_gtag']) {
echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_gtag'], ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_gtag'], ENT_QUOTES, 'UTF-8');?>
');
  
<?php echo '</script'; ?>
>
  <?php }
}
}
/* {/block 'head_gtag'} */
/* {block 'head_gtm'} */
class Block_6547234845fd25f691cf761_40569184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_gtm' => 
  array (
    0 => 'Block_6547234845fd25f691cf761_40569184',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_gtm']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_gtm']) {?>
    <!-- Google Tag Manager -->
    <?php echo '<script'; ?>
>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
              j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
              'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
              })(window,document,'script','dataLayer','<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_gtm'], ENT_QUOTES, 'UTF-8');?>
');<?php echo '</script'; ?>
>
    <!-- End Google Tag Manager -->
  <?php }
}
}
/* {/block 'head_gtm'} */
/* {block 'head_seo_title'} */
class Block_20577072685fd25f691d2252_31938727 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_20677618935fd25f691d3120_43391355 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_8838809585fd25f691d3f87_47771477 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_seo_canonical'} */
class Block_18141663275fd25f691d6236_25384580 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php
}
}
/* {/block 'head_seo_canonical'} */
/* {block 'head_hreflang'} */
class Block_2553218445fd25f691d7a16_36018405 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls']->value['alternative_langs'], 'pageUrl', false, 'code', 'alter_langs_loop', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['pageUrl']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_alter_langs_loop']->value['index']++;
?>
      <link rel="alternate" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'UTF-8');?>
" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_alter_langs_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_alter_langs_loop']->value['index'] : null) == 0) {?>
      <link rel="alternate" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'UTF-8');?>
" hreflang="x-default">
      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php
}
}
/* {/block 'head_hreflang'} */
/* {block 'head_seo'} */
class Block_289485075fd25f691d1ca0_53745261 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_289485075fd25f691d1ca0_53745261',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_20577072685fd25f691d2252_31938727',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_20677618935fd25f691d3120_43391355',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_8838809585fd25f691d3f87_47771477',
  ),
  'head_seo_canonical' => 
  array (
    0 => 'Block_18141663275fd25f691d6236_25384580',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_2553218445fd25f691d7a16_36018405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20577072685fd25f691d2252_31938727', 'head_seo_title', $this->tplIndex);
?>
</title>
  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20677618935fd25f691d3120_43391355', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8838809585fd25f691d3f87_47771477', 'head_seo_keywords', $this->tplIndex);
?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18141663275fd25f691d6236_25384580', 'head_seo_canonical', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2553218445fd25f691d7a16_36018405', 'head_hreflang', $this->tplIndex);
?>

<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_og_image'} */
class Block_3679186685fd25f691ddae3_54495725 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_og_logo']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_og_logo'] != '') {?>
      <meta property="og:image" content="https://<?php echo htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_og_logo'], ENT_QUOTES, 'UTF-8');?>
" />
      <?php } else { ?>
      <meta property="og:image" content="https://<?php echo htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }
}
}
/* {/block 'head_og_image'} */
/* {block 'head_og_tags'} */
class Block_8573272305fd25f691db050_78469856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_og_tags' => 
  array (
    0 => 'Block_8573272305fd25f691db050_78469856',
  ),
  'head_og_image' => 
  array (
    0 => 'Block_3679186685fd25f691ddae3_54495725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
"/>
    <meta property="og:url" content="https://<?php echo htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8');?>
"/>
    <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"/>
    <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:type" content="website">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3679186685fd25f691ddae3_54495725', 'head_og_image', $this->tplIndex);
?>

<?php
}
}
/* {/block 'head_og_tags'} */
/* {block 'head_viewport'} */
class Block_8187471305fd25f691e15b1_45742745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_8187471305fd25f691e15b1_45742745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_pinch_zoom'] == 1) {?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php } else { ?>
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
  <?php }
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_14684097645fd25f691e33c7_50800949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_14684097645fd25f691e33c7_50800949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_apple']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_apple'] != '') {?>
    <link rel="apple-touch-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_apple'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_android']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_android'] != '') {?>
    <link rel="icon" sizes="192x192" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_android'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head_icons'} */
/* {block 'hook_fonts'} */
class Block_61969045fd25f691e5c16_02810837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_fonts' => 
  array (
    0 => 'Block_61969045fd25f691e5c16_02810837',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_bfont_t'] == 'google') {?>
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_bfont_g_url'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_hfont_t'] == 'google') {?>
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_hfont_g_url'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
  <?php }
}
}
/* {/block 'hook_fonts'} */
/* {block 'head_organization_snippet'} */
class Block_21323958215fd25f691e70b8_76450386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_organization_snippet' => 
  array (
    0 => 'Block_21323958215fd25f691e70b8_76450386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="application/ld+json">

{
"@context": "https://schema.org",
"@type": "Organization",
"url": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
",
"name": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
",
"logo": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
",
"@id": "#store-organization"
}

<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head_organization_snippet'} */
/* {block 'stylesheets'} */
class Block_13452902935fd25f691e80f1_76235307 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_13452902935fd25f691e80f1_76235307',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_1356889305fd25f691e8a83_93092963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_1356889305fd25f691e8a83_93092963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_8822475185fd25f691e9533_91494791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_8822475185fd25f691e9533_91494791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

<?php
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_21252518325fd25f691e9c21_53599771 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_21252518325fd25f691e9c21_53599771',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
