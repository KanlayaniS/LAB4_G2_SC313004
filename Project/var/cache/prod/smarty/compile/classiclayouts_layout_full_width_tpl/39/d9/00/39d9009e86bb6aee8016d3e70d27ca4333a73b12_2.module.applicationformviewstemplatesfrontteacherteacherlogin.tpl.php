<?php
/* Smarty version 4.3.1, created on 2024-02-27 20:30:16
  from 'module:applicationformviewstemplatesfrontteacherteacherlogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dde3e8335046_69480545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d9009e86bb6aee8016d3e70d27ca4333a73b12' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontteacherteacherlogin.tpl',
      1 => 1709039482,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dde3e8335046_69480545 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>เข้าสู่ระบบ</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
  </head>
  <body>
    <div class="wrapper">
        <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"เข้าสู่ระบบ",'mod'=>"applicationform"),$_smarty_tpl ) );?>
</h1>
        <form mothod="POST">

            <div class="panel">
                <div class="panel-body">
                  <div class="login-container"> <!-- Added container div -->
                    <!-- <label for="student_email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"อีเมลของอาจารย์โดยใช้ kku.ac.th ",'mod'=>"applicationform"),$_smarty_tpl ) );?>
</label> -->
                    <label for="teacher_email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"อีเมลของอาจารย์โดยใช้ kku.ac.th",'mod'=>"applicationform"),$_smarty_tpl ) );?>
</label>
                    <input type="text" name="teacher_email" id="teacher_email" class="form-control"/>
                </div>
                <!-- เข้าสู่ระบบ -->
                <div class="panel-footer">
                    <div class="login-container"> <!-- Added container div -->
                        <button type="submit" name="loginteacher" class="btn-default pull-right">
                        <i class="process-icon-save"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"เข้าสู่ระบบ",'mod'=>"applicationform"),$_smarty_tpl ) );?>

                    </button> 
                </div>
            </div>
        </form>
        <!--  -->
        <form mothod="POST">
            <button type="submit" name="goback" class="btn-default pull-right">
                <i class="process-icon-save"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"กลับ",'mod'=>"applicationform"),$_smarty_tpl ) );?>

            </button>
        </form>
    </div>
   
  </body>
</html>


<!-- PART CSS นะ -->
<style>
    @import url("https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500&display=swap");
    html {
      font-size: calc(60% + 0.8vmin);
      height: 100%;
      margin: 0;
    }
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      /* margin: 0;
      padding: 0;
      height: 100%;
      box-sizing: border-box; */
      font-family: "Prompt", sans-serif;
      overflow: hidden;
      background: #dfe9f5;
      /* background: white; */
    }
    .wrapper{
        width: 330px;
        padding: 2rem 1rem;
        margin: 50px auto;
        background-color: #fff;
        border-radius: 10px;
        text-align: center;
        box-shadow: #4a55a2;
    }
    h1{
        font-size: 2rem;
        color:#07001f;
        margin-bottom: 1.2rem;
    }
    form input{
        width: 92%;
        outline: none;
        border: 1px solid #fff;
        padding: 12px 20px;
        margin-bottom: 10px;
        border-radius: 20px;
        background-color: #e4e4e4;
    }
    button {
    font-size: 1rem;
    font-family: "Prompt", sans-serif; /* Add this line */
    margin-top: 1.8rem;
    padding: 10px 0;
    border-radius: 5px;
    outline: none;
    border: none;
    width: 90%;
    color: #fff;
    cursor: pointer;
    background-color: #4a55a2;
}
    button:hover {
    background-color: #7895cb;
    transition: 0.5s;
    color: black;
    }
    input:focus{
        border: 1px solid;
    }
  </style><?php }
}
