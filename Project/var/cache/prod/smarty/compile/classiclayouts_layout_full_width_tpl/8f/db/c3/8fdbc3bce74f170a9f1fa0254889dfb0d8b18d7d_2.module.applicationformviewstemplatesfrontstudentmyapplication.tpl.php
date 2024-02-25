<?php
/* Smarty version 4.3.1, created on 2024-02-25 23:03:05
  from 'module:applicationformviewstemplatesfrontstudentmyapplication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65db64b97dfbe1_00207516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fdbc3bce74f170a9f1fa0254889dfb0d8b18d7d' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontstudentmyapplication.tpl',
      1 => 1708876981,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65db64b97dfbe1_00207516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119401964665db64b97c9748_29783458', 'page_content');
?>

<form method="post">
    <button type="submit" name="goback" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Back",'mod'=>"applicationform"),$_smarty_tpl ) );?>

    </button>
</form><?php }
/* {block 'page_content'} */
class Block_119401964665db64b97c9748_29783458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_119401964665db64b97c9748_29783458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>My test page content</h2>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['student_email']->value, ENT_QUOTES, 'UTF-8');?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['applications']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <div>
            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['application_date'], ENT_QUOTES, 'UTF-8');?>
</p>
            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['id_application'], ENT_QUOTES, 'UTF-8');?>
</p>
            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['teacher_status'], ENT_QUOTES, 'UTF-8');?>
</p>
            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['status'], ENT_QUOTES, 'UTF-8');?>
</p>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'page_content'} */
}
