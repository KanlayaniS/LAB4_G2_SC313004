<?php
/* Smarty version 4.3.1, created on 2024-02-12 23:18:40
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65ca44e0e42dc0_10704066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbe6be0a6149bea409e1b28cb235aba774e956ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1707747753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ca44e0e42dc0_10704066 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
