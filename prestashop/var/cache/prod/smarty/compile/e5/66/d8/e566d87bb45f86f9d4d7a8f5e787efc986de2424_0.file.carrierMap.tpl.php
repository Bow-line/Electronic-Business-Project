<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:43
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/carrierMap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a29f27e597_53971396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e566d87bb45f86f9d4d7a8f5e787efc986de2424' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/carrierMap.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a29f27e597_53971396 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table">
  <thead>
    <tr>
      <th><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop carrier','mod'=>'paypal'),$_smarty_tpl ) );?>
</b></th>
      <th><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal carrier','mod'=>'paypal'),$_smarty_tpl ) );?>
</b></th>
    </tr>
  </thead>
  <tbody>
  <?php if ((isset($_smarty_tpl->tpl_vars['carriers']->value)) && (isset($_smarty_tpl->tpl_vars['mapService']->value))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carriers']->value, 'carrier');
$_smarty_tpl->tpl_vars['carrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->do_else = false;
?>
        <?php $_smarty_tpl->_assignInScope('selectedCarrier', $_smarty_tpl->tpl_vars['mapService']->value->getPaypalCarrierByPsCarrier($_smarty_tpl->tpl_vars['carrier']->value['id_reference']));?>
        <tr>
          <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carrier']->value['name'],'htmlall','utf-8' ));?>
</td>
          <td>
            <select name="carrier_map[]" id="">
              <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select carrier','mod'=>'paypal'),$_smarty_tpl ) );?>
</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mapService']->value->getPaypalCarriersByCountry(), 'paypalCarrier');
$_smarty_tpl->tpl_vars['paypalCarrier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['paypalCarrier']->value) {
$_smarty_tpl->tpl_vars['paypalCarrier']->do_else = false;
?>
                <option
                        value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carrier']->value['id_reference'],'htmlall','utf-8' ));?>
,<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paypalCarrier']->value['key'],'htmlall','utf-8' ));?>
"
                        <?php if ($_smarty_tpl->tpl_vars['selectedCarrier']->value == $_smarty_tpl->tpl_vars['paypalCarrier']->value['key']) {?>selected<?php }?>>

                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paypalCarrier']->value['name'],'htmlall','utf-8' ));?>


                </option>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
          </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }?>

  </tbody>
</table>
<?php }
}
