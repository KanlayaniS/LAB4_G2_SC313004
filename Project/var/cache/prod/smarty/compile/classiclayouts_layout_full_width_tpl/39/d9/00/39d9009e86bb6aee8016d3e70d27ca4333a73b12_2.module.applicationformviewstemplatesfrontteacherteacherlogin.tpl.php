<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-26 21:01:07
=======
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-25 23:19:45
=======
/* Smarty version 4.3.1, created on 2024-02-26 14:11:03
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
  from 'module:applicationformviewstemplatesfrontteacherteacherlogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65dc99a3755472_19687180',
=======
<<<<<<< HEAD
  'unifunc' => 'content_65db68a1c78287_78635153',
=======
  'unifunc' => 'content_65dc39879f8993_47856211',
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d9009e86bb6aee8016d3e70d27ca4333a73b12' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontteacherteacherlogin.tpl',
      1 => 1708956062,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_65dc99a3755472_19687180 (Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
/* Form container */
.panel {
  width: 300px;
  margin: 100px auto;
  border-radius: 10px;
  background-color: #f5f5f5;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Form header */
.panel-heading {
  font-size: 30px;
  background-color: #0B76BC;
  color: #ffffff;
  padding: 20px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  text-align: center;
  font-size: bold 24px;
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
  border: 3px solid #cccccc;
  border-radius: 5px;
  transition: border-color 0.3s ease;
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
  margin-left:20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  width: 100%;
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
}

/* Form submit button hover effect */
.btn-default:hover {
  background-color: #00008B;
}

.panel-footer {
    margin-left:0px}

/* Align button to the right */
.pull-right {
    float: right;
    margin-top: 50px
    width: 50px;
    font-size: 20px
}
</style>



<form mothod="POST">
=======
<<<<<<< HEAD
function content_65db68a1c78287_78635153 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65dc39879f8993_47856211 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
?><form mothod="POST">
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
    <div class="panel">
        <div class="panel-heading">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Teacher Login",'mod'=>"applicationform"),$_smarty_tpl ) );?>

        </div>
        <div class="panel-body">
            <label for="teacher_email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Your Email:",'mod'=>"applicationform"),$_smarty_tpl ) );?>
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
</form>
<form mothod="POST">
    <button type="submit" name="goback" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Back",'mod'=>"applicationform"),$_smarty_tpl ) );?>

    </button>
</form><?php }
}
