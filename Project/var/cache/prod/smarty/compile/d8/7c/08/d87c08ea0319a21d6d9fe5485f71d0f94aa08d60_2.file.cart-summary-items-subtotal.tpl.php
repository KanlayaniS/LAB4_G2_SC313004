<?php
/* Smarty version 4.3.1, created on 2024-01-30 21:07:09
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\_partials\cart-summary-items-subtotal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b9028d948ed1_79050701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd87c08ea0319a21d6d9fe5485f71d0f94aa08d60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\_partials\\cart-summary-items-subtotal.tpl',
      1 => 1706617826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b9028d948ed1_79050701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208676601465b9028d946e76_74267260', 'cart_summary_items_subtotal');
?>

<?php }
/* {block 'cart_summary_items_subtotal'} */
class Block_208676601465b9028d946e76_74267260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_items_subtotal' => 
  array (
    0 => 'Block_208676601465b9028d946e76_74267260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>
<?php
}
}
/* {/block 'cart_summary_items_subtotal'} */
}
