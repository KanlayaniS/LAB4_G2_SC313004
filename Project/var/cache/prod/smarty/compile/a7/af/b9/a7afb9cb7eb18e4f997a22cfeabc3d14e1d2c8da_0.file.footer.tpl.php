<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:13:04
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:34:39
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\pdf\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb951047aca3_13154227',
=======
  'unifunc' => 'content_65cb9a1f4313c8_81260739',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7afb9cb7eb18e4f997a22cfeabc3d14e1d2c8da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\pdf\\footer.tpl',
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
function content_65cb951047aca3_13154227 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb9a1f4313c8_81260739 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
?><table style="width: 100%;">
	<tr>
		<td style="text-align: center; font-size: 6pt; color: #444;  width:100%;">
			<?php if ($_smarty_tpl->tpl_vars['available_in_your_account']->value) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An electronic version of this invoice is available in your account. To access it, log in to our website using your e-mail address and password (which you created when placing your first order).','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>

				<br />
			<?php }?>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop_address']->value,'html','UTF-8' ));?>
<br />

			<?php if (!empty($_smarty_tpl->tpl_vars['shop_phone']->value) || !empty($_smarty_tpl->tpl_vars['shop_fax']->value)) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For more assistance, contact Support:','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
<br />
				<?php if (!empty($_smarty_tpl->tpl_vars['shop_phone']->value)) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tel: %s','sprintf'=>array(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop_phone']->value,'html','UTF-8' ))),'d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>

				<?php }?>

				<?php if (!empty($_smarty_tpl->tpl_vars['shop_fax']->value)) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax: %s','sprintf'=>array(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop_fax']->value,'html','UTF-8' ))),'d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>

				<?php }?>
				<br />
			<?php }?>

			<?php if ((isset($_smarty_tpl->tpl_vars['shop_details']->value))) {?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop_details']->value,'html','UTF-8' ));?>
<br />
			<?php }?>

			<?php if ((isset($_smarty_tpl->tpl_vars['free_text']->value))) {?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['free_text']->value,'html','UTF-8' ));?>
<br />
			<?php }?>
		</td>
	</tr>
</table>

<?php }
}
