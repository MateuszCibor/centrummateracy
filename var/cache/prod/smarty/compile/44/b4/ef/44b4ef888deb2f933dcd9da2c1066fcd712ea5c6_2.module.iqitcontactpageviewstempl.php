<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:47:22
  from 'module:iqitcontactpageviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f2ae35430_38918402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44b4ef888deb2f933dcd9da2c1066fcd712ea5c6' => 
    array (
      0 => 'module:iqitcontactpageviewstempl',
      1 => 1607168843,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f2ae35430_38918402 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20397885755fd25f2ae33960_40154068', 'iqitcontactpage-info');
?>

<?php }
/* {block 'iqitcontactpage-info'} */
class Block_20397885755fd25f2ae33960_40154068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iqitcontactpage-info' => 
  array (
    0 => 'Block_20397885755fd25f2ae33960_40154068',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="contact-rich">
            <?php if ($_smarty_tpl->tpl_vars['company']->value) {?> <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value, ENT_QUOTES, 'UTF-8');?>
</strong><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['address']->value) {?>
            <div class="part">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="data"><?php echo nl2br($_smarty_tpl->tpl_vars['address']->value);?>
</div>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['phone']->value) {?>
                <hr/>
                <div class="part">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="data">
                        <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                    </div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['mail']->value) {?>
                <hr/>
                <div class="part">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="data email">
                        <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mail']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mail']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                    </div>
                </div>
            <?php }?>
    </div>
<?php
}
}
/* {/block 'iqitcontactpage-info'} */
}
