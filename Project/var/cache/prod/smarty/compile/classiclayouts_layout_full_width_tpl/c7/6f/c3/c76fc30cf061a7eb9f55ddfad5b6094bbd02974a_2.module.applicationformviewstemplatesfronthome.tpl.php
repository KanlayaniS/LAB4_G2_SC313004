<?php
/* Smarty version 4.3.1, created on 2024-02-27 16:56:45
  from 'module:applicationformviewstemplatesfronthome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65ddb1ddd1b5f0_16751904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c76fc30cf061a7eb9f55ddfad5b6094bbd02974a' => 
    array (
      0 => 'module:applicationformviewstemplatesfronthome.tpl',
      1 => 1708932068,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ddb1ddd1b5f0_16751904 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Select Login"),$_smarty_tpl ) );?>

<form mothod="POST">
    <button type="submit" name="studentlogin" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Student Login",'mod'=>"applicationform"),$_smarty_tpl ) );?>

    </button>
</form>
<form mothod="POST">
    <button type="submit" name="teacherlogin" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Teacher Login",'mod'=>"applicationform"),$_smarty_tpl ) );?>

    </button>
</form><?php }
}
