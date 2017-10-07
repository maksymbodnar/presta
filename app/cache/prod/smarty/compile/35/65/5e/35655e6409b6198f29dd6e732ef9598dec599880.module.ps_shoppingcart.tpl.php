<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 05:34:14
         compiled from "module:ps_shoppingcart/ps_shoppingcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184974338159d1ac2abb4f41-42027252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:ps_shoppingcart/ps_shoppingcart.tpl',
      1 => 1507268050,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '184974338159d1ac2abb4f41-42027252',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1ac2abbc035_28654694',
  'variables' => 
  array (
    'cart' => 0,
    'refresh_url' => 0,
    'cart_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1ac2abbc035_28654694')) {function content_59d1ac2abbc035_28654694($_smarty_tpl) {?><div id="_desktop_cart">
  <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="header">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>
        <a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php }?>
        <span class="icon icon-cart"></span>
        <span class="hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
        <span class="cart-products-count">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
)</span>
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>
        </a>
      <?php }?>
    </div>
  </div>
</div><?php }} ?>
