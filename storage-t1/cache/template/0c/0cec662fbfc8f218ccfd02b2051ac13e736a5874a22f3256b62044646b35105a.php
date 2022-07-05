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

/* default/template/kbmp_marketplace/header.twig */
class __TwigTemplate_5e85d19ccd184ae5e530aa20ef804c56a1b5ec2116038d318ea1219f481997ac extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 8
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 9
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 10
        if (($context["description"] ?? null)) {
            echo " 
<meta name=\"description\" content=\"";
            // line 11
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 12
        echo " 
";
        // line 13
        if (($context["keywords"] ?? null)) {
            echo " 
<meta name=\"keywords\" content= \"";
            // line 14
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 15
        echo " 
<script src=\"catalog/view/javascript/marketplace/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">

<link href=\"catalog/view/javascript/marketplace/theme.css\" rel=\"stylesheet\">
<link href=\"catalog/view/javascript/marketplace/skin-light.css\" rel=\"stylesheet\">
<link href=\"catalog/view/javascript/marketplace/marketplace.css\" rel=\"stylesheet\">
<link href=\"catalog/view/javascript/marketplace/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" rel=\"stylesheet\">
<link href=\"catalog/view/javascript/marketplace/summernote/summernote.css\" rel=\"stylesheet\">


<script src=\"catalog/view/javascript/marketplace/marketplace-custom.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/marketplace/validation/velovalidation.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/marketplace/validation/marketplace-validation.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/marketplace/summernote/summernote.js\" type=\"text/javascript\"></script>

<script src=\"catalog/view/javascript/marketplace/summernote/opencart.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/marketplace/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/marketplace/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/marketplace/jquery/flot/jquery.flot.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/marketplace/jquery/flot/jquery.flot.time.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/marketplace/jquery/flot/jquery.flot.selection.js\" type=\"text/javascript\"></script>

<style>
    .sidebar-menu li a{
         color: black;
         font-size: 15px
    }
    .navbar-nav li a{
        color: black;
        font-size: 15px
    }
</style>
";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            echo " 
<link href=\"";
            // line 53
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["style"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\" type=\"text/css\" rel=\"";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["style"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["rel"] ?? null) : null);
            echo "\" media=\"";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["style"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["media"] ?? null) : null);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo " 
<script src=\"catalog/view/javascript/marketplace/common.js\" type=\"text/javascript\"></script>
";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo " 
 
<link href=\"";
            // line 58
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["link"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["href"] ?? null) : null);
            echo "\" rel=\"";
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["link"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["rel"] ?? null) : null);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo " 
";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            echo " 
<script src=\"";
            // line 61
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo " 
</head>
<body class=\"\">
    <div class=\"vss_marketplace_page skin-black-light sidebar-mini\" style=\"margin: 0 auto; max-width: 1200px; margin-bottom: 75px;\">
      ";
        // line 66
        if (((isset($context["error_warning"]) || array_key_exists("error_warning", $context)) &&  !twig_test_empty(($context["error_warning"] ?? null)))) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 67
            echo ($context["error_warning"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 70
        echo " 
    ";
        // line 71
        if (((isset($context["success"]) || array_key_exists("success", $context)) &&  !twig_test_empty(($context["success"] ?? null)))) {
            echo " 
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 72
            echo ($context["success"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 75
        echo " 
    <div class=\"row\" style=\"margin: 0px;\">
        <div class=\"main-sidebar col-lg-3 col-md-3 col-sm-4\" style=\"border: 1px solid #eaeef8;background-color: #f9fafc\">
            <div class=\"sidebar\">
                <ul class=\"sidebar-menu\">
                    <li>
                        <a href=\"";
        // line 81
        echo ($context["home_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_back_to_site"] ?? null);
        echo "\">
                            <i class=\"fa fa-angle-double-left\"></i> ";
        // line 82
        echo ($context["text_back_to_site"] ?? null);
        echo " 
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 86
        echo ($context["dashboard_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_dashboard"] ?? null);
        echo "\">
                            <i class=\"fa fa-dashboard\"></i> ";
        // line 87
        echo ($context["text_dashboard"] ?? null);
        echo " 
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 91
        echo ($context["seller_profile_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_seller_profile"] ?? null);
        echo "\">
                            <i class=\"fa fa-pencil\"></i> ";
        // line 92
        echo ($context["text_seller_profile"] ?? null);
        echo " 
                        </a>
                    </li>
                    <!--
                    <li>
                        <a href=\"";
        // line 97
        echo ($context["commission_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_commission"] ?? null);
        echo "\">
                            <i class=\"fa fa-pencil\"></i> ";
        // line 98
        echo ($context["text_commission"] ?? null);
        echo " 
                        </a>
                    </li>
                    -->
                    <li>
                        <a href=\"";
        // line 103
        echo ($context["products_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_seller_products"] ?? null);
        echo "\">
                            <i class=\"fa fa-list\"></i> ";
        // line 104
        echo ($context["text_seller_products"] ?? null);
        echo " 
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 108
        echo ($context["orders_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_seller_orders"] ?? null);
        echo "\">
                            <i class=\"fa fa-shopping-cart\"></i> ";
        // line 109
        echo ($context["text_seller_orders"] ?? null);
        echo " 
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 113
        echo ($context["product_reviews_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_product_reviews"] ?? null);
        echo "\">
                            <i class=\"fa fa-list\"></i> ";
        // line 114
        echo ($context["text_product_reviews"] ?? null);
        echo " 
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 118
        echo ($context["seller_reviews_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_seller_reviews"] ?? null);
        echo "\">
                            <i class=\"fa fa-heart\"></i> ";
        // line 119
        echo ($context["text_seller_reviews"] ?? null);
        echo " 
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 123
        echo ($context["earning_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_seller_earning"] ?? null);
        echo "\">
                            <i class=\"fa fa-money\"></i> ";
        // line 124
        echo ($context["text_seller_earning"] ?? null);
        echo " 
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 128
        echo ($context["transactions_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_seller_transactions"] ?? null);
        echo "\">
                            <i class=\"fa fa-credit-card\"></i> ";
        // line 129
        echo ($context["text_seller_transactions"] ?? null);
        echo " 
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 133
        echo ($context["payout_request_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_payout_request"] ?? null);
        echo "\">
                            <i class=\"fa fa-credit-card\"></i> ";
        // line 134
        echo ($context["text_payout_request"] ?? null);
        echo " 
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 138
        echo ($context["category_request_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_category_request"] ?? null);
        echo "\">
                            <i class=\"fa fa-tags\"></i> ";
        // line 139
        echo ($context["text_category_request"] ?? null);
        echo " 
                        </a>
                    </li>
                    <!--Condition added by Harsh to make option configurable using admin settings on 11-Dec-2018 for CCIC implementation-->
                    ";
        // line 143
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kbmp_marketplace_settings"] ?? null), "kbmp_marketplace_setting", [], "array", false, true, false, 143), "kbmp_seller_shipping", [], "array", true, true, false, 143) && (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["kbmp_marketplace_settings"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["kbmp_marketplace_setting"] ?? null) : null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["kbmp_seller_shipping"] ?? null) : null))) {
            echo " 
                    <li>
                        <a href=\"";
            // line 145
            echo ($context["shipping_link"] ?? null);
            echo "\" title=\"";
            echo ($context["text_seller_shipping"] ?? null);
            echo "\">
                            <i class=\"fa fa-truck\"></i> ";
            // line 146
            echo ($context["text_seller_shipping"] ?? null);
            echo " 
                        </a>
                    </li>
                    ";
        }
        // line 149
        echo " 
                    <li>
                        <a href=\"";
        // line 151
        echo ($context["product_import_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_product_import"] ?? null);
        echo "\">
                            <i class=\"fa fa-file\"></i> ";
        // line 152
        echo ($context["text_product_import"] ?? null);
        echo " 
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 156
        echo ($context["return_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_product_return"] ?? null);
        echo "\">
                            <i class=\"fa fa-reply\"></i> ";
        // line 157
        echo ($context["text_product_return"] ?? null);
        echo " 
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 161
        echo ($context["coupon_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_coupons"] ?? null);
        echo "\">
                            <i class=\"fa fa-money\"></i> ";
        // line 162
        echo ($context["text_coupons"] ?? null);
        echo " 
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 166
        echo ($context["downloads_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_downloads"] ?? null);
        echo "\">
                            <i class=\"fa fa-download\"></i> ";
        // line 167
        echo ($context["text_downloads"] ?? null);
        echo " 
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 171
        echo ($context["support_link"] ?? null);
        echo "\" title=\"";
        echo ($context["text_support_system"] ?? null);
        echo "\">
                            <i class=\"fa fa-comment\"></i> ";
        // line 172
        echo ($context["text_support_system"] ?? null);
        echo " 
                        </a>
                    </li>
                </ul>
            </div>
        </div>
<script>
\t\$(document).ready(function(){
\t\t\$('.toggleMenu').click(function(){
\t\t\t\$('.main-sidebar').slideToggle();
\t\t});
\t\t
\t});
</script>
<style>
    .sidebar-menu li a{
         color: black;
         font-size: 15px
    }
    .navbar-nav li a{
        color: black;
        font-size: 15px
    }
    @media only screen and (max-width: 900px) {
      .main-sidebar {
        display:none;
      }
      .vss_marketplace_page{
          padding:00px !important;
          padding-left:0px !important;
      }
      #content-wrapper {
        width: 100% !important;
      }
    }
</style>
<style>
.toggleMenu{
\tdisplay:none;
}
@media(max-width:1245px){
\t#content-wrapper{
\t\twidth: 70% !important;
\t}
}
@media(max-width:1200px){
\t#content-wrapper {
\t\twidth: 100% !important;
\t}
\t.vss_marketplace_page.skin-black-light.sidebar-mini{
\t\tpadding:0 !important;
\t}
\t.main-sidebar{
\t\tdisplay: none;
\t}
\t.main-header .navbar{
\t\tmargin-left:0;
\t}
\t.toggleMenu .fa {
\t\tfont-size: 22px;
\t\tcolor: #38393a;
\t\tline-height: 50px;
\t}
\t.toggleMenu {
\t\tdisplay: inline-block;
\t\tmargin-left: 20px;
\t}
\t.main-sidebar {
\t\tposition: absolute;
\t\twidth: 100%;
\t\tz-index: 999;
\t\tmax-height: 350px;
\t\toverflow: auto;
\t\ttop: 50px;
\t\tleft: 0;
\t\ttransform: inherit;
\t\tmin-height: auto;
\t}
\tdiv#content{padding-left:15px !important;padding-right:15px !important;}
}
@media(max-width:767px){\t
\t
}
</style>";
    }

    public function getTemplateName()
    {
        return "default/template/kbmp_marketplace/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 172,  446 => 171,  439 => 167,  433 => 166,  426 => 162,  420 => 161,  413 => 157,  407 => 156,  400 => 152,  394 => 151,  390 => 149,  383 => 146,  377 => 145,  372 => 143,  365 => 139,  359 => 138,  352 => 134,  346 => 133,  339 => 129,  333 => 128,  326 => 124,  320 => 123,  313 => 119,  307 => 118,  300 => 114,  294 => 113,  287 => 109,  281 => 108,  274 => 104,  268 => 103,  260 => 98,  254 => 97,  246 => 92,  240 => 91,  233 => 87,  227 => 86,  220 => 82,  214 => 81,  206 => 75,  199 => 72,  195 => 71,  192 => 70,  185 => 67,  181 => 66,  175 => 62,  167 => 61,  161 => 60,  158 => 59,  148 => 58,  141 => 56,  137 => 54,  125 => 53,  119 => 52,  80 => 15,  75 => 14,  71 => 13,  68 => 12,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>{{ title }}</title>
<base href=\"{{ base }}\" />
{% if (description) %} 
<meta name=\"description\" content=\"{{ description }}\" />
{% endif %} 
{% if (keywords) %} 
<meta name=\"keywords\" content= \"{{ keywords }}\" />
{% endif %} 
<script src=\"catalog/view/javascript/marketplace/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">

<link href=\"catalog/view/javascript/marketplace/theme.css\" rel=\"stylesheet\">
<link href=\"catalog/view/javascript/marketplace/skin-light.css\" rel=\"stylesheet\">
<link href=\"catalog/view/javascript/marketplace/marketplace.css\" rel=\"stylesheet\">
<link href=\"catalog/view/javascript/marketplace/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" rel=\"stylesheet\">
<link href=\"catalog/view/javascript/marketplace/summernote/summernote.css\" rel=\"stylesheet\">


<script src=\"catalog/view/javascript/marketplace/marketplace-custom.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/marketplace/validation/velovalidation.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/marketplace/validation/marketplace-validation.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/marketplace/summernote/summernote.js\" type=\"text/javascript\"></script>

<script src=\"catalog/view/javascript/marketplace/summernote/opencart.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/marketplace/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/marketplace/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/marketplace/jquery/flot/jquery.flot.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/marketplace/jquery/flot/jquery.flot.time.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/marketplace/jquery/flot/jquery.flot.selection.js\" type=\"text/javascript\"></script>

<style>
    .sidebar-menu li a{
         color: black;
         font-size: 15px
    }
    .navbar-nav li a{
        color: black;
        font-size: 15px
    }
</style>
{% for style in styles %} 
<link href=\"{{ style['href'] }}\" type=\"text/css\" rel=\"{{ style['rel'] }}\" media=\"{{ style['media'] }}\" />
{% endfor %} 
<script src=\"catalog/view/javascript/marketplace/common.js\" type=\"text/javascript\"></script>
{% for link in links %} 
 
<link href=\"{{ link['href'] }}\" rel=\"{{ link['rel'] }}\" />
{% endfor %} 
{% for script in scripts %} 
<script src=\"{{ script }}\" type=\"text/javascript\"></script>
{% endfor %} 
</head>
<body class=\"\">
    <div class=\"vss_marketplace_page skin-black-light sidebar-mini\" style=\"margin: 0 auto; max-width: 1200px; margin-bottom: 75px;\">
      {% if (error_warning is defined and error_warning is not empty) %} 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }} 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    {% endif %} 
    {% if (success is defined and success is not empty) %} 
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> {{ success }} 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    {% endif %} 
    <div class=\"row\" style=\"margin: 0px;\">
        <div class=\"main-sidebar col-lg-3 col-md-3 col-sm-4\" style=\"border: 1px solid #eaeef8;background-color: #f9fafc\">
            <div class=\"sidebar\">
                <ul class=\"sidebar-menu\">
                    <li>
                        <a href=\"{{ home_link }}\" title=\"{{ text_back_to_site }}\">
                            <i class=\"fa fa-angle-double-left\"></i> {{ text_back_to_site }} 
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ dashboard_link }}\" title=\"{{ text_dashboard }}\">
                            <i class=\"fa fa-dashboard\"></i> {{ text_dashboard }} 
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ seller_profile_link }}\" title=\"{{ text_seller_profile }}\">
                            <i class=\"fa fa-pencil\"></i> {{ text_seller_profile }} 
                        </a>
                    </li>
                    <!--
                    <li>
                        <a href=\"{{ commission_link }}\" title=\"{{ text_commission }}\">
                            <i class=\"fa fa-pencil\"></i> {{ text_commission }} 
                        </a>
                    </li>
                    -->
                    <li>
                        <a href=\"{{ products_link }}\" title=\"{{ text_seller_products }}\">
                            <i class=\"fa fa-list\"></i> {{ text_seller_products }} 
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ orders_link }}\" title=\"{{ text_seller_orders }}\">
                            <i class=\"fa fa-shopping-cart\"></i> {{ text_seller_orders }} 
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ product_reviews_link }}\" title=\"{{ text_product_reviews }}\">
                            <i class=\"fa fa-list\"></i> {{ text_product_reviews }} 
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ seller_reviews_link }}\" title=\"{{ text_seller_reviews }}\">
                            <i class=\"fa fa-heart\"></i> {{ text_seller_reviews }} 
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ earning_link }}\" title=\"{{ text_seller_earning }}\">
                            <i class=\"fa fa-money\"></i> {{ text_seller_earning }} 
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ transactions_link }}\" title=\"{{ text_seller_transactions }}\">
                            <i class=\"fa fa-credit-card\"></i> {{ text_seller_transactions }} 
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ payout_request_link }}\" title=\"{{ text_payout_request }}\">
                            <i class=\"fa fa-credit-card\"></i> {{ text_payout_request }} 
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ category_request_link }}\" title=\"{{ text_category_request }}\">
                            <i class=\"fa fa-tags\"></i> {{ text_category_request }} 
                        </a>
                    </li>
                    <!--Condition added by Harsh to make option configurable using admin settings on 11-Dec-2018 for CCIC implementation-->
                    {% if (kbmp_marketplace_settings['kbmp_marketplace_setting']['kbmp_seller_shipping'] is defined and kbmp_marketplace_settings['kbmp_marketplace_setting']['kbmp_seller_shipping']) %} 
                    <li>
                        <a href=\"{{ shipping_link }}\" title=\"{{ text_seller_shipping }}\">
                            <i class=\"fa fa-truck\"></i> {{ text_seller_shipping }} 
                        </a>
                    </li>
                    {% endif %} 
                    <li>
                        <a href=\"{{ product_import_link }}\" title=\"{{ text_product_import }}\">
                            <i class=\"fa fa-file\"></i> {{ text_product_import }} 
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ return_link }}\" title=\"{{ text_product_return }}\">
                            <i class=\"fa fa-reply\"></i> {{ text_product_return }} 
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ coupon_link }}\" title=\"{{ text_coupons }}\">
                            <i class=\"fa fa-money\"></i> {{ text_coupons }} 
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ downloads_link }}\" title=\"{{ text_downloads }}\">
                            <i class=\"fa fa-download\"></i> {{ text_downloads }} 
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ support_link }}\" title=\"{{ text_support_system }}\">
                            <i class=\"fa fa-comment\"></i> {{ text_support_system }} 
                        </a>
                    </li>
                </ul>
            </div>
        </div>
<script>
\t\$(document).ready(function(){
\t\t\$('.toggleMenu').click(function(){
\t\t\t\$('.main-sidebar').slideToggle();
\t\t});
\t\t
\t});
</script>
<style>
    .sidebar-menu li a{
         color: black;
         font-size: 15px
    }
    .navbar-nav li a{
        color: black;
        font-size: 15px
    }
    @media only screen and (max-width: 900px) {
      .main-sidebar {
        display:none;
      }
      .vss_marketplace_page{
          padding:00px !important;
          padding-left:0px !important;
      }
      #content-wrapper {
        width: 100% !important;
      }
    }
</style>
<style>
.toggleMenu{
\tdisplay:none;
}
@media(max-width:1245px){
\t#content-wrapper{
\t\twidth: 70% !important;
\t}
}
@media(max-width:1200px){
\t#content-wrapper {
\t\twidth: 100% !important;
\t}
\t.vss_marketplace_page.skin-black-light.sidebar-mini{
\t\tpadding:0 !important;
\t}
\t.main-sidebar{
\t\tdisplay: none;
\t}
\t.main-header .navbar{
\t\tmargin-left:0;
\t}
\t.toggleMenu .fa {
\t\tfont-size: 22px;
\t\tcolor: #38393a;
\t\tline-height: 50px;
\t}
\t.toggleMenu {
\t\tdisplay: inline-block;
\t\tmargin-left: 20px;
\t}
\t.main-sidebar {
\t\tposition: absolute;
\t\twidth: 100%;
\t\tz-index: 999;
\t\tmax-height: 350px;
\t\toverflow: auto;
\t\ttop: 50px;
\t\tleft: 0;
\t\ttransform: inherit;
\t\tmin-height: auto;
\t}
\tdiv#content{padding-left:15px !important;padding-right:15px !important;}
}
@media(max-width:767px){\t
\t
}
</style>", "default/template/kbmp_marketplace/header.twig", "");
    }
}
