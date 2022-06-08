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

/* default/template/common/search.twig */
class __TwigTemplate_e6de744f0a7b6b3922f0d1dd7fab7cb45dd0a9d8ebb989415ca6185937895186 extends \Twig\Template
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
        echo "<div id=\"search\" class=\"header__search-group\">
\t<input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"header__search-input\" />
\t<span class=\"header__search-remove\" title=\"";
        // line 3
        echo ($context["text_remove"] ?? null);
        echo "\">
\t\t<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 27.965 27.965\" style=\"enable-background:new 0 0 27.965 27.965;\" xml:space=\"preserve\">
\t\t\t<g>
\t\t\t\t<g id=\"c142_x\">
\t\t\t\t\t<path d=\"M13.98,0C6.259,0,0,6.261,0,13.983c0,7.721,6.259,13.982,13.98,13.982c7.725,0,13.985-6.262,13.985-13.982 C27.965,6.261,21.705,0,13.98,0z M19.992,17.769l-2.227,2.224c0,0-3.523-3.78-3.786-3.78c-0.259,0-3.783,3.78-3.783,3.78 l-2.228-2.224c0,0,3.784-3.472,3.784-3.781c0-0.314-3.784-3.787-3.784-3.787l2.228-2.229c0,0,3.553,3.782,3.783,3.782 c0.232,0,3.786-3.782,3.786-3.782l2.227,2.229c0,0-3.785,3.523-3.785,3.787C16.207,14.239,19.992,17.769,19.992,17.769z\"/>
\t\t\t\t</g>
\t\t\t\t<g id=\"Capa_1_104_\"></g>
\t\t\t</g>
\t\t</svg>
\t</span>
\t<span class=\"header__search-btn-wrap\">
\t\t<button type=\"button\" class=\"header__search-btn\">\t\t
\t\t\t<svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9ZM9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C11.125 18 13.078 17.2635 14.6177 16.0319L18.2929 19.7071C18.6834 20.0976 19.3166 20.0976 19.7071 19.7071C20.0976 19.3166 20.0976 18.6834 19.7071 18.2929L16.0319 14.6177C17.2635 13.078 18 11.125 18 9C18 4.02944 13.9706 0 9 0Z\" fill=\"black\" fill-opacity=\"0.2\"/>
\t\t\t</svg>
\t\t</button>
\t</span>
</div>

<script>
\t\$(document).ready(function(){
\t\tvar btnRemove = \$(\".header__search-remove\"),
\t\t\tinputField = \$(\".header__search-input\");
\t\tif (inputField.val().length > 3) {
\t\t\tbtnRemove.addClass(\"show\");
\t\t} else {
\t\t\tbtnRemove.removeClass(\"show\");
\t\t}
\t\tinputField.keyup(function(){
\t\t\tif (\$(this).val().length > 3) {
\t\t\t\tbtnRemove.addClass(\"show\");
\t\t\t} else {
\t\t\t\tbtnRemove.removeClass(\"show\");
\t\t\t}
\t\t});
\t\t\$(\".header__search-remove\").click(function(){
\t\t\tinputField.val(\"\").focus();
\t\t\tbtnRemove.removeClass(\"show\");
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"search\" class=\"header__search-group\">
\t<input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"{{ text_search }}\" class=\"header__search-input\" />
\t<span class=\"header__search-remove\" title=\"{{ text_remove }}\">
\t\t<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 27.965 27.965\" style=\"enable-background:new 0 0 27.965 27.965;\" xml:space=\"preserve\">
\t\t\t<g>
\t\t\t\t<g id=\"c142_x\">
\t\t\t\t\t<path d=\"M13.98,0C6.259,0,0,6.261,0,13.983c0,7.721,6.259,13.982,13.98,13.982c7.725,0,13.985-6.262,13.985-13.982 C27.965,6.261,21.705,0,13.98,0z M19.992,17.769l-2.227,2.224c0,0-3.523-3.78-3.786-3.78c-0.259,0-3.783,3.78-3.783,3.78 l-2.228-2.224c0,0,3.784-3.472,3.784-3.781c0-0.314-3.784-3.787-3.784-3.787l2.228-2.229c0,0,3.553,3.782,3.783,3.782 c0.232,0,3.786-3.782,3.786-3.782l2.227,2.229c0,0-3.785,3.523-3.785,3.787C16.207,14.239,19.992,17.769,19.992,17.769z\"/>
\t\t\t\t</g>
\t\t\t\t<g id=\"Capa_1_104_\"></g>
\t\t\t</g>
\t\t</svg>
\t</span>
\t<span class=\"header__search-btn-wrap\">
\t\t<button type=\"button\" class=\"header__search-btn\">\t\t
\t\t\t<svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M2 9C2 5.13401 5.13401 2 9 2C12.866 2 16 5.13401 16 9C16 12.866 12.866 16 9 16C5.13401 16 2 12.866 2 9ZM9 0C4.02944 0 0 4.02944 0 9C0 13.9706 4.02944 18 9 18C11.125 18 13.078 17.2635 14.6177 16.0319L18.2929 19.7071C18.6834 20.0976 19.3166 20.0976 19.7071 19.7071C20.0976 19.3166 20.0976 18.6834 19.7071 18.2929L16.0319 14.6177C17.2635 13.078 18 11.125 18 9C18 4.02944 13.9706 0 9 0Z\" fill=\"black\" fill-opacity=\"0.2\"/>
\t\t\t</svg>
\t\t</button>
\t</span>
</div>

<script>
\t\$(document).ready(function(){
\t\tvar btnRemove = \$(\".header__search-remove\"),
\t\t\tinputField = \$(\".header__search-input\");
\t\tif (inputField.val().length > 3) {
\t\t\tbtnRemove.addClass(\"show\");
\t\t} else {
\t\t\tbtnRemove.removeClass(\"show\");
\t\t}
\t\tinputField.keyup(function(){
\t\t\tif (\$(this).val().length > 3) {
\t\t\t\tbtnRemove.addClass(\"show\");
\t\t\t} else {
\t\t\t\tbtnRemove.removeClass(\"show\");
\t\t\t}
\t\t});
\t\t\$(\".header__search-remove\").click(function(){
\t\t\tinputField.val(\"\").focus();
\t\t\tbtnRemove.removeClass(\"show\");
\t\t});
\t});
</script>", "default/template/common/search.twig", "");
    }
}
