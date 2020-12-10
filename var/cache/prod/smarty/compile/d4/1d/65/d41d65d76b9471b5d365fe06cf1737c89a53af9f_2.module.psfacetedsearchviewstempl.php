<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:25
  from 'module:psfacetedsearchviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f6915eb49_81886656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd41d65d76b9471b5d365fe06cf1737c89a53af9f' => 
    array (
      0 => 'module:psfacetedsearchviewstempl',
      1 => 1607168843,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_facetedsearch/views/templates/front/catalog/facets-dropdown.tpl' => 1,
  ),
),false)) {
function content_5fd25f6915eb49_81886656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_faceted_position'] == 2) {?>
    <?php $_smarty_tpl->_subTemplateRender('module:ps_facetedsearch/views/templates/front/catalog/facets-dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else {
if (count($_smarty_tpl->tpl_vars['displayedFacets']->value)) {?>
  <div id="search_filters">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145234825fd25f69142480_51404261', 'facets_title');
?>



    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayedFacets']->value, 'facet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
?>
      <aside class="facet clearfix">
          <h4 class="block-title facet-title sasa"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></h4>
        <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
        <?php $_smarty_tpl->_assignInScope('_collapse', true);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {
$_smarty_tpl->_assignInScope('_collapse', false);
}?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


        <?php if (in_array($_smarty_tpl->tpl_vars['facet']->value['widgetType'],array('radio','checkbox'))) {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19654021185fd25f69149c62_37492720', 'facet_item_other');
?>


        <?php } elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'dropdown') {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17289021465fd25f69155f67_74820905', 'facet_item_dropdown');
?>


        <?php } elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'slider') {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50260215fd25f6915b7a9_01813000', 'facet_item_slider');
?>

        <?php }?>
      </aside>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php }
}
}
/* {block 'facets_title'} */
class Block_145234825fd25f69142480_51404261 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_title' => 
  array (
    0 => 'Block_145234825fd25f69142480_51404261',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'facets_title'} */
/* {block 'facet_item_other'} */
class Block_19654021185fd25f69149c62_37492720 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_other' => 
  array (
    0 => 'Block_19654021185fd25f69149c62_37492720',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="facet-type-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['widgetType'], ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['facet']->value['filters'][0]['properties']['color']) || isset($_smarty_tpl->tpl_vars['facet']->value['filters'][0]['properties']['texture'])) {?> facet_color<?php }?>">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter', false, 'filter_key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter_key']->value => $_smarty_tpl->tpl_vars['filter']->value) {
?>
                <?php if (!$_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                  <?php continue 1;?>
                <?php }?>

                <li>
                  <label class="facet-label<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active <?php }?>" for="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
                      <span class="custom-checkbox"
                              <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color']) || isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'])) {?>
                          data-toggle="tooltip"
                          data-animation="false"
                          data-placement="top"
                          data-boundary="window"
                          data-original-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)<?php }?>"
                              <?php }?>
                      >
                        <input
                          id="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                          data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                          type="checkbox"
                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>
                        >
                          <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color'])) {?>
                              <span class="color" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['color'], ENT_QUOTES, 'UTF-8');?>
"></span>
                              <?php } elseif (isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'])) {?>
                                <span class="color texture" style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'], ENT_QUOTES, 'UTF-8');?>
)"></span>
                              <?php } else { ?>
                              <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>><i class="fa fa-check checkbox-checked" aria-hidden="true"></i></span>
                          <?php }?>
                      </span>
                    <?php } else { ?>
                      <span class="custom-radio">
                        <input
                          id="facet_input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                          data-search-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                          type="radio"
                          name="filter <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>
                        >
                        <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>></span>
                      </span>
                    <?php }?>

                      <?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color']) && !isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture'])) {?>
                          <a
                                  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                                  class="_gray-darker search-link js-search-link"
                                  rel="nofollow"
                          >
                              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                              <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                                  <span class="magnitude">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)</span>
                              <?php }?>
                          </a>
                      <?php }?>

                  </label>
                </li>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          <?php
}
}
/* {/block 'facet_item_other'} */
/* {block 'facet_item_dropdown'} */
class Block_17289021465fd25f69155f67_74820905 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_dropdown' => 
  array (
    0 => 'Block_17289021465fd25f69155f67_74820905',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="">
              <li>
                  <div class="facet-dropdown dropdown">
                      <a class="form-control select-title expand-more" rel="nofollow" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                    <?php $_smarty_tpl->_assignInScope('active_found', false);?>
                    <span>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                            (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                          <?php }?>
                          <?php $_smarty_tpl->_assignInScope('active_found', true);?>
                        <?php }?>
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      <?php if (!$_smarty_tpl->tpl_vars['active_found']->value) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(no filter)','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                      <?php }?>
                    </span>
                          <i class="fa fa-angle-down drop-icon" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>

                        <a
                          rel="nofollow"
                          href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
                          class="select-list dropdown-item <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>current<?php }?> search-link js-search-link"
                        >
                          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                            (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['magnitude'], ENT_QUOTES, 'UTF-8');?>
)
                          <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                                <i class="fa fa-times" aria-hidden="true"></i>
                            <?php }?>
                        </a>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </li>
            </ul>
          <?php
}
}
/* {/block 'facet_item_dropdown'} */
/* {block 'facet_item_slider'} */
class Block_50260215fd25f6915b7a9_01813000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_slider' => 
  array (
    0 => 'Block_50260215fd25f6915b7a9_01813000',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
              <ul id="facet_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                class="faceted-slider"
                data-slider-min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['properties']['min'], ENT_QUOTES, 'UTF-8');?>
"
                data-slider-max="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['properties']['max'], ENT_QUOTES, 'UTF-8');?>
"
                data-slider-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-slider-values="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['value'] )), ENT_QUOTES, 'UTF-8');?>
"
                data-slider-unit="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['properties']['unit'], ENT_QUOTES, 'UTF-8');?>
"
                data-slider-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value['label'], ENT_QUOTES, 'UTF-8');?>
"
                data-slider-specifications="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['facet']->value['properties']['specifications'] )), ENT_QUOTES, 'UTF-8');?>
"
                data-slider-encoded-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"
              >
                <li>
                  <p id="facet_label_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                  </p>

                  <div id="slider-range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
                </li>
              </ul>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
/* {/block 'facet_item_slider'} */
}
