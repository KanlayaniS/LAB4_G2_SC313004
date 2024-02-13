<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:45
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:32:39
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\_partials\cart-summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94fdd3cc62_37113567',
=======
  'unifunc' => 'content_65cb99a7412763_22528984',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79c0d006537a65c8d1be7ae5c1e2196b6f376d7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\_partials\\cart-summary.tpl',
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
    'file:checkout/_partials/cart-summary-top.tpl' => 1,
    'file:checkout/_partials/cart-summary-products.tpl' => 1,
    'file:checkout/_partials/cart-summary-subtotals.tpl' => 1,
    'file:checkout/_partials/cart-summary-totals.tpl' => 1,
    'file:checkout/_partials/cart-voucher.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_65cb94fdd3cc62_37113567 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb99a7412763_22528984 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="js-checkout-summary" class="card js-cart" data-refresh-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?ajax=1&action=refresh">
  <div class="card-block">
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57698295865cb94fdd382b3_02260659', 'hook_checkout_summary_top');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80354781365cb99a740c626_03165765', 'hook_checkout_summary_top');
>>>>>>> master2
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40088118565cb94fdd394a8_63184554', 'cart_summary_products');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136987656765cb99a740dbf9_49642560', 'cart_summary_products');
>>>>>>> master2
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83593689765cb94fdd3a383_17830077', 'cart_summary_subtotals');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123232807165cb99a740eff3_27918052', 'cart_summary_subtotals');
>>>>>>> master2
?>

  </div>

  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206311016065cb94fdd3b1d5_78965266', 'cart_summary_totals');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193208075265cb99a7410305_34472467', 'cart_summary_totals');
>>>>>>> master2
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56689690865cb94fdd3c022_84145387', 'cart_summary_voucher');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170598993165cb99a7411384_84548294', 'cart_summary_voucher');
>>>>>>> master2
?>


</section>
<?php }
/* {block 'hook_checkout_summary_top'} */
<<<<<<< HEAD
class Block_57698295865cb94fdd382b3_02260659 extends Smarty_Internal_Block
=======
class Block_80354781365cb99a740c626_03165765 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'hook_checkout_summary_top' => 
  array (
<<<<<<< HEAD
    0 => 'Block_57698295865cb94fdd382b3_02260659',
=======
    0 => 'Block_80354781365cb99a740c626_03165765',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'hook_checkout_summary_top'} */
/* {block 'cart_summary_products'} */
<<<<<<< HEAD
class Block_40088118565cb94fdd394a8_63184554 extends Smarty_Internal_Block
=======
class Block_136987656765cb99a740dbf9_49642560 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'cart_summary_products' => 
  array (
<<<<<<< HEAD
    0 => 'Block_40088118565cb94fdd394a8_63184554',
=======
    0 => 'Block_136987656765cb99a740dbf9_49642560',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'cart_summary_products'} */
/* {block 'cart_summary_subtotals'} */
<<<<<<< HEAD
class Block_83593689765cb94fdd3a383_17830077 extends Smarty_Internal_Block
=======
class Block_123232807165cb99a740eff3_27918052 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'cart_summary_subtotals' => 
  array (
<<<<<<< HEAD
    0 => 'Block_83593689765cb94fdd3a383_17830077',
=======
    0 => 'Block_123232807165cb99a740eff3_27918052',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-subtotals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
    <?php
}
}
/* {/block 'cart_summary_subtotals'} */
/* {block 'cart_summary_totals'} */
<<<<<<< HEAD
class Block_206311016065cb94fdd3b1d5_78965266 extends Smarty_Internal_Block
=======
class Block_193208075265cb99a7410305_34472467 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'cart_summary_totals' => 
  array (
<<<<<<< HEAD
    0 => 'Block_206311016065cb94fdd3b1d5_78965266',
=======
    0 => 'Block_193208075265cb99a7410305_34472467',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_totals'} */
/* {block 'cart_summary_voucher'} */
<<<<<<< HEAD
class Block_56689690865cb94fdd3c022_84145387 extends Smarty_Internal_Block
=======
class Block_170598993165cb99a7411384_84548294 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'cart_summary_voucher' => 
  array (
<<<<<<< HEAD
    0 => 'Block_56689690865cb94fdd3c022_84145387',
=======
    0 => 'Block_170598993165cb99a7411384_84548294',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-voucher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_voucher'} */
}
