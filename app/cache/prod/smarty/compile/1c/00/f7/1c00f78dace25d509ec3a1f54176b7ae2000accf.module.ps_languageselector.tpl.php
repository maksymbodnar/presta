<?php /* Smarty version Smarty-3.1.19, created on 2017-10-02 03:02:02
         compiled from "module:ps_languageselector/ps_languageselector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102496481659d1ac2ac015e2-25426358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c00f78dace25d509ec3a1f54176b7ae2000accf' => 
    array (
      0 => 'module:ps_languageselector/ps_languageselector.tpl',
      1 => 1503382312,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '102496481659d1ac2ac015e2-25426358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_language' => 0,
    'languages' => 0,
    'language' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1ac2ac05ca9_74969657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1ac2ac05ca9_74969657')) {function content_59d1ac2ac05ca9_74969657($_smarty_tpl) {?>
<div class="language-selector">
  <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</span>
  <ul>
    <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
      <li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getLanguageLink($_smarty_tpl->tpl_vars['language']->value['id_lang']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</a>
      </li>
    <?php } ?>
  </ul>
</div>
<?php }} ?>
