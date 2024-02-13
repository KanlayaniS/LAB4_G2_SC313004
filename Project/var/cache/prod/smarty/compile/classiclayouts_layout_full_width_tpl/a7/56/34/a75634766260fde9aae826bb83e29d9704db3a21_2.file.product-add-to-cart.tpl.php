<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:29
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:31:51
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\catalog\_partials\product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94ed9e3e66_14563631',
=======
  'unifunc' => 'content_65cb99772fd810_01330016',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a75634766260fde9aae826bb83e29d9704db3a21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\catalog\\_partials\\product-add-to-cart.tpl',
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
function content_65cb94ed9e3e66_14563631 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb99772fd810_01330016 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-add-to-cart js-product-add-to-cart">
  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
    <span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77559010365cb94ed9d54d5_19826658', 'product_quantity');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179731980465cb99772f34d0_43912215', 'product_quantity');
>>>>>>> master2
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75381317865cb94ed9d9ca1_77894396', 'product_availability');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107805792565cb99772f7d15_71179787', 'product_availability');
>>>>>>> master2
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24857611065cb94ed9de007_63551824', 'product_minimal_quantity');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50988978065cb99772fb588_79044524', 'product_minimal_quantity');
>>>>>>> master2
?>

  <?php }?>
</div>
<?php }
/* {block 'product_quantity'} */
<<<<<<< HEAD
class Block_77559010365cb94ed9d54d5_19826658 extends Smarty_Internal_Block
=======
class Block_179731980465cb99772f34d0_43912215 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'product_quantity' => 
  array (
<<<<<<< HEAD
    0 => 'Block_77559010365cb94ed9d54d5_19826658',
=======
    0 => 'Block_179731980465cb99772f34d0_43912215',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product-quantity clearfix">
        <div class="qty">
          <input
            type="number"
            name="qty"
            id="quantity_wanted"
            inputmode="numeric"
            pattern="[0-9]*"
            <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_wanted']) {?>
              value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
              min="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
            <?php } else { ?>
              value="1"
              min="1"
            <?php }?>
            class="input-group"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
          >
        </div>

        <div class="add">
          <button
            class="btn btn-primary add-to-cart"
            data-button-action="add-to-cart"
            type="submit"
            <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
              disabled
            <?php }?>
          >
            <i class="material-icons shopping-cart">&#xE547;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

      </div>
    <?php
}
}
/* {/block 'product_quantity'} */
/* {block 'product_availability'} */
<<<<<<< HEAD
class Block_75381317865cb94ed9d9ca1_77894396 extends Smarty_Internal_Block
=======
class Block_107805792565cb99772f7d15_71179787 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'product_availability' => 
  array (
<<<<<<< HEAD
    0 => 'Block_75381317865cb94ed9d9ca1_77894396',
=======
    0 => 'Block_107805792565cb99772f7d15_71179787',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <span id="product-availability" class="js-product-availability">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
            <i class="material-icons rtl-no-flip product-available">&#xE5CA;</i>
          <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
            <i class="material-icons product-last-items">&#xE002;</i>
          <?php } else { ?>
            <i class="material-icons product-unavailable">&#xE14B;</i>
          <?php }?>
          <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

        <?php }?>
      </span>
    <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_minimal_quantity'} */
<<<<<<< HEAD
class Block_24857611065cb94ed9de007_63551824 extends Smarty_Internal_Block
=======
class Block_50988978065cb99772fb588_79044524 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'product_minimal_quantity' => 
  array (
<<<<<<< HEAD
    0 => 'Block_24857611065cb94ed9de007_63551824',
=======
    0 => 'Block_50988978065cb99772fb588_79044524',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p class="product-minimal-quantity js-product-minimal-quantity">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>

        <?php }?>
      </p>
    <?php
}
}
/* {/block 'product_minimal_quantity'} */
}
