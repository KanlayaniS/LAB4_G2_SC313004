{extends file='page.tpl'}

{block name='page_content_container' prepend}
<section id="content-hook_order_confirmation" class="card">
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">

        <!---Confirm your Order -->
        {block name='order_confirmation_header'}
        <h3 class="h1 card-title">
          <i class="material-icons rtl-no-flip done">&#xE876;</i>{l s='ยืนยันออเดอร์ของคุณ' d='Shop.Theme.Checkout'}
        </h3>
        {/block}

        {block name='hook_order_confirmation'}
        {$HOOK_ORDER_CONFIRMATION nofilter}
        {/block}

      </div>
    </div>
  </div>
</section>
{/block}

{block name='page_content_container'}
<section id="content" class="page-content page-order-confirmation card">
  <div class="card-block">
    <div class="row">

      {block name='order_confirmation_table'}
      {include
      file='checkout/_partials/order-confirmation-table.tpl'
      products=$order.products
      subtotals=$order.subtotals
      totals=$order.totals
      labels=$order.labels
      add_product_link=false
      }
      {/block}

      {block name='order_details'}
      <div id="order-details" class="col-md-4">
        <h3 class="h3 card-title">{l s='Order details' d='Shop.Theme.Checkout'}:</h3>
        <ul>
          <li id="order-reference-value">{l s='Order reference: %reference%' d='Shop.Theme.Checkout'
            sprintf=['%reference%' => $order.details.reference]}</li>
          <li>{l s='Payment method: %method%' d='Shop.Theme.Checkout' sprintf=['%method%' => $order.details.payment]}
          </li>
          {if !$order.details.is_virtual}
          <li>
            {l s='Shipping method: %method%' d='Shop.Theme.Checkout' sprintf=['%method%' => $order.carrier.name]}<br>
            <em>{$order.carrier.delay}</em>
          </li>
          {/if}
          {if $order.details.recyclable}
          <li>
            <em>{l s='You have given permission to receive your order in recycled packaging.'
              d="Shop.Theme.Customeraccount"}</em>
          </li>
          {/if}
        </ul>
      </div>
      {/block}

    </div>
  </div>
</section>

<!-- {block name='hook_payment_return'}
{if ! empty($HOOK_PAYMENT_RETURN)}
<section id="content-hook_payment_return" class="card definition-list">
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">
        {$HOOK_PAYMENT_RETURN nofilter}
      </div>
    </div>
  </div>
</section>
{/if}
{/block} -->


<!--------------------------PART INVOICE------------------------------------->
<section id="content-hook_order_confirmation" class="card">
  <div class="card-block">
    <div class="row">
      <div class="col-md-12">

        <!---Confirm your Order -->
        {block name='order_confirmation_header'}
        <h3 class="h1 card-title">
          <i class="material-icons rtl-no-flip done">&#xE876;</i>{l s='Invoice' d='Shop.Theme.Checkout'}
        </h3>
        {/block}

        <!-- ใบเสร็จ -->
        <label for="invoice">Select Invoice:</label>
        <select id="invoice" style="width: 150px; height: 40px; border-radius: 10px; text-align: center;"
          onchange="showAdditionalInfo(this)">
          <option value="dontwant">ไม่ต้องการ</option>
          <option value="want" class="nested-option">ต้องการ</option>
        </select>

        <!-- in option want ka -->
        <div id="additionalInfo" style="display: none;">
          {l s="ใบกำกับภาษีจะถูกส่งให้ทางอีเมล หลังจากตรวจสอบหลักฐานการโอน"}
        </div>

        <script>
          function showAdditionalInfo(select) {
            var additionalInfo = document.getElementById('additionalInfo');
            if (select.value === 'want') {
              additionalInfo.style.display = 'block';
            } else {
              additionalInfo.style.display = 'none';
            }
          }
        </script>

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
        {block name='order_confirmation_header'}
        <h3 class="h1 card-title">
          <i class="material-icons rtl-no-flip done">&#xE876;</i>{l s='ชำระเงิน' d='Shop.Theme.Checkout'}
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

{/block}