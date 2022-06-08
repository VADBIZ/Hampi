$(document).ready(function(){
    $('.not_common,.custom_field_form').hide();
    var select_type = $('#select_type_edit').val();
    if(select_type != ''){
        setTimeout(function(){
            $('#field_type').val(select_type);
            $('#field_type').trigger('click');
            $('#field_type').attr('disabled',true);
        },100)
    }
    $('li').click(function(){

        var tag = $(this).data('tag');
        var id = $(this).data('id');
        var field = $(this).data('field');
        $(`.language`).hide();
        $(`.language_${id}`).show();
        //$(`.${field}`).hide();
        //$(`#${tag}_${id}`).show();
     })
     $('.drop_down_link').click(function(e){
        e.preventDefault();
     })
     //Select field type and change the form fields
     $('#field_type').click(function(e){
        var field_type = $(this).val();
        $('.not_common').hide();
        $('.custom_field_form').show();
        if(field_type == 'text'){
            $('.placeholder_field,.error_msg_field').parent().show();
            $('.text_minlength,.text_maxlength').show();
            $('.text_area_field').hide();
        }
        else if(field_type == 'select'){
            $('.select_field_option').parent().show();
            $('.mutiple_select').show();
        }
        else if(field_type == 'radio' || field_type == 'checkbox'){
            $('.select_field_option').parent().show();
        }
        else if(field_type == 'textarea'){
            $('.text_area_field').show();
            $('.text_minlength,.text_maxlength').show();
            $('.placeholder_field,.error_msg_field').parent().show();
        }
        else if(field_type == 'file'){
            $('.file_type').show();
        }
        else if(field_type == 'date'){
            $('.placeholder_field').parent().show();
        }
        else{
            $('.not_common,.custom_field_form').hide();
        }
     })
     $('#add_custom_fields').click(function(){
        var error_flag = 0;
        var field_type = $('#field_type').val();
        if(field_type != ''){
            $('.label_field_mandatory').each(function(){
                $(this).removeClass('kb_error_field')
                $('.label_validation').html('');
                var validate_result = velovalidation.checkMandatory($(this));
                if(validate_result != true){
                    $(this).addClass('kb_error_field')
                    $('.label_validation').html(validate_result);
                    error_flag = 1;
                }
            })
            $('.common_field_mandatory').each(function(){
                $(this).removeClass('kb_error_field')
                $(this).next().html('');
                var validate_result = velovalidation.checkMandatory($(this));
                if(validate_result != true){
                        $(this).addClass('kb_error_field')
                       $(this).next().html(validate_result);
                       error_flag = 1;
                }
            })
          
            if(field_type == 'select'){
                
                $('.select_option_value').each(function(){
                    $(this).removeClass('kb_error_field')
                    $('.option_select_validation').html('');
                    $('#file_extension').removeClass('kb_error_field')
                    $('#file_extension').next().html('');
                    var validate_result = velovalidation.checkMandatory($(this));
                    if(validate_result != true){
                        $(this).addClass('kb_error_field')
                        $('.option_select_validation').html(validate_result);
                        error_flag = 1;
                    }
                })
            }
            if(field_type == 'file'){
                $('.select_option_value').removeClass('kb_error_field')
                $('.option_select_validation').html('')
                var validate_result = velovalidation.checkMandatory($('#file_extension'));
                $('#file_extension').removeClass('kb_error_field')
                $('#file_extension').next().html('');
               if(validate_result != true){
                    $('#file_extension').addClass('kb_error_field')
                    $('#file_extension').next().html(validate_result);
                    error_flag = 1;
                }
            }
            if(error_flag == 0){
                $('#form_custom_field').submit();
            }
        }
     })
})
