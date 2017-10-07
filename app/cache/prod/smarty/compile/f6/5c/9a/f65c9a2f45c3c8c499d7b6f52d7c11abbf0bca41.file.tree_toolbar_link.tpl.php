<?php /* Smarty version Smarty-3.1.19, created on 2017-10-03 04:18:21
         compiled from "/vagrant/presto/admin1795k6wof/themes/default/template/helpers/tree/tree_toolbar_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3604877259d30f8dc19043-27980976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f65c9a2f45c3c8c499d7b6f52d7c11abbf0bca41' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/default/template/helpers/tree/tree_toolbar_link.tpl',
      1 => 1503382293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3604877259d30f8dc19043-27980976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'action' => 0,
    'id' => 0,
    'icon_class' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d30f8dc30378_60092096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d30f8dc30378_60092096')) {function content_59d30f8dc30378_60092096($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?> id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['id']->value,'html','UTF-8');?>
"<?php }?> class="btn btn-default">
	<?php if (isset($_smarty_tpl->tpl_vars['icon_class']->value)) {?><i class="<?php echo $_smarty_tpl->tpl_vars['icon_class']->value;?>
"></i><?php }?>
	<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl);?>

</a>
<?php }} ?>
