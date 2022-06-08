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
class __TwigTemplate_91d695a8b1a71c4369c3acc3b263180d93ac2794b944d20d0fa51b16b58e406b extends \Twig\Template
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
            <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
                    <li><a href=\"";
            // line 8
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo " 
            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">\t\t
        <div class=\"row\">       
            <div class=\"col-lg-12 col-md-12\">
                ";
        // line 16
        if (($context["error"] ?? null)) {
            echo " 
                    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 17
            echo ($context["error"] ?? null);
            echo " 
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    </div>
                ";
        }
        // line 20
        echo " 
                ";
        // line 21
        if (($context["success"] ?? null)) {
            echo " 
                    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 22
            echo ($context["success"] ?? null);
            echo " 
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    </div>
                ";
        }
        // line 25
        echo " 
            </div>
            <div class=\"col-lg-12 col-md-12\">
                <div class=\"panel panel-default\" id=\"fieldset_form\">\t\t\t
                    <div class=\"panel-heading\" style=\"display: inline-block; width: 100%;\"> 
                        ";
        // line 30
        echo ($context["heading_title"] ?? null);
        echo " <span class=\"badge\">";
        echo ($context["sellers_total"] ?? null);
        echo "</span>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 33
        echo ($context["tab_common"] ?? null);
        echo "
                        <div class=\"filter-table-responsive table-responsive\">
                            <table class=\"table filter\">
                                <thead>
                                    <tr>
                                        <th>
                                            ";
        // line 39
        if ((($context["sort"] ?? null) == "c.firstname")) {
            echo " 
                                                <a href=\"";
            // line 40
            echo ($context["sort_firstname"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_firstname"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 41
            echo " 
                                                <a href=\"";
            // line 42
            echo ($context["sort_firstname"] ?? null);
            echo "\">";
            echo ($context["column_firstname"] ?? null);
            echo "</a>
                                            ";
        }
        // line 43
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 46
        if ((($context["sort"] ?? null) == "c.lastname")) {
            echo " 
                                                <a href=\"";
            // line 47
            echo ($context["sort_lastname"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_lastname"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 48
            echo " 
                                                <a href=\"";
            // line 49
            echo ($context["sort_lastname"] ?? null);
            echo "\">";
            echo ($context["column_lastname"] ?? null);
            echo "</a>
                                            ";
        }
        // line 50
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 53
        if ((($context["sort"] ?? null) == "c.email")) {
            echo " 
                                                <a href=\"";
            // line 54
            echo ($context["sort_email"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 55
            echo " 
                                                <a href=\"";
            // line 56
            echo ($context["sort_email"] ?? null);
            echo "\">";
            echo ($context["column_email"] ?? null);
            echo "</a>
                                            ";
        }
        // line 57
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 60
        if ((($context["sort"] ?? null) == "ksd.title")) {
            echo " 
                                                <a href=\"";
            // line 61
            echo ($context["sort_shop"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_shop"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 62
            echo " 
                                                <a href=\"";
            // line 63
            echo ($context["sort_shop"] ?? null);
            echo "\">";
            echo ($context["column_shop"] ?? null);
            echo "</a>
                                            ";
        }
        // line 64
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 67
        if ((($context["sort"] ?? null) == "ks.state")) {
            echo " 
                                                <a href=\"";
            // line 68
            echo ($context["sort_state"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_state"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 69
            echo " 
                                                <a href=\"";
            // line 70
            echo ($context["sort_state"] ?? null);
            echo "\">";
            echo ($context["column_state"] ?? null);
            echo "</a>
                                            ";
        }
        // line 71
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 74
        if ((($context["sort"] ?? null) == "ct.name")) {
            echo " 
                                                <a href=\"";
            // line 75
            echo ($context["sort_country"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_country"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 76
            echo " 
                                                <a href=\"";
            // line 77
            echo ($context["sort_country"] ?? null);
            echo "\">";
            echo ($context["column_country"] ?? null);
            echo "</a>
                                            ";
        }
        // line 78
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 81
        if ((($context["sort"] ?? null) == "ks.active")) {
            echo " 
                                                <a href=\"";
            // line 82
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 83
            echo " 
                                                <a href=\"";
            // line 84
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                                            ";
        }
        // line 85
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 88
        if ((($context["sort"] ?? null) == "ks.date_added")) {
            echo " 
                                                <a href=\"";
            // line 89
            echo ($context["sort_seller_since"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_seller_since"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 90
            echo " 
                                                <a href=\"";
            // line 91
            echo ($context["sort_seller_since"] ?? null);
            echo "\">";
            echo ($context["column_seller_since"] ?? null);
            echo "</a>
                                            ";
        }
        // line 93
        echo "                                        </th>
                                        <th></th>
                                    </tr>
                                    <tr>  
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"filter_firstname\" value=\"";
        // line 98
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_firstname", [], "array", true, true, false, 98)) {
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["filter_data"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["filter_firstname"] ?? null) : null);
        }
        echo "\"/>
                                        </th>
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"filter_lastname\" value=\"";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_lastname", [], "array", true, true, false, 101)) {
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["filter_data"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["filter_lastname"] ?? null) : null);
        }
        echo "\"/>
                                        </th>
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"filter_email\" value=\"";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_email", [], "array", true, true, false, 104)) {
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["filter_data"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["filter_email"] ?? null) : null);
        }
        echo "\"/>                                    
                                        </th>
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"filter_shop\" value=\"";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_shop", [], "array", true, true, false, 107)) {
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["filter_data"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["filter_shop"] ?? null) : null);
        }
        echo "\"/>                                    
                                        </th>
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"filter_state\" value=\"";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_state", [], "array", true, true, false, 110)) {
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["filter_data"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["filter_state"] ?? null) : null);
        }
        echo "\"/>                                    
                                        </th>
                                        <th>
                                            <select class=\"form-control\" name=\"filter_country\">
                                                <option value=\"\" selected=\"selected\"></option>
                                                ";
        // line 115
        if (((isset($context["countries"]) || array_key_exists("countries", $context)) &&  !twig_test_empty(($context["countries"] ?? null)))) {
            // line 116
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                echo " 
                                                        ";
                // line 117
                if ((twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_country", [], "array", true, true, false, 117) && ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["filter_data"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["filter_country"] ?? null) : null) == (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["country"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["country_id"] ?? null) : null)))) {
                    // line 118
                    echo "                                                            ";
                    echo (((("<option value=" . (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["country"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["country_id"] ?? null) : null)) . " selected>") . (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["country"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["name"] ?? null) : null)) . "</option>");
                    echo "
                                                        ";
                } else {
                    // line 119
                    echo " 
                                                            ";
                    // line 120
                    echo (((("<option value=" . (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["country"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["country_id"] ?? null) : null)) . ">") . (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["country"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["name"] ?? null) : null)) . "</option>");
                    echo "
                                                        ";
                }
                // line 122
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                                                ";
        }
        // line 124
        echo "
                                            </select>
                                        </th>
                                        <th>
                                            <select class=\"form-control\" name=\"filter_status\">
                                                <option value=\"\" selected=\"selected\"></option>
                                                <option value=\"1\" ";
        // line 130
        if ((twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_status", [], "array", true, true, false, 130) && ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["filter_data"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["filter_status"] ?? null) : null) == "1"))) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_active"] ?? null);
        echo "</option>
                                                <option value=\"0\" ";
        // line 131
        if ((twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_status", [], "array", true, true, false, 131) && ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["filter_data"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["filter_status"] ?? null) : null) == "0"))) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_inactive"] ?? null);
        echo "</option>
                                            </select> 
                                        </th>
                                        <th style=\"width: 155px\">
                                            <div class=\"input-group date\" style=\"margin-bottom:10px;\">
                                                <input type=\"text\" name=\"filter_from_date\" value=\"";
        // line 136
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_from_date", [], "array", true, true, false, 136)) {
            echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["filter_data"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["filter_from_date"] ?? null) : null);
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
        // line 142
        if (twig_get_attribute($this->env, $this->source, ($context["filter_data"] ?? null), "filter_to_date", [], "array", true, true, false, 142)) {
            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["filter_data"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["filter_to_date"] ?? null) : null);
        }
        echo "\" placeholder=\"";
        echo ($context["text_to_date"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-to-date\" class=\"datepicker hasDatepicker form-control\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                                </span>
                                            </div>
                                        </th>
                                        <th style=\"width: 80px;\" class=\"text-right\">
                                            <button type=\"button\" id=\"button-reset\" name=\"submitFilter\" class=\"btn btn-warning\" style=\"margin-bottom: 10px;\" onclick=\"window.location.href = 'index.php?route=kbmp_marketplace/sellers_list&user_token=";
        // line 149
        echo ($context["token"] ?? null);
        echo "'\">
                                                <i class=\"fa fa-refresh\"></i> ";
        // line 150
        echo ($context["text_reset"] ?? null);
        echo " 
                                            </button>
                                            <button type=\"submit\" id=\"button-filter\" name=\"submitFilter\" class=\"btn btn-primary\">
                                                <i class=\"fa fa-search\"></i> ";
        // line 153
        echo ($context["text_filter"] ?? null);
        echo " 
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 159
        if (((isset($context["sellers"]) || array_key_exists("sellers", $context)) &&  !twig_test_empty(($context["sellers"] ?? null)))) {
            // line 160
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sellers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["seller"]) {
                echo " 

                                            <tr>
                                                <td>";
                // line 163
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["seller"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["firstname"] ?? null) : null);
                echo "</td>
                                                <td>";
                // line 164
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["seller"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["lastname"] ?? null) : null);
                echo "</td>
                                                <td>";
                // line 165
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["seller"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["email"] ?? null) : null);
                echo "</td>
                                                <td>";
                // line 166
                echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["seller"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["shop"] ?? null) : null);
                echo "</td>
                                                <td>";
                // line 167
                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["seller"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["state"] ?? null) : null);
                echo "</td>
                                                <td>";
                // line 168
                echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["seller"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["country"] ?? null) : null);
                echo "</td>
                                                <td style=\"text-align: center;\">
                                                    ";
                // line 170
                if ((twig_get_attribute($this->env, $this->source, $context["seller"], "status", [], "array", true, true, false, 170) && ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["seller"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["status"] ?? null) : null) == 1))) {
                    // line 171
                    echo "                                                        <i class=\"fa fa-check text-success\" title=\"";
                    echo ($context["text_active"] ?? null);
                    echo "\"></i> 
                                                    ";
                } else {
                    // line 172
                    echo " 
                                                        <i class=\"fa fa-ban text-danger\" title=\"";
                    // line 173
                    echo ($context["text_inactive"] ?? null);
                    echo "\"></i> 
                                                    ";
                }
                // line 175
                echo "                                                </td>
                                                <td>";
                // line 176
                echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["seller"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["date_added"] ?? null) : null);
                echo "</td>
                                                <td class=\"text-right\" style=\"width: 145px;\">
                                                    ";
                // line 178
                if ((twig_get_attribute($this->env, $this->source, $context["seller"], "status", [], "array", true, true, false, 178) && ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["seller"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["status"] ?? null) : null) == 1))) {
                    // line 179
                    echo "                                                        <a href=\"";
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["seller"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["disable"] ?? null) : null);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["text_inactivate"] ?? null);
                    echo "\" data-customer-id=\"";
                    echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["seller"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["customer_id"] ?? null) : null);
                    echo "\" onclick=\"return window.confirm('";
                    echo ($context["text_disable_confirm_message"] ?? null);
                    echo "');\" class=\"btn btn-danger\"><i class=\"fa fa-ban\"></i></a>
                                                    ";
                } else {
                    // line 181
                    echo "                                                        <a href=\"";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["seller"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["activate"] ?? null) : null);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["text_activate"] ?? null);
                    echo "\" data-customer-id=\"";
                    echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["seller"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["customer_id"] ?? null) : null);
                    echo "\" onclick=\"return window.confirm('";
                    echo ($context["text_enable_confirm_message"] ?? null);
                    echo "');\" class=\"btn btn-warning\"><i class=\"fa fa-step-forward\"></i></a>
                                                    ";
                }
                // line 183
                echo "                                                    <a href=\"javascript://\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_seller_info"] ?? null);
                echo "\" data-customer-id=\"";
                echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["seller"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["customer_id"] ?? null) : null);
                echo "\" class=\"btn btn-primary sellerInfo\"><i class=\"fa fa-eye\"></i></a>
                                                    <a href=\"";
                // line 184
                echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["seller"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "                                    ";
        } else {
            echo " 
                                        <tr>
                                            <td colspan=\"9\">";
            // line 190
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 193
        echo "
                                </tbody>
                            </table>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 198
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 199
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
        // line 216
        echo ($context["text_seller_info"] ?? null);
        echo "</h5>
            </div>
            <div class=\"modal-body\">
                
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 222
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
        // line 240
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
        // line 261
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
        // line 320
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
        return array (  764 => 320,  702 => 261,  678 => 240,  657 => 222,  648 => 216,  628 => 199,  624 => 198,  617 => 193,  611 => 190,  605 => 188,  593 => 184,  586 => 183,  574 => 181,  562 => 179,  560 => 178,  555 => 176,  552 => 175,  547 => 173,  544 => 172,  538 => 171,  536 => 170,  531 => 168,  527 => 167,  523 => 166,  519 => 165,  515 => 164,  511 => 163,  502 => 160,  500 => 159,  491 => 153,  485 => 150,  481 => 149,  467 => 142,  454 => 136,  442 => 131,  434 => 130,  426 => 124,  423 => 123,  417 => 122,  412 => 120,  409 => 119,  403 => 118,  401 => 117,  394 => 116,  392 => 115,  382 => 110,  374 => 107,  366 => 104,  358 => 101,  350 => 98,  343 => 93,  336 => 91,  333 => 90,  324 => 89,  320 => 88,  315 => 85,  308 => 84,  305 => 83,  296 => 82,  292 => 81,  287 => 78,  280 => 77,  277 => 76,  268 => 75,  264 => 74,  259 => 71,  252 => 70,  249 => 69,  240 => 68,  236 => 67,  231 => 64,  224 => 63,  221 => 62,  212 => 61,  208 => 60,  203 => 57,  196 => 56,  193 => 55,  184 => 54,  180 => 53,  175 => 50,  168 => 49,  165 => 48,  156 => 47,  152 => 46,  147 => 43,  140 => 42,  137 => 41,  128 => 40,  124 => 39,  115 => 33,  107 => 30,  100 => 25,  93 => 22,  89 => 21,  86 => 20,  79 => 17,  75 => 16,  66 => 9,  56 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }} 
<div id=\"content\" class=\"bootstrap\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">          
            <h1>{{ heading_title }}</h1>
            <ul class=\"breadcrumb\">
                {% for breadcrumb in breadcrumbs %} 
                    <li><a href=\"{{ breadcrumb['href'] }}\">{{ breadcrumb['text'] }}</a></li>
                    {% endfor %} 
            </ul>
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
                        <div class=\"filter-table-responsive table-responsive\">
                            <table class=\"table filter\">
                                <thead>
                                    <tr>
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
                                            {% if (sort == 'ks.state') %} 
                                                <a href=\"{{ sort_state }}\" class=\"{{ (order) }}\">{{ column_state }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_state }}\">{{ column_state }}</a>
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
                                            {% if (sort == 'ks.date_added') %} 
                                                <a href=\"{{ sort_seller_since }}\" class=\"{{ (order) }}\">{{ column_seller_since }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_seller_since }}\">{{ column_seller_since }}</a>
                                            {% endif %}
                                        </th>
                                        <th></th>
                                    </tr>
                                    <tr>  
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
                                            <input type=\"text\" class=\"form-control\" name=\"filter_state\" value=\"{% if (filter_data['filter_state'] is defined) %}{{ filter_data['filter_state'] }}{% endif %}\"/>                                    
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
                                        <th style=\"width: 80px;\" class=\"text-right\">
                                            <button type=\"button\" id=\"button-reset\" name=\"submitFilter\" class=\"btn btn-warning\" style=\"margin-bottom: 10px;\" onclick=\"window.location.href = 'index.php?route=kbmp_marketplace/sellers_list&user_token={{ token }}'\">
                                                <i class=\"fa fa-refresh\"></i> {{ text_reset }} 
                                            </button>
                                            <button type=\"submit\" id=\"button-filter\" name=\"submitFilter\" class=\"btn btn-primary\">
                                                <i class=\"fa fa-search\"></i> {{ text_filter }} 
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% if (sellers is defined and sellers is not empty) %}
                                        {% for seller in sellers %} 

                                            <tr>
                                                <td>{{ seller['firstname'] }}</td>
                                                <td>{{ seller['lastname'] }}</td>
                                                <td>{{ seller['email'] }}</td>
                                                <td>{{ seller['shop'] }}</td>
                                                <td>{{ seller['state'] }}</td>
                                                <td>{{ seller['country'] }}</td>
                                                <td style=\"text-align: center;\">
                                                    {% if (seller['status'] is defined and seller['status'] == 1) %}
                                                        <i class=\"fa fa-check text-success\" title=\"{{ text_active }}\"></i> 
                                                    {% else %} 
                                                        <i class=\"fa fa-ban text-danger\" title=\"{{ text_inactive }}\"></i> 
                                                    {% endif %}
                                                </td>
                                                <td>{{ seller['date_added'] }}</td>
                                                <td class=\"text-right\" style=\"width: 145px;\">
                                                    {% if (seller['status'] is defined and seller['status'] == 1) %}
                                                        <a href=\"{{ seller['disable'] }}\" data-toggle=\"tooltip\" title=\"{{ text_inactivate }}\" data-customer-id=\"{{seller['customer_id']}}\" onclick=\"return window.confirm('{{text_disable_confirm_message}}');\" class=\"btn btn-danger\"><i class=\"fa fa-ban\"></i></a>
                                                    {% else %}
                                                        <a href=\"{{ seller['activate'] }}\" data-toggle=\"tooltip\" title=\"{{ text_activate }}\" data-customer-id=\"{{seller['customer_id']}}\" onclick=\"return window.confirm('{{text_enable_confirm_message}}');\" class=\"btn btn-warning\"><i class=\"fa fa-step-forward\"></i></a>
                                                    {% endif %}
                                                    <a href=\"javascript://\" data-toggle=\"tooltip\" title=\"{{ text_seller_info }}\" data-customer-id=\"{{seller['customer_id']}}\" class=\"btn btn-primary sellerInfo\"><i class=\"fa fa-eye\"></i></a>
                                                    <a href=\"{{ seller['edit'] }}\" data-toggle=\"tooltip\" title=\"{{ text_edit }}\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
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
