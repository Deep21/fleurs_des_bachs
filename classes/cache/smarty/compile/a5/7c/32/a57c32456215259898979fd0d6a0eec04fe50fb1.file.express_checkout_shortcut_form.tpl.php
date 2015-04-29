<?php /* Smarty version Smarty-3.1.14, created on 2015-03-11 12:23:10
         compiled from "C:\re\wamp\www\prestashop\modules\paypal\views\templates\hook\express_checkout_shortcut_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:217554bbc709512074-39939491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a57c32456215259898979fd0d6a0eec04fe50fb1' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\modules\\paypal\\views\\templates\\hook\\express_checkout_shortcut_form.tpl',
      1 => 1425557288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217554bbc709512074-39939491',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54bbc7095c5b96_14025859',
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'PayPal_payment_type' => 0,
    'PayPal_current_page' => 0,
    'PayPal_tracking_code' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bbc7095c5b96_14025859')) {function content_54bbc7095c5b96_14025859($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<form id="paypal_payment_form" action="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/express_checkout/payment.php" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" method="post" data-ajax="false">
	<?php if (isset($_GET['id_product'])){?><input type="hidden" name="id_product" value="<?php echo intval($_GET['id_product']);?>
" /><?php }?>
	<!-- Change dynamicaly when the form is submitted -->
	<input type="hidden" name="quantity" value="1" />
	<input type="hidden" name="id_p_attr" value="" />
	<input type="hidden" name="express_checkout" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['PayPal_payment_type']->value, 'htmlall', 'UTF-8');?>
"/>
	<input type="hidden" name="current_shop_url" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['PayPal_current_page']->value, 'htmlall', 'UTF-8');?>
" />
	<input type="hidden" name="bn" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['PayPal_tracking_code']->value, 'htmlall', 'UTF-8');?>
" />
</form>

<?php }} ?>