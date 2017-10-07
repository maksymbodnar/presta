<?php /* Smarty version Smarty-3.1.19, created on 2017-10-03 04:18:21
         compiled from "/vagrant/presto/admin1795k6wof/themes/default/template/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63920459d30f8dcd29b8-94464912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28a13f2ab667e82cc6f60e1b2c36b5594a1866e2' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1503382293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63920459d30f8dcd29b8-94464912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d30f8dcdba27_84030622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d30f8dcdba27_84030622')) {function content_59d30f8dcdba27_84030622($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }} ?>
