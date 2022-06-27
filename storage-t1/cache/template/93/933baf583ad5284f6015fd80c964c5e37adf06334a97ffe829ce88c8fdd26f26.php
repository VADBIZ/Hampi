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

/* default/template/extension/module/ocfilter48/filter_slider_item.twig */
class __TwigTemplate_eb0f6f6fad1be25a1f8db8ee340f57e393a08859c750e67e8dc21bbc0d5f58b7 extends \Twig\Template
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
        echo "<div class=\"ocf-value-list\">
  ";
        // line 2
        if (($context["slider_input"] ?? null)) {
            // line 3
            echo "  <div class=\"ocf-input-group ocf-slider-input-group\">
    ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "prefix", [], "any", false, false, false, 4)) {
                // line 5
                echo "    <span class=\"ocf-input-group-addon\">";
                echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "prefix", [], "any", false, false, false, 5);
                echo "</span>
    ";
            }
            // line 7
            echo "    <input type=\"number\" name=\"ocf[";
            echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "id", [], "any", false, false, false, 7);
            echo "][min]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "min_request", [], "any", false, false, false, 7);
            echo "\" class=\"ocf-form-control\" id=\"ocf-input-min-";
            echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "id", [], "any", false, false, false, 7);
            echo "\" autocomplete=\"off\" aria-label=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "name", [], "any", false, false, false, 7);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "slider_enabled", [], "any", false, false, false, 7)) ? ("") : ("disabled=\"disabled\""));
            echo " />
    ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "type", [], "any", false, false, false, 8) == "slide_dual")) {
                // line 9
                echo "    <span class=\"ocf-input-group-addon\">-</span>
    <input type=\"number\" name=\"ocf[";
                // line 10
                echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "id", [], "any", false, false, false, 10);
                echo "][max]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "max_request", [], "any", false, false, false, 10);
                echo "\" class=\"ocf-form-control\" id=\"ocf-input-max-";
                echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "id", [], "any", false, false, false, 10);
                echo "\" autocomplete=\"off\" aria-label=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "name", [], "any", false, false, false, 10);
                echo "\" ";
                echo ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "slider_enabled", [], "any", false, false, false, 10)) ? ("") : ("disabled=\"disabled\""));
                echo " />
    ";
            }
            // line 12
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "suffix", [], "any", false, false, false, 12)) {
                // line 13
                echo "    <span class=\"ocf-input-group-addon\">";
                echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "suffix", [], "any", false, false, false, 13);
                echo "</span>
    ";
            }
            // line 15
            echo "  </div>
  ";
        }
        // line 17
        echo "  <div class=\"ocf-value-slider\">
    <div id=\"ocf-s-";
        // line 18
        echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "id", [], "any", false, false, false, 18);
        echo "\" class=\"ocf-value-scale\"
      data-filter-key=\"";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "filter_key", [], "any", false, false, false, 19);
        echo "\"
      data-min=\"";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "min", [], "any", false, false, false, 20);
        echo "\"
      data-max=\"";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "max", [], "any", false, false, false, 21);
        echo "\"
      data-range=\"";
        // line 22
        echo (((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "type", [], "any", false, false, false, 22) == "slide_dual")) ? ("true") : ("false"));
        echo "\"
      data-min-start=\"";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "min_request", [], "any", false, false, false, 23);
        echo "\"
      ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "type", [], "any", false, false, false, 24) == "slide_dual")) {
            // line 25
            echo "      data-max-start=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "max_request", [], "any", false, false, false, 25);
            echo "\"
      ";
        }
        // line 27
        echo "      
      ";
        // line 28
        if (($context["slider_input"] ?? null)) {
            // line 29
            echo "      data-input-min=\"#ocf-input-min-";
            echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "id", [], "any", false, false, false, 29);
            echo "\"
      ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "type", [], "any", false, false, false, 30) == "slide_dual")) {
                // line 31
                echo "      data-input-max=\"#ocf-input-max-";
                echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "id", [], "any", false, false, false, 31);
                echo "\"
      ";
            }
            // line 33
            echo "      ";
        }
        // line 34
        echo "      
      data-text-min=\"#ocf-text-min-";
        // line 35
        echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "id", [], "any", false, false, false, 35);
        echo "\"
      ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "type", [], "any", false, false, false, 36) == "slide_dual")) {
            // line 37
            echo "      data-text-max=\"#ocf-text-max-";
            echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "id", [], "any", false, false, false, 37);
            echo "\"
      ";
        }
        // line 39
        echo "      
      data-prefix=\"";
        // line 40
        echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "prefix", [], "any", false, false, false, 40);
        echo "\"
      data-suffix=\"";
        // line 41
        echo twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "suffix", [], "any", false, false, false, 41);
        echo "\"
      
      ";
        // line 43
        if ( !twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "slider_enabled", [], "any", false, false, false, 43)) {
            // line 44
            echo "      disabled=\"disabled\"
      ";
        }
        // line 46
        echo "    ></div>
  </div>
  ";
        // line 48
        if ( !($context["search_button"] ?? null)) {
            // line 49
            echo "  <div class=\"ocf-mobile ocf-btn-search-slider ocf-text-right\">
    <button type=\"button\" class=\"ocf-btn ocf-disabled ocf-search-btn-static\" data-ocf=\"button\" data-loading-text=\"";
            // line 50
            echo ($context["text_loading"] ?? null);
            echo "\" disabled=\"disabled\">";
            echo ($context["button_select"] ?? null);
            echo "</button>
  </div>
  ";
        }
        // line 52
        echo "   
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/ocfilter48/filter_slider_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 52,  195 => 50,  192 => 49,  190 => 48,  186 => 46,  182 => 44,  180 => 43,  175 => 41,  171 => 40,  168 => 39,  162 => 37,  160 => 36,  156 => 35,  153 => 34,  150 => 33,  144 => 31,  142 => 30,  137 => 29,  135 => 28,  132 => 27,  126 => 25,  124 => 24,  120 => 23,  116 => 22,  112 => 21,  108 => 20,  104 => 19,  100 => 18,  97 => 17,  93 => 15,  87 => 13,  84 => 12,  71 => 10,  68 => 9,  66 => 8,  53 => 7,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ocf-value-list\">
  {% if slider_input %}
  <div class=\"ocf-input-group ocf-slider-input-group\">
    {% if filter.prefix %}
    <span class=\"ocf-input-group-addon\">{{ filter.prefix }}</span>
    {% endif %}
    <input type=\"number\" name=\"ocf[{{ filter.id }}][min]\" value=\"{{ filter.min_request }}\" class=\"ocf-form-control\" id=\"ocf-input-min-{{ filter.id }}\" autocomplete=\"off\" aria-label=\"{{ filter.name }}\" {{ filter.slider_enabled ? '' : 'disabled=\"disabled\"' }} />
    {% if filter.type == 'slide_dual' %}
    <span class=\"ocf-input-group-addon\">-</span>
    <input type=\"number\" name=\"ocf[{{ filter.id }}][max]\" value=\"{{ filter.max_request }}\" class=\"ocf-form-control\" id=\"ocf-input-max-{{ filter.id }}\" autocomplete=\"off\" aria-label=\"{{ filter.name }}\" {{ filter.slider_enabled ? '' : 'disabled=\"disabled\"' }} />
    {% endif %}
    {% if filter.suffix %}
    <span class=\"ocf-input-group-addon\">{{ filter.suffix }}</span>
    {% endif %}
  </div>
  {% endif %}
  <div class=\"ocf-value-slider\">
    <div id=\"ocf-s-{{ filter.id }}\" class=\"ocf-value-scale\"
      data-filter-key=\"{{ filter.filter_key }}\"
      data-min=\"{{ filter.min }}\"
      data-max=\"{{ filter.max }}\"
      data-range=\"{{ filter.type == 'slide_dual' ? 'true' : 'false' }}\"
      data-min-start=\"{{ filter.min_request }}\"
      {% if filter.type == 'slide_dual' %}
      data-max-start=\"{{ filter.max_request }}\"
      {% endif %}
      
      {% if slider_input %}
      data-input-min=\"#ocf-input-min-{{ filter.id }}\"
      {% if filter.type == 'slide_dual' %}
      data-input-max=\"#ocf-input-max-{{ filter.id }}\"
      {% endif %}
      {% endif %}
      
      data-text-min=\"#ocf-text-min-{{ filter.id }}\"
      {% if filter.type == 'slide_dual' %}
      data-text-max=\"#ocf-text-max-{{ filter.id }}\"
      {% endif %}
      
      data-prefix=\"{{ filter.prefix }}\"
      data-suffix=\"{{ filter.suffix }}\"
      
      {% if not filter.slider_enabled %}
      disabled=\"disabled\"
      {% endif %}
    ></div>
  </div>
  {% if not search_button %}
  <div class=\"ocf-mobile ocf-btn-search-slider ocf-text-right\">
    <button type=\"button\" class=\"ocf-btn ocf-disabled ocf-search-btn-static\" data-ocf=\"button\" data-loading-text=\"{{ text_loading }}\" disabled=\"disabled\">{{ button_select }}</button>
  </div>
  {% endif %}   
</div>", "default/template/extension/module/ocfilter48/filter_slider_item.twig", "/home/p616774/www/test.hampi.ru/catalog/view/theme/default/template/extension/module/ocfilter48/filter_slider_item.twig");
    }
}
