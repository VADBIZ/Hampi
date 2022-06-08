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

/* default/template/common/menuvh.twig */
class __TwigTemplate_04ddebc6f96685d1b1a9e4c46f8bbd2fa383604c6a1d509c3b26dfa0780f9952 extends \Twig\Template
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
        echo "<div class=\"categories__menu-wrap\">
\t<div class=\"container\">
\t\t<div class=\"categories__menu\">
\t\t\t<div class=\"categories__menu-side\">
\t\t\t\t<div class=\"categories__menu-title\">";
        // line 5
        echo ($context["text_category_title"] ?? null);
        echo "</div>
\t\t\t\t<div class=\"categories__menu-main\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "\t\t\t\t\t\t\t";
            if ((((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["item"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["type"] ?? null) : null) == "freelink") || ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["item"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["type"] ?? null) : null) == "category"))) {
                echo " 
\t\t\t\t\t\t\t\t<li";
                // line 10
                if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["item"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["children"] ?? null) : null)) {
                    echo " class=\"categories__menu-main-dropdown\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t<a tabindex=\"-1\" href=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 11);
                echo "\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["item"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["name"] ?? null) : null);
                echo "</a>
\t\t\t\t\t\t\t\t\t";
                // line 12
                if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["item"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["children"] ?? null) : null)) {
                    // line 13
                    echo "\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["item"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["children"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 15
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<li ";
                        if ( !twig_test_empty((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["child"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["children"] ?? null) : null))) {
                            echo " class=\"categories__menu-sub-dropdown\"";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 16
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 16);
                        echo "\">";
                        echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["child"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 17
                        if ( !twig_test_empty((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["child"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["children"] ?? null) : null))) {
                            // line 18
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 19
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["child"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["children"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["subchild"]) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                // line 20
                                echo twig_get_attribute($this->env, $this->source, $context["subchild"], "href", [], "any", false, false, false, 20);
                                echo "\">";
                                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["subchild"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["name"] ?? null) : null);
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subchild'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 22
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 24
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
\t\$(document).ready(function(){
\t\tvar sTop = \$(window).scrollTop();
\t\tif (\$(\"body\").hasClass(\"home\") && sTop == 0 && \$(window).width() > 780) {
\t\t\t\$(\".header__menu-btn\").addClass(\"open\");
\t\t\t\$(\".categories__menu-wrap\").addClass(\"open\");
\t\t}
\t\t\$(window).scroll(function(){
\t\t\tif (\$(window).width() > 780) {
\t\t\t\tvar sTop = \$(window).scrollTop();
\t\t\t\tif (\$(\"body\").hasClass(\"home\") && sTop == 0) {
\t\t\t\t\t\$(\".header__menu-btn\").addClass(\"open\");
\t\t\t\t\t\$(\".categories__menu-wrap\").addClass(\"open\");
\t\t\t\t} else {
\t\t\t\t\t\$(\".categories__menu-wrap\").removeClass(\"open\");
\t\t\t\t\t\$(\".header__menu-btn\").removeClass(\"open\");
\t\t\t\t}
\t\t\t}
\t\t});
\t\t\$(\".header__menu-btn\").click(function(){
\t\t\t\$(\".header__menu-btn\").toggleClass(\"open\");
\t\t\t\$(\".categories__menu-wrap\").toggleClass(\"open\");
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/common/menuvh.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 31,  132 => 30,  128 => 28,  124 => 26,  117 => 24,  113 => 22,  103 => 20,  97 => 19,  94 => 18,  92 => 17,  86 => 16,  79 => 15,  75 => 14,  72 => 13,  70 => 12,  64 => 11,  58 => 10,  53 => 9,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"categories__menu-wrap\">
\t<div class=\"container\">
\t\t<div class=\"categories__menu\">
\t\t\t<div class=\"categories__menu-side\">
\t\t\t\t<div class=\"categories__menu-title\">{{ text_category_title }}</div>
\t\t\t\t<div class=\"categories__menu-main\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t{% for item in items %}
\t\t\t\t\t\t\t{% if ((item['type'] == \"freelink\") or (item['type'] == \"category\")) %} 
\t\t\t\t\t\t\t\t<li{% if (item['children']) %} class=\"categories__menu-main-dropdown\"{% endif %}>
\t\t\t\t\t\t\t\t\t<a tabindex=\"-1\" href=\"{{ item.href }}\">{{ item['name'] }}</a>
\t\t\t\t\t\t\t\t\t{% if (item['children']) %}
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t{% for child in item['children'] %}
\t\t\t\t\t\t\t\t\t\t\t\t<li {% if (child['children'] is not empty) %} class=\"categories__menu-sub-dropdown\"{% endif %}>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ child.href }}\">{{ child['name'] }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if (child['children'] is not empty) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"parent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for subchild in child['children'] %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ subchild.href }}\">{{ subchild['name'] }}</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
\t\$(document).ready(function(){
\t\tvar sTop = \$(window).scrollTop();
\t\tif (\$(\"body\").hasClass(\"home\") && sTop == 0 && \$(window).width() > 780) {
\t\t\t\$(\".header__menu-btn\").addClass(\"open\");
\t\t\t\$(\".categories__menu-wrap\").addClass(\"open\");
\t\t}
\t\t\$(window).scroll(function(){
\t\t\tif (\$(window).width() > 780) {
\t\t\t\tvar sTop = \$(window).scrollTop();
\t\t\t\tif (\$(\"body\").hasClass(\"home\") && sTop == 0) {
\t\t\t\t\t\$(\".header__menu-btn\").addClass(\"open\");
\t\t\t\t\t\$(\".categories__menu-wrap\").addClass(\"open\");
\t\t\t\t} else {
\t\t\t\t\t\$(\".categories__menu-wrap\").removeClass(\"open\");
\t\t\t\t\t\$(\".header__menu-btn\").removeClass(\"open\");
\t\t\t\t}
\t\t\t}
\t\t});
\t\t\$(\".header__menu-btn\").click(function(){
\t\t\t\$(\".header__menu-btn\").toggleClass(\"open\");
\t\t\t\$(\".categories__menu-wrap\").toggleClass(\"open\");
\t\t});
\t});
</script>", "default/template/common/menuvh.twig", "");
    }
}
