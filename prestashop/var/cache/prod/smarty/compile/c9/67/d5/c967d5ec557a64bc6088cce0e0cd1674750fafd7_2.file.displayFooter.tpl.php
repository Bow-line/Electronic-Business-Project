<?php
/* Smarty version 3.1.43, created on 2022-12-10 14:49:54
  from '/var/www/html/modules/amazonpay/views/templates/hook/displayFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63948e82784705_36831729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c967d5ec557a64bc6088cce0e0cd1674750fafd7' => 
    array (
      0 => '/var/www/html/modules/amazonpay/views/templates/hook/displayFooter.tpl',
      1 => 1670679450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/button.tpl' => 1,
  ),
),false)) {
function content_63948e82784705_36831729 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['banner_url']->value))) {?>
    <div class="amzpayments-footer-banner">
        <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['banner_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
    </div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['show_amazonpay_button']->value)) && $_smarty_tpl->tpl_vars['show_amazonpay_button']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:./_partials/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('AmazonPayButtonID'=>'AmazonPayMiniCart','AmazonPayButtonPlacement'=>'Cart'), 0, false);
}
}
}
