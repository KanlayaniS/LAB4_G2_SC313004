<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-26 19:29:20
=======
/* Smarty version 4.3.1, created on 2024-02-26 18:42:57
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\errors\not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65dc8420d17ad3_70956516',
=======
  'unifunc' => 'content_65dc7941555712_02939222',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca11e457baad270fa0af5bbd4adc0dd53ab5b22d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\errors\\not-found.tpl',
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
function content_65dc8420d17ad3_70956516 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65dc7941555712_02939222 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127668884665dc8420d145d7_84276137', 'page_content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58450529165dc7941552562_18562487', 'page_content');
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>

</section>
<?php }
/* {block "error_content"} */
<<<<<<< HEAD
class Block_64146841765dc8420d14c19_41452021 extends Smarty_Internal_Block
=======
class Block_49120197865dc7941552b33_66983540 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['errorContent']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['errorContent']->value;?>

      <?php } else { ?>
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This page could not be found','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Try to search our catalog, you may find what you are looking for!','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
      <?php }?>
    <?php
}
}
/* {/block "error_content"} */
/* {block 'search'} */
<<<<<<< HEAD
class Block_141250535765dc8420d16842_64916205 extends Smarty_Internal_Block
=======
class Block_147561463865dc7941554578_27342520 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
<<<<<<< HEAD
class Block_204660029865dc8420d170b8_95620665 extends Smarty_Internal_Block
=======
class Block_163050844165dc7941554d86_47590788 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
<<<<<<< HEAD
class Block_127668884665dc8420d145d7_84276137 extends Smarty_Internal_Block
=======
class Block_58450529165dc7941552562_18562487 extends Smarty_Internal_Block
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
{
public $subBlocks = array (
  'page_content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_127668884665dc8420d145d7_84276137',
  ),
  'error_content' => 
  array (
    0 => 'Block_64146841765dc8420d14c19_41452021',
  ),
  'search' => 
  array (
    0 => 'Block_141250535765dc8420d16842_64916205',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_204660029865dc8420d170b8_95620665',
=======
    0 => 'Block_58450529165dc7941552562_18562487',
  ),
  'error_content' => 
  array (
    0 => 'Block_49120197865dc7941552b33_66983540',
  ),
  'search' => 
  array (
    0 => 'Block_147561463865dc7941554578_27342520',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_163050844165dc7941554d86_47590788',
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64146841765dc8420d14c19_41452021', "error_content", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49120197865dc7941552b33_66983540', "error_content", $this->tplIndex);
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141250535765dc8420d16842_64916205', 'search', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147561463865dc7941554578_27342520', 'search', $this->tplIndex);
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204660029865dc8420d170b8_95620665', 'hook_not_found', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163050844165dc7941554d86_47590788', 'hook_not_found', $this->tplIndex);
>>>>>>> c405336dfed70d26b35f84ea6d9085d8425990fd
?>

  <?php
}
}
/* {/block 'page_content'} */
}
