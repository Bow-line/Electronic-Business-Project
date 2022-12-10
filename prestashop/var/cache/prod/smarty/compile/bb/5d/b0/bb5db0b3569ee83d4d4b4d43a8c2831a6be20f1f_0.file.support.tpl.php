<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:13:36
  from '/var/www/html/modules/amazonpay/views/templates/admin/support.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a220ec16a5_11259561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb5db0b3569ee83d4d4b4d43a8c2831a6be20f1f' => 
    array (
      0 => '/var/www/html/modules/amazonpay/views/templates/admin/support.tpl',
      1 => 1670682607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a220ec16a5_11259561 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel">

	<p>
		<b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Already have an Amazon Pay account?','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</b> <a href="https://sellercentral-europe.amazon.com/home?cor=mmd_EU" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</a>
		<br>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchant support might ask you to provide your shop’s log files. To download your log files, ','mod'=>'amazonpay'),$_smarty_tpl ) );?>
 <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['log_url']->value,'htmlall','UTF-8' ));?>
" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'click here','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</a>. <br>
	</p>
	<p class="amz_illustration">
		<img src="https://m.media-amazon.com/images/G/01/EPSDocumentation/AmazonPay/Prestashop/img/AmazonPayContactUs.jpg" />
	</p>

</div>
<?php }
}
