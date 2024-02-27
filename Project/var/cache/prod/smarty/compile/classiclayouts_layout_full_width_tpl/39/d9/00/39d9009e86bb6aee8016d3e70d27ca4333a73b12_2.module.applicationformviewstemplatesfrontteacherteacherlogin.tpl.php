<?php
/* Smarty version 4.3.1, created on 2024-02-27 16:56:47
  from 'module:applicationformviewstemplatesfrontteacherteacherlogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65ddb1df396a23_68776606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d9009e86bb6aee8016d3e70d27ca4333a73b12' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontteacherteacherlogin.tpl',
      1 => 1709027800,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ddb1df396a23_68776606 (Smarty_Internal_Template $_smarty_tpl) {
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
  background-color: #4a55a2;
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
  border-color: #4a55a2;
}

/* Form submit button */
.btn-default {
  background-color: #4a55a2;
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
  background-color: #7895cb;
}

.panel-footer {
    margin-left:0px}

/* Align button to the right */
.pull-right {
    margin-top: 50px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: fit-content; /* Set width based on content */
    font-size: 22px; /* Decrease font size */
}


.login-container {
    background-color: #DEF3FF; /* Background color */
    padding: 20px; /* Padding */
    padding-right: 20px;
    border-radius: 5px; /* Border radius to create rounded corners */
}



</style>


<form method="POST">
    <div class="panel">
        <div class="panel-heading">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Teacher Login",'mod'=>"applicationform"),$_smarty_tpl ) );?>

        </div>
        <div class="panel-body">
            <div class="login-container"> <!-- Added container div -->
                <label for="teacher_email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Your Email:",'mod'=>"applicationform"),$_smarty_tpl ) );?>
</label>
                <input type="text" name="teacher_email" id="teacher_email" class="form-control"/><br/><br/>
                <button type="submit" name="loginteacher" class="btn-default pull-right">
                    <i class="process-icon-save"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Login",'mod'=>"applicationform"),$_smarty_tpl ) );?>

                </button>
            </div>
        </div>
        <div class="panel-footer">
            <button type="submit" name="goback" class="btn-default pull-right">
                <i class="process-icon-save"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Back",'mod'=>"applicationform"),$_smarty_tpl ) );?>

            </button>
        </div>
    </div>
</form>
<?php }
}
