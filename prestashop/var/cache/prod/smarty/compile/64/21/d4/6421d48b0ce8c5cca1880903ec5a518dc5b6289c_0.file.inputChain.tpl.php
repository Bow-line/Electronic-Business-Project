<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:43
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/form/fields/inputChain.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a29f311856_36141430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6421d48b0ce8c5cca1880903ec5a518dc5b6289c' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/form/fields/inputChain.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a29f311856_36141430 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div field-row  class="pp__my-5">
  <div label>
    <?php if ((isset($_smarty_tpl->tpl_vars['label']->value))) {?>
        <div class="pp__my-2 pp__label">
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['label']->value,'htmlall','UTF-8' ));?>

        </div>
    <?php }?>
  </div>

  <div field>
    <div chain-input-container>
        <?php if ((isset($_smarty_tpl->tpl_vars['inputs']->value)) && false === empty($_smarty_tpl->tpl_vars['inputs']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inputs']->value, 'input');
$_smarty_tpl->tpl_vars['input']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['input']->value) {
$_smarty_tpl->tpl_vars['input']->do_else = false;
?>
              <div input>
                  <?php echo $_smarty_tpl->tpl_vars['input']->value->render();?>

              </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>

    <div msg-container></div>
  </div>
</div>
<?php }
}
