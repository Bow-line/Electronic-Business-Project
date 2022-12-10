<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:46
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/logoMessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a2a21a6676_94243357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fac1d2591d67fd43a6d6d11535a8774c2ffece3' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/logoMessage.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a2a21a6676_94243357 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info">
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you are using PayPal Checkout redirect you can customize your shop logo. The logo can be changed via your business profile [a @href1@]settings[/a].','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['settingLink']->value;
$_prefixVariable2 = ob_get_clean();
ob_start();
echo 'target="_blank"';
$_prefixVariable3 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable1,array('@href1@'=>$_prefixVariable2,'@target@'=>$_prefixVariable3));?>

</div>

<?php }
}
