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

/* default/template/common/menu.twig */
class __TwigTemplate_716934d286be70580df2483eadcfb8ab0df3b6794ab8a4bae40379ee651ba0b7 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 3
                echo "\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 3)) {
                    // line 4
                    echo "            <div class=\"dropdown-inner\">
\t\t\t\t";
                    // line 5
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 5), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 5)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 5), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 6
                        echo "\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t";
                        // line 7
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 8
                            echo "\t\t\t\t\t\t\t<li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 8);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 8);
                            echo "</a></li>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 10
                        echo "\t\t\t\t\t</ul>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 12
                    echo "\t\t\t</div>
\t\t\t<a href=\"";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 13);
                    echo "\" class=\"see-all\">";
                    echo ($context["text_all"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13);
                    echo "</a>
        ";
                }
                // line 15
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 16
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 16,  91 => 15,  82 => 13,  79 => 12,  72 => 10,  61 => 8,  57 => 7,  54 => 6,  50 => 5,  47 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if categories %}
\t{% for category in categories %}
\t\t{% if category.children %}
            <div class=\"dropdown-inner\">
\t\t\t\t{% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t{% for child in children %}
\t\t\t\t\t\t\t<li><a href=\"{{ child.href }}\">{{ child.name }}</a></li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<a href=\"{{ category.href }}\" class=\"see-all\">{{ text_all }} {{ category.name }}</a>
        {% endif %}
\t{% endfor %}
{% endif %} ", "default/template/common/menu.twig", "");
    }
}
