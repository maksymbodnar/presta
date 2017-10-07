<?php /* Smarty version Smarty-3.1.19, created on 2017-10-02 03:02:02
         compiled from "module:ps_facetedsearch/ps_facetedsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129632193759d1ac2adeb1c7-23188008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:ps_facetedsearch/ps_facetedsearch.tpl',
      1 => 1503382312,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '129632193759d1ac2adeb1c7-23188008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rendered_active_filters' => 0,
    'rendered_facets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1ac2adeeed8_09978096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1ac2adeeed8_09978096')) {function content_59d1ac2adeeed8_09978096($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['rendered_active_filters']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['rendered_active_filters']->value;?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['rendered_facets']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['rendered_facets']->value;?>

<?php }?>
<?php }} ?>
