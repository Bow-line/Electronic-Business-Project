<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:43
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/form/fields/hookSelect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a29f2c0757_83751052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7174f3d042f5e53b528037a5dd7ae86510b3a469' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/form/fields/hookSelect.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a29f2c0757_83751052 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pp-select-preview-container pp__mb-5">
  <div class="pp-select-container">
    <select name="<?php if ((isset($_smarty_tpl->tpl_vars['confName']->value))) {
echo $_smarty_tpl->tpl_vars['confName']->value;
}?>">
        <?php if ((isset($_smarty_tpl->tpl_vars['hooks']->value)) && false === empty($_smarty_tpl->tpl_vars['hooks']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hooks']->value, 'hookData', false, 'hookName');
$_smarty_tpl->tpl_vars['hookData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hookName']->value => $_smarty_tpl->tpl_vars['hookData']->value) {
$_smarty_tpl->tpl_vars['hookData']->do_else = false;
?>
              <option
                      value="<?php echo $_smarty_tpl->tpl_vars['hookName']->value;?>
"
                      <?php if ((isset($_smarty_tpl->tpl_vars['selectedHook']->value)) && $_smarty_tpl->tpl_vars['selectedHook']->value === $_smarty_tpl->tpl_vars['hookName']->value) {?>selected<?php }?>
                      <?php if ((isset($_smarty_tpl->tpl_vars['hookData']->value['preview']))) {?>data-preview-image="<?php echo addslashes($_smarty_tpl->tpl_vars['hookData']->value['preview']);?>
"<?php }?>>
                  <?php if ((isset($_smarty_tpl->tpl_vars['hookData']->value['desc']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hookData']->value['desc'],'htmlall','UTF-8' ));
}?>
              </option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </select>

    <div class="pp__mt-5">
      <div class="alert alert-info">
          <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If some elements added via other modules are displayed on the same hook, you can manage the position of the PayPal Official module via [a @href1@]« Design - Positions »[/a].','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModulesPositions',true);
$_prefixVariable4 = ob_get_clean();
ob_start();
echo 'target="blank"';
$_prefixVariable5 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable3,array('@href1@'=>$_prefixVariable4,'@target@'=>$_prefixVariable5));?>

      </div>
    </div>

  </div>

  <div class="pp-preview-container">
    <div class="pp-preview">

    </div>
  </div>
</div>

<?php }
}
