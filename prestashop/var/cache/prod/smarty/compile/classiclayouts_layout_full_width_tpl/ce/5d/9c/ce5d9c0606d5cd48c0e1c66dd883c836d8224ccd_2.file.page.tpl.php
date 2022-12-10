<?php
/* Smarty version 3.1.43, created on 2022-12-10 15:51:05
  from '/var/www/html/themes/classic/templates/cms/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63949cd98f1253_17108305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce5d9c0606d5cd48c0e1c66dd883c836d8224ccd' => 
    array (
      0 => '/var/www/html/themes/classic/templates/cms/page.tpl',
      1 => 1670682609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63949cd98f1253_17108305 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5121641363949cd98ebb38_18207108', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187847948763949cd98ed4e8_89052333', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_5121641363949cd98ebb38_18207108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_5121641363949cd98ebb38_18207108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'cms_content'} */
class Block_13928958163949cd98edf77_74283425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo $_smarty_tpl->tpl_vars['cms']->value['content'];?>

    <?php
}
}
/* {/block 'cms_content'} */
/* {block 'hook_cms_dispute_information'} */
class Block_117180983063949cd98eee23_05803913 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSDisputeInformation'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_cms_dispute_information'} */
/* {block 'hook_cms_print_button'} */
class Block_166141255563949cd98f0201_36905545 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCMSPrintButton'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_cms_print_button'} */
/* {block 'page_content_container'} */
class Block_187847948763949cd98ed4e8_89052333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_187847948763949cd98ed4e8_89052333',
  ),
  'cms_content' => 
  array (
    0 => 'Block_13928958163949cd98edf77_74283425',
  ),
  'hook_cms_dispute_information' => 
  array (
    0 => 'Block_117180983063949cd98eee23_05803913',
  ),
  'hook_cms_print_button' => 
  array (
    0 => 'Block_166141255563949cd98f0201_36905545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content page-cms page-cms-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['id'], ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13928958163949cd98edf77_74283425', 'cms_content', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117180983063949cd98eee23_05803913', 'hook_cms_dispute_information', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166141255563949cd98f0201_36905545', 'hook_cms_print_button', $this->tplIndex);
?>


  </section>
<?php
}
}
/* {/block 'page_content_container'} */
}
