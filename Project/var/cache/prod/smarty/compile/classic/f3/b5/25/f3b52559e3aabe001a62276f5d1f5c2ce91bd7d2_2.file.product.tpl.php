<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:13:21
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:31:51
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb9521ca32b5_84185003',
=======
  'unifunc' => 'content_65cb9977e18a91_17962644',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3b52559e3aabe001a62276f5d1f5c2ce91bd7d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\catalog\\_partials\\miniatures\\product.tpl',
<<<<<<< HEAD
      1 => 1707837723,
=======
      1 => 1707824457,
>>>>>>> master2
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
    'file:catalog/_partials/product-flags.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_65cb9521ca32b5_84185003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201801599165cb9521c76ed6_06766895', 'product_miniature_item');
=======
function content_65cb9977e18a91_17962644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139598345165cb9977defd18_80575217', 'product_miniature_item');
>>>>>>> master2
?>

<?php }
/* {block 'product_thumbnail'} */
<<<<<<< HEAD
class Block_63226366065cb9521c79d86_41351866 extends Smarty_Internal_Block
=======
class Block_74943165865cb9977df2431_94829261 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
              <picture>
                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                <img
                  src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
                  loading="lazy"
                  data-full-size-image-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                  height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                />
              </picture>
            </a>
          <?php } else { ?>
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
              <picture>
                <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                <img
                  src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                  loading="lazy"
                  width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                  height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                />
              </picture>
            </a>
          <?php }?>
        <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
<<<<<<< HEAD
class Block_95306034565cb9521c8ca06_53764899 extends Smarty_Internal_Block
=======
class Block_41983951765cb9977e04869_20430542 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </a>
          <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_variants'} */
<<<<<<< HEAD
class Block_155357995365cb9521c8d987_20346913 extends Smarty_Internal_Block
=======
class Block_165957067965cb9977e06002_50813293 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
            <?php }?>
          <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_name'} */
<<<<<<< HEAD
class Block_28160232365cb9521c8f5e3_94003749 extends Smarty_Internal_Block
=======
class Block_132759465565cb9977e08905_53277600 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
            <h3 class="h3 product-title"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
          <?php } else { ?>
            <h2 class="h3 product-title"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h2>
          <?php }?>
        <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
<<<<<<< HEAD
class Block_963496265cb9521c96427_89660153 extends Smarty_Internal_Block
=======
class Block_88325792665cb9977e0d6d5_42717491 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <div class="product-price-and-shipping">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


                <span class="regular-price" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                  <span class="discount-percentage discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
                  <span class="discount-amount discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
              <?php }?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


              <span class="price" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'custom_price', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'custom_price','hook_origin'=>'products_list'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php if ('' !== $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price')) {?>
                  <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price');?>

                <?php } else { ?>
                  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

                <?php }?>
              </span>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

            </div>
          <?php }?>
        <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_reviews'} */
<<<<<<< HEAD
class Block_117088016065cb9521ca10d6_14676712 extends Smarty_Internal_Block
=======
class Block_56584998065cb9977e17313_56341846 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_miniature_item'} */
<<<<<<< HEAD
class Block_201801599165cb9521c76ed6_06766895 extends Smarty_Internal_Block
=======
class Block_139598345165cb9977defd18_80575217 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
<<<<<<< HEAD
    0 => 'Block_201801599165cb9521c76ed6_06766895',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_63226366065cb9521c79d86_41351866',
  ),
  'quick_view' => 
  array (
    0 => 'Block_95306034565cb9521c8ca06_53764899',
  ),
  'product_variants' => 
  array (
    0 => 'Block_155357995365cb9521c8d987_20346913',
  ),
  'product_name' => 
  array (
    0 => 'Block_28160232365cb9521c8f5e3_94003749',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_963496265cb9521c96427_89660153',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_117088016065cb9521ca10d6_14676712',
=======
    0 => 'Block_139598345165cb9977defd18_80575217',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_74943165865cb9977df2431_94829261',
  ),
  'quick_view' => 
  array (
    0 => 'Block_41983951765cb9977e04869_20430542',
  ),
  'product_variants' => 
  array (
    0 => 'Block_165957067965cb9977e06002_50813293',
  ),
  'product_name' => 
  array (
    0 => 'Block_132759465565cb9977e08905_53277600',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_88325792665cb9977e0d6d5_42717491',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_56584998065cb9977e17313_56341846',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="js-product product<?php if (!empty($_smarty_tpl->tpl_vars['productClasses']->value)) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['productClasses']->value, ENT_QUOTES, 'UTF-8');
}?>">
  <article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63226366065cb9521c79d86_41351866', 'product_thumbnail', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74943165865cb9977df2431_94829261', 'product_thumbnail', $this->tplIndex);
>>>>>>> master2
?>


        <div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?>">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95306034565cb9521c8ca06_53764899', 'quick_view', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41983951765cb9977e04869_20430542', 'quick_view', $this->tplIndex);
>>>>>>> master2
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155357995365cb9521c8d987_20346913', 'product_variants', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165957067965cb9977e06002_50813293', 'product_variants', $this->tplIndex);
>>>>>>> master2
?>

        </div>
      </div>

      <div class="product-description">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28160232365cb9521c8f5e3_94003749', 'product_name', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132759465565cb9977e08905_53277600', 'product_name', $this->tplIndex);
>>>>>>> master2
?>


        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_963496265cb9521c96427_89660153', 'product_price_and_shipping', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88325792665cb9977e0d6d5_42717491', 'product_price_and_shipping', $this->tplIndex);
>>>>>>> master2
?>


        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117088016065cb9521ca10d6_14676712', 'product_reviews', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56584998065cb9977e17313_56341846', 'product_reviews', $this->tplIndex);
>>>>>>> master2
?>

      </div>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  </article>
</div>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
