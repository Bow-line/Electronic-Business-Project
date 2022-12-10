<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:18:50
  from '/var/www/html/themes/classic/templates/checkout/_partials/cart-summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a35a7519a6_61045860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd172ace6b30573009cced4e086bcdd20578aa799' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/cart-summary.tpl',
      1 => 1670682609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary-top.tpl' => 1,
    'file:checkout/_partials/cart-summary-products.tpl' => 1,
    'file:checkout/_partials/cart-summary-subtotals.tpl' => 1,
    'file:checkout/_partials/cart-summary-totals.tpl' => 1,
    'file:checkout/_partials/cart-voucher.tpl' => 1,
  ),
),false)) {
function content_6394a35a7519a6_61045860 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="js-checkout-summary" class="card js-cart" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?ajax=1&action=refresh">
  <div class="card-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6875211746394a35a74d2d2_63962367', 'hook_checkout_summary_top');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6492431946394a35a74e293_20145324', 'cart_summary_products');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12055029216394a35a74f0a0_72762334', 'cart_summary_subtotals');
?>

  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2218640086394a35a74fe32_66873509', 'cart_summary_totals');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11837110096394a35a750dd8_18410447', 'cart_summary_voucher');
?>


</section>
<?php }
/* {block 'hook_checkout_summary_top'} */
class Block_6875211746394a35a74d2d2_63962367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_checkout_summary_top' => 
  array (
    0 => 'Block_6875211746394a35a74d2d2_63962367',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'hook_checkout_summary_top'} */
/* {block 'cart_summary_products'} */
class Block_6492431946394a35a74e293_20145324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_products' => 
  array (
    0 => 'Block_6492431946394a35a74e293_20145324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'cart_summary_products'} */
/* {block 'cart_summary_subtotals'} */
class Block_12055029216394a35a74f0a0_72762334 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_subtotals' => 
  array (
    0 => 'Block_12055029216394a35a74f0a0_72762334',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-subtotals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'cart_summary_subtotals'} */
/* {block 'cart_summary_totals'} */
class Block_2218640086394a35a74fe32_66873509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_totals' => 
  array (
    0 => 'Block_2218640086394a35a74fe32_66873509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_totals'} */
/* {block 'cart_summary_voucher'} */
class Block_11837110096394a35a750dd8_18410447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_voucher' => 
  array (
    0 => 'Block_11837110096394a35a750dd8_18410447',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-voucher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_voucher'} */
}
