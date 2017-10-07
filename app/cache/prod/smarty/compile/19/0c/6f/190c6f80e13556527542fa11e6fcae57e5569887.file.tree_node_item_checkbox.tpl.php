<?php /* Smarty version Smarty-3.1.19, created on 2017-10-04 05:45:40
         compiled from "/vagrant/presto/admin1795k6wof/themes/default/template/helpers/tree/tree_node_item_checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121145445959d475841ae163-76350916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '190c6f80e13556527542fa11e6fcae57e5569887' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/default/template/helpers/tree/tree_node_item_checkbox.tpl',
      1 => 1503382293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121145445959d475841ae163-76350916',
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
  'unifunc' => 'content_59d475841bd040_56133310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d475841bd040_56133310')) {function content_59d475841bd040_56133310($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-name-disable<?php }?>">
		<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }} ?>
