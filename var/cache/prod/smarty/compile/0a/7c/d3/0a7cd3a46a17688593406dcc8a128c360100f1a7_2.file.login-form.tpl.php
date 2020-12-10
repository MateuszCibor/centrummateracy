<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:47:22
  from '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/customer/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f2ae49488_82709712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a7cd3a46a17688593406dcc8a128c360100f1a7' => 
    array (
      0 => '/home/legion/serwerphp/centrummateracy/themes/warehouse/templates/customer/_partials/login-form.tpl',
      1 => 1607168843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5fd25f2ae49488_82709712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7943618935fd25f2ae44421_12819419', 'login_form');
?>

<?php }
/* {block 'login_form_start'} */
class Block_14169011355fd25f2ae44717_65797727 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'login_form_start'} */
/* {block 'login_form_errors'} */
class Block_1390731995fd25f2ae44b04_10395410 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
class Block_8425946265fd25f2ae46155_93263856 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
class Block_7892185245fd25f2ae47330_39872311 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_13395612135fd25f2ae46991_21738688 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7892185245fd25f2ae47330_39872311', 'form_field', $this->tplIndex);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
class Block_10245713145fd25f2ae48783_21387431 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button id="submit-login" class="btn btn-primary form-control-submit" data-link-action="sign-in" type="submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
class Block_10429110125fd25f2ae48509_40359359 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer text-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10245713145fd25f2ae48783_21387431', 'form_buttons', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form_end'} */
class Block_6192403875fd25f2ae48fb1_33159288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'login_form_end'} */
/* {block 'login_form'} */
class Block_7943618935fd25f2ae44421_12819419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_7943618935fd25f2ae44421_12819419',
  ),
  'login_form_start' => 
  array (
    0 => 'Block_14169011355fd25f2ae44717_65797727',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_1390731995fd25f2ae44b04_10395410',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_8425946265fd25f2ae46155_93263856',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_13395612135fd25f2ae46991_21738688',
  ),
  'form_field' => 
  array (
    0 => 'Block_7892185245fd25f2ae47330_39872311',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_10429110125fd25f2ae48509_40359359',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_10245713145fd25f2ae48783_21387431',
  ),
  'login_form_end' => 
  array (
    0 => 'Block_6192403875fd25f2ae48fb1_33159288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14169011355fd25f2ae44717_65797727', 'login_form_start', $this->tplIndex);
?>



  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1390731995fd25f2ae44b04_10395410', 'login_form_errors', $this->tplIndex);
?>


    <form <?php if (isset($_smarty_tpl->tpl_vars['idForm']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idForm']->value, ENT_QUOTES, 'UTF-8');?>
" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?> id="login-form" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8425946265fd25f2ae46155_93263856', 'login_form_actionurl', $this->tplIndex);
?>
"  <?php }?>  method="post">

    <section>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13395612135fd25f2ae46991_21738688', 'login_form_fields', $this->tplIndex);
?>

      <div class="forgot-password">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </a>
      </div>
    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10429110125fd25f2ae48509_40359359', 'login_form_footer', $this->tplIndex);
?>


  </form>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6192403875fd25f2ae48fb1_33159288', 'login_form_end', $this->tplIndex);
?>

<?php
}
}
/* {/block 'login_form'} */
}
