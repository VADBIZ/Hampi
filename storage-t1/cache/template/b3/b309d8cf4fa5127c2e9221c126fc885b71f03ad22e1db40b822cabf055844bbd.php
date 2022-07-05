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

/* kbmp_marketplace/sellers_list.twig */
class __TwigTemplate_04505bf34f67ad13afb0064a8ab9c9ec7dc54f4923d59ce89c7d6ee22c941138 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo " 
<div id=\"content\" class=\"bootstrap\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">   
\t\t\t<div class=\"pull-left\">
\t\t\t\t<h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
\t\t\t\t\t\t<li><a href=\"";
            // line 9
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo " 
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t  <div class=\"pull-right\">
\t\t\t\t<a href=\"";
        // line 14
        echo ($context["seller_add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
\t\t\t\t  ";
        // line 15
        if ((($context["usergroup"] ?? null) == 1)) {
            // line 16
            echo "\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_delete"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
            echo ($context["text_confirm"] ?? null);
            echo "') ? \$('#form-seller').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t\t  ";
        }
        // line 18
        echo "\t\t\t  </div>
        </div>
    </div>
    <div class=\"container-fluid\">\t\t
        <div class=\"row\">       
            <div class=\"col-lg-12 col-md-12\">
                ";
        // line 24
        if (($context["error"] ?? null)) {
            echo " 
                    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 25
            echo ($context["error"] ?? null);
            echo " 
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    </div>
                ";
        }
        // line 28
        echo " 
                ";
        // line 29
        if (($context["success"] ?? null)) {
            echo " 
                    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 30
            echo ($context["success"] ?? null);
            echo " 
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    </div>
                ";
        }
        // line 33
        echo " 
            </div>
            <div class=\"col-lg-12 col-md-12\">
                <div class=\"panel panel-default\" id=\"fieldset_form\">\t\t\t
                    <div class=\"panel-heading\" style=\"display: inline-block; width: 100%;\"> 
                        ";
        // line 38
        echo ($context["heading_title"] ?? null);
        echo " <span class=\"badge\">";
        echo ($context["sellers_total"] ?? null);
        echo "</span>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 41
        echo ($context["tab_common"] ?? null);
        echo "
\t\t\t\t\t\t<form action=\"";
        // line 42
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-seller\">
\t\t\t\t\t\t\t<div class=\"filter-table-responsive table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table filter\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 47
        if ((($context["usergroup"] ?? null) == 1)) {
            // line 48
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t\t\t\t\t\t\t   <!-- <th>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 51
        if ((($context["sort"] ?? null) == "c.firstname")) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 52
            echo ($context["sort_firstname"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_firstname"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 53
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 54
            echo ($context["sort_firstname"] ?? null);
            echo "\">";
            echo ($context["column_firstname"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 55
        echo " 
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 58
        if ((($context["sort"] ?? null) == "c.lastname")) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 59
            echo ($context["sort_lastname"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_lastname"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 60
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 61
            echo ($context["sort_lastname"] ?? null);
            echo "\">";
            echo ($context["column_lastname"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 62
        echo " 
\t\t\t\t\t\t\t\t\t\t\t</th> -->

\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 66
        if ((($context["sort"] ?? null) == "c.fio")) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 67
            echo ($context["sort_fio"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_fio"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["sort_fio"] ?? null);
            echo "\">";
            echo ($context["column_fio"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 73
        if ((($context["sort"] ?? null) == "c.email")) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 74
            echo ($context["sort_email"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 75
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 76
            echo ($context["sort_email"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 77
        echo " 
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 80
        if ((($context["sort"] ?? null) == "ks.companyname")) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 81
            echo ($context["sort_companyname"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_companyname"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 82
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 83
            echo ($context["sort_companyname"] ?? null);
            echo "\">";
            echo ($context["column_companyname"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 84
        echo " 
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 87
        if ((($context["sort"] ?? null) == "ks.date_added")) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 88
            echo ($context["sort_seller_since"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_seller_since"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 89
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 90
            echo ($context["sort_seller_since"] ?? null);
            echo "\">";
            echo ($context["column_seller_since"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t  <th>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 94
        if ((($context["sort"] ?? null) == "ks.statusmain")) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 95
            echo ($context["sort_statusmain"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 96
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 97
            echo ($context["sort_statusmain"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 98
        echo " 
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none\">  
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"filter_firstname\" value=\"";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_firstname", [], "array", true, true, false, 104)) {
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["filter_data"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["filter_firstname"] ?? null) : null);
        }
        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"filter_lastname\" value=\"";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_lastname", [], "array", true, true, false, 107)) {
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["filter_data"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["filter_lastname"] ?? null) : null);
        }
        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"filter_email\" value=\"";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_email", [], "array", true, true, false, 110)) {
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["filter_data"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["filter_email"] ?? null) : null);
        }
        echo "\"/>                                    
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"filter_shop\" value=\"";
        // line 113
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_shop", [], "array", true, true, false, 113)) {
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["filter_data"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["filter_shop"] ?? null) : null);
        }
        echo "\"/>                                    
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"filter_state\" value=\"";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_state", [], "array", true, true, false, 116)) {
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["filter_data"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["filter_state"] ?? null) : null);
        }
        echo "\"/>                                    
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"filter_country\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected=\"selected\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 121
        if (((isset($context["countries"]) || array_key_exists("countries", $context)) &&  !twig_test_empty(($context["countries"] ?? null)))) {
            // line 122
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 123
                if ((twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_country", [], "array", true, true, false, 123) && ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["filter_data"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["filter_country"] ?? null) : null) == (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["country"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["country_id"] ?? null) : null)))) {
                    // line 124
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo (((("<option value=" . (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["country"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["country_id"] ?? null) : null)) . " selected>") . (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["country"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["name"] ?? null) : null)) . "</option>");
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 125
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 126
                    echo (((("<option value=" . (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["country"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["country_id"] ?? null) : null)) . ">") . (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["country"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["name"] ?? null) : null)) . "</option>");
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 128
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 130
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"filter_status\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected=\"selected\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 136
        if ((twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_status", [], "array", true, true, false, 136) && ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["filter_data"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["filter_status"] ?? null) : null) == "1"))) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_active"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 137
        if ((twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_status", [], "array", true, true, false, 137) && ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["filter_data"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["filter_status"] ?? null) : null) == "0"))) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_inactive"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select> 
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 155px\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\" style=\"margin-bottom:10px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_from_date\" value=\"";
        // line 142
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_from_date", [], "array", true, true, false, 142)) {
            echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["filter_data"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["filter_from_date"] ?? null) : null);
        }
        echo "\" placeholder=\"";
        echo ($context["text_from_date"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-from-date\" class=\"datepicker hasDatepicker form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_to_date\" value=\"";
        // line 148
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_to_date", [], "array", true, true, false, 148)) {
            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["filter_data"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["filter_to_date"] ?? null) : null);
        }
        echo "\" placeholder=\"";
        echo ($context["text_to_date"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-to-date\" class=\"datepicker hasDatepicker form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 80px;\" class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-reset\" name=\"submitFilter\" class=\"btn btn-warning\" style=\"margin-bottom: 10px;\" onclick=\"window.location.href = 'index.php?route=kbmp_marketplace/sellers_list&user_token=";
        // line 155
        echo ($context["token"] ?? null);
        echo "'\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh\"></i> ";
        // line 156
        echo ($context["text_reset"] ?? null);
        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"button-filter\" name=\"submitFilter\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i> ";
        // line 159
        echo ($context["text_filter"] ?? null);
        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 165
        if (((isset($context["sellers"]) || array_key_exists("sellers", $context)) &&  !twig_test_empty(($context["sellers"] ?? null)))) {
            // line 166
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sellers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["seller"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 168
                if ((($context["usergroup"] ?? null) == 1)) {
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["seller"], "customer_id", [], "any", false, false, false, 169), ($context["selected"] ?? null))) {
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["seller"], "customer_id", [], "any", false, false, false, 170);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  ";
                    } else {
                        // line 172
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["seller"], "customer_id", [], "any", false, false, false, 172);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  ";
                    }
                    // line 174
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 176
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 177
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["seller"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["fio"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 178
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["seller"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["email"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 179
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["seller"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["companyname"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 180
                echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["seller"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["date_added"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 181
                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["seller"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["statusmain"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\" style=\"width: 190px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 183
                if ((twig_get_attribute($this->env, $this->source, $context["seller"], "status", [], "array", true, true, false, 183) && ((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["seller"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["status"] ?? null) : null) == 1))) {
                    // line 184
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["seller"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["disable"] ?? null) : null);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["text_inactivate"] ?? null);
                    echo "\" data-customer-id=\"";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["seller"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["customer_id"] ?? null) : null);
                    echo "\" onclick=\"return window.confirm('";
                    echo ($context["text_disable_confirm_message"] ?? null);
                    echo "');\" class=\"btn btn-danger\"><i class=\"fa fa-ban\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 186
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["seller"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["activate"] ?? null) : null);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["text_activate"] ?? null);
                    echo "\" data-customer-id=\"";
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["seller"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["customer_id"] ?? null) : null);
                    echo "\" onclick=\"return window.confirm('";
                    echo ($context["text_enable_confirm_message"] ?? null);
                    echo "');\" class=\"btn btn-warning\"><i class=\"fa fa-step-forward\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 188
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript://\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_seller_info"] ?? null);
                echo "\" data-customer-id=\"";
                echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["seller"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["customer_id"] ?? null) : null);
                echo "\" class=\"btn btn-primary sellerInfo\"><i class=\"fa fa-eye\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 189
                echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["seller"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript://\" onclick=\"approve_seller('";
                // line 190
                echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["seller"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["seller_id"] ?? null) : null);
                echo "')\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_approve"] ?? null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-check\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "\t\t\t\t\t\t\t\t\t\t";
        } else {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"9\">";
            // line 196
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 199
        echo "
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 205
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 206
        echo ($context["results"] ?? null);
        echo "</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--container fluid ends-->
</div>
                        
<div class=\"modal\" id=\"sellerInfoDetails\">
    <div class=\"modal-dialog modal-md\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h5 class=\"modal-title\">";
        // line 223
        echo ($context["text_seller_info"] ?? null);
        echo "</h5>
            </div>
            <div class=\"modal-body\">
                
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 229
        echo ($context["text_cancel"] ?? null);
        echo "</button>
            </div>
        </div>
    </div>
</div>
            
<script type=\"text/javascript\">
\t
    var customerId = '';

\t\t//Function to send approve seller request
\t\tfunction approve_seller(seller) {
\t\t\tif (seller != '') {
\t\t\t\tif (confirm('";
        // line 242
        echo ($context["text_approval_confirmation"] ?? null);
        echo "')) {
\t\t\t\t\tvar url = 'index.php?route=kbmp_marketplace/sellers_account_approval_list/approve&user_token=";
        // line 243
        echo ($context["token"] ?? null);
        echo "&seller_id=' + seller;
\t\t\t\t\tlocation = url;
\t\t\t\t}
\t\t\t}
\t\t}
\t
    \$(document).ready(function() {
\t\t
        \$(\".sellerInfo\").click(function() {
            customerId = \$(this).attr(\"data-customer-id\");
            \$(\"#sellerInfoDetails\").modal(\"show\");
        });
       
        \$('#sellerInfoDetails').on('shown.bs.modal', function (e) {
            \$(\"#sellerInfoDetails .modal-body\").html(\"\");
            \$.ajax({
                url: 'index.php?route=kbmp_marketplace/sellers_list/seller_info&customer_id=' + customerId + '&user_token=";
        // line 259
        echo ($context["token"] ?? null);
        echo "',
                success: function(html) {
                    \$(\"#sellerInfoDetails .modal-body\").html(html);
                }
            });
        });
    });
    
    
    \$('.date').datetimepicker({
        pickTime: false
    });

    //Trigger click event on Enter Keypress
    \$(document).keypress(function (e) {
        if (e.which == 13) {
            \$('#button-filter').trigger('click');
        }
    });

    \$('#button-filter').on('click', function () {
        var url = 'index.php?route=kbmp_marketplace/sellers_list&user_token=";
        // line 280
        echo ($context["token"] ?? null);
        echo "';

        var filter_firstname = \$('input[name=\\'filter_firstname\\']').val();

        if (filter_firstname) {
            url += '&filter_firstname=' + encodeURIComponent(filter_firstname);
        }

        var filter_lastname = \$('input[name=\\'filter_lastname\\']').val();

        if (filter_lastname) {
            url += '&filter_lastname=' + encodeURIComponent(filter_lastname);
        }

        var filter_email = \$('input[name=\\'filter_email\\']').val();

        if (filter_email) {
            url += '&filter_email=' + encodeURIComponent(filter_email);
        }

        var filter_shop = \$('input[name=\\'filter_shop\\']').val();

        if (filter_shop) {
            url += '&filter_shop=' + encodeURIComponent(filter_shop);
        }

        var filter_state = \$('input[name=\\'filter_state\\']').val();

        if (filter_state) {
            url += '&filter_state=' + encodeURIComponent(filter_state);
        }

        var filter_country = \$('select[name=\\'filter_country\\']').val();

        if (filter_country) {
            url += '&filter_country=' + encodeURIComponent(filter_country);
        }

        var filter_status = \$('select[name=\\'filter_status\\']').val();

        if (filter_status) {
            url += '&filter_status=' + encodeURIComponent(filter_status);
        }

        var filter_from_date = \$('input[name=\\'filter_from_date\\']').val();

        if (filter_from_date) {
            url += '&filter_from_date=' + encodeURIComponent(filter_from_date);
        }

        var filter_to_date = \$('input[name=\\'filter_to_date\\']').val();

        if (filter_to_date) {
            url += '&filter_to_date=' + encodeURIComponent(filter_to_date);
        }

        location = url;
    });
</script>
";
        // line 339
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "kbmp_marketplace/sellers_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 339,  726 => 280,  702 => 259,  683 => 243,  679 => 242,  663 => 229,  654 => 223,  634 => 206,  630 => 205,  622 => 199,  616 => 196,  610 => 194,  598 => 190,  592 => 189,  585 => 188,  573 => 186,  561 => 184,  559 => 183,  554 => 181,  550 => 180,  546 => 179,  542 => 178,  538 => 177,  535 => 176,  531 => 174,  525 => 172,  519 => 170,  516 => 169,  514 => 168,  506 => 166,  504 => 165,  495 => 159,  489 => 156,  485 => 155,  471 => 148,  458 => 142,  446 => 137,  438 => 136,  430 => 130,  427 => 129,  421 => 128,  416 => 126,  413 => 125,  407 => 124,  405 => 123,  398 => 122,  396 => 121,  386 => 116,  378 => 113,  370 => 110,  362 => 107,  354 => 104,  346 => 98,  339 => 97,  336 => 96,  327 => 95,  323 => 94,  319 => 92,  312 => 90,  309 => 89,  300 => 88,  296 => 87,  291 => 84,  284 => 83,  281 => 82,  272 => 81,  268 => 80,  263 => 77,  256 => 76,  253 => 75,  244 => 74,  240 => 73,  236 => 71,  228 => 69,  219 => 67,  215 => 66,  209 => 62,  202 => 61,  199 => 60,  190 => 59,  186 => 58,  181 => 55,  174 => 54,  171 => 53,  162 => 52,  158 => 51,  155 => 50,  151 => 48,  149 => 47,  141 => 42,  137 => 41,  129 => 38,  122 => 33,  115 => 30,  111 => 29,  108 => 28,  101 => 25,  97 => 24,  89 => 18,  81 => 16,  79 => 15,  73 => 14,  67 => 10,  57 => 9,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }} 
<div id=\"content\" class=\"bootstrap\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">   
\t\t\t<div class=\"pull-left\">
\t\t\t\t<h1>{{ heading_title }}</h1>
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t{% for breadcrumb in breadcrumbs %} 
\t\t\t\t\t\t<li><a href=\"{{ breadcrumb['href'] }}\">{{ breadcrumb['text'] }}</a></li>
\t\t\t\t\t\t{% endfor %} 
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t  <div class=\"pull-right\">
\t\t\t\t<a href=\"{{ seller_add }}\" data-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
\t\t\t\t  {% if usergroup == 1 %}
\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-danger\" onclick=\"confirm('{{ text_confirm }}') ? \$('#form-seller').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t\t  {% endif %}
\t\t\t  </div>
        </div>
    </div>
    <div class=\"container-fluid\">\t\t
        <div class=\"row\">       
            <div class=\"col-lg-12 col-md-12\">
                {% if (error) %} 
                    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> {{ error }} 
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    </div>
                {% endif %} 
                {% if (success) %} 
                    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> {{ success }} 
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    </div>
                {% endif %} 
            </div>
            <div class=\"col-lg-12 col-md-12\">
                <div class=\"panel panel-default\" id=\"fieldset_form\">\t\t\t
                    <div class=\"panel-heading\" style=\"display: inline-block; width: 100%;\"> 
                        {{ heading_title }} <span class=\"badge\">{{ sellers_total }}</span>
                    </div>
                    <div class=\"panel-body\">
                        {{tab_common}}
\t\t\t\t\t\t<form action=\"{{ delete }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-seller\">
\t\t\t\t\t\t\t<div class=\"filter-table-responsive table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table filter\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t{% if usergroup == 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t   <!-- <th>
\t\t\t\t\t\t\t\t\t\t\t\t{% if (sort == 'c.firstname') %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_firstname }}\" class=\"{{ (order) }}\">{{ column_firstname }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_firstname }}\">{{ column_firstname }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} 
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t{% if (sort == 'c.lastname') %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_lastname }}\" class=\"{{ (order) }}\">{{ column_lastname }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_lastname }}\">{{ column_lastname }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} 
\t\t\t\t\t\t\t\t\t\t\t</th> -->

\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t{% if (sort == 'c.fio') %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_fio }}\" class=\"{{ (order) }}\">{{ column_fio }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_fio }}\">{{ column_fio }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t{% if (sort == 'c.email') %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_email }}\" class=\"{{ (order) }}\">{{ column_email }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_email }}\">{{ column_email }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} 
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t{% if (sort == 'ks.companyname') %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_companyname }}\" class=\"{{ (order) }}\">{{ column_companyname }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_companyname }}\">{{ column_companyname }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} 
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t{% if (sort == 'ks.date_added') %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_seller_since }}\" class=\"{{ (order) }}\">{{ column_seller_since }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_seller_since }}\">{{ column_seller_since }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t  <th>
\t\t\t\t\t\t\t\t\t\t\t\t{% if (sort == 'ks.statusmain') %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_statusmain }}\" class=\"{{ (order) }}\">{{ column_status }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sort_statusmain }}\">{{ column_status }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} 
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr style=\"display:none\">  
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"filter_firstname\" value=\"{% if (filter_data['filter_firstname'] is defined) %}{{ filter_data['filter_firstname'] }}{% endif %}\"/>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"filter_lastname\" value=\"{% if (filter_data['filter_lastname'] is defined) %}{{ filter_data['filter_lastname'] }}{% endif %}\"/>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"filter_email\" value=\"{% if (filter_data['filter_email'] is defined) %}{{ filter_data['filter_email'] }}{% endif %}\"/>                                    
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"filter_shop\" value=\"{% if (filter_data['filter_shop'] is defined) %}{{ filter_data['filter_shop'] }}{% endif %}\"/>                                    
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"filter_state\" value=\"{% if (filter_data['filter_state'] is defined) %}{{ filter_data['filter_state'] }}{% endif %}\"/>                                    
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"filter_country\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected=\"selected\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if (countries is defined and countries is not empty) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for country in countries %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if (filter_data['filter_country'] is defined and filter_data['filter_country'] == country['country_id']) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ '<option value='~country['country_id']~' selected>'~country['name']~'</option>' }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %} 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ '<option value='~country['country_id']~'>'~country['name']~'</option>' }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"filter_status\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected=\"selected\"></option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" {% if (filter_data['filter_status'] is defined and filter_data['filter_status'] == '1') %}selected{% endif %}>{{ text_active }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" {% if (filter_data['filter_status'] is defined and filter_data['filter_status'] == '0') %}selected{% endif %}>{{ text_inactive }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select> 
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 155px\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\" style=\"margin-bottom:10px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_from_date\" value=\"{% if (filter_data['filter_from_date'] is defined) %}{{ filter_data['filter_from_date'] }}{% endif %}\" placeholder=\"{{ text_from_date }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-from-date\" class=\"datepicker hasDatepicker form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_to_date\" value=\"{% if (filter_data['filter_to_date'] is defined) %}{{ filter_data['filter_to_date'] }}{% endif %}\" placeholder=\"{{ text_to_date }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-to-date\" class=\"datepicker hasDatepicker form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 80px;\" class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-reset\" name=\"submitFilter\" class=\"btn btn-warning\" style=\"margin-bottom: 10px;\" onclick=\"window.location.href = 'index.php?route=kbmp_marketplace/sellers_list&user_token={{ token }}'\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-refresh\"></i> {{ text_reset }} 
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"button-filter\" name=\"submitFilter\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i> {{ text_filter }} 
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% if (sellers is defined and sellers is not empty) %}
\t\t\t\t\t\t\t\t\t\t\t{% for seller in sellers %} 
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if usergroup == 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{% if seller.customer_id in selected %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" name=\"selected[]\" value=\"{{ seller.customer_id }}\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  {% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" name=\"selected[]\" value=\"{{ seller.customer_id }}\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  {% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ seller['fio'] }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ seller['email'] }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ seller['companyname'] }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ seller['date_added'] }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ seller['statusmain'] }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\" style=\"width: 190px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if (seller['status'] is defined and seller['status'] == 1) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ seller['disable'] }}\" data-toggle=\"tooltip\" title=\"{{ text_inactivate }}\" data-customer-id=\"{{seller['customer_id']}}\" onclick=\"return window.confirm('{{text_disable_confirm_message}}');\" class=\"btn btn-danger\"><i class=\"fa fa-ban\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ seller['activate'] }}\" data-toggle=\"tooltip\" title=\"{{ text_activate }}\" data-customer-id=\"{{seller['customer_id']}}\" onclick=\"return window.confirm('{{text_enable_confirm_message}}');\" class=\"btn btn-warning\"><i class=\"fa fa-step-forward\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript://\" data-toggle=\"tooltip\" title=\"{{ text_seller_info }}\" data-customer-id=\"{{seller['customer_id']}}\" class=\"btn btn-primary sellerInfo\"><i class=\"fa fa-eye\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ seller['edit'] }}\" data-toggle=\"tooltip\" title=\"{{ text_edit }}\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript://\" onclick=\"approve_seller('{{ seller['seller_id'] }}')\" data-toggle=\"tooltip\" title=\"{{ text_approve }}\" class=\"btn btn-success\"><i class=\"fa fa-check\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t{% else %} 
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"9\">{{ text_no_results }}</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">{{ pagination }}</div>
                            <div class=\"col-sm-6 text-right\">{{ results }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--container fluid ends-->
</div>
                        
<div class=\"modal\" id=\"sellerInfoDetails\">
    <div class=\"modal-dialog modal-md\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h5 class=\"modal-title\">{{text_seller_info}}</h5>
            </div>
            <div class=\"modal-body\">
                
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">{{ text_cancel }}</button>
            </div>
        </div>
    </div>
</div>
            
<script type=\"text/javascript\">
\t
    var customerId = '';

\t\t//Function to send approve seller request
\t\tfunction approve_seller(seller) {
\t\t\tif (seller != '') {
\t\t\t\tif (confirm('{{ text_approval_confirmation }}')) {
\t\t\t\t\tvar url = 'index.php?route=kbmp_marketplace/sellers_account_approval_list/approve&user_token={{ token }}&seller_id=' + seller;
\t\t\t\t\tlocation = url;
\t\t\t\t}
\t\t\t}
\t\t}
\t
    \$(document).ready(function() {
\t\t
        \$(\".sellerInfo\").click(function() {
            customerId = \$(this).attr(\"data-customer-id\");
            \$(\"#sellerInfoDetails\").modal(\"show\");
        });
       
        \$('#sellerInfoDetails').on('shown.bs.modal', function (e) {
            \$(\"#sellerInfoDetails .modal-body\").html(\"\");
            \$.ajax({
                url: 'index.php?route=kbmp_marketplace/sellers_list/seller_info&customer_id=' + customerId + '&user_token={{ token }}',
                success: function(html) {
                    \$(\"#sellerInfoDetails .modal-body\").html(html);
                }
            });
        });
    });
    
    
    \$('.date').datetimepicker({
        pickTime: false
    });

    //Trigger click event on Enter Keypress
    \$(document).keypress(function (e) {
        if (e.which == 13) {
            \$('#button-filter').trigger('click');
        }
    });

    \$('#button-filter').on('click', function () {
        var url = 'index.php?route=kbmp_marketplace/sellers_list&user_token={{ token }}';

        var filter_firstname = \$('input[name=\\'filter_firstname\\']').val();

        if (filter_firstname) {
            url += '&filter_firstname=' + encodeURIComponent(filter_firstname);
        }

        var filter_lastname = \$('input[name=\\'filter_lastname\\']').val();

        if (filter_lastname) {
            url += '&filter_lastname=' + encodeURIComponent(filter_lastname);
        }

        var filter_email = \$('input[name=\\'filter_email\\']').val();

        if (filter_email) {
            url += '&filter_email=' + encodeURIComponent(filter_email);
        }

        var filter_shop = \$('input[name=\\'filter_shop\\']').val();

        if (filter_shop) {
            url += '&filter_shop=' + encodeURIComponent(filter_shop);
        }

        var filter_state = \$('input[name=\\'filter_state\\']').val();

        if (filter_state) {
            url += '&filter_state=' + encodeURIComponent(filter_state);
        }

        var filter_country = \$('select[name=\\'filter_country\\']').val();

        if (filter_country) {
            url += '&filter_country=' + encodeURIComponent(filter_country);
        }

        var filter_status = \$('select[name=\\'filter_status\\']').val();

        if (filter_status) {
            url += '&filter_status=' + encodeURIComponent(filter_status);
        }

        var filter_from_date = \$('input[name=\\'filter_from_date\\']').val();

        if (filter_from_date) {
            url += '&filter_from_date=' + encodeURIComponent(filter_from_date);
        }

        var filter_to_date = \$('input[name=\\'filter_to_date\\']').val();

        if (filter_to_date) {
            url += '&filter_to_date=' + encodeURIComponent(filter_to_date);
        }

        location = url;
    });
</script>
{{ footer }}", "kbmp_marketplace/sellers_list.twig", "");
    }
}
