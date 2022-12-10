<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:43
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/form/fields/widgetCode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a29f2b3a88_52669170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2116351f6e33e02d62ee8d9ba1bd4e47957f08ab' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/form/fields/widgetCode.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a29f2b3a88_52669170 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div widget-code-container>
  <div class="input-group pp__mb-5">
    <input
            type="text"
            readonly
            <?php if ((isset($_smarty_tpl->tpl_vars['widgetCode']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['widgetCode']->value;?>
"<?php }?>
            id="<?php if ((isset($_smarty_tpl->tpl_vars['confName']->value))) {
echo $_smarty_tpl->tpl_vars['confName']->value;
}?>"
            name="<?php if ((isset($_smarty_tpl->tpl_vars['confName']->value))) {
echo $_smarty_tpl->tpl_vars['confName']->value;
}?>"
    />

    <span
            class="input-group-addon"
            style="cursor: pointer"
            onclick="document.getElementById('<?php if ((isset($_smarty_tpl->tpl_vars['confName']->value))) {
echo $_smarty_tpl->tpl_vars['confName']->value;
}?>').select(); document.execCommand('copy')"
    >
            <i class="icon-copy"></i>
    </span>
  </div>

  <?php if ((isset($_smarty_tpl->tpl_vars['isShowDescription']->value)) && 'isShowDescription') {?>
    <div class="pp__mt-5">
      <div class="alert alert-info">
          <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In order to display the PayPal button via [a @href1@]widget[/a] it will be necessary to add it to the template at the desired location.'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
ob_start();
echo 'target="blank"';
$_prefixVariable2 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable1,array('@href1@'=>'https://devdocs.prestashop.com/1.7/modules/concepts/widgets/','@target@'=>$_prefixVariable2));?>

      </div>
    </div>
  <?php }?>

</div>


<?php }
}
