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

/* default/template/checkout/cart.twig */
class __TwigTemplate_82d4ee03b2ff3d56cb99dbafa2f28dcce8b69e04437384e49bbc0b303908c2f1 extends \Twig\Template
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
<div id=\"checkout-cart\" class=\"page\">
\t<div class=\"container\">
\t  <ul class=\"breadcrumb\">
\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t  </ul>
\t  ";
        // line 9
        if (($context["attention"] ?? null)) {
            // line 10
            echo "\t  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t  </div>
\t  ";
        }
        // line 14
        echo "\t  ";
        if (($context["success"] ?? null)) {
            // line 15
            echo "\t  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t  </div>
\t  ";
        }
        // line 19
        echo "<!--
\t  ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "\t  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t  </div>
\t  ";
        }
        // line 25
        echo "-->
\t</div>
\t
\t<form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"page__title\">";
        // line 30
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<div class=\"cart\">
\t\t\t\t\t<div class=\"cart__wrap\">
\t\t\t\t\t\t<div class=\"cart__head\">
\t\t\t\t\t\t\t<div class=\"cart__head-wrap\">
\t\t\t\t\t\t\t\t<div class=\"cart__head-thumb\"></div>
\t\t\t\t\t\t\t\t<div class=\"cart__head-content\">
\t\t\t\t\t\t\t\t\t<div class=\"cart__head-meta cart__head-text\">";
        // line 37
        echo ($context["column_name"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart__head-price cart__head-text\">";
        // line 38
        echo ($context["column_price"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart__head-count cart__head-text\">";
        // line 39
        echo ($context["column_quantity"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart__head-total cart__head-text\">";
        // line 40
        echo ($context["column_total"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cart__head-bottom\">
\t\t\t\t\t\t\t\t<div class=\"cart__head-quantity\"></div>
\t\t\t\t\t\t\t\t<div class=\"cart__head-icons cart__head-text\">";
        // line 45
        echo ($context["column_remove"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cart__body\">
\t\t\t\t\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 50
            echo "\t\t\t\t\t\t\t\t<div class=\"cart__body-item\" data-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 50);
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"cart__body-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-thumb\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 53
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 53)) {
                // line 54
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 54);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 54);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54);
                echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 60);
            echo "\" class=\"cart__body-name\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 60);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-sku\">
\t\t\t\t\t\t\t\t\t\t\t\t\tАртикул: ";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 63);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-price\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 67);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-count\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body_count-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cart__body_count-minus cart__body_count-btn\">-</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body_count-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity[";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 73);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 73);
            echo "\" size=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cart__body_count-plus cart__body_count-btn\">+</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-total\" data-price=\"";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 78);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 79);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart__body-bottom\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-quantity\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-icons\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
            // line 86
            echo ($context["button_remove"] ?? null);
            echo "\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 86);
            echo "');\"  class=\"wishlist__add-to-cart_btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M9.99994 0C10.5381 0 11.0784 0.043936 11.5411 0.132711C11.7725 0.177091 11.9967 0.23496 12.1981 0.310315C12.3822 0.37922 12.6253 0.49085 12.8286 0.680595C13.2325 1.05736 13.2544 1.69014 12.8776 2.09396C12.5187 2.47869 11.9273 2.51678 11.523 2.19369C11.5164 2.1909 11.5079 2.18747 11.4972 2.1835C11.4305 2.15851 11.3211 2.12697 11.1644 2.0969C10.8509 2.03677 10.4402 2 9.99994 2C9.55973 2 9.14896 2.03677 8.83554 2.0969C8.67879 2.12697 8.56943 2.15851 8.50266 2.1835C8.49204 2.18747 8.48351 2.1909 8.47689 2.19369C8.07257 2.51678 7.48123 2.47869 7.12227 2.09396C6.74551 1.69015 6.76744 1.05736 7.17125 0.680595C7.37462 0.490851 7.61765 0.37922 7.80181 0.310315C8.00321 0.23496 8.22739 0.177091 8.45875 0.132711C8.92152 0.0439361 9.46179 0 9.99994 0ZM0 4.3335H20V7.66683C19.7936 7.66683 19.6905 7.66683 19.6035 7.67444C18.6366 7.75903 17.87 8.52562 17.7854 9.49252C17.7778 9.57951 17.7778 9.68269 17.7778 9.88905V15.0002C17.7778 17.8286 17.7778 19.2428 16.8991 20.1215C16.0204 21.0002 14.6062 21.0002 11.7778 21.0002H8.22223C5.3938 21.0002 3.97958 21.0002 3.1009 20.1215C2.22222 19.2428 2.22222 17.8286 2.22222 15.0002V9.88905C2.22222 9.68269 2.22222 9.57951 2.21461 9.49252C2.13002 8.52562 1.36343 7.75903 0.396533 7.67444C0.309544 7.66683 0.206363 7.66683 0 7.66683V4.3335ZM7.22217 8.88916C7.77445 8.88916 8.22217 9.33688 8.22217 9.88916V15.4447C8.22217 15.997 7.77445 16.4447 7.22217 16.4447C6.66988 16.4447 6.22217 15.997 6.22217 15.4447V9.88916C6.22217 9.33688 6.66988 8.88916 7.22217 8.88916ZM12.7777 8.88916C13.33 8.88916 13.7777 9.33688 13.7777 9.88916V15.4447C13.7777 15.997 13.33 16.4447 12.7777 16.4447C12.2254 16.4447 11.7777 15.997 11.7777 15.4447V9.88916C11.7777 9.33688 12.2254 8.88916 12.7777 8.88916Z\" fill=\"#303030\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"cart__tools-wrap\">
\t\t\t\t\t<div class=\"cart__tools\">
\t\t\t\t\t\t<div class=\"cart__tools-sum\">
\t\t\t\t\t\t\t<div class=\"cart__tools_sum-item\">
\t\t\t\t\t\t\t\t<span class=\"cart__tools-title\">";
        // line 102
        echo twig_get_attribute($this->env, $this->source, ($context["total"] ?? null), "title", [], "any", false, false, false, 102);
        echo "</span>
\t\t\t\t\t\t\t\t<span class=\"cart__tools-value\">";
        // line 103
        echo twig_get_attribute($this->env, $this->source, ($context["total"] ?? null), "text", [], "any", false, false, false, 103);
        echo "</span>
\t\t\t\t\t\t\t</div>
<!--
\t\t\t\t\t\t\t ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 107
            echo "            <tr>
              <td class=\"text-right\"><strong>";
            // line 108
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 108);
            echo ":</strong></td>
              <td class=\"text-right\">";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 109);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cart__tools-btns\">
\t\t\t\t\t\t\t<a href=\"";
        // line 115
        echo ($context["continue"] ?? null);
        echo "\" class=\"cart__tools_btns-next\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 116
        echo ($context["checkout"] ?? null);
        echo "\" class=\"cart__tools_btns-checkout\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>
</div>
<script type=\"text/javascript\">
\t\$(document).ready(function(){
\t function XFormatPrice(_number) 
\t{
\t\tvar decimal=0;
\t\tvar separator=' ';
\t\tvar decpoint = '.';
\t\tvar format_string = '# ₽';

\t\tvar r=parseFloat(_number)

\t\tvar exp10=Math.pow(10,decimal);// приводим к правильному множителю
\t\tr=Math.round(r*exp10)/exp10;// округляем до необходимого числа знаков после запятой

\t\trr=Number(r).toFixed(decimal).toString().split('.');

\t\tb=rr[0].replace(/(\\d{1,3}(?=(\\d{3})+(?:\\.\\d|\\b)))/g,\"\\\$1\"+separator);

\t\tr=(rr[1]?b+ decpoint +rr[1]:b);
\t\treturn format_string.replace('#', r);
\t} 
\t\t\$(\".cart__body_count-btn\").click(function(){
\t\t\tvar parentRow = \$(this).closest(\".cart__body-item\"),
\t\t\t\tpriceEl = parentRow.find(\".cart__body-total\"),
\t\t\t\tinput = parentRow.find(\".cart__body_count-input input\"),
\t\t\t\tpriceProduct = parseInt(priceEl.attr(\"data-price\").replace(/\\s+/g, '')),
\t\t\t\tinputVal = parseInt(input.val());
\t\t\tif (\$(this).hasClass(\"cart__body_count-plus\")) {
\t\t\t\tinputVal++;
\t\t\t} else {
\t\t\t\tif (inputVal > 1) inputVal--;
\t\t\t}
\t\t\tvar totalNew = XFormatPrice(priceProduct * inputVal);
\t\t\tpriceEl.text(totalNew);
\t\t\tinput.val(inputVal);
\t\t\tvar key = parentRow.attr(\"data-id\");
\t\t\tcart.update(key, inputVal);
\t\t\t
\t\t\tvar sumPrice = 0;
\t\t\t\$(\".cart__body-item\").each(function(){
\t\t\t\tvar currPriceText = \$(this).find(\".cart__body-total\").text().replace(/\\s+/g, ''),
\t\t\t\t\tcurrPrice = parseInt(currPriceText);
\t\t\t\tsumPrice = sumPrice + currPrice;
\t\t\t});
\t\t\t
\t\t\t\$(\".cart__tools-value\").text(XFormatPrice(sumPrice));
\t\t});
\t\t\$(\".cart__body_count-input input\").change(function(){
\t\t\tif (\$(this).val() == \"\") {
\t\t\t\t\$(this).val(1);
\t\t\t\tvar parentRow = \$(this).closest(\".cart__body-item\"),
\t\t\t\t\tpriceEl = parentRow.find(\".cart__body-total\"),
\t\t\t\t\tinput = \$(this),
\t\t\t\t\tpriceProduct = parseInt(priceEl.attr(\"data-price\").replace(/\\s+/g, '')),
\t\t\t\t\tinputVal = parseInt(input.val());
\t\t\t\tvar totalNew = XFormatPrice(priceProduct * inputVal);
\t\t\t\tpriceEl.text(totalNew);
\t\t\t\tvar key = parentRow.attr(\"data-id\");
\t\t\t\tcart.update(key, inputVal);
\t\t\t\tvar sumPrice = 0;
\t\t\t\t\$(\".cart__body-item\").each(function(){
\t\t\t\t\tvar currPriceText = \$(this).find(\".cart__body-total\").text().replace(/\\s+/g, ''),
\t\t\t\t\t\tcurrPrice = parseInt(currPriceText);
\t\t\t\t\tsumPrice = sumPrice + currPrice;
\t\t\t\t});
\t\t\t\t\$(\".cart__tools-value\").text(XFormatPrice(sumPrice));
\t\t\t} else {
\t\t\t\tvar parentRow = \$(this).closest(\".cart__body-item\"),
\t\t\t\t\tpriceEl = parentRow.find(\".cart__body-total\"),
\t\t\t\t\tinput = \$(this),
\t\t\t\t\tpriceProduct = parseInt(priceEl.attr(\"data-price\").replace(/\\s+/g, '')),
\t\t\t\t\tinputVal = parseInt(input.val());
\t\t\t\tvar totalNew = XFormatPrice(priceProduct * inputVal);
\t\t\t\tpriceEl.text(totalNew);
\t\t\t\tvar key = parentRow.attr(\"data-id\");
\t\t\t\tcart.update(key, inputVal);
\t\t\t\tvar sumPrice = 0;
\t\t\t\t\$(\".cart__body-item\").each(function(){
\t\t\t\t\tvar currPriceText = \$(this).find(\".cart__body-total\").text().replace(/\\s+/g, ''),
\t\t\t\t\t\tcurrPrice = parseInt(currPriceText);
\t\t\t\t\tsumPrice = sumPrice + currPrice;
\t\t\t\t});
\t\t\t\t\$(\".cart__tools-value\").text(XFormatPrice(sumPrice));
\t\t\t}
\t\t});
\t});
</script>
";
        // line 211
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 211,  289 => 116,  283 => 115,  278 => 112,  269 => 109,  265 => 108,  262 => 107,  258 => 106,  252 => 103,  248 => 102,  239 => 95,  222 => 86,  212 => 79,  208 => 78,  198 => 73,  189 => 67,  182 => 63,  174 => 60,  168 => 56,  156 => 54,  154 => 53,  147 => 50,  143 => 49,  136 => 45,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  106 => 30,  101 => 28,  96 => 25,  88 => 21,  86 => 20,  83 => 19,  75 => 15,  72 => 14,  64 => 10,  62 => 9,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"checkout-cart\" class=\"page\">
\t<div class=\"container\">
\t  <ul class=\"breadcrumb\">
\t\t{% for breadcrumb in breadcrumbs %}
\t\t<li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
\t\t{% endfor %}
\t  </ul>
\t  {% if attention %}
\t  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> {{ attention }}
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t  </div>
\t  {% endif %}
\t  {% if success %}
\t  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t  </div>
\t  {% endif %}
<!--
\t  {% if error_warning %}
\t  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t  </div>
\t  {% endif %}
-->
\t</div>
\t
\t<form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"page__title\">{{ heading_title }}</h1>
\t\t\t<div class=\"cart\">
\t\t\t\t\t<div class=\"cart__wrap\">
\t\t\t\t\t\t<div class=\"cart__head\">
\t\t\t\t\t\t\t<div class=\"cart__head-wrap\">
\t\t\t\t\t\t\t\t<div class=\"cart__head-thumb\"></div>
\t\t\t\t\t\t\t\t<div class=\"cart__head-content\">
\t\t\t\t\t\t\t\t\t<div class=\"cart__head-meta cart__head-text\">{{ column_name }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart__head-price cart__head-text\">{{ column_price }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart__head-count cart__head-text\">{{ column_quantity }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart__head-total cart__head-text\">{{ column_total }}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cart__head-bottom\">
\t\t\t\t\t\t\t\t<div class=\"cart__head-quantity\"></div>
\t\t\t\t\t\t\t\t<div class=\"cart__head-icons cart__head-text\">{{ column_remove }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cart__body\">
\t\t\t\t\t\t\t{% for product in products %}
\t\t\t\t\t\t\t\t<div class=\"cart__body-item\" data-id=\"{{ product.cart_id }}\">
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
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-price\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ product.price }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-count\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body_count-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cart__body_count-minus cart__body_count-btn\">-</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body_count-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity[{{ product.cart_id }}]\" value=\"{{ product.quantity }}\" size=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cart__body_count-plus cart__body_count-btn\">+</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-total\" data-price=\"{{ product.price }}\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ product.total }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"cart__body-bottom\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-quantity\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cart__body-icons\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"{{ button_remove }}\" onclick=\"cart.remove('{{ product.cart_id }}');\"  class=\"wishlist__add-to-cart_btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M9.99994 0C10.5381 0 11.0784 0.043936 11.5411 0.132711C11.7725 0.177091 11.9967 0.23496 12.1981 0.310315C12.3822 0.37922 12.6253 0.49085 12.8286 0.680595C13.2325 1.05736 13.2544 1.69014 12.8776 2.09396C12.5187 2.47869 11.9273 2.51678 11.523 2.19369C11.5164 2.1909 11.5079 2.18747 11.4972 2.1835C11.4305 2.15851 11.3211 2.12697 11.1644 2.0969C10.8509 2.03677 10.4402 2 9.99994 2C9.55973 2 9.14896 2.03677 8.83554 2.0969C8.67879 2.12697 8.56943 2.15851 8.50266 2.1835C8.49204 2.18747 8.48351 2.1909 8.47689 2.19369C8.07257 2.51678 7.48123 2.47869 7.12227 2.09396C6.74551 1.69015 6.76744 1.05736 7.17125 0.680595C7.37462 0.490851 7.61765 0.37922 7.80181 0.310315C8.00321 0.23496 8.22739 0.177091 8.45875 0.132711C8.92152 0.0439361 9.46179 0 9.99994 0ZM0 4.3335H20V7.66683C19.7936 7.66683 19.6905 7.66683 19.6035 7.67444C18.6366 7.75903 17.87 8.52562 17.7854 9.49252C17.7778 9.57951 17.7778 9.68269 17.7778 9.88905V15.0002C17.7778 17.8286 17.7778 19.2428 16.8991 20.1215C16.0204 21.0002 14.6062 21.0002 11.7778 21.0002H8.22223C5.3938 21.0002 3.97958 21.0002 3.1009 20.1215C2.22222 19.2428 2.22222 17.8286 2.22222 15.0002V9.88905C2.22222 9.68269 2.22222 9.57951 2.21461 9.49252C2.13002 8.52562 1.36343 7.75903 0.396533 7.67444C0.309544 7.66683 0.206363 7.66683 0 7.66683V4.3335ZM7.22217 8.88916C7.77445 8.88916 8.22217 9.33688 8.22217 9.88916V15.4447C8.22217 15.997 7.77445 16.4447 7.22217 16.4447C6.66988 16.4447 6.22217 15.997 6.22217 15.4447V9.88916C6.22217 9.33688 6.66988 8.88916 7.22217 8.88916ZM12.7777 8.88916C13.33 8.88916 13.7777 9.33688 13.7777 9.88916V15.4447C13.7777 15.997 13.33 16.4447 12.7777 16.4447C12.2254 16.4447 11.7777 15.997 11.7777 15.4447V9.88916C11.7777 9.33688 12.2254 8.88916 12.7777 8.88916Z\" fill=\"#303030\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"cart__tools-wrap\">
\t\t\t\t\t<div class=\"cart__tools\">
\t\t\t\t\t\t<div class=\"cart__tools-sum\">
\t\t\t\t\t\t\t<div class=\"cart__tools_sum-item\">
\t\t\t\t\t\t\t\t<span class=\"cart__tools-title\">{{ total.title }}</span>
\t\t\t\t\t\t\t\t<span class=\"cart__tools-value\">{{ total.text }}</span>
\t\t\t\t\t\t\t</div>
<!--
\t\t\t\t\t\t\t {% for total in totals %}
            <tr>
              <td class=\"text-right\"><strong>{{ total.title }}:</strong></td>
              <td class=\"text-right\">{{ total.text }}</td>
            </tr>
            {% endfor %}
-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cart__tools-btns\">
\t\t\t\t\t\t\t<a href=\"{{ continue }}\" class=\"cart__tools_btns-next\">{{ button_shopping }}</a>
\t\t\t\t\t\t\t<a href=\"{{ checkout }}\" class=\"cart__tools_btns-checkout\">{{ button_checkout }}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>
</div>
<script type=\"text/javascript\">
\t\$(document).ready(function(){
\t function XFormatPrice(_number) 
\t{
\t\tvar decimal=0;
\t\tvar separator=' ';
\t\tvar decpoint = '.';
\t\tvar format_string = '# ₽';

\t\tvar r=parseFloat(_number)

\t\tvar exp10=Math.pow(10,decimal);// приводим к правильному множителю
\t\tr=Math.round(r*exp10)/exp10;// округляем до необходимого числа знаков после запятой

\t\trr=Number(r).toFixed(decimal).toString().split('.');

\t\tb=rr[0].replace(/(\\d{1,3}(?=(\\d{3})+(?:\\.\\d|\\b)))/g,\"\\\$1\"+separator);

\t\tr=(rr[1]?b+ decpoint +rr[1]:b);
\t\treturn format_string.replace('#', r);
\t} 
\t\t\$(\".cart__body_count-btn\").click(function(){
\t\t\tvar parentRow = \$(this).closest(\".cart__body-item\"),
\t\t\t\tpriceEl = parentRow.find(\".cart__body-total\"),
\t\t\t\tinput = parentRow.find(\".cart__body_count-input input\"),
\t\t\t\tpriceProduct = parseInt(priceEl.attr(\"data-price\").replace(/\\s+/g, '')),
\t\t\t\tinputVal = parseInt(input.val());
\t\t\tif (\$(this).hasClass(\"cart__body_count-plus\")) {
\t\t\t\tinputVal++;
\t\t\t} else {
\t\t\t\tif (inputVal > 1) inputVal--;
\t\t\t}
\t\t\tvar totalNew = XFormatPrice(priceProduct * inputVal);
\t\t\tpriceEl.text(totalNew);
\t\t\tinput.val(inputVal);
\t\t\tvar key = parentRow.attr(\"data-id\");
\t\t\tcart.update(key, inputVal);
\t\t\t
\t\t\tvar sumPrice = 0;
\t\t\t\$(\".cart__body-item\").each(function(){
\t\t\t\tvar currPriceText = \$(this).find(\".cart__body-total\").text().replace(/\\s+/g, ''),
\t\t\t\t\tcurrPrice = parseInt(currPriceText);
\t\t\t\tsumPrice = sumPrice + currPrice;
\t\t\t});
\t\t\t
\t\t\t\$(\".cart__tools-value\").text(XFormatPrice(sumPrice));
\t\t});
\t\t\$(\".cart__body_count-input input\").change(function(){
\t\t\tif (\$(this).val() == \"\") {
\t\t\t\t\$(this).val(1);
\t\t\t\tvar parentRow = \$(this).closest(\".cart__body-item\"),
\t\t\t\t\tpriceEl = parentRow.find(\".cart__body-total\"),
\t\t\t\t\tinput = \$(this),
\t\t\t\t\tpriceProduct = parseInt(priceEl.attr(\"data-price\").replace(/\\s+/g, '')),
\t\t\t\t\tinputVal = parseInt(input.val());
\t\t\t\tvar totalNew = XFormatPrice(priceProduct * inputVal);
\t\t\t\tpriceEl.text(totalNew);
\t\t\t\tvar key = parentRow.attr(\"data-id\");
\t\t\t\tcart.update(key, inputVal);
\t\t\t\tvar sumPrice = 0;
\t\t\t\t\$(\".cart__body-item\").each(function(){
\t\t\t\t\tvar currPriceText = \$(this).find(\".cart__body-total\").text().replace(/\\s+/g, ''),
\t\t\t\t\t\tcurrPrice = parseInt(currPriceText);
\t\t\t\t\tsumPrice = sumPrice + currPrice;
\t\t\t\t});
\t\t\t\t\$(\".cart__tools-value\").text(XFormatPrice(sumPrice));
\t\t\t} else {
\t\t\t\tvar parentRow = \$(this).closest(\".cart__body-item\"),
\t\t\t\t\tpriceEl = parentRow.find(\".cart__body-total\"),
\t\t\t\t\tinput = \$(this),
\t\t\t\t\tpriceProduct = parseInt(priceEl.attr(\"data-price\").replace(/\\s+/g, '')),
\t\t\t\t\tinputVal = parseInt(input.val());
\t\t\t\tvar totalNew = XFormatPrice(priceProduct * inputVal);
\t\t\t\tpriceEl.text(totalNew);
\t\t\t\tvar key = parentRow.attr(\"data-id\");
\t\t\t\tcart.update(key, inputVal);
\t\t\t\tvar sumPrice = 0;
\t\t\t\t\$(\".cart__body-item\").each(function(){
\t\t\t\t\tvar currPriceText = \$(this).find(\".cart__body-total\").text().replace(/\\s+/g, ''),
\t\t\t\t\t\tcurrPrice = parseInt(currPriceText);
\t\t\t\t\tsumPrice = sumPrice + currPrice;
\t\t\t\t});
\t\t\t\t\$(\".cart__tools-value\").text(XFormatPrice(sumPrice));
\t\t\t}
\t\t});
\t});
</script>
{{ footer }} ", "default/template/checkout/cart.twig", "");
    }
}
