<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:50:15
         compiled from "C:\re\wamp\www\prestashop\themes\default\mobile\product-prices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8875547e6c571cd386-78952162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acc41c72431afbdcf599f6842ffa52b49f6de380' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\themes\\default\\mobile\\product-prices.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8875547e6c571cd386-78952162',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'priceDisplay' => 0,
    'productPrice' => 0,
    'productPriceWithoutReduction' => 0,
    'packItems' => 0,
    'ecotax_tax_exc' => 0,
    'ecotax_tax_inc' => 0,
    'unit_price' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c575f3c79_87091381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c575f3c79_87091381')) {function content_547e6c575f3c79_87091381($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<div class="content_prices">
	<?php if ($_smarty_tpl->tpl_vars['product']->value->online_only){?>
	<p class="online_only"><?php echo smartyTranslate(array('s'=>'Online only'),$_smarty_tpl);?>
</p>
	<?php }?>
	
	<div class="price">
		<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value||$_smarty_tpl->tpl_vars['priceDisplay']->value==2){?>
			<?php $_smarty_tpl->tpl_vars['productPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPrice(true,@constant('NULL')), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['productPriceWithoutReduction'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(false,@constant('NULL')), null, 0);?>
		<?php }elseif($_smarty_tpl->tpl_vars['priceDisplay']->value==1){?>
			<?php $_smarty_tpl->tpl_vars['productPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPrice(false,@constant('NULL')), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['productPriceWithoutReduction'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true,@constant('NULL')), null, 0);?>
		<?php }?>
	
		<p class="our_price_display">
		<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value>=0&&$_smarty_tpl->tpl_vars['priceDisplay']->value<=2){?>
			<span id="our_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productPrice']->value),$_smarty_tpl);?>
</span>
		<?php }?>
		</p><!-- .our_price_display -->
	
		<?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale){?>
			<span class="on_sale"><?php echo smartyTranslate(array('s'=>'On sale!'),$_smarty_tpl);?>
</span>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==2){?>
			<span id="pretaxe_price"><span id="pretaxe_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->getPrice(false,@constant('NULL'))),$_smarty_tpl);?>
</span>&nbsp;<?php echo smartyTranslate(array('s'=>'Tax excl.'),$_smarty_tpl);?>
</span>
		<?php }?>
		

		<?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']){?>
			<p class="old_price">
			<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value>=0&&$_smarty_tpl->tpl_vars['priceDisplay']->value<=2){?>
				<?php if ($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value>$_smarty_tpl->tpl_vars['productPrice']->value){?>
					<span class="old_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value),$_smarty_tpl);?>
</span>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='percentage'){?>
				<span class="reduction_percent">-<?php echo $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']*100;?>
%</span>
			<?php }elseif($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='amount'){?>
				<span class="reduction_amount_display">-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])),$_smarty_tpl);?>
</span>
			<?php }?>
			
			</p><!-- .old_price -->
		<?php }?>
	
	<?php if (count($_smarty_tpl->tpl_vars['packItems']->value)&&$_smarty_tpl->tpl_vars['productPrice']->value<$_smarty_tpl->tpl_vars['product']->value->getNoPackPrice()){?>
		<p class="pack_price"><?php echo smartyTranslate(array('s'=>'instead of'),$_smarty_tpl);?>
 <span style="text-decoration: line-through;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->getNoPackPrice()),$_smarty_tpl);?>
</span></p>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['product']->value->ecotax!=0){?>
		<p class="price-ecotax"><?php echo smartyTranslate(array('s'=>'include'),$_smarty_tpl);?>
 <span id="ecotax_price_display"><?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==2){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convertAndFormatPrice'][0][0]->convertAndFormatPrice($_smarty_tpl->tpl_vars['ecotax_tax_exc']->value);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convertAndFormatPrice'][0][0]->convertAndFormatPrice($_smarty_tpl->tpl_vars['ecotax_tax_inc']->value);?>
<?php }?></span> <?php echo smartyTranslate(array('s'=>'for green tax'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']){?>
			<br /><?php echo smartyTranslate(array('s'=>'(not impacted by the discount)'),$_smarty_tpl);?>

			<?php }?>
		</p>
	<?php }?>
	
	<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->unity)&&$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio>0.000000){?>
		 <?php echo smarty_function_math(array('equation'=>"pprice / punit_price",'pprice'=>$_smarty_tpl->tpl_vars['productPrice']->value,'punit_price'=>$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio,'assign'=>'unit_price'),$_smarty_tpl);?>

		<p class="unit-price"><span id="unit_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['unit_price']->value),$_smarty_tpl);?>
</span> <?php echo smartyTranslate(array('s'=>'per'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->unity, 'htmlall', 'UTF-8');?>
</p>
	<?php }?>
	</div><!-- .price -->
</div><!-- .content_prices --><?php }} ?>