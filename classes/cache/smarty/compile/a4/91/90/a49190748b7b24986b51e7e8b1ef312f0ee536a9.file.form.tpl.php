<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:49:34
         compiled from "C:\re\wamp\www\prestashop\admin\themes\default\template\controllers\import\helpers\form\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14647547e6c2eb844b8-49157269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a49190748b7b24986b51e7e8b1ef312f0ee536a9' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\controllers\\import\\helpers\\form\\form.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14647547e6c2eb844b8-49157269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toolbar_btn' => 0,
    'toolbar_scroll' => 0,
    'title' => 0,
    'module_confirmation' => 0,
    'current' => 0,
    'token' => 0,
    'path_import' => 0,
    'files_to_import' => 0,
    'filename' => 0,
    'csv_selected' => 0,
    'PS_ADVANCED_STOCK_MANAGEMENT' => 0,
    'entities' => 0,
    'i' => 0,
    'entity_selected' => 0,
    'entity' => 0,
    'languages' => 0,
    'lang' => 0,
    'id_language' => 0,
    'separator_selected' => 0,
    'multiple_value_separator_selected' => 0,
    'available_fields' => 0,
    'truncateAuthorized' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c2f1a8f05_60793480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c2f1a8f05_60793480')) {function content_547e6c2f1a8f05_60793480($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ("toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('toolbar_btn'=>$_smarty_tpl->tpl_vars['toolbar_btn']->value,'toolbar_scroll'=>$_smarty_tpl->tpl_vars['toolbar_scroll']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

<div class="leadin"></div>
<?php if ($_smarty_tpl->tpl_vars['module_confirmation']->value){?>
	<div class="module_confirmation conf confirm">
		<?php echo smartyTranslate(array('s'=>'Your .CSV file has been sucessfully imported into your shop. Don\'t forget to Re-build the products search index.'),$_smarty_tpl);?>

	</div>
<?php }?>
<div style="display: none">
	<div id="upload_file_import" style="padding-left: 10px; background-color: #EBEDF4; border: 1px solid #CCCED7">
		<div class="clear">&nbsp;</div>
		<form action="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" method="post" enctype="multipart/form-data">
			<label class="clear" style="width:160px; text-align: left;"><?php echo smartyTranslate(array('s'=>'Select your CSV file'),$_smarty_tpl);?>
 </label>	
			<div class="margin-form" style="padding-left:190px;">
				<input name="file" type="file" />
				<p class="preference_description">
					<?php echo smartyTranslate(array('s'=>'You can also upload your file via FTP to the following directory:'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['path_import']->value;?>
.
				</p>
			</div>
			
			<div class="margin-form" style="padding-left:190px;">
				<input type="submit" name="submitFileUpload" value="<?php echo smartyTranslate(array('s'=>'Upload'),$_smarty_tpl);?>
" class="button" />
				<p class="preference_description">
					<?php echo smartyTranslate(array('s'=>'Only UTF-8 and ISO-8859-1 encoding are allowed'),$_smarty_tpl);?>

				</p>
			</div>
		</form>
	</div>
</div>
<div class="clear">&nbsp;</div>
<form id="preview_import" action="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" method="post" style="display:inline" enctype="multipart/form-data" class="clear">
	<fieldset style="float: left; margin: 0pt 20px 0pt 0pt; width: 70%;">
		<legend><img src="../img/admin/import.gif" /><?php echo smartyTranslate(array('s'=>'Import   '),$_smarty_tpl);?>
</legend>
			<label class="clear"><?php if (count($_smarty_tpl->tpl_vars['files_to_import']->value)>1){?><?php echo smartyTranslate(array('s'=>'Your CSV file (%d files):','sprintf'=>count($_smarty_tpl->tpl_vars['files_to_import']->value)),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Your CSV file (%d file):','sprintf'=>count($_smarty_tpl->tpl_vars['files_to_import']->value)),$_smarty_tpl);?>
<?php }?></label>
			<div class="margin-form">
				<?php if (count($_smarty_tpl->tpl_vars['files_to_import']->value)){?>
					<select name="csv">
						<?php  $_smarty_tpl->tpl_vars['filename'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filename']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files_to_import']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filename']->key => $_smarty_tpl->tpl_vars['filename']->value){
$_smarty_tpl->tpl_vars['filename']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['csv_selected']->value==$_smarty_tpl->tpl_vars['filename']->value){?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['filename']->value, 'htmlall', 'UTF-8');?>
</option>
						<?php } ?>
					</select>
				<?php }?>
				&nbsp;
				<a href="#upload_file_import" id="upload_file_import_link" class="button"><img src="../img/admin/add.gif" alt="Uplaod" title="Upload" /><?php echo smartyTranslate(array('s'=>'Upload'),$_smarty_tpl);?>
</a>
			</div>
			<div style="width:50%; margin: 0 auto;">
				<div style="width:50%; display: inline-block; float :left;">
					<a href="#" onclick="$('#sample_files_import').slideToggle(); return false;"><?php echo smartyTranslate(array('s'=>'Click to view our sample import csv files.'),$_smarty_tpl);?>
</a>
					<ul id="sample_files_import" style="display:none;">
						<li><a class="_blank" href="../docs/csv_import/categories_import.csv"><?php echo smartyTranslate(array('s'=>'Sample Categories file'),$_smarty_tpl);?>
</a></li>
						<li><a class="_blank" href="../docs/csv_import/products_import.csv"><?php echo smartyTranslate(array('s'=>'Sample Products file'),$_smarty_tpl);?>
</a></li>
						<li><a class="_blank" href="../docs/csv_import/combinations_import.csv"><?php echo smartyTranslate(array('s'=>'Sample Combinations file'),$_smarty_tpl);?>
</a></li>
						<li><a class="_blank" href="../docs/csv_import/customers_import.csv"><?php echo smartyTranslate(array('s'=>'Sample Customers file'),$_smarty_tpl);?>
</a></li>
						<li><a class="_blank" href="../docs/csv_import/addresses_import.csv"><?php echo smartyTranslate(array('s'=>'Sample Addresses file'),$_smarty_tpl);?>
</a></li>
						<li><a class="_blank" href="../docs/csv_import/manufacturers_import.csv"><?php echo smartyTranslate(array('s'=>'Sample Manufacturers file'),$_smarty_tpl);?>
</a></li>
						<li><a class="_blank" href="../docs/csv_import/suppliers_import.csv"><?php echo smartyTranslate(array('s'=>'Sample Suppliers file'),$_smarty_tpl);?>
</a></li>
						<li><a class="_blank" href="../docs/csv_import/alias_import.csv"><?php echo smartyTranslate(array('s'=>'Sample Alias file'),$_smarty_tpl);?>
</a></li>
						<?php if ($_smarty_tpl->tpl_vars['PS_ADVANCED_STOCK_MANAGEMENT']->value){?>
							<li><a class="_blank" href="../docs/csv_import/supply_orders_import.csv"><?php echo smartyTranslate(array('s'=>'Supply Orders sample file'),$_smarty_tpl);?>
</a></li>
							<li><a class="_blank" href="../docs/csv_import/supply_orders_details_import.csv"><?php echo smartyTranslate(array('s'=>'Supply Orders Details sample file'),$_smarty_tpl);?>
</a></li>
						<?php }?>
					</ul>
				</div>
				<div style="width:50%; float:left;">
					<a href="#" onclick="$('#csv_files_import').slideToggle(); return false;"><?php echo smartyTranslate(array('s'=>'Click to view your csv files.'),$_smarty_tpl);?>
</a>
					<ul id="csv_files_import" style="display:none;">
							<?php  $_smarty_tpl->tpl_vars['filename'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filename']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files_to_import']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filename']->key => $_smarty_tpl->tpl_vars['filename']->value){
$_smarty_tpl->tpl_vars['filename']->_loop = true;
?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&csvfilename=<?php echo base64_encode($_smarty_tpl->tpl_vars['filename']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
</a>&nbsp;&nbsp;
<a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&csvfilename=<?php echo base64_encode($_smarty_tpl->tpl_vars['filename']->value);?>
&delete=1"><img src="../img/admin/delete.gif" /></a></li>
							<?php } ?>
					</ul>
				</div>
				<div class="clear">&nbsp;</div>
			</div>
			<label class="clear"><?php echo smartyTranslate(array('s'=>'What kind of entity would you like to import?'),$_smarty_tpl);?>
 </label>
			<div class="margin-form">
				<select name="entity" id="entity">
					<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['entity'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['entities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['entity']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['entity_selected']->value==$_smarty_tpl->tpl_vars['i']->value){?> selected="selected"<?php }?>>
							<?php echo $_smarty_tpl->tpl_vars['entity']->value;?>

						</option>
					<?php } ?>
				</select>
			</div>
			<label class="clear"><?php echo smartyTranslate(array('s'=>'Language of the file'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<select name="iso_lang">
					<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['iso_code'];?>
" <?php if ($_smarty_tpl->tpl_vars['lang']->value['id_lang']==$_smarty_tpl->tpl_vars['id_language']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</option>
					<?php } ?>
				</select>
				<?php echo smartyTranslate(array('s'=>'The locale must be installed'),$_smarty_tpl);?>

			</div>
			<label for="convert" class="clear"><?php echo smartyTranslate(array('s'=>'ISO-8859-1 encoded file?'),$_smarty_tpl);?>
 </label>
			<div class="margin-form">
				<input name="convert" id="convert" type="checkbox" style="margin-top: 6px;"/>
			</div>
			<label class="clear"><?php echo smartyTranslate(array('s'=>'Field separator'),$_smarty_tpl);?>
 </label>
			<div class="margin-form">
				<input type="text" size="2" value="<?php if (isset($_smarty_tpl->tpl_vars['separator_selected']->value)){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['separator_selected']->value, 'htmlall', 'UTF-8');?>
<?php }else{ ?>;<?php }?>" name="separator"/>
				<?php echo smartyTranslate(array('s'=>'e.g. '),$_smarty_tpl);?>
"1<span class="bold" style="color: red">;</span>Ipod<span class="bold" style="color: red">;</span>129.90<span class="bold" style="color: red">;</span>5"
			</div>
			<label class="clear"><?php echo smartyTranslate(array('s'=>'Multiple value separator'),$_smarty_tpl);?>
 </label>
			<div class="margin-form">
				<input type="text" size="2" value="<?php if (isset($_smarty_tpl->tpl_vars['multiple_value_separator_selected']->value)){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['multiple_value_separator_selected']->value, 'htmlall', 'UTF-8');?>
<?php }else{ ?>,<?php }?>" name="multiple_value_separator"/>
				<?php echo smartyTranslate(array('s'=>'e.g. '),$_smarty_tpl);?>
"Ipod;red.jpg<span class="bold" style="color: red">,</span>blue.jpg<span class="bold" style="color: red">,</span>green.jpg;129.90"
			</div>
			<label for="truncate" class="clear"><?php echo smartyTranslate(array('s'=>'Delete all'),$_smarty_tpl);?>
 <span id="entitie"><?php echo smartyTranslate(array('s'=>'categories'),$_smarty_tpl);?>
</span> <?php echo smartyTranslate(array('s'=>'before import?'),$_smarty_tpl);?>
 </label>
			<div class="margin-form">
				<input name="truncate" id="truncate" type="checkbox"/>
			</div>
			<label for="regenerate" class="clear"><?php echo smartyTranslate(array('s'=>'No thumbnails regeneration'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input name="regenerate" id="regenerate" type="checkbox" />
			</div>
			<label for="forceIDs" class="clear"><?php echo smartyTranslate(array('s'=>'Force all ID\'s during import?'),$_smarty_tpl);?>
 </label>
			<div class="margin-form">
				<input name="forceIDs" id="forceIDs" type="checkbox"/> <?php echo smartyTranslate(array('s'=>'If you don\'t use this option, all ID\'s will be auto-incremented.'),$_smarty_tpl);?>

			</div>
			<label for="match_ref" class="clear" style="display: none"><?php echo smartyTranslate(array('s'=>'Use product reference as key?'),$_smarty_tpl);?>
</label>
			<div class="margin-form">
				<input name="match_ref" id="match_ref" type="checkbox" style="margin-top: 6px; display:none"/>
			</div>
			<div class="space margin-form">
				<input type="submit" name="submitImportFile" value="<?php echo smartyTranslate(array('s'=>'Next step'),$_smarty_tpl);?>
" class="button" <?php if (empty($_smarty_tpl->tpl_vars['files_to_import']->value)){?>disabled<?php }?>/>
				<?php if (empty($_smarty_tpl->tpl_vars['files_to_import']->value)){?><span style="color:red;"><?php echo smartyTranslate(array('s'=>'You must upload a file in order to proceed to the next step'),$_smarty_tpl);?>
</span><?php }?>
			</div>
			<div class="warn import_products_categories" style="margin-top: 20px;">
				<p><?php echo smartyTranslate(array('s'=>'Note that the category import does not support categories of the same name.'),$_smarty_tpl);?>
</p>
				<p><?php echo smartyTranslate(array('s'=>'Note that you can have several products with the same reference.'),$_smarty_tpl);?>
</p>
			</div>
			<div class="warn import_supply_orders_details" style="margin-top: 20px; display:none">
				<p><?php echo smartyTranslate(array('s'=>'Importing Supply Order Details will reset products ordered, if there are any.'),$_smarty_tpl);?>
</p>
			</div>
		<?php if (!count($_smarty_tpl->tpl_vars['files_to_import']->value)){?>
			<div class="warn" style="margin-top: 20px;">
				<p><?php echo smartyTranslate(array('s'=>'There is no CSV file available. Please upload one using the \'Upload\' button above.'),$_smarty_tpl);?>
</p>
				<ul>
					<li><?php echo smartyTranslate(array('s'=>'You can read information on CSV import at:'),$_smarty_tpl);?>
 <a href="http://doc.prestashop.com/display/PS14/Troubleshooting#Troubleshooting-HowtocorrectlyimportaccentuatedcontentusingaCSVfile%3F" target="_blank">http://doc.prestashop.com/display/PS14/Troubleshooting</a></li>
					<li><?php echo smartyTranslate(array('s'=>'Read more about CSV format at:'),$_smarty_tpl);?>
 <a href="http://en.wikipedia.org/wiki/Comma-separated_values" target="_blank">http://en.wikipedia.org/wiki/Comma-separated_values</a></li>
				</ul>
			</div>
		<?php }?>
	</fieldset>
</form>
<fieldset style="display:block;">
	<legend>
		<img src="../img/admin/import.gif" /><?php echo smartyTranslate(array('s'=>'Available fields'),$_smarty_tpl);?>

	</legend>
	<div id="availableFields">
		<?php echo $_smarty_tpl->tpl_vars['available_fields']->value;?>

	</div>

	<div class="clear">
		<br /><br /><?php echo smartyTranslate(array('s'=>'* Required field'),$_smarty_tpl);?>

	</div>
</fieldset>
<div class="clear">&nbsp;</div>
<script type="text/javascript">
	$(document).ready(function(){
		var truncateAuthorized = <?php echo intval($_smarty_tpl->tpl_vars['truncateAuthorized']->value);?>
;
		activeClueTip();
		$("a#upload_file_import_link").fancybox({
				'titleShow' : false,
				'transitionIn' : 'elastic',
				'transitionOut' : 'elastic'
		});

		$('#preview_import').submit(function(e){
			if ($('#truncate').get(0).checked)
				if (truncateAuthorized)
				{
					if (!confirm('<?php echo smartyTranslate(array('s'=>'Are you sure that you would like to delete this','js'=>1),$_smarty_tpl);?>
' + ' ' + $.trim($('#entity > option:selected').text().toLowerCase()) + '?'))
						e.preventDefault();
				}
				else
				{
					jAlert('<?php echo smartyTranslate(array('s'=>'You do not have permission to delete here. When the multistore is enabled, only a SuperAdmin can delete all items before an import.','js'=>1),$_smarty_tpl);?>
');
					return false;
				}
		});

		$("select#entity").change(function(){
			if ($("#entity > option:selected").val() == 8 || $("#entity > option:selected").val() == 9)
				$("label[for=truncate],#truncate").hide();
			else
				$("label[for=truncate],#truncate").show();
	
			if ($("#entity > option:selected").val() == 9)
				$(".import_supply_orders_details").show();
			else
			{
				$(".import_supply_orders_details").hide();
				$('input[name=multiple_value_separator]').val('<?php if (isset($_smarty_tpl->tpl_vars['multiple_value_separator_selected']->value)){?><?php echo $_smarty_tpl->tpl_vars['multiple_value_separator_selected']->value;?>
<?php }else{ ?>,<?php }?>');
			}
			if ($("#entity > option:selected").val() == 1)
				$("label[for=match_ref], #match_ref").show();
			else
				$("label[for=match_ref], #match_ref").hide();

			if ($("#entity > option:selected").val() == 1 || $("#entity > option:selected").val() == 0)
				$(".import_products_categories").show();
			else
				$(".import_products_categories").hide();

			if ($("#entity > option:selected").val() == 0 || $("#entity > option:selected").val() == 1 || 
				$("#entity > option:selected").val() == 5 || $("#entity > option:selected").val() == 6)
				$("label[for=regenerate], #regenerate").show()
			else
				$("label[for=regenerate], #regenerate").hide();

			if ($("#entity > option:selected").val() == 0 || $("#entity > option:selected").val() == 1 || $("#entity > option:selected").val() == 3 || $("#entity > option:selected").val() == 5 || $("#entity > option:selected").val() == 6 || $("#entity > option:selected").val() == 7)
				$("label[for=forceIDs], #forceIDs").show();
			else
				$("label[for=forceIDs], #forceIDs").hide();
			$("#entitie").html($("#entity > option:selected").text().toLowerCase());
			$.ajax({
				url: 'ajax.php',
				data: {
					getAvailableFields:1,
					entity: $("#entity").val()
				},
				dataType: 'json',
				success: function(j){
					var fields = "";
					$("#availableFields").empty();
					
					for (var i = 0; i < j.length; i++)
						fields += j[i].field;
	
					$("#availableFields").html(fields);
					activeClueTip();
				},
				error: function(j){}			
			});
		});
		$("select#entity").trigger('change');
		function activeClueTip()
		{
			$('.info_import').cluetip({
				splitTitle: '|',
			    showTitle: false
		 	});
		};	
	});
</script>
<?php }} ?>