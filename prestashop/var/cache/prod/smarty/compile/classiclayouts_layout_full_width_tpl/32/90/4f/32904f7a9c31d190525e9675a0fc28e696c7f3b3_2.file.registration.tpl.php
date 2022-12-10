<?php
/* Smarty version 3.1.43, created on 2022-12-10 15:35:57
  from '/var/www/html/themes/classic/templates/customer/registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394994dde8f61_69846085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32904f7a9c31d190525e9675a0fc28e696c7f3b3' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/registration.tpl',
      1 => 1670682609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394994dde8f61_69846085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12600575446394994dde3be2_64889408', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11479028306394994dde5225_32036109', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_12600575446394994dde3be2_64889408 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_12600575446394994dde3be2_64889408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'register_form_container'} */
class Block_20559385836394994dde59b7_07147534 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo $_smarty_tpl->tpl_vars['hook_create_account_top']->value;?>

      <section class="register-form">
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Already have an account?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in instead!','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a></p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/customer-form.tpl','ui'=>$_smarty_tpl->tpl_vars['register_form']->value),$_smarty_tpl ) );?>

      </section>
    <?php
}
}
/* {/block 'register_form_container'} */
/* {block 'page_content'} */
class Block_11479028306394994dde5225_32036109 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_11479028306394994dde5225_32036109',
  ),
  'register_form_container' => 
  array (
    0 => 'Block_20559385836394994dde59b7_07147534',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20559385836394994dde59b7_07147534', 'register_form_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
