<?php
/* Smarty version 3.1.33, created on 2020-12-10 21:02:08
  from 'module:iqitcompareviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd27ec012fbe2_05152821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5518c0d93caf5575db1f0b1e332b7f82c7547653' => 
    array (
      0 => 'module:iqitcompareviewstemplates',
      1 => 1607630525,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd27ec012fbe2_05152821 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['product']->value['id_product'])) {?>
    <div class="col col-sm-auto">
        <button type="button" data-toggle="tooltip" data-placement="top" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','mod'=>'iqitcompare'),$_smarty_tpl ) );?>
"
           class="btn btn-secondary btn-lg btn-iconic btn-iqitcompare-add js-iqitcompare-add" data-animation="false" id="iqit-compare-product-btn"
           data-id-product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
"
           data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitcompare','controller'=>'actions'),$_smarty_tpl ) );?>
">
            <i class="fa fa-random not-added" aria-hidden="true"></i><i class="fa fa-check added"
                                                                        aria-hidden="true"></i>
        </button>

    </div>
    <div class="col col-sm-auto">
        <a  class="btn btn-secondary btn-lg btn-iconic btn-iqitcompare-add  koszyk_mobilny" href="http://centrummateracy.com/index.php?controller=cart&action=show">Koszyk</a>
    </div>
<?php }
}
}
