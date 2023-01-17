<?php
/* Smarty version 3.1.43, created on 2023-01-17 13:34:12
  from '/var/www/html/admindoll/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63c695c42aa6d5_83690183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64cfa7f6e87626491becc35a5982245be4ceac82' => 
    array (
      0 => '/var/www/html/admindoll/themes/new-theme/template/content.tpl',
      1 => 1673957878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c695c42aa6d5_83690183 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
