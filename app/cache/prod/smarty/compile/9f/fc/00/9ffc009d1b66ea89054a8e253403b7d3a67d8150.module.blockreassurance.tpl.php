<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 04:46:23
         compiled from "module:blockreassurance/views/templates/hook/blockreassurance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90121166559d70a9fd9f763-50100489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ffc009d1b66ea89054a8e253403b7d3a67d8150' => 
    array (
      0 => 'module:blockreassurance/views/templates/hook/blockreassurance.tpl',
      1 => 1503382310,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '90121166559d70a9fd9f763-50100489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elements' => 0,
    'element' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d70a9fda4365_19748820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d70a9fda4365_19748820')) {function content_59d70a9fda4365_19748820($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['elements']->value) {?>
  <div id="block-reassurance">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
        <li><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['element']->value['text'],'quotes'), ENT_QUOTES, 'UTF-8');?>
" /> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['text'], ENT_QUOTES, 'UTF-8');?>
</span></li>
      <?php } ?>
    </ul>
  </div>
<?php }?>
<?php }} ?>
