<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:50:24
         compiled from "C:\re\wamp\www\prestashop\themes\default\order-address-multishipping-products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:896547e6c60ee3144-61789211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eab562a666733c4de2d0cb200be8557903236cd6' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\themes\\default\\order-address-multishipping-products.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '896547e6c60ee3144-61789211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_list' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c610a6901_68850512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c610a6901_68850512')) {function content_547e6c610a6901_68850512($_smarty_tpl) {?>
<p><?php echo smartyTranslate(array('s'=>'Choose the delivery addresses'),$_smarty_tpl);?>
</p>
<script type="text/javascript">
	CloseTxt = '<?php echo smartyTranslate(array('s'=>'Submit','js'=>1),$_smarty_tpl);?>
';
	QtyChanged = '<?php echo smartyTranslate(array('s'=>'Some product quantities have changed. Please check them','js'=>1),$_smarty_tpl);?>
';
	ShipToAnOtherAddress = '<?php echo smartyTranslate(array('s'=>'Ship to multiple addresses','js'=>1),$_smarty_tpl);?>
';
</script>
<div id="order-detail-content" class="table_block">
	<table id="cart_summary" class="std multishipping-cart">
		<thead>
			<tr>
				<th class="cart_product first_item"><?php echo smartyTranslate(array('s'=>'Product'),$_smarty_tpl);?>
</th>
				<th class="cart_description item"><?php echo smartyTranslate(array('s'=>'Description'),$_smarty_tpl);?>
</th>
				<th class="cart_ref item"><?php echo smartyTranslate(array('s'=>'Ref.'),$_smarty_tpl);?>
</th>
				<th class="cart_quantity item"><?php echo smartyTranslate(array('s'=>'Qty'),$_smarty_tpl);?>
</th>
				<th class="shipping_address last_item"><?php echo smartyTranslate(array('s'=>'Shipping address'),$_smarty_tpl);?>
</th>
				<th class="delete"><?php echo smartyTranslate(array('s'=>''),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
?>
			<?php $_smarty_tpl->tpl_vars['productId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product'], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['productAttributeId'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['quantityDisplayed'] = new Smarty_variable(0, null, 0);?>
			<?php $_smarty_tpl->tpl_vars['odd'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->iteration%2, null, 0);?>
			
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-address-product-line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('productLast'=>$_smarty_tpl->tpl_vars['product']->last,'productFirst'=>$_smarty_tpl->tpl_vars['product']->first), 0);?>

		<?php } ?>
		</tbody>
	</table>
</div>
<?php }} ?>