<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:45
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:32:31
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94fd67b994_63186442',
=======
  'unifunc' => 'content_65cb999f3aa553_25423601',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ef3894a2109a8883c8b70ed84570f6bbf295de5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\checkout.tpl',
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
    'file:checkout/_partials/header.tpl' => 1,
    'file:checkout/_partials/cart-summary.tpl' => 1,
    'file:checkout/_partials/footer.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_65cb94fd67b994_63186442 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb999f3aa553_25423601 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4742220265cb94fd670990_74535124', 'header');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195250154765cb999f3a1460_73990536', 'header');
>>>>>>> master2
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206475860265cb94fd675534_76118422', 'content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31690026465cb999f3a4f09_43598568', 'content');
>>>>>>> master2
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83195307065cb94fd67acf3_93431515', 'footer');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40417823065cb999f3a9985_45681400', 'footer');
>>>>>>> master2
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'header'} */
<<<<<<< HEAD
class Block_4742220265cb94fd670990_74535124 extends Smarty_Internal_Block
=======
class Block_195250154765cb999f3a1460_73990536 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'header' => 
  array (
<<<<<<< HEAD
    0 => 'Block_4742220265cb94fd670990_74535124',
=======
    0 => 'Block_195250154765cb999f3a1460_73990536',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'checkout_process'} */
<<<<<<< HEAD
class Block_163682004065cb94fd675a92_76863993 extends Smarty_Internal_Block
=======
class Block_112228913265cb999f3a53e4_71049134 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'checkout_process'} */
/* {block 'cart_summary'} */
<<<<<<< HEAD
class Block_75079859365cb94fd678cf2_68135085 extends Smarty_Internal_Block
=======
class Block_78296992565cb999f3a7d91_90607126 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'content'} */
<<<<<<< HEAD
class Block_206475860265cb94fd675534_76118422 extends Smarty_Internal_Block
=======
class Block_31690026465cb999f3a4f09_43598568 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_206475860265cb94fd675534_76118422',
  ),
  'checkout_process' => 
  array (
    0 => 'Block_163682004065cb94fd675a92_76863993',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_75079859365cb94fd678cf2_68135085',
=======
    0 => 'Block_31690026465cb999f3a4f09_43598568',
  ),
  'checkout_process' => 
  array (
    0 => 'Block_112228913265cb999f3a53e4_71049134',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_78296992565cb999f3a7d91_90607126',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content">
    <div class="row">
      <div class="cart-grid-body col-xs-12 col-lg-8">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163682004065cb94fd675a92_76863993', 'checkout_process', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112228913265cb999f3a53e4_71049134', 'checkout_process', $this->tplIndex);
>>>>>>> master2
?>

      </div>
      <div class="cart-grid-right col-xs-12 col-lg-4">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75079859365cb94fd678cf2_68135085', 'cart_summary', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78296992565cb999f3a7d91_90607126', 'cart_summary', $this->tplIndex);
>>>>>>> master2
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

      </div>
    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
<<<<<<< HEAD
class Block_83195307065cb94fd67acf3_93431515 extends Smarty_Internal_Block
=======
class Block_40417823065cb999f3a9985_45681400 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'footer' => 
  array (
<<<<<<< HEAD
    0 => 'Block_83195307065cb94fd67acf3_93431515',
=======
    0 => 'Block_40417823065cb999f3a9985_45681400',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
