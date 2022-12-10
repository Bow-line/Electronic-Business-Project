<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:13:36
  from '/var/www/html/modules/amazonpay/views/templates/admin/alexa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a220ea9076_65593903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d643d51970dd7558990f3af406656a3cab45807' => 
    array (
      0 => '/var/www/html/modules/amazonpay/views/templates/admin/alexa.tpl',
      1 => 1670682607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a220ea9076_65593903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'blog_link_assign', 'blog_link', null);?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_link']->value,'htmlall','UTF-8' ));?>
" target="_blank"><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'alexa_hint_assign', 'alexa_hint', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To learn more about Alexa delivery notifications, visit the [1]Amazon Pay blog[/1].','tags'=>array($_smarty_tpl->tpl_vars['blog_link']->value),'mod'=>'amazonpay'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div class="panel">

	<div class="alert alert-info">

		<p>
			<?php echo $_smarty_tpl->tpl_vars['alexa_hint']->value;?>

		</p>

	</div>

	<?php echo $_smarty_tpl->tpl_vars['alexaform']->value;?>

</div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'public_key_mail_assign', 'public_key_mail', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]Request your Public Key ID[/1]','tags'=>array('<a href="JavaScript:void(0)" id="public_key_mail_init">'),'mod'=>'amazonpay'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<span id="public_key_mail_init_span" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['public_key_mail']->value;?>
</span>
<span id="alexa_mail_subject" style="display:none">[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alexa_region']->value,'htmlall','UTF-8' ));?>
] <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request for Amazon Pay Public Key ID for','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</span>
<span id="alexa_mail_body" style="display:none"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchant ID:','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</span>
<span id="alexa_public_key" style="display:none"><?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alexa_public_key']->value,'htmlall','UTF-8' )),"\n","%0D%0A");?>
</span>
<?php }
}
