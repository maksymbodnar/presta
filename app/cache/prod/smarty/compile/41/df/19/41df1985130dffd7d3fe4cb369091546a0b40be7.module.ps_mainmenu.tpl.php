<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 07:10:50
         compiled from "module:ps_mainmenu/ps_mainmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166065203059d1ac2acdf7a6-04163333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41df1985130dffd7d3fe4cb369091546a0b40be7' => 
    array (
      0 => 'module:ps_mainmenu/ps_mainmenu.tpl',
      1 => 1507273828,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '166065203059d1ac2acdf7a6-04163333',
  'function' => 
  array (
    'menu' => 
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
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1ac2acf39e6_02424279',
  'variables' => 
  array (
    'nodes' => 0,
    'depth' => 0,
    'node' => 0,
    'image_url' => 0,
    'urls' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1ac2acf39e6_02424279')) {function content_59d1ac2acf39e6_02424279($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_menu')) {
    function smarty_template_function_menu($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['menu']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
  <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?><ul data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"><?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->_loop = true;
?><li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['type'], ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['node']->value['current']) {?> current<?php }?>"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['url'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['node']->value['open_in_new_window']) {?> target="_blank" <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a><div><?php smarty_template_function_menu($_smarty_tpl,array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['node']->value['depth']));?>
<?php if (count($_smarty_tpl->tpl_vars['node']->value['image_urls'])) {?><div class="menu-images-container"><?php  $_smarty_tpl->tpl_vars['image_url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image_url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['image_urls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image_url']->key => $_smarty_tpl->tpl_vars['image_url']->value) {
$_smarty_tpl->tpl_vars['image_url']->_loop = true;
?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php } ?></div><?php }?></div></li><?php } ?></ul><?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<div class="menu">
    <a class="home" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><span class="icon icon-home3"></span></a>
    <?php smarty_template_function_menu($_smarty_tpl,array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children']));?>

</div>
<?php }} ?>
