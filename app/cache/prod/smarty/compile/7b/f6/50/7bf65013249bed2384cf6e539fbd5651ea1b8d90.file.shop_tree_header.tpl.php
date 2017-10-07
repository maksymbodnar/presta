<?php /* Smarty version Smarty-3.1.19, created on 2017-10-04 05:40:41
         compiled from "/vagrant/presto/admin1795k6wof/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188441679859d47459a61426-62548194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bf65013249bed2384cf6e539fbd5651ea1b8d90' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl',
      1 => 1503382292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188441679859d47459a61426-62548194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d47459a691a1_95914854',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d47459a691a1_95914854')) {function content_59d47459a691a1_95914854($_smarty_tpl) {?>
<div class="panel-heading">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-sitemap"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<div class="pull-right">
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
</div>
<?php }} ?>
