<?php /*%%SmartyHeaderCode:23270547e6de6cc8fb6-61058716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88b44d2630fcd7ba822092a815c75e31955c7606' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\themes\\default\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23270547e6de6cc8fb6-61058716',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_548303b6784ed6_95261932',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548303b6784ed6_95261932')) {function content_548303b6784ed6_95261932($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://localhost/prestashop/index.php?controller=supplier" title="Fournisseurs">Fournisseurs</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://localhost/prestashop/index.php?id_supplier=1&amp;controller=supplier" title="En savoir plus sur AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://localhost/prestashop/index.php?id_supplier=2&amp;controller=supplier" title="En savoir plus sur Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/prestashop/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Tous les fournisseurs</option>
									<option value="http://localhost/prestashop/index.php?id_supplier=1&amp;controller=supplier">AppleStore</option>
									<option value="http://localhost/prestashop/index.php?id_supplier=2&amp;controller=supplier">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>