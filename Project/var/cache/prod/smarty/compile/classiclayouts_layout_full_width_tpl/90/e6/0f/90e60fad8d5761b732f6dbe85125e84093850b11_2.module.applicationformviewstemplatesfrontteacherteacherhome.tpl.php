<?php
/* Smarty version 4.3.1, created on 2024-02-25 23:03:46
  from 'module:applicationformviewstemplatesfrontteacherteacherhome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65db64e2ecfcd6_47901779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90e60fad8d5761b732f6dbe85125e84093850b11' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontteacherteacherhome.tpl',
      1 => 1708872047,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65db64e2ecfcd6_47901779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<form mothod="POST">
    <button type="submit" name="getlogout" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Logout",'mod'=>"applicationform"),$_smarty_tpl ) );?>

    </button>
</form>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78996201965db64e2ebf449_98581212', 'page_content');
}
/* {block 'page_content'} */
class Block_78996201965db64e2ebf449_98581212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_78996201965db64e2ebf449_98581212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['teacher_email']->value, ENT_QUOTES, 'UTF-8');?>
</h2>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['student_email']->value, ENT_QUOTES, 'UTF-8');?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['applications']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['id_application'], ENT_QUOTES, 'UTF-8');?>
</p>
        <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['student_email'], ENT_QUOTES, 'UTF-8');?>
</p>
        <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['application_date'], ENT_QUOTES, 'UTF-8');?>
</p>
        <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['teacher_status'], ENT_QUOTES, 'UTF-8');?>
</p>
        <form method="post">
            <input type="hidden" id="id" name="id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['id_application'], ENT_QUOTES, 'UTF-8');?>
">
            <button type="submit" name="acknowledge" class="btn-default pull-right">
                <i class="process-icon-save"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"รับทราบ",'mod'=>"applicationform"),$_smarty_tpl ) );?>

            </button>
        </form>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'page_content'} */
}
