<?php
/* Smarty version 4.3.1, created on 2024-02-14 01:08:05
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65cbb005d5dee8_40754186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f15df677534776581f9f5cfc69cebf20d0e7f86b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1707847184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cbb005d5dee8_40754186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\se_project\\Project\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\f1\\5d\\f6\\f15df677534776581f9f5cfc69cebf20d0e7f86b_2.file.helpers.tpl.php',
    'uid' => 'f15df677534776581f9f5cfc69cebf20d0e7f86b',
    'call_name' => 'smarty_template_function_renderLogo_191965312165cbb005d55329_94421512',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_191965312165cbb005d55329_94421512 */
if (!function_exists('smarty_template_function_renderLogo_191965312165cbb005d55329_94421512')) {
function smarty_template_function_renderLogo_191965312165cbb005d55329_94421512(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_191965312165cbb005d55329_94421512 */
}
