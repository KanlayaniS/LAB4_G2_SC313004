<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:13:04
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:34:37
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\pdf\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb951007a2c3_16925014',
=======
  'unifunc' => 'content_65cb9a1d980069_02414912',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4680dd43202c6ca561b4f09b9bbec0ca624e585b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\pdf\\header.tpl',
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
function content_65cb951007a2c3_16925014 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb9a1d980069_02414912 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
?>

<table style="width: 100%">
<tr>
	<td style="width: 50%">
		<?php if ($_smarty_tpl->tpl_vars['logo_path']->value) {?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['logo_path']->value;?>
" style="width:<?php echo $_smarty_tpl->tpl_vars['width_logo']->value;?>
px; height:<?php echo $_smarty_tpl->tpl_vars['height_logo']->value;?>
px;" />
		<?php }?>
	</td>
	<td style="width: 50%; text-align: right;">
		<table style="width: 100%">
			<tr>
				<td style="font-weight: bold; font-size: 14pt; color: #444; width: 100%;"><?php if ((isset($_smarty_tpl->tpl_vars['header']->value))) {
echo mb_strtoupper((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['header']->value,'html','UTF-8' )) ?? '', 'UTF-8');
}?></td>
			</tr>
			<tr>
				<td style="font-size: 14pt; color: #9E9F9E"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['date']->value,'html','UTF-8' ));?>
</td>
			</tr>
			<tr>
				<td style="font-size: 14pt; color: #9E9F9E"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value,'html','UTF-8' ));?>
</td>
			</tr>
		</table>
	</td>
</tr>
</table>

<?php }
}
