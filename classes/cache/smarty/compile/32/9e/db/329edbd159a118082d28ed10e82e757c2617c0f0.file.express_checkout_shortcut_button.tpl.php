<?php /* Smarty version Smarty-3.1.14, created on 2015-03-11 12:23:10
         compiled from "C:\re\wamp\www\prestashop\modules\paypal\views\templates\hook\express_checkout_shortcut_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:553454bbc709475c54-90636793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '329edbd159a118082d28ed10e82e757c2617c0f0' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\modules\\paypal\\views\\templates\\hook\\express_checkout_shortcut_button.tpl',
      1 => 1425557288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '553454bbc709475c54-90636793',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54bbc7094fe7f1_35923933',
  'variables' => 
  array (
    'use_mobile' => 0,
    'base_dir_ssl' => 0,
    'PayPal_lang_code' => 0,
    'include_form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bbc7094fe7f1_35923933')) {function content_54bbc7094fe7f1_35923933($_smarty_tpl) {?>

<div id="container_express_checkout" style="float:right; margin: 10px 40px 0 0">
	<?php if (isset($_smarty_tpl->tpl_vars['use_mobile']->value)&&$_smarty_tpl->tpl_vars['use_mobile']->value){?>
		<div style="margin-left:30px">
			<img id="payment_paypal_express_checkout" src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/img/logos/express_checkout_mobile/CO_<?php echo $_smarty_tpl->tpl_vars['PayPal_lang_code']->value;?>
_orange_295x43.png" alt="" />
		</div>
	<?php }else{ ?>
		<img id="payment_paypal_express_checkout" src="https://www.paypal.com/<?php echo $_smarty_tpl->tpl_vars['PayPal_lang_code']->value;?>
/i/btn/btn_xpressCheckout.gif" alt="" />
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['include_form']->value)&&$_smarty_tpl->tpl_vars['include_form']->value){?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_dir']->value)."./express_checkout_shortcut_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
</div>
<div class="clearfix"></div>
<?php }} ?>