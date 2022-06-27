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

/* default/template/common/header.twig */
class __TwigTemplate_05ab7e642a8bf7e04bce583cf109d196c753e2641f5ff3d834a4516bf87d67cc extends \Twig\Template
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
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
\t";
        // line 13
        if (($context["robots"] ?? null)) {
            // line 14
            echo "\t\t<meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\" />
\t";
        }
        // line 16
        echo "\t<base href=\"";
        echo ($context["base"] ?? null);
        echo "\" />
\t";
        // line 17
        if (($context["description"] ?? null)) {
            // line 18
            echo "\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
\t";
        }
        // line 20
        echo "\t";
        if (($context["keywords"] ?? null)) {
            // line 21
            echo "\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
\t";
        }
        // line 23
        echo "\t<meta property=\"og:title\" content=\"";
        echo ($context["title"] ?? null);
        echo "\" />
\t<meta property=\"og:type\" content=\"website\" />
\t<meta property=\"og:url\" content=\"";
        // line 25
        echo ($context["og_url"] ?? null);
        echo "\" />
\t";
        // line 26
        if (($context["og_image"] ?? null)) {
            // line 27
            echo "\t\t<meta property=\"og:image\" content=\"";
            echo ($context["og_image"] ?? null);
            echo "\" />
\t";
        } else {
            // line 29
            echo "\t\t<meta property=\"og:image\" content=\"";
            echo ($context["logo"] ?? null);
            echo "\" />
\t";
        }
        // line 31
        echo "\t<meta property=\"og:site_name\" content=\"";
        echo ($context["name"] ?? null);
        echo "\" />
\t<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
  \t<script src=\"catalog/view/javascript/mCustomScrollbar.js\" type=\"text/javascript\"></script>
\t<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
\t<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css\" integrity=\"sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js\" integrity=\"sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js\" integrity=\"sha512-VpQwrlvKqJHKtIvpL8Zv6819FkTJyE1DoVNH0L2RLn8hUPjRjkS/bCYurZs0DX9Ybwu9oHRHdBZR9fESaq8Z8A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>  <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"catalog/view/theme/default/stylesheet/mCustomScrollbar.css\" rel=\"stylesheet\">
\t<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 43
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 43);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 43);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 43);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 46
            echo "\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 50
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 50);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 50);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 53
            echo "\t\t";
            echo $context["analytic"];
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</head>
<body ";
        // line 56
        if ((($context["home"] ?? null) == ($context["og_url"] ?? null))) {
            echo " class=\"home\"";
        }
        echo ">
<header class=\"header\">
\t<div class=\"header__main\">
\t\t<div class=\"container\">
\t\t\t<div class=\"header__top\">
\t\t\t\t<button class=\"header__menu-btn\">
\t\t\t\t\t<span class=\"header__menu-btn-icon\">
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t\t";
        // line 68
        if ((($context["home"] ?? null) == ($context["og_url"] ?? null))) {
            // line 69
            echo "\t\t\t\t\t<div class=\"header__logo\">
\t\t\t\t\t\t<img src=\"";
            // line 70
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" />
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 73
            echo "\t\t\t\t\t<a href=\"";
            echo ($context["home"] ?? null);
            echo "\" class=\"header__logo\">
\t\t\t\t\t\t<img src=\"";
            // line 74
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" />
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t<div class=\"header__icons\">
\t\t\t\t\t<a href=\"";
        // line 78
        echo ($context["link_compare"] ?? null);
        echo "\" class=\"header__icons-compare\">\t
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<circle cx=\"11\" cy=\"11\" r=\"11\" fill=\"white\"/>
\t\t\t\t\t\t\t<path d=\"M7 15.3103L7 6\" stroke=\"#272727\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t<path d=\"M11 15.3103L11 10.1379\" stroke=\"#272727\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t<path d=\"M15 15.3103L15 8.06896\" stroke=\"#272727\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t</svg>
                      \t<span class=\"header__icons_compare-count";
        // line 85
        if (($context["text_comparelist"] ?? null)) {
            echo " hidden";
        }
        echo "\">";
        echo ($context["text_comparelist"] ?? null);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 87
        echo ($context["link_likes"] ?? null);
        echo "\" class=\"header__icons-likes\">
\t\t\t\t\t\t<svg width=\"26\" height=\"23\" viewBox=\"0 0 26 23\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M3.83925 12.898L12.2952 21.2997L12.2952 21.2997C12.6276 21.63 12.7938 21.7952 13 21.7952C13.2062 21.7952 13.3724 21.63 13.7048 21.2997L22.1607 12.898C24.3677 10.7052 24.639 7.22796 22.7989 4.71938L22.2567 3.98022C19.9684 0.860827 15.167 1.36442 13.5758 4.89069C13.352 5.38651 12.648 5.38651 12.4242 4.89069C10.833 1.36442 6.03156 0.860829 3.74335 3.98022L3.20114 4.71938C1.36099 7.22796 1.63229 10.7052 3.83925 12.898Z\" fill=\"white\" stroke=\"white\" stroke-width=\"2\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"header__icons_likes-count";
        // line 91
        if (($context["text_wishlist"] ?? null)) {
            echo " hidden";
        }
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t";
        // line 93
        echo ($context["cart"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 95
        if ( !($context["logged"] ?? null)) {
            // line 96
            echo "\t\t\t\t\t<a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"header__login-btn\">
\t\t\t\t\t\t<span class=\"header__login-btn-icon\">\t\t\t\t\t
\t\t\t\t\t\t\t<svg width=\"19\" height=\"21\" viewBox=\"0 0 19 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path d=\"M17.9276 19.1632C18.501 19.0382 18.8441 18.4404 18.5761 17.9182C17.9175 16.6349 16.8556 15.5072 15.4872 14.6532C13.7696 13.5811 11.665 13 9.5 13C7.33496 13 5.23041 13.5811 3.51276 14.6532C2.14439 15.5072 1.08249 16.6349 0.423888 17.9182C0.155926 18.4404 0.498985 19.0382 1.07242 19.1632C6.62562 20.3735 12.3744 20.3735 17.9276 19.1632Z\" fill=\"white\"/>
\t\t\t\t\t\t\t\t<circle cx=\"9.5\" cy=\"5.5\" r=\"5.5\" fill=\"white\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"header__login-btn-text\">";
            // line 103
            echo ($context["text_login"] ?? null);
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 106
            echo "\t\t\t\t\t<a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"header__login-btn\">
\t\t\t\t\t\t<span class=\"header__login-btn-icon\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"21px\" height=\"21px\" viewBox=\"0 0 533.333 533.333\" style=\"enable-background:new 0 0 533.333 533.333;\" xml:space=\"preserve\" fill=\"#fff\">
\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t<path d=\"M416.667,333.333v-66.666H250V200h166.667v-66.667l100,100L416.667,333.333z M383.333,300v133.333H216.667v100l-200-100V0 h366.667v166.667H350V33.333H83.333L216.667,100v300H350V300H383.333z\"/>
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"header__login-btn-text\">";
            // line 114
            echo ($context["text_logout"] ?? null);
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 117
        echo "\t\t\t</div>
\t\t\t<div class=\"header__bottom\">
\t\t\t\t<button class=\"header__menu-btn\">
\t\t\t\t\t<span class=\"header__menu-btn-icon\">
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"header__menu-btn-text\">";
        // line 125
        echo ($context["text_catalog"] ?? null);
        echo "</span>
\t\t\t\t</button>
\t\t\t\t<div class=\"header__search\">
\t\t\t\t\t";
        // line 128
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"header__icons\">
\t\t\t\t\t<a href=\"";
        // line 131
        echo ($context["link_compare"] ?? null);
        echo "\" class=\"header__icons-compare\">\t
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<circle cx=\"11\" cy=\"11\" r=\"11\" fill=\"white\"/>
\t\t\t\t\t\t\t<path d=\"M7 15.3103L7 6\" stroke=\"#272727\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t<path d=\"M11 15.3103L11 10.1379\" stroke=\"#272727\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t<path d=\"M15 15.3103L15 8.06896\" stroke=\"#272727\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t</svg>
                        <span class=\"header__icons_compare-count";
        // line 138
        if ((($context["text_comparelist"] ?? null) == "0")) {
            echo " hidden";
        }
        echo "\">";
        echo ($context["text_comparelist"] ?? null);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 140
        echo ($context["link_likes"] ?? null);
        echo "\" class=\"header__icons-likes\">
\t\t\t\t\t\t<svg width=\"26\" height=\"23\" viewBox=\"0 0 26 23\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M3.83925 12.898L12.2952 21.2997L12.2952 21.2997C12.6276 21.63 12.7938 21.7952 13 21.7952C13.2062 21.7952 13.3724 21.63 13.7048 21.2997L22.1607 12.898C24.3677 10.7052 24.639 7.22796 22.7989 4.71938L22.2567 3.98022C19.9684 0.860827 15.167 1.36442 13.5758 4.89069C13.352 5.38651 12.648 5.38651 12.4242 4.89069C10.833 1.36442 6.03156 0.860829 3.74335 3.98022L3.20114 4.71938C1.36099 7.22796 1.63229 10.7052 3.83925 12.898Z\" fill=\"white\" stroke=\"white\" stroke-width=\"2\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"header__icons_likes-count";
        // line 144
        if ((($context["text_wishlist"] ?? null) == "0")) {
            echo " hidden";
        }
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t";
        // line 146
        echo ($context["cart"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t\t\t";
        // line 152
        if (($context["megamenu_status"] ?? null)) {
            // line 153
            echo "\t\t\t\t";
            echo ($context["menuvh"] ?? null);
            echo "
\t\t\t";
        } else {
            // line 155
            echo "\t\t\t\t";
            echo ($context["menu"] ?? null);
            echo "
\t\t\t";
        }
        // line 157
        echo "\t\t\t
</header>
<div class=\"site\">";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 157,  405 => 155,  399 => 153,  397 => 152,  388 => 146,  379 => 144,  372 => 140,  363 => 138,  353 => 131,  347 => 128,  341 => 125,  331 => 117,  325 => 114,  313 => 106,  307 => 103,  296 => 96,  294 => 95,  289 => 93,  280 => 91,  273 => 87,  264 => 85,  254 => 78,  251 => 77,  241 => 74,  236 => 73,  226 => 70,  223 => 69,  221 => 68,  204 => 56,  201 => 55,  192 => 53,  187 => 52,  176 => 50,  172 => 49,  169 => 48,  160 => 46,  155 => 45,  142 => 43,  138 => 42,  123 => 31,  117 => 29,  111 => 27,  109 => 26,  105 => 25,  99 => 23,  93 => 21,  90 => 20,  84 => 18,  82 => 17,  77 => 16,  71 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"{{ direction }}\" lang=\"{{ lang }}\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"{{ direction }}\" lang=\"{{ lang }}\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<!--<![endif]-->
<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>{{ title }}</title>
\t{% if robots %}
\t\t<meta name=\"robots\" content=\"{{ robots }}\" />
\t{% endif %}
\t<base href=\"{{ base }}\" />
\t{% if description %}
\t\t<meta name=\"description\" content=\"{{ description }}\" />
\t{% endif %}
\t{% if keywords %}
\t\t<meta name=\"keywords\" content=\"{{ keywords }}\" />
\t{% endif %}
\t<meta property=\"og:title\" content=\"{{ title }}\" />
\t<meta property=\"og:type\" content=\"website\" />
\t<meta property=\"og:url\" content=\"{{ og_url }}\" />
\t{% if og_image %}
\t\t<meta property=\"og:image\" content=\"{{ og_image }}\" />
\t{% else %}
\t\t<meta property=\"og:image\" content=\"{{ logo }}\" />
\t{% endif %}
\t<meta property=\"og:site_name\" content=\"{{ name }}\" />
\t<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
  \t<script src=\"catalog/view/javascript/mCustomScrollbar.js\" type=\"text/javascript\"></script>
\t<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
\t<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css\" integrity=\"sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js\" integrity=\"sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js\" integrity=\"sha512-VpQwrlvKqJHKtIvpL8Zv6819FkTJyE1DoVNH0L2RLn8hUPjRjkS/bCYurZs0DX9Ybwu9oHRHdBZR9fESaq8Z8A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>  <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"catalog/view/theme/default/stylesheet/mCustomScrollbar.css\" rel=\"stylesheet\">
\t<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
\t{% for style in styles %}
\t\t<link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\" />
\t{% endfor %}
\t{% for script in scripts %}
\t\t<script src=\"{{ script }}\" type=\"text/javascript\"></script>
\t{% endfor %}
\t<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
\t{% for link in links %}
\t\t<link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\" />
\t{% endfor %}
\t{% for analytic in analytics %}
\t\t{{ analytic }}
\t{% endfor %}
</head>
<body {% if home == og_url %} class=\"home\"{% endif %}>
<header class=\"header\">
\t<div class=\"header__main\">
\t\t<div class=\"container\">
\t\t\t<div class=\"header__top\">
\t\t\t\t<button class=\"header__menu-btn\">
\t\t\t\t\t<span class=\"header__menu-btn-icon\">
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t\t{% if home == og_url %}
\t\t\t\t\t<div class=\"header__logo\">
\t\t\t\t\t\t<img src=\"{{ logo }}\" title=\"{{ name }}\" alt=\"{{ name }}\" class=\"img-responsive\" />
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t<a href=\"{{ home }}\" class=\"header__logo\">
\t\t\t\t\t\t<img src=\"{{ logo }}\" title=\"{{ name }}\" alt=\"{{ name }}\" class=\"img-responsive\" />
\t\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"header__icons\">
\t\t\t\t\t<a href=\"{{ link_compare }}\" class=\"header__icons-compare\">\t
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<circle cx=\"11\" cy=\"11\" r=\"11\" fill=\"white\"/>
\t\t\t\t\t\t\t<path d=\"M7 15.3103L7 6\" stroke=\"#272727\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t<path d=\"M11 15.3103L11 10.1379\" stroke=\"#272727\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t<path d=\"M15 15.3103L15 8.06896\" stroke=\"#272727\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t</svg>
                      \t<span class=\"header__icons_compare-count{% if text_comparelist %} hidden{% endif %}\">{{ text_comparelist }}</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ link_likes }}\" class=\"header__icons-likes\">
\t\t\t\t\t\t<svg width=\"26\" height=\"23\" viewBox=\"0 0 26 23\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M3.83925 12.898L12.2952 21.2997L12.2952 21.2997C12.6276 21.63 12.7938 21.7952 13 21.7952C13.2062 21.7952 13.3724 21.63 13.7048 21.2997L22.1607 12.898C24.3677 10.7052 24.639 7.22796 22.7989 4.71938L22.2567 3.98022C19.9684 0.860827 15.167 1.36442 13.5758 4.89069C13.352 5.38651 12.648 5.38651 12.4242 4.89069C10.833 1.36442 6.03156 0.860829 3.74335 3.98022L3.20114 4.71938C1.36099 7.22796 1.63229 10.7052 3.83925 12.898Z\" fill=\"white\" stroke=\"white\" stroke-width=\"2\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"header__icons_likes-count{% if text_wishlist %} hidden{% endif %}\">{{ text_wishlist }}</span>
\t\t\t\t\t</a>
\t\t\t\t\t{{ cart }}
\t\t\t\t</div>
\t\t\t\t{% if not logged %}
\t\t\t\t\t<a href=\"{{ login }}\" class=\"header__login-btn\">
\t\t\t\t\t\t<span class=\"header__login-btn-icon\">\t\t\t\t\t
\t\t\t\t\t\t\t<svg width=\"19\" height=\"21\" viewBox=\"0 0 19 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path d=\"M17.9276 19.1632C18.501 19.0382 18.8441 18.4404 18.5761 17.9182C17.9175 16.6349 16.8556 15.5072 15.4872 14.6532C13.7696 13.5811 11.665 13 9.5 13C7.33496 13 5.23041 13.5811 3.51276 14.6532C2.14439 15.5072 1.08249 16.6349 0.423888 17.9182C0.155926 18.4404 0.498985 19.0382 1.07242 19.1632C6.62562 20.3735 12.3744 20.3735 17.9276 19.1632Z\" fill=\"white\"/>
\t\t\t\t\t\t\t\t<circle cx=\"9.5\" cy=\"5.5\" r=\"5.5\" fill=\"white\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"header__login-btn-text\">{{ text_login }}</span>
\t\t\t\t\t</a>
\t\t\t\t{% else %}
\t\t\t\t\t<a href=\"{{ logout }}\" class=\"header__login-btn\">
\t\t\t\t\t\t<span class=\"header__login-btn-icon\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"21px\" height=\"21px\" viewBox=\"0 0 533.333 533.333\" style=\"enable-background:new 0 0 533.333 533.333;\" xml:space=\"preserve\" fill=\"#fff\">
\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t<path d=\"M416.667,333.333v-66.666H250V200h166.667v-66.667l100,100L416.667,333.333z M383.333,300v133.333H216.667v100l-200-100V0 h366.667v166.667H350V33.333H83.333L216.667,100v300H350V300H383.333z\"/>
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"header__login-btn-text\">{{ text_logout }}</span>
\t\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"header__bottom\">
\t\t\t\t<button class=\"header__menu-btn\">
\t\t\t\t\t<span class=\"header__menu-btn-icon\">
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"header__menu-btn-text\">{{ text_catalog }}</span>
\t\t\t\t</button>
\t\t\t\t<div class=\"header__search\">
\t\t\t\t\t{{ search }}
\t\t\t\t</div>
\t\t\t\t<div class=\"header__icons\">
\t\t\t\t\t<a href=\"{{ link_compare }}\" class=\"header__icons-compare\">\t
\t\t\t\t\t\t<svg width=\"22\" height=\"22\" viewBox=\"0 0 22 22\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<circle cx=\"11\" cy=\"11\" r=\"11\" fill=\"white\"/>
\t\t\t\t\t\t\t<path d=\"M7 15.3103L7 6\" stroke=\"#272727\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t<path d=\"M11 15.3103L11 10.1379\" stroke=\"#272727\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t\t<path d=\"M15 15.3103L15 8.06896\" stroke=\"#272727\" stroke-width=\"2\" stroke-linecap=\"round\"/>
\t\t\t\t\t\t</svg>
                        <span class=\"header__icons_compare-count{% if text_comparelist == '0' %} hidden{% endif %}\">{{ text_comparelist }}</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ link_likes }}\" class=\"header__icons-likes\">
\t\t\t\t\t\t<svg width=\"26\" height=\"23\" viewBox=\"0 0 26 23\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M3.83925 12.898L12.2952 21.2997L12.2952 21.2997C12.6276 21.63 12.7938 21.7952 13 21.7952C13.2062 21.7952 13.3724 21.63 13.7048 21.2997L22.1607 12.898C24.3677 10.7052 24.639 7.22796 22.7989 4.71938L22.2567 3.98022C19.9684 0.860827 15.167 1.36442 13.5758 4.89069C13.352 5.38651 12.648 5.38651 12.4242 4.89069C10.833 1.36442 6.03156 0.860829 3.74335 3.98022L3.20114 4.71938C1.36099 7.22796 1.63229 10.7052 3.83925 12.898Z\" fill=\"white\" stroke=\"white\" stroke-width=\"2\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span class=\"header__icons_likes-count{% if text_wishlist == '0' %} hidden{% endif %}\">{{ text_wishlist }}</span>
\t\t\t\t\t</a>
\t\t\t\t\t{{ cart }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t\t\t{% if megamenu_status %}
\t\t\t\t{{ menuvh }}
\t\t\t{% else %}
\t\t\t\t{{ menu }}
\t\t\t{% endif %}
\t\t\t
</header>
<div class=\"site\">", "default/template/common/header.twig", "");
    }
}
