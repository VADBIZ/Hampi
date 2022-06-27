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

/* default/template/mail/register.twig */
class __TwigTemplate_fd1b7b215f83b6ce95bf6c4c93e146a581f056d9490e7e853cbb445180a17802 extends \Twig\Template
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
        echo ($context["text_welcome"] ?? null);
        echo "

";
        // line 3
        if ( !($context["approval"] ?? null)) {
            // line 4
            echo ($context["text_login"] ?? null);
            echo "

";
            // line 6
            echo ($context["login"] ?? null);
            echo "

            
            ";
            // line 9
            echo ($context["your_login"] ?? null);
            echo "
            ";
            // line 10
            echo ($context["your_password"] ?? null);
            echo "
            
            

";
            // line 14
            echo ($context["text_service"] ?? null);
            echo "

";
            // line 16
            echo ($context["text_thanks"] ?? null);
            echo "
";
            // line 17
            echo ($context["store"] ?? null);
            echo "
";
        } else {
            // line 19
            echo ($context["text_approval"] ?? null);
            echo "

";
            // line 21
            echo ($context["login"] ?? null);
            echo "

            
            ";
            // line 24
            echo ($context["your_login"] ?? null);
            echo "
            ";
            // line 25
            echo ($context["your_password"] ?? null);
            echo "
            
            

";
            // line 29
            echo ($context["text_thanks"] ?? null);
            echo "
";
            // line 30
            echo ($context["store"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/mail/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 30,  102 => 29,  95 => 25,  91 => 24,  85 => 21,  80 => 19,  75 => 17,  71 => 16,  66 => 14,  59 => 10,  55 => 9,  49 => 6,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ text_welcome }}

{% if not approval %}
{{ text_login }}

{{ login }}

            
            {{ your_login }}
            {{ your_password }}
            
            

{{ text_service }}

{{ text_thanks }}
{{ store }}
{% else %}
{{ text_approval }}

{{ login }}

            
            {{ your_login }}
            {{ your_password }}
            
            

{{ text_thanks }}
{{ store }}
{% endif %}", "default/template/mail/register.twig", "");
    }
}
