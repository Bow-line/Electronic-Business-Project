<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:43
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/form/fields/textInput.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a29f31b388_96559747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b873ff7195cb6ebc1be10f4a76f68962efa9ef78' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/form/fields/textInput.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a29f31b388_96559747 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
  <input
          type="text"
          <?php if ((isset($_smarty_tpl->tpl_vars['name']->value))) {?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['value']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['configType']->value))) {?>data-type="<?php echo $_smarty_tpl->tpl_vars['configType']->value;?>
"<?php }?>
          <?php if ((isset($_smarty_tpl->tpl_vars['attributes']->value)) && is_array($_smarty_tpl->tpl_vars['attributes']->value)) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attributes']->value, 'attrValue', false, 'attrName');
$_smarty_tpl->tpl_vars['attrValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attrName']->value => $_smarty_tpl->tpl_vars['attrValue']->value) {
$_smarty_tpl->tpl_vars['attrValue']->do_else = false;
?>
                  <?php echo $_smarty_tpl->tpl_vars['attrName']->value;?>
='<?php echo $_smarty_tpl->tpl_vars['attrValue']->value;?>
'
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>
  >
</div>

<div class="pp__flex pp__justify-content-center pp__mt-2">
  <?php if ((isset($_smarty_tpl->tpl_vars['label']->value))) {?>
      <em>
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['label']->value,'htmlall','UTF-8' ));?>

      </em>
  <?php }?>
</div>

<?php }
}
