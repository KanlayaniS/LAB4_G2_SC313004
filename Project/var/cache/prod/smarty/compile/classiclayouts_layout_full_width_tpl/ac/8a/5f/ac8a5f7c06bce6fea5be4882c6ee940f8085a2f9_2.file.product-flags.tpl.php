<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:29
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:31:50
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94ed8b7353_67192461',
=======
  'unifunc' => 'content_65cb99761159b2_15327514',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac8a5f7c06bce6fea5be4882c6ee940f8085a2f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
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
function content_65cb94ed8b7353_67192461 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110167443665cb94ed8b1f92_57300825', 'product_flags');
=======
function content_65cb99761159b2_15327514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149524539665cb9976112909_14354958', 'product_flags');
>>>>>>> master2
?>

<?php }
/* {block 'product_flags'} */
<<<<<<< HEAD
class Block_110167443665cb94ed8b1f92_57300825 extends Smarty_Internal_Block
=======
class Block_149524539665cb9976112909_14354958 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'product_flags' => 
  array (
<<<<<<< HEAD
    0 => 'Block_110167443665cb94ed8b1f92_57300825',
=======
    0 => 'Block_149524539665cb9976112909_14354958',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
