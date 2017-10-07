<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 06:20:32
         compiled from "/vagrant/presto/themes/fayni/templates/catalog/_partials/product-prices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121607190959d720b0bb1eb4-82771065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ba5ec4e09677eaf3de465f3dd3c1127e1c19d5f' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/catalog/_partials/product-prices.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121607190959d720b0bb1eb4-82771065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'configuration' => 0,
    'currency' => 0,
    'priceDisplay' => 0,
    'displayPackPrice' => 0,
    'noPackPrice' => 0,
    'displayUnitPrice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d720b0bed664_12475395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d720b0bed664_12475395')) {function content_59d720b0bed664_12475395($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
  <div class="product-prices">
    
      <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
        <p class="product-discount">
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

          <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
        </p>
      <?php }?>
    

    
      <p class="product-price <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
        <link itemprop="availability" href="https://schema.org/InStock"/>
        <span itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
         <small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</small>
        <?php }?>
        <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
            <span class="discount-percentage"><?php echo smartyTranslate(array('s'=>'Save %percentage%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%percentage%'=>$_smarty_tpl->tpl_vars['product']->value['discount_percentage'])),$_smarty_tpl);?>
</span>
          <?php } else { ?>
            <span class="discount-amount"><?php echo smartyTranslate(array('s'=>'Save %amount%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['discount_amount'])),$_smarty_tpl);?>
</span>
          <?php }?>
        <?php }?>
      </p>
    

    
      <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==2) {?>
        <p class="product-without-taxes"><?php echo smartyTranslate(array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl);?>
</p>
      <?php }?>
    

    
      <?php if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?>
        <p class="product-pack-price"><span><?php echo smartyTranslate(array('s'=>'Instead of %price%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl);?>
</span></p>
      <?php }?>
    

    
      <?php if ($_smarty_tpl->tpl_vars['product']->value['ecotax']['amount']>0) {?>
        <p class="price-ecotax"><?php echo smartyTranslate(array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl);?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php echo smartyTranslate(array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

          <?php }?>
        </p>
      <?php }?>
    

    
      <?php if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?>
        <p class="product-unit-price"><?php echo smartyTranslate(array('s'=>'(%unit_price%)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%unit_price%'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_full'])),$_smarty_tpl);?>
</p>
      <?php }?>
    

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl);?>

  </div>
<?php }?>
<?php }} ?>
