<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:29
=======
/* Smarty version 4.3.1, created on 2024-02-13 22:48:33
>>>>>>> master2
  from 'module:ps_viewedproductviewstemplateshookps_viewedproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94edd37be7_43050581',
=======
  'unifunc' => 'content_65cb8f514e5e46_73068729',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27d16a43ec328078374eaa2891a2b3bb0d0752c3' => 
    array (
      0 => 'module:ps_viewedproductviewstemplateshookps_viewedproduct.tpl',
<<<<<<< HEAD
      1 => 1707837723,
=======
      1 => 1707824457,
>>>>>>> master2
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/productlist.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_65cb94edd37be7_43050581 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb8f514e5e46_73068729 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
?><section class="featured-products clearfix mt-3">
  <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Viewed products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h2>
  <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/productlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'productClass'=>"col-xs-12 col-sm-6 col-lg-4 col-xl-3"), 0, false);
?>
</section>
<?php }
}
