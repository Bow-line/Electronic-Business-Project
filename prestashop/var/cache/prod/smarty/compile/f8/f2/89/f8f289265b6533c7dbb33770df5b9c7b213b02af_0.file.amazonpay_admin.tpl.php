<?php
/* Smarty version 3.1.43, created on 2022-12-09 19:38:09
  from '/var/www/html/modules/amazonpay/views/templates/admin/amazonpay_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_639380917447f4_57448690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8f289265b6533c7dbb33770df5b9c7b213b02af' => 
    array (
      0 => '/var/www/html/modules/amazonpay/views/templates/admin/amazonpay_admin.tpl',
      1 => 1670610174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./connect.tpl' => 1,
    'file:./authentication.tpl' => 1,
    'file:./configuration.tpl' => 1,
    'file:./promotion.tpl' => 1,
    'file:./alexa.tpl' => 1,
    'file:./troubleshooter.tpl' => 1,
    'file:./support.tpl' => 1,
  ),
),false)) {
function content_639380917447f4_57448690 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	let amazonpay_get_public_key_link = '<?php if ((isset($_smarty_tpl->tpl_vars['getPublicKeyLink']->value))) {
echo $_smarty_tpl->tpl_vars['getPublicKeyLink']->value;
}?>';
<?php echo '</script'; ?>
>

<?php if ((isset($_smarty_tpl->tpl_vars['keygen_success']->value))) {?>
	<div class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Key generation successful. [1]Request your Public Key ID[/1]. Amazon Pay will send your Public Key ID to the email address associated with your Amazon Pay merchant account. Check your inbox for an email from Amazon Pay with your [2]Public Key ID[/2], and then enter it to the Public Key ID field.','tags'=>array('<a href="JavaScript:void(0)" id="public_key_mail_init_2">','<b>'),'mod'=>'amazonpay'),$_smarty_tpl ) );?>
</div>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['keygen_error']->value))) {?>
	<div class="alert alert-warning" role="alert"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Key generation failed. To generate your keys manually, follow the steps in the Amazon Pay integration guide: ','mod'=>'amazonpay'),$_smarty_tpl ) );?>
 <a href="https://developer.amazon.com/docs/amazon-pay-automatic/delivery-notifications.html#keys" target="_blank">https://developer.amazon.com/docs/amazon-pay-automatic/delivery-notifications.html</a></div>
<?php }?>

<ul class="nav nav-tabs" role="tablist" id="amazontabs">
	<li><a href="#amazonpay_connect" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</a></li>
	<li class="active"><a href="#amazonpay_authentication" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authentication','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</a></li>
	<li><a href="#amazonpay_configuration" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configuration','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</a></li>
	<li><a href="#amazonpay_promotion" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Promotion','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</a></li>
	<li><a href="#amazonpay_alexa" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Alexa Delivery Notification','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</a></li>
	<li><a href="#amazonpay_troubleshooter" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Troubleshooter','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</a></li>
	<li><a href="#amazonpay_support" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</a></li>
</ul>

<div class="tab-content">
	<div class="tab-pane" id="amazonpay_connect"><?php $_smarty_tpl->_subTemplateRender('file:./connect.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
	<div class="tab-pane active" id="amazonpay_authentication"><?php $_smarty_tpl->_subTemplateRender('file:./authentication.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
	<div class="tab-pane" id="amazonpay_configuration"><?php $_smarty_tpl->_subTemplateRender('file:./configuration.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
	<div class="tab-pane" id="amazonpay_promotion"><?php $_smarty_tpl->_subTemplateRender('file:./promotion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
	<div class="tab-pane" id="amazonpay_alexa"><?php $_smarty_tpl->_subTemplateRender('file:./alexa.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
	<div class="tab-pane" id="amazonpay_troubleshooter"><?php $_smarty_tpl->_subTemplateRender('file:./troubleshooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
	<div class="tab-pane" id="amazonpay_support"><?php $_smarty_tpl->_subTemplateRender('file:./support.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
</div>

<div id="amazonpay_hidden_parts" style="display:none;">
	<a href="<?php if ((isset($_smarty_tpl->tpl_vars['getPublicKeyLink']->value))) {
echo $_smarty_tpl->tpl_vars['getPublicKeyLink']->value;
}?>" id="getPublicKeyLink"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download Public Key','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</a>
</div>
<?php }
}
