<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:43
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/white-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a29f33a9e0_45852338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f07d6a0e3ea4685f526fc1823b568ae9eebf20c1' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/white-list.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a29f33a9e0_45852338 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pp__flex" style="max-width: 400px">
  <input name = "PAYPAL_WHITE_LIST_IP" type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['PAYPAL_WHITE_LIST_IP']->value,'html','utf-8' ));?>
">
  <button style="white-space: nowrap;" current-ip="<?php echo $_smarty_tpl->tpl_vars['paypal_current_ip']->value;?>
" type="button" class="btn btn-primary" add-ip-btn><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add my IP','mod'=>'paypal'),$_smarty_tpl ) );?>
</button>
</div>

<?php echo '<script'; ?>
>
  document.querySelector('[add-ip-btn]').addEventListener('click', function(event) {
      var input = document.querySelector('[name="PAYPAL_WHITE_LIST_IP"]');
      var list = input.value.split(';');

      list.push(event.target.getAttribute('current-ip'));
      list = list.filter(function(item) {
          return item.length > 0;
      });
      input.value = list.join(';');
  });
<?php echo '</script'; ?>
>
<?php }
}
