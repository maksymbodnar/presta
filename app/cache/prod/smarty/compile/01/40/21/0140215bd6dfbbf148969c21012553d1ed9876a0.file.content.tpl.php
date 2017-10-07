<?php /* Smarty version Smarty-3.1.19, created on 2017-10-04 05:40:41
         compiled from "/vagrant/presto/admin1795k6wof/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35290195459d47459c41195-75664648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0140215bd6dfbbf148969c21012553d1ed9876a0' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/default/template/controllers/shop/content.tpl',
      1 => 1503382292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35290195459d47459c41195-75664648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d47459c56438_77066976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d47459c56438_77066976')) {function content_59d47459c56438_77066976($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div>
<?php }} ?>
