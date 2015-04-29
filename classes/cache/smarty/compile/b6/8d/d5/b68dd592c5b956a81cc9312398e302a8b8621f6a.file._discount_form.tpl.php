<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:49:39
         compiled from "C:\re\wamp\www\prestashop\admin\themes\default\template\controllers\orders\_discount_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6715547e6c335c0c43-16756706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b68dd592c5b956a81cc9312398e302a8b8621f6a' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\controllers\\orders\\_discount_form.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6715547e6c335c0c43-16756706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currency' => 0,
    'order' => 0,
    'invoices_collection' => 0,
    'invoice' => 0,
    'current_id_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c33714a14_59904633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c33714a14_59904633')) {function content_547e6c33714a14_59904633($_smarty_tpl) {?>

	<label><?php echo smartyTranslate(array('s'=>'Name'),$_smarty_tpl);?>
</label>
	<div class="margin-form">
		<input type="text" name="discount_name" value="" />
	</div>

	<label><?php echo smartyTranslate(array('s'=>'Type'),$_smarty_tpl);?>
</label>
	<div class="margin-form">
		<select name="discount_type" id="discount_type">
			<option value="1"><?php echo smartyTranslate(array('s'=>'Percent'),$_smarty_tpl);?>
</option>
			<option value="2"><?php echo smartyTranslate(array('s'=>'Amount'),$_smarty_tpl);?>
</option>
			<option value="3"><?php echo smartyTranslate(array('s'=>'Free shipping'),$_smarty_tpl);?>
</option>
		</select>
	</div>

	<div id="discount_value_field">
		<label><?php echo smartyTranslate(array('s'=>'Value'),$_smarty_tpl);?>
</label>
		<div class="margin-form">
			<?php if (($_smarty_tpl->tpl_vars['currency']->value->format%2)){?>
				<span id="discount_currency_sign" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span>
			<?php }?>
			<input type="text" name="discount_value" size="3" />
			<?php if (!($_smarty_tpl->tpl_vars['currency']->value->format%2)){?>
				<span id="discount_currency_sign" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span>
			<?php }?>
			<span id="discount_percent_symbol">%</span>
			<p class="preference_description" id="discount_value_help" style="width: 95%;display: none;">
				<?php echo smartyTranslate(array('s'=>'This value must include taxes.'),$_smarty_tpl);?>

			</p>
		</div>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['order']->value->hasInvoice()){?>
	<label><?php echo smartyTranslate(array('s'=>'Invoice'),$_smarty_tpl);?>
</label>
	<div class="margin-form">
		<select name="discount_invoice">
			<?php  $_smarty_tpl->tpl_vars['invoice'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invoice']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['invoices_collection']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->key => $_smarty_tpl->tpl_vars['invoice']->value){
$_smarty_tpl->tpl_vars['invoice']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['invoice']->value->getInvoiceNumberFormatted($_smarty_tpl->tpl_vars['current_id_lang']->value);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['invoice']->value->total_paid_tax_incl,'currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency),$_smarty_tpl);?>
</option>
			<?php } ?>
		</select><br />
		<input type="checkbox" name="discount_all_invoices" id="discount_all_invoices" value="1" /> <label class="t" for="discount_all_invoices"><?php echo smartyTranslate(array('s'=>'Apply on all invoices'),$_smarty_tpl);?>
</label>
		<p class="preference_description" style="width: 95%">
			<?php echo smartyTranslate(array('s'=>'If you chooses to create this discount for all invoices, only one discount will be created per order invoice.'),$_smarty_tpl);?>

		</p>
	</div>
	<?php }?>

	<p class="center">
		<input class="button" type="submit" name="submitNewVoucher" value="<?php echo smartyTranslate(array('s'=>'Add'),$_smarty_tpl);?>
" />&nbsp;
		<a href="#" id="cancel_add_voucher"><?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>
</a>
	</p>

<?php }} ?>