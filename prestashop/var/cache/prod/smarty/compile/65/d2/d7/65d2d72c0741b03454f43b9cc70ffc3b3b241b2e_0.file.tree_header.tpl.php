<?php
/* Smarty version 3.1.43, created on 2022-12-02 23:33:49
  from '/var/www/html/admindoll/themes/default/template/helpers/tree/tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_638a7d4d0ed519_50135134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65d2d72c0741b03454f43b9cc70ffc3b3b241b2e' => 
    array (
      0 => '/var/www/html/admindoll/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1670002873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a7d4d0ed519_50135134 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
