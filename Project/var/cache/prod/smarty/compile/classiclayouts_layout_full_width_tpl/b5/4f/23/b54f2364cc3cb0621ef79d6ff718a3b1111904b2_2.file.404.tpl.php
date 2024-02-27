<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-26 19:29:19
=======
/* Smarty version 4.3.1, created on 2024-02-26 18:42:55
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\errors\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65dc841f528bf0_21778121',
=======
  'unifunc' => 'content_65dc793fd59e64_10360712',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b54f2364cc3cb0621ef79d6ff718a3b1111904b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\errors\\404.tpl',
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
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_65dc841f528bf0_21778121 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65dc793fd59e64_10360712 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45677946465dc841f5201d9_88845278', "breadcrumb");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123317470065dc793fd50cd2_97251821', "breadcrumb");
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4384781765dc841f520a98_37655667', 'page_title');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123924545365dc793fd51539_17151161', 'page_title');
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorContent", null);?>
  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products available yet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stay tuned! More products will be shown here as they are added.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_970908065dc841f525cc8_35806780', 'page_content_container');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191314676465dc793fd56589_96074648', 'page_content_container');
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "breadcrumb"} */
<<<<<<< HEAD
class Block_45677946465dc841f5201d9_88845278 extends Smarty_Internal_Block
=======
class Block_123317470065dc793fd50cd2_97251821 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
<<<<<<< HEAD
    0 => 'Block_45677946465dc841f5201d9_88845278',
=======
    0 => 'Block_123317470065dc793fd50cd2_97251821',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "breadcrumb"} */
/* {block 'page_title'} */
<<<<<<< HEAD
class Block_4384781765dc841f520a98_37655667 extends Smarty_Internal_Block
=======
class Block_123924545365dc793fd51539_17151161 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public $subBlocks = array (
  'page_title' => 
  array (
<<<<<<< HEAD
    0 => 'Block_4384781765dc841f520a98_37655667',
=======
    0 => 'Block_123924545365dc793fd51539_17151161',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
<<<<<<< HEAD
class Block_970908065dc841f525cc8_35806780 extends Smarty_Internal_Block
=======
class Block_191314676465dc793fd56589_96074648 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public $subBlocks = array (
  'page_content_container' => 
  array (
<<<<<<< HEAD
    0 => 'Block_970908065dc841f525cc8_35806780',
=======
    0 => 'Block_191314676465dc793fd56589_96074648',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errorContent'=>$_smarty_tpl->tpl_vars['errorContent']->value), 0, false);
}
}
/* {/block 'page_content_container'} */
}
