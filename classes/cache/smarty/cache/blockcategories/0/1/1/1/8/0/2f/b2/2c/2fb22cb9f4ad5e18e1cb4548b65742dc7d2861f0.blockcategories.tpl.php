<?php /*%%SmartyHeaderCode:587547e6de67f2a15-56657877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fb22cb9f4ad5e18e1cb4548b65742dc7d2861f0' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\themes\\default\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
    '6dac4b2bee854b71d941a909dd84b754ff462b58' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\themes\\default\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '587547e6de67f2a15-56657877',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54d4fb97989c98_68804099',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d4fb97989c98_68804099')) {function content_54d4fb97989c98_68804099($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Catégories</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://localhost/prestashop/index.php?id_category=3&amp;controller=category" 		title="Il est temps, pour le meilleur lecteur de musique, de remonter sur sc&egrave;ne pour un rappel. Avec le nouvel iPod, le monde est votre sc&egrave;ne.">iPods</a>
			<ul>
									
<li class="last">
	<a href="http://localhost/prestashop/index.php?id_category=6&amp;controller=category" 		title="">ipod sous cat&eacute;gorie</a>
			<ul>
									
<li class="last">
	<a href="http://localhost/prestashop/index.php?id_category=7&amp;controller=category" 		title="">Test2</a>
	</li>

							</ul>
	</li>

							</ul>
	</li>

												
<li >
	<a href="http://localhost/prestashop/index.php?id_category=4&amp;controller=category" 		title="Tous les accessoires &agrave; la mode pour votre iPod">Accessoires</a>
	</li>

												
<li class="last">
	<a href="http://localhost/prestashop/index.php?id_category=5&amp;controller=category" 		title="Le tout dernier processeur Intel, un disque dur plus spacieux, de la m&eacute;moire &agrave; profusion et d&#039;autres nouveaut&eacute;s. Le tout, dans &agrave; peine 2,59 cm qui vous lib&egrave;rent de toute entrave. Les nouveaux portables Mac r&eacute;unissent les performances, la puissance et la connectivit&eacute; d&#039;un ordinateur de bureau. Sans la partie bureau.">Portables</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>