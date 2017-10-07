<?php /* Smarty version Smarty-3.1.19, created on 2017-10-02 03:59:05
         compiled from "/vagrant/presto/admin1795k6wof/themes/new-theme/template/components/layout/non-responsive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152846872559d1b989162608-52502375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d6982cb0b7fc7ce3655614f83e9fcb9dd25a08f' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/new-theme/template/components/layout/non-responsive.tpl',
      1 => 1503382293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152846872559d1b989162608-52502375',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'default_tab_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1b98916f189_42176878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1b98916f189_42176878')) {function content_59d1b98916f189_42176878($_smarty_tpl) {?>
<div id="non-responsive" class="js-non-responsive">
  <h1><?php echo smartyTranslate(array('s'=>'Oh no!'),$_smarty_tpl);?>
</h1>
  <p class="m-t-3">
    <?php echo smartyTranslate(array('s'=>'The mobile version of this page is not available yet.'),$_smarty_tpl);?>

  </p>
  <p class="m-t-2">
    <?php echo smartyTranslate(array('s'=>'Please use a desktop computer to access this page, until is adapted to mobile.'),$_smarty_tpl);?>

  </p>
  <p class="m-t-2">
    <?php echo smartyTranslate(array('s'=>'Thank you.'),$_smarty_tpl);?>

  </p>
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['default_tab_link']->value,'html','UTF-8');?>
" class="btn btn-primary p-y-1 m-t-3">
    <i class="material-icons">arrow_back</i>
    <?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>

  </a>
</div>
<div class="mobile-layer"></div>
<?php }} ?>
