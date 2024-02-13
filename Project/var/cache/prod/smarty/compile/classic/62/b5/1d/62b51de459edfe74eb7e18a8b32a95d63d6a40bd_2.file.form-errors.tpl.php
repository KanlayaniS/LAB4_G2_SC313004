<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:45
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:32:36
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94fdb2cfd2_86597319',
=======
  'unifunc' => 'content_65cb99a458fdf6_16131537',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62b51de459edfe74eb7e18a8b32a95d63d6a40bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\_partials\\form-errors.tpl',
<<<<<<< HEAD
      1 => 1707837723,
=======
      1 => 1707824457,
>>>>>>> master2
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_65cb94fdb2cfd2_86597319 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb99a458fdf6_16131537 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\se_project\\Project\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (smarty_modifier_count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64216398465cb94fdb2b081_12525158', 'form_errors');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70440266365cb99a458d260_59927551', 'form_errors');
>>>>>>> master2
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
<<<<<<< HEAD
class Block_64216398465cb94fdb2b081_12525158 extends Smarty_Internal_Block
=======
class Block_70440266365cb99a458d260_59927551 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'form_errors' => 
  array (
<<<<<<< HEAD
    0 => 'Block_64216398465cb94fdb2b081_12525158',
=======
    0 => 'Block_70440266365cb99a458d260_59927551',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
          <li class="alert alert-danger"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'nl2br' ][ 0 ], array( $_smarty_tpl->tpl_vars['error']->value ));?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
