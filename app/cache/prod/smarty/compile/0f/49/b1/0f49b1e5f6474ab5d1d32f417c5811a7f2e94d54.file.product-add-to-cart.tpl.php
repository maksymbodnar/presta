<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 06:20:32
         compiled from "/vagrant/presto/themes/fayni/templates/catalog/_partials/product-add-to-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62056514859d720b0dc3184-44617909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f49b1e5f6474ab5d1d32f417c5811a7f2e94d54' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/catalog/_partials/product-add-to-cart.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62056514859d720b0dc3184-44617909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'configuration' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d720b0dd07d4_53469963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d720b0dd07d4_53469963')) {function content_59d720b0dd07d4_53469963($_smarty_tpl) {?>
<div class="product-add-to-cart">
  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>

    
      <p class="product-quantity">
        <label for="quantity_wanted"><?php echo smartyTranslate(array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</label>
        <input
          type="number"
          name="qty"
          id="quantity_wanted"
          value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
          class="input-group"
          min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
        >
      </p>
    

    
      <p class="product-minimal-quantity">
      <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']>1) {?>
          <?php echo smartyTranslate(array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl);?>

      <?php }?>
      </p>
    

    <button class="add-to-cart" type="submit" name="add" data-button-action="add-to-cart" <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>disabled<?php }?>>
      <?php echo smartyTranslate(array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

    </button>

  <?php }?>
</div>
<?php }} ?>
