<?php /* Smarty version Smarty-3.1.19, created on 2017-10-02 03:02:03
         compiled from "module:ps_searchbar/ps_searchbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161592290959d1ac2bcf8765-37418884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbar/ps_searchbar.tpl',
      1 => 1503382313,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '161592290959d1ac2bcf8765-37418884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_controller_url' => 0,
    'search_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1ac2bcfdd00_16374476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1ac2bcfdd00_16374476')) {function content_59d1ac2bcfdd00_16374476($_smarty_tpl) {?>

<div id="search_widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
">
		<button type="submit">
			<?php echo smartyTranslate(array('s'=>'Search','d'=>'Modules.Searchbar.Shop'),$_smarty_tpl);?>

		</button>
	</form>
</div>
<?php }} ?>
