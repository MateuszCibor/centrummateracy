<?php
/* Smarty version 3.1.33, created on 2020-12-10 18:47:22
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fd25f2ac70c00_08980184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1607168843,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd25f2ac70c00_08980184 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="user_info">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['h_user_dropdown']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['h_user_dropdown']) {?>

        <div class="dropdown">
            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
               class="account"
            href="#">
                <i class="fa fa-user fa-fw icon" aria-hidden="true"></i>
                <span class="title"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer']->value['firstname'],15,'...' )), ENT_QUOTES, 'UTF-8');?>
</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['identity'], ENT_QUOTES, 'UTF-8');?>
">
                    <i class="fa fa-user fa-fw" aria-hidden="true"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                </a>
                <?php if (count($_smarty_tpl->tpl_vars['customer']->value['addresses'])) {?>
                    <a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['addresses'], ENT_QUOTES, 'UTF-8');?>
">
                        <i class="fa fa-map-marker fa-fw" aria-hidden="true"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                    </a>
                <?php } else { ?>
                    <a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['address'], ENT_QUOTES, 'UTF-8');?>
">
                        <i class="fa fa-map-marker fa-fw" aria-hidden="true"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add first address','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                    </a>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
                    <a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['history'], ENT_QUOTES, 'UTF-8');?>
">
                        <i class="fa fa-history fa-fw" aria-hidden="true"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history and details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                    </a>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
                    <a class="dropdown-item"href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_slip'], ENT_QUOTES, 'UTF-8');?>
">
                        <i class="fa fa-file-o fa-fw" aria-hidden="true"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                    </a>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['configuration']->value['voucher_enabled'] && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
                    <a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['discount'], ENT_QUOTES, 'UTF-8');?>
">
                        <i class="fa fa-tags fa-fw" aria-hidden="true"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vouchers','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                    </a>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['configuration']->value['return_enabled'] && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
                    <a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_follow'], ENT_QUOTES, 'UTF-8');?>
">
                        <i class="fa fa-undo fa-fw"" aria-hidden="true"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise returns','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                    </a>
                <?php }?>
                <a class="dropdown-item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'index','params'=>array('mylogout'=>'')),$_smarty_tpl ) );?>
">
                    <i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                </a>
            </div>
        </div>


    <?php } else { ?>
        <a
                class="account"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
                rel="nofollow"
        >
            <i class="fa fa-user" aria-hidden="true"></i>
            <span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer']->value['firstname'],15,'...' )), ENT_QUOTES, 'UTF-8');?>
</span>
        </a> <span class="text-faded"> / </span>
        <a
                class="logout"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                rel="nofollow"
        >
            <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        </a>
        <?php }?>
    <?php } else { ?>
        <a
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
                rel="nofollow"
        ><i class="fa fa-user" aria-hidden="true"></i>
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        </a>
    <?php }?>
</div>
<?php }
}
