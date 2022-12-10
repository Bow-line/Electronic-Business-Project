<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:01:57
  from '/var/www/html/admindoll/themes/default/template/controllers/stats/stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63949f6507ffa8_63010697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74b4c938cb32bce39f089b5772147a9d8215bddd' => 
    array (
      0 => '/var/www/html/admindoll/themes/default/template/controllers/stats/stats.tpl',
      1 => 1670682605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63949f6507ffa8_63010697 (Smarty_Internal_Template $_smarty_tpl) {
?>
		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value && $_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module not found','d'=>'Admin.Stats.Notification'),$_smarty_tpl ) );?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select a module from the left column.','d'=>'Admin.Stats.Notification'),$_smarty_tpl ) );?>
</h3>
			<?php }?>
		</div>
	</div>
</div>
<?php }
}
