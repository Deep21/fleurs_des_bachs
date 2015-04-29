<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:49:46
         compiled from "C:\re\wamp\www\prestashop\admin\themes\default\template\controllers\shop\tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28929547e6c3a7d9849-18671440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c9231a27b963bd0b3905f473619d1b506d934ed' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\controllers\\shop\\tree.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28929547e6c3a7d9849-18671440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_tree_id' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c3a9e4fc6_45614026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c3a9e4fc6_45614026')) {function content_547e6c3a9e4fc6_45614026($_smarty_tpl) {?>

<ul id="multishop-tree">
</ul>

<script type="text/javascript">
function check_selected_tree_node(d)
{
	<?php if (isset($_smarty_tpl->tpl_vars['selected_tree_id']->value)){?>
		$.each(d, function(k, v)
		{
			if (v.attr.id == '<?php echo $_smarty_tpl->tpl_vars['selected_tree_id']->value;?>
')
			{
				setTimeout(function()
				{
					$('#<?php echo $_smarty_tpl->tpl_vars['selected_tree_id']->value;?>
').children('a').addClass('selected');
				}, 100);
			}

			if (v.children)
			{
				check_selected_tree_node(v.children);
			}
		});
	<?php }?>
}

function customMenu(node)
{
	var node_id = node.attr('id');

	// Click on a group
	if (new RegExp(/^tree-group-[0-9]+$/).exec(node_id))
	{
		var id = node_id.substr(11);
		return {
			"edit_shop_group" : {
				"separator_before"	: false,
				"separator_after"	: true,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Edit this shop group'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/edit.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShopGroup');?>
&updateshop_group&id_shop_group='+id;
				}
			},
			"add_shop_group" : {
				"separator_before"	: false,
				"separator_after"	: false,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Add a new shop group'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/add.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShopGroup');?>
&addshop_group';
				}
			},
			"add_shop" : {
				"separator_before"	: false,
				"separator_after"	: true,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Add new shop'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/add.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShop');?>
&addshop&id_shop_group='+id;
				}
			}
		};
	}
	// Click on a shop
	else if (new RegExp(/^tree-shop-[0-9]+$/).exec(node_id))
	{
		var id = node_id.substr(10);
		var id_parent = node.parent().parent().attr('id').substr(11);
		return {
			"edit_shop" : {
				"separator_before"	: false,
				"separator_after"	: true,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Edit this shop'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/edit.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShop');?>
&updateshop&id_shop='+id;
				}
			},
			"add_shop" : {
				"separator_before"	: false,
				"separator_after"	: false,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Add new shop'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/add.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShop');?>
&addshop&id_shop_group='+id_parent;
				}
			},
			"add_url" : {
				"separator_before"	: false,
				"separator_after"	: true,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Add new URL'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/add.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShopUrl');?>
&addshop_url&id_shop='+id;
				}
			}
		};
	}
	// Click on an URL
	else if (new RegExp(/^tree-url-[0-9]+$/).exec(node_id))
	{
		var id = node_id.substr(9);
		var id_parent = node.parent().parent().attr('id').substr(10);
		return {
			"edit_url" : {
				"separator_before"	: false,
				"separator_after"	: true,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Edit this URL'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/edit.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShopUrl');?>
&updateshop_url&id_shop_url='+id;
				}
			},
			"add_url" : {
				"separator_before"	: false,
				"separator_after"	: true,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Add new URL'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/add.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShopUrl');?>
&addshop_url&id_shop='+id_parent;
				}
			}
		};
	}
	// Click on root node
	else
	{
		return {
			"add_shop_group" : {
				"separator_before"	: false,
				"separator_after"	: false,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Add a new shop group'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/add.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShopGroup');?>
&addshop_group';
				}
			},
			"add_shop" : {
				"separator_before"	: false,
				"separator_after"	: true,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Add new shop'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/add.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShop');?>
&addshop';
				}
			},
			"add_url" : {
				"separator_before"	: false,
				"separator_after"	: true,
				"label"				: "<?php echo smartyTranslate(array('s'=>'Add new URL'),$_smarty_tpl);?>
",
				"icon"				: "../img/admin/add.gif",
				"action"			: function (obj){
					location.href = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShopUrl');?>
&addshop_url';
				}
			}
		};
	}
}

$("#multishop-tree").jstree({
	'plugins': ["themes","json_data","cookies","contextmenu"],
	'json_data': {
		'ajax': {
			'url': "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShop'));?>
",
			'data': function(n)
			{
				return {
					'ajax': 'true',
					'action': 'tree',
					'id': n.attr ? n.attr('id').replace(/tree-(group|shop|url)-/i, '') : '0'
				};
			},
			'success': check_selected_tree_node
		}
	},
	'cookies': {
		'save_selected': false
	},
	'core': {
		'html_titles': true,
		'animation': 300
	},
	'contextmenu': {
		items : customMenu
	},
	'themes': {
		'theme': 'classic'
	}
});
</script><?php }} ?>