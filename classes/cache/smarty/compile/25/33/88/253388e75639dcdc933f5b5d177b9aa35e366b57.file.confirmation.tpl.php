<?php /* Smarty version Smarty-3.1.14, created on 2015-02-25 23:32:34
         compiled from "C:\re\wamp\www\prestashop\modules\paypal\views\templates\hook\confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227254e8839a08b1f2-25012609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '253388e75639dcdc933f5b5d177b9aa35e366b57' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\modules\\paypal\\views\\templates\\hook\\confirmation.tpl',
      1 => 1424901161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227254e8839a08b1f2-25012609',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54e8839a14a8d2_25306620',
  'variables' => 
  array (
    'shop_name' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e8839a14a8d2_25306620')) {function content_54e8839a14a8d2_25306620($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<p><?php echo smartyTranslate(array('s'=>'Your order on','mod'=>'paypal'),$_smarty_tpl);?>
 <span class="bold"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
</span> <?php echo smartyTranslate(array('s'=>'is complete.','mod'=>'paypal'),$_smarty_tpl);?>

	<br /><br />
	<?php echo smartyTranslate(array('s'=>'You have chosen the PayPal method.','mod'=>'paypal'),$_smarty_tpl);?>

	<br /><br /><span class="bold"><?php echo smartyTranslate(array('s'=>'Your order will be sent very soon.','mod'=>'paypal'),$_smarty_tpl);?>
</span>
	<br /><br /><?php echo smartyTranslate(array('s'=>'For any questions or for further information, please contact our','mod'=>'paypal'),$_smarty_tpl);?>

	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
" data-ajax="false" target="_blank"><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'paypal'),$_smarty_tpl);?>
</a>.
</p>
<?php }} ?>