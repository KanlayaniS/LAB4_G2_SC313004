<?php
/* Smarty version 4.3.1, created on 2024-01-30 18:05:27
  from 'C:\xampp\htdocs\se_project\Project\admin2024se3\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b8d7f713f681_59686416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '167a7f8a888778202aadfbfabbe035ec32b9a1e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\admin2024se3\\themes\\default\\template\\content.tpl',
      1 => 1706534565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b8d7f713f681_59686416 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
