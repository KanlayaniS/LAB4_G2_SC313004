<?php
/* Smarty version 4.3.1, created on 2024-01-29 06:10:33
  from 'C:\xampp\htdocs\se_project\Project\admin\themes\default\template\controllers\features\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b733499dd6b0_23743853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2260b5450a063138ac7282327d2cb3a93deaa5fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\admin\\themes\\default\\template\\controllers\\features\\helpers\\form\\form.tpl',
      1 => 1695892354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b733499dd6b0_23743853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51615150765b733499da2f2_72042360', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_51615150765b733499da2f2_72042360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_51615150765b733499da2f2_72042360',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'name') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFeatureForm",'id_feature'=>$_smarty_tpl->tpl_vars['form_id']->value),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
}
