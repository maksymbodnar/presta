<?php /* Smarty version Smarty-3.1.19, created on 2017-10-03 04:18:21
         compiled from "/vagrant/presto/admin1795k6wof/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77022456159d30f8dc755a7-65749382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4946545933334ea4e04c5c45dd8aec5c148c8a50' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1503382293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77022456159d30f8dc755a7-65749382',
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
  'unifunc' => 'content_59d30f8dc7df04_81497960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d30f8dc7df04_81497960')) {function content_59d30f8dc7df04_81497960($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
