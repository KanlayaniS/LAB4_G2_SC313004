<?php
/* Smarty version 4.3.1, created on 2024-02-12 21:12:48
  from 'C:\xampp\htdocs\se_project\Project\admin-g2-dev\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65ca27608b6600_45139102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af5b05e2363e791e86f6b69d3379d05a866c4602' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\admin-g2-dev\\themes\\default\\template\\content.tpl',
      1 => 1707746753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ca27608b6600_45139102 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
