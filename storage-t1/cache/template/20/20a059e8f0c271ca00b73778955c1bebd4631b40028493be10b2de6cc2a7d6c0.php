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

/* customer/customer_form.twig */
class __TwigTemplate_5741f97cad3b0eea64b0f85a553366500e89bd658e7a86bd75471426480bdef5 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-customer\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
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
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-affiliate\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_affiliate"] ?? null);
        echo "</a></li>

                    ";
        // line 31
        if (($context["marketplace_enable"] ?? null)) {
            // line 32
            echo "                    <li><a href=\"#seller_register\" data-toggle=\"tab\">";
            echo ($context["seller"] ?? null);
            echo "</a></li>
                    ";
        }
        // line 34
        echo "                
            ";
        // line 35
        if (($context["customer_id"] ?? null)) {
            // line 36
            echo "            <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            echo ($context["tab_history"] ?? null);
            echo "</a></li>
            <li><a href=\"#tab-transaction\" data-toggle=\"tab\">";
            // line 37
            echo ($context["tab_transaction"] ?? null);
            echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
            // line 38
            echo ($context["tab_reward"] ?? null);
            echo "</a></li>
            <li><a href=\"#tab-ip\" data-toggle=\"tab\">";
            // line 39
            echo ($context["tab_ip"] ?? null);
            echo "</a></li>

                    ";
            // line 41
            if ((($context["is_seller"] ?? null) && (($context["marketplace_enable"] ?? null) == 1))) {
                echo " 
                        <li><a href=\"#tab-seller\" data-toggle=\"tab\">";
                // line 42
                echo ($context["tab_seller"] ?? null);
                echo "</a></li>
                    ";
            }
            // line 44
            echo "                
            ";
        }
        // line 46
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"address\">
                    <li class=\"active\"><a href=\"#tab-customer\" data-toggle=\"tab\">";
        // line 52
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                    ";
        // line 53
        $context["address_row"] = 1;
        // line 54
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 55
            echo "                    <li><a href=\"#tab-address";
            echo ($context["address_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('#address a:first').tab('show'); \$('#address a[href=\\'#tab-address";
            echo ($context["address_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-address";
            echo ($context["address_row"] ?? null);
            echo "').remove();\"></i> ";
            echo ($context["tab_address"] ?? null);
            echo " ";
            echo ($context["address_row"] ?? null);
            echo "</a></li>
                    ";
            // line 56
            $context["address_row"] = (($context["address_row"] ?? null) + 1);
            // line 57
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    <li id=\"address-add\"><a onclick=\"addAddress();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["button_address_add"] ?? null);
        echo "</a></li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-customer\">
                      <fieldset>
                        <legend>";
        // line 65
        echo ($context["text_account"] ?? null);
        echo "</legend>
                        <div class=\"form-group hidden\">
                          <label class=\"col-sm-2 control-label\" for=\"input-customer-group\">";
        // line 67
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                              ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 71
            echo "                              ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 71) == ($context["customer_group_id"] ?? null))) {
                // line 72
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 72);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 72);
                echo "</option>
                              ";
            } else {
                // line 74
                echo "                              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 74);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 74);
                echo "</option>
                              ";
            }
            // line 76
            echo "                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 81
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"";
        // line 83
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                            ";
        // line 84
        if (($context["error_firstname"] ?? null)) {
            // line 85
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
                            ";
        }
        // line 86
        echo "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 89
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"lastname\" value=\"";
        // line 91
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                            ";
        // line 92
        if (($context["error_lastname"] ?? null)) {
            // line 93
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
                            ";
        }
        // line 94
        echo "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 97
        echo ($context["entry_email"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 99
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                            ";
        // line 100
        if (($context["error_email"] ?? null)) {
            // line 101
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                            ";
        }
        // line 102
        echo "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 105
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"telephone\" value=\"";
        // line 107
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                            ";
        // line 108
        if (($context["error_telephone"] ?? null)) {
            // line 109
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                            ";
        }
        // line 110
        echo "</div>
                        </div>
                        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 113
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 113) == "account")) {
                // line 114
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 114) == "select")) {
                    // line 115
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 115);
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 116
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 116);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"custom_field[";
                    // line 118
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 118);
                    echo "]\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 118);
                    echo "\" class=\"form-control\">
                              <option value=\"\">";
                    // line 119
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                              ";
                    // line 120
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 120));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 121
                        echo "                              ";
                        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 121) == (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["account_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121)] ?? null) : null)))) {
                            // line 122
                            echo "                              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 122);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 122);
                            echo "</option>
                              ";
                        } else {
                            // line 124
                            echo "                              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 124);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 124);
                            echo "</option>
                              ";
                        }
                        // line 126
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    echo "                            </select>
                            ";
                    // line 128
                    if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128)] ?? null) : null)) {
                        // line 129
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 130
                    echo "</div>
                        </div>
                        ";
                }
                // line 133
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 133) == "radio")) {
                    // line 134
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 134);
                    echo "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 135);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div> ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 137));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 138
                        echo "                              <div class=\"radio\"> ";
                        if (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 138) == (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["account_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null)))) {
                            // line 139
                            echo "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 140
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 140);
                            echo "\" checked=\"checked\" />
                                  ";
                            // line 141
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 141);
                            echo "</label>
                                ";
                        } else {
                            // line 143
                            echo "                                <label>
                                  <input type=\"radio\" name=\"custom_field[";
                            // line 144
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 144);
                            echo "\" />
                                  ";
                            // line 145
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 145);
                            echo "</label>
                                ";
                        }
                        // line 146
                        echo "</div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 147
                    echo " </div>
                            ";
                    // line 148
                    if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["error_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null)) {
                        // line 149
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 150
                    echo "</div>
                        </div>
                        ";
                }
                // line 153
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 153) == "checkbox")) {
                    // line 154
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 154);
                    echo "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 155);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div> ";
                    // line 157
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 157));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 158
                        echo "                              <div class=\"checkbox\">";
                        if (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 158), (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["account_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158)] ?? null) : null)))) {
                            // line 159
                            echo "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 160
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 160);
                            echo "\" checked=\"checked\" />
                                  ";
                            // line 161
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 161);
                            echo "</label>
                                ";
                        } else {
                            // line 163
                            echo "                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[";
                            // line 164
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 164);
                            echo "\" />
                                  ";
                            // line 165
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 165);
                            echo "</label>
                                ";
                        }
                        // line 166
                        echo "</div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 167
                    echo "</div>
                            ";
                    // line 168
                    if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168)] ?? null) : null)) {
                        // line 169
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 170
                    echo "</div>
                        </div>
                        ";
                }
                // line 173
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 173) == "text")) {
                    // line 174
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 174);
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 175
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 175);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                    echo "]\" value=\"";
                    echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["account_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)) ? ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 177)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 177);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                    echo "\" class=\"form-control\" />
                            ";
                    // line 178
                    if ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["error_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178)] ?? null) : null)) {
                        // line 179
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 180
                    echo "</div>
                        </div>
                        ";
                }
                // line 183
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 183) == "textarea")) {
                    // line 184
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 184);
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 185);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"custom_field[";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 187);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["account_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187)] ?? null) : null)) ? ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["account_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 187)));
                    echo "</textarea>
                            ";
                    // line 188
                    if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["error_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null)) {
                        // line 189
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 190
                    echo "</div>
                        </div>
                        ";
                }
                // line 193
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 193) == "file")) {
                    // line 194
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 194);
                    echo "\">
                          <label class=\"col-sm-2 control-label\">";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 195);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <button type=\"button\" id=\"button-custom-field";
                    // line 197
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                            <input type=\"hidden\" name=\"custom_field[";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                    echo "]\" value=\"";
                    echo (((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["account_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null)) ? ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                    echo "\" />
                            ";
                    // line 199
                    if ((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["error_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199)] ?? null) : null)) {
                        // line 200
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 201
                    echo "</div>
                        </div>
                        ";
                }
                // line 204
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 204) == "date")) {
                    // line 205
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 205);
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 206);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group date\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                    echo "]\" value=\"";
                    echo (((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["account_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209)] ?? null) : null)) ? ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["account_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 209)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 209);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                    echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            ";
                    // line 213
                    if ((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["error_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213)] ?? null) : null)) {
                        // line 214
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 215
                    echo "</div>
                        </div>
                        ";
                }
                // line 218
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 218) == "time")) {
                    // line 219
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 219);
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 220
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 220);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group time\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 223
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223);
                    echo "]\" value=\"";
                    echo (((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["account_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223)] ?? null) : null)) ? ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["account_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 223)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 223);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223);
                    echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            ";
                    // line 227
                    if ((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["error_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227)] ?? null) : null)) {
                        // line 228
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 229
                    echo "</div>
                        </div>
                        ";
                }
                // line 232
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 232) == "datetime")) {
                    // line 233
                    echo "                        <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 233);
                    echo "\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 234
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 234);
                    echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group datetime\">
                              <input type=\"text\" name=\"custom_field[";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                    echo "]\" value=\"";
                    echo (((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["account_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237)] ?? null) : null)) ? ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["account_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 237)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 237);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                    echo "\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            ";
                    // line 241
                    if ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["error_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 241)] ?? null) : null)) {
                        // line 242
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 243
                    echo "</div>
                        </div>
                        ";
                }
                // line 246
                echo "                        ";
            }
            // line 247
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "                      </fieldset>
                      <fieldset>
                        <legend>";
        // line 250
        echo ($context["text_password"] ?? null);
        echo "</legend>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 252
        echo ($context["entry_password"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"password\" value=\"";
        // line 254
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" autocomplete=\"off\" />
                            ";
        // line 255
        if (($context["error_password"] ?? null)) {
            // line 256
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                            ";
        }
        // line 257
        echo "</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 260
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"confirm\" value=\"";
        // line 262
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" autocomplete=\"off\" id=\"input-confirm\" class=\"form-control\" />
                            ";
        // line 263
        if (($context["error_confirm"] ?? null)) {
            // line 264
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
                            ";
        }
        // line 265
        echo "</div>
                        </div>
                      </fieldset>
                      <fieldset>
                        <legend>";
        // line 269
        echo ($context["text_other"] ?? null);
        echo "</legend>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-newsletter\">";
        // line 271
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"newsletter\" id=\"input-newsletter\" class=\"form-control\">
                              ";
        // line 274
        if (($context["newsletter"] ?? null)) {
            // line 275
            echo "                              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                              <option value=\"0\">";
            // line 276
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                              ";
        } else {
            // line 278
            echo "                              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 279
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                              ";
        }
        // line 281
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 285
        echo ($context["entry_status"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                              ";
        // line 288
        if (($context["status"] ?? null)) {
            // line 289
            echo "                              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                              <option value=\"0\">";
            // line 290
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                              ";
        } else {
            // line 292
            echo "                              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 293
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                              ";
        }
        // line 295
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-safe\"><span data-toggle=\"tooltip\" title=\"";
        // line 299
        echo ($context["help_safe"] ?? null);
        echo "\">";
        echo ($context["entry_safe"] ?? null);
        echo "</span></label>
                          <div class=\"col-sm-10\">
                            <select name=\"safe\" id=\"input-safe\" class=\"form-control\">
                              ";
        // line 302
        if (($context["safe"] ?? null)) {
            // line 303
            echo "                              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                              <option value=\"0\">";
            // line 304
            echo ($context["text_no"] ?? null);
            echo "</option>
                              ";
        } else {
            // line 306
            echo "                              <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                              <option value=\"0\" selected=\"selected\">";
            // line 307
            echo ($context["text_no"] ?? null);
            echo "</option>
                              ";
        }
        // line 309
        echo "                            </select>
                          </div>
                        </div>
                      </fieldset>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- дополнительные поля для продавца -->
\t\t\t\t\t\t";
        // line 316
        if (($context["sellers_fields"] ?? null)) {
            // line 317
            echo "\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
            // line 318
            echo ($context["text_sellerfields"] ?? null);
            echo "</legend>
\t\t\t\t\t\t\t\t";
            // line 319
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sellers_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 320
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "active", [], "any", false, false, false, 320)) {
                    // line 321
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 321) == "text")) {
                        // line 322
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group seller-field seller-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "id_field", [], "any", false, false, false, 322);
                        if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 322)) {
                            echo " required";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-seller-field";
                        // line 323
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "id_field", [], "any", false, false, false, 323);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "label", [], "any", false, false, false, 323);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"seller_field[";
                        // line 325
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "id_field", [], "any", false, false, false, 325);
                        echo "]\" value=\"";
                        echo (((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["seller_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "id_field", [], "any", false, false, false, 325)] ?? null) : null)) ? ((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["seller_field"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "id_field", [], "any", false, false, false, 325)] ?? null) : null)) : (""));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "label", [], "any", false, false, false, 325);
                        echo "\" id=\"input-seller-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "id_field", [], "any", false, false, false, 325);
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 326
                        if ((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["error_seller_field"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["custom_field"], "id_field", [], "any", false, false, false, 326)] ?? null) : null)) {
                            // line 327
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                            echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["error_seller_field"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["custom_field"], "id_field", [], "any", false, false, false, 327)] ?? null) : null);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 328
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 331
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 331) == "file")) {
                        // line 332
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group seller-field seller-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "id_field", [], "any", false, false, false, 332);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t  <label class=\"col-sm-2 control-label\">";
                        // line 333
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "label", [], "any", false, false, false, 333);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-seller-field";
                        // line 335
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "id_field", [], "any", false, false, false, 335);
                        echo "\" data-loading-text=\"";
                        echo ($context["text_loading"] ?? null);
                        echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"seller_field[";
                        // line 336
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "id_field", [], "any", false, false, false, 336);
                        echo "]\" value=\"";
                        echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["seller_field"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "id_field", [], "any", false, false, false, 336)] ?? null) : null);
                        echo "\" id=\"input-seller-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "id_field", [], "any", false, false, false, 336);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 337
                        if ((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["error_seller_field"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "id_field", [], "any", false, false, false, 337)] ?? null) : null)) {
                            // line 338
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                            echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["error_seller_field"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "id_field", [], "any", false, false, false, 338)] ?? null) : null);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 339
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 342
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 343
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 344
            echo "\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t";
        }
        // line 346
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
                    </div>
                    ";
        // line 349
        $context["address_row"] = 1;
        // line 350
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 351
            echo "                    <div class=\"tab-pane\" id=\"tab-address";
            echo ($context["address_row"] ?? null);
            echo "\">
                      <input type=\"hidden\" name=\"address[";
            // line 352
            echo ($context["address_row"] ?? null);
            echo "][address_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 352);
            echo "\" />
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-firstname";
            // line 354
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_firstname"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 356
            echo ($context["address_row"] ?? null);
            echo "][firstname]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 356);
            echo "\" placeholder=\"";
            echo ($context["entry_firstname"] ?? null);
            echo "\" id=\"input-firstname";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\" />
                          ";
            // line 357
            if (twig_get_attribute($this->env, $this->source, (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["error_address"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[($context["address_row"] ?? null)] ?? null) : null), "firstname", [], "any", false, false, false, 357)) {
                // line 358
                echo "                          <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["error_address"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[($context["address_row"] ?? null)] ?? null) : null), "firstname", [], "any", false, false, false, 358);
                echo "</div>
                          ";
            }
            // line 359
            echo "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-lastname";
            // line 362
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_lastname"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 364
            echo ($context["address_row"] ?? null);
            echo "][lastname]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 364);
            echo "\" placeholder=\"";
            echo ($context["entry_lastname"] ?? null);
            echo "\" id=\"input-lastname";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\" />
                          ";
            // line 365
            if (twig_get_attribute($this->env, $this->source, (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["error_address"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[($context["address_row"] ?? null)] ?? null) : null), "lastname", [], "any", false, false, false, 365)) {
                // line 366
                echo "                          <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["error_address"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[($context["address_row"] ?? null)] ?? null) : null), "lastname", [], "any", false, false, false, 366);
                echo "</div>
                          ";
            }
            // line 367
            echo "</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-company";
            // line 370
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_company"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 372
            echo ($context["address_row"] ?? null);
            echo "][company]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 372);
            echo "\" placeholder=\"";
            echo ($context["entry_company"] ?? null);
            echo "\" id=\"input-company";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address-1";
            // line 376
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_address_1"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 378
            echo ($context["address_row"] ?? null);
            echo "][address_1]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 378);
            echo "\" placeholder=\"";
            echo ($context["entry_address_1"] ?? null);
            echo "\" id=\"input-address-1";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\" />
                          ";
            // line 379
            if (twig_get_attribute($this->env, $this->source, (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["error_address"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[($context["address_row"] ?? null)] ?? null) : null), "address_1", [], "any", false, false, false, 379)) {
                // line 380
                echo "                          <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["error_address"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e[($context["address_row"] ?? null)] ?? null) : null), "address_1", [], "any", false, false, false, 380);
                echo "</div>
                          ";
            }
            // line 381
            echo "</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address-2";
            // line 384
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_address_2"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 386
            echo ($context["address_row"] ?? null);
            echo "][address_2]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_2", [], "any", false, false, false, 386);
            echo "\" placeholder=\"";
            echo ($context["entry_address_2"] ?? null);
            echo "\" id=\"input-address-2";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-city";
            // line 390
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_city"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 392
            echo ($context["address_row"] ?? null);
            echo "][city]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 392);
            echo "\" placeholder=\"";
            echo ($context["entry_city"] ?? null);
            echo "\" id=\"input-city";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\" />
                          ";
            // line 393
            if (twig_get_attribute($this->env, $this->source, (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["error_address"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[($context["address_row"] ?? null)] ?? null) : null), "city", [], "any", false, false, false, 393)) {
                // line 394
                echo "                          <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["error_address"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a[($context["address_row"] ?? null)] ?? null) : null), "city", [], "any", false, false, false, 394);
                echo "</div>
                          ";
            }
            // line 395
            echo "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-postcode";
            // line 398
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_postcode"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
            // line 400
            echo ($context["address_row"] ?? null);
            echo "][postcode]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 400);
            echo "\" placeholder=\"";
            echo ($context["entry_postcode"] ?? null);
            echo "\" id=\"input-postcode";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\" />
                          ";
            // line 401
            if (twig_get_attribute($this->env, $this->source, (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["error_address"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4[($context["address_row"] ?? null)] ?? null) : null), "postcode", [], "any", false, false, false, 401)) {
                // line 402
                echo "                          <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["error_address"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d[($context["address_row"] ?? null)] ?? null) : null), "postcode", [], "any", false, false, false, 402);
                echo "</div>
                          ";
            }
            // line 403
            echo "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-country";
            // line 406
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_country"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
            // line 408
            echo ($context["address_row"] ?? null);
            echo "][country_id]\" id=\"input-country";
            echo ($context["address_row"] ?? null);
            echo "\" onchange=\"country(this, '";
            echo ($context["address_row"] ?? null);
            echo "', '";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "zone_id", [], "any", false, false, false, 408);
            echo "');\" class=\"form-control\">
                            <option value=\"\">";
            // line 409
            echo ($context["text_select"] ?? null);
            echo "</option>
                            ";
            // line 410
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 411
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 411) == twig_get_attribute($this->env, $this->source, $context["address"], "country_id", [], "any", false, false, false, 411))) {
                    // line 412
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 412);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 412);
                    echo "</option>
                            ";
                } else {
                    // line 414
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 414);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 414);
                    echo "</option>
                            ";
                }
                // line 416
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 417
            echo "                          </select>
                          ";
            // line 418
            if (twig_get_attribute($this->env, $this->source, (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["error_address"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5[($context["address_row"] ?? null)] ?? null) : null), "country", [], "any", false, false, false, 418)) {
                // line 419
                echo "                          <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["error_address"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a[($context["address_row"] ?? null)] ?? null) : null), "country", [], "any", false, false, false, 419);
                echo "</div>
                          ";
            }
            // line 420
            echo "</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-zone";
            // line 423
            echo ($context["address_row"] ?? null);
            echo "\">";
            echo ($context["entry_zone"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
            // line 425
            echo ($context["address_row"] ?? null);
            echo "][zone_id]\" id=\"input-zone";
            echo ($context["address_row"] ?? null);
            echo "\" class=\"form-control\">
                          </select>
                          ";
            // line 427
            if (twig_get_attribute($this->env, $this->source, (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["error_address"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[($context["address_row"] ?? null)] ?? null) : null), "zone", [], "any", false, false, false, 427)) {
                // line 428
                echo "                          <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = ($context["error_address"] ?? null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38[($context["address_row"] ?? null)] ?? null) : null), "zone", [], "any", false, false, false, 428);
                echo "</div>
                          ";
            }
            // line 429
            echo "</div>
                      </div>
                      ";
            // line 431
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 432
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 432) == "address")) {
                    // line 433
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 433) == "select")) {
                        // line 434
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 434);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 434) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 435
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 435);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 435);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[";
                        // line 437
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 437);
                        echo "]\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 437);
                        echo "\" class=\"form-control\">
                            <option value=\"\">";
                        // line 438
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                            ";
                        // line 439
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 439));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 440
                            echo "                            ";
                            if (((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 440)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 440)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 440) == (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 440)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 440)] ?? null) : null)))) {
                                // line 441
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 441);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 441);
                                echo "</option>
                            ";
                            } else {
                                // line 443
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 443);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 443);
                                echo "</option>
                            ";
                            }
                            // line 445
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 446
                        echo "                          </select>
                          ";
                        // line 447
                        if ((($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["error_address"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["custom_field"] ?? null) : null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 447)] ?? null) : null)) {
                            // line 448
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = twig_get_attribute($this->env, $this->source, (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = ($context["error_address"] ?? null)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 448)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 448)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 449
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 452
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 452) == "radio")) {
                        // line 453
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 453);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 453) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 454
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 454);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div> ";
                        // line 456
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 456));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 457
                            echo "                            <div class=\"radio\"> ";
                            if (((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 457)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 457)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 457) == (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 457)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 457)] ?? null) : null)))) {
                                // line 458
                                echo "                              <label>
                                <input type=\"radio\" name=\"address[";
                                // line 459
                                echo ($context["address_row"] ?? null);
                                echo "][custom_field][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 459);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 459);
                                echo "\" checked=\"checked\" />
                                ";
                                // line 460
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 460);
                                echo "</label>
                              ";
                            } else {
                                // line 462
                                echo "                              <label>
                                <input type=\"radio\" name=\"address[";
                                // line 463
                                echo ($context["address_row"] ?? null);
                                echo "][custom_field][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 463);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 463);
                                echo "\" />
                                ";
                                // line 464
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 464);
                                echo "</label>
                              ";
                            }
                            // line 465
                            echo "</div>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 466
                        echo " </div>
                          ";
                        // line 467
                        if ((($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = twig_get_attribute($this->env, $this->source, (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = ($context["error_address"] ?? null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 467)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 467)] ?? null) : null)) {
                            // line 468
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = twig_get_attribute($this->env, $this->source, (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = ($context["error_address"] ?? null)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 468)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 468)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 469
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 472
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 472) == "checkbox")) {
                        // line 473
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 473);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 473) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 474
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 474);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div> ";
                        // line 476
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 476));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 477
                            echo "                            <div class=\"checkbox\"> ";
                            if (((($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 477)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 477)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 477), (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 477)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 477)] ?? null) : null)))) {
                                // line 478
                                echo "                              <label>
                                <input type=\"checkbox\" name=\"address[";
                                // line 479
                                echo ($context["address_row"] ?? null);
                                echo "][custom_field][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 479);
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 479);
                                echo "\" checked=\"checked\" />
                                ";
                                // line 480
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 480);
                                echo "</label>
                              ";
                            } else {
                                // line 482
                                echo "                              <label>
                                <input type=\"checkbox\" name=\"address[";
                                // line 483
                                echo ($context["address_row"] ?? null);
                                echo "][custom_field][";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 483);
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 483);
                                echo "\" />
                                ";
                                // line 484
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 484);
                                echo "</label>
                              ";
                            }
                            // line 485
                            echo "</div>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 486
                        echo " </div>
                          ";
                        // line 487
                        if ((($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = ($context["error_address"] ?? null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["custom_field"] ?? null) : null)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 487)] ?? null) : null)) {
                            // line 488
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = twig_get_attribute($this->env, $this->source, (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = ($context["error_address"] ?? null)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 488)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 488)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 489
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 492
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 492) == "text")) {
                        // line 493
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 493);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 493) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 494
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 494);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 494);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[";
                        // line 496
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 496);
                        echo "]\" value=\"";
                        echo (((($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 496)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 496)] ?? null) : null)) ? ((($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 496)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 496)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 496)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 496);
                        echo "\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 496);
                        echo "\" class=\"form-control\" />
                          ";
                        // line 497
                        if ((($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = ($context["error_address"] ?? null)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["custom_field"] ?? null) : null)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 497)] ?? null) : null)) {
                            // line 498
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = twig_get_attribute($this->env, $this->source, (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = ($context["error_address"] ?? null)) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 498)) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 498)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 499
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 502
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 502) == "textarea")) {
                        // line 503
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 503);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 503) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 504
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 504);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 504);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"address[";
                        // line 506
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 506);
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 506);
                        echo "\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 506);
                        echo "\" class=\"form-control\">";
                        echo (((($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 506)) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 506)] ?? null) : null)) ? ((($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 506)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 506)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 506)));
                        echo "</textarea>
                          ";
                        // line 507
                        if ((($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = ($context["error_address"] ?? null)) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["custom_field"] ?? null) : null)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 507)] ?? null) : null)) {
                            // line 508
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = twig_get_attribute($this->env, $this->source, (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = ($context["error_address"] ?? null)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 508)) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 508)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 509
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 512
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 512) == "file")) {
                        // line 513
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 513);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 513) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\">";
                        // line 514
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 514);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <button type=\"button\" id=\"button-address";
                        // line 516
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 516);
                        echo "\" data-loading-text=\"";
                        echo ($context["text_loading"] ?? null);
                        echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
                          <input type=\"hidden\" name=\"address[";
                        // line 517
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 517);
                        echo "]\" value=\"";
                        echo (((($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 517)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 517)] ?? null) : null)) ? ((($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 517)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 517)] ?? null) : null)) : (""));
                        echo "\" />
                          ";
                        // line 518
                        if ((($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = (($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = ($context["error_address"] ?? null)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["custom_field"] ?? null) : null)) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 518)] ?? null) : null)) {
                            // line 519
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = twig_get_attribute($this->env, $this->source, (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = ($context["error_address"] ?? null)) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 519)) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 519)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 520
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 523
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 523) == "date")) {
                        // line 524
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 524);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 524) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 525
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 525);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 525);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"address[";
                        // line 528
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 528);
                        echo "]\" value=\"";
                        echo (((($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 528)) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 528)] ?? null) : null)) ? ((($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 528)) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 528)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 528)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 528);
                        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 528);
                        echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                          ";
                        // line 532
                        if ((($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = (($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = ($context["error_address"] ?? null)) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["custom_field"] ?? null) : null)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 532)] ?? null) : null)) {
                            // line 533
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = twig_get_attribute($this->env, $this->source, (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = ($context["error_address"] ?? null)) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 533)) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 533)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 534
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 537
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 537) == "time")) {
                        // line 538
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 538);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 538) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 539
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 539);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"address[";
                        // line 542
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 542);
                        echo "]\" value=\"";
                        echo (((($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 542)) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 542)] ?? null) : null)) ? ((($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 542)) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 542)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 542)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 542);
                        echo "\" data-date-format=\"HH:mm\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 542);
                        echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                          ";
                        // line 546
                        if ((($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = (($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = ($context["error_address"] ?? null)) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["custom_field"] ?? null) : null)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 546)] ?? null) : null)) {
                            // line 547
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = twig_get_attribute($this->env, $this->source, (($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = ($context["error_address"] ?? null)) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 547)) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 547)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 548
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 551
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 551) == "datetime")) {
                        // line 552
                        echo "                      <div class=\"form-group custom-field custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 552);
                        echo "\" data-sort=\"";
                        echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 552) + 1);
                        echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address";
                        // line 553
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 553);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 553);
                        echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"address[";
                        // line 556
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 556);
                        echo "]\" value=\"";
                        echo (((($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 556)) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 556)] ?? null) : null)) ? ((($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 556)) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 556)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 556)));
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 556);
                        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address";
                        echo ($context["address_row"] ?? null);
                        echo "-custom-field";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 556);
                        echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span> </div>
                          ";
                        // line 560
                        if ((($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = (($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = (($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = ($context["error_address"] ?? null)) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b[($context["address_row"] ?? null)] ?? null) : null)) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf["custom_field"] ?? null) : null)) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 560)] ?? null) : null)) {
                            // line 561
                            echo "                          <div class=\"text-danger\">";
                            echo (($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = twig_get_attribute($this->env, $this->source, (($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = ($context["error_address"] ?? null)) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345[($context["address_row"] ?? null)] ?? null) : null), "custom_field", [], "any", false, false, false, 561)) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 561)] ?? null) : null);
                            echo "</div>
                          ";
                        }
                        // line 562
                        echo "</div>
                      </div>
                      ";
                    }
                    // line 565
                    echo "                      ";
                }
                // line 566
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 567
            echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
            // line 568
            echo ($context["entry_default"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <label class=\"radio\">";
            // line 570
            if (((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 570) == ($context["address_id"] ?? null)) ||  !($context["addresses"] ?? null))) {
                // line 571
                echo "                            <input type=\"radio\" name=\"address[";
                echo ($context["address_row"] ?? null);
                echo "][default]\" value=\"";
                echo ($context["address_row"] ?? null);
                echo "\" checked=\"checked\" />
                            ";
            } else {
                // line 573
                echo "                            <input type=\"radio\" name=\"address[";
                echo ($context["address_row"] ?? null);
                echo "][default]\" value=\"";
                echo ($context["address_row"] ?? null);
                echo "\" />
                            ";
            }
            // line 574
            echo "</label>
                        </div>
                      </div>
                    </div>
                    ";
            // line 578
            $context["address_row"] = (($context["address_row"] ?? null) + 1);
            // line 579
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        echo "                  </div>
                </div>
              </div>
            </div>

                    ";
        // line 585
        if (($context["marketplace_enable"] ?? null)) {
            // line 586
            echo "                        <div class=\"tab-pane\" id=\"seller_register\">
                            <fieldset>
                                <legend>";
            // line 588
            echo ($context["register"] ?? null);
            echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
            // line 590
            echo ($context["register"] ?? null);
            echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"seller\" value=\"1\" ";
            // line 593
            echo (((($context["approved"] ?? null) == 1)) ? ("checked =\"checked\"") : (""));
            echo ">
                                            ";
            // line 594
            echo ($context["yes_status"] ?? null);
            echo "
                                        </label>
                                        ";
            // line 596
            if ((($context["approved"] ?? null) != "1")) {
                // line 597
                echo "                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"seller\" value=\"0\" ";
                // line 598
                echo (((($context["approved"] ?? null) == 0)) ? ("checked=\"checked\"") : (""));
                echo ">
                                            ";
                // line 599
                echo ($context["no_status"] ?? null);
                echo "
                                        </label>
                                        ";
            }
            // line 602
            echo "                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    ";
        }
        // line 607
        echo "                
            <div class=\"tab-pane\" id=\"tab-affiliate\">
              <fieldset>
                <legend>";
        // line 610
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-company\">";
        // line 612
        echo ($context["entry_company"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"company\" value=\"";
        // line 614
        echo ($context["company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-company\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-website\">";
        // line 618
        echo ($context["entry_website"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"website\" value=\"";
        // line 620
        echo ($context["website"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_website"] ?? null);
        echo "\" id=\"input-website\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tracking\"><span data-toggle=\"tooltip\" title=\"";
        // line 624
        echo ($context["help_tracking"] ?? null);
        echo "\">";
        echo ($context["entry_tracking"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tracking\" value=\"";
        // line 626
        echo ($context["tracking"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tracking"] ?? null);
        echo "\" id=\"input-tracking\" class=\"form-control\" />
                    ";
        // line 627
        if (($context["error_tracking"] ?? null)) {
            // line 628
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_tracking"] ?? null);
            echo "</div>
                    ";
        }
        // line 630
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 633
        echo ($context["help_commission"] ?? null);
        echo "\">";
        echo ($context["entry_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"commission\" value=\"";
        // line 635
        echo ($context["commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_commission"] ?? null);
        echo "\" id=\"input-commission\" class=\"form-control\" />
                  </div>
                </div>
                ";
        // line 638
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 639
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 639) == "affiliate")) {
                // line 640
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 640) == "select")) {
                    // line 641
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 641);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 641);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 642
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 642);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 642);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"custom_field[";
                    // line 644
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 644);
                    echo "]\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 644);
                    echo "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 645
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                      ";
                    // line 646
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 646));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 647
                        echo "                      ";
                        if (((($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 = ($context["account_custom_field"] ?? null)) && is_array($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3) || $__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 instanceof ArrayAccess ? ($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 647)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 647) == (($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0) || $__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 instanceof ArrayAccess ? ($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 647)] ?? null) : null)))) {
                            // line 648
                            echo "                      <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 648);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 648);
                            echo "</option>
                      ";
                        } else {
                            // line 650
                            echo "                      <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 650);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 650);
                            echo "</option>
                      ";
                        }
                        // line 652
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 653
                    echo "                    </select>
                    ";
                    // line 654
                    if ((($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 = ($context["error_custom_field"] ?? null)) && is_array($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938) || $__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 instanceof ArrayAccess ? ($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 654)] ?? null) : null)) {
                        // line 655
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 = ($context["error_custom_field"] ?? null)) && is_array($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3) || $__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 instanceof ArrayAccess ? ($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 655)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 656
                    echo "</div>
                </div>
                ";
                }
                // line 659
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 659) == "radio")) {
                    // line 660
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 660);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 660);
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 661
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 661);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                    // line 663
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 663));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 664
                        echo "                      <div class=\"radio\">";
                        if (((($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa = ($context["account_custom_field"] ?? null)) && is_array($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa) || $__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa instanceof ArrayAccess ? ($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 664)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 664) == (($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb = ($context["account_custom_field"] ?? null)) && is_array($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb) || $__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb instanceof ArrayAccess ? ($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 664)] ?? null) : null)))) {
                            // line 665
                            echo "                        <label>
                          <input type=\"radio\" name=\"custom_field[";
                            // line 666
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 666);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 666);
                            echo "\" checked=\"checked\" />
                          ";
                            // line 667
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 667);
                            echo "</label>
                        ";
                        } else {
                            // line 669
                            echo "                        <label>
                          <input type=\"radio\" name=\"custom_field[";
                            // line 670
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 670);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 670);
                            echo "\" />
                          ";
                            // line 671
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 671);
                            echo "</label>
                        ";
                        }
                        // line 672
                        echo "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 673
                    echo " </div>
                    ";
                    // line 674
                    if ((($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c = ($context["error_custom_field"] ?? null)) && is_array($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c) || $__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c instanceof ArrayAccess ? ($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 674)] ?? null) : null)) {
                        // line 675
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a = ($context["error_custom_field"] ?? null)) && is_array($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a) || $__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a instanceof ArrayAccess ? ($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 675)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 676
                    echo "</div>
                </div>
                ";
                }
                // line 679
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 679) == "checkbox")) {
                    // line 680
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 680);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 680);
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 681
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 681);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                    // line 683
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 683));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 684
                        echo "                      <div class=\"checkbox\">";
                        if (((($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6) || $__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 instanceof ArrayAccess ? ($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 684)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 684), (($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b = ($context["account_custom_field"] ?? null)) && is_array($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b) || $__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b instanceof ArrayAccess ? ($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 684)] ?? null) : null)))) {
                            // line 685
                            echo "                        <label>
                          <input type=\"checkbox\" name=\"custom_field[";
                            // line 686
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 686);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 686);
                            echo "\" checked=\"checked\" />
                          ";
                            // line 687
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 687);
                            echo "</label>
                        ";
                        } else {
                            // line 689
                            echo "                        <label>
                          <input type=\"checkbox\" name=\"custom_field[";
                            // line 690
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 690);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 690);
                            echo "\" />
                          ";
                            // line 691
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 691);
                            echo "</label>
                        ";
                        }
                        // line 692
                        echo "</div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 693
                    echo " </div>
                    ";
                    // line 694
                    if ((($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 = ($context["error_custom_field"] ?? null)) && is_array($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526) || $__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 instanceof ArrayAccess ? ($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 694)] ?? null) : null)) {
                        // line 695
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f = ($context["error_custom_field"] ?? null)) && is_array($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f) || $__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f instanceof ArrayAccess ? ($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 695)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 696
                    echo "</div>
                </div>
                ";
                }
                // line 699
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 699) == "text")) {
                    // line 700
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 700);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 700);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 701
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 701);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 701);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 703
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 703);
                    echo "]\" value=\"";
                    echo (((($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c = ($context["account_custom_field"] ?? null)) && is_array($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c) || $__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c instanceof ArrayAccess ? ($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 703)] ?? null) : null)) ? ((($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 = ($context["account_custom_field"] ?? null)) && is_array($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74) || $__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 instanceof ArrayAccess ? ($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 703)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 703)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 703);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 703);
                    echo "\" class=\"form-control\" />
                    ";
                    // line 704
                    if ((($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff = ($context["error_custom_field"] ?? null)) && is_array($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff) || $__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff instanceof ArrayAccess ? ($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 704)] ?? null) : null)) {
                        // line 705
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 = ($context["error_custom_field"] ?? null)) && is_array($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918) || $__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 instanceof ArrayAccess ? ($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 705)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 706
                    echo "</div>
                </div>
                ";
                }
                // line 709
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 709) == "textarea")) {
                    // line 710
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 710);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 710);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 711
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 711);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 711);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[";
                    // line 713
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 713);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 713);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 713);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 = ($context["account_custom_field"] ?? null)) && is_array($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5) || $__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 instanceof ArrayAccess ? ($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 713)] ?? null) : null)) ? ((($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 = ($context["account_custom_field"] ?? null)) && is_array($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219) || $__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 instanceof ArrayAccess ? ($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 713)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 713)));
                    echo "</textarea>
                    ";
                    // line 714
                    if ((($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 = ($context["error_custom_field"] ?? null)) && is_array($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20) || $__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 instanceof ArrayAccess ? ($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 714)] ?? null) : null)) {
                        // line 715
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 = ($context["error_custom_field"] ?? null)) && is_array($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16) || $__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 instanceof ArrayAccess ? ($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 715)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 716
                    echo "</div>
                </div>
                ";
                }
                // line 719
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 719) == "file")) {
                    // line 720
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 720);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 720);
                    echo "\">
                  <label class=\"col-sm-2 control-label\">";
                    // line 721
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 721);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <button type=\"button\" id=\"button-custom-field";
                    // line 723
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 723);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                    // line 724
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 724);
                    echo "]\" value=\"";
                    echo (((($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 = ($context["account_custom_field"] ?? null)) && is_array($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0) || $__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 instanceof ArrayAccess ? ($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 724)] ?? null) : null)) ? ((($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 = ($context["account_custom_field"] ?? null)) && is_array($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1) || $__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 instanceof ArrayAccess ? ($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 724)] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 724);
                    echo "\" />
                    ";
                    // line 725
                    if ((($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 = ($context["error_custom_field"] ?? null)) && is_array($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008) || $__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 instanceof ArrayAccess ? ($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 725)] ?? null) : null)) {
                        // line 726
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 = ($context["error_custom_field"] ?? null)) && is_array($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00) || $__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 instanceof ArrayAccess ? ($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 726)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 727
                    echo "</div>
                </div>
                ";
                }
                // line 730
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 730) == "date")) {
                    // line 731
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 731);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 731);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 732
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 732);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 732);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 735
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 735);
                    echo "]\" value=\"";
                    echo (((($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 = ($context["account_custom_field"] ?? null)) && is_array($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315) || $__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 instanceof ArrayAccess ? ($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 735)] ?? null) : null)) ? ((($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb = ($context["account_custom_field"] ?? null)) && is_array($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb) || $__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb instanceof ArrayAccess ? ($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 735)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 735)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 735);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 735);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 739
                    if ((($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde = ($context["error_custom_field"] ?? null)) && is_array($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde) || $__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde instanceof ArrayAccess ? ($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 739)] ?? null) : null)) {
                        // line 740
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 = ($context["error_custom_field"] ?? null)) && is_array($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5) || $__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 instanceof ArrayAccess ? ($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 740)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 741
                    echo "</div>
                </div>
                ";
                }
                // line 744
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 744) == "time")) {
                    // line 745
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 745);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 745);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 746
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 746);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 746);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 749
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 749);
                    echo "]\" value=\"";
                    echo (((($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f = ($context["account_custom_field"] ?? null)) && is_array($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f) || $__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f instanceof ArrayAccess ? ($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 749)] ?? null) : null)) ? ((($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b = ($context["account_custom_field"] ?? null)) && is_array($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b) || $__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b instanceof ArrayAccess ? ($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 749)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 749)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 749);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 749);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 753
                    if ((($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d = ($context["error_custom_field"] ?? null)) && is_array($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d) || $__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d instanceof ArrayAccess ? ($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 753)] ?? null) : null)) {
                        // line 754
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d = ($context["error_custom_field"] ?? null)) && is_array($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d) || $__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d instanceof ArrayAccess ? ($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 754)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 755
                    echo "</div>
                </div>
                ";
                }
                // line 758
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 758) == "datetime")) {
                    // line 759
                    echo "                <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 759);
                    echo "\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 759);
                    echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 760
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 760);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 760);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 763
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 763);
                    echo "]\" value=\"";
                    echo (((($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 = ($context["account_custom_field"] ?? null)) && is_array($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2) || $__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 instanceof ArrayAccess ? ($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 763)] ?? null) : null)) ? ((($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 = ($context["account_custom_field"] ?? null)) && is_array($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6) || $__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 instanceof ArrayAccess ? ($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 763)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 763)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 763);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 763);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    ";
                    // line 767
                    if ((($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a = ($context["error_custom_field"] ?? null)) && is_array($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a) || $__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a instanceof ArrayAccess ? ($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 767)] ?? null) : null)) {
                        // line 768
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee = ($context["error_custom_field"] ?? null)) && is_array($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee) || $__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee instanceof ArrayAccess ? ($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 768)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 769
                    echo "</div>
                </div>
                ";
                }
                // line 772
                echo "                ";
            }
            // line 773
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 774
        echo "              </fieldset>
              <fieldset>
                <legend>";
        // line 776
        echo ($context["text_payment"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax\">";
        // line 778
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tax\" value=\"";
        // line 780
        echo ($context["tax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tax"] ?? null);
        echo "\" id=\"input-tax\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 784
        echo ($context["entry_payment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"radio\">
                      <label>";
        // line 787
        if ((($context["payment"] ?? null) == "cheque")) {
            // line 788
            echo "                        <input type=\"radio\" name=\"payment\" value=\"cheque\" checked=\"checked\" />
                        ";
        } else {
            // line 790
            echo "                        <input type=\"radio\" name=\"payment\" value=\"cheque\" />
                        ";
        }
        // line 792
        echo "                        ";
        echo ($context["text_cheque"] ?? null);
        echo "</label>
                    </div>
                    <div class=\"radio\">
                      <label> ";
        // line 795
        if ((($context["payment"] ?? null) == "paypal")) {
            // line 796
            echo "                        <input type=\"radio\" name=\"payment\" value=\"paypal\" checked=\"checked\" />
                        ";
        } else {
            // line 798
            echo "                        <input type=\"radio\" name=\"payment\" value=\"paypal\" />
                        ";
        }
        // line 800
        echo "                        ";
        echo ($context["text_paypal"] ?? null);
        echo "</label>
                    </div>
                    <div class=\"radio\">
                      <label> ";
        // line 803
        if ((($context["payment"] ?? null) == "bank")) {
            // line 804
            echo "                        <input type=\"radio\" name=\"payment\" value=\"bank\" checked=\"checked\" />
                        ";
        } else {
            // line 806
            echo "                        <input type=\"radio\" name=\"payment\" value=\"bank\" />
                        ";
        }
        // line 808
        echo "                        ";
        echo ($context["text_bank"] ?? null);
        echo "</label>
                    </div>
                  </div>
                </div>
                <div id=\"payment-cheque\" class=\"payment\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-cheque\">";
        // line 814
        echo ($context["entry_cheque"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"cheque\" value=\"";
        // line 816
        echo ($context["cheque"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_cheque"] ?? null);
        echo "\" id=\"input-cheque\" class=\"form-control\" />
                      ";
        // line 817
        if (($context["error_cheque"] ?? null)) {
            // line 818
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_cheque"] ?? null);
            echo "</div>
                      ";
        }
        // line 819
        echo "</div>
                  </div>
                </div>
                <div id=\"payment-paypal\" class=\"payment\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-paypal\">";
        // line 824
        echo ($context["entry_paypal"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"paypal\" value=\"";
        // line 826
        echo ($context["paypal"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_paypal"] ?? null);
        echo "\" id=\"input-paypal\" class=\"form-control\" />
                      ";
        // line 827
        if (($context["error_paypal"] ?? null)) {
            // line 828
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_paypal"] ?? null);
            echo "</div>
                      ";
        }
        // line 829
        echo "</div>
                  </div>
                </div>
                <div id=\"payment-bank\" class=\"payment\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-name\">";
        // line 834
        echo ($context["entry_bank_name"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_name\" value=\"";
        // line 836
        echo ($context["bank_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_name"] ?? null);
        echo "\" id=\"input-bank-name\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-branch-number\">";
        // line 840
        echo ($context["entry_bank_branch_number"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_branch_number\" value=\"";
        // line 842
        echo ($context["bank_branch_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_branch_number"] ?? null);
        echo "\" id=\"input-bank-branch-number\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-swift-code\">";
        // line 846
        echo ($context["entry_bank_swift_code"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_swift_code\" value=\"";
        // line 848
        echo ($context["bank_swift_code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_swift_code"] ?? null);
        echo "\" id=\"input-bank-swift-code\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-account-name\">";
        // line 852
        echo ($context["entry_bank_account_name"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_name\" value=\"";
        // line 854
        echo ($context["bank_account_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_account_name"] ?? null);
        echo "\" id=\"input-bank-account-name\" class=\"form-control\" />
                      ";
        // line 855
        if (($context["error_bank_account_name"] ?? null)) {
            // line 856
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_bank_account_name"] ?? null);
            echo "</div>
                      ";
        }
        // line 857
        echo "</div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-account-number\">";
        // line 860
        echo ($context["entry_bank_account_number"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_number\" value=\"";
        // line 862
        echo ($context["bank_account_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_account_number"] ?? null);
        echo "\" id=\"input-bank-account-number\" class=\"form-control\" />
                      ";
        // line 863
        if (($context["error_bank_account_number"] ?? null)) {
            // line 864
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_bank_account_number"] ?? null);
            echo "</div>
                      ";
        }
        // line 865
        echo "</div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\">";
        // line 869
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"affiliate\" id=\"input-affiliate\" class=\"form-control\">
                      ";
        // line 872
        if (($context["affiliate"] ?? null)) {
            // line 873
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 874
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 876
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 877
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 879
        echo "                     </select>
                  </div>
                </div>
              </fieldset>           
            </div>         
            ";
        // line 884
        if (($context["customer_id"] ?? null)) {
            // line 885
            echo "            <div class=\"tab-pane\" id=\"tab-history\">
              <fieldset>
                <legend>";
            // line 887
            echo ($context["text_history"] ?? null);
            echo "</legend>
                <div id=\"history\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 892
            echo ($context["text_history_add"] ?? null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
            // line 894
            echo ($context["entry_comment"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
            // line 896
            echo ($context["entry_comment"] ?? null);
            echo "\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button id=\"button-history\" data-loading-text=\"";
            // line 901
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo ($context["button_history_add"] ?? null);
            echo "</button>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-transaction\">
              <fieldset>
                <legend>";
            // line 906
            echo ($context["text_transaction"] ?? null);
            echo "</legend>
                <div id=\"transaction\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 911
            echo ($context["text_transaction_add"] ?? null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-transaction-description\">";
            // line 913
            echo ($context["entry_description"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 915
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-transaction-description\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-amount\">";
            // line 919
            echo ($context["entry_amount"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
            // line 921
            echo ($context["entry_amount"] ?? null);
            echo "\" id=\"input-amount\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button type=\"button\" id=\"button-transaction\" data-loading-text=\"";
            // line 926
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo ($context["button_transaction_add"] ?? null);
            echo "</button>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <fieldset>
                <legend>";
            // line 931
            echo ($context["text_reward"] ?? null);
            echo "</legend>
                <div id=\"reward\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>";
            // line 936
            echo ($context["text_reward_add"] ?? null);
            echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-reward-description\">";
            // line 938
            echo ($context["entry_description"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 940
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-reward-description\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
            // line 944
            echo ($context["help_points"] ?? null);
            echo "\">";
            echo ($context["entry_points"] ?? null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"points\" value=\"\" placeholder=\"";
            // line 946
            echo ($context["entry_points"] ?? null);
            echo "\" id=\"input-points\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button type=\"button\" id=\"button-reward\" data-loading-text=\"";
            // line 951
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo ($context["button_reward_add"] ?? null);
            echo "</button>
              </div>
            </div>
            ";
        }
        // line 955
        echo "
                    ";
        // line 956
        if ((($context["is_seller"] ?? null) && (($context["marketplace_enable"] ?? null) == 1))) {
            echo " 
                        <div class=\"tab-pane\" id=\"tab-seller\">
                          <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"kbmp_default_commission\">";
            // line 959
            echo ($context["label_default_commission"] ?? null);
            echo "</label>
                            <div class=\"col-sm-3\">
                              <div class=\"input-group fixed-width-small-group\">
                                    <input type=\"text\" name=\"kbmp_default_commission\" id=\"kbmp_default_commission\" value=\"";
            // line 962
            echo ($context["kbmp_default_commission"] ?? null);
            echo "\" class=\"fixed-width-small form-control\">
                                    <span class=\"input-group-addon\">%</span>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                ";
            // line 965
            if (((isset($context["error_kbmp_default_commission"]) || array_key_exists("error_kbmp_default_commission", $context)) && ($context["error_kbmp_default_commission"] ?? null))) {
                echo " 
                              <div class=\"text-danger\">";
                // line 966
                echo ($context["error_kbmp_default_commission"] ?? null);
                echo "</div>
                              ";
            }
            // line 967
            echo " 
                                <br>
                                <input class=\"custom_radio\" type=\"checkbox\" name=\"kbmp_default_commission_global\" id=\"kbmp_default_commission_global\" value=\"1\" ";
            // line 969
            if (((isset($context["kbmp_default_commission_global"]) || array_key_exists("kbmp_default_commission_global", $context)) &&  !twig_test_empty(($context["kbmp_default_commission_global"] ?? null)))) {
                echo " ";
                echo "checked";
                echo " ";
            }
            echo " />
                                <label class=\"custom_radio_label\" for=\"kbmp_default_commission_global\"><em>";
            // line 970
            echo ($context["text_use_global"] ?? null);
            echo "</em></label>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"kbmp_new_product_approval_required\">";
            // line 974
            echo ($context["label_new_product_approval"] ?? null);
            echo "</label>
                            <div class=\"col-sm-9\">
                                <input class=\"custom_radio\" type=\"radio\" name=\"kbmp_new_product_approval_required\" id=\"kbmp_new_product_approval_required_on\" value=\"1\" ";
            // line 976
            if (((isset($context["kbmp_new_product_approval_required"]) || array_key_exists("kbmp_new_product_approval_required", $context)) && (($context["kbmp_new_product_approval_required"] ?? null) == "1"))) {
                echo "checked";
            }
            echo ">
                                <label class=\"custom_radio_label\" for=\"kbmp_new_product_approval_required_on\">";
            // line 977
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                <input class=\"custom_radio\" type=\"radio\" name=\"kbmp_new_product_approval_required\" id=\"kbmp_new_product_approval_required_off\" value=\"0\" ";
            // line 978
            if (((isset($context["kbmp_new_product_approval_required"]) || array_key_exists("kbmp_new_product_approval_required", $context)) && (($context["kbmp_new_product_approval_required"] ?? null) == "0"))) {
                echo "checked";
            }
            echo ">
                                <label class=\"custom_radio_label\" for=\"kbmp_new_product_approval_required_off\">";
            // line 979
            echo ($context["text_no"] ?? null);
            echo "</label>
                                <br>
                                <input class=\"custom_radio\" type=\"checkbox\" name=\"kbmp_new_product_approval_required_global\" id=\"kbmp_new_product_approval_required_global\" value=\"1\" ";
            // line 981
            if (((isset($context["kbmp_new_product_approval_required_global"]) || array_key_exists("kbmp_new_product_approval_required_global", $context)) &&  !twig_test_empty(($context["kbmp_new_product_approval_required_global"] ?? null)))) {
                echo " ";
                echo "checked";
                echo " ";
            }
            echo " />
                                <label class=\"custom_radio_label\" for=\"kbmp_new_product_approval_required_global\"><em>";
            // line 982
            echo ($context["text_use_global"] ?? null);
            echo "</em></label>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"kbmp_enable_seller_review\">";
            // line 986
            echo ($context["label_enable_seller_review"] ?? null);
            echo "</label>
                            <div class=\"col-sm-9\">
                                <input class=\"custom_radio\" type=\"radio\" name=\"kbmp_enable_seller_review\" id=\"kbmp_enable_seller_review_on\" value=\"1\" ";
            // line 988
            if (((isset($context["kbmp_enable_seller_review"]) || array_key_exists("kbmp_enable_seller_review", $context)) && (($context["kbmp_enable_seller_review"] ?? null) == "1"))) {
                echo "checked";
            }
            echo ">
                                <label class=\"custom_radio_label\" for=\"kbmp_enable_seller_review_on\">";
            // line 989
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                <input class=\"custom_radio\" type=\"radio\" name=\"kbmp_enable_seller_review\" id=\"kbmp_enable_seller_review_off\" value=\"0\" ";
            // line 990
            if (((isset($context["kbmp_enable_seller_review"]) || array_key_exists("kbmp_enable_seller_review", $context)) && (($context["kbmp_enable_seller_review"] ?? null) == "0"))) {
                echo "checked";
            }
            echo ">
                                <label class=\"custom_radio_label\" for=\"kbmp_enable_seller_review_off\">";
            // line 991
            echo ($context["text_no"] ?? null);
            echo "</label>
                                <br>
                                <input class=\"custom_radio\" type=\"checkbox\" name=\"kbmp_enable_seller_review_global\" id=\"kbmp_enable_seller_review_global\" value=\"1\" ";
            // line 993
            if (((isset($context["kbmp_enable_seller_review_global"]) || array_key_exists("kbmp_enable_seller_review_global", $context)) &&  !twig_test_empty(($context["kbmp_enable_seller_review_global"] ?? null)))) {
                echo " ";
                echo "checked";
                echo " ";
            }
            echo " />
                                <label class=\"custom_radio_label\" for=\"kbmp_enable_seller_review_global\"><em>";
            // line 994
            echo ($context["text_use_global"] ?? null);
            echo "</em></label>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"kbmp_seller_review_approval_required\">";
            // line 998
            echo ($context["label_seller_review_approval_required"] ?? null);
            echo "</label>
                            <div class=\"col-sm-9\">
                                <input class=\"custom_radio\" type=\"radio\" name=\"kbmp_seller_review_approval_required\" id=\"kbmp_seller_review_approval_required_on\" value=\"1\" ";
            // line 1000
            if (((isset($context["kbmp_seller_review_approval_required"]) || array_key_exists("kbmp_seller_review_approval_required", $context)) && (($context["kbmp_seller_review_approval_required"] ?? null) == "1"))) {
                echo "checked";
            }
            echo ">
                                <label class=\"custom_radio_label\" for=\"kbmp_seller_review_approval_required_on\">";
            // line 1001
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                <input class=\"custom_radio\" type=\"radio\" name=\"kbmp_seller_review_approval_required\" id=\"kbmp_seller_review_approval_required_off\" value=\"0\" ";
            // line 1002
            if (((isset($context["kbmp_seller_review_approval_required"]) || array_key_exists("kbmp_seller_review_approval_required", $context)) && (($context["kbmp_seller_review_approval_required"] ?? null) == "0"))) {
                echo "checked";
            }
            echo ">
                                <label class=\"custom_radio_label\" for=\"kbmp_seller_review_approval_required_off\">";
            // line 1003
            echo ($context["text_no"] ?? null);
            echo "</label>
                                <br>
                                <input class=\"custom_radio\" type=\"checkbox\" name=\"kbmp_seller_review_approval_required_global\" id=\"kbmp_seller_review_approval_required_global\" value=\"1\" ";
            // line 1005
            if (((isset($context["kbmp_seller_review_approval_required_global"]) || array_key_exists("kbmp_seller_review_approval_required_global", $context)) &&  !twig_test_empty(($context["kbmp_seller_review_approval_required_global"] ?? null)))) {
                echo " ";
                echo "checked";
                echo " ";
            }
            echo " />
                                <label class=\"custom_radio_label\" for=\"kbmp_seller_review_approval_required_global\"><em>";
            // line 1006
            echo ($context["text_use_global"] ?? null);
            echo "</em></label>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"kbmp_email_on_new_order\">";
            // line 1010
            echo ($context["label_send_email_order_place"] ?? null);
            echo "</label>
                            <div class=\"col-sm-9\">
                                <input class=\"custom_radio\" type=\"radio\" name=\"kbmp_email_on_new_order\" id=\"kbmp_email_on_new_order_on\" value=\"1\" ";
            // line 1012
            if (((isset($context["kbmp_email_on_new_order"]) || array_key_exists("kbmp_email_on_new_order", $context)) && (($context["kbmp_email_on_new_order"] ?? null) == "1"))) {
                echo "checked";
            }
            echo ">
                                <label class=\"custom_radio_label\" for=\"kbmp_email_on_new_order_on\">";
            // line 1013
            echo ($context["text_yes"] ?? null);
            echo "</label>
                                <input class=\"custom_radio\" type=\"radio\" name=\"kbmp_email_on_new_order\" id=\"kbmp_email_on_new_order_off\" value=\"0\" ";
            // line 1014
            if (((isset($context["kbmp_email_on_new_order"]) || array_key_exists("kbmp_email_on_new_order", $context)) && (($context["kbmp_email_on_new_order"] ?? null) == "0"))) {
                echo "checked";
            }
            echo ">
                                <label class=\"custom_radio_label\" for=\"kbmp_email_on_new_order_off\">";
            // line 1015
            echo ($context["text_no"] ?? null);
            echo "</label>
                                <br>
                                <input class=\"custom_radio\" type=\"checkbox\" name=\"kbmp_email_on_new_order_global\" id=\"kbmp_email_on_new_order_global\" value=\"1\" ";
            // line 1017
            if (((isset($context["kbmp_email_on_new_order_global"]) || array_key_exists("kbmp_email_on_new_order_global", $context)) &&  !twig_test_empty(($context["kbmp_email_on_new_order_global"] ?? null)))) {
                echo " ";
                echo "checked";
                echo " ";
            }
            echo " />
                                <label class=\"custom_radio_label\" for=\"kbmp_email_on_new_order_global\"><em>";
            // line 1018
            echo ($context["text_use_global"] ?? null);
            echo "</em></label>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"category\">";
            // line 1022
            echo ($context["label_categories_allowed"] ?? null);
            echo "</label>
                            <div class=\"col-sm-9\">
                                <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
            // line 1024
            echo ($context["text_categories"] ?? null);
            echo "\" id=\"input-category\" class=\"form-control\" autocomplete=\"off\">
                                <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                    ";
            // line 1026
            if (((isset($context["categories"]) || array_key_exists("categories", $context)) &&  !twig_test_empty(($context["categories"] ?? null)))) {
                echo " 
                                    ";
                // line 1027
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
                    echo " 
                                    <div id=\"product-category";
                    // line 1028
                    echo (($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 = $context["product_category"]) && is_array($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523) || $__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 instanceof ArrayAccess ? ($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523["category_id"] ?? null) : null);
                    echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                    echo (($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc = $context["product_category"]) && is_array($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc) || $__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc instanceof ArrayAccess ? ($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc["name"] ?? null) : null);
                    echo " 
                                      <input type=\"hidden\" name=\"product_category[]\" value=\"";
                    // line 1029
                    echo (($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a = $context["product_category"]) && is_array($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a) || $__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a instanceof ArrayAccess ? ($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a["category_id"] ?? null) : null);
                    echo "\" />
                                    </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1032
                echo "                                    ";
            }
            echo " 
                                </div>
                                <p class=\"help-block\">\t\t\t\t\t\t\t\t
                                    ";
            // line 1035
            echo ($context["help_block_categories_allowed"] ?? null);
            echo " 
                                </p>\t
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 1041
        echo "                
            <div class=\"tab-pane\" id=\"tab-ip\">
              <fieldset>
                <legend>";
        // line 1044
        echo ($context["text_ip"] ?? null);
        echo "</legend>
                <div id=\"ip\"></div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type=\"text/javascript\"><!--
  \$('input[name=\"affiliate\"]').on('change', function() {
    if (\$(this).val() == '1') { 
      \$('#tab-affiliate :input').not('input[name=\"affiliate\"]').prop('disabled', false);
    } else {
      \$('#tab-affiliate :input').not('input[name=\"affiliate\"]').prop('disabled', true);
    }
  }); 

  \$('input[name=\\'affiliate\\']:checked').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('select[name=\\'customer_group_id\\']').on('change', function() {
    \$.ajax({
      url: 'index.php?route=customer/customer/customfield&user_token=";
        // line 1068
        echo ($context["user_token"] ?? null);
        echo "&customer_group_id=' + this.value,
      dataType: 'json',
      success: function(json) {
        \$('.custom-field').hide();
        \$('.custom-field').removeClass('required');

        for (i = 0; i < json.length; i++) {
          custom_field = json[i];

          \$('.custom-field' + custom_field['custom_field_id']).show();

          if (custom_field['required']) {
            \$('.custom-field' + custom_field['custom_field_id']).addClass('required');
          }
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('select[name=\\'customer_group_id\\']').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  var address_row = ";
        // line 1093
        echo ($context["address_row"] ?? null);
        echo ";

  function addAddress() {
    html  = '<div class=\"tab-pane\" id=\"tab-address' + address_row + '\">';
    html += '  <input type=\"hidden\" name=\"address[' + address_row + '][address_id]\" value=\"\" />';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-firstname' + address_row + '\">";
        // line 1100
        echo ($context["entry_firstname"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][firstname]\" value=\"\" placeholder=\"";
        // line 1101
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-lastname' + address_row + '\">";
        // line 1105
        echo ($context["entry_lastname"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][lastname]\" value=\"\" placeholder=\"";
        // line 1106
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-company' + address_row + '\">";
        // line 1110
        echo ($context["entry_company"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][company]\" value=\"\" placeholder=\"";
        // line 1111
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-company' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-address-1' + address_row + '\">";
        // line 1115
        echo ($context["entry_address_1"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_1]\" value=\"\" placeholder=\"";
        // line 1116
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-address-1' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-address-2' + address_row + '\">";
        // line 1120
        echo ($context["entry_address_2"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_2]\" value=\"\" placeholder=\"";
        // line 1121
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-address-2' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-city' + address_row + '\">";
        // line 1125
        echo ($context["entry_city"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][city]\" value=\"\" placeholder=\"";
        // line 1126
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-city' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-postcode' + address_row + '\">";
        // line 1130
        echo ($context["entry_postcode"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][postcode]\" value=\"\" placeholder=\"";
        // line 1131
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-postcode' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-country' + address_row + '\">";
        // line 1135
        echo ($context["entry_country"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][country_id]\" id=\"input-country' + address_row + '\" onchange=\"country(this, \\'' + address_row + '\\', \\'0\\');\" class=\"form-control\">';
      html += '         <option value=\"\">";
        // line 1137
        echo ($context["text_select"] ?? null);
        echo "</option>';
      ";
        // line 1138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 1139
            echo "      html += '         <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 1139);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 1139), "js");
            echo "</option>';
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1141
        echo "      html += '      </select></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-zone' + address_row + '\">";
        // line 1145
        echo ($context["entry_zone"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][zone_id]\" id=\"input-zone' + address_row + '\" class=\"form-control\"><option value=\"\">";
        // line 1146
        echo ($context["text_none"] ?? null);
        echo "</option></select></div>';
    html += '  </div>';

    // Custom Fields
    ";
        // line 1150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 1151
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 1151) == "address")) {
                // line 1152
                echo "    ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1152) == "select")) {
                    // line 1153
                    echo "
    html += '  <div class=\"form-group custom-field custom-field";
                    // line 1154
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1154);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1154) + 1);
                    echo "\">';
    html += '  \t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1155
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1155);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1155), "js");
                    echo "</label>';
    html += '  \t\t<div class=\"col-sm-10\">';
    html += '  \t\t  <select name=\"address[' + address_row + '][custom_field][";
                    // line 1157
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1157);
                    echo "]\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1157);
                    echo "\" class=\"form-control\">';
    html += '  \t\t\t<option value=\"\">";
                    // line 1158
                    echo ($context["text_select"] ?? null);
                    echo "</option>';

    ";
                    // line 1160
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1160));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1161
                        echo "    html += '  \t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1161);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1161), "js");
                        echo "</option>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1163
                    echo "
    html += '  \t\t  </select>';
    html += '  \t\t</div>';
    html += '  \t  </div>';
    ";
                }
                // line 1168
                echo "
    ";
                // line 1169
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1169) == "radio")) {
                    // line 1170
                    echo "    html += '  \t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1170);
                    echo "\">';
    html += '  \t\t<label class=\"col-sm-2 control-label\">";
                    // line 1171
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1171), "js");
                    echo "</label>';
    html += '  \t\t<div class=\"col-sm-10\">';
    html += '  \t\t  <div>';

    ";
                    // line 1175
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1175));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1176
                        echo "    html += '  \t\t\t<div class=\"radio\"><label><input type=\"radio\" name=\"address[' + address_row + '][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1176);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1176);
                        echo "\" /> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1176), "js");
                        echo "</label></div>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1178
                    echo "
    html += '\t\t  </div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1183
                echo "
    ";
                // line 1184
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1184) == "checkbox")) {
                    // line 1185
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1185);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1185) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\">";
                    // line 1186
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1186), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div>';

    ";
                    // line 1190
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 1190));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 1191
                        echo "    html += '\t\t\t<div class=\"checkbox\"><label><input type=\"checkbox\" name=\"address[";
                        echo ($context["address_row"] ?? null);
                        echo "][custom_field][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1191);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 1191);
                        echo "\" /> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 1191), "js");
                        echo "</label></div>';
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1193
                    echo "
    html += '\t\t  </div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1198
                echo "
    ";
                // line 1199
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1199) == "text")) {
                    // line 1200
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1200);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1200) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1201
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1201);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1201), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1203
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1203);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1203), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1203), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1203);
                    echo "\" class=\"form-control\" />';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1207
                echo "
    ";
                // line 1208
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1208) == "textarea")) {
                    // line 1209
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1209);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1209) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1210
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1210);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1210), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <textarea name=\"address[' + address_row + '][custom_field][";
                    // line 1212
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1212);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1212), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1212);
                    echo "\" class=\"form-control\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1212), "js");
                    echo "</textarea>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1216
                echo "
    ";
                // line 1217
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1217) == "file")) {
                    // line 1218
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1218);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1218) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\">";
                    // line 1219
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1219), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <button type=\"button\" id=\"button-address' + address_row + '-custom-field";
                    // line 1221
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1221);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>';
    html += '\t\t  <input type=\"hidden\" name=\"address[' + address_row + '][";
                    // line 1222
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1222);
                    echo "]\" value=\"\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1222);
                    echo "\" />';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1226
                echo "
    ";
                // line 1227
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1227) == "date")) {
                    // line 1228
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1228);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1228) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1229
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1229);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1229), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group date\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1231
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1231);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1231), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1231), "js");
                    echo " data-date-format=\"YYYY-MM-DD\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1231);
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1235
                echo "
    ";
                // line 1236
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1236) == "time")) {
                    // line 1237
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1237);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1237) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1238
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1238);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1238), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group time\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1240
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1240);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1240), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1240), "js");
                    echo "\" data-date-format=\"HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1240);
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1244
                echo "
    ";
                // line 1245
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 1245) == "datetime")) {
                    // line 1246
                    echo "    html += '\t  <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1246);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 1246) + 1);
                    echo "\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 1247
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1247);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field_value"] ?? null), "name", [], "any", false, false, false, 1247), "js");
                    echo "</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group datetime\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 1249
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1249);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 1249), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 1249), "js");
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 1249);
                    echo "\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    ";
                }
                // line 1253
                echo "
    ";
            }
            // line 1255
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1256
        echo "
    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\">";
        // line 1258
        echo ($context["entry_default"] ?? null);
        echo "</label>';
    html += '    <div class=\"col-sm-10\"><label class=\"radio\"><input type=\"radio\" name=\"address[' + address_row + '][default]\" value=\"1\" /></label></div>';
    html += '  </div>';

    html += '</div>';

    \$('#tab-general .tab-content').append(html);

    \$('select[name=\\'customer_group_id\\']').trigger('change');

    \$('select[name=\\'address[' + address_row + '][country_id]\\']').trigger('change');

    \$('#address-add').before('<li><a href=\"#tab-address' + address_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'#address a:first\\').tab(\\'show\\'); \$(\\'a[href=\\\\\\'#tab-address' + address_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-address' + address_row + '\\').remove();\"></i> ";
        // line 1270
        echo ($context["tab_address"] ?? null);
        echo " ' + address_row + '</a></li>');

    \$('#address a[href=\\'#tab-address' + address_row + '\\']').tab('show');

    \$('.date').datetimepicker({
\t\tlanguage: '";
        // line 1275
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickTime: false
    });

\t\$('.datetime').datetimepicker({
\t\tlanguage: '";
        // line 1280
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickDate: true,
\t\tpickTime: true
    });

    \$('.time').datetimepicker({
\t\tlanguage: '";
        // line 1286
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickDate: false
    });

    \$('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group').eq(\$(this).attr('data-sort')).before(this);
\t\t}
\t\t
\t\tif (\$(this).attr('data-sort') > \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group:last').after(this);
\t\t}
\t\t
\t\tif (\$(this).attr('data-sort') < -\$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group:first').before(this);
\t\t}
    });

    address_row++;
  }
  //--></script> 
  <script type=\"text/javascript\"><!--
  function country(element, index, zone_id) {
    \$.ajax({
      url: 'index.php?route=localisation/country/country&user_token=";
        // line 1310
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + element.value,
      dataType: 'json',
      beforeSend: function() {
        \$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', true);
      },
      complete: function() {
        \$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', false);
      },
      success: function(json) {
        if (json['postcode_required'] == '1') {
          \$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().addClass('required');
        } else {
          \$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().removeClass('required');
        }

        html = '<option value=\"\">";
        // line 1325
        echo ($context["text_select"] ?? null);
        echo "</option>';

        if (json['zone'] && json['zone'] != '') {
          for (i = 0; i < json['zone'].length; i++) {
            html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

            if (json['zone'][i]['zone_id'] == zone_id) {
              html += ' selected=\"selected\"';
            }

            html += '>' + json['zone'][i]['name'] + '</option>';
          }
        } else {
          html += '<option value=\"0\">";
        // line 1338
        echo ($context["text_none"] ?? null);
        echo "</option>';
        }

        \$('select[name=\\'address[' + index + '][zone_id]\\']').html(html);
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  }

  \$('select[name\$=\\'[country_id]\\']').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#history').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
  });

  \$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 1358
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

  \$('#button-history').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addhistory&user_token=";
        // line 1364
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: 'comment=' + encodeURIComponent(\$('#tab-history textarea[name=\\'comment\\']').val()),
      beforeSend: function() {
        \$('#button-history').button('loading');
      },
      complete: function() {
        \$('#button-history').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-history').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-history').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 1384
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

          \$('#tab-history textarea[name=\\'comment\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#transaction').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
  });

  \$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 1402
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

  \$('#button-transaction').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addtransaction&user_token=";
        // line 1408
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent(\$('#tab-transaction input[name=\\'description\\']').val()) + '&amount=' + encodeURIComponent(\$('#tab-transaction input[name=\\'amount\\']').val()),
      beforeSend: function() {
        \$('#button-transaction').button('loading');
      },
      complete: function() {
        \$('#button-transaction').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-transaction').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-transaction').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 1428
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

          \$('#tab-transaction input[name=\\'amount\\']').val('');
          \$('#tab-transaction input[name=\\'description\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#reward').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#reward').load(this.href);
  });

  \$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1447
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

  \$('#button-reward').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addreward&user_token=";
        // line 1453
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent(\$('#tab-reward input[name=\\'description\\']').val()) + '&points=' + encodeURIComponent(\$('#tab-reward input[name=\\'points\\']').val()),
      beforeSend: function() {
        \$('#button-reward').button('loading');
      },
      complete: function() {
        \$('#button-reward').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-reward').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-reward').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1473
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

          \$('#tab-reward input[name=\\'points\\']').val('');
          \$('#tab-reward input[name=\\'description\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('#ip').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#ip').load(this.href);
  });

  \$('#ip').load('index.php?route=customer/customer/ip&user_token=";
        // line 1491
        echo ($context["user_token"] ?? null);
        echo "&customer_id=";
        echo ($context["customer_id"] ?? null);
        echo "');

  \$('#content').delegate('button[id^=\\'button-custom-field\\'], button[id^=\\'button-address\\']', 'click', function() {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload/upload&user_token=";
        // line 1511
        echo ($context["user_token"] ?? null);
        echo "',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            \$(node).button('loading');
          },
          complete: function() {
            \$(node).button('reset');
          },
          success: function(json) {
            \$(node).parent().find('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input[type=\\'hidden\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);
            }

            if (json['code']) {
              \$(node).parent().find('input[type=\\'hidden\\']').val(json['code']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });
\t  
  \$('#content').delegate('button[id^=\\'button-seller-field\\']', 'click', function() {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload/upload&user_token=";
        // line 1565
        echo ($context["user_token"] ?? null);
        echo "',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            \$(node).button('loading');
          },
          complete: function() {
            \$(node).button('reset');
          },
          success: function(json) {
            \$(node).parent().find('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input[type=\\'hidden\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);
            }

            if (json['code']) {
              \$(node).parent().find('input[type=\\'hidden\\']').val(json['filename']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });

  \$('.date').datetimepicker({
    language: '";
        // line 1602
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });

  \$('.datetime').datetimepicker({
    language: '";
        // line 1607
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: true,
    pickTime: true
  });

  \$('.time').datetimepicker({
    language: '";
        // line 1613
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: false
  });

  // Sort the custom fields
  ";
        // line 1618
        $context["address_row"] = 1;
        // line 1619
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 1620
            echo "  \$('#tab-address";
            echo ($context["address_row"] ?? null);
            echo " .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address";
            // line 1621
            echo ($context["address_row"] ?? null);
            echo " .form-group').length) {
      \$('#tab-address";
            // line 1622
            echo ($context["address_row"] ?? null);
            echo " .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-address";
            // line 1625
            echo ($context["address_row"] ?? null);
            echo " .form-group').length) {
      \$('#tab-address";
            // line 1626
            echo ($context["address_row"] ?? null);
            echo " .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-address";
            // line 1629
            echo ($context["address_row"] ?? null);
            echo " .form-group').length) {
      \$('#tab-address";
            // line 1630
            echo ($context["address_row"] ?? null);
            echo " .form-group:first').before(this);
    }
  });
  ";
            // line 1633
            $context["address_row"] = (($context["address_row"] ?? null) + 1);
            // line 1634
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1635
        echo "
  \$('#tab-customer .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group:first').before(this);
    }
  });

  \$('#tab-affiliate .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group:first').before(this);
    }
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'payment\\']').on('change', function() {
    \$('.payment').hide();

    \$('#payment-' + this.value).show();
  });

  \$('input[name=\\'payment\\']:checked').trigger('change');
  //--></script> 
</div>

                    <script type=\"text/javascript\">
                        // Category
                        \$('input[name=\\'category\\']').autocomplete({
                                'source': function(request, response) {
                                    \$.ajax({
                                        url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1680
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
                                        dataType: 'json',
                                        success: function(json) {
                                            response(\$.map(json, function(item) {
                                                return {
                                                    label: item['name'],
                                                    value: item['category_id']
                                                }
                                            }));
                                        }
                                    });
                                },
                                'select': function(item) {
                                    \$('input[name=\\'category\\']').val('');
                                    \$('#product-category' + item['value']).remove();
                                    \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
                                }
                        });
                        \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
                            \$(this).parent().remove();
                        });
                    </script>
                
";
        // line 1703
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "customer/customer_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4406 => 1703,  4380 => 1680,  4333 => 1635,  4327 => 1634,  4325 => 1633,  4319 => 1630,  4315 => 1629,  4309 => 1626,  4305 => 1625,  4299 => 1622,  4295 => 1621,  4290 => 1620,  4285 => 1619,  4283 => 1618,  4275 => 1613,  4266 => 1607,  4258 => 1602,  4218 => 1565,  4161 => 1511,  4136 => 1491,  4113 => 1473,  4088 => 1453,  4077 => 1447,  4053 => 1428,  4028 => 1408,  4017 => 1402,  3994 => 1384,  3969 => 1364,  3958 => 1358,  3935 => 1338,  3919 => 1325,  3901 => 1310,  3874 => 1286,  3865 => 1280,  3857 => 1275,  3849 => 1270,  3834 => 1258,  3830 => 1256,  3824 => 1255,  3820 => 1253,  3807 => 1249,  3800 => 1247,  3793 => 1246,  3791 => 1245,  3788 => 1244,  3775 => 1240,  3768 => 1238,  3761 => 1237,  3759 => 1236,  3756 => 1235,  3743 => 1231,  3736 => 1229,  3729 => 1228,  3727 => 1227,  3724 => 1226,  3715 => 1222,  3707 => 1221,  3702 => 1219,  3695 => 1218,  3693 => 1217,  3690 => 1216,  3677 => 1212,  3670 => 1210,  3663 => 1209,  3661 => 1208,  3658 => 1207,  3645 => 1203,  3638 => 1201,  3631 => 1200,  3629 => 1199,  3626 => 1198,  3619 => 1193,  3604 => 1191,  3600 => 1190,  3593 => 1186,  3586 => 1185,  3584 => 1184,  3581 => 1183,  3574 => 1178,  3561 => 1176,  3557 => 1175,  3550 => 1171,  3545 => 1170,  3543 => 1169,  3540 => 1168,  3533 => 1163,  3522 => 1161,  3518 => 1160,  3513 => 1158,  3507 => 1157,  3500 => 1155,  3494 => 1154,  3491 => 1153,  3488 => 1152,  3485 => 1151,  3481 => 1150,  3474 => 1146,  3470 => 1145,  3464 => 1141,  3453 => 1139,  3449 => 1138,  3445 => 1137,  3440 => 1135,  3433 => 1131,  3429 => 1130,  3422 => 1126,  3418 => 1125,  3411 => 1121,  3407 => 1120,  3400 => 1116,  3396 => 1115,  3389 => 1111,  3385 => 1110,  3378 => 1106,  3374 => 1105,  3367 => 1101,  3363 => 1100,  3353 => 1093,  3325 => 1068,  3298 => 1044,  3293 => 1041,  3284 => 1035,  3277 => 1032,  3268 => 1029,  3262 => 1028,  3256 => 1027,  3252 => 1026,  3247 => 1024,  3242 => 1022,  3235 => 1018,  3227 => 1017,  3222 => 1015,  3216 => 1014,  3212 => 1013,  3206 => 1012,  3201 => 1010,  3194 => 1006,  3186 => 1005,  3181 => 1003,  3175 => 1002,  3171 => 1001,  3165 => 1000,  3160 => 998,  3153 => 994,  3145 => 993,  3140 => 991,  3134 => 990,  3130 => 989,  3124 => 988,  3119 => 986,  3112 => 982,  3104 => 981,  3099 => 979,  3093 => 978,  3089 => 977,  3083 => 976,  3078 => 974,  3071 => 970,  3063 => 969,  3059 => 967,  3054 => 966,  3050 => 965,  3044 => 962,  3038 => 959,  3032 => 956,  3029 => 955,  3020 => 951,  3012 => 946,  3005 => 944,  2998 => 940,  2993 => 938,  2988 => 936,  2980 => 931,  2970 => 926,  2962 => 921,  2957 => 919,  2950 => 915,  2945 => 913,  2940 => 911,  2932 => 906,  2922 => 901,  2914 => 896,  2909 => 894,  2904 => 892,  2896 => 887,  2892 => 885,  2890 => 884,  2883 => 879,  2878 => 877,  2873 => 876,  2868 => 874,  2863 => 873,  2861 => 872,  2855 => 869,  2849 => 865,  2843 => 864,  2841 => 863,  2835 => 862,  2830 => 860,  2825 => 857,  2819 => 856,  2817 => 855,  2811 => 854,  2806 => 852,  2797 => 848,  2792 => 846,  2783 => 842,  2778 => 840,  2769 => 836,  2764 => 834,  2757 => 829,  2751 => 828,  2749 => 827,  2743 => 826,  2738 => 824,  2731 => 819,  2725 => 818,  2723 => 817,  2717 => 816,  2712 => 814,  2702 => 808,  2698 => 806,  2694 => 804,  2692 => 803,  2685 => 800,  2681 => 798,  2677 => 796,  2675 => 795,  2668 => 792,  2664 => 790,  2660 => 788,  2658 => 787,  2652 => 784,  2643 => 780,  2638 => 778,  2633 => 776,  2629 => 774,  2623 => 773,  2620 => 772,  2615 => 769,  2609 => 768,  2607 => 767,  2594 => 763,  2586 => 760,  2579 => 759,  2576 => 758,  2571 => 755,  2565 => 754,  2563 => 753,  2550 => 749,  2542 => 746,  2535 => 745,  2532 => 744,  2527 => 741,  2521 => 740,  2519 => 739,  2506 => 735,  2498 => 732,  2491 => 731,  2488 => 730,  2483 => 727,  2477 => 726,  2475 => 725,  2467 => 724,  2459 => 723,  2454 => 721,  2447 => 720,  2444 => 719,  2439 => 716,  2433 => 715,  2431 => 714,  2421 => 713,  2414 => 711,  2407 => 710,  2404 => 709,  2399 => 706,  2393 => 705,  2391 => 704,  2381 => 703,  2374 => 701,  2367 => 700,  2364 => 699,  2359 => 696,  2353 => 695,  2351 => 694,  2348 => 693,  2341 => 692,  2336 => 691,  2330 => 690,  2327 => 689,  2322 => 687,  2316 => 686,  2313 => 685,  2310 => 684,  2306 => 683,  2301 => 681,  2294 => 680,  2291 => 679,  2286 => 676,  2280 => 675,  2278 => 674,  2275 => 673,  2268 => 672,  2263 => 671,  2257 => 670,  2254 => 669,  2249 => 667,  2243 => 666,  2240 => 665,  2237 => 664,  2233 => 663,  2228 => 661,  2221 => 660,  2218 => 659,  2213 => 656,  2207 => 655,  2205 => 654,  2202 => 653,  2196 => 652,  2188 => 650,  2180 => 648,  2177 => 647,  2173 => 646,  2169 => 645,  2163 => 644,  2156 => 642,  2149 => 641,  2146 => 640,  2143 => 639,  2139 => 638,  2131 => 635,  2124 => 633,  2119 => 630,  2113 => 628,  2111 => 627,  2105 => 626,  2098 => 624,  2089 => 620,  2084 => 618,  2075 => 614,  2070 => 612,  2065 => 610,  2060 => 607,  2053 => 602,  2047 => 599,  2043 => 598,  2040 => 597,  2038 => 596,  2033 => 594,  2029 => 593,  2023 => 590,  2018 => 588,  2014 => 586,  2012 => 585,  2005 => 580,  1999 => 579,  1997 => 578,  1991 => 574,  1983 => 573,  1975 => 571,  1973 => 570,  1968 => 568,  1965 => 567,  1959 => 566,  1956 => 565,  1951 => 562,  1945 => 561,  1943 => 560,  1926 => 556,  1916 => 553,  1909 => 552,  1906 => 551,  1901 => 548,  1895 => 547,  1893 => 546,  1876 => 542,  1866 => 539,  1859 => 538,  1856 => 537,  1851 => 534,  1845 => 533,  1843 => 532,  1826 => 528,  1816 => 525,  1809 => 524,  1806 => 523,  1801 => 520,  1795 => 519,  1793 => 518,  1785 => 517,  1775 => 516,  1770 => 514,  1763 => 513,  1760 => 512,  1755 => 509,  1749 => 508,  1747 => 507,  1733 => 506,  1724 => 504,  1717 => 503,  1714 => 502,  1709 => 499,  1703 => 498,  1701 => 497,  1687 => 496,  1678 => 494,  1671 => 493,  1668 => 492,  1663 => 489,  1657 => 488,  1655 => 487,  1652 => 486,  1645 => 485,  1640 => 484,  1632 => 483,  1629 => 482,  1624 => 480,  1616 => 479,  1613 => 478,  1610 => 477,  1606 => 476,  1601 => 474,  1594 => 473,  1591 => 472,  1586 => 469,  1580 => 468,  1578 => 467,  1575 => 466,  1568 => 465,  1563 => 464,  1555 => 463,  1552 => 462,  1547 => 460,  1539 => 459,  1536 => 458,  1533 => 457,  1529 => 456,  1524 => 454,  1517 => 453,  1514 => 452,  1509 => 449,  1503 => 448,  1501 => 447,  1498 => 446,  1492 => 445,  1484 => 443,  1476 => 441,  1473 => 440,  1469 => 439,  1465 => 438,  1455 => 437,  1446 => 435,  1439 => 434,  1436 => 433,  1433 => 432,  1429 => 431,  1425 => 429,  1419 => 428,  1417 => 427,  1410 => 425,  1403 => 423,  1398 => 420,  1392 => 419,  1390 => 418,  1387 => 417,  1381 => 416,  1373 => 414,  1365 => 412,  1362 => 411,  1358 => 410,  1354 => 409,  1344 => 408,  1337 => 406,  1332 => 403,  1326 => 402,  1324 => 401,  1314 => 400,  1307 => 398,  1302 => 395,  1296 => 394,  1294 => 393,  1284 => 392,  1277 => 390,  1264 => 386,  1257 => 384,  1252 => 381,  1246 => 380,  1244 => 379,  1234 => 378,  1227 => 376,  1214 => 372,  1207 => 370,  1202 => 367,  1196 => 366,  1194 => 365,  1184 => 364,  1177 => 362,  1172 => 359,  1166 => 358,  1164 => 357,  1154 => 356,  1147 => 354,  1140 => 352,  1135 => 351,  1130 => 350,  1128 => 349,  1123 => 346,  1119 => 344,  1113 => 343,  1110 => 342,  1105 => 339,  1099 => 338,  1097 => 337,  1089 => 336,  1081 => 335,  1076 => 333,  1071 => 332,  1068 => 331,  1063 => 328,  1057 => 327,  1055 => 326,  1045 => 325,  1038 => 323,  1030 => 322,  1027 => 321,  1024 => 320,  1020 => 319,  1016 => 318,  1013 => 317,  1011 => 316,  1002 => 309,  997 => 307,  992 => 306,  987 => 304,  982 => 303,  980 => 302,  972 => 299,  966 => 295,  961 => 293,  956 => 292,  951 => 290,  946 => 289,  944 => 288,  938 => 285,  932 => 281,  927 => 279,  922 => 278,  917 => 276,  912 => 275,  910 => 274,  904 => 271,  899 => 269,  893 => 265,  887 => 264,  885 => 263,  879 => 262,  874 => 260,  869 => 257,  863 => 256,  861 => 255,  855 => 254,  850 => 252,  845 => 250,  841 => 248,  835 => 247,  832 => 246,  827 => 243,  821 => 242,  819 => 241,  806 => 237,  798 => 234,  791 => 233,  788 => 232,  783 => 229,  777 => 228,  775 => 227,  762 => 223,  754 => 220,  747 => 219,  744 => 218,  739 => 215,  733 => 214,  731 => 213,  718 => 209,  710 => 206,  703 => 205,  700 => 204,  695 => 201,  689 => 200,  687 => 199,  679 => 198,  671 => 197,  666 => 195,  659 => 194,  656 => 193,  651 => 190,  645 => 189,  643 => 188,  633 => 187,  626 => 185,  619 => 184,  616 => 183,  611 => 180,  605 => 179,  603 => 178,  593 => 177,  586 => 175,  579 => 174,  576 => 173,  571 => 170,  565 => 169,  563 => 168,  560 => 167,  553 => 166,  548 => 165,  542 => 164,  539 => 163,  534 => 161,  528 => 160,  525 => 159,  522 => 158,  518 => 157,  513 => 155,  506 => 154,  503 => 153,  498 => 150,  492 => 149,  490 => 148,  487 => 147,  480 => 146,  475 => 145,  469 => 144,  466 => 143,  461 => 141,  455 => 140,  452 => 139,  449 => 138,  445 => 137,  440 => 135,  433 => 134,  430 => 133,  425 => 130,  419 => 129,  417 => 128,  414 => 127,  408 => 126,  400 => 124,  392 => 122,  389 => 121,  385 => 120,  381 => 119,  375 => 118,  368 => 116,  361 => 115,  358 => 114,  355 => 113,  351 => 112,  347 => 110,  341 => 109,  339 => 108,  333 => 107,  328 => 105,  323 => 102,  317 => 101,  315 => 100,  309 => 99,  304 => 97,  299 => 94,  293 => 93,  291 => 92,  285 => 91,  280 => 89,  275 => 86,  269 => 85,  267 => 84,  261 => 83,  256 => 81,  250 => 77,  244 => 76,  236 => 74,  228 => 72,  225 => 71,  221 => 70,  215 => 67,  210 => 65,  199 => 58,  193 => 57,  191 => 56,  178 => 55,  173 => 54,  171 => 53,  167 => 52,  159 => 46,  155 => 44,  150 => 42,  146 => 41,  141 => 39,  137 => 38,  133 => 37,  128 => 36,  126 => 35,  123 => 34,  117 => 32,  115 => 31,  110 => 29,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-customer\" data-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"{{ cancel }}\" data-toggle=\"tooltip\" title=\"{{ button_cancel }}\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ul class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
        <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> {% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    {% endif %}
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> {{ text_form }}</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">{{ tab_general }}</a></li>
            <li><a href=\"#tab-affiliate\" data-toggle=\"tab\">{{ tab_affiliate }}</a></li>

                    {% if (marketplace_enable) %}
                    <li><a href=\"#seller_register\" data-toggle=\"tab\">{{ seller }}</a></li>
                    {% endif %}
                
            {% if customer_id %}
            <li><a href=\"#tab-history\" data-toggle=\"tab\">{{ tab_history }}</a></li>
            <li><a href=\"#tab-transaction\" data-toggle=\"tab\">{{ tab_transaction }}</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">{{ tab_reward }}</a></li>
            <li><a href=\"#tab-ip\" data-toggle=\"tab\">{{ tab_ip }}</a></li>

                    {% if (is_seller and marketplace_enable == 1) %} 
                        <li><a href=\"#tab-seller\" data-toggle=\"tab\">{{ tab_seller }}</a></li>
                    {% endif %}
                
            {% endif %}
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"address\">
                    <li class=\"active\"><a href=\"#tab-customer\" data-toggle=\"tab\">{{ tab_general }}</a></li>
                    {% set address_row = 1 %}
                    {% for address in addresses %}
                    <li><a href=\"#tab-address{{ address_row }}\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('#address a:first').tab('show'); \$('#address a[href=\\'#tab-address{{ address_row }}\\']').parent().remove(); \$('#tab-address{{ address_row }}').remove();\"></i> {{ tab_address }} {{ address_row }}</a></li>
                    {% set address_row = address_row + 1 %}
                    {% endfor %}
                    <li id=\"address-add\"><a onclick=\"addAddress();\"><i class=\"fa fa-plus-circle\"></i> {{ button_address_add }}</a></li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-customer\">
                      <fieldset>
                        <legend>{{ text_account }}</legend>
                        <div class=\"form-group hidden\">
                          <label class=\"col-sm-2 control-label\" for=\"input-customer-group\">{{ entry_customer_group }}</label>
                          <div class=\"col-sm-10\">
                            <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                              {% for customer_group in customer_groups %}
                              {% if customer_group.customer_group_id == customer_group_id %}
                              <option value=\"{{ customer_group.customer_group_id }}\" selected=\"selected\">{{ customer_group.name }}</option>
                              {% else %}
                              <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name }}</option>
                              {% endif %}
                              {% endfor %}
                            </select>
                          </div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-firstname\">{{ entry_firstname }}</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\" />
                            {% if error_firstname %}
                            <div class=\"text-danger\">{{ error_firstname }}</div>
                            {% endif %}</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-lastname\">{{ entry_lastname }}</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\" />
                            {% if error_lastname %}
                            <div class=\"text-danger\">{{ error_lastname }}</div>
                            {% endif %}</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-email\">{{ entry_email }}</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" />
                            {% if error_email %}
                            <div class=\"text-danger\">{{ error_email }}</div>
                            {% endif %}</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-telephone\">{{ entry_telephone }}</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\" />
                            {% if error_telephone %}
                            <div class=\"text-danger\">{{ error_telephone }}</div>
                            {% endif %}</div>
                        </div>
                        {% for custom_field in custom_fields %}
                        {% if custom_field.location == 'account' %}
                        {% if custom_field.type == 'select' %}
                        <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                          <div class=\"col-sm-10\">
                            <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\">
                              <option value=\"\">{{ text_select }}</option>
                              {% for custom_field_value in custom_field.custom_field_value %}
                              {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}
                              <option value=\"{{ custom_field_value.custom_field_value_id }}\" selected=\"selected\">{{ custom_field_value.name }}</option>
                              {% else %}
                              <option value=\"{{ custom_field_value.custom_field_value_id }}\">{{ custom_field_value.name }}</option>
                              {% endif %}
                              {% endfor %}
                            </select>
                            {% if error_custom_field[custom_field.custom_field_id] %}
                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                            {% endif %}</div>
                        </div>
                        {% endif %}
                        {% if custom_field.type == 'radio' %}
                        <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                          <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                          <div class=\"col-sm-10\">
                            <div> {% for custom_field_value in custom_field.custom_field_value %}
                              <div class=\"radio\"> {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}
                                <label>
                                  <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" checked=\"checked\" />
                                  {{ custom_field_value.name }}</label>
                                {% else %}
                                <label>
                                  <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" />
                                  {{ custom_field_value.name }}</label>
                                {% endif %}</div>
                              {% endfor %} </div>
                            {% if error_custom_field[custom_field.custom_field_id] %}
                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                            {% endif %}</div>
                        </div>
                        {% endif %}
                        {% if custom_field.type == 'checkbox' %}
                        <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                          <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                          <div class=\"col-sm-10\">
                            <div> {% for custom_field_value in custom_field.custom_field_value %}
                              <div class=\"checkbox\">{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %}
                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" checked=\"checked\" />
                                  {{ custom_field_value.name }}</label>
                                {% else %}
                                <label>
                                  <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" />
                                  {{ custom_field_value.name }}</label>
                                {% endif %}</div>
                              {% endfor %}</div>
                            {% if error_custom_field[custom_field.custom_field_id] %}
                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                            {% endif %}</div>
                        </div>
                        {% endif %}
                        {% if custom_field.type == 'text' %}
                        <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                            {% if error_custom_field[custom_field.custom_field_id] %}
                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                            {% endif %}</div>
                        </div>
                        {% endif %}
                        {% if custom_field.type == 'textarea' %}
                        <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                            {% if error_custom_field[custom_field.custom_field_id] %}
                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                            {% endif %}</div>
                        </div>
                        {% endif %}
                        {% if custom_field.type == 'file' %}
                        <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                          <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                          <div class=\"col-sm-10\">
                            <button type=\"button\" id=\"button-custom-field{{ custom_field.custom_field_id }}\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> {{ button_upload }}</button>
                            <input type=\"hidden\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] }}\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" />
                            {% if error_custom_field[custom_field.custom_field_id] %}
                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                            {% endif %}</div>
                        </div>
                        {% endif %}
                        {% if custom_field.type == 'date' %}
                        <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group date\">
                              <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            {% if error_custom_field[custom_field.custom_field_id] %}
                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                            {% endif %}</div>
                        </div>
                        {% endif %}
                        {% if custom_field.type == 'time' %}
                        <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group time\">
                              <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"HH:mm\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            {% if error_custom_field[custom_field.custom_field_id] %}
                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                            {% endif %}</div>
                        </div>
                        {% endif %}
                        {% if custom_field.type == 'datetime' %}
                        <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                          <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                          <div class=\"col-sm-10\">
                            <div class=\"input-group datetime\">
                              <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                              <span class=\"input-group-btn\">
                              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                              </span></div>
                            {% if error_custom_field[custom_field.custom_field_id] %}
                            <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                            {% endif %}</div>
                        </div>
                        {% endif %}
                        {% endif %}
                        {% endfor %}
                      </fieldset>
                      <fieldset>
                        <legend>{{ text_password }}</legend>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-password\">{{ entry_password }}</label>
                          <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" autocomplete=\"off\" />
                            {% if error_password %}
                            <div class=\"text-danger\">{{ error_password }}</div>
                            {% endif %}</div>
                        </div>
                        <div class=\"form-group required\">
                          <label class=\"col-sm-2 control-label\" for=\"input-confirm\">{{ entry_confirm }}</label>
                          <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\" placeholder=\"{{ entry_confirm }}\" autocomplete=\"off\" id=\"input-confirm\" class=\"form-control\" />
                            {% if error_confirm %}
                            <div class=\"text-danger\">{{ error_confirm }}</div>
                            {% endif %}</div>
                        </div>
                      </fieldset>
                      <fieldset>
                        <legend>{{ text_other }}</legend>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-newsletter\">{{ entry_newsletter }}</label>
                          <div class=\"col-sm-10\">
                            <select name=\"newsletter\" id=\"input-newsletter\" class=\"form-control\">
                              {% if newsletter %}
                              <option value=\"1\" selected=\"selected\">{{ text_enabled }}</option>
                              <option value=\"0\">{{ text_disabled }}</option>
                              {% else %}
                              <option value=\"1\">{{ text_enabled }}</option>
                              <option value=\"0\" selected=\"selected\">{{ text_disabled }}</option>
                              {% endif %}
                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-status\">{{ entry_status }}</label>
                          <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                              {% if status %}
                              <option value=\"1\" selected=\"selected\">{{ text_enabled }}</option>
                              <option value=\"0\">{{ text_disabled }}</option>
                              {% else %}
                              <option value=\"1\">{{ text_enabled }}</option>
                              <option value=\"0\" selected=\"selected\">{{ text_disabled }}</option>
                              {% endif %}
                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-safe\"><span data-toggle=\"tooltip\" title=\"{{ help_safe }}\">{{ entry_safe }}</span></label>
                          <div class=\"col-sm-10\">
                            <select name=\"safe\" id=\"input-safe\" class=\"form-control\">
                              {% if safe %}
                              <option value=\"1\" selected=\"selected\">{{ text_yes }}</option>
                              <option value=\"0\">{{ text_no }}</option>
                              {% else %}
                              <option value=\"1\">{{ text_yes }}</option>
                              <option value=\"0\" selected=\"selected\">{{ text_no }}</option>
                              {% endif %}
                            </select>
                          </div>
                        </div>
                      </fieldset>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- дополнительные поля для продавца -->
\t\t\t\t\t\t{% if sellers_fields %}
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>{{ text_sellerfields }}</legend>
\t\t\t\t\t\t\t\t{% for custom_field in sellers_fields %}
\t\t\t\t\t\t\t\t\t{% if custom_field.active %}
\t\t\t\t\t\t\t\t\t\t{% if custom_field.type == 'text' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group seller-field seller-field{{ custom_field.id_field }}{% if custom_field.required %} required{% endif %}\">
\t\t\t\t\t\t\t\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-seller-field{{ custom_field.id_field }}\">{{ custom_field.label }}</label>
\t\t\t\t\t\t\t\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"seller_field[{{ custom_field.id_field }}]\" value=\"{{ seller_field[custom_field.id_field] ? seller_field[custom_field.id_field] : '' }}\" placeholder=\"{{ custom_field.label }}\" id=\"input-seller-field{{ custom_field.id_field }}\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t{% if error_seller_field[custom_field.id_field] %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">{{ error_seller_field[custom_field.id_field] }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if custom_field.type == 'file' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group seller-field seller-field{{ custom_field.id_field }}\">
\t\t\t\t\t\t\t\t\t\t\t  <label class=\"col-sm-2 control-label\">{{ custom_field.label }}</label>
\t\t\t\t\t\t\t\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-seller-field{{ custom_field.id_field }}\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> {{ button_upload }}</button>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"seller_field[{{ custom_field.id_field }}]\" value=\"{{ seller_field[custom_field.id_field] }}\" id=\"input-seller-field{{ custom_field.id_field }}\" />
\t\t\t\t\t\t\t\t\t\t\t\t{% if error_seller_field[custom_field.id_field] %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">{{ error_seller_field[custom_field.id_field] }}</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t\t
                    </div>
                    {% set address_row = 1 %}
                    {% for address in addresses %}
                    <div class=\"tab-pane\" id=\"tab-address{{ address_row }}\">
                      <input type=\"hidden\" name=\"address[{{ address_row }}][address_id]\" value=\"{{ address.address_id }}\" />
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-firstname{{ address_row }}\">{{ entry_firstname }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[{{ address_row }}][firstname]\" value=\"{{ address.firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname{{ address_row }}\" class=\"form-control\" />
                          {% if error_address[address_row].firstname %}
                          <div class=\"text-danger\">{{ error_address[address_row].firstname }}</div>
                          {% endif %}</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-lastname{{ address_row }}\">{{ entry_lastname }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[{{ address_row }}][lastname]\" value=\"{{ address.lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname{{ address_row }}\" class=\"form-control\" />
                          {% if error_address[address_row].lastname %}
                          <div class=\"text-danger\">{{ error_address[address_row].lastname }}</div>
                          {% endif %}</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-company{{ address_row }}\">{{ entry_company }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[{{ address_row }}][company]\" value=\"{{ address.company }}\" placeholder=\"{{ entry_company }}\" id=\"input-company{{ address_row }}\" class=\"form-control\" />
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address-1{{ address_row }}\">{{ entry_address_1 }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[{{ address_row }}][address_1]\" value=\"{{ address.address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-address-1{{ address_row }}\" class=\"form-control\" />
                          {% if error_address[address_row].address_1 %}
                          <div class=\"text-danger\">{{ error_address[address_row].address_1 }}</div>
                          {% endif %}</div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address-2{{ address_row }}\">{{ entry_address_2 }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[{{ address_row }}][address_2]\" value=\"{{ address.address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-address-2{{ address_row }}\" class=\"form-control\" />
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-city{{ address_row }}\">{{ entry_city }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[{{ address_row }}][city]\" value=\"{{ address.city }}\" placeholder=\"{{ entry_city }}\" id=\"input-city{{ address_row }}\" class=\"form-control\" />
                          {% if error_address[address_row].city %}
                          <div class=\"text-danger\">{{ error_address[address_row].city }}</div>
                          {% endif %}</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-postcode{{ address_row }}\">{{ entry_postcode }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[{{ address_row }}][postcode]\" value=\"{{ address.postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-postcode{{ address_row }}\" class=\"form-control\" />
                          {% if error_address[address_row].postcode %}
                          <div class=\"text-danger\">{{ error_address[address_row].postcode }}</div>
                          {% endif %}</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-country{{ address_row }}\">{{ entry_country }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[{{ address_row }}][country_id]\" id=\"input-country{{ address_row }}\" onchange=\"country(this, '{{ address_row }}', '{{ address.zone_id }}');\" class=\"form-control\">
                            <option value=\"\">{{ text_select }}</option>
                            {% for country in countries %}
                            {% if country.country_id == address.country_id %}
                            <option value=\"{{ country.country_id }}\" selected=\"selected\">{{ country.name }}</option>
                            {% else %}
                            <option value=\"{{ country.country_id }}\">{{ country.name }}</option>
                            {% endif %}
                            {% endfor %}
                          </select>
                          {% if error_address[address_row].country %}
                          <div class=\"text-danger\">{{ error_address[address_row].country }}</div>
                          {% endif %}</div>
                      </div>
                      <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-zone{{ address_row }}\">{{ entry_zone }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[{{ address_row }}][zone_id]\" id=\"input-zone{{ address_row }}\" class=\"form-control\">
                          </select>
                          {% if error_address[address_row].zone %}
                          <div class=\"text-danger\">{{ error_address[address_row].zone }}</div>
                          {% endif %}</div>
                      </div>
                      {% for custom_field in custom_fields %}
                      {% if custom_field.location == 'address' %}
                      {% if custom_field.type == 'select' %}
                      <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]\" id=\"input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\">
                            <option value=\"\">{{ text_select }}</option>
                            {% for custom_field_value in custom_field.custom_field_value %}
                            {% if address.custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address.custom_field[custom_field.custom_field_id] %}
                            <option value=\"{{ custom_field_value.custom_field_value_id }}\" selected=\"selected\">{{ custom_field_value.name }}</option>
                            {% else %}
                            <option value=\"{{ custom_field_value.custom_field_value_id }}\">{{ custom_field_value.name }}</option>
                            {% endif %}
                            {% endfor %}
                          </select>
                          {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}
                          <div class=\"text-danger\">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>
                          {% endif %}</div>
                      </div>
                      {% endif %}
                      {% if custom_field.type == 'radio' %}
                      <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">
                        <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <div> {% for custom_field_value in custom_field.custom_field_value %}
                            <div class=\"radio\"> {% if address.custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address.custom_field[custom_field.custom_field_id] %}
                              <label>
                                <input type=\"radio\" name=\"address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" checked=\"checked\" />
                                {{ custom_field_value.name }}</label>
                              {% else %}
                              <label>
                                <input type=\"radio\" name=\"address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" />
                                {{ custom_field_value.name }}</label>
                              {% endif %}</div>
                            {% endfor %} </div>
                          {% if error_address[address_row].custom_field[custom_field.custom_field_id] %}
                          <div class=\"text-danger\">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>
                          {% endif %}</div>
                      </div>
                      {% endif %}
                      {% if custom_field.type == 'checkbox' %}
                      <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">
                        <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <div> {% for custom_field_value in custom_field.custom_field_value %}
                            <div class=\"checkbox\"> {% if address.custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in address.custom_field[custom_field.custom_field_id] %}
                              <label>
                                <input type=\"checkbox\" name=\"address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" checked=\"checked\" />
                                {{ custom_field_value.name }}</label>
                              {% else %}
                              <label>
                                <input type=\"checkbox\" name=\"address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" />
                                {{ custom_field_value.name }}</label>
                              {% endif %}</div>
                            {% endfor %} </div>
                          {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}
                          <div class=\"text-danger\">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>
                          {% endif %}</div>
                      </div>
                      {% endif %}
                      {% if custom_field.type == 'text' %}
                      <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]\" value=\"{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                          {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}
                          <div class=\"text-danger\">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>
                          {% endif %}</div>
                      </div>
                      {% endif %}
                      {% if custom_field.type == 'textarea' %}
                      <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                          {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}
                          <div class=\"text-danger\">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>
                          {% endif %}</div>
                      </div>
                      {% endif %}
                      {% if custom_field.type == 'file' %}
                      <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">
                        <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <button type=\"button\" id=\"button-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> {{ button_upload }}</button>
                          <input type=\"hidden\" name=\"address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]\" value=\"{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] }}\" />
                          {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}
                          <div class=\"text-danger\">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>
                          {% endif %}</div>
                      </div>
                      {% endif %}
                      {% if custom_field.type == 'date' %}
                      <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]\" value=\"{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                          {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}
                          <div class=\"text-danger\">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>
                          {% endif %}</div>
                      </div>
                      {% endif %}
                      {% if custom_field.type == 'time' %}
                      <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]\" value=\"{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"HH:mm\" id=\"input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                          {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}
                          <div class=\"text-danger\">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>
                          {% endif %}</div>
                      </div>
                      {% endif %}
                      {% if custom_field.type == 'datetime' %}
                      <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">
                        <label class=\"col-sm-2 control-label\" for=\"input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]\" value=\"{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span> </div>
                          {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}
                          <div class=\"text-danger\">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>
                          {% endif %}</div>
                      </div>
                      {% endif %}
                      {% endif %}
                      {% endfor %}
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">{{ entry_default }}</label>
                        <div class=\"col-sm-10\">
                          <label class=\"radio\">{% if address.address_id == address_id or not addresses %}
                            <input type=\"radio\" name=\"address[{{ address_row }}][default]\" value=\"{{ address_row }}\" checked=\"checked\" />
                            {% else %}
                            <input type=\"radio\" name=\"address[{{ address_row }}][default]\" value=\"{{ address_row }}\" />
                            {% endif %}</label>
                        </div>
                      </div>
                    </div>
                    {% set address_row = address_row + 1 %}
                    {% endfor %}
                  </div>
                </div>
              </div>
            </div>

                    {% if (marketplace_enable) %}
                        <div class=\"tab-pane\" id=\"seller_register\">
                            <fieldset>
                                <legend>{{register}}</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">{{register}}</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"seller\" value=\"1\" {{ approved == 1 ? 'checked =\"checked\"' : '' }}>
                                            {{yes_status}}
                                        </label>
                                        {% if approved != \"1\" %}
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"seller\" value=\"0\" {{ approved == 0 ? 'checked=\"checked\"' : '' }}>
                                            {{no_status}}
                                        </label>
                                        {% endif %}
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    {% endif %}
                
            <div class=\"tab-pane\" id=\"tab-affiliate\">
              <fieldset>
                <legend>{{ text_affiliate }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-company\">{{ entry_company }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"company\" value=\"{{ company }}\" placeholder=\"{{ entry_company }}\" id=\"input-company\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-website\">{{ entry_website }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"website\" value=\"{{ website }}\" placeholder=\"{{ entry_website }}\" id=\"input-website\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tracking\"><span data-toggle=\"tooltip\" title=\"{{ help_tracking }}\">{{ entry_tracking }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tracking\" value=\"{{ tracking }}\" placeholder=\"{{ entry_tracking }}\" id=\"input-tracking\" class=\"form-control\" />
                    {% if error_tracking %}
                    <div class=\"text-danger\">{{ error_tracking }}</div>
                    {% endif %}
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-commission\"><span data-toggle=\"tooltip\" title=\"{{ help_commission }}\">{{ entry_commission }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"commission\" value=\"{{ commission }}\" placeholder=\"{{ entry_commission }}\" id=\"input-commission\" class=\"form-control\" />
                  </div>
                </div>
                {% for custom_field in custom_fields %}
                {% if custom_field.location == 'affiliate' %}
                {% if custom_field.type == 'select' %}
                <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\">
                      <option value=\"\">{{ text_select }}</option>
                      {% for custom_field_value in custom_field.custom_field_value %}
                      {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}
                      <option value=\"{{ custom_field_value.custom_field_value_id }}\" selected=\"selected\">{{ custom_field_value.name }}</option>
                      {% else %}
                      <option value=\"{{ custom_field_value.custom_field_value_id }}\">{{ custom_field_value.name }}</option>
                      {% endif %}
                      {% endfor %}
                    </select>
                    {% if error_custom_field[custom_field.custom_field_id] %}
                    <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                    {% endif %}</div>
                </div>
                {% endif %}
                {% if custom_field.type == 'radio' %}
                <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                  <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <div> {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"radio\">{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}
                        <label>
                          <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" checked=\"checked\" />
                          {{ custom_field_value.name }}</label>
                        {% else %}
                        <label>
                          <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" />
                          {{ custom_field_value.name }}</label>
                        {% endif %}</div>
                      {% endfor %} </div>
                    {% if error_custom_field[custom_field.custom_field_id] %}
                    <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                    {% endif %}</div>
                </div>
                {% endif %}
                {% if custom_field.type == 'checkbox' %}
                <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                  <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <div> {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"checkbox\">{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %}
                        <label>
                          <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" checked=\"checked\" />
                          {{ custom_field_value.name }}</label>
                        {% else %}
                        <label>
                          <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" />
                          {{ custom_field_value.name }}</label>
                        {% endif %}</div>
                      {% endfor %} </div>
                    {% if error_custom_field[custom_field.custom_field_id] %}
                    <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                    {% endif %}</div>
                </div>
                {% endif %}
                {% if custom_field.type == 'text' %}
                <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                    {% if error_custom_field[custom_field.custom_field_id] %}
                    <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                    {% endif %}</div>
                </div>
                {% endif %}
                {% if custom_field.type == 'textarea' %}
                <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                    {% if error_custom_field[custom_field.custom_field_id] %}
                    <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                    {% endif %}</div>
                </div>
                {% endif %}
                {% if custom_field.type == 'file' %}
                <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                  <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <button type=\"button\" id=\"button-custom-field{{ custom_field.custom_field_id }}\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> {{ button_upload }}</button>
                    <input type=\"hidden\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] }}\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" />
                    {% if error_custom_field[custom_field.custom_field_id] %}
                    <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                    {% endif %}</div>
                </div>
                {% endif %}
                {% if custom_field.type == 'date' %}
                <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    {% if error_custom_field[custom_field.custom_field_id] %}
                    <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                    {% endif %}</div>
                </div>
                {% endif %}
                {% if custom_field.type == 'time' %}
                <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"HH:mm\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    {% if error_custom_field[custom_field.custom_field_id] %}
                    <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                    {% endif %}</div>
                </div>
                {% endif %}
                {% if custom_field.type == 'datetime' %}
                <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order }}\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span></div>
                    {% if error_custom_field[custom_field.custom_field_id] %}
                    <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
                    {% endif %}</div>
                </div>
                {% endif %}
                {% endif %}
                {% endfor %}
              </fieldset>
              <fieldset>
                <legend>{{ text_payment }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax\">{{ entry_tax }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tax\" value=\"{{ tax }}\" placeholder=\"{{ entry_tax }}\" id=\"input-tax\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">{{ entry_payment }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"radio\">
                      <label>{% if payment == 'cheque' %}
                        <input type=\"radio\" name=\"payment\" value=\"cheque\" checked=\"checked\" />
                        {% else %}
                        <input type=\"radio\" name=\"payment\" value=\"cheque\" />
                        {% endif %}
                        {{ text_cheque }}</label>
                    </div>
                    <div class=\"radio\">
                      <label> {% if payment == 'paypal' %}
                        <input type=\"radio\" name=\"payment\" value=\"paypal\" checked=\"checked\" />
                        {% else %}
                        <input type=\"radio\" name=\"payment\" value=\"paypal\" />
                        {% endif %}
                        {{ text_paypal }}</label>
                    </div>
                    <div class=\"radio\">
                      <label> {% if payment == 'bank' %}
                        <input type=\"radio\" name=\"payment\" value=\"bank\" checked=\"checked\" />
                        {% else %}
                        <input type=\"radio\" name=\"payment\" value=\"bank\" />
                        {% endif %}
                        {{ text_bank }}</label>
                    </div>
                  </div>
                </div>
                <div id=\"payment-cheque\" class=\"payment\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-cheque\">{{ entry_cheque }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"cheque\" value=\"{{ cheque }}\" placeholder=\"{{ entry_cheque }}\" id=\"input-cheque\" class=\"form-control\" />
                      {% if error_cheque %}
                      <div class=\"text-danger\">{{ error_cheque }}</div>
                      {% endif %}</div>
                  </div>
                </div>
                <div id=\"payment-paypal\" class=\"payment\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-paypal\">{{ entry_paypal }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"paypal\" value=\"{{ paypal }}\" placeholder=\"{{ entry_paypal }}\" id=\"input-paypal\" class=\"form-control\" />
                      {% if error_paypal %}
                      <div class=\"text-danger\">{{ error_paypal }}</div>
                      {% endif %}</div>
                  </div>
                </div>
                <div id=\"payment-bank\" class=\"payment\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-name\">{{ entry_bank_name }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_name\" value=\"{{ bank_name }}\" placeholder=\"{{ entry_bank_name }}\" id=\"input-bank-name\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-branch-number\">{{ entry_bank_branch_number }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_branch_number\" value=\"{{ bank_branch_number }}\" placeholder=\"{{ entry_bank_branch_number }}\" id=\"input-bank-branch-number\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-swift-code\">{{ entry_bank_swift_code }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_swift_code\" value=\"{{ bank_swift_code }}\" placeholder=\"{{ entry_bank_swift_code }}\" id=\"input-bank-swift-code\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-account-name\">{{ entry_bank_account_name }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_name\" value=\"{{ bank_account_name }}\" placeholder=\"{{ entry_bank_account_name }}\" id=\"input-bank-account-name\" class=\"form-control\" />
                      {% if error_bank_account_name %}
                      <div class=\"text-danger\">{{ error_bank_account_name }}</div>
                      {% endif %}</div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-bank-account-number\">{{ entry_bank_account_number }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_number\" value=\"{{ bank_account_number }}\" placeholder=\"{{ entry_bank_account_number }}\" id=\"input-bank-account-number\" class=\"form-control\" />
                      {% if error_bank_account_number %}
                      <div class=\"text-danger\">{{ error_bank_account_number }}</div>
                      {% endif %}</div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\">{{ entry_status }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"affiliate\" id=\"input-affiliate\" class=\"form-control\">
                      {% if affiliate %}
                      <option value=\"1\" selected=\"selected\">{{ text_enabled }}</option>
                      <option value=\"0\">{{ text_disabled }}</option>
                      {% else %}
                      <option value=\"1\">{{ text_enabled }}</option>
                      <option value=\"0\" selected=\"selected\">{{ text_disabled }}</option>
                      {% endif %}
                     </select>
                  </div>
                </div>
              </fieldset>           
            </div>         
            {% if customer_id %}
            <div class=\"tab-pane\" id=\"tab-history\">
              <fieldset>
                <legend>{{ text_history }}</legend>
                <div id=\"history\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>{{ text_history_add }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">{{ entry_comment }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"{{ entry_comment }}\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button id=\"button-history\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> {{ button_history_add }}</button>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-transaction\">
              <fieldset>
                <legend>{{ text_transaction }}</legend>
                <div id=\"transaction\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>{{ text_transaction_add }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-transaction-description\">{{ entry_description }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"{{ entry_description }}\" id=\"input-transaction-description\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-amount\">{{ entry_amount }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"{{ entry_amount }}\" id=\"input-amount\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button type=\"button\" id=\"button-transaction\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> {{ button_transaction_add }}</button>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <fieldset>
                <legend>{{ text_reward }}</legend>
                <div id=\"reward\"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend>{{ text_reward_add }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-reward-description\">{{ entry_description }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"{{ entry_description }}\" id=\"input-reward-description\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"{{ help_points }}\">{{ entry_points }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"points\" value=\"\" placeholder=\"{{ entry_points }}\" id=\"input-points\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <div class=\"text-right\">
                <button type=\"button\" id=\"button-reward\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> {{ button_reward_add }}</button>
              </div>
            </div>
            {% endif %}

                    {% if (is_seller and marketplace_enable == 1) %} 
                        <div class=\"tab-pane\" id=\"tab-seller\">
                          <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"kbmp_default_commission\">{{ label_default_commission }}</label>
                            <div class=\"col-sm-3\">
                              <div class=\"input-group fixed-width-small-group\">
                                    <input type=\"text\" name=\"kbmp_default_commission\" id=\"kbmp_default_commission\" value=\"{{ kbmp_default_commission }}\" class=\"fixed-width-small form-control\">
                                    <span class=\"input-group-addon\">%</span>\t\t\t\t\t\t\t\t\t\t
                                </div>
                                {% if (error_kbmp_default_commission is defined and error_kbmp_default_commission) %} 
                              <div class=\"text-danger\">{{ error_kbmp_default_commission }}</div>
                              {% endif %} 
                                <br>
                                <input class=\"custom_radio\" type=\"checkbox\" name=\"kbmp_default_commission_global\" id=\"kbmp_default_commission_global\" value=\"1\" {% if (kbmp_default_commission_global is defined and kbmp_default_commission_global is not empty) %} {{ 'checked' }} {% endif %} />
                                <label class=\"custom_radio_label\" for=\"kbmp_default_commission_global\"><em>{{ text_use_global }}</em></label>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"kbmp_new_product_approval_required\">{{ label_new_product_approval }}</label>
                            <div class=\"col-sm-9\">
                                <input class=\"custom_radio\" type=\"radio\" name=\"kbmp_new_product_approval_required\" id=\"kbmp_new_product_approval_required_on\" value=\"1\" {% if (kbmp_new_product_approval_required is defined and kbmp_new_product_approval_required == '1') %}checked{% endif %}>
                                <label class=\"custom_radio_label\" for=\"kbmp_new_product_approval_required_on\">{{ text_yes }}</label>
                                <input class=\"custom_radio\" type=\"radio\" name=\"kbmp_new_product_approval_required\" id=\"kbmp_new_product_approval_required_off\" value=\"0\" {% if (kbmp_new_product_approval_required is defined and kbmp_new_product_approval_required == '0') %}checked{% endif %}>
                                <label class=\"custom_radio_label\" for=\"kbmp_new_product_approval_required_off\">{{ text_no }}</label>
                                <br>
                                <input class=\"custom_radio\" type=\"checkbox\" name=\"kbmp_new_product_approval_required_global\" id=\"kbmp_new_product_approval_required_global\" value=\"1\" {% if (kbmp_new_product_approval_required_global is defined and kbmp_new_product_approval_required_global is not empty) %} {{ 'checked' }} {% endif %} />
                                <label class=\"custom_radio_label\" for=\"kbmp_new_product_approval_required_global\"><em>{{ text_use_global }}</em></label>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"kbmp_enable_seller_review\">{{ label_enable_seller_review }}</label>
                            <div class=\"col-sm-9\">
                                <input class=\"custom_radio\" type=\"radio\" name=\"kbmp_enable_seller_review\" id=\"kbmp_enable_seller_review_on\" value=\"1\" {% if (kbmp_enable_seller_review is defined and kbmp_enable_seller_review == '1') %}checked{% endif %}>
                                <label class=\"custom_radio_label\" for=\"kbmp_enable_seller_review_on\">{{ text_yes }}</label>
                                <input class=\"custom_radio\" type=\"radio\" name=\"kbmp_enable_seller_review\" id=\"kbmp_enable_seller_review_off\" value=\"0\" {% if (kbmp_enable_seller_review is defined and kbmp_enable_seller_review == '0') %}checked{% endif %}>
                                <label class=\"custom_radio_label\" for=\"kbmp_enable_seller_review_off\">{{ text_no }}</label>
                                <br>
                                <input class=\"custom_radio\" type=\"checkbox\" name=\"kbmp_enable_seller_review_global\" id=\"kbmp_enable_seller_review_global\" value=\"1\" {% if (kbmp_enable_seller_review_global is defined and kbmp_enable_seller_review_global is not empty) %} {{ 'checked' }} {% endif %} />
                                <label class=\"custom_radio_label\" for=\"kbmp_enable_seller_review_global\"><em>{{ text_use_global }}</em></label>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"kbmp_seller_review_approval_required\">{{ label_seller_review_approval_required }}</label>
                            <div class=\"col-sm-9\">
                                <input class=\"custom_radio\" type=\"radio\" name=\"kbmp_seller_review_approval_required\" id=\"kbmp_seller_review_approval_required_on\" value=\"1\" {% if (kbmp_seller_review_approval_required is defined and kbmp_seller_review_approval_required == '1') %}checked{% endif %}>
                                <label class=\"custom_radio_label\" for=\"kbmp_seller_review_approval_required_on\">{{ text_yes }}</label>
                                <input class=\"custom_radio\" type=\"radio\" name=\"kbmp_seller_review_approval_required\" id=\"kbmp_seller_review_approval_required_off\" value=\"0\" {% if (kbmp_seller_review_approval_required is defined and kbmp_seller_review_approval_required == '0') %}checked{% endif %}>
                                <label class=\"custom_radio_label\" for=\"kbmp_seller_review_approval_required_off\">{{ text_no }}</label>
                                <br>
                                <input class=\"custom_radio\" type=\"checkbox\" name=\"kbmp_seller_review_approval_required_global\" id=\"kbmp_seller_review_approval_required_global\" value=\"1\" {% if (kbmp_seller_review_approval_required_global is defined and kbmp_seller_review_approval_required_global is not empty) %} {{ 'checked' }} {% endif %} />
                                <label class=\"custom_radio_label\" for=\"kbmp_seller_review_approval_required_global\"><em>{{ text_use_global }}</em></label>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"kbmp_email_on_new_order\">{{ label_send_email_order_place }}</label>
                            <div class=\"col-sm-9\">
                                <input class=\"custom_radio\" type=\"radio\" name=\"kbmp_email_on_new_order\" id=\"kbmp_email_on_new_order_on\" value=\"1\" {% if (kbmp_email_on_new_order is defined and kbmp_email_on_new_order == '1') %}checked{% endif %}>
                                <label class=\"custom_radio_label\" for=\"kbmp_email_on_new_order_on\">{{ text_yes }}</label>
                                <input class=\"custom_radio\" type=\"radio\" name=\"kbmp_email_on_new_order\" id=\"kbmp_email_on_new_order_off\" value=\"0\" {% if (kbmp_email_on_new_order is defined and kbmp_email_on_new_order == '0') %}checked{% endif %}>
                                <label class=\"custom_radio_label\" for=\"kbmp_email_on_new_order_off\">{{ text_no }}</label>
                                <br>
                                <input class=\"custom_radio\" type=\"checkbox\" name=\"kbmp_email_on_new_order_global\" id=\"kbmp_email_on_new_order_global\" value=\"1\" {% if (kbmp_email_on_new_order_global is defined and kbmp_email_on_new_order_global is not empty) %} {{ 'checked' }} {% endif %} />
                                <label class=\"custom_radio_label\" for=\"kbmp_email_on_new_order_global\"><em>{{ text_use_global }}</em></label>
                            </div>
                          </div>
                          <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"category\">{{ label_categories_allowed }}</label>
                            <div class=\"col-sm-9\">
                                <input type=\"text\" name=\"category\" value=\"\" placeholder=\"{{ text_categories }}\" id=\"input-category\" class=\"form-control\" autocomplete=\"off\">
                                <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                    {% if (categories is defined and categories is not empty) %} 
                                    {% for product_category in categories %} 
                                    <div id=\"product-category{{ product_category['category_id'] }}\"><i class=\"fa fa-minus-circle\"></i> {{ product_category['name'] }} 
                                      <input type=\"hidden\" name=\"product_category[]\" value=\"{{ product_category['category_id'] }}\" />
                                    </div>
                                    {% endfor %}
                                    {% endif %} 
                                </div>
                                <p class=\"help-block\">\t\t\t\t\t\t\t\t
                                    {{ help_block_categories_allowed }} 
                                </p>\t
                            </div>
                        </div>
                    </div>
                    {% endif %}
                
            <div class=\"tab-pane\" id=\"tab-ip\">
              <fieldset>
                <legend>{{ text_ip }}</legend>
                <div id=\"ip\"></div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type=\"text/javascript\"><!--
  \$('input[name=\"affiliate\"]').on('change', function() {
    if (\$(this).val() == '1') { 
      \$('#tab-affiliate :input').not('input[name=\"affiliate\"]').prop('disabled', false);
    } else {
      \$('#tab-affiliate :input').not('input[name=\"affiliate\"]').prop('disabled', true);
    }
  }); 

  \$('input[name=\\'affiliate\\']:checked').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('select[name=\\'customer_group_id\\']').on('change', function() {
    \$.ajax({
      url: 'index.php?route=customer/customer/customfield&user_token={{ user_token }}&customer_group_id=' + this.value,
      dataType: 'json',
      success: function(json) {
        \$('.custom-field').hide();
        \$('.custom-field').removeClass('required');

        for (i = 0; i < json.length; i++) {
          custom_field = json[i];

          \$('.custom-field' + custom_field['custom_field_id']).show();

          if (custom_field['required']) {
            \$('.custom-field' + custom_field['custom_field_id']).addClass('required');
          }
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('select[name=\\'customer_group_id\\']').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  var address_row = {{ address_row }};

  function addAddress() {
    html  = '<div class=\"tab-pane\" id=\"tab-address' + address_row + '\">';
    html += '  <input type=\"hidden\" name=\"address[' + address_row + '][address_id]\" value=\"\" />';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-firstname' + address_row + '\">{{ entry_firstname }}</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][firstname]\" value=\"\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-lastname' + address_row + '\">{{ entry_lastname }}</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][lastname]\" value=\"\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-company' + address_row + '\">{{ entry_company }}</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][company]\" value=\"\" placeholder=\"{{ entry_company }}\" id=\"input-company' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-address-1' + address_row + '\">{{ entry_address_1 }}</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_1]\" value=\"\" placeholder=\"{{ entry_address_1 }}\" id=\"input-address-1' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-address-2' + address_row + '\">{{ entry_address_2 }}</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_2]\" value=\"\" placeholder=\"{{ entry_address_2 }}\" id=\"input-address-2' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-city' + address_row + '\">{{ entry_city }}</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][city]\" value=\"\" placeholder=\"{{ entry_city }}\" id=\"input-city' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-postcode' + address_row + '\">{{ entry_postcode }}</label>';
    html += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][postcode]\" value=\"\" placeholder=\"{{ entry_postcode }}\" id=\"input-postcode' + address_row + '\" class=\"form-control\" /></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-country' + address_row + '\">{{ entry_country }}</label>';
    html += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][country_id]\" id=\"input-country' + address_row + '\" onchange=\"country(this, \\'' + address_row + '\\', \\'0\\');\" class=\"form-control\">';
      html += '         <option value=\"\">{{ text_select }}</option>';
      {% for country in countries %}
      html += '         <option value=\"{{ country.country_id }}\">{{ country.name|escape('js') }}</option>';
      {% endfor %}
      html += '      </select></div>';
    html += '  </div>';

    html += '  <div class=\"form-group required\">';
    html += '    <label class=\"col-sm-2 control-label\" for=\"input-zone' + address_row + '\">{{ entry_zone }}</label>';
    html += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][zone_id]\" id=\"input-zone' + address_row + '\" class=\"form-control\"><option value=\"\">{{ text_none }}</option></select></div>';
    html += '  </div>';

    // Custom Fields
    {% for custom_field in custom_fields %}
    {% if custom_field.location == 'address' %}
    {% if custom_field.type == 'select' %}

    html += '  <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">';
    html += '  \t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name|e('js') }}</label>';
    html += '  \t\t<div class=\"col-sm-10\">';
    html += '  \t\t  <select name=\"address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]\" id=\"input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\">';
    html += '  \t\t\t<option value=\"\">{{ text_select }}</option>';

    {% for custom_field_value in custom_field.custom_field_value %}
    html += '  \t\t\t<option value=\"{{ custom_field_value.custom_field_value_id }}\">{{ custom_field.name|e('js') }}</option>';
    {% endfor %}

    html += '  \t\t  </select>';
    html += '  \t\t</div>';
    html += '  \t  </div>';
    {% endif %}

    {% if custom_field.type == 'radio' %}
    html += '  \t  <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\">';
    html += '  \t\t<label class=\"col-sm-2 control-label\">{{ custom_field.name|e('js') }}</label>';
    html += '  \t\t<div class=\"col-sm-10\">';
    html += '  \t\t  <div>';

    {% for custom_field_value in custom_field.custom_field_value %}
    html += '  \t\t\t<div class=\"radio\"><label><input type=\"radio\" name=\"address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" /> {{ custom_field_value.name|e('js') }}</label></div>';
    {% endfor %}

    html += '\t\t  </div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    {% endif %}

    {% if custom_field.type == 'checkbox' %}
    html += '\t  <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">';
    html += '\t\t<label class=\"col-sm-2 control-label\">{{ custom_field.name|e('js') }}</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div>';

    {% for custom_field_value in custom_field.custom_field_value %}
    html += '\t\t\t<div class=\"checkbox\"><label><input type=\"checkbox\" name=\"address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" /> {{ custom_field_value.name|e('js') }}</label></div>';
    {% endfor %}

    html += '\t\t  </div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    {% endif %}

    {% if custom_field.type == 'text' %}
    html += '\t  <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field_value.name|e('js') }}</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <input type=\"text\" name=\"address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value|e('js') }}\" placeholder=\"{{ custom_field_value.name|e('js') }}\" id=\"input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />';
    html += '\t\t</div>';
    html += '\t  </div>';
    {% endif %}

    {% if custom_field.type == 'textarea' %}
    html += '\t  <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field_value.name|e('js') }}</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <textarea name=\"address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field_value.name|e('js') }}\" id=\"input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ custom_field.value|e('js') }}</textarea>';
    html += '\t\t</div>';
    html += '\t  </div>';
    {% endif %}

    {% if custom_field.type == 'file' %}
    html += '\t  <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">';
    html += '\t\t<label class=\"col-sm-2 control-label\">{{ custom_field.name|e('js') }}</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <button type=\"button\" id=\"button-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> {{ button_upload }}</button>';
    html += '\t\t  <input type=\"hidden\" name=\"address[' + address_row + '][{{ custom_field.custom_field_id }}]\" value=\"\" id=\"input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}\" />';
    html += '\t\t</div>';
    html += '\t  </div>';
    {% endif %}

    {% if custom_field.type == 'date' %}
    html += '\t  <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field_value.name|e('js') }}</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group date\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value|e('js') }}\" placeholder=\"{{ custom_field.name|e('js') }} data-date-format=\"YYYY-MM-DD\" id=\"input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    {% endif %}

    {% if custom_field.type == 'time' %}
    html += '\t  <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field_value.name|e('js') }}</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group time\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value|e('js') }}\" placeholder=\"{{ custom_field.name|e('js') }}\" data-date-format=\"HH:mm\" id=\"input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    {% endif %}

    {% if custom_field.type == 'datetime' %}
    html += '\t  <div class=\"form-group custom-field custom-field{{ custom_field.custom_field_id }}\" data-sort=\"{{ custom_field.sort_order + 1 }}\">';
    html += '\t\t<label class=\"col-sm-2 control-label\" for=\"input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field_value.name|e('js') }}</label>';
    html += '\t\t<div class=\"col-sm-10\">';
    html += '\t\t  <div class=\"input-group datetime\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value|e('js') }}\" placeholder=\"{{ custom_field.name|e('js') }}\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>';
    html += '\t\t</div>';
    html += '\t  </div>';
    {% endif %}

    {% endif %}
    {% endfor %}

    html += '  <div class=\"form-group\">';
    html += '    <label class=\"col-sm-2 control-label\">{{ entry_default }}</label>';
    html += '    <div class=\"col-sm-10\"><label class=\"radio\"><input type=\"radio\" name=\"address[' + address_row + '][default]\" value=\"1\" /></label></div>';
    html += '  </div>';

    html += '</div>';

    \$('#tab-general .tab-content').append(html);

    \$('select[name=\\'customer_group_id\\']').trigger('change');

    \$('select[name=\\'address[' + address_row + '][country_id]\\']').trigger('change');

    \$('#address-add').before('<li><a href=\"#tab-address' + address_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'#address a:first\\').tab(\\'show\\'); \$(\\'a[href=\\\\\\'#tab-address' + address_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-address' + address_row + '\\').remove();\"></i> {{ tab_address }} ' + address_row + '</a></li>');

    \$('#address a[href=\\'#tab-address' + address_row + '\\']').tab('show');

    \$('.date').datetimepicker({
\t\tlanguage: '{{ datepicker }}',
\t\tpickTime: false
    });

\t\$('.datetime').datetimepicker({
\t\tlanguage: '{{ datepicker }}',
\t\tpickDate: true,
\t\tpickTime: true
    });

    \$('.time').datetimepicker({
\t\tlanguage: '{{ datepicker }}',
\t\tpickDate: false
    });

    \$('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group').eq(\$(this).attr('data-sort')).before(this);
\t\t}
\t\t
\t\tif (\$(this).attr('data-sort') > \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group:last').after(this);
\t\t}
\t\t
\t\tif (\$(this).attr('data-sort') < -\$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group:first').before(this);
\t\t}
    });

    address_row++;
  }
  //--></script> 
  <script type=\"text/javascript\"><!--
  function country(element, index, zone_id) {
    \$.ajax({
      url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + element.value,
      dataType: 'json',
      beforeSend: function() {
        \$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', true);
      },
      complete: function() {
        \$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', false);
      },
      success: function(json) {
        if (json['postcode_required'] == '1') {
          \$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().addClass('required');
        } else {
          \$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().removeClass('required');
        }

        html = '<option value=\"\">{{ text_select }}</option>';

        if (json['zone'] && json['zone'] != '') {
          for (i = 0; i < json['zone'].length; i++) {
            html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

            if (json['zone'][i]['zone_id'] == zone_id) {
              html += ' selected=\"selected\"';
            }

            html += '>' + json['zone'][i]['name'] + '</option>';
          }
        } else {
          html += '<option value=\"0\">{{ text_none }}</option>';
        }

        \$('select[name=\\'address[' + index + '][zone_id]\\']').html(html);
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  }

  \$('select[name\$=\\'[country_id]\\']').trigger('change');
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#history').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
  });

  \$('#history').load('index.php?route=customer/customer/history&user_token={{ user_token }}&customer_id={{ customer_id }}');

  \$('#button-history').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addhistory&user_token={{ user_token }}&customer_id={{ customer_id }}',
      type: 'post',
      dataType: 'json',
      data: 'comment=' + encodeURIComponent(\$('#tab-history textarea[name=\\'comment\\']').val()),
      beforeSend: function() {
        \$('#button-history').button('loading');
      },
      complete: function() {
        \$('#button-history').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-history').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-history').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#history').load('index.php?route=customer/customer/history&user_token={{ user_token }}&customer_id={{ customer_id }}');

          \$('#tab-history textarea[name=\\'comment\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#transaction').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
  });

  \$('#transaction').load('index.php?route=customer/customer/transaction&user_token={{ user_token }}&customer_id={{ customer_id }}');

  \$('#button-transaction').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addtransaction&user_token={{ user_token }}&customer_id={{ customer_id }}',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent(\$('#tab-transaction input[name=\\'description\\']').val()) + '&amount=' + encodeURIComponent(\$('#tab-transaction input[name=\\'amount\\']').val()),
      beforeSend: function() {
        \$('#button-transaction').button('loading');
      },
      complete: function() {
        \$('#button-transaction').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-transaction').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-transaction').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#transaction').load('index.php?route=customer/customer/transaction&user_token={{ user_token }}&customer_id={{ customer_id }}');

          \$('#tab-transaction input[name=\\'amount\\']').val('');
          \$('#tab-transaction input[name=\\'description\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('#reward').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#reward').load(this.href);
  });

  \$('#reward').load('index.php?route=customer/customer/reward&user_token={{ user_token }}&customer_id={{ customer_id }}');

  \$('#button-reward').on('click', function(e) {
    e.preventDefault();

    \$.ajax({
      url: 'index.php?route=customer/customer/addreward&user_token={{ user_token }}&customer_id={{ customer_id }}',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent(\$('#tab-reward input[name=\\'description\\']').val()) + '&points=' + encodeURIComponent(\$('#tab-reward input[name=\\'points\\']').val()),
      beforeSend: function() {
        \$('#button-reward').button('loading');
      },
      complete: function() {
        \$('#button-reward').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
           \$('#tab-reward').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        if (json['success']) {
          \$('#tab-reward').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

          \$('#reward').load('index.php?route=customer/customer/reward&user_token={{ user_token }}&customer_id={{ customer_id }}');

          \$('#tab-reward input[name=\\'points\\']').val('');
          \$('#tab-reward input[name=\\'description\\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('#ip').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#ip').load(this.href);
  });

  \$('#ip').load('index.php?route=customer/customer/ip&user_token={{ user_token }}&customer_id={{ customer_id }}');

  \$('#content').delegate('button[id^=\\'button-custom-field\\'], button[id^=\\'button-address\\']', 'click', function() {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload/upload&user_token={{ user_token }}',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            \$(node).button('loading');
          },
          complete: function() {
            \$(node).button('reset');
          },
          success: function(json) {
            \$(node).parent().find('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input[type=\\'hidden\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);
            }

            if (json['code']) {
              \$(node).parent().find('input[type=\\'hidden\\']').val(json['code']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });
\t  
  \$('#content').delegate('button[id^=\\'button-seller-field\\']', 'click', function() {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload/upload&user_token={{ user_token }}',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            \$(node).button('loading');
          },
          complete: function() {
            \$(node).button('reset');
          },
          success: function(json) {
            \$(node).parent().find('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input[type=\\'hidden\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);
            }

            if (json['code']) {
              \$(node).parent().find('input[type=\\'hidden\\']').val(json['filename']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });

  \$('.date').datetimepicker({
    language: '{{ datepicker }}',
    pickTime: false
  });

  \$('.datetime').datetimepicker({
    language: '{{ datepicker }}',
    pickDate: true,
    pickTime: true
  });

  \$('.time').datetimepicker({
    language: '{{ datepicker }}',
    pickDate: false
  });

  // Sort the custom fields
  {% set address_row = 1 %}
  {% for address in addresses %}
  \$('#tab-address{{ address_row }} .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address{{ address_row }} .form-group').length) {
      \$('#tab-address{{ address_row }} .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-address{{ address_row }} .form-group').length) {
      \$('#tab-address{{ address_row }} .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-address{{ address_row }} .form-group').length) {
      \$('#tab-address{{ address_row }} .form-group:first').before(this);
    }
  });
  {% set address_row = address_row + 1 %}
  {% endfor %}

  \$('#tab-customer .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-customer .form-group').length) {
      \$('#tab-customer .form-group:first').before(this);
    }
  });

  \$('#tab-affiliate .form-group[data-sort]').detach().each(function() {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#tab-affiliate .form-group').length) {
      \$('#tab-affiliate .form-group:first').before(this);
    }
  });
  //--></script> 
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'payment\\']').on('change', function() {
    \$('.payment').hide();

    \$('#payment-' + this.value).show();
  });

  \$('input[name=\\'payment\\']:checked').trigger('change');
  //--></script> 
</div>

                    <script type=\"text/javascript\">
                        // Category
                        \$('input[name=\\'category\\']').autocomplete({
                                'source': function(request, response) {
                                    \$.ajax({
                                        url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),
                                        dataType: 'json',
                                        success: function(json) {
                                            response(\$.map(json, function(item) {
                                                return {
                                                    label: item['name'],
                                                    value: item['category_id']
                                                }
                                            }));
                                        }
                                    });
                                },
                                'select': function(item) {
                                    \$('input[name=\\'category\\']').val('');
                                    \$('#product-category' + item['value']).remove();
                                    \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
                                }
                        });
                        \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
                            \$(this).parent().remove();
                        });
                    </script>
                
{{ footer }} 
", "customer/customer_form.twig", "");
    }
}
