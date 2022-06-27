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

/* kbmp_marketplace/seller_profile_custom_fields.twig */
class __TwigTemplate_6f59a0fd0c39219d60de396c2765ceffa182b5b56c3de13ef2914838f90cb713 extends \Twig\Template
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
            <div class=\"pull-right\">
                <a href=\"";
        // line 6
        echo ($context["add_url"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary\" data-original-title=\"";
        echo ($context["text_add"] ?? null);
        echo "\"><i class=\"fa fa-plus-circle\"></i></a>
            </div>    
            <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
                    <li><a href=\"";
            // line 11
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " 
            </ul>
        </div>
    </div>


    <div class=\"container-fluid\">\t\t
        <div class=\"row\">            
            <div class=\"col-lg-12 col-md-12\">
                <div class=\"panel panel-default\" id=\"fieldset_form\">\t\t\t
                    <div class=\"panel-heading\" style=\"display: inline-block; width: 100%;\"> 
                        ";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo " 
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 26
        echo ($context["tab_common"] ?? null);
        echo "

                        <div class=\"filter-table-responsive table-responsive\">
                            <table class=\"table filter\">
                                <thead>
                                    <tr>
                                        <th>
                                            ";
        // line 33
        if ((($context["sort"] ?? null) == "field.id_field")) {
            echo " 
                                                <a href=\"";
            // line 34
            echo ($context["sort_id_field"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["id"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 35
            echo " 
                                                <a href=\"";
            // line 36
            echo ($context["sort_id_field"] ?? null);
            echo "\">";
            echo ($context["id"] ?? null);
            echo "</a>
                                            ";
        }
        // line 37
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 40
        if ((($context["sort"] ?? null) == "field_lang.label")) {
            echo " 
                                                <a href=\"";
            // line 41
            echo ($context["sort_label"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["label"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 42
            echo " 
                                                <a href=\"";
            // line 43
            echo ($context["sort_label"] ?? null);
            echo "\">";
            echo ($context["label"] ?? null);
            echo "</a>
                                            ";
        }
        // line 44
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 47
        if ((($context["sort"] ?? null) == "field.type")) {
            echo " 
                                                <a href=\"";
            // line 48
            echo ($context["sort_type"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["input_type"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 49
            echo " 
                                                <a href=\"";
            // line 50
            echo ($context["sort_type"] ?? null);
            echo "\">";
            echo ($context["input_type"] ?? null);
            echo "</a>
                                            ";
        }
        // line 51
        echo " 
                                        </th>
                                        <th style=\"display: none\">
                                            ";
        // line 54
        if ((($context["sort"] ?? null) == "field.section")) {
            echo " 
                                                <a href=\"";
            // line 55
            echo ($context["sort_id_section"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["section"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 56
            echo " 
                                                <a href=\"";
            // line 57
            echo ($context["sort_id_section"] ?? null);
            echo "\">";
            echo ($context["section"] ?? null);
            echo "</a>
                                            ";
        }
        // line 58
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 61
        if ((($context["sort"] ?? null) == "field.position")) {
            echo " 
                                                <a href=\"";
            // line 62
            echo ($context["sort_id_position"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["position"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 63
            echo " 
                                                <a href=\"";
            // line 64
            echo ($context["sort_id_position"] ?? null);
            echo "\">";
            echo ($context["position"] ?? null);
            echo "</a>
                                            ";
        }
        // line 65
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 68
        if ((($context["sort"] ?? null) == "field.active")) {
            echo " 
                                                <a href=\"";
            // line 69
            echo ($context["sort_active"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["status"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 70
            echo " 
                                                <a href=\"";
            // line 71
            echo ($context["sort_active"] ?? null);
            echo "\">";
            echo ($context["status"] ?? null);
            echo "</a>
                                            ";
        }
        // line 72
        echo " 
                                        </th>
                                        <th>
                                            ";
        // line 75
        if ((($context["sort"] ?? null) == "field.date_upd")) {
            echo " 
                                                <a href=\"";
            // line 76
            echo ($context["sort_date_upd"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["last_update"] ?? null);
            echo "</a>
                                            ";
        } else {
            // line 77
            echo " 
                                                <a href=\"";
            // line 78
            echo ($context["sort_date_upd"] ?? null);
            echo "\">";
            echo ($context["last_update"] ?? null);
            echo "</a>
                                            ";
        }
        // line 79
        echo " 
                                        </th>
                                    </tr>
                                    <tr>  
                                        <th style=\"width: 30px\">
                                            <input type=\"text\" class=\"form-control\" name=\"id_field\" value=\"";
        // line 84
        if ((isset($context["id_field_filter"]) || array_key_exists("id_field_filter", $context))) {
            echo ($context["id_field_filter"] ?? null);
        }
        echo "\"/>
                                        </th>
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"label\" value=\"";
        // line 87
        if ((isset($context["label_filter"]) || array_key_exists("label_filter", $context))) {
            echo ($context["label_filter"] ?? null);
        }
        echo "\"/>
                                        </th>
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"type\" value=\"";
        // line 90
        if ((isset($context["type_filter"]) || array_key_exists("type_filter", $context))) {
            echo ($context["type_filter"] ?? null);
        }
        echo "\"/>                                    
                                        </th>
                                        <th style=\"display: none\">
                                            <select class=\"fixed-width-small form-control\" name=\"id_section\">\t
                                                <option value=\"\"></option>
                                                <option value=\"1\" ";
        // line 95
        echo (((($context["id_section_filter"] ?? null) == 1)) ? ("selected") : (""));
        echo ">";
        echo ($context["text_general"] ?? null);
        echo "</option>
                                                <option value=\"2\" ";
        // line 96
        echo (((($context["id_section_filter"] ?? null) == 2)) ? ("selected") : (""));
        echo ">";
        echo ($context["text_meta_info"] ?? null);
        echo "</option>
                                                <option value=\"3\" ";
        // line 97
        echo (((($context["id_section_filter"] ?? null) == 3)) ? ("selected") : (""));
        echo ">";
        echo ($context["text_policy"] ?? null);
        echo "</option>
                                                <option value=\"4\" ";
        // line 98
        echo (((($context["id_section_filter"] ?? null) == 4)) ? ("selected") : (""));
        echo ">";
        echo ($context["text_payout_info"] ?? null);
        echo "</option>
                                            </select>
                                        </th>
                                        <th></th>
                                        <th>
                                            <select class=\"form-control\" name=\"active\">
                                                <option value=\"\" selected=\"selected\"></option>
                                                <option value=\"1\" ";
        // line 105
        if ((($context["active_filter"] ?? null) == "1")) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_active"] ?? null);
        echo "</option>
                                                <option value=\"0\" ";
        // line 106
        if ((($context["active_filter"] ?? null) == "0")) {
            echo "selected";
        }
        echo ">";
        echo ($context["text_inactive"] ?? null);
        echo "</option>
                                            </select> 
                                        </th>
                                        <th style=\"width: 155px\">
                                            <div class=\"input-group date\" style=\"margin-bottom:10px;\">

                                                ";
        // line 112
        $context["from"] = "";
        // line 113
        echo "                                                ";
        $context["to"] = "";
        // line 114
        echo "                                                ";
        if ((isset($context["from_date_filter"]) || array_key_exists("from_date_filter", $context))) {
            echo " 
                                                    ";
            // line 115
            $context["from"] = ($context["from_date_filter"] ?? null);
            // line 116
            echo "                                                ";
        }
        echo " 

                                                ";
        // line 118
        if ((isset($context["to_date_filter"]) || array_key_exists("to_date_filter", $context))) {
            echo " 
                                                    ";
            // line 119
            $context["to"] = ($context["to_date_filter"] ?? null);
            // line 120
            echo "                                                ";
        }
        echo " 


                                                <input type=\"text\" name=\"from_date\" value=\"";
        // line 123
        echo ($context["from"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_from_date"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-from-date\" class=\"datepicker hasDatepicker form-control\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                                </span>
                                            </div>
                                            <div class=\"input-group date\">
                                                <input type=\"text\" name=\"to_date\"value=\"";
        // line 129
        echo ($context["to"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_to_date"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-to-date\" class=\"datepicker hasDatepicker form-control\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                                </span>
                                            </div>
                                        </th>
                                        <th style=\"width: 105px\" class=\"text-right\">
                                            <button type=\"button\" id=\"button-reset\" name=\"submitFilter\" class=\"btn btn-warning\" style=\"margin-bottom: 10px;\" onclick=\"window.location.href = 'index.php?route=kbmp_marketplace/seller_profile_custom_fields&user_token=";
        // line 136
        echo ($context["token"] ?? null);
        echo "'\">
                                                <i class=\"fa fa-refresh\"></i> ";
        // line 137
        echo ($context["text_reset"] ?? null);
        echo " 
                                            </button>
                                            <br>
                                            <button type=\"submit\" id=\"button-filter\" name=\"submitFilter\" class=\"btn btn-primary\">
                                                <i class=\"fa fa-search\"></i> ";
        // line 141
        echo ($context["text_filter"] ?? null);
        echo " 
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 147
        if (((isset($context["custom_field"]) || array_key_exists("custom_field", $context)) &&  !twig_test_empty(($context["custom_field"] ?? null)))) {
            // line 148
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_field"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field_data"]) {
                echo " 

                                            <tr>
                                                <td>";
                // line 151
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["custom_field_data"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["id_field"] ?? null) : null);
                echo "</td>
                                                <td>";
                // line 152
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["custom_field_data"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["label"] ?? null) : null);
                echo "</td>
                                                <td>";
                // line 153
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["custom_field_data"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["type"] ?? null) : null);
                echo "</td>
                                                <td style=\"display: none\">

                                                    ";
                // line 156
                $context["id_section"] = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["custom_field_data"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["id_section"] ?? null) : null);
                // line 157
                echo "                                                    ";
                if ((($context["id_section"] ?? null) == 1)) {
                    // line 158
                    echo "                                                        ";
                    echo ($context["text_general"] ?? null);
                    echo "
                                                    ";
                } elseif ((                // line 159
($context["id_section"] ?? null) == 2)) {
                    // line 160
                    echo "                                                        ";
                    echo ($context["text_meta_info"] ?? null);
                    echo "
                                                    ";
                } elseif ((                // line 161
($context["id_section"] ?? null) == 3)) {
                    // line 162
                    echo "                                                        ";
                    echo ($context["text_policy"] ?? null);
                    echo "
                                                    ";
                } elseif ((                // line 163
($context["id_section"] ?? null) == 4)) {
                    // line 164
                    echo "                                                        ";
                    echo ($context["text_payout_info"] ?? null);
                    echo "
                                                    ";
                }
                // line 165
                echo " 

                                                </td>
                                                <td>";
                // line 168
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["custom_field_data"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["position"] ?? null) : null);
                echo "</td>
                                                
                                                <td style=\"text-align: center;\">
                                                    ";
                // line 171
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field_data"], "active", [], "array", true, true, false, 171) && ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["custom_field_data"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["active"] ?? null) : null) == "1"))) {
                    // line 172
                    echo "                                                        <i class=\"fa fa-check text-success\" title=\"";
                    echo ($context["text_active"] ?? null);
                    echo "\"></i> 
                                                    ";
                } else {
                    // line 173
                    echo " 
                                                        <i class=\"fa fa-ban text-danger\" title=\"";
                    // line 174
                    echo ($context["text_inactive"] ?? null);
                    echo "\"></i> 
                                                    ";
                }
                // line 176
                echo "
                                                </td>
                                                <td>";
                // line 178
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["custom_field_data"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["date_upd"] ?? null) : null);
                echo "</td>
                                                <td class=\"btn_action_custom\" style=\"text-align: right\">
                                                    <a href=\"";
                // line 180
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["custom_field_data"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                                    <a href=\"";
                // line 181
                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["custom_field_data"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["delete"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>

                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "                                    ";
        } else {
            echo " 

                                        <tr>
                                            <td colspan=\"9\">";
            // line 189
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                        </tr>
                                    ";
        }
        // line 192
        echo "
                                </tbody>
                            </table>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 197
        echo ($context["pagination"] ?? null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 198
        echo ($context["results"] ?? null);
        echo "</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--container fluid ends-->
<script type=\"text/javascript\">
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
        var url = 'index.php?route=kbmp_marketplace/seller_profile_custom_fields&user_token=";
        // line 219
        echo ($context["token"] ?? null);
        echo "';

        var id_field = \$('input[name=\\'id_field\\']').val().trim();

        if (id_field) {
            url += '&id_field=' + encodeURIComponent(id_field);
        }

        var label = \$('input[name=\\'label\\']').val().trim();

        if (label) {
            url += '&label=' + encodeURIComponent(label);
        }

        var type = \$('input[name=\\'type\\']').val().trim();

        if (type) {
            url += '&type=' + encodeURIComponent(type);
        }

        var from_date = \$('input[name=\\'from_date\\']').val().trim();

        if (from_date) {
            url += '&from_date=' + encodeURIComponent(from_date);
        }
        var to_date = \$('input[name=\\'to_date\\']').val().trim();

        if (to_date) {
            url += '&to_date=' + encodeURIComponent(to_date);
        }


        var id_section = \$('select[name=\\'id_section\\']').val().trim();

        if (id_section) {
            url += '&id_section=' + encodeURIComponent(id_section);
        }

        var active = \$('select[name=\\'active\\']').val().trim();

        if (active) {
            url += '&active=' + encodeURIComponent(active);
        }

        location = url;
    });
</script>
";
        // line 266
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "kbmp_marketplace/seller_profile_custom_fields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  662 => 266,  612 => 219,  588 => 198,  584 => 197,  577 => 192,  571 => 189,  564 => 186,  551 => 181,  545 => 180,  540 => 178,  536 => 176,  531 => 174,  528 => 173,  522 => 172,  520 => 171,  514 => 168,  509 => 165,  503 => 164,  501 => 163,  496 => 162,  494 => 161,  489 => 160,  487 => 159,  482 => 158,  479 => 157,  477 => 156,  471 => 153,  467 => 152,  463 => 151,  454 => 148,  452 => 147,  443 => 141,  436 => 137,  432 => 136,  420 => 129,  409 => 123,  402 => 120,  400 => 119,  396 => 118,  390 => 116,  388 => 115,  383 => 114,  380 => 113,  378 => 112,  365 => 106,  357 => 105,  345 => 98,  339 => 97,  333 => 96,  327 => 95,  317 => 90,  309 => 87,  301 => 84,  294 => 79,  287 => 78,  284 => 77,  275 => 76,  271 => 75,  266 => 72,  259 => 71,  256 => 70,  247 => 69,  243 => 68,  238 => 65,  231 => 64,  228 => 63,  219 => 62,  215 => 61,  210 => 58,  203 => 57,  200 => 56,  191 => 55,  187 => 54,  182 => 51,  175 => 50,  172 => 49,  163 => 48,  159 => 47,  154 => 44,  147 => 43,  144 => 42,  135 => 41,  131 => 40,  126 => 37,  119 => 36,  116 => 35,  107 => 34,  103 => 33,  93 => 26,  87 => 23,  74 => 12,  64 => 11,  58 => 10,  53 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }} 
<div id=\"content\" class=\"bootstrap\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">      
            <div class=\"pull-right\">
                <a href=\"{{ add_url }}\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary\" data-original-title=\"{{ text_add }}\"><i class=\"fa fa-plus-circle\"></i></a>
            </div>    
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
                <div class=\"panel panel-default\" id=\"fieldset_form\">\t\t\t
                    <div class=\"panel-heading\" style=\"display: inline-block; width: 100%;\"> 
                        {{ heading_title }} 
                    </div>
                    <div class=\"panel-body\">
                        {{tab_common}}

                        <div class=\"filter-table-responsive table-responsive\">
                            <table class=\"table filter\">
                                <thead>
                                    <tr>
                                        <th>
                                            {% if (sort == 'field.id_field') %} 
                                                <a href=\"{{ sort_id_field }}\" class=\"{{order}}\">{{ id }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_id_field }}\">{{ id }}</a>
                                            {% endif %} 
                                        </th>
                                        <th>
                                            {% if (sort == 'field_lang.label') %} 
                                                <a href=\"{{ sort_label }}\" class=\"{{order}}\">{{ label }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_label }}\">{{ label }}</a>
                                            {% endif %} 
                                        </th>
                                        <th>
                                            {% if (sort == 'field.type') %} 
                                                <a href=\"{{ sort_type }}\" class=\"{{order}}\">{{ input_type }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_type }}\">{{ input_type }}</a>
                                            {% endif %} 
                                        </th>
                                        <th style=\"display: none\">
                                            {% if (sort == 'field.section') %} 
                                                <a href=\"{{ sort_id_section }}\" class=\"{{order}}\">{{ section }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_id_section }}\">{{ section }}</a>
                                            {% endif %} 
                                        </th>
                                        <th>
                                            {% if (sort == 'field.position') %} 
                                                <a href=\"{{ sort_id_position }}\" class=\"{{order}}\">{{ position }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_id_position }}\">{{ position }}</a>
                                            {% endif %} 
                                        </th>
                                        <th>
                                            {% if (sort == 'field.active') %} 
                                                <a href=\"{{ sort_active }}\" class=\"{{order}}\">{{ status }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_active }}\">{{ status }}</a>
                                            {% endif %} 
                                        </th>
                                        <th>
                                            {% if (sort == 'field.date_upd') %} 
                                                <a href=\"{{ sort_date_upd }}\" class=\"{{order}}\">{{ last_update }}</a>
                                            {% else %} 
                                                <a href=\"{{ sort_date_upd }}\">{{ last_update }}</a>
                                            {% endif %} 
                                        </th>
                                    </tr>
                                    <tr>  
                                        <th style=\"width: 30px\">
                                            <input type=\"text\" class=\"form-control\" name=\"id_field\" value=\"{% if (id_field_filter is defined) %}{{ id_field_filter }}{% endif %}\"/>
                                        </th>
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"label\" value=\"{% if (label_filter is defined) %}{{ label_filter }}{% endif %}\"/>
                                        </th>
                                        <th>
                                            <input type=\"text\" class=\"form-control\" name=\"type\" value=\"{% if (type_filter is defined) %}{{ type_filter }}{% endif %}\"/>                                    
                                        </th>
                                        <th style=\"display: none\">
                                            <select class=\"fixed-width-small form-control\" name=\"id_section\">\t
                                                <option value=\"\"></option>
                                                <option value=\"1\" {{ id_section_filter == 1 ? 'selected' : '' }}>{{ text_general }}</option>
                                                <option value=\"2\" {{ id_section_filter == 2 ? 'selected' : '' }}>{{ text_meta_info }}</option>
                                                <option value=\"3\" {{ id_section_filter == 3 ? 'selected' : '' }}>{{ text_policy }}</option>
                                                <option value=\"4\" {{ id_section_filter == 4 ? 'selected' : '' }}>{{ text_payout_info }}</option>
                                            </select>
                                        </th>
                                        <th></th>
                                        <th>
                                            <select class=\"form-control\" name=\"active\">
                                                <option value=\"\" selected=\"selected\"></option>
                                                <option value=\"1\" {% if (active_filter == '1') %}selected{% endif %}>{{ text_active }}</option>
                                                <option value=\"0\" {% if (active_filter == '0') %}selected{% endif %}>{{ text_inactive }}</option>
                                            </select> 
                                        </th>
                                        <th style=\"width: 155px\">
                                            <div class=\"input-group date\" style=\"margin-bottom:10px;\">

                                                {% set from = '' %}
                                                {% set to = '' %}
                                                {% if (from_date_filter is defined) %} 
                                                    {% set from = from_date_filter %}
                                                {% endif %} 

                                                {% if (to_date_filter is defined) %} 
                                                    {% set to = to_date_filter %}
                                                {% endif %} 


                                                <input type=\"text\" name=\"from_date\" value=\"{{ from }}\" placeholder=\"{{ text_from_date }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-from-date\" class=\"datepicker hasDatepicker form-control\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                                </span>
                                            </div>
                                            <div class=\"input-group date\">
                                                <input type=\"text\" name=\"to_date\"value=\"{{ to }}\" placeholder=\"{{ text_to_date }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-to-date\" class=\"datepicker hasDatepicker form-control\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                                </span>
                                            </div>
                                        </th>
                                        <th style=\"width: 105px\" class=\"text-right\">
                                            <button type=\"button\" id=\"button-reset\" name=\"submitFilter\" class=\"btn btn-warning\" style=\"margin-bottom: 10px;\" onclick=\"window.location.href = 'index.php?route=kbmp_marketplace/seller_profile_custom_fields&user_token={{ token }}'\">
                                                <i class=\"fa fa-refresh\"></i> {{ text_reset }} 
                                            </button>
                                            <br>
                                            <button type=\"submit\" id=\"button-filter\" name=\"submitFilter\" class=\"btn btn-primary\">
                                                <i class=\"fa fa-search\"></i> {{ text_filter }} 
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% if (custom_field is defined and custom_field is not empty) %}
                                        {% for custom_field_data in custom_field %} 

                                            <tr>
                                                <td>{{ custom_field_data['id_field'] }}</td>
                                                <td>{{ custom_field_data['label'] }}</td>
                                                <td>{{ custom_field_data['type'] }}</td>
                                                <td style=\"display: none\">

                                                    {% set id_section = custom_field_data['id_section'] %}
                                                    {% if (id_section == 1) %}
                                                        {{ text_general }}
                                                    {% elseif (id_section == 2) %}
                                                        {{ text_meta_info }}
                                                    {% elseif (id_section == 3) %}
                                                        {{ text_policy }}
                                                    {% elseif (id_section == 4) %}
                                                        {{ text_payout_info }}
                                                    {% endif %} 

                                                </td>
                                                <td>{{ custom_field_data['position'] }}</td>
                                                
                                                <td style=\"text-align: center;\">
                                                    {% if (custom_field_data['active'] is defined and custom_field_data['active'] == \"1\") %}
                                                        <i class=\"fa fa-check text-success\" title=\"{{ text_active }}\"></i> 
                                                    {% else %} 
                                                        <i class=\"fa fa-ban text-danger\" title=\"{{ text_inactive }}\"></i> 
                                                    {% endif %}

                                                </td>
                                                <td>{{ custom_field_data['date_upd'] }}</td>
                                                <td class=\"btn_action_custom\" style=\"text-align: right\">
                                                    <a href=\"{{ custom_field_data['edit'] }}\" data-toggle=\"tooltip\" title=\"{{ text_edit }}\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                                                    <a href=\"{{ custom_field_data['delete'] }}\" data-toggle=\"tooltip\" title=\"{{ text_delete }}\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>

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
                            <div class=\"col-sm-6 text-left\">{{pagination}}</div>
                            <div class=\"col-sm-6 text-right\">{{results}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--container fluid ends-->
<script type=\"text/javascript\">
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
        var url = 'index.php?route=kbmp_marketplace/seller_profile_custom_fields&user_token={{token}}';

        var id_field = \$('input[name=\\'id_field\\']').val().trim();

        if (id_field) {
            url += '&id_field=' + encodeURIComponent(id_field);
        }

        var label = \$('input[name=\\'label\\']').val().trim();

        if (label) {
            url += '&label=' + encodeURIComponent(label);
        }

        var type = \$('input[name=\\'type\\']').val().trim();

        if (type) {
            url += '&type=' + encodeURIComponent(type);
        }

        var from_date = \$('input[name=\\'from_date\\']').val().trim();

        if (from_date) {
            url += '&from_date=' + encodeURIComponent(from_date);
        }
        var to_date = \$('input[name=\\'to_date\\']').val().trim();

        if (to_date) {
            url += '&to_date=' + encodeURIComponent(to_date);
        }


        var id_section = \$('select[name=\\'id_section\\']').val().trim();

        if (id_section) {
            url += '&id_section=' + encodeURIComponent(id_section);
        }

        var active = \$('select[name=\\'active\\']').val().trim();

        if (active) {
            url += '&active=' + encodeURIComponent(active);
        }

        location = url;
    });
</script>
{{ footer }}", "kbmp_marketplace/seller_profile_custom_fields.twig", "");
    }
}
