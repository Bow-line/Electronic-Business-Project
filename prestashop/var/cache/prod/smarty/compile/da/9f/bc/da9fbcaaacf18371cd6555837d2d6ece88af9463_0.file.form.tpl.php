<?php
/* Smarty version 3.1.43, created on 2022-12-09 19:38:09
  from '/var/www/html/modules/amazonpay/views/templates/admin/_configure/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63938091348b19_89264344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da9fbcaaacf18371cd6555837d2d6ece88af9463' => 
    array (
      0 => '/var/www/html/modules/amazonpay/views/templates/admin/_configure/helpers/form/form.tpl',
      1 => 1670610174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63938091348b19_89264344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6238122516393809133aff8_42760710', "other_input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['default_template']->value);
}
/* {block "other_input"} */
class Block_6238122516393809133aff8_42760710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'other_input' => 
  array (
    0 => 'Block_6238122516393809133aff8_42760710',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['field']->value[0]))) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['field']->value[0]['name']))) {?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value[0]['name'] == 'AMAZONPAY_ALEXA_DELIVERY_NOTIFICATIONS') {?>
                <div id="carriers_mapping_alexa">
                    <div class="form-group">
                        <label class="control-label col-lg-3">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier mapping','mod'=>'amazonpay'),$_smarty_tpl ) );?>

                        </label>
                        <div class="col-lg-9">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['amz_carrier_options']->value, 'co');
$_smarty_tpl->tpl_vars['co']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['co']->value) {
$_smarty_tpl->tpl_vars['co']->do_else = false;
?>
                                <div class="row">
                                    <label class="col-lg-3"><?php echo $_smarty_tpl->tpl_vars['co']->value['label'];?>
:</label>
                                    <select name="AMAZONPAY_CARRIERS_MAPPING[<?php echo $_smarty_tpl->tpl_vars['co']->value['val'];?>
]" class="col-lg-9">
                                        <option value="">---</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['amazon_carriers']->value, 'ac');
$_smarty_tpl->tpl_vars['ac']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ac']->value) {
$_smarty_tpl->tpl_vars['ac']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['ac']->value[1];?>
"<?php ob_start();
echo $_smarty_tpl->tpl_vars['ac']->value[1];
$_prefixVariable1 = ob_get_clean();
if ((isset($_smarty_tpl->tpl_vars['mapped_carriers']->value[$_smarty_tpl->tpl_vars['co']->value['val']])) && $_smarty_tpl->tpl_vars['mapped_carriers']->value[$_smarty_tpl->tpl_vars['co']->value['val']] == $_prefixVariable1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ac']->value[0];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Map the carriers to your carrier names. Note: If no carrier is assigned, a delivery notification will not be sent.','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</p>

                        </div>
                    </div>
                </div>
            <?php }?>
        <?php }?>
    <?php }
}
}
/* {/block "other_input"} */
}
