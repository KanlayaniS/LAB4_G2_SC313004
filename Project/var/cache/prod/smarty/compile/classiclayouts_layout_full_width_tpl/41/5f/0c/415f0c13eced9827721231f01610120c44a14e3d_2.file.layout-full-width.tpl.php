<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:13:21
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:34:40
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb9521d2c871_87823650',
=======
  'unifunc' => 'content_65cb9a207dbfd0_69028192',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '415f0c13eced9827721231f01610120c44a14e3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\layouts\\layout-full-width.tpl',
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
function content_65cb9521d2c871_87823650 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb9a207dbfd0_69028192 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186785913665cb9521d29965_60665293', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212374850465cb9521d2a391_26729618', 'right_column');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194777703365cb9a207d8820_10411466', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54386609965cb9a207d9231_42732731', 'right_column');
>>>>>>> master2
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6728003065cb9521d2aaf4_47264662', 'content_wrapper');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177967378565cb9a207d9999_31653572', 'content_wrapper');
>>>>>>> master2
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
<<<<<<< HEAD
class Block_186785913665cb9521d29965_60665293 extends Smarty_Internal_Block
=======
class Block_194777703365cb9a207d8820_10411466 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'left_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_186785913665cb9521d29965_60665293',
=======
    0 => 'Block_194777703365cb9a207d8820_10411466',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
<<<<<<< HEAD
class Block_212374850465cb9521d2a391_26729618 extends Smarty_Internal_Block
=======
class Block_54386609965cb9a207d9231_42732731 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_212374850465cb9521d2a391_26729618',
=======
    0 => 'Block_54386609965cb9a207d9231_42732731',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
<<<<<<< HEAD
class Block_8014782465cb9521d2b777_79780395 extends Smarty_Internal_Block
=======
class Block_82575399665cb9a207dae55_03887162 extends Smarty_Internal_Block
>>>>>>> master2
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
class Block_6728003065cb9521d2aaf4_47264662 extends Smarty_Internal_Block
=======
class Block_177967378565cb9a207d9999_31653572 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
    0 => 'Block_6728003065cb9521d2aaf4_47264662',
  ),
  'content' => 
  array (
    0 => 'Block_8014782465cb9521d2b777_79780395',
=======
    0 => 'Block_177967378565cb9a207d9999_31653572',
  ),
  'content' => 
  array (
    0 => 'Block_82575399665cb9a207dae55_03887162',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="js-content-wrapper col-xs-12">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8014782465cb9521d2b777_79780395', 'content', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82575399665cb9a207dae55_03887162', 'content', $this->tplIndex);
>>>>>>> master2
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
