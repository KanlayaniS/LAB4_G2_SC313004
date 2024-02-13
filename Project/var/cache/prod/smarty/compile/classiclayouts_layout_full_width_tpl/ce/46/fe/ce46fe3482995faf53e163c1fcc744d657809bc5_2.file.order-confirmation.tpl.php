<?php
/* Smarty version 4.3.1, created on 2024-02-13 13:43:26
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\order-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65cb0f8ebee2c4_25212021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce46fe3482995faf53e163c1fcc744d657809bc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\order-confirmation.tpl',
      1 => 1707806598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/order-confirmation-table.tpl' => 1,
    'file:customer/_partials/account-transformation-form.tpl' => 1,
  ),
),false)) {
function content_65cb0f8ebee2c4_25212021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179689566765cb0f8ebcc1d0_29283578', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164232081665cb0f8ebd1c49_87843117', 'page_content_container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'order_confirmation_header'} */
class Block_119896793765cb0f8ebcdaf8_13081614 extends Smarty_Internal_Block
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
class Block_137361045565cb0f8ebcff69_50653275 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

        <?php
}
}
/* {/block 'hook_order_confirmation'} */
/* {block 'page_content_container'} */
class Block_179689566765cb0f8ebcc1d0_29283578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_179689566765cb0f8ebcc1d0_29283578',
  ),
  'order_confirmation_header' => 
  array (
    0 => 'Block_119896793765cb0f8ebcdaf8_13081614',
  ),
  'hook_order_confirmation' => 
  array (
    0 => 'Block_137361045565cb0f8ebcff69_50653275',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119896793765cb0f8ebcdaf8_13081614', 'order_confirmation_header', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137361045565cb0f8ebcff69_50653275', 'hook_order_confirmation', $this->tplIndex);
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
class Block_39004860065cb0f8ebd2203_10923085 extends Smarty_Internal_Block
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
class Block_135687948665cb0f8ebd73b0_05801904 extends Smarty_Internal_Block
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
/* {block 'hook_payment_return'} */
class Block_121886441065cb0f8ebe1b91_18197458 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (!empty($_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value)) {?>
<section id="content-hook_payment_return" class="card definition-list">
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">
        <?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>

      </div>
    </div>
  </div>
</section>
<?php }
}
}
/* {/block 'hook_payment_return'} */
/* {block 'order_confirmation_header'} */
class Block_100458329065cb0f8ebe38c5_59453985 extends Smarty_Internal_Block
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
/* {block 'order_confirmation_header'} */
class Block_92849225665cb0f8ebe7916_12246324 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h3 class="h1 card-title">
          <i class="material-icons rtl-no-flip done">&#xE876;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ชำระเงิน','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

        </h3>
        <?php
}
}
/* {/block 'order_confirmation_header'} */
/* {block 'hook_order_confirmation'} */
class Block_146315261865cb0f8ebe89c6_25565419 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

        <?php
}
}
/* {/block 'hook_order_confirmation'} */
/* {block 'account_transformation_form'} */
class Block_117245270865cb0f8ebea1e4_66395955 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card">
  <div class="card-block">
    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/account-transformation-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
</div>
<?php
}
}
/* {/block 'account_transformation_form'} */
/* {block 'hook_order_confirmation_1'} */
class Block_168356096265cb0f8ebeb2d4_19960525 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmation1'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_order_confirmation_1'} */
/* {block 'hook_order_confirmation_2'} */
class Block_161610088865cb0f8ebecd86_94243017 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content-hook-order-confirmation-footer">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmation2'),$_smarty_tpl ) );?>

</section>
<?php
}
}
/* {/block 'hook_order_confirmation_2'} */
/* {block 'page_content_container'} */
class Block_164232081665cb0f8ebd1c49_87843117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_164232081665cb0f8ebd1c49_87843117',
  ),
  'order_confirmation_table' => 
  array (
    0 => 'Block_39004860065cb0f8ebd2203_10923085',
  ),
  'order_details' => 
  array (
    0 => 'Block_135687948665cb0f8ebd73b0_05801904',
  ),
  'hook_payment_return' => 
  array (
    0 => 'Block_121886441065cb0f8ebe1b91_18197458',
  ),
  'order_confirmation_header' => 
  array (
    0 => 'Block_100458329065cb0f8ebe38c5_59453985',
    1 => 'Block_92849225665cb0f8ebe7916_12246324',
  ),
  'hook_order_confirmation' => 
  array (
    0 => 'Block_146315261865cb0f8ebe89c6_25565419',
  ),
  'account_transformation_form' => 
  array (
    0 => 'Block_117245270865cb0f8ebea1e4_66395955',
  ),
  'hook_order_confirmation_1' => 
  array (
    0 => 'Block_168356096265cb0f8ebeb2d4_19960525',
  ),
  'hook_order_confirmation_2' => 
  array (
    0 => 'Block_161610088865cb0f8ebecd86_94243017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content" class="page-content page-order-confirmation card">
  <div class="card-block">
    <div class="row">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39004860065cb0f8ebd2203_10923085', 'order_confirmation_table', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135687948665cb0f8ebd73b0_05801904', 'order_details', $this->tplIndex);
?>


    </div>
  </div>
</section>

<!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121886441065cb0f8ebe1b91_18197458', 'hook_payment_return', $this->tplIndex);
?>
 -->


<!--------------------------------PART INVOICE------------------------------------->
<section id="content-hook_order_confirmation" class="card">
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">

        <!---Confirm your Order -->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100458329065cb0f8ebe38c5_59453985', 'order_confirmation_header', $this->tplIndex);
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
          <p>
            <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url']) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'คุณสามารถกดรับ [1]ใบกำกับภาษีได้ที่นี่[/1]','d'=>'Shop.Theme.Checkout','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['order']->value['details']['invoice_url'])."'>",'[/1]'=>"</a>")),$_smarty_tpl ) );?>

            <?php }?>
          </p>
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


<!--------------------------------PART ชำระเงิน------------------------------------->
<section id="content-hook_order_confirmation" class="card">
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">

        <!---Confirm your Order -->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92849225665cb0f8ebe7916_12246324', 'order_confirmation_header', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146315261865cb0f8ebe89c6_25565419', 'hook_order_confirmation', $this->tplIndex);
?>


        <label for="invoice">เลือกรูปแบบชำระเงิน :</label>
        <select id="payment_option" name="payment_option"
          style="width: 150px; height: 40px; border-radius: 10px; text-align: center;"
          onchange="showAdditionalInfo(this)">
          <option value="option1">เลบบัญชีธนาคาร</option>
          <option value="option2">พร้อมเพย์</option>
          <option value="option3">QR CODE</option>
        </select>

        <div id="description">
          <!-- Description for Option 1 -->
          <p id="option1_desc" style="display: none;">กสิกรไทย 123456789 บัญชี ทดสอบ </p>
          <!-- Description for Option 2 -->
          <p id="option2_desc" style="display: none;">รหัสพร้อมเพย์ 1234567891234</p>
          <!-- Description for Option 3 -->
          <div id="option3_desc" style="display: none;">

            <img src="http://localhost/se_project/Project/11-home_default/qr.jpg" alt="Image for Option 3">
            บัญชี ทดสอบ
          </div>

        </div>

        <?php echo '<script'; ?>
>
          // Initially show the description for the selected option
          window.onload = showDescription;

          function showDescription() {
            var option = document.getElementById("payment_option").value;
            document.getElementById("description").querySelectorAll("div, p").forEach(function (desc) {
              desc.style.display = "none";
            });
            document.getElementById(option + "_desc").style.display = "block";
          }
        <?php echo '</script'; ?>
>

        <h2>Upload Picture</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <label for="picture">Select Picture:</label><br>
          <input type="file" id="picture" name="picture"><br><br>
          <input type="submit" value="Upload">
        </form>










      </div>
    </div>
  </div>
</section>






<!-------------------------------------------------------->
<!-- <?php if (!$_smarty_tpl->tpl_vars['registered_customer_exists']->value) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117245270865cb0f8ebea1e4_66395955', 'account_transformation_form', $this->tplIndex);
?>
 -->

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168356096265cb0f8ebeb2d4_19960525', 'hook_order_confirmation_1', $this->tplIndex);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161610088865cb0f8ebecd86_94243017', 'hook_order_confirmation_2', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content_container'} */
}
