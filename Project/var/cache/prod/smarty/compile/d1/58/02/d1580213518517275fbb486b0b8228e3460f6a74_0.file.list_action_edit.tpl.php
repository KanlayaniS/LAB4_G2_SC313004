<?php
/* Smarty version 4.3.1, created on 2024-02-13 19:56:24
  from 'C:\xampp\htdocs\se_project\Project\admin-g2-dev\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65cb66f89abd82_61719188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1580213518517275fbb486b0b8228e3460f6a74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\admin-g2-dev\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1707824448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb66f89abd82_61719188 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}