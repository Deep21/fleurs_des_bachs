<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:50:06
         compiled from "C:\re\wamp\www\prestashop\themes\default\mobile\history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5478547e6c4ec46f42-17592748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85f179c1c06497cf3aa4c3f46c35194825c0a916' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\themes\\default\\mobile\\history.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5478547e6c4ec46f42-17592748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'slowValidation' => 0,
    'orders' => 0,
    'order' => 0,
    'id_order' => 0,
    'img_dir' => 0,
    'invoiceAllowed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c4f025888_58499958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c4f025888_58499958')) {function content_547e6c4f025888_58499958($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_title', null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Order history'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ('./page-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div data-role="content" id="content">
	<a data-role="button" data-icon="arrow-l" data-theme="a" data-mini="true" data-inline="true" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a>

	<p><?php echo smartyTranslate(array('s'=>'Here are the orders you\'ve placed since your account was created.'),$_smarty_tpl);?>
.</p>

	<?php if ($_smarty_tpl->tpl_vars['slowValidation']->value){?><p class="warning"><?php echo smartyTranslate(array('s'=>'If you have just placed an order, it may take a few minutes for it to be validated. Please refresh this page if your order is missing.'),$_smarty_tpl);?>
</p><?php }?>

	<div class="block-center" id="block-history">
		<?php if ($_smarty_tpl->tpl_vars['orders']->value&&count($_smarty_tpl->tpl_vars['orders']->value)){?>
		<ul data-role="listview" data-theme="c" data-inset="true" data-split-theme="c" data-split-icon="prestashop-pdf">
		<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value){
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
			<li>
				<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["id_order"] = new Smarty_variable($_tmp1, null, 0);?>
				<a class="color-myaccount" id="order-<?php echo $_smarty_tpl->tpl_vars['id_order']->value;?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true,null,"id_order=".((string)$_smarty_tpl->tpl_vars['id_order']->value)), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false">
					<?php if (isset($_smarty_tpl->tpl_vars['order']->value['invoice'])&&$_smarty_tpl->tpl_vars['order']->value['invoice']&&isset($_smarty_tpl->tpl_vars['order']->value['virtual'])&&$_smarty_tpl->tpl_vars['order']->value['virtual']){?><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/download_product.gif" class="icon" alt="<?php echo smartyTranslate(array('s'=>'Products to download'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Products to download'),$_smarty_tpl);?>
" /><?php }?>
					<h3><?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
<?php echo sprintf("%06d",$_smarty_tpl->tpl_vars['order']->value['id_order']);?>
</h3>
					<p><strong><?php echo smartyTranslate(array('s'=>'Total price'),$_smarty_tpl);?>
</strong> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['order']->value['total_paid'],'currency'=>$_smarty_tpl->tpl_vars['order']->value['id_currency'],'no_utf8'=>false,'convert'=>false),$_smarty_tpl);?>
</p>
					<p><strong><?php echo smartyTranslate(array('s'=>'Payment: '),$_smarty_tpl);?>
</strong> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['order']->value['payment'], 'htmlall', 'UTF-8');?>
</p>
					<p><strong><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</strong> <?php if (isset($_smarty_tpl->tpl_vars['order']->value['order_state'])){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['order']->value['order_state'], 'htmlall', 'UTF-8');?>
<?php }?></p>
					<span class="ui-li-aside"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</span>
				</a>
				<?php if ((isset($_smarty_tpl->tpl_vars['order']->value['invoice'])&&$_smarty_tpl->tpl_vars['order']->value['invoice']&&isset($_smarty_tpl->tpl_vars['order']->value['invoice_number'])&&$_smarty_tpl->tpl_vars['order']->value['invoice_number'])&&isset($_smarty_tpl->tpl_vars['invoiceAllowed']->value)&&$_smarty_tpl->tpl_vars['invoiceAllowed']->value==true){?>
				<a rel="external" data-iconshadow="false" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true,null,"id_order=".((string)$_smarty_tpl->tpl_vars['order']->value['id_order'])), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Invoice'),$_smarty_tpl);?>
" data-ajax="false">
					<?php echo smartyTranslate(array('s'=>'PDF'),$_smarty_tpl);?>

				</a>
				<?php }?>
			</li>
		<?php } ?>
		</ul>
		<?php }else{ ?>
			<p class="warning"><?php echo smartyTranslate(array('s'=>'You have not placed any orders.'),$_smarty_tpl);?>
</p>
		<?php }?>
	</div>

</div><!-- /content -->
<?php }} ?>