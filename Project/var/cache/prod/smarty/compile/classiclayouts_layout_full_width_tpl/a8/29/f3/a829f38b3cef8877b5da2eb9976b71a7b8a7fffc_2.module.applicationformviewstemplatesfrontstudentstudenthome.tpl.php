<?php
/* Smarty version 4.3.1, created on 2024-02-27 20:31:03
  from 'module:applicationformviewstemplatesfrontstudentstudenthome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dde417362e87_15010868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a829f38b3cef8877b5da2eb9976b71a7b8a7fffc' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontstudentstudenthome.tpl',
      1 => 1709039300,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dde417362e87_15010868 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Part Code  tpl -->
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:th="http://www.thymeleaf.org%22%3E/

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>StudentHome</title>
</head>

<body>
    <div class="main-container">
        <div class="detail-first">
            <h1>เว็บไซต์ขอเงินสนับสนุนสำหรับนักศึกษา CP</h1>
            <h3> อีเมล : <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['student_email']->value, ENT_QUOTES, 'UTF-8');?>
</h3>
        </div>

        <div id="container">
            <form mothod="POST">
                <button type="submit" name="applicationform" class="btn-default pull-right">
                    <i class="process-icon-save"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"แบบฟอร์มขอเงินสนับสนุน",'mod'=>"applicationform"),$_smarty_tpl ) );?>

                </button>
            </form>


            <form mothod="POST">
                <button type="submit" name="myapplication" class="btn-default pull-right">
                    <i class="process-icon-save"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"สถานะคำร้อง",'mod'=>"applicationform"),$_smarty_tpl ) );?>

                </button>
            </form>

            <form mothod="POST">
                <button type="submit" name="getlogout" class="btn-default pull-right">
                    <i class="process-icon-save"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"ออกจากระบบ",'mod'=>"applicationform"),$_smarty_tpl ) );?>

                </button>
            </form>
        </div>
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
    body {
    margin: 0;
    padding: 0;
    height: 100%;
    box-sizing: border-box;
    font-family: "Prompt", sans-serif;
    background: white;

    }
    .main-container {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center; 
    background-color: #dfe9f5;
    }
    .detail-first
    {
    color: #1c3879;
    text-align: center;
    margin-top: 5px;
    margin-bottom: 5px;
    min-height: 100px;
    }
    .container {
    width: 100%;
    display: flex;
    background-color: black;
    }
      /* กล่อง button นะ */
    button {
    background-color: #4a55a2;
    color: white;
    width: 250px;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 5px;
    align-items: center;
    font-family: "Prompt", sans-serif;
    }
    button:hover {
    background-color: #7895cb;
    transition: 0.5s;
    color: black;
    }



</style>
<?php }
}
