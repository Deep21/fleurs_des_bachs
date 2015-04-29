<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:50:06
         compiled from "C:\re\wamp\www\prestashop\themes\default\mobile\discount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31130547e6c4e476d75-53843662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '169dd7bbeb2fd359e80aebbf5542fd45ac4a668a' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\themes\\default\\mobile\\discount.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31130547e6c4e476d75-53843662',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'discount' => 0,
    'nbDiscounts' => 0,
    'discountDetail' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c4e716c11_91330372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c4e716c11_91330372')) {function content_547e6c4e716c11_91330372($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_title', null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'My vouchers'),$_smarty_tpl);?>
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
	
	<?php if (isset($_smarty_tpl->tpl_vars['discount']->value)&&count($_smarty_tpl->tpl_vars['discount']->value)&&$_smarty_tpl->tpl_vars['nbDiscounts']->value){?>
	<table class="discount std table_block">
		<thead>
			<tr>
				<th class="discount_code first_item"><?php echo smartyTranslate(array('s'=>'Code'),$_smarty_tpl);?>
</th>
				<th class="discount_description item"><?php echo smartyTranslate(array('s'=>'Description'),$_smarty_tpl);?>
</th>
				<th class="discount_quantity item"><?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>
</th>
				<th class="discount_value item"><?php echo smartyTranslate(array('s'=>'Value'),$_smarty_tpl);?>
*</th>
				<th class="discount_minimum item"><?php echo smartyTranslate(array('s'=>'Minimum'),$_smarty_tpl);?>
</th>
				<th class="discount_cumulative item"><?php echo smartyTranslate(array('s'=>'Cumulative'),$_smarty_tpl);?>
</th>
				<th class="discount_expiration_date last_item"><?php echo smartyTranslate(array('s'=>'Expiration date'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['discountDetail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discountDetail']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discount']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['discountDetail']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['discountDetail']->iteration=0;
 $_smarty_tpl->tpl_vars['discountDetail']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['discountDetail']->key => $_smarty_tpl->tpl_vars['discountDetail']->value){
$_smarty_tpl->tpl_vars['discountDetail']->_loop = true;
 $_smarty_tpl->tpl_vars['discountDetail']->iteration++;
 $_smarty_tpl->tpl_vars['discountDetail']->index++;
 $_smarty_tpl->tpl_vars['discountDetail']->first = $_smarty_tpl->tpl_vars['discountDetail']->index === 0;
 $_smarty_tpl->tpl_vars['discountDetail']->last = $_smarty_tpl->tpl_vars['discountDetail']->iteration === $_smarty_tpl->tpl_vars['discountDetail']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['discountDetail']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['discountDetail']->last;
?>
			<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }else{ ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2){?>alternate_item<?php }?>">
				<td class="discount_code"><?php echo $_smarty_tpl->tpl_vars['discountDetail']->value['name'];?>
</td>
				<td class="discount_description"><?php echo $_smarty_tpl->tpl_vars['discountDetail']->value['description'];?>
</td>
				<td class="discount_quantity"><?php echo $_smarty_tpl->tpl_vars['discountDetail']->value['quantity_for_user'];?>
</td>
				<td class="discount_value">
					<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['id_discount_type']==1){?>
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['discountDetail']->value['value'], 'htmlall', 'UTF-8');?>
%
					<?php }elseif($_smarty_tpl->tpl_vars['discountDetail']->value['id_discount_type']==2){?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['discountDetail']->value['value']),$_smarty_tpl);?>

					<?php }else{ ?>
						<?php echo smartyTranslate(array('s'=>'Free shipping'),$_smarty_tpl);?>

					<?php }?>
				</td>
				<td class="discount_minimum">
					<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['minimal']==0){?>
						<?php echo smartyTranslate(array('s'=>'None'),$_smarty_tpl);?>

					<?php }else{ ?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['discountDetail']->value['minimal']),$_smarty_tpl);?>

					<?php }?>
				</td>
				<td class="discount_cumulative">
					<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['cumulable']==1){?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/yes.gif" alt="<?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
" class="icon" /> <?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>

					<?php }else{ ?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/no.gif" alt="<?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
" class="icon" valign="middle" /> <?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>

					<?php }?>
				</td>
				<td class="discount_expiration_date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['discountDetail']->value['date_to']),$_smarty_tpl);?>
</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	<p>
		*<?php echo smartyTranslate(array('s'=>'Tax included'),$_smarty_tpl);?>

	</p>
	<?php }else{ ?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'You do not have any vouchers.'),$_smarty_tpl);?>
</p>
	<?php }?>
	
</div><!-- /content -->
<?php }} ?>