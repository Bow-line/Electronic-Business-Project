<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:43
  from '/var/www/html/modules/paypal/views/templates/admin/customizeCheckout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a29f3490a7_86280357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8ac9456eb7c5305001d327c8e8a746de283d292' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/customizeCheckout.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/messages/prestashopCheckoutInfo.tpl' => 1,
    'file:./_partials/messages/restApiIntegrationMessage.tpl' => 1,
    'file:./_partials/messages/roundingSettingsMessage.tpl' => 1,
    'file:./_partials/headerLogo.tpl' => 1,
  ),
),false)) {
function content_6394a29f3490a7_86280357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1118228866394a29f3425c9_94429594', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, './admin.tpl');
}
/* {block 'content'} */
class Block_1118228866394a29f3425c9_94429594 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1118228866394a29f3425c9_94429594',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['showPsCheckoutInfo']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:./_partials/messages/prestashopCheckoutInfo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['showRestApiIntegrationMessage']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:./_partials/messages/restApiIntegrationMessage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['need_rounding']->value)) && $_smarty_tpl->tpl_vars['need_rounding']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:./_partials/messages/roundingSettingsMessage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender('file:./_partials/headerLogo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['formBehavior']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['formBehavior']->value;?>
     <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['formTrackingParameters']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['formTrackingParameters']->value;?>
     <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['formAdvanced']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['formAdvanced']->value;?>
     <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['formWhiteList']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['formWhiteList']->value;?>
     <?php }
}
}
/* {/block 'content'} */
}
