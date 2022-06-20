<?php

class ModelKbmpmarketplaceRegister extends Model {

    public function genrate_custom_html($fields, $seller_register, $select_error, $kbmp_marketplace_settings, $custom_field_data) {
        $html = '';
        if (!empty($fields) && $seller_register == 1) {
            foreach ($fields as $k => $field_data) {
                $required = '';
                if ($field_data['required'] == 1) {
                    $required = 'required';
                }
                $html.= '<div class="form-group ' . $required . ' ' . $field_data['html_class'] . '">';
                $html.= '<label class="control-label">' . $field_data["label"] . '</label>';
                $html.= '<div>';
                if ($field_data['type'] == 'text') {
                    $name = $field_data["field_name"];
                    $value_data = '';
                    if (isset($custom_field_data[$name])) {
                        $value_data = $custom_field_data[$name];
                    }
                    $html.= '<input type="text" name="' . $field_data["field_name"] . '" value="' . $value_data . '" placeholder="' . $field_data["placeholder"] . '" id="' . $field_data["html_id"] . '"  class="form-control loginbox__input ' . $field_data["html_class"] . ' ' . $required . '" maxlength="' . $field_data["max_length"] . '" minlength="' . $field_data["min_length"] . '" data-validation= "' . $field_data["validation"] . '" data-type="text" data-error="' . $field_data["error_msg"] . '" />';
                } else if ($field_data['type'] == 'select') {
                    $multiple = '';
                    $value_data = '';
                    if ($field_data['multiselect'] == 1) {
                        $multiple = 'multiple';
                    }
                    $name = $field_data["field_name"];

                    $html.= '<select ' . $multiple . ' data-type="select" name="' . $field_data["field_name"] . '" placeholder="' . $field_data["placeholder"] . '" id="' . $field_data["html_id"] . '"  class="' . $required . ' form-control ' . $field_data["html_class"] . ' ' . $required . '"/>';
                    $html.= '<option value=""></option>';
                    $explode = explode(PHP_EOL, $field_data["value"]);
                    $default_value = explode('|', $field_data["default_value"]);
                    if (!empty($explode)) {
                        foreach ($explode as $index => $value) {
                            $value = explode('|', $value);
                            if (count($value) > 1) {
                                $select_txt = '';
                                if (count($default_value) > 1 && $default_value[0] == $value[0]) {

                                    $select_txt = 'selected';
                                }
                                if (isset($custom_field_data[$name]) && is_array($custom_field_data[$name]) && in_array($value[0], $custom_field_data[$name])) {
                                    $select_txt = 'selected';
                                } elseif (isset($custom_field_data[$name]) && $custom_field_data[$name] == $value[0]) {
                                    $select_txt = 'selected';
                                }
                                $html.= '<option value="' . $value[0] . '" ' . $select_txt . '>' . $value[1] . '</option>';
                            }
                        }
                    }
                    $html.= '</select>';
                } else if ($field_data['type'] == 'radio') {
                    $explode = explode(PHP_EOL, $field_data["value"]);
                    $default_value = explode('|', $field_data["default_value"]);
                    if (!empty($explode)) {
                        foreach ($explode as $index => $value) {
                            $value = explode('|', $value);
                            if (count($value) > 1) {
                                $checked = '';
                                if (count($default_value) > 1 && $default_value[0] == $value[0]) {
                                    $checked = 'checked';
                                }
                                $name = $field_data["field_name"];
                                if (isset($custom_field_data[$name]) && $value[0] == $custom_field_data[$name]) {
                                    $checked = 'checked';
                                }
                                $html.= '<label  style="margin-right: 10px;"><input style="margin-right: 5px" data-type="radio" type="radio" ' . $checked . ' value="' . $value[0] . '" name="' . $field_data["field_name"] . '" id="' . $field_data["html_id"] . '" class="' . $field_data["html_class"] . ' ' . $required . '">' . $value[1] . '</label>';
                            }
                        }
                        $html.= '<div class="text-danger radio_' . $field_data["field_name"] . '" style="display:none">' . $select_error . '</div>';
                    }
                } else if ($field_data['type'] == 'checkbox') {
                    $explode = explode(PHP_EOL, $field_data["value"]);
                    $default_value = explode('|', $field_data["default_value"]);

                    if (!empty($explode)) {
                        foreach ($explode as $index => $value) {
                            $value = explode('|', $value);
                            if (count($value) > 1) {
                                $checked = '';
                                if (count($default_value) > 1 && $default_value[0] == $value[0]) {
                                    $checked = 'checked';
                                }
                                $name = $field_data["field_name"];
                                if (isset($custom_field_data[$name]) && is_array($custom_field_data[$name]) && in_array($value[0], $custom_field_data[$name])) {
                                    $checked = 'checked';
                                }
                                $html.= '<label style="margin-right: 10px;"><input style="margin-right: 5px" data-type="checkbox" type="checkbox" ' . $checked . ' value="' . $value[0] . '" name="' . $field_data["field_name"] . '[]" id="' . $field_data["html_id"] . '" class="' . $field_data["html_class"] . ' ' . $required . '">' . $value[1] . '</label>';
                            }
                        }
                        $html.= '<div class="text-danger checkbox_' . $field_data["html_id"] . '" style="display:none">' . $select_error . '</div>';
                    }
                } else if ($field_data['type'] == 'textarea') {
                    $name = $field_data["field_name"];
                    $value_data = '';
                    if (isset($custom_field_data[$name])) {
                        $value_data = $custom_field_data[$name];
                    }
                    $html.= '<textarea type="textarea" name="' . $field_data["field_name"] . '" value="" placeholder="' . $field_data["placeholder"] . '" id="' . $field_data["html_id"] . '"  class="' . $required . ' form-control ' . $field_data["html_class"] . '" maxlength="' . $field_data["max_length"] . '" minlength="' . $field_data["min_length"] . '" data-validation= "' . $field_data["validation"] . '" data-type="textarea" data-error="' . $field_data["error_msg"] . '">' . $value_data . '</textarea>';
                } else if ($field_data['type'] == 'file') {
                    $file_extension = explode(',', $field_data['file_extension']);
                    $file_ext_data = [];
                    foreach ($file_extension as $fil_ext) {
                        $file_ext_data [] = strtolower($fil_ext);
                    }
                    $file_extension = implode(',', $file_ext_data);
                    $html.= '<input type="file" data-type="file" name="' . $field_data["field_name"] . '"  id="' . $field_data["html_id"] . '"  class="file_input_data ' . $required . ' form-control ' . $field_data["html_class"] . '">';
                    $html.= '<input type="hidden" name="file_' . $field_data["html_id"] . '" id="file_' . $field_data["html_id"] . '" value="' . $file_extension . '">';
                } else if ($field_data['type'] == 'date') {
                    $name = $field_data["field_name"];
                    $value_data = '';
                    if (isset($custom_field_data[$name])) {
                        $value_data = $custom_field_data[$name];
                    }
                    $html.= '<div class="input-group date" data-provide="datepicker">';
                    $html.= '<input type="text" class="' . $required . ' form-control" data-type="date" name="' . $field_data["field_name"] . '"  id="' . $field_data["html_id"] . '" value="' . $value_data . '">';
                    $html.= '<div class="input-group-addon">';
                    $html.= '<span class="glyphicon glyphicon-th"></span>';
                    $html.= '</div>';
                    $html.= '</div>';
                }
                $html.= '<p class="helptext">';
				$html.= $field_data["description"] . "&nbsp;";
				if (!empty($field_data['file_extension'])) {
					$html.= $this->language->get('valid_extension_file') . $field_data['file_extension'];
				}
				$html.= '</p>';
                $html.= '</div>';
                $html.= '</div>';
            }
        }
        $array['html'] = $html;
        $array['kbmp_marketplace_settings'] = $kbmp_marketplace_settings;
        return $array;
    }
}
