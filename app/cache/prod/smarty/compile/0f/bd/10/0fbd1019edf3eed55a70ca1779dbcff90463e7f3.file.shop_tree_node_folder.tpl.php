<?php /* Smarty version Smarty-3.1.19, created on 2017-10-04 05:40:41
         compiled from "/vagrant/presto/admin1795k6wof/themes/default/template/controllers/shop/helpers/tree/shop_tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163160077759d47459b10746-02425739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fbd1019edf3eed55a70ca1779dbcff90463e7f3' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/default/template/controllers/shop/helpers/tree/shop_tree_node_folder.tpl',
      1 => 1503382292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163160077759d47459b10746-02425739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_shop_group' => 0,
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d47459b19874_68420044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d47459b19874_68420044')) {function content_59d47459b19874_68420044($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['url_shop_group']->value,'html','UTF-8');?>
&amp;id_shop_group=<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8');?>
</a></label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['children']->value,'UTF-8');?>

	</ul>
</li>
<?php }} ?>
