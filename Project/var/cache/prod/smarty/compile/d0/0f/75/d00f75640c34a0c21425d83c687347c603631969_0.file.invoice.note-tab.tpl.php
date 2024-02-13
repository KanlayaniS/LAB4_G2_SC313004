<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:13:04
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:34:38
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\pdf\invoice.note-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb95101eaf01_39900696',
=======
  'unifunc' => 'content_65cb9a1ed1cae6_56448105',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd00f75640c34a0c21425d83c687347c603631969' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\pdf\\invoice.note-tab.tpl',
<<<<<<< HEAD
      1 => 1707837717,
=======
      1 => 1707824453,
>>>>>>> master2
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_65cb95101eaf01_39900696 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb9a1ed1cae6_56448105 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
if ((isset($_smarty_tpl->tpl_vars['order_invoice']->value->note)) && $_smarty_tpl->tpl_vars['order_invoice']->value->note) {?>
	<tr>
		<td colspan="12" height="10">&nbsp;</td>
	</tr>

	<tr>
		<td colspan="6" class="left">
			<table id="note-tab" style="width: 100%">
				<tr>
					<td class="grey"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Note','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
				</tr>
				<tr>
					<td class="note"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order_invoice']->value->note,"html" ));?>
</td>
				</tr>
			</table>
		</td>
		<td colspan="1">&nbsp;</td>
	</tr>
<?php }
}
}
