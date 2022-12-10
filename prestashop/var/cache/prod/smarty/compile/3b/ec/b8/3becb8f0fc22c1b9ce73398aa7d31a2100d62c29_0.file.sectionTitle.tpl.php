<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:43
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/form/sectionTitle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a29f291981_16733126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3becb8f0fc22c1b9ce73398aa7d31a2100d62c29' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/form/sectionTitle.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a29f291981_16733126 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['sectionTitle']->value))) {?>
    <div class="pp__my-5" <?php if ((isset($_smarty_tpl->tpl_vars['attributes']->value)) && false === empty($_smarty_tpl->tpl_vars['attributes']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attributes']->value, 'attribute');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['attribute']->value;?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>>
      <h3><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sectionTitle']->value,'htmlall','UTF-8' ));?>
</h3>
    </div>
<?php }
}
}
