<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:45
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:32:39
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\_partials\cart-summary-totals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94fddd4385_77602967',
=======
  'unifunc' => 'content_65cb99a7a47b06_13772806',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51dcad56fa03695bdd24846d8bc0fa2a908b1120' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\_partials\\cart-summary-totals.tpl',
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
function content_65cb94fddd4385_77602967 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb99a7a47b06_13772806 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="card-block cart-summary-totals js-cart-summary-totals">

  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120333411865cb94fddc9895_07927268', 'cart_summary_total');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2076733965cb99a7a396a0_13414691', 'cart_summary_total');
>>>>>>> master2
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178036197165cb94fddd0d74_16656089', 'cart_summary_tax');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190717507965cb99a7a43fa4_04224203', 'cart_summary_tax');
>>>>>>> master2
?>


</div>
<?php }
/* {block 'cart_summary_total'} */
<<<<<<< HEAD
class Block_120333411865cb94fddc9895_07927268 extends Smarty_Internal_Block
=======
class Block_2076733965cb99a7a396a0_13414691 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'cart_summary_total' => 
  array (
<<<<<<< HEAD
    0 => 'Block_120333411865cb94fddc9895_07927268',
=======
    0 => 'Block_2076733965cb99a7a396a0_13414691',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['display_prices_tax_incl'] && $_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {?>
      <div class="cart-summary-line">
        <span class="label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="value"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
      <div class="cart-summary-line cart-total">
        <span class="label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total_including_tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="value"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total_including_tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php } else { ?>
      <div class="cart-summary-line cart-total">
        <span class="label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label'] && $_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');
}?></span>
        <span class="value"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'cart_summary_total'} */
/* {block 'cart_summary_tax'} */
<<<<<<< HEAD
class Block_178036197165cb94fddd0d74_16656089 extends Smarty_Internal_Block
=======
class Block_190717507965cb99a7a43fa4_04224203 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'cart_summary_tax' => 
  array (
<<<<<<< HEAD
    0 => 'Block_178036197165cb94fddd0d74_16656089',
=======
    0 => 'Block_190717507965cb99a7a43fa4_04224203',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']) {?>
      <div class="cart-summary-line">
        <span class="label sub"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%label%:','sprintf'=>array('%label%'=>$_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
        <span class="value sub"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'cart_summary_tax'} */
}
