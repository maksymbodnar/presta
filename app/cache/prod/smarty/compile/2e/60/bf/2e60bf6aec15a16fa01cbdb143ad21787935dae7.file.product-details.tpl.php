<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 06:20:32
         compiled from "/vagrant/presto/themes/fayni/templates/catalog/_partials/product-details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111962942059d720b0cc5b86-77746720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e60bf6aec15a16fa01cbdb143ad21787935dae7' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/catalog/_partials/product-details.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111962942059d720b0cc5b86-77746720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'product_manufacturer' => 0,
    'manufacturer_image_url' => 0,
    'product_brand_url' => 0,
    'feature' => 0,
    'key' => 0,
    'reference' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d720b0ce5bf9_06212782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d720b0ce5bf9_06212782')) {function content_59d720b0ce5bf9_06212782($_smarty_tpl) {?><div id="product-details" data-product="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['product']->value), ENT_QUOTES, 'UTF-8');?>
">
  
    <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
      <div>
        <?php if (isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
" />
          </a>
        <?php } else { ?>
          <label><?php echo smartyTranslate(array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</label>
          <span>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
          </span>
        <?php }?>
      </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
      <div>
        <label><?php echo smartyTranslate(array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
 </label>
        <span itemprop="sku"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  

  
    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_quantities']) {?>
      <div>
        <label><?php echo smartyTranslate(array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</label>
        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_label'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  

  
    <?php if ($_smarty_tpl->tpl_vars['product']->value['availability_date']) {?>
      <div>
        <label><?php echo smartyTranslate(array('s'=>'Availability date:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
 </label>
        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_date'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  

  
    <div>
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'actionProductOutOfStock','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

    </div>
  

  
    <?php if ($_smarty_tpl->tpl_vars['product']->value['features']) {?>
      <section>
        <h3><?php echo smartyTranslate(array('s'=>'Data sheet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h3>
        <dl>
          <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
            <dt><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
</dt>
            <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');?>
</dd>
          <?php } ?>
        </dl>
      </section>
    <?php }?>
  

  
  
    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_references'])) {?>
      <section class="product-features">
        <h3 class="h6"><?php echo smartyTranslate(array('s'=>'Specific References','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h3>
        <dl class="data-sheet">
          <?php  $_smarty_tpl->tpl_vars['reference'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reference']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['specific_references']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reference']->key => $_smarty_tpl->tpl_vars['reference']->value) {
$_smarty_tpl->tpl_vars['reference']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['reference']->key;
?>
            <dt class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
</dt>
            <dd class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reference']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
          <?php } ?>
        </dl>
      </section>
    <?php }?>
  

  
    <?php if ($_smarty_tpl->tpl_vars['product']->value['condition']) {?>
      <div class="product-condition">
        <label class="label"><?php echo smartyTranslate(array('s'=>'Condition','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
 </label>
        <link itemprop="itemCondition" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['condition']['schema_url'], ENT_QUOTES, 'UTF-8');?>
"/>
        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['condition']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  
</div>
<?php }} ?>
