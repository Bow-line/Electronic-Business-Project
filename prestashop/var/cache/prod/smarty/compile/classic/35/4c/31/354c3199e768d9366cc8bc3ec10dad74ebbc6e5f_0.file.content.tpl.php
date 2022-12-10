<?php
/* Smarty version 3.1.43, created on 2022-12-10 15:43:09
  from '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63949afd95c652_02521908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '354c3199e768d9366cc8bc3ec10dad74ebbc6e5f' => 
    array (
      0 => '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_63949afd95c652_02521908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
