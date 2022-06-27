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

/* default/template/account/wishlist.twig */
class __TwigTemplate_1e00cc696d019319c2a2c35bbf5e3a70bb7dc8e796ea88e2591a1e7842c159f8 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-wishlist\" class=\"page\">
\t<div class=\"container\">
\t\t<ul class=\"breadcrumb\">
\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t\t</ul>
\t\t";
        // line 9
        if (($context["success"] ?? null)) {
            // line 10
            echo "\t\t\t<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 14
        echo "\t</div>
\t
\t\t<div class=\"container\">
\t\t\t<h1 class=\"page__title\">";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t";
        // line 18
        if (($context["products"] ?? null)) {
            // line 19
            echo "\t\t\t\t<div class=\"cart wishlist\">
\t\t\t\t\t<div class=\"cart__wrap\">
\t\t\t\t\t\t<div class=\"cart__head\">
\t\t\t\t\t\t\t<div class=\"cart__head-wrap\">
\t\t\t\t\t\t\t\t<div class=\"cart__head-thumb\"></div>
\t\t\t\t\t\t\t\t<div class=\"cart__head-content\">
\t\t\t\t\t\t\t\t\t<div class=\"cart__head-meta cart__head-text\">";
            // line 25
            echo ($context["column_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart__head-count cart__head-text\">";
            // line 26
            echo ($context["column_stock"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart__head-total cart__head-text\">";
            // line 27
            echo ($context["column_price"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cart__head-bottom\">
\t\t\t\t\t\t\t\t<div class=\"cart__head-quantity\"></div>
\t\t\t\t\t\t\t\t<div class=\"cart__head-icons cart__head-text\">";
            // line 32
            echo ($context["column_action"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cart__body\">
\t\t\t\t\t\t\t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 37
                echo "\t\t\t\t\t\t\t\t<div class=\"cart__body-item\">
\t\t\t\t\t\t\t\t\t<div class=\"cart__body-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-thumb\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 40)) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 41);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 41);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 41);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 41);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 47);
                echo "\" class=\"cart__body-name\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-sku\">
\t\t\t\t\t\t\t\t\t\t\t\t\tАртикул: ";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 50);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-count\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body_count-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 55
                echo ($context["text_stock"] ?? null);
                echo " </span>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 55);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-total\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 59);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart__body-bottom\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-quantity\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-icons\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 66);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_add_cart"] ?? null);
                echo "\" class=\"wishlist__add-to-cart_btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"510px\" height=\"510px\" viewBox=\"0 0 510 510\" style=\"enable-background:new 0 0 510 510;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"shopping-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M153,408c-28.05,0-51,22.95-51,51s22.95,51,51,51s51-22.95,51-51S181.05,408,153,408z M0,0v51h51l91.8,193.8L107.1,306 c-2.55,7.65-5.1,17.85-5.1,25.5c0,28.05,22.95,51,51,51h306v-51H163.2c-2.55,0-5.1-2.55-5.1-5.1v-2.551l22.95-43.35h188.7 c20.4,0,35.7-10.2,43.35-25.5L504.9,89.25c5.1-5.1,5.1-7.65,5.1-12.75c0-15.3-10.2-25.5-25.5-25.5H107.1L84.15,0H0z M408,408 c-28.05,0-51,22.95-51,51s22.95,51,51,51s51-22.95,51-51S436.05,408,408,408z\" fill=\"#303030\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 75);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove_wish"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M9.99994 0C10.5381 0 11.0784 0.043936 11.5411 0.132711C11.7725 0.177091 11.9967 0.23496 12.1981 0.310315C12.3822 0.37922 12.6253 0.49085 12.8286 0.680595C13.2325 1.05736 13.2544 1.69014 12.8776 2.09396C12.5187 2.47869 11.9273 2.51678 11.523 2.19369C11.5164 2.1909 11.5079 2.18747 11.4972 2.1835C11.4305 2.15851 11.3211 2.12697 11.1644 2.0969C10.8509 2.03677 10.4402 2 9.99994 2C9.55973 2 9.14896 2.03677 8.83554 2.0969C8.67879 2.12697 8.56943 2.15851 8.50266 2.1835C8.49204 2.18747 8.48351 2.1909 8.47689 2.19369C8.07257 2.51678 7.48123 2.47869 7.12227 2.09396C6.74551 1.69015 6.76744 1.05736 7.17125 0.680595C7.37462 0.490851 7.61765 0.37922 7.80181 0.310315C8.00321 0.23496 8.22739 0.177091 8.45875 0.132711C8.92152 0.0439361 9.46179 0 9.99994 0ZM0 4.3335H20V7.66683C19.7936 7.66683 19.6905 7.66683 19.6035 7.67444C18.6366 7.75903 17.87 8.52562 17.7854 9.49252C17.7778 9.57951 17.7778 9.68269 17.7778 9.88905V15.0002C17.7778 17.8286 17.7778 19.2428 16.8991 20.1215C16.0204 21.0002 14.6062 21.0002 11.7778 21.0002H8.22223C5.3938 21.0002 3.97958 21.0002 3.1009 20.1215C2.22222 19.2428 2.22222 17.8286 2.22222 15.0002V9.88905C2.22222 9.68269 2.22222 9.57951 2.21461 9.49252C2.13002 8.52562 1.36343 7.75903 0.396533 7.67444C0.309544 7.66683 0.206363 7.66683 0 7.66683V4.3335ZM7.22217 8.88916C7.77445 8.88916 8.22217 9.33688 8.22217 9.88916V15.4447C8.22217 15.997 7.77445 16.4447 7.22217 16.4447C6.66988 16.4447 6.22217 15.997 6.22217 15.4447V9.88916C6.22217 9.33688 6.66988 8.88916 7.22217 8.88916ZM12.7777 8.88916C13.33 8.88916 13.7777 9.33688 13.7777 9.88916V15.4447C13.7777 15.997 13.33 16.4447 12.7777 16.4447C12.2254 16.4447 11.7777 15.997 11.7777 15.4447V9.88916C11.7777 9.33688 12.2254 8.88916 12.7777 8.88916Z\" fill=\"#303030\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 88
            echo "\t\t\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t";
        }
        // line 90
        echo "\t</div>
</div>
";
        // line 92
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 92,  221 => 90,  215 => 88,  209 => 84,  192 => 75,  178 => 66,  168 => 59,  159 => 55,  151 => 50,  143 => 47,  137 => 43,  125 => 41,  123 => 40,  118 => 37,  114 => 36,  107 => 32,  99 => 27,  95 => 26,  91 => 25,  83 => 19,  81 => 18,  77 => 17,  72 => 14,  64 => 10,  62 => 9,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-wishlist\" class=\"page\">
\t<div class=\"container\">
\t\t<ul class=\"breadcrumb\">
\t\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t\t<li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
\t\t\t{% endfor %}
\t\t</ul>
\t\t{% if success %}
\t\t\t<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t{% endif %}
\t</div>
\t
\t\t<div class=\"container\">
\t\t\t<h1 class=\"page__title\">{{ heading_title }}</h1>
\t\t\t{% if products %}
\t\t\t\t<div class=\"cart wishlist\">
\t\t\t\t\t<div class=\"cart__wrap\">
\t\t\t\t\t\t<div class=\"cart__head\">
\t\t\t\t\t\t\t<div class=\"cart__head-wrap\">
\t\t\t\t\t\t\t\t<div class=\"cart__head-thumb\"></div>
\t\t\t\t\t\t\t\t<div class=\"cart__head-content\">
\t\t\t\t\t\t\t\t\t<div class=\"cart__head-meta cart__head-text\">{{ column_name }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart__head-count cart__head-text\">{{ column_stock }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart__head-total cart__head-text\">{{ column_price }}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cart__head-bottom\">
\t\t\t\t\t\t\t\t<div class=\"cart__head-quantity\"></div>
\t\t\t\t\t\t\t\t<div class=\"cart__head-icons cart__head-text\">{{ column_action }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cart__body\">
\t\t\t\t\t\t\t{% for product in products %}
\t\t\t\t\t\t\t\t<div class=\"cart__body-item\">
\t\t\t\t\t\t\t\t\t<div class=\"cart__body-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-thumb\">
\t\t\t\t\t\t\t\t\t\t\t{% if product.thumb %}
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" /></a>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ product.href }}\" class=\"cart__body-name\">{{ product.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-sku\">
\t\t\t\t\t\t\t\t\t\t\t\t\tАртикул: {{ product.model }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-count\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body_count-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ text_stock }} </span>{{ product.quantity }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-total\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ product.price }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart__body-bottom\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-quantity\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-icons\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.add('{{ product.product_id }}');\" data-toggle=\"tooltip\" title=\"{{ button_add_cart }}\" class=\"wishlist__add-to-cart_btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"510px\" height=\"510px\" viewBox=\"0 0 510 510\" style=\"enable-background:new 0 0 510 510;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"shopping-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M153,408c-28.05,0-51,22.95-51,51s22.95,51,51,51s51-22.95,51-51S181.05,408,153,408z M0,0v51h51l91.8,193.8L107.1,306 c-2.55,7.65-5.1,17.85-5.1,25.5c0,28.05,22.95,51,51,51h306v-51H163.2c-2.55,0-5.1-2.55-5.1-5.1v-2.551l22.95-43.35h188.7 c20.4,0,35.7-10.2,43.35-25.5L504.9,89.25c5.1-5.1,5.1-7.65,5.1-12.75c0-15.3-10.2-25.5-25.5-25.5H107.1L84.15,0H0z M408,408 c-28.05,0-51,22.95-51,51s22.95,51,51,51s51-22.95,51-51S436.05,408,408,408z\" fill=\"#303030\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ product.remove }}\" data-toggle=\"tooltip\" title=\"{{ button_remove_wish }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M9.99994 0C10.5381 0 11.0784 0.043936 11.5411 0.132711C11.7725 0.177091 11.9967 0.23496 12.1981 0.310315C12.3822 0.37922 12.6253 0.49085 12.8286 0.680595C13.2325 1.05736 13.2544 1.69014 12.8776 2.09396C12.5187 2.47869 11.9273 2.51678 11.523 2.19369C11.5164 2.1909 11.5079 2.18747 11.4972 2.1835C11.4305 2.15851 11.3211 2.12697 11.1644 2.0969C10.8509 2.03677 10.4402 2 9.99994 2C9.55973 2 9.14896 2.03677 8.83554 2.0969C8.67879 2.12697 8.56943 2.15851 8.50266 2.1835C8.49204 2.18747 8.48351 2.1909 8.47689 2.19369C8.07257 2.51678 7.48123 2.47869 7.12227 2.09396C6.74551 1.69015 6.76744 1.05736 7.17125 0.680595C7.37462 0.490851 7.61765 0.37922 7.80181 0.310315C8.00321 0.23496 8.22739 0.177091 8.45875 0.132711C8.92152 0.0439361 9.46179 0 9.99994 0ZM0 4.3335H20V7.66683C19.7936 7.66683 19.6905 7.66683 19.6035 7.67444C18.6366 7.75903 17.87 8.52562 17.7854 9.49252C17.7778 9.57951 17.7778 9.68269 17.7778 9.88905V15.0002C17.7778 17.8286 17.7778 19.2428 16.8991 20.1215C16.0204 21.0002 14.6062 21.0002 11.7778 21.0002H8.22223C5.3938 21.0002 3.97958 21.0002 3.1009 20.1215C2.22222 19.2428 2.22222 17.8286 2.22222 15.0002V9.88905C2.22222 9.68269 2.22222 9.57951 2.21461 9.49252C2.13002 8.52562 1.36343 7.75903 0.396533 7.67444C0.309544 7.66683 0.206363 7.66683 0 7.66683V4.3335ZM7.22217 8.88916C7.77445 8.88916 8.22217 9.33688 8.22217 9.88916V15.4447C8.22217 15.997 7.77445 16.4447 7.22217 16.4447C6.66988 16.4447 6.22217 15.997 6.22217 15.4447V9.88916C6.22217 9.33688 6.66988 8.88916 7.22217 8.88916ZM12.7777 8.88916C13.33 8.88916 13.7777 9.33688 13.7777 9.88916V15.4447C13.7777 15.997 13.33 16.4447 12.7777 16.4447C12.2254 16.4447 11.7777 15.997 11.7777 15.4447V9.88916C11.7777 9.33688 12.2254 8.88916 12.7777 8.88916Z\" fill=\"#303030\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<p>{{ text_empty }}</p>
\t\t\t{% endif %}
\t</div>
</div>
{{ footer }}", "default/template/account/wishlist.twig", "");
    }
}
