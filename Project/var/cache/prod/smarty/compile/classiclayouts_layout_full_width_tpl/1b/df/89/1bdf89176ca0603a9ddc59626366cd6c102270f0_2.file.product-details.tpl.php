<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:12:29
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:31:51
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\catalog\_partials\product-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb94eda4afb4_88652908',
=======
  'unifunc' => 'content_65cb99775b3660_39992778',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bdf89176ca0603a9ddc59626366cd6c102270f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\catalog\\_partials\\product-details.tpl',
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
  ),
),false)) {
<<<<<<< HEAD
function content_65cb94eda4afb4_88652908 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb99775b3660_39992778 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="js-product-details tab-pane fade<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> in active<?php }?>"
     id="product-details"
     data-product="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['embedded_attributes'] )), ENT_QUOTES, 'UTF-8');?>
"
     role="tabpanel"
  >
  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188111881465cb94eda2c1d2_78586245', 'product_reference');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173055637265cb997759ea22_21701582', 'product_reference');
>>>>>>> master2
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9212695965cb94eda34a30_85858428', 'product_quantities');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33225127065cb99775a5051_60604604', 'product_quantities');
>>>>>>> master2
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82704419165cb94eda38942_61711106', 'product_availability_date');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111699223565cb99775a7f71_78745177', 'product_availability_date');
>>>>>>> master2
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205232549365cb94eda3b1a6_83454507', 'product_out_of_stock');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52110192665cb99775a9c27_68652623', 'product_out_of_stock');
>>>>>>> master2
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20116375465cb94eda3c400_60999014', 'product_features');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182717298365cb99775aaa21_66014183', 'product_features');
>>>>>>> master2
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72697276065cb94eda41aa4_96968916', 'product_specific_references');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181967181765cb99775ae468_26888907', 'product_specific_references');
>>>>>>> master2
?>


  <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172977209865cb94eda47198_57594218', 'product_condition');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186432267065cb99775b1153_55214010', 'product_condition');
>>>>>>> master2
?>

</div>
<?php }
/* {block 'product_reference'} */
<<<<<<< HEAD
class Block_188111881465cb94eda2c1d2_78586245 extends Smarty_Internal_Block
=======
class Block_173055637265cb997759ea22_21701582 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'product_reference' => 
  array (
<<<<<<< HEAD
    0 => 'Block_188111881465cb94eda2c1d2_78586245',
=======
    0 => 'Block_173055637265cb997759ea22_21701582',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id))) {?>
      <div class="product-manufacturer">
        <?php if ((isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value))) {?>
          <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="img img-fluid manufacturer-logo" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" loading="lazy">
          </a>
        <?php } else { ?>
          <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
          <span>
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
          </span>
        <?php }?>
      </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['reference_to_display'])) && $_smarty_tpl->tpl_vars['product']->value['reference_to_display'] != '') {?>
      <div class="product-reference">
        <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['reference_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'product_reference'} */
/* {block 'product_quantities'} */
<<<<<<< HEAD
class Block_9212695965cb94eda34a30_85858428 extends Smarty_Internal_Block
=======
class Block_33225127065cb99775a5051_60604604 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'product_quantities' => 
  array (
<<<<<<< HEAD
    0 => 'Block_9212695965cb94eda34a30_85858428',
=======
    0 => 'Block_33225127065cb99775a5051_60604604',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_quantities']) {?>
      <div class="product-quantities">
        <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
        <span data-stock="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
" data-allow-oosp="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['allow_oosp'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity_label'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'product_quantities'} */
/* {block 'product_availability_date'} */
<<<<<<< HEAD
class Block_82704419165cb94eda38942_61711106 extends Smarty_Internal_Block
=======
class Block_111699223565cb99775a7f71_78745177 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'product_availability_date' => 
  array (
<<<<<<< HEAD
    0 => 'Block_82704419165cb94eda38942_61711106',
=======
    0 => 'Block_111699223565cb99775a7f71_78745177',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['availability_date']) {?>
      <div class="product-availability-date">
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability date:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['availability_date'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'product_availability_date'} */
/* {block 'product_out_of_stock'} */
<<<<<<< HEAD
class Block_205232549365cb94eda3b1a6_83454507 extends Smarty_Internal_Block
=======
class Block_52110192665cb99775a9c27_68652623 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'product_out_of_stock' => 
  array (
<<<<<<< HEAD
    0 => 'Block_205232549365cb94eda3b1a6_83454507',
=======
    0 => 'Block_52110192665cb99775a9c27_68652623',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product-out-of-stock">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'actionProductOutOfStock','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block 'product_out_of_stock'} */
/* {block 'product_features'} */
<<<<<<< HEAD
class Block_20116375465cb94eda3c400_60999014 extends Smarty_Internal_Block
=======
class Block_182717298365cb99775aaa21_66014183 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'product_features' => 
  array (
<<<<<<< HEAD
    0 => 'Block_20116375465cb94eda3c400_60999014',
=======
    0 => 'Block_182717298365cb99775aaa21_66014183',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['grouped_features']) {?>
      <section class="product-features">
        <p class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data sheet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
        <dl class="data-sheet">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['grouped_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
            <dt class="name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
</dt>
            <dd class="value"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'nl2br' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['feature']->value['value'],'htmlall' )) ));?>
</dd>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </dl>
      </section>
    <?php }?>
  <?php
}
}
/* {/block 'product_features'} */
/* {block 'product_specific_references'} */
<<<<<<< HEAD
class Block_72697276065cb94eda41aa4_96968916 extends Smarty_Internal_Block
=======
class Block_181967181765cb99775ae468_26888907 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'product_specific_references' => 
  array (
<<<<<<< HEAD
    0 => 'Block_72697276065cb94eda41aa4_96968916',
=======
    0 => 'Block_181967181765cb99775ae468_26888907',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['specific_references'])) {?>
      <section class="product-features">
        <p class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specific References','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
          <dl class="data-sheet">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['specific_references'], 'reference', false, 'key');
$_smarty_tpl->tpl_vars['reference']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['reference']->value) {
$_smarty_tpl->tpl_vars['reference']->do_else = false;
?>
              <dt class="name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
</dt>
              <dd class="value"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['reference']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </dl>
      </section>
    <?php }?>
  <?php
}
}
/* {/block 'product_specific_references'} */
/* {block 'product_condition'} */
<<<<<<< HEAD
class Block_172977209865cb94eda47198_57594218 extends Smarty_Internal_Block
=======
class Block_186432267065cb99775b1153_55214010 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'product_condition' => 
  array (
<<<<<<< HEAD
    0 => 'Block_172977209865cb94eda47198_57594218',
=======
    0 => 'Block_186432267065cb99775b1153_55214010',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['condition']) {?>
      <div class="product-condition">
        <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Condition','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
        <link href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['condition']['schema_url'], ENT_QUOTES, 'UTF-8');?>
"/>
        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['condition']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'product_condition'} */
}
