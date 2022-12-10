<?php
/* Smarty version 3.1.43, created on 2022-12-10 15:43:23
  from '/var/www/html/admindoll/themes/default/template/helpers/list/list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63949b0b6c2e59_80311246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62c5e10e7aff9c6a65ec5146212cf7036c2116bf' => 
    array (
      0 => '/var/www/html/admindoll/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1670682605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63949b0b6c2e59_80311246 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
