<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-27 19:15:58
=======
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-26 16:02:58
=======
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-26 15:03:52
=======
/* Smarty version 4.3.1, created on 2024-02-26 14:09:51
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  from 'module:applicationformviewstemplatesfrontstudentmyapplication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65ddd27e524816_11845416',
=======
<<<<<<< HEAD
  'unifunc' => 'content_65dc53c2525071_02062335',
=======
<<<<<<< HEAD
  'unifunc' => 'content_65dc45e866a3f6_47704070',
=======
  'unifunc' => 'content_65dc393f893b88_23342882',
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fdbc3bce74f170a9f1fa0254889dfb0d8b18d7d' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontstudentmyapplication.tpl',
<<<<<<< HEAD
      1 => 1709015757,
=======
<<<<<<< HEAD
      1 => 1708932068,
=======
<<<<<<< HEAD
      1 => 1708877010,
=======
      1 => 1708878681,
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_65ddd27e524816_11845416 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ตรวจสอบสถานะคำร้อง</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
  </head>
  <body>
    <div class="table">
      <div class="table_header">
        <p>ตรวจสอบคำร้อง</p>
        <div>
          <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['student_email']->value, ENT_QUOTES, 'UTF-8');?>
</p>
        </div>
      </div>
      <div class="table_section">
        <table>
          <thead>
            <tr>
              <th>วันที่ยื่นคำร้อง</th>
              <th>หมายเลขอ้างอิง</th>
              <th>ความเห็นอาจารย์<br />ที่ปรึกษา</th>
              <th>สถานะคำร้อง</th>
            </tr>
          </thead>
          <tbody>
            <?php
=======
<<<<<<< HEAD
function content_65dc53c2525071_02062335 (Smarty_Internal_Template $_smarty_tpl) {
=======
<<<<<<< HEAD
function content_65dc45e866a3f6_47704070 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48482019165dc45e85054b5_39922056', 'page_content');
?>



=======
function content_65dc393f893b88_23342882 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91742741665dc53c251a177_70595276', 'page_content');
?>


>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
<form method="post">
    <button type="submit" name="goback" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Back",'mod'=>"applicationform"),$_smarty_tpl ) );?>

    </button>
</form>
<?php }
/* {block 'page_content'} */
<<<<<<< HEAD
class Block_91742741665dc53c251a177_70595276 extends Smarty_Internal_Block
=======
<<<<<<< HEAD
class Block_48482019165dc45e85054b5_39922056 extends Smarty_Internal_Block
=======
class Block_21635959865dc393f880043_41230380 extends Smarty_Internal_Block
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
{
public $subBlocks = array (
  'page_content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_91742741665dc53c251a177_70595276',
=======
<<<<<<< HEAD
    0 => 'Block_48482019165dc45e85054b5_39922056',
=======
    0 => 'Block_21635959865dc393f880043_41230380',
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>สถานะคำร้อง</h2>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['student_email']->value, ENT_QUOTES, 'UTF-8');?>

    <div style="overflow-x:auto;">
        <table class="table">
            <thead>
                <tr>
                    <th>Application Date</th>
                    <th>Application ID</th>
                    <th>Teacher Status</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['applications']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <tr>
              <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['application_date'], ENT_QUOTES, 'UTF-8');?>
</td>
              <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['id_application'], ENT_QUOTES, 'UTF-8');?>
</td>
              <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['teacher_status'], ENT_QUOTES, 'UTF-8');?>
</td>
              <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['status'], ENT_QUOTES, 'UTF-8');?>
</td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
        <form method="post">
          <button type="submit" name="goback" class="btn-default pull-right">
            <i class="process-icon-save"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"กลับ",'mod'=>"applicationform"),$_smarty_tpl ) );?>

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
    /* background: white; */
  }
  .table {
    width: 100%;
    table-layout: fixed;
    min-width: 900px;
    border-collapse: collapse;
  }
  .table_header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #4a55a2;
  }
  .table_header p {
    color: white;
  }
  button {
    outline: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  .add_new {
    padding: 10px 20px;
    color: #ffffff;
    background-color: #7895cb;
  }
  input {
    padding: 10px 20px;
    margin: 0 10px;
    outline: none;
    border: 1px solid #0298cf;
    border-radius: 6px;
    color: black;
  }
  ::placeholder {
    color: #4a55a2;
  }
  .table_section {
    height: 650px;
    overflow: auto;
  }
  table {
    width: 100%;
    table-layout: fixed;
    min-height: 100px;
    border-collapse: collapse;
  }
  thead th {
    position: sticky;
    top: 0;
    background-color: #f6f9fc;
    color: #8493a5;
    font-size: 16px;
  }
  th,
  td {
    border-bottom: 1px solid #dddddd;
    padding: 10px 20px;
    word-break: break-all;
    text-align: center;
  }
  form {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50%;
    margin-top: 20px; /* Adjust the margin as needed */
  }
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
    margin: 0 auto;
    display: block;
    border-radius: 25px;
  }
  button:hover {
    background-color: #7895cb;
    transition: 0.5s;
    color: black;
  }
</style>
<?php }
}
