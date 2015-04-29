<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:49:40
         compiled from "C:\re\wamp\www\prestashop\admin\themes\default\template\controllers\payment\restrictions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30576547e6c34e92ee7-42625883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3331cf0548f72781b384fe5ae65a1dc121a4d60c' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\controllers\\payment\\restrictions.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30576547e6c34e92ee7-42625883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_submit' => 0,
    'list' => 0,
    'payment_modules' => 0,
    'module' => 0,
    'ps_base_uri' => 0,
    'item' => 0,
    'key_module' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c35403e08_57164018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c35403e08_57164018')) {function content_547e6c35403e08_57164018($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\function.cycle.php';
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['url_submit']->value;?>
" method="post" id="form_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
">
	<fieldset>
		<legend><img src="../img/admin/<?php echo $_smarty_tpl->tpl_vars['list']->value['icon'];?>
.gif" /><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</legend>
		<p><?php echo $_smarty_tpl->tpl_vars['list']->value['desc'];?>
<p>
		<table cellpadding="0" cellspacing="0" class="table">
			<tr>
				<th style="width: 200px"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</th>
				<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['module']->value->active){?>
						<th>
							<?php if ($_smarty_tpl->tpl_vars['list']->value['name_id']!='currency'||$_smarty_tpl->tpl_vars['module']->value->currencies_mode=='checkbox'){?>
								<input type="hidden" id="checkedBox_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" value="checked"/>
								<a href="javascript:checkPaymentBoxes('<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
')" style="text-decoration:none;">
							<?php }?>
							&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['ps_base_uri']->value;?>
modules/<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
/logo.gif" alt="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" title="<?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
"/>
							<?php if ($_smarty_tpl->tpl_vars['list']->value['name_id']!='currency'||$_smarty_tpl->tpl_vars['module']->value->currencies_mode=='checkbox'){?>
								</a>
							<?php }?>
						</th>
					<?php }?>
				<?php } ?>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>",alt_row"),$_smarty_tpl);?>
">
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['key_module'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['payment_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['key_module']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['module']->value->active){?>
						<td style="text-align: center">
							<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('null', null, 0);?>
							<?php if (!$_smarty_tpl->tpl_vars['item']->value['check_list'][$_smarty_tpl->tpl_vars['key_module']->value]){?>
								
							<?php }elseif($_smarty_tpl->tpl_vars['list']->value['name_id']==='currency'){?>
								<?php if ($_smarty_tpl->tpl_vars['module']->value->currencies&&$_smarty_tpl->tpl_vars['module']->value->currencies_mode=='checkbox'){?>
									<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('checkbox', null, 0);?>
								<?php }elseif($_smarty_tpl->tpl_vars['module']->value->currencies&&$_smarty_tpl->tpl_vars['module']->value->currencies_mode=='radio'){?>
									<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('radio', null, 0);?>
								<?php }?>
							<?php }else{ ?>
								<?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable('checkbox', null, 0);?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['type']->value!='null'){?>
								<input type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['list']->value['identifier']];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['check_list'][$_smarty_tpl->tpl_vars['key_module']->value]=='checked'){?>checked="checked"<?php }?>/>
							<?php }else{ ?>
                                <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['list']->value['identifier']];?>
"/>--
							<?php }?>
						</td>
					<?php }?>
				<?php } ?>
				</tr>
			<?php } ?>
			<?php if ($_smarty_tpl->tpl_vars['list']->value['name_id']==='currency'){?>
				<tr class="<?php echo smarty_function_cycle(array('values'=>",alt_row"),$_smarty_tpl);?>
">
					<td><?php echo smartyTranslate(array('s'=>'Customer currency'),$_smarty_tpl);?>
</td>
					<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['module']->value->active){?>
							<td style="text-align: center"><?php if ($_smarty_tpl->tpl_vars['module']->value->currencies&&$_smarty_tpl->tpl_vars['module']->value->currencies_mode=='radio'){?><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
[]" value="-1"<?php if (in_array(-1,$_smarty_tpl->tpl_vars['module']->value->{$_smarty_tpl->tpl_vars['list']->value['name_id']})){?> checked="checked"<?php }?> /><?php }else{ ?>--<?php }?></td>
						<?php }?>
					<?php } ?>
				</tr>
				<tr class="<?php echo smarty_function_cycle(array('values'=>",alt_row"),$_smarty_tpl);?>
">
					<td><?php echo smartyTranslate(array('s'=>'Shop default currency'),$_smarty_tpl);?>
</td>
					<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['module']->value->active){?>
							<td style="text-align: center"><?php if ($_smarty_tpl->tpl_vars['module']->value->currencies&&$_smarty_tpl->tpl_vars['module']->value->currencies_mode=='radio'){?><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
_<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
[]" value="-2"<?php if (in_array(-2,$_smarty_tpl->tpl_vars['module']->value->{$_smarty_tpl->tpl_vars['list']->value['name_id']})){?> checked="checked"<?php }?> /><?php }else{ ?>--<?php }?></td>
						<?php }?>
					<?php } ?>
				</tr>
			<?php }?>
		</table>
		<div><input type="submit" class="button space" name="submitModule<?php echo $_smarty_tpl->tpl_vars['list']->value['name_id'];?>
" value="<?php echo smartyTranslate(array('s'=>'Save restrictions'),$_smarty_tpl);?>
" /></div>
	</fieldset>
</form>
<?php }} ?>