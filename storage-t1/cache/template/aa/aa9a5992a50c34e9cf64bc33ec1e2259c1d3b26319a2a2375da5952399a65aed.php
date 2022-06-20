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

/* default/template/extension/module/banner_sellerlogin.twig */
class __TwigTemplate_c6961228b0e9048ceb3774849670fe3f7b5bd61e687147f32c82d5cef7e874ed extends \Twig\Template
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
        echo "<div class=\"sellerlogin__banner-wrap\">
\t<div class=\"sellerlogin__banner\">
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "\t\t\t<div class=\"sellerlogin__banner-item\">
\t\t\t\t<div class=\"sellerlogin__banner-icon\">
\t\t\t\t\t<img src=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 6);
            echo "\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"sellerlogin__banner-text\">";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 8);
            echo "</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/banner_sellerlogin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  54 => 8,  49 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sellerlogin__banner-wrap\">
\t<div class=\"sellerlogin__banner\">
\t\t{% for banner in banners %}
\t\t\t<div class=\"sellerlogin__banner-item\">
\t\t\t\t<div class=\"sellerlogin__banner-icon\">
\t\t\t\t\t<img src=\"{{ banner.image }}\" alt=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"sellerlogin__banner-text\">{{ banner.title }}</div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>
</div>", "default/template/extension/module/banner_sellerlogin.twig", "");
    }
}
