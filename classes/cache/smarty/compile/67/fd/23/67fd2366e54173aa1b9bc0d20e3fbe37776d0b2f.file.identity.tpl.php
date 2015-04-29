<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:50:07
         compiled from "C:\re\wamp\www\prestashop\themes\default\mobile\identity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24743547e6c4f035280-28649402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67fd2366e54173aa1b9bc0d20e3fbe37776d0b2f' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\themes\\default\\mobile\\identity.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24743547e6c4f035280-28649402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'confirmation' => 0,
    'pwd_changed' => 0,
    'email' => 0,
    'genders' => 0,
    'gender' => 0,
    'days' => 0,
    'v' => 0,
    'sl_day' => 0,
    'months' => 0,
    'k' => 0,
    'sl_month' => 0,
    'years' => 0,
    'sl_year' => 0,
    'newsletter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c4f4388f6_34128277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c4f4388f6_34128277')) {function content_547e6c4f4388f6_34128277($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_title', null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Your personal information'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ('./page-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div data-role="content" id="content">
<a data-role="button" data-icon="arrow-l" data-theme="a" data-mini="true" data-inline="true" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a>

<?php echo $_smarty_tpl->getSubTemplate ("./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value){?>
	<p class="success">
		<?php echo smartyTranslate(array('s'=>'Your personal information has been successfully updated.'),$_smarty_tpl);?>

		<?php if (isset($_smarty_tpl->tpl_vars['pwd_changed']->value)){?><br /><?php echo smartyTranslate(array('s'=>'Your password has been sent to your email:'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'htmlall', 'UTF-8');?>
<?php }?>
	</p>
<?php }else{ ?>
	<h3><?php echo smartyTranslate(array('s'=>'Please be sure to update your personal information if it has changed.'),$_smarty_tpl);?>
</h3>
	<p class="required bold"><sup>*</sup><?php echo smartyTranslate(array('s'=>'Required field'),$_smarty_tpl);?>
</p>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std">
		<label><?php echo smartyTranslate(array('s'=>'Title'),$_smarty_tpl);?>
</label>
		<fieldset data-role="controlgroup">
		<?php  $_smarty_tpl->tpl_vars['gender'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gender']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['genders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gender']->key => $_smarty_tpl->tpl_vars['gender']->value){
$_smarty_tpl->tpl_vars['gender']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['gender']->key;
?>
			<input type="radio" name="id_gender" id="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" <?php if (isset($_POST['id_gender'])&&$_POST['id_gender']==$_smarty_tpl->tpl_vars['gender']->value->id){?>checked="checked"<?php }?> />
			<label for="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" class="top"><?php echo $_smarty_tpl->tpl_vars['gender']->value->name;?>
</label>
		<?php } ?>
		</fieldset>
		<fieldset class="required text">
			<label for="firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label>
			<input type="text" id="firstname" name="firstname" value="<?php echo $_POST['firstname'];?>
" />
		</fieldset>
		<fieldset class="required text">
			<label for="lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
			<input type="text" name="lastname" id="lastname" value="<?php echo $_POST['lastname'];?>
" />
		</fieldset>
		<fieldset class="required text">
			<label for="email"><?php echo smartyTranslate(array('s'=>'Email'),$_smarty_tpl);?>
 <sup>*</sup></label>
			<input type="text" name="email" id="email" value="<?php echo $_POST['email'];?>
" />
		</fieldset>
		<fieldset class="required text">
			<label for="old_passwd"><?php echo smartyTranslate(array('s'=>'Current Password'),$_smarty_tpl);?>
 <sup>*</sup></label>
			<input type="password" name="old_passwd" id="old_passwd" />
		</fieldset>
		<fieldset class="password">
			<label for="passwd"><?php echo smartyTranslate(array('s'=>'New Password'),$_smarty_tpl);?>
</label>
			<input type="password" name="passwd" id="passwd" />
		</fieldset>
		<fieldset class="password">
			<label for="confirmation"><?php echo smartyTranslate(array('s'=>'Confirmation'),$_smarty_tpl);?>
</label>
			<input type="password" name="confirmation" id="confirmation" />
		</fieldset>
		<label><?php echo smartyTranslate(array('s'=>'Date of Birth'),$_smarty_tpl);?>
</label>
		<fieldset data-type="horizontal" data-role="controlgroup">
			<select name="days" id="days">
				<option value="">-</option>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['v']->value, 'htmlall', 'UTF-8');?>
" <?php if (($_smarty_tpl->tpl_vars['sl_day']->value==$_smarty_tpl->tpl_vars['v']->value)){?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['v']->value, 'htmlall', 'UTF-8');?>
&nbsp;&nbsp;</option>
				<?php } ?>
			</select>
			<select id="months" name="months">
				<option value="">-</option>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value, 'htmlall', 'UTF-8');?>
" <?php if (($_smarty_tpl->tpl_vars['sl_month']->value==$_smarty_tpl->tpl_vars['k']->value)){?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
&nbsp;</option>
				<?php } ?>
			</select>
			<select id="years" name="years">
				<option value="">-</option>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['v']->value, 'htmlall', 'UTF-8');?>
" <?php if (($_smarty_tpl->tpl_vars['sl_year']->value==$_smarty_tpl->tpl_vars['v']->value)){?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['v']->value, 'htmlall', 'UTF-8');?>
&nbsp;&nbsp;</option>
				<?php } ?>
			</select>
		</fieldset>
		<?php if ($_smarty_tpl->tpl_vars['newsletter']->value){?>
		<fieldset data-role="controlgroup">
			<input type="checkbox" id="newsletter" name="newsletter" value="1" <?php if (isset($_POST['newsletter'])&&$_POST['newsletter']==1){?> checked="checked"<?php }?> autocomplete="off"/>
			<label for="newsletter"><?php echo smartyTranslate(array('s'=>'Sign up for our newsletter!'),$_smarty_tpl);?>
</label>
			<input type="checkbox" name="optin" id="optin" value="1" <?php if (isset($_POST['optin'])&&$_POST['optin']==1){?> checked="checked"<?php }?> autocomplete="off"/>
			<label for="optin"><?php echo smartyTranslate(array('s'=>'Receive special offers from our partners!'),$_smarty_tpl);?>
</label>
		</fieldset>
		<?php }?>
		<input type="submit" data-theme="a" class="button" name="submitIdentity" value="<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
" />
		<p id="security_informations">
			<?php echo smartyTranslate(array('s'=>'[Insert customer data privacy clause here, if applicable]'),$_smarty_tpl);?>

		</p>
	</form>
<?php }?>
</div><!-- /content -->
<?php }} ?>