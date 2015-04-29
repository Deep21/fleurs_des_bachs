<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:50:03
         compiled from "C:\re\wamp\www\prestashop\themes\default\mobile\authentication-choice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7095547e6c4bd2cc46-06329651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '291ca9d75afc11d6a5425684aa59b0b4c44c18af' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\themes\\default\\mobile\\authentication-choice.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7095547e6c4bd2cc46-06329651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'back' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c4bef1eb2_20725623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c4bef1eb2_20725623')) {function content_547e6c4bef1eb2_20725623($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?><div data-role="content" id="content">
	
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="create-account_form" class="std login_form" data-ajax="false">
		<h2><?php echo smartyTranslate(array('s'=>'Create an account'),$_smarty_tpl);?>
</h2>
		<div class="form_content clearfix">
			<p class="title_block"><?php echo smartyTranslate(array('s'=>'Enter your email address to create an account'),$_smarty_tpl);?>
.</p>
			<fieldset>
				<span><input type="email" id="email_create" placeholder="<?php echo smartyTranslate(array('s'=>'Email address'),$_smarty_tpl);?>
" name="email_create" value="<?php if (isset($_POST['email_create'])){?><?php echo stripslashes(smarty_modifier_escape($_POST['email_create'], 'htmlall', 'UTF-8'));?>
<?php }?>" class="account_input" /></span>
			</fieldset>
			<?php if (isset($_smarty_tpl->tpl_vars['back']->value)){?><input type="hidden" class="hidden" name="back" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['back']->value, 'htmlall', 'UTF-8');?>
" /><?php }?>
			<button type="submit" id="SubmitCreate" name="SubmitCreate" class="ui-btn-hidden submit_button" aria-disabled="false" data-theme="a"><?php echo smartyTranslate(array('s'=>'Create an account'),$_smarty_tpl);?>
</button>
			<input type="hidden" class="hidden" name="SubmitCreate" value="<?php echo smartyTranslate(array('s'=>'Create an account'),$_smarty_tpl);?>
" />
		</div>
	</form>

	<hr/>

	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="login_form">
		<h2><?php echo smartyTranslate(array('s'=>'Already registered?'),$_smarty_tpl);?>
</h2>
		<fieldset>
			<input type="email" id="email" name="email" placeholder="<?php echo smartyTranslate(array('s'=>'Email address'),$_smarty_tpl);?>
" value="<?php if (isset($_POST['email'])){?><?php echo stripslashes(smarty_modifier_escape($_POST['email'], 'htmlall', 'UTF-8'));?>
<?php }?>" class="account_input" />
		</fieldset>
		
		<fieldset>
			<input type="password" id="passwd" name="passwd" placeholder="<?php echo smartyTranslate(array('s'=>'Password'),$_smarty_tpl);?>
" value="<?php if (isset($_POST['passwd'])){?><?php echo stripslashes(smarty_modifier_escape($_POST['passwd'], 'htmlall', 'UTF-8'));?>
<?php }?>" class="account_input" />
			<p class="forget_pwd"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('password'), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Forgot your password?'),$_smarty_tpl);?>
</a></p>
		</fieldset>
		<button type="submit" class="ui-btn-hidden submit_button" id="SubmitLogin" name="SubmitLogin" aria-disabled="false" data-theme="a"><?php echo smartyTranslate(array('s'=>'Login'),$_smarty_tpl);?>
</button>
	</form> 
</div><!-- /content -->



<?php }} ?>