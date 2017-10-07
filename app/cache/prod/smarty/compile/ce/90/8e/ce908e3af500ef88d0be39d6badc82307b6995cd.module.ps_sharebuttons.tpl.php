<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 06:20:27
         compiled from "module:ps_sharebuttons/views/templates/hook/ps_sharebuttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95090112559d720abe89ce9-60921815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce908e3af500ef88d0be39d6badc82307b6995cd' => 
    array (
      0 => 'module:ps_sharebuttons/views/templates/hook/ps_sharebuttons.tpl',
      1 => 1503382313,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '95090112559d720abe89ce9-60921815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'social_share_links' => 0,
    'social_share_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d720abe8deb0_61876405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d720abe8deb0_61876405')) {function content_59d720abe8deb0_61876405($_smarty_tpl) {?>


  <?php if ($_smarty_tpl->tpl_vars['social_share_links']->value) {?>
    <div class="social-sharing">
      <ul>
        <?php  $_smarty_tpl->tpl_vars['social_share_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['social_share_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['social_share_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['social_share_link']->key => $_smarty_tpl->tpl_vars['social_share_link']->value) {
$_smarty_tpl->tpl_vars['social_share_link']->_loop = true;
?>
          <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php } ?>
      </ul>
    </div>
  <?php }?>

<?php }} ?>
