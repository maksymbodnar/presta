<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 06:42:07
         compiled from "/vagrant/presto/themes/fayni/templates/_partials/form-fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74511506159d725bf56bd67-82461880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '800dad81974e27a3fcdf045a354cb913c78d8ece' => 
    array (
      0 => '/vagrant/presto/themes/fayni/templates/_partials/form-fields.tpl',
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
  'nocache_hash' => '74511506159d725bf56bd67-82461880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'value' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d725bf59d495_52045565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d725bf59d495_52045565')) {function content_59d725bf59d495_52045565($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['type']==='select') {?>

  
    <label class='select-field <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>'>
      <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
        <option value disabled selected><?php echo smartyTranslate(array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
</option>
        <?php  $_smarty_tpl->tpl_vars["label"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["label"]->_loop = false;
 $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['availableValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["label"]->key => $_smarty_tpl->tpl_vars["label"]->value) {
$_smarty_tpl->tpl_vars["label"]->_loop = true;
 $_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars["label"]->key;
?>
          <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['field']->value['value']) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
      </select>
    </label>
  

<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']==='countrySelect') {?>

  
    <label class='select-field <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>'>
      <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      <select class="js-country" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
        <option value disabled selected><?php echo smartyTranslate(array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
</option>
        <?php  $_smarty_tpl->tpl_vars["label"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["label"]->_loop = false;
 $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['availableValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["label"]->key => $_smarty_tpl->tpl_vars["label"]->value) {
$_smarty_tpl->tpl_vars["label"]->_loop = true;
 $_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars["label"]->key;
?>
          <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
      </select>
    </label>
  

<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']==='radio-buttons') {?>

  
    <label class='radio-field <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>'>
      <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php  $_smarty_tpl->tpl_vars["label"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["label"]->_loop = false;
 $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['availableValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["label"]->key => $_smarty_tpl->tpl_vars["label"]->value) {
$_smarty_tpl->tpl_vars["label"]->_loop = true;
 $_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars["label"]->key;
?>
        <label>
          <input
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            type="radio"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['field']->value['value']) {?>checked<?php }?>
          >
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>

        </label>
      <?php } ?>
    </label>
  

<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']==='checkbox') {?>

  
    <label class='checkbox-field <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>'>
      <input
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
        type="checkbox"
        value="1"
        <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['value']) {?>checked<?php }?>
      >
      <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
    </label>
  

<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']==='password') {?>

  
    <label <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>class="required"<?php }?>>
      <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      <input
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
        type="password"
        value=""
        pattern=".{5,}"
        <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
      >
    </label>
  

<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']==='hidden') {?>

  
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
">
  

<?php } else { ?>

  
    <label <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>class="required"<?php }?>>
      <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      <input name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['type'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
    </label>
  

<?php }?>


  <?php /*  Call merged included template "_partials/form-errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['field']->value['errors']), 0, '74511506159d725bf56bd67-82461880');
content_59d725bf593c63_77523066($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/form-errors.tpl" */?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-10-06 06:42:07
         compiled from "/vagrant/presto/themes/fayni/templates/_partials/form-errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59d725bf593c63_77523066')) {function content_59d725bf593c63_77523066($_smarty_tpl) {?>

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
