<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-26 16:02:58
=======
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-26 15:03:52
=======
/* Smarty version 4.3.1, created on 2024-02-26 14:09:51
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
  from 'module:applicationformviewstemplatesfrontstudentmyapplication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65dc53c2525071_02062335',
=======
<<<<<<< HEAD
  'unifunc' => 'content_65dc45e866a3f6_47704070',
=======
  'unifunc' => 'content_65dc393f893b88_23342882',
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fdbc3bce74f170a9f1fa0254889dfb0d8b18d7d' => 
    array (
      0 => 'module:applicationformviewstemplatesfrontstudentmyapplication.tpl',
<<<<<<< HEAD
      1 => 1708932068,
=======
<<<<<<< HEAD
      1 => 1708877010,
=======
      1 => 1708878681,
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_65dc53c2525071_02062335 (Smarty_Internal_Template $_smarty_tpl) {
=======
<<<<<<< HEAD
function content_65dc45e866a3f6_47704070 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48482019165dc45e85054b5_39922056', 'page_content');
?>



=======
function content_65dc393f893b88_23342882 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91742741665dc53c251a177_70595276', 'page_content');
?>


>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
<form method="post">
    <button type="submit" name="goback" class="btn-default pull-right">
        <i class="process-icon-save"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Back",'mod'=>"applicationform"),$_smarty_tpl ) );?>

    </button>
</form>
<?php }
/* {block 'page_content'} */
<<<<<<< HEAD
class Block_91742741665dc53c251a177_70595276 extends Smarty_Internal_Block
=======
<<<<<<< HEAD
class Block_48482019165dc45e85054b5_39922056 extends Smarty_Internal_Block
=======
class Block_21635959865dc393f880043_41230380 extends Smarty_Internal_Block
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
{
public $subBlocks = array (
  'page_content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_91742741665dc53c251a177_70595276',
=======
<<<<<<< HEAD
    0 => 'Block_48482019165dc45e85054b5_39922056',
=======
    0 => 'Block_21635959865dc393f880043_41230380',
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
>>>>>>> faf569ad0585d11786f25feb859f6612e67f17d8
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>สถานะคำร้อง</h2>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['student_email']->value, ENT_QUOTES, 'UTF-8');?>

    <div style="overflow-x:auto;">
        <table class="table">
            <thead>
                <tr>
                    <th>Application Date</th>
                    <th>Application ID</th>
                    <th>Teacher Status</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['applications']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
<<<<<<< HEAD
        <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['application_date'], ENT_QUOTES, 'UTF-8');?>
</p>
        <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['id_application'], ENT_QUOTES, 'UTF-8');?>
</p>
        <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['teacher_status'], ENT_QUOTES, 'UTF-8');?>
</p>
        <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['status'], ENT_QUOTES, 'UTF-8');?>
</p>
    <?php
=======
                <tr>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['application_date'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['id_application'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['teacher_status'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['status'], ENT_QUOTES, 'UTF-8');?>
</td>
                </tr>
                <?php
>>>>>>> 96cec5412928c8e87e116ac547b85a5a59293406
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
