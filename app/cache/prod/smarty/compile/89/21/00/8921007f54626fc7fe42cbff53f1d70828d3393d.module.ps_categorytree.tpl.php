<?php /* Smarty version Smarty-3.1.19, created on 2017-10-02 03:02:02
         compiled from "module:ps_categorytree/views/templates/hook/ps_categorytree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158322852959d1ac2ad9de01-97907616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8921007f54626fc7fe42cbff53f1d70828d3393d' => 
    array (
      0 => 'module:ps_categorytree/views/templates/hook/ps_categorytree.tpl',
      1 => 1503382311,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '158322852959d1ac2ad9de01-97907616',
  'function' => 
  array (
    'categories' => 
    array (
      'parameter' => 
      array (
        'nodes' => 
        array (
        ),
        'depth' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'nodes' => 0,
    'node' => 0,
    'depth' => 0,
    'categories' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1ac2ada8f41_42539427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1ac2ada8f41_42539427')) {function content_59d1ac2ada8f41_42539427($_smarty_tpl) {?>

<?php if (!function_exists('smarty_template_function_categories')) {
    function smarty_template_function_categories($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['categories']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
  <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?><ul><?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->_loop = true;
?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><div><?php smarty_template_function_categories($_smarty_tpl,array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1));?>
</div></li><?php } ?></ul><?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<div class="category-tree">
  <ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['categories']->value['link'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
    <li><?php smarty_template_function_categories($_smarty_tpl,array('nodes'=>$_smarty_tpl->tpl_vars['categories']->value['children']));?>
</li>
  </ul>
</div>
<?php }} ?>
