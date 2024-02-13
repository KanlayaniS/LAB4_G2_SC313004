<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:45
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:32:36
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\_partials\login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94fdafe273_38541658',
=======
  'unifunc' => 'content_65cb99a42d9da3_21816511',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a397cb6448ce748210b906a9b6fed5f043fa1cd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\_partials\\login-form.tpl',
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
function content_65cb94fdafe273_38541658 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb99a42d9da3_21816511 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67708474565cb94fdafd3b8_74943086', 'form_buttons');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202053846165cb99a42d8e90_63843110', 'form_buttons');
>>>>>>> master2
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/_partials/login-form.tpl');
}
/* {block 'form_buttons'} */
<<<<<<< HEAD
class Block_67708474565cb94fdafd3b8_74943086 extends Smarty_Internal_Block
=======
class Block_202053846165cb99a42d8e90_63843110 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'form_buttons' => 
  array (
<<<<<<< HEAD
    0 => 'Block_67708474565cb94fdafd3b8_74943086',
=======
    0 => 'Block_202053846165cb99a42d8e90_63843110',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <button
    class="continue btn btn-primary float-xs-right"
    name="continue"
    data-link-action="sign-in"
    type="submit"
    value="1"
  >
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  </button>
<?php
}
}
/* {/block 'form_buttons'} */
}
