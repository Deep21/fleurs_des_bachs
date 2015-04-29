<?php /*%%SmartyHeaderCode:19146547e6de8b1bb76-21122477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '203882810822f5224b1fe8d8eede18939e3f21bb' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\themes\\default\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19146547e6de8b1bb76-21122477',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5481f0358c8f48_85661410',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5481f0358c8f48_85661410')) {function content_5481f0358c8f48_85661410($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="http://localhost/prestashop/index.php?controller=my-account" title="Gérer mon compte client" rel="nofollow">Mon compte</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://localhost/prestashop/index.php?controller=history" title="Voir mes commandes" rel="nofollow">Mes commandes</a></li>
						<li><a href="http://localhost/prestashop/index.php?controller=order-slip" title="Voir mes avoirs" rel="nofollow">Mes avoirs</a></li>
			<li><a href="http://localhost/prestashop/index.php?controller=addresses" title="Voir mes adresses" rel="nofollow">Mes adresses</a></li>
			<li><a href="http://localhost/prestashop/index.php?controller=identity" title="Gérer mes informations personnelles" rel="nofollow">Mes informations personnelles</a></li>
						
		</ul>
		<p class="logout"><a href="http://localhost/prestashop/index.php?mylogout" title="Se déconnecter" rel="nofollow">Se déconnecter</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>