<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:56:55
         compiled from "C:\re\wamp\www\prestashop\themes\default\modules\blockcontact\blockcontact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15225547e6de7e34816-06500776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab2b33029cdf48734cb0c64ff41f84a4800f8255' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\themes\\default\\modules\\blockcontact\\blockcontact.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15225547e6de7e34816-06500776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'telnumber' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6de7ed4ac6_88950861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6de7ed4ac6_88950861')) {function content_547e6de7ed4ac6_88950861($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<div id="contact_block" class="block">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</p>
	<div class="block_content clearfix">
			<p><?php echo smartyTranslate(array('s'=>'Our hotline is available 24/7','mod'=>'blockcontact'),$_smarty_tpl);?>
</p>
			<?php if ($_smarty_tpl->tpl_vars['telnumber']->value!=''){?><p class="tel"><span class="label"><?php echo smartyTranslate(array('s'=>'Phone:','mod'=>'blockcontact'),$_smarty_tpl);?>
</span><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['telnumber']->value, 'htmlall', 'UTF-8');?>
</p><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['email']->value!=''){?><a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'htmlall', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Contact our hotline','mod'=>'blockcontact'),$_smarty_tpl);?>
</a><?php }?>
	</div>
</div>
<?php }} ?>