<?php
/* Smarty version 3.1.33, created on 2020-12-10 20:17:36
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/_product_partials/product-cover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd27450188d51_97230714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48c8ebfbab42534cbee03f5e192521729d86208c' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/_product_partials/product-cover.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-flags.tpl' => 1,
  ),
),false)) {
function content_5fd27450188d51_97230714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19554440145fd2745017dca8_52350489', 'product_cover');
?>

<?php }
/* {block 'product_cover'} */
class Block_19554440145fd2745017dca8_52350489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_19554440145fd2745017dca8_52350489',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product-cover">

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div id="product-images-large" class="product-images-large slick-slider">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['images']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, NULL, 'covers', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_covers']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_covers']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_covers']->value['index'];
?>
                    <div class="product-lmage-large">
                        <div class="easyzoom easyzoom-product">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
" class="js-easyzoom-trigger" rel="nofollow"></a>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['images']) {?><a class="expander" data-toggle="modal" data-target="#product-modal"><span><i class="fa fa-expand" aria-hidden="true"></i></span></a><?php }?>
                        <img
                                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_covers']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_covers']->value['first'] : null)) {?> src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>data-lazy="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                alt="<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],40,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
                                title="<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],40,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
                                itemprop="image"
                                content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                                height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                                class="img-fluid"
                        >
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <div>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                         data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                         itemprop="image"
                         content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                         width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                         height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                         alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],40,'...' )), ENT_QUOTES, 'UTF-8');?>
"
                         class="img-fluid"
                    >
                </div>
            <?php }?>
        </div>
    </div>
<?php
}
}
/* {/block 'product_cover'} */
}
