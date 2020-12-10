<?php
/* Smarty version 3.1.33, created on 2020-12-10 20:53:39
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/checkout/_partials/cart-voucher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd27cc3bb7675_78207714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32f1889164e6d428b05b0fd3d1801610a387f957' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/checkout/_partials/cart-voucher.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd27cc3bb7675_78207714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['allowed']) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1744735325fd27cc3bb2258_20031298', 'cart_voucher');
?>

<?php }
}
/* {block 'cart_voucher_list'} */
class Block_8489650375fd27cc3bb2952_49201887 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <ul class="promo-name card-body">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['vouchers']['added'], 'voucher');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
?>
                                <li class="cart-summary-line">
                                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['delete_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="remove-voucher"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    <div class="pull-right">
                                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['reduction_formatted'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </div>
                                </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php
}
}
/* {/block 'cart_voucher_list'} */
/* {block 'cart_voucher_notifications'} */
class Block_14171367095fd27cc3bb4116_35355505 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="alert alert-danger js-error" role="alert">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <span
                                        class="m-l-1 js-error-text"></span>
                            </div>
                        <?php
}
}
/* {/block 'cart_voucher_notifications'} */
/* {block 'cart_voucher_form'} */
class Block_20443636605fd27cc3bb4564_85528292 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-voucher" method="post"
                                  class="">
                                <div class="input-group">
                                    <i class="fa fa-tag btn voucher-icon" aria-hidden="true"></i>
                                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="addDiscount" value="1">
                                <input class="form-control" type="text" name="discount_name"
                                       placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Promo code','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
">
                                <button type="submit" class="btn btn-secondary">
                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button>
                                </div>
                            </form>
                        <?php
}
}
/* {/block 'cart_voucher_form'} */
/* {block 'cart_voucher'} */
class Block_1744735325fd27cc3bb2258_20031298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_voucher' => 
  array (
    0 => 'Block_1744735325fd27cc3bb2258_20031298',
  ),
  'cart_voucher_list' => 
  array (
    0 => 'Block_8489650375fd27cc3bb2952_49201887',
  ),
  'cart_voucher_notifications' => 
  array (
    0 => 'Block_14171367095fd27cc3bb4116_35355505',
  ),
  'cart_voucher_form' => 
  array (
    0 => 'Block_20443636605fd27cc3bb4564_85528292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="block-promo">
            <div class="cart-voucher">
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8489650375fd27cc3bb2952_49201887', 'cart_voucher_list', $this->tplIndex);
?>

                <?php }?>

                <div class="cart-voucher-area">

                    <div class="promo-code" id="promo-code">

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14171367095fd27cc3bb4116_35355505', 'cart_voucher_notifications', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20443636605fd27cc3bb4564_85528292', 'cart_voucher_form', $this->tplIndex);
?>


                    </div>

                    <?php if (count($_smarty_tpl->tpl_vars['cart']->value['discounts']) > 0) {?>
                        <p class="block-promo promo-highlighted text-muted">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our exclusive offers:','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                        </p>
                        <ul class="js-discount promo-discounts text-muted">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['discounts'], 'discount');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
?>
                                <li class="cart-summary-line">
                                    <span class="label"><span
                                                class="code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['code'], ENT_QUOTES, 'UTF-8');?>
</span> - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                                </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php }?>
                </div>
            </div>
        </div>
    <?php
}
}
/* {/block 'cart_voucher'} */
}
