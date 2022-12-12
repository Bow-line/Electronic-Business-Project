<?php
/* Smarty version 3.1.43, created on 2022-12-11 21:20:07
  from '/var/www/html/admindoll/themes/new-theme/template/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63963b77439940_11788370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e59b4de1271f79488645409c2264f94a171e9c1e' => 
    array (
      0 => '/var/www/html/admindoll/themes/new-theme/template/footer.tpl',
      1 => 1670679450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63963b77439940_11788370 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="footer" class="bootstrap">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackOfficeFooter"),$_smarty_tpl ) );?>

</div>
<?php }
}
