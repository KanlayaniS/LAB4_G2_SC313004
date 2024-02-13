<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:45
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:32:39
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\_partials\cart-voucher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94fddfa438_61807786',
=======
  'unifunc' => 'content_65cb99a7bee8a1_29259277',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89ee342e90773156296528b6e6d80bb08d62138a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\_partials\\cart-voucher.tpl',
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
function content_65cb94fddfa438_61807786 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb99a7bee8a1_29259277 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['allowed']) {?>
  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79380850265cb94fddeb996_09198839', 'cart_voucher');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50218907865cb99a7be1196_35082476', 'cart_voucher');
>>>>>>> master2
?>

<?php }
}
/* {block 'cart_voucher_list'} */
<<<<<<< HEAD
class Block_90013940565cb94fddec7c9_27019469 extends Smarty_Internal_Block
=======
class Block_9689332465cb99a7be1f74_17587915 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul class="promo-name card-block">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['vouchers']['added'], 'voucher');
$_smarty_tpl->tpl_vars['voucher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->do_else = false;
?>
                <li class="cart-summary-line">
                  <span class="label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                  <div class="float-xs-right">
                    <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['voucher']->value['reduction_formatted'], ENT_QUOTES, 'UTF-8');?>
</span>
                      <?php if ((isset($_smarty_tpl->tpl_vars['voucher']->value['code'])) && $_smarty_tpl->tpl_vars['voucher']->value['code'] !== '') {?>
                        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['voucher']->value['delete_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="remove-voucher"><i class="material-icons">&#xE872;</i></a>
                      <?php }?>
                  </div>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          <?php
}
}
/* {/block 'cart_voucher_list'} */
/* {block 'cart_voucher_form'} */
<<<<<<< HEAD
class Block_206338247165cb94fddf3100_04787092 extends Smarty_Internal_Block
=======
class Block_92135338165cb99a7be83c1_16578877 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-voucher" method="post">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="addDiscount" value="1">
                <input class="promo-input" type="text" name="discount_name" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Promo code','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
">
                <button type="submit" class="btn btn-primary"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button>
              </form>
            <?php
}
}
/* {/block 'cart_voucher_form'} */
/* {block 'cart_voucher_notifications'} */
<<<<<<< HEAD
class Block_186017276265cb94fddf5df8_77578610 extends Smarty_Internal_Block
=======
class Block_36356963265cb99a7bea259_57317707 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="alert alert-danger js-error" role="alert">
                <i class="material-icons">&#xE001;</i><span class="ml-1 js-error-text"></span>
              </div>
            <?php
}
}
/* {/block 'cart_voucher_notifications'} */
/* {block 'cart_voucher'} */
<<<<<<< HEAD
class Block_79380850265cb94fddeb996_09198839 extends Smarty_Internal_Block
=======
class Block_50218907865cb99a7be1196_35082476 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'cart_voucher' => 
  array (
<<<<<<< HEAD
    0 => 'Block_79380850265cb94fddeb996_09198839',
  ),
  'cart_voucher_list' => 
  array (
    0 => 'Block_90013940565cb94fddec7c9_27019469',
  ),
  'cart_voucher_form' => 
  array (
    0 => 'Block_206338247165cb94fddf3100_04787092',
  ),
  'cart_voucher_notifications' => 
  array (
    0 => 'Block_186017276265cb94fddf5df8_77578610',
=======
    0 => 'Block_50218907865cb99a7be1196_35082476',
  ),
  'cart_voucher_list' => 
  array (
    0 => 'Block_9689332465cb99a7be1f74_17587915',
  ),
  'cart_voucher_form' => 
  array (
    0 => 'Block_92135338165cb99a7be83c1_16578877',
  ),
  'cart_voucher_notifications' => 
  array (
    0 => 'Block_36356963265cb99a7bea259_57317707',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\se_project\\Project\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <div class="block-promo">
      <div class="cart-voucher js-cart-voucher">
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']) {?>
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90013940565cb94fddec7c9_27019469', 'cart_voucher_list', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9689332465cb99a7be1f74_17587915', 'cart_voucher_list', $this->tplIndex);
>>>>>>> master2
?>

        <?php }?>

        <p class="promo-code-button display-promo<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['cart']->value['discounts']) > 0) {?> with-discounts<?php }?>">
          <a class="collapse-button" href="#promo-code">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Have a promo code?','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

          </a>
        </p>

        <div id="promo-code" class="collapse<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['cart']->value['discounts']) > 0) {?> in<?php }?>">
          <div class="promo-code">
            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206338247165cb94fddf3100_04787092', 'cart_voucher_form', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92135338165cb99a7be83c1_16578877', 'cart_voucher_form', $this->tplIndex);
>>>>>>> master2
?>


            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186017276265cb94fddf5df8_77578610', 'cart_voucher_notifications', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36356963265cb99a7bea259_57317707', 'cart_voucher_notifications', $this->tplIndex);
>>>>>>> master2
?>


            <a class="collapse-button promo-code-button cancel-promo" role="button" data-toggle="collapse" data-target="#promo-code" aria-expanded="true" aria-controls="promo-code">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

            </a>
          </div>
        </div>

        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['cart']->value['discounts']) > 0) {?>
          <p class="block-promo promo-highlighted">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our exclusive offers:','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </p>
          <ul class="js-discount card-block promo-discounts">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['discounts'], 'discount');
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
?>
              <li class="cart-summary-line">
                <span class="label">
                  <span class="code"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discount']->value['code'], ENT_QUOTES, 'UTF-8');?>
</span> - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8');?>

                </span>
              </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        <?php }?>
      </div>
    </div>
  <?php
}
}
/* {/block 'cart_voucher'} */
}
