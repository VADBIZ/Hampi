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

/* default/template/extension/module/slideshow.twig */
class __TwigTemplate_faccfb7aa4bfa3fec35c4722b39132e7219f5944f1b065b2e814c8fbc760c84f extends \Twig\Template
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
        echo "<div class=\"slideshow swiper-viewport front__banner-wrap\">
  <div id=\"slideshow";
        // line 2
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container front__banner\">
    <div class=\"swiper-wrapper\">
\t  \t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5)) {
                // line 6
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 6);
                echo "\" class=\"front__banner-item swiper-slide\">
\t\t\t\t";
            } else {
                // line 8
                echo "\t\t\t\t\t<div class=\"front__banner-item swiper-slide\">
\t\t\t\t";
            }
            // line 10
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "brand", [], "any", false, false, false, 10)) {
                // line 11
                echo "\t\t\t\t\t\t\t<span class=\"front__banner-brand\">";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "brand", [], "any", false, false, false, 11);
                echo "</span>
\t\t\t\t\t\t";
            }
            // line 13
            echo "\t\t\t\t\t\t<div class=\"front__banner-content\">
\t\t\t\t\t\t\t";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 14)) {
                // line 15
                echo "\t\t\t\t\t\t\t\t<p class=\"front__banner-title\">";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 15);
                echo "</p>
\t\t\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 17)) {
                // line 18
                echo "\t\t\t\t\t\t\t\t<span class=\"front__banner-button\">";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "button", [], "any", false, false, false, 18);
                echo "</span>
\t\t\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img src=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 21);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 21);
            echo "\" class=\"img-responsive\" />
\t\t\t\t";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 22)) {
                // line 23
                echo "\t\t\t\t\t</a>
\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 27
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t  </div>
  </div>
  <div class=\"swiper-pagination slideshow";
        // line 30
        echo ($context["module"] ?? null);
        echo "\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#slideshow";
        // line 37
        echo ($context["module"] ?? null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 1,
\tpagination: '.slideshow";
        // line 40
        echo ($context["module"] ?? null);
        echo "',
\tpaginationClickable: true,
\tnextButton: '.slideshow .swiper-button-next',
    prevButton: '.slideshow .swiper-button-prev',
    spaceBetween: 30,
//\tautoplay: 2500,
    autoplayDisableOnInteraction: true,
\tloop: true
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 40,  130 => 37,  120 => 30,  116 => 28,  110 => 27,  106 => 25,  102 => 23,  100 => 22,  94 => 21,  91 => 20,  85 => 18,  82 => 17,  76 => 15,  74 => 14,  71 => 13,  65 => 11,  62 => 10,  58 => 8,  52 => 6,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"slideshow swiper-viewport front__banner-wrap\">
  <div id=\"slideshow{{ module }}\" class=\"swiper-container front__banner\">
    <div class=\"swiper-wrapper\">
\t  \t\t{% for banner in banners %}
\t\t\t\t{% if banner.link %}
\t\t\t\t\t<a href=\"{{ banner.link }}\" class=\"front__banner-item swiper-slide\">
\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"front__banner-item swiper-slide\">
\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if banner.brand %}
\t\t\t\t\t\t\t<span class=\"front__banner-brand\">{{ banner.brand }}</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"front__banner-content\">
\t\t\t\t\t\t\t{% if banner.title %}
\t\t\t\t\t\t\t\t<p class=\"front__banner-title\">{{ banner.title }}</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if banner.link %}
\t\t\t\t\t\t\t\t<span class=\"front__banner-button\">{{ banner.button }}</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img src=\"{{ banner.image }}\" alt=\"{{ banner.title }}\" class=\"img-responsive\" />
\t\t\t\t{% if banner.link %}
\t\t\t\t\t</a>
\t\t\t\t{% else %}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t  </div>
  </div>
  <div class=\"swiper-pagination slideshow{{ module }}\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#slideshow{{ module }}').swiper({
\tmode: 'horizontal',
\tslidesPerView: 1,
\tpagination: '.slideshow{{ module }}',
\tpaginationClickable: true,
\tnextButton: '.slideshow .swiper-button-next',
    prevButton: '.slideshow .swiper-button-prev',
    spaceBetween: 30,
//\tautoplay: 2500,
    autoplayDisableOnInteraction: true,
\tloop: true
});
//--></script>", "default/template/extension/module/slideshow.twig", "");
    }
}
