<?php /* Smarty version Smarty-3.1.19, created on 2017-10-03 04:18:21
         compiled from "/vagrant/presto/admin1795k6wof/themes/default/template/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51008261259d30f8dbac6f1-62258906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a849ab683c12af5102f8e25a57094c5b9cfd80cf' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1503382293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51008261259d30f8dbac6f1-62258906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d30f8dbcc424_13504929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d30f8dbcc424_13504929')) {function content_59d30f8dbcc424_13504929($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div>
<?php }} ?>
