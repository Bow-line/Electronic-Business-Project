<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:01:47
  from '/var/www/html/modules/ps_faviconnotificationbo/views/templates/admin/configure_favicon_bo/helpers/options/options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63949f5b16d390_31932972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4a7abb649ff9cabafcd6418afc1106bceb9b87a' => 
    array (
      0 => '/var/www/html/modules/ps_faviconnotificationbo/views/templates/admin/configure_favicon_bo/helpers/options/options.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63949f5b16d390_31932972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67728750463949f5b167ba8_09077421', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214695110463949f5b16c9c2_40034862', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "input"} */
class Block_67728750463949f5b167ba8_09077421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_67728750463949f5b167ba8_09077421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'color') {?>
    <div class="col-lg-2">
      <div class="input-group">
        <input
                type="color"
                data-hex="true"
                class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['field']->value['class'];
} else { ?>color mColorPickerInput<?php }?>"
                name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['value'],'html','UTF-8' ));?>
"
        />
      </div>
    </div>
  <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php }
}
}
/* {/block "input"} */
/* {block "after"} */
class Block_214695110463949f5b16c9c2_40034862 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_214695110463949f5b16c9c2_40034862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php echo '<script'; ?>
 type="text/javascript">
    // https://github.com/PrestaShop/PrestaShop/pull/18757
    $.fn.mColorPicker.defaults.imageFolder = baseDir + 'img/admin/';
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "after"} */
}
