<?php /* Smarty version Smarty-3.1.14, created on 2014-12-09 22:24:05
         compiled from "C:\re\wamp\www\prestashop\modules\cheque\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2881054876875e951f5-13612998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77460032733f445b8074d4e7e78a50e7a5d3d6d2' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\modules\\cheque\\views\\templates\\hook\\payment.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2881054876875e951f5-13612998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'this_path_cheque' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54876875f35499_96951586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54876875f35499_96951586')) {function content_54876875f35499_96951586($_smarty_tpl) {?>

<p class="payment_module">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['this_path_cheque']->value;?>
cheque.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
" width="86" height="49" />
		<?php echo smartyTranslate(array('s'=>'Pay by check (order processing will take more time).','mod'=>'cheque'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>