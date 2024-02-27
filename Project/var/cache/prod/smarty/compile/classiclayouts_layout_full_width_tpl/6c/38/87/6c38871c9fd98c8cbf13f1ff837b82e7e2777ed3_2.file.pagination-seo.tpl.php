<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-26 19:29:20
=======
/* Smarty version 4.3.1, created on 2024-02-26 18:42:56
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\_partials\pagination-seo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65dc8420251c07_93928124',
=======
  'unifunc' => 'content_65dc7940a199b8_18674945',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c38871c9fd98c8cbf13f1ff837b82e7e2777ed3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\_partials\\pagination-seo.tpl',
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
function content_65dc8420251c07_93928124 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65dc7940a199b8_18674945 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\se_project\\Project\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['pagination'])) && $_smarty_tpl->tpl_vars['listing']->value['pagination']['should_be_displayed']) {?>
    <?php $_smarty_tpl->_assignInScope('page_nb', 1);?>
    <?php if ((isset($_GET['page']))) {?>
        <?php $_smarty_tpl->_assignInScope('page_nb', (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_GET['page'] )) ?? null)===null||$tmp==='' ? 1 ?? null : $tmp));?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('queryPage', ('?page=').($_smarty_tpl->tpl_vars['page_nb']->value));?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['page']) ? $_smarty_tpl->tpl_vars['page']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['canonical'] = smarty_modifier_replace($_smarty_tpl->tpl_vars['page']->value['canonical'],$_smarty_tpl->tpl_vars['queryPage']->value,'');
$_smarty_tpl->_assignInScope('page', $_tmp_array);?>

    <?php $_smarty_tpl->_assignInScope('prev', false);?>
    <?php $_smarty_tpl->_assignInScope('next', false);?>
    <?php if (($_smarty_tpl->tpl_vars['page_nb']->value-1) == 1) {?>
        <?php $_smarty_tpl->_assignInScope('prev', $_smarty_tpl->tpl_vars['page']->value['canonical']);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['page_nb']->value > 2) {?>
        <?php $_smarty_tpl->_assignInScope('prev', ((($_smarty_tpl->tpl_vars['page']->value['canonical']).('?page=')).(($_smarty_tpl->tpl_vars['page_nb']->value-1))));?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to']) {?>
        <?php $_smarty_tpl->_assignInScope('next', ((($_smarty_tpl->tpl_vars['page']->value['canonical']).('?page=')).(($_smarty_tpl->tpl_vars['page_nb']->value+1))));?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['prev']->value) {?><link rel="prev" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prev']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['next']->value) {?><link rel="next" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['next']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }
}
}
}
