<?php /* Smarty version Smarty-3.1.19, created on 2017-10-03 04:17:42
         compiled from "/vagrant/presto/admin1795k6wof/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25408949359d30f66870098-75142189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abbac20c6609fcdc44d53b6eea06bd07807bae0c' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1503382293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25408949359d30f66870098-75142189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d30f668770b4_16001492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d30f668770b4_16001492')) {function content_59d30f668770b4_16001492($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
