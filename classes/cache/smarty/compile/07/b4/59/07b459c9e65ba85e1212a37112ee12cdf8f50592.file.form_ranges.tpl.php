<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:49:31
         compiled from "C:\re\wamp\www\prestashop\admin\themes\default\template\controllers\carrier_wizard\helpers\form\form_ranges.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31355547e6c2b866b45-51688268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07b459c9e65ba85e1212a37112ee12cdf8f50592' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\controllers\\carrier_wizard\\helpers\\form\\form_ranges.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31355547e6c2b866b45-51688268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'zones' => 0,
    'ranges' => 0,
    'range' => 0,
    'PS_WEIGHT_UNIT' => 0,
    'currency_sign' => 0,
    'form_id' => 0,
    'change_ranges' => 0,
    'i' => 0,
    'zone' => 0,
    'fields_value' => 0,
    'price_by_range' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c2bd50966_49611228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c2bd50966_49611228')) {function content_547e6c2bd50966_49611228($_smarty_tpl) {?>		<script>var zones_nbr = <?php echo count($_smarty_tpl->tpl_vars['zones']->value)+3;?>
 ; /*corresponds to the third input text (max, min and all)*/</script>
		<div style="float:left" id="zone_ranges">
			<table cellpadding="5" cellspacing="0" id="zones_table">
				<tr class="range_inf">
					<td class="range_type"></td>
					<td class="border_left border_bottom range_sign">>=</td>
					<?php  $_smarty_tpl->tpl_vars['range'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['range']->_loop = false;
 $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ranges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['range']->key => $_smarty_tpl->tpl_vars['range']->value){
$_smarty_tpl->tpl_vars['range']->_loop = true;
 $_smarty_tpl->tpl_vars['r']->value = $_smarty_tpl->tpl_vars['range']->key;
?>
						<td class="border_bottom center"><input name="range_inf[<?php echo intval($_smarty_tpl->tpl_vars['range']->value['id_range']);?>
]" type="text" value="<?php echo sprintf("%.6f",$_smarty_tpl->tpl_vars['range']->value['delimiter1']);?>
" /><sup>*</sup><span class="weight_unit">&nbsp; <?php echo $_smarty_tpl->tpl_vars['PS_WEIGHT_UNIT']->value;?>
</span><span class="price_unit">&nbsp; <?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
</span></td>
					<?php }
if (!$_smarty_tpl->tpl_vars['range']->_loop) {
?>
						<td class="border_bottom center"><input name="range_inf[<?php echo intval($_smarty_tpl->tpl_vars['range']->value['id_range']);?>
]" type="text" /><sup>*</sup><span class="weight_unit">&nbsp; <?php echo $_smarty_tpl->tpl_vars['PS_WEIGHT_UNIT']->value;?>
</span><span class="price_unit">&nbsp; <?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
</span></td>
					<?php } ?>
				</tr>
				<tr class="range_sup">
					<td class="center range_type"></td>
					<td class="border_left range_sign"><</td>
					<?php  $_smarty_tpl->tpl_vars['range'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['range']->_loop = false;
 $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ranges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['range']->key => $_smarty_tpl->tpl_vars['range']->value){
$_smarty_tpl->tpl_vars['range']->_loop = true;
 $_smarty_tpl->tpl_vars['r']->value = $_smarty_tpl->tpl_vars['range']->key;
?>
						<td class="center"><input name="range_sup[<?php echo intval($_smarty_tpl->tpl_vars['range']->value['id_range']);?>
]" type="text" <?php if (isset($_smarty_tpl->tpl_vars['form_id']->value)&&!$_smarty_tpl->tpl_vars['form_id']->value){?> value="" <?php }else{ ?> value="<?php if (isset($_smarty_tpl->tpl_vars['change_ranges']->value)&&$_smarty_tpl->tpl_vars['range']->value['id_range']==0){?> <?php }else{ ?><?php echo sprintf("%.6f",$_smarty_tpl->tpl_vars['range']->value['delimiter2']);?>
<?php }?>" <?php }?>/><sup>*</sup><span class="weight_unit">&nbsp; <?php echo $_smarty_tpl->tpl_vars['PS_WEIGHT_UNIT']->value;?>
</span><span class="price_unit">&nbsp; <?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
</span></td>
					<?php }
if (!$_smarty_tpl->tpl_vars['range']->_loop) {
?>
						<td class="center"><input name="range_sup[<?php echo intval($_smarty_tpl->tpl_vars['range']->value['id_range']);?>
]" type="text" /><sup>*</sup><span class="weight_unit">&nbsp; <?php echo $_smarty_tpl->tpl_vars['PS_WEIGHT_UNIT']->value;?>
</span><span class="price_unit">&nbsp; <?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
</span></td>
					<?php } ?>
				</tr>
				<tr class="fees_all">
					<td class="border_top border_bottom border_bold"><span class="fees_all" <?php if (count($_smarty_tpl->tpl_vars['ranges']->value)==0){?>style="display:none" <?php }?>>All</span></td>
					<td><input type="checkbox" onclick="checkAllZones(this);" ></td>
					<?php  $_smarty_tpl->tpl_vars['range'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['range']->_loop = false;
 $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ranges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['range']->key => $_smarty_tpl->tpl_vars['range']->value){
$_smarty_tpl->tpl_vars['range']->_loop = true;
 $_smarty_tpl->tpl_vars['r']->value = $_smarty_tpl->tpl_vars['range']->key;
?>
						<td class="center border_top border_bottom <?php if ($_smarty_tpl->tpl_vars['range']->value['id_range']!=0){?> validated <?php }?>"  >
							<input type="text" <?php if (isset($_smarty_tpl->tpl_vars['form_id']->value)&&!$_smarty_tpl->tpl_vars['form_id']->value){?> disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['range']->value['id_range']==0){?> style="display:none"<?php }?> /><span class="currency_sign" <?php if ($_smarty_tpl->tpl_vars['range']->value['id_range']==0){?> style="display:none" <?php }?>>&nbsp; <?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
</span>
						</td>
					<?php }
if (!$_smarty_tpl->tpl_vars['range']->_loop) {
?>
						<td class="center border_top border_bottom">
							<input style="display:none" type="text"  /><span class="currency_sign" style="display:none">&nbsp; <?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
</span>
						</td>
					<?php } ?>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['zone'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zone']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['zones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zone']->key => $_smarty_tpl->tpl_vars['zone']->value){
$_smarty_tpl->tpl_vars['zone']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['zone']->key;
?>
				<tr class="fees <?php if ((1 & $_smarty_tpl->tpl_vars['i']->value)){?>alt_row<?php }?>" data-zoneid="<?php echo $_smarty_tpl->tpl_vars['zone']->value['id_zone'];?>
">
					<td><label for="zone_<?php echo $_smarty_tpl->tpl_vars['zone']->value['id_zone'];?>
"><?php echo $_smarty_tpl->tpl_vars['zone']->value['name'];?>
</label></td>
					<td class="zone">
						<input class="input_zone" id="zone_<?php echo $_smarty_tpl->tpl_vars['zone']->value['id_zone'];?>
" name="zone_<?php echo $_smarty_tpl->tpl_vars['zone']->value['id_zone'];?>
" value="1" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value['zones'][$_smarty_tpl->tpl_vars['zone']->value['id_zone']])&&$_smarty_tpl->tpl_vars['fields_value']->value['zones'][$_smarty_tpl->tpl_vars['zone']->value['id_zone']]){?> checked="checked"<?php }?>/>
					</td>
					<?php  $_smarty_tpl->tpl_vars['range'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['range']->_loop = false;
 $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ranges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['range']->key => $_smarty_tpl->tpl_vars['range']->value){
$_smarty_tpl->tpl_vars['range']->_loop = true;
 $_smarty_tpl->tpl_vars['r']->value = $_smarty_tpl->tpl_vars['range']->key;
?>
						<td class="center">
							<input name="fees[<?php echo intval($_smarty_tpl->tpl_vars['zone']->value['id_zone']);?>
][<?php echo intval($_smarty_tpl->tpl_vars['range']->value['id_range']);?>
]" type="text"
							<?php if (!isset($_smarty_tpl->tpl_vars['fields_value']->value['zones'][$_smarty_tpl->tpl_vars['zone']->value['id_zone']])||(isset($_smarty_tpl->tpl_vars['fields_value']->value['zones'][$_smarty_tpl->tpl_vars['zone']->value['id_zone']])&&!$_smarty_tpl->tpl_vars['fields_value']->value['zones'][$_smarty_tpl->tpl_vars['zone']->value['id_zone']])){?> disabled="disabled"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['price_by_range']->value[$_smarty_tpl->tpl_vars['range']->value['id_range']][$_smarty_tpl->tpl_vars['zone']->value['id_zone']])&&$_smarty_tpl->tpl_vars['price_by_range']->value[$_smarty_tpl->tpl_vars['range']->value['id_range']][$_smarty_tpl->tpl_vars['zone']->value['id_zone']]&&isset($_smarty_tpl->tpl_vars['fields_value']->value['zones'][$_smarty_tpl->tpl_vars['zone']->value['id_zone']])&&$_smarty_tpl->tpl_vars['fields_value']->value['zones'][$_smarty_tpl->tpl_vars['zone']->value['id_zone']]){?> value="<?php echo sprintf('%.6f',$_smarty_tpl->tpl_vars['price_by_range']->value[$_smarty_tpl->tpl_vars['range']->value['id_range']][$_smarty_tpl->tpl_vars['zone']->value['id_zone']]);?>
" <?php }else{ ?> value="" <?php }?> /> &nbsp; <?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>

						</td>
					<?php } ?>
				</tr>
				<?php } ?>
				<tr class="delete_range">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<?php  $_smarty_tpl->tpl_vars['range'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['range']->_loop = false;
 $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ranges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['range']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['range']->key => $_smarty_tpl->tpl_vars['range']->value){
$_smarty_tpl->tpl_vars['range']->_loop = true;
 $_smarty_tpl->tpl_vars['r']->value = $_smarty_tpl->tpl_vars['range']->key;
 $_smarty_tpl->tpl_vars['range']->index++;
 $_smarty_tpl->tpl_vars['range']->first = $_smarty_tpl->tpl_vars['range']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ranges']['first'] = $_smarty_tpl->tpl_vars['range']->first;
?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['ranges']['first']){?>
							<td class="center">&nbsp;</td>
						<?php }else{ ?>
							<td class="center"><button class="button"><?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
</button></td>
						<?php }?>
					<?php } ?>
				</tr>
			</table>
		</div>
<?php }} ?>