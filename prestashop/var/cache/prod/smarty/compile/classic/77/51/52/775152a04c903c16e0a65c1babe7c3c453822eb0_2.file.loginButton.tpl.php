<?php
/* Smarty version 3.1.43, created on 2022-12-10 14:49:54
  from '/var/www/html/modules/amazonpay/views/templates/hook/loginButton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63948e823758e5_60990230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '775152a04c903c16e0a65c1babe7c3c453822eb0' => 
    array (
      0 => '/var/www/html/modules/amazonpay/views/templates/hook/loginButton.tpl',
      1 => 1670679450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/button.tpl' => 1,
  ),
),false)) {
function content_63948e823758e5_60990230 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="amzbuttoncontainer">
    <h3 class="page-subheading">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use your Amazon Account','mod'=>'amazonpay'),$_smarty_tpl ) );?>

    </h3>
    <p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'With Amazon Pay and Login with Amazon, you can easily sign-in and use the shipping and payment information stored in your Amazon Account to place an order on this shop.','mod'=>'amazonpay'),$_smarty_tpl ) );?>

    </p>
    <?php $_smarty_tpl->_subTemplateRender("file:./_partials/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('AmazonPayButtonPlacement'=>'Cart','AmazonPayButtonID'=>$_smarty_tpl->tpl_vars['loginButtonId']->value,'AmazonPayButtonClasses'=>'amazonLogin'), 0, false);
?>
</div>
<?php }
}
