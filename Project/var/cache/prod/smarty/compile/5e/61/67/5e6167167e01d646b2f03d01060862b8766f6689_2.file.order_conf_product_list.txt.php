<?php
/* Smarty version 4.3.1, created on 2024-02-13 23:47:59
  from 'C:\xampp\htdocs\se_project\Project\mails\_partials\order_conf_product_list.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65cb9d3fa2a685_73204846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e6167167e01d646b2f03d01060862b8766f6689' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\mails\\_partials\\order_conf_product_list.txt',
      1 => 1707824452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb9d3fa2a685_73204846 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
						<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>


						<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>


						<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "productPriceBlock", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'productPriceBlock') ?: '') )), ENT_QUOTES, 'UTF-8');?>


						<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>


						<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>


	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customization'], 'customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
							<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customization']->value['customization_text'], ENT_QUOTES, 'UTF-8');?>


							<?php if (count($_smarty_tpl->tpl_vars['product']->value['customization']) > 1) {?>
								<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customization']->value['customization_quantity'], ENT_QUOTES, 'UTF-8');?>

							<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
