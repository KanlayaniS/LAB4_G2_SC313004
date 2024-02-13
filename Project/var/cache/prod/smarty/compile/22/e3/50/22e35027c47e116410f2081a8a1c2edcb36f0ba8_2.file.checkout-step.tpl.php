<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:45
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:32:39
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\_partials\steps\checkout-step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94fdd1dd94_48826503',
=======
  'unifunc' => 'content_65cb99a7318c43_29737531',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22e35027c47e116410f2081a8a1c2edcb36f0ba8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\_partials\\steps\\checkout-step.tpl',
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
function content_65cb94fdd1dd94_48826503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158963587265cb94fdd1a3b8_65238057', 'step');
=======
function content_65cb99a7318c43_29737531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67863591865cb99a7313867_41605283', 'step');
>>>>>>> master2
?>

<?php }
/* {block 'step_content'} */
<<<<<<< HEAD
class Block_122528687665cb94fdd1d1d0_49556770 extends Smarty_Internal_Block
=======
class Block_4971701565cb99a7317b60_47839957 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
DUMMY STEP CONTENT<?php
}
}
/* {/block 'step_content'} */
/* {block 'step'} */
<<<<<<< HEAD
class Block_158963587265cb94fdd1a3b8_65238057 extends Smarty_Internal_Block
=======
class Block_67863591865cb99a7313867_41605283 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'step' => 
  array (
<<<<<<< HEAD
    0 => 'Block_158963587265cb94fdd1a3b8_65238057',
  ),
  'step_content' => 
  array (
    0 => 'Block_122528687665cb94fdd1d1d0_49556770',
=======
    0 => 'Block_67863591865cb99a7313867_41605283',
  ),
  'step_content' => 
  array (
    0 => 'Block_4971701565cb99a7317b60_47839957',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section  id    = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
"
            class = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('checkout-step'=>true,'-current'=>$_smarty_tpl->tpl_vars['step_is_current']->value,'-reachable'=>$_smarty_tpl->tpl_vars['step_is_reachable']->value,'-complete'=>$_smarty_tpl->tpl_vars['step_is_complete']->value,'js-current-step'=>$_smarty_tpl->tpl_vars['step_is_current']->value) )), ENT_QUOTES, 'UTF-8');?>
"
  >
    <h1 class="step-title js-step-title h3">
      <i class="material-icons rtl-no-flip done">&#xE876;</i>
      <span class="step-number"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

      <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
    </h1>

    <div class="content">
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122528687665cb94fdd1d1d0_49556770', 'step_content', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4971701565cb99a7317b60_47839957', 'step_content', $this->tplIndex);
>>>>>>> master2
?>

    </div>
  </section>
<?php
}
}
/* {/block 'step'} */
}
