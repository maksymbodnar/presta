<?php /* Smarty version Smarty-3.1.19, created on 2017-10-02 03:59:05
         compiled from "/vagrant/presto/admin1795k6wof/themes/new-theme/template/components/layout/warning_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129056864559d1b9891161c4-76874718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18fbd90420865322a31585219d47f2e981c22f37' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/new-theme/template/components/layout/warning_messages.tpl',
      1 => 1503382293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129056864559d1b9891161c4-76874718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warnings' => 0,
    'warning' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1b98911ec95_72771930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1b98911ec95_72771930')) {function content_59d1b98911ec95_72771930($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['warnings']->value)) {?>
  <div class="bootstrap">
    <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php if (count($_smarty_tpl->tpl_vars['warnings']->value)>1) {?>
        <h4><?php echo smartyTranslate(array('s'=>'There are %d warnings:','sprintf'=>array(count($_smarty_tpl->tpl_vars['warnings']->value))),$_smarty_tpl);?>
</h4>
      <?php }?>
      <ul class="list-unstyled">
        <?php  $_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warning']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warnings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->key => $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->_loop = true;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
        <?php } ?>
      </ul>
    </div>
  </div>
<?php }?>
<?php }} ?>
