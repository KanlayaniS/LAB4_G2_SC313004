<?php
/* Smarty version 4.3.1, created on 2024-01-29 06:10:41
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\customer\guest-tracking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b73351148b50_95604234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '537e0a3db745117bd2a59873617c00fdac477e07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\customer\\guest-tracking.tpl',
      1 => 1678742294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:customer/_partials/order-detail-no-return.tpl' => 1,
    'file:customer/_partials/account-transformation-form.tpl' => 1,
  ),
),false)) {
function content_65b73351148b50_95604234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121286659065b733511404c1_68081549', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201995513965b73351142249_29651880', 'order_detail');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72017819865b73351143f36_75081358', 'order_messages');
?>


<?php if (!$_smarty_tpl->tpl_vars['registered_customer_exists']->value) {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27887517565b73351145ba0_39664827', 'page_content');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/order-detail.tpl');
}
/* {block 'page_title'} */
class Block_121286659065b733511404c1_68081549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_121286659065b733511404c1_68081549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Tracking','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'order_detail'} */
class Block_201995513965b73351142249_29651880 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_detail' => 
  array (
    0 => 'Block_201995513965b73351142249_29651880',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/order-detail-no-return.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'order_detail'} */
/* {block 'order_messages'} */
class Block_72017819865b73351143f36_75081358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_messages' => 
  array (
    0 => 'Block_72017819865b73351143f36_75081358',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'order_messages'} */
/* {block 'account_transformation_form'} */
class Block_89044287965b73351146518_69547445 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/account-transformation-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'account_transformation_form'} */
/* {block 'page_content'} */
class Block_27887517565b73351145ba0_39664827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_27887517565b73351145ba0_39664827',
  ),
  'account_transformation_form' => 
  array (
    0 => 'Block_89044287965b73351146518_69547445',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89044287965b73351146518_69547445', 'account_transformation_form', $this->tplIndex);
?>

  <?php
}
}
/* {/block 'page_content'} */
}
