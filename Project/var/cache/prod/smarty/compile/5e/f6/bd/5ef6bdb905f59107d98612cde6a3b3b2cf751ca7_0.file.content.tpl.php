<?php
/* Smarty version 4.3.1, created on 2024-02-13 20:31:32
  from 'C:\xampp\htdocs\se_project\Project\admin-g2-dev\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65cb6f34b175f5_84874199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ef6bdb905f59107d98612cde6a3b3b2cf751ca7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\admin-g2-dev\\themes\\new-theme\\template\\content.tpl',
      1 => 1707824448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb6f34b175f5_84874199 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
