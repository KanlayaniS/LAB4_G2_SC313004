<?php
/* Smarty version 4.3.1, created on 2024-02-26 14:11:00
  from 'module:applicationformviewstemplatesfrontstudentstudenthome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dc39841ac8e8_53242935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a829f38b3cef8877b5da2eb9976b71a7b8a7fffc' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontstudentstudenthome.tpl',
      1 => 1708878843,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dc39841ac8e8_53242935 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Select Menu"),$_smarty_tpl ) );?>

<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['student_email']->value, ENT_QUOTES, 'UTF-8');?>

<form mothod="POST">
    <button type="submit" name="applicationform" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Application Form",'mod'=>"applicationform"),$_smarty_tpl ) );?>

    </button>
</form>
<form mothod="POST">
    <button type="submit" name="myapplication" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"My Application",'mod'=>"applicationform"),$_smarty_tpl ) );?>

    </button>
</form>
<form mothod="POST">
    <button type="submit" name="getlogout" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Logout",'mod'=>"applicationform"),$_smarty_tpl ) );?>

    </button>
</form><?php }
}
