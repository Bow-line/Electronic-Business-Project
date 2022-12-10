<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:43
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/form/colorDescriptions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a29f2ce4a9_68752020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac812809e5fc02931d7a911180aad3a6332b630d' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/form/colorDescriptions.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a29f2ce4a9_68752020 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div hint-wrap style="display: none">
  <div class="alert alert-info pp__my-5" data-color="gold">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'People around the world know us for the color gold and research confirms it. Extensive testing determined just the right shade and shape that help increase conversion. Use it on your website to leverage PayPal’s recognition and preference.','mod'=>'paypal'),$_smarty_tpl ) );?>

  </div>

  <div class="alert alert-info pp__my-5" data-color="blue">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If gold does not work for your site, try the PayPal blue button. Research shows that people know it is our brand color, which provides a halo of trust and security to your experience.','mod'=>'paypal'),$_smarty_tpl ) );?>

  </div>


  <div class="alert alert-info pp__my-5" data-color="other">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If gold or blue does not work for your site design or aesthetic, try the silver, white, or black buttons. Because these colors are less capable of drawing people’s attention, we recommend these button colors as a second alternative.','mod'=>'paypal'),$_smarty_tpl ) );?>

  </div>
</div>
<?php }
}
