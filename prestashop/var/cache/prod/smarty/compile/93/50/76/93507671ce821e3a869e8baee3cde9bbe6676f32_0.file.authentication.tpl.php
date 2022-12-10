<?php
/* Smarty version 3.1.43, created on 2022-12-09 19:38:09
  from '/var/www/html/modules/amazonpay/views/templates/admin/authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63938091785ac7_94363437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93507671ce821e3a869e8baee3cde9bbe6676f32' => 
    array (
      0 => '/var/www/html/modules/amazonpay/views/templates/admin/authentication.tpl',
      1 => 1670610174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63938091785ac7_94363437 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'help_page_link_assign', 'help_page_link', null);?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['help_page_link']->value,'htmlall','UTF-8' ));?>
" target="_blank"><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div class="panel">

	<div class="alert alert-info">

		<?php if ((isset($_smarty_tpl->tpl_vars['create_keypair_action']->value))) {?>
			<p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To authenticate for Amazon Pay, please generate your key-pair with the following button.','mod'=>'amazonpay'),$_smarty_tpl ) );?>
<br>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email the public key to your Amazon Pay account manager. They will respond with your publicKeyId. Never share your private key.','mod'=>'amazonpay'),$_smarty_tpl ) );?>
<br>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This publicKeyId you then can enter in the following configuration form.','mod'=>'amazonpay'),$_smarty_tpl ) );?>

			</p>

			<a href="<?php echo $_smarty_tpl->tpl_vars['create_keypair_action']->value;?>
" class="btn btn-primary" onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure? This might overwrite an existing key-pair.','mod'=>'amazonpay'),$_smarty_tpl ) );?>
')"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create key-pair','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</a>
		<?php } else { ?>
			<p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you haven’t registered an Amazon Pay merchant account, please [1]register[/1] your merchant account first.[2]If you have already created an Amazon Pay merchant account, please [3]sign-in to[/3] your merchant account (initiated as a registration flow but please switch to ‘Sign in’ when you are prompted to enter account details)[4]For both cases you will arrive to a page to ‘Transfer API Keys’, come back here after that’s done and follow [5]Amazon Pay Help Page[/5] to finish the configuration. If the automatic  key transfer did not work please manually enter your keys below.','tags'=>array('<a href="JavaScript:initAmazonReg()">','<br>','<a href="JavaScript:initAmazonReg()">','<br>',$_smarty_tpl->tpl_vars['help_page_link']->value),'mod'=>'amazonpay'),$_smarty_tpl ) );?>
<br>
			</p>
		<?php }?>
	</div>

	<div style="" id="authformDiv">
		<?php echo $_smarty_tpl->tpl_vars['authform']->value;?>

	</div>
</div>

	<?php echo '<script'; ?>
> function initAmazonReg() { jQuery('#amazonRegForm').submit(); }<?php echo '</script'; ?>
>
<?php }
}
