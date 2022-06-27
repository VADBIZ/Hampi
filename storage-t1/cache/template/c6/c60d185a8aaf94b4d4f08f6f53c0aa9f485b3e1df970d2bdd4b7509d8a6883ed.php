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

/* default/template/account/login.twig */
class __TwigTemplate_f087589a73eb5d44ce02fe7f9b8a63aa65786e7957cb85c9930e22e0c25fbb25 extends \Twig\Template
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
<div id=\"account-login\" class=\"container\">
  ";
        // line 3
        if (($context["success"] ?? null)) {
            // line 4
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 6
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 7
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 9
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 10
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <div class=\"loginBox\">
            <h2 class=\"loginBox__title\">";
        // line 21
        echo ($context["heading_client_title"] ?? null);
        echo "</h2>
            <form action=\"";
        // line 22
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
\t\t\t  \t<label for=\"\">Email</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 25
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control loginbox__input\" />
              </div>
              <div class=\"form-group\">
\t\t\t\t  <label for=\"\">Пароль</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 29
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control loginbox__input\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"loginBox__restore\">";
        // line 31
        echo ($context["text_forgotten_label"] ?? null);
        echo " <a href=\"";
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
\t\t\t\t<div class=\"form-group loginBox__check\">
                \t<input type=\"checkbox\" name=\"rules\" value=\"1\" id=\"checkbox-rules\" checked />
\t\t\t\t\t<label for=\"checkbox-rules\">";
        // line 34
        echo ($context["text_rules"] ?? null);
        echo "</label>
\t\t\t\t</div>
              <input type=\"submit\" value=\"";
        // line 36
        echo ($context["button_next"] ?? null);
        echo "\" class=\"btn btn-primary btn-block loginBox__button\" />
              ";
        // line 37
        if (($context["redirect"] ?? null)) {
            // line 38
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 40
        echo "\t\t\t\t<input type=\"hidden\" name=\"firstname\" value=\"\">
\t\t\t\t<input type=\"hidden\" name=\"lastname\" value=\"\">
\t\t\t\t<input type=\"hidden\" name=\"telephone\" value=\"\">
            </form>
          </div>
        </div>
      </div>
      ";
        // line 47
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 48
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 50
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 50,  160 => 48,  156 => 47,  147 => 40,  141 => 38,  139 => 37,  135 => 36,  130 => 34,  120 => 31,  113 => 29,  104 => 25,  98 => 22,  94 => 21,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  69 => 12,  66 => 11,  64 => 10,  59 => 9,  53 => 7,  50 => 6,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-login\" class=\"container\">
  {% if success %}
  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}</div>
  {% endif %}
  {% if error_warning %}
  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}</div>
  {% endif %}
  <div class=\"row\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <div class=\"loginBox\">
            <h2 class=\"loginBox__title\">{{ heading_client_title }}</h2>
            <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
\t\t\t  \t<label for=\"\">Email</label>
                <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control loginbox__input\" />
              </div>
              <div class=\"form-group\">
\t\t\t\t  <label for=\"\">Пароль</label>
                <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control loginbox__input\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"loginBox__restore\">{{ text_forgotten_label }} <a href=\"{{ forgotten }}\">{{ text_forgotten }}</a></div>
\t\t\t\t<div class=\"form-group loginBox__check\">
                \t<input type=\"checkbox\" name=\"rules\" value=\"1\" id=\"checkbox-rules\" checked />
\t\t\t\t\t<label for=\"checkbox-rules\">{{ text_rules }}</label>
\t\t\t\t</div>
              <input type=\"submit\" value=\"{{ button_next }}\" class=\"btn btn-primary btn-block loginBox__button\" />
              {% if redirect %}
              <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\" />
              {% endif %}
\t\t\t\t<input type=\"hidden\" name=\"firstname\" value=\"\">
\t\t\t\t<input type=\"hidden\" name=\"lastname\" value=\"\">
\t\t\t\t<input type=\"hidden\" name=\"telephone\" value=\"\">
            </form>
          </div>
        </div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}", "default/template/account/login.twig", "");
    }
}
