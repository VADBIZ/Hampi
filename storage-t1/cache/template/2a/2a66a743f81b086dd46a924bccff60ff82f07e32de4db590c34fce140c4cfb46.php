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

/* default/template/product/category.twig */
class __TwigTemplate_751eccc0d3339395c1421aa627e9ac631ebdd2cbf6e023c2a58b105382936d93 extends \Twig\Template
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
<div id=\"product-category\" class=\"container\">
\t<ul class=\"breadcrumb\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t</ul>
\t<h1 class=\"category__title\">";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t<div class=\"category__wrap\">
\t\t<!-- OCFilter Start -->
      ";
        // line 11
        if (($context["ocfilter_description_top"] ?? null)) {
            // line 12
            echo "      <div class=\"ocf-description ocf-description-top\">";
            echo ($context["ocfilter_description_top"] ?? null);
            echo "</div>
      ";
        }
        // line 14
        echo "      
      ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["ocfilter_pages"] ?? null), "top", [], "any", false, false, false, 15)) {
            // line 16
            echo "      <nav class=\"ocf-page-list-top\">  
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ocfilter_pages"] ?? null), "top", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["ocfilter_page_group"]) {
                // line 18
                echo "        <div class=\"ocf-page-group\">
          ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["ocfilter_page_group"], "name", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "          <div class=\"ocf-page-group-name\">";
                    echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page_group"], "name", [], "any", false, false, false, 20);
                    echo "</div>
          ";
                }
                // line 22
                echo "          <ul class=\"ocf-category-page-list\">
            ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ocfilter_page_group"], "pages", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["ocfilter_page"]) {
                    echo "           
            ";
                    // line 24
                    if (twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "selected", [], "any", false, false, false, 24)) {
                        // line 25
                        echo "            <li class=\"ocf-page-selected\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "href", [], "any", false, false, false, 25);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "name", [], "any", false, false, false, 25);
                        echo "</a></li>
            ";
                    } else {
                        // line 27
                        echo "            <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "href", [], "any", false, false, false, 27);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "name", [], "any", false, false, false, 27);
                        echo "</a></li>
            ";
                    }
                    // line 28
                    echo "            
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocfilter_page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "          </ul>         
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocfilter_page_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "      </nav>
      ";
        }
        // line 34
        echo " 
      
      ";
        // line 36
        if (($context["products"] ?? null)) {
            // line 37
            echo "      <!-- OCFilter Start -->      
      ";
            // line 38
            if (($context["ocfilter_mobile_button"] ?? null)) {
                // line 39
                echo "      <div class=\"ocf-btn-mobile-static ocf-mobile\">
        <button type=\"button\" class=\"ocf-btn ocf-btn-default\" data-ocf=\"mobile\"><span class=\"ocf-btn-name\">";
                // line 40
                echo ($context["button_ocfilter_mobile"] ?? null);
                echo "</span> <i class=\"ocf-icon ocf-icon-16 ocf-brand ocf-sliders\"></i></button>
      </div>
      ";
            }
            // line 42
            echo "   
      <!-- /OCFilter End -->
      <!-- /OCFilter End -->
\t\t\t<div class=\"category__side\">";
            // line 45
            echo ($context["column_left"] ?? null);
            echo "</div>
\t\t";
        }
        // line 47
        echo "\t\t<div class=\"category__main\">
\t\t\t";
        // line 48
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t
\t\t\t";
        // line 50
        if (($context["products"] ?? null)) {
            // line 51
            echo "\t\t\t\t<div class=\"category__sort\">
\t\t\t\t\t<button class=\"category__filter\">
\t\t\t\t\t\t<span class=\"category__filter-icon\">\t\t\t\t
\t\t\t\t\t\t\t<svg width=\"16\" height=\"13\" viewBox=\"0 0 16 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7.41699 2.35433C7.41699 1.60636 6.81064 1 6.06266 1C5.32004 1 4.71702 1.5977 4.70842 2.33828L4.70867 2.35436L4.70842 2.37042C4.71703 3.11099 5.32005 3.70867 6.06266 3.70867C6.81064 3.70867 7.41699 3.10231 7.41699 2.35433ZM6.06266 0C4.93396 0 3.99077 0.794263 3.76152 1.85436L0.5 1.85436C0.223858 1.85436 0 2.07822 0 2.35436C0 2.6305 0.223858 2.85436 0.5 2.85436L3.76153 2.85436C3.9908 3.91443 4.93397 4.70867 6.06266 4.70867C7.19134 4.70867 8.13451 3.91444 8.36378 2.85437L15.3343 2.85437C15.6105 2.85437 15.8343 2.63051 15.8343 2.35437C15.8343 2.07823 15.6105 1.85437 15.3343 1.85437L8.3638 1.85437C8.13455 0.794269 7.19136 0 6.06266 0ZM13.0005 9.91356C12.7713 8.85348 11.8281 8.05924 10.6994 8.05924C9.47959 8.05924 8.47646 8.98689 8.35698 10.1752C8.2723 10.0194 8.10717 9.91356 7.91734 9.91356L0.5 9.91356C0.223858 9.91356 0 10.1374 0 10.4136C0 10.6897 0.223858 10.9136 0.5 10.9136L7.91734 10.9136C8.10717 10.9136 8.2723 10.8078 8.35697 10.6519C8.47645 11.8402 9.47958 12.7679 10.6994 12.7679C11.8281 12.7679 12.7713 11.9737 13.0005 10.9136H15.3352C15.6114 10.9136 15.8352 10.6897 15.8352 10.4136C15.8352 10.1374 15.6114 9.91356 15.3352 9.91356H13.0005ZM10.6994 9.05924C11.4474 9.05924 12.0537 9.6656 12.0537 10.4136C12.0537 11.1616 11.4474 11.7679 10.6994 11.7679C9.95141 11.7679 9.34505 11.1616 9.34505 10.4136C9.34505 9.6656 9.95141 9.05924 10.6994 9.05924Z\" fill=\"white\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"category__filter-title\">";
            // line 58
            echo ($context["heading_title_desktop"] ?? null);
            echo "</span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"category__sort-wrapper\">
\t\t\t\t\t\t<p class=\"category__sort-title\">
\t\t\t\t\t\t\t<span class=\"category__sort-desktop\">";
            // line 62
            echo ($context["text_sort"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"category__sort-mobile\">";
            // line 63
            echo ($context["text_sort_mobile"] ?? null);
            echo "</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"category__sort-group\">
\t\t\t\t\t\t\t";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 67
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["activeSort"] ?? null) == twig_get_attribute($this->env, $this->source, $context["sorts"], "sort", [], "any", false, false, false, 67))) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["active"] = "true";
                    // line 69
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 70
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["active"] = "false";
                    // line 71
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 72
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 72) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 73);
                    echo "\" class=\"category__sort-link __";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "icon", [], "any", false, false, false, 73);
                    echo "\" data-state=\"";
                    echo ($context["active"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 73);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 75
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 75);
                    echo "\" class=\"category__sort-link __";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "icon", [], "any", false, false, false, 75);
                    echo "\" data-state=\"";
                    echo ($context["active"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 75);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                }
                // line 77
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"category__products\">
\t\t\t\t\t";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 83
                echo "\t\t\t\t\t\t<div class=\"category__product";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 83) == 0)) {
                    echo " notExist";
                }
                echo "\">
\t\t\t\t\t\t\t<div class=\"category__product-top\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 85);
                echo "\" class=\"category__product-image\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 86);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 86);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 86);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 88);
                echo "\" class=\"category__product-title\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 88);
                echo "</a>
\t\t\t\t\t\t\t\t";
                // line 89
                if (twig_get_attribute($this->env, $this->source, $context["product"], "ean", [], "any", false, false, false, 89)) {
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 90);
                    echo "\" class=\"category__product-sku\">";
                    echo ($context["text_ean"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "ean", [], "any", false, false, false, 90);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                }
                // line 92
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 92)) {
                    // line 93
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 93);
                    echo "\" class=\"category__product-stock\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 93);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                }
                // line 95
                echo "\t\t\t\t\t\t\t\t<div class=\"category__product-compare";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "compare", [], "any", false, false, false, 95)) {
                    echo " stop";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"category__product-compare-input\" data-id=\"";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 96);
                echo "\" id=\"compare";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 96);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "compare", [], "any", false, false, false, 96)) {
                    echo "checked";
                }
                echo ">
\t\t\t\t\t\t\t\t\t<label for=\"compare";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 97);
                echo "\" data-productID=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 97);
                echo "\" class=\"lblCountry compareSwitch\">";
                echo ($context["button_compare"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"category__product-meta\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 101);
                echo "\" class=\"category__product-prices\">
\t\t\t\t\t\t\t\t\t";
                // line 102
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 102)) {
                    // line 103
                    echo "\t\t\t\t\t\t\t\t\t    ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 103)) {
                        // line 104
                        echo "                                            ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 104);
                        echo " / шт. 
                                        ";
                    } else {
                        // line 105
                        echo " 
\t\t\t\t\t\t\t\t\t\t    ";
                        // line 106
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 106);
                        echo " / шт. 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"category__product-prices-old\">";
                        // line 107
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 107);
                        echo " / шт. </div> 
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 109
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 110
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"category__product-btns\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" class=\"category__product-like";
                // line 112
                if (($context["likeExist"] ?? null)) {
                    echo " likeExist";
                }
                echo "\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 112);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t<svg width=\"18\" height=\"16\" viewBox=\"0 0 18 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2.35885 9.16686L8.52213 14.5803L8.52216 14.5803C8.66156 14.7027 8.73126 14.764 8.80638 14.7955C8.93022 14.8475 9.06978 14.8475 9.19362 14.7955C9.26874 14.764 9.33845 14.7027 9.47785 14.5803L9.47787 14.5803L15.6411 9.16686C17.5112 7.52429 17.7347 4.6918 16.1452 2.77635L16.0303 2.63787C14.2096 0.443719 10.7381 0.828319 9.44182 3.36779C9.2577 3.72849 8.7423 3.72849 8.55818 3.36779C7.2619 0.828319 3.79038 0.443721 1.96969 2.63787L1.85477 2.77635C0.26533 4.6918 0.488753 7.52429 2.35885 9.16686Z\" fill=\"url(#paint0_linear_226_3519)\" stroke=\"url(#paint1_linear_226_3519)\"/>
\t\t\t\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t\t\t\t<linearGradient id=\"paint0_linear_226_3519\" x1=\"-0.800995\" y1=\"-2\" x2=\"21.1839\" y2=\"0.852551\" gradientUnits=\"userSpaceOnUse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<stop stop-color=\"#FF9B3C\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<stop offset=\"0.471875\" stop-color=\"#FFAF38\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#FFC837\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t\t\t\t\t\t<linearGradient id=\"paint1_linear_226_3519\" x1=\"-0.800995\" y1=\"-2\" x2=\"21.1839\" y2=\"0.852551\" gradientUnits=\"userSpaceOnUse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<stop stop-color=\"#FF9B3C\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<stop offset=\"0.471875\" stop-color=\"#FFAF38\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#FFC837\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"category__product-cart\" data-toggle=\"tooltip\" title=\"";
                // line 129
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 129);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t<svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.0527 11.0526C11.4436 11.0526 11.8184 11.2079 12.0948 11.4843C12.3712 11.7606 12.5264 12.1355 12.5264 12.5263C12.5264 12.9172 12.3712 13.292 12.0948 13.5684C11.8184 13.8447 11.4436 14 11.0527 14C10.6619 14 10.2871 13.8447 10.0107 13.5684C9.73431 13.292 9.57904 12.9172 9.57904 12.5263C9.57904 12.1355 9.73431 11.7606 10.0107 11.4843C10.2871 11.2079 10.6619 11.0526 11.0527 11.0526ZM11.0527 11.7895C10.8573 11.7895 10.6699 11.8671 10.5317 12.0053C10.3935 12.1435 10.3159 12.3309 10.3159 12.5263C10.3159 12.7217 10.3935 12.9092 10.5317 13.0473C10.6699 13.1855 10.8573 13.2632 11.0527 13.2632C11.2482 13.2632 11.4356 13.1855 11.5738 13.0473C11.712 12.9092 11.7896 12.7217 11.7896 12.5263C11.7896 12.3309 11.712 12.1435 11.5738 12.0053C11.4356 11.8671 11.2482 11.7895 11.0527 11.7895ZM4.4211 11.0526C4.81195 11.0526 5.18679 11.2079 5.46316 11.4843C5.73953 11.7606 5.8948 12.1355 5.8948 12.5263C5.8948 12.9172 5.73953 13.292 5.46316 13.5684C5.18679 13.8447 4.81195 14 4.4211 14C4.03025 14 3.65541 13.8447 3.37903 13.5684C3.10266 13.292 2.9474 12.9172 2.9474 12.5263C2.9474 12.1355 3.10266 11.7606 3.37903 11.4843C3.65541 11.2079 4.03025 11.0526 4.4211 11.0526ZM4.4211 11.7895C4.22567 11.7895 4.03825 11.8671 3.90007 12.0053C3.76188 12.1435 3.68425 12.3309 3.68425 12.5263C3.68425 12.7217 3.76188 12.9092 3.90007 13.0473C4.03825 13.1855 4.22567 13.2632 4.4211 13.2632C4.61652 13.2632 4.80394 13.1855 4.94213 13.0473C5.08031 12.9092 5.15795 12.7217 5.15795 12.5263C5.15795 12.3309 5.08031 12.1435 4.94213 12.0053C4.80394 11.8671 4.61652 11.7895 4.4211 11.7895ZM12.5264 2.21053H2.41171L4.28846 6.63158H10.3159C10.4305 6.63175 10.5435 6.60505 10.6459 6.5536C10.7483 6.50216 10.8371 6.42741 10.9054 6.33537L13.1159 3.388H13.1167C13.1984 3.27847 13.248 3.14838 13.2601 3.01226C13.2721 2.87614 13.246 2.73935 13.1848 2.61718C13.1236 2.49502 13.0296 2.39229 12.9133 2.32048C12.797 2.24866 12.6631 2.21059 12.5264 2.21053ZM10.3159 7.36842H4.32236L3.75793 8.51789L3.68425 8.8421C3.68425 9.03753 3.76188 9.22495 3.90007 9.36313C4.03825 9.50132 4.22567 9.57895 4.4211 9.57895H12.5264V10.3158H4.4211C4.1645 10.3159 3.91232 10.249 3.6895 10.1218C3.46669 9.99453 3.28096 9.8113 3.1507 9.59023C3.02044 9.36916 2.95016 9.1179 2.94681 8.86133C2.94346 8.60476 3.00716 8.35176 3.13161 8.12737L3.66214 7.04126L0.985905 0.736842H0V0H1.4737L2.09928 1.47368H12.5264C12.8049 1.47371 13.0776 1.55262 13.313 1.70126C13.5485 1.84991 13.737 2.06221 13.8567 2.31358C13.9765 2.56494 14.0226 2.84509 13.9897 3.12158C13.9568 3.39806 13.8462 3.65956 13.6708 3.87579L11.5236 6.73916C11.3878 6.93354 11.2071 7.09226 10.9969 7.20182C10.7866 7.31138 10.553 7.36853 10.3159 7.36842Z\" fill=\"white\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 139
            echo ($context["pagination"] ?? null);
            echo "
\t\t\t";
        }
        // line 141
        echo "\t\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 142
            echo "      \t\t\t<p class=\"category__empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t";
        }
        // line 144
        echo "\t\t</div>
\t</div>
\t<!-- OCFilter Start -->
      ";
        // line 147
        if (twig_get_attribute($this->env, $this->source, ($context["ocfilter_pages"] ?? null), "bottom", [], "any", false, false, false, 147)) {
            // line 148
            echo "      <nav class=\"ocf-page-list-bottom\">      
        ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ocfilter_pages"] ?? null), "bottom", [], "any", false, false, false, 149));
            foreach ($context['_seq'] as $context["_key"] => $context["ocfilter_page_group"]) {
                echo "    
        <div class=\"ocf-page-group\">
          ";
                // line 151
                if (twig_get_attribute($this->env, $this->source, $context["ocfilter_page_group"], "name", [], "any", false, false, false, 151)) {
                    // line 152
                    echo "          <div class=\"ocf-page-group-name\">";
                    echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page_group"], "name", [], "any", false, false, false, 152);
                    echo "</div>
          ";
                }
                // line 154
                echo "          <ul class=\"ocf-category-page-list\">
            ";
                // line 155
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ocfilter_page_group"], "pages", [], "any", false, false, false, 155));
                foreach ($context['_seq'] as $context["_key"] => $context["ocfilter_page"]) {
                    // line 156
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "selected", [], "any", false, false, false, 156)) {
                        // line 157
                        echo "            <li class=\"ocf-page-selected\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "href", [], "any", false, false, false, 157);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "name", [], "any", false, false, false, 157);
                        echo "</a></li>
            ";
                    } else {
                        // line 159
                        echo "            <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "href", [], "any", false, false, false, 159);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["ocfilter_page"], "name", [], "any", false, false, false, 159);
                        echo "</a></li>
            ";
                    }
                    // line 160
                    echo "     
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocfilter_page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "          </ul>         
        </div>               
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocfilter_page_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "      </nav>
      ";
        }
        // line 167
        echo "      
      ";
        // line 168
        if (($context["ocfilter_description_bottom"] ?? null)) {
            echo "   
      <div class=\"ocf-description ocf-description-bottom\">";
            // line 169
            echo ($context["ocfilter_description_bottom"] ?? null);
            echo "</div>
      ";
        }
        // line 171
        echo "      <!-- /OCFilter End -->
      
      ";
        // line 173
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 175
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  535 => 175,  530 => 173,  526 => 171,  521 => 169,  517 => 168,  514 => 167,  510 => 165,  502 => 162,  495 => 160,  487 => 159,  479 => 157,  476 => 156,  472 => 155,  469 => 154,  463 => 152,  461 => 151,  454 => 149,  451 => 148,  449 => 147,  444 => 144,  438 => 142,  435 => 141,  430 => 139,  427 => 138,  410 => 129,  384 => 112,  380 => 110,  377 => 109,  372 => 107,  368 => 106,  365 => 105,  359 => 104,  356 => 103,  354 => 102,  350 => 101,  339 => 97,  329 => 96,  322 => 95,  314 => 93,  311 => 92,  301 => 90,  299 => 89,  293 => 88,  284 => 86,  280 => 85,  272 => 83,  268 => 82,  262 => 78,  256 => 77,  244 => 75,  232 => 73,  229 => 72,  226 => 71,  223 => 70,  220 => 69,  217 => 68,  214 => 67,  210 => 66,  204 => 63,  200 => 62,  193 => 58,  184 => 51,  182 => 50,  177 => 48,  174 => 47,  169 => 45,  164 => 42,  158 => 40,  155 => 39,  153 => 38,  150 => 37,  148 => 36,  144 => 34,  140 => 33,  132 => 30,  125 => 28,  117 => 27,  109 => 25,  107 => 24,  101 => 23,  98 => 22,  92 => 20,  90 => 19,  87 => 18,  83 => 17,  80 => 16,  78 => 15,  75 => 14,  69 => 12,  67 => 11,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"product-category\" class=\"container\">
\t<ul class=\"breadcrumb\">
\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t<li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
\t\t{% endfor %}
\t</ul>
\t<h1 class=\"category__title\">{{ heading_title }}</h1>
\t<div class=\"category__wrap\">
\t\t<!-- OCFilter Start -->
      {% if ocfilter_description_top %}
      <div class=\"ocf-description ocf-description-top\">{{ ocfilter_description_top }}</div>
      {% endif %}
      
      {% if ocfilter_pages.top %}
      <nav class=\"ocf-page-list-top\">  
        {% for ocfilter_page_group in ocfilter_pages.top %}
        <div class=\"ocf-page-group\">
          {% if ocfilter_page_group.name %}
          <div class=\"ocf-page-group-name\">{{ ocfilter_page_group.name }}</div>
          {% endif %}
          <ul class=\"ocf-category-page-list\">
            {% for ocfilter_page in ocfilter_page_group.pages %}           
            {% if ocfilter_page.selected %}
            <li class=\"ocf-page-selected\"><a href=\"{{ ocfilter_page.href }}\">{{ ocfilter_page.name }}</a></li>
            {% else %}
            <li><a href=\"{{ ocfilter_page.href }}\">{{ ocfilter_page.name }}</a></li>
            {% endif %}            
            {% endfor %}
          </ul>         
        </div>
        {% endfor %}
      </nav>
      {% endif %} 
      
      {% if products %}
      <!-- OCFilter Start -->      
      {% if ocfilter_mobile_button %}
      <div class=\"ocf-btn-mobile-static ocf-mobile\">
        <button type=\"button\" class=\"ocf-btn ocf-btn-default\" data-ocf=\"mobile\"><span class=\"ocf-btn-name\">{{ button_ocfilter_mobile }}</span> <i class=\"ocf-icon ocf-icon-16 ocf-brand ocf-sliders\"></i></button>
      </div>
      {% endif %}   
      <!-- /OCFilter End -->
      <!-- /OCFilter End -->
\t\t\t<div class=\"category__side\">{{ column_left }}</div>
\t\t{% endif %}
\t\t<div class=\"category__main\">
\t\t\t{{ content_top }}
\t\t\t
\t\t\t{% if products %}
\t\t\t\t<div class=\"category__sort\">
\t\t\t\t\t<button class=\"category__filter\">
\t\t\t\t\t\t<span class=\"category__filter-icon\">\t\t\t\t
\t\t\t\t\t\t\t<svg width=\"16\" height=\"13\" viewBox=\"0 0 16 13\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7.41699 2.35433C7.41699 1.60636 6.81064 1 6.06266 1C5.32004 1 4.71702 1.5977 4.70842 2.33828L4.70867 2.35436L4.70842 2.37042C4.71703 3.11099 5.32005 3.70867 6.06266 3.70867C6.81064 3.70867 7.41699 3.10231 7.41699 2.35433ZM6.06266 0C4.93396 0 3.99077 0.794263 3.76152 1.85436L0.5 1.85436C0.223858 1.85436 0 2.07822 0 2.35436C0 2.6305 0.223858 2.85436 0.5 2.85436L3.76153 2.85436C3.9908 3.91443 4.93397 4.70867 6.06266 4.70867C7.19134 4.70867 8.13451 3.91444 8.36378 2.85437L15.3343 2.85437C15.6105 2.85437 15.8343 2.63051 15.8343 2.35437C15.8343 2.07823 15.6105 1.85437 15.3343 1.85437L8.3638 1.85437C8.13455 0.794269 7.19136 0 6.06266 0ZM13.0005 9.91356C12.7713 8.85348 11.8281 8.05924 10.6994 8.05924C9.47959 8.05924 8.47646 8.98689 8.35698 10.1752C8.2723 10.0194 8.10717 9.91356 7.91734 9.91356L0.5 9.91356C0.223858 9.91356 0 10.1374 0 10.4136C0 10.6897 0.223858 10.9136 0.5 10.9136L7.91734 10.9136C8.10717 10.9136 8.2723 10.8078 8.35697 10.6519C8.47645 11.8402 9.47958 12.7679 10.6994 12.7679C11.8281 12.7679 12.7713 11.9737 13.0005 10.9136H15.3352C15.6114 10.9136 15.8352 10.6897 15.8352 10.4136C15.8352 10.1374 15.6114 9.91356 15.3352 9.91356H13.0005ZM10.6994 9.05924C11.4474 9.05924 12.0537 9.6656 12.0537 10.4136C12.0537 11.1616 11.4474 11.7679 10.6994 11.7679C9.95141 11.7679 9.34505 11.1616 9.34505 10.4136C9.34505 9.6656 9.95141 9.05924 10.6994 9.05924Z\" fill=\"white\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"category__filter-title\">{{ heading_title_desktop }}</span>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"category__sort-wrapper\">
\t\t\t\t\t\t<p class=\"category__sort-title\">
\t\t\t\t\t\t\t<span class=\"category__sort-desktop\">{{ text_sort }}</span>
\t\t\t\t\t\t\t<span class=\"category__sort-mobile\">{{ text_sort_mobile }}</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"category__sort-group\">
\t\t\t\t\t\t\t{% for sorts in sorts %}
\t\t\t\t\t\t\t\t{% if activeSort == sorts.sort %}
\t\t\t\t\t\t\t\t\t{% set active = 'true' %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{% set active = 'false' %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if sorts.value == '%s-%s'|format(sort, order) %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ sorts.href }}\" class=\"category__sort-link __{{ sorts.icon }}\" data-state=\"{{ active }}\">{{ sorts.text }}</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ sorts.href }}\" class=\"category__sort-link __{{ sorts.icon }}\" data-state=\"{{ active }}\">{{ sorts.text }}</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"category__products\">
\t\t\t\t\t{% for product in products %}
\t\t\t\t\t\t<div class=\"category__product{% if product.quantity == 0 %} notExist{% endif %}\">
\t\t\t\t\t\t\t<div class=\"category__product-top\">
\t\t\t\t\t\t\t\t<a href=\"{{ product.href }}\" class=\"category__product-image\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"{{ product.href }}\" class=\"category__product-title\">{{ product.name }}</a>
\t\t\t\t\t\t\t\t{% if product.ean %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ product.href }}\" class=\"category__product-sku\">{{ text_ean }} {{ product.ean }}</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if product.stock %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ product.href }}\" class=\"category__product-stock\">{{ product.stock }}</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<div class=\"category__product-compare{% if product.compare %} stop{% endif %}\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"category__product-compare-input\" data-id=\"{{ product.product_id }}\" id=\"compare{{ product.product_id }}\" {% if product.compare %}checked{% endif %}>
\t\t\t\t\t\t\t\t\t<label for=\"compare{{ product.product_id }}\" data-productID=\"{{ product.product_id }}\" class=\"lblCountry compareSwitch\">{{ button_compare }}</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"category__product-meta\">
\t\t\t\t\t\t\t\t<a href=\"{{ product.href }}\" class=\"category__product-prices\">
\t\t\t\t\t\t\t\t\t{% if product.price %}
\t\t\t\t\t\t\t\t\t    {% if not product.special %}
                                            {{ product.price }} / шт. 
                                        {% else %} 
\t\t\t\t\t\t\t\t\t\t    {{ product.special }} / шт. 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"category__product-prices-old\">{{ product.price }} / шт. </div> 
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"category__product-btns\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" class=\"category__product-like{% if likeExist %} likeExist{% endif %}\" title=\"{{ button_wishlist }}\" onclick=\"wishlist.add('{{ product.product_id }}');\">
\t\t\t\t\t\t\t\t\t\t<svg width=\"18\" height=\"16\" viewBox=\"0 0 18 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2.35885 9.16686L8.52213 14.5803L8.52216 14.5803C8.66156 14.7027 8.73126 14.764 8.80638 14.7955C8.93022 14.8475 9.06978 14.8475 9.19362 14.7955C9.26874 14.764 9.33845 14.7027 9.47785 14.5803L9.47787 14.5803L15.6411 9.16686C17.5112 7.52429 17.7347 4.6918 16.1452 2.77635L16.0303 2.63787C14.2096 0.443719 10.7381 0.828319 9.44182 3.36779C9.2577 3.72849 8.7423 3.72849 8.55818 3.36779C7.2619 0.828319 3.79038 0.443721 1.96969 2.63787L1.85477 2.77635C0.26533 4.6918 0.488753 7.52429 2.35885 9.16686Z\" fill=\"url(#paint0_linear_226_3519)\" stroke=\"url(#paint1_linear_226_3519)\"/>
\t\t\t\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t\t\t\t<linearGradient id=\"paint0_linear_226_3519\" x1=\"-0.800995\" y1=\"-2\" x2=\"21.1839\" y2=\"0.852551\" gradientUnits=\"userSpaceOnUse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<stop stop-color=\"#FF9B3C\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<stop offset=\"0.471875\" stop-color=\"#FFAF38\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#FFC837\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t\t\t\t\t\t<linearGradient id=\"paint1_linear_226_3519\" x1=\"-0.800995\" y1=\"-2\" x2=\"21.1839\" y2=\"0.852551\" gradientUnits=\"userSpaceOnUse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<stop stop-color=\"#FF9B3C\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<stop offset=\"0.471875\" stop-color=\"#FFAF38\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t<stop offset=\"1\" stop-color=\"#FFC837\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"category__product-cart\" data-toggle=\"tooltip\" title=\"{{ button_cart }}\" onclick=\"cart.add('{{ product.product_id }}');\">
\t\t\t\t\t\t\t\t\t\t<svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M11.0527 11.0526C11.4436 11.0526 11.8184 11.2079 12.0948 11.4843C12.3712 11.7606 12.5264 12.1355 12.5264 12.5263C12.5264 12.9172 12.3712 13.292 12.0948 13.5684C11.8184 13.8447 11.4436 14 11.0527 14C10.6619 14 10.2871 13.8447 10.0107 13.5684C9.73431 13.292 9.57904 12.9172 9.57904 12.5263C9.57904 12.1355 9.73431 11.7606 10.0107 11.4843C10.2871 11.2079 10.6619 11.0526 11.0527 11.0526ZM11.0527 11.7895C10.8573 11.7895 10.6699 11.8671 10.5317 12.0053C10.3935 12.1435 10.3159 12.3309 10.3159 12.5263C10.3159 12.7217 10.3935 12.9092 10.5317 13.0473C10.6699 13.1855 10.8573 13.2632 11.0527 13.2632C11.2482 13.2632 11.4356 13.1855 11.5738 13.0473C11.712 12.9092 11.7896 12.7217 11.7896 12.5263C11.7896 12.3309 11.712 12.1435 11.5738 12.0053C11.4356 11.8671 11.2482 11.7895 11.0527 11.7895ZM4.4211 11.0526C4.81195 11.0526 5.18679 11.2079 5.46316 11.4843C5.73953 11.7606 5.8948 12.1355 5.8948 12.5263C5.8948 12.9172 5.73953 13.292 5.46316 13.5684C5.18679 13.8447 4.81195 14 4.4211 14C4.03025 14 3.65541 13.8447 3.37903 13.5684C3.10266 13.292 2.9474 12.9172 2.9474 12.5263C2.9474 12.1355 3.10266 11.7606 3.37903 11.4843C3.65541 11.2079 4.03025 11.0526 4.4211 11.0526ZM4.4211 11.7895C4.22567 11.7895 4.03825 11.8671 3.90007 12.0053C3.76188 12.1435 3.68425 12.3309 3.68425 12.5263C3.68425 12.7217 3.76188 12.9092 3.90007 13.0473C4.03825 13.1855 4.22567 13.2632 4.4211 13.2632C4.61652 13.2632 4.80394 13.1855 4.94213 13.0473C5.08031 12.9092 5.15795 12.7217 5.15795 12.5263C5.15795 12.3309 5.08031 12.1435 4.94213 12.0053C4.80394 11.8671 4.61652 11.7895 4.4211 11.7895ZM12.5264 2.21053H2.41171L4.28846 6.63158H10.3159C10.4305 6.63175 10.5435 6.60505 10.6459 6.5536C10.7483 6.50216 10.8371 6.42741 10.9054 6.33537L13.1159 3.388H13.1167C13.1984 3.27847 13.248 3.14838 13.2601 3.01226C13.2721 2.87614 13.246 2.73935 13.1848 2.61718C13.1236 2.49502 13.0296 2.39229 12.9133 2.32048C12.797 2.24866 12.6631 2.21059 12.5264 2.21053ZM10.3159 7.36842H4.32236L3.75793 8.51789L3.68425 8.8421C3.68425 9.03753 3.76188 9.22495 3.90007 9.36313C4.03825 9.50132 4.22567 9.57895 4.4211 9.57895H12.5264V10.3158H4.4211C4.1645 10.3159 3.91232 10.249 3.6895 10.1218C3.46669 9.99453 3.28096 9.8113 3.1507 9.59023C3.02044 9.36916 2.95016 9.1179 2.94681 8.86133C2.94346 8.60476 3.00716 8.35176 3.13161 8.12737L3.66214 7.04126L0.985905 0.736842H0V0H1.4737L2.09928 1.47368H12.5264C12.8049 1.47371 13.0776 1.55262 13.313 1.70126C13.5485 1.84991 13.737 2.06221 13.8567 2.31358C13.9765 2.56494 14.0226 2.84509 13.9897 3.12158C13.9568 3.39806 13.8462 3.65956 13.6708 3.87579L11.5236 6.73916C11.3878 6.93354 11.2071 7.09226 10.9969 7.20182C10.7866 7.31138 10.553 7.36853 10.3159 7.36842Z\" fill=\"white\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t{{ pagination }}
\t\t\t{% endif %}
\t\t\t{% if not categories and not products %}
      \t\t\t<p class=\"category__empty\">{{ text_empty }}</p>
\t\t\t{% endif %}
\t\t</div>
\t</div>
\t<!-- OCFilter Start -->
      {% if ocfilter_pages.bottom %}
      <nav class=\"ocf-page-list-bottom\">      
        {% for ocfilter_page_group in ocfilter_pages.bottom %}    
        <div class=\"ocf-page-group\">
          {% if ocfilter_page_group.name %}
          <div class=\"ocf-page-group-name\">{{ ocfilter_page_group.name }}</div>
          {% endif %}
          <ul class=\"ocf-category-page-list\">
            {% for ocfilter_page in ocfilter_page_group.pages %}
            {% if ocfilter_page.selected %}
            <li class=\"ocf-page-selected\"><a href=\"{{ ocfilter_page.href }}\">{{ ocfilter_page.name }}</a></li>
            {% else %}
            <li><a href=\"{{ ocfilter_page.href }}\">{{ ocfilter_page.name }}</a></li>
            {% endif %}     
            {% endfor %}
          </ul>         
        </div>               
        {% endfor %}
      </nav>
      {% endif %}
      
      {% if ocfilter_description_bottom %}   
      <div class=\"ocf-description ocf-description-bottom\">{{ ocfilter_description_bottom }}</div>
      {% endif %}
      <!-- /OCFilter End -->
      
      {{ content_bottom }}
</div>
{{ footer }} ", "default/template/product/category.twig", "");
    }
}
