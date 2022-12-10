<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:13:39
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a22354a131_65806696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f183592ad635534de5fa76a9007df6ffa36ad62' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/alert.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a22354a131_65806696 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 <?php if ((isset($_smarty_tpl->tpl_vars['widthByContent']->value)) && $_smarty_tpl->tpl_vars['widthByContent']->value) {?>d-inline-block<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['class']->value)) && $_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 <?php }?>">
    <?php if ((isset($_smarty_tpl->tpl_vars['btnClose']->value)) && $_smarty_tpl->tpl_vars['btnClose']->value) {?>
        <button type="button" class="close" data-dismiss="alert">×</button>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }
}
