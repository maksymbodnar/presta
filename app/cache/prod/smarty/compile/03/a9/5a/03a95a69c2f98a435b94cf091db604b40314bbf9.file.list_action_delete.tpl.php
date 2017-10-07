<?php /* Smarty version Smarty-3.1.19, created on 2017-10-03 04:17:42
         compiled from "/vagrant/presto/admin1795k6wof/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135109966059d30f668b3c89-37563172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03a95a69c2f98a435b94cf091db604b40314bbf9' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1503382293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135109966059d30f668b3c89-37563172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d30f668c5741_67728972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d30f668c5741_67728972')) {function content_59d30f668c5741_67728972($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="delete">
	<i class="icon-trash"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
