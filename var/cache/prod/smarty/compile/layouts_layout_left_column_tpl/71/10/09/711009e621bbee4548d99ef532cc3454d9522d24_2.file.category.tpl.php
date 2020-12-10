<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:25
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f6918a1c4_16180281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '711009e621bbee4548d99ef532cc3454d9522d24' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/listing/category.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/category-header.tpl' => 1,
    'file:catalog/_partials/category-subcategories.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
  ),
),false)) {
function content_5fd25f6918a1c4_16180281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php if (isset($_smarty_tpl->tpl_vars['category']->value)) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "justElementor", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'isJustElementor','categoryId'=>$_smarty_tpl->tpl_vars['category']->value['id']),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4440801665fd25f691735e8_69506668', 'head');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9632453805fd25f69175131_87407084', 'head_og_image');
?>


<?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'justElementor')) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14867472555fd25f6917b779_03577069', 'left_column');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10753538545fd25f6917bbd7_22910190', 'right_column');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13677207565fd25f6917bfd7_80706691', 'content_wrapper_start');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12800280325fd25f6917c454_63637162', 'content');
?>


<?php } else { ?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11216920595fd25f6917cc32_42920937', 'product_list_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9349757185fd25f69185f74_95589779', 'product_list_bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15877236295fd25f691867d1_25700986', 'product_list_bottom_static');
?>

    <?php }?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'head'} */
class Block_4440801665fd25f691735e8_69506668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_4440801665fd25f691735e8_69506668',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_bg_category']) {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'] != '') {?>
            <style> #wrapper .breadcrumb{  background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');?>
'); }</style>
        <?php }?>
    <?php }
}
}
/* {/block 'head'} */
/* {block 'head_og_image'} */
class Block_9632453805fd25f69175131_87407084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_og_image' => 
  array (
    0 => 'Block_9632453805fd25f69175131_87407084',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url']) {?>
        <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="og:image:width" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['width'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="og:image:height" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['height'], ENT_QUOTES, 'UTF-8');?>
">
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block 'head_og_image'} */
/* {block 'left_column'} */
class Block_14867472555fd25f6917b779_03577069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_14867472555fd25f6917b779_03577069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_10753538545fd25f6917bbd7_22910190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_10753538545fd25f6917bbd7_22910190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_wrapper_start'} */
class Block_13677207565fd25f6917bfd7_80706691 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper_start' => 
  array (
    0 => 'Block_13677207565fd25f6917bfd7_80706691',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <div id="content-wrapper" class="col-12">  <?php
}
}
/* {/block 'content_wrapper_start'} */
/* {block 'content'} */
class Block_12800280325fd25f6917c454_63637162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12800280325fd25f6917c454_63637162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryElementor'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'content'} */
/* {block 'product_list_header'} */
class Block_11216920595fd25f6917cc32_42920937 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_11216920595fd25f6917cc32_42920937',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
?>
    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_image'] == 1) {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url']) {?>
            <div class="category-image <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'onimage') {?>
                    <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
                        <div class="category-description category-description-image"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
                    <?php }?>
                <?php }?>
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
                     class="img-fluid" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['height'], ENT_QUOTES, 'UTF-8');?>
" >
            </div>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'onimage') {?>
                <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
                    <div class="category-description category-description-top <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
                <?php }?>
            <?php }?>
        <?php }?>
    <?php }?>


    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'above') {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
            <div class="category-description category-description-top <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
        <?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryElementor'),$_smarty_tpl ) );?>

    <?php }?>


    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'above-d') {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
                <div class="category-description category-description-top <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'below-d') {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryElementor'),$_smarty_tpl ) );?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_sub_thumbs'] == 1) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-subcategories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>


<?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_bottom'} */
class Block_9349757185fd25f69185f74_95589779 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_bottom' => 
  array (
    0 => 'Block_9349757185fd25f69185f74_95589779',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'product_list_bottom'} */
/* {block 'product_list_bottom_static'} */
class Block_15877236295fd25f691867d1_25700986 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_bottom_static' => 
  array (
    0 => 'Block_15877236295fd25f691867d1_25700986',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'below') {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
            <div class="category-description category-description-bottom <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>"><hr /><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
        <?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryElementor'),$_smarty_tpl ) );?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'above-d') {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryElementor'),$_smarty_tpl ) );?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'below-d') {?>
            <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>

                <div class="category-description category-description-top <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?> mt-4"><hr /><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
            <?php }?>
        <?php }?>


    <?php }
}
}
/* {/block 'product_list_bottom_static'} */
}
