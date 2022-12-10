<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:43
  from '/var/www/html/modules/paypal/views/templates/_partials/javascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a29f2fa672_73349334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72fe8cf4443222244ce9c55be2b26fd8e84f9424' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/_partials/javascript.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a29f2fa672_73349334 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  <?php if ((isset($_smarty_tpl->tpl_vars['JSvars']->value))) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JSvars']->value, 'varValue', false, 'varName');
$_smarty_tpl->tpl_vars['varValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['varName']->value => $_smarty_tpl->tpl_vars['varValue']->value) {
$_smarty_tpl->tpl_vars['varValue']->do_else = false;
?>
    var <?php echo $_smarty_tpl->tpl_vars['varName']->value;?>
 = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['varValue']->value ));?>
;
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }
echo '</script'; ?>
>

<?php if ((isset($_smarty_tpl->tpl_vars['JSscripts']->value)) && is_array($_smarty_tpl->tpl_vars['JSscripts']->value) && false === empty($_smarty_tpl->tpl_vars['JSscripts']->value)) {?>
  <?php echo '<script'; ?>
>
      function init() {
          if (document.readyState == 'complete') {
              addScripts();
          } else {
              document.addEventListener('readystatechange', function () {
                  console.log(document.readyState);
                  if (document.readyState == 'complete') {
                      addScripts();
                  }
              })
          }

          function addScripts() {
              var scripts = Array();
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JSscripts']->value, 'JSscriptAttributes', false, 'keyScript');
$_smarty_tpl->tpl_vars['JSscriptAttributes']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyScript']->value => $_smarty_tpl->tpl_vars['JSscriptAttributes']->value) {
$_smarty_tpl->tpl_vars['JSscriptAttributes']->do_else = false;
?>
              var script = document.querySelector('script[data-key="<?php echo $_smarty_tpl->tpl_vars['keyScript']->value;?>
"]');

              if (null == script) {
                  var newScript = document.createElement('script');
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JSscriptAttributes']->value, 'attrVal', false, 'attrName');
$_smarty_tpl->tpl_vars['attrVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attrName']->value => $_smarty_tpl->tpl_vars['attrVal']->value) {
$_smarty_tpl->tpl_vars['attrVal']->do_else = false;
?>
                  newScript.setAttribute('<?php echo $_smarty_tpl->tpl_vars['attrName']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['attrVal']->value;?>
');
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                  if (false === ('<?php echo $_smarty_tpl->tpl_vars['keyScript']->value;?>
'.search('jq-lib') === 0 && typeof jQuery === 'function')) {
                      newScript.setAttribute('data-key', '<?php echo $_smarty_tpl->tpl_vars['keyScript']->value;?>
');
                      scripts.push(newScript);
                  }
              }
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

              scripts.forEach(function (scriptElement) {
                  document.body.appendChild(scriptElement);
              })
          };
      };
      init();

  <?php echo '</script'; ?>
>

<?php }?>

<?php }
}
