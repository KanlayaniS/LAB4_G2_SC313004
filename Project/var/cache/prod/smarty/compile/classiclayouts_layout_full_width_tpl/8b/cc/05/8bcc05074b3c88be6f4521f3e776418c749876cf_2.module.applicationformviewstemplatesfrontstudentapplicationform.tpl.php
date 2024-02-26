<?php
/* Smarty version 4.3.1, created on 2024-02-26 15:41:51
  from 'module:applicationformviewstemplatesfrontstudentapplicationform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dc4ecfee7400_15430017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bcc05074b3c88be6f4521f3e776418c749876cf' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontstudentapplicationform.tpl',
      1 => 1708936181,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dc4ecfee7400_15430017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
    <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Scholarship Application Form'),$_smarty_tpl ) );?>
</h1>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div id="application_form">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="first_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ชื่อ'),$_smarty_tpl ) );?>
:</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required>
        </div>
        <div class="form-group">
            <label for="last_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'นามสกุล'),$_smarty_tpl ) );?>
:</label>
            <input type="text" class="form-control" id="last_name" name="last_name" required>
        </div>
        <div class="form-group">
            <label for="student_id"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'รหัสนักศึกษา'),$_smarty_tpl ) );?>
:</label>
            <input type="text" class="form-control" id="student_id" name="student_id" required>
        </div>
        <div class="form-group">
            <label for="citizen_id"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'รหัสบัตรประชาชน'),$_smarty_tpl ) );?>
:</label>
            <input type="text" class="form-control" id="citizen_id" name="citizen_id" required>
        </div>
        <div class="form-group">
            <label for="year"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ชั้นปีที่'),$_smarty_tpl ) );?>
:</label>
            <select class="form-control" id="year" name="year" required>
                <option value="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1'),$_smarty_tpl ) );?>
</option>
                <option value="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'2'),$_smarty_tpl ) );?>
</option>
                <option value="3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'3'),$_smarty_tpl ) );?>
</option>
                <option value="4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'4'),$_smarty_tpl ) );?>
</option>
                <option value="5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'5'),$_smarty_tpl ) );?>
</option>
                <option value="6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'6'),$_smarty_tpl ) );?>
</option>
                <option value="7"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'7'),$_smarty_tpl ) );?>
</option>
                <option value="8"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'8'),$_smarty_tpl ) );?>
</option>
            </select>
        </div>
        <div class="form-group">
            <label for="major"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'หลักสูตร'),$_smarty_tpl ) );?>
:</label>
            <select class="form-control" id="major" name="major" required>
                <option value="วิทยาการคอมพิวเตอร์"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'วิทยาการคอมพิวเตอร์'),$_smarty_tpl ) );?>
</option>
                <option value="เทคโนโลยีสารสนเทศ"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'เทคโนโลยีสารสนเทศ'),$_smarty_tpl ) );?>
</option>
                <option value="ภูมิสารสนเทศศาสตร์"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ภูมิสารสนเทศศาสตร์'),$_smarty_tpl ) );?>
</option>
                <option value="ปัญญาประดิษฐ์"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ปัญญาประดิษฐ์'),$_smarty_tpl ) );?>
</option>
                <option value="ความมั่นคงปลอดภัยไซเบอร์"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ความมั่นคงปลอดภัยไซเบอร์'),$_smarty_tpl ) );?>
</option>
            </select>
        </div>
        <div class="form-group">
            <label for="GPA"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GPA'),$_smarty_tpl ) );?>
:</label>
            <input type="text" class="form-control" id="GPA" name="GPA" required>
        </div>
        <div class="form-group">
            <label for="phone_number"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'เบอร์โทรศัพท์'),$_smarty_tpl ) );?>
:</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
        </div>
        <div class="form-group">
            <label for="date_of_birth"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'วันเดือนปีเกิด'),$_smarty_tpl ) );?>
:</label>
            <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" required>
        </div>
        <div class="form-group">
            <label for="teacher_email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'อีเมลที่ปรึกษา'),$_smarty_tpl ) );?>
:</label>
            <input type="email" class="form-control" id="teacher_email" name="teacher_email" required pattern=".+@kku\.ac\.th$">
        </div>
        <div class="form-group">
            <label for="address"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ที่อยู่'),$_smarty_tpl ) );?>
:</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="reason_for_scholarship"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'เหตุผลการขอเงินสนับสนุน'),$_smarty_tpl ) );?>
:</label>
            <textarea class="form-control" id="reason_for_scholarship" name="reason_for_scholarship" rows="4" required></textarea>
        </div>
        
        <!-- File Upload Field -->
        <div class="form-group">
            <label for="file_input_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload File'),$_smarty_tpl ) );?>
:</label>
            <input type="file" class="form-control" id="file_input_name" name="file_input_name" required>
        </div>
        
        <!-- Submit Button -->
        <button type="submit" name="submitapplicationform" class="btn-default pull-right">
            <i class="process-icon-save"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Submit",'mod'=>"applicationform"),$_smarty_tpl ) );?>

        </button>
    </form>
    
    <!-- Go back button -->
    <form method="post">
        <button type="submit" name="goback" class="btn-default pull-right">
            <i class="process-icon-save"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Back",'mod'=>"applicationform"),$_smarty_tpl ) );?>

        </button>
    </form>
</div>
<?php }
}
