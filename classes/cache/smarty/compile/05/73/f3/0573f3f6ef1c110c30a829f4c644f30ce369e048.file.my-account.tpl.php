<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:50:07
         compiled from "C:\re\wamp\www\prestashop\themes\default\mobile\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24569547e6c4fab0e87-88048583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0573f3f6ef1c110c30a829f4c644f30ce369e048' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\themes\\default\\mobile\\my-account.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24569547e6c4fab0e87-88048583',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'has_customer_an_address' => 0,
    'link' => 0,
    'img_mobile_dir' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c4fd933a7_18186055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c4fd933a7_18186055')) {function content_547e6c4fd933a7_18186055($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_title', null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ('./page-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div data-role="content" id="content">
		<p><?php echo smartyTranslate(array('s'=>'Welcome to your account. Here you can manage al of your personal information and orders. '),$_smarty_tpl);?>
</p>
		
		<ul data-role="listview" data-inset="true" id="list_myaccount">
			<?php if ($_smarty_tpl->tpl_vars['has_customer_an_address']->value){?>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add my first address'),$_smarty_tpl);?>
" data-ajax="false">
					<img src="<?php echo $_smarty_tpl->tpl_vars['img_mobile_dir']->value;?>
icon/addrbook.png" alt="<?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
" class="ui-li-icon ui-li-thumb" />
					<?php echo smartyTranslate(array('s'=>'Add my first address'),$_smarty_tpl);?>

				</a>
			</li>
			<?php }?>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>
" data-ajax="false">
					<img src="<?php echo $_smarty_tpl->tpl_vars['img_mobile_dir']->value;?>
icon/order.png" alt="<?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>
" class="ui-li-icon ui-li-thumb" />
					<?php echo smartyTranslate(array('s'=>'Order history and details '),$_smarty_tpl);?>

				</a>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value){?>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Merchandise returns'),$_smarty_tpl);?>
" data-ajax="false">
					<img src="<?php echo $_smarty_tpl->tpl_vars['img_mobile_dir']->value;?>
icon/return.png" alt="<?php echo smartyTranslate(array('s'=>'Merchandise returns'),$_smarty_tpl);?>
" class="ui-li-icon ui-li-thumb" />
					<?php echo smartyTranslate(array('s'=>'My merchandise returns'),$_smarty_tpl);?>

				</a>
			</li>
			<?php }?>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Credit slips'),$_smarty_tpl);?>
" data-ajax="false">
					<img src="<?php echo $_smarty_tpl->tpl_vars['img_mobile_dir']->value;?>
icon/slip.png" alt="<?php echo smartyTranslate(array('s'=>'Credit slips'),$_smarty_tpl);?>
" class="ui-li-icon ui-li-thumb" />
					<?php echo smartyTranslate(array('s'=>'My credit slips'),$_smarty_tpl);?>

				</a>
			</li>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
" data-ajax="false">
					<img src="<?php echo $_smarty_tpl->tpl_vars['img_mobile_dir']->value;?>
icon/addrbook.png" alt="<?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
" class="ui-li-icon ui-li-thumb" />
					<?php echo smartyTranslate(array('s'=>'My addresses'),$_smarty_tpl);?>

				</a>
			</li>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Information'),$_smarty_tpl);?>
" data-ajax="false">
					<img src="<?php echo $_smarty_tpl->tpl_vars['img_mobile_dir']->value;?>
icon/userinfos.png" alt="<?php echo smartyTranslate(array('s'=>'Information'),$_smarty_tpl);?>
" class="ui-li-icon ui-li-thumb" />
					<?php echo smartyTranslate(array('s'=>'My personal information'),$_smarty_tpl);?>

				</a>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value){?>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
" data-ajax="false">
					<img src="<?php echo $_smarty_tpl->tpl_vars['img_mobile_dir']->value;?>
icon/voucher.png" alt="<?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
" class="ui-li-icon ui-li-thumb" />
					<?php echo smartyTranslate(array('s'=>'My vouchers'),$_smarty_tpl);?>

				</a>
			</li>
			<?php }?>
			<li data-icon="delete" data-theme="a">
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?mylogout" title="<?php echo smartyTranslate(array('s'=>'Sign out'),$_smarty_tpl);?>
" data-ajax="false">
					<?php echo smartyTranslate(array('s'=>'Sign out'),$_smarty_tpl);?>

				</a>
			</li>
			
			
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"mobileCustomerAccount"),$_smarty_tpl);?>

			
		</ul>

		<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" class="lnk_my-account_home" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
" data-ajax="false">
			<img class="" alt="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
" src="<?php echo $_smarty_tpl->tpl_vars['img_mobile_dir']->value;?>
icon/home.png">
			<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>

		</a>
		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>