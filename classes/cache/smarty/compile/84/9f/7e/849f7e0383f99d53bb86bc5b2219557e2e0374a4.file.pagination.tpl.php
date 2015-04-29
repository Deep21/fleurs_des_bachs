<?php /* Smarty version Smarty-3.1.14, created on 2014-12-03 02:50:13
         compiled from "C:\re\wamp\www\prestashop\themes\default\mobile\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12272547e6c553536b2-83444722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '849f7e0383f99d53bb86bc5b2219557e2e0374a4' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\themes\\default\\mobile\\pagination.tpl',
      1 => 1390208062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12272547e6c553536b2-83444722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'no_follow' => 0,
    'p' => 0,
    'category' => 0,
    'current_url' => 0,
    'link' => 0,
    'manufacturer' => 0,
    'supplier' => 0,
    'start' => 0,
    'stop' => 0,
    'pages_nb' => 0,
    'no_follow_text' => 0,
    'p_previous' => 0,
    'requestPage' => 0,
    'p_next' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_547e6c559818a1_64574880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547e6c559818a1_64574880')) {function content_547e6c559818a1_64574880($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['no_follow']->value)&&$_smarty_tpl->tpl_vars['no_follow']->value){?>
	<?php $_smarty_tpl->tpl_vars['no_follow_text'] = new Smarty_variable('rel="nofollow"', null, 0);?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['no_follow_text'] = new Smarty_variable('', null, 0);?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['p']->value)&&$_smarty_tpl->tpl_vars['p']->value){?>
	<?php if (isset($_GET['id_category'])&&$_GET['id_category']&&isset($_smarty_tpl->tpl_vars['category']->value)){?>
		<?php if (!isset($_smarty_tpl->tpl_vars['current_url']->value)){?>
		<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('category',$_smarty_tpl->tpl_vars['category']->value,false,false,true,false), null, 0);?>
		<?php }else{ ?>
			<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['current_url']->value, null, 0);?>
		<?php }?>
		<?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('category',$_smarty_tpl->tpl_vars['category']->value,true,false,false,true), null, 0);?>
	<?php }elseif(isset($_GET['id_manufacturer'])&&$_GET['id_manufacturer']&&isset($_smarty_tpl->tpl_vars['manufacturer']->value)){?>
		<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('manufacturer',$_smarty_tpl->tpl_vars['manufacturer']->value,false,false,true,false), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('manufacturer',$_smarty_tpl->tpl_vars['manufacturer']->value,true,false,false,true), null, 0);?>
	<?php }elseif(isset($_GET['id_supplier'])&&$_GET['id_supplier']&&isset($_smarty_tpl->tpl_vars['supplier']->value)){?>
		<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('supplier',$_smarty_tpl->tpl_vars['supplier']->value,false,false,true,false), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink('supplier',$_smarty_tpl->tpl_vars['supplier']->value,true,false,false,true), null, 0);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['requestPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink(false,false,false,false,true,false), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['requestNb'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getPaginationLink(false,false,true,false,false,true), null, 0);?>
	<?php }?>
	<!-- Pagination -->
<div class="clearfix">
	<div class="pagination_mobile wrapper_pagination_mobile">
	<?php if ($_smarty_tpl->tpl_vars['start']->value!=$_smarty_tpl->tpl_vars['stop']->value&&$_smarty_tpl->tpl_vars['pages_nb']->value>=1){?>
		<ul class="pagination_mobile" data-role="controlgroup" data-type="horizontal">
		<?php if ($_smarty_tpl->tpl_vars['p']->value!=1){?>
			<?php $_smarty_tpl->tpl_vars['p_previous'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value-1, null, 0);?>
		<?php }?>
		<li class="pagination_previous">
			<a <?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 class="button_prev<?php if ($_smarty_tpl->tpl_vars['p']->value==1){?> disabled<?php }?>" data-role="button" data-icon="arrow-l" data-iconpos="left" href="<?php if (isset($_smarty_tpl->tpl_vars['p_previous']->value)){?><?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['p_previous']->value);?>
<?php }?>" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
</a>
		</li>
		<?php if ($_smarty_tpl->tpl_vars['start']->value>3){?>
			<li><a <?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,1), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false">1</a></li>
			<li class="truncate">...</li>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['name'] = 'pagination';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = (int)$_smarty_tpl->tpl_vars['start']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['stop']->value+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pagination']['total']);
?>
			<?php if ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index']){?>
				<li class="current"><a href="#" data-role="button" class="ui-btn-active" data-ajax="false"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value, 'htmlall', 'UTF-8');?>
</a></li>
			<?php }else{ ?>
				<li><a data-role="button" <?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index']), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('smarty')->value['section']['pagination']['index'], 'htmlall', 'UTF-8');?>
</a></li>
			<?php }?>
		<?php endfor; endif; ?>
		<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value>$_smarty_tpl->tpl_vars['stop']->value+2){?>
			<li class="truncate">...</li>
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['pages_nb']->value), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false"><?php echo intval($_smarty_tpl->tpl_vars['pages_nb']->value);?>
</a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pages_nb']->value>1&&$_smarty_tpl->tpl_vars['p']->value!=$_smarty_tpl->tpl_vars['pages_nb']->value){?>
			<?php $_smarty_tpl->tpl_vars['p_next'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value+1, null, 0);?>
		<?php }?>
			<li class="pagination_next">
				<a <?php echo $_smarty_tpl->tpl_vars['no_follow_text']->value;?>
 class="button_next<?php if (!isset($_smarty_tpl->tpl_vars['p_next']->value)){?> disabled<?php }?>" data-role="button" data-icon="arrow-r" data-iconpos="right" href="<?php if (isset($_smarty_tpl->tpl_vars['p_next']->value)){?><?php echo $_smarty_tpl->tpl_vars['link']->value->goPage($_smarty_tpl->tpl_vars['requestPage']->value,$_smarty_tpl->tpl_vars['p_next']->value);?>
<?php }?>" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Next'),$_smarty_tpl);?>
</a>
			</li>
		</ul>
	<?php }?>
	</div>
</div><!-- .clearfix -->
	<!-- /Pagination -->
<?php }?>
<?php }} ?>