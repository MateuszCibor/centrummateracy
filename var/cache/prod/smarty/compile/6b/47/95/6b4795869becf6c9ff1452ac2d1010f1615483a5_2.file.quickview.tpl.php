<?php
/* Smarty version 3.1.33, created on 2020-12-10 20:17:36
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/quickview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd27450170ed2_20406780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b4795869becf6c9ff1452ac2d1010f1615483a5' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/quickview.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_5fd27450170ed2_20406780 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="quickview-modal" class="modal fade quickview" tabindex="-1"
     role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div id="quickview-modal-product-content" class="row no-gutters">
                    <div id="js-quickview-prev-btn" class="js-quickview-np-btn"><i class="fa fa-angle-left"></i></div>
                    <div id="js-quickview-next-btn" class="js-quickview-np-btn"><i class="fa fa-angle-right"></i></div>
                    <div class="col-md-6">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16845775845fd27450169565_36112085', 'product_cover_tumbnails');
?>

                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="quickview-info">
                            <div class="product_header_container">
                                <h1 class="h1"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h1>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21263866825fd2745016cdf6_53091200', 'product_prices');
?>

                            </div>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2208601035fd2745016d575_83411268', 'product_description_short');
?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2314026945fd2745016ddf0_95280700', 'product_buy');
?>

                            <div class="quickview-product-additional-info">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php }
/* {block 'product_cover_tumbnails'} */
class Block_16845775845fd27450169565_36112085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover_tumbnails' => 
  array (
    0 => 'Block_16845775845fd27450169565_36112085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_quickview'=>true), 0, false);
?>
                        <?php
}
}
/* {/block 'product_cover_tumbnails'} */
/* {block 'product_prices'} */
class Block_21263866825fd2745016cdf6_53091200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_21263866825fd2745016cdf6_53091200',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_2208601035fd2745016d575_83411268 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_2208601035fd2745016d575_83411268',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div id="product-description-short"
                                     itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
                            <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_6852931785fd2745016ec18_02810885 extends Smarty_Internal_Block
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
/* {block 'product_add_to_cart'} */
class Block_17683581435fd2745016fed5_88445065 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                        <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_19863639385fd27450170592_53518389 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_2314026945fd2745016ddf0_95280700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_2314026945fd2745016ddf0_95280700',
  ),
  'product_variants' => 
  array (
    0 => 'Block_6852931785fd2745016ec18_02810885',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_17683581435fd2745016fed5_88445065',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_19863639385fd27450170592_53518389',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="product-actions">
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6852931785fd2745016ec18_02810885', 'product_variants', $this->tplIndex);
?>


                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17683581435fd2745016fed5_88445065', 'product_add_to_cart', $this->tplIndex);
?>


                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19863639385fd27450170592_53518389', 'product_refresh', $this->tplIndex);
?>

                                    </form>
                                </div>
                            <?php
}
}
/* {/block 'product_buy'} */
}
