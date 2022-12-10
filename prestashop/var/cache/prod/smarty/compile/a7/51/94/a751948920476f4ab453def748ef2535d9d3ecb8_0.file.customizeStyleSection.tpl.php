<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:43
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/form/customizeStyleSection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a29f308b17_11663744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a751948920476f4ab453def748ef2535d9d3ecb8' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/form/customizeStyleSection.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a29f308b17_11663744 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div customize-style-shortcut-container>
  <div setting-section>
    <div current-view-section>
      <div button-container>
          <?php if ((isset($_smarty_tpl->tpl_vars['shortcut']->value))) {?>
              <?php echo $_smarty_tpl->tpl_vars['shortcut']->value;?>

          <?php }?>

        <div class="overlay"></div>
      </div>

      <div>
        <span class="btn btn-default pp__ml-5" toggle-style-configuration>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize','mod'=>'paypal'),$_smarty_tpl ) );?>

          <i class="icon-edit"></i>
        </span>
      </div>
    </div>

    <?php if ((isset($_smarty_tpl->tpl_vars['errors']->value)) && false === empty($_smarty_tpl->tpl_vars['errors']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
            <div class="alert alert-danger">
              <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>

    <div configuration-section class="hidden">
      <?php if ((isset($_smarty_tpl->tpl_vars['configurations']->value)) && false === empty($_smarty_tpl->tpl_vars['configurations']->value)) {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configurations']->value, 'configuration');
$_smarty_tpl->tpl_vars['configuration']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['configuration']->value) {
$_smarty_tpl->tpl_vars['configuration']->do_else = false;
?>
              <?php echo $_smarty_tpl->tpl_vars['configuration']->value->render();?>

          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php }?>
    </div>
  </div>

  <div preview-section class="invisible" style="position: relative">
    <div button-container></div>
    <div class="overlay"></div>
  </div>
</div>
<?php }
}
