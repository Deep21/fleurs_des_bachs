<?php /* Smarty version Smarty-3.1.14, created on 2015-02-26 13:38:45
         compiled from "C:\re\wamp\www\prestashop\modules\paypal\views\templates\admin\admin_order\refund.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2025654ef13d5cfa5a1-65708080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6882f1ea4fa361f56f903464e3078cbe61d0d1d' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\modules\\paypal\\views\\templates\\admin\\admin_order\\refund.tpl',
      1 => 1424901161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2025654ef13d5cfa5a1-65708080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'module_name' => 0,
    'params' => 0,
    'ps_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54ef13d5efe023_77539009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ef13d5efe023_77539009')) {function content_54ef13d5efe023_77539009($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<?php if (@constant('_PS_VERSION_')>=1.6){?>
<div class="row">
	<div class="col-lg-12">
		<div class="panel">
			<div class="panel-heading"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/logo.gif" alt="" /> <?php echo smartyTranslate(array('s'=>'PayPal Refund','mod'=>'paypal'),$_smarty_tpl);?>
</div>
			<form method="post" action="<?php echo mb_convert_encoding(htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
				<input type="hidden" name="id_order" value="<?php echo intval($_smarty_tpl->tpl_vars['params']->value['id_order']);?>
" />
				<p><b><?php echo smartyTranslate(array('s'=>'Information:','mod'=>'paypal'),$_smarty_tpl);?>
</b> <?php echo smartyTranslate(array('s'=>'Payment accepted','mod'=>'paypal'),$_smarty_tpl);?>
</p>
				<p><b><?php echo smartyTranslate(array('s'=>'Information:','mod'=>'paypal'),$_smarty_tpl);?>
</b> <?php echo smartyTranslate(array('s'=>'When you refund a product, a partial refund is made unless you select "Generate a voucher".','mod'=>'paypal'),$_smarty_tpl);?>
</p>
				<p class="center">
					<button type="submit" class="btn btn-default" name="submitPayPalRefund" onclick="if (!confirm('<?php echo smartyTranslate(array('s'=>'Are you sure?','mod'=>'paypal'),$_smarty_tpl);?>
'))return false;">
						<i class="icon-undo"></i>
						<?php echo smartyTranslate(array('s'=>'Refund total transaction','mod'=>'paypal'),$_smarty_tpl);?>

					</button>
				</p>
			</form>
		</div>
	</div>
</div>
<?php }else{ ?>
<br />
<fieldset <?php if (isset($_smarty_tpl->tpl_vars['ps_version']->value)&&($_smarty_tpl->tpl_vars['ps_version']->value<'1.5')){?>style="width: 400px"<?php }?>>
	<legend><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/logo.gif" alt="" /><?php echo smartyTranslate(array('s'=>'PayPal Refund','mod'=>'paypal'),$_smarty_tpl);?>
</legend>
	<p><b><?php echo smartyTranslate(array('s'=>'Information:','mod'=>'paypal'),$_smarty_tpl);?>
</b> <?php echo smartyTranslate(array('s'=>'Payment accepted','mod'=>'paypal'),$_smarty_tpl);?>
</p>
	<p><b><?php echo smartyTranslate(array('s'=>'Information:','mod'=>'paypal'),$_smarty_tpl);?>
</b> <?php echo smartyTranslate(array('s'=>'When you refund a product, a partial refund is made unless you select "Generate a voucher".','mod'=>'paypal'),$_smarty_tpl);?>
</p>
	<form method="post" action="<?php echo smarty_modifier_escape($_SERVER['REQUEST_URI'], 'htmlall', 'UTF-8');?>
">
		<input type="hidden" name="id_order" value="<?php echo intval($_smarty_tpl->tpl_vars['params']->value['id_order']);?>
" />
		<p class="center">
			<input type="submit" class="button" name="submitPayPalRefund" value="<?php echo smartyTranslate(array('s'=>'Refund total transaction','mod'=>'paypal'),$_smarty_tpl);?>
" onclick="if (!confirm('<?php echo smartyTranslate(array('s'=>'Are you sure?','mod'=>'paypal'),$_smarty_tpl);?>
'))return false;" />
		</p>
	</form>
</fieldset>

<?php }?>
<?php }} ?>