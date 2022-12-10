<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:15:43
  from '/var/www/html/modules/paypal/views/templates/admin/_partials/form/fields/select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a29f2a4434_50429059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63b9d312fb4d494b8197fff57bad891d06458e0c' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/_partials/form/fields/select.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a29f2a4434_50429059 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div field-row class="<?php if ((isset($_smarty_tpl->tpl_vars['css']->value)) && $_smarty_tpl->tpl_vars['css']->value) {
echo $_smarty_tpl->tpl_vars['css']->value;
}?>">

    <?php if ((isset($_smarty_tpl->tpl_vars['label']->value)) && $_smarty_tpl->tpl_vars['label']->value) {?>
        <div label>
          <div class="pp__my-2"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['label']->value,'htmlall','UTF-8' ));?>
</div>
        </div>
    <?php }?>

  <div field>
    <div select-wrap class="pp__flex">
      <select
              name="<?php if ((isset($_smarty_tpl->tpl_vars['name']->value))) {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>"
              <?php if ((isset($_smarty_tpl->tpl_vars['configType']->value))) {?>data-type="<?php echo $_smarty_tpl->tpl_vars['configType']->value;?>
"<?php }?>>

          <?php if ((isset($_smarty_tpl->tpl_vars['options']->value)) && false === empty($_smarty_tpl->tpl_vars['options']->value)) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                  <?php echo $_smarty_tpl->tpl_vars['option']->value->render();?>

              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>

      </select>

      <?php if ((isset($_smarty_tpl->tpl_vars['hintSwitch']->value)) && $_smarty_tpl->tpl_vars['hintSwitch']->value) {?>
          <div>
            <span class="btn btn-default pp__ml-2" onclick="toggleHint(event)">?</span>
          </div>
      <?php }?>
    </div>

    <?php if ((isset($_smarty_tpl->tpl_vars['afterSelectContent']->value))) {?>
        <div after-select-content>
          <?php echo $_smarty_tpl->tpl_vars['afterSelectContent']->value;?>

        </div>
    <?php }?>
  </div>
</div>

<?php echo '<script'; ?>
>
  window.toggleHint = function (e) {
      try {
          var btn = e.target;
          var hint = btn.closest('[field]').querySelector('[hint-wrap]');
          hint.style.display = hint.style.display == 'none' ? 'block' : 'none';
          btn.textContent = btn.textContent == '?' ? 'X' : '?';
      } catch (exception) {
          console.error(exception);
      }
  }
<?php echo '</script'; ?>
>


<?php }
}
