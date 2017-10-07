<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 06:20:32
         compiled from "/vagrant/presto/themes/fayni/templates/catalog/_partials/product-discounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17040852759d720b0d790b4-07907554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7f1e8b5700c8839b079bd75fbdc4a18d52f6b68' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/catalog/_partials/product-discounts.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17040852759d720b0d790b4-07907554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'configuration' => 0,
    'quantity_discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d720b0d86405_92022017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d720b0d86405_92022017')) {function content_59d720b0d86405_92022017($_smarty_tpl) {?>
<section class="product-discounts">
  <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_discounts']) {?>
    <section class="product-discounts">
      <h3><?php echo smartyTranslate(array('s'=>'Volume discounts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h3>
      
        <table class="table-product-discounts">
          <thead>
          <tr>
            <th><?php echo smartyTranslate(array('s'=>'Quantity','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
            <th><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['configuration']->value['quantity_discount']['label'], ENT_QUOTES, 'UTF-8');?>
</th>
            <th><?php echo smartyTranslate(array('s'=>'You Save','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</th>
          </tr>
          </thead>
          <tbody>
          <?php  $_smarty_tpl->tpl_vars['quantity_discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quantity_discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['quantity_discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->key => $_smarty_tpl->tpl_vars['quantity_discount']->value) {
$_smarty_tpl->tpl_vars['quantity_discount']->_loop = true;
?>
            <tr
              data-discount-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'], ENT_QUOTES, 'UTF-8');?>
"
              data-discount="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'], ENT_QUOTES, 'UTF-8');?>
"
              data-discount-quantity="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
            >
              <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</td>
              <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['discount'], ENT_QUOTES, 'UTF-8');?>
</td>
              <td>
                <?php echo smartyTranslate(array('s'=>'Up to %amount_saved%','sprintf'=>array('%amount_saved%'=>$_smarty_tpl->tpl_vars['quantity_discount']->value['save']),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>

              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      
    </section>
  <?php }?>
</section>
<?php }} ?>
