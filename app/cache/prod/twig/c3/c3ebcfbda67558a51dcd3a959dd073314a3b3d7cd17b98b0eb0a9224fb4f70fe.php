<?php

/* __string_template__2ecdcc4db13383b2363e3fb988176f6141ff6e2a71342d4539233c067efa3953 */
class __TwigTemplate_80db67fd31c640424dadc7c29580c3d5012adcacf2611c088f117ba4cd1bf64c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"uk\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Товари • Fayni Maneli</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'uk';
    var full_language_code = 'uk';
    var full_cldr_language_code = 'uk-UK';
    var country_iso_code = 'US';
    var _PS_VERSION_ = '1.7.2.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'У магазині нове замовленя';
    var order_number_msg = 'Номер замовлення: ';
    var total_msg = 'Всього: ';
    var from_msg = 'Джерело: ';
    var see_order_msg = 'Переглянути цей замовлення';
    var new_customer_msg = 'Новий покупець зареєструвався в Вашому магазині.';
    var customer_name_msg = 'Ім\\\\\\'я клієнта: ';
    var new_msg = 'Нові повідомлення у вашому магазині.';
    var see_msg = 'Прочитати повідомлення';
    var token = '6c902c3e8685668650a38726308892fd';
    var token_admin_orders = 'e8c7f2f25b765a8ad09f52e55ff65788';
    var token_admin_customers = 'bbfdf2ee8b986761c3ce17a7cde4ba4c';
    var token_admin_customer_threads = '8717138205fda34f6e1d2b06ed0209ad';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '09e6b9489b5c84136cf5458cdcf6a6bc';
    var choose_language_translate = 'Виберіть мову';
    var default_language = '1';
    var admin_modules_link = '/admin1795k6wof/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=nqT9j9vbJYrkk8eS4rLT9aZM4dDqLzupwJzLQYaBZ6s';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Успішно оновлено';
    var errorLogin = 'ПрестаШоп не може увійти в Додатки. Будь ласка, перевірте свої дані та ваше інтернет-з\\\\\\'єднання.';
    var search_product_msg = 'Пошук товару';
  </script>

      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin1795k6wof/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/advice-1.7.2.1_324.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/advice-1.7.2.1_479.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin1795k6wof/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin1795k6wof\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"\\u0434\\u043e\\u043b\\u0430\\u0440 \\u0421\\u0428\\u0410\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/admin1795k6wof/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.2.1\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.2.1\"></script>
<script type=\"text/javascript\" src=\"/admin1795k6wof/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin1795k6wof/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array(\"324\",\"479\");
\t\t\t\tvar admin_gamification_ajax_url = 'http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminGamification&token=637ef9ced0dff6c2eaedca238e668827';
\t\t\t\tvar current_id_tab = 10;
\t\t\t</script>

";
        // line 86
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminDashboard&amp;token=0bfd3f4b4f0dd4217fc28529112d9a49\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Швидкий Доступ</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php/module/manage?token=b87967ece8a3812bf50d2f91015ff1ec\"
                 data-item=\"Встановлені модулі\"
      >Встановлені модулі</a>
          <a class=\"dropdown-item\"
         href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminOrders&amp;token=e8c7f2f25b765a8ad09f52e55ff65788\"
                 data-item=\"Замовлення\"
      >Замовлення</a>
          <a class=\"dropdown-item\"
         href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminCategories&amp;addcategory&amp;token=d070f2886c5251054a3eb7218e5c1cac\"
                 data-item=\"Нова категорія\"
      >Нова категорія</a>
          <a class=\"dropdown-item\"
         href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=b380173988c5d16bf6a04727e8f62919\"
                 data-item=\"Новий купон\"
      >Новий купон</a>
          <a class=\"dropdown-item\"
         href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php/product/new?token=b87967ece8a3812bf50d2f91015ff1ec\"
                 data-item=\"Новий товар\"
      >Новий товар</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"154\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/catalog\"
        data-post-link=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminQuickAccesses&token=f6c62c37622636b4ea0b4d5f43ba85f1\"
        data-prompt-text=\"Назвіть цей ярлик:\"
        data-link=\"Товари - Список\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Додати поточну сторінку до ШвидкогоДоступу
      </a>
        <a class=\"dropdown-item\" href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminQuickAccesses&token=f6c62c37622636b4ea0b4d5f43ba85f1\">
      <i class=\"material-icons\">settings</i>
      Керувати швидким доступом
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/admin1795k6wof/index.php?controller=AdminSearch&amp;token=1bc1b77e02920a3b914ba4376454b9db\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Пошук (наприклад, артикул товару, ім'я клієнта тощо)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          скрізь
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"скрізь\" href=\"#\" data-value=\"0\" data-placeholder=\"Що ви шукаєте?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> скрізь</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Каталог\" href=\"#\" data-value=\"1\" data-placeholder=\"Назва товару, код, артикул...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Каталог
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Клієнти за назвою\" href=\"#\" data-value=\"2\" data-placeholder=\"Е-пошта, назва...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Клієнти за назвою
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Клієнти за ір-адресою\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Клієнти за IP-адресою</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Замовлення\" href=\"#\" data-value=\"3\" data-placeholder=\"№ замовлення\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Замовлення
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Рахунки\" href=\"#\" data-value=\"4\" data-placeholder=\"Номер рахунку\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Рахунки
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Кошики\" href=\"#\" data-value=\"5\" data-placeholder=\"ID кошика\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Кошики
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Модулів\" href=\"#\" data-value=\"7\" data-placeholder=\"Назва модулю\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Модулів
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">ПОШУК<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/maksym.bodnar%40gmail.com.jpg\" /><br>
      <span>Maksym Bodnar</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminEmployees&amp;token=09e6b9489b5c84136cf5458cdcf6a6bc&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Ваш профіль
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminLogin&amp;token=c740e20116eb202b725b053f722a0265&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Вийти
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
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
              Замовлення<span id=\"_nb_new_orders_\"></span>
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
              Клієнти<span id=\"_nb_new_customers_\"></span>
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
              Повідомлень <span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Немає нових замовлень :(<br>
              Як щодо сезонних знижок?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Немає нових покупців :(<br>
              Ви користуєтесь соціальними мережами?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Немає нових повідомлень.<br>
              Це додатковий час для чогось ще!
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
      від <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - зареєстрований <strong>_date_add_</strong>
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
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://faynimaneli2.local:8888/\" target= \"_blank\">Fayni Maneli</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminDashboard&amp;token=0bfd3f4b4f0dd4217fc28529112d9a49\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Панель інструментів</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"2\">
              <span class=\"title\">Продажі</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminOrders&amp;token=e8c7f2f25b765a8ad09f52e55ff65788\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Замовлення
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminOrders&amp;token=e8c7f2f25b765a8ad09f52e55ff65788\" class=\"link\"> Замовлення
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminInvoices&amp;token=170e919b6e10c3c6112618aa53db21fc\" class=\"link\"> Рахунки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminSlip&amp;token=c0747f64bca00d800865da00661f7eaa\" class=\"link\"> Кредитні квитанції
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminDeliverySlip&amp;token=1cfc54803babe67ee1a40234edcbc1b5\" class=\"link\"> Транспортні накладні
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminCarts&amp;token=b8128cce46ad920133f2b5e1e5f913ed\" class=\"link\"> Кошики покупців
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/admin1795k6wof/index.php/product/catalog?_token=nqT9j9vbJYrkk8eS4rLT9aZM4dDqLzupwJzLQYaBZ6s\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Каталог
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/admin1795k6wof/index.php/product/catalog?_token=nqT9j9vbJYrkk8eS4rLT9aZM4dDqLzupwJzLQYaBZ6s\" class=\"link\"> Товари
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminCategories&amp;token=d070f2886c5251054a3eb7218e5c1cac\" class=\"link\"> Категорії
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminTracking&amp;token=4f2f79e387fb51e6f5dc6de8a601d19d\" class=\"link\"> Моніторинг
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminAttributesGroups&amp;token=1a5e011de7cd03125c479c94e9974731\" class=\"link\"> Атрибути, Характеристики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminManufacturers&amp;token=f3d43670f95836b1e936ed5e62ce925f\" class=\"link\"> Виробники, Постачальники
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminAttachments&amp;token=fae101e01b03f3bc6660c7319759c6a6\" class=\"link\"> Файли
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminCartRules&amp;token=b380173988c5d16bf6a04727e8f62919\" class=\"link\"> Знижки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/admin1795k6wof/index.php/stock/?_token=nqT9j9vbJYrkk8eS4rLT9aZM4dDqLzupwJzLQYaBZ6s\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminCustomers&amp;token=bbfdf2ee8b986761c3ce17a7cde4ba4c\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Клієнти
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminCustomers&amp;token=bbfdf2ee8b986761c3ce17a7cde4ba4c\" class=\"link\"> Клієнти
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminAddresses&amp;token=8447065bcfd1cdbf83ea350140341661\" class=\"link\"> Адреси
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminCustomerThreads&amp;token=8717138205fda34f6e1d2b06ed0209ad\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Служба підтримки клієнтів
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminCustomerThreads&amp;token=8717138205fda34f6e1d2b06ed0209ad\" class=\"link\"> Служба підтримки клієнтів
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminOrderMessage&amp;token=ec1c19fbceecb85118e9ae583bc12bde\" class=\"link\"> Коментарі до замовлень
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminReturn&amp;token=ce1393d6e519c890321bbc2382147e33\" class=\"link\"> Повернення товарів
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminStats&amp;token=adc6d1742373f8d6d981053bad65d9ba\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Статистика
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"42\">
              <span class=\"title\">Параметри</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"43\">
                  <a href=\"/admin1795k6wof/index.php/module/catalog?_token=nqT9j9vbJYrkk8eS4rLT9aZM4dDqLzupwJzLQYaBZ6s\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Модулів
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/admin1795k6wof/index.php/module/catalog?_token=nqT9j9vbJYrkk8eS4rLT9aZM4dDqLzupwJzLQYaBZ6s\" class=\"link\"> Модулі та Сервіси
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminAddonsCatalog&amp;token=c3c26fd8b1c545371f879e6e77b6aeaa\" class=\"link\"> Каталог модулів
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminThemes&amp;token=823c03fffda73fd4aa4a61f087a3a6a3\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Дизайн
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminThemes&amp;token=823c03fffda73fd4aa4a61f087a3a6a3\" class=\"link\"> Тема та логотип
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminThemesCatalog&amp;token=67401ea56590bb2a0b718990f209e14c\" class=\"link\"> Каталог тем
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminCmsContent&amp;token=eb4f95466f44686c69f265ff68236b74\" class=\"link\"> Сторінки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminModulesPositions&amp;token=6d43cbadb36228b436d5d60aed03f19e\" class=\"link\"> Позиції модулів
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminImages&amp;token=6e66ead56d404a6a87d93e07178fc9c4\" class=\"link\"> Налаштування зображень
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminLinkWidget&amp;token=caf794b77896f6c8b93044ae4cdf0728\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminCarriers&amp;token=f8ae430db5a874825b868d0f4df561d3\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Доставка
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminCarriers&amp;token=f8ae430db5a874825b868d0f4df561d3\" class=\"link\"> Перевізники
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminShipping&amp;token=35b087bb495c8f8b81235104821fa381\" class=\"link\"> Налаштування
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminPayment&amp;token=227cd21f915bdf566f63f47bcd14a0c6\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Оплата
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminPayment&amp;token=227cd21f915bdf566f63f47bcd14a0c6\" class=\"link\"> Платіжні модулі
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminPaymentPreferences&amp;token=4c9103e8b1cc66e3effc30eb502ba3bb\" class=\"link\"> Налаштування
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminLocalization&amp;token=2bc96dbcfad3053e1e84d3f657d116c3\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    Міжнародні
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminLocalization&amp;token=2bc96dbcfad3053e1e84d3f657d116c3\" class=\"link\"> Локалізація
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminCountries&amp;token=ccdfffdf6c9076299608ff711ea5bf21\" class=\"link\"> Країни
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminTaxes&amp;token=7a90e6363aa5b0cf52b1e7d74ed62e8b\" class=\"link\"> Податки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminTranslations&amp;token=95fadff5be99970b0bd5d282cad95156\" class=\"link\"> Переклади
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Налаштувати</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminPreferences&amp;token=1affb74e948499da53bccb3ca5b842da\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Налаштування магазину
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminPreferences&amp;token=1affb74e948499da53bccb3ca5b842da\" class=\"link\"> Загальні
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminOrderPreferences&amp;token=995c7f855076bf750459b60385f31eeb\" class=\"link\"> Налаштування замовлень
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminPPreferences&amp;token=8a3a3172e94b1102b1146ae9319fe691\" class=\"link\"> Налаштування товарів
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminCustomerPreferences&amp;token=76ce314e71fba651fa1b413ca14507f4\" class=\"link\"> Налаштування покупця
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminContacts&amp;token=5259997ed0d3e75d4f9756ae65a59912\" class=\"link\"> Контакти
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminMeta&amp;token=7899d9c7903b7d9d0f31c3a11a167ba4\" class=\"link\"> SEO оптимізації
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminSearchConf&amp;token=86e128158f13cdd295384c86389b0fbc\" class=\"link\"> Пошук
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminGamification&amp;token=637ef9ced0dff6c2eaedca238e668827\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminInformation&amp;token=874f0faf183e7dcb46899cb4cc5d344f\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Розширені параметри
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminInformation&amp;token=874f0faf183e7dcb46899cb4cc5d344f\" class=\"link\"> Інформація
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminPerformance&amp;token=3a81cdc53c72f14a871432220644863a\" class=\"link\"> Продуктивність
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminAdminPreferences&amp;token=3e2b393071394ac1b69c0b92b6d5199b\" class=\"link\"> Адміністрування
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminEmails&amp;token=c74a9a79b4fea93c20f932c8a38a0f86\" class=\"link\"> Ел. пошта
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminImport&amp;token=c1fef05f1c8ee50959a0d57112663c7a\" class=\"link\"> Імпортувати
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminEmployees&amp;token=09e6b9489b5c84136cf5458cdcf6a6bc\" class=\"link\"> Співробітники
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminRequestSql&amp;token=0843d3b52a5991344b852c78995e85eb\" class=\"link\"> База даних
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminLogs&amp;token=4376ff48788f0c44d5c591796631120e\" class=\"link\"> Звіти
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminWebservice&amp;token=30437baf16da08beeebb9336be8a5d85\" class=\"link\"> WEB Сервіси
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
<div class=\"onboarding-navbar\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Відкрийте свій магазин!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Продовжити</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Зупинити OnBoarding</a>
  </div>
</div>

</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminCatalog&amp;token=c3838adaf2e80504c96fa3ae0aab614b\">Каталог</a>
                  </li>
      
              <li>
                      <a href=\"/admin1795k6wof/index.php/product/catalog?_token=nqT9j9vbJYrkk8eS4rLT9aZM4dDqLzupwJzLQYaBZ6s\">Товари</a>
                  </li>
      
    </ol>
  

  
    <h2 class=\"title\">
      Товари    </h2>
  

  
    <div class=\"toolbar-icons\">
                                      
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add\"
            href=\"/admin1795k6wof/index.php/product/new?_token=nqT9j9vbJYrkk8eS4rLT9aZM4dDqLzupwJzLQYaBZ6s\"            title=\"Створити новий товар: CTRL+P\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">add_circle_outline</i>
            <span class=\"title\">Новий товар</span>
          </a>
                            
        <a
          class=\"toolbar-button toolbar_btn\"
          id=\"page-header-desc-configuration-modules-list\"
          href=\"/admin1795k6wof/index.php/module/catalog?_token=nqT9j9vbJYrkk8eS4rLT9aZM4dDqLzupwJzLQYaBZ6s\"          title=\"Рекомендовані модулі та сервіси\"
                  >
                      <i class=\"material-icons\">extension</i>
                    <span class=\"title\">Рекомендовані модулі та сервіси</span>
        </a>
            
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Допомога\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/admin1795k6wof/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fuk%252Fdoc%252FAdminProducts%253Fversion%253D1.7.2.1%2526country%253Duk/%D0%94%D0%BE%D0%BF%D0%BE%D0%BC%D0%BE%D0%B3%D0%B0?_token=nqT9j9vbJYrkk8eS4rLT9aZM4dDqLzupwJzLQYaBZ6s\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Допомога</span>
          </a>
                  </div>
  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-UK&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/uk/login?email=maksym.bodnar%40gmail.com&amp;firstname=Maksym&amp;lastname=Bodnar&amp;website=http%3A%2F%2Ffaynimaneli2.local%3A8888%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-UK&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin1795k6wof/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Під'єднайте ваш магазин до PrestaShop Addons для автоматичного імпорту усіх придбаних вами додатків.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Ще немає облікового запису?</h4>
\t\t\t\t\t\t<p class='text-justify'>Відкрийте для себе PrestaShop Addons! Перегляньте офіційний майданчик додатків PrestaShop та знайдіть більше 3500 іноваційних модулів і тем що оптимізують коефіцієнт конверсії, підвищують відвідуваність, лояльність покупців та вашу продуктивність</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Приєднатися до PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/uk/forgot-your-password\">Я забув пароль</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/uk/login?email=maksym.bodnar%40gmail.com&amp;firstname=Maksym&amp;lastname=Bodnar&amp;website=http%3A%2F%2Ffaynimaneli2.local%3A8888%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-UK&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tСтворити обліковий запис
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Увійти
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

    <div class=\"content-div \">

      

      
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Продовжити</button>
  <a class=\"onboarding-button-shut-down\">Пропустити навчання</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"\\n<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">\\u0412\\u0456\\u0442\\u0430\\u0454\\u043c\\u043e \\u0443 \\u0432\\u0430\\u0448\\u043e\\u043c\\u0443 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0456!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>\\u0412\\u0456\\u0442\\u0430\\u044e! \\u042f \\u2013 \\u041f\\u0440\\u0435\\u0441\\u0442\\u043e\\u043d, \\u0456 \\u044f \\u0442\\u0443\\u0442 \\u0432\\u0441\\u0435 \\u043f\\u043e\\u043a\\u0430\\u0436\\u0443.<\\/p>\\n    <p>\\u041f\\u0435\\u0440\\u0435\\u0434 \\u0432\\u0456\\u0434\\u043a\\u0440\\u0438\\u0442\\u0442\\u044f\\u043c \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0443 \\u0432\\u0430\\u0440\\u0442\\u043e \\u0434\\u0456\\u0437\\u043d\\u0430\\u0442\\u0438\\u0441\\u044f \\u043f\\u0440\\u043e \\u0434\\u0435\\u0449\\u043e \\u0432\\u0430\\u0436\\u043b\\u0438\\u0432\\u0435:\\n    \\u0421\\u0442\\u0432\\u043e\\u0440\\u0456\\u0442\\u044c \\u0441\\u0432\\u0456\\u0439 \\u043f\\u0435\\u0440\\u0448\\u0438\\u0439 \\u0442\\u043e\\u0432\\u0430\\u0440, \\u043d\\u0430\\u043b\\u0430\\u0448\\u0442\\u0443\\u0439\\u0442\\u0435 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d, \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0443 \\u0442\\u0430 \\u043e\\u043f\\u043b\\u0430\\u0442\\u0443...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>\\u0414\\u0430\\u0432\\u0430\\u0439\\u0442\\u0435 \\u043f\\u043e\\u0447\\u043d\\u0435\\u043c\\u043e!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">\\u041f\\u0456\\u0437\\u043d\\u0456\\u0448\\u0435<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">\\u041f\\u043e\\u0447\\u0430\\u0442\\u0438<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php?controller=AdminDashboard\"}]},{\"title\":\"\\u0414\\u0430\\u0432\\u0430\\u0439\\u0442\\u0435 \\u0441\\u0442\\u0432\\u043e\\u0440\\u0438\\u043c\\u043e \\u043f\\u0435\\u0440\\u0448\\u0438\\u0439 \\u0442\\u043e\\u0432\\u0430\\u0440\",\"subtitle\":{\"1\":\"\\u0429\\u043e \\u0431 \\u0432\\u0438 \\u0445\\u043e\\u0442\\u0456\\u043b\\u0438 \\u0440\\u043e\\u0437\\u043f\\u043e\\u0432\\u0456\\u0441\\u0442\\u0438 \\u043f\\u0440\\u043e \\u043d\\u044c\\u043e\\u0433\\u043e? \\u0429\\u043e \\u043a\\u043b\\u0456\\u0454\\u043d\\u0442\\u0430\\u043c \\u0431\\u0443\\u043b\\u043e \\u0431 \\u0446\\u0456\\u043a\\u0430\\u0432\\u043e \\u0437\\u043d\\u0430\\u0442\\u0438?\",\"2\":\"\\u041d\\u0430\\u0434\\u0430\\u0432\\u0430\\u0439\\u0442\\u0435 \\u0447\\u0456\\u0442\\u043a\\u0443 \\u0442\\u0430 \\u043f\\u0440\\u0438\\u0432\\u0430\\u0431\\u043b\\u0438\\u0432\\u0443 \\u0456\\u043d\\u0444\\u043e\\u0440\\u043c\\u0430\\u0446\\u0456\\u044e. \\u041d\\u0435 \\u0431\\u0456\\u0439\\u0442\\u0435\\u0441\\u044f, \\u0457\\u0457 \\u043f\\u043e\\u0442\\u0456\\u043c \\u043c\\u043e\\u0436\\u043d\\u0430 \\u0437\\u043c\\u0456\\u043d\\u0438\\u0442\\u0438 :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0414\\u0430\\u0439\\u0442\\u0435 \\u0442\\u043e\\u0432\\u0430\\u0440\\u0443 \\u044f\\u0441\\u043a\\u0440\\u0430\\u0432\\u0443 \\u043d\\u0430\\u0437\\u0432\\u0443.\",\"options\":[\"savepoint\"],\"page\":[\"index.php\\/product\\/new\",\"index.php\\/product\\/form\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0417\\u0430\\u043f\\u043e\\u0432\\u043d\\u0456\\u0442\\u044c \\u043d\\u0435\\u043e\\u0431\\u0445\\u0456\\u0434\\u043d\\u0456 \\u043f\\u043e\\u043b\\u044f \\u043d\\u0430 \\u0446\\u0456\\u0439 \\u0432\\u043a\\u043b\\u0430\\u0434\\u0446\\u0456. \\u0406\\u043d\\u0448\\u0456 \\u0432\\u043a\\u043b\\u0430\\u0434\\u043a\\u0438 \\u043f\\u0440\\u0438\\u0437\\u043d\\u0430\\u0447\\u0435\\u043d\\u0456 \\u0434\\u043b\\u044f \\u0434\\u043e\\u0434\\u0430\\u0442\\u043a\\u043e\\u0432\\u043e\\u0457 \\u0456\\u043d\\u0444\\u043e\\u0440\\u043c\\u0430\\u0446\\u0456\\u0457.\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0414\\u043e\\u0434\\u0430\\u0439\\u0442\\u0435 \\u0437\\u043e\\u0431\\u0440\\u0430\\u0436\\u0435\\u043d\\u043d\\u044f, \\u0449\\u043e\\u0431 \\u0442\\u043e\\u0432\\u0430\\u0440 \\u0432\\u0438\\u0433\\u043b\\u044f\\u0434\\u0430\\u0432 \\u043f\\u0440\\u0438\\u0432\\u0430\\u0431\\u043b\\u0438\\u0432\\u043e!\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0417\\u0430 \\u044f\\u043a\\u043e\\u044e \\u0446\\u0456\\u043d\\u043e\\u044e \\u0432\\u0438 \\u0445\\u043e\\u0447\\u0435\\u0442\\u0435 \\u043f\\u0440\\u043e\\u0434\\u0430\\u0442\\u0438?\",\"page\":\"index.php\\/product\\/form\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"\\u0419\\u043e\\u0439! \\u0412\\u0438 \\u0441\\u0442\\u0432\\u043e\\u0440\\u0438\\u043b\\u0438 \\u0441\\u0432\\u0456\\u0439 \\u043f\\u0435\\u0440\\u0448\\u0438\\u0439 \\u0442\\u043e\\u0432\\u0430\\u0440. \\u041d\\u0435\\u043f\\u043e\\u0433\\u0430\\u043d\\u043e, \\u0442\\u0430\\u043a?\",\"page\":\"index.php\\/product\\/catalog\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"\\u0414\\u043e\\u0434\\u0430\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448\\u043e\\u043c\\u0443 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0443 \\u0456\\u043d\\u0434\\u0438\\u0432\\u0456\\u0434\\u0443\\u0430\\u043b\\u044c\\u043d\\u043e\\u0441\\u0442\\u0456\",\"subtitle\":{\"1\":\"\\u042f\\u043a \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d \\u043c\\u0430\\u0454 \\u0432\\u0438\\u0433\\u043b\\u044f\\u0434\\u0430\\u0442\\u0438? \\u0429\\u043e \\u0440\\u043e\\u0431\\u0438\\u0442\\u044c \\u0439\\u043e\\u0433\\u043e \\u043e\\u0441\\u043e\\u0431\\u043b\\u0438\\u0432\\u0438\\u043c?\",\"2\":\"\\u041d\\u0430\\u043b\\u0430\\u0448\\u0442\\u0443\\u0439\\u0442\\u0435 \\u0442\\u0435\\u043c\\u0443 \\u0430\\u0431\\u043e \\u043e\\u0431\\u0435\\u0440\\u0456\\u0442\\u044c \\u043d\\u0430\\u0439\\u043a\\u0440\\u0430\\u0449\\u0435 \\u043e\\u0444\\u043e\\u0440\\u043c\\u043b\\u0435\\u043d\\u043d\\u044f \\u0437 \\u043a\\u0430\\u0442\\u0430\\u043b\\u043e\\u0433\\u0443 \\u0442\\u0435\\u043c.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0429\\u043e\\u0431 \\u0440\\u043e\\u0437\\u043f\\u043e\\u0447\\u0430\\u0442\\u0438, \\u0440\\u043e\\u0437\\u0442\\u0430\\u0448\\u0443\\u0439\\u0442\\u0435 \\u0442\\u0443\\u0442 \\u0441\\u0432\\u0456\\u0439 \\u043b\\u043e\\u0433\\u043e\\u0442\\u0438\\u043f!\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminThemes\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u042f\\u043a\\u0449\\u043e \\u0431\\u0430\\u0436\\u0430\\u0454\\u0442\\u0435 \\u0447\\u043e\\u0433\\u043e\\u0441\\u044c \\u043e\\u0441\\u043e\\u0431\\u043b\\u0438\\u0432\\u043e\\u0433\\u043e, \\u043f\\u0435\\u0440\\u0435\\u0433\\u043b\\u044f\\u043d\\u044c\\u0442\\u0435 \\u043a\\u0430\\u0442\\u0430\\u043b\\u043e\\u0433 \\u0442\\u0435\\u043c!\",\"page\":\"index.php?controller=AdminThemesCatalog\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"\\u041d\\u0430\\u043b\\u0430\\u0448\\u0442\\u0443\\u0439\\u0442\\u0435 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d \\u0434\\u043b\\u044f \\u043e\\u0442\\u0440\\u0438\\u043c\\u0430\\u043d\\u043d\\u044f \\u043e\\u043f\\u043b\\u0430\\u0442\\u0438\",\"subtitle\":{\"1\":\"\\u042f\\u043a \\u043a\\u043b\\u0456\\u0454\\u043d\\u0442\\u0438 \\u043c\\u0430\\u044e\\u0442\\u044c \\u0432\\u0430\\u043c \\u043f\\u043b\\u0430\\u0442\\u0438\\u0442\\u0438?\",\"2\":\"\\u0410\\u0434\\u0430\\u043f\\u0442\\u0443\\u0439\\u0442\\u0435 \\u0441\\u0432\\u043e\\u044e \\u043f\\u0440\\u043e\\u043f\\u043e\\u0437\\u0438\\u0446\\u0456\\u044e \\u0434\\u043e \\u0441\\u0432\\u043e\\u0433\\u043e \\u0440\\u0438\\u043d\\u043a\\u0443 \\u2013 \\u0434\\u043e\\u0434\\u0430\\u0439\\u0442\\u0435 \\u043d\\u0430\\u0439\\u0431\\u0456\\u043b\\u044c\\u0448 \\u043f\\u043e\\u043f\\u0443\\u043b\\u044f\\u0440\\u043d\\u0456 \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u0438 \\u043e\\u043f\\u043b\\u0430\\u0442\\u0438 \\u0434\\u043b\\u044f \\u043a\\u043b\\u0456\\u0454\\u043d\\u0442\\u0456\\u0432!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0421\\u043f\\u043e\\u0441\\u043e\\u0431\\u0438 \\u043e\\u043f\\u043b\\u0430\\u0442\\u0438 \\u0432\\u0436\\u0435 \\u0434\\u043e\\u0441\\u0442\\u0443\\u043f\\u043d\\u0456 \\u0434\\u043b\\u044f \\u0432\\u0430\\u0448\\u0438\\u0445 \\u043a\\u043b\\u0456\\u0454\\u043d\\u0442\\u0456\\u0432.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0412\\u0438 \\u043c\\u043e\\u0436\\u0435\\u0442\\u0435 \\u0434\\u043e\\u0434\\u0430\\u0442\\u0438 \\u0456\\u043d\\u0448\\u0456 \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u0438 \\u043e\\u043f\\u043b\\u0430\\u0442\\u0438 \\u0442\\u0443\\u0442!\",\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1)\",\"position\":\"top\"}]},{\"title\":\"\\u041e\\u0431\\u0435\\u0440\\u0456\\u0442\\u044c \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u0438 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0438\",\"subtitle\":{\"1\":\"\\u042f\\u043a \\u0432\\u0438 \\u0445\\u043e\\u0447\\u0435\\u0442\\u0435 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043b\\u044f\\u0442\\u0438 \\u0441\\u0432\\u043e\\u0457 \\u0442\\u043e\\u0432\\u0430\\u0440\\u0438?\",\"2\":\"\\u041e\\u0431\\u0435\\u0440\\u0456\\u0442\\u044c \\u0432\\u0430\\u0440\\u0456\\u0430\\u043d\\u0442\\u0438 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0438, \\u044f\\u043a\\u0456 \\u043d\\u0430\\u0439\\u0431\\u0456\\u043b\\u044c\\u0448 \\u0432\\u0456\\u0434\\u043f\\u043e\\u0432\\u0456\\u0434\\u0430\\u044e\\u0442\\u044c \\u0456\\u043d\\u0442\\u0435\\u0440\\u0435\\u0441\\u0430\\u043c \\u043a\\u043b\\u0456\\u0454\\u043d\\u0442\\u0456\\u0432! \\u0421\\u0442\\u0432\\u043e\\u0440\\u0456\\u0442\\u044c \\u0432\\u043b\\u0430\\u0441\\u043d\\u043e\\u0433\\u043e \\u043f\\u0435\\u0440\\u0435\\u0432\\u0456\\u0437\\u043d\\u0438\\u043a\\u0430 \\u0430\\u0431\\u043e \\u0434\\u043e\\u0431\\u0430\\u0432\\u0442\\u0435 \\u0433\\u043e\\u0442\\u043e\\u0432\\u0438\\u0439 \\u043c\\u043e\\u0434\\u0443\\u043b\\u044c.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u041e\\u0441\\u044c \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u0438 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0438, \\u0449\\u043e \\u0434\\u043e\\u0441\\u0442\\u0443\\u043f\\u043d\\u0456 \\u0437\\u0430\\u0440\\u0430\\u0437 \\u0443 \\u0432\\u0430\\u0448\\u043e\\u043c\\u0443 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0456.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0412\\u0438 \\u043c\\u043e\\u0436\\u0435\\u0442\\u0435 \\u0437\\u0430\\u043f\\u0440\\u043e\\u043f\\u043e\\u043d\\u0443\\u0432\\u0430\\u0442\\u0438 \\u0434\\u043e\\u0434\\u0430\\u0442\\u043a\\u043e\\u0432\\u0456 \\u0432\\u0430\\u0440\\u0456\\u0430\\u043d\\u0442\\u0438 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0438, \\u043d\\u0430\\u043b\\u0430\\u0448\\u0442\\u0443\\u0432\\u0430\\u0432\\u0448\\u0438 \\u0434\\u0435\\u043a\\u0456\\u043b\\u044c\\u043a\\u043e\\u0445 \\u043f\\u0435\\u0440\\u0435\\u0432\\u0456\\u0437\\u043d\\u0438\\u043a\\u0456\\u0432\",\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"\\u041f\\u043e\\u043a\\u0440\\u0430\\u0449\\u0456\\u0442\\u044c \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d \\u0437\\u0430 \\u0434\\u043e\\u043f\\u043e\\u043c\\u043e\\u0433\\u043e\\u044e \\u043c\\u043e\\u0434\\u0443\\u043b\\u0456\\u0432\",\"subtitle\":{\"1\":\"\\u0414\\u043e\\u0434\\u0430\\u0432\\u0430\\u0439\\u0442\\u0435 \\u043d\\u043e\\u0432\\u0456 \\u0444\\u0443\\u043d\\u043a\\u0446\\u0456\\u0457 \\u0442\\u0430 \\u043a\\u0435\\u0440\\u0443\\u0439\\u0442\\u0435 \\u0456\\u0441\\u043d\\u0443\\u044e\\u0447\\u0438\\u043c\\u0438 \\u0437\\u0430 \\u0434\\u043e\\u043f\\u043e\\u043c\\u043e\\u0433\\u043e\\u044e \\u043c\\u043e\\u0434\\u0443\\u043b\\u0456\\u0432.\",\"2\":\"\\u0414\\u0435\\u044f\\u043a\\u0456 \\u043c\\u043e\\u0434\\u0443\\u043b\\u0456 \\u0443\\u0436\\u0435 \\u0432\\u0441\\u0442\\u0430\\u043d\\u043e\\u0432\\u043b\\u0435\\u043d\\u043e, \\u0456\\u043d\\u0448\\u0456 \\u043c\\u043e\\u0436\\u0443\\u0442\\u044c \\u0431\\u0443\\u0442\\u0438 \\u043f\\u043b\\u0430\\u0442\\u043d\\u0438\\u043c\\u0438 \\u0447\\u0438 \\u0431\\u0435\\u0437\\u043a\\u043e\\u0448\\u0442\\u043e\\u0432\\u043d\\u0438\\u043c\\u0438 - \\u043f\\u0435\\u0440\\u0435\\u0433\\u043b\\u044f\\u043d\\u044c\\u0442\\u0435 \\u043d\\u0430\\u0448\\u0443 \\u043a\\u043e\\u043b\\u0435\\u043a\\u0446\\u0456\\u044e \\u0442\\u0430 \\u0437\\u043d\\u0430\\u0439\\u0434\\u0456\\u0442\\u044c \\u043d\\u0430\\u0439\\u0431\\u0456\\u043b\\u044c\\u0448 \\u043f\\u0440\\u0438\\u0439\\u043d\\u044f\\u0442\\u043d\\u0456!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u041c\\u043e\\u0434\\u0443\\u043b\\u0456 \\u043c\\u043e\\u0436\\u043d\\u0430 \\u043f\\u0435\\u0440\\u0435\\u0433\\u043b\\u044f\\u043d\\u0443\\u0442\\u0438 \\u043d\\u0430 \\u043f\\u0435\\u0440\\u0448\\u0456\\u0439 \\u0432\\u043a\\u043b\\u0430\\u0434\\u0446\\u0456. \\u041a\\u0435\\u0440\\u0443\\u0439\\u0442\\u0435 \\u043c\\u043e\\u0434\\u0443\\u043b\\u044f\\u043c\\u0438 \\u043d\\u0430 \\u0434\\u0440\\u0443\\u0433\\u0456\\u0439 \\u0432\\u043a\\u043b\\u0430\\u0434\\u0446\\u0456, \\u0442\\u0430 \\u043f\\u0435\\u0440\\u0435\\u0433\\u043b\\u044f\\u0434\\u0430\\u0439\\u0442\\u0435 \\u043f\\u043e\\u0432\\u0456\\u0434\\u043e\\u043c\\u043b\\u0435\\u043d\\u043d\\u044f \\u043d\\u0430 \\u0442\\u0440\\u0435\\u0442\\u0456\\u0439.\",\"options\":[\"savepoint\"],\"page\":\"index.php\\/module\\/catalog\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"\\n<div id=\\\"onboarding-welcome\\\" class=\\\"modal-header\\\">\\n  <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n  <h2 class=\\\"text-center text-md-center\\\">\\u041a\\u0456\\u043d\\u0435\\u0446\\u044c!<\\/h2>\\n  <p class=\\\"text-center text-md-center\\\">\\n    \\u0413\\u043e\\u043b\\u043e\\u0432\\u043d\\u0435 \\u0432\\u0438 \\u043f\\u043e\\u0431\\u0430\\u0447\\u0438\\u043b\\u0438, \\u0430\\u043b\\u0435 \\u0442\\u0440\\u0435\\u0431\\u0430 \\u0449\\u0435 \\u0431\\u0430\\u0433\\u0430\\u0442\\u043e \\u0434\\u043e\\u0441\\u043b\\u0456\\u0434\\u0438\\u0442\\u0438.<br \\/>\\n    \\u0414\\u0435\\u044f\\u043a\\u0456 \\u0440\\u0435\\u0441\\u0443\\u0440\\u0441\\u0438, \\u0449\\u043e \\u043c\\u043e\\u0436\\u0443\\u0442\\u044c \\u0434\\u043e\\u043f\\u043e\\u043c\\u043e\\u0433\\u0442\\u0438 \\u0432\\u0430\\u043c \\u0432 \\u043c\\u0430\\u0439\\u0431\\u0443\\u0442\\u043d\\u044c\\u043e\\u043c\\u0443:\\n  <\\/p>\\n  <div class=\\\"container-fluid\\\">\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n          <div class=\\\"starter-guide\\\"><\\/div>\\n          <span class=\\\"link\\\">\\u041f\\u043e\\u0441\\u0456\\u0431\\u043d\\u0438\\u043a \\u043f\\u043e\\u0447\\u0430\\u0442\\u043a\\u043e\\u0432\\u0446\\u044f<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n          <div class=\\\"forum\\\"><\\/div>\\n          <span class=\\\"link\\\">\\u0424\\u043e\\u0440\\u0443\\u043c<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"training\\\"><\\/div>\\n          <span class=\\\"link\\\">\\u041d\\u0430\\u0432\\u0447\\u0430\\u043d\\u043d\\u044f<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"video-tutorial\\\"><\\/div>\\n          <span class=\\\"link\\\">\\u0412\\u0456\\u0434\\u0435\\u043e\\u0443\\u0440\\u043e\\u043a\\u0438<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n  <\\/div>\\n  <br \\/>\\n  <div class=\\\"text-center text-md-center\\\">\\n      <button class=\\\"btn btn-primary onboarding-button-next\\\">\\u042f \\u0433\\u043e\\u0442\\u043e\\u0432\\u0438\\u0439<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/product\\/catalog\"}]}]}, 1, \"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminWelcome&token=0bce3dbd3c42547d154b44be5aa10692\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Важко?</p>    <p>Для продовження натисніть тут:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Продовжити</button>    </div>    <p>Щоб назавжди вийти з навчання, натисніть тут:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Вийти з привітального навчання</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Крок <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Далі</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
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
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1230
        $this->displayBlock('content_header', $context, $blocks);
        // line 1231
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1232
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1233
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1234
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>О ні!</h1>
  <p class=\"m-t-3\">
    Мобільна версія сторінки поки що недоступна.
  </p>
  <p class=\"m-t-2\">
    Будь ласка використовуйте персональний комп'ютер для перегляду цієї сторінки, поки що вона не адаптована для мобільних пристроїв.
  </p>
  <p class=\"m-t-2\">
    Дякуємо.
  </p>
  <a href=\"http://faynimaneli2.local:8888/admin1795k6wof/index.php?controller=AdminDashboard&amp;token=0bfd3f4b4f0dd4217fc28529112d9a49\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Назад
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Час завантаження: \"></i> 1.369s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-UK&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Контакти
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-UK&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Баг-трекер
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-UK&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Форум
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-UK&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Додатки
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-UK&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Навчання
      </a>
                </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-UK&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/uk/login?email=maksym.bodnar%40gmail.com&amp;firstname=Maksym&amp;lastname=Bodnar&amp;website=http%3A%2F%2Ffaynimaneli2.local%3A8888%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-UK&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin1795k6wof/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Під'єднайте ваш магазин до PrestaShop Addons для автоматичного імпорту усіх придбаних вами додатків.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Ще немає облікового запису?</h4>
\t\t\t\t\t\t<p class='text-justify'>Відкрийте для себе PrestaShop Addons! Перегляньте офіційний майданчик додатків PrestaShop та знайдіть більше 3500 іноваційних модулів і тем що оптимізують коефіцієнт конверсії, підвищують відвідуваність, лояльність покупців та вашу продуктивність</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Приєднатися до PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/uk/forgot-your-password\">Я забув пароль</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/uk/login?email=maksym.bodnar%40gmail.com&amp;firstname=Maksym&amp;lastname=Bodnar&amp;website=http%3A%2F%2Ffaynimaneli2.local%3A8888%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-UK&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tСтворити обліковий запис
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Увійти
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
        // line 1399
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 86
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1230
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1231
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1232
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1233
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1399
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__2ecdcc4db13383b2363e3fb988176f6141ff6e2a71342d4539233c067efa3953";
    }

    public function getDebugInfo()
    {
        return array (  1478 => 1399,  1473 => 1233,  1468 => 1232,  1463 => 1231,  1458 => 1230,  1449 => 86,  1441 => 1399,  1274 => 1234,  1271 => 1233,  1268 => 1232,  1265 => 1231,  1263 => 1230,  115 => 86,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__2ecdcc4db13383b2363e3fb988176f6141ff6e2a71342d4539233c067efa3953", "");
    }
}
