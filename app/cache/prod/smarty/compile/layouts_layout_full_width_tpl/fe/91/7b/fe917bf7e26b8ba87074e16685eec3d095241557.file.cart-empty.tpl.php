<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 04:46:23
         compiled from "/vagrant/presto/themes/fayni/templates/checkout/cart-empty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84316696559d70a9fb12731-23722585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe917bf7e26b8ba87074e16685eec3d095241557' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/checkout/cart-empty.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
    '6dcaaa4d77baf4d2d040052cc82a1199994d1928' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/checkout/cart.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
    'c97192c83ac6261f9ca3ada3815ccb2cdd92efe3' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/layouts/layout-full-width.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
    '53a9ec602d3f349d467de6480edba01fbf399ae2' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/layouts/layout-both-columns.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
    'cfe0b6a7e5f9dda2f4f96ba471fb8b1b662630d2' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/_partials/stylesheets.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
    'de578491589fe5157a0ecd7bc586c0b2842962ca' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/_partials/javascript.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
    '549598e26d08432da952b0da89ca1e28b190d7c4' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/_partials/head.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
    '5a11a702b45f5a64529b3080b11d1e6a3ca05212' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/_partials/header.tpl',
      1 => 1506916420,
      2 => 'file',
    ),
    '0b9b2d58e3e55dc549270f9c277da17e05ff0b11' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/_partials/notifications.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
    '529f7458a7908cb7360004096297b07d29c8f173' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/_partials/breadcrumb.tpl',
      1 => 1506915397,
      2 => 'file',
    ),
    'd951a7f6afa6d0345ad9beca7693c952daec6a36' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/checkout/_partials/cart-detailed-product-line.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
    'a89ad00ed2bb974c1a11e95ee68ff20d362541d8' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/checkout/_partials/cart-detailed.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
    '9687954864e3ae63c8af7f66a0000958b7a72241' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/checkout/_partials/cart-summary-items-subtotal.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
    '9c9e185fc77cd0f7342a321023b0241a411b7b10' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/checkout/_partials/cart-detailed-totals.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
    '1baf06fd77baa4db87732a5eca99be6af918c744' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/_partials/footer.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84316696559d70a9fb12731-23722585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'page' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d70a9fc95156_06691026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d70a9fc95156_06691026')) {function content_59d70a9fc95156_06691026($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['locale'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '84316696559d70a9fb12731-23722585');
content_59d70a9fb62180_05096167($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
">

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

    

    <header id="header">
      
        <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '84316696559d70a9fb12731-23722585');
content_59d70a9fbaad70_22421264($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
      
    </header>

    
      <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '84316696559d70a9fb12731-23722585');
content_59d70a9fbba555_58451165($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
    

    <div id="wrapper">
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperTop"),$_smarty_tpl);?>


      
        <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '84316696559d70a9fb12731-23722585');
content_59d70a9fbcd0e5_01938526($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
      

      

      

      
  <div id="content-wrapper">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperTop"),$_smarty_tpl);?>

    

  <section id="main">
    <h1><?php echo smartyTranslate(array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</h1>

    
      <?php /*  Call merged included template "checkout/_partials/cart-detailed.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, '84316696559d70a9fb12731-23722585');
content_59d70a9fbfcad4_37120111($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-detailed.tpl" */?>
    
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo smartyTranslate(array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

  </a>


    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayShoppingCartFooter'),$_smarty_tpl);?>

    

    

      
        <?php /*  Call merged included template "checkout/_partials/cart-summary-items-subtotal.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-summary-items-subtotal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, '84316696559d70a9fb12731-23722585');
content_59d70a9fc3cc79_25924250($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-summary-items-subtotal.tpl" */?>
      

      

      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayShoppingCart'),$_smarty_tpl);?>

      

      
        <?php /*  Call merged included template "checkout/_partials/cart-detailed-totals.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, '84316696559d70a9fb12731-23722585');
content_59d70a9fc4b905_10613889($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-detailed-totals.tpl" */?>
      

      
  <div class="checkout">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
  </div>


    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayReassurance'),$_smarty_tpl);?>

    

  </section>


  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCrossSellingShoppingCart'),$_smarty_tpl);?>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperBottom"),$_smarty_tpl);?>

  </div>


      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperBottom"),$_smarty_tpl);?>

    </div>

    <footer id="footer">
      
        <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '84316696559d70a9fb12731-23722585');
content_59d70a9fc80349_26497861($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
      
    </footer>

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '84316696559d70a9fb12731-23722585');
content_59d70a9fb8a9d0_84796523($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

    

  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 04:46:23
         compiled from "/vagrant/presto/themes/fayni/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d70a9fb62180_05096167')) {function content_59d70a9fb62180_05096167($_smarty_tpl) {?>

  <meta charset="utf-8">


  <meta http-equiv="x-ua-compatible" content="ie=edge">



  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>



  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">



  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '84316696559d70a9fb12731-23722585');
content_59d70a9fb7a6a5_88613528($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '84316696559d70a9fb12731-23722585');
content_59d70a9fb8a9d0_84796523($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>




<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 04:46:23
         compiled from "/vagrant/presto/themes/fayni/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d70a9fb7a6a5_88613528')) {function content_59d70a9fb7a6a5_88613528($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 04:46:23
         compiled from "/vagrant/presto/themes/fayni/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d70a9fb8a9d0_84796523')) {function content_59d70a9fb8a9d0_84796523($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 04:46:23
         compiled from "/vagrant/presto/themes/fayni/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d70a9fbaad70_22421264')) {function content_59d70a9fbaad70_22421264($_smarty_tpl) {?>

  <div class="header-banner">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBanner'),$_smarty_tpl);?>

  </div>



  <div class="header-nav">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav'),$_smarty_tpl);?>

  </div>



  <a class="logo" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
  </a>



  <div class="header-top">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

  </div>

  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>



<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 04:46:23
         compiled from "/vagrant/presto/themes/fayni/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d70a9fbba555_58451165')) {function content_59d70a9fbba555_58451165($_smarty_tpl) {?>
<aside id="notifications">

  <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
    
      <article class="notification notification-danger" role="alert" data-alert="danger">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
          <?php } ?>
        </ul>
      </article>
    
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
    
      <article class="notification notification-warning" role="alert" data-alert="warning">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
          <?php } ?>
        </ul>
      </article>
    
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
    
      <article class="notification notification-success" role="alert" data-alert="success">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
          <?php } ?>
        </ul>
      </article>
    
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
    
      <article class="notification notification-info" role="alert" data-alert="info">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
          <?php } ?>
        </ul>
      </article>
    
  <?php }?>

</aside>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 04:46:23
         compiled from "/vagrant/presto/themes/fayni/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d70a9fbcd0e5_01938526')) {function content_59d70a9fbcd0e5_01938526($_smarty_tpl) {?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
  <span itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
      
        <span class="breadcrumb_item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
          </a>
          <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
        </span>
       
      <?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value['count']>$_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration']) {?> >
      <?php }?>
    <?php } ?>
  </span>
</nav>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 04:46:23
         compiled from "/vagrant/presto/themes/fayni/templates/checkout/_partials/cart-detailed.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d70a9fbfcad4_37120111')) {function content_59d70a9fbfcad4_37120111($_smarty_tpl) {?>

  <div class="cart-overview js-cart" data-refresh-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cart','params'=>array('ajax'=>1,'action'=>'refresh')),$_smarty_tpl);?>
">
    <div class="body">
      <ul>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
          <li class="cart-item"><?php /*  Call merged included template "checkout/_partials/cart-detailed-product-line.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-detailed-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, '84316696559d70a9fb12731-23722585');
content_59d70a9fc094b3_00079261($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-detailed-product-line.tpl" */?></li>
        <?php } ?>
      </ul>
    </div>
  </div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 04:46:23
         compiled from "/vagrant/presto/themes/fayni/templates/checkout/_partials/cart-detailed-product-line.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d70a9fc094b3_00079261')) {function content_59d70a9fc094b3_00079261($_smarty_tpl) {?>

  <span class="product-image"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'], ENT_QUOTES, 'UTF-8');?>
"></span>
  <span class="product-name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-id_customization="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></span>
  <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["attribute"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["attribute"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
    <span class="product-attributes">
      <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
:</span>
      <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
    </span>
  <?php } ?>

  
    <?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
      <?php  $_smarty_tpl->tpl_vars["customization"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["customization"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["customization"]->key => $_smarty_tpl->tpl_vars["customization"]->value) {
$_smarty_tpl->tpl_vars["customization"]->_loop = true;
?>
        <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
          <span class="product-line-info">
            <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
:</span>
            <span class="value">
              <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='text') {?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                  <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>

                <?php } else { ?>
                 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                <?php }?>
              <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='image') {?>
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
              <?php }?>
            </span>
          </span>
        <?php } ?>
      <?php } ?>
    <?php }?>
  

  <span class="product-availability"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability'], ENT_QUOTES, 'UTF-8');?>
</span>
  <span class="product-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
  <?php if ($_smarty_tpl->tpl_vars['product']->value['unit_price_full']) {?>
    <small class="sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_price_full'], ENT_QUOTES, 'UTF-8');?>
</small>
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['product']->value['down_quantity_url']) {?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['down_quantity_url'], ENT_QUOTES, 'UTF-8');?>
" class="js-decrease-product-quantity" data-link-action="update-quantity">-</a>
  <?php }?>
  <span class="product-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
  <?php if ($_smarty_tpl->tpl_vars['product']->value['up_quantity_url']) {?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['up_quantity_url'], ENT_QUOTES, 'UTF-8');?>
" class="js-increase-product-quantity" data-link-action="update-quantity">+</a>
  <?php }?>
  <a
    class="remove-from-cart"
    data-link-action="remove-from-cart"
    data-id-product="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
    data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
    rel="nofollow"
   >
    <?php echo smartyTranslate(array('s'=>'Remove','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

  </a>

  
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCartExtraProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

  

  <span class="product-price">
    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])&&$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
      <span class="gift"><?php echo smartyTranslate(array('s'=>'Gift','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
    <?php } else { ?>
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');?>

    <?php }?>
  </span>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 04:46:23
         compiled from "/vagrant/presto/themes/fayni/templates/checkout/_partials/cart-summary-items-subtotal.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d70a9fc3cc79_25924250')) {function content_59d70a9fc3cc79_25924250($_smarty_tpl) {?>

  <div id="items-subtotal">
    <span class="js-subtotal"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 04:46:23
         compiled from "/vagrant/presto/themes/fayni/templates/checkout/_partials/cart-detailed-totals.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d70a9fc4b905_10613889')) {function content_59d70a9fc4b905_10613889($_smarty_tpl) {?>

  <div class="cart-detailed-totals">
    <div class="cart-subtotals">
      <?php  $_smarty_tpl->tpl_vars["subtotal"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subtotal"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["subtotal"]->key => $_smarty_tpl->tpl_vars["subtotal"]->value) {
$_smarty_tpl->tpl_vars["subtotal"]->_loop = true;
?>
        <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
          <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
      <?php } ?>
    </div>

    <div class="cart-total">
      <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['type']==='shipping') {?>
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCheckoutSubtotalDetails','subtotal'=>$_smarty_tpl->tpl_vars['subtotal']->value),$_smarty_tpl);?>

      <?php }?>
    </div>
  </div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 04:46:23
         compiled from "/vagrant/presto/themes/fayni/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d70a9fc80349_26497861')) {function content_59d70a9fc80349_26497861($_smarty_tpl) {?>

  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>




  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>




  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>



<p>
  
    <a class="_blank" href="http://www.prestashop.com" target="_blank">
      <?php echo smartyTranslate(array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

    </a>
  
</p>
<?php }} ?>
