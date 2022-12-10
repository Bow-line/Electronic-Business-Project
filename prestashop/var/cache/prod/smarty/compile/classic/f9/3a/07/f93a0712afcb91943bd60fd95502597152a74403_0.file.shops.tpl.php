<?php
/* Smarty version 3.1.43, created on 2022-12-10 15:53:07
  from '/var/www/html/modules/ps_facetedsearch/views/templates/admin/_partials/shops.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63949d53868371_24487033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f93a0712afcb91943bd60fd95502597152a74403' => 
    array (
      0 => '/var/www/html/modules/ps_facetedsearch/views/templates/admin/_partials/shops.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63949d53868371_24487033 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['asso_shops']->value))) {?>
  <div class="form-group">
    <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose shop association:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
    <div class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['asso_shops']->value;?>
</div>
  </div>
<?php }
}
}
