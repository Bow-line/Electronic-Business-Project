<?php
/* Smarty version 3.1.43, created on 2022-12-10 16:13:39
  from '/var/www/html/modules/paypal/views/templates/admin/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6394a2235c0f00_71008700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '723662df4ab2ec2d88aae9ba952ab86fa37baf47' => 
    array (
      0 => '/var/www/html/modules/paypal/views/templates/admin/admin.tpl',
      1 => 1670682608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6394a2235c0f00_71008700 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['isModeSandbox']->value)) && $_smarty_tpl->tpl_vars['isModeSandbox']->value) {?>
  <style>
    .page-head {
      background-color: #585757 !important;
    }

    .bootstrap .page-head .toolbarBox .btn-toolbar .toolbar_btn i {
      color: #fff !important;
    }

    .bootstrap .page-head ul.breadcrumb {
      color: #fff !important;
    }

    .bootstrap .page-head ul.page-breadcrumb li:before {
      color: #fff !important;
    }

    .bootstrap .page-head ul.page-breadcrumb li a {
      color: #fff !important;
    }

    .page-head .wrapper h1 {
      color: #fff !important;
    }

    .bootstrap .page-head .toolbarBox .btn-toolbar .toolbar_btn {
      color: #fff !important;
    }

    <?php if (version_compare($_smarty_tpl->tpl_vars['psVersion']->value,'1.7.4','<')) {?>

    .page-head .page-title {
      color: #fff !important;
    }

    .page-head .page-head-tabs a{
      color: #fff !important;
    }

    .page-head .page-head-tabs a.current{
      border-bottom: 3px solid #fff !important;
    }

    <?php }?>


  </style>
<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14803130426394a2235be660_63467954', 'content');
?>


<?php }
/* {block 'content'} */
class Block_14803130426394a2235be660_63467954 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14803130426394a2235be660_63467954',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php }
}
}
/* {/block 'content'} */
}
