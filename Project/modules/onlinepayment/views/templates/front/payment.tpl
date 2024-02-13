{extends file='page.tpl'}



{block name="content"}
    <div class="col-md-12">
        <section id="content-hook_order_confirmation" class="card">
            <div class="card-block">
              <div class="row">
                <div class="col-md-12">
          
                  <!---Confirm your Order -->
                  {block name='order_confirmation_header'}
                  <h3 class="h1 card-title">
                    <i class="material-icons rtl-no-flip done">&#xE876;</i>{l s='ช่องทางการชำระเงิน' d='Shop.Theme.Checkout'}
                  </h3>
                  {/block}
          
                  {block name='hook_order_confirmation'}
                  {$HOOK_ORDER_CONFIRMATION nofilter}
                  {/block}
          
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
                    <div id="option1_desc" style="display: none;">{l s="กสิกรไทย 123456789 บัญชี ทดสอบ"} </div>
                    <!-- Description for Option 2 -->
                    <div id="option2_desc" style="display: none;">{l s="รหัสพร้อมเพย์ 1234567891234"}</div>
                    <!-- Description for Option 3 -->
                    <div id="option3_desc" style="display: none;">
                      <img src="http://localhost/se_project/Project/themes/classic/templates/checkout/promptpay.png" alt="Image for Option 3" width="300" height="400">
                      บัญชี ทดสอบ
                    </div>
                  </div>
          
                  <script>
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
                  </script>
          
                  
          
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
<section id="submit-section" class="card">
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">
        {block name='order_confirmation_header'}
                  <h4 class="h1 card-title">
                    <i class="material-icons rtl-no-flip done">&#xE876;</i>{l s='แนบสลิปการโอน' d='Shop.Theme.Checkout'}
                  </h4>
                  {/block}
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="slip_upload" id="slip_upload" accept="image/*" required/>
            <button type="submit" name="placeorder" class="btn btn-primary">
                Upload
            </button>
        </form>
      </div>
    </div>
  </div>
</section>
{/block}