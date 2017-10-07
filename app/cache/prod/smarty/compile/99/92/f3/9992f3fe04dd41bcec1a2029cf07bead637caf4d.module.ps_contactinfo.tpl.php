<?php /* Smarty version Smarty-3.1.19, created on 2017-10-02 03:02:02
         compiled from "module:ps_contactinfo/ps_contactinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125076884859d1ac2ae3eb90-23845680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:ps_contactinfo/ps_contactinfo.tpl',
      1 => 1503382311,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '125076884859d1ac2ae3eb90-23845680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact_infos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1ac2ae46567_00537228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1ac2ae46567_00537228')) {function content_59d1ac2ae46567_00537228($_smarty_tpl) {?>

<div class="block-contact">
	<h4><?php echo smartyTranslate(array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h4>
    <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>

    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
      <br>
      
      <?php echo smartyTranslate(array('s'=>'Tel: %phone%','sprintf'=>array('%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Modules.Contactinfo.Shop'),$_smarty_tpl);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
      <br>
      
      <?php echo smartyTranslate(array('s'=>'Fax: %fax%','sprintf'=>array('%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Modules.Contactinfo.Shop'),$_smarty_tpl);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
      <br>
      
      <?php echo smartyTranslate(array('s'=>'Email: %email%','sprintf'=>array('%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Modules.Contactinfo.Shop'),$_smarty_tpl);?>

    <?php }?>
</div>
<?php }} ?>
