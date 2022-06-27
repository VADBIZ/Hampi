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

/* default/template/common/successSeller.twig */
class __TwigTemplate_811cf69485ede0e0cbebfbf55c8110b5a5908e08229f3ce573772520efe80ef5 extends \Twig\Template
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
<div id=\"common-success\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
    <div id=\"content\">
      <h1 class=\"page__title\">";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 10
        echo ($context["text_message_seller"] ?? null);
        echo "
      <div class=\"buttons\">
\t  <a href=\"";
        // line 12
        echo ($context["continue"] ?? null);
        echo "\" class=\"simplecheckout__btn-order\">";
        echo ($context["button_gotohome"] ?? null);
        echo "</a>
      </div>
\t</div>
";
        // line 15
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/successSeller.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 15,  71 => 12,  66 => 10,  62 => 9,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"common-success\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
    <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
    <div id=\"content\">
      <h1 class=\"page__title\">{{ heading_title }}</h1>
      {{ text_message_seller }}
      <div class=\"buttons\">
\t  <a href=\"{{ continue }}\" class=\"simplecheckout__btn-order\">{{ button_gotohome }}</a>
      </div>
\t</div>
{{ footer }}", "default/template/common/successSeller.twig", "");
    }
}
