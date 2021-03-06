<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:47:22
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f2aba2524_18123099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcf98b674e5af00a7f85848db4e6290a033cf1e2' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/product.tpl',
      1 => 1607551484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 2,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/_product_partials/product-tabs-h.tpl' => 2,
    'file:catalog/_partials/_product_partials/product-tabs-sections.tpl' => 2,
    'file:catalog/_partials/_product_partials/product-tabs-accordion.tpl' => 2,
    'file:catalog/_partials/miniatures/product.tpl' => 2,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_5fd25f2aba2524_18123099 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17680508455fd25f2ab7a478_09525284', 'head_seo');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16586109285fd25f2ab7ae89_04487393', 'head_og_tags');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15757222565fd25f2ab7cdf6_44827308', 'head');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21447387685fd25f2ab81940_53013472', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_17680508455fd25f2ab7a478_09525284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_17680508455fd25f2ab7a478_09525284',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_og_tags'} */
class Block_16586109285fd25f2ab7ae89_04487393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_og_tags' => 
  array (
    0 => 'Block_16586109285fd25f2ab7ae89_04487393',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:type" content="product">
    <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image:width" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['width'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image:height" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['height'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_og_tags'} */
/* {block 'head'} */
class Block_15757222565fd25f2ab7cdf6_44827308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_15757222565fd25f2ab7cdf6_44827308',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
        <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['weight']) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
        <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_bg_category']) {?>
        <?php $_smarty_tpl->_assignInScope('categoryImage', "img/c/".((string)$_smarty_tpl->tpl_vars['product']->value['id_category_default'])."-category_default.jpg");?>
        <?php if (file_exists($_smarty_tpl->tpl_vars['categoryImage']->value)) {?>
            <style> #wrapper .breadcrumb{  background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['product']->value['category'],$_smarty_tpl->tpl_vars['product']->value['id_category_default'],'category_default'), ENT_QUOTES, 'UTF-8');?>
'); }</style>
        <?php }?>
    <?php }?>

<?php
}
}
/* {/block 'head'} */
/* {block 'product_cover_thumbnails'} */
class Block_6122934285fd25f2ab83d44_05734529 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'after_cover_thumbnails'} */
class Block_21219249785fd25f2ab85943_08527401 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="after-cover-tumbnails text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );?>
</div>
                            <?php
}
}
/* {/block 'after_cover_thumbnails'} */
/* {block 'after_cover_thumbnails2'} */
class Block_18051546945fd25f2ab86049_94028775 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="after-cover-tumbnails2 mt-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs2'),$_smarty_tpl ) );?>
</div>
                            <?php
}
}
/* {/block 'after_cover_thumbnails2'} */
/* {block 'page_content'} */
class Block_11802684915fd25f2ab83af9_07907935 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6122934285fd25f2ab83d44_05734529', 'product_cover_thumbnails', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21219249785fd25f2ab85943_08527401', 'after_cover_thumbnails', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18051546945fd25f2ab86049_94028775', 'after_cover_thumbnails2', $this->tplIndex);
?>

                        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_17501900945fd25f2ab83872_24921809 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <section class="page-content" id="content">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11802684915fd25f2ab83af9_07907935', 'page_content', $this->tplIndex);
?>

                    </section>
                <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_brand_below'} */
class Block_18340721785fd25f2ab86ff5_38477685 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_logo'] == 'next-title') {?>
                                <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
                                        <meta itemprop="brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
">
                                        <div class="product-manufacturer product-manufacturer-next float-right">
                                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                     class="img-fluid  manufacturer-logo" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" />
                                            </a>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php
}
}
/* {/block 'product_brand_below'} */
/* {block 'page_title'} */
class Block_10794590525fd25f2ab88f90_13642196 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_16402770965fd25f2ab88d16_32085977 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <h1 class="h1 page-title" itemprop="name"><span><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10794590525fd25f2ab88f90_13642196', 'page_title', $this->tplIndex);
?>
</span></h1>
                    <?php
}
}
/* {/block 'page_header'} */
/* {block 'product_brand_below'} */
class Block_10848738055fd25f2ab899b6_60358752 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_logo'] == 'title') {?>
                                <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
                                    <meta itemprop="brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
">
                                        <?php if (isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
                                            <div class="product-manufacturer mb-3">
                                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                     class="img-fluid  manufacturer-logo" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" />
                                            </a>
                                            </div>
                                        <?php } else { ?>
                                            <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
:</label>
                                            <span>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
          </span>
                                        <?php }?>

                                <?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_logo'] == 'next-title') {?>
                                <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
                                    <?php if (!isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
                                        <meta itemprop="brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
">
                                        <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
:</label>
                                        <span>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
                                        </span>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php
}
}
/* {/block 'product_brand_below'} */
/* {block 'hook_display_product_rating'} */
class Block_16618077435fd25f2ab8d942_85717065 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductRating','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                        <?php
}
}
/* {/block 'hook_display_product_rating'} */
/* {block 'product_prices'} */
class Block_20875318045fd25f2ab8e4c6_56035523 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'product_prices'} */
/* {block 'page_header_container'} */
class Block_11845296125fd25f2ab86d72_09342985 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="product_header_container clearfix">

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18340721785fd25f2ab86ff5_38477685', 'product_brand_below', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16402770965fd25f2ab88d16_32085977', 'page_header', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10848738055fd25f2ab899b6_60358752', 'product_brand_below', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16618077435fd25f2ab8d942_85717065', 'hook_display_product_rating', $this->tplIndex);
?>


                        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_price_position'] == 'below-title') {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20875318045fd25f2ab8e4c6_56035523', 'product_prices', $this->tplIndex);
?>

                        <?php }?>
                    </div>
                <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_15191625555fd25f2ab8ede1_35166037 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                             itemprop="description" class="rte-content"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
                    <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_3956232185fd25f2ab90057_92862493 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
                        <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_3973984585fd25f2ab91833_62684990 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductVariants','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_13297415425fd25f2ab93085_96218299 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
                                                <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_6289747585fd25f2ab921f5_51747597 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                                        <section class="product-pack">
                                            <p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13297415425fd25f2ab93085_96218299', 'product_miniature', $this->tplIndex);
?>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </section>
                                    <?php }?>
                                <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_prices'} */
class Block_2130119495fd25f2ab94035_62834716 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_add_to_cart'} */
class Block_5404076355fd25f2ab947a1_20337468 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_discounts'} */
class Block_21127580955fd25f2ab94de2_04802779 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_refresh'} */
class Block_12386430435fd25f2ab95410_73332016 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_additional_info'} */
class Block_12521227035fd25f2ab95783_57368562 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_buy'} */
class Block_18787014955fd25f2ab90af6_32484367 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                                       id="product_page_product_id">
                                <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"
                                       id="product_customization_id">

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3973984585fd25f2ab91833_62684990', 'product_variants', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6289747585fd25f2ab921f5_51747597', 'product_pack', $this->tplIndex);
?>


                                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_price_position'] == 'above-button') {?>
                                    <div class="product_p_price_container">
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2130119495fd25f2ab94035_62834716', 'product_prices', $this->tplIndex);
?>

                                    </div>
                                <?php }?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5404076355fd25f2ab947a1_20337468', 'product_add_to_cart', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21127580955fd25f2ab94de2_04802779', 'product_discounts', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12386430435fd25f2ab95410_73332016', 'product_refresh', $this->tplIndex);
?>

                            </form>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12521227035fd25f2ab95783_57368562', 'product_additional_info', $this->tplIndex);
?>

                        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_3912102125fd25f2ab95fa2_33569857 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

                        <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_7266880905fd25f2ab9daf0_90894456 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'carousel'=>true,'richData'=>true), 0, true);
?>
                                    <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories_footer'} */
class Block_7466405765fd25f2ab9cd03_99611030 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                    <section class="product-accessories block block-section">
                        <p class="section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                        <div class="block-content">
                            <div class="products slick-products-carousel products-grid slick-default-carousel">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7266880905fd25f2ab9daf0_90894456', 'product_miniature', $this->tplIndex);
?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </section>
                <?php }?>
            <?php
}
}
/* {/block 'product_accessories_footer'} */
/* {block 'product_miniature'} */
class Block_2351456665fd25f2ab9f932_29818806 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'carousel'=>true,'richData'=>false), 0, true);
?>
                                    <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories_sidebar_mobile'} */
class Block_19806821645fd25f2ab9ecf9_76409403 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                    <section class="product-accessories product-accessories-sidebar-mobile block block-section d-md-none">
                        <p class="section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                        <div class="block-content">
                            <div class="products slick-products-carousel products-grid slick-default-carousel">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2351456665fd25f2ab9f932_29818806', 'product_miniature', $this->tplIndex);
?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </section>
                <?php }?>
            <?php
}
}
/* {/block 'product_accessories_sidebar_mobile'} */
/* {block 'product_footer'} */
class Block_20199849345fd25f2aba06d8_59976517 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_21372311565fd25f2aba0ed3_24240862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_6525360745fd25f2aba1776_58817992 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Footer content -->
                <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7396940675fd25f2aba1512_81761786 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <footer class="page-footer">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6525360745fd25f2aba1776_58817992', 'page_footer', $this->tplIndex);
?>

            </footer>
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_21447387685fd25f2ab81940_53013472 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21447387685fd25f2ab81940_53013472',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_17501900945fd25f2ab83872_24921809',
  ),
  'page_content' => 
  array (
    0 => 'Block_11802684915fd25f2ab83af9_07907935',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_6122934285fd25f2ab83d44_05734529',
  ),
  'after_cover_thumbnails' => 
  array (
    0 => 'Block_21219249785fd25f2ab85943_08527401',
  ),
  'after_cover_thumbnails2' => 
  array (
    0 => 'Block_18051546945fd25f2ab86049_94028775',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_11845296125fd25f2ab86d72_09342985',
  ),
  'product_brand_below' => 
  array (
    0 => 'Block_18340721785fd25f2ab86ff5_38477685',
    1 => 'Block_10848738055fd25f2ab899b6_60358752',
  ),
  'page_header' => 
  array (
    0 => 'Block_16402770965fd25f2ab88d16_32085977',
  ),
  'page_title' => 
  array (
    0 => 'Block_10794590525fd25f2ab88f90_13642196',
  ),
  'hook_display_product_rating' => 
  array (
    0 => 'Block_16618077435fd25f2ab8d942_85717065',
  ),
  'product_prices' => 
  array (
    0 => 'Block_20875318045fd25f2ab8e4c6_56035523',
    1 => 'Block_2130119495fd25f2ab94035_62834716',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_15191625555fd25f2ab8ede1_35166037',
  ),
  'product_customization' => 
  array (
    0 => 'Block_3956232185fd25f2ab90057_92862493',
  ),
  'product_buy' => 
  array (
    0 => 'Block_18787014955fd25f2ab90af6_32484367',
  ),
  'product_variants' => 
  array (
    0 => 'Block_3973984585fd25f2ab91833_62684990',
  ),
  'product_pack' => 
  array (
    0 => 'Block_6289747585fd25f2ab921f5_51747597',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_13297415425fd25f2ab93085_96218299',
    1 => 'Block_7266880905fd25f2ab9daf0_90894456',
    2 => 'Block_2351456665fd25f2ab9f932_29818806',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_5404076355fd25f2ab947a1_20337468',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_21127580955fd25f2ab94de2_04802779',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_12386430435fd25f2ab95410_73332016',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_12521227035fd25f2ab95783_57368562',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_3912102125fd25f2ab95fa2_33569857',
  ),
  'product_accessories_footer' => 
  array (
    0 => 'Block_7466405765fd25f2ab9cd03_99611030',
  ),
  'product_accessories_sidebar_mobile' => 
  array (
    0 => 'Block_19806821645fd25f2ab9ecf9_76409403',
  ),
  'product_footer' => 
  array (
    0 => 'Block_20199849345fd25f2aba06d8_59976517',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_21372311565fd25f2aba0ed3_24240862',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7396940675fd25f2aba1512_81761786',
  ),
  'page_footer' => 
  array (
    0 => 'Block_6525360745fd25f2aba1776_58817992',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main" itemscope itemtype="https://schema.org/Product">
        <div id="product-preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
        <div id="main-product-wrapper" class="product-container">
        <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

        <?php if ($_smarty_tpl->tpl_vars['product']->value['upc']) {?>
        <meta itemprop="gtin12" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['upc'], ENT_QUOTES, 'UTF-8');?>
">
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['ean13']) {?>
        <meta itemprop="gtin13" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['ean13'], ENT_QUOTES, 'UTF-8');?>
">
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['product']->value['upc'] && !$_smarty_tpl->tpl_vars['product']->value['ean13']) {?>
            <meta itemprop="identifier_exists" content="no">
        <?php }?>


        <div class="row product-info-row">
            <div class="col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_img_width'], ENT_QUOTES, 'UTF-8');?>
 col-product-image">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17501900945fd25f2ab83872_24921809', 'page_content_container', $this->tplIndex);
?>

            </div>

            <div class="col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_content_width'], ENT_QUOTES, 'UTF-8');?>
 col-product-info">
                <div id="col-product-info">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11845296125fd25f2ab86d72_09342985', 'page_header_container', $this->tplIndex);
?>


                <div class="product-information">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15191625555fd25f2ab8ede1_35166037', 'product_description_short', $this->tplIndex);
?>


                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3956232185fd25f2ab90057_92862493', 'product_customization', $this->tplIndex);
?>

                    <?php }?>

                    <div class="product-actions">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18787014955fd25f2ab90af6_32484367', 'product_buy', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3912102125fd25f2ab95fa2_33569857', 'hook_display_reassurance', $this->tplIndex);
?>


                        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs_placement'] == 'rightcolumn') {?>
                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'tabh' || $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'tabha') {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-h.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'section') {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-sections.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'accordion') {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-accordion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php }?>
                        <?php }?>

                    </div>
                </div>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_sidebar']) {?>
                <div class="col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_sidebar'], ENT_QUOTES, 'UTF-8');?>
 sidebar product-sidebar">
                <div class="pb-right-column span3">
                    <h1 class="oNas"> Dlaczego my </h1>
                    <span class="line-02"></span>
                    <div class="ch-info">
                        <ul>
                            <li>
                                <button class="add_products" href=""> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 450.391 450.391" style="enable-background:new 0 0 450.391 450.391;" xml:space="preserve">
<g>
    <g>
        <g>
            <path d="M143.673,350.322c-25.969,0-47.02,21.052-47.02,47.02c0,25.969,21.052,47.02,47.02,47.02     c25.969,0,47.02-21.052,47.02-47.02C190.694,371.374,169.642,350.322,143.673,350.322z M143.673,423.465     c-14.427,0-26.122-11.695-26.122-26.122c0-14.427,11.695-26.122,26.122-26.122c14.427,0,26.122,11.695,26.122,26.122     C169.796,411.77,158.1,423.465,143.673,423.465z"/>
            <path d="M342.204,350.322c-25.969,0-47.02,21.052-47.02,47.02c0,25.969,21.052,47.02,47.02,47.02s47.02-21.052,47.02-47.02     C389.224,371.374,368.173,350.322,342.204,350.322z M342.204,423.465c-14.427,0-26.122-11.695-26.122-26.122     c0-14.427,11.695-26.122,26.122-26.122s26.122,11.695,26.122,26.122C368.327,411.77,356.631,423.465,342.204,423.465z"/>
            <path d="M448.261,76.037c-2.176-2.377-5.153-3.865-8.359-4.18L99.788,67.155L90.384,38.42     C83.759,19.211,65.771,6.243,45.453,6.028H10.449C4.678,6.028,0,10.706,0,16.477s4.678,10.449,10.449,10.449h35.004     c11.361,0.251,21.365,7.546,25.078,18.286l66.351,200.098l-5.224,12.016c-5.827,15.026-4.077,31.938,4.702,45.453     c8.695,13.274,23.323,21.466,39.184,21.943h203.233c5.771,0,10.449-4.678,10.449-10.449c0-5.771-4.678-10.449-10.449-10.449     H175.543c-8.957-0.224-17.202-4.936-21.943-12.539c-4.688-7.51-5.651-16.762-2.612-25.078l4.18-9.404l219.951-22.988     c24.16-2.661,44.034-20.233,49.633-43.886l25.078-105.012C450.96,81.893,450.36,78.492,448.261,76.037z M404.376,185.228     c-3.392,15.226-16.319,26.457-31.869,27.69l-217.339,22.465L106.58,88.053l320.261,4.702L404.376,185.228z"/>
        </g>
    </g>
</g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
</svg></button>

                        <span>Dostępność od ręki</span>
                        </li>
                        <li>
                            <button class="add_products" href=""> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.998 511.998" style="enable-background:new 0 0 511.998 511.998;" xml:space="preserve">
<g>
    <g>
        <path d="M414.498,188.525h-32.234l9.712-111.509c0.018-0.202,0.021-0.401,0.022-0.6c0-0.017,0.002-0.033,0.002-0.05    c0-0.003,0-0.005,0-0.008c0-3.035-1.831-5.71-4.522-6.873c-0.023-0.01-0.045-0.022-0.068-0.032c-0.167-0.07-0.34-0.13-0.514-0.188    c-0.065-0.021-0.127-0.047-0.192-0.067c-0.142-0.043-0.288-0.077-0.433-0.112c-0.102-0.024-0.2-0.053-0.303-0.073    c-0.127-0.025-0.259-0.041-0.389-0.06c-0.122-0.018-0.242-0.039-0.365-0.05c-0.021-0.002-0.04-0.006-0.061-0.008    c-0.132-0.012-0.262-0.01-0.393-0.015c-0.088-0.003-0.174-0.013-0.262-0.013h-0.094c-0.008,0-0.016,0-0.023,0H231.01    c-4.14,0-7.5,3.36-7.5,7.5c0,4.13,3.36,7.5,7.5,7.5h145.313l-14.926,171.375c-0.002,0.013-0.002,0.026-0.004,0.039l-3.766,43.241    H97.018l4.359-44.998h49.621c4.143,0,7.5-3.358,7.5-7.5c0-4.142-3.357-7.5-7.5-7.5h-48.167l9.204-94.995h78.975    c4.143,0,7.5-3.358,7.5-7.5c0-4.142-3.357-7.5-7.5-7.5h-77.521l4.328-44.662h83.193c4.13,0,7.5-3.37,7.5-7.5    c0-4.14-3.37-7.5-7.5-7.5h-90c-0.004,0-0.007,0.001-0.011,0.001c-3.523-0.001-6.579,2.479-7.318,5.917    c-0.005,0.025-0.014,0.049-0.019,0.074c-0.038,0.187-0.063,0.378-0.088,0.57c-0.007,0.061-0.02,0.119-0.026,0.18    c-0.001,0.012-0.004,0.023-0.005,0.035l-5.124,52.885H7.5c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h89.465    l-9.204,94.995H61.002c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h25.306l-5.012,51.721    c-0.001,0.008-0.001,0.016-0.002,0.023l-7.749,79.979c-0.001,0.009-0.002,0.019-0.003,0.027l-0.003,0.029    c-0.01,0.104-0.009,0.206-0.015,0.31c-0.007,0.138-0.021,0.273-0.021,0.413c0,0.006,0.001,0.012,0.001,0.019    c0,0.193,0.014,0.383,0.028,0.573c0.006,0.061,0.004,0.123,0.011,0.183c0.02,0.194,0.053,0.385,0.088,0.575    c0.01,0.056,0.015,0.113,0.026,0.168c0.029,0.144,0.07,0.283,0.108,0.424c0.026,0.099,0.047,0.2,0.077,0.297    c0.009,0.027,0.021,0.053,0.029,0.081c0.363,1.116,0.979,2.118,1.783,2.936c0.015,0.015,0.027,0.032,0.042,0.046    c0.08,0.08,0.167,0.152,0.251,0.228c0.517,0.474,1.101,0.876,1.74,1.191c0.133,0.066,0.264,0.135,0.4,0.192    c0.041,0.018,0.085,0.03,0.127,0.046c0.188,0.075,0.377,0.147,0.572,0.208c0.018,0.005,0.035,0.008,0.053,0.014    c0.222,0.066,0.446,0.124,0.675,0.171c0.03,0.006,0.061,0.008,0.09,0.014c0.218,0.041,0.437,0.076,0.66,0.098    c0.005,0,0.009,0.001,0.014,0.002c0.246,0.024,0.49,0.036,0.732,0.036c0.003,0,0.007-0.001,0.011-0.001h33.388    c3.687,27.953,27.652,49.603,56.597,49.603c28.943,0,52.908-21.65,56.595-49.603H347.9c3.688,27.953,27.652,49.603,56.596,49.603    c28.943,0,52.91-21.65,56.598-49.603h33.396c0.005,0,0.011,0.001,0.016,0.001c0.25,0,0.496-0.015,0.74-0.039    c0.044-0.004,0.086-0.013,0.13-0.018c0.195-0.023,0.389-0.05,0.579-0.088c0.082-0.016,0.161-0.038,0.242-0.057    c0.147-0.034,0.295-0.07,0.439-0.113c0.098-0.029,0.193-0.063,0.289-0.096c0.123-0.042,0.246-0.086,0.367-0.135    c0.104-0.041,0.203-0.086,0.304-0.131c0.11-0.051,0.22-0.103,0.327-0.158c0.102-0.052,0.2-0.106,0.298-0.162    c0.103-0.06,0.205-0.122,0.306-0.186c0.094-0.06,0.188-0.121,0.278-0.185c0.102-0.071,0.199-0.146,0.298-0.222    c0.082-0.065,0.165-0.129,0.245-0.197c0.103-0.087,0.2-0.178,0.298-0.271c0.068-0.065,0.139-0.129,0.205-0.197    c0.104-0.106,0.203-0.218,0.302-0.331c0.053-0.061,0.108-0.12,0.159-0.182c0.11-0.136,0.21-0.276,0.31-0.417    c0.034-0.049,0.072-0.095,0.105-0.145c0.122-0.183,0.237-0.371,0.343-0.565c0.008-0.012,0.016-0.023,0.021-0.036    c0.113-0.208,0.217-0.421,0.31-0.641c0.026-0.063,0.046-0.128,0.071-0.191c0.061-0.155,0.121-0.31,0.172-0.471    c0.033-0.104,0.057-0.211,0.086-0.316c0.033-0.125,0.068-0.249,0.096-0.376c0.025-0.113,0.041-0.229,0.06-0.344    c0.017-0.101,0.039-0.2,0.052-0.303c0.318-2.548,6.191-49.667,8.814-80.135c0.003-0.029,0.004-0.059,0.007-0.088    c0.755-8.783,1.239-16.179,1.239-20.707C511.998,232.264,468.26,188.525,414.498,188.525z M380.957,203.527h30.683l-3.919,44.996    h-30.683L380.957,203.527z M171.008,428.129c-23.217,0-42.105-18.888-42.105-42.104s18.889-42.104,42.105-42.104    s42.104,18.888,42.104,42.104S194.224,428.129,171.008,428.129z M404.496,428.129c-23.216,0-42.103-18.888-42.103-42.104    s18.888-42.104,42.103-42.104c23.217,0,42.105,18.888,42.105,42.104S427.713,428.129,404.496,428.129z M487.863,378.522h-26.767    c-3.686-27.955-27.652-49.606-56.598-49.606c-28.944,0-52.91,21.652-56.596,49.606H227.604    c-3.686-27.955-27.651-49.606-56.596-49.606s-52.912,21.652-56.598,49.606H89.266l6.299-65.004H364.5v0.004    c0.004,0,0.007,0,0.011,0c0.251,0,0.5-0.014,0.746-0.039c0.046-0.004,0.091-0.014,0.137-0.02c0.196-0.023,0.391-0.051,0.583-0.089    c0.083-0.017,0.164-0.04,0.246-0.06c0.15-0.036,0.3-0.071,0.446-0.115c0.1-0.03,0.195-0.066,0.292-0.1    c0.126-0.044,0.252-0.087,0.374-0.137c0.105-0.043,0.206-0.091,0.308-0.139c0.111-0.051,0.222-0.102,0.329-0.158    c0.102-0.054,0.202-0.112,0.303-0.17c0.103-0.06,0.205-0.121,0.305-0.185c0.097-0.063,0.189-0.129,0.282-0.195    c0.099-0.07,0.195-0.142,0.291-0.217c0.086-0.069,0.171-0.14,0.255-0.213c0.095-0.082,0.188-0.166,0.278-0.253    c0.076-0.073,0.152-0.148,0.226-0.225c0.09-0.094,0.177-0.191,0.263-0.29c0.067-0.078,0.133-0.156,0.197-0.236    c0.083-0.105,0.162-0.213,0.24-0.322c0.059-0.082,0.116-0.164,0.172-0.248c0.073-0.113,0.143-0.229,0.21-0.347    c0.051-0.088,0.103-0.176,0.149-0.266c0.063-0.118,0.117-0.238,0.174-0.359c0.044-0.097,0.089-0.192,0.129-0.292    c0.049-0.118,0.09-0.239,0.133-0.36c0.037-0.107,0.076-0.214,0.109-0.324c0.033-0.116,0.06-0.235,0.09-0.353    c0.029-0.119,0.061-0.237,0.084-0.358c0.023-0.118,0.037-0.238,0.055-0.358c0.018-0.124,0.039-0.246,0.051-0.372    c0.002-0.018,0.006-0.035,0.007-0.053l3.759-43.15h38.762c22.979,0,33.343,11.906,44.314,24.512    c9.053,10.401,19.16,22.006,36.34,24.837C492.968,335.938,489.441,365.554,487.863,378.522z M496.432,297.838    c-11.145-2.272-18.002-10.107-26.309-19.651c-10.389-11.935-23.072-26.5-47.385-29.214l3.88-44.548    c39.764,5.881,70.38,40.229,70.38,81.602C496.998,288.838,496.788,292.922,496.432,297.838z"/>
    </g>
</g>
                                    <g>
                                        <g>
                                            <path d="M171.008,358.524c-15.163,0-27.5,12.336-27.5,27.5s12.337,27.5,27.5,27.5c15.163,0,27.5-12.336,27.5-27.5    C198.508,370.861,186.171,358.524,171.008,358.524z M171.008,398.524c-6.893,0-12.5-5.607-12.5-12.5s5.607-12.5,12.5-12.5    s12.5,5.607,12.5,12.5S177.9,398.524,171.008,398.524z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M404.496,358.524c-15.163,0-27.5,12.336-27.5,27.5s12.337,27.5,27.5,27.5c15.163,0,27.5-12.336,27.5-27.5    C431.996,370.861,419.659,358.524,404.496,358.524z M404.496,398.524c-6.893,0-12.5-5.607-12.5-12.5s5.607-12.5,12.5-12.5    s12.5,5.607,12.5,12.5S411.389,398.524,404.496,398.524z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M71,188.527H34.334c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5H71c4.143,0,7.5-3.358,7.5-7.5    C78.5,191.885,75.143,188.527,71,188.527z"/>
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
</svg></button>

                            <span>Natychmiastowa i bezpieczna wysyłka!</span>
                        </li>
                        <li>
                            <button class="add_products" href=""> <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512"><g><g><path d="m503.007 260.23-189.35-105.334c-5.326-2.964-11.687-2.964-17.015 0l-51.355 28.568c-.66-25.468-9.054-49.69-24.091-69.873h233.966v2.437c0 4.937 2.786 9.287 7.27 11.353 4.483 2.065 9.601 1.357 13.353-1.852l31.836-27.217c2.782-2.378 4.377-5.84 4.377-9.5s-1.595-7.123-4.377-9.502l-31.836-27.217c-3.753-3.208-8.868-3.918-13.353-1.852-4.484 2.066-7.27 6.417-7.27 11.354v2.437h-227.202c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h234.704c4.142 0 7.5-3.358 7.5-7.5v-4.512l25.489 21.791-25.489 21.791v-4.511c0-4.142-3.358-7.5-7.5-7.5h-257.74c-3.02 0-5.745 1.811-6.915 4.595s-.555 5.999 1.559 8.155c19.852 20.25 30.784 47.016 30.784 75.366 0 59.373-48.303 107.676-107.676 107.676s-107.676-48.303-107.676-107.676 48.303-107.676 107.676-107.676h71.924c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-64.424v-14.23h12.056c9.649 0 17.5-7.851 17.5-17.5v-14.801c0-9.649-7.851-17.5-17.5-17.5h-39.112c-9.649 0-17.5 7.851-17.5 17.5v14.801c0 9.649 7.851 17.5 17.5 17.5h12.056v14.466c-13.966.847-27.308 4.036-39.637 9.187l-14.58-14.58c-3.305-3.306-7.7-5.126-12.375-5.126s-9.069 1.821-12.375 5.126l-10.464 10.465c-6.823 6.823-6.823 17.925 0 24.749l8.098 8.098c-20.96 22.019-33.843 51.793-33.843 84.521 0 67.644 55.032 122.676 122.676 122.676 44.577 0 83.673-23.902 105.156-59.561l76.154-42.515c.754-.421 1.657-.425 2.416-.012l168.536 91.96v95.663c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-92.219h4.561c9.649 0 17.5-7.851 17.5-17.5v-9.678c.001-6.346-3.445-12.206-8.992-15.291zm-402.387-227.929v-14.801c0-1.378 1.122-2.5 2.5-2.5h39.112c1.378 0 2.5 1.122 2.5 2.5v14.801c0 1.378-1.122 2.5-2.5 2.5h-39.112c-1.378 0-2.5-1.122-2.5-2.5zm-64.269 47.644 10.465-10.466c.637-.637 1.381-.732 1.768-.732s1.13.095 1.768.732l11.007 11.007c-5.828 3.377-11.354 7.219-16.527 11.476l-8.481-8.481c-.975-.975-.975-2.561 0-3.536zm460.649 205.256c0 1.378-1.122 2.5-2.5 2.5h-9.423l-171.49-93.572c-5.31-2.898-11.633-2.867-16.913.082l-57.979 32.368c2.81-8.154 4.779-16.694 5.812-25.517l59.426-33.059c.38-.212.798-.317 1.215-.317s.835.105 1.215.317l189.35 105.335c.792.441 1.284 1.278 1.284 2.185v9.678z"/><path d="m482.439 424.801c-4.142 0-7.5 3.358-7.5 7.5v62.199c0 1.378-1.122 2.5-2.5 2.5h-30.713v-158.235c0-9.649-7.851-17.5-17.5-17.5h-238.152c-9.649 0-17.5 7.851-17.5 17.5v158.235h-26.702c-1.378 0-2.5-1.122-2.5-2.5v-160.06c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v160.06c0 9.649 7.851 17.5 17.5 17.5h330.567c9.649 0 17.5-7.851 17.5-17.5v-62.199c0-4.142-3.358-7.5-7.5-7.5zm-298.865-18.12h243.152v20.419h-243.152zm243.152-15h-243.152v-20.418h243.152zm-243.152 50.419h243.152v20.419h-243.152zm106.336 35.419h30.479v19.481h-30.479zm45.48 19.481v-19.481h91.336v19.481zm-149.316-160.735h238.152c1.378 0 2.5 1.122 2.5 2.5v17.498h-243.152v-17.498c0-1.378 1.121-2.5 2.5-2.5zm-2.5 141.254h91.336v19.481h-91.336z"/><path d="m330.425 294.847c9.649 0 17.5-7.851 17.5-17.5v-13.076c0-9.649-7.851-17.5-17.5-17.5h-46.539c-9.649 0-17.5 7.851-17.5 17.5v13.076c0 9.649 7.851 17.5 17.5 17.5zm-49.039-17.5v-13.076c0-1.378 1.122-2.5 2.5-2.5h46.539c1.378 0 2.5 1.122 2.5 2.5v13.076c0 1.378-1.122 2.5-2.5 2.5h-46.539c-1.378 0-2.5-1.122-2.5-2.5z"/><path d="m34.56 186.707c0 48.587 39.529 88.116 88.116 88.116s88.116-39.529 88.116-88.116-39.529-88.116-88.116-88.116-88.116 39.529-88.116 88.116zm161.232 0c0 40.316-32.8 73.116-73.116 73.116s-73.116-32.8-73.116-73.116 32.8-73.116 73.116-73.116 73.116 32.8 73.116 73.116z"/><path d="m130.176 162.491c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v24.216c0 1.979.782 3.878 2.176 5.283l11.063 11.149c1.466 1.478 3.395 2.217 5.324 2.217 1.91 0 3.82-.725 5.283-2.176 2.94-2.917 2.958-7.667.041-10.606l-8.887-8.956z"/><circle cx="122.68" cy="131.828" r="7.501"/><circle cx="122.68" cy="241.589" r="7.501"/><path d="m156.182 153.206c2.929 2.929 7.679 2.929 10.609 0 2.929-2.929 2.929-7.679 0-10.609-2.93-2.929-7.679-2.929-10.609 0-2.93 2.93-2.93 7.68 0 10.609z"/><path d="m89.178 220.211c-2.93-2.929-7.679-2.929-10.609 0-2.93 2.929-2.93 7.679 0 10.609 2.929 2.929 7.679 2.929 10.609 0 2.929-2.93 2.929-7.68 0-10.609z"/><circle cx="177.56" cy="186.709" r="7.501"/><circle cx="67.799" cy="186.709" r="7.501"/><path d="m156.182 230.819c2.929 2.929 7.679 2.929 10.609 0 2.929-2.929 2.929-7.679 0-10.609-2.93-2.929-7.679-2.929-10.609 0-2.93 2.93-2.93 7.68 0 10.609z"/><path d="m89.178 142.598c-2.93-2.929-7.679-2.929-10.609 0-2.93 2.929-2.93 7.679 0 10.609 2.929 2.929 7.679 2.929 10.609 0 2.929-2.93 2.929-7.68 0-10.609z"/></g></g></svg></button>

                            <span>Wszystkie produkty na magazynie!</span>
                        </li>
                        <li>
                            <button class="add_products" href=""> <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512"><g><g><path d="m444.671 170.541c-4.039-6.014-7.854-11.695-9.285-17.052-1.529-5.718-1.072-12.767-.588-20.229.724-11.142 1.471-22.664-4.223-32.505-5.783-9.994-16.223-15.121-26.32-20.08-6.633-3.258-12.898-6.335-16.968-10.405s-7.147-10.335-10.405-16.969c-4.958-10.096-10.085-20.537-20.08-26.319-9.841-5.694-21.362-4.947-32.505-4.224-7.463.485-14.512.941-20.23-.587-5.358-1.432-11.038-5.247-17.052-9.285-8.992-6.04-19.186-12.886-31.015-12.886-11.828 0-22.022 6.846-31.016 12.885-6.014 4.039-11.695 7.854-17.053 9.286-5.717 1.528-12.766 1.072-20.23.587-11.142-.723-22.663-1.47-32.504 4.224-9.994 5.783-15.121 16.223-20.08 26.319-3.258 6.633-6.335 12.899-10.404 16.969-4.07 4.07-10.335 7.147-16.969 10.404-10.097 4.958-20.537 10.086-26.319 20.08-5.694 9.842-4.947 21.363-4.224 32.505.484 7.462.941 14.511-.587 20.23-1.432 5.358-5.247 11.039-9.286 17.053-6.039 8.994-12.885 19.187-12.885 31.016s6.846 22.022 12.885 31.016c4.039 6.014 7.854 11.695 9.286 17.053 1.528 5.719 1.071 12.768.587 20.23-.722 11.142-1.47 22.663 4.224 32.504 5.783 9.994 16.223 15.121 26.319 20.08 6.633 3.258 12.899 6.335 16.969 10.405s7.147 10.335 10.404 16.969c4.958 10.097 10.086 20.537 20.08 26.319 9.842 5.694 21.363 4.946 32.505 4.224 2.171-.141 4.3-.273 6.379-.361v116.317c0 5.504 2.804 10.503 7.5 13.373 2.52 1.54 5.336 2.315 8.163 2.315 2.44 0 4.889-.578 7.158-1.742l38.774-19.876c.202-.105.445-.104.645 0l38.775 19.876c4.896 2.51 10.625 2.297 15.322-.574 4.695-2.87 7.499-7.869 7.499-13.373v-45.967c0-4.133-3.35-7.483-7.483-7.483s-7.483 3.35-7.483 7.483v45.967c0 .118 0 .396-.338.603-.339.208-.586.08-.692.026l-38.775-19.877c-4.475-2.293-9.82-2.293-14.298 0l-38.776 19.877c-.105.054-.352.179-.69-.026-.338-.207-.338-.485-.338-.603v-115.015c5.03 1.629 10.337 5.17 15.937 8.931 8.994 6.039 19.187 12.885 31.016 12.885s22.023-6.846 31.016-12.885c5.6-3.761 10.907-7.302 15.937-8.931v34.432c0 4.133 3.35 7.483 7.483 7.483s7.483-3.35 7.483-7.483v-35.735c2.079.088 4.208.22 6.38.361 11.142.723 22.663 1.469 32.504-4.224 9.994-5.782 15.121-16.222 20.079-26.318 3.258-6.634 6.335-12.899 10.406-16.969 4.07-4.07 10.335-7.147 16.968-10.405 10.097-4.958 20.537-10.085 26.32-20.08 5.694-9.842 4.946-21.363 4.223-32.506-.484-7.462-.941-14.511.587-20.229 1.432-5.358 5.248-11.038 9.286-17.052 6.04-8.994 12.886-19.188 12.886-31.016.002-11.829-6.844-22.023-12.884-31.016zm-12.424 53.689c-4.544 6.767-9.243 13.764-11.32 21.531-2.163 8.096-1.604 16.721-1.062 25.063.605 9.324 1.176 18.131-2.243 24.042-3.507 6.059-11.5 9.985-19.963 14.141-7.437 3.652-15.127 7.429-20.953 13.255-5.827 5.826-9.604 13.517-13.257 20.955-4.156 8.463-8.081 16.456-14.14 19.962-5.911 3.418-14.718 2.847-24.041 2.243-8.342-.541-16.968-1.101-25.064 1.063-7.766 2.076-14.764 6.775-21.531 11.32-7.921 5.319-15.402 10.344-22.673 10.344-7.27 0-14.751-5.024-22.672-10.344-6.767-4.545-13.765-9.244-21.532-11.32-4.445-1.188-9.049-1.555-13.679-1.555-3.803 0-7.623.247-11.385.492-9.324.604-18.131 1.176-24.042-2.243-6.059-3.506-9.985-11.5-14.141-19.962-3.652-7.438-7.429-15.128-13.255-20.954s-13.516-9.603-20.954-13.255c-8.463-4.156-16.456-8.082-19.962-14.141-3.419-5.91-2.848-14.717-2.243-24.041.541-8.342 1.1-16.968-1.064-25.063-2.076-7.767-6.775-14.765-11.32-21.532-5.319-7.921-10.344-15.402-10.344-22.672s5.024-14.751 10.344-22.672c4.545-6.768 9.244-13.766 11.32-21.532 2.164-8.096 1.604-16.721 1.064-25.063-.605-9.324-1.176-18.131 2.243-24.042 3.506-6.059 11.5-9.985 19.962-14.141 7.438-3.652 15.128-7.429 20.954-13.255s9.603-13.516 13.255-20.953c4.156-8.463 8.082-16.457 14.141-19.963 5.909-3.419 14.716-2.848 24.041-2.243 8.342.541 16.968 1.102 25.063-1.063 7.767-2.076 14.765-6.775 21.532-11.32 7.923-5.322 15.404-10.346 22.674-10.346 7.271 0 14.751 5.024 22.673 10.344 6.767 4.545 13.764 9.244 21.531 11.32 8.095 2.164 16.721 1.604 25.063 1.063 9.322-.605 18.13-1.177 24.042 2.243 6.059 3.506 9.986 11.5 14.141 19.963 3.653 7.437 7.429 15.128 13.255 20.953 5.827 5.826 13.517 9.603 20.954 13.255 8.463 4.156 16.457 8.082 19.963 14.141 3.419 5.91 2.848 14.717 2.243 24.042-.542 8.341-1.101 16.967 1.063 25.063 2.075 7.766 6.775 14.764 11.32 21.531 5.319 7.921 10.344 15.402 10.344 22.673-.001 7.27-5.025 14.752-10.345 22.673z"/><path d="m256 58.778c-24.97 0-49.547 6.543-71.074 18.921-3.583 2.06-4.817 6.634-2.757 10.217 2.061 3.583 6.634 4.817 10.217 2.757 19.26-11.076 41.258-16.929 63.614-16.929 70.477 0 127.813 57.337 127.813 127.813s-57.336 127.813-127.813 127.813-127.813-57.337-127.813-127.813c0-34.14 13.295-66.237 37.395-90.337l.987-.971c2.945-2.9 2.982-7.637.082-10.582-2.901-2.945-7.638-2.981-10.582-.082l-1.027 1.012c-26.968 26.968-41.819 62.823-41.819 100.96 0 78.729 64.05 142.779 142.779 142.779 78.728 0 142.779-64.05 142.779-142.779-.002-78.729-64.053-142.779-142.781-142.779z"/><path d="m162.874 238.011c4.133 0 7.483-3.35 7.483-7.483v-57.942c0-4.133-3.35-7.483-7.483-7.483h-12.384c-4.133 0-7.483 3.35-7.483 7.483s3.35 7.483 7.483 7.483h4.901v50.459c.001 4.133 3.351 7.483 7.483 7.483z"/><path d="m346.001 161.078c-3.81-1.599-8.196.193-9.796 4.004l-28.185 67.158c-1.599 3.811.194 8.196 4.005 9.796.946.397 1.927.585 2.893.585 2.923 0 5.701-1.725 6.903-4.589l28.185-67.158c1.599-3.811-.194-8.196-4.005-9.796z"/><circle cx="306.448" cy="175.417" r="9.93"/><ellipse cx="351.58" cy="227.697" rx="9.93" ry="9.93" transform="matrix(.987 -.16 .16 .987 -31.933 59.257)"/><path d="m203.325 239.193c13.365 0 24.238-10.874 24.238-24.239v-26.796c0-13.365-10.873-24.238-24.238-24.238s-24.238 10.873-24.238 24.238v26.796c0 13.366 10.873 24.239 24.238 24.239zm-9.272-51.034c0-5.113 4.159-9.272 9.272-9.272s9.272 4.159 9.272 9.272v26.796c0 5.113-4.159 9.273-9.272 9.273s-9.272-4.16-9.272-9.273z"/><path d="m285.268 214.955v-26.796c0-13.365-10.874-24.238-24.239-24.238s-24.238 10.873-24.238 24.238v26.796c0 13.365 10.873 24.239 24.238 24.239 13.365-.001 24.239-10.874 24.239-24.239zm-33.511 0v-26.796c0-5.113 4.159-9.272 9.272-9.272s9.273 4.159 9.273 9.272v26.796c0 5.113-4.159 9.273-9.273 9.273-5.112-.001-9.272-4.161-9.272-9.273z"/></g></g></svg></button>

                            <span>Tylko oryginalne produkty!</span>
                        </li>
                        <li>
                            <button class="add_products" href=""> <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512"><g><path d="m449.068 388c4.142 0 7.5-3.358 7.5-7.5v-180c0-8.952-3.489-18.109-9.824-25.784l-55.623-67.394c-2.914-3.531-6.264-6.507-9.902-8.877.223-2.292.35-4.607.35-6.944v-84c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5c0 0-.015 84.715-.021 85.073-2.134-.378-4.3-.573-6.479-.573h-97c-6.829 0-13.523 1.916-19.516 5.437-.259.093-.516.197-.768.32l-73.111 35.612c-8.1 4.063-14.577 10.878-18.24 19.189-.04.091-.078.182-.114.274l-30.228 76.672c-1.519 3.854.373 8.209 4.227 9.729.903.356 1.833.524 2.749.524 2.99 0 5.816-1.801 6.979-4.751l30.169-76.524c2.269-5.069 6.236-9.222 11.105-11.666l38.628-18.815-38.556 46.715c-5.773 6.994-8.824 15.911-8.824 25.785v259c0 3.016.265 5.969.746 8.847l-77.282-34.244c-17.458-7.735-25.37-28.282-17.634-45.802.033-.076.065-.153.097-.229l48.883-121.484c1.546-3.843-.315-8.211-4.158-9.758-3.845-1.546-8.211.316-9.758 4.158l-48.84 121.371c-10.982 25.05.362 54.392 25.333 65.456l90.624 40.156c.111.049.224.085.336.128 9.198 14.372 25.1 23.899 43.153 23.899h185c28.458 0 52.5-24.042 52.5-52.5v-44c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v44c0 20.327-17.173 37.5-37.5 37.5h-185c-20.126 0-36.5-16.822-36.5-37.5v-259c0-6.438 1.814-11.901 5.393-16.236l55.623-67.394c5.177-6.272 12.279-9.87 19.484-9.87h97c1.413 0 2.821.143 4.212.413-4.695 16.011-16.325 29.371-32.03 36.066-4.107-6.869-11.615-11.479-20.183-11.479-12.958 0-23.5 10.542-23.5 23.5s10.542 23.5 23.5 23.5c11.983 0 21.893-9.018 23.318-20.623 20.199-7.64 35.473-23.828 42.278-43.587.653.657 1.285 1.348 1.889 2.08l55.623 67.395c4.122 4.994 6.393 10.76 6.393 16.236v180c-.001 4.141 3.357 7.499 7.499 7.499zm-137-224c-4.687 0-8.5-3.813-8.5-8.5s3.813-8.5 8.5-8.5 8.5 3.813 8.5 8.5-3.813 8.5-8.5 8.5z"/><path d="m247.068 399c1.919 0 3.839-.732 5.303-2.197l128-128c2.929-2.929 2.929-7.678 0-10.606-2.929-2.929-7.678-2.929-10.606 0l-128 128c-4.782 4.457-1.113 13.03 5.303 12.803z"/><path d="m263.068 320c17.92 0 32.5-14.58 32.5-32.5s-14.58-32.5-32.5-32.5h-1c-17.92 0-32.5 14.58-32.5 32.5s14.58 32.5 32.5 32.5zm-18.5-32.5c0-9.649 7.851-17.5 17.5-17.5h1c9.649 0 17.5 7.851 17.5 17.5s-7.851 17.5-17.5 17.5h-1c-9.649 0-17.5-7.851-17.5-17.5z"/><path d="m360.068 399h1c17.92 0 32.5-14.58 32.5-32.5s-14.58-32.5-32.5-32.5h-1c-17.92 0-32.5 14.58-32.5 32.5s14.58 32.5 32.5 32.5zm0-50h1c9.649 0 17.5 7.851 17.5 17.5s-7.851 17.5-17.5 17.5h-1c-9.649 0-17.5-7.851-17.5-17.5s7.851-17.5 17.5-17.5z"/></g></svg></button>

                            <span>Najlepsze ceny w kraju!</span>
                        </li>
                        <li>
                            <button class="add_products" href=""><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" enable-background="new 0 0 511.992 511.992" height="512" viewBox="0 0 511.992 511.992" width="512"><path d="m328.695 218.887c-6.245-6.245-16.38-6.248-22.628 0l-29.937 29.938c-18.296-7.687-48.832-38.156-56.568-56.568l29.938-29.938c6.248-6.248 6.248-16.379 0-22.627l-62.226-62.226c-6.243-6.244-16.38-6.248-22.627 0l-33.94 33.941c-16.831 16.83-18.89 44.844-5.798 78.881 37.719 98.07 179.074 200.389 232.072 147.393l33.941-33.941c6.248-6.248 6.248-16.379 0-22.627zm5.657 96.167c-7.029 7.027-24.183 6.476-44.767-1.442-53.186-20.455-114.294-81.469-134.811-134.811-7.918-20.585-8.47-37.738-1.442-44.767l22.627-22.627 39.598 39.598-22.626 22.627c-6.032 6.031-10.769 17.639.923 38.683 17.154 30.877 75.768 88.271 100.9 63.141l22.627-22.627 39.598 39.598z"/><path d="m383.996 0h-256c-48.523 0-88 39.477-88 88v256c0 48.523 39.477 88 88 88h70.941l43.339 72.231c6.19 10.317 21.212 10.379 27.439 0l43.34-72.231h70.941c48.523 0 88-39.477 88-88v-256c0-48.523-39.476-88-88-88zm56 344c0 30.879-25.122 56-56 56h-80c-5.62 0-10.828 2.949-13.72 7.769l-34.28 57.133-34.28-57.133c-2.892-4.819-8.1-7.769-13.72-7.769h-80c-30.878 0-56-25.121-56-56v-256c0-30.879 25.122-56 56-56h256c30.878 0 56 25.121 56 56z"/></svg></button>

                            <span>Najlepsza obsługa!</span>
                        </li>

                        </ul>

                    </div>

                </div>



            </div>
            <?php }?>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs_placement'] == 'footer') {?>
            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'tabh' || $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'tabha') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-h.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'section') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-sections.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'accordion') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-accordion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
        <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'tabh' || $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'tabha' || $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'accordion') {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductElementor'),$_smarty_tpl ) );?>

            <?php }?>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_accesories'] == 'footer') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7466405765fd25f2ab9cd03_99611030', 'product_accessories_footer', $this->tplIndex);
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_accesories'] == 'sidebar') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19806821645fd25f2ab9ecf9_76409403', 'product_accessories_sidebar_mobile', $this->tplIndex);
?>

        <?php }?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20199849345fd25f2aba06d8_59976517', 'product_footer', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21372311565fd25f2aba0ed3_24240862', 'product_images_modal', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7396940675fd25f2aba1512_81761786', 'page_footer_container', $this->tplIndex);
?>


    </section>
<?php
}
}
/* {/block 'content'} */
}
