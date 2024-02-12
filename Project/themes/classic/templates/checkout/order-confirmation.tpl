{extends file='page.tpl'}

{block name='page_content_container' prepend}
    <section id="content-hook_order_confirmation" class="card">
      <div class="card-block">
        <div class="row">
          <div class="col-md-12">

            {block name='order_confirmation_header'}
              <h3 class="h1 card-title">
                <i class="material-icons rtl-no-flip done">&#xE876;</i>{l s='Your order is confirmed' d='Shop.Theme.Checkout'}
              </h3>
            {/block}

            <p>
              {l s='An email has been sent to your mail address %email%.' d='Shop.Theme.Checkout' sprintf=['%email%' => $order_customer.email]}
              {if $order.details.invoice_url}
                {* [1][/1] is for a HTML tag. *}
                {l
                  s='You can also [1]download your invoice[/1]'
                  d='Shop.Theme.Checkout'
                  sprintf=[
                    '[1]' => "<a href='{$order.details.invoice_url}'>",
                    '[/1]' => "</a>"
                  ]
                }
              {/if}
            </p>

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
              <li id="order-reference-value">{l s='Order reference: %reference%' d='Shop.Theme.Checkout' sprintf=['%reference%' => $order.details.reference]}</li>
              <li>{l s='Payment method: %method%' d='Shop.Theme.Checkout' sprintf=['%method%' => $order.details.payment]}</li>
              {if !$order.details.is_virtual}
                <li>
                  {l s='Shipping method: %method%' d='Shop.Theme.Checkout' sprintf=['%method%' => $order.carrier.name]}<br>
                  <em>{$order.carrier.delay}</em>
                </li>
              {/if}
              {if $order.details.recyclable}
                <li>  
                  <em>{l s='You have given permission to receive your order in recycled packaging.' d="Shop.Theme.Customeraccount"}</em>
                </li>
              {/if}
            </ul>
          </div>
        {/block}

      </div>
    </div>
  </section>
  

<select id="payment_option" name="payment_option" onchange="showDescription()">
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

<script>
    // Initially show the description for the selected option
    window.onload = showDescription;

    function showDescription() {
        var option = document.getElementById("payment_option").value;
        document.getElementById("description").querySelectorAll("div, p").forEach(function (desc) {
            desc.style.display = "none";
        });
        document.getElementById(option + "_desc").style.display = "block";
    }
</script>
<h2>Upload Picture</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="picture">Select Picture:</label><br>
        <input type="file" id="picture" name="picture"><br><br>
        <input type="submit" value="Upload">
    </form>
    
  {block name='hook_order_confirmation_1'}
    {hook h='displayOrderConfirmation1'}
  {/block}

  
{/block}
