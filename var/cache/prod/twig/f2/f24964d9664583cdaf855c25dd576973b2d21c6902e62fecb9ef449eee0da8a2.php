<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__e1e3d83c33cbc57590ea59849d756fee355eff3ea87f6eb04083724adc050de7 */
class __TwigTemplate_c94351b8cd279365ba6eb7d78b46b733fe68df6cab1c1d9d6045761b41a7aba0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Strony • centrummateracy</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCmsContent';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '1.7.6.9';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Złożono nowe zamówienie w Twoim sklepie.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'Nowy klient zarejestrował się w Twoim sklepie.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'Nowa wiadomość pojawiła się w Twoim sklepie.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = '188556068c912071ba6c5087ae4749f7';
    var token_admin_orders = '8764f51d880252507a685f832ad2cc8a';
    var token_admin_customers = 'fe6928e48d7db744e573c669ce7389ad';
    var token_admin_customer_threads = '6546f714383816233e99a21f8c95bae6';
    var currentIndex = 'index.php?controller=AdminCmsContent';
    var employee_token = 'd956a8553d6070a0adbdac24f5154710';
    var choose_language_translate = 'Wybierz język';
    var default_language = '1';
    var admin_modules_link = '/psadmin/index.php/improve/modules/catalog/recommended?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec';
    var admin_notification_get_link = '/psadmin/index.php/common/notifications?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec';
    var admin_notification_push_link = '/psadmin/index.php/common/notifications/ack?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec';
    var tab_modules_list = 'wic_pushproductcms,protectedshops,trustedshops,trustedshopsintegration,ebadgeletitbuy,etranslation,bablic';
    var update_success_msg = 'Aktualizacja powiodła się';
    var errorLogin = 'PrestaShop nie mógł zalogować się do Dodatków, sprawdź swoje uprawnienia i połączenie internetowe.';
    var search_product_msg = 'Szukaj produktu';
  </script>

      <link href=\"/modules/emarketing/views/css/menuTabIcon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/psadmin/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ph_simpleblog/css/simpleblog-admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/iqitelementor/views/css/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/psadmin/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/psadmin\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/psadmin\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var elementorAjaxUrl = \"http:\\/\\/centrummateracy.com\\/psadmin\\/index.php?controller=AdminIqitElementor&token=246255245474c4e0d50292c6300f4748&ajax=1\";
var host_mode = false;
var iqitModulesAdditionalTabs = {\"ajaxUrl\":\"http:\\/\\/centrummateracy.com\\/psadmin\\/index.php?controller=AdminModules&token=61c2bc6f3f5fd6fdd336228582eec263&ajax=1&configure=iqitadditionaltabs\"};
var iqitModulesSizeCharts = {\"ajaxUrl\":\"http:\\/\\/centrummateracy.com\\/psadmin\\/index.php?controller=AdminModules&token=61c2bc6f3f5fd6fdd336228582eec263&ajax=1&configure=iqitsizecharts\"};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var onlyElementor = [];
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/modules/iqitelementor/views/js/backoffice.js\"></script>
<script type=\"text/javascript\" src=\"/psadmin/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.6.9\"></script>
<script type=\"text/javascript\" src=\"/psadmin/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.6.9\"></script>
<script type=\"text/javascript\" src=\"/psadmin/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/psadmin/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/psadmin/themes/default/js/bundle/module/module_card.js?v=1.7.6.9\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/psadmin/index.php/common/notifications?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/centrummateracy.com\\/psadmin\\/index.php?controller=AdminGamification&token=8d6e9be3c0ed67f6c4e0e84934cfbab8\";
            var current_id_tab = 57;
        </script><script type=\"text/javascript\">
    var elementorPageType = 'cms';
</script>

<script type=\"text/template\" id=\"tmpl-btn-edit-with-elementor\">
    <div class=\"form-group row\">
        <label class=\"form-control-label\"></label>
        <div class=\"col-sm\">
                            <div class=\"alert alert-info\"> <p class=\"alert-text\"> Save page first to enable page builder</p></div>
            
            
        </div>
    </div>
</script>

<script type=\"text/template\" id=\"tmpl-btn-edit-with-elementor-product\">
    <div>

                             Save product first to enable page builder
                </div>
</script>

<script type=\"text/template\" id=\"tmpl-btn-edit-with-elementor-brand\">
    <div>

                     Save brand first to enable page builder
            </div>
</script>

<script type=\"text/template\" id=\"tmpl-btn-edit-with-elementor-blog\">
    <div>

                     Save post first to enable page builder
        
            </div>
</script>


<script type=\"text/template\" id=\"tmpl-btn-edit-with-elementor-category\">
    <div style=\"margin-bottom: 20px;\">
        <div class=\"form-group row\">
        <label class=\"form-control-label\" ></label>
        <div class=\"col-sm\">
                    <div class=\"alert alert-info\"> <p class=\"alert-text\"> Save category first to enable page builder for description</p></div>
                </div></div>
    </div>
    
</script><script type=\"text/javascript\">
    var pspc_psv = 1.7;
</script>

";
        // line 159
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-pl admincmscontent\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminDashboard&amp;token=413fd3c4d8f4cb90bb3a5713abad148b\"></a>
      <span id=\"shop_version\">1.7.6.9</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://centrummateracy.com/psadmin/index.php/sell/catalog/categories/new?token=4debbc702af4fc09128793b1ea2ac0cf\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item\"
         href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=852eff1d4ede0a8ed1b744e73016276d\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item\"
         href=\"http://centrummateracy.com/psadmin/index.php/sell/catalog/products/new?token=4debbc702af4fc09128793b1ea2ac0cf\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item\"
         href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=b409b0010892185dbb4622ae02f8774e\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item\"
         href=\"http://centrummateracy.com/psadmin/index.php/improve/modules/manage?token=4debbc702af4fc09128793b1ea2ac0cf\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item\"
         href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminOrders&amp;token=8764f51d880252507a685f832ad2cc8a\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"77\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/cms-pages\"
        data-post-link=\"http://centrummateracy.com/psadmin/index.php?controller=AdminQuickAccesses&token=93d259fc83c20552d940e01f9bad9e17\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Strony - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj bieżącą stronę do zakładki
      </a>
        <a class=\"dropdown-item\" href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminQuickAccesses&token=93d259fc83c20552d940e01f9bad9e17\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj szybkim dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/psadmin/index.php?controller=AdminSearch&amp;token=79e610aa714430c565c6a4b8f381de1c\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, SKU, odniesienie...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nazwisko...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
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
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://centrummateracy.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Zobacz sklep
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
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
              Zamówienia<span id=\"_nb_new_orders_\"></span>
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
              Klienci<span id=\"_nb_new_customers_\"></span>
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
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=e6bbc5ed32522c4531d94ec14b900b95\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy jesteś aktywny w mediach społecznościowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              To więcej, czasu na coś innego!
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
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
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
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/mateuszc515%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Witaj ponownie Mateusz</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/psadmin/index.php/configure/advanced/employees/1/edit?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\">
      <i class=\"material-icons\">settings</i>
      Twój profil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/zasoby/dokumentacja\" target=\"_blank\"><i class=\"material-icons\">book</i> Materiały</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Trening</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/eksperci\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Znajdź eksperta</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/pl/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centrum pomocy</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminLogin&amp;logout=1&amp;token=2bcfd3e46467f39e4a147451a078526e\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/psadmin/index.php/configure/advanced/employees/toggle-navigation?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminDashboard&amp;token=413fd3c4d8f4cb90bb3a5713abad148b\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Sprzedaż</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminOrders&amp;token=8764f51d880252507a685f832ad2cc8a\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Zamówienia
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminOrders&amp;token=8764f51d880252507a685f832ad2cc8a\" class=\"link\"> Zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/psadmin/index.php/sell/orders/invoices/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Faktury
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminSlip&amp;token=da2b679048202412cc894f5635142f00\" class=\"link\"> Druki kredytowe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/psadmin/index.php/sell/orders/delivery-slips/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Druk wysyłki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminCarts&amp;token=e6bbc5ed32522c4531d94ec14b900b95\" class=\"link\"> Koszyki zakupowe
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/psadmin/index.php/sell/catalog/products?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Katalog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/psadmin/index.php/sell/catalog/products?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Produkty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/psadmin/index.php/sell/catalog/categories?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Kategorie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminTracking&amp;token=8af94858aa2385c5e05a1b57fd9c42db\" class=\"link\"> Monitorowanie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminAttributesGroups&amp;token=454c8c06b3ec0aea08073d6828f89762\" class=\"link\"> Atrybuty &amp; Cechy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/psadmin/index.php/sell/catalog/brands/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Marki &amp; Dostawcy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminAttachments&amp;token=3fcaca10a3c687e3f809df54c038fcc8\" class=\"link\"> Pliki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminCartRules&amp;token=852eff1d4ede0a8ed1b744e73016276d\" class=\"link\"> Rabaty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/psadmin/index.php/sell/stocks/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/psadmin/index.php/sell/customers/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Klienci
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/psadmin/index.php/sell/customers/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Klienci
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminAddresses&amp;token=e34997ae3ceb9476eb746ad5a1e79bce\" class=\"link\"> Adresy
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminCustomerThreads&amp;token=6546f714383816233e99a21f8c95bae6\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Obsługa klienta
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminCustomerThreads&amp;token=6546f714383816233e99a21f8c95bae6\" class=\"link\"> Obsługa klienta
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminOrderMessage&amp;token=fda7c0abaea39bf33c3bf837952f447e\" class=\"link\"> Wiadomości zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminReturn&amp;token=19915e2fbcc23fe03fa1fcb9221e0e8d\" class=\"link\"> Zwroty produktów
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminStats&amp;token=b409b0010892185dbb4622ae02f8774e\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statystyki
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"162\" id=\"subtab-AdminkbsupercheckoutConfigure\">
                  <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminSuperSetting&amp;token=9add05c56e0f01bdbdcc801a1d3c417d\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    Knowband Supercheckout
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-162\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"163\" id=\"subtab-AdminSuperSetting\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminSuperSetting&amp;token=9add05c56e0f01bdbdcc801a1d3c417d\" class=\"link\"> Ustawienia główne
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"164\" id=\"subtab-AdminAbandonedCheckout\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminAbandonedCheckout&amp;token=d48a7704e2a20f1df10e7d2e96329e0c\" class=\"link\"> Opuszczony Zamówienie Statystyki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"165\" id=\"subtab-AdminCheckoutBehavior\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminCheckoutBehavior&amp;token=1bd15133ae32856c46c9c328a0f092c9\" class=\"link\"> Zamówienie zachowanie Report
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Ulepszenia</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/psadmin/index.php/improve/modules/manage?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Moduły
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/psadmin/index.php/improve/modules/manage?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/psadmin/index.php/modules/addons/modules/catalog?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Katalog
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/psadmin/index.php/improve/design/themes/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Wygląd
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/psadmin/index.php/improve/design/themes/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Szablony
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/psadmin/index.php/modules/addons/themes/catalog?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Katalog
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/psadmin/index.php/improve/design/mail_theme/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Szablon maila
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/psadmin/index.php/improve/design/cms-pages/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Strony
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/psadmin/index.php/improve/design/modules/positions/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Pozycje
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminImages&amp;token=7b299916108c194f7110d802fdcb91f7\" class=\"link\"> Zdjęcia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/psadmin/index.php/modules/link-widget/list?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"148\" id=\"subtab-AdminParentIqitElementor\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminIqitElementor&amp;token=246255245474c4e0d50292c6300f4748\" class=\"link\"> IqitElementor - Page builder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"153\" id=\"subtab-IqitFrontThemeEditor\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=IqitFrontThemeEditor&amp;token=76045b1fc8015348da83dc6cd2296520\" class=\"link\"> IqitThemeEditor - Live
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"154\" id=\"subtab-AdminIqitThemeEditor\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminIqitThemeEditor&amp;token=7e8a4920fe52ab585a97476e1e37e8a5\" class=\"link\"> IqitThemeEditor - Backoffice
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminCarriers&amp;token=b75d24e795a7f5f8b19ab7f6f1462ea1\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Wysyłka
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminCarriers&amp;token=b75d24e795a7f5f8b19ab7f6f1462ea1\" class=\"link\"> Przewoźnicy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/psadmin/index.php/improve/shipping/preferences?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Preferencje
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/psadmin/index.php/improve/payment/payment_methods?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Płatność
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/psadmin/index.php/improve/payment/payment_methods?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Płatności
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/psadmin/index.php/improve/payment/preferences?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Preferencje
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/psadmin/index.php/improve/international/localization/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Międzynarodowy
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/psadmin/index.php/improve/international/localization/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Lokalizacja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminZones&amp;token=f5e90808a4e7e77a7b6dcb9e59e86cde\" class=\"link\"> Położenie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/psadmin/index.php/improve/international/taxes/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Podatki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/psadmin/index.php/improve/international/translations/settings?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Tłumaczenia
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                  <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminEmarketing&amp;token=d4ebc55e5c009439f9fc6badf7452436\" class=\"link\">
                    <i class=\"material-icons mi-track_changes\">track_changes</i>
                    <span>
                    Advertising
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"155\" id=\"subtab-AdminBlogForPrestaShop\">
                  <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminSimpleBlogPosts&amp;token=17fb4c979b76c91d401b7588e343ee24\" class=\"link\">
                    <i class=\"material-icons mi-note\">note</i>
                    <span>
                    Blog dla PrestaShop
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-155\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"156\" id=\"subtab-AdminSimpleBlogPosts\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminSimpleBlogPosts&amp;token=17fb4c979b76c91d401b7588e343ee24\" class=\"link\"> Wpisy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"157\" id=\"subtab-AdminSimpleBlogCategories\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminSimpleBlogCategories&amp;token=a55ac8df527208b71b00abd15dde22b3\" class=\"link\"> Kategorie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"158\" id=\"subtab-AdminSimpleBlogComments\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminSimpleBlogComments&amp;token=30e70ed75ad4802f346d7a6eba1b62ae\" class=\"link\"> Komentarze
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"159\" id=\"subtab-AdminSimpleBlogTags\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminSimpleBlogTags&amp;token=3b9d5e1d7243e70ae5e3f5e929af62a7\" class=\"link\"> Tagi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"160\" id=\"subtab-AdminSimpleBlogAuthors\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminSimpleBlogAuthors&amp;token=bbc7b9e3ea9d2a61b466fea3f4573361\" class=\"link\"> Autorzy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"161\" id=\"subtab-AdminSimpleBlogSettings\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminSimpleBlogSettings&amp;token=1086d5763d04c218981ba3b1ac6c098b\" class=\"link\"> Ustawienia
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Konfiguruj</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/psadmin/index.php/configure/shop/preferences/preferences?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Preferencje
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/psadmin/index.php/configure/shop/preferences/preferences?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Ogólny
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/psadmin/index.php/configure/shop/order-preferences/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/psadmin/index.php/configure/shop/product-preferences/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Produkty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/psadmin/index.php/configure/shop/customer-preferences/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Klienci
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/psadmin/index.php/configure/shop/contacts/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Kontakt
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/psadmin/index.php/configure/shop/seo-urls/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Ruch
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminSearchConf&amp;token=ec68d88195aaafb13fb3a4600cd8b310\" class=\"link\"> Szukaj
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminGamification&amp;token=8d6e9be3c0ed67f6c4e0e84934cfbab8\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/psadmin/index.php/configure/advanced/system-information/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Zaawansowane
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/psadmin/index.php/configure/advanced/system-information/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Informacja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/psadmin/index.php/configure/advanced/performance/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Wydajność
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/psadmin/index.php/configure/advanced/administration/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Administracja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/psadmin/index.php/configure/advanced/emails/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Adres e-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/psadmin/index.php/configure/advanced/import/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Importuj
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/psadmin/index.php/configure/advanced/employees/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Zespół
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/psadmin/index.php/configure/advanced/sql-requests/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Baza danych
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/psadmin/index.php/configure/advanced/logs/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> Logi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/psadmin/index.php/configure/advanced/webservice-keys/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" class=\"link\"> API
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"139\" id=\"tab-AdminRevslider\">
              <span class=\"title\">Revolution Slider</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"140\" id=\"subtab-AdminRevsliderSliders\">
                  <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminRevsliderSliders&amp;token=2844710fa3b3c39f10008b83516103ba\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Sliders
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"141\" id=\"subtab-AdminRevolutionsliderGlobalSettings\">
                  <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminRevolutionsliderGlobalSettings&amp;token=5c324d96d1aee90af4b65444849f1688\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Global Settings
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"142\" id=\"subtab-AdminRevolutionsliderAddons\">
                  <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminRevolutionsliderAddons&amp;token=4efc99e446aa3725e76b7f32dccbf0a7\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Addons
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"143\" id=\"subtab-AdminRevolutionsliderNavigation\">
                  <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminRevolutionsliderNavigation&amp;token=5264b697fc76db92cf4cd62957388b02\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Navigation
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Wygląd</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/psadmin/index.php/improve/design/cms-pages/?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\" aria-current=\"page\">Strony</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Strony          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_cms_category\"
                  href=\"/psadmin/index.php/improve/design/cms-pages/category/new?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\"                  title=\"Dodaj nową kategorię strony\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Dodaj nową kategorię strony
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_cms_page\"
                  href=\"/psadmin/index.php/improve/design/cms-pages/new?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\"                  title=\"Dodaj nową stronę\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Dodaj nową stronę
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/psadmin/index.php/improve/modules/catalog?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\"                title=\"Rekomendowane moduły\"
                              >
                Rekomendowane moduły
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/psadmin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminCmsContent%253Fversion%253D1.7.6.9%2526country%253Dpl/Pomoc?_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Zalecane moduły i usługi',
        'Close': 'Zamknij',
      },
      recommendedModulesUrl: '/psadmin/index.php/modules/addons/modules/recommended?tabClassName=AdminCmsContent&_token=PUTGTHHKwAlf1DCfryVJjNPmc78duswg6YVXt1igeec',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1381
        $this->displayBlock('content_header', $context, $blocks);
        // line 1382
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1383
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1384
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1385
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"http://centrummateracy.com/psadmin/index.php?controller=AdminDashboard&amp;token=413fd3c4d8f4cb90bb3a5713abad148b\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pl/login?email=mateuszc515%40gmail.com&amp;firstname=Mateusz&amp;lastname=Cibor&amp;website=http%3A%2F%2Fcentrummateracy.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/psadmin/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Połącz swój sklep z rynkiem PrestaShop, żeby automatycznie importować wszystkie zakupione dodatki.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nie masz konta ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Odkryj siłę PrestaShop Addons! Przeglądaj Oficjalny Rynek PrestaShop i znajdź ponad 3500 innowacyjnych modułów i szablonów, które optymalizują stopnie konwersji, zwiększają ruch, budują lojalność klientów i zwiększają Twoją produktywność</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Połącz się z PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomniałem hasła</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pl/login?email=mateuszc515%40gmail.com&amp;firstname=Mateusz&amp;lastname=Cibor&amp;website=http%3A%2F%2Fcentrummateracy.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tUtwórz konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Zaloguj się
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1492
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 159
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1381
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1382
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1383
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1384
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1492
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__e1e3d83c33cbc57590ea59849d756fee355eff3ea87f6eb04083724adc050de7";
    }

    public function getDebugInfo()
    {
        return array (  1582 => 1492,  1577 => 1384,  1572 => 1383,  1567 => 1382,  1562 => 1381,  1553 => 159,  1545 => 1492,  1436 => 1385,  1433 => 1384,  1430 => 1383,  1427 => 1382,  1425 => 1381,  199 => 159,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e1e3d83c33cbc57590ea59849d756fee355eff3ea87f6eb04083724adc050de7", "");
    }
}
