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

/* kbmp_marketplace/menu.twig */
class __TwigTemplate_587ee6f5bf3cb3f94123ad29c2c3f87bbf41c40f5ff67327c50648efce4d6ec3 extends \Twig\Template
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
        echo "<ul class=\"nav nav-tabs\">
    <li ";
        // line 2
        if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (((((((($context["active_tab"] ?? null) == 1) || (($context["active_tab"] ?? null) == 2)) || (($context["active_tab"] ?? null) == 3)) || (($context["active_tab"] ?? null) == 4)) || (($context["active_tab"] ?? null) == 5)) || (($context["active_tab"] ?? null) == 6)) ||  !(isset($context["active_tab"]) || array_key_exists("active_tab", $context))))) {
            echo " ";
            echo "class=\"active\"";
            echo " ";
        }
        echo ">
        <a href=\"";
        // line 3
        echo ($context["general_settings"] ?? null);
        echo "\">";
        echo ($context["text_settings"] ?? null);
        echo "</a>
    </li>
    <li ";
        // line 5
        if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && ((((((((((($context["active_tab"] ?? null) == 11) || (($context["active_tab"] ?? null) == 12)) || (($context["active_tab"] ?? null) == 13)) || (($context["active_tab"] ?? null) == 14)) || (($context["active_tab"] ?? null) == 15)) || (($context["active_tab"] ?? null) == 16)) || (($context["active_tab"] ?? null) == 17)) || (($context["active_tab"] ?? null) == 18)) || (($context["active_tab"] ?? null) == 19)) || (($context["active_tab"] ?? null) == 20)))) {
            echo " ";
            echo "class=\"active\"";
            echo " ";
        }
        echo ">
        <a href=\"";
        // line 6
        echo ($context["sellers_list"] ?? null);
        echo "\">";
        echo ($context["text_kbmp_sellers_list_menu"] ?? null);
        echo "</a>
    </li>
    <li ";
        // line 8
        if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && ((((((((((($context["active_tab"] ?? null) == 21) || (($context["active_tab"] ?? null) == 22)) || (($context["active_tab"] ?? null) == 23)) || (($context["active_tab"] ?? null) == 24)) || (($context["active_tab"] ?? null) == 25)) || (($context["active_tab"] ?? null) == 26)) || (($context["active_tab"] ?? null) == 27)) || (($context["active_tab"] ?? null) == 28)) || (($context["active_tab"] ?? null) == 29)) || (($context["active_tab"] ?? null) == 30)))) {
            echo " ";
            echo "class=\"active\"";
            echo " ";
        }
        echo ">
        <a href=\"";
        // line 9
        echo ($context["products_list"] ?? null);
        echo "\">";
        echo ($context["text_kbmp_sellers_products_products"] ?? null);
        echo "</a>
    </li>
    <li ";
        // line 11
        if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && ((((((((((($context["active_tab"] ?? null) == 31) || (($context["active_tab"] ?? null) == 32)) || (($context["active_tab"] ?? null) == 33)) || (($context["active_tab"] ?? null) == 34)) || (($context["active_tab"] ?? null) == 35)) || (($context["active_tab"] ?? null) == 36)) || (($context["active_tab"] ?? null) == 37)) || (($context["active_tab"] ?? null) == 38)) || (($context["active_tab"] ?? null) == 39)) || (($context["active_tab"] ?? null) == 40)))) {
            echo " ";
            echo "class=\"active\"";
            echo " ";
        }
        echo ">
        <a href=\"";
        // line 12
        echo ($context["sellers_order"] ?? null);
        echo "\">";
        echo ($context["text_kbmp_sellers_orders_menu"] ?? null);
        echo "</a>
    </li>
    <li ";
        // line 14
        if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && ((((((((((($context["active_tab"] ?? null) == 41) || (($context["active_tab"] ?? null) == 42)) || (($context["active_tab"] ?? null) == 43)) || (($context["active_tab"] ?? null) == 44)) || (($context["active_tab"] ?? null) == 45)) || (($context["active_tab"] ?? null) == 46)) || (($context["active_tab"] ?? null) == 47)) || (($context["active_tab"] ?? null) == 48)) || (($context["active_tab"] ?? null) == 49)) || (($context["active_tab"] ?? null) == 50)))) {
            echo " ";
            echo "class=\"active\"";
            echo " ";
        }
        echo ">
        <a href=\"";
        // line 15
        echo ($context["admin_commission"] ?? null);
        echo "\">";
        echo ($context["text_kbmp_commission_menu"] ?? null);
        echo "</a>
    </li>
    <li ";
        // line 17
        if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 51))) {
            echo " ";
            echo "class=\"active\"";
            echo " ";
        }
        echo ">
        <a href=\"";
        // line 18
        echo ($context["support"] ?? null);
        echo "\">";
        echo ($context["text_support"] ?? null);
        echo "</a>
    </li>

</ul>

";
        // line 23
        if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (((((((($context["active_tab"] ?? null) == 1) || (($context["active_tab"] ?? null) == 2)) || (($context["active_tab"] ?? null) == 3)) || (($context["active_tab"] ?? null) == 4)) || (($context["active_tab"] ?? null) == 5)) || (($context["active_tab"] ?? null) == 6)) ||  !(isset($context["active_tab"]) || array_key_exists("active_tab", $context))))) {
            // line 24
            echo "<ul class=\"nav nav-tabs\">
    <li ";
            // line 25
            if ((((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 1)) ||  !(isset($context["active_tab"]) || array_key_exists("active_tab", $context)))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 26
            echo ($context["general_settings"] ?? null);
            echo "\">";
            echo ($context["text_kbmp_general_settings"] ?? null);
            echo "</a>
    </li>
    <li ";
            // line 28
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 4))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 29
            echo ($context["kbmp_order_settings"] ?? null);
            echo "\">";
            echo ($context["text_kbmp_order_settings"] ?? null);
            echo "</a>
    </li>
    <li ";
            // line 31
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 2))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 32
            echo ($context["paypal_payout"] ?? null);
            echo "\">";
            echo ($context["text_paypal_payout"] ?? null);
            echo "</a>
    </li>
    <li ";
            // line 34
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 3))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 35
            echo ($context["email_templates"] ?? null);
            echo "\">";
            echo ($context["text_email_templates"] ?? null);
            echo "</a>
    </li>
</ul>
";
        }
        // line 39
        echo "

";
        // line 41
        if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && ((((((((((($context["active_tab"] ?? null) == 11) || (($context["active_tab"] ?? null) == 12)) || (($context["active_tab"] ?? null) == 13)) || (($context["active_tab"] ?? null) == 14)) || (($context["active_tab"] ?? null) == 15)) || (($context["active_tab"] ?? null) == 16)) || (($context["active_tab"] ?? null) == 17)) || (($context["active_tab"] ?? null) == 18)) || (($context["active_tab"] ?? null) == 19)) || (($context["active_tab"] ?? null) == 20)))) {
            // line 42
            echo "<ul class=\"nav nav-tabs\">
    <li ";
            // line 43
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 11))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 44
            echo ($context["sellers_list"] ?? null);
            echo "\">";
            echo ($context["text_sellers_list"] ?? null);
            echo "</a>
    </li>
    <li ";
            // line 46
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 12))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 47
            echo ($context["sellers_account_approval_list"] ?? null);
            echo "\">";
            echo ($context["text_seller_account_approval_list"] ?? null);
            echo "</a>
    </li>
    <li ";
            // line 49
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 18))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 50
            echo ($context["custom_fields"] ?? null);
            echo "\">";
            echo ($context["text_custom_fields"] ?? null);
            echo "</a>
    </li>
    <li ";
            // line 52
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 17))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 53
            echo ($context["seller_category"] ?? null);
            echo "\">";
            echo ($context["text_seller_catgory_commision"] ?? null);
            echo "</a>
    </li>
    <li ";
            // line 55
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 13))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 56
            echo ($context["sellers_review"] ?? null);
            echo "\">";
            echo ($context["text_seller_reviews"] ?? null);
            echo "</a>
    </li>
    <li ";
            // line 58
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 14))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 59
            echo ($context["sellers_review_approval_list"] ?? null);
            echo "\">";
            echo ($context["text_reviews_approval_list"] ?? null);
            echo "</a>
    </li>
    <li ";
            // line 61
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 15))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 62
            echo ($context["sellers_shipping"] ?? null);
            echo "\">";
            echo ($context["text_seller_shippings"] ?? null);
            echo "</a>
    </li>
    <li ";
            // line 64
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 16))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 65
            echo ($context["sellers_category_request"] ?? null);
            echo "\">";
            echo ($context["text_seller_category_request_list"] ?? null);
            echo "</a>
    </li>
</ul>
";
        }
        // line 69
        echo "
";
        // line 70
        if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && ((((((((((($context["active_tab"] ?? null) == 21) || (($context["active_tab"] ?? null) == 22)) || (($context["active_tab"] ?? null) == 23)) || (($context["active_tab"] ?? null) == 24)) || (($context["active_tab"] ?? null) == 25)) || (($context["active_tab"] ?? null) == 26)) || (($context["active_tab"] ?? null) == 27)) || (($context["active_tab"] ?? null) == 28)) || (($context["active_tab"] ?? null) == 29)) || (($context["active_tab"] ?? null) == 30)))) {
            // line 71
            echo "<ul class=\"nav nav-tabs\">
    <li ";
            // line 72
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 21))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 73
            echo ($context["products_list"] ?? null);
            echo "\">";
            echo ($context["text_seller_products"] ?? null);
            echo "</a>
    </li>
    <li ";
            // line 75
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 22))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 76
            echo ($context["products_approval_list"] ?? null);
            echo "\">";
            echo ($context["text_product_approval_list"] ?? null);
            echo "</a>
    </li>
    <li ";
            // line 78
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 23))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 79
            echo ($context["products_review"] ?? null);
            echo "\">";
            echo ($context["text_product_reviews"] ?? null);
            echo "</a>
    </li>
</ul>
";
        }
        // line 83
        echo "
";
        // line 84
        if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && ((((((((((($context["active_tab"] ?? null) == 31) || (($context["active_tab"] ?? null) == 32)) || (($context["active_tab"] ?? null) == 33)) || (($context["active_tab"] ?? null) == 34)) || (($context["active_tab"] ?? null) == 35)) || (($context["active_tab"] ?? null) == 36)) || (($context["active_tab"] ?? null) == 37)) || (($context["active_tab"] ?? null) == 38)) || (($context["active_tab"] ?? null) == 39)) || (($context["active_tab"] ?? null) == 40)))) {
            // line 85
            echo "<ul class=\"nav nav-tabs\">
    <li ";
            // line 86
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 31))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 87
            echo ($context["sellers_order"] ?? null);
            echo "\">";
            echo ($context["text_seller_orders"] ?? null);
            echo "</a>
    </li>
    <li ";
            // line 89
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 32))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 90
            echo ($context["admin_order"] ?? null);
            echo "\">";
            echo ($context["text_admin_orders"] ?? null);
            echo "</a>
    </li>
</ul>
";
        }
        // line 94
        echo "
";
        // line 95
        if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && ((((((((((($context["active_tab"] ?? null) == 41) || (($context["active_tab"] ?? null) == 42)) || (($context["active_tab"] ?? null) == 43)) || (($context["active_tab"] ?? null) == 44)) || (($context["active_tab"] ?? null) == 45)) || (($context["active_tab"] ?? null) == 46)) || (($context["active_tab"] ?? null) == 47)) || (($context["active_tab"] ?? null) == 48)) || (($context["active_tab"] ?? null) == 49)) || (($context["active_tab"] ?? null) == 50)))) {
            // line 96
            echo "<ul class=\"nav nav-tabs\">
    <li ";
            // line 97
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 41))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 98
            echo ($context["admin_commission"] ?? null);
            echo "\">";
            echo ($context["text_admin_commissions"] ?? null);
            echo "</a>
    </li>
    <li ";
            // line 100
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 43))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 101
            echo ($context["sellers_balance"] ?? null);
            echo "\">";
            echo ($context["text_seller_transactions"] ?? null);
            echo "</a>
    </li>
    <li ";
            // line 103
            if (((isset($context["active_tab"]) || array_key_exists("active_tab", $context)) && (($context["active_tab"] ?? null) == 44))) {
                echo " ";
                echo "class=\"active\"";
                echo " ";
            }
            echo ">
        <a href=\"";
            // line 104
            echo ($context["seller_payout_request"] ?? null);
            echo "\">";
            echo ($context["text_seller_payout_request"] ?? null);
            echo "</a>
    </li>
</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "kbmp_marketplace/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  472 => 104,  464 => 103,  457 => 101,  449 => 100,  442 => 98,  434 => 97,  431 => 96,  429 => 95,  426 => 94,  417 => 90,  409 => 89,  402 => 87,  394 => 86,  391 => 85,  389 => 84,  386 => 83,  377 => 79,  369 => 78,  362 => 76,  354 => 75,  347 => 73,  339 => 72,  336 => 71,  334 => 70,  331 => 69,  322 => 65,  314 => 64,  307 => 62,  299 => 61,  292 => 59,  284 => 58,  277 => 56,  269 => 55,  262 => 53,  254 => 52,  247 => 50,  239 => 49,  232 => 47,  224 => 46,  217 => 44,  209 => 43,  206 => 42,  204 => 41,  200 => 39,  191 => 35,  183 => 34,  176 => 32,  168 => 31,  161 => 29,  153 => 28,  146 => 26,  138 => 25,  135 => 24,  133 => 23,  123 => 18,  115 => 17,  108 => 15,  100 => 14,  93 => 12,  85 => 11,  78 => 9,  70 => 8,  63 => 6,  55 => 5,  48 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"nav nav-tabs\">
    <li {% if (active_tab is defined and (active_tab == 1 or active_tab == 2 or active_tab == 3 or active_tab == 4 or active_tab == 5 or active_tab == 6 or active_tab is not defined)) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{general_settings}}\">{{text_settings}}</a>
    </li>
    <li {% if (active_tab is defined and (active_tab == 11 or active_tab == 12 or active_tab == 13 or active_tab == 14 or active_tab == 15 or active_tab == 16 or active_tab == 17 or active_tab == 18 or active_tab == 19 or active_tab == 20)) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{sellers_list}}\">{{text_kbmp_sellers_list_menu}}</a>
    </li>
    <li {% if (active_tab is defined and (active_tab == 21 or active_tab == 22 or active_tab == 23 or active_tab == 24 or active_tab == 25 or active_tab == 26 or active_tab == 27 or active_tab == 28 or active_tab == 29 or active_tab == 30)) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{products_list}}\">{{text_kbmp_sellers_products_products}}</a>
    </li>
    <li {% if (active_tab is defined and (active_tab == 31 or active_tab == 32 or active_tab == 33 or active_tab == 34 or active_tab == 35 or active_tab == 36 or active_tab == 37 or active_tab == 38 or active_tab == 39 or active_tab == 40)) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{sellers_order}}\">{{text_kbmp_sellers_orders_menu}}</a>
    </li>
    <li {% if (active_tab is defined and (active_tab == 41 or active_tab == 42 or active_tab == 43 or active_tab == 44 or active_tab == 45 or active_tab == 46 or active_tab == 47 or active_tab == 48 or active_tab == 49 or active_tab == 50)) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{admin_commission}}\">{{text_kbmp_commission_menu}}</a>
    </li>
    <li {% if (active_tab is defined and (active_tab == 51))%} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{support}}\">{{text_support}}</a>
    </li>

</ul>

{% if (active_tab is defined and (active_tab == 1 or active_tab == 2 or active_tab == 3 or active_tab == 4 or active_tab == 5 or active_tab == 6 or active_tab is not defined)) %}
<ul class=\"nav nav-tabs\">
    <li {% if (active_tab is defined and active_tab == 1 or active_tab is not defined) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{general_settings}}\">{{text_kbmp_general_settings}}</a>
    </li>
    <li {% if (active_tab is defined and active_tab == 4) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{kbmp_order_settings}}\">{{text_kbmp_order_settings}}</a>
    </li>
    <li {% if (active_tab is defined and active_tab == 2) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{paypal_payout}}\">{{text_paypal_payout}}</a>
    </li>
    <li {% if (active_tab is defined and active_tab == 3) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{email_templates}}\">{{text_email_templates}}</a>
    </li>
</ul>
{% endif %}


{% if (active_tab is defined and (active_tab == 11 or active_tab == 12 or active_tab == 13 or active_tab == 14 or active_tab == 15 or active_tab == 16 or active_tab == 17 or active_tab == 18 or active_tab == 19 or active_tab == 20)) %}
<ul class=\"nav nav-tabs\">
    <li {% if (active_tab is defined and active_tab == 11) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{sellers_list}}\">{{text_sellers_list}}</a>
    </li>
    <li {% if (active_tab is defined and active_tab == 12) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{sellers_account_approval_list}}\">{{text_seller_account_approval_list}}</a>
    </li>
    <li {% if (active_tab is defined and active_tab == 18) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{custom_fields}}\">{{text_custom_fields}}</a>
    </li>
    <li {% if (active_tab is defined and active_tab == 17) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{seller_category}}\">{{text_seller_catgory_commision}}</a>
    </li>
    <li {% if (active_tab is defined and active_tab == 13) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{sellers_review}}\">{{text_seller_reviews}}</a>
    </li>
    <li {% if (active_tab is defined and active_tab == 14) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{sellers_review_approval_list}}\">{{text_reviews_approval_list}}</a>
    </li>
    <li {% if (active_tab is defined and active_tab == 15) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{sellers_shipping}}\">{{text_seller_shippings}}</a>
    </li>
    <li {% if (active_tab is defined and active_tab == 16) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{sellers_category_request}}\">{{text_seller_category_request_list}}</a>
    </li>
</ul>
{% endif %}

{% if (active_tab is defined and (active_tab == 21 or active_tab == 22 or active_tab == 23 or active_tab == 24 or active_tab == 25 or active_tab == 26 or active_tab == 27 or active_tab == 28 or active_tab == 29 or active_tab == 30)) %}
<ul class=\"nav nav-tabs\">
    <li {% if (active_tab is defined and active_tab == 21) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{products_list}}\">{{text_seller_products}}</a>
    </li>
    <li {% if (active_tab is defined and active_tab == 22) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{products_approval_list}}\">{{text_product_approval_list}}</a>
    </li>
    <li {% if (active_tab is defined and active_tab == 23) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{products_review}}\">{{text_product_reviews}}</a>
    </li>
</ul>
{% endif %}

{% if (active_tab is defined and (active_tab == 31 or active_tab == 32 or active_tab == 33 or active_tab == 34 or active_tab == 35 or active_tab == 36 or active_tab == 37 or active_tab == 38 or active_tab == 39 or active_tab == 40)) %}
<ul class=\"nav nav-tabs\">
    <li {% if (active_tab is defined and active_tab == 31) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{sellers_order}}\">{{text_seller_orders}}</a>
    </li>
    <li {% if (active_tab is defined and active_tab == 32) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{admin_order}}\">{{text_admin_orders}}</a>
    </li>
</ul>
{% endif %}

{% if (active_tab is defined and (active_tab == 41 or active_tab == 42 or active_tab == 43 or active_tab == 44 or active_tab == 45 or active_tab == 46 or active_tab == 47 or active_tab == 48 or active_tab == 49 or active_tab == 50)) %}
<ul class=\"nav nav-tabs\">
    <li {% if (active_tab is defined and active_tab == 41) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{admin_commission}}\">{{text_admin_commissions}}</a>
    </li>
    <li {% if (active_tab is defined and active_tab == 43) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{sellers_balance}}\">{{text_seller_transactions}}</a>
    </li>
    <li {% if (active_tab is defined and active_tab == 44) %} {{ 'class=\"active\"' }} {% endif %}>
        <a href=\"{{seller_payout_request}}\">{{text_seller_payout_request}}</a>
    </li>
</ul>
{% endif %}", "kbmp_marketplace/menu.twig", "");
    }
}
