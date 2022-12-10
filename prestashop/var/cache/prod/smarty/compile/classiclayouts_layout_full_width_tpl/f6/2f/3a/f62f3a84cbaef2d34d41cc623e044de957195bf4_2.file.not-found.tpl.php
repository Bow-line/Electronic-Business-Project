<?php
/* Smarty version 3.1.43, created on 2022-12-10 15:43:10
  from '/var/www/html/themes/classic/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63949afe486880_44904974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f62f3a84cbaef2d34d41cc623e044de957195bf4' => 
    array (
      0 => '/var/www/html/themes/classic/templates/errors/not-found.tpl',
      1 => 1670682609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63949afe486880_44904974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23144373863949afe47d0f1_68563486', 'page_content');
?>

</section>
<?php }
/* {block "error_content"} */
class Block_176960981963949afe47d9c2_33494559 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['errorContent']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['errorContent']->value;?>

      <?php } else { ?>
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This page could not be found','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Try to search our catalog, you may find what you are looking for!','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
      <?php }?>
    <?php
}
}
/* {/block "error_content"} */
/* {block 'search'} */
class Block_203432157063949afe484153_73985580 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_24080609263949afe485528_94082286 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_23144373863949afe47d0f1_68563486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_23144373863949afe47d0f1_68563486',
  ),
  'error_content' => 
  array (
    0 => 'Block_176960981963949afe47d9c2_33494559',
  ),
  'search' => 
  array (
    0 => 'Block_203432157063949afe484153_73985580',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_24080609263949afe485528_94082286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176960981963949afe47d9c2_33494559', "error_content", $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203432157063949afe484153_73985580', 'search', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24080609263949afe485528_94082286', 'hook_not_found', $this->tplIndex);
?>

  <?php
}
}
/* {/block 'page_content'} */
}
