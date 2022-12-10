<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:43
  from '/var/www/html/modules/paypal/views/templates/shortcut/shortcut-preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a29f2e62c3_64264346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5741eaeb518a0b35788d30a802eddf2738c685ff' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/shortcut/shortcut-preview.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a29f2e62c3_64264346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7170379246394a29f2e23f9_55569821', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19440193736394a29f2e3a66_19734542', 'init-button');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./shortcut-layout.tpl");
}
/* {block 'content'} */
class Block_7170379246394a29f2e23f9_55569821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7170379246394a29f2e23f9_55569821',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div preview-button-container <?php if ((isset($_smarty_tpl->tpl_vars['shortcutID']->value))) {?> data-id="<?php echo $_smarty_tpl->tpl_vars['shortcutID']->value;?>
" <?php }?>></div>
<?php
}
}
/* {/block 'content'} */
/* {block 'init-button'} */
class Block_19440193736394a29f2e3a66_19734542 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'init-button' => 
  array (
    0 => 'Block_19440193736394a29f2e3a66_19734542',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
    

    // Wrap a logic in a function init() for to avoid the redefining the variables
    function init () {
        var btnStyle = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['styleSetting']->value ));?>
;
        var selector = '[preview-button-container]<?php if ((isset($_smarty_tpl->tpl_vars['shortcutID']->value))) {?>[data-id="<?php echo $_smarty_tpl->tpl_vars['shortcutID']->value;?>
"]<?php }?>';

        function waitPaypalIsLoaded() {
          if (typeof totPaypalSdkButtons === 'undefined') {
              setTimeout(waitPaypalIsLoaded, 200);
              return;
          }
            document.querySelector(selector).style.width = btnStyle['width'] + 'px';
            totPaypalSdkButtons.Buttons({
                fundingSource: totPaypalSdkButtons.FUNDING.PAYPAL,
                style: btnStyle
            }).render(document.querySelector(selector));
        }

        waitPaypalIsLoaded();
    }

    init();

    
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'init-button'} */
}
