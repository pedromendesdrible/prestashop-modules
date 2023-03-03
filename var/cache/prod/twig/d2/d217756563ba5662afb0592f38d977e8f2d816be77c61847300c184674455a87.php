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

/* __string_template__c600edfe2562a459c1a040457a661a5cb86c4cb5c524fbbe864e9d420b047cd7 */
class __TwigTemplate_10972b4003238927afa14165cce9f696c192556e5354d2e6862908f1266231f1 extends \Twig\Template
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
<html lang=\"pt\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Ficheiros • Drible</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminAttachments';
    var iso_user = 'pt';
    var lang_is_rtl = '0';
    var full_language_code = 'pt-pt';
    var full_cldr_language_code = 'pt-PT';
    var country_iso_code = 'PT';
    var _PS_VERSION_ = '1.7.8.8';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Foi feita uma nova encomenda na sua loja.';
    var order_number_msg = 'Número da encomenda: ';
    var total_msg = 'Total: ';
    var from_msg = 'De: ';
    var see_order_msg = 'Ver esta encomenda';
    var new_customer_msg = 'Um novo cliente registou-se na sua loja.';
    var customer_name_msg = 'Nome do cliente: ';
    var new_msg = 'Foi deixada uma nova mensagem na sua loja.';
    var see_msg = 'Ler esta mensagem';
    var token = 'd0ab727f5875adc9f49cdea4c9fbf304';
    var token_admin_orders = tokenAdminOrders = 'c973447005410a8431419f56d397a8e8';
    var token_admin_customers = '971c08a329059b7ab8ead98577d22dd0';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'b5c7406c37404b18ae57583af4ac4337';
    var currentIndex = 'index.php?controller=AdminAttachments';
    var employee_token = 'bf46c295f6bca45f379a4774ae6eae14';
    var choose_language_translate = 'Escolher idioma:';
    var default_language = '1';
    var admin_modules_link = '/admin0154awpo7/index.php/improve/modules/catalog/recommended?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps';
    var admin_notification_get_link = '/admin0154awpo7/index.php/common/notifications?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps';
    var ad";
        // line 43
        echo "min_notification_push_link = adminNotificationPushLink = '/admin0154awpo7/index.php/common/notifications/ack?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps';
    var tab_modules_list = '';
    var update_success_msg = 'Atualizado com sucesso';
    var errorLogin = 'O PrestaShop não conseguiu autenticar-se nos Addons. Por favor verifique as suas credenciais e se está ligado à internet.';
    var search_product_msg = 'Pesquisar um produto';
  </script>

      <link href=\"/admin0154awpo7/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin0154awpo7/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin0154awpo7\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin0154awpo7\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\"";
        // line 66
        echo ",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin0154awpo7/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/admin0154awpo7/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin0154awpo7/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.1.0\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/modules/we";
        // line 87
        echo "lcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin0154awpo7/index.php/common/notifications?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/prestashop.tld\\/admin0154awpo7\\/index.php?controller=AdminGamification&token=1844117c8cfb0f2b873bc09326a39772\";
            var current_id_tab = 19;
        </script>

";
        // line 107
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pt adminattachments\"
  data-base-url=\"/admin0154awpo7/index.php\"  data-token=\"VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminDashboard&amp;token=c20f004a93b870d5b3133a4d16b90582\"></a>
      <span id=\"shop_version\">1.7.8.8</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acesso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7e97c1a6f5c00d92b3a4f315dda0b498\"
                 data-item=\"Avaliação do catálogo\"
      >Avaliação do catálogo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminOrders&amp;token=c973447005410a8431419f56d397a8e8\"
                 data-item=\"Encomendas\"
      >Encomendas</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://prestashop.tld/admin0154awpo7/index.php/improve/modules/manage?token=484ac9f789fd428910419dfbd47d55e8\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://prestashop.tld/admin0154awpo7/index.php/sell/catalog/categories/new?token=484ac9f789fd428910419dfbd47d55e8\"
                 data-item=\"Nova Categoria\"
      >Nova Categoria</a>
          <a class=\"dropdo";
        // line 144
        echo "wn-item quick-row-link\"
         href=\"http://prestashop.tld/admin0154awpo7/index.php/sell/catalog/products/new?token=484ac9f789fd428910419dfbd47d55e8\"
                 data-item=\"Novo produto\"
      >Novo produto</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=f5700bdfd6204f597a9697fe4d26750d\"
                 data-item=\"Novo Voucher\"
      >Novo Voucher</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"47\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/attachments\"
        data-post-link=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminQuickAccesses&token=1407c80c3e7bbf77a0ec387498ca1c32\"
        data-prompt-text=\"Atribua um nome a este atalho:\"
        data-link=\"Ficheiros - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminQuickAccesses&token=1407c80c3e7bbf77a0ec387498ca1c32\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin0154awpo7/index.php?controller=AdminSearch&amp;token=7d6b9fe33ca56dfe67896b6bacd73e8a\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Pesquisar (por ex.: referência do produto, nome do cliente�";
        // line 182
        echo "�)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Em todo o lado
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Em todo o lado\" href=\"#\" data-value=\"0\" data-placeholder=\"O que procura?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Em todo o lado</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nome\" href=\"#\" data-value=\"2\" data-placeholder=\"Nome\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nome</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por endereço IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por endereço IP</a>
        <a class=\"dropdown-item\" data-item=\"Encomendas\" href=\"#\" data-value=\"3\" data-placeholder=\"Nº da Encomenda\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Encomendas</a>
        <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da fatura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faturas</a>
        <a class=\"dropdown-item\" data-item=\"Carrinhos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrinhos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome do Módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <but";
        // line 198
        echo "ton class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">PESQUISAR</span><i class=\"material-icons\">search</i></button>
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
    <a class=\"link\" id=\"header_shopname\" href=\"http://prestashop.tld/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver a loja</span>
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
              Encomendas<span id=\"_nb_new_orders_\"></span>
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
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                          ";
        // line 255
        echo "          <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensagens<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhuma nova encomenda por enquanto :(<br>
              Verificou os seus <strong><a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=da246be622563dec6624b8f23e52780f\">carrinhos abandonados</a></strong>?<br>A sua próxima encomenda poderá estar escondida aí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo cliente por enquanto :(<br>
              Tem estado ativo nas redes sociais estes últimos dias?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Sem nova mensagem por enquanto.<br>
              Ao que parece, todos os seus clientes estão satisfeitos :)
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <st";
        // line 301
        echo "rong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registado <strong>_date_add_</strong>
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

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://prestashop.tld/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Beatriz</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin0154awpo7/index.php/configure/advanced/employees/1/edit?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\">
      <i class=\"material-icons\">edit</i>
      <span>O seu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i cl";
        // line 339
        echo "ass=\"material-icons\">school</i> Formação</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminLogin&amp;logout=1&amp;token=c5a025b5365d2bfc286a069d517f78de\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Fechar sessão</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin0154awpo7/index.php/configure/advanced/employees/toggle-navigation?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminDashboard&amp;token=c20f004a93b870d5b3133a4d16b90582\" class=\"link\" >
                <i class=\"material-icons\">trending";
        // line 368
        echo "_up</i> <span>Painel de controlo</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin0154awpo7/index.php/sell/orders/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Encomendas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin0154awpo7/index.php/sell/orders/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id";
        // line 407
        echo "=\"subtab-AdminInvoices\">
                                <a href=\"/admin0154awpo7/index.php/sell/orders/invoices/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Faturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin0154awpo7/index.php/sell/orders/credit-slips/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Notas de Crédito
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin0154awpo7/index.php/sell/orders/delivery-slips/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Notas de Entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminCarts&amp;token=da246be622563dec6624b8f23e52780f\" class=\"link\"> Carrinhos de Compras
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                    ";
        // line 438
        echo "                          
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin0154awpo7/index.php/sell/catalog/products?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin0154awpo7/index.php/sell/catalog/products?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin0154awpo7/index.php/sell/catalog/categories?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Categorias
                                </a>
                              </li>

                 ";
        // line 469
        echo "                                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin0154awpo7/index.php/sell/catalog/monitoring/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Monitorização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminAttributesGroups&amp;token=2c1a2e7e636b37157f4b22bf8f5668b9\" class=\"link\"> Atributos e Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin0154awpo7/index.php/sell/catalog/brands/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Marcas e Fornecedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin0154awpo7/index.php/sell/attachments/?_token=V";
        // line 497
        echo "Y918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Ficheiros
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminCartRules&amp;token=f5700bdfd6204f597a9697fe4d26750d\" class=\"link\"> Descontos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin0154awpo7/index.php/sell/stocks/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Inventário
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin0154awpo7/index.php/sell/customers/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                     ";
        // line 530
        echo "                                               keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin0154awpo7/index.php/sell/customers/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin0154awpo7/index.php/sell/addresses/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Endereços
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminCustomerThreads&amp;token=b5c7406c37404b18ae57583af4ac4337\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Apoio ao";
        // line 560
        echo " Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminCustomerThreads&amp;token=b5c7406c37404b18ae57583af4ac4337\" class=\"link\"> Apoio ao Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin0154awpo7/index.php/sell/customer-service/order-messages/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Mensagens de Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminReturn&amp;token=aba6bbcb2ea9cb1ffcd13eeddfde01ed\" class=\"link\"> Mercadorias Devolvidas
                           ";
        // line 588
        echo "     </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admin0154awpo7/index.php/modules/metrics/legacy/stats?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estatísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin0154awpo7/index.php/modules/metrics/legacy/stats?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Estatísticas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin0154awpo7/index.";
        // line 620
        echo "php/modules/metrics?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Melhorar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin0154awpo7/index.php/modules/addons/modules/catalog?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/admin0154awpo7/index.php/modules/addons/modules/catalog?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Marketplace
                         ";
        // line 656
        echo "       </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin0154awpo7/index.php/improve/modules/manage?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin0154awpo7/index.php/improve/design/themes/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminTh";
        // line 687
        echo "emesParent\">
                                <a href=\"/admin0154awpo7/index.php/improve/design/themes/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Tema Gráfico e Logótipo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin0154awpo7/index.php/modules/addons/themes/catalog?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Catálogo do Tema Gráfico
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin0154awpo7/index.php/improve/design/mail_theme/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin0154awpo7/index.php/improve/design/cms-pages/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
  ";
        // line 717
        echo "                            
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin0154awpo7/index.php/improve/design/modules/positions/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Posições
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminImages&amp;token=fcb8c8ddcdc6b2467434b7b06a89c609\" class=\"link\"> Definições de Imagem
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin0154awpo7/index.php/modules/link-widget/list?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Lista de ligações
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminCarriers&";
        // line 747
        echo "amp;token=3ca540c88ebf779372d63c23cc5e76d4\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Envio
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminCarriers&amp;token=3ca540c88ebf779372d63c23cc5e76d4\" class=\"link\"> Transportadoras
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin0154awpo7/index.php/improve/shipping/preferences/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=";
        // line 779
        echo "\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin0154awpo7/index.php/improve/payment/payment_methods?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pagamento
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin0154awpo7/index.php/improve/payment/payment_methods?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Métodos de Pagamento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin0154awpo7/index.php/improve/payment/preferences?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
              ";
        // line 810
        echo "                                        
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin0154awpo7/index.php/improve/international/localization/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin0154awpo7/index.php/improve/international/localization/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Localização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin0154awpo7/index.php/improve/international/zones/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Localizações
                                </a>
                              </li>

                                                                 ";
        // line 839
        echo "                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin0154awpo7/index.php/improve/international/taxes/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> IVA
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin0154awpo7/index.php/improve/international/translations/settings?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Traduções
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminPsfacebookModule&amp;token=d69d630f971650f9caeb2d869cd8c1ec\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
        ";
        // line 871
        echo "                                      <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminPsfacebookModule&amp;token=d69d630f971650f9caeb2d869cd8c1ec\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=03d59a087f51d6de588248ca45e035e6\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin0154awpo7/index.php/configure/shop/preferences/preferences?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\">
                      <i";
        // line 906
        echo " class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parâmetros da Loja
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin0154awpo7/index.php/configure/shop/preferences/preferences?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Geral
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin0154awpo7/index.php/configure/shop/order-preferences/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Definições da Encomenda
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin0154awpo7/index.php/configure/shop/product-preferences/?_token";
        // line 935
        echo "=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin0154awpo7/index.php/configure/shop/customer-preferences/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Definições do cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin0154awpo7/index.php/configure/shop/contacts/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin0154awpo7/index.php/configure/shop/seo-urls/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Tráfego e SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" ";
        // line 966
        echo "id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminSearchConf&amp;token=76609cd8727f804f6e555781d32478ff\" class=\"link\"> Pesquisar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminGamification&amp;token=1844117c8cfb0f2b873bc09326a39772\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin0154awpo7/index.php/configure/advanced/system-information/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parâmetros Avançados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                  ";
        // line 996
        echo "                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin0154awpo7/index.php/configure/advanced/system-information/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Informação
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin0154awpo7/index.php/configure/advanced/performance/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Desempenho
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin0154awpo7/index.php/configure/advanced/administration/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Administração
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin0154awpo7/index.php/configure/advanced/emails/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\">";
        // line 1024
        echo " Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin0154awpo7/index.php/configure/advanced/import/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin0154awpo7/index.php/configure/advanced/employees/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Empregados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin0154awpo7/index.php/configure/advanced/sql-requests/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Base de dados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin0154awpo7/";
        // line 1056
        echo "index.php/configure/advanced/logs/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Registos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin0154awpo7/index.php/configure/advanced/webservice-keys/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin0154awpo7/index.php/configure/advanced/feature-flags/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" class=\"link\"> Experimental Features
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Lançar a loja!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Continuar</button>
  </div>
  <div>
    <a class=\"btn -sm";
        // line 1096
        echo "all btn-main btn-sm onboarding-button-stop\">Parar o Enbarque</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catálogo</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin0154awpo7/index.php/sell/attachments/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\" aria-current=\"page\">Ficheiros</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Ficheiros          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin0154awpo7/index.php/sell/attachments/new?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\"                  title=\"Adicionar novo ficheiro\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Adicionar novo ficheiro
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin0154awpo7/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpt%252Fdoc%252FAdminAttachments%253Fversion%253D1.7.8.8%2526country%253Dpt/Ajuda?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\"
                   id=\"product_form_open_help\"
                >
                  Ajuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <d";
        // line 1154
        echo "iv class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin0154awpo7/index.php/sell/attachments/new?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\"              title=\"Adicionar novo ficheiro\"            >
              Adicionar novo ficheiro
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ajuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin0154awpo7/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpt%252Fdoc%252FAdminAttachments%253Fversion%253D1.7.8.8%2526country%253Dpt/Ajuda?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\"
            >
              Ajuda
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Módulos recomendados',
        'description': \"Aqui está uma selecção de módulos de parceiros,<\\strong> compatíveis com a sua loja<\\/strong>, para o ajudar a atingir os seus objectivos.\",
        'Close': 'Fechar',
      },
      recommendedModulesUrl: '/admin0154awpo7/index.php/modules/addons/modules/recommended?tabClassName=AdminAttachments&_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

<";
        // line 1194
        echo "/div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continuar</button>
  <a class=\"onboarding-button-shut-down\">Saltar este tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Seja bem-vindo \\u00e0 sua loja!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Ol\\u00e1! O meu nome \\u00e9 Preston e eu estou aqui para ser o teu guia.<\\/p>\\n    <p>Vai descobrir alguns passos essenciais antes de poder lan\\u00e7ar a sua loja:\\n    Crie o seu primeiro produto, customize a sua loja, configure envios e pagamentos...<\\";
        // line 1238
        echo "/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Vamos come\\u00e7ar!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Depois<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Come\\u00e7ar<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/prestashop.tld\\/admin0154awpo7\\/index.php?controller=AdminDashboard&token=c20f004a93b870d5b3133a4d16b90582\"}]},{\"name\":\"product\",\"title\":\"Vamos l\\u00e1 criar o teu primeiro produto\",\"subtitle\":{\"1\":\"O que gostaria de dizer sobre este produto? Pense no que os seus clientes v\\u00e3o querer saber.\",\"2\":\"Adicione informa\\u00e7\\u00e3o clara e atractiva. N\\u00e3o se preocupe: pode edit\\u00e1-la depois :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"D\\u00ea um nome atraente ao seu produto.\",\"options\":[\"savepoint\"],\"page\":[\"\\/admin0154awpo7\\/index.php\\/sell\\/catalog\\/products\\/new?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\",\"admin0154awpo7\\/index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Preencha os detalhes essenciais nesta tab. As outras tabs s\\u00e3o para informa\\u00e7\\u00e3o avan\\u00e7ada.\",\"page\":\"admin0154awpo7\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Adicione uma ou mais fotografias para tornar o seu produto mais tentador!\",\"page\":\"admin0154awpo7\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Por quanto \\u00e9 que o quer vender?\",\"page\":\"admin0154awpo7\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yey! Acabou de criar ";
        echo "o seu primeiro produto. Tem bom aspecto, n\\u00e3o tem?\",\"page\":\"admin0154awpo7\\/index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"D\\u00ea \\u00e0 sua loja a sua pr\\u00f3pria identidade\",\"subtitle\":{\"1\":\"Qual \\u00e9 o aspecto que quer que a sua loja tenha? O que \\u00e9 que a torna t\\u00e3o especial?\",\"2\":\"Customize o seu tema ou escolha o melhor design atrav\\u00e9s do nosso cat\\u00e1logo de temas.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Uma boa maneira de come\\u00e7ar \\u00e9 adicionar o seu logo aqui!\",\"options\":[\"savepoint\"],\"page\":\"\\/admin0154awpo7\\/index.php\\/improve\\/design\\/themes\\/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Se quer algo realmente especial, d\\u00ea uma vista de olhos no cat\\u00e1logo de temas!\",\"page\":\"\\/admin0154awpo7\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Ponha a sua loja pronta para pagamentos\",\"subtitle\":{\"1\":\"Como \\u00e9 que quer que os seus clientes paguem?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Estes m\\u00e9todos de pagamento j\\u00e1 est\\u00e3o dispon\\u00edveis para os seus clientes.\",\"options\":[\"savepoint\"],\"page\":\"\\/admin0154awpo7\\/index.php\\/improve\\/payment\\/payment_methods?_token=VY918CWCXir96rOTJ6WIu3hmqMJehbnk3n43QKVPLps\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Escolha as op\\u00e7\\u00f5es de envio\",\"subtitle\":{\"1\":\"Como \\u00e9 que quer entregar os seus produtos?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Aqui est\\u00e3o os m\\u00e9todos de envio dispon\\u00edveis na sua loja hoje.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/prestashop.tld\\/admin0154awpo7\\/index.php?contr";
        echo "oller=AdminCarriers&token=3ca540c88ebf779372d63c23cc5e76d4\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">\\u00c9 a tua vez!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          J\\u00e1 viste o essential mas h\\u00e1 muito mais a explorar.<br \\/>\\n          Alguns recursos para o ajudar a continuar:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Guia de In\\u00edcio R\\u00e1pido<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">F\\u00f3rum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Forma\\u00e7\\u00e3o<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.";
        echo "youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Tutorial em v\\u00eddeo<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Estou pronto<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/prestashop.tld\\/admin0154awpo7\\/index.php?controller=AdminDashboard&token=c20f004a93b870d5b3133a4d16b90582\"}]}]}, 1, \"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminWelcome&token=1a7f2dd4582d05a346010ecc7a616a75\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Olá! Estás perdido?</p>    <p>Para continuar, clique aqui:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continuar</button>    </div>    <p>Se quiser parar o tutorial definitivamente, carregue aqui:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Terminar o tutorial de boas vindas</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Passo <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Próximo</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(th";
        // line 1249
        echo "is).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1278
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, não!</h1>
  <p class=\"mt-3\">
    A versão móvel desta página ainda não está disponível.
  </p>
  <p class=\"mt-2\">
    Utilize um computador para obter acesso a esta página, até ser adaptada para um telemóvel.
  </p>
  <p class=\"mt-2\">
    Obrigado.
  </p>
  <a href=\"http://prestashop.tld/admin0154awpo7/index.php?controller=AdminDashboard&amp;token=c20f004a93b870d5b3133a4d16b90582\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Voltar
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PT&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pt/login?email=bpmachado0806%40hotmail.com&amp;firstname=Beatriz&amp;lastname=Machado&amp;website=http%3A%2F%2Fprestashop.tld%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PT&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin0154awpo7/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Ligue a sua loja ao mercado PrestaShop para poder importar automaticamente todas as suas compras Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=";
        // line 1327
        echo "\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Não tem uma conta criada?</h4>
\t\t\t\t\t\t<p class='text-justify'>Descubra as vantagens do PrestaShop Addons! Explore o «marketplace» oficial do PrestaShop e encontre mais de 3500 módulos inovadores e temas-gráficos que o ajudam a otimizar as taxas de conversão de visitas em vendas, aumentar o tráfego na loja, aumentar a fidelidade dos clientes e maximizar o seu nível de produtividade</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Ligue-se ao PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pt/forgot-your-password\">Esqueci-me da minha palavra-passe</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pt/login?email=bpmachado0806%40hotmail.com&amp;firstname=Beatriz&amp;lastname=Machado&amp;website=http%3A%2F%2Fprestashop.tld%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PT&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCriar uma conta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div";
        // line 1365
        echo " class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Entrar
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
        // line 1386
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 107
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1278
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1386
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
        return "__string_template__c600edfe2562a459c1a040457a661a5cb86c4cb5c524fbbe864e9d420b047cd7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1553 => 1386,  1536 => 1278,  1527 => 107,  1518 => 1386,  1495 => 1365,  1455 => 1327,  1400 => 1278,  1369 => 1249,  1353 => 1238,  1307 => 1194,  1265 => 1154,  1205 => 1096,  1163 => 1056,  1129 => 1024,  1099 => 996,  1067 => 966,  1034 => 935,  1003 => 906,  966 => 871,  932 => 839,  901 => 810,  868 => 779,  834 => 747,  802 => 717,  770 => 687,  737 => 656,  699 => 620,  665 => 588,  635 => 560,  603 => 530,  568 => 497,  538 => 469,  505 => 438,  472 => 407,  431 => 368,  400 => 339,  360 => 301,  312 => 255,  253 => 198,  235 => 182,  195 => 144,  153 => 107,  131 => 87,  108 => 66,  83 => 43,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c600edfe2562a459c1a040457a661a5cb86c4cb5c524fbbe864e9d420b047cd7", "");
    }
}
