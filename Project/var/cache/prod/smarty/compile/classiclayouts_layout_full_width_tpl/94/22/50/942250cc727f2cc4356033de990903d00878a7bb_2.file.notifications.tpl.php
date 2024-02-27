<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-26 19:29:20
=======
/* Smarty version 4.3.1, created on 2024-02-26 18:42:57
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\_partials\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65dc8420b3c582_68627407',
=======
  'unifunc' => 'content_65dc79413605e4_76337709',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '942250cc727f2cc4356033de990903d00878a7bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\_partials\\notifications.tpl',
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
function content_65dc8420b3c582_68627407 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65dc79413605e4_76337709 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['notifications']->value))) {?>
<aside id="notifications">
  <div class="notifications-container container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192513275665dc8420b36790_99578934', 'notifications_error');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169272364465dc794135a2d6_94619474', 'notifications_error');
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12975332765dc8420b38395_60300438', 'notifications_warning');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26425374265dc794135c1a2_05989883', 'notifications_warning');
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155195252965dc8420b39a94_16506042', 'notifications_success');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205446666365dc794135d821_20052726', 'notifications_success');
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126282257565dc8420b3b153_80455612', 'notifications_info');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177954697265dc794135f2e1_21257460', 'notifications_info');
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>

    <?php }?>
  </div>
</aside>
<?php }
}
/* {block 'notifications_error'} */
<<<<<<< HEAD
class Block_192513275665dc8420b36790_99578934 extends Smarty_Internal_Block
=======
class Block_169272364465dc794135a2d6_94619474 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public $subBlocks = array (
  'notifications_error' => 
  array (
<<<<<<< HEAD
    0 => 'Block_192513275665dc8420b36790_99578934',
=======
    0 => 'Block_169272364465dc794135a2d6_94619474',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
<<<<<<< HEAD
class Block_12975332765dc8420b38395_60300438 extends Smarty_Internal_Block
=======
class Block_26425374265dc794135c1a2_05989883 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
<<<<<<< HEAD
    0 => 'Block_12975332765dc8420b38395_60300438',
=======
    0 => 'Block_26425374265dc794135c1a2_05989883',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
<<<<<<< HEAD
class Block_155195252965dc8420b39a94_16506042 extends Smarty_Internal_Block
=======
class Block_205446666365dc794135d821_20052726 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public $subBlocks = array (
  'notifications_success' => 
  array (
<<<<<<< HEAD
    0 => 'Block_155195252965dc8420b39a94_16506042',
=======
    0 => 'Block_205446666365dc794135d821_20052726',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
<<<<<<< HEAD
class Block_126282257565dc8420b3b153_80455612 extends Smarty_Internal_Block
=======
class Block_177954697265dc794135f2e1_21257460 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public $subBlocks = array (
  'notifications_info' => 
  array (
<<<<<<< HEAD
    0 => 'Block_126282257565dc8420b3b153_80455612',
=======
    0 => 'Block_177954697265dc794135f2e1_21257460',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_info'} */
}
