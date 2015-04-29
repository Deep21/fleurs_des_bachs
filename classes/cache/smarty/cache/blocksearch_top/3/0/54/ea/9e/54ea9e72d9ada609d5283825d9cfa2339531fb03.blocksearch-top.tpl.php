<?php /*%%SmartyHeaderCode:29231547e6de60c2ae9-65436784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54ea9e72d9ada609d5283825d9cfa2339531fb03' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
    '49acb1cdc59ca692195f77892871edc1fc450a26' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\modules\\blocksearch\\blocksearch-instantsearch.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29231547e6de60c2ae9-65436784',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5507365810ea67_25996919',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5507365810ea67_25996919')) {function content_5507365810ea67_25996919($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<div id="search_block_top">
	<form method="get" action="http://localhost/prestashop/index.php?controller=search" id="searchbox">
		<p>
			<label for="search_query_top"><!-- image on background --></label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="text" id="search_query_top" name="search_query" value="" />
			<input type="submit" name="submit_search" value="Rechercher" class="button" />
		</p>
	</form>
</div>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://localhost/prestashop/index.php?controller=search', {
						minChars: 3,
						max: 10,
						width: 500,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	// ]]>
	</script>

<!-- /Block search module TOP -->
<?php }} ?>