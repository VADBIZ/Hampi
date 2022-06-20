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

/* default/template/common/footerEmpty.twig */
class __TwigTemplate_9b18b4d7cb0a60797a64e56eb19abed0d4920fdd533a2bcb0d6a2cb05bed8ab3 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 2
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 2);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 2);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 2);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 5
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
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
</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footerEmpty.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 7,  58 => 5,  54 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for style in styles %}
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
</body></html>", "default/template/common/footerEmpty.twig", "");
    }
}
