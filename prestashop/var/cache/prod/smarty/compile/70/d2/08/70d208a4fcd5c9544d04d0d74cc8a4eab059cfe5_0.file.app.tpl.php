<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:13:30
  from '/var/www/html/modules/psxmarketingwithgoogle/views/templates/admin/app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a21a6c99d6_88972213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70d208a4fcd5c9544d04d0d74cc8a4eab059cfe5' => 
    array (
      0 => '/var/www/html/modules/psxmarketingwithgoogle/views/templates/admin/app.tpl',
      1 => 1670682609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a21a6c99d6_88972213 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>

<div id="psxMktgWithGoogleApp"></div>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['chunkVendor']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathApp']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }
</style>
<?php }
}
