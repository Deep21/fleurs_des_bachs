<?php /*%%SmartyHeaderCode:9537547e6de6a50214-58486483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af80fcb8ac3f7e9a9c78db736f35e52807219b4d' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\themes\\default\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9537547e6de6a50214-58486483',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54dba2689331e0_39368764',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dba2689331e0_39368764')) {function content_54dba2689331e0_39368764($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block"><a href="http://localhost/prestashop/index.php?controller=manufacturer" title="Fabricants">Fabricants</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://localhost/prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer" title="En savoir plus sur Apple Computer, Inc">Apple Computer, Inc</a></li>
							<li class="item"><a href="http://localhost/prestashop/index.php?id_manufacturer=3&amp;controller=manufacturer" title="En savoir plus sur Cabasse">Cabasse</a></li>
							<li class="last_item"><a href="http://localhost/prestashop/index.php?id_manufacturer=2&amp;controller=manufacturer" title="En savoir plus sur Shure Incorporated">Shure Incorporated</a></li>
				</ul>
				<form action="/prestashop/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">Tous les fabricants</option>
									<option value="http://localhost/prestashop/index.php?id_manufacturer=1&amp;controller=manufacturer">Apple Computer, Inc</option>
									<option value="http://localhost/prestashop/index.php?id_manufacturer=3&amp;controller=manufacturer">Cabasse</option>
									<option value="http://localhost/prestashop/index.php?id_manufacturer=2&amp;controller=manufacturer">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>