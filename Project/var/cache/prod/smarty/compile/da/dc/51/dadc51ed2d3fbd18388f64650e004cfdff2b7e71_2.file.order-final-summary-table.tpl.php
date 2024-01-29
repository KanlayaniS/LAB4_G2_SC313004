<?php
/* Smarty version 4.3.1, created on 2024-01-29 06:10:40
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\_partials\order-final-summary-table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b733509a43c3_17145834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dadc51ed2d3fbd18388f64650e004cfdff2b7e71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\_partials\\order-final-summary-table.tpl',
      1 => 1678742294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b733509a43c3_17145834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69205712065b7335099d531_75755367', 'order-items-table-head');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/_partials/order-confirmation-table.tpl');
}
/* {block 'order-items-table-head'} */
class Block_69205712065b7335099d531_75755367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order-items-table-head' => 
  array (
    0 => 'Block_69205712065b7335099d531_75755367',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="order-items" class="col-md-12">
  <h3 class="card-title h3">
    <?php if ($_smarty_tpl->tpl_vars['products_count']->value == 1) {?>
       <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%product_count% item in your cart','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['products_count']->value),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

    <?php } else { ?>
       <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%products_count% items in your cart','sprintf'=>array('%products_count%'=>$_smarty_tpl->tpl_vars['products_count']->value),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

    <?php }?>
  	<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cart','params'=>array('action'=>'show')),$_smarty_tpl ) );?>
"><span class="step-edit"><i class="material-icons edit">mode_edit</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></a>
  </h3>
</div>
<?php
}
}
/* {/block 'order-items-table-head'} */
}
