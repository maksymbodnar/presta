<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 06:42:07
         compiled from "/vagrant/presto/themes/fayni/templates/customer/_partials/login-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191824706259d725bf5125e3-17506342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4603da758207e7d186334cbad28416f5aa289c86' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/customer/_partials/login-form.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
    '1fcdd228def5fefbfd2ef485ba3cef49afefb501' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/_partials/form-errors.tpl',
      1 => 1501602046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191824706259d725bf5125e3-17506342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'action' => 0,
    'formFields' => 0,
    'field' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d725bf52dcf3_17595925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d725bf52dcf3_17595925')) {function content_59d725bf52dcf3_17595925($_smarty_tpl) {?>


  
    <?php /*  Call merged included template "_partials/form-errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, '191824706259d725bf5125e3-17506342');
content_59d725bf5186d0_56284849($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/form-errors.tpl" */?>
  

  <form id="login-form" action=" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">

    <section class="form-fields">
      
        <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
          
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

          
        <?php } ?>
      

      <p class="lost_password">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
          <?php echo smartyTranslate(array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

        </a>
      </p>
    </section>

    
      <footer class="form-footer">
        <input type="hidden" name="submitLogin" value="1">
        
          <button data-link-action="sign-in" type="submit"><?php echo smartyTranslate(array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
        
      </footer>
    

  </form>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 06:42:07
         compiled from "/vagrant/presto/themes/fayni/templates/_partials/form-errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d725bf5186d0_56284849')) {function content_59d725bf5186d0_56284849($_smarty_tpl) {?>

  <?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
    <ul class='form-errors'>
      <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
      <?php } ?>
    </ul>
  <?php }?>

<?php }} ?>
