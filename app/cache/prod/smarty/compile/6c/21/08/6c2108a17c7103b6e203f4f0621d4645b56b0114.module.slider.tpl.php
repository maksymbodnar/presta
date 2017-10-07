<?php /* Smarty version Smarty-3.1.19, created on 2017-10-02 03:13:21
         compiled from "module:ps_imageslider/views/templates/hook/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44744770459d1aed1926763-72961110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imageslider/views/templates/hook/slider.tpl',
      1 => 1503382312,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '44744770459d1aed1926763-72961110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1aed1952e49_66669827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1aed1952e49_66669827')) {function content_59d1aed1952e49_66669827($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['homeslider']->value['slides']) {?>
  <div class="homeslider-container" data-interval="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-wrap="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['pause'], ENT_QUOTES, 'UTF-8');?>
">
    <ul class="rslides">
      <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeslider']->value['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
        <li class="slide">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['legend']), ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->tpl_vars['slide']->value['title']||$_smarty_tpl->tpl_vars['slide']->value['description']) {?>
              <span class="caption">
                <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h2>
                <div><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div>
              </span>
            <?php }?>
          </a>
        </li>
      <?php } ?>
    </ul>
  </div>
<?php }?>
<?php }} ?>
