<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:50:04
         compiled from "C:\re\wamp\www\prestashop\themes\default\mobile\authentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2701547e6c4c9d9612-37828279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '692f28e8b44d58e457bbcef206ea8d819f97901d' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\themes\\default\\mobile\\authentication.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2701547e6c4c9d9612-37828279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'email_create' => 0,
    'countries' => 0,
    'country' => 0,
    'state' => 0,
    'address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c4cc717b8_91725853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c4cc717b8_91725853')) {function content_547e6c4cc717b8_91725853($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_title', null); ob_start(); ?><?php if (!isset($_smarty_tpl->tpl_vars['email_create']->value)){?><?php echo smartyTranslate(array('s'=>'Authentication'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Create an account'),$_smarty_tpl);?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ('./page-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">
// <![CDATA[
idSelectedCountry = <?php if (isset($_POST['id_state'])){?><?php echo intval($_POST['id_state']);?>
<?php }else{ ?>false<?php }?>;
countries = new Array();
countriesNeedIDNumber = new Array();
countriesNeedZipCode = new Array();
<?php if (isset($_smarty_tpl->tpl_vars['countries']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['country']->value['states'])&&$_smarty_tpl->tpl_vars['country']->value['contains_states']){?>
			countries[<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
] = new Array();
			<?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['country']->value['states']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value){
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
				countries[<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
].push({'id' : '<?php echo $_smarty_tpl->tpl_vars['state']->value['id_state'];?>
', 'name' : '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['state']->value['name'], 'htmlall', 'UTF-8');?>
'});
			<?php } ?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['country']->value['need_identification_number']){?>
			countriesNeedIDNumber.push(<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
);
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['country']->value['need_zip_code'])){?>
			countriesNeedZipCode[<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
] = <?php echo $_smarty_tpl->tpl_vars['country']->value['need_zip_code'];?>
;
		<?php }?>
	<?php } ?>
<?php }?>
$(function(){
	$('.id_state option[value=<?php if (isset($_POST['id_state'])){?><?php echo intval($_POST['id_state']);?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['address']->value)){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address']->value->id_state, 'htmlall', 'UTF-8');?>
<?php }?><?php }?>]').attr('selected', 'selected');
});
//]]>

$(document).ready(function() {
	$('#company').blur(function(){
		vat_number();
	});
	vat_number();
	function vat_number()
	{
		if ($('#company').val() != '')
			$('#vat_number').show();
		else
			$('#vat_number').hide();
	}
});

</script>

<?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['postCodeExist'] = new Smarty_variable(false, null, 0);?>
<?php if (!isset($_smarty_tpl->tpl_vars['email_create']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ("./authentication-choice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ("./authentication-create-account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>