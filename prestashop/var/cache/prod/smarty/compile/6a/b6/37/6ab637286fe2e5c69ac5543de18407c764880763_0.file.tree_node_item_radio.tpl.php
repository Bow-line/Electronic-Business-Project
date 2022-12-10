<?php
/* Smarty version 3.1.43, created on 2022-12-10 15:43:14
  from '/var/www/html/admindoll/themes/default/template/helpers/tree/tree_node_item_radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63949b028a7d02_16909824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ab637286fe2e5c69ac5543de18407c764880763' => 
    array (
      0 => '/var/www/html/admindoll/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1670682605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63949b028a7d02_16909824 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-item<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['disabled'])) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['disabled'])) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
