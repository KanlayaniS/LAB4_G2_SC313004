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
            <p>ขอบคุณที่สนับสนุน!</p>
          </div>
        </div>

        <script>
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
        </script>
      </div>
    </div>
  </div>
</section>
{/block}
