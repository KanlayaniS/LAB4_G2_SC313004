<?php
/* Smarty version 4.3.1, created on 2024-01-29 15:23:18
  from 'C:\xampp\htdocs\se_project\Project\admin2024se3\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b760763e4600_80941440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '810e808c91c70cd45e6e56dfce261c21d3ef0da3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\admin2024se3\\themes\\new-theme\\template\\content.tpl',
      1 => 1695892354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b760763e4600_80941440 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
