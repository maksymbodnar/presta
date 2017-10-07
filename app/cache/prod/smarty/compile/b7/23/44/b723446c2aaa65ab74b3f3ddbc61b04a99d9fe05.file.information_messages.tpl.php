<?php /* Smarty version Smarty-3.1.19, created on 2017-10-02 03:59:05
         compiled from "/vagrant/presto/admin1795k6wof/themes/new-theme/template/components/layout/information_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92325468759d1b989070868-57365937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b723446c2aaa65ab74b3f3ddbc61b04a99d9fe05' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/new-theme/template/components/layout/information_messages.tpl',
      1 => 1503382293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92325468759d1b989070868-57365937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'informations' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1b989078745_14921905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1b989078745_14921905')) {function content_59d1b989078745_14921905($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['informations']->value)&&count($_smarty_tpl->tpl_vars['informations']->value)&&$_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php } ?>
      </ul>
    </div>
  </div>
<?php }?>
<?php }} ?>
