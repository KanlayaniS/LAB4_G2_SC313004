<?php
/* Smarty version 4.3.1, created on 2024-02-26 15:27:37
  from 'module:applicationformviewstemplatesfrontstudentapplicationform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dc4b79631365_11100363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bcc05074b3c88be6f4521f3e776418c749876cf' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontstudentapplicationform.tpl',
      1 => 1708935997,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dc4b79631365_11100363 (Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['student_email']->value, ENT_QUOTES, 'UTF-8');?>

<form method="post">
    <label for="teacher_email">Teacher Email:</label>
    <input type="email" id="teacher_email" name="teacher_email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['old_data']->value['teacher_email'], ENT_QUOTES, 'UTF-8');?>
" required>
    <label><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['old_data']->value['error'], ENT_QUOTES, 'UTF-8');?>
</label>
    <button type="submit" name="submitapplicationform" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Submit",'mod'=>"applicationform"),$_smarty_tpl ) );?>

    </button>
</form>

<form method="post">
    <button type="submit" name="goback" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Back",'mod'=>"applicationform"),$_smarty_tpl ) );?>

    </button>
</form>
<?php }
}
