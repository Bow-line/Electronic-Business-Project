<?php
/* Smarty version 3.1.43, created on 2022-12-10 15:35:45
  from '/var/www/html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63949941c80221_10527361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dcdb649b7deb86ed768ed411b391e3fc80d8af2' => 
    array (
      0 => '/var/www/html/themes/classic/templates/page.tpl',
      1 => 1670682609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63949941c80221_10527361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161053904863949941c7bb22_73919893', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_129277993563949941c7c5f0_20265818 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_20315335163949941c7c004_09313899 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129277993563949941c7c5f0_20265818', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_136657010563949941c7db85_32347547 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_75981151063949941c7e535_94167226 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_111928075263949941c7d712_56422004 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136657010563949941c7db85_32347547', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75981151063949941c7e535_94167226', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_37031675363949941c7f404_50185846 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_122398510063949941c7efc4_21075773 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37031675363949941c7f404_50185846', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_161053904863949941c7bb22_73919893 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_161053904863949941c7bb22_73919893',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_20315335163949941c7c004_09313899',
  ),
  'page_title' => 
  array (
    0 => 'Block_129277993563949941c7c5f0_20265818',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_111928075263949941c7d712_56422004',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_136657010563949941c7db85_32347547',
  ),
  'page_content' => 
  array (
    0 => 'Block_75981151063949941c7e535_94167226',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_122398510063949941c7efc4_21075773',
  ),
  'page_footer' => 
  array (
    0 => 'Block_37031675363949941c7f404_50185846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20315335163949941c7c004_09313899', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111928075263949941c7d712_56422004', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122398510063949941c7efc4_21075773', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
