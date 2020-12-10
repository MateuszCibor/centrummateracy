<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:48:25
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/_partials/_variants/footer-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f693657b4_49843931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '268d37b9ed0717117f372a22ee1239fcd994d544' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/_partials/_variants/footer-2.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_elements/social-links.tpl' => 1,
    'file:_partials/_variants/footer-copyrights-1.tpl' => 1,
  ),
),false)) {
function content_5fd25f693657b4_49843931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_newsletter_status'] == 1 || $_smarty_tpl->tpl_vars['iqitTheme']->value['f_social_status'] == 1) {?>
<div id="footer-container-first" class="footer-container footer-style-2">
  <div class="container">
    <div class="row align-items-center">

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_newsletter_status'] == 1) {?>
        <div class="col-sm-6 col-md-4 block-newsletter">
          <h5 class="mb-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up to newsletter','d'=>'Shop.Warehousetheme'),$_smarty_tpl ) );?>
</h5>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_emailsubscription",'hook'=>'displayFooter'),$_smarty_tpl ) );?>

        </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_social_status'] == 1) {?>
        <div class="<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_newsletter_status'] == 1) {?>col-sm-6 push-md-2<?php } else { ?>col<?php }?> block-social-links text-right">
          <?php $_smarty_tpl->_subTemplateRender('file:_elements/social-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'_footer'), 0, false);
?>
        </div>
        <?php }?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15933971205fd25f69364005_10042128', 'hook_footer_before');
?>

    </div>
  </div>
</div>
<?php }?>

<div id="footer-container-main" class="footer-container footer-style-2">
  <div class="container">
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_522656335fd25f69364837_11171461', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2164685fd25f69364ed9_29254226', 'hook_footer_after');
?>

    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-copyrights-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'hook_footer_before'} */
class Block_15933971205fd25f69364005_10042128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_15933971205fd25f69364005_10042128',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_522656335fd25f69364837_11171461 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_522656335fd25f69364837_11171461',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_2164685fd25f69364ed9_29254226 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_2164685fd25f69364ed9_29254226',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
}
