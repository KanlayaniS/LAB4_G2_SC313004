<?php
/* Smarty version 4.3.1, created on 2024-02-26 21:01:08
  from 'module:applicationformviewstemplatesfrontstudentstudentlogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dc99a4103d06_94936663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4746689e62dbc13f5703fb0f92110c6c804e4817' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontstudentstudentlogin.tpl',
      1 => 1708956020,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dc99a4103d06_94936663 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>

/* Form container */
.panel {
    width: 300px;
    margin: 100px auto;
    border-radius: 10px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Form header */
.panel-heading {
    font-size: 30px;
    background-color: #0B76BC;
    color: #ffffff;
    padding: 20px;
    border-top-left-radius: 10px;
    border-radius: 5px;
    border-top-right-radius: 10px;
    font-size: bold 24px;
    text-align: center;
}

/* Form body */
.panel-body {
    padding: 20px;
}

/* Form input fields */
.form-control {
    width: calc(100% + 10px);
    padding: 12px;
    margin: 10px 0;
    margin-bottom: 50px;
    border: 3px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s ease-in-out;
}

/* Form input focus effect */
.form-control:focus {
  border-color: #0B76BC;
}

/* Form submit button */
.btn-default {

    background-color: #0B76BC;
    color: #ffffff;
    padding: 15px 30px;
    margin-top: 20px;
    margin-left: 20px
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 100%;
    font-weight: bold;
    text-transform:uppercase;
}

/* Form submit button hover effect */
.btn-default:hover {
    background-color: #00008B;
}

/* Align button to the right */
.pull-right {
    float: right;
    margin-top: 50px
    width: 50px;
    font-size: 20px
}



</style>

<form mothod="POST">
    <div class="panel">
        <div class="panel-heading">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Student Login",'mod'=>"applicationform"),$_smarty_tpl ) );?>

        </div>
        <div class="panel-body">
            <label for="student_email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Your Email: ",'mod'=>"applicationform"),$_smarty_tpl ) );?>
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
