<?php
/* Smarty version 4.3.1, created on 2024-02-13 20:33:13
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\order-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65cb6f99a7d3b5_01591846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce46fe3482995faf53e163c1fcc744d657809bc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\order-confirmation.tpl',
      1 => 1707831190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/order-confirmation-table.tpl' => 1,
  ),
),false)) {
function content_65cb6f99a7d3b5_01591846 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63688652665cb6f99a6a228_89052712', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194674517565cb6f99a6d2b8_56813603', 'page_content_container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'order_confirmation_header'} */
class Block_132656088465cb6f99a6abe6_77152116 extends Smarty_Internal_Block
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
class Block_65356622765cb6f99a6c129_53888041 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

        <?php
}
}
/* {/block 'hook_order_confirmation'} */
/* {block 'page_content_container'} */
class Block_63688652665cb6f99a6a228_89052712 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_63688652665cb6f99a6a228_89052712',
  ),
  'order_confirmation_header' => 
  array (
    0 => 'Block_132656088465cb6f99a6abe6_77152116',
  ),
  'hook_order_confirmation' => 
  array (
    0 => 'Block_65356622765cb6f99a6c129_53888041',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132656088465cb6f99a6abe6_77152116', 'order_confirmation_header', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65356622765cb6f99a6c129_53888041', 'hook_order_confirmation', $this->tplIndex);
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
class Block_25739137865cb6f99a6d741_79601667 extends Smarty_Internal_Block
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
class Block_18703003665cb6f99a6f695_32312424 extends Smarty_Internal_Block
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
class Block_98427653465cb6f99a77756_02110918 extends Smarty_Internal_Block
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
class Block_75647307265cb6f99a78fd9_62544954 extends Smarty_Internal_Block
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
class Block_96345414065cb6f99a7a640_29517886 extends Smarty_Internal_Block
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
class Block_60679680465cb6f99a7b344_38771349 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

        <?php
}
}
/* {/block 'hook_order_confirmation'} */
/* {block 'page_content_container'} */
class Block_194674517565cb6f99a6d2b8_56813603 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_194674517565cb6f99a6d2b8_56813603',
  ),
  'order_confirmation_table' => 
  array (
    0 => 'Block_25739137865cb6f99a6d741_79601667',
  ),
  'order_details' => 
  array (
    0 => 'Block_18703003665cb6f99a6f695_32312424',
  ),
  'hook_payment_return' => 
  array (
    0 => 'Block_98427653465cb6f99a77756_02110918',
  ),
  'order_confirmation_header' => 
  array (
    0 => 'Block_75647307265cb6f99a78fd9_62544954',
    1 => 'Block_96345414065cb6f99a7a640_29517886',
  ),
  'hook_order_confirmation' => 
  array (
    0 => 'Block_60679680465cb6f99a7b344_38771349',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content" class="page-content page-order-confirmation card">
  <div class="card-block">
    <div class="row">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25739137865cb6f99a6d741_79601667', 'order_confirmation_table', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18703003665cb6f99a6f695_32312424', 'order_details', $this->tplIndex);
?>


    </div>
  </div>
</section>

<!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98427653465cb6f99a77756_02110918', 'hook_payment_return', $this->tplIndex);
?>
 -->


<!--------------------------PART INVOICE------------------------------------->
<section id="content-hook_order_confirmation" class="card">
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">

        <!---Confirm your Order -->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75647307265cb6f99a78fd9_62544954', 'order_confirmation_header', $this->tplIndex);
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


<!--------------------------------PART ชำระเงิน------------------------------------->
<section id="content-hook_order_confirmation" class="card">
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">

        <!---Confirm your Order -->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96345414065cb6f99a7a640_29517886', 'order_confirmation_header', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60679680465cb6f99a7b344_38771349', 'hook_order_confirmation', $this->tplIndex);
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
          <div id="option1_desc" style="display: none;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"กสิกรไทย 123456789 บัญชี ทดสอบ"),$_smarty_tpl ) );?>
 </div>
          <!-- Description for Option 2 -->
          <div id="option2_desc" style="display: none;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"รหัสพร้อมเพย์ 1234567891234"),$_smarty_tpl ) );?>
</div>
          <!-- Description for Option 3 -->
          <div id="option3_desc" style="display: none;">
            <img src="http://localhost/se_project/Project/themes/classic/templates/checkout/promptpay.png" alt="Image for Option 3" width="300" height="400">
            บัญชี ทดสอบ
          </div>
        </div>

        <?php echo '<script'; ?>
>
          window.onload = showAdditionalInfo;
          function showAdditionalInfo() {
            const selectedOption = document.getElementById('payment_option').value;
            const descriptions = document.getElementById('description').children;
            for (let i = 0; i < descriptions.length; i++) {
              const desc = descriptions[i];
              if (desc.id === selectedOption + "_desc") {
                desc.style.display = 'block';
              } else {
                desc.style.display = 'none';
              }
            }
          }
        <?php echo '</script'; ?>
>

        

      </div>
    </div>
  </div>
</section>

<section id="content-hook_order_confirmation" class="card">
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">
        <h2>แนบหลักฐานการโอน</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <label for="picture">เลือกรูปภาพ:</label><br>
          <input type="file" id="picture" name="picture"><br><br>
          <input type="submit" class="continue btn btn-primary float-xs-right" value="ยืนยัน">
        </form>
      </div>
    </div>
  </div>
</section>

<?php
}
}
/* {/block 'page_content_container'} */
}
