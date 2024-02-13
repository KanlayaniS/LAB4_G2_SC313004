<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:41
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:32:26
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\_partials\steps\unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94f9265460_57072374',
=======
  'unifunc' => 'content_65cb999ac04a33_98257588',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb23bb25d4732edd7a4c97187e564a9c02038fe9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
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
function content_65cb94f9265460_57072374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178208162265cb94f9264290_94958464', 'step');
=======
function content_65cb999ac04a33_98257588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152878615865cb999ac02ca3_13026084', 'step');
>>>>>>> master2
?>

<?php }
/* {block 'step'} */
<<<<<<< HEAD
class Block_178208162265cb94f9264290_94958464 extends Smarty_Internal_Block
=======
class Block_152878615865cb999ac02ca3_13026084 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'step' => 
  array (
<<<<<<< HEAD
    0 => 'Block_178208162265cb94f9264290_94958464',
=======
    0 => 'Block_152878615865cb999ac02ca3_13026084',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title js-step-title h3">
      <span class="step-number"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
