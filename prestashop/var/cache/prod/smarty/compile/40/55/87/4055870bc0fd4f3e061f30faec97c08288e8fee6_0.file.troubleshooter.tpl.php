<?php
/* Smarty version 3.1.43, created on 2022-12-09 19:38:09
  from '/var/www/html/modules/amazonpay/views/templates/admin/troubleshooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_639380917b6f78_50903859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4055870bc0fd4f3e061f30faec97c08288e8fee6' => 
    array (
      0 => '/var/www/html/modules/amazonpay/views/templates/admin/troubleshooter.tpl',
      1 => 1670610174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639380917b6f78_50903859 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['troubleshooter_results']->value))) {?>
	<div class="panel">

		<div class="alert alert-info">
			<p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use the troubleshooter to find potential problems in your integraton','mod'=>'amazonpay'),$_smarty_tpl ) );?>

			</p>
		</div>

		<button type="button" id="start_troubleshooter" class="btn btn-primary" data-url="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['troubleshooter']->value,'htmlall','UTF-8' ));?>
">
			<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Run Troubleshooter','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</strong>
			<img style="display:none; height: 15px" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (defined('_PS_BASE_URL_SSL_') ? constant('_PS_BASE_URL_SSL_') : null),'htmlall','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (defined('__PS_BASE_URI__') ? constant('__PS_BASE_URI__') : null),'htmlall','UTF-8' ));?>
modules/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_name']->value,'htmlall','UTF-8' ));?>
/views/img/ts_loader.gif" />
		</button>

		<div id="troubleshooter_results"></div>
	</div>

<?php } else { ?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['troubleshooter_results']->value, 'tsr');
$_smarty_tpl->tpl_vars['tsr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tsr']->value) {
$_smarty_tpl->tpl_vars['tsr']->do_else = false;
?>

		<div class="row">
			<div class="col-xs-6">
				<div class="row innerrow">
					<div class="col-xs-1">
						<?php if ($_smarty_tpl->tpl_vars['tsr']->value['status'] == '1') {?>
							<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIElEQVQ4jY2ST28SURTFL8U0NFIhgV1ZIC5MDAMznRmhTdohIWkXlpqYVINgYGN3xg+giexd2G/Qld2ONdAiNqVALFAGMfxLupHFUE1dSCRxoV0cF1joAJqe5C5e3vm9c999j2hIN2urLqbxQGZrD1WhHgZXDeLWp3vqjXJAthX8rmG/Ru5GUJ5thmCt+KFXboMUHqTw0CsiTMoiHKUV2ArL8ggYbcUMQiOs2quBPvSvshR9mDlcUu2bPoMm+TLweZnzC7BkpV4nbD0kzjZDlwKjrRik48cghYc1I+Ha3rxIztpaylrx/xf0Ha+j9esEkdYLUJYFfeBgyHtgPJhPkdh41L44MHs1ALYZ7K83TrcAAE8/vwTFmd4BCg9dScD0e2+bhHpYk5buKtj4ugVzSYLcSQMA5G/7oDdO0AGr8RqTHhBXHaSxzSDO9f3sBwCgc9aFKeEFvXONXG1qVwQxlbW2XhFBCo9Xp68xrEj5GeitE3SkhXUlHpNxrk3XP95JmZRFkMLDVJGw+WW7D7d+nvRaz7Ij6RM5HvokmyJHcVVwlFYGm0c8IvXn6Pzu4m7hSW9wY17myg4L2nYKRERkKyzLlqJPY3CX7/daz3Gj6fscKMEMvrQvHTXMHC6p5vyC1pyfHQ/HGZVidgMNy5KVZGtGgiHvga4kaAY2kfvb9sXkcbqamWOm03Oycc+rGpMeTO2KmNzhVH3SLVOCYYb9fwA8T9y7cxPBgwAAAABJRU5ErkJggg==" />
						<?php } else { ?>
							<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACrElEQVQ4jW1T30taYRh+VShjehTsri5MPd+h7OjRVOgiirnBGBtRsfv9KV33J2zQaIEUhMdK7aAnNS1tuCbaBrvr4jiysq0xxlj78eziOPuxvfDywfc+3/O+z8P7Ed2KgweCrzEtyvUZSavPhVCbCeD1wxGtes8t708M+m7jb0Rj2i8fzgZRHe9HecSEkkB6DptQDtlQiQ6hPDko//PwaP6p+XAupNWiTuwKhB1GyDHCNiOonTPH9PtSxIHixID2YsppvtG5FnWiJBDyjJAP2qHwhLTnKtUAhyyv1wtjdhQiDn2St7NS+HA2iN3O4w9ri7hoVJGUbJDdBNlNSEkc2kUFR88XkOmQqGEHVIkLU+PxaKY63o8dRsgHbfj87g1+X16iXasg7rch7rfhbE/F92MNJ7kkEqIVWZ6Q8/ZClSwZajwJN8sjJuQYQeEJWwEbzutV/Pr2FafVEk73C7g8O0arqCDmtSLmImzxhG3BgLTf2qT6XAglQTcq7SEk3KR3rVXw88sFfnxqo7WnYslrxZJTl5T26PhN0QKqzQRQEnS30x4dEJfsaF8n2FWxPMphxXVFoDLChrcPdPBIbJaGTd0JUgE7Pl6T0LomIe7jkOgSGJAQeppUvTuUKYdsyDGCOmbvmnhWq+Cll8PyKIeTjomtXBIpiYPCExTBiCRvytCr+65QJTqEHUbI8oTm2iLO61XERA5LTsKKixD3cTgpKnj/bAGrLkKGJySYCesuChERUXlyUC5FHMgzvZiSbIh19Mpu3diU34pVFyHuJqSYEQk3Xa10fmrKXJwY0ApjduQ7k6Q8ev7dRIXvkDMj4h7S5onMdDsKEYeshh3IeXuxLRi6f0FlBiiCEQlmutn5f5EV74iqZJW3fBZtU7Rgw9uHdaFH22AmOeUi8Tb+Dx+s3LBdcjXYAAAAAElFTkSuQmCC" />
						<?php }?>
					</div>
					<div class="col-xs-11 troubleshooter_state_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tsr']->value['status'],'htmlall','UTF-8' ));?>
">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tsr']->value['title'],'htmlall','UTF-8' ));?>

					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['tsr']->value['status'] == '0') {?>
					<div class="row">
						<div class="col-xs-1">
							&nbsp;
						</div>
						<div class="col-xs-11">
							<?php echo $_smarty_tpl->tpl_vars['tsr']->value['description'];?>
 						</div>
					</div>
				<?php }?>
			</div>
		</div>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
