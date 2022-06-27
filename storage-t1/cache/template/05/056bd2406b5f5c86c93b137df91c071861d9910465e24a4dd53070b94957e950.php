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

/* default/template/extension/module/ocfilter48/module.twig */
class __TwigTemplate_4a2dfc41d0e2e33cc56339ba1a8ad4f0b35363e21b661a17c6330a594ca9d76d extends \Twig\Template
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
        echo "<div class=\"ocf-container ";
        echo ($context["ocf_class"] ?? null);
        echo " ocf-theme-";
        echo ($context["theme"] ?? null);
        echo " ocf-";
        echo ($context["layout"] ?? null);
        echo " ocf-";
        echo ($context["position"] ?? null);
        echo "\" id=\"ocf-module-";
        echo ($context["index"] ?? null);
        echo "\">
";
        // line 2
        if ((($context["index"] ?? null) < 2)) {
            // line 3
            echo "<link rel=\"stylesheet\" href=\"";
            echo ($context["stylesheet"] ?? null);
            echo "\" />
";
        }
        // line 5
        echo "
\t<button class=\"ocf-close\"></button>

  <div class=\"ocf-content\">
    <div class=\"ocf-header\">    
      
      ";
        // line 11
        echo ($context["heading_title_desktop"] ?? null);
        echo "
      
      ";
        // line 13
        if (((($context["layout"] ?? null) == "horizontal") && (($context["search_button"] ?? null) || ($context["selecteds"] ?? null)))) {
            // line 14
            echo "      <div class=\"ocf-header-btn ocf-desktop\">
        ";
            // line 15
            if (($context["selecteds"] ?? null)) {
                // line 16
                echo "        <button type=\"button\" onclick=\"location = '";
                echo ($context["link"] ?? null);
                echo "';\" class=\"ocf-btn ocf-btn-link\">";
                echo ($context["button_cancel_all"] ?? null);
                echo "</button>
        ";
            } else {
                // line 18
                echo "        <button type=\"button\" data-ocf-discard=\"*\" class=\"ocf-btn ocf-btn-link ocf-disabled\" disabled=\"disabled\">";
                echo ($context["button_cancel_all"] ?? null);
                echo "</button>
        ";
            }
            // line 19
            echo "         
        ";
            // line 20
            if (($context["search_button"] ?? null)) {
                // line 21
                echo "        <button type=\"button\" class=\"ocf-btn ocf-btn-link ocf-disabled\" data-ocf=\"button\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" disabled=\"disabled\">";
                echo ($context["button_select"] ?? null);
                echo "</button>
        ";
            }
            // line 22
            echo "        
      </div>   
      ";
        }
        // line 24
        echo "  
 
    </div>
          
    <div class=\"ocf-body\">     
      ";
        // line 29
        $this->loadTemplate("default/template/extension/module/ocfilter48/filter_list.twig", "default/template/extension/module/ocfilter48/module.twig", 29)->display($context);
        // line 30
        echo "    </div>      
       
    ";
        // line 32
        if ((($context["search_button"] ?? null) || ($context["selecteds"] ?? null))) {
            // line 33
            echo "    ";
            if ((($context["layout"] ?? null) == "vertical")) {
                // line 34
                echo "    ";
                $context["class"] = "ocf-footer";
                // line 35
                echo "    ";
            } else {
                // line 36
                echo "    ";
                $context["class"] = "ocf-footer";
                // line 37
                echo "    ";
            }
            // line 38
            echo "    <div class=\"";
            echo ($context["class"] ?? null);
            echo "\">
      <div class=\"ocf-between\">
        ";
            // line 40
            if (($context["selecteds"] ?? null)) {
                // line 41
                echo "        <button type=\"button\" onclick=\"location = '";
                echo ($context["link"] ?? null);
                echo "';\" class=\"ocf-btn ocf-btn-link\">";
                echo ($context["button_cancel_all"] ?? null);
                echo "</button>
        ";
            } else {
                // line 43
                echo "        <button type=\"button\" data-ocf-discard=\"*\" class=\"ocf-btn ocf-btn-link ocf-disabled\" disabled=\"disabled\">";
                echo ($context["button_cancel_all"] ?? null);
                echo "</button>
        ";
            }
            // line 44
            echo "        
        ";
            // line 45
            if (($context["search_button"] ?? null)) {
                // line 46
                echo "        <button type=\"button\" class=\"ocf-btn ocf-disabled ocf-btn-block ocf-search-btn-static\" data-ocf=\"button\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" disabled=\"disabled\">";
                echo ($context["button_select"] ?? null);
                echo "</button>
        ";
            }
            // line 47
            echo "        
      </div>
    </div>            
    ";
        }
        // line 51
        echo "  </div><!-- /.ocf-content -->
  
  <div class=\"ocf-hidden\">
    <button class=\"ocf-btn ocf-search-btn-popover\" data-ocf=\"button\" data-loading-text=\"";
        // line 54
        echo ($context["text_loading"] ?? null);
        echo "\">";
        echo ($context["button_select"] ?? null);
        echo "</button>
  </div>
  
<script>
+(function(global) {

var startOCFilter = function() {
  var loadScript = function(url, callback) {
    \$.ajax({ url: url, dataType: 'script', success: callback, async: true });
  };
  
  var init = function() {
    \$('#ocf-module-";
        // line 66
        echo ($context["index"] ?? null);
        echo "').ocfilter({
      index: '";
        // line 67
        echo ($context["index"] ?? null);
        echo "',
      
      paramsIndex: '";
        // line 69
        echo ($context["url_index"] ?? null);
        echo "',
      
      urlHost: '";
        // line 71
        echo ($context["url_host"] ?? null);
        echo "',
      urlParams: '";
        // line 72
        echo ($context["url_params"] ?? null);
        echo "',
      
      params: '";
        // line 74
        echo ($context["filter_params"] ?? null);
        echo "',
      
      sepFilt: '";
        // line 76
        echo ($context["sep_filt"] ?? null);
        echo "',
      sepFsrc: '";
        // line 77
        echo ($context["sep_fsrc"] ?? null);
        echo "',
      sepVals: '";
        // line 78
        echo ($context["sep_vals"] ?? null);
        echo "',
      sepSdot: '";
        // line 79
        echo ($context["sep_sdot"] ?? null);
        echo "',
      sepSneg: '";
        // line 80
        echo ($context["sep_sneg"] ?? null);
        echo "',
      sepSran: '";
        // line 81
        echo ($context["sep_sran"] ?? null);
        echo "',

      position: '";
        // line 83
        echo ($context["position"] ?? null);
        echo "',
      layout: '";
        // line 84
        echo ($context["layout"] ?? null);
        echo "',
      numeralLocale: '";
        // line 85
        echo ($context["numeral_locale"] ?? null);
        echo "',
      searchButton: ";
        // line 86
        echo (($context["search_button"] ?? null) + 0);
        echo ",
      showCounter: ";
        // line 87
        echo (($context["show_counter"] ?? null) + 0);
        echo ",
      sliderInput: ";
        // line 88
        echo (($context["slider_input"] ?? null) + 0);
        echo ",
      sliderPips: ";
        // line 89
        echo (($context["slider_pips"] ?? null) + 0);
        echo ",
      priceLogarithmic: ";
        // line 90
        echo (($context["price_logarithmic"] ?? null) + 0);
        echo ",
      lazyLoadFilters: ";
        // line 91
        echo (($context["hidden_filters_lazy_load"] ?? null) + 0);
        echo ",
      lazyLoadValues: ";
        // line 92
        echo (($context["hidden_values_lazy_load"] ?? null) + 0);
        echo ",
      
      textLoad: '";
        // line 94
        echo twig_escape_filter($this->env, ($context["text_loading_ocf"] ?? null), "js");
        echo "',
      textSelect: '";
        // line 95
        echo twig_escape_filter($this->env, ($context["button_select"] ?? null), "js");
        echo "'
    });
  };
  
  ";
        // line 99
        if ((($context["index"] ?? null) < 2)) {
            // line 100
            echo "  loadScript('";
            echo ($context["javascript"] ?? null);
            echo "', init);
  ";
        }
        // line 102
        echo "};

var ready = function(fn) {
  if (global.readyState != 'loading') {
    fn();
  } else {
    global.addEventListener('DOMContentLoaded', fn);
  }
};

ready(function() { // DOM loaded
  if ('undefined' == typeof jQuery) {
    console.error('OCFilter required jQuery');
    
    return;
  }

  \$(startOCFilter); // jQuery loaded
});

})(document);
</script>
</div><!-- /.ocf-container -->";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/ocfilter48/module.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 102,  310 => 100,  308 => 99,  301 => 95,  297 => 94,  292 => 92,  288 => 91,  284 => 90,  280 => 89,  276 => 88,  272 => 87,  268 => 86,  264 => 85,  260 => 84,  256 => 83,  251 => 81,  247 => 80,  243 => 79,  239 => 78,  235 => 77,  231 => 76,  226 => 74,  221 => 72,  217 => 71,  212 => 69,  207 => 67,  203 => 66,  186 => 54,  181 => 51,  175 => 47,  167 => 46,  165 => 45,  162 => 44,  156 => 43,  148 => 41,  146 => 40,  140 => 38,  137 => 37,  134 => 36,  131 => 35,  128 => 34,  125 => 33,  123 => 32,  119 => 30,  117 => 29,  110 => 24,  105 => 22,  97 => 21,  95 => 20,  92 => 19,  86 => 18,  78 => 16,  76 => 15,  73 => 14,  71 => 13,  66 => 11,  58 => 5,  52 => 3,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ocf-container {{ ocf_class }} ocf-theme-{{ theme }} ocf-{{ layout }} ocf-{{ position }}\" id=\"ocf-module-{{ index }}\">
{% if index < 2 %}
<link rel=\"stylesheet\" href=\"{{ stylesheet }}\" />
{% endif %}

\t<button class=\"ocf-close\"></button>

  <div class=\"ocf-content\">
    <div class=\"ocf-header\">    
      
      {{ heading_title_desktop }}
      
      {% if layout == 'horizontal' and (search_button or selecteds) %}
      <div class=\"ocf-header-btn ocf-desktop\">
        {% if selecteds %}
        <button type=\"button\" onclick=\"location = '{{ link }}';\" class=\"ocf-btn ocf-btn-link\">{{ button_cancel_all }}</button>
        {% else %}
        <button type=\"button\" data-ocf-discard=\"*\" class=\"ocf-btn ocf-btn-link ocf-disabled\" disabled=\"disabled\">{{ button_cancel_all }}</button>
        {% endif %}         
        {% if search_button %}
        <button type=\"button\" class=\"ocf-btn ocf-btn-link ocf-disabled\" data-ocf=\"button\" data-loading-text=\"{{ text_loading }}\" disabled=\"disabled\">{{ button_select }}</button>
        {% endif %}        
      </div>   
      {% endif %}  
 
    </div>
          
    <div class=\"ocf-body\">     
      {% include('default/template/extension/module/ocfilter48/filter_list.twig') %}
    </div>      
       
    {% if search_button or selecteds %}
    {% if layout == 'vertical' %}
    {% set class = 'ocf-footer' %}
    {% else %}
    {% set class = 'ocf-footer' %}
    {% endif %}
    <div class=\"{{ class }}\">
      <div class=\"ocf-between\">
        {% if selecteds %}
        <button type=\"button\" onclick=\"location = '{{ link }}';\" class=\"ocf-btn ocf-btn-link\">{{ button_cancel_all }}</button>
        {% else %}
        <button type=\"button\" data-ocf-discard=\"*\" class=\"ocf-btn ocf-btn-link ocf-disabled\" disabled=\"disabled\">{{ button_cancel_all }}</button>
        {% endif %}        
        {% if search_button %}
        <button type=\"button\" class=\"ocf-btn ocf-disabled ocf-btn-block ocf-search-btn-static\" data-ocf=\"button\" data-loading-text=\"{{ text_loading }}\" disabled=\"disabled\">{{ button_select }}</button>
        {% endif %}        
      </div>
    </div>            
    {% endif %}
  </div><!-- /.ocf-content -->
  
  <div class=\"ocf-hidden\">
    <button class=\"ocf-btn ocf-search-btn-popover\" data-ocf=\"button\" data-loading-text=\"{{ text_loading }}\">{{ button_select }}</button>
  </div>
  
<script>
+(function(global) {

var startOCFilter = function() {
  var loadScript = function(url, callback) {
    \$.ajax({ url: url, dataType: 'script', success: callback, async: true });
  };
  
  var init = function() {
    \$('#ocf-module-{{ index }}').ocfilter({
      index: '{{ index }}',
      
      paramsIndex: '{{ url_index }}',
      
      urlHost: '{{ url_host }}',
      urlParams: '{{ url_params }}',
      
      params: '{{ filter_params }}',
      
      sepFilt: '{{ sep_filt }}',
      sepFsrc: '{{ sep_fsrc }}',
      sepVals: '{{ sep_vals }}',
      sepSdot: '{{ sep_sdot }}',
      sepSneg: '{{ sep_sneg }}',
      sepSran: '{{ sep_sran }}',

      position: '{{ position }}',
      layout: '{{ layout }}',
      numeralLocale: '{{ numeral_locale }}',
      searchButton: {{ search_button + 0 }},
      showCounter: {{ show_counter + 0 }},
      sliderInput: {{ slider_input + 0 }},
      sliderPips: {{ slider_pips + 0 }},
      priceLogarithmic: {{ price_logarithmic + 0 }},
      lazyLoadFilters: {{ hidden_filters_lazy_load + 0 }},
      lazyLoadValues: {{ hidden_values_lazy_load + 0 }},
      
      textLoad: '{{ text_loading_ocf|e('js') }}',
      textSelect: '{{ button_select|e('js') }}'
    });
  };
  
  {% if index < 2 %}
  loadScript('{{ javascript }}', init);
  {% endif %}
};

var ready = function(fn) {
  if (global.readyState != 'loading') {
    fn();
  } else {
    global.addEventListener('DOMContentLoaded', fn);
  }
};

ready(function() { // DOM loaded
  if ('undefined' == typeof jQuery) {
    console.error('OCFilter required jQuery');
    
    return;
  }

  \$(startOCFilter); // jQuery loaded
});

})(document);
</script>
</div><!-- /.ocf-container -->", "default/template/extension/module/ocfilter48/module.twig", "");
    }
}
