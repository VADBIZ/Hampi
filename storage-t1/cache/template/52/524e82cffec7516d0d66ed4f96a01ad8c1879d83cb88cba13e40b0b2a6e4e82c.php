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

/* default/template/account/registerSeller.twig */
class __TwigTemplate_ef86107ac74643a3a137f056ff1aaa7d55fe41f8e04ddef6cb7ad0ee603a76e5 extends \Twig\Template
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
        echo ($context["headerEmpty"] ?? null);
        echo "

<div class=\"registerSeller\">
\t<div class=\"registerSeller__bg\"></div>
\t<div class=\"container\">
\t\t<div class=\"registerSeller__top\">
\t\t\t<div class=\"registerSeller__logo\">\t
\t\t\t\t<svg width=\"167\" height=\"47\" viewBox=\"0 0 167 47\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M167 0H0V5.09167V37.9917V47H167V0Z\" fill=\"url(#pattern0)\"/>
\t\t\t\t<mask id=\"mask0_178_7285\" style=\"mask-type:alpha\" maskUnits=\"userSpaceOnUse\" x=\"0\" y=\"0\" width=\"167\" height=\"47\">
\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M167 0H0V5.09167V37.9917V47H167V0Z\" fill=\"url(#pattern1)\"/>
\t\t\t\t</mask>
\t\t\t\t<g mask=\"url(#mask0_178_7285)\">
\t\t\t\t<path d=\"M0 3.5H11L13 11L15 14.5L20.5 16L22.5 16.5H24H25.5L28 17L30 18L31.5 20L33 21L33.5 19.5L34 17.5L40.5 8.5L110.5 6.5L157.5 11H167.5L172 22.5V43.5L130.5 55H104.5L23.5 53.5L-7 44.5C-7.33333 39.8333 -8 30.3 -8 29.5C-8 28.7 -5 13.1667 -3.5 5.5L0 3.5Z\" fill=\"white\"/>
\t\t\t\t<path d=\"M14.5 1.5L20 16L26 16.5L28.5 17L31.5 19.5L33.5 20.5L37 14.5L50 9L170.5 11L181 -7L14.5 1.5Z\" fill=\"#FFC038\" stroke=\"black\"/>
\t\t\t\t</g>
\t\t\t\t<defs>
\t\t\t\t<pattern id=\"pattern0\" patternContentUnits=\"objectBoundingBox\" width=\"1\" height=\"1\">
\t\t\t\t<use xlink:href=\"#image0_178_7285\" transform=\"scale(0.00232558 0.00833333)\"/>
\t\t\t\t</pattern>
\t\t\t\t<pattern id=\"pattern1\" patternContentUnits=\"objectBoundingBox\" width=\"1\" height=\"1\">
\t\t\t\t<use xlink:href=\"#image0_178_7285\" transform=\"scale(0.00232558 0.00833333)\"/>
\t\t\t\t</pattern>
\t\t\t\t<image id=\"image0_178_7285\" width=\"430\" height=\"120\" xlink:href=\"data:image/png;base64,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\"/>
\t\t\t\t</defs>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<div class=\"registerSeller__already\">";
        // line 28
        echo ($context["text_account_already"] ?? null);
        echo "</div>
\t\t</div>
\t\t<div class=\"registerSeller__wrap\">
\t\t\t<div class=\"registerSeller__left\">
\t\t\t\t<h1 class=\"registerSeller__title\">Миссия Hampi—выступать гарантом в сделке между компаниями</h1>
\t\t\t\t";
        // line 33
        echo ($context["banner"] ?? null);
        echo "
\t\t\t</div>
\t\t\t<div class=\"registerSeller__right\">
\t\t\t\t<h3 class=\"registerSeller__subtitle\">";
        // line 36
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t\t\t  ";
        // line 37
        if (($context["error_warning"] ?? null)) {
            // line 38
            echo "\t\t\t\t  \t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t\t\t\t  ";
        }
        // line 40
        echo "\t\t\t\t<div class=\"registerSeller__form\">
\t\t\t\t\t<form action=\"";
        // line 41
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"text\" class=\"hidden\" name=\"seller\" value=\"1\">
\t\t\t\t\t\t<div class=\"registerSeller__steps\">
\t\t\t\t\t\t\t<div class=\"registerSeller__steps-item active\">
\t\t\t\t\t\t\t\t<h3 class=\"registerSeller__steps-title\">Контактное лицо</h3>
\t\t\t\t\t\t\t\t<div class=\"form-group required";
        // line 47
        if (($context["error_sellerfio"] ?? null)) {
            echo " has-error";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<label for=\"\" class=\"control-label\">";
        // line 48
        echo ($context["entry_sellerfio"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"sellerfio\" value=\"";
        // line 49
        echo ($context["sellerfio"] ?? null);
        echo "\" class=\"form-control loginbox__input\" />
\t\t\t\t\t\t\t\t\t";
        // line 50
        if (($context["error_sellerfio"] ?? null)) {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_sellerfio"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required";
        // line 54
        if (($context["error_email"] ?? null)) {
            echo " has-error";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<label for=\"\" class=\"control-label\">";
        // line 55
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 56
        echo ($context["email"] ?? null);
        echo "\" class=\"form-control maskEmail loginbox__input\" />
\t\t\t\t\t\t\t\t\t";
        // line 57
        if (($context["error_email"] ?? null)) {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required";
        // line 61
        if (($context["error_telephone"] ?? null)) {
            echo " has-error";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t<label for=\"input-telephone\" class=\"control-label\">";
        // line 62
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t  <input type=\"tel\" name=\"telephone\" value=\"";
        // line 63
        echo ($context["telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control mask loginbox__input\" />
\t\t\t\t\t\t\t\t\t  ";
        // line 64
        if (($context["error_telephone"] ?? null)) {
            // line 65
            echo "\t\t\t\t\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t  ";
        }
        // line 67
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"";
        // line 68
        echo ($context["confirm"] ?? null);
        echo "\" class=\"hidden\" />
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 69
        echo ($context["password"] ?? null);
        echo "\" class=\"hidden\" />
\t\t\t\t\t\t\t\t<div class=\"registerSeller__steps-buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"registerSeller__steps-button\" data-step=\"2\">Далее</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"registerSeller__steps-item\">
\t\t\t\t\t\t\t\t<h3 class=\"registerSeller__steps-title\">Данные компании</h3>
\t\t\t\t\t\t\t\t";
        // line 76
        echo ($context["sellerFields"] ?? null);
        echo "
\t\t\t\t\t\t\t\t";
        // line 77
        echo ($context["captcha"] ?? null);
        echo "
\t\t\t\t\t\t\t\t<div class=\"registerSeller__agree\">
\t\t\t\t\t\t\t\t\t";
        // line 79
        if (($context["text_agree"] ?? null)) {
            // line 80
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($context["agree"] ?? null)) {
                // line 81
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 85
            echo "\t\t\t\t\t\t\t\t\t\t ";
            echo ($context["text_agree"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"registerSeller__steps-buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"registerSeller__steps-button\" data-step=\"1\">Назад</a>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 90
        echo ($context["button_send"] ?? null);
        echo "\" class=\"registerSeller__steps-button\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<fieldset id=\"account\" class=\"hidden\">
\t\t\t\t\t\t  <div class=\"form-group required\" style=\"display: ";
        // line 96
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 97
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 99
            echo "\t\t\t\t\t\t\t  ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 99) == ($context["customer_group_id"] ?? null))) {
                // line 100
                echo "\t\t\t\t\t\t\t  <div class=\"radio\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 102);
                echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t  ";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 103);
                echo "</label>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  ";
            } else {
                // line 106
                echo "\t\t\t\t\t\t\t  <div class=\"radio\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 108);
                echo "\" />
\t\t\t\t\t\t\t\t  ";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 109);
                echo "</label>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  ";
            }
            // line 112
            echo "\t\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t  </form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<link href=\"https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/css/suggestions.min.css\" rel=\"stylesheet\" />
<script src=\"https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/js/jquery.suggestions.min.js\"></script>
<script type=\"text/javascript\">
\t//masks
\t\$(\"input.mask\").inputmask(\"+7 (999) 999-99-99\");
\t\$(\"input.maskEmail\").inputmask(\"email\");
\t
\tvar dadataToken = \"2665fdf7fc2ea41b7ae830eb47ca0d0379c543f7\";
\t//autocomplete address
\t\$('[name=\"field_30\"]').suggestions({
\t\ttoken: dadataToken,
\t\ttype: \"ADDRESS\"
\t});
\t
\t//поиск по инн
\t\$(\"[name='field_inn']\").keyup(function(){
\t\tvar url = \"https://suggestions.dadata.ru/suggestions/api/4_1/rs/findById/party\";
\t\tvar token = dadataToken;
\t\tvar query = \$(this).val();
//\t\tconsole.log(query);

\t\tvar options = {
\t\t\tmethod: \"POST\",
\t\t\tmode: \"cors\",
\t\t\theaders: {
\t\t\t\t\"Content-Type\": \"application/json\",
\t\t\t\t\"Accept\": \"application/json\",
\t\t\t\t\"Authorization\": \"Token \" + token
\t\t\t},
\t\t\tbody: JSON.stringify({query: query})
\t\t}

\t\tfetch(url, options)
\t\t.then(response => response.text())
\t\t.then(result => changeByInn(result))
\t\t.catch(error => console.log(\"error\", error));
\t});
\t
\t//подставить значения после инн
\tfunction changeByInn(result=\"\"){
\t\tvar suggestions = JSON.parse(result).suggestions;
//\t\tconsole.log(suggestions);
\t\t\$(\"[name='field_21']\").val(suggestions[0].value);
\t\tif (suggestions[0].data.address !== null)
\t\t\t\$(\"[name='field_30']\").val(suggestions[0].data.address.unrestricted_value);
\t\tif (suggestions[0].data.phones !== null)
\t\t\t\$(\"[name='field_33']\").val(suggestions[0].data.phones.source);
\t\tif (suggestions[0].data.emails !== null)
\t\t\t\$(\"[name='field_34']\").val(suggestions[0].data.emails.source);
\t\tvar companyType = \"Юридическое лицо\";
\t\tif (suggestions[0].data.type == \"LEGAL\")
\t\t\tcompanyType = \"Юридическое лицо\";
\t\tif (suggestions[0].data.type == \"INDIVIDUAL\")
\t\t\tcompanyType = \"Индивидуальный предприниматель\";
\t\t\$(\"[name='field_8']\").val(companyType);
\t\t\$(\"[name='field_9']\").val(suggestions[0].data.name.short_with_opf);
\t\t\$(\"[name='field_24']\").val(suggestions[0].data.kpp);
\t\t\$(\"[name='field_25']\").val(suggestions[0].data.ogrn);
\t\tif (typeof(suggestions[0].data.fio) != \"undefined\" && suggestions[0].data.fio !== null) {
\t\t\tvar ipFIO = \"\";
\t\t\tif (typeof(suggestions[0].data.fio.surname) != \"undefined\" && suggestions[0].data.fio.surname !== null)
\t\t\t\tipFIO += suggestions[0].data.fio.surname;
\t\t\tif (typeof(suggestions[0].data.fio.name) != \"undefined\" && suggestions[0].data.fio.name !== null)
\t\t\t\tipFIO += \" \"+suggestions[0].data.fio.name;
\t\t\tif (typeof(suggestions[0].data.fio.patronymic) != \"undefined\" && suggestions[0].data.fio.patronymic !== null)
\t\t\t\tipFIO += \" \"+suggestions[0].data.fio.patronymic;
\t\t\t\$(\"[name='field_13']\").val(ipFIO);
\t\t}
\t\tif (typeof(suggestions[0].data.management) != \"undefined\" && suggestions[0].data.management !== null) {
\t\t\t\$(\"[name='field_32']\").val(suggestions[0].data.management.name);
\t\t\t\$(\"[name='field_31']\").val(suggestions[0].data.management.post);
\t\t}
\t\tif (typeof(suggestions[0].data.state) != \"undefined\" && suggestions[0].data.state !== null) {
\t\t\t\$(\"[name='field_22']\").val(new Date(suggestions[0].data.state.registration_date).toLocaleDateString(\"ru-RU\"));
\t\t\tconst companyStatus = new Map([
\t\t\t  ['ACTIVE', 'Действующая'],
\t\t\t  ['LIQUIDATING', 'Ликвидируется'],
\t\t\t  ['LIQUIDATED', 'Ликвидирована'],
\t\t\t  ['BANKRUPT', 'Банкротство'],
\t\t\t  ['REORGANIZING', 'В процессе ликвидации']
\t\t\t]);
\t\t\t\$(\"[name='field_23']\").val(companyStatus.get(suggestions[0].data.state.status));
\t\t}
\t}
</script>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 284
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 289
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 294
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

  \$('.registerSeller__steps').delegate('button[id^=\\'button-seller-field\\']', 'click', function() {
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
        // line 317
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
              \$(node).parent().find('input[type=\\'hidden\\']').attr(\"file_name\",json['filename']);
\t\t\t  \$(node).parent().append(json['filelink']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });

//--></script> 
";
        // line 356
        echo ($context["footerEmpty"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/account/registerSeller.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 356,  504 => 317,  478 => 294,  470 => 289,  462 => 284,  283 => 112,  277 => 109,  273 => 108,  269 => 106,  263 => 103,  259 => 102,  255 => 100,  252 => 99,  248 => 98,  244 => 97,  236 => 96,  227 => 90,  222 => 87,  216 => 85,  212 => 83,  208 => 81,  205 => 80,  203 => 79,  198 => 77,  194 => 76,  184 => 69,  180 => 68,  177 => 67,  171 => 65,  169 => 64,  165 => 63,  161 => 62,  155 => 61,  152 => 60,  146 => 58,  144 => 57,  140 => 56,  136 => 55,  130 => 54,  127 => 53,  121 => 51,  119 => 50,  115 => 49,  111 => 48,  105 => 47,  96 => 41,  93 => 40,  87 => 38,  85 => 37,  81 => 36,  75 => 33,  67 => 28,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ headerEmpty }}

<div class=\"registerSeller\">
\t<div class=\"registerSeller__bg\"></div>
\t<div class=\"container\">
\t\t<div class=\"registerSeller__top\">
\t\t\t<div class=\"registerSeller__logo\">\t
\t\t\t\t<svg width=\"167\" height=\"47\" viewBox=\"0 0 167 47\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M167 0H0V5.09167V37.9917V47H167V0Z\" fill=\"url(#pattern0)\"/>
\t\t\t\t<mask id=\"mask0_178_7285\" style=\"mask-type:alpha\" maskUnits=\"userSpaceOnUse\" x=\"0\" y=\"0\" width=\"167\" height=\"47\">
\t\t\t\t<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M167 0H0V5.09167V37.9917V47H167V0Z\" fill=\"url(#pattern1)\"/>
\t\t\t\t</mask>
\t\t\t\t<g mask=\"url(#mask0_178_7285)\">
\t\t\t\t<path d=\"M0 3.5H11L13 11L15 14.5L20.5 16L22.5 16.5H24H25.5L28 17L30 18L31.5 20L33 21L33.5 19.5L34 17.5L40.5 8.5L110.5 6.5L157.5 11H167.5L172 22.5V43.5L130.5 55H104.5L23.5 53.5L-7 44.5C-7.33333 39.8333 -8 30.3 -8 29.5C-8 28.7 -5 13.1667 -3.5 5.5L0 3.5Z\" fill=\"white\"/>
\t\t\t\t<path d=\"M14.5 1.5L20 16L26 16.5L28.5 17L31.5 19.5L33.5 20.5L37 14.5L50 9L170.5 11L181 -7L14.5 1.5Z\" fill=\"#FFC038\" stroke=\"black\"/>
\t\t\t\t</g>
\t\t\t\t<defs>
\t\t\t\t<pattern id=\"pattern0\" patternContentUnits=\"objectBoundingBox\" width=\"1\" height=\"1\">
\t\t\t\t<use xlink:href=\"#image0_178_7285\" transform=\"scale(0.00232558 0.00833333)\"/>
\t\t\t\t</pattern>
\t\t\t\t<pattern id=\"pattern1\" patternContentUnits=\"objectBoundingBox\" width=\"1\" height=\"1\">
\t\t\t\t<use xlink:href=\"#image0_178_7285\" transform=\"scale(0.00232558 0.00833333)\"/>
\t\t\t\t</pattern>
\t\t\t\t<image id=\"image0_178_7285\" width=\"430\" height=\"120\" xlink:href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAa4AAAB4CAYAAACq5RYcAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAABIbSURBVHgB7d0NchRHmgbg78tsawE5YnpP4OIENBHmJxwzQwnhCI/ErlonsDgB4gS0ToA4Ac0JJHYBT8RaoljP2ggcgTiB2zfQRFiCAVV+m1nqhgaEkFSV1ZXV7xMht4xEqyhV1pt/lckEAADgkazETaK0TZoukXDL/klk/7jZ//IWMW3a1x6ldI9IJzyfbB30fkwAAAAeZIHVMNfJyCK9C6rPcUG2SumbJZ5/0tvvGxBcAABQOPnvv7rA6tDhA+tDW6R4mf/jf5c+/AKCCwAACpO1snR6i4QWqAhZ60tfG+4+bBAAAEBRlHlkQ6tFRRFq2/eM7Gdn3/4IAgAAKID8119v2f8WF1rv3rm199570FUIAAC5ycpfFmxT6A75ZGSK5/+RoMUFAAD5KbpJvimVtbrQ4gIAgFxk5c8xKX5EZbCtLrS4AAAgH+bvqTxtBBcAAOTDPiZkfILiOQQXAADkxOUFF1ETwQUAACFpNi5Mzwp5pEWin9cf/k4jJPf+4vXfSI004tmfR/pvBAAYIbeqxXGXdjryz0KLCwAAcpIelYZ7CC4AAMjH0GMqC8smggsAAPJapbKkchfBBQAAubhlmIgpIf96WPIJAACKkcoS+WbkmntBcAEAQG5Zq8vIbfLFyFL2MwjBBQAABbHBskiG7lLR7Hva9+4M/hfBBQAAheH5nxYKbXnZ98recwiCCwAACtVvebnxqB4d3xYZcyN7rw8guAAAoHC2ldQlo6fc2BQdLcC2sr9j9Gme/7/l/b6hQQAAAB7wfNKzLx33ke3ZRdQmTWfIcETcXyJKbFAp2aSU3LJ5q4MJGAdBcAEAgHf9QEqoAOgqBACAoCC4AAAgKAguAAAICoILAACCgskZY+pi/F00+DyltCmkm42hKatPkr/3CLwZnH937t2rJu024qvkeY/juPmKTmTHuUsUDa6TE/RqK0mSLYJjGz63IVwLVcHYAbkAFdwB2RWIP+hEi5RuaUVfkf092D9uCXGTj7RTqdsgjnsk1EuJXpBJN7+kV5sh3LCGbwpFOsoN2x3Djj4ZM6tL9hy27PmM7PmMDvxLTJvZFGH7mu6m98o63+9dMyyX7B+1PnusNDhe6aXCj9318Wvy94QqaLiyVpSjXAvn4m9boiZiTXTG9nW1RCj6XFm0N64t+z2b7hwbIy+0MUmVA81XmXOG/90IriJUILjeKxQs8aFuOHns3Vw30zS9W9Ub1bnLMwuK+Q4VzIhce7b+sPupr2cBoCYXNNOc+18qhKwaoXsH/dzjyIKVbLBqdd0WkhYXsP16/2a7WrVrw9O9LtlYezD1qS9+HX8X64aesyG1wMVtbd+z5W+Vd9PbVQux85dnOsx8kzxIU576NbmfuM/RVRgod8PZVifaivQlYWq/XyiYvMtaD9TSWi/YG0LPfp6Y9PXtZ8n/bNKYykJAnbq+w7yoi7tJ9XFb2d+zPdf2piDLG2sPc60FN3ysg2unqKum/34Lg2vDBv1S0YFbdVlgae1u4LFL8oJLZGTfc1G0XrTnN7Hn9+64nV8EV2AGBWLHhoYq+IaTQ2Q/FpSeWBjXgmRrmjeHQ8CjyP7Gl+15XjxOIOwXWJ5FrtXrAtdWbObrXrFx3ZE2UFwrP6ZyxPb8xtn5HaMKAoIrAIObDXmoHXswKEjfc5peq/sAc3ajauiVfgu0TINAuHQy3b5xmHGW89N/a78kdYv3Khpli2zF5rnrSnq6/tD/hoMj4M6vIXWnpArBhwbXw1iUO0yHrzAXWFlNXk/+ZvuNOyMqEMcV25rnb+74qaYu2puE0fr5CEJr2MJLPfn8oIkH7jq6cHnWBpZaodGE1lvuOr5wZfa5j4kSo3TxysxNd34rUEZrX+4cBFdFuYkFgQbWe+p8o7JDF92K/G5c99Sj/c6x+7OXjclHtom+SFVhg/5Txxui7FoQ7lCFZOVuerY25/hDCK4KGsyGCzmw3lOzG5VSfL1qNyraJ7z64y2PRtwi/JSoJtdEXMFrYSCuU7kbNh7BJdQ78KNi3piJVXHP8dRLXW5UVNEgcAYTA96F1oi7Bj8jGx90XZkEvmTXwblvZ6p6zR7LWEzO4PZPpw/zfbLyjf3lKluIpEWaL5Gw+2VHVLLNZHXLdj/ctjW5uvVTD8JrCqsCeBO7CRCieM4GbERVZysB241Jd53fIPAlUoZduTtbl3KHrsIhPP/zptszxu26yf/5j3mes4FnZIoM3aWSvdqdWK5hq8tBLduz7AHQ6rYKP6KEFr+Or8YEPjVr1V1PcKC9IPtpwW0jbUMs10OfR+FaXUqV9/NK9a6WDZDRWu6gMuPd3qMbNeC9q/C1Madtylf4saPDLWbZ34J6UVbiZVJpKWMHrtU1od5cZ67JJI0h/Vr2vcESLjD2oh11ys187BD4YyuN567M3nr244Ogu2a9B5e2zVO/CwXmd2F6dm99NXaTNfYWC2XzOtnvKf9+gJ2WlT93SPkdg6rxWFfG1rLdvyshAMq6OK8Tgsu7OlQa0VXYl009z8YFuK2Zbrmn/G2g/eampu/XL2y7EDu269D7CgA1HutyYoxtwJAmrodyuK5ZChiC62DZMirZdFIbYB9+sR9eXsehaj3WRW9bXQAZXA+lidzsUwoUgutwBuuAfTSAbMNrkV5P/JM8qnur65vLM18RwJ4WJmmUw3XNhnquEVxHs+CWz/k4vPxu8pev1SXuIeuu/bjh9pGyF+uUSeUsp1+czl7t/7sP93X7vbfFbVpXsl2iawSwJ9t4k2rPbdAqvRFXSJv9CTHBwerwR2XHwV7qyVtU9s1213Rpb3+fA7mC4DbxMySPJ83O6hF2zk0Gn2RjekrFQnzTDv5F5JkNzksE0MfEsX1ZpZoYLpPaTCRPktXe8NezXYMbX7ZETJuE58oocwP9VtdyCDuaD0NwHc+CHfN6XObeN27K/vnp2bu2AHz/iW9J7EW4tLGWf6ZQ//GArg2wRHTD1sjkOvkVu8IbWuH5lOxGxXJXSCUqbbxtwab0uslaRfY77A2K5qrymMNhjveA667446H6VGRcmTyZ/nFgMPS/lvQ/Fi/a8fSyKo1W86U6uWBflykgCK5jsmNet+zNdrXMm61K045o/cENRG6fTHc6Po6jH2CLF69c3RLxO2i+rU617UuXQibUU2xu/LL+w0GtBRcMq3trCZZSKfikLLAULZ1Kt7sHXD+D4+0YrTtlBJj9GeGvq2evBWNk/lny4Mhd709shbgVt1f/Te92Srk+WM1RYMGFMa7jG9RUSuOCxI5BDZafSjhNT2+sPVz0HZ5PfrzfsVe315mNioO/WSUnzfbZX9Z+OFQXl/td2tbxoquR0yi4kDXp2Y0fHxyqm8gd79O1BwtlHW/QE3bsuWWTTj1LHh57vNiNa5d4fQQ3QQrBlcdeTaVUrtVlq6Q3NtYelLpQrStEniduRBSuxP0+jlOBKKNS8JH+jfU4109Zx7vLcpZClOPc7qes852SzFNAEFz5lF5TyWrqtpZMI8Dic7FhPkMhcjeqNM01UedfaaNT5uyyvDfWMo6XQ1jZfh9FhtZACZXGkVTC80Bw5RRaTSWPf5kvuh5vWBEFiEmW8t6oynzIXISDOF4hDvD5IrntqxfEjqn7XlswqK56BFdezBGNCXfDYvZX8wtuXMO2tp4UNLPUPWRO/m0ps9ulAvg+XiYOboyLU+PtnNguw4T8ruvZDKn8IbhyC7SL65jEmN8J+kxhrQ5XKSjh4e/VoloE7ngJCyQP6/oec/Y9UeMN0RQFAtPh84uootyU65TSJutGJCJNId1UJLm6YGzh8VYre22U26k6mGA0ZjehArHIY3uCvXXZCJl7VCSRF/Z4YwJKU/a+2axrdZ2/PLvl6/k/Dqi7HsGVX0QVcC7+tiVqItZEZ2w7umXHoiJbg7dBpbOv89sd0Sq9NVpItvbb9iYf7pFHKpVCj9fYhhe6bPaUtkWI2MoHKy/P0oXUPYvgKsAoVn1wP3OHTsas1JwwtbNtWQYE8VSCwrv1hLnH5G33uq2iu7K0Mj0RTeOuzPU9mZX7WX4eAme0uMbKa3XqT/allODKAkudur7DvDgIK4TUCAj1qGCKd7c8BkHxN9ddew6QW25maWnd2z4rN0Lh7LSO4ArEfoEFoyM+blYIglD1qCSN1PRS7aeqGtJ9pYTgcsv3l0OEm1VZuLRIX8ffxS+1vhPS4ClUjJR3cx03ZT48bsjYn4Xajffg0kLxz+sPS2tKl70lh28Xr8zctIHcIQAAyNSuq3CwJYf7OD892y1zO4aiIbQAYJgi1UwJaj2b1a1mTYE+JInQAghDmdPITcNgfJvGYeUMoWIfuizBObeRHEILIAws/04lMdLwGVw9CkTtg0sbSSggboxOMXvdtBEAilTism9iwt9kswC1D64dmuhRQERpt+NpRAAQisg9rkIlYOZL5I28oEDU/jkutxjohelZCkErbjeJ37TJs2z6LnNia28v5IjdA8xqjkm8HyNASLbVKVcmuuRRdn+gNzH5IuU9upQXHkCukC/Ua3vxc0T+JG6F6Y2146+rdv7yTGTTC8EFMMR277vZy13yqH9/IF9So0tbuiovrJFZIf2L3wu3gaDbXr6/rw8AFCv+Or4ak0e+x74btNujQCC4KsR24fkaeO0+Xb/fIQDwRmvxFixupjH5HPt2m6J63k+sSAiuivgmnml522cnTb1uQAcAmfjC5b8tUsFKmWnMYT3viuCqCF8PFrotF0KqSQEEjdXNc9/OFNZz4mYrSkOvkOeZxtkmpgFBcFVEalREHhS95YLf6bgAwWsqw4+KCC8XWi8bk4/I3xDCWyfMzioFBMEFh5YtYGzLEwHAQVx4PT9/eebY3Xt7O0JMPi8jtGy/zL2yN8LNC9Pha6+4p/qN1ivYtBLgcGzvROfC9OyCEVl6tv6we5i/4wJLa+1mFy9QSYSkS4FBcNVf5Kbp/prkmwa/t+hvGbU/gFpxEyvunJ+evWW77ZNU+LFi0zOpZC0cpbkpIk2l9BkS8f0c58eEek/Xfwiqm9BBcFWEVqbna9t23ZBb9uUsHRNWqgfIZ293YW5rprYbodFDRZ1dN4b0v6v045IgZxwjuKrC57bttqV0YXpm5WS6c+0ofdlucHhHf3lHBEs8AdSOe3brkF2YVYPJGRXhpqz73QKc226w1z3I+LkFQV0/uxtY3tGTv2FdQoB6CrW15aDFVSVi7hErnzs2Z/3tNsDu2EHjxNW4pD9dnhX/yfaxR/bTVun97ABQtm6orS0HwVUhwpzYXm6fwTUsdl3qPOhXH1EfOwCUy/XsKBP2ajroKqyQN2Zi1W93IQCMO0VyI/TVdBBcFeL2DlNKbhMAgBdyO+QuwgEEV8W82p1YRqsLADzY3Fh7WPgiwKOA4KoY1+rSRNXuf5aj7ZoMACO3eTLdnqKaQHBV0C/rD5aF6C5VVMjTaAHGUBZaoa1HeBAEV0W9Tr9YdFuSUPUkdegjBxgHrgJct9ByEFwV5boMbXhNVSq8bBchp+k1AoBhvSr2kIjw0tO1Bwt1Cy0HwVVhLrzshXfWds6NfqahCy2TTmFTSoCPuYBg5mp0obuyyjz1dP1+h2oKwRWAjbX7iyxybYSTIjYRWgAHe/Lj/c4oy6mbjezC86TZPmuPJaEaQ3AFwo0rufAos0tiUBA2bKsPoQXweaMqp/alq0zqAqtTx67BDyG4AuLCI+uSSNPTWcHwVLP7sCAQABzaR+XUk0HF8pTZPm0rl9fGqXLp1ipMyKMJs/NPGr2EPCr739i/QBfc5+enr7btJdxmoUvEFFE+buHde7YgdA9Ra0uoYPyFKbSmyKzs+0lCHtgaX4/8SMiPF+RHQn74Ot7SDMrpxfi7DikVC7NbhzSmHNxkLSZ5bK/tVTuEkFDFqL2JKgl5MHx/wKqqNXIunmmxVhGJaTHxV++CTKL3v5PtxcVbTOZ3Eu6x4s0Tu39sjkMXA4yvC9OzQn70bIvn9GG/+eKVq7EYaRFLJKS+skHUtAfWdK/vvgtl9CAILgAYC1UJLsgPY1wAABAUBBcAAAQFwQUAAEFBcAEAQFAQXAAAEBQEFwAABAXBBQAAQUFwAQBAUBBcAAAQFAQXAAAEBcEFAABBQXABAEBQEFwAABAUBBcAAAQFwQUAAEFBcAEAQFAQXAAAEBQEFwAABAXBBQAAQUFwAQBAUBBcAAAQlP8HYgfYu1O+lmcAAAAASUVORK5CYII=\"/>
\t\t\t\t</defs>
\t\t\t\t</svg>
\t\t\t</div>
\t\t\t<div class=\"registerSeller__already\">{{ text_account_already }}</div>
\t\t</div>
\t\t<div class=\"registerSeller__wrap\">
\t\t\t<div class=\"registerSeller__left\">
\t\t\t\t<h1 class=\"registerSeller__title\">Миссия Hampi—выступать гарантом в сделке между компаниями</h1>
\t\t\t\t{{ banner }}
\t\t\t</div>
\t\t\t<div class=\"registerSeller__right\">
\t\t\t\t<h3 class=\"registerSeller__subtitle\">{{ heading_title }}</h3>
\t\t\t\t  {% if error_warning %}
\t\t\t\t  \t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}</div>
\t\t\t\t  {% endif %}
\t\t\t\t<div class=\"registerSeller__form\">
\t\t\t\t\t<form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"text\" class=\"hidden\" name=\"seller\" value=\"1\">
\t\t\t\t\t\t<div class=\"registerSeller__steps\">
\t\t\t\t\t\t\t<div class=\"registerSeller__steps-item active\">
\t\t\t\t\t\t\t\t<h3 class=\"registerSeller__steps-title\">Контактное лицо</h3>
\t\t\t\t\t\t\t\t<div class=\"form-group required{% if error_sellerfio %} has-error{% endif %}\">
\t\t\t\t\t\t\t\t\t<label for=\"\" class=\"control-label\">{{ entry_sellerfio }}</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"sellerfio\" value=\"{{ sellerfio }}\" class=\"form-control loginbox__input\" />
\t\t\t\t\t\t\t\t\t{% if error_sellerfio %}
\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">{{ error_sellerfio }}</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required{% if error_email %} has-error{% endif %}\">
\t\t\t\t\t\t\t\t\t<label for=\"\" class=\"control-label\">{{ entry_email }}</label>
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"{{ email }}\" class=\"form-control maskEmail loginbox__input\" />
\t\t\t\t\t\t\t\t\t{% if error_email %}
\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">{{ error_email }}</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required{% if error_telephone %} has-error{% endif %}\">
\t\t\t\t\t\t\t\t\t<label for=\"input-telephone\" class=\"control-label\">{{ entry_telephone }}</label>
\t\t\t\t\t\t\t\t\t  <input type=\"tel\" name=\"telephone\" value=\"{{ telephone }}\" id=\"input-telephone\" class=\"form-control mask loginbox__input\" />
\t\t\t\t\t\t\t\t\t  {% if error_telephone %}
\t\t\t\t\t\t\t\t\t  <div class=\"text-danger\">{{ error_telephone }}</div>
\t\t\t\t\t\t\t\t\t  {% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\" class=\"hidden\" />
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"{{ password }}\" class=\"hidden\" />
\t\t\t\t\t\t\t\t<div class=\"registerSeller__steps-buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"registerSeller__steps-button\" data-step=\"2\">Далее</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"registerSeller__steps-item\">
\t\t\t\t\t\t\t\t<h3 class=\"registerSeller__steps-title\">Данные компании</h3>
\t\t\t\t\t\t\t\t{{ sellerFields }}
\t\t\t\t\t\t\t\t{{ captcha }}
\t\t\t\t\t\t\t\t<div class=\"registerSeller__agree\">
\t\t\t\t\t\t\t\t\t{% if text_agree %}
\t\t\t\t\t\t\t\t\t\t{% if agree %}
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t {{ text_agree }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"registerSeller__steps-buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"registerSeller__steps-button\" data-step=\"1\">Назад</a>
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"{{ button_send }}\" class=\"registerSeller__steps-button\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<fieldset id=\"account\" class=\"hidden\">
\t\t\t\t\t\t  <div class=\"form-group required\" style=\"display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">{{ entry_customer_group }}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">{% for customer_group in customer_groups %}
\t\t\t\t\t\t\t  {% if customer_group.customer_group_id == customer_group_id %}
\t\t\t\t\t\t\t  <div class=\"radio\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t  <input type=\"radio\" name=\"customer_group_id\" value=\"{{ customer_group.customer_group_id }}\" checked=\"checked\" />
\t\t\t\t\t\t\t\t  {{ customer_group.name }}</label>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  {% else %}
\t\t\t\t\t\t\t  <div class=\"radio\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t  <input type=\"radio\" name=\"customer_group_id\" value=\"{{ customer_group.customer_group_id }}\" />
\t\t\t\t\t\t\t\t  {{ customer_group.name }}</label>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  {% endif %}
\t\t\t\t\t\t\t  {% endfor %}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t  </form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<link href=\"https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/css/suggestions.min.css\" rel=\"stylesheet\" />
<script src=\"https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/js/jquery.suggestions.min.js\"></script>
<script type=\"text/javascript\">
\t//masks
\t\$(\"input.mask\").inputmask(\"+7 (999) 999-99-99\");
\t\$(\"input.maskEmail\").inputmask(\"email\");
\t
\tvar dadataToken = \"2665fdf7fc2ea41b7ae830eb47ca0d0379c543f7\";
\t//autocomplete address
\t\$('[name=\"field_30\"]').suggestions({
\t\ttoken: dadataToken,
\t\ttype: \"ADDRESS\"
\t});
\t
\t//поиск по инн
\t\$(\"[name='field_inn']\").keyup(function(){
\t\tvar url = \"https://suggestions.dadata.ru/suggestions/api/4_1/rs/findById/party\";
\t\tvar token = dadataToken;
\t\tvar query = \$(this).val();
//\t\tconsole.log(query);

\t\tvar options = {
\t\t\tmethod: \"POST\",
\t\t\tmode: \"cors\",
\t\t\theaders: {
\t\t\t\t\"Content-Type\": \"application/json\",
\t\t\t\t\"Accept\": \"application/json\",
\t\t\t\t\"Authorization\": \"Token \" + token
\t\t\t},
\t\t\tbody: JSON.stringify({query: query})
\t\t}

\t\tfetch(url, options)
\t\t.then(response => response.text())
\t\t.then(result => changeByInn(result))
\t\t.catch(error => console.log(\"error\", error));
\t});
\t
\t//подставить значения после инн
\tfunction changeByInn(result=\"\"){
\t\tvar suggestions = JSON.parse(result).suggestions;
//\t\tconsole.log(suggestions);
\t\t\$(\"[name='field_21']\").val(suggestions[0].value);
\t\tif (suggestions[0].data.address !== null)
\t\t\t\$(\"[name='field_30']\").val(suggestions[0].data.address.unrestricted_value);
\t\tif (suggestions[0].data.phones !== null)
\t\t\t\$(\"[name='field_33']\").val(suggestions[0].data.phones.source);
\t\tif (suggestions[0].data.emails !== null)
\t\t\t\$(\"[name='field_34']\").val(suggestions[0].data.emails.source);
\t\tvar companyType = \"Юридическое лицо\";
\t\tif (suggestions[0].data.type == \"LEGAL\")
\t\t\tcompanyType = \"Юридическое лицо\";
\t\tif (suggestions[0].data.type == \"INDIVIDUAL\")
\t\t\tcompanyType = \"Индивидуальный предприниматель\";
\t\t\$(\"[name='field_8']\").val(companyType);
\t\t\$(\"[name='field_9']\").val(suggestions[0].data.name.short_with_opf);
\t\t\$(\"[name='field_24']\").val(suggestions[0].data.kpp);
\t\t\$(\"[name='field_25']\").val(suggestions[0].data.ogrn);
\t\tif (typeof(suggestions[0].data.fio) != \"undefined\" && suggestions[0].data.fio !== null) {
\t\t\tvar ipFIO = \"\";
\t\t\tif (typeof(suggestions[0].data.fio.surname) != \"undefined\" && suggestions[0].data.fio.surname !== null)
\t\t\t\tipFIO += suggestions[0].data.fio.surname;
\t\t\tif (typeof(suggestions[0].data.fio.name) != \"undefined\" && suggestions[0].data.fio.name !== null)
\t\t\t\tipFIO += \" \"+suggestions[0].data.fio.name;
\t\t\tif (typeof(suggestions[0].data.fio.patronymic) != \"undefined\" && suggestions[0].data.fio.patronymic !== null)
\t\t\t\tipFIO += \" \"+suggestions[0].data.fio.patronymic;
\t\t\t\$(\"[name='field_13']\").val(ipFIO);
\t\t}
\t\tif (typeof(suggestions[0].data.management) != \"undefined\" && suggestions[0].data.management !== null) {
\t\t\t\$(\"[name='field_32']\").val(suggestions[0].data.management.name);
\t\t\t\$(\"[name='field_31']\").val(suggestions[0].data.management.post);
\t\t}
\t\tif (typeof(suggestions[0].data.state) != \"undefined\" && suggestions[0].data.state !== null) {
\t\t\t\$(\"[name='field_22']\").val(new Date(suggestions[0].data.state.registration_date).toLocaleDateString(\"ru-RU\"));
\t\t\tconst companyStatus = new Map([
\t\t\t  ['ACTIVE', 'Действующая'],
\t\t\t  ['LIQUIDATING', 'Ликвидируется'],
\t\t\t  ['LIQUIDATED', 'Ликвидирована'],
\t\t\t  ['BANKRUPT', 'Банкротство'],
\t\t\t  ['REORGANIZING', 'В процессе ликвидации']
\t\t\t]);
\t\t\t\$(\"[name='field_23']\").val(companyStatus.get(suggestions[0].data.state.status));
\t\t}
\t}
</script>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '{{ datepicker }}',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '{{ datepicker }}',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '{{ datepicker }}',
\tpickDate: true,
\tpickTime: true
});

  \$('.registerSeller__steps').delegate('button[id^=\\'button-seller-field\\']', 'click', function() {
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
              \$(node).parent().find('input[type=\\'hidden\\']').attr(\"file_name\",json['filename']);
\t\t\t  \$(node).parent().append(json['filelink']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });

//--></script> 
{{ footerEmpty }} ", "default/template/account/registerSeller.twig", "");
    }
}
