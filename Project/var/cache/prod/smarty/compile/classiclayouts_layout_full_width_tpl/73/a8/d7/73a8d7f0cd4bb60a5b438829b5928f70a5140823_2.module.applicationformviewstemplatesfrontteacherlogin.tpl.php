<?php
/* Smarty version 4.3.1, created on 2024-02-25 17:35:19
  from 'module:applicationformviewstemplatesfrontteacherlogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65db17e72abf22_31080652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73a8d7f0cd4bb60a5b438829b5928f70a5140823' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontteacherlogin.tpl',
      1 => 1708857317,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65db17e72abf22_31080652 (Smarty_Internal_Template $_smarty_tpl) {
?><form mothod="POST">
    <div class="panel">
        <div class="panel-heading">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Teacher Login",'mod'=>"applicationform"),$_smarty_tpl ) );?>

        </div>
        <div class="panel-body">
            <label for="teacher_email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Your Email?",'mod'=>"applicationform"),$_smarty_tpl ) );?>
</label>
            <input type="text" name="teacher_email" id="teacher_email" class="form-control"/>
        </div>
        <div class="panel-footer">
            <button type="submit" name="loginteacher" class="btn-default pull-right">
                <i class="process-icon-save"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Login",'mod'=>"applicationform"),$_smarty_tpl ) );?>

            </button>
        </div>
    </div>
</form><?php }
}
