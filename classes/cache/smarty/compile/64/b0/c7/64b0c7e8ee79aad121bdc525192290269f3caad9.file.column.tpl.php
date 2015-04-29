<?php /* Smarty version Smarty-3.1.14, created on 2015-03-11 12:23:10
         compiled from "C:\re\wamp\www\prestashop\modules\paypal\views\templates\hook\column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1429754bbc7093e53a9-11271315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64b0c7e8ee79aad121bdc525192290269f3caad9' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\modules\\paypal\\views\\templates\\hook\\column.tpl',
      1 => 1425557288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1429754bbc7093e53a9-11271315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54bbc7094141b9_72020404',
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bbc7094141b9_72020404')) {function content_54bbc7094141b9_72020404($_smarty_tpl) {?>

<div id="paypal-column-block">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/about.php" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="PayPal" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="max-width: 100%" /></a></p>
</div>
<?php }} ?>