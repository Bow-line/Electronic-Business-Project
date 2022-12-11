<?php
/* Smarty version 3.1.43, created on 2022-12-11 21:20:07
  from '/var/www/html/admindoll/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63963b773cd7f4_33279003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64cfa7f6e87626491becc35a5982245be4ceac82' => 
    array (
      0 => '/var/www/html/admindoll/themes/new-theme/template/content.tpl',
      1 => 1670679450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63963b773cd7f4_33279003 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
