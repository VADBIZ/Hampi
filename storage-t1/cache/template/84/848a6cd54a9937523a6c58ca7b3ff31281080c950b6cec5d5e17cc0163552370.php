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

/* default/template/kbmp_marketplace/seller_activation.twig */
class __TwigTemplate_b024a1f403ad8d65f8ffe87aa3aa3a5688e21c58fc30a4ebea577b1b2b221e35 extends \Twig\Template
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
\t<div class=\"row\">
\t\t<div id=\"content\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"loginBox\">
\t\t\t\t\t\t<h2 class=\"loginBox__title\">";
        // line 8
        echo ($context["heading_client_title"] ?? null);
        echo "</h2>
\t\t\t\t\t\t";
        // line 9
        if (($context["error_warning"] ?? null)) {
            // line 10
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 12
        echo "\t\t\t\t\t\t<form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>";
        // line 14
        echo ($context["label_password"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 15
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["label_password"] ?? null);
        echo "\" class=\"form-control loginbox__input\" />
\t\t\t\t\t\t\t\t";
        // line 16
        if (($context["error_password"] ?? null)) {
            // line 17
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>";
        // line 21
        echo ($context["label_password_confirm"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password_confirm\" value=\"";
        // line 22
        echo ($context["password_confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["label_password_confirm"] ?? null);
        echo "\" class=\"form-control loginbox__input\" />
\t\t\t\t\t\t\t\t";
        // line 23
        if (($context["error_password_confirm"] ?? null)) {
            // line 24
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_password_confirm"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 27
        echo ($context["button_accept"] ?? null);
        echo "\" class=\"btn btn-primary btn-block loginBox__button\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 28
        echo ($context["customer_id"] ?? null);
        echo "\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 36
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/kbmp_marketplace/seller_activation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 36,  112 => 28,  108 => 27,  105 => 26,  99 => 24,  97 => 23,  91 => 22,  87 => 21,  83 => 19,  77 => 17,  75 => 16,  69 => 15,  65 => 14,  59 => 12,  53 => 10,  51 => 9,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-login\" class=\"container\">
\t<div class=\"row\">
\t\t<div id=\"content\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"loginBox\">
\t\t\t\t\t\t<h2 class=\"loginBox__title\">{{ heading_client_title }}</h2>
\t\t\t\t\t\t{% if error_warning %}
\t\t\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>{{ label_password }}</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ label_password }}\" class=\"form-control loginbox__input\" />
\t\t\t\t\t\t\t\t{% if error_password %}
\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">{{ error_password }}</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>{{ label_password_confirm }}</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password_confirm\" value=\"{{ password_confirm }}\" placeholder=\"{{ label_password_confirm }}\" class=\"form-control loginbox__input\" />
\t\t\t\t\t\t\t\t{% if error_password_confirm %}
\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">{{ error_password_confirm }}</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"{{ button_accept }}\" class=\"btn btn-primary btn-block loginBox__button\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"customer_id\" value=\"{{ customer_id }}\">
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{{ footer }}", "default/template/kbmp_marketplace/seller_activation.twig", "");
    }
}
