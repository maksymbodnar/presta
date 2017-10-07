<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 06:20:32
         compiled from "/vagrant/presto/themes/fayni/templates/catalog/_partials/product-customization.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85457303859d720b0c77bc2-21818686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd37a9a912b17fbd7d98f0084af0cd8aa74dd5da3' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/catalog/_partials/product-customization.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85457303859d720b0c77bc2-21818686',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'configuration' => 0,
    'urls' => 0,
    'customizations' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d720b0c88244_19082232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d720b0c88244_19082232')) {function content_59d720b0c88244_19082232($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable']) {?>
  <section class="product-customization">
    <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
      <h3><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h3>

      
        <form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data">
          <ul>
            <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customizations']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
              <li>
                <label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</label>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='text') {?>
                  <textarea <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required <?php }?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['input_name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                  <small><?php echo smartyTranslate(array('s'=>'250 char. max','d'=>'Shop.Forms.Help'),$_smarty_tpl);?>
</small>
                  <?php if ($_smarty_tpl->tpl_vars['field']->value['text']!=='') {?>
                    <h6><?php echo smartyTranslate(array('s'=>'Your customization:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
 <label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>
</label></h6>
                  <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='image') {?>
                  <?php if ($_smarty_tpl->tpl_vars['field']->value['is_customized']) {?>
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
                    <a class="remove-image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['remove_image_url'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Remove Image','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
                  <?php }?>
                <?php }?>
              </li>
            <?php } ?>
          </ul>
          <button name="submitCustomizedData"><?php echo smartyTranslate(array('s'=>'Save Customization','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
        </form>
      

    <?php }?>
  </section>
<?php }?>
<?php }} ?>
