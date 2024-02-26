<?php
/* Smarty version 4.3.1, created on 2024-02-26 14:55:38
  from 'module:applicationformviewstemplatesfrontstudentstudentlogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dc43fa7def86_44175713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4746689e62dbc13f5703fb0f92110c6c804e4817' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontstudentstudentlogin.tpl',
      1 => 1708877909,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dc43fa7def86_44175713 (Smarty_Internal_Template $_smarty_tpl) {
?><form mothod="POST">
    <div class="panel">
        <div class="panel-heading">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Student Login",'mod'=>"applicationform"),$_smarty_tpl ) );?>

        </div>
        <div class="panel-body">
            <label for="student_email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Your Email?",'mod'=>"applicationform"),$_smarty_tpl ) );?>
</label>
            <input type="text" name="student_email" id="student_email" class="form-control"/>
        </div>
        <div class="panel-footer">
            <button type="submit" name="loginstudent" class="btn-default pull-right">
                <i class="process-icon-save"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Login",'mod'=>"applicationform"),$_smarty_tpl ) );?>

            </button>
            
        </div>
    </div>
</form>
<form mothod="POST">
    <button type="submit" name="goback" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Back",'mod'=>"applicationform"),$_smarty_tpl ) );?>

    </button>
</form><?php }
}
