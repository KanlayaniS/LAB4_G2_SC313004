<?php
/* Smarty version 4.3.1, created on 2024-02-25 17:31:30
  from 'C:\xampp\htdocs\se_project\Project\admin-g2-dev\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65db17020bee15_44142735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af5b05e2363e791e86f6b69d3379d05a866c4602' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\admin-g2-dev\\themes\\default\\template\\content.tpl',
      1 => 1708856857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65db17020bee15_44142735 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
