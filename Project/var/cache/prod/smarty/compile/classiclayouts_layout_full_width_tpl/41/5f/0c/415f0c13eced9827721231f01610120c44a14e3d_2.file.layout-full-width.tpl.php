<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-26 19:29:19
=======
/* Smarty version 4.3.1, created on 2024-02-26 18:42:56
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65dc841f77aaf6_09101387',
=======
  'unifunc' => 'content_65dc7940068409_90740174',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '415f0c13eced9827721231f01610120c44a14e3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\layouts\\layout-full-width.tpl',
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
function content_65dc841f77aaf6_09101387 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65dc7940068409_90740174 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24675999265dc841f778543_63862817', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114281687365dc841f778c14_59864502', 'right_column');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157944528465dc7940065a71_57213282', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160656289965dc7940066267_08215241', 'right_column');
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5259089065dc841f779111_37270670', 'content_wrapper');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162278690765dc7940066727_58072726', 'content_wrapper');
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
<<<<<<< HEAD
class Block_24675999265dc841f778543_63862817 extends Smarty_Internal_Block
=======
class Block_157944528465dc7940065a71_57213282 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public $subBlocks = array (
  'left_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_24675999265dc841f778543_63862817',
=======
    0 => 'Block_157944528465dc7940065a71_57213282',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
<<<<<<< HEAD
class Block_114281687365dc841f778c14_59864502 extends Smarty_Internal_Block
=======
class Block_160656289965dc7940066267_08215241 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_114281687365dc841f778c14_59864502',
=======
    0 => 'Block_160656289965dc7940066267_08215241',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
<<<<<<< HEAD
class Block_26858479865dc841f779f37_03649300 extends Smarty_Internal_Block
=======
class Block_134272946765dc7940067871_28231662 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
<<<<<<< HEAD
class Block_5259089065dc841f779111_37270670 extends Smarty_Internal_Block
=======
class Block_162278690765dc7940066727_58072726 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
    0 => 'Block_5259089065dc841f779111_37270670',
  ),
  'content' => 
  array (
    0 => 'Block_26858479865dc841f779f37_03649300',
=======
    0 => 'Block_162278690765dc7940066727_58072726',
  ),
  'content' => 
  array (
    0 => 'Block_134272946765dc7940067871_28231662',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="js-content-wrapper col-xs-12">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26858479865dc841f779f37_03649300', 'content', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134272946765dc7940067871_28231662', 'content', $this->tplIndex);
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
