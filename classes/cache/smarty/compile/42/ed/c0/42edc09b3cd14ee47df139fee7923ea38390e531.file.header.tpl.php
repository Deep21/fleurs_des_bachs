<?php /* Smarty version Smarty-3.1.14, created on 2015-03-04 17:11:49
         compiled from "C:\re\wamp\www\prestashop\modules\paypal\views\templates\admin\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295554bbb0429d2d62-62927836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42edc09b3cd14ee47df139fee7923ea38390e531' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\modules\\paypal\\views\\templates\\admin\\header.tpl',
      1 => 1425485506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295554bbb0429d2d62-62927836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54bbb042a57a83_69018847',
  'variables' => 
  array (
    'PayPal_WPS' => 0,
    'PayPal_HSS' => 0,
    'PayPal_ECS' => 0,
    'PayPal_module_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bbb042a57a83_69018847')) {function content_54bbb042a57a83_69018847($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<script type="text/javascript">
	var PayPal_WPS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_WPS']->value);?>
';
	var PayPal_HSS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_HSS']->value);?>
';
	var PayPal_ECS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_ECS']->value);?>
';
</script>

<script type="text/javascript" src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['PayPal_module_dir']->value, 'htmlall', 'UTF-8');?>
/js/back_office.js"></script><?php }} ?>