<?php /* Smarty version Smarty-3.1.19, created on 2017-10-03 04:17:42
         compiled from "/vagrant/presto/admin1795k6wof/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124780296959d30f66826653-51826458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e0adf40ff5b252a00859faa0c232e167f1a7934' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1503382293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124780296959d30f66826653-51826458',
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
  'unifunc' => 'content_59d30f6682d473_42814945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d30f6682d473_42814945')) {function content_59d30f6682d473_42814945($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
