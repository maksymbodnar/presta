<?php /* Smarty version Smarty-3.1.19, created on 2017-10-02 03:02:02
         compiled from "/vagrant/presto/themes/fayni/templates/catalog/_partials/active_filters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141737225259d1ac2a8ebea7-81081988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75f197b1988499e8f0f0b3918a283631081529b8' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/catalog/_partials/active_filters.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141737225259d1ac2a8ebea7-81081988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'activeFilters' => 0,
    'filter' => 0,
    'clear_all_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1ac2a8fe532_13930785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1ac2a8fe532_13930785')) {function content_59d1ac2a8fe532_13930785($_smarty_tpl) {?>
<section id="js-active-search-filters" class="active_filters">
  <h1 class="h3"><?php echo smartyTranslate(array('s'=>'Active filters','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h1>
  <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
    <ul>
      <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activeFilters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
        <li><?php echo smartyTranslate(array('s'=>'%facet_label%: %facet_value%','sprintf'=>array('%facet_label%'=>$_smarty_tpl->tpl_vars['filter']->value['facetLabel'],'%facet_value%'=>$_smarty_tpl->tpl_vars['filter']->value['label']),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
 <a  class="js-search-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Remove','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a></li>
      <?php } ?>
    </ul>
  <?php }?>
  <p><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Reset all filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a></p>
</section>
<?php }} ?>
