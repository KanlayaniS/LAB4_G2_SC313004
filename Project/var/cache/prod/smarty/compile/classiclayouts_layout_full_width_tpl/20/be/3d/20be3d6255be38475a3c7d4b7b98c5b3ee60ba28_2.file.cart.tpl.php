<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:33
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:31:54
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94f1ceabf5_20361390',
=======
  'unifunc' => 'content_65cb997a80f415_10528947',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20be3d6255be38475a3c7d4b7b98c5b3ee60ba28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\cart.tpl',
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
    'file:checkout/_partials/cart-detailed.tpl' => 1,
    'file:checkout/_partials/cart-detailed-totals.tpl' => 1,
    'file:checkout/_partials/cart-detailed-actions.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_65cb94f1ceabf5_20361390 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb997a80f415_10528947 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166268518265cb94f1cd6815_80201486', 'content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52952535065cb997a7fb986_34970247', 'content');
>>>>>>> master2
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_overview'} */
<<<<<<< HEAD
class Block_43829935765cb94f1cda7b1_82634802 extends Smarty_Internal_Block
=======
class Block_143835145265cb997a800049_58818986 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
          <?php
}
}
/* {/block 'cart_overview'} */
/* {block 'continue_shopping'} */
<<<<<<< HEAD
class Block_86832022265cb94f1cdf517_03381334 extends Smarty_Internal_Block
=======
class Block_164879359365cb997a804ed4_46756834 extends Smarty_Internal_Block
>>>>>>> master2
{
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
/* {block 'hook_shopping_cart_footer'} */
<<<<<<< HEAD
class Block_83918890365cb94f1ce4383_58458007 extends Smarty_Internal_Block
=======
class Block_57271535165cb997a8089e2_83692679 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_shopping_cart_footer'} */
/* {block 'hook_shopping_cart'} */
<<<<<<< HEAD
class Block_160558326565cb94f1ce6130_32519929 extends Smarty_Internal_Block
=======
class Block_120449712965cb997a80a7c9_81418777 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_shopping_cart'} */
/* {block 'cart_totals'} */
<<<<<<< HEAD
class Block_39489038365cb94f1ce6df0_69986206 extends Smarty_Internal_Block
=======
class Block_54355768165cb997a80b609_67496403 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
            <?php
}
}
/* {/block 'cart_totals'} */
/* {block 'cart_actions'} */
<<<<<<< HEAD
class Block_82387719965cb94f1ce80d2_08230793 extends Smarty_Internal_Block
=======
class Block_64231119465cb997a80c756_32747290 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
            <?php
}
}
/* {/block 'cart_actions'} */
/* {block 'cart_summary'} */
<<<<<<< HEAD
class Block_156321207365cb94f1ce5c21_49829234 extends Smarty_Internal_Block
=======
class Block_114122605865cb997a80a213_61903544 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="card cart-summary">

            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160558326565cb94f1ce6130_32519929', 'hook_shopping_cart', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120449712965cb997a80a7c9_81418777', 'hook_shopping_cart', $this->tplIndex);
>>>>>>> master2
?>


            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39489038365cb94f1ce6df0_69986206', 'cart_totals', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54355768165cb997a80b609_67496403', 'cart_totals', $this->tplIndex);
>>>>>>> master2
?>


            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82387719965cb94f1ce80d2_08230793', 'cart_actions', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64231119465cb997a80c756_32747290', 'cart_actions', $this->tplIndex);
>>>>>>> master2
?>


          </div>
        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'hook_reassurance'} */
<<<<<<< HEAD
class Block_163282602065cb94f1ce9339_16719205 extends Smarty_Internal_Block
=======
class Block_71306151265cb997a80db82_98504272 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_reassurance'} */
/* {block 'content'} */
<<<<<<< HEAD
class Block_166268518265cb94f1cd6815_80201486 extends Smarty_Internal_Block
=======
class Block_52952535065cb997a7fb986_34970247 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_166268518265cb94f1cd6815_80201486',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_43829935765cb94f1cda7b1_82634802',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_86832022265cb94f1cdf517_03381334',
  ),
  'hook_shopping_cart_footer' => 
  array (
    0 => 'Block_83918890365cb94f1ce4383_58458007',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_156321207365cb94f1ce5c21_49829234',
  ),
  'hook_shopping_cart' => 
  array (
    0 => 'Block_160558326565cb94f1ce6130_32519929',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_39489038365cb94f1ce6df0_69986206',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_82387719965cb94f1ce80d2_08230793',
  ),
  'hook_reassurance' => 
  array (
    0 => 'Block_163282602065cb94f1ce9339_16719205',
=======
    0 => 'Block_52952535065cb997a7fb986_34970247',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_143835145265cb997a800049_58818986',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_164879359365cb997a804ed4_46756834',
  ),
  'hook_shopping_cart_footer' => 
  array (
    0 => 'Block_57271535165cb997a8089e2_83692679',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_114122605865cb997a80a213_61903544',
  ),
  'hook_shopping_cart' => 
  array (
    0 => 'Block_120449712965cb997a80a7c9_81418777',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_54355768165cb997a80b609_67496403',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_64231119465cb997a80c756_32747290',
  ),
  'hook_reassurance' => 
  array (
    0 => 'Block_71306151265cb997a80db82_98504272',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
    <div class="cart-grid row">

      <!-- Left Block: cart product informations & shipping -->
      <div class="cart-grid-body col-lg-8">

        <!-- cart products detailed -->
        <div class="card cart-container">
          <div class="card-block">
            <h1 class="h1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h1>
          </div>
          <hr class="separator">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43829935765cb94f1cda7b1_82634802', 'cart_overview', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143835145265cb997a800049_58818986', 'cart_overview', $this->tplIndex);
>>>>>>> master2
?>

        </div>

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86832022265cb94f1cdf517_03381334', 'continue_shopping', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164879359365cb997a804ed4_46756834', 'continue_shopping', $this->tplIndex);
>>>>>>> master2
?>


        <!-- shipping informations -->
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83918890365cb94f1ce4383_58458007', 'hook_shopping_cart_footer', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57271535165cb997a8089e2_83692679', 'hook_shopping_cart_footer', $this->tplIndex);
>>>>>>> master2
?>

      </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-lg-4">

        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156321207365cb94f1ce5c21_49829234', 'cart_summary', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114122605865cb997a80a213_61903544', 'cart_summary', $this->tplIndex);
>>>>>>> master2
?>


        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163282602065cb94f1ce9339_16719205', 'hook_reassurance', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71306151265cb997a80db82_98504272', 'hook_reassurance', $this->tplIndex);
>>>>>>> master2
?>


      </div>

    </div>
    
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCrossSellingShoppingCart'),$_smarty_tpl ) );?>

    
  </section>
<?php
}
}
/* {/block 'content'} */
}
