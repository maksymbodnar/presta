<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 06:20:32
         compiled from "/vagrant/presto/themes/fayni/templates/catalog/_partials/product-cover-thumbnails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160468946059d720b0c32b04-44800749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '288896c49a31679971f837a6d6d6fd3f68cb7c3c' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/catalog/_partials/product-cover-thumbnails.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160468946059d720b0c32b04-44800749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d720b0c40966_73131476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d720b0c40966_73131476')) {function content_59d720b0c40966_73131476($_smarty_tpl) {?>
<div class="images-container">
  
    <div class="product-cover">
      <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['medium_default']['width'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
    </div>
  

  
    <ul class="product-images">
      <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
        <li><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['medium']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" width="100" itemprop="image"></li>
      <?php } ?>
    </ul>
  
</div>
<?php }} ?>
