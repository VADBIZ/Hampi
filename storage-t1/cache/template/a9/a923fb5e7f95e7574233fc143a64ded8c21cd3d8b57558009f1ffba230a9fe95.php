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

/* default/template/extension/module/categorypro.twig */
class __TwigTemplate_6625d41fc4a16074ac748941eafedc3e29793fc96944961f01c6ef64e841e805 extends \Twig\Template
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
        echo "<div class=\"frontpage__cats\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 3) == ($context["category_id"] ?? null))) {
                // line 4
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 4)) {
                    // line 5
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["catChild"]) {
                        // line 6
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["catChild"], "category_id", [], "any", false, false, false, 6) == 533)) {
                            // line 7
                            echo "\t\t\t\t\t\t\t<h3 class=\"frontpage__cats-title\">";
                            echo twig_get_attribute($this->env, $this->source, $context["catChild"], "name", [], "any", false, false, false, 7);
                            echo "</h3>
\t\t\t\t\t\t";
                        } else {
                            // line 9
                            echo "\t\t\t\t\t\t\t<h3 class=\"frontpage__cats-title\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["catChild"], "name", [], "any", false, false, false, 9);
                            echo "</h3>
\t\t\t\t\t\t";
                        }
                        // line 11
                        echo "\t\t\t\t\t<div class=\"frontpage__cats-section\">
\t\t\t\t\t\t";
                        // line 12
                        if (twig_get_attribute($this->env, $this->source, $context["catChild"], "children", [], "any", false, false, false, 12)) {
                            // line 13
                            echo "\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["catChild"], "children", [], "any", false, false, false, 13));
                            foreach ($context['_seq'] as $context["_key"] => $context["child_1"]) {
                                // line 14
                                echo "\t\t\t\t\t\t\t\t<a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child_1"], "href", [], "any", false, false, false, 14);
                                echo "\" class=\"frontpage__cats-item\">
\t\t\t\t\t\t\t\t\t<div class=\"frontpage__cats_item-photo\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                // line 16
                                echo twig_get_attribute($this->env, $this->source, $context["child_1"], "image", [], "any", false, false, false, 16);
                                echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"frontpage__cats_item-name\">";
                                // line 18
                                echo twig_get_attribute($this->env, $this->source, $context["child_1"], "name", [], "any", false, false, false, 18);
                                echo "</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 21
                            echo "\t\t\t\t\t\t";
                        }
                        // line 22
                        echo "\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catChild'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo "\t\t\t";
                }
                // line 25
                echo "\t\t";
            }
            // line 26
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/categorypro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 27,  118 => 26,  115 => 25,  112 => 24,  105 => 22,  102 => 21,  93 => 18,  88 => 16,  82 => 14,  77 => 13,  75 => 12,  72 => 11,  64 => 9,  58 => 7,  55 => 6,  50 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"frontpage__cats\">
\t{% for category in categories %}
\t\t{% if category.category_id == category_id %}
\t\t\t{% if category.children %}
\t\t\t\t{% for catChild in category.children %}
\t\t\t\t\t\t{% if catChild.category_id == 533 %}
\t\t\t\t\t\t\t<h3 class=\"frontpage__cats-title\">{{ catChild.name }}</h3>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<h3 class=\"frontpage__cats-title\">{{ category.name }} {{ catChild.name }}</h3>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"frontpage__cats-section\">
\t\t\t\t\t\t{% if catChild.children %}
\t\t\t\t\t\t\t{% for child_1 in catChild.children %}
\t\t\t\t\t\t\t\t<a href=\"{{ child_1.href }}\" class=\"frontpage__cats-item\">
\t\t\t\t\t\t\t\t\t<div class=\"frontpage__cats_item-photo\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ child_1.image }}\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"frontpage__cats_item-name\">{{ child_1.name }}</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t{% endif %}
\t\t{% endif %}
\t{% endfor %}
</div>", "default/template/extension/module/categorypro.twig", "");
    }
}
