<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:47:26
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/checkout/checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f2e5b3361_44002819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0126d74bb8dfba8a31eb790de259d09724d10a4e' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/checkout/checkout.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary.tpl' => 1,
  ),
),false)) {
function content_5fd25f2e5b3361_44002819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9563638005fd25f2e5aba48_13376745', 'checkout_header');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1148375865fd25f2e5b0669_56121542', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7866051925fd25f2e5b20c3_53137518', 'checkout_footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'checkout_header'} */
class Block_9563638005fd25f2e5aba48_13376745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkout_header' => 
  array (
    0 => 'Block_9563638005fd25f2e5aba48_13376745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['checkout_header']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['checkout_header'] == 'simple') {?>
    <div id="checkout-header" class="header-top">
      <div class="container">

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_logo_position'] == 'left') {?>
          <a class="text-muted mt-2 mb-2 d-inline-block" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
            <i class="fa fa-angle-left" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </a>
            <div>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-fluid"
                 src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo'] != '') {?> srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo'], ENT_QUOTES, 'UTF-8');?>
 2x"<?php }?>
                 alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </a></div>
        <?php } else { ?>
        <div class="row">
            <div class="col">
            <a class="text-muted mt-2 mb-2 d-inline-block text-nowrap" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
                <i class="fa fa-angle-left" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </a>
            </div>
            <div class="col col-auto">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                    <img class="logo img-fluid"
                         src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo'] != '') {?> srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo'], ENT_QUOTES, 'UTF-8');?>
 2x"<?php }?>
                         alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                </a></div>
            <div class="col"></div>
        </div>
        <?php }?>


      </div>
    </div>
  <?php }
}
}
/* {/block 'checkout_header'} */
/* {block 'cart_summary'} */
class Block_870156435fd25f2e5b0bf6_58398008 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'cart_summary'} */
class Block_6369529445fd25f2e5b14e7_79298588 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'content'} */
class Block_1148375865fd25f2e5b0669_56121542 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1148375865fd25f2e5b0669_56121542',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_870156435fd25f2e5b0bf6_58398008',
    1 => 'Block_6369529445fd25f2e5b14e7_79298588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">
    <h1 class="h1 page-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Warehousetheme'),$_smarty_tpl ) );?>
</span></h1>
    <div class="row">
      <div class="col-md-8">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_870156435fd25f2e5b0bf6_58398008', 'cart_summary', $this->tplIndex);
?>

      </div>
      <div class="col-md-4 cart-grid-right">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6369529445fd25f2e5b14e7_79298588', 'cart_summary', $this->tplIndex);
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

      </div>
    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'checkout_footer'} */
class Block_7866051925fd25f2e5b20c3_53137518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkout_footer' => 
  array (
    0 => 'Block_7866051925fd25f2e5b20c3_53137518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['checkout_footer']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['checkout_footer'] == 'simple') {?>
        <div id="checkout-footer" class="footer-container footer-style-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="container">
                <div class="row">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutFooter'),$_smarty_tpl ) );?>

                </div>
            </div>
        </div>
    <?php }
}
}
/* {/block 'checkout_footer'} */
}
