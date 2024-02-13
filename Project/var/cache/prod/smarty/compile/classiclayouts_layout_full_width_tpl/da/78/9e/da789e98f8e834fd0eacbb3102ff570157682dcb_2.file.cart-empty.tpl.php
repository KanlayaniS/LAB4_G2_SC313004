<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:01:46
=======
/* Smarty version 4.3.1, created on 2024-02-13 22:37:36
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\cart-empty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb926ac39083_32574071',
=======
  'unifunc' => 'content_65cb8cc0887083_38305813',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da789e98f8e834fd0eacbb3102ff570157682dcb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\cart-empty.tpl',
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
function content_65cb926ac39083_32574071 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb8cc0887083_38305813 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135710941765cb926ac2f196_00558097', 'continue_shopping');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104477474965cb8cc087e292_44239669', 'continue_shopping');
>>>>>>> master2
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4619754465cb926ac36c22_93035157', 'cart_actions');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176343551765cb8cc0884cf8_02092641', 'cart_actions');
>>>>>>> master2
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141018254365cb926ac37ae5_76894845', 'continue_shopping');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100708582265cb926ac38253_56939341', 'cart_voucher');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110456343765cb926ac38985_36278414', 'display_reassurance');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97540732865cb8cc0885b69_20207036', 'continue_shopping');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168702925065cb8cc08862b0_41961517', 'cart_voucher');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165166265265cb8cc08869b7_14160872', 'display_reassurance');
>>>>>>> master2
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/cart.tpl');
}
/* {block 'continue_shopping'} */
<<<<<<< HEAD
class Block_135710941765cb926ac2f196_00558097 extends Smarty_Internal_Block
=======
class Block_104477474965cb8cc087e292_44239669 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'continue_shopping' => 
  array (
<<<<<<< HEAD
    0 => 'Block_135710941765cb926ac2f196_00558097',
=======
    0 => 'Block_104477474965cb8cc087e292_44239669',
>>>>>>> master2
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a class="label" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <i class="material-icons">chevron_left</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  </a>
<?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_actions'} */
<<<<<<< HEAD
class Block_4619754465cb926ac36c22_93035157 extends Smarty_Internal_Block
=======
class Block_176343551765cb8cc0884cf8_02092641 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'cart_actions' => 
  array (
<<<<<<< HEAD
    0 => 'Block_4619754465cb926ac36c22_93035157',
=======
    0 => 'Block_176343551765cb8cc0884cf8_02092641',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="checkout text-sm-center card-block">
    <button type="button" class="btn btn-primary disabled" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
  </div>
<?php
}
}
/* {/block 'cart_actions'} */
/* {block 'continue_shopping'} */
<<<<<<< HEAD
class Block_141018254365cb926ac37ae5_76894845 extends Smarty_Internal_Block
=======
class Block_97540732865cb8cc0885b69_20207036 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'continue_shopping' => 
  array (
<<<<<<< HEAD
    0 => 'Block_141018254365cb926ac37ae5_76894845',
=======
    0 => 'Block_97540732865cb8cc0885b69_20207036',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'continue_shopping'} */
/* {block 'cart_voucher'} */
<<<<<<< HEAD
class Block_100708582265cb926ac38253_56939341 extends Smarty_Internal_Block
=======
class Block_168702925065cb8cc08862b0_41961517 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'cart_voucher' => 
  array (
<<<<<<< HEAD
    0 => 'Block_100708582265cb926ac38253_56939341',
=======
    0 => 'Block_168702925065cb8cc08862b0_41961517',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'cart_voucher'} */
/* {block 'display_reassurance'} */
<<<<<<< HEAD
class Block_110456343765cb926ac38985_36278414 extends Smarty_Internal_Block
=======
class Block_165166265265cb8cc08869b7_14160872 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'display_reassurance' => 
  array (
<<<<<<< HEAD
    0 => 'Block_110456343765cb926ac38985_36278414',
=======
    0 => 'Block_165166265265cb8cc08869b7_14160872',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'display_reassurance'} */
}
