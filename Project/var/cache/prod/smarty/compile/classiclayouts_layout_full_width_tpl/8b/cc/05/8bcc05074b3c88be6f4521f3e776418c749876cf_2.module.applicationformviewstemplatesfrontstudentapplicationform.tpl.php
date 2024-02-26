<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-26 14:42:34
=======
/* Smarty version 4.3.1, created on 2024-02-26 16:06:08
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
  from 'module:applicationformviewstemplatesfrontstudentapplicationform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65dc40eaa6e028_81401330',
=======
  'unifunc' => 'content_65dc5480102811_07669243',
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bcc05074b3c88be6f4521f3e776418c749876cf' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontstudentapplicationform.tpl',
<<<<<<< HEAD
      1 => 1708932907,
=======
      1 => 1708938343,
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_65dc40eaa6e028_81401330 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65dc5480102811_07669243 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
    <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Scholarship Application Form'),$_smarty_tpl ) );?>
</h1>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div id="application_form">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="first_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ชื่อ'),$_smarty_tpl ) );?>
:</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['old_data']->value['first_name'], ENT_QUOTES, 'UTF-8');?>
" required>
        </div>
        <div class="form-group">
            <label for="last_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'นามสกุล'),$_smarty_tpl ) );?>
:</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['old_data']->value['last_name'], ENT_QUOTES, 'UTF-8');?>
" required>
        </div>
        <div class="form-group">
            <label for="student_id"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'รหัสนักศึกษา'),$_smarty_tpl ) );?>
:</label>
            <input type="text" class="form-control" id="student_id" name="student_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['old_data']->value['student_id'], ENT_QUOTES, 'UTF-8');?>
" required>
        </div>
        <div class="form-group">
            <label for="citizen_id"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'รหัสบัตรประชาชน'),$_smarty_tpl ) );?>
:</label>
            <input type="text" class="form-control" id="citizen_id" name="citizen_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['old_data']->value['citizen_id'], ENT_QUOTES, 'UTF-8');?>
" required>
        </div>
        <div class="form-group">
            <label for="year"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ชั้นปีที่'),$_smarty_tpl ) );?>
:</label>
            <select class="form-control" id="year" name="year" required>
                <option value="1" <?php if ($_smarty_tpl->tpl_vars['old_data']->value['year'] == 1) {?>selected<?php }?>>1</option>
                <option value="2" <?php if ($_smarty_tpl->tpl_vars['old_data']->value['year'] == 2) {?>selected<?php }?>>2</option>
                <option value="3" <?php if ($_smarty_tpl->tpl_vars['old_data']->value['year'] == 3) {?>selected<?php }?>>3</option>
                <option value="4" <?php if ($_smarty_tpl->tpl_vars['old_data']->value['year'] == 4) {?>selected<?php }?>>4</option>
                <option value="5" <?php if ($_smarty_tpl->tpl_vars['old_data']->value['year'] == 5) {?>selected<?php }?>>5</option>
                <option value="6" <?php if ($_smarty_tpl->tpl_vars['old_data']->value['year'] == 6) {?>selected<?php }?>>6</option>
                <option value="7" <?php if ($_smarty_tpl->tpl_vars['old_data']->value['year'] == 7) {?>selected<?php }?>>7</option>
                <option value="8" <?php if ($_smarty_tpl->tpl_vars['old_data']->value['year'] == 8) {?>selected<?php }?>>8</option>
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
            <input type="text" class="form-control" id="GPA" name="GPA" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['old_data']->value['GPA'], ENT_QUOTES, 'UTF-8');?>
" required>
        </div>
        <div class="form-group">
            <label for="phone_number"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'เบอร์โทรศัพท์'),$_smarty_tpl ) );?>
:</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['old_data']->value['phone_number'], ENT_QUOTES, 'UTF-8');?>
" required>
        </div>
        <div class="form-group">
            <label for="date_of_birth"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'วันเดือนปีเกิด'),$_smarty_tpl ) );?>
:</label>
            <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['old_data']->value['date_of_birth'], ENT_QUOTES, 'UTF-8');?>
" required>
        </div>
        <div class="form-group">
            <label for="teacher_email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'อีเมลที่ปรึกษา'),$_smarty_tpl ) );?>
:</label>
            <input type="email" class="form-control" id="teacher_email" name="teacher_email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['old_data']->value['teacher_email'], ENT_QUOTES, 'UTF-8');?>
" required pattern=".+@kku\.ac\.th$">
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['old_data']->value['error'], ENT_QUOTES, 'UTF-8');?>

        </div>
        <div class="form-group">
            <label for="address"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ที่อยู่'),$_smarty_tpl ) );?>
:</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['old_data']->value['address'], ENT_QUOTES, 'UTF-8');?>
" required>
        </div>
        <div class="form-group">
            <label for="reason_for_scholarship"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'เหตุผลการขอเงินสนับสนุน'),$_smarty_tpl ) );?>
:</label>
            <textarea class="form-control" id="reason_for_scholarship" name="reason_for_scholarship" rows="4" required><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['old_data']->value['reason_for_scholarship'], ENT_QUOTES, 'UTF-8');?>
</textarea>
        </div>
        
        <!-- File Upload Field -->
        <div class="form-group">
            <label for="file_input_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload File'),$_smarty_tpl ) );?>
:</label>
            <input type="file" class="form-control" id="file_input_name" name="file_input_name">
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
