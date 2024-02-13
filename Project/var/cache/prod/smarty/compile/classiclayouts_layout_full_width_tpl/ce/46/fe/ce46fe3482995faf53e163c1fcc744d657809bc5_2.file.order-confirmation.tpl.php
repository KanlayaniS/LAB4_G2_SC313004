<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-02-13 23:13:05
=======
/* Smarty version 4.3.1, created on 2024-02-13 23:34:40
>>>>>>> master2
  from 'C:\xampp\htdocs\se_project\Project\themes\classic\templates\checkout\order-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_65cb9511807211_15749186',
=======
  'unifunc' => 'content_65cb9a201d0669_79028651',
>>>>>>> master2
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce46fe3482995faf53e163c1fcc744d657809bc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\se_project\\Project\\themes\\classic\\templates\\checkout\\order-confirmation.tpl',
<<<<<<< HEAD
      1 => 1707839376,
=======
      1 => 1707837486,
>>>>>>> master2
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/order-confirmation-table.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_65cb9511807211_15749186 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_65cb9a201d0669_79028651 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> master2
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12265933465cb95117dfea3_16640935', 'page_content_container');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190839600565cb9a201b9161_96328143', 'page_content_container');
>>>>>>> master2
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58296458165cb95117ecb17_89643689', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'order_confirmation_header'} */
class Block_41066075965cb95117e0f55_52248572 extends Smarty_Internal_Block
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157754390365cb9a201bbd05_33412904', 'page_content_container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'order_confirmation_header'} */
class Block_15915010365cb9a201b9a39_60896740 extends Smarty_Internal_Block
>>>>>>> master2
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
<<<<<<< HEAD
class Block_165884236665cb95117e6077_73864241 extends Smarty_Internal_Block
=======
class Block_101808457665cb9a201baab7_00435206 extends Smarty_Internal_Block
>>>>>>> master2
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

        <?php
}
}
/* {/block 'hook_order_confirmation'} */
/* {block 'page_content_container'} */
<<<<<<< HEAD
class Block_12265933465cb95117dfea3_16640935 extends Smarty_Internal_Block
=======
class Block_190839600565cb9a201b9161_96328143 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'page_content_container' => 
  array (
<<<<<<< HEAD
    0 => 'Block_12265933465cb95117dfea3_16640935',
  ),
  'order_confirmation_header' => 
  array (
    0 => 'Block_41066075965cb95117e0f55_52248572',
  ),
  'hook_order_confirmation' => 
  array (
    0 => 'Block_165884236665cb95117e6077_73864241',
=======
    0 => 'Block_190839600565cb9a201b9161_96328143',
  ),
  'order_confirmation_header' => 
  array (
    0 => 'Block_15915010365cb9a201b9a39_60896740',
  ),
  'hook_order_confirmation' => 
  array (
    0 => 'Block_101808457665cb9a201baab7_00435206',
>>>>>>> master2
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
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41066075965cb95117e0f55_52248572', 'order_confirmation_header', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15915010365cb9a201b9a39_60896740', 'order_confirmation_header', $this->tplIndex);
>>>>>>> master2
?>


        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165884236665cb95117e6077_73864241', 'hook_order_confirmation', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101808457665cb9a201baab7_00435206', 'hook_order_confirmation', $this->tplIndex);
>>>>>>> master2
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
<<<<<<< HEAD
class Block_164395025465cb95117ed2c7_76100791 extends Smarty_Internal_Block
=======
class Block_94760228865cb9a201bc1b4_95802475 extends Smarty_Internal_Block
>>>>>>> master2
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
<<<<<<< HEAD
class Block_168216870065cb95117f49d5_69640203 extends Smarty_Internal_Block
=======
class Block_76110398365cb9a201be254_81431082 extends Smarty_Internal_Block
>>>>>>> master2
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
<<<<<<< HEAD
/* {block 'order_confirmation_header'} */
class Block_23001625965cb9511805101_77743570 extends Smarty_Internal_Block
=======
/* {block 'hook_payment_return'} */
class Block_124346445465cb9a201c88c8_42353049 extends Smarty_Internal_Block
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
class Block_147639051365cb9a201cac97_23558527 extends Smarty_Internal_Block
>>>>>>> master2
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
<<<<<<< HEAD
/* {block 'page_content_container'} */
class Block_58296458165cb95117ecb17_89643689 extends Smarty_Internal_Block
=======
/* {block 'order_confirmation_header'} */
class Block_84683991865cb9a201cc4c3_12183621 extends Smarty_Internal_Block
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
class Block_121708793765cb9a201cd619_69713405 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

        <?php
}
}
/* {/block 'hook_order_confirmation'} */
/* {block 'page_content_container'} */
class Block_157754390365cb9a201bbd05_33412904 extends Smarty_Internal_Block
>>>>>>> master2
{
public $subBlocks = array (
  'page_content_container' => 
  array (
<<<<<<< HEAD
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
=======
    0 => 'Block_157754390365cb9a201bbd05_33412904',
  ),
  'order_confirmation_table' => 
  array (
    0 => 'Block_94760228865cb9a201bc1b4_95802475',
  ),
  'order_details' => 
  array (
    0 => 'Block_76110398365cb9a201be254_81431082',
  ),
  'hook_payment_return' => 
  array (
    0 => 'Block_124346445465cb9a201c88c8_42353049',
  ),
  'order_confirmation_header' => 
  array (
    0 => 'Block_147639051365cb9a201cac97_23558527',
    1 => 'Block_84683991865cb9a201cc4c3_12183621',
  ),
  'hook_order_confirmation' => 
  array (
    0 => 'Block_121708793765cb9a201cd619_69713405',
>>>>>>> master2
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content" class="page-content page-order-confirmation card">
  <div class="card-block">
    <div class="row">

      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164395025465cb95117ed2c7_76100791', 'order_confirmation_table', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94760228865cb9a201bc1b4_95802475', 'order_confirmation_table', $this->tplIndex);
>>>>>>> master2
?>


      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168216870065cb95117f49d5_69640203', 'order_details', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76110398365cb9a201be254_81431082', 'order_details', $this->tplIndex);
>>>>>>> master2
?>


    </div>
  </div>
</section>

<<<<<<< HEAD
=======
<!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124346445465cb9a201c88c8_42353049', 'hook_payment_return', $this->tplIndex);
?>
 -->


>>>>>>> master2
<!--------------------------PART INVOICE------------------------------------->
<section id="content-hook_order_confirmation" class="card">
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">

        <!---Confirm your Order -->
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23001625965cb9511805101_77743570', 'order_confirmation_header', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147639051365cb9a201cac97_23558527', 'order_confirmation_header', $this->tplIndex);
>>>>>>> master2
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

<<<<<<< HEAD
        <!-- The modal -->
        <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p>Thank you for submitting!</p>
=======
        <!---Confirm your Order -->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84683991865cb9a201cc4c3_12183621', 'order_confirmation_header', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121708793765cb9a201cd619_69713405', 'hook_order_confirmation', $this->tplIndex);
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
>>>>>>> master2
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
<<<<<<< HEAD
=======


<!--------------------------------PART แนบหลักฐานการโอน------------------------------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
/* Style for the modal */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal content */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto; /* 5% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
  text-align: center;
}

/* Close button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
/* Style for the modal */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal content */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto; /* 5% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
  text-align: center;
}

/* Close button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>

<section id="content-hook_order_confirmation" class="card">
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">
        <h2>แนบหลักฐานการโอน</h2>
        <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
          <label for="picture">เลือกรูปภาพ:</label><br>
          <input type="file" id="picture" name="picture"accept="image/*"><br><br>
          <input type="submit" class="continue btn btn-primary float-xs-right" value="ยืนยัน">
        </form>
        <!-- The modal -->
        <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <p>ขอบคุณที่สนับสนุน! <i class="fas fa-check-circle" style="color: green;"></i></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
// Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

document.getElementById("uploadForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent the form from submitting normally
  var form = event.target;
  var formData = new FormData(form);
  
  // Here, you would typically perform an AJAX request to submit the form data
  // and handle the response accordingly. For this example, let's just show the modal.
  modal.style.display = "block";
});

// When the user clicks on <span> (x), close the modal and redirect
span.onclick = function() {
  modal.style.display = "none";
  window.location.href = 'http://localhost/se_project/Project/th/';
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    window.location.href = 'http://localhost/se_project/Project/th/';
  }
}
<?php echo '</script'; ?>
>


>>>>>>> master2
<?php
}
}
/* {/block 'page_content_container'} */
}
