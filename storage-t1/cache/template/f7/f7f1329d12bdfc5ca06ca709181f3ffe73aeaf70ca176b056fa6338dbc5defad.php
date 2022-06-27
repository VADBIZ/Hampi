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

/* default/template/extension/module/ocfilter48/filter_item.twig */
class __TwigTemplate_a04e48ece6839fb25ce90148754eb3ee9fde064dfa14e6416987ba3a28639f6d extends \Twig\Template
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
        $context["dropdown"] = twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "dropdown", [], "any", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        if ((($context["layout"] ?? null) == "horizontal")) {
            // line 4
            $context["dropdown"] = true;
        }
        // line 6
        echo "
";
        // line 7
        $context["class"] = "ocf-filter";
        // line 8
        echo "
";
        // line 9
        if (($context["dropdown"] ?? null)) {
            // line 10
            $context["class"] = (($context["class"] ?? null) . " ocf-dropdown");
        }
        // line 12
        echo "
";
        // line 13
        if (((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "type", [], "any", false, false, false, 13) == "slide") || (twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "type", [], "any", false, false, false, 13) == "slide_dual"))) {
            // line 14
            $context["class"] = (($context["class"] ?? null) . " ocf-slider");
            // line 15
            echo "
";
            // line 16
            if (($context["slider_input"] ?? null)) {
                // line 17
                $context["class"] = (($context["class"] ?? null) . " ocf-has-input");
            }
        }
        // line 20
        echo "
";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "selected", [], "any", false, false, false, 21)) {
            // line 22
            $context["class"] = (($context["class"] ?? null) . " ocf-active");
        }
        // line 24
        echo "
<div class=\"";
        // line 25
        echo ($context["class"] ?? null);
        echo "\" id=\"ocf-filter-";
        echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "id", [], "any", false, false, false, 25);
        echo "\">
  <div class=\"ocf-filter-body\">
    <div class=\"ocf-filter-header\" data-ocf=\"expand\">                         
      
      <span class=\"ocf-filter-name\">";
        // line 29
        echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "name", [], "any", false, false, false, 29);
        echo "</span>         
        
\t\t<div class=\"ocf-filter__icon\">
\t\t\t<span class=\"ocf-filter__minus\">
\t\t\t\t<svg width=\"10\" height=\"2\" viewBox=\"0 0 10 2\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0 1.00049C-5.21268e-10 0.724346 0.223858 0.500488 0.5 0.500488L9.5009 0.500488C9.77704 0.500488 10.0009 0.724346 10.0009 1.00049C10.0009 1.27663 9.77704 1.50049 9.5009 1.50049H0.5C0.223858 1.50049 5.21268e-10 1.27663 0 1.00049Z\" fill=\"#272727\"/>
\t\t\t\t</svg>  
\t\t\t</span> 
\t\t\t<span class=\"ocf-filter__plus\">\t
\t\t\t\t<svg width=\"10\" height=\"10\" viewBox=\"0 0 10 10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.50043 0.5C5.50043 0.223858 5.27657 0 5.00043 0C4.72428 0 4.50043 0.223858 4.50043 0.5V4.50034H0.5C0.223858 4.50034 0 4.7242 0 5.00034C0 5.27648 0.223858 5.50034 0.5 5.50034H4.50043V9.5009C4.50043 9.77704 4.72428 10.0009 5.00043 10.0009C5.27657 10.0009 5.50043 9.77704 5.50043 9.5009V5.50034H9.5009C9.77704 5.50034 10.0009 5.27648 10.0009 5.00034C10.0009 4.7242 9.77704 4.50034 9.5009 4.50034H5.50043V0.5Z\" fill=\"#272727\"/>
\t\t\t\t</svg>
\t\t\t</span> 
\t\t</div>
    </div><!-- /.ocf-filter-header -->
    
    ";
        // line 45
        if (((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "type", [], "any", false, false, false, 45) == "slide") || (twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "type", [], "any", false, false, false, 45) == "slide_dual"))) {
            // line 46
            echo "    
    ";
            // line 47
            $this->loadTemplate("default/template/extension/module/ocfilter48/filter_slider_item.twig", "default/template/extension/module/ocfilter48/filter_item.twig", 47)->display($context);
            // line 48
            echo "    
    ";
        } else {
            // line 50
            echo "    
    ";
            // line 51
            $this->loadTemplate("default/template/extension/module/ocfilter48/value_list.twig", "default/template/extension/module/ocfilter48/filter_item.twig", 51)->display($context);
            // line 52
            echo "    
    ";
        }
        // line 54
        echo "  </div>    
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/ocfilter48/filter_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 54,  131 => 52,  129 => 51,  126 => 50,  122 => 48,  120 => 47,  117 => 46,  115 => 45,  96 => 29,  87 => 25,  84 => 24,  81 => 22,  79 => 21,  76 => 20,  72 => 17,  70 => 16,  67 => 15,  65 => 14,  63 => 13,  60 => 12,  57 => 10,  55 => 9,  52 => 8,  50 => 7,  47 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set dropdown = filter.dropdown %}

{% if layout == 'horizontal' %}
{% set dropdown = true %}
{% endif %}

{% set class = 'ocf-filter' %}

{% if dropdown %}
{% set class = class ~ ' ocf-dropdown' %}
{% endif %}

{% if filter.type == 'slide' or filter.type == 'slide_dual' %}
{% set class = class ~ ' ocf-slider' %}

{% if slider_input %}
{% set class = class ~ ' ocf-has-input' %}
{% endif %}
{% endif %}

{% if filter.selected %}
{% set class = class ~ ' ocf-active' %}
{% endif %}

<div class=\"{{ class }}\" id=\"ocf-filter-{{ filter.id }}\">
  <div class=\"ocf-filter-body\">
    <div class=\"ocf-filter-header\" data-ocf=\"expand\">                         
      
      <span class=\"ocf-filter-name\">{{ filter.name }}</span>         
        
\t\t<div class=\"ocf-filter__icon\">
\t\t\t<span class=\"ocf-filter__minus\">
\t\t\t\t<svg width=\"10\" height=\"2\" viewBox=\"0 0 10 2\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0 1.00049C-5.21268e-10 0.724346 0.223858 0.500488 0.5 0.500488L9.5009 0.500488C9.77704 0.500488 10.0009 0.724346 10.0009 1.00049C10.0009 1.27663 9.77704 1.50049 9.5009 1.50049H0.5C0.223858 1.50049 5.21268e-10 1.27663 0 1.00049Z\" fill=\"#272727\"/>
\t\t\t\t</svg>  
\t\t\t</span> 
\t\t\t<span class=\"ocf-filter__plus\">\t
\t\t\t\t<svg width=\"10\" height=\"10\" viewBox=\"0 0 10 10\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.50043 0.5C5.50043 0.223858 5.27657 0 5.00043 0C4.72428 0 4.50043 0.223858 4.50043 0.5V4.50034H0.5C0.223858 4.50034 0 4.7242 0 5.00034C0 5.27648 0.223858 5.50034 0.5 5.50034H4.50043V9.5009C4.50043 9.77704 4.72428 10.0009 5.00043 10.0009C5.27657 10.0009 5.50043 9.77704 5.50043 9.5009V5.50034H9.5009C9.77704 5.50034 10.0009 5.27648 10.0009 5.00034C10.0009 4.7242 9.77704 4.50034 9.5009 4.50034H5.50043V0.5Z\" fill=\"#272727\"/>
\t\t\t\t</svg>
\t\t\t</span> 
\t\t</div>
    </div><!-- /.ocf-filter-header -->
    
    {% if filter.type == 'slide' or filter.type == 'slide_dual' %}
    
    {% include('default/template/extension/module/ocfilter48/filter_slider_item.twig') %}
    
    {% else %}
    
    {% include('default/template/extension/module/ocfilter48/value_list.twig') %}
    
    {% endif %}
  </div>    
</div>", "default/template/extension/module/ocfilter48/filter_item.twig", "/home/p616774/www/test.hampi.ru/catalog/view/theme/default/template/extension/module/ocfilter48/filter_item.twig");
    }
}
