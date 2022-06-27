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

/* setting/setting.twig */
class __TwigTemplate_cc01bdf131d5bd3a46150f4ac4a7ff006ed8396c06d45bdb4b0c0eb671a83fb8 extends \Twig\Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
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
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-seopro\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_seopro"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 45
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 47
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 48
        if (($context["error_meta_title"] ?? null)) {
            // line 49
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 50
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 53
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 55
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 59
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 61
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 65
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 70
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 70) == ($context["config_theme"] ?? null))) {
                // line 71
                echo "                    
                    <option value=\"";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 72);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 72);
                echo "</option>
                    
                    ";
            } else {
                // line 75
                echo "                    
                    <option value=\"";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 76);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 76);
                echo "</option>
                    
                    ";
            }
            // line 79
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                  
                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 86
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 91
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 91) == ($context["config_layout_id"] ?? null))) {
                // line 92
                echo "                    
                    <option value=\"";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 93);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 93);
                echo "</option>
                    
                    ";
            } else {
                // line 96
                echo "                    
                    <option value=\"";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 97);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 97);
                echo "</option>
                    
                    ";
            }
            // line 100
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                  
                  </select>
                </div>
              </div>
\t\t\t  ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 106
            echo "\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-textv";
            // line 107
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107);
            echo "\">Реквизиты сверху <img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 107);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 107);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 107);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 107);
            echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_textv\" rows=\"5\" placeholder=\"";
            // line 109
            echo ($context["entry_textv"] ?? null);
            echo "\" id=\"input-textv";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 109);
            echo "\" data-toggle=\"summernote\" class=\"form-control\">";
            echo ($context["config_textv"] ?? null);
            echo "</textarea>
                </div>
              </div>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 114
            echo "\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-textn";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 115);
            echo "\">Реквизиты снизу <img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 115);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 115);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 115);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 115);
            echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_textn\" rows=\"5\" placeholder=\"";
            // line 117
            echo ($context["entry_textn"] ?? null);
            echo "\" id=\"input-textn";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117);
            echo "\" data-toggle=\"summernote\" class=\"form-control\">";
            echo ($context["config_textn"] ?? null);
            echo "</textarea>
                </div>
              </div>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 124
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 126
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 127
        if (($context["error_name"] ?? null)) {
            // line 128
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 129
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 132
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 134
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 135
        if (($context["error_owner"] ?? null)) {
            // line 136
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 137
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 140
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 142
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 143
        if (($context["error_address"] ?? null)) {
            // line 144
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 145
        echo " </div>
              </div>
\t\t\t\t";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 148
            echo "\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-rekv";
            // line 149
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 149);
            echo "\">";
            echo ($context["entry_rekv"] ?? null);
            echo " <img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 149);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 149);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 149);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 149);
            echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_rekv\" rows=\"5\" placeholder=\"";
            // line 151
            echo ($context["entry_rekv"] ?? null);
            echo "\" id=\"input-rekv";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 151);
            echo "\" data-toggle=\"summernote\" class=\"form-control\">";
            echo ($context["config_rekv"] ?? null);
            echo "</textarea>
                </div>
              </div>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "\t\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 156
            echo "\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-buyer-content";
            // line 157
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 157);
            echo "\">";
            echo ($context["entry_buyer_content"] ?? null);
            echo " <img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 157);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 157);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 157);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 157);
            echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_buyer_content\" rows=\"5\" placeholder=\"";
            // line 159
            echo ($context["entry_buyer_content"] ?? null);
            echo "\" id=\"input-buyer-content";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 159);
            echo "\" data-toggle=\"summernote\" class=\"form-control\">";
            echo ($context["config_buyer_content"] ?? null);
            echo "</textarea>
                </div>
              </div>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "\t\t\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 164
            echo "\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-seller-content";
            // line 165
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165);
            echo "\">";
            echo ($context["entry_seller_content"] ?? null);
            echo " <img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 165);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 165);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 165);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 165);
            echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_seller_content\" rows=\"5\" placeholder=\"";
            // line 167
            echo ($context["entry_seller_content"] ?? null);
            echo "\" id=\"input-seller-content";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 167);
            echo "\" data-toggle=\"summernote\" class=\"form-control\">";
            echo ($context["config_seller_content"] ?? null);
            echo "</textarea>
                </div>
              </div>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 172
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 174
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 178
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 180
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 181
        if (($context["error_email"] ?? null)) {
            // line 182
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 183
        echo " </div>
              </div>
\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-buyer-email\">";
        // line 186
        echo ($context["entry_buyer_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_buyer_email\" value=\"";
        // line 188
        echo ($context["config_buyer_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_buyer_email"] ?? null);
        echo "\" id=\"input-buyer-email\" class=\"form-control\" />
\t\t\t\t  </div>
              </div>
\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-seller-email\">";
        // line 192
        echo ($context["entry_seller_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_seller_email\" value=\"";
        // line 194
        echo ($context["config_seller_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_seller_email"] ?? null);
        echo "\" id=\"input-seller-email\" class=\"form-control\" />
\t\t\t\t  </div>
              </div>
\t\t\t\t<div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-wa\">";
        // line 198
        echo ($context["entry_wa"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_wa\" value=\"";
        // line 200
        echo ($context["config_wa"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_wa"] ?? null);
        echo "\" id=\"input-wa\" class=\"form-control\" />
                  ";
        // line 201
        if (($context["error_wa"] ?? null)) {
            // line 202
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_wa"] ?? null);
            echo "</div>
                  ";
        }
        // line 203
        echo " </div>
              </div>
\t\t\t\t<div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-tg\">";
        // line 206
        echo ($context["entry_tg"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_tg\" value=\"";
        // line 208
        echo ($context["config_tg"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tg"] ?? null);
        echo "\" id=\"input-tg\" class=\"form-control\" />
                  ";
        // line 209
        if (($context["error_tg"] ?? null)) {
            // line 210
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_tg"] ?? null);
            echo "</div>
                  ";
        }
        // line 211
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 214
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 216
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 217
        if (($context["error_telephone"] ?? null)) {
            // line 218
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 219
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 222
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 224
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 228
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 229
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 230
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 234
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 236
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 240
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 242
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
\t\t\t\t<div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-formText\">";
        // line 246
        echo ($context["entry_formText"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_formText\" rows=\"5\" placeholder=\"";
        // line 248
        echo ($context["entry_formText"] ?? null);
        echo "\" id=\"input-formText\" class=\"form-control\">";
        echo ($context["config_formText"] ?? null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 251
        if (($context["locations"] ?? null)) {
            // line 252
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 253
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 254
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 255
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 256
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 256), ($context["config_location"] ?? null))) {
                    // line 257
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 257);
                    echo "\" checked=\"checked\" />
                      ";
                    // line 258
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 258);
                    echo "
                      ";
                } else {
                    // line 260
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 260);
                    echo "\" />
                      ";
                    // line 261
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 261);
                    echo "
                      ";
                }
                // line 262
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo " </div>
              </div>
              ";
        }
        // line 266
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 269
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    
                    ";
        // line 273
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 274
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 274) == ($context["config_country_id"] ?? null))) {
                // line 275
                echo "                    
                    <option value=\"";
                // line 276
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 276);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 276);
                echo "</option>
                    
                    ";
            } else {
                // line 279
                echo "                    
                    <option value=\"";
                // line 280
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 280);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 280);
                echo "</option>
                    
                    ";
            }
            // line 283
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 289
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 296
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 300
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 300) == ($context["config_timezone"] ?? null))) {
                // line 301
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 301);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 301);
                echo "</option>
                      ";
            } else {
                // line 303
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 303);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 303);
                echo "</option>
                      ";
            }
            // line 305
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 310
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    
                    ";
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 315
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 315) == ($context["config_language"] ?? null))) {
                // line 316
                echo "                    
                    <option value=\"";
                // line 317
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 317);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 317);
                echo "</option>
                    
                    ";
            } else {
                // line 320
                echo "                    
                    <option value=\"";
                // line 321
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 321);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 321);
                echo "</option>
                    
                    ";
            }
            // line 324
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 330
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    
                    ";
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 335
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 335) == ($context["config_admin_language"] ?? null))) {
                // line 336
                echo "                    
                    <option value=\"";
                // line 337
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 337);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 337);
                echo "</option>
                    
                    ";
            } else {
                // line 340
                echo "                    
                    <option value=\"";
                // line 341
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 341);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 341);
                echo "</option>
                    
                    ";
            }
            // line 344
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 350
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    
                    ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 355
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 355) == ($context["config_currency"] ?? null))) {
                // line 356
                echo "                    
                    <option value=\"";
                // line 357
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 357);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 357);
                echo "</option>
                    
                    ";
            } else {
                // line 360
                echo "                    
                    <option value=\"";
                // line 361
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 361);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 361);
                echo "</option>
                    
                    ";
            }
            // line 364
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 370
        echo ($context["help_currency_auto"] ?? null);
        echo "\">";
        echo ($context["entry_currency_auto"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 372
        if (($context["config_currency_auto"] ?? null)) {
            // line 373
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 374
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 376
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 377
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 378
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 379
        if ( !($context["config_currency_auto"] ?? null)) {
            // line 380
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 381
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 383
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 384
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 385
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency-engine\">";
        // line 389
        echo ($context["entry_currency_engine"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">
                    ";
        // line 392
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 393
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 393) == ($context["config_currency_engine"] ?? null))) {
                // line 394
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 394);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 394);
                echo "</option>
                    ";
            } else {
                // line 396
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 396);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 396);
                echo "</option>
                    ";
            }
            // line 398
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 399
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 403
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    
                    ";
        // line 407
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 408
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 408) == ($context["config_length_class_id"] ?? null))) {
                // line 409
                echo "                    
                    <option value=\"";
                // line 410
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 410);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 410);
                echo "</option>
                    
                    ";
            } else {
                // line 413
                echo "                    
                    <option value=\"";
                // line 414
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 414);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 414);
                echo "</option>
                    
                    ";
            }
            // line 417
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 418
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 423
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    
                    ";
        // line 427
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 428
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 428) == ($context["config_weight_class_id"] ?? null))) {
                // line 429
                echo "                    
                    <option value=\"";
                // line 430
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 430);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 430);
                echo "</option>
                    
                    ";
            } else {
                // line 433
                echo "                    
                    <option value=\"";
                // line 434
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 434);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 434);
                echo "</option>
                    
                    ";
            }
            // line 437
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 438
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 445
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 447
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 449
        if (($context["config_product_count"] ?? null)) {
            // line 450
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 451
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 453
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 454
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 455
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 456
        if ( !($context["config_product_count"] ?? null)) {
            // line 457
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 458
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 460
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 461
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 462
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 466
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 468
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 469
        if (($context["error_limit_admin"] ?? null)) {
            // line 470
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 471
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-autocomplete-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 474
        echo ($context["help_limit_autocomplete"] ?? null);
        echo "\">";
        echo ($context["entry_limit_autocomplete"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_autocomplete\" value=\"";
        // line 476
        echo ($context["config_limit_autocomplete"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_autocomplete"] ?? null);
        echo "\" id=\"input-autocomplete-limit\" class=\"form-control\" />
                    ";
        // line 477
        if (($context["error_limit_autocomplete"] ?? null)) {
            // line 478
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_autocomplete"] ?? null);
            echo "</div>
                    ";
        }
        // line 479
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 483
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 485
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 487
        if (($context["config_review_status"] ?? null)) {
            // line 488
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 489
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 491
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 492
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 493
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 494
        if ( !($context["config_review_status"] ?? null)) {
            // line 495
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 496
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 498
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 499
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 500
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 504
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 506
        if (($context["config_review_guest"] ?? null)) {
            // line 507
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 508
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 510
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 511
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 512
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 513
        if ( !($context["config_review_guest"] ?? null)) {
            // line 514
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 515
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 517
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 518
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 519
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 524
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 526
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 528
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 529
        if (($context["error_voucher_min"] ?? null)) {
            // line 530
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 531
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 534
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 536
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 537
        if (($context["error_voucher_max"] ?? null)) {
            // line 538
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 539
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 543
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 545
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 547
        if (($context["config_tax"] ?? null)) {
            // line 548
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 549
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 551
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 552
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 553
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 554
        if ( !($context["config_tax"] ?? null)) {
            // line 555
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 556
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 558
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 559
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 560
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 564
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 567
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 569
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            // line 570
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 571
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 574
            echo "                      
                      <option value=\"shipping\">";
            // line 575
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 578
        echo "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            // line 579
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 580
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 583
            echo "                      
                      <option value=\"payment\">";
            // line 584
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 587
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 592
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 595
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 597
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            // line 598
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 599
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 602
            echo "                      
                      <option value=\"shipping\">";
            // line 603
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 606
        echo "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            // line 607
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 608
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 611
            echo "                      
                      <option value=\"payment\">";
            // line 612
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 615
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 621
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 623
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 625
        if (($context["config_customer_online"] ?? null)) {
            // line 626
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 627
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 629
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 630
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 631
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 632
        if ( !($context["config_customer_online"] ?? null)) {
            // line 633
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 634
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 636
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 637
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 638
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 642
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 644
        if (($context["config_customer_activity"] ?? null)) {
            // line 645
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 646
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 648
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 649
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 650
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 651
        if ( !($context["config_customer_activity"] ?? null)) {
            // line 652
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 653
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 655
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 656
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 657
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 661
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 663
        if (($context["config_customer_search"] ?? null)) {
            // line 664
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 665
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 667
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 668
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 669
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 670
        if ( !($context["config_customer_search"] ?? null)) {
            // line 671
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 672
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 674
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 675
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 676
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 680
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      
                      ";
        // line 684
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 685
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 685) == ($context["config_customer_group_id"] ?? null))) {
                // line 686
                echo "                      
                      <option value=\"";
                // line 687
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 687);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 687);
                echo "</option>
                      
                      ";
            } else {
                // line 690
                echo "                      
                      <option value=\"";
                // line 691
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 691);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 691);
                echo "</option>
                      
                      ";
            }
            // line 694
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 695
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 700
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 701
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 702
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 703
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 703), ($context["config_customer_group_display"] ?? null))) {
                // line 704
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 704);
                echo "\" checked=\"checked\" />
                        ";
                // line 705
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 705);
                echo "
                        ";
            } else {
                // line 707
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 707);
                echo "\" />
                        ";
                // line 708
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 708);
                echo "
                        ";
            }
            // line 709
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 712
        echo "                    ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 713
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 714
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 717
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 719
        if (($context["config_customer_price"] ?? null)) {
            // line 720
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 721
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 723
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 724
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 725
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 726
        if ( !($context["config_customer_price"] ?? null)) {
            // line 727
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 728
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 730
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 731
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 732
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 736
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 738
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 739
        if (($context["error_login_attempts"] ?? null)) {
            // line 740
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 741
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 744
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 747
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 749
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 750
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 750) == ($context["config_account_id"] ?? null))) {
                // line 751
                echo "                      
                      <option value=\"";
                // line 752
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 752);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 752);
                echo "</option>
                      
                      ";
            } else {
                // line 755
                echo "                      
                      <option value=\"";
                // line 756
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 756);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 756);
                echo "</option>
                      
                      ";
            }
            // line 759
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 760
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 766
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 768
        echo ($context["help_invoice_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 770
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 774
        echo ($context["help_cart_weight"] ?? null);
        echo "\">";
        echo ($context["entry_cart_weight"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 776
        if (($context["config_cart_weight"] ?? null)) {
            // line 777
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 778
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 780
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 781
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 782
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 783
        if ( !($context["config_cart_weight"] ?? null)) {
            // line 784
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 785
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 787
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 788
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 789
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 793
        echo ($context["help_checkout_guest"] ?? null);
        echo "\">";
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 795
        if (($context["config_checkout_guest"] ?? null)) {
            // line 796
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 797
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 799
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 800
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 801
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 802
        if ( !($context["config_checkout_guest"] ?? null)) {
            // line 803
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 804
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 806
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 807
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 808
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 812
        echo ($context["help_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 815
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 817
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 818
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 818) == ($context["config_checkout_id"] ?? null))) {
                // line 819
                echo "                      
                      <option value=\"";
                // line 820
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 820);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 820);
                echo "</option>
                      
                      ";
            } else {
                // line 823
                echo "                      
                      <option value=\"";
                // line 824
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 824);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 824);
                echo "</option>
                      
                      ";
            }
            // line 827
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 828
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 833
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      
                      ";
        // line 837
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 838
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 838) == ($context["config_order_status_id"] ?? null))) {
                // line 839
                echo "                      
                      <option value=\"";
                // line 840
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 840);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 840);
                echo "</option>
                      
                      ";
            } else {
                // line 843
                echo "                      
                      <option value=\"";
                // line 844
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 844);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 844);
                echo "</option>
                      
                      ";
            }
            // line 847
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 848
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 853
        echo ($context["help_processing_status"] ?? null);
        echo "\">";
        echo ($context["entry_processing_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 855
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 856
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 857
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 857), ($context["config_processing_status"] ?? null))) {
                // line 858
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 858);
                echo "\" checked=\"checked\" />
                          ";
                // line 859
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 859);
                echo "
                          ";
            } else {
                // line 861
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 861);
                echo "\" />
                          ";
                // line 862
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 862);
                echo "
                          ";
            }
            // line 863
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 865
        echo " </div>
                    ";
        // line 866
        if (($context["error_processing_status"] ?? null)) {
            // line 867
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 868
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 871
        echo ($context["help_complete_status"] ?? null);
        echo "\">";
        echo ($context["entry_complete_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 873
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 874
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 875
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 875), ($context["config_complete_status"] ?? null))) {
                // line 876
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 876);
                echo "\" checked=\"checked\" />
                          ";
                // line 877
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 877);
                echo "
                          ";
            } else {
                // line 879
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 879);
                echo "\" />
                          ";
                // line 880
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 880);
                echo "
                          ";
            }
            // line 881
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 883
        echo " </div>
                    ";
        // line 884
        if (($context["error_complete_status"] ?? null)) {
            // line 885
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 886
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 889
        echo ($context["help_fraud_status"] ?? null);
        echo "\">";
        echo ($context["entry_fraud_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      
                      ";
        // line 893
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 894
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 894) == ($context["config_fraud_status_id"] ?? null))) {
                // line 895
                echo "                      
                      <option value=\"";
                // line 896
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 896);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 896);
                echo "</option>
                      
                      ";
            } else {
                // line 899
                echo "                      
                      <option value=\"";
                // line 900
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 900);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 900);
                echo "</option>
                      
                      ";
            }
            // line 903
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 904
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 909
        echo ($context["help_api"] ?? null);
        echo "\">";
        echo ($context["entry_api"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 912
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 914
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 915
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 915) == ($context["config_api_id"] ?? null))) {
                // line 916
                echo "                      
                      <option value=\"";
                // line 917
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 917);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 917);
                echo "</option>
                      
                      ";
            } else {
                // line 920
                echo "                      
                      <option value=\"";
                // line 921
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 921);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 921);
                echo "</option>
                      
                      ";
            }
            // line 924
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 925
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 931
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 933
        echo ($context["help_stock_display"] ?? null);
        echo "\">";
        echo ($context["entry_stock_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 935
        if (($context["config_stock_display"] ?? null)) {
            // line 936
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 937
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 939
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 940
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 941
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 942
        if ( !($context["config_stock_display"] ?? null)) {
            // line 943
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 944
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 946
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 947
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 948
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 952
        echo ($context["help_stock_warning"] ?? null);
        echo "\">";
        echo ($context["entry_stock_warning"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 954
        if (($context["config_stock_warning"] ?? null)) {
            // line 955
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 956
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 958
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 959
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 960
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 961
        if ( !($context["config_stock_warning"] ?? null)) {
            // line 962
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 963
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 965
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 966
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 967
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 971
        echo ($context["help_stock_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 973
        if (($context["config_stock_checkout"] ?? null)) {
            // line 974
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 975
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 977
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 978
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 979
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 980
        if ( !($context["config_stock_checkout"] ?? null)) {
            // line 981
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 982
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 984
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 985
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 986
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 991
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 993
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      
                      ";
        // line 997
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 998
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 998) == ($context["config_affiliate_group_id"] ?? null))) {
                // line 999
                echo "                      
                      <option value=\"";
                // line 1000
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1000);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1000);
                echo "</option>
                      
                      ";
            } else {
                // line 1003
                echo "                      
                      <option value=\"";
                // line 1004
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1004);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1004);
                echo "</option>
                      
                      ";
            }
            // line 1007
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1008
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1013
        echo ($context["help_affiliate_approval"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1015
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 1016
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1017
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1019
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 1020
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1021
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1022
        if ( !($context["config_affiliate_approval"] ?? null)) {
            // line 1023
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1024
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1026
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 1027
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1028
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1032
        echo ($context["help_affiliate_auto"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1034
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 1035
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1036
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1038
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 1039
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1040
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1041
        if ( !($context["config_affiliate_auto"] ?? null)) {
            // line 1042
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1043
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1045
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 1046
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1047
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 1051
        echo ($context["help_affiliate_commission"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 1053
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 1057
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 1060
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1062
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1063
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1063) == ($context["config_affiliate_id"] ?? null))) {
                // line 1064
                echo "                      
                      <option value=\"";
                // line 1065
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1065);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1065);
                echo "</option>
                      
                      ";
            } else {
                // line 1068
                echo "                      
                      <option value=\"";
                // line 1069
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1069);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1069);
                echo "</option>
                      
                      ";
            }
            // line 1072
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1073
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1079
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 1081
        echo ($context["help_return"] ?? null);
        echo "\">";
        echo ($context["entry_return"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 1084
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1086
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1087
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1087) == ($context["config_return_id"] ?? null))) {
                // line 1088
                echo "                      
                      <option value=\"";
                // line 1089
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1089);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1089);
                echo "</option>
                      
                      ";
            } else {
                // line 1092
                echo "                      
                      <option value=\"";
                // line 1093
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1093);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1093);
                echo "</option>
                      
                      ";
            }
            // line 1096
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1097
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 1102
        echo ($context["help_return_status"] ?? null);
        echo "\">";
        echo ($context["entry_return_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      
                      ";
        // line 1106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1107
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1107) == ($context["config_return_status_id"] ?? null))) {
                // line 1108
                echo "                      
                      <option value=\"";
                // line 1109
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1109);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1109);
                echo "</option>
                      
                      ";
            } else {
                // line 1112
                echo "                      
                      <option value=\"";
                // line 1113
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1113);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1113);
                echo "</option>
                      
                      ";
            }
            // line 1116
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1117
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1123
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1125
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1128
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1131
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1131) == ($context["config_captcha"] ?? null))) {
                // line 1132
                echo "                      
                      <option value=\"";
                // line 1133
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1133);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1133);
                echo "</option>
                      
                      ";
            } else {
                // line 1136
                echo "                      
                      <option value=\"";
                // line 1137
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1137);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1137);
                echo "</option>
                      
                      ";
            }
            // line 1140
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1141
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1146
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1149
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1150
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1150), ($context["config_captcha_page"] ?? null))) {
                // line 1151
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1151);
                echo "\" checked=\"checked\" />
                          ";
                // line 1152
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1152);
                echo "
                          ";
            } else {
                // line 1154
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1154);
                echo "\" />
                          ";
                // line 1155
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1155);
                echo "
                          ";
            }
            // line 1156
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1158
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1165
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1166
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1167
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1171
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1172
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1173
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1179
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1181
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      
                      ";
        // line 1185
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            // line 1186
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1187
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1190
            echo "                      
                      <option value=\"mail\">";
            // line 1191
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1194
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            // line 1195
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1196
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1199
            echo "                      
                      <option value=\"smtp\">";
            // line 1200
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1203
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1208
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1210
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1214
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1216
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1220
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1222
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1226
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1228
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1232
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1234
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1238
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1240
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1245
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1247
        echo ($context["help_mail_alert"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1250
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1251
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1251), ($context["config_mail_alert"] ?? null))) {
                // line 1252
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1252);
                echo "\" checked=\"checked\" />
                          ";
                // line 1253
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1253);
                echo "
                          ";
            } else {
                // line 1255
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1255);
                echo "\" />
                          ";
                // line 1256
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1256);
                echo "
                          ";
            }
            // line 1257
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1259
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1263
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1265
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1272
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1274
        echo ($context["help_maintenance"] ?? null);
        echo "\">";
        echo ($context["entry_maintenance"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1276
        if (($context["config_maintenance"] ?? null)) {
            // line 1277
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1278
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1280
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1281
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1282
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1283
        if ( !($context["config_maintenance"] ?? null)) {
            // line 1284
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1285
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1287
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1288
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1289
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1293
        echo ($context["help_seo_url"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1295
        if (($context["config_seo_url"] ?? null)) {
            // line 1296
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1297
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1299
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1300
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1301
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1302
        if ( !($context["config_seo_url"] ?? null)) {
            // line 1303
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1304
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1306
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1307
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1308
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1312
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1314
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1318
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1320
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1325
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1327
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1329
        if (($context["config_secure"] ?? null)) {
            // line 1330
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1331
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1333
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1334
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1335
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1336
        if ( !($context["config_secure"] ?? null)) {
            // line 1337
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1338
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1340
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1341
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1342
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1346
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1348
        if (($context["config_password"] ?? null)) {
            // line 1349
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1350
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1352
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1353
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1354
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1355
        if ( !($context["config_password"] ?? null)) {
            // line 1356
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1357
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1359
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1360
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1361
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1365
        echo ($context["help_shared"] ?? null);
        echo "\">";
        echo ($context["entry_shared"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1367
        if (($context["config_shared"] ?? null)) {
            // line 1368
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1369
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1371
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1372
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1373
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1374
        if ( !($context["config_shared"] ?? null)) {
            // line 1375
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1376
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1378
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1379
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1380
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1384
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1386
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    ";
        // line 1387
        if (($context["error_encryption"] ?? null)) {
            // line 1388
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1389
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1393
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1395
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1397
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1401
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1403
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1407
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1409
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1414
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1416
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1418
        if (($context["config_error_display"] ?? null)) {
            // line 1419
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1420
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1422
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1423
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1424
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1425
        if ( !($context["config_error_display"] ?? null)) {
            // line 1426
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1427
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1429
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1430
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1431
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1435
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1437
        if (($context["config_error_log"] ?? null)) {
            // line 1438
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1439
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1441
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1442
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1443
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1444
        if ( !($context["config_error_log"] ?? null)) {
            // line 1445
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1446
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1448
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1449
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1450
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1454
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1456
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1457
        if (($context["error_log"] ?? null)) {
            // line 1458
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1459
        echo " </div>
                </div>
              </fieldset>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"tab-pane\" id=\"tab-seopro\">
\t\t\t<fieldset>
\t\t\t<legend>";
        // line 1467
        echo ($context["text_general"] ?? null);
        echo "</legend>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1469
        echo ($context["help_seo_pro"] ?? null);
        echo "\">";
        echo ($context["entry_seo_pro"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1471
        if (($context["config_seo_pro"] ?? null)) {
            // line 1472
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1473
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1475
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"1\" />
\t\t\t\t  ";
            // line 1476
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1477
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1478
        if ( !($context["config_seo_pro"] ?? null)) {
            // line 1479
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1480
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1482
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"0\" />
\t\t\t\t  ";
            // line 1483
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1484
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1488
        echo ($context["help_config_seo_url_include_path"] ?? null);
        echo "\">";
        echo ($context["entry_config_seo_url_include_path"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1490
        if (($context["config_seo_url_include_path"] ?? null)) {
            // line 1491
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1492
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1494
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" />
\t\t\t\t  ";
            // line 1495
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1496
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1497
        if ( !($context["config_seo_url_include_path"] ?? null)) {
            // line 1498
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1499
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1501
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" />
\t\t\t\t  ";
            // line 1502
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1503
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1507
        echo ($context["entry_config_seo_url_cache"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1509
        if (($context["config_seo_url_cache"] ?? null)) {
            // line 1510
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1511
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1513
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"1\" />
\t\t\t\t  ";
            // line 1514
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1515
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1516
        if ( !($context["config_seo_url_cache"] ?? null)) {
            // line 1517
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1518
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1520
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"0\" />
\t\t\t\t  ";
            // line 1521
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1522
        echo " </label>
\t\t\t  </div>
\t\t\t</div>\t\t
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1526
        echo ($context["entry_seopro_addslash"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1528
        if (($context["config_seopro_addslash"] ?? null)) {
            // line 1529
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1530
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1532
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"1\" />
\t\t\t\t  ";
            // line 1533
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1534
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1535
        if ( !($context["config_seopro_addslash"] ?? null)) {
            // line 1536
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1537
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1539
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"0\" />
\t\t\t\t  ";
            // line 1540
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1541
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1545
        echo ($context["entry_seopro_lowercase"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1547
        if (($context["config_seopro_lowercase"] ?? null)) {
            // line 1548
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1549
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1551
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"1\" />
\t\t\t\t  ";
            // line 1552
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1553
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1554
        if ( !($context["config_seopro_lowercase"] ?? null)) {
            // line 1555
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1556
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1558
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"0\" />
\t\t\t\t  ";
            // line 1559
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1560
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-page-postfix\">";
        // line 1564
        echo ($context["entry_page_postfix"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"config_page_postfix\" value=\"";
        // line 1566
        echo ($context["config_page_postfix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_page_postfix"] ?? null);
        echo "\" id=\"input-page-postfix\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1570
        echo ($context["help_config_valide_param_flag"] ?? null);
        echo "\">";
        echo ($context["entry_config_valide_param_flag"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1572
        if (($context["config_valide_param_flag"] ?? null)) {
            // line 1573
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1574
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1576
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"1\" />
\t\t\t\t  ";
            // line 1577
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1578
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1579
        if ( !($context["config_valide_param_flag"] ?? null)) {
            // line 1580
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1581
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1583
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"0\" />
\t\t\t\t  ";
            // line 1584
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1585
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-valide-params\"><span data-toggle=\"tooltip\" title=\"";
        // line 1589
        echo ($context["help_valide_params"] ?? null);
        echo "\">";
        echo ($context["entry_valide_params"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<textarea name=\"config_valide_params\" rows=10\" placeholder=\"";
        // line 1591
        echo ($context["entry_valide_params"] ?? null);
        echo "\" id=\"input-valide-params\" class=\"form-control\">";
        echo ($context["config_valide_params"] ?? null);
        echo "</textarea>
\t\t\t  </div>
\t\t\t</div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1595
        echo ($context["entry_canonical_method_help"] ?? null);
        echo "\">";
        echo ($context["entry_canonical_method"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                ";
        // line 1597
        if (($context["config_canonical_method"] ?? null)) {
            // line 1598
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 1600
            echo ($context["text_canonical_ocstore"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"0\"/>
                  ";
            // line 1604
            echo ($context["text_canonical_opencart"] ?? null);
            echo "
                </label>
                ";
        } else {
            // line 1607
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"1\"/>
                  ";
            // line 1609
            echo ($context["text_canonical_ocstore"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 1613
            echo ($context["text_canonical_opencart"] ?? null);
            echo "
                </label>
                ";
        }
        // line 1616
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1619
        echo ($context["entry_canonical_self_help"] ?? null);
        echo "\">";
        echo ($context["entry_canonical_self"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                ";
        // line 1621
        if (($context["config_canonical_self"] ?? null)) {
            // line 1622
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 1624
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"0\"/>
                  ";
            // line 1628
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        } else {
            // line 1631
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"1\"/>
                  ";
            // line 1633
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 1637
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        }
        // line 1640
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1643
        echo ($context["entry_add_prevnext_help"] ?? null);
        echo "\">";
        echo ($context["entry_add_prevnext"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                ";
        // line 1645
        if (($context["config_add_prevnext"] ?? null)) {
            // line 1646
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 1648
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"0\"/>
                  ";
            // line 1652
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        } else {
            // line 1655
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"1\"/>
                  ";
            // line 1657
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 1661
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        }
        // line 1664
        echo "              </div>
            </div>
            <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 1667
        echo ($context["entry_noindex_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              ";
        // line 1669
        if (($context["config_noindex_status"] ?? null)) {
            // line 1670
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"1\" checked=\"checked\"/>
                ";
            // line 1672
            echo ($context["text_yes"] ?? null);
            echo "
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"0\"/>
                ";
            // line 1676
            echo ($context["text_no"] ?? null);
            echo "
              </label>
              ";
        } else {
            // line 1679
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"1\"/>
                ";
            // line 1681
            echo ($context["text_yes"] ?? null);
            echo "
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"0\" checked=\"checked\"/>
                ";
            // line 1685
            echo ($context["text_no"] ?? null);
            echo "
              </label>
              ";
        }
        // line 1688
        echo "            </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-valide-params\"><span data-toggle=\"tooltip\" title=\"";
        // line 1691
        echo ($context["help_valide_params"] ?? null);
        echo "\">";
        echo ($context["entry_noindex_disallow_params"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <textarea name=\"config_noindex_disallow_params\" rows=10\" placeholder=\"";
        // line 1693
        echo ($context["entry_noindex_disallow_params"] ?? null);
        echo "\" id=\"input-valide-params\" class=\"form-control\">";
        echo ($context["config_noindex_disallow_params"] ?? null);
        echo "</textarea>
              </div>
            </div>
\t\t  </fieldset>
\t\t</div>
\t\t\t
\t\t\t
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1708
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1730
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1739
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1745
        echo ($context["config_zone_id"] ?? null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1752
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script>
<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
    
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
</div>
";
        // line 1778
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4633 => 1778,  4604 => 1752,  4594 => 1745,  4585 => 1739,  4573 => 1730,  4548 => 1708,  4528 => 1693,  4521 => 1691,  4516 => 1688,  4510 => 1685,  4503 => 1681,  4499 => 1679,  4493 => 1676,  4486 => 1672,  4482 => 1670,  4480 => 1669,  4475 => 1667,  4470 => 1664,  4464 => 1661,  4457 => 1657,  4453 => 1655,  4447 => 1652,  4440 => 1648,  4436 => 1646,  4434 => 1645,  4427 => 1643,  4422 => 1640,  4416 => 1637,  4409 => 1633,  4405 => 1631,  4399 => 1628,  4392 => 1624,  4388 => 1622,  4386 => 1621,  4379 => 1619,  4374 => 1616,  4368 => 1613,  4361 => 1609,  4357 => 1607,  4351 => 1604,  4344 => 1600,  4340 => 1598,  4338 => 1597,  4331 => 1595,  4322 => 1591,  4315 => 1589,  4309 => 1585,  4304 => 1584,  4301 => 1583,  4296 => 1581,  4293 => 1580,  4291 => 1579,  4288 => 1578,  4283 => 1577,  4280 => 1576,  4275 => 1574,  4272 => 1573,  4270 => 1572,  4263 => 1570,  4254 => 1566,  4249 => 1564,  4243 => 1560,  4238 => 1559,  4235 => 1558,  4230 => 1556,  4227 => 1555,  4225 => 1554,  4222 => 1553,  4217 => 1552,  4214 => 1551,  4209 => 1549,  4206 => 1548,  4204 => 1547,  4199 => 1545,  4193 => 1541,  4188 => 1540,  4185 => 1539,  4180 => 1537,  4177 => 1536,  4175 => 1535,  4172 => 1534,  4167 => 1533,  4164 => 1532,  4159 => 1530,  4156 => 1529,  4154 => 1528,  4149 => 1526,  4143 => 1522,  4138 => 1521,  4135 => 1520,  4130 => 1518,  4127 => 1517,  4125 => 1516,  4122 => 1515,  4117 => 1514,  4114 => 1513,  4109 => 1511,  4106 => 1510,  4104 => 1509,  4099 => 1507,  4093 => 1503,  4088 => 1502,  4085 => 1501,  4080 => 1499,  4077 => 1498,  4075 => 1497,  4072 => 1496,  4067 => 1495,  4064 => 1494,  4059 => 1492,  4056 => 1491,  4054 => 1490,  4047 => 1488,  4041 => 1484,  4036 => 1483,  4033 => 1482,  4028 => 1480,  4025 => 1479,  4023 => 1478,  4020 => 1477,  4015 => 1476,  4012 => 1475,  4007 => 1473,  4004 => 1472,  4002 => 1471,  3995 => 1469,  3990 => 1467,  3980 => 1459,  3974 => 1458,  3972 => 1457,  3966 => 1456,  3961 => 1454,  3955 => 1450,  3950 => 1449,  3947 => 1448,  3942 => 1446,  3939 => 1445,  3937 => 1444,  3934 => 1443,  3929 => 1442,  3926 => 1441,  3921 => 1439,  3918 => 1438,  3916 => 1437,  3911 => 1435,  3905 => 1431,  3900 => 1430,  3897 => 1429,  3892 => 1427,  3889 => 1426,  3887 => 1425,  3884 => 1424,  3879 => 1423,  3876 => 1422,  3871 => 1420,  3868 => 1419,  3866 => 1418,  3861 => 1416,  3856 => 1414,  3846 => 1409,  3839 => 1407,  3830 => 1403,  3823 => 1401,  3814 => 1397,  3807 => 1395,  3802 => 1393,  3796 => 1389,  3790 => 1388,  3788 => 1387,  3782 => 1386,  3775 => 1384,  3769 => 1380,  3764 => 1379,  3761 => 1378,  3756 => 1376,  3753 => 1375,  3751 => 1374,  3748 => 1373,  3743 => 1372,  3740 => 1371,  3735 => 1369,  3732 => 1368,  3730 => 1367,  3723 => 1365,  3717 => 1361,  3712 => 1360,  3709 => 1359,  3704 => 1357,  3701 => 1356,  3699 => 1355,  3696 => 1354,  3691 => 1353,  3688 => 1352,  3683 => 1350,  3680 => 1349,  3678 => 1348,  3671 => 1346,  3665 => 1342,  3660 => 1341,  3657 => 1340,  3652 => 1338,  3649 => 1337,  3647 => 1336,  3644 => 1335,  3639 => 1334,  3636 => 1333,  3631 => 1331,  3628 => 1330,  3626 => 1329,  3619 => 1327,  3614 => 1325,  3604 => 1320,  3597 => 1318,  3588 => 1314,  3581 => 1312,  3575 => 1308,  3570 => 1307,  3567 => 1306,  3562 => 1304,  3559 => 1303,  3557 => 1302,  3554 => 1301,  3549 => 1300,  3546 => 1299,  3541 => 1297,  3538 => 1296,  3536 => 1295,  3529 => 1293,  3523 => 1289,  3518 => 1288,  3515 => 1287,  3510 => 1285,  3507 => 1284,  3505 => 1283,  3502 => 1282,  3497 => 1281,  3494 => 1280,  3489 => 1278,  3486 => 1277,  3484 => 1276,  3477 => 1274,  3472 => 1272,  3460 => 1265,  3453 => 1263,  3447 => 1259,  3439 => 1257,  3434 => 1256,  3429 => 1255,  3424 => 1253,  3419 => 1252,  3417 => 1251,  3414 => 1250,  3410 => 1249,  3403 => 1247,  3398 => 1245,  3388 => 1240,  3383 => 1238,  3374 => 1234,  3369 => 1232,  3360 => 1228,  3353 => 1226,  3344 => 1222,  3339 => 1220,  3330 => 1216,  3323 => 1214,  3314 => 1210,  3307 => 1208,  3300 => 1203,  3294 => 1200,  3291 => 1199,  3285 => 1196,  3282 => 1195,  3279 => 1194,  3273 => 1191,  3270 => 1190,  3264 => 1187,  3261 => 1186,  3259 => 1185,  3250 => 1181,  3245 => 1179,  3236 => 1173,  3230 => 1172,  3224 => 1171,  3217 => 1167,  3211 => 1166,  3207 => 1165,  3198 => 1158,  3190 => 1156,  3185 => 1155,  3180 => 1154,  3175 => 1152,  3170 => 1151,  3168 => 1150,  3165 => 1149,  3161 => 1148,  3156 => 1146,  3149 => 1141,  3143 => 1140,  3135 => 1137,  3132 => 1136,  3124 => 1133,  3121 => 1132,  3118 => 1131,  3114 => 1130,  3109 => 1128,  3101 => 1125,  3096 => 1123,  3088 => 1117,  3082 => 1116,  3074 => 1113,  3071 => 1112,  3063 => 1109,  3060 => 1108,  3057 => 1107,  3053 => 1106,  3044 => 1102,  3037 => 1097,  3031 => 1096,  3023 => 1093,  3020 => 1092,  3012 => 1089,  3009 => 1088,  3006 => 1087,  3002 => 1086,  2997 => 1084,  2989 => 1081,  2984 => 1079,  2976 => 1073,  2970 => 1072,  2962 => 1069,  2959 => 1068,  2951 => 1065,  2948 => 1064,  2945 => 1063,  2941 => 1062,  2936 => 1060,  2928 => 1057,  2919 => 1053,  2912 => 1051,  2906 => 1047,  2901 => 1046,  2898 => 1045,  2893 => 1043,  2890 => 1042,  2888 => 1041,  2885 => 1040,  2880 => 1039,  2877 => 1038,  2872 => 1036,  2869 => 1035,  2867 => 1034,  2860 => 1032,  2854 => 1028,  2849 => 1027,  2846 => 1026,  2841 => 1024,  2838 => 1023,  2836 => 1022,  2833 => 1021,  2828 => 1020,  2825 => 1019,  2820 => 1017,  2817 => 1016,  2815 => 1015,  2808 => 1013,  2801 => 1008,  2795 => 1007,  2787 => 1004,  2784 => 1003,  2776 => 1000,  2773 => 999,  2770 => 998,  2766 => 997,  2759 => 993,  2754 => 991,  2747 => 986,  2742 => 985,  2739 => 984,  2734 => 982,  2731 => 981,  2729 => 980,  2726 => 979,  2721 => 978,  2718 => 977,  2713 => 975,  2710 => 974,  2708 => 973,  2701 => 971,  2695 => 967,  2690 => 966,  2687 => 965,  2682 => 963,  2679 => 962,  2677 => 961,  2674 => 960,  2669 => 959,  2666 => 958,  2661 => 956,  2658 => 955,  2656 => 954,  2649 => 952,  2643 => 948,  2638 => 947,  2635 => 946,  2630 => 944,  2627 => 943,  2625 => 942,  2622 => 941,  2617 => 940,  2614 => 939,  2609 => 937,  2606 => 936,  2604 => 935,  2597 => 933,  2592 => 931,  2584 => 925,  2578 => 924,  2570 => 921,  2567 => 920,  2559 => 917,  2556 => 916,  2553 => 915,  2549 => 914,  2544 => 912,  2536 => 909,  2529 => 904,  2523 => 903,  2515 => 900,  2512 => 899,  2504 => 896,  2501 => 895,  2498 => 894,  2494 => 893,  2485 => 889,  2480 => 886,  2474 => 885,  2472 => 884,  2469 => 883,  2461 => 881,  2456 => 880,  2451 => 879,  2446 => 877,  2441 => 876,  2439 => 875,  2436 => 874,  2432 => 873,  2425 => 871,  2420 => 868,  2414 => 867,  2412 => 866,  2409 => 865,  2401 => 863,  2396 => 862,  2391 => 861,  2386 => 859,  2381 => 858,  2379 => 857,  2376 => 856,  2372 => 855,  2365 => 853,  2358 => 848,  2352 => 847,  2344 => 844,  2341 => 843,  2333 => 840,  2330 => 839,  2327 => 838,  2323 => 837,  2314 => 833,  2307 => 828,  2301 => 827,  2293 => 824,  2290 => 823,  2282 => 820,  2279 => 819,  2276 => 818,  2272 => 817,  2267 => 815,  2259 => 812,  2253 => 808,  2248 => 807,  2245 => 806,  2240 => 804,  2237 => 803,  2235 => 802,  2232 => 801,  2227 => 800,  2224 => 799,  2219 => 797,  2216 => 796,  2214 => 795,  2207 => 793,  2201 => 789,  2196 => 788,  2193 => 787,  2188 => 785,  2185 => 784,  2183 => 783,  2180 => 782,  2175 => 781,  2172 => 780,  2167 => 778,  2164 => 777,  2162 => 776,  2155 => 774,  2146 => 770,  2139 => 768,  2134 => 766,  2126 => 760,  2120 => 759,  2112 => 756,  2109 => 755,  2101 => 752,  2098 => 751,  2095 => 750,  2091 => 749,  2086 => 747,  2078 => 744,  2073 => 741,  2067 => 740,  2065 => 739,  2059 => 738,  2052 => 736,  2046 => 732,  2041 => 731,  2038 => 730,  2033 => 728,  2030 => 727,  2028 => 726,  2025 => 725,  2020 => 724,  2017 => 723,  2012 => 721,  2009 => 720,  2007 => 719,  2000 => 717,  1995 => 714,  1989 => 713,  1986 => 712,  1978 => 709,  1973 => 708,  1968 => 707,  1963 => 705,  1958 => 704,  1956 => 703,  1953 => 702,  1949 => 701,  1943 => 700,  1936 => 695,  1930 => 694,  1922 => 691,  1919 => 690,  1911 => 687,  1908 => 686,  1905 => 685,  1901 => 684,  1892 => 680,  1886 => 676,  1881 => 675,  1878 => 674,  1873 => 672,  1870 => 671,  1868 => 670,  1865 => 669,  1860 => 668,  1857 => 667,  1852 => 665,  1849 => 664,  1847 => 663,  1842 => 661,  1836 => 657,  1831 => 656,  1828 => 655,  1823 => 653,  1820 => 652,  1818 => 651,  1815 => 650,  1810 => 649,  1807 => 648,  1802 => 646,  1799 => 645,  1797 => 644,  1790 => 642,  1784 => 638,  1779 => 637,  1776 => 636,  1771 => 634,  1768 => 633,  1766 => 632,  1763 => 631,  1758 => 630,  1755 => 629,  1750 => 627,  1747 => 626,  1745 => 625,  1738 => 623,  1733 => 621,  1725 => 615,  1719 => 612,  1716 => 611,  1710 => 608,  1707 => 607,  1704 => 606,  1698 => 603,  1695 => 602,  1689 => 599,  1686 => 598,  1684 => 597,  1679 => 595,  1671 => 592,  1664 => 587,  1658 => 584,  1655 => 583,  1649 => 580,  1646 => 579,  1643 => 578,  1637 => 575,  1634 => 574,  1628 => 571,  1625 => 570,  1623 => 569,  1618 => 567,  1610 => 564,  1604 => 560,  1599 => 559,  1596 => 558,  1591 => 556,  1588 => 555,  1586 => 554,  1583 => 553,  1578 => 552,  1575 => 551,  1570 => 549,  1567 => 548,  1565 => 547,  1560 => 545,  1555 => 543,  1549 => 539,  1543 => 538,  1541 => 537,  1535 => 536,  1528 => 534,  1523 => 531,  1517 => 530,  1515 => 529,  1509 => 528,  1502 => 526,  1497 => 524,  1490 => 519,  1485 => 518,  1482 => 517,  1477 => 515,  1474 => 514,  1472 => 513,  1469 => 512,  1464 => 511,  1461 => 510,  1456 => 508,  1453 => 507,  1451 => 506,  1444 => 504,  1438 => 500,  1433 => 499,  1430 => 498,  1425 => 496,  1422 => 495,  1420 => 494,  1417 => 493,  1412 => 492,  1409 => 491,  1404 => 489,  1401 => 488,  1399 => 487,  1392 => 485,  1387 => 483,  1381 => 479,  1375 => 478,  1373 => 477,  1367 => 476,  1360 => 474,  1355 => 471,  1349 => 470,  1347 => 469,  1341 => 468,  1334 => 466,  1328 => 462,  1323 => 461,  1320 => 460,  1315 => 458,  1312 => 457,  1310 => 456,  1307 => 455,  1302 => 454,  1299 => 453,  1294 => 451,  1291 => 450,  1289 => 449,  1282 => 447,  1277 => 445,  1268 => 438,  1262 => 437,  1254 => 434,  1251 => 433,  1243 => 430,  1240 => 429,  1237 => 428,  1233 => 427,  1226 => 423,  1219 => 418,  1213 => 417,  1205 => 414,  1202 => 413,  1194 => 410,  1191 => 409,  1188 => 408,  1184 => 407,  1177 => 403,  1171 => 399,  1165 => 398,  1157 => 396,  1149 => 394,  1146 => 393,  1142 => 392,  1136 => 389,  1130 => 385,  1125 => 384,  1122 => 383,  1117 => 381,  1114 => 380,  1112 => 379,  1109 => 378,  1104 => 377,  1101 => 376,  1096 => 374,  1093 => 373,  1091 => 372,  1084 => 370,  1077 => 365,  1071 => 364,  1063 => 361,  1060 => 360,  1052 => 357,  1049 => 356,  1046 => 355,  1042 => 354,  1033 => 350,  1026 => 345,  1020 => 344,  1012 => 341,  1009 => 340,  1001 => 337,  998 => 336,  995 => 335,  991 => 334,  984 => 330,  977 => 325,  971 => 324,  963 => 321,  960 => 320,  952 => 317,  949 => 316,  946 => 315,  942 => 314,  935 => 310,  929 => 306,  923 => 305,  915 => 303,  907 => 301,  904 => 300,  900 => 299,  894 => 296,  884 => 289,  877 => 284,  871 => 283,  863 => 280,  860 => 279,  852 => 276,  849 => 275,  846 => 274,  842 => 273,  835 => 269,  830 => 266,  825 => 264,  817 => 262,  812 => 261,  807 => 260,  802 => 258,  797 => 257,  795 => 256,  792 => 255,  788 => 254,  782 => 253,  779 => 252,  777 => 251,  769 => 248,  764 => 246,  755 => 242,  748 => 240,  739 => 236,  732 => 234,  725 => 230,  719 => 229,  715 => 228,  706 => 224,  701 => 222,  696 => 219,  690 => 218,  688 => 217,  682 => 216,  677 => 214,  672 => 211,  666 => 210,  664 => 209,  658 => 208,  653 => 206,  648 => 203,  642 => 202,  640 => 201,  634 => 200,  629 => 198,  620 => 194,  615 => 192,  606 => 188,  601 => 186,  596 => 183,  590 => 182,  588 => 181,  582 => 180,  577 => 178,  568 => 174,  561 => 172,  558 => 171,  544 => 167,  529 => 165,  526 => 164,  521 => 163,  507 => 159,  492 => 157,  489 => 156,  484 => 155,  470 => 151,  455 => 149,  452 => 148,  448 => 147,  444 => 145,  438 => 144,  436 => 143,  430 => 142,  425 => 140,  420 => 137,  414 => 136,  412 => 135,  406 => 134,  401 => 132,  396 => 129,  390 => 128,  388 => 127,  382 => 126,  377 => 124,  372 => 121,  358 => 117,  345 => 115,  342 => 114,  337 => 113,  323 => 109,  310 => 107,  307 => 106,  303 => 105,  297 => 101,  291 => 100,  283 => 97,  280 => 96,  272 => 93,  269 => 92,  266 => 91,  262 => 90,  255 => 86,  247 => 80,  241 => 79,  233 => 76,  230 => 75,  222 => 72,  219 => 71,  216 => 70,  212 => 69,  205 => 65,  196 => 61,  191 => 59,  182 => 55,  177 => 53,  172 => 50,  166 => 49,  164 => 48,  158 => 47,  153 => 45,  145 => 40,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  112 => 31,  106 => 28,  102 => 26,  94 => 22,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"{{ button_save }}\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
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
    {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    {% endif %}
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> {{ text_edit }}</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">{{ tab_general }}</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">{{ tab_store }}</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">{{ tab_local }}</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">{{ tab_option }}</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">{{ tab_image }}</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">{{ tab_mail }}</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">{{ tab_server }}</a></li>
\t\t\t<li><a href=\"#tab-seopro\" data-toggle=\"tab\">{{ tab_seopro }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">{{ entry_meta_title }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"{{ config_meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title\" class=\"form-control\" />
                  {% if error_meta_title %}
                  <div class=\"text-danger\">{{ error_meta_title }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">{{ entry_meta_description }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description\" class=\"form-control\">{{ config_meta_description }}</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">{{ entry_meta_keyword }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword\" class=\"form-control\">{{ config_meta_keyword }}</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">{{ entry_theme }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    
                    {% for theme in themes %}
                    {% if theme.value == config_theme %}
                    
                    <option value=\"{{ theme.value }}\" selected=\"selected\">{{ theme.text }}</option>
                    
                    {% else %}
                    
                    <option value=\"{{ theme.value }}\">{{ theme.text }}</option>
                    
                    {% endif %}
                    {% endfor %}
                  
                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">{{ entry_layout }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    
                    {% for layout in layouts %}
                    {% if layout.layout_id == config_layout_id %}
                    
                    <option value=\"{{ layout.layout_id }}\" selected=\"selected\">{{ layout.name }}</option>
                    
                    {% else %}
                    
                    <option value=\"{{ layout.layout_id }}\">{{ layout.name }}</option>
                    
                    {% endif %}
                    {% endfor %}
                  
                  </select>
                </div>
              </div>
\t\t\t  {% for language in languages %}
\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-textv{{ language.language_id }}\">Реквизиты сверху <img src=\"language/{{ language.code }}/{{ language.code }}.png\" title=\"{{ language.name }}\" /> {{ language.name }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_textv\" rows=\"5\" placeholder=\"{{ entry_textv }}\" id=\"input-textv{{ language.language_id }}\" data-toggle=\"summernote\" class=\"form-control\">{{ config_textv }}</textarea>
                </div>
              </div>
\t\t\t  {% endfor %}
\t\t\t  {% for language in languages %}
\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-textn{{ language.language_id }}\">Реквизиты снизу <img src=\"language/{{ language.code }}/{{ language.code }}.png\" title=\"{{ language.name }}\" /> {{ language.name }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_textn\" rows=\"5\" placeholder=\"{{ entry_textn }}\" id=\"input-textn{{ language.language_id }}\" data-toggle=\"summernote\" class=\"form-control\">{{ config_textn }}</textarea>
                </div>
              </div>
\t\t\t  {% endfor %}
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">{{ entry_name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"{{ config_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\" />
                  {% if error_name %}
                  <div class=\"text-danger\">{{ error_name }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">{{ entry_owner }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"{{ config_owner }}\" placeholder=\"{{ entry_owner }}\" id=\"input-owner\" class=\"form-control\" />
                  {% if error_owner %}
                  <div class=\"text-danger\">{{ error_owner }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">{{ entry_address }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"{{ entry_address }}\" rows=\"5\" id=\"input-address\" class=\"form-control\">{{ config_address }}</textarea>
                  {% if error_address %}
                  <div class=\"text-danger\">{{ error_address }}</div>
                  {% endif %} </div>
              </div>
\t\t\t\t{% for language in languages %}
\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-rekv{{ language.language_id }}\">{{ entry_rekv }} <img src=\"language/{{ language.code }}/{{ language.code }}.png\" title=\"{{ language.name }}\" /> {{ language.name }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_rekv\" rows=\"5\" placeholder=\"{{ entry_rekv }}\" id=\"input-rekv{{ language.language_id }}\" data-toggle=\"summernote\" class=\"form-control\">{{ config_rekv }}</textarea>
                </div>
              </div>
\t\t\t  {% endfor %}
\t\t\t  {% for language in languages %}
\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-buyer-content{{ language.language_id }}\">{{ entry_buyer_content }} <img src=\"language/{{ language.code }}/{{ language.code }}.png\" title=\"{{ language.name }}\" /> {{ language.name }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_buyer_content\" rows=\"5\" placeholder=\"{{ entry_buyer_content }}\" id=\"input-buyer-content{{ language.language_id }}\" data-toggle=\"summernote\" class=\"form-control\">{{ config_buyer_content }}</textarea>
                </div>
              </div>
\t\t\t  {% endfor %}
\t\t\t  {% for language in languages %}
\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-seller-content{{ language.language_id }}\">{{ entry_seller_content }} <img src=\"language/{{ language.code }}/{{ language.code }}.png\" title=\"{{ language.name }}\" /> {{ language.name }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_seller_content\" rows=\"5\" placeholder=\"{{ entry_seller_content }}\" id=\"input-seller-content{{ language.language_id }}\" data-toggle=\"summernote\" class=\"form-control\">{{ config_seller_content }}</textarea>
                </div>
              </div>
\t\t\t  {% endfor %}
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"{{ help_geocode }}\">{{ entry_geocode }}</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"{{ config_geocode }}\" placeholder=\"{{ entry_geocode }}\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">{{ entry_email }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"{{ config_email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" />
                  {% if error_email %}
                  <div class=\"text-danger\">{{ error_email }}</div>
                  {% endif %} </div>
              </div>
\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-buyer-email\">{{ entry_buyer_email }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_buyer_email\" value=\"{{ config_buyer_email }}\" placeholder=\"{{ entry_buyer_email }}\" id=\"input-buyer-email\" class=\"form-control\" />
\t\t\t\t  </div>
              </div>
\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-seller-email\">{{ entry_seller_email }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_seller_email\" value=\"{{ config_seller_email }}\" placeholder=\"{{ entry_seller_email }}\" id=\"input-seller-email\" class=\"form-control\" />
\t\t\t\t  </div>
              </div>
\t\t\t\t<div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-wa\">{{ entry_wa }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_wa\" value=\"{{ config_wa }}\" placeholder=\"{{ entry_wa }}\" id=\"input-wa\" class=\"form-control\" />
                  {% if error_wa %}
                  <div class=\"text-danger\">{{ error_wa }}</div>
                  {% endif %} </div>
              </div>
\t\t\t\t<div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-tg\">{{ entry_tg }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_tg\" value=\"{{ config_tg }}\" placeholder=\"{{ entry_tg }}\" id=\"input-tg\" class=\"form-control\" />
                  {% if error_tg %}
                  <div class=\"text-danger\">{{ error_tg }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">{{ entry_telephone }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"{{ config_telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\" />
                  {% if error_telephone %}
                  <div class=\"text-danger\">{{ error_telephone }}</div>
                  {% endif %} </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">{{ entry_fax }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"{{ config_fax }}\" placeholder=\"{{ entry_fax }}\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">{{ entry_image }}</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"{{ thumb }}\" alt=\"\" title=\"\" data-placeholder=\"{{ placeholder }}\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"{{ config_image }}\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"{{ help_open }}\">{{ entry_open }}</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"{{ entry_open }}\" id=\"input-open\" class=\"form-control\">{{ config_open }}</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"{{ help_comment }}\">{{ entry_comment }}</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"{{ entry_comment }}\" id=\"input-comment\" class=\"form-control\">{{ config_comment }}</textarea>
                </div>
              </div>
\t\t\t\t<div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-formText\">{{ entry_formText }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_formText\" rows=\"5\" placeholder=\"{{ entry_formText }}\" id=\"input-formText\" class=\"form-control\">{{ config_formText }}</textarea>
                </div>
              </div>
              {% if locations %}
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"{{ help_location }}\">{{ entry_location }}</span></label>
                <div class=\"col-sm-10\"> {% for location in locations %}
                  <div class=\"checkbox\">
                    <label> {% if location.location_id in config_location %}
                      <input type=\"checkbox\" name=\"config_location[]\" value=\"{{ location.location_id }}\" checked=\"checked\" />
                      {{ location.name }}
                      {% else %}
                      <input type=\"checkbox\" name=\"config_location[]\" value=\"{{ location.location_id }}\" />
                      {{ location.name }}
                      {% endif %} </label>
                  </div>
                  {% endfor %} </div>
              </div>
              {% endif %} </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">{{ entry_country }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    
                    {% for country in countries %}
                    {% if country.country_id == config_country_id %}
                    
                    <option value=\"{{ country.country_id }}\" selected=\"selected\">{{ country.name }}</option>
                    
                    {% else %}
                    
                    <option value=\"{{ country.country_id }}\">{{ country.name }}</option>
                    
                    {% endif %}
                    {% endfor %}
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">{{ entry_zone }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">{{ entry_timezone }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    {% for timezone in timezones %}
                      {% if timezone.value == config_timezone %}
                        <option value=\"{{ timezone.value }}\" selected=\"selected\">{{ timezone.text }}</option>
                      {% else %}
                        <option value=\"{{ timezone.value }}\">{{ timezone.text }}</option>
                      {% endif %}
                    {% endfor %}
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">{{ entry_language }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    
                    {% for language in languages %}
                    {% if language.code == config_language %}
                    
                    <option value=\"{{ language.code }}\" selected=\"selected\">{{ language.name }}</option>
                    
                    {% else %}
                    
                    <option value=\"{{ language.code }}\">{{ language.name }}</option>
                    
                    {% endif %}
                    {% endfor %}
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">{{ entry_admin_language }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    
                    {% for language in languages %}
                    {% if language.code == config_admin_language %}
                    
                    <option value=\"{{ language.code }}\" selected=\"selected\">{{ language.name }}</option>
                    
                    {% else %}
                    
                    <option value=\"{{ language.code }}\">{{ language.name }}</option>
                    
                    {% endif %}
                    {% endfor %}
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"{{ help_currency }}\">{{ entry_currency }}</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    
                    {% for currency in currencies %}
                    {% if currency.code == config_currency %}
                    
                    <option value=\"{{ currency.code }}\" selected=\"selected\">{{ currency.title }}</option>
                    
                    {% else %}
                    
                    <option value=\"{{ currency.code }}\">{{ currency.title }}</option>
                    
                    {% endif %}
                    {% endfor %}
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_currency_auto }}\">{{ entry_currency_auto }}</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> {% if config_currency_auto %}
                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    {{ text_yes }}
                    {% else %}
                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    {{ text_yes }}
                    {% endif %} </label>
                  <label class=\"radio-inline\"> {% if not config_currency_auto %}
                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    {{ text_no }}
                    {% else %}
                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    {{ text_no }}
                    {% endif %} </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency-engine\">{{ entry_currency_engine }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">
                    {% for currency_engine in currency_engines %}
                    {% if currency_engine.value == config_currency_engine %}
                    <option value=\"{{ currency_engine.value }}\" selected=\"selected\">{{ currency_engine.text }}</option>
                    {% else %}
                    <option value=\"{{ currency_engine.value }}\">{{ currency_engine.text }}</option>
                    {% endif %}
                    {% endfor %}
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">{{ entry_length_class }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    
                    {% for length_class in length_classes %}
                    {% if length_class.length_class_id == config_length_class_id %}
                    
                    <option value=\"{{ length_class.length_class_id }}\" selected=\"selected\">{{ length_class.title }}</option>
                    
                    {% else %}
                    
                    <option value=\"{{ length_class.length_class_id }}\">{{ length_class.title }}</option>
                    
                    {% endif %}
                    {% endfor %}
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">{{ entry_weight_class }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    
                    {% for weight_class in weight_classes %}
                    {% if weight_class.weight_class_id == config_weight_class_id %}
                    
                    <option value=\"{{ weight_class.weight_class_id }}\" selected=\"selected\">{{ weight_class.title }}</option>
                    
                    {% else %}
                    
                    <option value=\"{{ weight_class.weight_class_id }}\">{{ weight_class.title }}</option>
                    
                    {% endif %}
                    {% endfor %}
                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>{{ text_product }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_product_count }}\">{{ entry_product_count }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_product_count %}
                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_product_count %}
                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"{{ help_limit_admin }}\">{{ entry_limit_admin }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"{{ config_limit_admin }}\" placeholder=\"{{ entry_limit_admin }}\" id=\"input-admin-limit\" class=\"form-control\" />
                    {% if error_limit_admin %}
                    <div class=\"text-danger\">{{ error_limit_admin }}</div>
                    {% endif %} </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-autocomplete-limit\"><span data-toggle=\"tooltip\" title=\"{{ help_limit_autocomplete }}\">{{ entry_limit_autocomplete }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_autocomplete\" value=\"{{ config_limit_autocomplete }}\" placeholder=\"{{ entry_limit_autocomplete }}\" id=\"input-autocomplete-limit\" class=\"form-control\" />
                    {% if error_limit_autocomplete %}
                    <div class=\"text-danger\">{{ error_limit_autocomplete }}</div>
                    {% endif %} </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_review }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_review }}\">{{ entry_review }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_review_status %}
                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_review_status %}
                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_review_guest }}\">{{ entry_review_guest }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_review_guest %}
                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_review_guest %}
                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_voucher }}</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"{{ help_voucher_min }}\">{{ entry_voucher_min }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"{{ config_voucher_min }}\" placeholder=\"{{ entry_voucher_min }}\" id=\"input-voucher-min\" class=\"form-control\" />
                    {% if error_voucher_min %}
                    <div class=\"text-danger\">{{ error_voucher_min }}</div>
                    {% endif %} </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"{{ help_voucher_max }}\">{{ entry_voucher_max }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"{{ config_voucher_max }}\" placeholder=\"{{ entry_voucher_max }}\" id=\"input-voucher-max\" class=\"form-control\" />
                    {% if error_voucher_max %}
                    <div class=\"text-danger\">{{ error_voucher_max }}</div>
                    {% endif %} </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_tax }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">{{ entry_tax }}</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_tax %}
                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_tax %}
                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"{{ help_tax_default }}\">{{ entry_tax_default }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">{{ text_none }}</option>
                      
                      {% if config_tax_default == 'shipping' %}
                      
                      <option value=\"shipping\" selected=\"selected\">{{ text_shipping }}</option>
                      
                      {% else %}
                      
                      <option value=\"shipping\">{{ text_shipping }}</option>
                      
                      {% endif %}
                      {% if config_tax_default == 'payment' %}
                      
                      <option value=\"payment\" selected=\"selected\">{{ text_payment }}</option>
                      
                      {% else %}
                      
                      <option value=\"payment\">{{ text_payment }}</option>
                      
                      {% endif %}
                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"{{ help_tax_customer }}\">{{ entry_tax_customer }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">{{ text_none }}</option>
                      
                      {% if config_tax_customer == 'shipping' %}
                      
                      <option value=\"shipping\" selected=\"selected\">{{ text_shipping }}</option>
                      
                      {% else %}
                      
                      <option value=\"shipping\">{{ text_shipping }}</option>
                      
                      {% endif %}
                      {% if config_tax_customer == 'payment' %}
                      
                      <option value=\"payment\" selected=\"selected\">{{ text_payment }}</option>
                      
                      {% else %}
                      
                      <option value=\"payment\">{{ text_payment }}</option>
                      
                      {% endif %}
                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_account }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_customer_online }}\">{{ entry_customer_online }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_customer_online %}
                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_customer_online %}
                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_customer_activity }}\">{{ entry_customer_activity }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_customer_activity %}
                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_customer_activity %}
                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">{{ entry_customer_search }}</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_customer_search %}
                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_customer_search %}
                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"{{ help_customer_group }}\">{{ entry_customer_group }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      
                      {% for customer_group in customer_groups %}
                      {% if customer_group.customer_group_id == config_customer_group_id %}
                      
                      <option value=\"{{ customer_group.customer_group_id }}\" selected=\"selected\">{{ customer_group.name }}</option>
                      
                      {% else %}
                      
                      <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name }}</option>
                      
                      {% endif %}
                      {% endfor %}
                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_customer_group_display }}\">{{ entry_customer_group_display }}</span></label>
                  <div class=\"col-sm-10\"> {% for customer_group in customer_groups %}
                    <div class=\"checkbox\">
                      <label> {% if customer_group.customer_group_id in config_customer_group_display %}
                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"{{ customer_group.customer_group_id }}\" checked=\"checked\" />
                        {{ customer_group.name }}
                        {% else %}
                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"{{ customer_group.customer_group_id }}\" />
                        {{ customer_group.name }}
                        {% endif %} </label>
                    </div>
                    {% endfor %}
                    {% if error_customer_group_display %}
                    <div class=\"text-danger\">{{ error_customer_group_display }}</div>
                    {% endif %} </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_customer_price }}\">{{ entry_customer_price }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_customer_price %}
                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_customer_price %}
                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"{{ help_login_attempts }}\">{{ entry_login_attempts }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"{{ config_login_attempts }}\" placeholder=\"{{ entry_login_attempts }}\" id=\"input-login-attempts\" class=\"form-control\" />
                    {% if error_login_attempts %}
                    <div class=\"text-danger\">{{ error_login_attempts }}</div>
                    {% endif %} </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"{{ help_account }}\">{{ entry_account }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">{{ text_none }}</option>
                      
                      {% for information in informations %}
                      {% if information.information_id == config_account_id %}
                      
                      <option value=\"{{ information.information_id }}\" selected=\"selected\">{{ information.title }}</option>
                      
                      {% else %}
                      
                      <option value=\"{{ information.information_id }}\">{{ information.title }}</option>
                      
                      {% endif %}
                      {% endfor %}
                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_checkout }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"{{ help_invoice_prefix }}\">{{ entry_invoice_prefix }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"{{ config_invoice_prefix }}\" placeholder=\"{{ entry_invoice_prefix }}\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_cart_weight }}\">{{ entry_cart_weight }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_cart_weight %}
                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_cart_weight %}
                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_checkout_guest }}\">{{ entry_checkout_guest }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_checkout_guest %}
                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_checkout_guest %}
                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"{{ help_checkout }}\">{{ entry_checkout }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">{{ text_none }}</option>
                      
                      {% for information in informations %}
                      {% if information.information_id == config_checkout_id %}
                      
                      <option value=\"{{ information.information_id }}\" selected=\"selected\">{{ information.title }}</option>
                      
                      {% else %}
                      
                      <option value=\"{{ information.information_id }}\">{{ information.title }}</option>
                      
                      {% endif %}
                      {% endfor %}
                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"{{ help_order_status }}\">{{ entry_order_status }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      
                      {% for order_status in order_statuses %}
                      {% if order_status.order_status_id == config_order_status_id %}
                      
                      <option value=\"{{ order_status.order_status_id }}\" selected=\"selected\">{{ order_status.name }}</option>
                      
                      {% else %}
                      
                      <option value=\"{{ order_status.order_status_id }}\">{{ order_status.name }}</option>
                      
                      {% endif %}
                      {% endfor %}
                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"{{ help_processing_status }}\">{{ entry_processing_status }}</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for order_status in order_statuses %}
                      <div class=\"checkbox\">
                        <label> {% if order_status.order_status_id in config_processing_status %}
                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"{{ order_status.order_status_id }}\" checked=\"checked\" />
                          {{ order_status.name }}
                          {% else %}
                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"{{ order_status.order_status_id }}\" />
                          {{ order_status.name }}
                          {% endif %} </label>
                      </div>
                      {% endfor %} </div>
                    {% if error_processing_status %}
                    <div class=\"text-danger\">{{ error_processing_status }}</div>
                    {% endif %} </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"{{ help_complete_status }}\">{{ entry_complete_status }}</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for order_status in order_statuses %}
                      <div class=\"checkbox\">
                        <label> {% if order_status.order_status_id in config_complete_status %}
                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"{{ order_status.order_status_id }}\" checked=\"checked\" />
                          {{ order_status.name }}
                          {% else %}
                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"{{ order_status.order_status_id }}\" />
                          {{ order_status.name }}
                          {% endif %} </label>
                      </div>
                      {% endfor %} </div>
                    {% if error_complete_status %}
                    <div class=\"text-danger\">{{ error_complete_status }}</div>
                    {% endif %} </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"{{ help_fraud_status }}\">{{ entry_fraud_status }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      
                      {% for order_status in order_statuses %}
                      {% if order_status.order_status_id == config_fraud_status_id %}
                      
                      <option value=\"{{ order_status.order_status_id }}\" selected=\"selected\">{{ order_status.name }}</option>
                      
                      {% else %}
                      
                      <option value=\"{{ order_status.order_status_id }}\">{{ order_status.name }}</option>
                      
                      {% endif %}
                      {% endfor %}
                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"{{ help_api }}\">{{ entry_api }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">{{ text_none }}</option>
                      
                      {% for api in apis %}
                      {% if api.api_id == config_api_id %}
                      
                      <option value=\"{{ api.api_id }}\" selected=\"selected\">{{ api.username }}</option>
                      
                      {% else %}
                      
                      <option value=\"{{ api.api_id }}\">{{ api.username }}</option>
                      
                      {% endif %}
                      {% endfor %}
                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_stock }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_stock_display }}\">{{ entry_stock_display }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_stock_display %}
                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_stock_display %}
                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_stock_warning }}\">{{ entry_stock_warning }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_stock_warning %}
                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_stock_warning %}
                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_stock_checkout }}\">{{ entry_stock_checkout }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_stock_checkout %}
                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_stock_checkout %}
                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_affiliate }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">{{ entry_affiliate_group }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      
                      {% for customer_group in customer_groups %}
                      {% if customer_group.customer_group_id == config_affiliate_group_id %}
                      
                      <option value=\"{{ customer_group.customer_group_id }}\" selected=\"selected\">{{ customer_group.name }}</option>
                      
                      {% else %}
                      
                      <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name }}</option>
                      
                      {% endif %}
                      {% endfor %}
                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_affiliate_approval }}\">{{ entry_affiliate_approval }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_affiliate_approval %}
                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_affiliate_approval %}
                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_affiliate_auto }}\">{{ entry_affiliate_auto }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_affiliate_auto %}
                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_affiliate_auto %}
                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"{{ help_affiliate_commission }}\">{{ entry_affiliate_commission }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"{{ config_affiliate_commission }}\" placeholder=\"{{ entry_affiliate_commission }}\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"{{ help_affiliate }}\">{{ entry_affiliate }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">{{ text_none }}</option>
                      
                      {% for information in informations %}
                      {% if information.information_id == config_affiliate_id %}
                      
                      <option value=\"{{ information.information_id }}\" selected=\"selected\">{{ information.title }}</option>
                      
                      {% else %}
                      
                      <option value=\"{{ information.information_id }}\">{{ information.title }}</option>
                      
                      {% endif %}
                      {% endfor %}
                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_return }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"{{ help_return }}\">{{ entry_return }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">{{ text_none }}</option>
                      
                      {% for information in informations %}
                      {% if information.information_id == config_return_id %}
                      
                      <option value=\"{{ information.information_id }}\" selected=\"selected\">{{ information.title }}</option>
                      
                      {% else %}
                      
                      <option value=\"{{ information.information_id }}\">{{ information.title }}</option>
                      
                      {% endif %}
                      {% endfor %}
                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"{{ help_return_status }}\">{{ entry_return_status }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      
                      {% for return_status in return_statuses %}
                      {% if return_status.return_status_id == config_return_status_id %}
                      
                      <option value=\"{{ return_status.return_status_id }}\" selected=\"selected\">{{ return_status.name }}</option>
                      
                      {% else %}
                      
                      <option value=\"{{ return_status.return_status_id }}\">{{ return_status.name }}</option>
                      
                      {% endif %}
                      {% endfor %}
                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_captcha }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_captcha }}\">{{ entry_captcha }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">{{ text_none }}</option>
                      
                      {% for captcha in captchas %}
                      {% if captcha.value == config_captcha %}
                      
                      <option value=\"{{ captcha.value }}\" selected=\"selected\">{{ captcha.text }}</option>
                      
                      {% else %}
                      
                      <option value=\"{{ captcha.value }}\">{{ captcha.text }}</option>
                      
                      {% endif %}
                      {% endfor %}
                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">{{ entry_captcha_page }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for captcha_page in captcha_pages %}
                      <div class=\"checkbox\">
                        <label> {% if captcha_page.value in config_captcha_page %}
                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"{{ captcha_page.value }}\" checked=\"checked\" />
                          {{ captcha_page.text }}
                          {% else %}
                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"{{ captcha_page.value }}\" />
                          {{ captcha_page.text }}
                          {% endif %} </label>
                      </div>
                      {% endfor %} </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">{{ entry_logo }}</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"{{ logo }}\" alt=\"\" title=\"\" data-placeholder=\"{{ placeholder }}\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"{{ config_logo }}\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"{{ help_icon }}\">{{ entry_icon }}</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"{{ icon }}\" alt=\"\" title=\"\" data-placeholder=\"{{ placeholder }}\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"{{ config_icon }}\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>{{ text_general }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_engine }}\">{{ entry_mail_engine }}</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      
                      {% if config_mail_engine == 'mail' %}
                      
                      <option value=\"mail\" selected=\"selected\">{{ text_mail }}</option>
                      
                      {% else %}
                      
                      <option value=\"mail\">{{ text_mail }}</option>
                      
                      {% endif %}
                      {% if config_mail_engine == 'smtp' %}
                      
                      <option value=\"smtp\" selected=\"selected\">{{ text_smtp }}</option>
                      
                      {% else %}
                      
                      <option value=\"smtp\">{{ text_smtp }}</option>
                      
                      {% endif %}
                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_parameter }}\">{{ entry_mail_parameter }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"{{ config_mail_parameter }}\" placeholder=\"{{ entry_mail_parameter }}\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_smtp_hostname }}\">{{ entry_mail_smtp_hostname }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"{{ config_mail_smtp_hostname }}\" placeholder=\"{{ entry_mail_smtp_hostname }}\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">{{ entry_mail_smtp_username }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"{{ config_mail_smtp_username }}\" placeholder=\"{{ entry_mail_smtp_username }}\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_smtp_password }}\">{{ entry_mail_smtp_password }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"{{ config_mail_smtp_password }}\" placeholder=\"{{ entry_mail_smtp_password }}\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">{{ entry_mail_smtp_port }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"{{ config_mail_smtp_port }}\" placeholder=\"{{ entry_mail_smtp_port }}\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">{{ entry_mail_smtp_timeout }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"{{ config_mail_smtp_timeout }}\" placeholder=\"{{ entry_mail_smtp_timeout }}\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_mail_alert }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_alert }}\">{{ entry_mail_alert }}</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> {% for mail_alert in mail_alerts %}
                      <div class=\"checkbox\">
                        <label> {% if mail_alert.value in config_mail_alert %}
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"{{ mail_alert.value }}\" checked=\"checked\" />
                          {{ mail_alert.text }}
                          {% else %}
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"{{ mail_alert.value }}\" />
                          {{ mail_alert.text }}
                          {% endif %} </label>
                      </div>
                      {% endfor %} </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"{{ help_mail_alert_email }}\">{{ entry_mail_alert_email }}</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"{{ entry_mail_alert_email }}\" id=\"input-alert-email\" class=\"form-control\">{{ config_mail_alert_email }}</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>{{ text_general }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_maintenance }}\">{{ entry_maintenance }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_maintenance %}
                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_maintenance %}
                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_seo_url }}\">{{ entry_seo_url }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_seo_url %}
                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_seo_url %}
                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"{{ help_robots }}\">{{ entry_robots }}</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"{{ entry_robots }}\" id=\"input-robots\" class=\"form-control\">{{ config_robots }}</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"{{ help_compression }}\">{{ entry_compression }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"{{ config_compression }}\" placeholder=\"{{ entry_compression }}\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_security }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_secure }}\">{{ entry_secure }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_secure %}
                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_secure %}
                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_password }}\">{{ entry_password }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_password %}
                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_password %}
                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_shared }}\">{{ entry_shared }}</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_shared %}
                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_shared %}
                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"{{ help_encryption }}\">{{ entry_encryption }}</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"{{ entry_encryption }}\" id=\"input-encryption\" class=\"form-control\">{{ config_encryption }}</textarea>
                    {% if error_encryption %}
                    <div class=\"text-danger\">{{ error_encryption }}</div>
                    {% endif %} </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_upload }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"{{ help_file_max_size }}\">{{ entry_file_max_size }}</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"{{ config_file_max_size }}\" placeholder=\"{{ entry_file_max_size }}\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"{{ help_file_ext_allowed }}\">{{ entry_file_ext_allowed }}</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"{{ entry_file_ext_allowed }}\" id=\"input-file-ext-allowed\" class=\"form-control\">{{ config_file_ext_allowed }}</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"{{ help_file_mime_allowed }}\">{{ entry_file_mime_allowed }}</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"{{ entry_file_mime_allowed }}\" id=\"input-file-mime-allowed\" class=\"form-control\">{{ config_file_mime_allowed }}</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_error }}</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">{{ entry_error_display }}</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_error_display %}
                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_error_display %}
                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      {{ text_no }}
                      {% endif %} </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">{{ entry_error_log }}</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> {% if config_error_log %}
                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      {{ text_yes }}
                      {% else %}
                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      {{ text_yes }}
                      {% endif %} </label>
                    <label class=\"radio-inline\"> {% if not config_error_log %}
                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      {{ text_no }}
                      {% else %}
                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      {{ text_no }}
                      {% endif %}</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">{{ entry_error_filename }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"{{ config_error_filename }}\" placeholder=\"{{ entry_error_filename }}\" id=\"input-error-filename\" class=\"form-control\" />
                    {% if error_log %}
                    <div class=\"text-danger\">{{ error_log }}</div>
                    {% endif %} </div>
                </div>
              </fieldset>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"tab-pane\" id=\"tab-seopro\">
\t\t\t<fieldset>
\t\t\t<legend>{{ text_general }}</legend>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_seo_pro }}\">{{ entry_seo_pro }}</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> {% if config_seo_pro %}
\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"1\" checked=\"checked\" />
\t\t\t\t  {{ text_yes }}
\t\t\t\t  {% else %}
\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"1\" />
\t\t\t\t  {{ text_yes }}
\t\t\t\t  {% endif %} </label>
\t\t\t\t<label class=\"radio-inline\"> {% if not config_seo_pro %}
\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"0\" checked=\"checked\" />
\t\t\t\t  {{ text_no }}
\t\t\t\t  {% else %}
\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"0\" />
\t\t\t\t  {{ text_no }}
\t\t\t\t  {% endif %} </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_config_seo_url_include_path }}\">{{ entry_config_seo_url_include_path }}</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> {% if config_seo_url_include_path %}
\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" checked=\"checked\" />
\t\t\t\t  {{ text_yes }}
\t\t\t\t  {% else %}
\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" />
\t\t\t\t  {{ text_yes }}
\t\t\t\t  {% endif %} </label>
\t\t\t\t<label class=\"radio-inline\"> {% if not config_seo_url_include_path %}
\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" checked=\"checked\" />
\t\t\t\t  {{ text_no }}
\t\t\t\t  {% else %}
\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" />
\t\t\t\t  {{ text_no }}
\t\t\t\t  {% endif %} </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">{{ entry_config_seo_url_cache }}</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> {% if config_seo_url_cache %}
\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t  {{ text_yes }}
\t\t\t\t  {% else %}
\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"1\" />
\t\t\t\t  {{ text_yes }}
\t\t\t\t  {% endif %} </label>
\t\t\t\t<label class=\"radio-inline\"> {% if not config_seo_url_cache %}
\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"0\" checked=\"checked\" />
\t\t\t\t  {{ text_no }}
\t\t\t\t  {% else %}
\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"0\" />
\t\t\t\t  {{ text_no }}
\t\t\t\t  {% endif %} </label>
\t\t\t  </div>
\t\t\t</div>\t\t
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">{{ entry_seopro_addslash }}</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> {% if config_seopro_addslash %}
\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"1\" checked=\"checked\" />
\t\t\t\t  {{ text_yes }}
\t\t\t\t  {% else %}
\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"1\" />
\t\t\t\t  {{ text_yes }}
\t\t\t\t  {% endif %} </label>
\t\t\t\t<label class=\"radio-inline\"> {% if not config_seopro_addslash %}
\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"0\" checked=\"checked\" />
\t\t\t\t  {{ text_no }}
\t\t\t\t  {% else %}
\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"0\" />
\t\t\t\t  {{ text_no }}
\t\t\t\t  {% endif %} </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">{{ entry_seopro_lowercase }}</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> {% if config_seopro_lowercase %}
\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"1\" checked=\"checked\" />
\t\t\t\t  {{ text_yes }}
\t\t\t\t  {% else %}
\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"1\" />
\t\t\t\t  {{ text_yes }}
\t\t\t\t  {% endif %} </label>
\t\t\t\t<label class=\"radio-inline\"> {% if not config_seopro_lowercase %}
\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"0\" checked=\"checked\" />
\t\t\t\t  {{ text_no }}
\t\t\t\t  {% else %}
\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"0\" />
\t\t\t\t  {{ text_no }}
\t\t\t\t  {% endif %} </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-page-postfix\">{{ entry_page_postfix }}</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"config_page_postfix\" value=\"{{ config_page_postfix }}\" placeholder=\"{{ entry_page_postfix }}\" id=\"input-page-postfix\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ help_config_valide_param_flag }}\">{{ entry_config_valide_param_flag }}</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> {% if config_valide_param_flag %}
\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"1\" checked=\"checked\" />
\t\t\t\t  {{ text_yes }}
\t\t\t\t  {% else %}
\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"1\" />
\t\t\t\t  {{ text_yes }}
\t\t\t\t  {% endif %} </label>
\t\t\t\t<label class=\"radio-inline\"> {% if not config_valide_param_flag %}
\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"0\" checked=\"checked\" />
\t\t\t\t  {{ text_no }}
\t\t\t\t  {% else %}
\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"0\" />
\t\t\t\t  {{ text_no }}
\t\t\t\t  {% endif %} </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-valide-params\"><span data-toggle=\"tooltip\" title=\"{{ help_valide_params }}\">{{ entry_valide_params }}</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<textarea name=\"config_valide_params\" rows=10\" placeholder=\"{{ entry_valide_params }}\" id=\"input-valide-params\" class=\"form-control\">{{ config_valide_params }}</textarea>
\t\t\t  </div>
\t\t\t</div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ entry_canonical_method_help }}\">{{ entry_canonical_method }}</span></label>
              <div class=\"col-sm-10\">
                {% if config_canonical_method %}
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"1\" checked=\"checked\"/>
                  {{ text_canonical_ocstore }}
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"0\"/>
                  {{ text_canonical_opencart }}
                </label>
                {% else %}
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"1\"/>
                  {{ text_canonical_ocstore }}
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"0\" checked=\"checked\"/>
                  {{ text_canonical_opencart }}
                </label>
                {% endif %}
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ entry_canonical_self_help }}\">{{ entry_canonical_self }}</span></label>
              <div class=\"col-sm-10\">
                {% if config_canonical_self %}
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"1\" checked=\"checked\"/>
                  {{ text_yes }}
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"0\"/>
                  {{ text_no }}
                </label>
                {% else %}
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"1\"/>
                  {{ text_yes }}
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"0\" checked=\"checked\"/>
                  {{ text_no }}
                </label>
                {% endif %}
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"{{ entry_add_prevnext_help }}\">{{ entry_add_prevnext }}</span></label>
              <div class=\"col-sm-10\">
                {% if config_add_prevnext %}
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"1\" checked=\"checked\"/>
                  {{ text_yes }}
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"0\"/>
                  {{ text_no }}
                </label>
                {% else %}
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"1\"/>
                  {{ text_yes }}
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"0\" checked=\"checked\"/>
                  {{ text_no }}
                </label>
                {% endif %}
              </div>
            </div>
            <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">{{ entry_noindex_status }}</label>
            <div class=\"col-sm-10\">
              {% if config_noindex_status %}
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"1\" checked=\"checked\"/>
                {{ text_yes }}
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"0\"/>
                {{ text_no }}
              </label>
              {% else %}
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"1\"/>
                {{ text_yes }}
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"0\" checked=\"checked\"/>
                {{ text_no }}
              </label>
              {% endif %}
            </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-valide-params\"><span data-toggle=\"tooltip\" title=\"{{ help_valide_params }}\">{{ entry_noindex_disallow_params }}</span></label>
              <div class=\"col-sm-10\">
                <textarea name=\"config_noindex_disallow_params\" rows=10\" placeholder=\"{{ entry_noindex_disallow_params }}\" id=\"input-valide-params\" class=\"form-control\">{{ config_noindex_disallow_params }}</textarea>
              </div>
            </div>
\t\t  </fieldset>
\t\t</div>
\t\t\t
\t\t\t
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token={{ user_token }}&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">{{ text_select }}</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '{{ config_zone_id }}') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">{{ text_none }}</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script>
<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
    
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
</div>
{{ footer }} ", "setting/setting.twig", "");
    }
}
