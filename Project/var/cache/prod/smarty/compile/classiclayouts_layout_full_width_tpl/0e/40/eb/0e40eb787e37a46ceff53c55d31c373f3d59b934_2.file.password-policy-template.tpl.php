<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-26 19:29:21
=======
/* Smarty version 4.3.1, created on 2024-02-26 18:42:57
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\_partials\password-policy-template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65dc84210853a1_85102590',
=======
  'unifunc' => 'content_65dc794178f434_89049141',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e40eb787e37a46ceff53c55d31c373f3d59b934' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\_partials\\password-policy-template.tpl',
<<<<<<< HEAD
      1 => 1708932914,
=======
      1 => 1708932072,
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_65dc84210853a1_85102590 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65dc794178f434_89049141 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>

<template id="password-feedback">
  <div
    class="password-strength-feedback mt-1"
    style="display: none;"
  >
    <div class="progress-container">
      <div class="progress mb-1">
        <div class="progress-bar" role="progressbar" value="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript" class="js-hint-password">
      <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['password-policy']['feedbacks'])) {?>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['password-policy']['feedbacks'] ));?>

      <?php }?>
    <?php echo '</script'; ?>
>

    <div class="password-strength-text"></div>
    <div class="password-requirements">
      <p class="password-requirements-length" data-translation="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter a password between %s and %s characters','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
">
        <i class="material-icons">check_circle</i>
        <span></span>
      </p>
      <p class="password-requirements-score" data-translation="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum score must be: %s','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
">
        <i class="material-icons">check_circle</i>
        <span></span>
      </p>
    </div>
  </div>
</template>
<?php }
}
