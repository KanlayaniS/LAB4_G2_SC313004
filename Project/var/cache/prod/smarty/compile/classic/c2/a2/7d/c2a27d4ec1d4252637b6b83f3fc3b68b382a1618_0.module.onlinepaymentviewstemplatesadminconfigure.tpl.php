<?php
/* Smarty version 4.3.1, created on 2024-02-13 22:53:55
  from 'module:onlinepaymentviewstemplatesadminconfigure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65cb9093e9fe81_19709276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2a27d4ec1d4252637b6b83f3fc3b68b382a1618' => 
    array (
      0 => 'module:onlinepaymentviewstemplatesadminconfigure.tpl',
      1 => 1707749642,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb9093e9fe81_19709276 (Smarty_Internal_Template $_smarty_tpl) {
?><form>
    <div class="panel">
        <div class="panel-heading">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Online Payment Configuration','mod'=>'onlinepayment'),$_smarty_tpl ) );?>

        </div>
        <div class="panel-body">
            มีแค่ใจ จะเอาอะไรสู้เขา
        </div>
        <div class="panel-footer">
            <button type="submit" name="saveonlinepayment" class="btn btn-default pull-right">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'onlinepayment'),$_smarty_tpl ) );?>

            </button>
        </div>
    </div>
</form><?php }
}
