<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:50:23
         compiled from "C:\re\wamp\www\prestashop\themes\default\modules\blockviewed\blockviewed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3969547e6c5f3a7b07-85049474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e9c7c18d5abafd331b93267472573de5e937e4d' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\themes\\default\\modules\\blockviewed\\blockviewed.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3969547e6c5f3a7b07-85049474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productsViewedObj' => 0,
    'viewedProduct' => 0,
    'link' => 0,
    'img_prod_dir' => 0,
    'lang_iso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c5f5e2096_30632536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c5f5e2096_30632536')) {function content_547e6c5f5e2096_30632536($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<!-- Block Viewed products -->
<div id="viewed-products_block_left" class="block products_block">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Viewed products','mod'=>'blockviewed'),$_smarty_tpl);?>
</p>
	<div class="block_content">
		<ul class="products clearfix">
			<?php  $_smarty_tpl->tpl_vars['viewedProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['viewedProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productsViewedObj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['viewedProduct']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['viewedProduct']->iteration=0;
 $_smarty_tpl->tpl_vars['viewedProduct']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['viewedProduct']->key => $_smarty_tpl->tpl_vars['viewedProduct']->value){
$_smarty_tpl->tpl_vars['viewedProduct']->_loop = true;
 $_smarty_tpl->tpl_vars['viewedProduct']->iteration++;
 $_smarty_tpl->tpl_vars['viewedProduct']->index++;
 $_smarty_tpl->tpl_vars['viewedProduct']->first = $_smarty_tpl->tpl_vars['viewedProduct']->index === 0;
 $_smarty_tpl->tpl_vars['viewedProduct']->last = $_smarty_tpl->tpl_vars['viewedProduct']->iteration === $_smarty_tpl->tpl_vars['viewedProduct']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['viewedProduct']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['viewedProduct']->last;
?>
				<li class="clearfix<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?> last_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?> first_item<?php }else{ ?> item<?php }?>">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->product_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blockviewed'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['viewedProduct']->value->name, 'html', 'UTF-8');?>
" class="content_img">
					<img src="<?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->id_image)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->id_image){?><?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->cover,'medium_default');?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['img_prod_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-medium_default.jpg<?php }?>" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['viewedProduct']->value->legend, 'html', 'UTF-8');?>
" />
					</a>
					<div class="text_desc">
						<p class="s_title_block"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->product_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blockviewed'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['viewedProduct']->value->name, 'html', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['viewedProduct']->value->name,14,'...'), 'html', 'UTF-8');?>
</a></p>
						<p><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->product_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blockviewed'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['viewedProduct']->value->name, 'html', 'UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['viewedProduct']->value->description_short),44);?>
</a></p>
					</div>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>
<?php }} ?>