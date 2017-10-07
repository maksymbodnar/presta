<?php /* Smarty version Smarty-3.1.19, created on 2017-10-02 03:59:05
         compiled from "/vagrant/presto/admin1795k6wof/themes/new-theme/template/components/layout/confirmation_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78804698159d1b9890cde06-44290973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae105ffd7c8a3c98c8a0d428a62061ce8d5f7312' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1503382293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78804698159d1b9890cde06-44290973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmations' => 0,
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1b9890d5d05_08891884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1b9890d5d05_08891884')) {function content_59d1b9890d5d05_08891884($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['confirmations']->value)&&count($_smarty_tpl->tpl_vars['confirmations']->value)&&$_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php  $_smarty_tpl->tpl_vars['conf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['confirmations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->key => $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php } ?>
    </div>
  </div>
<?php }?>
<?php }} ?>
