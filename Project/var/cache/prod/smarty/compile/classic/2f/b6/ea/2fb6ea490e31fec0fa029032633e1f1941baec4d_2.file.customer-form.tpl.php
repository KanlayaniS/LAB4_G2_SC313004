<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:45
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:32:33
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\_partials\customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94fd956822_00403644',
=======
  'unifunc' => 'content_65cb99a169c515_99227471',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fb6ea490e31fec0fa029032633e1f1941baec4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\_partials\\customer-form.tpl',
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
function content_65cb94fd956822_00403644 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb99a169c515_99227471 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<!-- <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27316692465cb94fd94e0d0_03118103', "form_field");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79812878965cb99a1694fa9_55724247', "form_field");
>>>>>>> master2
?>
 -->

<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48544961965cb94fd9559f2_73072657', "form_buttons");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63096585765cb99a169b818_17955001', "form_buttons");
>>>>>>> master2
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "customer/_partials/customer-form.tpl");
}
/* {block "form_field"} */
<<<<<<< HEAD
class Block_27316692465cb94fd94e0d0_03118103 extends Smarty_Internal_Block
=======
class Block_79812878965cb99a1694fa9_55724247 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'form_field' => 
  array (
<<<<<<< HEAD
    0 => 'Block_27316692465cb94fd94e0d0_03118103',
=======
    0 => 'Block_79812878965cb99a1694fa9_55724247',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['field']->value['name'] === 'password' && $_smarty_tpl->tpl_vars['guest_allowed']->value) {?>
      <p class="form-informations">
        <span class="font-weight-bold form-informations-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span> <span class="font-italic form-informations-option"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(optional)','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
        <br>
        <span class="text-muted form-informations-subtitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'And save time on your next order!','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
      </p>
      <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php }
}
}
/* {/block "form_field"} */
/* {block "form_buttons"} */
<<<<<<< HEAD
class Block_48544961965cb94fd9559f2_73072657 extends Smarty_Internal_Block
=======
class Block_63096585765cb99a169b818_17955001 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'form_buttons' => 
  array (
<<<<<<< HEAD
    0 => 'Block_48544961965cb94fd9559f2_73072657',
=======
    0 => 'Block_63096585765cb99a169b818_17955001',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <button
      class="continue btn btn-primary float-xs-right"
      name="continue"
      data-link-action="register-new-customer"
      type="submit"
      value="1"
    >
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

    </button>
<?php
}
}
/* {/block "form_buttons"} */
}
