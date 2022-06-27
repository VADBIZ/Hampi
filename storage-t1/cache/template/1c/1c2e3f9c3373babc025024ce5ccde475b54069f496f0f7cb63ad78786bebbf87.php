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

/* kbmp_marketplace/seller_profile_custom_fields_add.twig */
class __TwigTemplate_f7a32cc71e0aed8c7d0d9af5e074f1e0f1946d92f1dfa1b032e4ff8b88aed2c7 extends \Twig\Template
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
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" id=\"add_custom_fields\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
            </div>
            <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
                    <li><a href=\"";
            // line 12
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo " 
            </ul>
            ";
        // line 15
        if ((isset($context["text_already_exist"]) || array_key_exists("text_already_exist", $context))) {
            echo " 
                <div id=\"message_warning\">
                    <div class=\"alert alert-warning message_warning\">
                        <i class=\"fa fa-check-circle\"></i> ";
            // line 18
            echo ($context["text_already_exist"] ?? null);
            echo " 
                    </div>
                </div> 
            ";
        }
        // line 21
        echo " 
            <div id=\"error_message\"></div>
        </div>
    </div>
    ";
        // line 25
        if ( !twig_test_empty(($context["submit_status"] ?? null))) {
            // line 26
            echo "
        <div class=\"alert alert-success\">
            <i class=\"fa fa-check-circle\"></i> 
            ";
            // line 29
            echo ($context["submit_status"] ?? null);
            echo "

            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        </div>
    ";
        }
        // line 34
        echo "
    ";
        // line 35
        if ( !twig_test_empty(($context["error_status"] ?? null))) {
            // line 36
            echo "
        <div class=\"alert alert-warning\">
            <i class=\"fa fa-check-circle\"></i> 
            ";
            // line 39
            echo ($context["error_status"] ?? null);
            echo "

            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        </div>
    ";
        }
        // line 44
        echo "
    <div class=\"container-fluid\">        
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 48
        echo ($context["heading_add_custom_fields"] ?? null);
        echo "</h3>
            </div>   
            <div class=\"panel-body\">
                ";
        // line 51
        echo ($context["tab_common"] ?? null);
        echo "

                <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" id=\"form_custom_field\" class=\"form-horizontal\">

                    <div class=\"form-group required\">
                        <label class=\"col-sm-3 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 56
        echo ($context["select_field"] ?? null);
        echo "\">";
        echo ($context["select_field"] ?? null);
        echo "</span></label>
                        <div class=\"col-sm-5\">
                            <select name=\"field_type\" id=\"field_type\" class=\"form-control\">
                                <option value=\"\">";
        // line 59
        echo ($context["select_type"] ?? null);
        echo "</option> 
                                <option value=\"text\">";
        // line 60
        echo ($context["text"] ?? null);
        echo "</option> 
                                <option value=\"select\">";
        // line 61
        echo ($context["select"] ?? null);
        echo "</option> 
                                <option value=\"radio\">";
        // line 62
        echo ($context["radio"] ?? null);
        echo "</option> 
                                <option value=\"checkbox\">";
        // line 63
        echo ($context["checkbox"] ?? null);
        echo "</option> 
                                <option value=\"textarea\">";
        // line 64
        echo ($context["textarea"] ?? null);
        echo "</option> 
                                <option value=\"file\">";
        // line 65
        echo ($context["file_type"] ?? null);
        echo "</option> 
                                <option value=\"date\">";
        // line 66
        echo ($context["date"] ?? null);
        echo "</option> 
                            </select>                           
                        </div>
                    </div>                    

                    <div class=\"custom_field_form\">
                        ";
        // line 72
        if ( !twig_test_empty(($context["languages"] ?? null))) {
            // line 73
            echo "                            ";
            $context["display"] = "style='display:block'";
            // line 74
            echo "                            <div class=\"form-group\">
                                ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["lang"]) {
                // line 76
                echo "                                    ";
                $context["id"] = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["lang"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["language_id"] ?? null) : null);
                // line 77
                echo "                                    ";
                $context["name"] = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["lang"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["name"] ?? null) : null);
                // line 78
                echo "                                    ";
                $context["label_value"] = "";
                // line 79
                echo "                                    ";
                if ( !twig_test_empty(($context["custom_fields_lang_data"] ?? null))) {
                    // line 80
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["custom_fields_lang_data"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["lang_data"]) {
                        // line 81
                        echo "                                            ";
                        if ((((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["lang_data"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["id_lang"] ?? null) : null) == ($context["id"] ?? null)) && (($context["store_id"] ?? null) == (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["lang_data"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["id_shop"] ?? null) : null)))) {
                            // line 82
                            echo "                                                ";
                            $context["label_value"] = (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["lang_data"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["label"] ?? null) : null);
                            // line 83
                            echo "                                            ";
                        }
                        // line 84
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang_data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    echo "                                    ";
                }
                // line 86
                echo "                                    <div class=\"form-group required label_field language language_";
                echo ($context["id"] ?? null);
                echo "\" ";
                echo ($context["display"] ?? null);
                echo " id=\"label_";
                echo ($context["id"] ?? null);
                echo "\">
                                        <label class=\"control-label col-lg-3\">
                                            <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
                // line 88
                echo ($context["field_label_hint"] ?? null);
                echo "\">
                                                ";
                // line 89
                echo ($context["field_label"] ?? null);
                echo "
                                            </span>
                                        </label>
                                        <div class=\"col-lg-5\">\t
                                            <input type=\"text\" name=\"label_";
                // line 93
                echo ($context["id"] ?? null);
                echo "\" id=\"label_";
                echo ($context["id"] ?? null);
                echo "\" value=\"";
                echo ($context["label_value"] ?? null);
                echo "\" class=\"fixed-width-small form-control label_field_mandatory\">\t\t\t
                                        </div>
                                        <div class=\"col-lg-2\">\t
                                            <div class=\"dropdown\">
                                                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <span class=\"caret\"></span> ";
                // line 98
                echo ($context["name"] ?? null);
                echo "
                                                </button>
                                                <ul class=\"dropdown-menu\">
                                                    ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["k"] => $context["lang"]) {
                    // line 102
                    echo "                                                        ";
                    $context["id_2"] = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["lang"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["language_id"] ?? null) : null);
                    // line 103
                    echo "                                                        ";
                    $context["name"] = (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["lang"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["name"] ?? null) : null);
                    // line 104
                    echo "                                                        <li data-tag=\"label\" data-field=\"label_field\" data-id=\"";
                    echo ($context["id_2"] ?? null);
                    echo "\"><a class=\"drop_down_link\" href=\"#\">";
                    echo ($context["name"] ?? null);
                    echo "</a></li>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    ";
                // line 110
                $context["display"] = "style='display:none'";
                // line 111
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                                <span class=\"kb_error_message validation_error label_validation\"></span>
                            </div>
                        ";
        }
        // line 115
        echo "

                        ";
        // line 118
        echo "                        ";
        if ( !twig_test_empty(($context["languages"] ?? null))) {
            // line 119
            echo "                            ";
            $context["display"] = "style='display:block'";
            // line 120
            echo "                            <div class=\"form-group\">
                                ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["lang"]) {
                // line 122
                echo "                                    ";
                $context["id"] = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["lang"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["language_id"] ?? null) : null);
                // line 123
                echo "                                    ";
                $context["name"] = (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["lang"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["name"] ?? null) : null);
                // line 124
                echo "                                    ";
                $context["description_value"] = "";
                // line 125
                echo "                                    ";
                if ( !twig_test_empty(($context["custom_fields_lang_data"] ?? null))) {
                    // line 126
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["custom_fields_lang_data"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["lang_data"]) {
                        // line 127
                        echo "                                            ";
                        if ((((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["lang_data"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["id_lang"] ?? null) : null) == ($context["id"] ?? null)) && (($context["store_id"] ?? null) == (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["lang_data"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["id_shop"] ?? null) : null)))) {
                            // line 128
                            echo "                                                ";
                            $context["description_value"] = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["lang_data"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["description"] ?? null) : null);
                            // line 129
                            echo "
                                            ";
                        }
                        // line 131
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang_data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 132
                    echo "                                    ";
                }
                // line 133
                echo "                                    <div class=\"form-group description_field language language_";
                echo ($context["id"] ?? null);
                echo "\" ";
                echo ($context["display"] ?? null);
                echo " id=\"description_";
                echo ($context["id"] ?? null);
                echo "\">
                                        <label class=\"control-label col-lg-3\">
                                            <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
                // line 135
                echo ($context["field_description"] ?? null);
                echo "\">
                                                ";
                // line 136
                echo ($context["field_description"] ?? null);
                echo "
                                            </span>
                                        </label>
                                        <div class=\"col-lg-5\">\t
                                            <input type=\"text\" name=\"description_";
                // line 140
                echo ($context["id"] ?? null);
                echo "\" id=\"description_";
                echo ($context["id"] ?? null);
                echo "\" value=\"";
                echo ($context["description_value"] ?? null);
                echo "\" class=\"fixed-width-small form-control\">\t
                                            <span class=\"kb_error_message\"></span>\t\t\t
                                        </div>

                                        <div class=\"col-lg-2\">\t
                                            <div class=\"dropdown\">
                                                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span class=\"caret\"></span> ";
                // line 146
                echo ($context["name"] ?? null);
                echo "</button>
                                                <ul class=\"dropdown-menu\">
                                                    ";
                // line 148
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["k"] => $context["lang"]) {
                    // line 149
                    echo "                                                        ";
                    $context["id_2"] = (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["lang"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["language_id"] ?? null) : null);
                    // line 150
                    echo "                                                        ";
                    $context["name"] = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["lang"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["name"] ?? null) : null);
                    // line 151
                    echo "                                                        <li data-tag=\"description\" data-field=\"description_field\" data-id=\"";
                    echo ($context["id_2"] ?? null);
                    echo "\"><a>";
                    echo ($context["name"] ?? null);
                    echo "</a></li>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    ";
                // line 157
                $context["display"] = "style='display:none'";
                // line 158
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "                            </div>
                        ";
        }
        // line 161
        echo "
                        ";
        // line 163
        echo "                        ";
        if ( !twig_test_empty(($context["languages"] ?? null))) {
            // line 164
            echo "                            ";
            $context["display"] = "style='display:block'";
            // line 165
            echo "                            <div class=\"form-group not_common\">
                                ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["lang"]) {
                // line 167
                echo "                                    ";
                $context["id"] = (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["lang"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["language_id"] ?? null) : null);
                // line 168
                echo "                                    ";
                $context["name"] = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["lang"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["name"] ?? null) : null);
                // line 169
                echo "                                    ";
                $context["placeholder_value"] = "";
                // line 170
                echo "                                    ";
                if ( !twig_test_empty(($context["custom_fields_lang_data"] ?? null))) {
                    // line 171
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["custom_fields_lang_data"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["lang_data"]) {
                        // line 172
                        echo "                                            ";
                        if ((((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["lang_data"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["id_lang"] ?? null) : null) == ($context["id"] ?? null)) && (($context["store_id"] ?? null) == (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["lang_data"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["id_shop"] ?? null) : null)))) {
                            // line 173
                            echo "                                                ";
                            $context["placeholder_value"] = (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["lang_data"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["placeholder"] ?? null) : null);
                            // line 174
                            echo "                                            ";
                        }
                        // line 175
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang_data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo "                                    ";
                }
                // line 177
                echo "                                    <div class=\"form-group placeholder_field language language_";
                echo ($context["id"] ?? null);
                echo "\" ";
                echo ($context["display"] ?? null);
                echo " id=\"placeholder_";
                echo ($context["id"] ?? null);
                echo "\" style=\"display:none;\">
                                        <label class=\"control-label col-lg-3\">
                                            <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
                // line 179
                echo ($context["text_placeholder"] ?? null);
                echo "\">
                                                ";
                // line 180
                echo ($context["text_placeholder"] ?? null);
                echo "
                                            </span>
                                        </label>
                                        <div class=\"col-lg-5\">\t
                                            <input type=\"text\" name=\"placeholder_";
                // line 184
                echo ($context["id"] ?? null);
                echo "\" id=\"placeholder_";
                echo ($context["id"] ?? null);
                echo "\" value=\"";
                echo ($context["placeholder_value"] ?? null);
                echo "\" class=\"fixed-width-small form-control\">
                                        </div>

                                        <div class=\"col-lg-2\">\t
                                            <div class=\"dropdown\">
                                                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span class=\"caret\"></span> ";
                // line 189
                echo ($context["name"] ?? null);
                echo "</button>
                                                <ul class=\"dropdown-menu\">
                                                    ";
                // line 191
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["k"] => $context["lang"]) {
                    // line 192
                    echo "                                                        ";
                    $context["id_2"] = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["lang"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["language_id"] ?? null) : null);
                    // line 193
                    echo "                                                        ";
                    $context["name"] = (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["lang"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["name"] ?? null) : null);
                    // line 194
                    echo "                                                        <li data-tag=\"placeholder\" data-field=\"placeholder_field\" data-id=\"";
                    echo ($context["id_2"] ?? null);
                    echo "\"><a>";
                    echo ($context["name"] ?? null);
                    echo "</a></li>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 196
                echo "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    ";
                // line 200
                $context["display"] = "style='display:none'";
                // line 201
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "                            </div>
                        ";
        }
        // line 204
        echo "
                        ";
        // line 206
        echo "                        ";
        if ( !twig_test_empty(($context["languages"] ?? null))) {
            // line 207
            echo "                            ";
            $context["display"] = "style='display:block'";
            // line 208
            echo "                            <div class=\"form-group not_common\">
                                ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["lang"]) {
                // line 210
                echo "                                    ";
                $context["id"] = (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["lang"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["language_id"] ?? null) : null);
                // line 211
                echo "                                    ";
                $context["name"] = (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["lang"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["name"] ?? null) : null);
                // line 212
                echo "                                    ";
                $context["error_msg_value"] = "";
                // line 213
                echo "                                    ";
                if ( !twig_test_empty(($context["custom_fields_lang_data"] ?? null))) {
                    // line 214
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["custom_fields_lang_data"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["lang_data"]) {
                        // line 215
                        echo "                                            ";
                        if ((((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["lang_data"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["id_lang"] ?? null) : null) == ($context["id"] ?? null)) && (($context["store_id"] ?? null) == (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["lang_data"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["id_shop"] ?? null) : null)))) {
                            // line 216
                            echo "                                                ";
                            $context["error_msg_value"] = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["lang_data"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["error_msg"] ?? null) : null);
                            // line 217
                            echo "                                            ";
                        }
                        // line 218
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang_data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 219
                    echo "                                    ";
                }
                // line 220
                echo "                                    <div class=\"form-group error_msg_field language language_";
                echo ($context["id"] ?? null);
                echo "\" ";
                echo ($context["display"] ?? null);
                echo " id=\"error_msg_";
                echo ($context["id"] ?? null);
                echo "\" style=\"display:none;\">
                                        <label class=\"control-label col-lg-3\">
                                            <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
                // line 222
                echo ($context["error_message_hint"] ?? null);
                echo "\">
                                                ";
                // line 223
                echo ($context["error_message"] ?? null);
                echo "
                                            </span>
                                        </label>
                                        <div class=\"col-lg-5\">\t
                                            <input type=\"text\" name=\"error_msg_";
                // line 227
                echo ($context["id"] ?? null);
                echo "\" id=\"error_msg_";
                echo ($context["id"] ?? null);
                echo "\" value=\"";
                echo ($context["error_msg_value"] ?? null);
                echo "\" class=\"fixed-width-small form-control\">
                                            <span class=\"kb_error_message\"></span>\t\t
                                        </div>

                                        <div class=\"col-lg-2\">\t
                                            <div class=\"dropdown\">
                                                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span class=\"caret\"></span> ";
                // line 233
                echo ($context["name"] ?? null);
                echo "</button>
                                                <ul class=\"dropdown-menu\">
                                                    ";
                // line 235
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["k"] => $context["lang"]) {
                    // line 236
                    echo "                                                        ";
                    $context["id_2"] = (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["lang"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["language_id"] ?? null) : null);
                    // line 237
                    echo "                                                        ";
                    $context["name"] = (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["lang"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["name"] ?? null) : null);
                    // line 238
                    echo "                                                        <li data-tag=\"error_msg\" data-field=\"error_msg_field\" data-id=\"";
                    echo ($context["id_2"] ?? null);
                    echo "\"><a>";
                    echo ($context["name"] ?? null);
                    echo "</a></li>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 240
                echo "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    ";
                // line 244
                $context["display"] = "style='display:none'";
                // line 245
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "                            </div>
                        ";
        }
        // line 248
        echo "
                        ";
        // line 250
        echo "                        ";
        if ( !twig_test_empty(($context["languages"] ?? null))) {
            // line 251
            echo "                            ";
            $context["display"] = "style='display:block'";
            // line 252
            echo "                            <div class=\"form-group not_common\">
                                ";
            // line 253
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["lang"]) {
                // line 254
                echo "                                    ";
                $context["id"] = (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["lang"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["language_id"] ?? null) : null);
                // line 255
                echo "                                    ";
                $context["name"] = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["lang"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["name"] ?? null) : null);
                // line 256
                echo "                                    ";
                $context["value"] = "";
                // line 257
                echo "                                    ";
                if ( !twig_test_empty(($context["custom_fields_lang_data"] ?? null))) {
                    // line 258
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["custom_fields_lang_data"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["lang_data"]) {
                        // line 259
                        echo "                                            ";
                        if ((((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["lang_data"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["id_lang"] ?? null) : null) == ($context["id"] ?? null)) && (($context["store_id"] ?? null) == (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["lang_data"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["id_shop"] ?? null) : null)))) {
                            // line 260
                            echo "                                                ";
                            $context["value"] = (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["lang_data"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["value"] ?? null) : null);
                            // line 261
                            echo "                                            ";
                        }
                        // line 262
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang_data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 263
                    echo "                                    ";
                }
                // line 264
                echo "                                    <div class=\"form-group required select_field_option select_option_field language language_";
                echo ($context["id"] ?? null);
                echo "\" ";
                echo ($context["display"] ?? null);
                echo " id=\"select_option_field_";
                echo ($context["id"] ?? null);
                echo "\" style=\"display:none;\">
                                        <label class=\"control-label col-lg-3\">
                                            <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
                // line 266
                echo ($context["select_option"] ?? null);
                echo "\">
                                                ";
                // line 267
                echo ($context["select_option"] ?? null);
                echo "
                                            </span>
                                        </label>
                                        <div class=\"col-lg-5\">\t
                                            <textarea type=\"text\" name=\"value_";
                // line 271
                echo ($context["id"] ?? null);
                echo "\" id=\"value_";
                echo ($context["id"] ?? null);
                echo "\" value=\"\" class=\"fixed-width-small form-control select_option_value\">";
                echo ($context["value"] ?? null);
                echo "</textarea>
                                            <p>\t\t\t
                                                ";
                // line 273
                echo ($context["select_option_msg"] ?? null);
                echo "
                                            </p>\t\t\t
                                        </div>

                                        <div class=\"col-lg-2\">\t
                                            <div class=\"dropdown\">
                                                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span class=\"caret\"></span> ";
                // line 279
                echo ($context["name"] ?? null);
                echo "</button>
                                                <ul class=\"dropdown-menu\">
                                                    ";
                // line 281
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["k"] => $context["lang"]) {
                    // line 282
                    echo "                                                        ";
                    $context["id_2"] = (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["lang"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["language_id"] ?? null) : null);
                    // line 283
                    echo "                                                        ";
                    $context["name"] = (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["lang"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["name"] ?? null) : null);
                    // line 284
                    echo "                                                        <li data-tag=\"select_option_field\" data-field=\"select_option_field\" data-id=\"";
                    echo ($context["id_2"] ?? null);
                    echo "\"><a>";
                    echo ($context["name"] ?? null);
                    echo "</a></li>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 286
                echo "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    ";
                // line 290
                $context["display"] = "style='display:none'";
                // line 291
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 292
            echo "                                <span class=\"kb_error_message validation_error option_select_validation\"></span>
                            </div>
                        ";
        }
        // line 295
        echo "
                        ";
        // line 297
        echo "                        ";
        if ( !twig_test_empty(($context["languages"] ?? null))) {
            // line 298
            echo "                            ";
            $context["display"] = "style='display:block'";
            // line 299
            echo "                            <div class=\"form-group not_common\">
                                ";
            // line 300
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["lang"]) {
                // line 301
                echo "                                    ";
                $context["id"] = (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["lang"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["language_id"] ?? null) : null);
                // line 302
                echo "                                    ";
                $context["name"] = (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["lang"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["name"] ?? null) : null);
                // line 303
                echo "                                    ";
                $context["default_value"] = "";
                // line 304
                echo "                                    ";
                if ( !twig_test_empty(($context["custom_fields_lang_data"] ?? null))) {
                    // line 305
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["custom_fields_lang_data"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["lang_data"]) {
                        // line 306
                        echo "                                            ";
                        if ((((($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["lang_data"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["id_lang"] ?? null) : null) == ($context["id"] ?? null)) && (($context["store_id"] ?? null) == (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["lang_data"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["id_shop"] ?? null) : null)))) {
                            // line 307
                            echo "                                                ";
                            $context["default_value"] = (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["lang_data"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["default_value"] ?? null) : null);
                            // line 308
                            echo "                                            ";
                        }
                        // line 309
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang_data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 310
                    echo "                                    ";
                }
                // line 311
                echo "                                    <div class=\"form-group select_field_option default_option_field language language_";
                echo ($context["id"] ?? null);
                echo "\" ";
                echo ($context["display"] ?? null);
                echo " id=\"default_option_field_";
                echo ($context["id"] ?? null);
                echo "\" style=\"display:none;\">
                                        <label class=\"control-label col-lg-3\">
                                            <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
                // line 313
                echo ($context["select_option_default"] ?? null);
                echo "\">
                                                ";
                // line 314
                echo ($context["select_option_default"] ?? null);
                echo "
                                            </span>
                                        </label>
                                        <div class=\"col-lg-5\">\t
                                            <input type=\"text\" name=\"default_value_";
                // line 318
                echo ($context["id"] ?? null);
                echo "\" id=\"default_value_";
                echo ($context["id"] ?? null);
                echo "\" value=\"";
                echo ($context["default_value"] ?? null);
                echo "\" class=\"fixed-width-small form-control\">
                                            <span class=\"kb_error_message\"></span>
                                            <p>\t\t\t
                                                ";
                // line 321
                echo ($context["select_option_default_msg"] ?? null);
                echo "
                                            </p>\t\t\t
                                        </div>

                                        <div class=\"col-lg-2\">\t
                                            <div class=\"dropdown\">
                                                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span class=\"caret\"></span> ";
                // line 327
                echo ($context["name"] ?? null);
                echo "</button>
                                                <ul class=\"dropdown-menu\">
                                                    ";
                // line 329
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["k"] => $context["lang"]) {
                    // line 330
                    echo "                                                        ";
                    $context["id_2"] = (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["lang"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["language_id"] ?? null) : null);
                    // line 331
                    echo "                                                        ";
                    $context["name"] = (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["lang"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["name"] ?? null) : null);
                    // line 332
                    echo "                                                        <li data-tag=\"default_option_field\" data-field=\"default_option_field\" data-id=\"";
                    echo ($context["id_2"] ?? null);
                    echo "\"><a>";
                    echo ($context["name"] ?? null);
                    echo "</a></li>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 334
                echo "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    ";
                // line 338
                $context["display"] = "style='display:none'";
                // line 339
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 340
            echo "                            </div>
                        ";
        }
        // line 342
        echo "
                        <!-- For the select type multiple start-->
                        <div class=\"form-group not_common mutiple_select\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
        // line 346
        echo ($context["multiselect"] ?? null);
        echo " \">
                                    ";
        // line 347
        echo ($context["multiselect"] ?? null);
        echo "                                       
                                </span>
                            </label>
                            <div class=\"col-lg-5\">
                                <span class=\"switch opencart-switch fixed-width-lg\">
                                    ";
        // line 352
        $context["default_checked"] = "checked";
        // line 353
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "multiselect", [], "array", true, true, false, 353)) {
            // line 354
            echo "                                        ";
            $context["default_checked"] = "";
            // line 355
            echo "                                    ";
        }
        // line 356
        echo "
                                    <input class=\"custom_radio\" type=\"radio\" name=\"multiselect\" id=\"multiselect_true\" value=\"1\" ";
        // line 357
        echo ($context["default_checked"] ?? null);
        echo " ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "multiselect", [], "array", true, true, false, 357) && ((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["custom_fields"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["multiselect"] ?? null) : null) == 1))) ? ("checked") : (""));
        echo ">
                                    <label class=\"custom_radio_label\" for=\"multiselect_true\">Yes</label>
                                    <input class=\"custom_radio\" type=\"radio\" name=\"multiselect\" id=\"multiselect_false\" value=\"0\" ";
        // line 359
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "multiselect", [], "array", true, true, false, 359) && ((($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["custom_fields"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["multiselect"] ?? null) : null) == 0))) ? ("checked") : (""));
        echo ">
                                    <label class=\"custom_radio_label\" for=\"multiselect_false\">No</label>
                                    <a class=\"slide-button btn\"></a>
                                </span>
                            </div>
                        </div>
                        <!-- end-->
                        <!-- For the maximum and minimum length Start-->
                        <div class=\"form-group not_common text_minlength\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
        // line 369
        echo ($context["min_length"] ?? null);
        echo "\">
                                    ";
        // line 370
        echo ($context["min_length"] ?? null);
        echo " 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <input type=\"text\" name=\"min_length\" id=\"min_length\" value=\"";
        // line 374
        echo ((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "min_length", [], "array", true, true, false, 374)) ? ((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["custom_fields"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["min_length"] ?? null) : null)) : (0));
        echo "\" class=\"fixed-width-small form-control\">\t\t
                            </div>
                        </div>
                        <div class=\"form-group not_common text_maxlength not_common\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
        // line 379
        echo ($context["max_length"] ?? null);
        echo "\">
                                    ";
        // line 380
        echo ($context["max_length"] ?? null);
        echo " 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <input type=\"text\" name=\"max_length\" id=\"max_length\" value=\"";
        // line 384
        echo ((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "max_length", [], "array", true, true, false, 384)) ? ((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["custom_fields"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["max_length"] ?? null) : null)) : (255));
        echo "\" class=\"fixed-width-small form-control\">\t\t
                            </div>
                        </div>
                        <!-- For the maximum and minimum length End-->

                        <div class=\"form-group not_common text_area_field\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
        // line 391
        echo ($context["html_id"] ?? null);
        echo "\">
                                    ";
        // line 392
        echo ($context["validation_textarea"] ?? null);
        echo " 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <select name=\"validation\" class=\"fixed-width-small form-control\">
                                    <option value=\"\"></option>
                                    <option value=\"isGenericName\"";
        // line 398
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "validation", [], "array", true, true, false, 398) && ((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["custom_fields"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["validation"] ?? null) : null) == "isGenericName"))) ? ("selected") : (""));
        echo ">";
        echo ($context["isGenericName"] ?? null);
        echo "</option>
                                    <option value=\"isAddress\" ";
        // line 399
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "validation", [], "array", true, true, false, 399) && ((($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["custom_fields"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["validation"] ?? null) : null) == "isAddress"))) ? ("selected") : (""));
        echo ">";
        echo ($context["isAddress"] ?? null);
        echo "</option>
                                    <option value=\"isCityName\" ";
        // line 400
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "validation", [], "array", true, true, false, 400) && ((($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["custom_fields"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["validation"] ?? null) : null) == "isCityName"))) ? ("selected") : (""));
        echo ">";
        echo ($context["isCityName"] ?? null);
        echo "</option>
                                    <option value=\"isMessage\" ";
        // line 401
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "validation", [], "array", true, true, false, 401) && ((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["custom_fields"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["validation"] ?? null) : null) == "isMessage"))) ? ("selected") : (""));
        echo ">";
        echo ($context["isMessage"] ?? null);
        echo "</option>
                                    <option value=\"isPhoneNumber\" ";
        // line 402
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "validation", [], "array", true, true, false, 402) && ((($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["custom_fields"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["validation"] ?? null) : null) == "isPhoneNumber"))) ? ("selected") : (""));
        echo ">";
        echo ($context["isPhoneNumber"] ?? null);
        echo "</option>
                                    <option value=\"isDniLite ";
        // line 403
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "validation", [], "array", true, true, false, 403) && ((($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["custom_fields"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["validation"] ?? null) : null) == "isDniLite"))) ? ("selected") : (""));
        echo "\">";
        echo ($context["isDniLite"] ?? null);
        echo "</option>
                                    <option value=\"isEmail\" ";
        // line 404
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "validation", [], "array", true, true, false, 404) && ((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["custom_fields"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["validation"] ?? null) : null) == "isEmail"))) ? ("selected") : (""));
        echo ">";
        echo ($context["isEmail"] ?? null);
        echo "</option>
                                    <option value=\"isPasswd\" ";
        // line 405
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "validation", [], "array", true, true, false, 405) && ((($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["custom_fields"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["validation"] ?? null) : null) == "isPasswd"))) ? ("selected") : (""));
        echo ">";
        echo ($context["isPasswd"] ?? null);
        echo "</option>\t
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group not_common text_area_field\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
        // line 411
        echo ($context["text_editor_show"] ?? null);
        echo " \">
                                    ";
        // line 412
        echo ($context["text_editor_show"] ?? null);
        echo "                                       
                                </span>
                            </label>
                            <div class=\"col-lg-5\">
                                <span class=\"switch opencart-switch fixed-width-lg\">
                                    ";
        // line 417
        $context["default_checked"] = "checked";
        // line 418
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "show_text_editor", [], "array", true, true, false, 418)) {
            // line 419
            echo "                                        ";
            $context["default_checked"] = "";
            // line 420
            echo "                                    ";
        }
        // line 421
        echo "
                                    <input class=\"custom_radio\" type=\"radio\" name=\"show_text_editor\" id=\"show_text_editor_true\" value=\"1\" ";
        // line 422
        echo ($context["default_checked"] ?? null);
        echo " ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "show_text_editor", [], "array", true, true, false, 422) && ((($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = ($context["custom_fields"] ?? null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["show_text_editor"] ?? null) : null) == 1))) ? ("checked") : (""));
        echo ">
                                    <label class=\"custom_radio_label\" for=\"show_text_editor_true\">Yes</label>
                                    <input class=\"custom_radio\" type=\"radio\" name=\"show_text_editor\" id=\"show_text_editor_false\" value=\"0\" ";
        // line 424
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "show_text_editor", [], "array", true, true, false, 424) && ((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = ($context["custom_fields"] ?? null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["show_text_editor"] ?? null) : null) == 0))) ? ("checked") : (""));
        echo ">
                                    <label class=\"custom_radio_label\" for=\"show_text_editor_false\">No</label>
                                    <a class=\"slide-button btn\"></a>
                                </span>
                            </div>
                        </div>
                        <!--End -->
                        <div class=\"form-group required\" style=\"display: none\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
        // line 433
        echo ($context["html_id"] ?? null);
        echo "\">
                                    ";
        // line 434
        echo ($context["section"] ?? null);
        echo " 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <select class=\"fixed-width-small form-control\" name=\"section\">\t
                                    <option value=\"1\" ";
        // line 439
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "id_section", [], "array", true, true, false, 439) && ((($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = ($context["custom_fields"] ?? null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["id_section"] ?? null) : null) == 1))) ? ("selected") : (""));
        echo ">";
        echo ($context["text_general"] ?? null);
        echo "</option>
                                    <option value=\"2\" ";
        // line 440
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "id_section", [], "array", true, true, false, 440) && ((($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = ($context["custom_fields"] ?? null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["id_section"] ?? null) : null) == 2))) ? ("selected") : (""));
        echo ">";
        echo ($context["text_meta_info"] ?? null);
        echo "</option>
                                    <option value=\"3\" ";
        // line 441
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "id_section", [], "array", true, true, false, 441) && ((($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["custom_fields"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["id_section"] ?? null) : null) == 3))) ? ("selected") : (""));
        echo ">";
        echo ($context["text_policy"] ?? null);
        echo "</option>
                                    <option value=\"4\" ";
        // line 442
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "id_section", [], "array", true, true, false, 442) && ((($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["custom_fields"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["id_section"] ?? null) : null) == 4))) ? ("selected") : (""));
        echo ">";
        echo ($context["text_payout_info"] ?? null);
        echo "</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
        // line 448
        echo ($context["html_id"] ?? null);
        echo "\">
                                    ";
        // line 449
        echo ($context["html_id"] ?? null);
        echo " 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <input type=\"text\" name=\"html_id\" id=\"html_id\" value=\"";
        // line 453
        echo ((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "html_id", [], "array", true, true, false, 453)) ? ((($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = ($context["custom_fields"] ?? null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["html_id"] ?? null) : null)) : (("field_" . ($context["field_name"] ?? null))));
        echo "\" class=\"common_field_mandatory ixed-width-small form-control\">\t
                                <span class=\"kb_error_message\"></span>\t\t\t\t
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
        // line 459
        echo ($context["html_class"] ?? null);
        echo "\">
                                    ";
        // line 460
        echo ($context["html_class"] ?? null);
        echo " 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <input type=\"text\" name=\"html_class\" id=\"html_class\" value=\"";
        // line 464
        echo ((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "html_class", [], "array", true, true, false, 464)) ? ((($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = ($context["custom_fields"] ?? null)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["html_class"] ?? null) : null)) : (("field_" . ($context["field_name"] ?? null))));
        echo "\" class=\"common_field_mandatory fixed-width-small form-control\">
                                <span class=\"kb_error_message\"></span>\t
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
        // line 470
        echo ($context["field_name_data"] ?? null);
        echo "\">
                                    ";
        // line 471
        echo ($context["field_name_data"] ?? null);
        echo " 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <input type=\"text\" name=\"field_name\" id=\"field_name\" value=\"";
        // line 475
        echo ((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "field_name", [], "array", true, true, false, 475)) ? ((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = ($context["custom_fields"] ?? null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["field_name"] ?? null) : null)) : (("field_" . ($context["field_name"] ?? null))));
        echo "\" class=\"common_field_mandatory fixed-width-small form-control\">
                                <span class=\"kb_error_message\"></span>\t
                            </div>
                        </div>
                        <!--For file type start -->
                        <div class=\"form-group required not_common file_type\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
        // line 482
        echo ($context["file_extension"] ?? null);
        echo "\">
                                    ";
        // line 483
        echo ($context["file_extension"] ?? null);
        echo " 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <input type=\"text\" name=\"file_extension\" id=\"file_extension\"  value=\"";
        // line 487
        echo ((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "file_extension", [], "array", true, true, false, 487)) ? ((($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = ($context["custom_fields"] ?? null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["file_extension"] ?? null) : null)) : (""));
        echo "\" class=\"fixed-width-small form-control\">
                                <span class=\"kb_error_message\"></span>
                                <p>
                                    ";
        // line 490
        echo ($context["file_extension_msg"] ?? null);
        echo " 
                                </p>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
        // line 496
        echo ($context["field_position"] ?? null);
        echo "\">
                                    ";
        // line 497
        echo ($context["field_position"] ?? null);
        echo " 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <input type=\"text\" name=\"position\" id=\"position\"  value=\"";
        // line 501
        echo ((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "position", [], "array", true, true, false, 501)) ? ((($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = ($context["custom_fields"] ?? null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["position"] ?? null) : null)) : (""));
        echo "\" class=\"fixed-width-small form-control\">
                                <span class=\"kb_error_message\"></span>
                            </div>
                        </div>
                        <div class=\"form-group not_common file_type\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
        // line 507
        echo ($context["editable_label_hint"] ?? null);
        echo " \">
                                    ";
        // line 508
        echo ($context["editable_label"] ?? null);
        echo "                                       
                                </span>
                            </label>
                            <div class=\"col-lg-5\">
                                <span class=\"switch opencart-switch fixed-width-lg\">
                                    ";
        // line 513
        $context["default_checked"] = "checked";
        // line 514
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "editable", [], "array", true, true, false, 514)) {
            // line 515
            echo "                                        ";
            $context["default_checked"] = "";
            // line 516
            echo "                                    ";
        }
        // line 517
        echo "
                                    <input class=\"custom_radio\" type=\"radio\" name=\"editable\" id=\"editable_on\" value=\"1\" ";
        // line 518
        echo ($context["default_checked"] ?? null);
        echo " ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "editable", [], "array", true, true, false, 518) && ((($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = ($context["custom_fields"] ?? null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["editable"] ?? null) : null) == 1))) ? ("checked") : (""));
        echo " >
                                    <label class=\"custom_radio_label\" for=\"editable_on\">Yes</label>
                                    <input class=\"custom_radio\" type=\"radio\" name=\"editable\" id=\"editable_off\" value=\"0\" ";
        // line 520
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "editable", [], "array", true, true, false, 520) && ((($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = ($context["custom_fields"] ?? null)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["editable"] ?? null) : null) == 0))) ? ("checked") : (""));
        echo ">
                                    <label class=\"custom_radio_label\" for=\"editable_off\">No</label>
                                    <a class=\"slide-button btn\"></a>
                                </span>
                            </div>
                        </div>
                        <!--End -->
                        <div class=\"form-group\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
        // line 529
        echo ($context["required_field_hint"] ?? null);
        echo " \">
                                    ";
        // line 530
        echo ($context["required_field"] ?? null);
        echo "                                       
                                </span>
                            </label>
                            <div class=\"col-lg-5\">
                                <span class=\"switch opencart-switch fixed-width-lg\">
                                    ";
        // line 535
        $context["default_checked"] = "checked";
        // line 536
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "required", [], "array", true, true, false, 536)) {
            // line 537
            echo "                                        ";
            $context["default_checked"] = "";
            // line 538
            echo "                                    ";
        }
        // line 539
        echo "
                                    <input class=\"custom_radio\" type=\"radio\" name=\"required\" id=\"required_true\" value=\"1\" ";
        // line 540
        echo ($context["default_checked"] ?? null);
        echo " ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "required", [], "array", true, true, false, 540) && ((($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = ($context["custom_fields"] ?? null)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["required"] ?? null) : null) == 1))) ? ("checked") : (""));
        echo " >
                                    <label class=\"custom_radio_label\" for=\"required_true\">Yes</label>
                                    <input class=\"custom_radio\" type=\"radio\" name=\"required\" id=\"required_false\" value=\"0\"  ";
        // line 542
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "required", [], "array", true, true, false, 542) && ((($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = ($context["custom_fields"] ?? null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["required"] ?? null) : null) == 0))) ? ("checked") : (""));
        echo ">
                                    <label class=\"custom_radio_label\" for=\"required_false\">No</label>
                                    <a class=\"slide-button btn\"></a>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
        // line 550
        echo ($context["seller_registration"] ?? null);
        echo "\">
                                    ";
        // line 551
        echo ($context["seller_registration"] ?? null);
        echo "                                       
                                </span>
                            </label>
                            <div class=\"col-lg-5\">
                                <span class=\"switch opencart-switch fixed-width-lg\">
                                    ";
        // line 556
        $context["default_checked"] = "checked";
        // line 557
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "show_registration_form", [], "array", true, true, false, 557)) {
            // line 558
            echo "                                        ";
            $context["default_checked"] = "";
            // line 559
            echo "                                    ";
        }
        // line 560
        echo "
                                    <input class=\"custom_radio\" type=\"radio\" name=\"show_registration_form\" id=\"seller_registration_on\" value=\"1\" ";
        // line 561
        echo ($context["default_checked"] ?? null);
        echo " ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "show_registration_form", [], "array", true, true, false, 561) && ((($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = ($context["custom_fields"] ?? null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["show_registration_form"] ?? null) : null) == 1))) ? ("checked") : (""));
        echo ">
                                    <label class=\"custom_radio_label\" for=\"seller_registration_on\">Yes</label>
                                    <input class=\"custom_radio\" type=\"radio\" name=\"show_registration_form\" id=\"seller_registration_off\" value=\"0\" ";
        // line 563
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "show_registration_form", [], "array", true, true, false, 563) && ((($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = ($context["custom_fields"] ?? null)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["show_registration_form"] ?? null) : null) == 0))) ? ("checked") : (""));
        echo ">
                                    <label class=\"custom_radio_label\" for=\"seller_registration_off\">No</label>
                                    <a class=\"slide-button btn\"></a>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
        // line 571
        echo ($context["textseller_profile_page_hint"] ?? null);
        echo "\">
                                    ";
        // line 572
        echo ($context["textseller_profile_page"] ?? null);
        echo "                                         
                                </span>
                            </label>
                            <div class=\"col-lg-5\">
                                <span class=\"switch opencart-switch fixed-width-lg\">
                                    ";
        // line 577
        $context["default_checked"] = "checked";
        // line 578
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "show_seller_profile", [], "array", true, true, false, 578)) {
            // line 579
            echo "                                        ";
            $context["default_checked"] = "";
            // line 580
            echo "                                    ";
        }
        // line 581
        echo "
                                    <input class=\"custom_radio\" type=\"radio\" name=\"show_seller_profile\" id=\"profile_on\" value=\"1\" ";
        // line 582
        echo ($context["default_checked"] ?? null);
        echo " ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "show_seller_profile", [], "array", true, true, false, 582) && ((($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = ($context["custom_fields"] ?? null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["show_seller_profile"] ?? null) : null) == 1))) ? ("checked") : (""));
        echo ">
                                    <label class=\"custom_radio_label\" for=\"profile_on\">Yes</label>
                                    <input class=\"custom_radio\" type=\"radio\" name=\"show_seller_profile\" id=\"profile_off\" value=\"0\" ";
        // line 584
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "show_seller_profile", [], "array", true, true, false, 584) && ((($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = ($context["custom_fields"] ?? null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["show_seller_profile"] ?? null) : null) == 0))) ? ("checked") : (""));
        echo ">
                                    <label class=\"custom_radio_label\" for=\"profile_off\">No</label>
                                    <a class=\"slide-button btn\"></a>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"";
        // line 592
        echo ($context["field_status_hint"] ?? null);
        echo "\">
                                    ";
        // line 593
        echo ($context["field_status"] ?? null);
        echo "                                       
                                </span>
                            </label>
                            <div class=\"col-lg-5\">
                                <span class=\"switch opencart-switch fixed-width-lg\">
                                    ";
        // line 598
        $context["default_checked"] = "checked";
        // line 599
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "active", [], "array", true, true, false, 599)) {
            // line 600
            echo "                                        ";
            $context["default_checked"] = "";
            // line 601
            echo "                                    ";
        }
        // line 602
        echo "
                                    <input class=\"custom_radio\" type=\"radio\" name=\"active\" id=\"field_active_on\" value=\"1\" ";
        // line 603
        echo ($context["default_checked"] ?? null);
        echo " ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "active", [], "array", true, true, false, 603) && ((($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = ($context["custom_fields"] ?? null)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["active"] ?? null) : null) == 1))) ? ("checked") : (""));
        echo ">
                                    <label class=\"custom_radio_label\" for=\"field_active_on\">Yes</label>
                                    <input class=\"custom_radio\" type=\"radio\" name=\"active\" id=\"field_active_off\" value=\"0\" ";
        // line 605
        echo (((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "active", [], "array", true, true, false, 605) && ((($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = ($context["custom_fields"] ?? null)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["active"] ?? null) : null) == 0))) ? ("checked") : (""));
        echo ">
                                    <label class=\"custom_radio_label\" for=\"field_active_off\">No</label>
                                    <a class=\"slide-button btn\"></a>
                                </span>
                            </div>
                        </div>
                    </div>   
                    <input type=\"hidden\" name=\"edit_field_id\" id=\"edit_field_id\" value=\"";
        // line 612
        echo ((twig_get_attribute($this->env, $this->source, ($context["custom_fields"] ?? null), "id_field", [], "array", true, true, false, 612)) ? ((($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = ($context["custom_fields"] ?? null)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["id_field"] ?? null) : null)) : (0));
        echo "\">
                    <input type=\"hidden\" name=\"select_type_edit\" id=\"select_type_edit\" value=\"";
        // line 613
        echo ($context["select_type_edit"] ?? null);
        echo "\">
                </form>
            </div>
        </div>
    </div>
</div>
<script>

//velvovalidation error languages
    velovalidation.setErrorLanguage({
        empty_fname: '";
        // line 623
        echo ($context["empty_fname"] ?? null);
        echo "',
        maxchar_fname: '";
        // line 624
        echo ($context["maxchar_fname"] ?? null);
        echo "',
        minchar_fname: '";
        // line 625
        echo ($context["minchar_fname"] ?? null);
        echo "',
        empty_mname: '";
        // line 626
        echo ($context["empty_mname"] ?? null);
        echo "',
        maxchar_mname: '";
        // line 627
        echo ($context["maxchar_mname"] ?? null);
        echo "',
        minchar_mname: '";
        // line 628
        echo ($context["minchar_mname"] ?? null);
        echo "',
        only_alphabet: '";
        // line 629
        echo ($context["only_alphabet"] ?? null);
        echo "',
        empty_lname: '";
        // line 630
        echo ($context["empty_lname"] ?? null);
        echo "',
        maxchar_lname: '";
        // line 631
        echo ($context["maxchar_lname"] ?? null);
        echo "',
        minchar_lname: '";
        // line 632
        echo ($context["minchar_lname"] ?? null);
        echo "',
        alphanumeric: '";
        // line 633
        echo ($context["alphanumeric"] ?? null);
        echo "',
        empty_pass: '";
        // line 634
        echo ($context["empty_pass"] ?? null);
        echo "',
        maxchar_pass: '";
        // line 635
        echo ($context["maxchar_pass"] ?? null);
        echo "',
        minchar_pass: '";
        // line 636
        echo ($context["minchar_pass"] ?? null);
        echo "',
        specialchar_pass: '";
        // line 637
        echo ($context["specialchar_pass"] ?? null);
        echo "',
        alphabets_pass: '";
        // line 638
        echo ($context["alphabets_pass"] ?? null);
        echo "',
        capital_alphabets_pass: '";
        // line 639
        echo ($context["capital_alphabets_pass"] ?? null);
        echo "',
        small_alphabets_pass: '";
        // line 640
        echo ($context["small_alphabets_pass"] ?? null);
        echo "',
        digit_pass: '";
        // line 641
        echo ($context["digit_pass"] ?? null);
        echo "',
        empty_field: '";
        // line 642
        echo ($context["empty_field"] ?? null);
        echo "',
        number_field: '";
        // line 643
        echo ($context["number_field"] ?? null);
        echo "',
        positive_number: '";
        // line 644
        echo ($context["positive_number"] ?? null);
        echo "',
        maxchar_field: '";
        // line 645
        echo ($context["maxchar_field"] ?? null);
        echo "',
        minchar_field: '";
        // line 646
        echo ($context["minchar_field"] ?? null);
        echo "',
        empty_email: '";
        // line 647
        echo ($context["empty_email"] ?? null);
        echo "',
        validate_email: '";
        // line 648
        echo ($context["validate_email"] ?? null);
        echo "',
        empty_country: '";
        // line 649
        echo ($context["empty_country"] ?? null);
        echo "',
        maxchar_country: '";
        // line 650
        echo ($context["maxchar_country"] ?? null);
        echo "',
        minchar_country: '";
        // line 651
        echo ($context["minchar_country"] ?? null);
        echo "',
        empty_city: '";
        // line 652
        echo ($context["empty_city"] ?? null);
        echo "',
        maxchar_city: '";
        // line 653
        echo ($context["maxchar_city"] ?? null);
        echo "',
        minchar_city: '";
        // line 654
        echo ($context["minchar_city"] ?? null);
        echo "',
        empty_state: '";
        // line 655
        echo ($context["empty_state"] ?? null);
        echo "',
        maxchar_state: '";
        // line 656
        echo ($context["maxchar_state"] ?? null);
        echo "',
        minchar_state: '";
        // line 657
        echo ($context["minchar_state"] ?? null);
        echo "',
        empty_proname: '";
        // line 658
        echo ($context["empty_proname"] ?? null);
        echo "',
        maxchar_proname: '";
        // line 659
        echo ($context["maxchar_proname"] ?? null);
        echo "',
        minchar_proname: '";
        // line 660
        echo ($context["minchar_proname"] ?? null);
        echo "',
        empty_catname: '";
        // line 661
        echo ($context["empty_catname"] ?? null);
        echo "',
        maxchar_catname: '";
        // line 662
        echo ($context["maxchar_catname"] ?? null);
        echo "',
        minchar_catname: '";
        // line 663
        echo ($context["minchar_catname"] ?? null);
        echo "',
        empty_zip: '";
        // line 664
        echo ($context["empty_zip"] ?? null);
        echo "',
        maxchar_zip: '";
        // line 665
        echo ($context["maxchar_zip"] ?? null);
        echo "',
        minchar_zip: '";
        // line 666
        echo ($context["minchar_zip"] ?? null);
        echo "',
        empty_username: '";
        // line 667
        echo ($context["empty_username"] ?? null);
        echo "',
        maxchar_username: '";
        // line 668
        echo ($context["maxchar_username"] ?? null);
        echo "',
        minchar_username: '";
        // line 669
        echo ($context["minchar_username"] ?? null);
        echo "',
        invalid_date: '";
        // line 670
        echo ($context["invalid_date"] ?? null);
        echo "',
        maxchar_sku: '";
        // line 671
        echo ($context["maxchar_sku"] ?? null);
        echo "',
        minchar_sku: '";
        // line 672
        echo ($context["minchar_sku"] ?? null);
        echo "',
        invalid_sku: '";
        // line 673
        echo ($context["invalid_sku"] ?? null);
        echo "',
        empty_sku: '";
        // line 674
        echo ($context["empty_sku"] ?? null);
        echo "',
        validate_range: '";
        // line 675
        echo ($context["validate_range"] ?? null);
        echo "',
        empty_address: '";
        // line 676
        echo ($context["empty_address"] ?? null);
        echo "',
        minchar_address: '";
        // line 677
        echo ($context["minchar_address"] ?? null);
        echo "',
        maxchar_address: '";
        // line 678
        echo ($context["maxchar_address"] ?? null);
        echo "',
        empty_company: '";
        // line 679
        echo ($context["empty_company"] ?? null);
        echo "',
        minchar_company: '";
        // line 680
        echo ($context["minchar_company"] ?? null);
        echo "',
        maxchar_company: '";
        // line 681
        echo ($context["maxchar_company"] ?? null);
        echo "',
        invalid_phone: '";
        // line 682
        echo ($context["invalid_phone"] ?? null);
        echo "',
        empty_phone: '";
        // line 683
        echo ($context["empty_phone"] ?? null);
        echo "',
        minchar_phone: '";
        // line 684
        echo ($context["minchar_phone"] ?? null);
        echo "',
        maxchar_phone: '";
        // line 685
        echo ($context["maxchar_phone"] ?? null);
        echo "',
        empty_brand: '";
        // line 686
        echo ($context["empty_brand"] ?? null);
        echo "',
        maxchar_brand: '";
        // line 687
        echo ($context["maxchar_brand"] ?? null);
        echo "',
        minchar_brand: '";
        // line 688
        echo ($context["minchar_brand"] ?? null);
        echo "',
        empty_shipment: '";
        // line 689
        echo ($context["empty_shipment"] ?? null);
        echo "',
        maxchar_shipment: '";
        // line 690
        echo ($context["maxchar_shipment"] ?? null);
        echo "',
        minchar_shipment: '";
        // line 691
        echo ($context["minchar_shipment"] ?? null);
        echo "',
        invalid_ip: '";
        // line 692
        echo ($context["invalid_ip"] ?? null);
        echo "',
        invalid_url: '";
        // line 693
        echo ($context["invalid_url"] ?? null);
        echo "',
        empty_url: '";
        // line 694
        echo ($context["empty_url"] ?? null);
        echo "',
        valid_amount: '";
        // line 695
        echo ($context["valid_amount"] ?? null);
        echo "',
        valid_decimal: '";
        // line 696
        echo ($context["valid_decimal"] ?? null);
        echo "',
        max_email: '";
        // line 697
        echo ($context["max_email"] ?? null);
        echo "',
        specialchar_zip: '";
        // line 698
        echo ($context["specialchar_zip"] ?? null);
        echo "',
        specialchar_sku: '";
        // line 699
        echo ($context["specialchar_sku"] ?? null);
        echo "',
        max_url: '";
        // line 700
        echo ($context["max_url"] ?? null);
        echo "',
        valid_percentage: '";
        // line 701
        echo ($context["valid_percentage"] ?? null);
        echo "',
        between_percentage: '";
        // line 702
        echo ($context["between_percentage"] ?? null);
        echo "',
        maxchar_size: '";
        // line 703
        echo ($context["maxchar_size"] ?? null);
        echo "',
        specialchar_size: '";
        // line 704
        echo ($context["specialchar_size"] ?? null);
        echo "',
        specialchar_upc: '";
        // line 705
        echo ($context["specialchar_upc"] ?? null);
        echo "',
        maxchar_upc: '";
        // line 706
        echo ($context["maxchar_upc"] ?? null);
        echo "',
        specialchar_ean: '";
        // line 707
        echo ($context["specialchar_ean"] ?? null);
        echo "',
        maxchar_ean: '";
        // line 708
        echo ($context["maxchar_ean"] ?? null);
        echo "',
        specialchar_bar: '";
        // line 709
        echo ($context["specialchar_bar"] ?? null);
        echo "',
        maxchar_bar: '";
        // line 710
        echo ($context["maxchar_bar"] ?? null);
        echo "',
        positive_amount: '";
        // line 711
        echo ($context["positive_amount"] ?? null);
        echo "',
        maxchar_color: '";
        // line 712
        echo ($context["maxchar_color"] ?? null);
        echo "',
        invalid_color: '";
        // line 713
        echo ($context["invalid_color"] ?? null);
        echo "',
        specialchar: '";
        // line 714
        echo ($context["specialchar"] ?? null);
        echo "',
        script: '";
        // line 715
        echo ($context["script"] ?? null);
        echo "',
        style: '";
        // line 716
        echo ($context["style"] ?? null);
        echo "',
        iframe: '";
        // line 717
        echo ($context["iframe"] ?? null);
        echo "',
        not_image: '";
        // line 718
        echo ($context["not_image"] ?? null);
        echo "',
        image_size: '";
        // line 719
        echo ($context["image_size"] ?? null);
        echo "',
        html_tags: '";
        // line 720
        echo ($context["html_tags"] ?? null);
        echo "',
        number_pos: '";
        // line 721
        echo ($context["number_pos"] ?? null);
        echo "',
        invalid_separator: '";
        // line 722
        echo ($context["invalid_separator"] ?? null);
        echo "'
    });
</script>
";
        // line 725
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "kbmp_marketplace/seller_profile_custom_fields_add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1973 => 725,  1967 => 722,  1963 => 721,  1959 => 720,  1955 => 719,  1951 => 718,  1947 => 717,  1943 => 716,  1939 => 715,  1935 => 714,  1931 => 713,  1927 => 712,  1923 => 711,  1919 => 710,  1915 => 709,  1911 => 708,  1907 => 707,  1903 => 706,  1899 => 705,  1895 => 704,  1891 => 703,  1887 => 702,  1883 => 701,  1879 => 700,  1875 => 699,  1871 => 698,  1867 => 697,  1863 => 696,  1859 => 695,  1855 => 694,  1851 => 693,  1847 => 692,  1843 => 691,  1839 => 690,  1835 => 689,  1831 => 688,  1827 => 687,  1823 => 686,  1819 => 685,  1815 => 684,  1811 => 683,  1807 => 682,  1803 => 681,  1799 => 680,  1795 => 679,  1791 => 678,  1787 => 677,  1783 => 676,  1779 => 675,  1775 => 674,  1771 => 673,  1767 => 672,  1763 => 671,  1759 => 670,  1755 => 669,  1751 => 668,  1747 => 667,  1743 => 666,  1739 => 665,  1735 => 664,  1731 => 663,  1727 => 662,  1723 => 661,  1719 => 660,  1715 => 659,  1711 => 658,  1707 => 657,  1703 => 656,  1699 => 655,  1695 => 654,  1691 => 653,  1687 => 652,  1683 => 651,  1679 => 650,  1675 => 649,  1671 => 648,  1667 => 647,  1663 => 646,  1659 => 645,  1655 => 644,  1651 => 643,  1647 => 642,  1643 => 641,  1639 => 640,  1635 => 639,  1631 => 638,  1627 => 637,  1623 => 636,  1619 => 635,  1615 => 634,  1611 => 633,  1607 => 632,  1603 => 631,  1599 => 630,  1595 => 629,  1591 => 628,  1587 => 627,  1583 => 626,  1579 => 625,  1575 => 624,  1571 => 623,  1558 => 613,  1554 => 612,  1544 => 605,  1537 => 603,  1534 => 602,  1531 => 601,  1528 => 600,  1525 => 599,  1523 => 598,  1515 => 593,  1511 => 592,  1500 => 584,  1493 => 582,  1490 => 581,  1487 => 580,  1484 => 579,  1481 => 578,  1479 => 577,  1471 => 572,  1467 => 571,  1456 => 563,  1449 => 561,  1446 => 560,  1443 => 559,  1440 => 558,  1437 => 557,  1435 => 556,  1427 => 551,  1423 => 550,  1412 => 542,  1405 => 540,  1402 => 539,  1399 => 538,  1396 => 537,  1393 => 536,  1391 => 535,  1383 => 530,  1379 => 529,  1367 => 520,  1360 => 518,  1357 => 517,  1354 => 516,  1351 => 515,  1348 => 514,  1346 => 513,  1338 => 508,  1334 => 507,  1325 => 501,  1318 => 497,  1314 => 496,  1305 => 490,  1299 => 487,  1292 => 483,  1288 => 482,  1278 => 475,  1271 => 471,  1267 => 470,  1258 => 464,  1251 => 460,  1247 => 459,  1238 => 453,  1231 => 449,  1227 => 448,  1216 => 442,  1210 => 441,  1204 => 440,  1198 => 439,  1190 => 434,  1186 => 433,  1174 => 424,  1167 => 422,  1164 => 421,  1161 => 420,  1158 => 419,  1155 => 418,  1153 => 417,  1145 => 412,  1141 => 411,  1130 => 405,  1124 => 404,  1118 => 403,  1112 => 402,  1106 => 401,  1100 => 400,  1094 => 399,  1088 => 398,  1079 => 392,  1075 => 391,  1065 => 384,  1058 => 380,  1054 => 379,  1046 => 374,  1039 => 370,  1035 => 369,  1022 => 359,  1015 => 357,  1012 => 356,  1009 => 355,  1006 => 354,  1003 => 353,  1001 => 352,  993 => 347,  989 => 346,  983 => 342,  979 => 340,  973 => 339,  971 => 338,  965 => 334,  954 => 332,  951 => 331,  948 => 330,  944 => 329,  939 => 327,  930 => 321,  920 => 318,  913 => 314,  909 => 313,  899 => 311,  896 => 310,  890 => 309,  887 => 308,  884 => 307,  881 => 306,  876 => 305,  873 => 304,  870 => 303,  867 => 302,  864 => 301,  860 => 300,  857 => 299,  854 => 298,  851 => 297,  848 => 295,  843 => 292,  837 => 291,  835 => 290,  829 => 286,  818 => 284,  815 => 283,  812 => 282,  808 => 281,  803 => 279,  794 => 273,  785 => 271,  778 => 267,  774 => 266,  764 => 264,  761 => 263,  755 => 262,  752 => 261,  749 => 260,  746 => 259,  741 => 258,  738 => 257,  735 => 256,  732 => 255,  729 => 254,  725 => 253,  722 => 252,  719 => 251,  716 => 250,  713 => 248,  709 => 246,  703 => 245,  701 => 244,  695 => 240,  684 => 238,  681 => 237,  678 => 236,  674 => 235,  669 => 233,  656 => 227,  649 => 223,  645 => 222,  635 => 220,  632 => 219,  626 => 218,  623 => 217,  620 => 216,  617 => 215,  612 => 214,  609 => 213,  606 => 212,  603 => 211,  600 => 210,  596 => 209,  593 => 208,  590 => 207,  587 => 206,  584 => 204,  580 => 202,  574 => 201,  572 => 200,  566 => 196,  555 => 194,  552 => 193,  549 => 192,  545 => 191,  540 => 189,  528 => 184,  521 => 180,  517 => 179,  507 => 177,  504 => 176,  498 => 175,  495 => 174,  492 => 173,  489 => 172,  484 => 171,  481 => 170,  478 => 169,  475 => 168,  472 => 167,  468 => 166,  465 => 165,  462 => 164,  459 => 163,  456 => 161,  452 => 159,  446 => 158,  444 => 157,  438 => 153,  427 => 151,  424 => 150,  421 => 149,  417 => 148,  412 => 146,  399 => 140,  392 => 136,  388 => 135,  378 => 133,  375 => 132,  369 => 131,  365 => 129,  362 => 128,  359 => 127,  354 => 126,  351 => 125,  348 => 124,  345 => 123,  342 => 122,  338 => 121,  335 => 120,  332 => 119,  329 => 118,  325 => 115,  320 => 112,  314 => 111,  312 => 110,  306 => 106,  295 => 104,  292 => 103,  289 => 102,  285 => 101,  279 => 98,  267 => 93,  260 => 89,  256 => 88,  246 => 86,  243 => 85,  237 => 84,  234 => 83,  231 => 82,  228 => 81,  223 => 80,  220 => 79,  217 => 78,  214 => 77,  211 => 76,  207 => 75,  204 => 74,  201 => 73,  199 => 72,  190 => 66,  186 => 65,  182 => 64,  178 => 63,  174 => 62,  170 => 61,  166 => 60,  162 => 59,  154 => 56,  146 => 51,  140 => 48,  134 => 44,  126 => 39,  121 => 36,  119 => 35,  116 => 34,  108 => 29,  103 => 26,  101 => 25,  95 => 21,  88 => 18,  82 => 15,  78 => 13,  68 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }} 
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_save }}\" id=\"add_custom_fields\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"{{ cancel }}\" data-toggle=\"tooltip\" title=\"{{ button_cancel }}\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
            </div>
            <h1>{{ heading_title }}</h1>
            <ul class=\"breadcrumb\">
                {% for breadcrumb in breadcrumbs %} 
                    <li><a href=\"{{ breadcrumb['href'] }}\">{{ breadcrumb['text'] }}</a></li>
                    {% endfor %} 
            </ul>
            {% if (text_already_exist is defined) %} 
                <div id=\"message_warning\">
                    <div class=\"alert alert-warning message_warning\">
                        <i class=\"fa fa-check-circle\"></i> {{ text_already_exist }} 
                    </div>
                </div> 
            {% endif %} 
            <div id=\"error_message\"></div>
        </div>
    </div>
    {% if (submit_status is not empty) %}

        <div class=\"alert alert-success\">
            <i class=\"fa fa-check-circle\"></i> 
            {{ submit_status }}

            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        </div>
    {% endif %}

    {% if (error_status is not empty) %}

        <div class=\"alert alert-warning\">
            <i class=\"fa fa-check-circle\"></i> 
            {{ error_status }}

            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        </div>
    {% endif %}

    <div class=\"container-fluid\">        
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> {{ heading_add_custom_fields}}</h3>
            </div>   
            <div class=\"panel-body\">
                {{tab_common}}

                <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" id=\"form_custom_field\" class=\"form-horizontal\">

                    <div class=\"form-group required\">
                        <label class=\"col-sm-3 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"{{ select_field }}\">{{ select_field }}</span></label>
                        <div class=\"col-sm-5\">
                            <select name=\"field_type\" id=\"field_type\" class=\"form-control\">
                                <option value=\"\">{{ select_type }}</option> 
                                <option value=\"text\">{{ text }}</option> 
                                <option value=\"select\">{{ select }}</option> 
                                <option value=\"radio\">{{ radio }}</option> 
                                <option value=\"checkbox\">{{ checkbox }}</option> 
                                <option value=\"textarea\">{{ textarea }}</option> 
                                <option value=\"file\">{{ file_type }}</option> 
                                <option value=\"date\">{{ date }}</option> 
                            </select>                           
                        </div>
                    </div>                    

                    <div class=\"custom_field_form\">
                        {% if (languages is not empty) %}
                            {% set display = \"style='display:block'\" %}
                            <div class=\"form-group\">
                                {% for k,lang in languages %}
                                    {% set id = lang['language_id'] %}
                                    {% set name = lang['name'] %}
                                    {% set label_value = '' %}
                                    {% if (custom_fields_lang_data is not empty) %}
                                        {% for lang_data in custom_fields_lang_data %}
                                            {% if (lang_data['id_lang'] == id and store_id == lang_data['id_shop']) %}
                                                {% set label_value = lang_data['label'] %}
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                    <div class=\"form-group required label_field language language_{{id}}\" {{display}} id=\"label_{{id}}\">
                                        <label class=\"control-label col-lg-3\">
                                            <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{field_label_hint}}\">
                                                {{field_label}}
                                            </span>
                                        </label>
                                        <div class=\"col-lg-5\">\t
                                            <input type=\"text\" name=\"label_{{id}}\" id=\"label_{{id}}\" value=\"{{label_value}}\" class=\"fixed-width-small form-control label_field_mandatory\">\t\t\t
                                        </div>
                                        <div class=\"col-lg-2\">\t
                                            <div class=\"dropdown\">
                                                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <span class=\"caret\"></span> {{name}}
                                                </button>
                                                <ul class=\"dropdown-menu\">
                                                    {% for k,lang in languages %}
                                                        {% set id_2 = lang['language_id'] %}
                                                        {% set name = lang['name'] %}
                                                        <li data-tag=\"label\" data-field=\"label_field\" data-id=\"{{id_2}}\"><a class=\"drop_down_link\" href=\"#\">{{name}}</a></li>
                                                        {% endfor %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {% set display = \"style='display:none'\" %}
                                {% endfor %}
                                <span class=\"kb_error_message validation_error label_validation\"></span>
                            </div>
                        {% endif %}


                        {# for the short description_ common #}
                        {% if (languages is not empty) %}
                            {% set display = \"style='display:block'\" %}
                            <div class=\"form-group\">
                                {% for k,lang in languages %}
                                    {% set id = lang['language_id'] %}
                                    {% set name = lang['name'] %}
                                    {% set description_value = '' %}
                                    {% if (custom_fields_lang_data is not empty) %}
                                        {% for lang_data in custom_fields_lang_data %}
                                            {% if (lang_data['id_lang'] == id and store_id == lang_data['id_shop']) %}
                                                {% set description_value = lang_data['description'] %}

                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                    <div class=\"form-group description_field language language_{{id}}\" {{display}} id=\"description_{{id}}\">
                                        <label class=\"control-label col-lg-3\">
                                            <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{field_description}}\">
                                                {{field_description}}
                                            </span>
                                        </label>
                                        <div class=\"col-lg-5\">\t
                                            <input type=\"text\" name=\"description_{{id}}\" id=\"description_{{id}}\" value=\"{{description_value}}\" class=\"fixed-width-small form-control\">\t
                                            <span class=\"kb_error_message\"></span>\t\t\t
                                        </div>

                                        <div class=\"col-lg-2\">\t
                                            <div class=\"dropdown\">
                                                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span class=\"caret\"></span> {{name}}</button>
                                                <ul class=\"dropdown-menu\">
                                                    {% for k,lang in languages %}
                                                        {% set id_2 = lang['language_id'] %}
                                                        {% set name = lang['name'] %}
                                                        <li data-tag=\"description\" data-field=\"description_field\" data-id=\"{{id_2}}\"><a>{{name}}</a></li>
                                                        {% endfor %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {% set display = \"style='display:none'\" %}
                                {% endfor %}
                            </div>
                        {% endif %}

                        {# for the placeholder #}
                        {% if (languages is not empty) %}
                            {% set display = \"style='display:block'\" %}
                            <div class=\"form-group not_common\">
                                {% for k,lang in languages %}
                                    {% set id = lang['language_id'] %}
                                    {% set name = lang['name'] %}
                                    {% set placeholder_value = '' %}
                                    {% if (custom_fields_lang_data is not empty) %}
                                        {% for lang_data in custom_fields_lang_data %}
                                            {% if (lang_data['id_lang'] == id and store_id == lang_data['id_shop']) %}
                                                {% set placeholder_value = lang_data['placeholder'] %}
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                    <div class=\"form-group placeholder_field language language_{{id}}\" {{display}} id=\"placeholder_{{id}}\" style=\"display:none;\">
                                        <label class=\"control-label col-lg-3\">
                                            <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{text_placeholder}}\">
                                                {{text_placeholder}}
                                            </span>
                                        </label>
                                        <div class=\"col-lg-5\">\t
                                            <input type=\"text\" name=\"placeholder_{{id}}\" id=\"placeholder_{{id}}\" value=\"{{placeholder_value}}\" class=\"fixed-width-small form-control\">
                                        </div>

                                        <div class=\"col-lg-2\">\t
                                            <div class=\"dropdown\">
                                                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span class=\"caret\"></span> {{name}}</button>
                                                <ul class=\"dropdown-menu\">
                                                    {% for k,lang in languages %}
                                                        {% set id_2 = lang['language_id'] %}
                                                        {% set name = lang['name'] %}
                                                        <li data-tag=\"placeholder\" data-field=\"placeholder_field\" data-id=\"{{id_2}}\"><a>{{name}}</a></li>
                                                    {% endfor %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {% set display = \"style='display:none'\" %}
                                {% endfor %}
                            </div>
                        {% endif %}

                        {# for the error mesage #}
                        {% if (languages is not empty) %}
                            {% set display = \"style='display:block'\" %}
                            <div class=\"form-group not_common\">
                                {% for k,lang in languages %}
                                    {% set id = lang['language_id'] %}
                                    {% set name = lang['name'] %}
                                    {% set error_msg_value = '' %}
                                    {% if (custom_fields_lang_data is not empty) %}
                                        {% for lang_data in custom_fields_lang_data %}
                                            {% if (lang_data['id_lang'] == id and store_id == lang_data['id_shop']) %}
                                                {% set error_msg_value = lang_data['error_msg'] %}
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                    <div class=\"form-group error_msg_field language language_{{id}}\" {{display}} id=\"error_msg_{{id}}\" style=\"display:none;\">
                                        <label class=\"control-label col-lg-3\">
                                            <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{error_message_hint}}\">
                                                {{error_message}}
                                            </span>
                                        </label>
                                        <div class=\"col-lg-5\">\t
                                            <input type=\"text\" name=\"error_msg_{{id}}\" id=\"error_msg_{{id}}\" value=\"{{error_msg_value}}\" class=\"fixed-width-small form-control\">
                                            <span class=\"kb_error_message\"></span>\t\t
                                        </div>

                                        <div class=\"col-lg-2\">\t
                                            <div class=\"dropdown\">
                                                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span class=\"caret\"></span> {{name}}</button>
                                                <ul class=\"dropdown-menu\">
                                                    {% for k,lang in languages %}
                                                        {% set id_2 = lang['language_id'] %}
                                                        {% set name = lang['name'] %}
                                                        <li data-tag=\"error_msg\" data-field=\"error_msg_field\" data-id=\"{{id_2}}\"><a>{{name}}</a></li>
                                                            {% endfor %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {% set display = \"style='display:none'\" %}
                                {% endfor %}
                            </div>
                        {% endif %}

                        {# for the options of select field #}
                        {% if (languages is not empty) %}
                            {% set display = \"style='display:block'\" %}
                            <div class=\"form-group not_common\">
                                {% for k,lang in languages %}
                                    {% set id = lang['language_id'] %}
                                    {% set name = lang['name'] %}
                                    {% set value = '' %}
                                    {% if (custom_fields_lang_data is not empty) %}
                                        {% for lang_data in custom_fields_lang_data %}
                                            {% if (lang_data['id_lang'] == id and store_id == lang_data['id_shop']) %}
                                                {% set value = lang_data['value'] %}
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                    <div class=\"form-group required select_field_option select_option_field language language_{{id}}\" {{display}} id=\"select_option_field_{{id}}\" style=\"display:none;\">
                                        <label class=\"control-label col-lg-3\">
                                            <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{select_option}}\">
                                                {{select_option}}
                                            </span>
                                        </label>
                                        <div class=\"col-lg-5\">\t
                                            <textarea type=\"text\" name=\"value_{{id}}\" id=\"value_{{id}}\" value=\"\" class=\"fixed-width-small form-control select_option_value\">{{value}}</textarea>
                                            <p>\t\t\t
                                                {{select_option_msg}}
                                            </p>\t\t\t
                                        </div>

                                        <div class=\"col-lg-2\">\t
                                            <div class=\"dropdown\">
                                                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span class=\"caret\"></span> {{name}}</button>
                                                <ul class=\"dropdown-menu\">
                                                    {% for k,lang in languages %}
                                                        {% set id_2 = lang['language_id'] %}
                                                        {% set name = lang['name'] %}
                                                        <li data-tag=\"select_option_field\" data-field=\"select_option_field\" data-id=\"{{id_2}}\"><a>{{name}}</a></li>
                                                    {% endfor %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {% set display = \"style='display:none'\" %}
                                {% endfor %}
                                <span class=\"kb_error_message validation_error option_select_validation\"></span>
                            </div>
                        {% endif %}

                        {# for the default options of select field #}
                        {% if (languages is not empty) %}
                            {% set display = \"style='display:block'\" %}
                            <div class=\"form-group not_common\">
                                {% for k,lang in languages %}
                                    {% set id = lang['language_id'] %}
                                    {% set name = lang['name'] %}
                                    {% set default_value = '' %}
                                    {% if (custom_fields_lang_data is not empty) %}
                                        {% for lang_data in custom_fields_lang_data %}
                                            {% if (lang_data['id_lang'] == id and store_id == lang_data['id_shop']) %}
                                                {% set default_value = lang_data['default_value'] %}
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}
                                    <div class=\"form-group select_field_option default_option_field language language_{{id}}\" {{display}} id=\"default_option_field_{{id}}\" style=\"display:none;\">
                                        <label class=\"control-label col-lg-3\">
                                            <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{select_option_default}}\">
                                                {{select_option_default}}
                                            </span>
                                        </label>
                                        <div class=\"col-lg-5\">\t
                                            <input type=\"text\" name=\"default_value_{{id}}\" id=\"default_value_{{id}}\" value=\"{{default_value}}\" class=\"fixed-width-small form-control\">
                                            <span class=\"kb_error_message\"></span>
                                            <p>\t\t\t
                                                {{select_option_default_msg}}
                                            </p>\t\t\t
                                        </div>

                                        <div class=\"col-lg-2\">\t
                                            <div class=\"dropdown\">
                                                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"><span class=\"caret\"></span> {{name}}</button>
                                                <ul class=\"dropdown-menu\">
                                                    {% for k,lang in languages %}
                                                        {% set id_2 = lang['language_id'] %}
                                                        {% set name = lang['name'] %}
                                                        <li data-tag=\"default_option_field\" data-field=\"default_option_field\" data-id=\"{{id_2}}\"><a>{{name}}</a></li>
                                                    {% endfor %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {% set display = \"style='display:none'\" %}
                                {% endfor %}
                            </div>
                        {% endif %}

                        <!-- For the select type multiple start-->
                        <div class=\"form-group not_common mutiple_select\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{ multiselect }} \">
                                    {{ multiselect }}                                       
                                </span>
                            </label>
                            <div class=\"col-lg-5\">
                                <span class=\"switch opencart-switch fixed-width-lg\">
                                    {% set default_checked = 'checked' %}
                                    {% if (custom_fields['multiselect'] is defined) %}
                                        {% set default_checked = '' %}
                                    {% endif %}

                                    <input class=\"custom_radio\" type=\"radio\" name=\"multiselect\" id=\"multiselect_true\" value=\"1\" {{ default_checked }} {{ custom_fields['multiselect'] is defined and custom_fields['multiselect'] == 1 ? 'checked': '' }}>
                                    <label class=\"custom_radio_label\" for=\"multiselect_true\">Yes</label>
                                    <input class=\"custom_radio\" type=\"radio\" name=\"multiselect\" id=\"multiselect_false\" value=\"0\" {{ custom_fields['multiselect'] is defined and custom_fields['multiselect'] == 0 ? 'checked': '' }}>
                                    <label class=\"custom_radio_label\" for=\"multiselect_false\">No</label>
                                    <a class=\"slide-button btn\"></a>
                                </span>
                            </div>
                        </div>
                        <!-- end-->
                        <!-- For the maximum and minimum length Start-->
                        <div class=\"form-group not_common text_minlength\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{ min_length }}\">
                                    {{ min_length }} 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <input type=\"text\" name=\"min_length\" id=\"min_length\" value=\"{{ custom_fields['min_length'] is defined?custom_fields['min_length'] : 0 }}\" class=\"fixed-width-small form-control\">\t\t
                            </div>
                        </div>
                        <div class=\"form-group not_common text_maxlength not_common\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{ max_length }}\">
                                    {{ max_length }} 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <input type=\"text\" name=\"max_length\" id=\"max_length\" value=\"{{ custom_fields['max_length'] is defined?custom_fields['max_length'] : 255 }}\" class=\"fixed-width-small form-control\">\t\t
                            </div>
                        </div>
                        <!-- For the maximum and minimum length End-->

                        <div class=\"form-group not_common text_area_field\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{ html_id }}\">
                                    {{ validation_textarea }} 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <select name=\"validation\" class=\"fixed-width-small form-control\">
                                    <option value=\"\"></option>
                                    <option value=\"isGenericName\"{{ custom_fields['validation'] is defined and custom_fields['validation'] == 'isGenericName' ? 'selected' : '' }}>{{ isGenericName }}</option>
                                    <option value=\"isAddress\" {{ custom_fields['validation'] is defined and custom_fields['validation'] == 'isAddress' ? 'selected' : '' }}>{{ isAddress }}</option>
                                    <option value=\"isCityName\" {{ custom_fields['validation'] is defined and custom_fields['validation'] == 'isCityName' ? 'selected' : '' }}>{{ isCityName }}</option>
                                    <option value=\"isMessage\" {{ custom_fields['validation'] is defined and custom_fields['validation'] == 'isMessage' ? 'selected' : '' }}>{{ isMessage }}</option>
                                    <option value=\"isPhoneNumber\" {{ custom_fields['validation'] is defined and custom_fields['validation'] == 'isPhoneNumber' ? 'selected' : '' }}>{{ isPhoneNumber }}</option>
                                    <option value=\"isDniLite {{ custom_fields['validation'] is defined and custom_fields['validation'] == 'isDniLite' ? 'selected' : '' }}\">{{ isDniLite }}</option>
                                    <option value=\"isEmail\" {{ custom_fields['validation'] is defined and custom_fields['validation'] == 'isEmail' ? 'selected' : '' }}>{{ isEmail }}</option>
                                    <option value=\"isPasswd\" {{ custom_fields['validation'] is defined and custom_fields['validation'] == 'isPasswd' ? 'selected' : '' }}>{{ isPasswd }}</option>\t
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group not_common text_area_field\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{ text_editor_show }} \">
                                    {{ text_editor_show }}                                       
                                </span>
                            </label>
                            <div class=\"col-lg-5\">
                                <span class=\"switch opencart-switch fixed-width-lg\">
                                    {% set default_checked = 'checked' %}
                                    {% if (custom_fields['show_text_editor'] is defined) %}
                                        {% set default_checked = '' %}
                                    {% endif %}

                                    <input class=\"custom_radio\" type=\"radio\" name=\"show_text_editor\" id=\"show_text_editor_true\" value=\"1\" {{ default_checked }} {{ custom_fields['show_text_editor'] is defined and custom_fields['show_text_editor'] == 1 ? 'checked': '' }}>
                                    <label class=\"custom_radio_label\" for=\"show_text_editor_true\">Yes</label>
                                    <input class=\"custom_radio\" type=\"radio\" name=\"show_text_editor\" id=\"show_text_editor_false\" value=\"0\" {{ custom_fields['show_text_editor'] is defined and custom_fields['show_text_editor'] == 0 ? 'checked': '' }}>
                                    <label class=\"custom_radio_label\" for=\"show_text_editor_false\">No</label>
                                    <a class=\"slide-button btn\"></a>
                                </span>
                            </div>
                        </div>
                        <!--End -->
                        <div class=\"form-group required\" style=\"display: none\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{ html_id }}\">
                                    {{ section }} 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <select class=\"fixed-width-small form-control\" name=\"section\">\t
                                    <option value=\"1\" {{ custom_fields['id_section'] is defined and custom_fields['id_section'] == 1 ? 'selected' : '' }}>{{ text_general }}</option>
                                    <option value=\"2\" {{ custom_fields['id_section'] is defined and custom_fields['id_section'] == 2 ? 'selected' : '' }}>{{ text_meta_info }}</option>
                                    <option value=\"3\" {{ custom_fields['id_section'] is defined and custom_fields['id_section'] == 3 ? 'selected' : '' }}>{{ text_policy }}</option>
                                    <option value=\"4\" {{ custom_fields['id_section'] is defined and custom_fields['id_section'] == 4 ? 'selected' : '' }}>{{ text_payout_info }}</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{ html_id }}\">
                                    {{ html_id }} 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <input type=\"text\" name=\"html_id\" id=\"html_id\" value=\"{{ custom_fields['html_id'] is defined ? custom_fields['html_id'] : 'field_'~field_name }}\" class=\"common_field_mandatory ixed-width-small form-control\">\t
                                <span class=\"kb_error_message\"></span>\t\t\t\t
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{ html_class }}\">
                                    {{ html_class }} 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <input type=\"text\" name=\"html_class\" id=\"html_class\" value=\"{{ custom_fields['html_class'] is defined?custom_fields['html_class'] : 'field_'~field_name }}\" class=\"common_field_mandatory fixed-width-small form-control\">
                                <span class=\"kb_error_message\"></span>\t
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{ field_name_data }}\">
                                    {{ field_name_data }} 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <input type=\"text\" name=\"field_name\" id=\"field_name\" value=\"{{ custom_fields['field_name'] is defined?custom_fields['field_name'] : 'field_'~field_name }}\" class=\"common_field_mandatory fixed-width-small form-control\">
                                <span class=\"kb_error_message\"></span>\t
                            </div>
                        </div>
                        <!--For file type start -->
                        <div class=\"form-group required not_common file_type\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{ file_extension }}\">
                                    {{ file_extension }} 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <input type=\"text\" name=\"file_extension\" id=\"file_extension\"  value=\"{{ custom_fields['file_extension'] is defined?custom_fields['file_extension'] : '' }}\" class=\"fixed-width-small form-control\">
                                <span class=\"kb_error_message\"></span>
                                <p>
                                    {{ file_extension_msg }} 
                                </p>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{ field_position }}\">
                                    {{ field_position }} 
                                </span>
                            </label>
                            <div class=\"col-lg-5\">\t
                                <input type=\"text\" name=\"position\" id=\"position\"  value=\"{{ custom_fields['position'] is defined?custom_fields['position'] : '' }}\" class=\"fixed-width-small form-control\">
                                <span class=\"kb_error_message\"></span>
                            </div>
                        </div>
                        <div class=\"form-group not_common file_type\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{ editable_label_hint }} \">
                                    {{ editable_label }}                                       
                                </span>
                            </label>
                            <div class=\"col-lg-5\">
                                <span class=\"switch opencart-switch fixed-width-lg\">
                                    {% set default_checked = 'checked' %}
                                    {% if (custom_fields['editable'] is defined) %}
                                        {% set default_checked = '' %}
                                    {% endif %}

                                    <input class=\"custom_radio\" type=\"radio\" name=\"editable\" id=\"editable_on\" value=\"1\" {{ default_checked }} {{ custom_fields['editable'] is defined and custom_fields['editable'] == 1 ? 'checked': '' }} >
                                    <label class=\"custom_radio_label\" for=\"editable_on\">Yes</label>
                                    <input class=\"custom_radio\" type=\"radio\" name=\"editable\" id=\"editable_off\" value=\"0\" {{ custom_fields['editable'] is defined and custom_fields['editable'] == 0 ? 'checked': '' }}>
                                    <label class=\"custom_radio_label\" for=\"editable_off\">No</label>
                                    <a class=\"slide-button btn\"></a>
                                </span>
                            </div>
                        </div>
                        <!--End -->
                        <div class=\"form-group\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{ required_field_hint }} \">
                                    {{ required_field }}                                       
                                </span>
                            </label>
                            <div class=\"col-lg-5\">
                                <span class=\"switch opencart-switch fixed-width-lg\">
                                    {% set default_checked = 'checked' %}
                                    {% if (custom_fields['required'] is defined) %}
                                        {% set default_checked = '' %}
                                    {% endif %}

                                    <input class=\"custom_radio\" type=\"radio\" name=\"required\" id=\"required_true\" value=\"1\" {{ default_checked }} {{ custom_fields['required'] is defined and custom_fields['required'] == 1 ? 'checked': '' }} >
                                    <label class=\"custom_radio_label\" for=\"required_true\">Yes</label>
                                    <input class=\"custom_radio\" type=\"radio\" name=\"required\" id=\"required_false\" value=\"0\"  {{ custom_fields['required'] is defined and custom_fields['required'] == 0 ? 'checked': '' }}>
                                    <label class=\"custom_radio_label\" for=\"required_false\">No</label>
                                    <a class=\"slide-button btn\"></a>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{ seller_registration }}\">
                                    {{ seller_registration }}                                       
                                </span>
                            </label>
                            <div class=\"col-lg-5\">
                                <span class=\"switch opencart-switch fixed-width-lg\">
                                    {% set default_checked = 'checked' %}
                                    {% if (custom_fields['show_registration_form'] is defined) %}
                                        {% set default_checked = '' %}
                                    {% endif %}

                                    <input class=\"custom_radio\" type=\"radio\" name=\"show_registration_form\" id=\"seller_registration_on\" value=\"1\" {{ default_checked }} {{ custom_fields['show_registration_form'] is defined and custom_fields['show_registration_form'] == 1 ? 'checked': '' }}>
                                    <label class=\"custom_radio_label\" for=\"seller_registration_on\">Yes</label>
                                    <input class=\"custom_radio\" type=\"radio\" name=\"show_registration_form\" id=\"seller_registration_off\" value=\"0\" {{ custom_fields['show_registration_form'] is defined and custom_fields['show_registration_form'] == 0 ? 'checked': '' }}>
                                    <label class=\"custom_radio_label\" for=\"seller_registration_off\">No</label>
                                    <a class=\"slide-button btn\"></a>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{ textseller_profile_page_hint }}\">
                                    {{ textseller_profile_page }}                                         
                                </span>
                            </label>
                            <div class=\"col-lg-5\">
                                <span class=\"switch opencart-switch fixed-width-lg\">
                                    {% set default_checked = 'checked' %}
                                    {% if (custom_fields['show_seller_profile'] is defined) %}
                                        {% set default_checked = '' %}
                                    {% endif %}

                                    <input class=\"custom_radio\" type=\"radio\" name=\"show_seller_profile\" id=\"profile_on\" value=\"1\" {{ default_checked }} {{ custom_fields['show_seller_profile'] is defined and custom_fields['show_seller_profile'] == 1 ? 'checked': '' }}>
                                    <label class=\"custom_radio_label\" for=\"profile_on\">Yes</label>
                                    <input class=\"custom_radio\" type=\"radio\" name=\"show_seller_profile\" id=\"profile_off\" value=\"0\" {{ custom_fields['show_seller_profile'] is defined and custom_fields['show_seller_profile'] == 0 ? 'checked': '' }}>
                                    <label class=\"custom_radio_label\" for=\"profile_off\">No</label>
                                    <a class=\"slide-button btn\"></a>
                                </span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-lg-3\">
                                <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{{ field_status_hint }}\">
                                    {{ field_status }}                                       
                                </span>
                            </label>
                            <div class=\"col-lg-5\">
                                <span class=\"switch opencart-switch fixed-width-lg\">
                                    {% set default_checked = 'checked' %}
                                    {% if (custom_fields['active'] is defined) %}
                                        {% set default_checked = '' %}
                                    {% endif %}

                                    <input class=\"custom_radio\" type=\"radio\" name=\"active\" id=\"field_active_on\" value=\"1\" {{ default_checked }} {{ custom_fields['active'] is defined and custom_fields['active'] == 1 ? 'checked': '' }}>
                                    <label class=\"custom_radio_label\" for=\"field_active_on\">Yes</label>
                                    <input class=\"custom_radio\" type=\"radio\" name=\"active\" id=\"field_active_off\" value=\"0\" {{ custom_fields['active'] is defined and custom_fields['active'] == 0 ? 'checked': '' }}>
                                    <label class=\"custom_radio_label\" for=\"field_active_off\">No</label>
                                    <a class=\"slide-button btn\"></a>
                                </span>
                            </div>
                        </div>
                    </div>   
                    <input type=\"hidden\" name=\"edit_field_id\" id=\"edit_field_id\" value=\"{{ custom_fields['id_field'] is defined ? custom_fields['id_field'] : 0 }}\">
                    <input type=\"hidden\" name=\"select_type_edit\" id=\"select_type_edit\" value=\"{{ select_type_edit }}\">
                </form>
            </div>
        </div>
    </div>
</div>
<script>

//velvovalidation error languages
    velovalidation.setErrorLanguage({
        empty_fname: '{{empty_fname}}',
        maxchar_fname: '{{maxchar_fname}}',
        minchar_fname: '{{minchar_fname}}',
        empty_mname: '{{empty_mname}}',
        maxchar_mname: '{{maxchar_mname}}',
        minchar_mname: '{{minchar_mname}}',
        only_alphabet: '{{only_alphabet}}',
        empty_lname: '{{empty_lname}}',
        maxchar_lname: '{{maxchar_lname}}',
        minchar_lname: '{{minchar_lname}}',
        alphanumeric: '{{alphanumeric}}',
        empty_pass: '{{empty_pass}}',
        maxchar_pass: '{{maxchar_pass}}',
        minchar_pass: '{{minchar_pass}}',
        specialchar_pass: '{{specialchar_pass}}',
        alphabets_pass: '{{alphabets_pass}}',
        capital_alphabets_pass: '{{capital_alphabets_pass}}',
        small_alphabets_pass: '{{small_alphabets_pass}}',
        digit_pass: '{{digit_pass}}',
        empty_field: '{{empty_field}}',
        number_field: '{{number_field}}',
        positive_number: '{{positive_number}}',
        maxchar_field: '{{maxchar_field}}',
        minchar_field: '{{minchar_field}}',
        empty_email: '{{empty_email}}',
        validate_email: '{{validate_email}}',
        empty_country: '{{empty_country}}',
        maxchar_country: '{{maxchar_country}}',
        minchar_country: '{{minchar_country}}',
        empty_city: '{{empty_city}}',
        maxchar_city: '{{maxchar_city}}',
        minchar_city: '{{minchar_city}}',
        empty_state: '{{empty_state}}',
        maxchar_state: '{{maxchar_state}}',
        minchar_state: '{{minchar_state}}',
        empty_proname: '{{empty_proname}}',
        maxchar_proname: '{{maxchar_proname}}',
        minchar_proname: '{{minchar_proname}}',
        empty_catname: '{{empty_catname}}',
        maxchar_catname: '{{maxchar_catname}}',
        minchar_catname: '{{minchar_catname}}',
        empty_zip: '{{empty_zip}}',
        maxchar_zip: '{{maxchar_zip}}',
        minchar_zip: '{{minchar_zip}}',
        empty_username: '{{empty_username}}',
        maxchar_username: '{{maxchar_username}}',
        minchar_username: '{{minchar_username}}',
        invalid_date: '{{invalid_date}}',
        maxchar_sku: '{{maxchar_sku}}',
        minchar_sku: '{{minchar_sku}}',
        invalid_sku: '{{invalid_sku}}',
        empty_sku: '{{empty_sku}}',
        validate_range: '{{validate_range}}',
        empty_address: '{{empty_address}}',
        minchar_address: '{{minchar_address}}',
        maxchar_address: '{{maxchar_address}}',
        empty_company: '{{empty_company}}',
        minchar_company: '{{minchar_company}}',
        maxchar_company: '{{maxchar_company}}',
        invalid_phone: '{{invalid_phone}}',
        empty_phone: '{{empty_phone}}',
        minchar_phone: '{{minchar_phone}}',
        maxchar_phone: '{{maxchar_phone}}',
        empty_brand: '{{empty_brand}}',
        maxchar_brand: '{{maxchar_brand}}',
        minchar_brand: '{{minchar_brand}}',
        empty_shipment: '{{empty_shipment}}',
        maxchar_shipment: '{{maxchar_shipment}}',
        minchar_shipment: '{{minchar_shipment}}',
        invalid_ip: '{{invalid_ip}}',
        invalid_url: '{{invalid_url}}',
        empty_url: '{{empty_url}}',
        valid_amount: '{{valid_amount}}',
        valid_decimal: '{{valid_decimal}}',
        max_email: '{{max_email}}',
        specialchar_zip: '{{specialchar_zip}}',
        specialchar_sku: '{{specialchar_sku}}',
        max_url: '{{max_url}}',
        valid_percentage: '{{valid_percentage}}',
        between_percentage: '{{between_percentage}}',
        maxchar_size: '{{maxchar_size}}',
        specialchar_size: '{{specialchar_size}}',
        specialchar_upc: '{{specialchar_upc}}',
        maxchar_upc: '{{maxchar_upc}}',
        specialchar_ean: '{{specialchar_ean}}',
        maxchar_ean: '{{maxchar_ean}}',
        specialchar_bar: '{{specialchar_bar}}',
        maxchar_bar: '{{maxchar_bar}}',
        positive_amount: '{{positive_amount}}',
        maxchar_color: '{{maxchar_color}}',
        invalid_color: '{{invalid_color}}',
        specialchar: '{{specialchar}}',
        script: '{{script}}',
        style: '{{style}}',
        iframe: '{{iframe}}',
        not_image: '{{not_image}}',
        image_size: '{{image_size}}',
        html_tags: '{{html_tags}}',
        number_pos: '{{number_pos}}',
        invalid_separator: '{{invalid_separator}}'
    });
</script>
{{ footer }}", "kbmp_marketplace/seller_profile_custom_fields_add.twig", "");
    }
}
