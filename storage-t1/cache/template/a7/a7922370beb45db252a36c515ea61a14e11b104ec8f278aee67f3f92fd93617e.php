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

/* default/template/kbmp_marketplace/dashboard.twig */
class __TwigTemplate_f465050311274bbb5f9126ec1b4e19a57cd88c6480fe835e7436327eb7ec9fdf extends \Twig\Template
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
        echo " 
<style type=\"text/css\">
    .dashboard-info-box h4 {
        color: #fff !important;
    }
    h5.dash-count {
        color: #fff !important;
    }
</style>
<div id=\"content-wrapper\" class=\"col-lg-9\" style=\"border: 1px solid #eaeef8;padding: 0px;width: 80%;\">
    <header class=\"main-header\">
        <nav class=\"navbar navbar-static-top\">
            <div class=\"toggleMenu\">
                <i class=\"fa fa-bars\"></i>
            </div>
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 19
        echo ($context["account_link"] ?? null);
        echo "\">
                            <i class=\"fa fa-user\"></i> <span>";
        // line 20
        echo ($context["text_my_account"] ?? null);
        echo "</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 24
        echo ($context["logout_link"] ?? null);
        echo "\">
                            <span>";
        // line 25
        echo ($context["text_logout"] ?? null);
        echo "</span> <i class=\"fa fa-sign-out\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    ";
        // line 32
        if (((isset($context["request_approval_deny"]) || array_key_exists("request_approval_deny", $context)) && (($context["request_approval_deny"] ?? null) != ""))) {
            echo " 
        <div class=\"alert alert-danger\">
            <h4><i class=\"fa fa-warning\"></i> ";
            // line 34
            echo ($context["request_approval_deny"] ?? null);
            echo "</h4>
        </div>
    ";
        } else {
            // line 36
            echo " 
        ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, ($context["seller_details"] ?? null), "approved", [], "array", true, true, false, 37) && ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["seller_details"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["approved"] ?? null) : null) == "2"))) {
                echo " 
            <div class=\"alert alert-warning\">
                <h4><i class=\"fa fa-warning\"></i> ";
                // line 39
                echo ($context["text_account_warning"] ?? null);
                echo "</h4> ";
                echo ($context["error_account_request_again"] ?? null);
                echo " 
                ";
                // line 40
                echo ($context["text_click"] ?? null);
                echo "<a href=\"";
                echo ($context["request_link"] ?? null);
                echo "\">";
                echo ($context["text_here"] ?? null);
                echo "</a>";
                echo ($context["text_request_again"] ?? null);
                echo "
            </div>
        ";
            }
            // line 42
            echo "             
    ";
        }
        // line 44
        echo "

    ";
        // line 46
        if (((isset($context["request_approval"]) || array_key_exists("request_approval", $context)) && (($context["request_approval"] ?? null) != ""))) {
            echo " 
        <div class=\"alert alert-success\">
            <h4><i class=\"fa fa-success\"></i> ";
            // line 48
            echo ($context["request_approval"] ?? null);
            echo "</h4>
        </div>
    ";
        }
        // line 50
        echo " 
    ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, ($context["seller_details"] ?? null), "approved", [], "array", true, true, false, 51) && ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["seller_details"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["approved"] ?? null) : null) == "0"))) {
            echo " 
        <div class=\"alert alert-warning\">
            <h4><i class=\"fa fa-warning\"></i> ";
            // line 53
            echo ($context["text_account_warning"] ?? null);
            echo "</h4> ";
            echo ($context["error_account_warning"] ?? null);
            echo " 
        </div>
    ";
        }
        // line 55
        echo " 
    <div id=\"content\" class=\"\" style=\"background-color: #ecf0f5;padding: 10px\">
        <h2 class=\"marketplaceHeading\">
            ";
        // line 58
        echo ($context["heading_title"] ?? null);
        echo " 
        </h2>
        <ul class=\"dashboard-listGroup\">
            <li>
                <div class=\"dashboard-info-box\">
                    <h4>";
        // line 63
        echo ($context["text_total_order"] ?? null);
        echo "</h4>
                    <div class=\"dashboard-info-content\">
                        <i class=\"fa fa-shopping-cart\"></i>
                        <h5 class=\"dash-count\">";
        // line 66
        echo ($context["total_orders_stat"] ?? null);
        echo "</h5>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"dashboard-info-box orange\">
                    <h4>";
        // line 72
        echo ($context["text_total_products_sold"] ?? null);
        echo "</h4>
                    <div class=\"dashboard-info-content\">
                        <i class=\"fa fa-truck\"></i>
                        <h5 class=\"dash-count\">";
        // line 75
        echo ($context["total_products_sold_stat"] ?? null);
        echo "</h5>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"dashboard-info-box pink\">
                    <h4>";
        // line 81
        echo ($context["text_total_sale"] ?? null);
        echo "</h4>
                    <div class=\"dashboard-info-content\">
                        <i class=\"fa fa-credit-card\"></i>
                        <h5 class=\"dash-count\">";
        // line 84
        echo ($context["total_sale_stat"] ?? null);
        echo "</h5>
                    </div>
                </div>
            </li>
            
            
            <li style=\"margin-top: 20px\">
                <div class=\"dashboard-info-box orange\">
                    <h4>";
        // line 92
        echo ($context["text_total_earning"] ?? null);
        echo "</h4>
                    <div class=\"dashboard-info-content\">
                        <i class=\"fa fa-usd\"></i>
                        <h5 class=\"dash-count\">";
        // line 95
        echo ($context["total_earning_stat"] ?? null);
        echo "</h5>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"dashboard-info-box green\">
                    <h4>";
        // line 101
        echo ($context["text_total_eligible_earning"] ?? null);
        echo "</h4>
                    <div class=\"dashboard-info-content\">
                        <i class=\"fa fa-credit-card\"></i>
                        <h5 class=\"dash-count\">";
        // line 104
        echo ($context["total_eligible_earning_stat"] ?? null);
        echo "</h5>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"dashboard-info-box pink\">
                    <h4>";
        // line 110
        echo ($context["text_total_payout"] ?? null);
        echo "</h4>
                    <div class=\"dashboard-info-content\">
                        <i class=\"fa fa-usd\"></i>
                        <h5 class=\"dash-count\">";
        // line 113
        echo ($context["total_payout_stat"] ?? null);
        echo "/";
        echo ($context["total_balance_stat"] ?? null);
        echo "</h5>
                    </div>
                </div>
            </li>
        </ul>
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart-o\"></i> ";
        // line 120
        echo ($context["text_sales_analytics"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <div id=\"placeholder\" style=\"width: 100%; height: 260px;\"></div>
            </div>
        </div>
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart-o\"></i> ";
        // line 128
        echo ($context["text_sales_comparison"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\" id=\"comaprison-panel-body\">
                <ul class=\"tbl-list-group\">
                    <div class=\"row\">
                        <li class=\"tbl-list col-lg-6 col-md-6 col-sm-12 colxs-12\">
                            <table class=\"dh-tbl-smmry\">
                                <thead>
                                    <tr>
                                        <th colspan=\"3\">";
        // line 137
        echo ($context["text_today"] ?? null);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>";
        // line 142
        echo ($context["text_orders"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">";
        // line 143
        echo ($context["today_orders"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                ";
        // line 146
        if (((isset($context["today_orders_improvements"]) || array_key_exists("today_orders_improvements", $context)) && (($context["today_orders_improvements"] ?? null) > 0))) {
            // line 147
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&uarr; " . ($context["today_orders_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } elseif ((        // line 148
(isset($context["today_orders_improvements"]) || array_key_exists("today_orders_improvements", $context)) && (($context["today_orders_improvements"] ?? null) < 0))) {
            // line 149
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&darr; " . ($context["today_orders_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } else {
            // line 150
            echo " 
                                                    ";
            // line 151
            echo "<span class=\"kb-negative-sign\">0%</span>";
            echo "
                                                ";
        }
        // line 153
        echo "
                                                <div class=\"kb-popper-info\">
                                                    <b>";
        // line 155
        echo ($context["text_today"] ?? null);
        echo ": </b>";
        echo ($context["today_orders"] ?? null);
        echo "<br>
                                                    <b>";
        // line 156
        echo ($context["text_yesterday"] ?? null);
        echo ": </b>";
        echo ($context["last_day_orders"] ?? null);
        echo " 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>";
        // line 162
        echo ($context["text_earning"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">";
        // line 163
        echo ($context["today_earning"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                ";
        // line 166
        if (((isset($context["today_earning_improvements"]) || array_key_exists("today_earning_improvements", $context)) && (($context["today_earning_improvements"] ?? null) > 0))) {
            // line 167
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&uarr; " . ($context["today_earning_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } elseif ((        // line 168
(isset($context["today_earning_improvements"]) || array_key_exists("today_earning_improvements", $context)) && (($context["today_earning_improvements"] ?? null) < 0))) {
            // line 169
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&darr; " . ($context["today_earning_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } else {
            // line 170
            echo " 
                                                    ";
            // line 171
            echo "<span class=\"kb-negative-sign\">0%</span>";
            echo "
                                                ";
        }
        // line 173
        echo "
                                                <div class=\"kb-popper-info\">
                                                    <b>";
        // line 175
        echo ($context["text_today"] ?? null);
        echo ": </b>";
        echo ($context["today_earning"] ?? null);
        echo "<br>
                                                    <b>";
        // line 176
        echo ($context["text_yesterday"] ?? null);
        echo ": </b>";
        echo ($context["last_day_earning"] ?? null);
        echo " 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>";
        // line 182
        echo ($context["text_product_sold"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">";
        // line 183
        echo ($context["today_ordered_products"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                ";
        // line 186
        if (((isset($context["today_ordered_products_improvements"]) || array_key_exists("today_ordered_products_improvements", $context)) && (($context["today_ordered_products_improvements"] ?? null) > 0))) {
            // line 187
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&uarr; " . ($context["today_ordered_products_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } elseif ((        // line 188
(isset($context["today_ordered_products_improvements"]) || array_key_exists("today_ordered_products_improvements", $context)) && (($context["today_ordered_products_improvements"] ?? null) < 0))) {
            // line 189
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&darr; " . ($context["today_ordered_products_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } else {
            // line 190
            echo " 
                                                    ";
            // line 191
            echo "<span class=\"kb-negative-sign\">0%</span>";
            echo "
                                                ";
        }
        // line 193
        echo "
                                                <div class=\"kb-popper-info\">
                                                    <b>";
        // line 195
        echo ($context["text_today"] ?? null);
        echo ": </b>";
        echo ($context["today_ordered_products"] ?? null);
        echo "<br>
                                                    <b>";
        // line 196
        echo ($context["text_yesterday"] ?? null);
        echo ": </b>";
        echo ($context["last_day_ordered_products"] ?? null);
        echo " 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li class=\"tbl-list col-lg-6 col-md-6 col-sm-12 colxs-12\">
                            <table class=\"dh-tbl-smmry\">
                                <thead>
                                    <tr>
                                        <th colspan=\"3\">";
        // line 208
        echo ($context["text_this_week"] ?? null);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>";
        // line 213
        echo ($context["text_orders"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">";
        // line 214
        echo ($context["week_orders"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                ";
        // line 217
        if (((isset($context["week_orders_improvements"]) || array_key_exists("week_orders_improvements", $context)) && (($context["week_orders_improvements"] ?? null) > 0))) {
            // line 218
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&uarr; " . ($context["week_orders_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } elseif ((        // line 219
(isset($context["week_orders_improvements"]) || array_key_exists("week_orders_improvements", $context)) && (($context["week_orders_improvements"] ?? null) < 0))) {
            // line 220
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&darr; " . ($context["week_orders_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } else {
            // line 221
            echo " 
                                                    ";
            // line 222
            echo "<span class=\"kb-negative-sign\">0%</span>";
            echo "
                                                ";
        }
        // line 224
        echo "
                                                <div class=\"kb-popper-info\">
                                                    <b>";
        // line 226
        echo ($context["text_this_week"] ?? null);
        echo ": </b>";
        echo ($context["week_orders"] ?? null);
        echo "<br>
                                                    <b>";
        // line 227
        echo ($context["text_last_week"] ?? null);
        echo ": </b>";
        echo ($context["last_week_orders"] ?? null);
        echo " 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>";
        // line 233
        echo ($context["text_earning"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">";
        // line 234
        echo ($context["week_earning"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                ";
        // line 237
        if (((isset($context["week_earning_improvements"]) || array_key_exists("week_earning_improvements", $context)) && (($context["week_earning_improvements"] ?? null) > 0))) {
            // line 238
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&uarr; " . ($context["week_earning_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } elseif ((        // line 239
(isset($context["week_earning_improvements"]) || array_key_exists("week_earning_improvements", $context)) && (($context["week_earning_improvements"] ?? null) < 0))) {
            // line 240
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&darr; " . ($context["week_earning_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } else {
            // line 241
            echo " 
                                                    ";
            // line 242
            echo "<span class=\"kb-negative-sign\">0%</span>";
            echo "
                                                ";
        }
        // line 244
        echo "
                                                <div class=\"kb-popper-info\">
                                                    <b>";
        // line 246
        echo ($context["text_this_week"] ?? null);
        echo ": </b>";
        echo ($context["week_earning"] ?? null);
        echo "<br>
                                                    <b>";
        // line 247
        echo ($context["text_last_week"] ?? null);
        echo ": </b>";
        echo ($context["last_week_earning"] ?? null);
        echo " 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>";
        // line 253
        echo ($context["text_product_sold"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">";
        // line 254
        echo ($context["week_ordered_products"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                ";
        // line 257
        if (((isset($context["week_ordered_products_improvements"]) || array_key_exists("week_ordered_products_improvements", $context)) && (($context["week_ordered_products_improvements"] ?? null) > 0))) {
            // line 258
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&uarr; " . ($context["week_ordered_products_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } elseif ((        // line 259
(isset($context["week_ordered_products_improvements"]) || array_key_exists("week_ordered_products_improvements", $context)) && (($context["week_ordered_products_improvements"] ?? null) < 0))) {
            // line 260
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&darr; " . ($context["week_ordered_products_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } else {
            // line 261
            echo " 
                                                    ";
            // line 262
            echo "<span class=\"kb-negative-sign\">0%</span>";
            echo "
                                                ";
        }
        // line 264
        echo "
                                                <div class=\"kb-popper-info\">
                                                    <b>";
        // line 266
        echo ($context["text_this_week"] ?? null);
        echo ": </b>";
        echo ($context["week_ordered_products"] ?? null);
        echo "<br>
                                                    <b>";
        // line 267
        echo ($context["text_last_week"] ?? null);
        echo ": </b>";
        echo ($context["last_week_ordered_products"] ?? null);
        echo " 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li class=\"tbl-list col-lg-6 col-md-6 col-sm-12 colxs-12\">
                            <table class=\"dh-tbl-smmry\">
                                <thead>
                                    <tr>
                                        <th colspan=\"3\">";
        // line 279
        echo ($context["text_this_month"] ?? null);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>";
        // line 284
        echo ($context["text_orders"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">";
        // line 285
        echo ($context["month_orders"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                ";
        // line 288
        if (((isset($context["month_orders_improvements"]) || array_key_exists("month_orders_improvements", $context)) && (($context["month_orders_improvements"] ?? null) > 0))) {
            // line 289
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&uarr; " . ($context["month_orders_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } elseif ((        // line 290
(isset($context["month_orders_improvements"]) || array_key_exists("month_orders_improvements", $context)) && (($context["month_orders_improvements"] ?? null) < 0))) {
            // line 291
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&darr; " . ($context["month_orders_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } else {
            // line 292
            echo " 
                                                    ";
            // line 293
            echo "<span class=\"kb-negative-sign\">0%</span>";
            echo "
                                                ";
        }
        // line 295
        echo "
                                                <div class=\"kb-popper-info\">
                                                    <b>";
        // line 297
        echo ($context["text_this_month"] ?? null);
        echo ": </b>";
        echo ($context["month_orders"] ?? null);
        echo "<br>
                                                    <b>";
        // line 298
        echo ($context["text_last_month"] ?? null);
        echo ": </b>";
        echo ($context["last_month_orders"] ?? null);
        echo " 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>";
        // line 304
        echo ($context["text_earning"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">";
        // line 305
        echo ($context["month_earning"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                ";
        // line 308
        if (((isset($context["month_earning_improvements"]) || array_key_exists("month_earning_improvements", $context)) && (($context["month_earning_improvements"] ?? null) > 0))) {
            // line 309
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&uarr; " . ($context["month_earning_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } elseif ((        // line 310
(isset($context["month_earning_improvements"]) || array_key_exists("month_earning_improvements", $context)) && (($context["month_earning_improvements"] ?? null) < 0))) {
            // line 311
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&darr; " . ($context["month_earning_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } else {
            // line 312
            echo " 
                                                    ";
            // line 313
            echo "<span class=\"kb-negative-sign\">0%</span>";
            echo "
                                                ";
        }
        // line 315
        echo "
                                                <div class=\"kb-popper-info\">
                                                    <b>";
        // line 317
        echo ($context["text_this_month"] ?? null);
        echo ": </b>";
        echo ($context["month_earning"] ?? null);
        echo "<br>
                                                    <b>";
        // line 318
        echo ($context["text_last_month"] ?? null);
        echo ": </b>";
        echo ($context["last_month_earning"] ?? null);
        echo " 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>";
        // line 324
        echo ($context["text_product_sold"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">";
        // line 325
        echo ($context["month_ordered_products"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                ";
        // line 328
        if (((isset($context["month_ordered_products_improvements"]) || array_key_exists("month_ordered_products_improvements", $context)) && (($context["month_ordered_products_improvements"] ?? null) > 0))) {
            // line 329
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&uarr; " . ($context["month_ordered_products_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } elseif ((        // line 330
(isset($context["month_ordered_products_improvements"]) || array_key_exists("month_ordered_products_improvements", $context)) && (($context["month_ordered_products_improvements"] ?? null) < 0))) {
            // line 331
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&darr; " . ($context["month_ordered_products_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } else {
            // line 332
            echo " 
                                                    ";
            // line 333
            echo "<span class=\"kb-negative-sign\">0%</span>";
            echo "
                                                ";
        }
        // line 335
        echo "
                                                <div class=\"kb-popper-info\">
                                                    <b>";
        // line 337
        echo ($context["text_this_month"] ?? null);
        echo ": </b>";
        echo ($context["month_ordered_products"] ?? null);
        echo "<br>
                                                    <b>";
        // line 338
        echo ($context["text_last_month"] ?? null);
        echo ": </b>";
        echo ($context["last_month_ordered_products"] ?? null);
        echo " 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li class=\"tbl-list col-lg-6 col-md-6 col-sm-12 colxs-12\">
                            <table class=\"dh-tbl-smmry\">
                                <thead>
                                    <tr>
                                        <th colspan=\"3\">";
        // line 350
        echo ($context["text_this_year"] ?? null);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>";
        // line 355
        echo ($context["text_orders"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">";
        // line 356
        echo ($context["year_orders"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                ";
        // line 359
        if (((isset($context["year_orders_improvements"]) || array_key_exists("year_orders_improvements", $context)) && (($context["year_orders_improvements"] ?? null) > 0))) {
            // line 360
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&uarr; " . ($context["year_orders_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } elseif ((        // line 361
(isset($context["year_orders_improvements"]) || array_key_exists("year_orders_improvements", $context)) && (($context["year_orders_improvements"] ?? null) < 0))) {
            // line 362
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&darr; " . ($context["year_orders_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } else {
            // line 363
            echo " 
                                                    ";
            // line 364
            echo "<span class=\"kb-negative-sign\">0%</span>";
            echo "
                                                ";
        }
        // line 366
        echo "
                                                <div class=\"kb-popper-info\">
                                                    <b>";
        // line 368
        echo ($context["text_this_year"] ?? null);
        echo ": </b>";
        echo ($context["year_orders"] ?? null);
        echo "<br>
                                                    <b>";
        // line 369
        echo ($context["text_last_year"] ?? null);
        echo ": </b>";
        echo ($context["last_year_orders"] ?? null);
        echo " 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>";
        // line 375
        echo ($context["text_earning"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">";
        // line 376
        echo ($context["year_earning"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                ";
        // line 379
        if (((isset($context["year_earning_improvements"]) || array_key_exists("year_earning_improvements", $context)) && (($context["year_earning_improvements"] ?? null) > 0))) {
            // line 380
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&uarr; " . ($context["year_earning_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } elseif ((        // line 381
(isset($context["year_earning_improvements"]) || array_key_exists("year_earning_improvements", $context)) && (($context["year_earning_improvements"] ?? null) < 0))) {
            // line 382
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&darr; " . ($context["year_earning_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } else {
            // line 383
            echo " 
                                                    ";
            // line 384
            echo "<span class=\"kb-negative-sign\">0%</span>";
            echo "
                                                ";
        }
        // line 386
        echo "
                                                <div class=\"kb-popper-info\">
                                                    <b>";
        // line 388
        echo ($context["text_this_year"] ?? null);
        echo ": </b>";
        echo ($context["year_earning"] ?? null);
        echo "<br>
                                                    <b>";
        // line 389
        echo ($context["text_last_year"] ?? null);
        echo ": </b>";
        echo ($context["last_year_earning"] ?? null);
        echo " 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>";
        // line 395
        echo ($context["text_product_sold"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">";
        // line 396
        echo ($context["year_ordered_products"] ?? null);
        echo "</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                ";
        // line 399
        if (((isset($context["year_ordered_products_improvements"]) || array_key_exists("year_ordered_products_improvements", $context)) && (($context["year_ordered_products_improvements"] ?? null) > 0))) {
            // line 400
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&uarr; " . ($context["year_ordered_products_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } elseif ((        // line 401
(isset($context["year_ordered_products_improvements"]) || array_key_exists("year_ordered_products_improvements", $context)) && (($context["year_ordered_products_improvements"] ?? null) < 0))) {
            // line 402
            echo "                                                    ";
            echo (("<span class=\"kb-negative-sign\">&darr; " . ($context["year_ordered_products_improvements"] ?? null)) . "%</span>");
            echo "
                                                ";
        } else {
            // line 403
            echo " 
                                                    ";
            // line 404
            echo "<span class=\"kb-negative-sign\">0%</span>";
            echo "
                                                ";
        }
        // line 406
        echo "
                                                <div class=\"kb-popper-info\">
                                                    <b>";
        // line 408
        echo ($context["text_this_year"] ?? null);
        echo ": </b>";
        echo ($context["year_ordered_products"] ?? null);
        echo "<br>
                                                    <b>";
        // line 409
        echo ($context["text_last_year"] ?? null);
        echo ": </b>";
        echo ($context["last_year_ordered_products"] ?? null);
        echo " 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    </div>
                </ul>
            </div>
        </div>

        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"> ";
        // line 424
        echo ($context["text_last_10_orders"] ?? null);
        echo " <span class=\"pull-right viewAllOrders\"><a href=\"";
        echo ($context["view_all_order"] ?? null);
        echo "\">";
        echo ($context["text_view_all"] ?? null);
        echo "</a></span></h3>
            </div>
            <div class=\"panel-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-kbmpCustom\">
                        <thead>
                            <tr>
                                <td class=\"text-left\">";
        // line 431
        echo ($context["text_order_id"] ?? null);
        echo "</td>
                                <td class=\"text-left\">";
        // line 432
        echo ($context["text_order_date"] ?? null);
        echo "</td>
                                <td class=\"text-left\">";
        // line 433
        echo ($context["text_customer_name"] ?? null);
        echo "</td>
                                <td class=\"text-left\">";
        // line 434
        echo ($context["text_customer_email"] ?? null);
        echo "</td>
                                <td class=\"text-left\">";
        // line 435
        echo ($context["text_qty"] ?? null);
        echo "</td>
                                <td class=\"text-left\">";
        // line 436
        echo ($context["text_status"] ?? null);
        echo "</td>
                                <td class=\"text-right\">";
        // line 437
        echo ($context["text_order_total"] ?? null);
        echo "</td>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 441
        if (((isset($context["seller_orders"]) || array_key_exists("seller_orders", $context)) &&  !twig_test_empty(($context["seller_orders"] ?? null)))) {
            // line 442
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["seller_orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["seller_order"]) {
                echo " 

                                    <tr>
                                        <td class=\"text-left\">
                                            <a href=\"";
                // line 446
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["seller_order"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["view"] ?? null) : null);
                echo "\" title=\"";
                echo ($context["text_click_to_view"] ?? null);
                echo "\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["seller_order"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["order_id"] ?? null) : null);
                echo "</a>
                                        </td>
                                        <td class=\"text-left\">";
                // line 448
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["seller_order"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["order_date"] ?? null) : null);
                echo "</td>
                                        <td class=\"text-left\">";
                // line 449
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["seller_order"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["customer_name"] ?? null) : null);
                echo "</td>
                                        <td class=\"text-left\">";
                // line 450
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["seller_order"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["customer_email"] ?? null) : null);
                echo "</td>
                                        <td class=\"text-left\">";
                // line 451
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["seller_order"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["qty"] ?? null) : null);
                echo "</td>
                                        <td class=\"text-left\">";
                // line 452
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["seller_order"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["status"] ?? null) : null);
                echo "</td>
                                        <td class=\"text-right\">
                                            <span class=\"text-success\">";
                // line 454
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["seller_order"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["total"] ?? null) : null);
                echo "</span>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 458
            echo "                            ";
        } else {
            echo " 

                                <tr>
                                    <td colspan=\"7\">
                                        ";
            // line 462
            echo ($context["text_empty"] ?? null);
            echo " 
                                    </td>
                                </tr>
                            ";
        }
        // line 466
        echo "

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<script type=\"text/javascript\">
    \$(function () {

        var d1 = [";
        // line 480
        echo ($context["last_week_earning_list"] ?? null);
        echo "];
        var d2 = [";
        // line 481
        echo ($context["last_week_orders_list"] ?? null);
        echo "];
        var d3 = [";
        // line 482
        echo ($context["last_week_ordered_products_list"] ?? null);
        echo "];
        // first correct the timestamps - they are recorded as the daily
        // midnights in UTC+0100, but Flot always displays dates in UTC
        // so we have to add one hour to hit the midnights in the plot

        for (var i = 0; i < d1.length; ++i) {
            d1[i][0] += 60 * 60 * 1000;
        }
        for (var i = 0; i < d2.length; ++i) {
            d2[i][0] += 60 * 60 * 1000;
        }
        for (var i = 0; i < d3.length; ++i) {
            d3[i][0] += 60 * 60 * 1000;
        }

        var options = {
            series: {
                lines: {show: true},
                points: {show: true}
            },
            xaxis: {
                mode: \"time\",
                timeformat: \"%m/%d/%Y\",
            },
            selection: {
                mode: \"x\"
            },
            grid: {
                hoverable: true
            },
        };

        var plot = \$.plot(\"#placeholder\", [
            {label: \"";
        // line 515
        echo ($context["text_your_revenue"] ?? null);
        echo "\", data: d1},
            {label: \"";
        // line 516
        echo ($context["text_total_order"] ?? null);
        echo "\", data: d2},
            {label: \"";
        // line 517
        echo ($context["text_total_products_sold"] ?? null);
        echo "\", data: d3}], options);

        //Start Changes to display Tooltip on the Graph points 24-Dec-2018 - Harsh Agarwal
        \$(\"<div id='tooltip'></div>\").css({
            position: \"absolute\",
            display: \"none\",
            border: \"1px solid #fdd\",
            padding: \"2px\",
            \"background-color\": \"#fee\",
            opacity: 0.80
        }).appendTo(\"body\");

        \$(\"#placeholder\").bind(\"plothover\", function (event, pos, item) {

            if (item) {
                var x = item.datapoint[0],
                        y = item.datapoint[1];

                \$(\"#tooltip\").html(item.series.label + \" = \" + y)
                        .css({top: item.pageY + 5, left: item.pageX + 5})
                        .fadeIn(200);
            } else {
                \$(\"#tooltip\").hide();
            }
        });
        //Ends

        // now connect the two
        \$(\"#placeholder\").bind(\"plotselected\", function (event, ranges) {
            plot = \$.plot(\"#placeholder\", [
                {label: \"";
        // line 547
        echo ($context["text_your_revenue"] ?? null);
        echo "\", data: d1},
                {label: \"";
        // line 548
        echo ($context["text_total_order"] ?? null);
        echo "\", data: d2},
                {label: \"";
        // line 549
        echo ($context["text_total_products_sold"] ?? null);
        echo "\", data: d3}], \$.extend(true, {}, options, {
                xaxis: {
                    min: ranges.xaxis.from,
                    max: ranges.xaxis.to
                }
            }));
        });

        // Add the Flot version string to the footer
        \$(\"#footer\").prepend(\"Flot \" + \$.plot.version + \" &ndash; \");
    });

</script>
";
        // line 562
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/kbmp_marketplace/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1230 => 562,  1214 => 549,  1210 => 548,  1206 => 547,  1173 => 517,  1169 => 516,  1165 => 515,  1129 => 482,  1125 => 481,  1121 => 480,  1105 => 466,  1098 => 462,  1090 => 458,  1080 => 454,  1075 => 452,  1071 => 451,  1067 => 450,  1063 => 449,  1059 => 448,  1050 => 446,  1040 => 442,  1038 => 441,  1031 => 437,  1027 => 436,  1023 => 435,  1019 => 434,  1015 => 433,  1011 => 432,  1007 => 431,  993 => 424,  973 => 409,  967 => 408,  963 => 406,  958 => 404,  955 => 403,  949 => 402,  947 => 401,  942 => 400,  940 => 399,  934 => 396,  930 => 395,  919 => 389,  913 => 388,  909 => 386,  904 => 384,  901 => 383,  895 => 382,  893 => 381,  888 => 380,  886 => 379,  880 => 376,  876 => 375,  865 => 369,  859 => 368,  855 => 366,  850 => 364,  847 => 363,  841 => 362,  839 => 361,  834 => 360,  832 => 359,  826 => 356,  822 => 355,  814 => 350,  797 => 338,  791 => 337,  787 => 335,  782 => 333,  779 => 332,  773 => 331,  771 => 330,  766 => 329,  764 => 328,  758 => 325,  754 => 324,  743 => 318,  737 => 317,  733 => 315,  728 => 313,  725 => 312,  719 => 311,  717 => 310,  712 => 309,  710 => 308,  704 => 305,  700 => 304,  689 => 298,  683 => 297,  679 => 295,  674 => 293,  671 => 292,  665 => 291,  663 => 290,  658 => 289,  656 => 288,  650 => 285,  646 => 284,  638 => 279,  621 => 267,  615 => 266,  611 => 264,  606 => 262,  603 => 261,  597 => 260,  595 => 259,  590 => 258,  588 => 257,  582 => 254,  578 => 253,  567 => 247,  561 => 246,  557 => 244,  552 => 242,  549 => 241,  543 => 240,  541 => 239,  536 => 238,  534 => 237,  528 => 234,  524 => 233,  513 => 227,  507 => 226,  503 => 224,  498 => 222,  495 => 221,  489 => 220,  487 => 219,  482 => 218,  480 => 217,  474 => 214,  470 => 213,  462 => 208,  445 => 196,  439 => 195,  435 => 193,  430 => 191,  427 => 190,  421 => 189,  419 => 188,  414 => 187,  412 => 186,  406 => 183,  402 => 182,  391 => 176,  385 => 175,  381 => 173,  376 => 171,  373 => 170,  367 => 169,  365 => 168,  360 => 167,  358 => 166,  352 => 163,  348 => 162,  337 => 156,  331 => 155,  327 => 153,  322 => 151,  319 => 150,  313 => 149,  311 => 148,  306 => 147,  304 => 146,  298 => 143,  294 => 142,  286 => 137,  274 => 128,  263 => 120,  251 => 113,  245 => 110,  236 => 104,  230 => 101,  221 => 95,  215 => 92,  204 => 84,  198 => 81,  189 => 75,  183 => 72,  174 => 66,  168 => 63,  160 => 58,  155 => 55,  147 => 53,  142 => 51,  139 => 50,  133 => 48,  128 => 46,  124 => 44,  120 => 42,  108 => 40,  102 => 39,  97 => 37,  94 => 36,  88 => 34,  83 => 32,  73 => 25,  69 => 24,  62 => 20,  58 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }} 
<style type=\"text/css\">
    .dashboard-info-box h4 {
        color: #fff !important;
    }
    h5.dash-count {
        color: #fff !important;
    }
</style>
<div id=\"content-wrapper\" class=\"col-lg-9\" style=\"border: 1px solid #eaeef8;padding: 0px;width: 80%;\">
    <header class=\"main-header\">
        <nav class=\"navbar navbar-static-top\">
            <div class=\"toggleMenu\">
                <i class=\"fa fa-bars\"></i>
            </div>
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"{{ account_link }}\">
                            <i class=\"fa fa-user\"></i> <span>{{ text_my_account }}</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ logout_link }}\">
                            <span>{{ text_logout }}</span> <i class=\"fa fa-sign-out\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    {% if (request_approval_deny is defined and request_approval_deny != '') %} 
        <div class=\"alert alert-danger\">
            <h4><i class=\"fa fa-warning\"></i> {{ request_approval_deny }}</h4>
        </div>
    {% else %} 
        {% if (seller_details['approved'] is defined and seller_details['approved'] == '2') %} 
            <div class=\"alert alert-warning\">
                <h4><i class=\"fa fa-warning\"></i> {{ text_account_warning }}</h4> {{ error_account_request_again }} 
                {{ text_click }}<a href=\"{{ request_link }}\">{{ text_here }}</a>{{ text_request_again }}
            </div>
        {% endif %}             
    {% endif %}


    {% if (request_approval is defined and request_approval != '') %} 
        <div class=\"alert alert-success\">
            <h4><i class=\"fa fa-success\"></i> {{ request_approval }}</h4>
        </div>
    {% endif %} 
    {% if (seller_details['approved'] is defined and seller_details['approved'] == '0') %} 
        <div class=\"alert alert-warning\">
            <h4><i class=\"fa fa-warning\"></i> {{ text_account_warning }}</h4> {{ error_account_warning }} 
        </div>
    {% endif %} 
    <div id=\"content\" class=\"\" style=\"background-color: #ecf0f5;padding: 10px\">
        <h2 class=\"marketplaceHeading\">
            {{ heading_title }} 
        </h2>
        <ul class=\"dashboard-listGroup\">
            <li>
                <div class=\"dashboard-info-box\">
                    <h4>{{ text_total_order }}</h4>
                    <div class=\"dashboard-info-content\">
                        <i class=\"fa fa-shopping-cart\"></i>
                        <h5 class=\"dash-count\">{{ total_orders_stat }}</h5>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"dashboard-info-box orange\">
                    <h4>{{ text_total_products_sold }}</h4>
                    <div class=\"dashboard-info-content\">
                        <i class=\"fa fa-truck\"></i>
                        <h5 class=\"dash-count\">{{ total_products_sold_stat }}</h5>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"dashboard-info-box pink\">
                    <h4>{{ text_total_sale }}</h4>
                    <div class=\"dashboard-info-content\">
                        <i class=\"fa fa-credit-card\"></i>
                        <h5 class=\"dash-count\">{{ total_sale_stat }}</h5>
                    </div>
                </div>
            </li>
            
            
            <li style=\"margin-top: 20px\">
                <div class=\"dashboard-info-box orange\">
                    <h4>{{ text_total_earning }}</h4>
                    <div class=\"dashboard-info-content\">
                        <i class=\"fa fa-usd\"></i>
                        <h5 class=\"dash-count\">{{ total_earning_stat }}</h5>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"dashboard-info-box green\">
                    <h4>{{ text_total_eligible_earning }}</h4>
                    <div class=\"dashboard-info-content\">
                        <i class=\"fa fa-credit-card\"></i>
                        <h5 class=\"dash-count\">{{ total_eligible_earning_stat }}</h5>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"dashboard-info-box pink\">
                    <h4>{{ text_total_payout }}</h4>
                    <div class=\"dashboard-info-content\">
                        <i class=\"fa fa-usd\"></i>
                        <h5 class=\"dash-count\">{{ total_payout_stat }}/{{ total_balance_stat }}</h5>
                    </div>
                </div>
            </li>
        </ul>
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart-o\"></i> {{ text_sales_analytics }}</h3>
            </div>
            <div class=\"panel-body\">
                <div id=\"placeholder\" style=\"width: 100%; height: 260px;\"></div>
            </div>
        </div>
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart-o\"></i> {{ text_sales_comparison }}</h3>
            </div>
            <div class=\"panel-body\" id=\"comaprison-panel-body\">
                <ul class=\"tbl-list-group\">
                    <div class=\"row\">
                        <li class=\"tbl-list col-lg-6 col-md-6 col-sm-12 colxs-12\">
                            <table class=\"dh-tbl-smmry\">
                                <thead>
                                    <tr>
                                        <th colspan=\"3\">{{ text_today }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ text_orders }}</td>
                                        <td class=\"kb-tright\">{{ today_orders }}</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                {% if (today_orders_improvements is defined and today_orders_improvements > 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&uarr; '~today_orders_improvements~'%</span>' }}
                                                {% elseif (today_orders_improvements is defined and today_orders_improvements < 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&darr; '~today_orders_improvements~'%</span>' }}
                                                {% else %} 
                                                    {{ '<span class=\"kb-negative-sign\">0%</span>' }}
                                                {% endif %}

                                                <div class=\"kb-popper-info\">
                                                    <b>{{ text_today }}: </b>{{ today_orders }}<br>
                                                    <b>{{ text_yesterday }}: </b>{{ last_day_orders }} 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ text_earning }}</td>
                                        <td class=\"kb-tright\">{{ today_earning }}</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                {% if (today_earning_improvements is defined and today_earning_improvements > 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&uarr; '~today_earning_improvements~'%</span>' }}
                                                {% elseif (today_earning_improvements is defined and today_earning_improvements < 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&darr; '~today_earning_improvements~'%</span>' }}
                                                {% else %} 
                                                    {{ '<span class=\"kb-negative-sign\">0%</span>' }}
                                                {% endif %}

                                                <div class=\"kb-popper-info\">
                                                    <b>{{ text_today }}: </b>{{ today_earning }}<br>
                                                    <b>{{ text_yesterday }}: </b>{{ last_day_earning }} 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ text_product_sold }}</td>
                                        <td class=\"kb-tright\">{{ today_ordered_products }}</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                {% if (today_ordered_products_improvements is defined and today_ordered_products_improvements > 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&uarr; '~today_ordered_products_improvements~'%</span>' }}
                                                {% elseif (today_ordered_products_improvements is defined and today_ordered_products_improvements < 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&darr; '~today_ordered_products_improvements~'%</span>' }}
                                                {% else %} 
                                                    {{ '<span class=\"kb-negative-sign\">0%</span>' }}
                                                {% endif %}

                                                <div class=\"kb-popper-info\">
                                                    <b>{{ text_today }}: </b>{{ today_ordered_products }}<br>
                                                    <b>{{ text_yesterday }}: </b>{{ last_day_ordered_products }} 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li class=\"tbl-list col-lg-6 col-md-6 col-sm-12 colxs-12\">
                            <table class=\"dh-tbl-smmry\">
                                <thead>
                                    <tr>
                                        <th colspan=\"3\">{{ text_this_week }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ text_orders }}</td>
                                        <td class=\"kb-tright\">{{ week_orders }}</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                {% if (week_orders_improvements is defined and week_orders_improvements > 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&uarr; '~week_orders_improvements~'%</span>' }}
                                                {% elseif (week_orders_improvements is defined and week_orders_improvements < 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&darr; '~week_orders_improvements~'%</span>' }}
                                                {% else %} 
                                                    {{ '<span class=\"kb-negative-sign\">0%</span>' }}
                                                {% endif %}

                                                <div class=\"kb-popper-info\">
                                                    <b>{{ text_this_week }}: </b>{{ week_orders }}<br>
                                                    <b>{{ text_last_week }}: </b>{{ last_week_orders }} 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ text_earning }}</td>
                                        <td class=\"kb-tright\">{{ week_earning }}</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                {% if (week_earning_improvements is defined and week_earning_improvements > 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&uarr; '~week_earning_improvements~'%</span>' }}
                                                {% elseif (week_earning_improvements is defined and week_earning_improvements < 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&darr; '~week_earning_improvements~'%</span>' }}
                                                {% else %} 
                                                    {{ '<span class=\"kb-negative-sign\">0%</span>' }}
                                                {% endif %}

                                                <div class=\"kb-popper-info\">
                                                    <b>{{ text_this_week }}: </b>{{ week_earning }}<br>
                                                    <b>{{ text_last_week }}: </b>{{ last_week_earning }} 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ text_product_sold }}</td>
                                        <td class=\"kb-tright\">{{ week_ordered_products }}</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                {% if (week_ordered_products_improvements is defined and week_ordered_products_improvements > 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&uarr; '~week_ordered_products_improvements~'%</span>' }}
                                                {% elseif (week_ordered_products_improvements is defined and week_ordered_products_improvements < 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&darr; '~week_ordered_products_improvements~'%</span>' }}
                                                {% else %} 
                                                    {{ '<span class=\"kb-negative-sign\">0%</span>' }}
                                                {% endif %}

                                                <div class=\"kb-popper-info\">
                                                    <b>{{ text_this_week }}: </b>{{ week_ordered_products }}<br>
                                                    <b>{{ text_last_week }}: </b>{{ last_week_ordered_products }} 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li class=\"tbl-list col-lg-6 col-md-6 col-sm-12 colxs-12\">
                            <table class=\"dh-tbl-smmry\">
                                <thead>
                                    <tr>
                                        <th colspan=\"3\">{{ text_this_month }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ text_orders }}</td>
                                        <td class=\"kb-tright\">{{ month_orders }}</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                {% if (month_orders_improvements is defined and month_orders_improvements > 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&uarr; '~month_orders_improvements~'%</span>' }}
                                                {% elseif (month_orders_improvements is defined and month_orders_improvements < 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&darr; '~month_orders_improvements~'%</span>' }}
                                                {% else %} 
                                                    {{ '<span class=\"kb-negative-sign\">0%</span>' }}
                                                {% endif %}

                                                <div class=\"kb-popper-info\">
                                                    <b>{{ text_this_month }}: </b>{{ month_orders }}<br>
                                                    <b>{{ text_last_month }}: </b>{{ last_month_orders }} 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ text_earning }}</td>
                                        <td class=\"kb-tright\">{{ month_earning }}</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                {% if (month_earning_improvements is defined and month_earning_improvements > 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&uarr; '~month_earning_improvements~'%</span>' }}
                                                {% elseif (month_earning_improvements is defined and month_earning_improvements < 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&darr; '~month_earning_improvements~'%</span>' }}
                                                {% else %} 
                                                    {{ '<span class=\"kb-negative-sign\">0%</span>' }}
                                                {% endif %}

                                                <div class=\"kb-popper-info\">
                                                    <b>{{ text_this_month }}: </b>{{ month_earning }}<br>
                                                    <b>{{ text_last_month }}: </b>{{ last_month_earning }} 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ text_product_sold }}</td>
                                        <td class=\"kb-tright\">{{ month_ordered_products }}</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                {% if (month_ordered_products_improvements is defined and month_ordered_products_improvements > 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&uarr; '~month_ordered_products_improvements~'%</span>' }}
                                                {% elseif (month_ordered_products_improvements is defined and month_ordered_products_improvements < 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&darr; '~month_ordered_products_improvements~'%</span>' }}
                                                {% else %} 
                                                    {{ '<span class=\"kb-negative-sign\">0%</span>' }}
                                                {% endif %}

                                                <div class=\"kb-popper-info\">
                                                    <b>{{ text_this_month }}: </b>{{ month_ordered_products }}<br>
                                                    <b>{{ text_last_month }}: </b>{{ last_month_ordered_products }} 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li class=\"tbl-list col-lg-6 col-md-6 col-sm-12 colxs-12\">
                            <table class=\"dh-tbl-smmry\">
                                <thead>
                                    <tr>
                                        <th colspan=\"3\">{{ text_this_year }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ text_orders }}</td>
                                        <td class=\"kb-tright\">{{ year_orders }}</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                {% if (year_orders_improvements is defined and year_orders_improvements > 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&uarr; '~year_orders_improvements~'%</span>' }}
                                                {% elseif (year_orders_improvements is defined and year_orders_improvements < 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&darr; '~year_orders_improvements~'%</span>' }}
                                                {% else %} 
                                                    {{ '<span class=\"kb-negative-sign\">0%</span>' }}
                                                {% endif %}

                                                <div class=\"kb-popper-info\">
                                                    <b>{{ text_this_year }}: </b>{{ year_orders }}<br>
                                                    <b>{{ text_last_year }}: </b>{{ last_year_orders }} 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ text_earning }}</td>
                                        <td class=\"kb-tright\">{{ year_earning }}</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                {% if (year_earning_improvements is defined and year_earning_improvements > 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&uarr; '~year_earning_improvements~'%</span>' }}
                                                {% elseif (year_earning_improvements is defined and year_earning_improvements < 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&darr; '~year_earning_improvements~'%</span>' }}
                                                {% else %} 
                                                    {{ '<span class=\"kb-negative-sign\">0%</span>' }}
                                                {% endif %}

                                                <div class=\"kb-popper-info\">
                                                    <b>{{ text_this_year }}: </b>{{ year_earning }}<br>
                                                    <b>{{ text_last_year }}: </b>{{ last_year_earning }} 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ text_product_sold }}</td>
                                        <td class=\"kb-tright\">{{ year_ordered_products }}</td>
                                        <td class=\"kb-tright\">
                                            <div class=\"kb-analysis-popper\">
                                                {% if (year_ordered_products_improvements is defined and year_ordered_products_improvements > 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&uarr; '~year_ordered_products_improvements~'%</span>' }}
                                                {% elseif (year_ordered_products_improvements is defined and year_ordered_products_improvements < 0) %}
                                                    {{ '<span class=\"kb-negative-sign\">&darr; '~year_ordered_products_improvements~'%</span>' }}
                                                {% else %} 
                                                    {{ '<span class=\"kb-negative-sign\">0%</span>' }}
                                                {% endif %}

                                                <div class=\"kb-popper-info\">
                                                    <b>{{ text_this_year }}: </b>{{ year_ordered_products }}<br>
                                                    <b>{{ text_last_year }}: </b>{{ last_year_ordered_products }} 
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    </div>
                </ul>
            </div>
        </div>

        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"> {{ text_last_10_orders }} <span class=\"pull-right viewAllOrders\"><a href=\"{{ view_all_order }}\">{{ text_view_all }}</a></span></h3>
            </div>
            <div class=\"panel-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-kbmpCustom\">
                        <thead>
                            <tr>
                                <td class=\"text-left\">{{ text_order_id }}</td>
                                <td class=\"text-left\">{{ text_order_date }}</td>
                                <td class=\"text-left\">{{ text_customer_name }}</td>
                                <td class=\"text-left\">{{ text_customer_email }}</td>
                                <td class=\"text-left\">{{ text_qty }}</td>
                                <td class=\"text-left\">{{ text_status }}</td>
                                <td class=\"text-right\">{{ text_order_total }}</td>
                            </tr>
                        </thead>
                        <tbody>
                            {% if (seller_orders is defined and seller_orders is not empty) %}
                                {% for seller_order in seller_orders %} 

                                    <tr>
                                        <td class=\"text-left\">
                                            <a href=\"{{ seller_order['view'] }}\" title=\"{{ text_click_to_view }}\">{{ seller_order['order_id'] }}</a>
                                        </td>
                                        <td class=\"text-left\">{{ seller_order['order_date'] }}</td>
                                        <td class=\"text-left\">{{ seller_order['customer_name'] }}</td>
                                        <td class=\"text-left\">{{ seller_order['customer_email'] }}</td>
                                        <td class=\"text-left\">{{ seller_order['qty'] }}</td>
                                        <td class=\"text-left\">{{ seller_order['status'] }}</td>
                                        <td class=\"text-right\">
                                            <span class=\"text-success\">{{ seller_order['total'] }}</span>
                                        </td>
                                    </tr>
                                {% endfor %}
                            {% else %} 

                                <tr>
                                    <td colspan=\"7\">
                                        {{ text_empty }} 
                                    </td>
                                </tr>
                            {% endif %}


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<script type=\"text/javascript\">
    \$(function () {

        var d1 = [{{ last_week_earning_list }}];
        var d2 = [{{ last_week_orders_list }}];
        var d3 = [{{ last_week_ordered_products_list }}];
        // first correct the timestamps - they are recorded as the daily
        // midnights in UTC+0100, but Flot always displays dates in UTC
        // so we have to add one hour to hit the midnights in the plot

        for (var i = 0; i < d1.length; ++i) {
            d1[i][0] += 60 * 60 * 1000;
        }
        for (var i = 0; i < d2.length; ++i) {
            d2[i][0] += 60 * 60 * 1000;
        }
        for (var i = 0; i < d3.length; ++i) {
            d3[i][0] += 60 * 60 * 1000;
        }

        var options = {
            series: {
                lines: {show: true},
                points: {show: true}
            },
            xaxis: {
                mode: \"time\",
                timeformat: \"%m/%d/%Y\",
            },
            selection: {
                mode: \"x\"
            },
            grid: {
                hoverable: true
            },
        };

        var plot = \$.plot(\"#placeholder\", [
            {label: \"{{ text_your_revenue }}\", data: d1},
            {label: \"{{ text_total_order }}\", data: d2},
            {label: \"{{ text_total_products_sold }}\", data: d3}], options);

        //Start Changes to display Tooltip on the Graph points 24-Dec-2018 - Harsh Agarwal
        \$(\"<div id='tooltip'></div>\").css({
            position: \"absolute\",
            display: \"none\",
            border: \"1px solid #fdd\",
            padding: \"2px\",
            \"background-color\": \"#fee\",
            opacity: 0.80
        }).appendTo(\"body\");

        \$(\"#placeholder\").bind(\"plothover\", function (event, pos, item) {

            if (item) {
                var x = item.datapoint[0],
                        y = item.datapoint[1];

                \$(\"#tooltip\").html(item.series.label + \" = \" + y)
                        .css({top: item.pageY + 5, left: item.pageX + 5})
                        .fadeIn(200);
            } else {
                \$(\"#tooltip\").hide();
            }
        });
        //Ends

        // now connect the two
        \$(\"#placeholder\").bind(\"plotselected\", function (event, ranges) {
            plot = \$.plot(\"#placeholder\", [
                {label: \"{{ text_your_revenue }}\", data: d1},
                {label: \"{{ text_total_order }}\", data: d2},
                {label: \"{{ text_total_products_sold }}\", data: d3}], \$.extend(true, {}, options, {
                xaxis: {
                    min: ranges.xaxis.from,
                    max: ranges.xaxis.to
                }
            }));
        });

        // Add the Flot version string to the footer
        \$(\"#footer\").prepend(\"Flot \" + \$.plot.version + \" &ndash; \");
    });

</script>
{{footer}}", "default/template/kbmp_marketplace/dashboard.twig", "");
    }
}
