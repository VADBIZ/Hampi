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

/* default/template/kbmp_marketplace/seller_register.twig */
class __TwigTemplate_24ba2e18b0d1e4c1d94d860407ac902a372110543072a5fb33cfc362bcf6e1c7 extends \Twig\Template
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
        echo "<script type=\"text/javascript\">
    \$('input[type=\"submit\"], button[type=\"submit\"]').click(function (e) {
        var custom_field_status = \$('#custom_field_status').val()
        if (custom_field_status > 0) {
            e.preventDefault();
            var is_error = 0;
            \$('.kb_error_message').remove();
            \$('.required').each(function () {
                var type_field = \$(this).data('type');
                var data_validation = \$(this).data('validation');
                var vel_check = '';
                if (data_validation != '') {
                    if (data_validation == 'isAddress') {
                        vel_check = velovalidation.checkAddress(\$(this))
                    }

                    if (data_validation == 'isCityName') {
                        vel_check = velovalidation.checkCity(\$(this))
                    }

                    if (data_validation == 'isPhoneNumber') {
                        vel_check = velovalidation.checkPhoneNumber(\$(this))
                    }

                    if (data_validation == 'isEmail') {
                        vel_check = velovalidation.checkEmail(\$(this))
                    }

                    if (data_validation == 'isPasswd') {
                        vel_check = velovalidation.checkPassword(\$(this))
                    }
                }

                if (type_field == 'text') {
                    var result = velovalidation.checkMandatory(\$(this));
                    var data_error = \$(this).data('error');
                    if (result != true) {
                        if (data_error != '') {
                            result = data_error;
                        }
                        is_error = 1;
                        \$(this).next().html('<div class=\"kb_error_message\">' + result + '</div>');
                        \$(this).addClass('has_error');

                    } else if (vel_check != '' && vel_check != true) {
                        result = vel_check;
                        if (data_error != '') {
                            result = data_error;
                        }
                        is_error = 1;
                        \$(this).next().html('<div class=\"kb_error_message\">' + result + '</div>');
                        \$(this).addClass('has_error');
                    } else {
                        if (\$(this).hasClass('has_error')) {
                            \$(this).next().html('');
                            \$(this).removeClass('has_error');
                        }
                    }
                }

                if (type_field == 'select') {
                    var result = velovalidation.checkMandatory(\$(this));
                    if (result != true) {
                        \$(this).next().html('<div class=\"kb_error_message\">' + result + '</div>');
                        \$(this).addClass('has_error');
                        is_error = 1;
                    } else {
                        if (\$(this).hasClass('has_error')) {
                            \$(this).next().html('');
                            \$(this).removeClass('has_error');
                        }
                    }
                }

                if (type_field == 'radio') {
                    var radio_class = \$(this).attr('class');
                    var radio_name = \$(this).attr('name');
                    if (radio_name) {
                        var status = 0;
                        \$(\".\" + radio_name).each(function () {
                            if (\$(this).prop('checked')) {
                                status = 1;
                            }
                        })
                        if (status == 0) {
                            \$(\".radio_\" + radio_name).show();
                            is_error = 1;
                        } else {
                            \$(\".radio_\" + radio_name).hide();
                        }
                    }
                }

                if (type_field == 'checkbox') {
                    var radio_class = \$(this).attr('class');
                    var radio_id = \$(this).attr('id');
                    var radio_class = \$(this).attr('id');
                    if (radio_class) {
                        var status = 0;
                        \$(\".\" + radio_class).each(function () {
                            if (\$(this).prop('checked')) {
                                status = 1;
                            }
                        });

                        if (status == 0) {
                            \$(\".checkbox_\" + radio_id).show();
                            is_error = 1;
                        } else {
                            \$(\".checkbox_\" + radio_id).hide();
                        }
                    }
                }

                if (type_field == 'textarea') {
                    var result = velovalidation.checkMandatory(\$(this));
                    var data_error = \$(this).data('error');
                    if (result != true) {
                        if (data_error != '') {
                            result = data_error;
                        }
                        if (\$(this).hasClass('summernote')) {
                            \$(this).parent().children('.note-editor').addClass('kb_error_field');
                            \$(this).parent().children('.note-editor').after(\"<span class='kb_error_message'>\" + result + \"</span>\");
                        } else {
                            \$(this).parent().append('<div class=\"kb_error_message\">' + result + '</div>');
                            \$(this).addClass('has_error');
                        }
                        is_error = 1;
                    } else if (vel_check != '' && vel_check != true) {
                        result = vel_check;
                        if (data_error != '') {
                            result = data_error;
                        }
                        \$(this).next().html('<div class=\"kb_error_message\">' + result + '</div>');
                        \$(this).addClass('has_error');
                        is_error = 1;
                    } else {
                        if (\$(this).hasClass('summernote')) {
                            \$(this).parent().children('.note-editor').removeClass('kb_error_field');
                            \$(this).parent().find('.kb_error_message').remove();
                        } else {
                            \$(this).parent().find('.kb_error_message').remove();
                            if (\$(this).hasClass('has_error')) {
                                \$(this).next().html('');
                                \$(this).removeClass('has_error');
                            }
                        }
                    }
                }

                if (type_field == 'file') {
                    var result = velovalidation.checkMandatory(\$(this));
                    var data_error = \$(this).data('error');
                    var file_val = \$(this).val();
                    var file_id = \$(this).attr('id');
                    var file_type = \$(\"#file_\" + file_id).val();
                    if (file_type != '' && file_val != '') {
                        file_type = file_type.split(',');
                        var extension = file_val.substr((file_val.lastIndexOf('.') + 1));
                        extension = extension.toLowerCase();
                        if (file_type.indexOf(extension) >= 0) {
                            \$(this).parent().find('.kb_error_message').remove();
                            \$(this).removeClass('has_error');
                        } else {
                            \$(this).parent().append('<div class=\"kb_error_message\">";
        // line 166
        echo ($context["file_error"] ?? null);
        echo "</div>');
                            \$(this).removeClass('has_error');
                            is_error = 1;
                        }
                    } else if (file_val == '') {
                        \$(this).parent().append('<div class=\"kb_error_message\">";
        // line 171
        echo ($context["file_error"] ?? null);
        echo "</div>');
                        \$(this).removeClass('has_error');
                        is_error = 1;
                    }
                }

                if (type_field == 'date') {
                    var result = velovalidation.checkMandatory(\$(this));
                    if (result != true) {
                        \$(this).parent().parent().append('<div class=\"kb_error_message\" style=\"width: 100%; display:block; clear: both\">' + result + '</div>');
                        is_error = 1;
                    } else {
                        if (\$(this).hasClass('has_error')) {
                            \$(this).removeClass('has_error');
                        }
                    }
                }
            });
            
            if(\$(\"#seller_agreement\").prop(\"checked\") != undefined) {
                if (!\$(\"#seller_agreement\").prop(\"checked\")) {
                    \$(\"#seller_agreement\").parent().append('<div class=\"kb_error_message\" style=\"width: 100%; display:block; clear: both\">";
        // line 192
        echo ($context["error_seller_term_condition"] ?? null);
        echo "</div>');
                    \$(\"#seller_agreement\").addClass('has_error');
                    is_error = 1;
                } else {
                    \$(\"#seller_agreement\").removeClass('has_error');
                }
            }

            if (is_error == 0) {
                \$(\".register-form\").submit();
                \$(\".form-horizontal\").submit();
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    })
</script>
<style type=\"text/css\">
    .has_error{
        border-color: #a94442;
    }

    .helptext {
        font-size: 11px;
        font-style: italic;
        display: block;
        font-size: 11px;
        font-style: italic;
        width: 100%;
        margin: 5px 0px;
    }

    .kb_error_message {
        color: #a94442;

    }
</style>";
    }

    public function getTemplateName()
    {
        return "default/template/kbmp_marketplace/seller_register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 192,  212 => 171,  204 => 166,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    \$('input[type=\"submit\"], button[type=\"submit\"]').click(function (e) {
        var custom_field_status = \$('#custom_field_status').val()
        if (custom_field_status > 0) {
            e.preventDefault();
            var is_error = 0;
            \$('.kb_error_message').remove();
            \$('.required').each(function () {
                var type_field = \$(this).data('type');
                var data_validation = \$(this).data('validation');
                var vel_check = '';
                if (data_validation != '') {
                    if (data_validation == 'isAddress') {
                        vel_check = velovalidation.checkAddress(\$(this))
                    }

                    if (data_validation == 'isCityName') {
                        vel_check = velovalidation.checkCity(\$(this))
                    }

                    if (data_validation == 'isPhoneNumber') {
                        vel_check = velovalidation.checkPhoneNumber(\$(this))
                    }

                    if (data_validation == 'isEmail') {
                        vel_check = velovalidation.checkEmail(\$(this))
                    }

                    if (data_validation == 'isPasswd') {
                        vel_check = velovalidation.checkPassword(\$(this))
                    }
                }

                if (type_field == 'text') {
                    var result = velovalidation.checkMandatory(\$(this));
                    var data_error = \$(this).data('error');
                    if (result != true) {
                        if (data_error != '') {
                            result = data_error;
                        }
                        is_error = 1;
                        \$(this).next().html('<div class=\"kb_error_message\">' + result + '</div>');
                        \$(this).addClass('has_error');

                    } else if (vel_check != '' && vel_check != true) {
                        result = vel_check;
                        if (data_error != '') {
                            result = data_error;
                        }
                        is_error = 1;
                        \$(this).next().html('<div class=\"kb_error_message\">' + result + '</div>');
                        \$(this).addClass('has_error');
                    } else {
                        if (\$(this).hasClass('has_error')) {
                            \$(this).next().html('');
                            \$(this).removeClass('has_error');
                        }
                    }
                }

                if (type_field == 'select') {
                    var result = velovalidation.checkMandatory(\$(this));
                    if (result != true) {
                        \$(this).next().html('<div class=\"kb_error_message\">' + result + '</div>');
                        \$(this).addClass('has_error');
                        is_error = 1;
                    } else {
                        if (\$(this).hasClass('has_error')) {
                            \$(this).next().html('');
                            \$(this).removeClass('has_error');
                        }
                    }
                }

                if (type_field == 'radio') {
                    var radio_class = \$(this).attr('class');
                    var radio_name = \$(this).attr('name');
                    if (radio_name) {
                        var status = 0;
                        \$(\".\" + radio_name).each(function () {
                            if (\$(this).prop('checked')) {
                                status = 1;
                            }
                        })
                        if (status == 0) {
                            \$(\".radio_\" + radio_name).show();
                            is_error = 1;
                        } else {
                            \$(\".radio_\" + radio_name).hide();
                        }
                    }
                }

                if (type_field == 'checkbox') {
                    var radio_class = \$(this).attr('class');
                    var radio_id = \$(this).attr('id');
                    var radio_class = \$(this).attr('id');
                    if (radio_class) {
                        var status = 0;
                        \$(\".\" + radio_class).each(function () {
                            if (\$(this).prop('checked')) {
                                status = 1;
                            }
                        });

                        if (status == 0) {
                            \$(\".checkbox_\" + radio_id).show();
                            is_error = 1;
                        } else {
                            \$(\".checkbox_\" + radio_id).hide();
                        }
                    }
                }

                if (type_field == 'textarea') {
                    var result = velovalidation.checkMandatory(\$(this));
                    var data_error = \$(this).data('error');
                    if (result != true) {
                        if (data_error != '') {
                            result = data_error;
                        }
                        if (\$(this).hasClass('summernote')) {
                            \$(this).parent().children('.note-editor').addClass('kb_error_field');
                            \$(this).parent().children('.note-editor').after(\"<span class='kb_error_message'>\" + result + \"</span>\");
                        } else {
                            \$(this).parent().append('<div class=\"kb_error_message\">' + result + '</div>');
                            \$(this).addClass('has_error');
                        }
                        is_error = 1;
                    } else if (vel_check != '' && vel_check != true) {
                        result = vel_check;
                        if (data_error != '') {
                            result = data_error;
                        }
                        \$(this).next().html('<div class=\"kb_error_message\">' + result + '</div>');
                        \$(this).addClass('has_error');
                        is_error = 1;
                    } else {
                        if (\$(this).hasClass('summernote')) {
                            \$(this).parent().children('.note-editor').removeClass('kb_error_field');
                            \$(this).parent().find('.kb_error_message').remove();
                        } else {
                            \$(this).parent().find('.kb_error_message').remove();
                            if (\$(this).hasClass('has_error')) {
                                \$(this).next().html('');
                                \$(this).removeClass('has_error');
                            }
                        }
                    }
                }

                if (type_field == 'file') {
                    var result = velovalidation.checkMandatory(\$(this));
                    var data_error = \$(this).data('error');
                    var file_val = \$(this).val();
                    var file_id = \$(this).attr('id');
                    var file_type = \$(\"#file_\" + file_id).val();
                    if (file_type != '' && file_val != '') {
                        file_type = file_type.split(',');
                        var extension = file_val.substr((file_val.lastIndexOf('.') + 1));
                        extension = extension.toLowerCase();
                        if (file_type.indexOf(extension) >= 0) {
                            \$(this).parent().find('.kb_error_message').remove();
                            \$(this).removeClass('has_error');
                        } else {
                            \$(this).parent().append('<div class=\"kb_error_message\">{{file_error}}</div>');
                            \$(this).removeClass('has_error');
                            is_error = 1;
                        }
                    } else if (file_val == '') {
                        \$(this).parent().append('<div class=\"kb_error_message\">{{file_error}}</div>');
                        \$(this).removeClass('has_error');
                        is_error = 1;
                    }
                }

                if (type_field == 'date') {
                    var result = velovalidation.checkMandatory(\$(this));
                    if (result != true) {
                        \$(this).parent().parent().append('<div class=\"kb_error_message\" style=\"width: 100%; display:block; clear: both\">' + result + '</div>');
                        is_error = 1;
                    } else {
                        if (\$(this).hasClass('has_error')) {
                            \$(this).removeClass('has_error');
                        }
                    }
                }
            });
            
            if(\$(\"#seller_agreement\").prop(\"checked\") != undefined) {
                if (!\$(\"#seller_agreement\").prop(\"checked\")) {
                    \$(\"#seller_agreement\").parent().append('<div class=\"kb_error_message\" style=\"width: 100%; display:block; clear: both\">{{error_seller_term_condition}}</div>');
                    \$(\"#seller_agreement\").addClass('has_error');
                    is_error = 1;
                } else {
                    \$(\"#seller_agreement\").removeClass('has_error');
                }
            }

            if (is_error == 0) {
                \$(\".register-form\").submit();
                \$(\".form-horizontal\").submit();
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    })
</script>
<style type=\"text/css\">
    .has_error{
        border-color: #a94442;
    }

    .helptext {
        font-size: 11px;
        font-style: italic;
        display: block;
        font-size: 11px;
        font-style: italic;
        width: 100%;
        margin: 5px 0px;
    }

    .kb_error_message {
        color: #a94442;

    }
</style>", "default/template/kbmp_marketplace/seller_register.twig", "");
    }
}
