<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:43
  from '/var/www/html/modules/paypal/views/templates/shortcut/shortcut-layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a29f2ef182_69391044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caf74192a3a0d1c77c45fbccab3be2fdb73ca397' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/shortcut/shortcut-layout.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a29f2ef182_69391044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!-- Start shortcut. Module Paypal -->
<?php ob_start();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['psPaypalDir']->value)."/views/templates/_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->assign('javascriptBlock', ob_get_clean());
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15543063376394a29f2ec963_78271617', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6559461776394a29f2eda67_59651969', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1197804766394a29f2ee1f3_27601288', 'js');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2261529066394a29f2ee8e0_18330893', 'init-button');
?>

<!-- End shortcut. Module Paypal -->



<?php }
/* {block 'head'} */
class Block_15543063376394a29f2ec963_78271617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_15543063376394a29f2ec963_78271617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['javascriptBlock']->value;?>

<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_6559461776394a29f2eda67_59651969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6559461776394a29f2eda67_59651969',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_1197804766394a29f2ee1f3_27601288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_1197804766394a29f2ee1f3_27601288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
/* {block 'init-button'} */
class Block_2261529066394a29f2ee8e0_18330893 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'init-button' => 
  array (
    0 => 'Block_2261529066394a29f2ee8e0_18330893',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
      function waitPaypalIsLoaded() {
          if (typeof totPaypalSdkButtons === 'undefined' || typeof Shortcut === 'undefined') {
              setTimeout(waitPaypalIsLoaded, 200);
              return;
          }

          Shortcut.init();
          Shortcut.initButton();
      }

      waitPaypalIsLoaded();
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'init-button'} */
}
