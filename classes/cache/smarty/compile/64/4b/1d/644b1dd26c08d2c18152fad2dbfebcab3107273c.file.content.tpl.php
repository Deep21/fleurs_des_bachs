<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:49:46
         compiled from "C:\re\wamp\www\prestashop\admin\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16773547e6c3a68d771-54987417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '644b1dd26c08d2c18152fad2dbfebcab3107273c' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16773547e6c3a68d771-54987417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toolbar_btn' => 0,
    'toolbar_scroll' => 0,
    'title' => 0,
    'selected_tree_id' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c3a6f6f19_84108255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c3a6f6f19_84108255')) {function content_547e6c3a6f6f19_84108255($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['toolbar_btn']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('toolbar_btn'=>$_smarty_tpl->tpl_vars['toolbar_btn']->value,'toolbar_scroll'=>$_smarty_tpl->tpl_vars['toolbar_scroll']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

<?php }?>

<div class="multishop-left">
	<div class="multishop-title"><?php echo smartyTranslate(array('s'=>'Multistore tree'),$_smarty_tpl);?>
</div>
	<?php echo $_smarty_tpl->getSubTemplate ("controllers/shop/tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('selected_tree_id'=>$_smarty_tpl->tpl_vars['selected_tree_id']->value), 0);?>

</div>
<div class="multishop-right"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>

<script type="text/javascript">
	$().ready(function(){
		if (parseInt($('.multishop-right').css('height')) > 200)
			$('.multishop-left').css('height', $('.multishop-right').css('height'));
	})
</script><?php }} ?>