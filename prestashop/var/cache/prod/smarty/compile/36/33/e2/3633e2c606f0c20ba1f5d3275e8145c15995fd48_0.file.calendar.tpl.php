<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:01:57
  from '/var/www/html/admindoll/themes/default/template/controllers/stats/calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63949f65043808_51060469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3633e2c606f0c20ba1f5d3275e8145c15995fd48' => 
    array (
      0 => '/var/www/html/admindoll/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1670682605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../form_date_range_picker.tpl' => 1,
  ),
),false)) {
function content_63949f65043808_51060469 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="statsContainer" class="col-md-9">
	<?php $_smarty_tpl->_subTemplateRender("file:../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
