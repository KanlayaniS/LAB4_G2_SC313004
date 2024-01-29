<?php
/* Smarty version 4.3.1, created on 2024-01-29 06:10:37
  from 'C:\xampp\htdocs\se_project\Project\admin\themes\default\template\helpers\tree\tree_node_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b7334dbe8ca3_46985740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faa732e4fc34724af3a7c7b17a51ec31448ae826' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1695892354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b7334dbe8ca3_46985740 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
