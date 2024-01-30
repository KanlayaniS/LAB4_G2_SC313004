<?php
/* Smarty version 4.3.1, created on 2024-01-30 19:55:14
  from 'C:\xampp\htdocs\se_project\Project\modules\ps_checkpayment\views\templates\hook\infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b8f1b2a93b73_42118381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcde552d1ed8de74f9d808763206932e4bf533d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\modules\\ps_checkpayment\\views\\templates\\hook\\infos.tpl',
      1 => 1706617821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b8f1b2a93b73_42118381 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info">
<img src="../modules/ps_checkpayment/logo.png" style="float:left; margin-right:15px;" height="60">
<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This module allows you to accept payments by check.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl ) );?>
</strong></p>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment'.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl ) );?>
</p>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'d'=>'Modules.Checkpayment.Admin'),$_smarty_tpl ) );?>
</p>
</div>
<?php }
}
