<?php
/* Smarty version 4.3.1, created on 2024-01-29 06:10:33
  from 'C:\xampp\htdocs\se_project\Project\admin\themes\default\template\controllers\images\helpers\list\list_action_delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b73349ddc454_74988246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cd2920c91c951648704aa1015841d7c8834efca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\admin\\themes\\default\\template\\controllers\\images\\helpers\\list\\list_action_delete.tpl',
      1 => 1695892354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b73349ddc454_74988246 (Smarty_Internal_Template $_smarty_tpl) {
?> <a href="#"
 title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
"
 class="delete"
 onclick="
  <?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>
    var modalConfirmDeleteType = $('#modalConfirmDeleteType');
    $('.btn-confirm-delete-images-type', modalConfirmDeleteType).attr('data-confirm-url', '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
');
    modalConfirmDeleteType.modal('show');
  <?php } else { ?>
    event.stopPropagation();event.preventDefault()
  <?php }?>
">
<i class="icon-trash"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
