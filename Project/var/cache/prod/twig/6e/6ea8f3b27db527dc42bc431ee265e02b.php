<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__016cce9635213fe2e8b5dde413676406 */
class __TwigTemplate_45fac664f7a951fbb78e0cc9d7c8bfc1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/se_project/Project/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/se_project/Project/img/app_icon.png\" />

<title>Products • CP Shop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'TH';
    var _PS_VERSION_ = '8.1.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '85c94dee0f9f59ad3079289065246679';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '267610708f30767acd06578053f964f5';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/se_project/Project/admin-g2-dev/index.php/improve/modules/manage?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE';
    var admin_notification_get_link = '/se_project/Project/admin-g2-dev/index.php/common/notifications?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE';
    var admin_notification_push_link = adminNotificationPushLink = '/se_project/Project/admin-g2-dev/index.php/common/notifications/ack?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE';
    var tab_modules_list = '';
    var";
        // line 42
        echo " update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/se_project/Project/admin-g2-dev/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/se_project/Project/admin-g2-dev/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/se_project/Project/admin-g2-dev/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/se_project/Project/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/se_project/Project/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/se_project/Project/admin-g2-dev/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/se_project\\/Project\\/admin-g2-dev\\/\";
var baseDir = \"\\/se_project\\/Project\\/\";
var changeFormLanguageUrl = \"\\/se_project\\/Project\\/admin-g2-dev\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\";
var currency = {\"iso_code\":\"THB\",\"sign\":\"\\u0e3f\",\"name\":\"Thai Baht\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"THB\",\"currencySymbol\":\"\\u0e3f\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionD";
        // line 66
        echo "igits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/se_project/Project/admin-g2-dev/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/js/admin.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/admin-g2-dev/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/js/tools.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/admin-g2-dev/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/admin-g2-dev/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/se_project/Project/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/se_project/Project/admin-g2-dev/index.php/common/notifications?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
";
        // line 98
        echo "

";
        // line 100
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminproducts\"
  data-base-url=\"/se_project/Project/admin-g2-dev/index.php\"  data-token=\"yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminDashboard&amp;token=90c2d8b8f5245a597ef17f67fa7c578f\"></a>
      <span id=\"shop_version\">8.1.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=67ce680f418dee11bf19528ff74c7a44\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/se_project/Project/admin-g2-dev/index.php/improve/modules/manage?token=3a683c915dcaccb5fe526cfbfa8ffa13\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/se_project/Project/admin-g2-dev/index.php/sell/catalog/categories/new?token=3a683c915dcaccb5fe526cfbfa8ffa13\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/se_project/Project/admin-g2-dev/index.php/sell/catalog/products-v2/create?token=3a683c915dcaccb5fe526cfbfa8ffa13\"
           ";
        // line 135
        echo "      data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=cc4502b8ca4d827a593677da6ec7e4a5\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/se_project/Project/admin-g2-dev/index.php/sell/orders?token=3a683c915dcaccb5fe526cfbfa8ffa13\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"139\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products-v2/9/edit\"
        data-post-link=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminQuickAccesses&token=f9f86151efc607c2980d90ed3edb7fb1\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Products - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminQuickAccesses&token=f9f86151efc607c2980d90ed3edb7fb1\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/se_project/Project/admin-g2-dev/index.php?controller=AdminSearch&amp;token=80da524b87df06dd48e88b95320fae1d\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_sea";
        // line 175
        echo "rch_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" da";
        // line 191
        echo "ta-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=67ce680f418dee11bf19528ff74c7a44\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/se_project/Project/admin-g2-dev/index.php/improve/modules/manage?token=3a683c915dcaccb5fe526cfbfa8ffa13\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/se_project/Project/admin-g2-dev/index.php/sell/catalog/categories/new?token=3a683c915dcaccb5fe526cfbfa8ffa13\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/se_project/Project/admin-g2-dev/index.php/sell/catalog/products-v2/create?token=3a683c915dcaccb5fe526cfbfa8ffa13\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=cc4502b8ca4d827a593677da6ec7e4a5\"
             data-item=\"New voucher\"
    >New voucher";
        // line 229
        echo "</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/se_project/Project/admin-g2-dev/index.php/sell/orders?token=3a683c915dcaccb5fe526cfbfa8ffa13\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"83\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/products-v2/9/edit\"
      data-post-link=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminQuickAccesses&token=f9f86151efc607c2980d90ed3edb7fb1\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Products - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminQuickAccesses&token=f9f86151efc607c2980d90ed3edb7fb1\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/se_project/Project/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=";
        // line 276
        echo "\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=6e193e3d81ba4fb87316a2cd74006036\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notificat";
        // line 326
        echo "ions\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/se_pr";
        // line 377
        echo "oject/Project/img/pr/default.jpg\" alt=\"Prestashop\" /></span>
        <span class=\"employee_profile\">Welcome back Prestashop</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/se_project/Project/admin-g2-dev/index.php/configure/advanced/employees/1/edit?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminLogin&amp;logout=1&amp;token=31d15b58b1c42037dad32a8459f450d3\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/se_project/Project/admin-g2-dev/index.php/configure/advanced/employees/toggle-navigation?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminDashboard&amp;token=90c2d8b8f5245a597ef17f67fa7c578f\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.2</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminDashboard&amp;token=90c2d8b8f5245a597ef17f67fa7c578f\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</s";
        // line 420
        echo "pan>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/se_project/Project/admin-g2-dev/index.php/sell/orders/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/sell/orders/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-Ad";
        // line 459
        echo "minInvoices\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/sell/orders/invoices/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/sell/orders/credit-slips/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/sell/orders/delivery-slips/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminCarts&amp;token=6e193e3d81ba4fb87316a2cd74006036\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                          ";
        // line 489
        echo "              </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/se_project/Project/admin-g2-dev/index.php/sell/catalog/products?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/sell/catalog/products?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/sell/catalog/categories?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> C";
        // line 517
        echo "ategories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/sell/catalog/monitoring/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminAttributesGroups&amp;token=0aa3a58bb87c156880540731018217a7\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/sell/catalog/brands/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=";
        // line 548
        echo "\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/sell/attachments/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminCartRules&amp;token=cc4502b8ca4d827a593677da6ec7e4a5\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/sell/stocks/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/se_project/Project/admin-g2-dev/index.php/sell/customers/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <s";
        // line 578
        echo "pan>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/sell/customers/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/sell/addresses/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/se_project/Project/admin-g2-";
        // line 609
        echo "dev/index.php?controller=AdminCustomerThreads&amp;token=b70fa239d3e0cdaf1ef43b21e6b35b2f\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminCustomerThreads&amp;token=b70fa239d3e0cdaf1ef43b21e6b35b2f\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/sell/customer-service/order-messages/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"";
        // line 638
        echo "31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminReturn&amp;token=c8a718d19fa8da34ed5eedf2f997d3c4\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminStats&amp;token=67ce680f418dee11bf19528ff74c7a44\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/se_project/Project/admin-g2-dev/index.php/improve/modules/manage?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" cl";
        // line 675
        echo "ass=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/improve/modules/manage?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/se_project/Project/admin-g2-dev/index.php/improve/design/themes/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                 ";
        // line 707
        echo "                           </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/improve/design/themes/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/improve/design/mail_theme/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/improve/design/cms-pages/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-le";
        // line 737
        echo "veltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/improve/design/modules/positions/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminImages&amp;token=f6644b43389f83ad962b0903908e6970\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/modules/link-widget/list?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminCarriers&amp;token=720320b24251a2ccdb7c5f49b949d5b5\" class=\"link\">
                      <i class=\"material-";
        // line 766
        echo "icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminCarriers&amp;token=720320b24251a2ccdb7c5f49b949d5b5\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/improve/shipping/preferences/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/se_projec";
        // line 798
        echo "t/Project/admin-g2-dev/index.php/improve/payment/payment_methods?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/improve/payment/payment_methods?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/improve/payment/preferences?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                 ";
        // line 828
        echo "     
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/se_project/Project/admin-g2-dev/index.php/improve/international/localization/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/improve/international/localization/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/improve/international/zones/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Locations
                                </a>
                              </li>

                                                       ";
        // line 857
        echo "                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/improve/international/taxes/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/improve/international/translations/settings?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/shop/preferences/preferences?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Param";
        // line 893
        echo "eters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/shop/preferences/preferences?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/shop/order-preferences/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/shop/product-preferences/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Product Sett";
        // line 920
        echo "ings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/shop/customer-preferences/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/shop/contacts/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/shop/seo-urls/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminPa";
        // line 951
        echo "rentSearchConf\">
                                <a href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminSearchConf&amp;token=1e0fc0bb7dfe8382c95f4c806f33cccb\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/advanced/system-information/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/advanced/system-information/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Information
                                </a>
                              </li>

                                      ";
        // line 981
        echo "                                            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/advanced/performance/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/advanced/administration/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/advanced/emails/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/advanced/import/?_token=yQ4KVvrVR";
        // line 1009
        echo "2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/advanced/employees/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/advanced/sql-requests/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/advanced/logs/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\"";
        // line 1040
        echo " id=\"subtab-AdminWebservice\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/advanced/webservice-keys/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/advanced/feature-flags/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/se_project/Project/admin-g2-dev/index.php/configure/advanced/security/?_token=yQ4KVvrVR2DAHVzZRPunaXwj3Q3tGllJIIjkBuEqeSE\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div id=\"main-div\">
          
      <div class=\"content-div -notoolbar \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success";
        // line 1078
        echo "\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1082
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/se_project/Project/admin-g2-dev/index.php?controller=AdminDashboard&amp;token=90c2d8b8f5245a597ef17f67fa7c578f\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1116
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 100
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1082
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1116
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__016cce9635213fe2e8b5dde413676406";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1279 => 1116,  1258 => 1082,  1247 => 100,  1238 => 1116,  1198 => 1082,  1192 => 1078,  1152 => 1040,  1119 => 1009,  1089 => 981,  1057 => 951,  1024 => 920,  995 => 893,  957 => 857,  926 => 828,  894 => 798,  860 => 766,  829 => 737,  797 => 707,  763 => 675,  724 => 638,  693 => 609,  660 => 578,  628 => 548,  595 => 517,  565 => 489,  533 => 459,  492 => 420,  447 => 377,  394 => 326,  342 => 276,  293 => 229,  253 => 191,  235 => 175,  193 => 135,  153 => 100,  149 => 98,  115 => 66,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__016cce9635213fe2e8b5dde413676406", "");
    }
}
