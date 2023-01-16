<?php
/* Smarty version 3.1.43, created on 2023-01-16 17:26:57
  from '/var/www/html/admindoll/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63c57ad102fde3_35377538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '317fb58629d5f50a6da35094ec24a0d80ec0c9db' => 
    array (
      0 => '/var/www/html/admindoll/themes/default/template/content.tpl',
      1 => 1673882384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c57ad102fde3_35377538 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
