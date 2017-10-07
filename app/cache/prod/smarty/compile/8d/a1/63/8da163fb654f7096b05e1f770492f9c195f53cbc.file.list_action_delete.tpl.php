<?php /* Smarty version Smarty-3.1.19, created on 2017-10-04 05:46:34
         compiled from "/vagrant/presto/admin1795k6wof/themes/default/template/controllers/shop/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29280729159d475ba11dc91-75853996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8da163fb654f7096b05e1f770492f9c195f53cbc' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/default/template/controllers/shop/helpers/list/list_action_delete.tpl',
      1 => 1503382292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29280729159d475ba11dc91-75853996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'id_shop' => 0,
    'shops_having_dependencies' => 0,
    'confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d475ba134004_57617486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d475ba134004_57617486')) {function content_59d475ba134004_57617486($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" class="delete" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
"
	<?php if (in_array($_smarty_tpl->tpl_vars['id_shop']->value,$_smarty_tpl->tpl_vars['shops_having_dependencies']->value)) {?>
		onclick="jAlert('<?php echo smartyTranslate(array('s'=>'You cannot delete this shop (customer and/or order dependency)','js'=>1,'d'=>'Admin.Shopparameters.Notification'),$_smarty_tpl);?>
'); return false;"
	<?php } elseif (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?>
		onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"
	<?php }?>>
	<i class="icon-trash"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
