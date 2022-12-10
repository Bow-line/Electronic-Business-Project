<?php
/* Smarty version 3.1.43, created on 2022-12-10 15:53:07
  from '/var/www/html/modules/ps_facetedsearch/views/templates/admin/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63949d5385f2a6_80515227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa14301dc31780163aaf5fa57208d145fa472ba0' => 
    array (
      0 => '/var/www/html/modules/ps_facetedsearch/views/templates/admin/_partials/header.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63949d5385f2a6_80515227 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
  <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Template name:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
  <div class="col-lg-9">
    <input type="text" id="layered_tpl_name" name="layered_tpl_name" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
" />
    <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Only as a reminder','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</p>
  </div>
</div>
<?php }
}
