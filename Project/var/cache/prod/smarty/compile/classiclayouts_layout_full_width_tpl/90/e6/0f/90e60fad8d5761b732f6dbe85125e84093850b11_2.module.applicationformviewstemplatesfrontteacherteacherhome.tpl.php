<?php
/* Smarty version 4.3.1, created on 2024-02-27 13:29:24
  from 'module:applicationformviewstemplatesfrontteacherteacherhome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd81444d8292_20734718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90e60fad8d5761b732f6dbe85125e84093850b11' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontteacherteacherhome.tpl',
      1 => 1709015363,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dd81444d8292_20734718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<style>
/* Page content styling */
#page_content {
    margin-top: 20px;

}



/* Heading styling */
h2 {
    color: #0B76BC;
    font-size: 28px;
    margin-top: 20px;
    margin-bottom: 20px; 
    text-align: left;
    font-family: Arial, sans-serif; /* Use a common sans-serif font */
    font-weight: bold; /* Make the text bold */
    text-shadow: 1px 1px 1px rgba(0,0,0,0.2); /* Add a subtle text shadow for depth */
    letter-spacing: 1px; /* Increase letter spacing for improved readability */
    line-height: 1.5; /* Increase line height for better spacing between lines */
}


/* Table styling */
.table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
}

/* Table header styling */
.table th {
    font-size:20px;
    background-color: #0B76BC;
    color: #ffffff;
    padding: 15px 10px;
    text-align: left;
}

/* Table cell styling */
.table td {
    border: 1px solid #cccccc;
    padding: 15px 10px;
}

/* Table column styling */
.table td:nth-child(odd) {
    background-color: #f2f2f2; /* Set background color for odd columns */
}

.table td:nth-child(even) {
    background-color: #ffffff; /* Set background color for even columns */
}

/* Button styling */
.btn-default {
    font-size: 20px;
    background-color: #0B76BC;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Button hover effect */
.btn-default:hover {
    background-color: #00008B;
}

/* Align button to the right */
.pull-right {
    margin-top: 50px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: fit-content; /* Set width based on content */
    font-size: 22px; /* Decrease font size */
}

.h2-container {
    border: 2px solid #0B76BC; /* Border style */
    border-radius: 10px;
    margin-bottom: 20px;
    padding: 5px; /* Padding around the h2 element */
    display: inline-block; /* Display as inline-block to fit content */
}

</style>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13150966765dd81444cd406_48552914', 'page_content');
?>


<form method="POST">
    <button type="submit" name="getlogout" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Logout",'mod'=>"applicationform"),$_smarty_tpl ) );?>

    </button>
</form><?php }
/* {block 'page_content'} */
class Block_13150966765dd81444cd406_48552914 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_13150966765dd81444cd406_48552914',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="h2-container">
    <h2>User: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['teacher_email']->value, ENT_QUOTES, 'UTF-8');?>
</h2>
    </div>

    <div style="overflow-x:auto;">
        <table class="table">
            <thead>
                <tr>
                    <th>Application ID</th>
                    <th>Student Email</th>
                    <th>Application Date</th>
                    <th>Teacher Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['applications']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <tr>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['id_application'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['student_email'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['application_date'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['teacher_status'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <form method="post">
                            <input type="hidden" id="id" name="id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['id_application'], ENT_QUOTES, 'UTF-8');?>
">
                            <button type="submit" name="acknowledge" class="btn-default">
                                <i class="process-icon-save"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"รับทราบ",'mod'=>"applicationform"),$_smarty_tpl ) );?>

                            </button>
                        </form>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
<?php
}
}
/* {/block 'page_content'} */
}
