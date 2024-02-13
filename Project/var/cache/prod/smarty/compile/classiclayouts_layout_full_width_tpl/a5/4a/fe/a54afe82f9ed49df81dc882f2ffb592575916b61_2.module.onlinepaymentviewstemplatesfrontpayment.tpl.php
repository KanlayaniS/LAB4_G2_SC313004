<?php
/* Smarty version 4.3.1, created on 2024-02-13 23:12:47
  from 'module:onlinepaymentviewstemplatesfrontpayment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65cb94ffef4d98_29929232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a54afe82f9ed49df81dc882f2ffb592575916b61' => 
    array (
      0 => 'module:onlinepaymentviewstemplatesfrontpayment.tpl',
      1 => 1707840740,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb94ffef4d98_29929232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83083042565cb94ffee9505_88545941', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'order_confirmation_header'} */
class Block_177442090765cb94ffeea306_79922467 extends Smarty_Internal_Block
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
class Block_73089031465cb94ffeee4b0_16086744 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

                  <?php
}
}
/* {/block 'hook_order_confirmation'} */
/* {block "content"} */
class Block_83083042565cb94ffee9505_88545941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_83083042565cb94ffee9505_88545941',
  ),
  'order_confirmation_header' => 
  array (
    0 => 'Block_177442090765cb94ffeea306_79922467',
  ),
  'hook_order_confirmation' => 
  array (
    0 => 'Block_73089031465cb94ffeee4b0_16086744',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-md-12">
        <section id="content-hook_order_confirmation" class="card">
            <div class="card-block">
              <div class="row">
                <div class="col-md-12">
          
                  <!---Confirm your Order -->
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177442090765cb94ffeea306_79922467', 'order_confirmation_header', $this->tplIndex);
?>

          
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73089031465cb94ffeee4b0_16086744', 'hook_order_confirmation', $this->tplIndex);
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
        <form method="post" enctype="multipart/form-data">
            <label for="slip_upload">แนบสลิปการโอน</label>
            <input type="file" name="slip_upload" id="slip_upload" accept="image/*" required/>
            <button type="submit" name="placeorder">
                Upload
            </button>
        </form>
    </div>
<?php
}
}
/* {/block "content"} */
}
