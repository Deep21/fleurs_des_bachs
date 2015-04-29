<?php /* Smarty version Smarty-3.1.14, created on 2015-03-21 23:55:18
         compiled from "C:\re\wamp\www\prestashop\modules\powatag\views\templates\hook\powatag_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20917550df6d6f1c614-41678299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a33841a1bfd57498d939c540a1fa540feb9402bc' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\modules\\powatag\\views\\templates\\hook\\powatag_header.tpl',
      1 => 1426968651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20917550df6d6f1c614-41678299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'powatag_css_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_550df6d7033fb0_32435799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550df6d7033fb0_32435799')) {function content_550df6d7033fb0_32435799($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\re\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<link id="powatag-css" rel="stylesheet" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['powatag_css_url']->value, 'htmlall', 'UTF-8');?>
"/>

<?php }} ?>