<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:07
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f57794757_61678954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80cf638179ff4e64b4aba0c642101b6c21845983' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-2.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl' => 1,
    'file:catalog/_partials/variant-links.tpl' => 1,
    'file:catalog/_partials/miniatures/_partials/product-miniature-btn.tpl' => 1,
  ),
),false)) {
function content_5fd25f57794757_61678954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12175672395fd25f57789fb4_36688203', 'product_thumbnail');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20510645605fd25f5778a793_90540603', 'product_description_block');
}
/* {block 'product_thumbnail'} */
class Block_12175672395fd25f57789fb4_36688203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_12175672395fd25f57789fb4_36688203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_category_name'} */
class Block_7983650245fd25f5778b162_30686717 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['category_name'] != '') {?>
                    <div class="product-category-name text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['category_name'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
            <?php
}
}
/* {/block 'product_category_name'} */
/* {block 'product_name'} */
class Block_12107103255fd25f5778bdd9_99263830 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <h3 class="h3 product-title">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],90,'...' )), ENT_QUOTES, 'UTF-8');?>
</a>
                </h3>
            <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_brand'} */
class Block_748509495fd25f5778cb92_87018571 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['manufacturer_name']) && $_smarty_tpl->tpl_vars['product']->value['manufacturer_name'] != '') {?>
                    <div class="product-brand text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['manufacturer_name'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
            <?php
}
}
/* {/block 'product_brand'} */
/* {block 'product_reference'} */
class Block_18224905fd25f5778dba0_65340106 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['reference'] != '') {?>
                    <div class="product-reference text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
            <?php
}
}
/* {/block 'product_reference'} */
/* {block 'product_variants'} */
class Block_15858222195fd25f5778e7c8_34671565 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                    <div class="products-variants">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
                        <?php }?>
                    </div>
                <?php }?>
            <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_price_and_shipping'} */
class Block_6475840355fd25f5778fc30_45590773 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                    <div class="product-price-and-shipping">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                        <span class="product-price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                            <span class="regular-price text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
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
/* {block 'product_reviews'} */
class Block_11185151665fd25f57792402_13724978 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_description_short'} */
class Block_474163785fd25f57792b42_37087079 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="product-description-short text-muted">
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...' ));?>

        </div>
    <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_add_cart'} */
class Block_148138395fd25f57793883_90191792 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/_partials/product-miniature-btn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_add_cart'} */
/* {block 'product_add_cart_below'} */
class Block_15791305625fd25f57793f02_95332525 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListBelowButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'product_add_cart_below'} */
/* {block 'product_description_block'} */
class Block_20510645605fd25f5778a793_90540603 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_block' => 
  array (
    0 => 'Block_20510645605fd25f5778a793_90540603',
  ),
  'product_category_name' => 
  array (
    0 => 'Block_7983650245fd25f5778b162_30686717',
  ),
  'product_name' => 
  array (
    0 => 'Block_12107103255fd25f5778bdd9_99263830',
  ),
  'product_brand' => 
  array (
    0 => 'Block_748509495fd25f5778cb92_87018571',
  ),
  'product_reference' => 
  array (
    0 => 'Block_18224905fd25f5778dba0_65340106',
  ),
  'product_variants' => 
  array (
    0 => 'Block_15858222195fd25f5778e7c8_34671565',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_6475840355fd25f5778fc30_45590773',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_11185151665fd25f57792402_13724978',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_474163785fd25f57792b42_37087079',
  ),
  'product_add_cart' => 
  array (
    0 => 'Block_148138395fd25f57793883_90191792',
  ),
  'product_add_cart_below' => 
  array (
    0 => 'Block_15791305625fd25f57793f02_95332525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="product-description">

    <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCountDown'),$_smarty_tpl ) );?>

    <?php }?>

    <div class="row extra-small-gutters justify-content-end">
        <div class="col">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7983650245fd25f5778b162_30686717', 'product_category_name', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12107103255fd25f5778bdd9_99263830', 'product_name', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_748509495fd25f5778cb92_87018571', 'product_brand', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18224905fd25f5778dba0_65340106', 'product_reference', $this->tplIndex);
?>



            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15858222195fd25f5778e7c8_34671565', 'product_variants', $this->tplIndex);
?>


        </div>
        <div class="col col-auto product-miniature-right">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6475840355fd25f5778fc30_45590773', 'product_price_and_shipping', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11185151665fd25f57792402_13724978', 'product_reviews', $this->tplIndex);
?>

        </div>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_474163785fd25f57792b42_37087079', 'product_description_short', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148138395fd25f57793883_90191792', 'product_add_cart', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15791305625fd25f57793f02_95332525', 'product_add_cart_below', $this->tplIndex);
?>


</div>
<?php
}
}
/* {/block 'product_description_block'} */
}
