<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:49:42
         compiled from "C:\re\wamp\www\prestashop\admin\themes\default\template\controllers\products\images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31751547e6c3661b495-81228420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f78af940f6e5ad04ac722b5be612c277dcf1924' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\controllers\\products\\images.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31751547e6c3661b495-81228420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
    'product' => 0,
    'countImages' => 0,
    'id_image' => 0,
    'languages' => 0,
    'language' => 0,
    'max_image_size' => 0,
    'shops' => 0,
    'shop' => 0,
    'iso_lang' => 0,
    'imageType' => 0,
    'token' => 0,
    'table' => 0,
    'current_shop_id' => 0,
    'images' => 0,
    'image' => 0,
    'default_language' => 0,
    'id_category_default' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c36aa3822_26459365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c36aa3822_26459365')) {function content_547e6c36aa3822_26459365($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['id_product']->value)&&isset($_smarty_tpl->tpl_vars['product']->value)){?>
	<input type="hidden" name="submitted_tabs[]" value="Images" />
	<h4 class="tab" >2. <?php echo smartyTranslate(array('s'=>'Images'),$_smarty_tpl);?>
 (<span id="countImage"><?php echo $_smarty_tpl->tpl_vars['countImages']->value;?>
</span>)</h4>
	<h4><?php if (isset($_smarty_tpl->tpl_vars['id_image']->value)){?><?php echo smartyTranslate(array('s'=>'Edit this product image'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Add a new image to this product'),$_smarty_tpl);?>
<?php }?></h4>	<div class="separation"></div><br />

	<table cellpadding="5" style="width:100%">
		<tr>
			<td class="col-left">
				<label><?php echo smartyTranslate(array('s'=>'Legend:'),$_smarty_tpl);?>
</label>
			</td>
			<td style="padding-bottom:5px;" class="translatable">
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
				<div class="lang_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" style="<?php if (!$_smarty_tpl->tpl_vars['language']->value['is_default']){?>display: none;<?php }?> float: left;">
					<input class="updateCurrentText" size="43" type="text" <?php if (!$_smarty_tpl->tpl_vars['product']->value->id){?>disabled="disabled"<?php }?> id="legend_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" name="legend_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name[$_smarty_tpl->tpl_vars['language']->value['id_lang']], 'htmlall', 'UTF-8');?>
"/>
					<span class="hint" name="help_box"><?php echo smartyTranslate(array('s'=>'Invalid characters:'),$_smarty_tpl);?>
 <>;=#{}<span class="hint-pointer">&nbsp;</span></span>
				</div>
			<?php } ?>
			</td>
		</tr>
		<tr>
			<td class="col-left"><label class="file_upload_label"><?php echo smartyTranslate(array('s'=>'File:'),$_smarty_tpl);?>
</label></td>
			<td style="padding-bottom:5px;">
				<div id="file-uploader">
					<noscript>
						<p><?php echo smartyTranslate(array('s'=>'Please enable JavaScript to use file uploader:'),$_smarty_tpl);?>
</p>
					</noscript>
				</div>
				<div id="progressBarImage" class="progressBarImage"></div>
				<div id="showCounter" style="display:none;"><span id="imageUpload">0</span><span id="imageTotal">0</span></div>
					<p class="preference_description" style="clear: both;">
						<?php echo smartyTranslate(array('s'=>'Format:'),$_smarty_tpl);?>
 JPG, GIF, PNG. <?php echo smartyTranslate(array('s'=>'Filesize:'),$_smarty_tpl);?>
 <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['max_image_size']->value);?>
 <?php echo smartyTranslate(array('s'=>'MB max.'),$_smarty_tpl);?>

					</p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align:center;">
				<input type="hidden" name="resizer" value="auto" />
					<?php if (Tools::getValue('id_image')){?><input type="hidden" name="id_image" value="<?php echo intval(Tools::getValue('id_image'));?>
" /><?php }?>
			</td>
		</tr>
		<tr><td colspan="2" style="padding-bottom:10px;"><div class="separation"></div></td></tr>
		<tr>
			<td colspan="2">
				<table cellspacing="0" cellpadding="0" class="table tableDnD" id="imageTable">
						<thead>
						<tr class="nodrag nodrop"> 
							<th style="width: 100px;"><?php echo smartyTranslate(array('s'=>'Image'),$_smarty_tpl);?>
</th>
							<th><?php echo smartyTranslate(array('s'=>'Legend'),$_smarty_tpl);?>
</th>
							<th><?php echo smartyTranslate(array('s'=>'Position'),$_smarty_tpl);?>
</th>
							<?php if ($_smarty_tpl->tpl_vars['shops']->value){?>
							<?php  $_smarty_tpl->tpl_vars['shop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shops']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shop']->key => $_smarty_tpl->tpl_vars['shop']->value){
$_smarty_tpl->tpl_vars['shop']->_loop = true;
?>
								<th><?php echo $_smarty_tpl->tpl_vars['shop']->value['name'];?>
</th>
							<?php } ?>
							<?php }?>
							<th><?php echo smartyTranslate(array('s'=>'Cover'),$_smarty_tpl);?>
</th>
							<th><?php echo smartyTranslate(array('s'=>'Action'),$_smarty_tpl);?>
</th>
						</tr>
						</thead>
						<tbody id="imageList">
						</tbody>
				</table>
			</td>
		</tr>
	</table>

	<table id="lineType" style="display:none;">
		<tr id="image_id">
			<td style="padding: 4px;">
				<a href="<?php echo @constant('_THEME_PROD_DIR_');?>
image_path.jpg" class="fancybox">
					<img src="<?php echo @constant('_THEME_PROD_DIR_');?>
<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
-default-<?php echo $_smarty_tpl->tpl_vars['imageType']->value;?>
.jpg" alt="legend" title="legend" />
				</a>
			</td>
			<td>legend</td>
			<td id="td_image_id" class="pointer dragHandle center positionImage">
				image_position
			</td>
			<?php if ($_smarty_tpl->tpl_vars['shops']->value){?>
				<?php  $_smarty_tpl->tpl_vars['shop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shops']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shop']->key => $_smarty_tpl->tpl_vars['shop']->value){
$_smarty_tpl->tpl_vars['shop']->_loop = true;
?>
						<td class="center">
						<input type="checkbox" class="image_shop" name="id_image" id="<?php echo $_smarty_tpl->tpl_vars['shop']->value['id_shop'];?>
image_id" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['id_shop'];?>
" />
						</td>
				<?php } ?>
			<?php }?>
			<td class="center cover"><a href="#">
				<img class="covered" src="../img/admin/blank.gif" alt="e" /></a>
			</td>
			<td class="center">
				<a href="#" class="delete_product_image" >
					<img src="../img/admin/delete.gif" alt="<?php echo smartyTranslate(array('s'=>'Delete this image'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Delete this image'),$_smarty_tpl);?>
" />
				</a>
			</td>
		</tr>
	</table>
	<script type="text/javascript">
		var upbutton = '<?php echo smartyTranslate(array('s'=>'Upload an image'),$_smarty_tpl);?>
';
		var token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
		var come_from = '<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
';
		var success_add =  '<?php echo smartyTranslate(array('s'=>'The image has been successfully added.'),$_smarty_tpl);?>
';
		var id_tmp = 0;
		var current_shop_id = <?php echo intval($_smarty_tpl->tpl_vars['current_shop_id']->value);?>
;
		
		//Ready Function
		$(document).ready(function(){
			
			<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
				assoc = "{";
				<?php if ($_smarty_tpl->tpl_vars['shops']->value){?>
					<?php  $_smarty_tpl->tpl_vars['shop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shops']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shop']->key => $_smarty_tpl->tpl_vars['shop']->value){
$_smarty_tpl->tpl_vars['shop']->_loop = true;
?>
						assoc += '"<?php echo $_smarty_tpl->tpl_vars['shop']->value['id_shop'];?>
" : <?php if ($_smarty_tpl->tpl_vars['image']->value->isAssociatedToShop($_smarty_tpl->tpl_vars['shop']->value['id_shop'])){?>1<?php }else{ ?>0<?php }?>,';
					<?php } ?>
				<?php }?>
				if (assoc != "{")
				{
					assoc = assoc.slice(0, -1);
					assoc += "}";
					assoc = jQuery.parseJSON(assoc);
				}
				else
					assoc = false;
				imageLine(<?php echo $_smarty_tpl->tpl_vars['image']->value->id;?>
, "<?php echo $_smarty_tpl->tpl_vars['image']->value->getExistingImgPath();?>
", <?php echo $_smarty_tpl->tpl_vars['image']->value->position;?>
, "<?php if ($_smarty_tpl->tpl_vars['image']->value->cover){?>enabled<?php }else{ ?>forbbiden<?php }?>", assoc, "<?php echo addcslashes($_smarty_tpl->tpl_vars['image']->value->legend[$_smarty_tpl->tpl_vars['default_language']->value],'\"');?>
");
			<?php } ?>
			
			$("#imageTable").tableDnD(
			{
				onDrop: function(table, row) {
				current = $(row).attr("id");
				stop = false;
				image_up = "{";
				$("#imageList").find("tr").each(function(i) {
					$("#td_" +  $(this).attr("id")).html(i + 1);
					if (!stop || (i + 1) == 2)
						image_up += '"' + $(this).attr("id") + '" : ' + (i + 1) + ',';
				});
				image_up = image_up.slice(0, -1);
				image_up += "}";
				updateImagePosition(image_up);
				}
			});
		
			var filecheck = 1;
			var params = new Array;
			params['id_product'] = <?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
;
			params['id_category'] = <?php echo intval($_smarty_tpl->tpl_vars['id_category_default']->value);?>
;
			params['token'] = "<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
";
			params['tab'] = "AdminProducts";
			params['action'] = "addImage";
			params['ajax'] = 1;
			uploader = new qq.FileUploader(
			{
				element: document.getElementById("file-uploader"),
				action: "ajax-tab.php",
				debug: false,
				onComplete: function(id, fileName, responseJSON)
				{
					var percent = ((filecheck * 100) / nbfile);
					$("#progressBarImage").progressbar({value: percent});
					if (percent != 100)
					{
						$("#imageUpload").html(parseInt(filecheck));
						$("#imageTotal").html(" / " + parseInt(nbfile) + " <?php echo smartyTranslate(array('s'=>'Images'),$_smarty_tpl);?>
");
						$("#progressBarImage").show();
						$("#showCounter").show();
					}
					else
					{
						$("#progressBarImage").progressbar({value: 0});
						$("#progressBarImage").hide();
						$("#showCounter").hide();
						nbfile = 0;
						filecheck = 0;
					}
					if (responseJSON.status == 'ok')
					{
						cover = "forbbiden";
						if (responseJSON.cover == "1")
							cover = "enabled";
						imageLine(responseJSON.id, responseJSON.path, responseJSON.position, cover, responseJSON.shops, responseJSON.legend[<?php echo intval($_smarty_tpl->tpl_vars['default_language']->value);?>
])
						$("#imageTable tr:last").after(responseJSON.html);
						$("#countImage").html(parseInt($("#countImage").html()) + 1);
						$("#img" + id).remove();
						$("#imageTable").tableDnDUpdate();
						showSuccessMessage(responseJSON.name + " " + success_add);
					}
					else
						showErrorMessage(responseJSON.error);
					filecheck++;
				},
				onSubmit: function(id, filename)
				{
					$('input[id^="legend_"]').each(function()
					{
						id = $(this).prop("id").replace("legend_", "legend[") + "]";
						params[id] = $(this).val();
					});
					uploader.setParams(params);					
					$("#imageTable").show();
					$("#listImage").append("<li id='img"+id+"'><div class=\"float\" >" + filename + "</div></div><a style=\"margin-left:10px\"href=\"javascript:delQueue(" + id +");\"><img src=\"../img/admin/disabled.gif\" alt=\"\" border=\"0\"></a><p class=\"errorImg\"></p></li>");
				}
			});

			/**
			 * on success function 
			 */
			function afterDeleteProductImage(data)
			{
				data = $.parseJSON(data);
				if (data)
				{
					cover = 0;
					id = data.content.id;
					if(data.status == 'ok')
					{
						if ($("#" + id).find(".covered").attr("src") == "../img/admin/enabled.gif")
							cover = 1;
						$("#" + id).remove();
					}
					if (cover)
						$("#imageTable tr").eq(1).find(".covered").attr("src", "../img/admin/enabled.gif");
					$("#countImage").html(parseInt($("#countImage").html()) - 1);
					refreshImagePositions($("#imageTable"));
					
					showSuccessMessage(data.confirmations);

				}
			}

			$('.delete_product_image').die().live('click', function(e)
			{
				e.preventDefault();
				id = $(this).parent().parent().attr('id');
				if (confirm("<?php echo smartyTranslate(array('s'=>'Are you sure?','js'=>1),$_smarty_tpl);?>
"))
				doAdminAjax({
						"action":"deleteProductImage",
						"id_image":id,
						"id_product" : <?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
,
						"id_category" : <?php echo $_smarty_tpl->tpl_vars['id_category_default']->value;?>
,
						"token" : "<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
",
						"tab" : "AdminProducts",
						"ajax" : 1 }, afterDeleteProductImage
				);
			});
			
			$('.covered').die().live('click', function(e)
			{
				e.preventDefault();
				id = $(this).parent().parent().parent().attr('id');
				$("#imageList .cover img").each( function(i){
					$(this).attr("src", $(this).attr("src").replace("enabled", "forbbiden"));
				});
				$(this).attr("src", $(this).attr("src").replace("forbbiden", "enabled"));

				if (current_shop_id != 0)
					$('#'+current_shop_id+id).attr('check', true);
				else
					$(this).parent().parent().parent().children('td input').attr('check', true);
				doAdminAjax({
					"action":"UpdateCover",
					"id_image":id,
					"id_product" : <?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
,
					"token" : "<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
",
					"controller" : "AdminProducts",
					"ajax" : 1 }
				);
				
			});
			
			$('.image_shop').die().live('click', function()
			{
				active = false;
				if ($(this).attr("checked"))
					active = true;
				id = $(this).parent().parent().attr('id');
				id_shop = $(this).attr("id").replace(id, "");
				doAdminAjax(
				{
					"action":"UpdateProductImageShopAsso",
					"id_image":id,
					"id_product":id_product,
					"id_shop": id_shop,
					"active":active,
					"token" : "<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
",
					"tab" : "AdminProducts",
					"ajax" : 1 
				});
			});
			
			//function	
			function updateImagePosition(json)
			{
				doAdminAjax(
				{
					"action":"updateImagePosition",
					"json":json,
					"token" : "<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
",
					"tab" : "AdminProducts",
					"ajax" : 1
				});
	
			}
			
			function delQueue(id)
			{
				$("#img" + id).fadeOut("slow");
				$("#img" + id).remove();
			}
			
			function imageLine(id, path, position, cover, shops, legend)
			{
				line = $("#lineType").html();
				line = line.replace(/image_id/g, id);
				line = line.replace(/[a-z]{0,2}-default/g, path);
				line = line.replace(/image_path/g, path);
				line = line.replace(/image_position/g, position);
				line = line.replace(/legend/g, legend);
				line = line.replace(/blank/g, cover);
				line = line.replace(/<tbody>/gi, "");
				line = line.replace(/<\/tbody>/gi, "");

				if (shops != false)
				{
					$.each(shops, function(key, value){
						if (value == 1)
							line = line.replace('id="' + key + '' + id + '"','id="' + key + '' + id + '" checked=checked');
					});
				}

				$("#imageList").append(line);
			}
			$('.fancybox').fancybox();
		});
		
	</script>
<?php }?>
<?php }} ?>