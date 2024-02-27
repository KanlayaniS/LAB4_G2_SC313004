<?php
/* Smarty version 4.3.1, created on 2024-02-27 21:38:23
  from 'module:applicationformviewstemplatesfrontteacherteacherhome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65ddf3df99bd64_90591430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90e60fad8d5761b732f6dbe85125e84093850b11' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontteacherteacherhome.tpl',
      1 => 1709044641,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ddf3df99bd64_90591430 (Smarty_Internal_Template $_smarty_tpl) {
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
            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['teacher_email']->value, ENT_QUOTES, 'UTF-8');?>
</p>
        </div>
      </div>
      <div class="table_section">
        <table>
          <thead>
            <tr>
              <th>วันที่ยื่นคำร้อง</th>
              <th>หมายเลขอ้างอิง</th>
              <th>ชื่อ-สกุล</th>
              <!-- <th>ความเห็นอาจารย์<br />ที่ปรึกษา</th> -->
              <th>ความเห็นอาจารย์<br />ที่ปรึกษา</th>
              <th>หลักฐานแนบ</th>
              <th>รายละเอียดเพิ่มเติม</th>
              <th>การรับทราบ</th>
            </tr>
          </thead>
          <tbody>
            <?php
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
              <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['first_name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['last_name'], ENT_QUOTES, 'UTF-8');?>
</td>
              <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['teacher_status'], ENT_QUOTES, 'UTF-8');?>
</td>
              <td>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['filename']) {?>
                    <div>
                        <a  href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['localhost']->value, ENT_QUOTES, 'UTF-8');?>
/evidence/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['filename'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">ดูไฟล์แนบ</a>
                    </div>
                <?php }?>
              </td>
              <td>
                <a class="no-href" onclick="openPopup(this, '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['id_application'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['first_name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['last_name'], ENT_QUOTES, 'UTF-8');?>
', 
                '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['application_date'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['student_id'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['year'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['major'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['GPA'], ENT_QUOTES, 'UTF-8');?>
',
                '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['phone_number'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['student_email'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['reason_for_scholarship'], ENT_QUOTES, 'UTF-8');?>
')">
                    <i class="process-icon-save"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"รายละเอียด",'mod'=>"applicationform"),$_smarty_tpl ) );?>

                </a>
              </td>
              <td>
                <form method="post">
                  <input
                    type="hidden"
                    id="id"
                    name="id"
                    value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['id_application'], ENT_QUOTES, 'UTF-8');?>
"
                  />
                  <button type="submit" name="acknowledge" class="btn-default">
                    <i class="process-icon-save"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"รับทราบ",'mod'=>"applicationform"),$_smarty_tpl ) );?>

                  </button>
                </form>
              </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
        <form method="POST">
          <button type="submit" name="getlogout" class="btn-default pull-right">
            <i class="process-icon-save"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"ออกจากระบบ",'mod'=>"applicationform"),$_smarty_tpl ) );?>

          </button>
        </form>
      </div>
    </div>
    <div id="popup" class="popup">
      <span class="close" onclick="closePopup()">&times;</span>
      <p><strong>หมายเลขอ้างอิง:</strong> <span id="appId"></span></p>
      <p><strong>ชื่อ-สกุล:</strong> <span id="studentName"></span></p>
      <p><strong>วันที่ยื่น:</strong> <span id="appDate"></span></p>
      <p><strong>รหัสนักศึกษา:</strong> <span id="studentId"></span></p>
      <p><strong>ชั้นปีที่:</strong> <span id="studentYear"></span></p>
      <p><strong>หลักสูตร:</strong> <span id="studentMajor"></span></p>
      <p><strong>GPA:</strong> <span id="studentGPA"></span></p>
      <p><strong>หมายเลขโทรศัพท์:</strong> <span id="studentPhone"></span></p>
      <p><strong>อีเมล:</strong> <span id="studentEmail"></span></p>
      <p><strong>เหตุผลการขอเงินสนับสนุน:</strong> <span id="studentReason"></span></p>
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
  /* Popup container */
  .popup {
    display: none;
    position: absolute;
    background-color: white;
    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    z-index: 9999;
  }

  /* Close button */
  .close {
    position: absolute;
    top: 5px;
    right: 5px;
    cursor: pointer;
  }
  a.no-href {
    cursor: pointer; /* Change cursor to pointer to indicate interactivity */
    text-decoration: underline; /* Add underline to text */
    color: blue; /* Set text color to blue */
  }
</style>

<?php echo '<script'; ?>
>
// Function to open the popup
function openPopup(button, applicationId, studentName, appDate, studentId, studentYear, studentMajor, studentGPA, studentPhone, studentEmail, studentReason) {
  // Get the position of the button
  var rect = button.getBoundingClientRect();
  
  // Set the position of the popup
  var popup = document.getElementById("popup");
  popup.style.top = (rect.top + window.scrollY) + "px";
  popup.style.left = (rect.left + window.scrollX) + "px";
  
  // Populate the popup content
  document.getElementById("appId").textContent = applicationId;
  document.getElementById("studentName").textContent = studentName;
  document.getElementById("appDate").textContent = appDate;
  document.getElementById("studentId").textContent = studentId;
  document.getElementById("studentYear").textContent = studentYear;
  document.getElementById("studentMajor").textContent = studentMajor;
  document.getElementById("studentGPA").textContent = studentGPA;
  document.getElementById("studentPhone").textContent = studentPhone;
  document.getElementById("studentEmail").textContent = studentEmail;
  document.getElementById("studentReason").textContent = studentReason;

  // Display the popup
  popup.style.display = "block";
}

// Function to close the popup
function closePopup() {
  document.getElementById("popup").style.display = "none";
}

// Close the popup if the user clicks outside of it
window.onclick = function(event) {
  var popup = document.getElementById("popup");
  if (event.target == popup) {
    popup.style.display = "none";
  }
}
<?php echo '</script'; ?>
>
<?php }
}
