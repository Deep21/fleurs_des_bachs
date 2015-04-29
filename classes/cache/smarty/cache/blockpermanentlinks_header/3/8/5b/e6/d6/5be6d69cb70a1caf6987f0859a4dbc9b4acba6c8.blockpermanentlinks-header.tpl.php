<?php /*%%SmartyHeaderCode:22542547e6de5f26424-57402016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5be6d69cb70a1caf6987f0859a4dbc9b4acba6c8' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\modules\\blockpermanentlinks\\blockpermanentlinks-header.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22542547e6de5f26424-57402016',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5481f0351142f9_93558996',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5481f0351142f9_93558996')) {function content_5481f0351142f9_93558996($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="http://localhost/prestashop/index.php?controller=contact" title="contact">contact</a></li>
	<li id="header_link_sitemap"><a href="http://localhost/prestashop/index.php?controller=sitemap" title="plan du site">plan du site</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('http://localhost/prestashop/index.php', 'test', 'favoris');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>