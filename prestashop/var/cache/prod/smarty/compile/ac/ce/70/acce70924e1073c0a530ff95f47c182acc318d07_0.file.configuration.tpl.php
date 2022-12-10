<?php
/* Smarty version 3.1.43, created on 2022-12-09 19:38:09
  from '/var/www/html/modules/amazonpay/views/templates/admin/configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6393809178e022_56464548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acce70924e1073c0a530ff95f47c182acc318d07' => 
    array (
      0 => '/var/www/html/modules/amazonpay/views/templates/admin/configuration.tpl',
      1 => 1670610174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6393809178e022_56464548 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel">

	<div class="alert alert-warning" role="alert">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please note: if you use server side caching (for example in combination with nginx), remember to empty it after saving the configuration.','mod'=>'amazonpay'),$_smarty_tpl ) );?>

	</div>

	<?php echo $_smarty_tpl->tpl_vars['configform']->value;?>

</div>
<div class="panel">

	<p>
		<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please use this URL for your IPN configuration:','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</strong><br>
		<?php echo $_smarty_tpl->tpl_vars['ipn_url']->value;?>

	</p>

	<p>
		<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please use this URL to automatically refresh transactions:','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</strong><br>
		<?php echo $_smarty_tpl->tpl_vars['cron_url']->value;?>

	</p>

	<p>
		<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can add the Amazon Pay button anywhere in your template with adding this code:','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</strong>
	</p>

	<code>
		
			&#x3C;div class=&quot;amazonPayButton&quot;
			data-placement=&quot;Other&quot;
			data-rendered=&quot;0&quot;
			data-color=&quot;gold&quot;&#x3E;&#x3C;/div&#x3E;
		
	</code>
	<br/>
	<code>
		
			&#x3C;div class=&quot;amazonPayButton amazonLogin&quot;
			data-placement=&quot;Other&quot;
			data-rendered=&quot;0&quot;
			data-color=&quot;gold&quot;&#x3E;&#x3C;/div&#x3E;
		
	</code>

</div>

<div id="amazonpay_hidden" style="display:none;">
	<textarea name="AMAZONPAY_PUBLIC_KEY" id="AMAZONPAY_PUBLIC_KEY"><?php echo $_smarty_tpl->tpl_vars['alexa_public_key']->value;?>
</textarea>
</div>
<?php }
}
