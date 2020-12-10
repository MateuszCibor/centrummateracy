<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:25
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f693179e8_88098338',
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
function content_5fd25f693179e8_88098338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2625944325fd25f6930d118_97167314', 'product_thumbnail');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1369381955fd25f6930d916_33648949', 'product_description_block');
}
/* {block 'product_thumbnail'} */
class Block_2625944325fd25f6930d118_97167314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_2625944325fd25f6930d118_97167314',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_category_name'} */
class Block_3577225665fd25f6930e323_69695906 extends Smarty_Internal_Block
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
class Block_17442724425fd25f6930eff8_94034246 extends Smarty_Internal_Block
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
class Block_21193609125fd25f6930fdf1_37024458 extends Smarty_Internal_Block
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
class Block_303426135fd25f69310e72_44063892 extends Smarty_Internal_Block
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
class Block_1304077005fd25f69311af0_73414136 extends Smarty_Internal_Block
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
class Block_9252202815fd25f69312cc2_24288192 extends Smarty_Internal_Block
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
class Block_13594801385fd25f69315598_15645660 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_description_short'} */
class Block_8998577585fd25f69315d28_13484703 extends Smarty_Internal_Block
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
class Block_14908175155fd25f69316a82_30280066 extends Smarty_Internal_Block
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
class Block_16393934095fd25f69317144_85816393 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListBelowButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'product_add_cart_below'} */
/* {block 'product_description_block'} */
class Block_1369381955fd25f6930d916_33648949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_block' => 
  array (
    0 => 'Block_1369381955fd25f6930d916_33648949',
  ),
  'product_category_name' => 
  array (
    0 => 'Block_3577225665fd25f6930e323_69695906',
  ),
  'product_name' => 
  array (
    0 => 'Block_17442724425fd25f6930eff8_94034246',
  ),
  'product_brand' => 
  array (
    0 => 'Block_21193609125fd25f6930fdf1_37024458',
  ),
  'product_reference' => 
  array (
    0 => 'Block_303426135fd25f69310e72_44063892',
  ),
  'product_variants' => 
  array (
    0 => 'Block_1304077005fd25f69311af0_73414136',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_9252202815fd25f69312cc2_24288192',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_13594801385fd25f69315598_15645660',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_8998577585fd25f69315d28_13484703',
  ),
  'product_add_cart' => 
  array (
    0 => 'Block_14908175155fd25f69316a82_30280066',
  ),
  'product_add_cart_below' => 
  array (
    0 => 'Block_16393934095fd25f69317144_85816393',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3577225665fd25f6930e323_69695906', 'product_category_name', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17442724425fd25f6930eff8_94034246', 'product_name', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21193609125fd25f6930fdf1_37024458', 'product_brand', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_303426135fd25f69310e72_44063892', 'product_reference', $this->tplIndex);
?>



            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1304077005fd25f69311af0_73414136', 'product_variants', $this->tplIndex);
?>


        </div>
        <div class="col col-auto product-miniature-right">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9252202815fd25f69312cc2_24288192', 'product_price_and_shipping', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13594801385fd25f69315598_15645660', 'product_reviews', $this->tplIndex);
?>

        </div>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8998577585fd25f69315d28_13484703', 'product_description_short', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14908175155fd25f69316a82_30280066', 'product_add_cart', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16393934095fd25f69317144_85816393', 'product_add_cart_below', $this->tplIndex);
?>


</div>
<?php
}
}
/* {/block 'product_description_block'} */
}
