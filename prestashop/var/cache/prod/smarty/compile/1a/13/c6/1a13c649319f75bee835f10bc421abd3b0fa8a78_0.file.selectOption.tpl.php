<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:43
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/form/fields/selectOption.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a29f2aaf66_02536437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a13c649319f75bee835f10bc421abd3b0fa8a78' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/form/fields/selectOption.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a29f2aaf66_02536437 (Smarty_Internal_Template $_smarty_tpl) {
?>

<option
        value="<?php if ((isset($_smarty_tpl->tpl_vars['value']->value))) {
echo $_smarty_tpl->tpl_vars['value']->value;
}?>"
        <?php if ((isset($_smarty_tpl->tpl_vars['isSelected']->value)) && $_smarty_tpl->tpl_vars['isSelected']->value) {?>selected<?php }?>>

    <?php if ((isset($_smarty_tpl->tpl_vars['description']->value))) {
echo $_smarty_tpl->tpl_vars['description']->value;
}?>
</option>
<?php }
}
