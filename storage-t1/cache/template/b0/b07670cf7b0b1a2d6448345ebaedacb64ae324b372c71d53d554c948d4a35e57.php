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

/* default/template/mail/register_alert.twig */
class __TwigTemplate_844d47bd102468e0f0ffec833091aaeabd955e0c95e3c72d5137c5ddde21defe extends \Twig\Template
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
        echo ($context["text_signup"] ?? null);
        echo "

";
        // line 3
        echo ($context["text_firstname"] ?? null);
        echo " ";
        echo ($context["firstname"] ?? null);
        echo "
";
        // line 4
        echo ($context["text_lastname"] ?? null);
        echo " ";
        echo ($context["lastname"] ?? null);
        echo "
";
        // line 5
        if (($context["customer_group"] ?? null)) {
            // line 6
            echo ($context["text_customer_group"] ?? null);
            echo " ";
            echo ($context["customer_group"] ?? null);
            echo "
";
        }
        // line 8
        echo ($context["text_email"] ?? null);
        echo " ";
        echo ($context["email"] ?? null);
        echo "
";
        // line 9
        echo ($context["text_telephone"] ?? null);
        echo " ";
        echo ($context["telephone"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/mail/register_alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 9,  63 => 8,  56 => 6,  54 => 5,  48 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ text_signup }}

{{ text_firstname }} {{ firstname }}
{{ text_lastname }} {{ lastname }}
{% if customer_group %}
{{ text_customer_group }} {{ customer_group }}
{% endif %}
{{ text_email }} {{ email }}
{{ text_telephone }} {{ telephone }}", "default/template/mail/register_alert.twig", "");
    }
}
