<?php
/* Smarty version 3.1.33, created on 2020-12-10 20:59:26
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/miniatures/pack-product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd27e1e79f5c4_67479930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '075d32d72b57435f45606787bbae94f91216821c' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/_partials/miniatures/pack-product.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd27e1e79f5c4_67479930 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11196893555fd27e1e79bd09_11258219', 'pack_miniature_item');
?>

<?php }
/* {block 'pack_miniature_item'} */
class Block_11196893555fd27e1e79bd09_11258219 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pack_miniature_item' => 
  array (
    0 => 'Block_11196893555fd27e1e79bd09_11258219',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article>
            <div class="pack-product-container">
                <div class="pack-product-quantity">
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['pack_quantity'], ENT_QUOTES, 'UTF-8');?>
x</span>
                </div>
                <div class="pack-product-thumb">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><img
                            class="img-fluid"
                            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'], ENT_QUOTES, 'UTF-8');?>
"
                            alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                            data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                    ></a>
                </div>
                <div class="pack-product-name">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                </div>
                <div class="pack-product-price">
                    <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</strong>
                </div>
            </div>
    </article>
<?php
}
}
/* {/block 'pack_miniature_item'} */
}
