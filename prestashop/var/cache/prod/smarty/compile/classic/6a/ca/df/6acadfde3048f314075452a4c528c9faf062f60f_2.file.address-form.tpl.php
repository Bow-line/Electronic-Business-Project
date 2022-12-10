<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:18:50
  from '/var/www/html/themes/classic/templates/customer/_partials/address-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a35a700007_32085724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6acadfde3048f314075452a4c528c9faf062f60f' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/_partials/address-form.tpl',
      1 => 1670682609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_6394a35a700007_32085724 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8541662926394a35a6f8610_71609956', "address_form");
?>

<?php }
/* {block "address_form_url"} */
class Block_15989955046394a35a6f9951_80255636 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form
      method="POST"
      action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['id_address']->value)),$_smarty_tpl ) );?>
"
      data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
"
      data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl ) );?>
"
    >
    <?php
}
}
/* {/block "address_form_url"} */
/* {block 'form_field'} */
class Block_6725433576394a35a6fcc42_94903354 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'form_field'} */
/* {block 'form_fields'} */
class Block_983918066394a35a6fc010_98631815 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6725433576394a35a6fcc42_94903354', 'form_field', $this->tplIndex);
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
/* {/block 'form_fields'} */
/* {block "address_form_fields"} */
class Block_10653845246394a35a6fbb94_43900237 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section class="form-fields">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_983918066394a35a6fc010_98631815', 'form_fields', $this->tplIndex);
?>

        </section>
      <?php
}
}
/* {/block "address_form_fields"} */
/* {block 'form_buttons'} */
class Block_5808406246394a35a6fed10_36654320 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button class="btn btn-primary form-control-submit float-xs-right" type="submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block "address_form_footer"} */
class Block_3379372016394a35a6fe635_36156622 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer clearfix">
        <input type="hidden" name="submitAddress" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5808406246394a35a6fed10_36654320', 'form_buttons', $this->tplIndex);
?>

      </footer>
      <?php
}
}
/* {/block "address_form_footer"} */
/* {block "address_form"} */
class Block_8541662926394a35a6f8610_71609956 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'address_form' => 
  array (
    0 => 'Block_8541662926394a35a6f8610_71609956',
  ),
  'address_form_url' => 
  array (
    0 => 'Block_15989955046394a35a6f9951_80255636',
  ),
  'address_form_fields' => 
  array (
    0 => 'Block_10653845246394a35a6fbb94_43900237',
  ),
  'form_fields' => 
  array (
    0 => 'Block_983918066394a35a6fc010_98631815',
  ),
  'form_field' => 
  array (
    0 => 'Block_6725433576394a35a6fcc42_94903354',
  ),
  'address_form_footer' => 
  array (
    0 => 'Block_3379372016394a35a6fe635_36156622',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_5808406246394a35a6fed10_36654320',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="js-address-form">
    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15989955046394a35a6f9951_80255636', "address_form_url", $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10653845246394a35a6fbb94_43900237', "address_form_fields", $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3379372016394a35a6fe635_36156622', "address_form_footer", $this->tplIndex);
?>


    </form>
  </div>
<?php
}
}
/* {/block "address_form"} */
}
