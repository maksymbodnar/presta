<?php /* Smarty version Smarty-3.1.19, created on 2017-10-02 03:01:49
         compiled from "/vagrant/presto/admin1795k6wof/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197224490559d1ac1db7cc61-72667806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80a432bea3a6708c24bee79ffbbdf8b3cc95d556' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/default/template/content.tpl',
      1 => 1503382290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197224490559d1ac1db7cc61-72667806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1ac1db85000_85859083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1ac1db85000_85859083')) {function content_59d1ac1db85000_85859083($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
