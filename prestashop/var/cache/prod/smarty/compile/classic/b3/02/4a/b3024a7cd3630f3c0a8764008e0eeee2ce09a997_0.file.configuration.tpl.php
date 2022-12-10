<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:13:38
  from '/var/www/html/modules/ps_checkout/views/templates/admin/configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a222803672_33739097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3024a7cd3630f3c0a8764008e0eeee2ce09a997' => 
    array (
      0 => '/var/www/html/modules/ps_checkout/views/templates/admin/configuration.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a222803672_33739097 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="app"></div>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }
</style>
<?php }
}
