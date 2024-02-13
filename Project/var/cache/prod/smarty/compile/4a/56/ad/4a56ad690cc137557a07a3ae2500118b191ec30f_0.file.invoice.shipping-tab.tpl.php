<?php
/* Smarty version 4.3.1, created on 2024-02-13 13:45:49
  from 'C:\xampp\htdocs\se_project\Project\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65cb101d9e3df0_93339710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a56ad690cc137557a07a3ae2500118b191ec30f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\pdf\\invoice.shipping-tab.tpl',
      1 => 1707644414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb101d9e3df0_93339710 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
