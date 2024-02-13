<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:29
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:31:47
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\catalog\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94ed4f1448_13812960',
=======
  'unifunc' => 'content_65cb9973035516_42917583',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f3299c6d32ed78e869ec14a828853976676d97a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\catalog\\product.tpl',
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
    'file:_partials/microdata/product-jsonld.tpl' => 1,
    'file:catalog/_partials/product-flags.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_65cb94ed4f1448_13812960 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb9973035516_42917583 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146674343665cb94ed494309_42495520', 'head');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_278517265cb9972f30173_89978902', 'head');
>>>>>>> master2
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66237464165cb94ed4a1627_18494246', 'head_microdata_special');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209081668365cb9972f3a279_70572322', 'head_microdata_special');
>>>>>>> master2
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79765898765cb94ed4a6828_58158365', 'content');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13856749865cb9972f3e8e6_40399955', 'content');
>>>>>>> master2
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head'} */
<<<<<<< HEAD
class Block_146674343665cb94ed494309_42495520 extends Smarty_Internal_Block
=======
class Block_278517265cb9972f30173_89978902 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'head' => 
  array (
<<<<<<< HEAD
    0 => 'Block_146674343665cb94ed494309_42495520',
=======
    0 => 'Block_278517265cb9972f30173_89978902',
>>>>>>> master2
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'head_microdata_special'} */
<<<<<<< HEAD
class Block_66237464165cb94ed4a1627_18494246 extends Smarty_Internal_Block
=======
class Block_209081668365cb9972f3a279_70572322 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
<<<<<<< HEAD
    0 => 'Block_66237464165cb94ed4a1627_18494246',
=======
    0 => 'Block_209081668365cb9972f3a279_70572322',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_cover_thumbnails'} */
<<<<<<< HEAD
class Block_51918497065cb94ed4a8d51_29495840 extends Smarty_Internal_Block
=======
class Block_117057081165cb9972f402b2_03662004 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
<<<<<<< HEAD
class Block_163454768265cb94ed4a83b7_63179357 extends Smarty_Internal_Block
=======
class Block_101749758765cb9972f3f9a6_40225189 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

              <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51918497065cb94ed4a8d51_29495840', 'product_cover_thumbnails', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117057081165cb9972f402b2_03662004', 'product_cover_thumbnails', $this->tplIndex);
>>>>>>> master2
?>

              <div class="scroll-box-arrows">
                <i class="material-icons left">&#xE314;</i>
                <i class="material-icons right">&#xE315;</i>
              </div>

            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
<<<<<<< HEAD
class Block_109953510065cb94ed4a7eb5_41927654 extends Smarty_Internal_Block
=======
class Block_11018213165cb9972f3f517_48375004 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <section class="page-content" id="content">
            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163454768265cb94ed4a83b7_63179357', 'page_content', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101749758765cb9972f3f9a6_40225189', 'page_content', $this->tplIndex);
>>>>>>> master2
?>

          </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
<<<<<<< HEAD
class Block_95547126165cb94ed4aab03_93643629 extends Smarty_Internal_Block
=======
class Block_121333445565cb9972f41ed9_43923416 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
<<<<<<< HEAD
class Block_159766220565cb94ed4aa697_04418102 extends Smarty_Internal_Block
=======
class Block_194055175665cb9972f41a76_23776121 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <h1 class="h1"><?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95547126165cb94ed4aab03_93643629', 'page_title', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121333445565cb9972f41ed9_43923416', 'page_title', $this->tplIndex);
>>>>>>> master2
?>
</h1>
            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
<<<<<<< HEAD
class Block_71452219365cb94ed4aa1c2_83855436 extends Smarty_Internal_Block
=======
class Block_106241409665cb9972f41541_98437468 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159766220565cb94ed4aa697_04418102', 'page_header', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194055175665cb9972f41a76_23776121', 'page_header', $this->tplIndex);
>>>>>>> master2
?>

          <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
<<<<<<< HEAD
class Block_68028404765cb94ed4abf14_66467528 extends Smarty_Internal_Block
=======
class Block_205021742865cb9973000f53_62469744 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
<<<<<<< HEAD
class Block_195267069865cb94ed4acb67_06629252 extends Smarty_Internal_Block
=======
class Block_178246117265cb9973001c19_18169707 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="product-description-short-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
            <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
<<<<<<< HEAD
class Block_169732500065cb94ed4af284_32946698 extends Smarty_Internal_Block
=======
class Block_6971110365cb99730043d5_29942559 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
              <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
<<<<<<< HEAD
class Block_14164348165cb94ed4b56b5_07697316 extends Smarty_Internal_Block
=======
class Block_88820061365cb997300a735_95348374 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
<<<<<<< HEAD
class Block_108315657865cb94ed4c2c84_83868025 extends Smarty_Internal_Block
=======
class Block_44100443565cb9973015076_12703791 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value,'showPackProductsPrice'=>$_smarty_tpl->tpl_vars['product']->value['show_price']), 0, true);
?>
                          <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
<<<<<<< HEAD
class Block_170848916565cb94ed4b6303_48481559 extends Smarty_Internal_Block
=======
class Block_58782970965cb997300b4b3_03531206 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                      <section class="product-pack">
                        <p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?>
                          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108315657865cb94ed4c2c84_83868025', 'product_miniature', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44100443565cb9973015076_12703791', 'product_miniature', $this->tplIndex);
>>>>>>> master2
?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </section>
                    <?php }?>
                  <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
<<<<<<< HEAD
class Block_36271846065cb94ed4c7e99_31119027 extends Smarty_Internal_Block
=======
class Block_212549317965cb99730181b4_88850687 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
<<<<<<< HEAD
class Block_200876364565cb94ed4c9286_79478131 extends Smarty_Internal_Block
=======
class Block_164756078265cb9973018ef1_57546559 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
<<<<<<< HEAD
class Block_201463184165cb94ed4ca4a1_66371474 extends Smarty_Internal_Block
=======
class Block_76307496065cb9973019c51_34211459 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
<<<<<<< HEAD
class Block_174224406465cb94ed4cb8d8_63473155 extends Smarty_Internal_Block
=======
class Block_188842448365cb997301a926_23608713 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
<<<<<<< HEAD
class Block_92275767165cb94ed4b3ab2_42587961 extends Smarty_Internal_Block
=======
class Block_49479912665cb9973008a32_11400247 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                  <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                  <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                  <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id" class="js-product-customization-id">

                  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14164348165cb94ed4b56b5_07697316', 'product_variants', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88820061365cb997300a735_95348374', 'product_variants', $this->tplIndex);
>>>>>>> master2
?>


                  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170848916565cb94ed4b6303_48481559', 'product_pack', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58782970965cb997300b4b3_03531206', 'product_pack', $this->tplIndex);
>>>>>>> master2
?>


                  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36271846065cb94ed4c7e99_31119027', 'product_discounts', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212549317965cb99730181b4_88850687', 'product_discounts', $this->tplIndex);
>>>>>>> master2
?>


                  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200876364565cb94ed4c9286_79478131', 'product_add_to_cart', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164756078265cb9973018ef1_57546559', 'product_add_to_cart', $this->tplIndex);
>>>>>>> master2
?>


                  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201463184165cb94ed4ca4a1_66371474', 'product_additional_info', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76307496065cb9973019c51_34211459', 'product_additional_info', $this->tplIndex);
>>>>>>> master2
?>


                                    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174224406465cb94ed4cb8d8_63473155', 'product_refresh', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188842448365cb997301a926_23608713', 'product_refresh', $this->tplIndex);
>>>>>>> master2
?>

                </form>
              <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
<<<<<<< HEAD
class Block_158778358665cb94ed4cd322_10991733 extends Smarty_Internal_Block
=======
class Block_213239157465cb997301b448_58675549 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_description'} */
<<<<<<< HEAD
class Block_22495073065cb94ed4da0c1_40724224 extends Smarty_Internal_Block
=======
class Block_132625872465cb9973023de5_89488036 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                     <div class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                   <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
<<<<<<< HEAD
class Block_181371800565cb94ed4dbbf6_13719358 extends Smarty_Internal_Block
=======
class Block_208622879565cb9973024cb0_62227692 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                   <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                 <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
<<<<<<< HEAD
class Block_64074528865cb94ed4dd317_87962356 extends Smarty_Internal_Block
=======
class Block_117203307165cb99730258c6_69662995 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                   <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                    <div class="tab-pane fade in" id="attachments" role="tabpanel">
                       <section class="product-attachments">
                         <p class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>
                         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
?>
                           <div class="attachment">
                             <h4><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
                             <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
                             <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                               <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
                             </a>
                           </div>
                         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                       </section>
                     </div>
                   <?php }?>
                 <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_tabs'} */
<<<<<<< HEAD
class Block_101442031565cb94ed4d0903_33413549 extends Smarty_Internal_Block
=======
class Block_139210145765cb997301cb53_73221918 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="tabs">
                <ul class="nav nav-tabs" role="tablist">
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
                    <li class="nav-item">
                       <a
                         class="nav-link<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active js-product-nav-active<?php }?>"
                         data-toggle="tab"
                         href="#description"
                         role="tab"
                         aria-controls="description"
                         <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                    </li>
                  <?php }?>
                  <li class="nav-item">
                    <a
                      class="nav-link<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active js-product-nav-active<?php }?>"
                      data-toggle="tab"
                      href="#product-details"
                      role="tab"
                      aria-controls="product-details"
                      <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#attachments"
                        role="tab"
                        aria-controls="attachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                    </li>
                  <?php }?>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
                    <li class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#extra-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"
                        role="tab"
                        aria-controls="extra-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                    </li>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>

                <div class="tab-content" id="tab-content">
                 <div class="tab-pane fade in<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active js-product-tab-active<?php }?>" id="description" role="tabpanel">
                   <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22495073065cb94ed4da0c1_40724224', 'product_description', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132625872465cb9973023de5_89488036', 'product_description', $this->tplIndex);
>>>>>>> master2
?>

                 </div>

                 <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181371800565cb94ed4dbbf6_13719358', 'product_details', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208622879565cb9973024cb0_62227692', 'product_details', $this->tplIndex);
>>>>>>> master2
?>


                 <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64074528865cb94ed4dd317_87962356', 'product_attachments', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117203307165cb99730258c6_69662995', 'product_attachments', $this->tplIndex);
>>>>>>> master2
?>


                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
                 <div class="tab-pane fade in <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tabpanel" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
                   <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

                 </div>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            </div>
          <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_miniature'} */
<<<<<<< HEAD
class Block_170621127665cb94ed4eb736_27400974 extends Smarty_Internal_Block
=======
class Block_201263971965cb99730308c0_71302946 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value,'productClasses'=>"col-xs-12 col-sm-6 col-lg-4 col-xl-3"), 0, true);
?>
              <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
<<<<<<< HEAD
class Block_177746417065cb94ed4e9218_18011433 extends Smarty_Internal_Block
=======
class Block_83866399565cb997302ed33_97114399 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
        <section class="product-accessories clearfix">
          <p class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
          <div class="products row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory', false, 'position');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
              <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170621127665cb94ed4eb736_27400974', 'product_miniature', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201263971965cb99730308c0_71302946', 'product_miniature', $this->tplIndex);
>>>>>>> master2
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </section>
      <?php }?>
    <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
<<<<<<< HEAD
class Block_166367393365cb94ed4edd56_71169175 extends Smarty_Internal_Block
=======
class Block_45957520965cb99730323e7_94417640 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
<<<<<<< HEAD
class Block_162612963465cb94ed4ef006_55168294 extends Smarty_Internal_Block
=======
class Block_122318736465cb9973033361_16497030 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
<<<<<<< HEAD
class Block_186950228665cb94ed4f0284_28711957 extends Smarty_Internal_Block
=======
class Block_149697146065cb99730343d1_12394230 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
<<<<<<< HEAD
class Block_91757936065cb94ed4efde4_43898780 extends Smarty_Internal_Block
=======
class Block_185228311765cb9973033f53_21026716 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186950228665cb94ed4f0284_28711957', 'page_footer', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149697146065cb99730343d1_12394230', 'page_footer', $this->tplIndex);
>>>>>>> master2
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
<<<<<<< HEAD
class Block_79765898765cb94ed4a6828_58158365 extends Smarty_Internal_Block
=======
class Block_13856749865cb9972f3e8e6_40399955 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'content' => 
  array (
<<<<<<< HEAD
    0 => 'Block_79765898765cb94ed4a6828_58158365',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_109953510065cb94ed4a7eb5_41927654',
  ),
  'page_content' => 
  array (
    0 => 'Block_163454768265cb94ed4a83b7_63179357',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_51918497065cb94ed4a8d51_29495840',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_71452219365cb94ed4aa1c2_83855436',
  ),
  'page_header' => 
  array (
    0 => 'Block_159766220565cb94ed4aa697_04418102',
  ),
  'page_title' => 
  array (
    0 => 'Block_95547126165cb94ed4aab03_93643629',
  ),
  'product_prices' => 
  array (
    0 => 'Block_68028404765cb94ed4abf14_66467528',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_195267069865cb94ed4acb67_06629252',
  ),
  'product_customization' => 
  array (
    0 => 'Block_169732500065cb94ed4af284_32946698',
  ),
  'product_buy' => 
  array (
    0 => 'Block_92275767165cb94ed4b3ab2_42587961',
  ),
  'product_variants' => 
  array (
    0 => 'Block_14164348165cb94ed4b56b5_07697316',
  ),
  'product_pack' => 
  array (
    0 => 'Block_170848916565cb94ed4b6303_48481559',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_108315657865cb94ed4c2c84_83868025',
    1 => 'Block_170621127665cb94ed4eb736_27400974',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_36271846065cb94ed4c7e99_31119027',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_200876364565cb94ed4c9286_79478131',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_201463184165cb94ed4ca4a1_66371474',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_174224406465cb94ed4cb8d8_63473155',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_158778358665cb94ed4cd322_10991733',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_101442031565cb94ed4d0903_33413549',
  ),
  'product_description' => 
  array (
    0 => 'Block_22495073065cb94ed4da0c1_40724224',
  ),
  'product_details' => 
  array (
    0 => 'Block_181371800565cb94ed4dbbf6_13719358',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_64074528865cb94ed4dd317_87962356',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_177746417065cb94ed4e9218_18011433',
  ),
  'product_footer' => 
  array (
    0 => 'Block_166367393365cb94ed4edd56_71169175',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_162612963465cb94ed4ef006_55168294',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_91757936065cb94ed4efde4_43898780',
  ),
  'page_footer' => 
  array (
    0 => 'Block_186950228665cb94ed4f0284_28711957',
=======
    0 => 'Block_13856749865cb9972f3e8e6_40399955',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11018213165cb9972f3f517_48375004',
  ),
  'page_content' => 
  array (
    0 => 'Block_101749758765cb9972f3f9a6_40225189',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_117057081165cb9972f402b2_03662004',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_106241409665cb9972f41541_98437468',
  ),
  'page_header' => 
  array (
    0 => 'Block_194055175665cb9972f41a76_23776121',
  ),
  'page_title' => 
  array (
    0 => 'Block_121333445565cb9972f41ed9_43923416',
  ),
  'product_prices' => 
  array (
    0 => 'Block_205021742865cb9973000f53_62469744',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_178246117265cb9973001c19_18169707',
  ),
  'product_customization' => 
  array (
    0 => 'Block_6971110365cb99730043d5_29942559',
  ),
  'product_buy' => 
  array (
    0 => 'Block_49479912665cb9973008a32_11400247',
  ),
  'product_variants' => 
  array (
    0 => 'Block_88820061365cb997300a735_95348374',
  ),
  'product_pack' => 
  array (
    0 => 'Block_58782970965cb997300b4b3_03531206',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_44100443565cb9973015076_12703791',
    1 => 'Block_201263971965cb99730308c0_71302946',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_212549317965cb99730181b4_88850687',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_164756078265cb9973018ef1_57546559',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_76307496065cb9973019c51_34211459',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_188842448365cb997301a926_23608713',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_213239157465cb997301b448_58675549',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_139210145765cb997301cb53_73221918',
  ),
  'product_description' => 
  array (
    0 => 'Block_132625872465cb9973023de5_89488036',
  ),
  'product_details' => 
  array (
    0 => 'Block_208622879565cb9973024cb0_62227692',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_117203307165cb99730258c6_69662995',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_83866399565cb997302ed33_97114399',
  ),
  'product_footer' => 
  array (
    0 => 'Block_45957520965cb99730323e7_94417640',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_122318736465cb9973033361_16497030',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_185228311765cb9973033f53_21026716',
  ),
  'page_footer' => 
  array (
    0 => 'Block_149697146065cb99730343d1_12394230',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
    <meta content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

    <div class="row product-container js-product-container">
      <div class="col-md-6">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109953510065cb94ed4a7eb5_41927654', 'page_content_container', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11018213165cb9972f3f517_48375004', 'page_content_container', $this->tplIndex);
>>>>>>> master2
?>

        </div>
        <div class="col-md-6">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71452219365cb94ed4aa1c2_83855436', 'page_header_container', $this->tplIndex);
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68028404765cb94ed4abf14_66467528', 'product_prices', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106241409665cb9972f41541_98437468', 'page_header_container', $this->tplIndex);
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205021742865cb9973000f53_62469744', 'product_prices', $this->tplIndex);
>>>>>>> master2
?>


          <div class="product-information">
            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195267069865cb94ed4acb67_06629252', 'product_description_short', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178246117265cb9973001c19_18169707', 'product_description_short', $this->tplIndex);
>>>>>>> master2
?>


            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
              <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169732500065cb94ed4af284_32946698', 'product_customization', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6971110365cb99730043d5_29942559', 'product_customization', $this->tplIndex);
>>>>>>> master2
?>

            <?php }?>

            <div class="product-actions js-product-actions">
              <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92275767165cb94ed4b3ab2_42587961', 'product_buy', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49479912665cb9973008a32_11400247', 'product_buy', $this->tplIndex);
>>>>>>> master2
?>


            </div>

            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158778358665cb94ed4cd322_10991733', 'hook_display_reassurance', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213239157465cb997301b448_58675549', 'hook_display_reassurance', $this->tplIndex);
>>>>>>> master2
?>


            <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101442031565cb94ed4d0903_33413549', 'product_tabs', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139210145765cb997301cb53_73221918', 'product_tabs', $this->tplIndex);
>>>>>>> master2
?>

        </div>
      </div>
    </div>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177746417065cb94ed4e9218_18011433', 'product_accessories', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83866399565cb997302ed33_97114399', 'product_accessories', $this->tplIndex);
>>>>>>> master2
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166367393365cb94ed4edd56_71169175', 'product_footer', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45957520965cb99730323e7_94417640', 'product_footer', $this->tplIndex);
>>>>>>> master2
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162612963465cb94ed4ef006_55168294', 'product_images_modal', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122318736465cb9973033361_16497030', 'product_images_modal', $this->tplIndex);
>>>>>>> master2
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91757936065cb94ed4efde4_43898780', 'page_footer_container', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185228311765cb9973033f53_21026716', 'page_footer_container', $this->tplIndex);
>>>>>>> master2
?>

  </section>

<?php
}
}
/* {/block 'content'} */
}
