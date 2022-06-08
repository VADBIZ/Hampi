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

/* default/template/common/footer.twig */
class __TwigTemplate_5bf74a3aee00f81e66e782c8d3a48ed4800331e1b9f281d46a45bca25e686425 extends \Twig\Template
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
        echo "</div>
<footer class=\"footer\">
\t<div class=\"container\">
\t\t<div class=\"footer__wrap\">
\t\t\t<div class=\"footer__logo-wrap\">
\t\t\t\t";
        // line 6
        if ((($context["home"] ?? null) == ($context["currPage"] ?? null))) {
            // line 7
            echo "\t\t\t\t\t<a href=\"/\" class=\"footer__logo\">
\t\t\t\t";
        } else {
            // line 9
            echo "\t\t\t\t\t<div class=\"footer__logo\">
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t\t<img src=\"";
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\">
\t\t\t\t";
        // line 12
        if ((($context["home"] ?? null) == ($context["currPage"] ?? null))) {
            // line 13
            echo "\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t
\t\t\t\t";
        // line 18
        $context["socialShow"] = false;
        // line 19
        echo "\t\t\t\t";
        if (((($context["wa"] ?? null) || ($context["tg"] ?? null)) && ($context["socialShow"] ?? null))) {
            // line 20
            echo "\t\t\t\t\t<div class=\"footer__social\">
\t\t\t\t\t\t<a href=\"";
            // line 21
            echo ($context["wa"] ?? null);
            echo "\" class=\"footer__social-item wa\">
\t\t\t\t\t\t\t<svg width=\"48\" height=\"48\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M24 48C10.7452 48 0 37.2548 0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48ZM24.7911 37.3525C32.6595 37.3493 39.059 30.9483 39.0621 23.0815C39.0637 19.2683 37.5806 15.6828 34.8862 12.9854C32.1918 10.2879 28.6086 8.80165 24.7909 8.8C16.9248 8.8 10.5228 15.2017 10.5196 23.0702C10.5186 25.5855 11.1757 28.0405 12.4246 30.2048L10.4 37.6L17.9653 35.6155C20.0498 36.7524 22.3967 37.3517 24.7852 37.3525H24.7911Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M18.3159 33.0319L13.8265 34.2096L15.0248 29.8324L14.7428 29.3836C13.5554 27.4951 12.9283 25.3124 12.9292 23.0711C12.9318 16.5311 18.2529 11.2104 24.7958 11.2104C27.964 11.2115 30.9422 12.4469 33.1817 14.689C35.4212 16.9311 36.6538 19.9112 36.6526 23.0807C36.6499 29.6212 31.3289 34.9424 24.7911 34.9424H24.7863C22.6578 34.9415 20.5702 34.3697 18.749 33.289L18.3159 33.0319ZM31.9808 26.4751C31.8917 26.3264 31.654 26.2372 31.2974 26.0586C30.9408 25.8801 29.1877 25.0176 28.8608 24.8985C28.534 24.7795 28.2961 24.7201 28.0585 25.0769C27.8208 25.4339 27.1374 26.2372 26.9294 26.4751C26.7214 26.7131 26.5133 26.7429 26.1569 26.5644C25.8003 26.3859 24.6513 26.0094 23.2893 24.7945C22.2292 23.8489 21.5135 22.6813 21.3055 22.3243C21.0975 21.9673 21.2834 21.7743 21.4619 21.5965C21.6223 21.4367 21.8185 21.1799 21.9968 20.9718C22.1751 20.7636 22.2345 20.6148 22.3533 20.377C22.4722 20.1389 22.4128 19.9307 22.3236 19.7522C22.2345 19.5737 21.5213 17.8185 21.2242 17.1045C20.9347 16.4092 20.6408 16.5034 20.4219 16.4924C20.2141 16.482 19.9762 16.4798 19.7385 16.4798C19.5008 16.4798 19.1144 16.569 18.7876 16.926C18.4607 17.283 17.5395 18.1457 17.5395 19.9008C17.5395 21.656 18.8173 23.3516 18.9956 23.5896C19.1739 23.8276 21.51 27.4293 25.0871 28.9739C25.9379 29.3413 26.602 29.5607 27.12 29.725C27.9742 29.9965 28.7516 29.9582 29.3659 29.8663C30.0511 29.764 31.4756 29.0038 31.7729 28.1709C32.0699 27.3378 32.0699 26.6238 31.9808 26.4751Z\" fill=\"white\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
            // line 27
            echo ($context["tg"] ?? null);
            echo "\" class=\"footer__social-item\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\" fill=\"white\">
\t\t\t\t\t\t\t\t<path d=\"M16 0.5c-8.563 0-15.5 6.938-15.5 15.5s6.938 15.5 15.5 15.5c8.563 0 15.5-6.938 15.5-15.5s-6.938-15.5-15.5-15.5zM23.613 11.119l-2.544 11.988c-0.188 0.85-0.694 1.056-1.4 0.656l-3.875-2.856-1.869 1.8c-0.206 0.206-0.381 0.381-0.781 0.381l0.275-3.944 7.181-6.488c0.313-0.275-0.069-0.431-0.482-0.156l-8.875 5.587-3.825-1.194c-0.831-0.262-0.85-0.831 0.175-1.231l14.944-5.763c0.694-0.25 1.3 0.169 1.075 1.219z\" />
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 34
        echo "\t\t\t</div>
\t\t\t<div class=\"footer__nav\">
\t\t\t\t<div class=\"footer__nav-col\">
\t\t\t\t\t<p class=\"footer__nav-title\">";
        // line 37
        echo ($context["text_service"] ?? null);
        echo "</p>
\t\t\t\t\t<div class=\"footer__nav-list\">
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"";
        // line 39
        echo ($context["link_about"] ?? null);
        echo "\">";
        echo ($context["text_about"] ?? null);
        echo "</a></div>
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"";
        // line 40
        echo ($context["link_contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__nav-col\">
\t\t\t\t\t<p class=\"footer__nav-title\">";
        // line 44
        echo ($context["text_service2"] ?? null);
        echo "</p>
\t\t\t\t\t<div class=\"footer__nav-list\">
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"";
        // line 46
        echo ($context["link_howbuy"] ?? null);
        echo "\">";
        echo ($context["text_howbuy"] ?? null);
        echo "</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__nav-col\">
\t\t\t\t\t<p class=\"footer__nav-title\">";
        // line 50
        echo ($context["text_service6"] ?? null);
        echo "</p>
\t\t\t\t\t<div class=\"footer__nav-list\">
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"";
        // line 52
        echo ($context["link_howsell"] ?? null);
        echo "\">";
        echo ($context["text_howsell"] ?? null);
        echo "</a></div>
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"";
        // line 53
        echo ($context["link_sellerlogin"] ?? null);
        echo "\">";
        echo ($context["text_sellerlogin"] ?? null);
        echo "</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__nav-col\">
\t\t\t\t\t<p class=\"footer__nav-title\">";
        // line 57
        echo ($context["text_service3"] ?? null);
        echo "</p>
\t\t\t\t\t<div class=\"footer__nav-list\">
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"";
        // line 59
        echo ($context["link_policy"] ?? null);
        echo "\">";
        echo ($context["text_policy"] ?? null);
        echo "</a></div>
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"";
        // line 60
        echo ($context["link_rules"] ?? null);
        echo "\">";
        echo ($context["text_rules"] ?? null);
        echo "</a></div>
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"";
        // line 61
        echo ($context["link_accept"] ?? null);
        echo "\">";
        echo ($context["text_accept"] ?? null);
        echo "</a></div>
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"";
        // line 62
        echo ($context["link_other"] ?? null);
        echo "\">";
        echo ($context["text_other"] ?? null);
        echo "</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>

";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 71
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 71);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 71);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 71);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 74
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "<script>
//\$(\"#eml\").on(\"click\", function (event) {
//\t\$.ajax({
//\t\turl: 'index.php?route=common/footer/emails',
//\t\ttype: 'post',
//\t\tdataType: 'json',
//\t\tdata: \$(\"#form-email\").serialize(),
//\t\tbeforeSend: function() {
//\t\t\t\$('#beml').button('loading');
//\t\t},
//\t\tcomplete: function() {
//\t\t\t\$('#eml').button('reset');
//\t\t},
//\t\tsuccess: function(json) {
//\t\t\t\$('.alert-dismissible').remove();
//
//\t\t\tif (json['error']) {
//\t\t\t\t\$('footer').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
//\t\t\t}
//
//\t\t\tif (json['success']) {
//\t\t\t\t\$('footer').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
//\t\t\t}
//\t\t}
//\t});
//});
</script>
<a style=\"display:none;visibility:hidden;opacity:0;position:absolute;bottom:-100%;left:-100%;\" href=\"https://lookatcourse.com/\" title=\"Онлайн курсы IT\">Онлайн курсы IT</a></body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 76,  215 => 74,  211 => 73,  198 => 71,  194 => 70,  181 => 62,  175 => 61,  169 => 60,  163 => 59,  158 => 57,  149 => 53,  143 => 52,  138 => 50,  129 => 46,  124 => 44,  115 => 40,  109 => 39,  104 => 37,  99 => 34,  89 => 27,  80 => 21,  77 => 20,  74 => 19,  72 => 18,  69 => 17,  65 => 15,  61 => 13,  59 => 12,  54 => 11,  50 => 9,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("</div>
<footer class=\"footer\">
\t<div class=\"container\">
\t\t<div class=\"footer__wrap\">
\t\t\t<div class=\"footer__logo-wrap\">
\t\t\t\t{% if home == currPage %}
\t\t\t\t\t<a href=\"/\" class=\"footer__logo\">
\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"footer__logo\">
\t\t\t\t{% endif %}
\t\t\t\t\t<img src=\"{{ logo }}\" alt=\"\">
\t\t\t\t{% if home == currPage %}
\t\t\t\t\t</a>
\t\t\t\t{% else %}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t\t{% set socialShow = false %}
\t\t\t\t{% if (wa or tg) and socialShow %}
\t\t\t\t\t<div class=\"footer__social\">
\t\t\t\t\t\t<a href=\"{{ wa }}\" class=\"footer__social-item wa\">
\t\t\t\t\t\t\t<svg width=\"48\" height=\"48\" viewBox=\"0 0 48 48\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M24 48C10.7452 48 0 37.2548 0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48ZM24.7911 37.3525C32.6595 37.3493 39.059 30.9483 39.0621 23.0815C39.0637 19.2683 37.5806 15.6828 34.8862 12.9854C32.1918 10.2879 28.6086 8.80165 24.7909 8.8C16.9248 8.8 10.5228 15.2017 10.5196 23.0702C10.5186 25.5855 11.1757 28.0405 12.4246 30.2048L10.4 37.6L17.9653 35.6155C20.0498 36.7524 22.3967 37.3517 24.7852 37.3525H24.7911Z\" fill=\"white\" />
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M18.3159 33.0319L13.8265 34.2096L15.0248 29.8324L14.7428 29.3836C13.5554 27.4951 12.9283 25.3124 12.9292 23.0711C12.9318 16.5311 18.2529 11.2104 24.7958 11.2104C27.964 11.2115 30.9422 12.4469 33.1817 14.689C35.4212 16.9311 36.6538 19.9112 36.6526 23.0807C36.6499 29.6212 31.3289 34.9424 24.7911 34.9424H24.7863C22.6578 34.9415 20.5702 34.3697 18.749 33.289L18.3159 33.0319ZM31.9808 26.4751C31.8917 26.3264 31.654 26.2372 31.2974 26.0586C30.9408 25.8801 29.1877 25.0176 28.8608 24.8985C28.534 24.7795 28.2961 24.7201 28.0585 25.0769C27.8208 25.4339 27.1374 26.2372 26.9294 26.4751C26.7214 26.7131 26.5133 26.7429 26.1569 26.5644C25.8003 26.3859 24.6513 26.0094 23.2893 24.7945C22.2292 23.8489 21.5135 22.6813 21.3055 22.3243C21.0975 21.9673 21.2834 21.7743 21.4619 21.5965C21.6223 21.4367 21.8185 21.1799 21.9968 20.9718C22.1751 20.7636 22.2345 20.6148 22.3533 20.377C22.4722 20.1389 22.4128 19.9307 22.3236 19.7522C22.2345 19.5737 21.5213 17.8185 21.2242 17.1045C20.9347 16.4092 20.6408 16.5034 20.4219 16.4924C20.2141 16.482 19.9762 16.4798 19.7385 16.4798C19.5008 16.4798 19.1144 16.569 18.7876 16.926C18.4607 17.283 17.5395 18.1457 17.5395 19.9008C17.5395 21.656 18.8173 23.3516 18.9956 23.5896C19.1739 23.8276 21.51 27.4293 25.0871 28.9739C25.9379 29.3413 26.602 29.5607 27.12 29.725C27.9742 29.9965 28.7516 29.9582 29.3659 29.8663C30.0511 29.764 31.4756 29.0038 31.7729 28.1709C32.0699 27.3378 32.0699 26.6238 31.9808 26.4751Z\" fill=\"white\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ tg }}\" class=\"footer__social-item\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\" fill=\"white\">
\t\t\t\t\t\t\t\t<path d=\"M16 0.5c-8.563 0-15.5 6.938-15.5 15.5s6.938 15.5 15.5 15.5c8.563 0 15.5-6.938 15.5-15.5s-6.938-15.5-15.5-15.5zM23.613 11.119l-2.544 11.988c-0.188 0.85-0.694 1.056-1.4 0.656l-3.875-2.856-1.869 1.8c-0.206 0.206-0.381 0.381-0.781 0.381l0.275-3.944 7.181-6.488c0.313-0.275-0.069-0.431-0.482-0.156l-8.875 5.587-3.825-1.194c-0.831-0.262-0.85-0.831 0.175-1.231l14.944-5.763c0.694-0.25 1.3 0.169 1.075 1.219z\" />
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"footer__nav\">
\t\t\t\t<div class=\"footer__nav-col\">
\t\t\t\t\t<p class=\"footer__nav-title\">{{ text_service }}</p>
\t\t\t\t\t<div class=\"footer__nav-list\">
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"{{ link_about }}\">{{ text_about }}</a></div>
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"{{ link_contact }}\">{{ text_contact }}</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__nav-col\">
\t\t\t\t\t<p class=\"footer__nav-title\">{{ text_service2 }}</p>
\t\t\t\t\t<div class=\"footer__nav-list\">
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"{{ link_howbuy }}\">{{ text_howbuy }}</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__nav-col\">
\t\t\t\t\t<p class=\"footer__nav-title\">{{ text_service6 }}</p>
\t\t\t\t\t<div class=\"footer__nav-list\">
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"{{ link_howsell }}\">{{ text_howsell }}</a></div>
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"{{ link_sellerlogin }}\">{{ text_sellerlogin }}</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer__nav-col\">
\t\t\t\t\t<p class=\"footer__nav-title\">{{ text_service3 }}</p>
\t\t\t\t\t<div class=\"footer__nav-list\">
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"{{ link_policy }}\">{{ text_policy }}</a></div>
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"{{ link_rules }}\">{{ text_rules }}</a></div>
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"{{ link_accept }}\">{{ text_accept }}</a></div>
\t\t\t\t\t\t<div class=\"footer__nav-item\"><a href=\"{{ link_other }}\">{{ text_other }}</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>

{% for style in styles %}
<link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\" />
{% endfor %}
{% for script in scripts %}
<script src=\"{{ script }}\" type=\"text/javascript\"></script>
{% endfor %}
<script>
//\$(\"#eml\").on(\"click\", function (event) {
//\t\$.ajax({
//\t\turl: 'index.php?route=common/footer/emails',
//\t\ttype: 'post',
//\t\tdataType: 'json',
//\t\tdata: \$(\"#form-email\").serialize(),
//\t\tbeforeSend: function() {
//\t\t\t\$('#beml').button('loading');
//\t\t},
//\t\tcomplete: function() {
//\t\t\t\$('#eml').button('reset');
//\t\t},
//\t\tsuccess: function(json) {
//\t\t\t\$('.alert-dismissible').remove();
//
//\t\t\tif (json['error']) {
//\t\t\t\t\$('footer').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
//\t\t\t}
//
//\t\t\tif (json['success']) {
//\t\t\t\t\$('footer').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
//\t\t\t}
//\t\t}
//\t});
//});
</script>
<a style=\"display:none;visibility:hidden;opacity:0;position:absolute;bottom:-100%;left:-100%;\" href=\"https://lookatcourse.com/\" title=\"Онлайн курсы IT\">Онлайн курсы IT</a></body></html>", "default/template/common/footer.twig", "");
    }
}
