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

/* default/template/common/home.twig */
class __TwigTemplate_e2388c8f2f3a39112dacc7683050a52c61596c8d11ec3f286931bce7159ed141 extends \Twig\Template
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
<div id=\"common-home\" class=\"container\">
  <div class=\"row\">
\t\t\t";
        // line 4
        if (((twig_get_attribute($this->env, $this->source, ($context["megamenu_setting"] ?? null), "menu_open_hpage", [], "any", true, true, false, 4) && (twig_get_attribute($this->env, $this->source, ($context["megamenu_setting"] ?? null), "menu_open_hpage", [], "any", false, false, false, 4) == "1")) && (twig_get_attribute($this->env, $this->source, ($context["megamenu_setting"] ?? null), "main_menu_selection", [], "any", false, false, false, 4) == "1"))) {
            echo " 
\t\t\t\t<div class=\"col-md-3\"><div id=\"menu-header-open\"></div></div>
\t\t\t\t<script>
\t\t\t\tif(window.matchMedia(\"(min-width: 992px)\").matches){
\t\t\t\t\t\$('#menu-vertical-list').addClass(\"nsmenu-block\");
\t\t\t\t\t\$('#menu-vertical').addClass(\"openm\");
\t\t\t\t}
\t\t\t\t\$(window).resize(function() {
\t\t\t\t\tif (\$(window).width() > 992) {
\t\t\t\t\t\t\$('#menu-vertical-list').addClass(\"nsmenu-block\");
\t\t\t\t\t\t\$('#menu-vertical').addClass(\"openm\");
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#menu-vertical').removeClass(\"openm\");
\t\t\t\t\t\t\$('#menu-vertical-list').removeClass(\"nsmenu-block\");
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$(function(){\$('#menu-header-open').css({'min-height': \$('#menu-vertical-list').outerHeight() - 20});});</script>
\t\t\t\t<div class=\"col-md-9\">";
            // line 21
            echo ($context["content_top"] ?? null);
            echo "</div>
\t\t\t";
        } else {
            // line 22
            echo " 
\t\t\t\t<div class=\"col-md-12\">";
            // line 23
            echo ($context["content_top"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 25
        echo "\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t";
        // line 27
        echo ($context["column_left"] ?? null);
        echo "
\t\t\t
    ";
        // line 29
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 30
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 31
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 32
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 33
            echo "    ";
        } else {
            // line 34
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 35
            echo "    ";
        }
        // line 36
        if (($context["content_bottom"] ?? null)) {
            // line 37
            echo "    <div id=\"content\" class=\"";
            echo ($context["class"] ?? null);
            echo "\">";
            echo ($context["content_bottom"] ?? null);
            echo "</div>
 ";
        }
        // line 39
        echo "    ";
        echo ($context["column_right"] ?? null);
        echo "
\t<div class=\"col-sm-12\">";
        // line 40
        echo ($context["bottom2"] ?? null);
        echo "</div>
\t</div>
</div>
";
        // line 43
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  120 => 40,  115 => 39,  107 => 37,  105 => 36,  102 => 35,  99 => 34,  96 => 33,  93 => 32,  90 => 31,  87 => 30,  85 => 29,  80 => 27,  76 => 25,  71 => 23,  68 => 22,  63 => 21,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"common-home\" class=\"container\">
  <div class=\"row\">
\t\t\t{% if megamenu_setting.menu_open_hpage is defined and megamenu_setting.menu_open_hpage == '1' and megamenu_setting.main_menu_selection == '1' %} 
\t\t\t\t<div class=\"col-md-3\"><div id=\"menu-header-open\"></div></div>
\t\t\t\t<script>
\t\t\t\tif(window.matchMedia(\"(min-width: 992px)\").matches){
\t\t\t\t\t\$('#menu-vertical-list').addClass(\"nsmenu-block\");
\t\t\t\t\t\$('#menu-vertical').addClass(\"openm\");
\t\t\t\t}
\t\t\t\t\$(window).resize(function() {
\t\t\t\t\tif (\$(window).width() > 992) {
\t\t\t\t\t\t\$('#menu-vertical-list').addClass(\"nsmenu-block\");
\t\t\t\t\t\t\$('#menu-vertical').addClass(\"openm\");
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#menu-vertical').removeClass(\"openm\");
\t\t\t\t\t\t\$('#menu-vertical-list').removeClass(\"nsmenu-block\");
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$(function(){\$('#menu-header-open').css({'min-height': \$('#menu-vertical-list').outerHeight() - 20});});</script>
\t\t\t\t<div class=\"col-md-9\">{{ content_top }}</div>
\t\t\t{% else %} 
\t\t\t\t<div class=\"col-md-12\">{{ content_top }}</div>
\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t{{ column_left }}
\t\t\t
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
{% if content_bottom %}
    <div id=\"content\" class=\"{{ class }}\">{{ content_bottom }}</div>
 {% endif %}
    {{ column_right }}
\t<div class=\"col-sm-12\">{{ bottom2 }}</div>
\t</div>
</div>
{{ footer }}", "default/template/common/home.twig", "");
    }
}
