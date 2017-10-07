<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 06:40:31
         compiled from "module:ps_customersignin/ps_customersignin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211579365459d1ac2ac6d801-79890477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersignin/ps_customersignin.tpl',
      1 => 1507272024,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '211579365459d1ac2ac6d801-79890477',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1ac2ac7c324_07134854',
  'variables' => 
  array (
    'logged' => 0,
    'logout_url' => 0,
    'my_account_url' => 0,
    'customerName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1ac2ac7c324_07134854')) {function content_59d1ac2ac7c324_07134854($_smarty_tpl) {?><div class="user-info">
    <span class="icon icon-user"></span>
  <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
    <a class="logout"  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
    <a class="account" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
" rel="nofollow"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span></a>
  <?php } else { ?>
    <a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
  <?php }?>
</div>
<?php }} ?>
