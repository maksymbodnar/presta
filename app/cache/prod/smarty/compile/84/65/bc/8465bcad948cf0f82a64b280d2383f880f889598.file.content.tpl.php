<?php /* Smarty version Smarty-3.1.19, created on 2017-10-02 04:52:15
         compiled from "/vagrant/presto/admin1795k6wof/themes/new-theme/template/controllers/addons_catalog/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128827094459d1c5ff1b1df8-09260135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8465bcad948cf0f82a64b280d2383f880f889598' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/new-theme/template/controllers/addons_catalog/content.tpl',
      1 => 1503382293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128827094459d1c5ff1b1df8-09260135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1c5ff1d5559_64769082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1c5ff1d5559_64769082')) {function content_59d1c5ff1d5559_64769082($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>
