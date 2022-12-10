<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:43
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/blockPreviewButtonContext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a29f257df5_42552749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceec29b9fa8cef6d5f2af0132843e467ade8b0a1' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/blockPreviewButtonContext.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a29f257df5_42552749 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="block-preview-button-context pp__flex">
	<div config-block class="pp__py-2 pp__px-1">
		<div class="pp__mb-2">
			<input type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['paypal_express_checkout_shortcut_cart']->value)) && $_smarty_tpl->tpl_vars['paypal_express_checkout_shortcut_cart']->value) {?>checked<?php }?> name="paypal_express_checkout_shortcut_cart" value="1"
				   id="paypal_express_checkout_shortcut_cart">
			<label for="paypal_express_checkout_shortcut_cart" class="control-label">
				<span
					class="label-tooltip"
					data-toggle="tooltip"
					data-html="true"
					title=""
					data-original-title="<p style='text-align:left'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activating Express Checkout Shortcut on Cart Page is recommended in specific cases only:','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
						<p style='text-align:left'>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Multi Products web sites','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>"
					>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart Page','mod'=>'paypal'),$_smarty_tpl ) );?>

				</span>
			</label>
		</div>
		<img src="<?php echo addslashes($_smarty_tpl->tpl_vars['moduleDir']->value);?>
paypal/views/img/cart_page_button.png" class="img-responsive" alt="cart_page">
	</div>

	<div config-block class="pp__py-2 pp__px-1">
		<div class="pp__mb-2">
			<input type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['paypal_express_checkout_shortcut']->value)) && $_smarty_tpl->tpl_vars['paypal_express_checkout_shortcut']->value) {?>checked<?php }?> name="paypal_express_checkout_shortcut"
				id="paypal_express_checkout_shortcut" value="1">
			<label for="paypal_express_checkout_shortcut"  class="control-label">
				<span
					class="label-tooltip"
					data-toggle="tooltip"
					data-html="true"
					title=""
					data-original-title="<p style='text-align:left'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activating Express Checkout Shortcut on Product Pages is recommended in specific cases only:','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
						<p style='text-align:left'>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mono Product','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
						<p style='text-align:left'>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Digital Goods','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
						<p style='text-align:left'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Example:','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
						<p style='text-align:left'>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Parking lot rental','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
						<p style='text-align:left'>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Escape game reservation','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
						<p style='text-align:left'>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking services','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
						<p style='text-align:left'>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Single product sale','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>"
					>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Pages','mod'=>'paypal'),$_smarty_tpl ) );?>

				</span>
			</label>
		</div>
		<img src="<?php echo addslashes($_smarty_tpl->tpl_vars['moduleDir']->value);?>
paypal/views/img/product_page_button.png" alt="product_page_button">
	</div>

  <div config-block class="pp__py-2 pp__px-1">
    <div class="pp__mb-2">
      <input type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['paypal_express_checkout_shortcut_signup']->value)) && $_smarty_tpl->tpl_vars['paypal_express_checkout_shortcut_signup']->value) {?>checked<?php }?> name="paypal_express_checkout_shortcut_signup"
             id="paypal_express_checkout_shortcut_signup" value="1">
      <label for="paypal_express_checkout_shortcut_signup"  class="control-label">
				<span
                class="label-tooltip"
                data-toggle="tooltip"
                data-html="true"
                title=""
                data-original-title="<p style='text-align:left'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Express Checkout Shortcut on «Sign up» step in checkout is recommended for allowing your customer to skip the «Sign up» form on your website. All information, including delivery address, will be provided by PayPal','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>"
        >
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up step in checkout','mod'=>'paypal'),$_smarty_tpl ) );?>

				</span>
      </label>
    </div>
    <img src="<?php echo addslashes($_smarty_tpl->tpl_vars['moduleDir']->value);?>
paypal/views/img/signin-checkout-button.png" alt="product_page_button">
  </div>
</div>

<div class="alert alert-info icon-lightbulb">
	<button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal shortcuts allow a faster checkout for your buyers. PayPal automatically provides you with the client\'s shipping and billing information.','mod'=>'paypal'),$_smarty_tpl ) );?>

</div>

<?php }
}
