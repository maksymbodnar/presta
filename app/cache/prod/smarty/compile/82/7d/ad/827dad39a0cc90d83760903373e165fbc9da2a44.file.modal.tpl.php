<?php /* Smarty version Smarty-3.1.19, created on 2017-10-02 03:01:49
         compiled from "/vagrant/presto/admin1795k6wof/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78845411459d1ac1dc58b82-28631497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '827dad39a0cc90d83760903373e165fbc9da2a44' => 
    array (
      0 => '/vagrant/presto/admin1795k6wof/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1503382293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78845411459d1ac1dc58b82-28631497',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1ac1dc5f218_26377560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1ac1dc5f218_26377560')) {function content_59d1ac1dc5f218_26377560($_smarty_tpl) {?>
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }} ?>
