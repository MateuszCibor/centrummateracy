<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:25
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/listing/product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f691a16e2_05222438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32185a43aa1e1f3b3f551e15b698134ffed921db' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/catalog/listing/product-list.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
  ),
),false)) {
function content_5fd25f691a16e2_05222438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3525895105fd25f69195423_63314410', 'head_seo_canonical');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17669007395fd25f6919afe5_62071344', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo_canonical'} */
class Block_3525895105fd25f69195423_63314410 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo_canonical' => 
  array (
    0 => 'Block_3525895105fd25f69195423_63314410',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_smarty_tpl->tpl_vars['listing']->value['pagination'])) {?>
        <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['should_be_displayed']) {?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['pagination']['pages'], 'p_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p_page']->value) {
?>

                <?php if ($_smarty_tpl->tpl_vars['p_page']->value['current']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['p_page']->value['page'] == 1) {?>
                        <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
                            <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php }?>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
                            <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php } else { ?>
                            <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_page']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php }?>
                    <?php }?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['p_page']->value['type'] === 'previous') {?>
                    <?php if ($_smarty_tpl->tpl_vars['p_page']->value['clickable']) {?>
                            <link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_page']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php }?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['p_page']->value['type'] === 'next') {?>
                    <?php if ($_smarty_tpl->tpl_vars['p_page']->value['clickable']) {?>
                        <link rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_page']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php }?>
                <?php }?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
                <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
        <?php }?>
    <?php }
}
}
/* {/block 'head_seo_canonical'} */
/* {block 'product_list_header'} */
class Block_11406161185fd25f6919b285_19218834 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <h1 id="js-product-list-header" class="h1 page-title"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></h1>
        <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_active_filters'} */
class Block_16033934985fd25f6919bf86_94289390 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="">
                        <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

                    </div>
                <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list_top'} */
class Block_15806097295fd25f6919c770_77832238 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_facets_center'} */
class Block_5854347215fd25f6919cf65_85919916 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                   <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_faceted_position'] == 1) {?>
                    <div id="facets_search_center">
                        <?php if ($_smarty_tpl->tpl_vars['listing']->value['rendered_facets']) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_facetedsearch"),$_smarty_tpl ) );?>

                        <?php }?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAmazzingFilter'),$_smarty_tpl ) );?>

                    </div>
                   <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_faceted_position'] == 2) {?>
                        <div id="facets_search_center_dropdown">
                            <?php if ($_smarty_tpl->tpl_vars['listing']->value['rendered_facets']) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_facetedsearch"),$_smarty_tpl ) );?>

                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAmazzingFilter'),$_smarty_tpl ) );?>

                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'product_list_facets_center'} */
/* {block 'product_list'} */
class Block_9694587625fd25f6919f487_76488320 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="facets-loader-icon"><i class="fa fa-circle-o-notch fa-spin"></i></div>
                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_16044366075fd25f6919fc88_84868998 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'product_list_bottom_static'} */
class Block_8270996455fd25f691a0400_83892869 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_bottom_static'} */
/* {block 'product_list_not_found'} */
class Block_533140375fd25f691a08b6_59179735 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="alert alert-warning" role="alert">
                        <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no products.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</strong>
                    </div>
                <?php
}
}
/* {/block 'product_list_not_found'} */
/* {block 'product_list_bottom_static'} */
class Block_13289696325fd25f691a0fe8_43495099 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_bottom_static'} */
/* {block 'content'} */
class Block_17669007395fd25f6919afe5_62071344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17669007395fd25f6919afe5_62071344',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_11406161185fd25f6919b285_19218834',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_16033934985fd25f6919bf86_94289390',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_15806097295fd25f6919c770_77832238',
  ),
  'product_list_facets_center' => 
  array (
    0 => 'Block_5854347215fd25f6919cf65_85919916',
  ),
  'product_list' => 
  array (
    0 => 'Block_9694587625fd25f6919f487_76488320',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_16044366075fd25f6919fc88_84868998',
  ),
  'product_list_bottom_static' => 
  array (
    0 => 'Block_8270996455fd25f691a0400_83892869',
    1 => 'Block_13289696325fd25f691a0fe8_43495099',
  ),
  'product_list_not_found' => 
  array (
    0 => 'Block_533140375fd25f691a08b6_59179735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11406161185fd25f6919b285_19218834', 'product_list_header', $this->tplIndex);
?>

        <section id="products">
            <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16033934985fd25f6919bf86_94289390', 'product_list_active_filters', $this->tplIndex);
?>

                <div id="">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15806097295fd25f6919c770_77832238', 'product_list_top', $this->tplIndex);
?>

                </div>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5854347215fd25f6919cf65_85919916', 'product_list_facets_center', $this->tplIndex);
?>

                <div id="">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9694587625fd25f6919f487_76488320', 'product_list', $this->tplIndex);
?>

                </div>
                <div id="infinity-loader-icon"><i class="fa fa-circle-o-notch fa-spin"></i></div>
                <div id="js-product-list-bottom">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16044366075fd25f6919fc88_84868998', 'product_list_bottom', $this->tplIndex);
?>



                </div>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8270996455fd25f691a0400_83892869', 'product_list_bottom_static', $this->tplIndex);
?>

            <?php } else { ?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_533140375fd25f691a08b6_59179735', 'product_list_not_found', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13289696325fd25f691a0fe8_43495099', 'product_list_bottom_static', $this->tplIndex);
?>


            <?php }?>
        </section>

    </section>
<?php
}
}
/* {/block 'content'} */
}
