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

/* kbmp_marketplace/sellers_account_approval_list.twig */
class __TwigTemplate_aa0b1af66f81fea9bf13345d0ef99882e486c1bd619c554a567d3431d4abdc8a extends \Twig\Template
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
\t\t\t <div class=\"pull-right\">
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 14
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-seller').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t  </div>
        </div>
    </div>
    <div class=\"container-fluid\">\t\t
        <div class=\"row\">            
            <div class=\"col-lg-12 col-md-12\">
                ";
        // line 21
        if (($context["error"] ?? null)) {
            echo " 
                    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 22
            echo ($context["error"] ?? null);
            echo " 
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    </div>
                ";
        }
        // line 25
        echo " 
                ";
        // line 26
        if (($context["success"] ?? null)) {
            echo " 
                    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 27
            echo ($context["success"] ?? null);
            echo " 
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    </div>
                ";
        }
        // line 30
        echo " 
                <div class=\"panel panel-default\" id=\"fieldset_form\">\t\t\t
                    <div class=\"panel-heading\" style=\"display: inline-block; width: 100%;\">
                        ";
        // line 33
        echo ($context["heading_title"] ?? null);
        echo " <span class=\"badge\">";
        echo ($context["pending_approvals_total"] ?? null);
        echo "</span>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 36
        echo ($context["tab_common"] ?? null);
        echo "

\t\t\t\t\t\t<form action=\"";
        // line 38
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-seller\">
                        <div class=\"filter-table-responsive table-responsive\">
                            <table class=\"table filter\">
                                <thead>
                                    <tr>
\t\t\t\t\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                        <th>
                                            ";
        // line 45
        if ((($context["sort"] ?? null) == "c.firstname")) {
            echo " 
                                                <a href=\"";
            // line 46
            echo ($context["sort_firstname"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_firstname"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 47
            echo " 
                                                <a href=\"";
            // line 48
            echo ($context["sort_firstname"] ?? null);
            echo "\">";
            echo ($context["column_firstname"] ?? null);
            echo "</a>
                                            ";
        }
        // line 49
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 52
        if ((($context["sort"] ?? null) == "c.lastname")) {
            echo " 
                                                <a href=\"";
            // line 53
            echo ($context["sort_lastname"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_lastname"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 54
            echo " 
                                                <a href=\"";
            // line 55
            echo ($context["sort_lastname"] ?? null);
            echo "\">";
            echo ($context["column_lastname"] ?? null);
            echo "</a>
                                            ";
        }
        // line 56
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 59
        if ((($context["sort"] ?? null) == "c.email")) {
            echo " 
                                                <a href=\"";
            // line 60
            echo ($context["sort_email"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 61
            echo " 
                                                <a href=\"";
            // line 62
            echo ($context["sort_email"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
                                            ";
        }
        // line 63
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 66
        if ((($context["sort"] ?? null) == "ksd.title")) {
            echo " 
                                                <a href=\"";
            // line 67
            echo ($context["sort_shop"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_shop"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 68
            echo " 
                                                <a href=\"";
            // line 69
            echo ($context["sort_shop"] ?? null);
            echo "\">";
            echo ($context["column_shop"] ?? null);
            echo "</a>
                                            ";
        }
        // line 70
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 73
        if ((($context["sort"] ?? null) == "ct.name")) {
            echo " 
                                                <a href=\"";
            // line 74
            echo ($context["sort_country"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_country"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 75
            echo " 
                                                <a href=\"";
            // line 76
            echo ($context["sort_country"] ?? null);
            echo "\">";
            echo ($context["column_country"] ?? null);
            echo "</a>
                                            ";
        }
        // line 77
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 80
        if ((($context["sort"] ?? null) == "ks.active")) {
            echo " 
                                                <a href=\"";
            // line 81
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 82
            echo " 
                                                <a href=\"";
            // line 83
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                                            ";
        }
        // line 84
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 87
        if ((($context["sort"] ?? null) == "ks.approved")) {
            echo " 
                                                <a href=\"";
            // line 88
            echo ($context["sort_approval_status"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_approval"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 89
            echo " 
                                                <a href=\"";
            // line 90
            echo ($context["sort_approval_status"] ?? null);
            echo "\">";
            echo ($context["column_approval"] ?? null);
            echo "</a>
                                            ";
        }
        // line 91
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 94
        if ((($context["sort"] ?? null) == "ks.date_added")) {
            echo " 
                                                <a href=\"";
            // line 95
            echo ($context["sort_request_date"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_request_date"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 96
            echo " 
                                                <a href=\"";
            // line 97
            echo ($context["sort_request_date"] ?? null);
            echo "\">";
            echo ($context["column_request_date"] ?? null);
            echo "</a>
                                            ";
        }
        // line 99
        echo "                                        </th>
                                        <th></th>
                                    </tr>
                                    <tr>  
\t\t\t\t\t\t\t\t\t\t<td></td>
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"filter_firstname\" value=\"";
        // line 105
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_firstname", [], "array", true, true, false, 105)) {
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["filter_data"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["filter_firstname"] ?? null) : null);
        }
        echo "\"/>
                                        </th>
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"filter_lastname\" value=\"";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_lastname", [], "array", true, true, false, 108)) {
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["filter_data"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["filter_lastname"] ?? null) : null);
        }
        echo "\"/>
                                        </th>
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"filter_email\" value=\"";
        // line 111
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_email", [], "array", true, true, false, 111)) {
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["filter_data"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["filter_email"] ?? null) : null);
        }
        echo "\"/>                                    
                                        </th>
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"filter_shop\" value=\"";
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_shop", [], "array", true, true, false, 114)) {
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["filter_data"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["filter_shop"] ?? null) : null);
        }
        echo "\"/>                                    
                                        </th>
                                        <th>
                                            <select class=\"form-control\" name=\"filter_country\">
                                                <option value=\"\" selected=\"selected\"></option>
                                                ";
        // line 119
        if (((isset($context["countries"]) || array_key_exists("countries", $context)) &&  !twig_test_empty(($context["countries"] ?? null)))) {
            // line 120
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                echo " 
                                                        ";
                // line 121
                if ((twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_country", [], "array", true, true, false, 121) && ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["filter_data"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["filter_country"] ?? null) : null) == (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["country"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["country_id"] ?? null) : null)))) {
                    // line 122
                    echo "                                                            ";
                    echo (((("<option value=" . (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["country"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["country_id"] ?? null) : null)) . " selected>") . (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["country"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["name"] ?? null) : null)) . "</option>");
                    echo "
                                                        ";
                } else {
                    // line 123
                    echo " 
                                                            ";
                    // line 124
                    echo (((("<option value=" . (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["country"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["country_id"] ?? null) : null)) . ">") . (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["country"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["name"] ?? null) : null)) . "</option>");
                    echo "
                                                        ";
                }
                // line 126
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                                                ";
        }
        // line 128
        echo "
                                            </select>
                                        </th>
                                        <th>
                                            <select class=\"form-control\" name=\"filter_status\">
                                                <option value=\"\" selected=\"selected\"></option>
                                                <option value=\"1\" ";
        // line 134
        if ((twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_status", [], "array", true, true, false, 134) && ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["filter_data"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["filter_status"] ?? null) : null) == "1"))) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_active"] ?? null);
        echo "</option>
                                                <option value=\"0\" ";
        // line 135
        if ((twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_status", [], "array", true, true, false, 135) && ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["filter_data"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["filter_status"] ?? null) : null) == "0"))) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_inactive"] ?? null);
        echo "</option>
                                            </select> 
                                        </th>
                                        <th>
                                            <select class=\"form-control\" name=\"filter_approval_status\">
                                                <option value=\"\" selected=\"selected\"></option>
                                                <option value=\"0\" ";
        // line 141
        if ((twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_approval_status", [], "array", true, true, false, 141) && ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["filter_data"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["filter_approval_status"] ?? null) : null) == "0"))) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_waiting_approval"] ?? null);
        echo "</option>
                                                <option value=\"2\" ";
        // line 142
        if ((twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_approval_status", [], "array", true, true, false, 142) && ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["filter_data"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["filter_approval_status"] ?? null) : null) == "2"))) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_disapproved"] ?? null);
        echo "</option>
                                            </select> 
                                        </th>
                                        <th style=\"width: 155px\">
                                            <div class=\"input-group date\" style=\"margin-bottom:10px;\">
                                                <input type=\"text\" name=\"filter_from_date\" value=\"";
        // line 147
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_from_date", [], "array", true, true, false, 147)) {
            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["filter_data"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["filter_from_date"] ?? null) : null);
        }
        echo "\" placeholder=\"";
        echo ($context["text_from_date"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-from-date\" class=\"datepicker hasDatepicker form-control\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                                </span>
                                            </div>
                                            <div class=\"input-group date\">
                                                <input type=\"text\" name=\"filter_to_date\" value=\"";
        // line 153
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_to_date", [], "array", true, true, false, 153)) {
            echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["filter_data"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["filter_to_date"] ?? null) : null);
        }
        echo "\" placeholder=\"";
        echo ($context["text_to_date"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-to-date\" class=\"datepicker hasDatepicker form-control\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                                </span>
                                            </div>
                                        </th>
                                        <th style=\"width: 190px\" class=\"text-right\">
                                            <button type=\"button\" id=\"button-reset\" name=\"submitFilter\" class=\"btn btn-warning\" onclick=\"window.location.href = 'index.php?route=kbmp_marketplace/sellers_account_approval_list&user_token=";
        // line 160
        echo ($context["token"] ?? null);
        echo "'\">
                                                <i class=\"fa fa-refresh\"></i> ";
        // line 161
        echo ($context["text_reset"] ?? null);
        echo " 
                                            </button>
                                            <button type=\"submit\" id=\"button-filter\" name=\"submitFilter\" class=\"btn btn-primary\">
                                                <i class=\"fa fa-search\"></i> ";
        // line 164
        echo ($context["text_filter"] ?? null);
        echo " 
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 170
        if (((isset($context["pending_approvals"]) || array_key_exists("pending_approvals", $context)) &&  !twig_test_empty(($context["pending_approvals"] ?? null)))) {
            // line 171
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pending_approvals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pending_approval"]) {
                echo " 

                                            <tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
                // line 174
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["pending_approval"], "customer_id", [], "any", false, false, false, 174), ($context["selected"] ?? null))) {
                    // line 175
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["pending_approval"], "customer_id", [], "any", false, false, false, 175);
                    echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t  ";
                } else {
                    // line 177
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["pending_approval"], "customer_id", [], "any", false, false, false, 177);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t  ";
                }
                // line 179
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                <td>";
                // line 180
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["pending_approval"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["firstname"] ?? null) : null);
                echo "</td>
                                                <td>";
                // line 181
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["pending_approval"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["lastname"] ?? null) : null);
                echo "</td>
                                                <td>";
                // line 182
                echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["pending_approval"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["email"] ?? null) : null);
                echo "</td>
                                                <td>";
                // line 183
                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["pending_approval"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["shop"] ?? null) : null);
                echo "</td>
                                                <td>";
                // line 184
                echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["pending_approval"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["country"] ?? null) : null);
                echo "</td>
                                                <td style=\"text-align: center;\">
                                                    ";
                // line 186
                if ((twig_get_attribute($this->env, $this->source, $context["pending_approval"], "status", [], "array", true, true, false, 186) && ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["pending_approval"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["status"] ?? null) : null) == 1))) {
                    // line 187
                    echo "                                                        <i class=\"fa fa-check text-success\" title=\"";
                    echo ($context["text_active"] ?? null);
                    echo "\"></i> 
                                                    ";
                } else {
                    // line 188
                    echo " 
                                                        <i class=\"fa fa-ban text-danger\" title=\"";
                    // line 189
                    echo ($context["text_inactive"] ?? null);
                    echo "\"></i> 
                                                    ";
                }
                // line 191
                echo "                                                </td>
                                                <td style=\"text-align: center;\">
                                                    ";
                // line 193
                if (((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["pending_approval"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["approval_status"] ?? null) : null) == 2)) {
                    // line 194
                    echo "                                                        <i class=\"fa fa-ban text-danger\" title=\"";
                    echo ($context["text_disapproved"] ?? null);
                    echo "\"></i> 
                                                    ";
                } else {
                    // line 195
                    echo " 
                                                        ";
                    // line 196
                    echo ($context["text_waiting_approval"] ?? null);
                    echo "
                                                    ";
                }
                // line 198
                echo "                                                </td>
                                                <td>";
                // line 199
                echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["pending_approval"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["date_added"] ?? null) : null);
                echo "</td>
                                                <td>
                                                    <a href=\"javascript://\" data-toggle=\"tooltip\" title=\"";
                // line 201
                echo ($context["text_seller_info"] ?? null);
                echo "\" data-customer-id=\"";
                echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["pending_approval"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["customer_id"] ?? null) : null);
                echo "\" class=\"btn btn-primary sellerInfo\"><i class=\"fa fa-eye\"></i></a>
                                                    <a href=\"";
                // line 202
                echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["pending_approval"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                                    <a href=\"javascript://\" onclick=\"approve_seller('";
                // line 203
                echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["pending_approval"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["seller_id"] ?? null) : null);
                echo "')\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_approve"] ?? null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-check\"></i></a>
                                                    <a href=\"javascript://\" title=\"";
                // line 204
                echo ($context["text_disapprove"] ?? null);
                echo "\" class=\"btn btn-danger\" ";
                if (((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["pending_approval"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["approval_status"] ?? null) : null) == 2)) {
                    echo " ";
                    echo "disabled";
                    echo " ";
                } else {
                    echo " data-toggle=\"modal\" data-target=\"#disapproveModal\" onclick=\"disapprove_seller('";
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["pending_approval"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["seller_id"] ?? null) : null);
                    echo "')\"";
                }
                echo "><i class=\"fa fa-ban\"></i></a>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pending_approval'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "                                    ";
        } else {
            echo " 

                                        <tr>
                                            <td colspan=\"9\">";
            // line 211
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 214
        echo "
                                </tbody>
                            </table>
                        </div>
\t\t\t\t\t\t\t</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--container fluid ends-->
</div>

<div class=\"modal\" id=\"disapproveModal\">
    <div class=\"modal-dialog modal-md\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">";
        // line 231
        echo ($context["text_disapproval"] ?? null);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p>";
        // line 237
        echo ($context["text_disapproval_popup"] ?? null);
        echo "</p>
                <input type=\"text\" name=\"disapprove_comment\" id=\"disapprove_comment\" value=\"\" placeholder=\"\" class=\"form-control\" />
                <input type=\"hidden\" name=\"seller_id\" id=\"seller_id\" value=\"\" />
            </div>

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 243
        echo ($context["text_cancel"] ?? null);
        echo "</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"disapprove_submit\">";
        // line 244
        echo ($context["text_submit"] ?? null);
        echo "</button>
            </div>
        </div>
    </div>
</div>
            
<div class=\"modal\" id=\"sellerInfoDetails\">
    <div class=\"modal-dialog modal-md\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h5 class=\"modal-title\">";
        // line 257
        echo ($context["text_seller_info"] ?? null);
        echo "</h5>
            </div>
            <div class=\"modal-body\">
                
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 263
        echo ($context["text_cancel"] ?? null);
        echo "</button>
            </div>
        </div>
    </div>
</div>
            
<script type=\"text/javascript\">
    
    var customerId = '';
    \$(document).ready(function() {
        \$(\".sellerInfo\").click(function() {
            customerId = \$(this).attr(\"data-customer-id\");
            \$(\"#sellerInfoDetails\").modal(\"show\");
        });
       
        \$('#sellerInfoDetails').on('shown.bs.modal', function (e) {
            \$(\"#sellerInfoDetails .modal-body\").html(\"\");
            \$.ajax({
                url: 'index.php?route=kbmp_marketplace/sellers_list/seller_info&customer_id=' + customerId + '&user_token=";
        // line 281
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

    //Function to send approve seller request
    function approve_seller(seller) {
        if (seller != '') {
            if (confirm('";
        // line 296
        echo ($context["text_approval_confirmation"] ?? null);
        echo "')) {
                var url = 'index.php?route=kbmp_marketplace/sellers_account_approval_list/approve&user_token=";
        // line 297
        echo ($context["token"] ?? null);
        echo "&seller_id=' + seller;
                location = url;
            }
        }
    }

    //Function to disapprove seller request
    function disapprove_seller(seller) {
        if (seller != '') {
            \$(\"#seller_id\").val(seller);
        }
    }

    \$(\"#disapprove_submit\").on(\"click\", function () {
        var comment = \$(\"#disapprove_comment\").val();
        var seller = \$(\"#seller_id\").val();

        \$(\".kb_error_message\").remove();

        if (\$.trim(comment) != '') {
            var url = 'index.php?route=kbmp_marketplace/sellers_account_approval_list/disapprove&user_token=";
        // line 317
        echo ($context["token"] ?? null);
        echo "&seller_id=' + seller + '&comment=' + encodeURIComponent(comment);
            location = url;
        } else {
            \$(\"<span class='kb_error_message'>";
        // line 320
        echo ($context["disapprove_comment_error"] ?? null);
        echo "</span>\").insertAfter(\$(\"#disapprove_comment\"));
        }
    });

    //Trigger click event on Enter Keypress
    \$(document).keypress(function (e) {
        if (e.which == 13) {
            \$('#button-filter').trigger('click');
        }
    });

    \$('#button-filter').on('click', function () {
        var url = 'index.php?route=kbmp_marketplace/sellers_account_approval_list&user_token=";
        // line 332
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

        var filter_country = \$('select[name=\\'filter_country\\']').val();

        if (filter_country) {
            url += '&filter_country=' + encodeURIComponent(filter_country);
        }

        var filter_status = \$('select[name=\\'filter_status\\']').val();

        if (filter_status) {
            url += '&filter_status=' + encodeURIComponent(filter_status);
        }

        var filter_approval_status = \$('select[name=\\'filter_approval_status\\']').val();

        if (filter_approval_status) {
            url += '&filter_approval_status=' + encodeURIComponent(filter_approval_status);
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
        // line 391
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "kbmp_marketplace/sellers_account_approval_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  887 => 391,  825 => 332,  810 => 320,  804 => 317,  781 => 297,  777 => 296,  759 => 281,  738 => 263,  729 => 257,  713 => 244,  709 => 243,  700 => 237,  691 => 231,  672 => 214,  666 => 211,  659 => 208,  639 => 204,  633 => 203,  627 => 202,  621 => 201,  616 => 199,  613 => 198,  608 => 196,  605 => 195,  599 => 194,  597 => 193,  593 => 191,  588 => 189,  585 => 188,  579 => 187,  577 => 186,  572 => 184,  568 => 183,  564 => 182,  560 => 181,  556 => 180,  553 => 179,  547 => 177,  541 => 175,  539 => 174,  530 => 171,  528 => 170,  519 => 164,  513 => 161,  509 => 160,  495 => 153,  482 => 147,  470 => 142,  462 => 141,  449 => 135,  441 => 134,  433 => 128,  430 => 127,  424 => 126,  419 => 124,  416 => 123,  410 => 122,  408 => 121,  401 => 120,  399 => 119,  389 => 114,  381 => 111,  373 => 108,  365 => 105,  357 => 99,  350 => 97,  347 => 96,  338 => 95,  334 => 94,  329 => 91,  322 => 90,  319 => 89,  310 => 88,  306 => 87,  301 => 84,  294 => 83,  291 => 82,  282 => 81,  278 => 80,  273 => 77,  266 => 76,  263 => 75,  254 => 74,  250 => 73,  245 => 70,  238 => 69,  235 => 68,  226 => 67,  222 => 66,  217 => 63,  210 => 62,  207 => 61,  198 => 60,  194 => 59,  189 => 56,  182 => 55,  179 => 54,  170 => 53,  166 => 52,  161 => 49,  154 => 48,  151 => 47,  142 => 46,  138 => 45,  128 => 38,  123 => 36,  115 => 33,  110 => 30,  103 => 27,  99 => 26,  96 => 25,  89 => 22,  85 => 21,  73 => 14,  67 => 10,  57 => 9,  51 => 8,  46 => 6,  37 => 1,);
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
\t\t\t <div class=\"pull-right\">
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-danger\" onclick=\"confirm('{{ text_confirm }}') ? \$('#form-seller').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
                <div class=\"panel panel-default\" id=\"fieldset_form\">\t\t\t
                    <div class=\"panel-heading\" style=\"display: inline-block; width: 100%;\">
                        {{ heading_title }} <span class=\"badge\">{{ pending_approvals_total }}</span>
                    </div>
                    <div class=\"panel-body\">
                        {{tab_common}}

\t\t\t\t\t\t<form action=\"{{ delete }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-seller\">
                        <div class=\"filter-table-responsive table-responsive\">
                            <table class=\"table filter\">
                                <thead>
                                    <tr>
\t\t\t\t\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                        <th>
                                            {% if (sort == 'c.firstname') %} 
                                                <a href=\"{{ sort_firstname }}\" class=\"{{ (order) }}\">{{ column_firstname }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_firstname }}\">{{ column_firstname }}</a>
                                            {% endif %} 
                                        </th>
                                        <th>
                                            {% if (sort == 'c.lastname') %} 
                                                <a href=\"{{ sort_lastname }}\" class=\"{{ (order) }}\">{{ column_lastname }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_lastname }}\">{{ column_lastname }}</a>
                                            {% endif %} 
                                        </th>
                                        <th>
                                            {% if (sort == 'c.email') %} 
                                                <a href=\"{{ sort_email }}\" class=\"{{ (order) }}\">{{ column_email }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_email }}\">{{ column_email }}</a>
                                            {% endif %} 
                                        </th>
                                        <th>
                                            {% if (sort == 'ksd.title') %} 
                                                <a href=\"{{ sort_shop }}\" class=\"{{ (order) }}\">{{ column_shop }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_shop }}\">{{ column_shop }}</a>
                                            {% endif %} 
                                        </th>
                                        <th>
                                            {% if (sort == 'ct.name') %} 
                                                <a href=\"{{ sort_country }}\" class=\"{{ (order) }}\">{{ column_country }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_country }}\">{{ column_country }}</a>
                                            {% endif %} 
                                        </th>
                                        <th>
                                            {% if (sort == 'ks.active') %} 
                                                <a href=\"{{ sort_status }}\" class=\"{{ (order) }}\">{{ column_status }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_status }}\">{{ column_status }}</a>
                                            {% endif %} 
                                        </th>
                                        <th>
                                            {% if (sort == 'ks.approved') %} 
                                                <a href=\"{{ sort_approval_status }}\" class=\"{{ (order) }}\">{{ column_approval }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_approval_status }}\">{{ column_approval }}</a>
                                            {% endif %} 
                                        </th>
                                        <th>
                                            {% if (sort == 'ks.date_added') %} 
                                                <a href=\"{{ sort_request_date }}\" class=\"{{ (order) }}\">{{ column_request_date }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_request_date }}\">{{ column_request_date }}</a>
                                            {% endif %}
                                        </th>
                                        <th></th>
                                    </tr>
                                    <tr>  
\t\t\t\t\t\t\t\t\t\t<td></td>
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"filter_firstname\" value=\"{% if (filter_data['filter_firstname'] is defined) %}{{ filter_data['filter_firstname'] }}{% endif %}\"/>
                                        </th>
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"filter_lastname\" value=\"{% if (filter_data['filter_lastname'] is defined) %}{{ filter_data['filter_lastname'] }}{% endif %}\"/>
                                        </th>
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"filter_email\" value=\"{% if (filter_data['filter_email'] is defined) %}{{ filter_data['filter_email'] }}{% endif %}\"/>                                    
                                        </th>
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"filter_shop\" value=\"{% if (filter_data['filter_shop'] is defined) %}{{ filter_data['filter_shop'] }}{% endif %}\"/>                                    
                                        </th>
                                        <th>
                                            <select class=\"form-control\" name=\"filter_country\">
                                                <option value=\"\" selected=\"selected\"></option>
                                                {% if (countries is defined and countries is not empty) %}
                                                    {% for country in countries %} 
                                                        {% if (filter_data['filter_country'] is defined and filter_data['filter_country'] == country['country_id']) %}
                                                            {{ '<option value='~country['country_id']~' selected>'~country['name']~'</option>' }}
                                                        {% else %} 
                                                            {{ '<option value='~country['country_id']~'>'~country['name']~'</option>' }}
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}

                                            </select>
                                        </th>
                                        <th>
                                            <select class=\"form-control\" name=\"filter_status\">
                                                <option value=\"\" selected=\"selected\"></option>
                                                <option value=\"1\" {% if (filter_data['filter_status'] is defined and filter_data['filter_status'] == '1') %}selected{% endif %}>{{ text_active }}</option>
                                                <option value=\"0\" {% if (filter_data['filter_status'] is defined and filter_data['filter_status'] == '0') %}selected{% endif %}>{{ text_inactive }}</option>
                                            </select> 
                                        </th>
                                        <th>
                                            <select class=\"form-control\" name=\"filter_approval_status\">
                                                <option value=\"\" selected=\"selected\"></option>
                                                <option value=\"0\" {% if (filter_data['filter_approval_status'] is defined and filter_data['filter_approval_status'] == '0') %}selected{% endif %}>{{ text_waiting_approval }}</option>
                                                <option value=\"2\" {% if (filter_data['filter_approval_status'] is defined and filter_data['filter_approval_status'] == '2') %}selected{% endif %}>{{ text_disapproved }}</option>
                                            </select> 
                                        </th>
                                        <th style=\"width: 155px\">
                                            <div class=\"input-group date\" style=\"margin-bottom:10px;\">
                                                <input type=\"text\" name=\"filter_from_date\" value=\"{% if (filter_data['filter_from_date'] is defined) %}{{ filter_data['filter_from_date'] }}{% endif %}\" placeholder=\"{{ text_from_date }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-from-date\" class=\"datepicker hasDatepicker form-control\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                                </span>
                                            </div>
                                            <div class=\"input-group date\">
                                                <input type=\"text\" name=\"filter_to_date\" value=\"{% if (filter_data['filter_to_date'] is defined) %}{{ filter_data['filter_to_date'] }}{% endif %}\" placeholder=\"{{ text_to_date }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-to-date\" class=\"datepicker hasDatepicker form-control\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                                </span>
                                            </div>
                                        </th>
                                        <th style=\"width: 190px\" class=\"text-right\">
                                            <button type=\"button\" id=\"button-reset\" name=\"submitFilter\" class=\"btn btn-warning\" onclick=\"window.location.href = 'index.php?route=kbmp_marketplace/sellers_account_approval_list&user_token={{ token }}'\">
                                                <i class=\"fa fa-refresh\"></i> {{ text_reset }} 
                                            </button>
                                            <button type=\"submit\" id=\"button-filter\" name=\"submitFilter\" class=\"btn btn-primary\">
                                                <i class=\"fa fa-search\"></i> {{ text_filter }} 
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% if (pending_approvals is defined and pending_approvals is not empty) %}
                                        {% for pending_approval in pending_approvals %} 

                                            <tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{% if pending_approval.customer_id in selected %}
\t\t\t\t\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" name=\"selected[]\" value=\"{{ pending_approval.customer_id }}\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t  {% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" name=\"selected[]\" value=\"{{ pending_approval.customer_id }}\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t  {% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                <td>{{ pending_approval['firstname'] }}</td>
                                                <td>{{ pending_approval['lastname'] }}</td>
                                                <td>{{ pending_approval['email'] }}</td>
                                                <td>{{ pending_approval['shop'] }}</td>
                                                <td>{{ pending_approval['country'] }}</td>
                                                <td style=\"text-align: center;\">
                                                    {% if (pending_approval['status'] is defined and pending_approval['status'] == 1) %}
                                                        <i class=\"fa fa-check text-success\" title=\"{{ text_active }}\"></i> 
                                                    {% else %} 
                                                        <i class=\"fa fa-ban text-danger\" title=\"{{ text_inactive }}\"></i> 
                                                    {% endif %}
                                                </td>
                                                <td style=\"text-align: center;\">
                                                    {% if pending_approval['approval_status'] == 2 %}
                                                        <i class=\"fa fa-ban text-danger\" title=\"{{ text_disapproved }}\"></i> 
                                                    {% else %} 
                                                        {{ text_waiting_approval }}
                                                    {% endif %}
                                                </td>
                                                <td>{{ pending_approval['date_added'] }}</td>
                                                <td>
                                                    <a href=\"javascript://\" data-toggle=\"tooltip\" title=\"{{ text_seller_info }}\" data-customer-id=\"{{pending_approval['customer_id']}}\" class=\"btn btn-primary sellerInfo\"><i class=\"fa fa-eye\"></i></a>
                                                    <a href=\"{{ pending_approval['edit'] }}\" data-toggle=\"tooltip\" title=\"{{ text_edit }}\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                                    <a href=\"javascript://\" onclick=\"approve_seller('{{ pending_approval['seller_id'] }}')\" data-toggle=\"tooltip\" title=\"{{ text_approve }}\" class=\"btn btn-success\"><i class=\"fa fa-check\"></i></a>
                                                    <a href=\"javascript://\" title=\"{{ text_disapprove }}\" class=\"btn btn-danger\" {% if pending_approval['approval_status'] == 2 %} {{ \"disabled\" }} {% else %} data-toggle=\"modal\" data-target=\"#disapproveModal\" onclick=\"disapprove_seller('{{ pending_approval['seller_id'] }}')\"{% endif %}><i class=\"fa fa-ban\"></i></a>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    {% else %} 

                                        <tr>
                                            <td colspan=\"9\">{{ text_no_results }}</td>
                                        </tr>
                                    {% endif %}

                                </tbody>
                            </table>
                        </div>
\t\t\t\t\t\t\t</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--container fluid ends-->
</div>

<div class=\"modal\" id=\"disapproveModal\">
    <div class=\"modal-dialog modal-md\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">{{ text_disapproval }}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p>{{ text_disapproval_popup }}</p>
                <input type=\"text\" name=\"disapprove_comment\" id=\"disapprove_comment\" value=\"\" placeholder=\"\" class=\"form-control\" />
                <input type=\"hidden\" name=\"seller_id\" id=\"seller_id\" value=\"\" />
            </div>

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">{{ text_cancel }}</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"disapprove_submit\">{{ text_submit }}</button>
            </div>
        </div>
    </div>
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
    
    var customerId = '';
    \$(document).ready(function() {
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

    //Function to send approve seller request
    function approve_seller(seller) {
        if (seller != '') {
            if (confirm('{{ text_approval_confirmation }}')) {
                var url = 'index.php?route=kbmp_marketplace/sellers_account_approval_list/approve&user_token={{ token }}&seller_id=' + seller;
                location = url;
            }
        }
    }

    //Function to disapprove seller request
    function disapprove_seller(seller) {
        if (seller != '') {
            \$(\"#seller_id\").val(seller);
        }
    }

    \$(\"#disapprove_submit\").on(\"click\", function () {
        var comment = \$(\"#disapprove_comment\").val();
        var seller = \$(\"#seller_id\").val();

        \$(\".kb_error_message\").remove();

        if (\$.trim(comment) != '') {
            var url = 'index.php?route=kbmp_marketplace/sellers_account_approval_list/disapprove&user_token={{ token }}&seller_id=' + seller + '&comment=' + encodeURIComponent(comment);
            location = url;
        } else {
            \$(\"<span class='kb_error_message'>{{ disapprove_comment_error }}</span>\").insertAfter(\$(\"#disapprove_comment\"));
        }
    });

    //Trigger click event on Enter Keypress
    \$(document).keypress(function (e) {
        if (e.which == 13) {
            \$('#button-filter').trigger('click');
        }
    });

    \$('#button-filter').on('click', function () {
        var url = 'index.php?route=kbmp_marketplace/sellers_account_approval_list&user_token={{ token }}';

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

        var filter_country = \$('select[name=\\'filter_country\\']').val();

        if (filter_country) {
            url += '&filter_country=' + encodeURIComponent(filter_country);
        }

        var filter_status = \$('select[name=\\'filter_status\\']').val();

        if (filter_status) {
            url += '&filter_status=' + encodeURIComponent(filter_status);
        }

        var filter_approval_status = \$('select[name=\\'filter_approval_status\\']').val();

        if (filter_approval_status) {
            url += '&filter_approval_status=' + encodeURIComponent(filter_approval_status);
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
{{ footer }}", "kbmp_marketplace/sellers_account_approval_list.twig", "");
    }
}
