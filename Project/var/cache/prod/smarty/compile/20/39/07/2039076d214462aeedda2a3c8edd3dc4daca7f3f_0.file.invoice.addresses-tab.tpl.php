<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:13:04
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:34:38
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\pdf\invoice.addresses-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb9510135a46_09325241',
=======
  'unifunc' => 'content_65cb9a1e462857_71264985',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2039076d214462aeedda2a3c8edd3dc4daca7f3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\pdf\\invoice.addresses-tab.tpl',
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
function content_65cb9510135a46_09325241 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb9a1e462857_71264985 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
?><table id="addresses-tab" cellspacing="0" cellpadding="0">
	<tr>
		<td width="50%"><?php if ($_smarty_tpl->tpl_vars['delivery_address']->value) {?><span class="bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery address','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</span><br/><br/>
				<?php echo $_smarty_tpl->tpl_vars['delivery_address']->value;?>

			<?php }?>
		</td>
		<td width="50%"><span class="bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Billing address','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</span><br/><br/>
				<?php echo $_smarty_tpl->tpl_vars['invoice_address']->value;?>

		</td>
	</tr>
</table>
<?php }
}
