<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:13:39
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/prestashopCheckoutInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a2235cd3e0_89176392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02bbf7d25e527456ed21cf0fca1ec7afd555d1b3' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/messages/prestashopCheckoutInfo.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a2235cd3e0_89176392 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info ps-checkout-info">
  <button type="button" class="close" data-dismiss="alert" data-action="close">×</button>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module allows your customers to pay with their PayPal account. If you wish to accept credit cards and other payment methods in addition to PayPal, we recommend the [a @href1@]PrestaShop Checkout[/a] module.','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
ob_start();
echo '#';
$_prefixVariable5 = ob_get_clean();
ob_start();
echo 'data-action="install"';
$_prefixVariable6 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable4,array('@href1@'=>$_prefixVariable5,'@target@'=>$_prefixVariable6));?>

</div>
<?php }
}
