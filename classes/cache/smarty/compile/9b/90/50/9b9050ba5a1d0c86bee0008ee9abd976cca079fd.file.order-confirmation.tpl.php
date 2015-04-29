<?php /* Smarty version Smarty-3.1.14, created on 2015-02-25 23:32:34
         compiled from "C:\re\wamp\www\prestashop\modules\paypal\views\templates\front\order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1423354e8839a1f6721-28402671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b9050ba5a1d0c86bee0008ee9abd976cca079fd' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\modules\\paypal\\views\\templates\\front\\order-confirmation.tpl',
      1 => 1424901161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1423354e8839a1f6721-28402671',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54e8839a584b80_66241704',
  'variables' => 
  array (
    'use_mobile' => 0,
    'HOOK_ORDER_CONFIRMATION' => 0,
    'HOOK_PAYMENT_RETURN' => 0,
    'order' => 0,
    'price' => 0,
    'reference_order' => 0,
    'is_guest' => 0,
    'link' => 0,
    'order_reference' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e8839a584b80_66241704')) {function content_54e8839a584b80_66241704($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php if (@constant('_PS_VERSION_')<1.5&&isset($_smarty_tpl->tpl_vars['use_mobile']->value)&&$_smarty_tpl->tpl_vars['use_mobile']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./modules/paypal/views/templates/front/order-confirmation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Order confirmation','mod'=>'paypal'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if (@constant('_PS_VERSION_')<1.6){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
	<h1><?php echo smartyTranslate(array('s'=>'Order confirmation','mod'=>'paypal'),$_smarty_tpl);?>
</h1>

	<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>


	<br />

	<?php if ($_smarty_tpl->tpl_vars['order']->value){?>
	<p><?php echo smartyTranslate(array('s'=>'Total of the transaction (taxes incl.) :','mod'=>'paypal'),$_smarty_tpl);?>
 <span class="bold"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['price']->value, 'htmlall', 'UTF-8');?>
</span></p>
	<p><?php echo smartyTranslate(array('s'=>'Your order ID is :','mod'=>'paypal'),$_smarty_tpl);?>
 
		<span class="bold">
		<?php if (@constant('_PS_VERSION_')>=1.5){?>
			<?php if (isset($_smarty_tpl->tpl_vars['reference_order']->value)){?>
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['reference_order']->value, 'htmlall', 'UTF-8');?>

			<?php }else{ ?>
				<?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>

			<?php }?>
		<?php }else{ ?>
			<?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>

		<?php }?>
		</span>
	</p>
	<p><?php echo smartyTranslate(array('s'=>'Your PayPal transaction ID is :','mod'=>'paypal'),$_smarty_tpl);?>
 <span class="bold"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['order']->value['id_transaction'], 'htmlall', 'UTF-8');?>
</span></p>
	<?php }?>
	<br />
	
	<?php if ($_smarty_tpl->tpl_vars['is_guest']->value){?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('guest-tracking.php',true);?>
?id_order=<?php echo $_smarty_tpl->tpl_vars['order_reference']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Follow my order','mod'=>'paypal'),$_smarty_tpl);?>
" data-ajax="false">
			<?php if (@constant('_PS_VERSION_')<1.6){?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/order.gif" alt="<?php echo smartyTranslate(array('s'=>'Follow my order','mod'=>'paypal'),$_smarty_tpl);?>
" class="icon" />
			<?php }else{ ?>
			<i class="icon-chevron-left"></i>
			<?php }?>
		</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('guest-tracking.php',true);?>
?id_order=<?php echo $_smarty_tpl->tpl_vars['order_reference']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Follow my order','mod'=>'paypal'),$_smarty_tpl);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Follow my order','mod'=>'paypal'),$_smarty_tpl);?>
</a>
	<?php }else{ ?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('history.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Back to orders','mod'=>'paypal'),$_smarty_tpl);?>
" data-ajax="false"><?php if (@constant('_PS_VERSION_')<1.6){?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/order.gif" alt="<?php echo smartyTranslate(array('s'=>'Follow my order','mod'=>'paypal'),$_smarty_tpl);?>
" class="icon" />
			<?php }else{ ?>
			<i class="icon-chevron-left"></i>
			<?php }?></a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('history.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Back to orders','mod'=>'paypal'),$_smarty_tpl);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Back to orders','mod'=>'paypal'),$_smarty_tpl);?>
</a>
	<?php }?>
<?php }?>
<?php }} ?>