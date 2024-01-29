<?php
/* Smarty version 4.3.1, created on 2024-01-29 06:10:34
  from 'C:\xampp\htdocs\se_project\Project\admin\themes\default\template\controllers\scenes\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b7334add6d11_82441169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '394501e358d48547b1e199ba73c76560fa35d362' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\admin\\themes\\default\\template\\controllers\\scenes\\helpers\\form\\form.tpl',
      1 => 1695892354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b7334add6d11_82441169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66170010565b7334adc9b22_99885687', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156846260365b7334adce138_16515234', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_66170010565b7334adc9b22_99885687 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_66170010565b7334adc9b22_99885687',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (($_smarty_tpl->tpl_vars['input']->value['type'] == "description")) {?>
		<p><?php echo $_smarty_tpl->tpl_vars['input']->value['text'];?>
</p>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "after"} */
class Block_156846260365b7334adce138_16515234 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_156846260365b7334adce138_16515234',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		startingData = new Array();
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
			startingData[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
] = new Array(
				'<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addcslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['details']->name,'\'' ));?>
',
				'<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] ));?>
',
				<?php echo $_smarty_tpl->tpl_vars['product']->value['x_axis'];?>
,
				<?php echo $_smarty_tpl->tpl_vars['product']->value['y_axis'];?>
,
				<?php echo $_smarty_tpl->tpl_vars['product']->value['zone_width'];?>
,
				<?php echo $_smarty_tpl->tpl_vars['product']->value['zone_height'];?>
);
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "after"} */
}
