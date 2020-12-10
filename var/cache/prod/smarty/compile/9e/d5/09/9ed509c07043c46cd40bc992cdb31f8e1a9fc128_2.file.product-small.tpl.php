<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:07
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/miniatures/product-small.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f576d0cc0_55178354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ed509c07043c46cd40bc992cdb31f8e1a9fc128' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/miniatures/product-small.tpl',
      1 => 1607294150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f576d0cc0_55178354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4160215755fd25f576c2d59_32938889', 'product_miniature_item');
?>

<?php }
/* {block 'product_thumbnail'} */
class Block_16921877445fd25f576c5152_03418204 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                <div class="thumbnail-container col-3">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
                        <img
                                src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                                data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                class="img-fluid promocja_img"
                        >
                        <?php } else { ?>
                            <img
                                    src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    class="img-fluid promocja_img"
                            >
                        <?php }?>
                    </a>

                </div>
            <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_7847263275fd25f576c7504_28929875 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <h4 class="product-title tytul_promocja"><a
                                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],40,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h4>
                <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_8675167195fd25f576c83b9_68074412 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_3612921425fd25f576c8c97_92075841 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                        <div class="product-price-and-shipping cena_promocja">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                            <span class="regular-price text-muted cena_przekreslona"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                                <span class="product-price cena_nowa" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>



                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                        </div>

                    <?php }?>
                <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_miniature_item'} */
class Block_4160215755fd25f576c2d59_32938889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_4160215755fd25f576c2d59_32938889',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_16921877445fd25f576c5152_03418204',
  ),
  'product_name' => 
  array (
    0 => 'Block_7847263275fd25f576c7504_28929875',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_8675167195fd25f576c83b9_68074412',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_3612921425fd25f576c8c97_92075841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['elementor']->value) && $_smarty_tpl->tpl_vars['elementor']->value) {?><div class="<?php if (isset($_smarty_tpl->tpl_vars['carousel']->value) && $_smarty_tpl->tpl_vars['carousel']->value) {?>product-carousel<?php } else { ?>col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbMobile']->value, ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbTablet']->value, ENT_QUOTES, 'UTF-8');?>
 col-lg-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbDesktop']->value, ENT_QUOTES, 'UTF-8');?>
 col-xl-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbDesktop']->value, ENT_QUOTES, 'UTF-8');
}?>"><?php }?>
    <div class="blok_promocyjny">
    <article class="product-miniature product-miniature-small js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
             data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">

        <div class="row align-items-center list-small-gutters">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16921877445fd25f576c5152_03418204', 'product_thumbnail', $this->tplIndex);
?>


            <div class="product-description col">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7847263275fd25f576c7504_28929875', 'product_name', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8675167195fd25f576c83b9_68074412', 'product_reviews', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3612921425fd25f576c8c97_92075841', 'product_price_and_shipping', $this->tplIndex);
?>



            </div>

            <?php if (isset($_smarty_tpl->tpl_vars['richData']->value) && $_smarty_tpl->tpl_vars['richData']->value) {?>
            <span itemprop="isRelatedTo"  itemscope itemtype="https://schema.org/Product" >
            <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
                <meta itemprop="image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
">
            <?php } else { ?>
                <meta itemprop="image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>

                <meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"/>
            <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
"/>
            <meta itemprop="description" content="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...' )), ENT_QUOTES, 'UTF-8');?>
"/>

            <span itemprop="offers" itemscope itemtype="https://schema.org/Offer" >
                <?php if (isset($_smarty_tpl->tpl_vars['currency']->value['iso_code'])) {?>
                    <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
                <?php }?>
                <meta itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"/>
            </span>
            </span>
            <?php }?>


        </div>
    </article>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'PSProductCountdown','id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product']),$_smarty_tpl ) );?>

        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'], ENT_QUOTES, 'UTF-8');?>
" method="post">

            <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="input-group input-group-add-cart">
                <button
                        class="btnw btn-product-list add-to-cart przycisk_kupteraz_zegar"
                        data-button-action="add-to-cart"
                        type="submit"
                        <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
                            disabled
                        <?php }?>
                ><i class="fa fa-shopping-bag"
                    aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                </button>
            </div>

        </form>
    </div>
    <?php if (isset($_smarty_tpl->tpl_vars['elementor']->value) && $_smarty_tpl->tpl_vars['elementor']->value) {?></div><?php }
}
}
/* {/block 'product_miniature_item'} */
}
