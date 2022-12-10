<?php
/* Smarty version 3.1.43, created on 2022-12-10 13:26:33
  from '/var/www/html/modules/amazonpay/views/templates/hook/_partials/button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63947af930ea21_40735522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a0bfbc63d2857503d91185fea9bd380435bd1d2' => 
    array (
      0 => '/var/www/html/modules/amazonpay/views/templates/hook/_partials/button.tpl',
      1 => 1670610174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63947af930ea21_40735522 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div
        id="<?php if ((isset($_smarty_tpl->tpl_vars['AmazonPayButtonID']->value))) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['AmazonPayButtonID']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>AmazonPayButton<?php }?>"
        class="amazonPayButton <?php if ((isset($_smarty_tpl->tpl_vars['AmazonPayButtonClasses']->value))) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['AmazonPayButtonClasses']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"
        data-placement="<?php if ((isset($_smarty_tpl->tpl_vars['AmazonPayButtonPlacement']->value))) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['AmazonPayButtonPlacement']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>Other<?php }?>"
        data-color="<?php if ((isset($_smarty_tpl->tpl_vars['AmazonPayButtonColor']->value))) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['AmazonPayButtonColor']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
if ((isset($_smarty_tpl->tpl_vars['AmazonPayButtonPlacement']->value))) {
echo htmlspecialchars(AmazonPayHelper::getButtonColor($_smarty_tpl->tpl_vars['AmazonPayButtonPlacement']->value), ENT_QUOTES, 'UTF-8');
} else { ?>Gold<?php }
}?>"
        data-design="<?php if ((isset($_smarty_tpl->tpl_vars['AmazonPayDesign']->value))) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['AmazonPayDesign']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"
        data-rendered="0"
>
</div>
<?php }
}
