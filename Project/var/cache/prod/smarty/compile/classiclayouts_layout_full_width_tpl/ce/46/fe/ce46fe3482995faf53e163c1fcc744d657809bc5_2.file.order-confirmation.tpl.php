<?php
/* Smarty version 4.3.1, created on 2024-02-13 23:13:05
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\order-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65cb9511807211_15749186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce46fe3482995faf53e163c1fcc744d657809bc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\order-confirmation.tpl',
      1 => 1707839376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/order-confirmation-table.tpl' => 1,
  ),
),false)) {
function content_65cb9511807211_15749186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12265933465cb95117dfea3_16640935', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58296458165cb95117ecb17_89643689', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'order_confirmation_header'} */
class Block_41066075965cb95117e0f55_52248572 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h3 class="h1 card-title">
          <i class="material-icons rtl-no-flip done">&#xE876;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ยืนยันออเดอร์ของคุณ','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

        </h3>
        <?php
}
}
/* {/block 'order_confirmation_header'} */
/* {block 'hook_order_confirmation'} */
class Block_165884236665cb95117e6077_73864241 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

        <?php
}
}
/* {/block 'hook_order_confirmation'} */
/* {block 'page_content_container'} */
class Block_12265933465cb95117dfea3_16640935 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_12265933465cb95117dfea3_16640935',
  ),
  'order_confirmation_header' => 
  array (
    0 => 'Block_41066075965cb95117e0f55_52248572',
  ),
  'hook_order_confirmation' => 
  array (
    0 => 'Block_165884236665cb95117e6077_73864241',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content-hook_order_confirmation" class="card">
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">

        <!---Confirm your Order -->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41066075965cb95117e0f55_52248572', 'order_confirmation_header', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165884236665cb95117e6077_73864241', 'hook_order_confirmation', $this->tplIndex);
?>


      </div>
    </div>
  </div>
</section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'order_confirmation_table'} */
class Block_164395025465cb95117ed2c7_76100791 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/order-confirmation-table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['order']->value['products'],'subtotals'=>$_smarty_tpl->tpl_vars['order']->value['subtotals'],'totals'=>$_smarty_tpl->tpl_vars['order']->value['totals'],'labels'=>$_smarty_tpl->tpl_vars['order']->value['labels'],'add_product_link'=>false), 0, false);
?>
      <?php
}
}
/* {/block 'order_confirmation_table'} */
/* {block 'order_details'} */
class Block_168216870065cb95117f49d5_69640203 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="order-details" class="col-md-4">
        <h3 class="h3 card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order details','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
:</h3>
        <ul>
          <li id="order-reference-value"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference: %reference%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%reference%'=>$_smarty_tpl->tpl_vars['order']->value['details']['reference'])),$_smarty_tpl ) );?>
</li>
          <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment method: %method%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%method%'=>$_smarty_tpl->tpl_vars['order']->value['details']['payment'])),$_smarty_tpl ) );?>

          </li>
          <?php if (!$_smarty_tpl->tpl_vars['order']->value['details']['is_virtual']) {?>
          <li>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping method: %method%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%method%'=>$_smarty_tpl->tpl_vars['order']->value['carrier']['name'])),$_smarty_tpl ) );?>
<br>
            <em><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['carrier']['delay'], ENT_QUOTES, 'UTF-8');?>
</em>
          </li>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['recyclable']) {?>
          <li>
            <em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have given permission to receive your order in recycled packaging.','d'=>"Shop.Theme.Customeraccount"),$_smarty_tpl ) );?>
</em>
          </li>
          <?php }?>
        </ul>
      </div>
      <?php
}
}
/* {/block 'order_details'} */
/* {block 'order_confirmation_header'} */
class Block_23001625965cb9511805101_77743570 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h3 class="h1 card-title">
          <i class="material-icons rtl-no-flip done">&#xE876;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

        </h3>
        <?php
}
}
/* {/block 'order_confirmation_header'} */
/* {block 'page_content_container'} */
class Block_58296458165cb95117ecb17_89643689 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_58296458165cb95117ecb17_89643689',
  ),
  'order_confirmation_table' => 
  array (
    0 => 'Block_164395025465cb95117ed2c7_76100791',
  ),
  'order_details' => 
  array (
    0 => 'Block_168216870065cb95117f49d5_69640203',
  ),
  'order_confirmation_header' => 
  array (
    0 => 'Block_23001625965cb9511805101_77743570',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content" class="page-content page-order-confirmation card">
  <div class="card-block">
    <div class="row">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164395025465cb95117ed2c7_76100791', 'order_confirmation_table', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168216870065cb95117f49d5_69640203', 'order_details', $this->tplIndex);
?>


    </div>
  </div>
</section>

<!--------------------------PART INVOICE------------------------------------->
<section id="content-hook_order_confirmation" class="card">
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">

        <!---Confirm your Order -->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23001625965cb9511805101_77743570', 'order_confirmation_header', $this->tplIndex);
?>


        <!-- ใบเสร็จ -->
        <label for="invoice">Select Invoice:</label>
        <select id="invoice" style="width: 150px; height: 40px; border-radius: 10px; text-align: center;"
          onchange="showAdditionalInfo(this)">
          <option value="dontwant">ไม่ต้องการ</option>
          <option value="want" class="nested-option">ต้องการ</option>
        </select>

        <!-- in option want ka -->
        <div id="additionalInfo" style="display: none;">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"ใบกำกับภาษีจะถูกส่งให้ทางอีเมล หลังจากตรวจสอบหลักฐานการโอน"),$_smarty_tpl ) );?>

        </div>

        <?php echo '<script'; ?>
>
          function showAdditionalInfo(select) {
            var additionalInfo = document.getElementById('additionalInfo');
            if (select.value === 'want') {
              additionalInfo.style.display = 'block';
            } else {
              additionalInfo.style.display = 'none';
            }
          }
        <?php echo '</script'; ?>
>

      </div>
    </div>
  </div>
</section>

<section id="submit-section" class="card">
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">
        <!-- Button to trigger modal -->
        <button id="submit-button" class="btn btn-primary" onclick="showModal()">Submit</button>

        <!-- The modal -->
        <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p>Thank you for submitting!</p>
          </div>
        </div>

        <?php echo '<script'; ?>
>
          // Function to show modal
          function showModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
          }

          // Function to close modal and redirect
          function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
            window.location.href = 'http://localhost/se_project/Project/th/';
          }
        <?php echo '</script'; ?>
>
      </div>
    </div>
  </div>
</section>
<?php
}
}
/* {/block 'page_content_container'} */
}
