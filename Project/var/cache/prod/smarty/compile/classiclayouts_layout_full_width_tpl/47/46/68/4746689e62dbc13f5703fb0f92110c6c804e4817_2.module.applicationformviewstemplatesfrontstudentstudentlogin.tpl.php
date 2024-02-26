<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-26 16:12:50
=======
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-26 14:56:58
=======
/* Smarty version 4.3.1, created on 2024-02-26 14:55:38
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
  from 'module:applicationformviewstemplatesfrontstudentstudentlogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65dc561250c3e3_12399371',
=======
<<<<<<< HEAD
  'unifunc' => 'content_65dc444ae60744_72114838',
=======
  'unifunc' => 'content_65dc43fa7def86_44175713',
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4746689e62dbc13f5703fb0f92110c6c804e4817' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontstudentstudentlogin.tpl',
      1 => 1708932907,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_65dc561250c3e3_12399371 (Smarty_Internal_Template $_smarty_tpl) {
=======
<<<<<<< HEAD
function content_65dc444ae60744_72114838 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65dc43fa7def86_44175713 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
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
