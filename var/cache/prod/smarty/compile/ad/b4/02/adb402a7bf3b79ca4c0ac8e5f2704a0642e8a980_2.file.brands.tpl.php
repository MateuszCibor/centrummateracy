<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:07
  from '/home/legion/serwerphp/centrummateracy/modules/iqitelementor/views/templates/widgets/brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f57801562_16813051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adb402a7bf3b79ca4c0ac8e5f2704a0642e8a980' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/modules/iqitelementor/views/templates/widgets/brands.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f57801562_16813051 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="elementor-brands">
<?php if ($_smarty_tpl->tpl_vars['view']->value == 'grid') {?>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand', false, NULL, 'brand_list', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>
            <div class="col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slidesToShow']->value['mobile'], ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slidesToShow']->value['tablet'], ENT_QUOTES, 'UTF-8');?>
 col-lg-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slidesToShow']->value['desktop'], ENT_QUOTES, 'UTF-8');?>
 col-xl-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slidesToShow']->value['desktop'], ENT_QUOTES, 'UTF-8');?>
">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['link'], ENT_QUOTES, 'UTF-8');?>
">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
                </a>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <?php } else { ?>
    <div class="elementor-brands-carousel slick-arrows-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['arrows_position']->value, ENT_QUOTES, 'UTF-8');?>
"  data-slider_options='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['options']->value ));?>
'>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand', false, NULL, 'brand_list', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>
            <div>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['link'], ENT_QUOTES, 'UTF-8');?>
">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
                </a>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>
</div>







<?php }
}
