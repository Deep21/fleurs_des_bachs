<?php /* Smarty version Smarty-3.1.14, created on 2015-03-11 00:26:24
         compiled from "C:\re\wamp\www\prestashop\admin21\themes\default\template\controllers\invoices\helpers\form\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1667654ff7da0867d97-15537467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66478d19c17fec618846f30c739a888b2a14829a' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\admin21\\themes\\default\\template\\controllers\\invoices\\helpers\\form\\form.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
    '9347cdfc20ce914f4e144cc3674363a2aad785f6' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\admin21\\themes\\default\\template\\helpers\\form\\form.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
    '12b43f47f77de40e7403914cdc7adf3c872a44c7' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\admin21\\themes\\default\\template\\helpers\\form\\form_group.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
    '14af6f6be9853de9ad7e9ab367ed2269c5bc201a' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\admin21\\themes\\default\\template\\helpers\\form\\form_category.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1667654ff7da0867d97-15537467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_toolbar' => 0,
    'toolbar_btn' => 0,
    'toolbar_scroll' => 0,
    'title' => 0,
    'fields' => 0,
    'table' => 0,
    'name_controller' => 0,
    'current' => 0,
    'submit_action' => 0,
    'token' => 0,
    'style' => 0,
    'form_id' => 0,
    'identifier' => 0,
    'f' => 0,
    'fieldset' => 0,
    'key' => 0,
    'field' => 0,
    'input' => 0,
    'fields_value' => 0,
    'contains_states' => 0,
    'languages' => 0,
    'language' => 0,
    'defaultFormLanguage' => 0,
    'value_text' => 0,
    'optiongroup' => 0,
    'option' => 0,
    'field_value' => 0,
    'value' => 0,
    'id_checkbox' => 0,
    'select' => 0,
    'k' => 0,
    'v' => 0,
    'asso_shop' => 0,
    'p' => 0,
    'hookName' => 0,
    'required_fields' => 0,
    'tinymce' => 0,
    'iso' => 0,
    'ad' => 0,
    'firstCall' => 0,
    'vat_number' => 0,
    'allowEmployeeFormLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54ff7da36139b1_93163905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ff7da36139b1_93163905')) {function content_54ff7da36139b1_93163905($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('toolbar_btn'=>$_smarty_tpl->tpl_vars['toolbar_btn']->value,'toolbar_scroll'=>$_smarty_tpl->tpl_vars['toolbar_scroll']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

	<div class="leadin"></div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['title'])){?><h2><?php echo $_smarty_tpl->tpl_vars['fields']->value['title'];?>
</h2><?php }?>

<form id="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'])){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'], 'htmlall', 'UTF-8');?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['table']->value==null){?>configuration_form<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form<?php }?><?php }?>" class="defaultForm <?php echo $_smarty_tpl->tpl_vars['name_controller']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)){?><?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
=1<?php }?>&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" method="post" enctype="multipart/form-data" <?php if (isset($_smarty_tpl->tpl_vars['style']->value)){?>style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
"<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['form_id']->value){?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['fieldset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fieldset']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fieldset']->key => $_smarty_tpl->tpl_vars['fieldset']->value){
$_smarty_tpl->tpl_vars['fieldset']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['fieldset']->key;
?>
		<fieldset id="fieldset_<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
">
			<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value=='legend'){?>
					<legend>
						<?php if (isset($_smarty_tpl->tpl_vars['field']->value['image'])){?><img src="<?php echo $_smarty_tpl->tpl_vars['field']->value['image'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['title'], 'htmlall', 'UTF-8');?>
" /><?php }?>
						<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

					</legend>
				<?php }elseif($_smarty_tpl->tpl_vars['key']->value=='description'&&$_smarty_tpl->tpl_vars['field']->value){?>
					<p class="description"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</p>
				<?php }elseif($_smarty_tpl->tpl_vars['key']->value=='input'){?>
					<?php  $_smarty_tpl->tpl_vars['input'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['input']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['input']->key => $_smarty_tpl->tpl_vars['input']->value){
$_smarty_tpl->tpl_vars['input']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden'){?>
							<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'htmlall', 'UTF-8');?>
" />
						<?php }else{ ?>
							<?php if ($_smarty_tpl->tpl_vars['input']->value['name']=='id_state'){?>
								<div id="contains_states" <?php if (!$_smarty_tpl->tpl_vars['contains_states']->value){?>style="display:none;"<?php }?>>
							<?php }?>
							
								<?php if (isset($_smarty_tpl->tpl_vars['input']->value['label'])){?><label><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
 </label><?php }?>
							
							
								<div class="margin-form">
								
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='checkboxStatuses'){?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((($_smarty_tpl->tpl_vars['input']->value['name']).('_')).(intval($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']])), null, 0);?>
			<input type="checkbox"
				name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]"
				id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"
				value="<?php echo intval($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]);?>
"
				<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value])&&$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]){?>checked="checked"<?php }?> />
			<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"
				style="float:none;<?php if (!(isset($_smarty_tpl->tpl_vars['statusStats']->value[$_smarty_tpl->tpl_vars['value']->value['id_order_state']])&&$_smarty_tpl->tpl_vars['statusStats']->value[$_smarty_tpl->tpl_vars['value']->value['id_order_state']])){?>font-weight:normal;<?php }?>padding:0;text-align:left;width:100%;color:#000">
					<img src="../img/admin/charged_<?php if ($_smarty_tpl->tpl_vars['value']->value['invoice']){?>ok<?php }else{ ?>ko<?php }?>.gif" alt="" />
					<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']];?>

					(<?php if (isset($_smarty_tpl->tpl_vars['statusStats']->value[$_smarty_tpl->tpl_vars['value']->value['id_order_state']])&&$_smarty_tpl->tpl_vars['statusStats']->value[$_smarty_tpl->tpl_vars['value']->value['id_order_state']]){?><?php echo $_smarty_tpl->tpl_vars['statusStats']->value[$_smarty_tpl->tpl_vars['value']->value['id_order_state']];?>
<?php }else{ ?>0<?php }?>)
			</label><br />
		<?php } ?>
	<?php }else{ ?>
		
								<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='text'||$_smarty_tpl->tpl_vars['input']->value['type']=='tags'){?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']){?>
										<div class="translatable">
											<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
												<div class="lang_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['defaultFormLanguage']->value){?>block<?php }else{ ?>none<?php }?>; float: left;">
													<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags'){?>
														
														<script type="text/javascript">
															$().ready(function () {
																var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>';
																$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag','js'=>1),$_smarty_tpl);?>
'});
																$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
																	$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
																});
															});
														</script>
														
													<?php }?>
													<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']], null, 0);?>
													<input type="text"
															name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
															id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"
															value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']){?><?php echo smarty_modifier_escape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value), 'htmlall', 'UTF-8');?>
<?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value_text']->value, 'htmlall', 'UTF-8');?>
<?php }?>"
															class="<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags'){?>tagify <?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])){?>size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])){?>maxlength="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxlength'];?>
"<?php }?>
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']){?>readonly="readonly"<?php }?>
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']){?>disabled="disabled"<?php }?>
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']){?>autocomplete="off"<?php }?> />
													<?php if (!empty($_smarty_tpl->tpl_vars['input']->value['hint'])){?><span class="hint" name="help_box"><?php echo $_smarty_tpl->tpl_vars['input']->value['hint'];?>
<span class="hint-pointer">&nbsp;</span></span><?php }?>
												</div>
											<?php } ?>
										</div>
									<?php }else{ ?>
										<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags'){?>
											
											<script type="text/javascript">
												$().ready(function () {
													var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>';
													$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag'),$_smarty_tpl);?>
'});
													$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
														$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
													});
												});
											</script>
											
										<?php }?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
										<input type="text"
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']){?><?php echo smarty_modifier_escape(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value), 'htmlall', 'UTF-8');?>
<?php }else{ ?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value_text']->value, 'htmlall', 'UTF-8');?>
<?php }?>"
												class="<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags'){?>tagify <?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])){?>size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])){?>maxlength="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxlength'];?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?>class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']){?>readonly="readonly"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']){?>disabled="disabled"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']){?>autocomplete="off"<?php }?> />
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
<?php }?>
										<?php if (!empty($_smarty_tpl->tpl_vars['input']->value['hint'])){?><span class="hint" name="help_box"><?php echo $_smarty_tpl->tpl_vars['input']->value['hint'];?>
<span class="hint-pointer">&nbsp;</span></span><?php }?>
									<?php }?>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='select'){?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['query'])&&!$_smarty_tpl->tpl_vars['input']->value['options']['query']&&isset($_smarty_tpl->tpl_vars['input']->value['empty_message'])){?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['empty_message'];?>

										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['required'] = false;?>
										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['desc'] = null;?>
									<?php }else{ ?>
										<select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])){?>multiple="multiple" <?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])){?>size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])){?>onchange="<?php echo $_smarty_tpl->tpl_vars['input']->value['onchange'];?>
"<?php }?>>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['default'])){?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['input']->value['options']['default']['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['input']->value['options']['default']['label'];?>
</option>
											<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['optiongroup'])){?>
												<?php  $_smarty_tpl->tpl_vars['optiongroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['optiongroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['optiongroup']->key => $_smarty_tpl->tpl_vars['optiongroup']->value){
$_smarty_tpl->tpl_vars['optiongroup']->_loop = true;
?>
													<optgroup label="<?php echo $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['label']];?>
">
														<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['query']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']];?>
"
																<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])){?>
																	<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value){
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																		<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]){?>selected="selected"<?php }?>
																	<?php } ?>
																<?php }else{ ?>
																	<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]){?>selected="selected"<?php }?>
																<?php }?>
															><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['name']];?>
</option>
														<?php } ?>
													</optgroup>
												<?php } ?>
											<?php }else{ ?>
												<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
													<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)){?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])){?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value){
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}){?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php }else{ ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}){?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
													<?php }elseif($_smarty_tpl->tpl_vars['option']->value=="-"){?>
														<option value="">-</option>
													<?php }else{ ?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])){?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value){
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]){?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php }else{ ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]){?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>

													<?php }?>
												<?php } ?>
											<?php }?>
										</select>
										<?php if (!empty($_smarty_tpl->tpl_vars['input']->value['hint'])){?><span class="hint" name="help_box"><?php echo $_smarty_tpl->tpl_vars['input']->value['hint'];?>
<span class="hint-pointer">&nbsp;</span></span><?php }?>
									<?php }?>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='radio'){?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value['value'], 'htmlall', 'UTF-8');?>
"
												<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']){?>checked="checked"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']){?>disabled="disabled"<?php }?> />
										<label <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?>class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"<?php }?> for="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
										 <?php if (isset($_smarty_tpl->tpl_vars['input']->value['is_bool'])&&$_smarty_tpl->tpl_vars['input']->value['is_bool']==true){?>
											<?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1){?>
												<img src="../img/admin/enabled.gif" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
" />
											<?php }else{ ?>
												<img src="../img/admin/disabled.gif" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
" />
											<?php }?>
										 <?php }else{ ?>
											<?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>

										 <?php }?>
										</label>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['br'])&&$_smarty_tpl->tpl_vars['input']->value['br']){?><br /><?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['p'])&&$_smarty_tpl->tpl_vars['value']->value['p']){?><p><?php echo $_smarty_tpl->tpl_vars['value']->value['p'];?>
</p><?php }?>
									<?php } ?>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='textarea'){?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']){?>
										<div class="translatable">
											<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
												<div class="lang_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['defaultFormLanguage']->value){?>block<?php }else{ ?>none<?php }?>; float: left;">
													<textarea cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
" rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']){?>class="rte autoload_rte <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php }?> ><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']], 'htmlall', 'UTF-8');?>
</textarea>
												</div>
											<?php } ?>
										</div>
									<?php }else{ ?>
										<textarea name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>" cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
" rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']){?>class="rte autoload_rte <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'htmlall', 'UTF-8');?>
</textarea>
									<?php }?>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='checkbox'){?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]), null, 0);?>
										<input type="checkbox"
											name="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"
											id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['value']->value['val'])){?>value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value['val'], 'htmlall', 'UTF-8');?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value])&&$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]){?>checked="checked"<?php }?> />
										<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" class="t"><strong><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']];?>
</strong></label><br />
									<?php } ?>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='file'){?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['display_image'])&&$_smarty_tpl->tpl_vars['input']->value['display_image']){?>
										<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['image'])&&$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['image']){?>
											<div id="image">
												<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['image'];?>

												<p align="center"><?php echo smartyTranslate(array('s'=>'File size'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['size'];?>
<?php echo smartyTranslate(array('s'=>'kb'),$_smarty_tpl);?>
</p>
												<a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&deleteImage=1">
													<img src="../img/admin/delete.gif" alt="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
" /> <?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>

												</a>
											</div><br />
										<?php }?>
									<?php }?>
									
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']){?>
										<div class="translatable">
											<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
												<div class="lang_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['defaultFormLanguage']->value){?>block<?php }else{ ?>none<?php }?>; float: left;">
													<input type="file" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?>id="<?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"<?php }?> />
									
												</div>
											<?php } ?>
										</div>
									<?php }else{ ?>
										<input type="file" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?>id="<?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
"<?php }?> />
									<?php }?>
									<?php if (!empty($_smarty_tpl->tpl_vars['input']->value['hint'])){?><span class="hint" name="help_box"><?php echo $_smarty_tpl->tpl_vars['input']->value['hint'];?>
<span class="hint-pointer">&nbsp;</span></span><?php }?>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='password'){?>
									<input type="password"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
											value=""
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']){?>autocomplete="off"<?php }?> />
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='birthday'){?>
									<?php  $_smarty_tpl->tpl_vars['select'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['select']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['select']->key => $_smarty_tpl->tpl_vars['select']->value){
$_smarty_tpl->tpl_vars['select']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['select']->key;
?>
										<select name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
											<option value="">-</option>
											<?php if ($_smarty_tpl->tpl_vars['key']->value=='months'){?>
												
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]){?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
</option>
												<?php } ?>
											<?php }else{ ?>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
												<?php } ?>
											<?php }?>

										</select>
									<?php } ?>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='group'){?>
									<?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable($_smarty_tpl->tpl_vars['input']->value['values'], null, 0);?>
									<?php /*  Call merged included template "helpers/form/form_group.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('helpers/form/form_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1667654ff7da0867d97-15537467');
content_54ff7da25058b4_50490565($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "helpers/form/form_group.tpl" */?>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='shop'){?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['html'];?>

								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='categories'){?>
									<?php /*  Call merged included template "helpers/form/form_category.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('helpers/form/form_category.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('categories'=>$_smarty_tpl->tpl_vars['input']->value['values']), 0, '1667654ff7da0867d97-15537467');
content_54ff7da26865b7_81933396($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "helpers/form/form_category.tpl" */?>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='categories_select'){?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['category_tree'];?>

								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='asso_shop'&&isset($_smarty_tpl->tpl_vars['asso_shop']->value)&&$_smarty_tpl->tpl_vars['asso_shop']->value){?>
										<?php echo $_smarty_tpl->tpl_vars['asso_shop']->value;?>

								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='color'){?>
									<input type="color"
										size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"
										data-hex="true"
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?>class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
										<?php }else{ ?>class="color mColorPickerInput"<?php }?>
										name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
										value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'htmlall', 'UTF-8');?>
" />
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='date'){?>
									<input type="text"
										size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"
										data-hex="true"
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?>class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
										<?php }else{ ?>class="datepicker"<?php }?>
										name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
										value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'htmlall', 'UTF-8');?>
" />
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='free'){?>
									<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>

								<?php }?>
								<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']&&$_smarty_tpl->tpl_vars['input']->value['type']!='radio'){?> <sup>*</sup><?php }?>
								
	<?php }?>

								
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])&&!empty($_smarty_tpl->tpl_vars['input']->value['desc'])){?>
										<p class="preference_description">
											<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['desc'])){?>
												<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['desc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
													<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)){?>
														<span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
													<?php }else{ ?>
														<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br />
													<?php }?>
												<?php } ?>
											<?php }else{ ?>
												<?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>

											<?php }?>
										</p>
									<?php }?>
								
								<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&isset($_smarty_tpl->tpl_vars['languages']->value)){?><div class="clear"></div><?php }?>
								</div>
								<div class="clear"></div>
							
							<?php if ($_smarty_tpl->tpl_vars['input']->value['name']=='id_state'){?>
								</div>
							<?php }?>
						<?php }?>
					<?php } ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminForm','fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)){?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php }elseif(isset($_GET['controller'])){?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php }?>
				<?php }elseif($_smarty_tpl->tpl_vars['key']->value=='submit'){?>
					<div class="margin-form">
						<input type="submit"
							id="<?php if (isset($_smarty_tpl->tpl_vars['field']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn<?php }?>"
							value="<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
"
							name="<?php if (isset($_smarty_tpl->tpl_vars['field']->value['name'])){?><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['field']->value['stay'])&&$_smarty_tpl->tpl_vars['field']->value['stay']){?>AndStay<?php }?>"
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['class'])){?>class="<?php echo $_smarty_tpl->tpl_vars['field']->value['class'];?>
"<?php }?> />
					</div>
				<?php }elseif($_smarty_tpl->tpl_vars['key']->value=='desc'){?>
					<p class="clear">
						<?php if (is_array($_smarty_tpl->tpl_vars['field']->value)){?>
							<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
								<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)){?>
									<span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
								<?php }else{ ?>
									<?php echo $_smarty_tpl->tpl_vars['p']->value;?>

									<?php if (isset($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['k']->value+1])){?><br /><?php }?>
								<?php }?>
							<?php } ?>
						<?php }else{ ?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value;?>

						<?php }?>
					</p>
				<?php }?>
				
			<?php } ?>
			<?php if ($_smarty_tpl->tpl_vars['required_fields']->value){?>
				<div class="small"><sup>*</sup> <?php echo smartyTranslate(array('s'=>'Required field'),$_smarty_tpl);?>
</div>
			<?php }?>
		</fieldset>
		
		<?php if (isset($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['f']->value+1])){?><br /><?php }?>
	<?php } ?>
</form>

<div style="clear:both">&nbsp;</div>

<?php if (isset($_smarty_tpl->tpl_vars['tinymce']->value)&&$_smarty_tpl->tpl_vars['tinymce']->value){?>
	<script type="text/javascript">

	var iso = '<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
';
	var pathCSS = '<?php echo @constant('_THEME_CSS_DIR_');?>
';
	var ad = '<?php echo $_smarty_tpl->tpl_vars['ad']->value;?>
';

	$(document).ready(function(){
		
			tinySetup({
				editor_selector :"autoload_rte"
			});
		
	});
	</script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['firstCall']->value){?>
	<script type="text/javascript">
		var module_dir = '<?php echo @constant('_MODULE_DIR_');?>
';
		var id_language = <?php echo $_smarty_tpl->tpl_vars['defaultFormLanguage']->value;?>
;
		var languages = new Array();
		var vat_number = <?php if ($_smarty_tpl->tpl_vars['vat_number']->value){?>1<?php }else{ ?>0<?php }?>;
		// Multilang field setup must happen before document is ready so that calls to displayFlags() to avoid
		// precedence conflicts with other document.ready() blocks
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
			languages[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
] = {
				id_lang: <?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
,
				iso_code: '<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
',
				name: '<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
',
				is_default: '<?php echo $_smarty_tpl->tpl_vars['language']->value['is_default'];?>
'
			};
		<?php } ?>
		// we need allowEmployeeFormLang var in ajax request
		allowEmployeeFormLang = <?php echo intval($_smarty_tpl->tpl_vars['allowEmployeeFormLang']->value);?>
;
		employee_token = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminEmployees'),$_smarty_tpl);?>
';
		displayFlags(languages, id_language, allowEmployeeFormLang);

		$(document).ready(function() {
			<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value['id_state'])){?>
				if ($('#id_country') && $('#id_state'))
				{
					ajaxStates(<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['id_state'];?>
);
					$('#id_country').change(function() {
						ajaxStates();
					});
				}
			<?php }?>

			if ($(".datepicker").length > 0)
				$(".datepicker").datepicker({
					prevText: '',
					nextText: '',
					dateFormat: 'yy-mm-dd'
				});

		});
	state_token = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminStates'),$_smarty_tpl);?>
';
	

	$(document).ready(function() {
		var btn_save_date = $('span[class~="process-icon-save-date"]').parent();
		var btn_submit_date = $('#submitPrint');

		if (btn_save_date.length > 0 && btn_submit_date.length > 0)
		{
			btn_submit_date.hide();
			btn_save_date.find('span').removeClass('process-icon-save-date');
			btn_save_date.find('span').addClass('process-icon-save-calendar');
			btn_save_date.click(function() {
				btn_submit_date.before('<input type="hidden" name="'+btn_submit_date.attr("name")+'" value="1" />');

				$('#invoice_date_form').submit();
			});
		}

		var btn_save_status = $('span[class~="process-icon-save-status"]').parent();
		var btn_submit_status = $('#submitPrint2');

		if (btn_save_status.length > 0 && btn_submit_status.length > 0)
		{
			btn_submit_status.hide();
			btn_save_status.find('span').removeClass('process-icon-save-status');
			btn_save_status.find('span').addClass('process-icon-save');
			btn_save_status.click(function() {
				btn_submit_status.before('<input type="hidden" name="'+btn_submit_status.attr("name")+'" value="1" />');

				$('#invoice_status_form').submit();
			});
		}
	});


	</script>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2015-03-11 00:26:26
         compiled from "C:\re\wamp\www\prestashop\admin21\themes\default\template\helpers\form\form_group.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54ff7da25058b4_50490565')) {function content_54ff7da25058b4_50490565($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['groups']->value)&&isset($_smarty_tpl->tpl_vars['groups']->value)){?>
<table cellspacing="0" cellpadding="0" class="table" style="width:28em;">
	<tr>
		<th>
			<input type="checkbox" name="checkme" id="checkme" class="noborder" onclick="checkDelBoxes(this.form, 'groupBox[]', this.checked)" />
		</th>
		<th><?php echo smartyTranslate(array('s'=>'ID'),$_smarty_tpl);?>
</th>
		<th><?php echo smartyTranslate(array('s'=>'Group name'),$_smarty_tpl);?>
</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
		<tr <?php if ($_smarty_tpl->tpl_vars['key']->value%2){?>class="alt_row"<?php }?>>
			<td>
				<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((('groupBox').('_')).($_smarty_tpl->tpl_vars['group']->value['id_group']), null, 0);?>
				<input type="checkbox" name="groupBox[]" class="groupBox" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]){?>checked="checked"<?php }?> />
			</td>
			<td><?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
</td>
			<td><label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" class="t"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</label></td>
		</tr>
	<?php } ?>
</table>
<?php }else{ ?>
<p><?php echo smartyTranslate(array('s'=>'No group created'),$_smarty_tpl);?>
</p>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2015-03-11 00:26:26
         compiled from "C:\re\wamp\www\prestashop\admin21\themes\default\template\helpers\form\form_category.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54ff7da26865b7_81933396')) {function content_54ff7da26865b7_81933396($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['categories']->value)&&isset($_smarty_tpl->tpl_vars['categories']->value)){?>
	<script type="text/javascript">
		var inputName = '<?php echo addcslashes($_smarty_tpl->tpl_vars['categories']->value['input_name'],'\'');?>
';
		var use_radio = <?php if ($_smarty_tpl->tpl_vars['categories']->value['use_radio']){?>1<?php }else{ ?>0<?php }?>;
		var selectedCat = <?php echo intval(implode($_smarty_tpl->tpl_vars['categories']->value['selected_cat']));?>
;
		var selectedLabel = '<?php echo addcslashes($_smarty_tpl->tpl_vars['categories']->value['trads']['selected'],'\'');?>
';
		var home = '<?php echo addcslashes($_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['name'],'\'');?>
';
		var use_radio = <?php if ($_smarty_tpl->tpl_vars['categories']->value['use_radio']){?>1<?php }else{ ?>0<?php }?>;
		var use_context = <?php if (isset($_smarty_tpl->tpl_vars['categories']->value['use_context'])){?>1<?php }else{ ?>0<?php }?>;
		$(document).ready(function(){
			buildTreeView(use_context);
		});
	</script>
	<div class="category-filter">
		<span><a href="#" id="collapse_all"><?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Collapse All'];?>
</a>|&nbsp;</span>
	 	<span><a href="#" id="expand_all"><?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Expand All'];?>
</a>|&nbsp;</span>		 
		<?php if (!$_smarty_tpl->tpl_vars['categories']->value['use_radio']){?>
		<span><a href="#" id="check_all"><?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Check All'];?>
</a>|&nbsp;</span>
		<span><a href="#" id="uncheck_all"><?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Uncheck All'];?>
</a>|&nbsp;</span>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['categories']->value['use_search']){?>
			<span style="margin-left:20px">
				<?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['search'];?>
:&nbsp;
				<form method="post" id="filternameForm">
					<input type="text" name="search_cat" id="search_cat"/>
				</form>
			</span>
		<?php }?>
	</div>
	<?php $_smarty_tpl->tpl_vars['home_is_selected'] = new Smarty_variable(false, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value['selected_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
		<?php if (is_array($_smarty_tpl->tpl_vars['cat']->value)){?>
			<?php if ($_smarty_tpl->tpl_vars['cat']->value['id_category']!=$_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category']){?>
				<input <?php if (in_array($_smarty_tpl->tpl_vars['cat']->value['id_category'],$_smarty_tpl->tpl_vars['categories']->value['disabled_categories'])){?>disabled="disabled"<?php }?> type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['categories']->value['input_name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id_category'];?>
"/>
			<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars['home_is_selected'] = new Smarty_variable(true, null, 0);?>
			<?php }?>
		<?php }else{ ?>
			<?php if ($_smarty_tpl->tpl_vars['cat']->value!=$_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category']){?>
				<input <?php if (in_array($_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['categories']->value['disabled_categories'])){?>disabled="disabled"<?php }?> type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['categories']->value['input_name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
"/>
			<?php }else{ ?>
				<?php $_smarty_tpl->tpl_vars['home_is_selected'] = new Smarty_variable(true, null, 0);?>
			<?php }?>
		<?php }?>
	<?php } ?>
	<ul id="categories-treeview" class="filetree">
		<li id="<?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category'];?>
" class="hasChildren">
			<span class="folder">
				<?php if ($_smarty_tpl->tpl_vars['categories']->value['top_category']->id!=$_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category']){?>
					<input type="<?php if (!$_smarty_tpl->tpl_vars['categories']->value['use_radio']){?>checkbox<?php }else{ ?>radio<?php }?>"
							name="<?php echo $_smarty_tpl->tpl_vars['categories']->value['input_name'];?>
"
							value="<?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category'];?>
"
							<?php if ($_smarty_tpl->tpl_vars['home_is_selected']->value){?>checked="checked"<?php }?>
							onclick="clickOnCategoryBox($(this));"/>
						<span class="category_label"><?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['name'];?>
</span>
				<?php }else{ ?>
					&nbsp;
				<?php }?>
			</span>
			<ul>
				<li><span class="placeholder">&nbsp;</span></li>
		  	</ul>
		</li>
	</ul>
	<?php if ($_smarty_tpl->tpl_vars['categories']->value['use_radio']){?>
	<script type="text/javascript">
		searchCategory();
	</script>
	<?php }?>
<?php }?><?php }} ?>