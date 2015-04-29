<?php /* Smarty version Smarty-3.1.14, created on 2015-02-25 23:30:41
         compiled from "C:\re\wamp\www\prestashop\modules\paypal\views\templates\front\order-summary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1880454e8838d03e590-96746994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c6d6df2767cab59630eaefdaa501528b43a1dd9' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\modules\\paypal\\views\\templates\\front\\order-summary.tpl',
      1 => 1424901161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1880454e8838d03e590-96746994',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54e8838d28e392_81181780',
  'variables' => 
  array (
    'use_mobile' => 0,
    'navigationPipe' => 0,
    'form_action' => 0,
    'logos' => 0,
    'total' => 0,
    'use_taxes' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e8838d28e392_81181780')) {function content_54e8838d28e392_81181780($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<?php if (@constant('_PS_VERSION_')<1.5&&isset($_smarty_tpl->tpl_vars['use_mobile']->value)&&$_smarty_tpl->tpl_vars['use_mobile']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./modules/paypal/views/templates/front/order-summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="order.php"><?php echo smartyTranslate(array('s'=>'Your shopping cart','mod'=>'paypal'),$_smarty_tpl);?>
</a><span class="navigation-pipe"> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['navigationPipe']->value, 'htmlall', 'UTF-8');?>
 </span> <?php echo smartyTranslate(array('s'=>'PayPal','mod'=>'paypal'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if (@constant('_PS_VERSION_')<1.6){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
	<h1><?php echo smartyTranslate(array('s'=>'Order summary','mod'=>'paypal'),$_smarty_tpl);?>
</h1>

	<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<h3><?php echo smartyTranslate(array('s'=>'PayPal payment','mod'=>'paypal'),$_smarty_tpl);?>
</h3>
	<form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['form_action']->value, 'htmlall', 'UTF-8');?>
" method="post" data-ajax="false">
		<p>
			<img src="<?php echo $_smarty_tpl->tpl_vars['logos']->value['LocalPayPalLogoMedium'];?>
" alt="<?php echo smartyTranslate(array('s'=>'PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="margin-bottom: 5px" />
			<br /><?php echo smartyTranslate(array('s'=>'You have chosen to pay with PayPal.','mod'=>'paypal'),$_smarty_tpl);?>

			<br/><br />
		<?php echo smartyTranslate(array('s'=>'Here is a short summary of your order:','mod'=>'paypal'),$_smarty_tpl);?>

		</p>
		<p style="margin-top:20px;">
			- <?php echo smartyTranslate(array('s'=>'The total amount of your order is','mod'=>'paypal'),$_smarty_tpl);?>

			<span id="amount" class="price"><strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['total']->value, 'htmlall', 'UTF-8');?>
</strong></span> <?php if ($_smarty_tpl->tpl_vars['use_taxes']->value==1){?><?php echo smartyTranslate(array('s'=>'(tax incl.)','mod'=>'paypal'),$_smarty_tpl);?>
<?php }?>
		</p>
		<p>
			- <?php echo smartyTranslate(array('s'=>'We accept the following currency to be sent by PayPal:','mod'=>'paypal'),$_smarty_tpl);?>
&nbsp;<b><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['currency']->value->name, 'htmlall', 'UTF-8');?>
</b>
		</p>
		<p>
			<b><?php echo smartyTranslate(array('s'=>'Please confirm your order by clicking \'I confirm my order\'','mod'=>'paypal'),$_smarty_tpl);?>
.</b>
		</p>
		<p class="cart_navigation">
			<input type="submit" name="confirmation" value="<?php echo smartyTranslate(array('s'=>'I confirm my order','mod'=>'paypal'),$_smarty_tpl);?>
" class="exclusive_large" />
		</p>
	</form>
<?php }?>
<?php }} ?>