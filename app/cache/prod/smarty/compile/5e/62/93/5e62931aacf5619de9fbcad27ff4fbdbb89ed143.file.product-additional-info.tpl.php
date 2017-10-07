<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 06:20:32
         compiled from "/vagrant/presto/themes/fayni/templates/catalog/_partials/product-additional-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196562473259d720b0e0c277-14351236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e62931aacf5619de9fbcad27ff4fbdbb89ed143' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196562473259d720b0e0c277-14351236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d720b0e133d5_40482074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d720b0e133d5_40482074')) {function content_59d720b0e133d5_40482074($_smarty_tpl) {?>
<div class="product-additional-info">
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

</div>
<?php }} ?>
