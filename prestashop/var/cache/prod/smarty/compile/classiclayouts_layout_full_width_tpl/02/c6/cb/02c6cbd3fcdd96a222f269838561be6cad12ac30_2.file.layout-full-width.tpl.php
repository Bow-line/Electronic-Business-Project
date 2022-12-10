<?php
/* Smarty version 3.1.43, created on 2022-12-10 15:35:45
  from '/var/www/html/themes/classic/templates/layouts/layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63949941c87488_36782829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02c6cbd3fcdd96a222f269838561be6cad12ac30' => 
    array (
      0 => '/var/www/html/themes/classic/templates/layouts/layout-full-width.tpl',
      1 => 1670682609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63949941c87488_36782829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183940538763949941c84682_51710842', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59134573163949941c84ec8_75687648', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189625230263949941c85615_23447368', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_183940538763949941c84682_51710842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_183940538763949941c84682_51710842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_59134573163949941c84ec8_75687648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_59134573163949941c84ec8_75687648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_114720156763949941c86438_10092917 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_189625230263949941c85615_23447368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_189625230263949941c85615_23447368',
  ),
  'content' => 
  array (
    0 => 'Block_114720156763949941c86438_10092917',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="js-content-wrapper">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114720156763949941c86438_10092917', 'content', $this->tplIndex);
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
