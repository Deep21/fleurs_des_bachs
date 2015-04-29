<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:49:53
         compiled from "C:\re\wamp\www\prestashop\admin\themes\default\template\helpers\modules_list\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31474547e6c416258e2-40037613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5446ffa734db38a7582d4091cc3961fe647bde9f' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\helpers\\modules_list\\list.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31474547e6c416258e2-40037613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modules_list' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c416bde89_81763981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c416bde89_81763981')) {function content_547e6c416bde89_81763981($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\function.counter.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\function.cycle.php';
?>

<h2 style="margin-top:0"><?php echo smartyTranslate(array('s'=>'Modules list'),$_smarty_tpl);?>
</h2>
<div id="modules_list_container_tab" class="default_modules_list_display_type">
	<ul id="modules_list_container_content">
		<?php if (count($_smarty_tpl->tpl_vars['modules_list']->value)){?>
			<li>
				<?php echo smarty_function_counter(array('start'=>1,'assign'=>"count"),$_smarty_tpl);?>

					<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>	
						<div style="width:400px"><?php ob_start();?><?php echo smarty_function_cycle(array('values'=>",row alt"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class_row'=>$_tmp1), 0);?>
</div>
						<?php if ($_smarty_tpl->tpl_vars['count']->value%3==0){?>
			</li>
			<li>
						<?php }?>
					<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

				<?php } ?>
			</li>
		<?php }else{ ?>
			<tr><td><div style="font-weight:700;margin-top:20px"><?php echo smartyTranslate(array('s'=>'No modules available in this section.'),$_smarty_tpl);?>
</b></td></tr>
		<?php }?>		
	</ul>
</div>
<div class="clear"></div><?php }} ?>