<?php
/* Smarty version 3.1.43, created on 2022-12-09 19:38:09
  from '/var/www/html/modules/amazonpay/views/templates/admin/connect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_639380917732c0_60281588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8070e00cdc698368fc8986d00f226b94a3f3fcd3' => 
    array (
      0 => '/var/www/html/modules/amazonpay/views/templates/admin/connect.tpl',
      1 => 1670610174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639380917732c0_60281588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'imgdir_assign', 'imgdir', null);?>https://m.media-amazon.com/images/G/01/EPSDocumentation/AmazonPay/Prestashop/img/<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'videodir_assign', 'videodir', null);?>https://m.media-amazon.com/images/G/01/EPSDocumentation/AmazonPay/Prestashop/video/<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'langdir_assign', 'langdir', null);
if (!in_array($_smarty_tpl->tpl_vars['language_code']->value,array('de','es','fr','it','uk','us'))) {?>uk<?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language_code']->value,'htmlall','UTF-8' ));
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div class="panel">


    <div class="row">
        <div class="col-xs-12 col-md-6">
            <p>
                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8' ));?>
amazon-payments.jpg" alt="amazon payments" class="img-responsive" />
            </p>
            <p>
                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amazon Pay: Amazon’s Payment and Checkout method for your website','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</strong>
            </p>
            <p>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Amazon Pay to your website and allow Amazon customers to sign in with their Amazon credentials and easily pay with the address and payment information stored in their Amazon account.','mod'=>'amazonpay'),$_smarty_tpl ) );?>

                <br />
            </p>
            <p>
                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amazon Pay can help you:','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</strong><br />
            <ul>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Build customer loyalty','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attract new customers','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Improve your conversion rate','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reduce fraud','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</li>
            </ul>
            </p>
            <p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Simply follow these 4 steps:','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</strong> &nbsp;
                <a style="color:#FF9900;" id="showvideoprestashopyoutube" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Watch our video','mod'=>'amazonpay'),$_smarty_tpl ) );?>
"><i class="fa fa-file-video-o" aria-hidden="true"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Watch our video','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</a> <br />
            <ol>
                <li>
                    <a id="simplepathRegTrigger" href='#' onclick="jQuery('#amazonRegForm').submit();"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]Registration:[/1] Sign up for an Amazon Payments merchant account.','tags'=>array('<span>'),'mod'=>'amazonpay'),$_smarty_tpl ) );?>
</a>
                </li>
                <li>
                    <a id="showstepsetup" href="#" onclick="jQuery('.nav-tabs a[href=#amazonpay_authentication]').tab('show');"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]Connection:[/1] Connect your Amazon Payments account with PrestaShop.','tags'=>array('<span>'),'mod'=>'amazonpay'),$_smarty_tpl ) );?>
</a>
                </li>
                <li>
                    <a id="showstepconfiguration" href="#" onclick="jQuery('.nav-tabs a[href=#amazonpay_configuration]').tab('show');"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]Configuration:[/1] Configure and activate the plugin.','tags'=>array('<span>'),'mod'=>'amazonpay'),$_smarty_tpl ) );?>
</a>
                </li>
                <li>
                    <a id="showstepconfiguration" href="#" onclick="jQuery('.nav-tabs a[href=#amazonpay_promotion]').tab('show');"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]Promotion:[/1] Promote Amazon Pay on your website.','tags'=>array('<span>'),'mod'=>'amazonpay'),$_smarty_tpl ) );?>
</a>
                </li>
            </ol>
            <p>
                <br />
                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Important note, before you sign up:','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</strong><br />
                <i class="material-icons mi-announcement" aria-hidden="true" style="vertical-align: text-bottom">announcement</i>&nbsp;
                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Before you start the registration, make sure you sign out of all Amazon accounts you might have.','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</span>
                <br />
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use an email address that you have never used for any Amazon account.','mod'=>'amazonpay'),$_smarty_tpl ) );?>

                <br />
                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you have an Amazon Seller account (Selling on Amazon), sign out and use a different address to register your Amazon Payments account.','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</span>
            </p>
        </div>
        <div class="col-xs-12 col-md-6">
            <div id="video">
                <table>
                    <tr>
                        <td>
                            <div class="responsive-video" style="display: none;">
                                <iframe id="videoprestashopyoutube" style="vertical-align:top;margin-left:30px;float:left;" width="640" height="360" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['youtube_video_embed_link']->value,'html','UTF-8' ));?>
" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                            </div>
                            <div id="carrouselAmazonPay" style="vertical-align:top;margin-left:30px;float:left;min-width:205px;max-height:365px;" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carrouselAmazonPay" data-slide-to="0" class="active"></li>
                                    <li data-target="#carrouselAmazonPay" data-slide-to="1"></li>
                                    <li data-target="#carrouselAmazonPay" data-slide-to="2"></li>
                                    <li data-target="#carrouselAmazonPay" data-slide-to="3"></li>
                                    <li data-target="#carrouselAmazonPay" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-fluid" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8' ));?>
/carousel/01.jpg" style="min-width:205px;max-height:365px;">
                                    </div>
                                    <div class="item">
                                        <img class="img-fluid" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8' ));?>
/carousel/02.jpg" style="min-width:205px;max-height:365px;">
                                    </div>
                                    <div class="item">
                                        <img class="img-fluid" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8' ));?>
/carousel/03.jpg" style="min-width:205px;max-height:365px;">
                                    </div>
                                    <div class="item">
                                        <img class="img-fluid" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8' ));?>
/carousel/04.jpg" style="min-width:205px;max-height:365px;">
                                    </div>
                                    <div class="item">
                                        <div class="responsive-video"><iframe id="videoamazonyoutube" width="480" height="288" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['videoamazonyoutube']->value,'htmlall','UTF-8' ));?>
" frameborder="0" gesture="media" allowfullscreen></iframe></div>
                                    </div>
                                </div>
                                <a class="carousel-control left" href="#carrouselAmazonPay" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="carousel-control right" href="#carrouselAmazonPay" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="margin-left:30px;margin-top:10px;">
                                <span style="font-size:medium">
                                    <img onclick="jQuery('#amazonRegForm').submit();" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imgdir']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['langdir']->value,'htmlall','UTF-8' ));?>
/subscribe.jpg" style="cursor: pointer; height:30px;" />
                                </span>&nbsp; <span style="font-weight: bold; text-transform: uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or','mod'=>'amazonpay'),$_smarty_tpl ) );?>
</span> &nbsp;
                                <a id="showstepconnect" style="color:#FF9900;cursor: pointer;" aria-hidden="true" onclick="jQuery('#amazontabs a[href=#amazonpay_authentication]').tab('show');">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here if you already have an Amazon Pay account','mod'=>'amazonpay'),$_smarty_tpl ) );?>

                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['simplepath_form_url']->value;?>
" target="_blank" id="amazonRegForm">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['simple_path']->value, 'sp', false, 'spKey');
$_smarty_tpl->tpl_vars['sp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['spKey']->value => $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->do_else = false;
?>
            <?php if (is_array($_smarty_tpl->tpl_vars['sp']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sp']->value, 'subSp');
$_smarty_tpl->tpl_vars['subSp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subSp']->value) {
$_smarty_tpl->tpl_vars['subSp']->do_else = false;
?>
                    <input type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subSp']->value,'htmlall','UTF-8' ));?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['spKey']->value,'htmlall','UTF-8' ));?>
[]" />
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <input type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sp']->value,'htmlall','UTF-8' ));?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['spKey']->value,'htmlall','UTF-8' ));?>
" />
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </form>
</div>
<?php }
}
