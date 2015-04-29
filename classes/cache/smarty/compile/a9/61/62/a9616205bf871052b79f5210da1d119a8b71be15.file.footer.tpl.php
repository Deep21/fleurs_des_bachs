<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:49:48
         compiled from "C:\re\wamp\www\prestashop\admin\themes\default\template\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15244547e6c3c41ce02-81165427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9616205bf871052b79f5210da1d119a8b71be15' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\footer.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15244547e6c3c41ce02-81165427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_footer' => 0,
    'ps_version' => 0,
    'timer_start' => 0,
    'iso_is_fr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c3c4b1525_85466713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c3c4b1525_85466713')) {function content_547e6c3c4b1525_85466713($_smarty_tpl) {?>
			<div style="clear:both;height:0;line-height:0">&nbsp;</div>
		</div>
		<div style="clear:both;height:0;line-height:0">&nbsp;</div>
	</div>
<?php if ($_smarty_tpl->tpl_vars['display_footer']->value){?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBackOfficeFooter"),$_smarty_tpl);?>

			<div id="footer">
				<div class="footerLeft">
					<a href="http://www.prestashop.com/" target="_blank">PrestaShop&trade; <?php echo $_smarty_tpl->tpl_vars['ps_version']->value;?>
</a><br />
					<span><?php echo smartyTranslate(array('s'=>'Load time: '),$_smarty_tpl);?>
<?php echo number_format(microtime(true)-$_smarty_tpl->tpl_vars['timer_start']->value,3,'.','');?>
s</span>
				</div>
				<div class="footerRight">
					<?php if ($_smarty_tpl->tpl_vars['iso_is_fr']->value){?>
						<span>Questions / Renseignements / Formations :</span> <strong>+33 (0)1.40.18.30.04</strong>
					<?php }?>
					|&nbsp;<a href="http://www.prestashop.com/en/contact-us?utm_source=backoffice_footer" target="_blank" class="footer_link"><?php echo smartyTranslate(array('s'=>'Contact'),$_smarty_tpl);?>
</a>
					|&nbsp;<a href="http://forge.prestashop.com/?utm_source=backoffice_footer" target="_blank" class="footer_link"><?php echo smartyTranslate(array('s'=>'Bug Tracker'),$_smarty_tpl);?>
</a>
					|&nbsp;<a href="http://www.prestashop.com/forums/?utm_source=backoffice_footer" target="_blank" class="footer_link"><?php echo smartyTranslate(array('s'=>'Forum'),$_smarty_tpl);?>
</a>
					|&nbsp;<a href="http://addons.prestashop.com/?utm_source=backoffice_footer" target="_blank" class="footer_link"><?php echo smartyTranslate(array('s'=>'Addons'),$_smarty_tpl);?>
</a>
				</div>
			</div>
		</div>
	</div>
	<div id="ajax_confirmation" style="display:none"></div>
	<div id="ajaxBox" style="display:none"></div>
<?php }?>
	<div id="scrollTop"><a href="#top"></a></div>
</body>
</html><?php }} ?>