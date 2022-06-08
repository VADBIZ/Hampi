<?php

class ModelKbmpMarketplaceSellersProfileCustomFields extends Model {

    public function getLanguage() {
        $sql = "SELECT language_id, name, code FROM " . DB_PREFIX . "language";
        $query = $this->db->query($sql);
        return $query->rows;
    }

    //Function will update the field of non languages
    public function addCustomfields($data) {
        $sql = "INSERT INTO " . DB_PREFIX . "kb_mp_custom_fields SET "
                . "id_section = '" . (int) $data['section'] . "', "
                . "field_name = '" . $this->db->escape($data['field_name']) . "',"
                . "type = '" . $this->db->escape($data['field_type']) . "',"
                . "validation = '" . $this->db->escape($data['validation']) . "',"
                . "html_id = '" . $this->db->escape($data['html_id']) . "',"
                . "html_class = '" . $this->db->escape($data['html_class']) . "',"
                . "file_extension = '" . $this->db->escape($data['file_extension']) . "',"
                . "max_length = '" . (int) $data['max_length'] . "',"
                . "min_length = '" . (int) $data['min_length'] . "',"
                . "required = '" . (int) $data['required'] . "',"
                . "editable = '" . (int) $data['editable'] . "',"
                . "multiselect='" . (int) $data['multiselect'] . "', "
                . "show_registration_form = '" . (int) $data['show_registration_form'] . "',"
                . "show_text_editor = '" . (int) $data['show_text_editor'] . "',"
                . "show_seller_profile = '" . (int) $data['show_seller_profile'] . "',"
                . "active = '" . (int) $data['active'] . "',"
                . "position = '" . (int) $data['position'] . "',"
                . "date_upd = '" . date('Y-m-d h:i:s') . "',"
                . "date_add = '" . date('Y-m-d h:i:s') . "'";
        $this->db->query($sql);
        return $this->db->getLastId();
    }

    //Function will update the field of  languages
    public function add_custom_fields_lang($store_id, $data, $lang, $field_id) {
        $label = $data['label_' . $lang];
        $description = $data['description_' . $lang];
        $error_msg = $data['error_msg_' . $lang];
        $value = $data['value_' . $lang];
        $default_value = $data['default_value_' . $lang];
        $placeholder = $data['placeholder_' . $lang];
        $sql = "INSERT INTO " . DB_PREFIX . "kb_mp_custom_fields_lang SET "
                . "id_field = '" . (int) $field_id . "',"
                . "id_lang = '" . (int) $lang . "',"
                . "id_shop = '" . (int) $store_id . "',"
                . "label = '" . $this->db->escape($label) . "',"
                . "description = '" . $this->db->escape($description) . "',"
                . "value = '" . $this->db->escape($value) . "',"
                . "default_value = '" . $this->db->escape($default_value) . "',"
                . "placeholder = '" . $this->db->escape($placeholder) . "',"
                . "error_msg = '" . $this->db->escape($error_msg) . "'";
        $this->db->query($sql);
        return true;
    }

    //Function will update the field of non languages
    public function updateCustomfields($data, $edit_field_id) {
        $sql = "UPDATE  " . DB_PREFIX . "kb_mp_custom_fields SET "
                . "id_section = '" . (int) $data['section'] . "',"
                . "field_name = '" . $this->db->escape($data['field_name']) . "',"
                . "validation = '" . $this->db->escape($data['validation']) . "',"
                . "html_id = '" . $this->db->escape($data['html_id']) . "',"
                . "html_class = '" . $this->db->escape($data['html_class']) . "',"
                . "file_extension = '" . $this->db->escape($data['file_extension']) . "',"
                . "max_length = '" . (int) $data['max_length'] . "',"
                . "min_length = '" . (int) $data['min_length'] . "',"
                . "required = '" . (int) $data['required'] . "',"
                . "editable = '" . (int) $data['editable'] . "',"
                . "multiselect = '" . (int) $data['multiselect'] . "',"
                . "show_registration_form = '" . (int) $data['show_registration_form'] . "',"
                . "show_text_editor = '" . (int) $data['show_text_editor'] . "',"
                . "show_seller_profile = '" . (int) $data['show_seller_profile'] . "',"
                . "active = '" . (int) $data['active'] . "',"
                . "position = '" . (int) $data['position'] . "',"
                . "date_upd = '" . date('Y-m-d h:i:s') . "' "
                . "WHERE id_field = '" . (int) $edit_field_id . "'";
        $this->db->query($sql);
        return true;
    }

    //Function will update the field of  languages
    public function update_custom_fields_lang($store_id, $data, $lang, $edit_field_id) {
        $label = $data['label_' . $lang];
        $description = $data['description_' . $lang];
        $error_msg = $data['error_msg_' . $lang];
        $value = $data['value_' . $lang];
        $default_value = $data['default_value_' . $lang];
        $placeholder = $data['placeholder_' . $lang];

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "kb_mp_custom_fields_lang "
                . "WHERE id_field = '" . (int) $edit_field_id . "'"
                . "AND id_lang = '" . (int) $lang . "' "
                . "AND id_shop = '" . (int) $store_id . "'");
        $checkExist = $query->row;
        if (!empty($checkExist)) {
            $sql = "UPDATE " . DB_PREFIX . "kb_mp_custom_fields_lang SET "
                    . "label = '" . $this->db->escape($label) . "',"
                    . "description = '" . $this->db->escape($description) . "',"
                    . "value = '" . $this->db->escape($value) . "',"
                    . "default_value = '" . $this->db->escape($default_value) . "',"
                    . "placeholder = '" . $this->db->escape($placeholder) . "',"
                    . "error_msg = '" . $this->db->escape($error_msg) . "' "
                    . "WHERE id_field = '" . (int) $edit_field_id . "' "
                    . "AND id_lang = '" . (int) $lang . "' "
                    . "AND id_shop = '" . (int) $store_id . "'";
            $this->db->query($sql);
        } else {
            $this->add_custom_fields_lang($store_id, $data, $lang, $edit_field_id);
        }
        return true;
    }

    //for update End
    public function get_Customfields_data($id_field) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "kb_mp_custom_fields WHERE id_field = '" . (int) $id_field . "'");
        return $query->row;
    }

    public function get_custom_fields_lang_data($id_field) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "kb_mp_custom_fields_lang WHERE id_field = '" . (int) $id_field . "'");
        return $query->rows;
    }

    public function get_lastID_field() {
        $query = $this->db->query("SELECT id_field FROM " . DB_PREFIX . "kb_mp_custom_fields ORDER BY id_field DESC LIMIT 1");
        return $query->row;
    }

    public function get_fieldID($field_name) {
        $query = $this->db->query("SELECT id_field FROM " . DB_PREFIX . "kb_mp_custom_fields WHERE field_name = '" . $this->db->escape($field_name) . "'ORDER BY id_field DESC LIMIT 1");
        $data = $query->row;
        $field_id = '';
        if (!empty($data)) {
            $field_id = $data['id_field'];
        }
        return $field_id;
    }

    public function getcustom_fields($data) {
        $sql = "SELECT field.id_field,field.type,field.id_section,field.active,field_lang.label,field.date_upd,field.position FROM " . DB_PREFIX . "kb_mp_custom_fields as field "
                . "INNER JOIN " . DB_PREFIX . "kb_mp_custom_fields_lang field_lang "
                . "ON field.id_field = field_lang.id_field "
                . "WHERE field_lang.id_lang =  '" . (int) $data['lang_id'] . "'";
        if (!empty($data['id_field'])) {
            $sql .= " AND field.id_field LIKE '" . $this->db->escape($data['id_field']) . "%'";
        }

        if (!empty($data['type'])) {
            $sql .= " AND field.type LIKE '" . $this->db->escape($data['type']) . "%'";
        }
        if (!empty($data['id_section'])) {
            $sql .= " AND field.id_section LIKE '" . $this->db->escape($data['id_section']) . "%'";
        }
        if ($data['active'] != null) {
            if ($data['active'] == 0 || $data['active'] == 1) {
                $sql .= " AND field.active LIKE '" . $this->db->escape($data['active']) . "%'";
            }
        }
        if (!empty($data['label'])) {
            $sql .= " AND field_lang.label LIKE '" . $this->db->escape($data['label']) . "%'";
        }

        if (!empty($data['from_date']) && !empty($data['to_date'])) {
            $sql .= " AND CAST(field.date_upd AS DATE) between '" . $this->db->escape($data['from_date']) . "' AND '" . $this->db->escape($data['to_date']) . "'";
        } elseif (!empty($data['from_date'])) {
            $sql .= " AND CAST(field.date_upd AS DATE) >= '" . $this->db->escape($data['from_date']) . "'";
        } elseif (!empty($data['to_date'])) {
            $sql .= " AND CAST(field.date_upd AS DATE) <= '" . $this->db->escape($data['to_date']) . "'";
        }

        $sort_data = array(
            'field.id_field',
            'field.type',
            'field.id_section',
            'field.active',
            'field.position',
            'field.date_add',
            'field_lang.label'
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY field.id_field ";
        }

        if (isset($data['order']) && ($data['order'] == 'ASC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
        }

        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int) $data['start'] . "," . (int) $data['limit'];
        }
        $query = $this->db->query($sql);
        return $query->rows;
    }

    public function getTotalcustom_fields($data = array()) {
        $sql = "SELECT COUNT(DISTINCT field.id_field) AS total FROM " . DB_PREFIX . "kb_mp_custom_fields as field "
                . "INNER JOIN " . DB_PREFIX . "kb_mp_custom_fields_lang field_lang "
                . "ON field.id_field = field_lang.id_field "
                . "WHERE field_lang.id_lang =  '" . (int) $data['lang_id'] . "'";
        if (!empty($data['id_field'])) {
            $sql .= " AND field.id_field LIKE '" . $this->db->escape($data['id_field']) . "%'";
        }

        if (!empty($data['type'])) {
            $sql .= " AND field.type LIKE '" . $this->db->escape($data['type']) . "%'";
        }
        if (!empty($data['id_section'])) {
            $sql .= " AND field.id_section LIKE '" . $this->db->escape($data['id_section']) . "%'";
        }
        if (!empty($data['active'])) {
            $sql .= " AND field.active LIKE '" . $this->db->escape($data['active']) . "%'";
        }
        if (!empty($data['label'])) {
            $sql .= " AND field_lang.label LIKE '" . $this->db->escape($data['label']) . "%'";
        }
        $query = $this->db->query($sql);
        return isset($query->row['total']) ? $query->row['total'] : 0;
    }

    //For deleting the custom field
    public function delete_custom_field($id_field) {
        $sql = "DELETE FROM  " . DB_PREFIX . "kb_mp_custom_fields WHERE id_field = '" . (int) $id_field . "'";
        $this->db->query($sql);

        $sql = "DELETE FROM  " . DB_PREFIX . "kb_mp_custom_fields_lang WHERE id_field = '" . (int) $id_field . "'";
        $this->db->query($sql);
        return true;
    }

    public function get_custom_field_seller($customer_id, $store_id, $lang_id) {
        $sql = "SELECT field.field_name,"
                . "field.type,"
                . "field.validation,"
                . "field.html_id,"
                . "field.html_class,"
                . "field.file_extension,"
                . "field.max_length,"
                . "field.min_length,"
                . "field.multiselect,"
                . "field.required,"
                . "field_lang.label,"
                . "field_lang.description,"
                . "field_lang.default_value,"
                . "field_lang.placeholder,"
                . "field_lang.error_msg,"
                . "field_lang.value,"
                . "field_lang.id_lang,"
                . "field.id_field,"
                . "field.id_section,"
                . "field.show_text_editor,"
                . "field.editable "
                . "FROM " . DB_PREFIX . "kb_mp_custom_fields as field "
                . "INNER JOIN " . DB_PREFIX . "kb_mp_custom_fields_lang field_lang "
                . "ON field.id_field = field_lang.id_field "
                . "WHERE field_lang.id_shop = '" . (int) $store_id . "' "
                . "AND id_lang = '" . (int) $lang_id . "' "
                . "AND field.active = 1 "
                . "AND field.show_seller_profile = 1 ORDER by position ASC";

        $field_data = $this->db->query($sql)->rows;
        if (!empty($field_data)) {
            foreach ($field_data as $key => $value) {
                $id_lang = $value['id_lang'];
                $id_field = $value['id_field'];
                $sql = "SELECT id_mapping, value as seller_value, "
                        . "id_lang as seller_lang "
                        . "FROM " . DB_PREFIX . "kb_mp_custom_field_seller_mapping "
                        . "WHERE id_customer = '" . (int) $customer_id . "' "
                        . "AND id_field = '" . (int) $id_field . "'";
                $seller_data = $this->db->query($sql)->rows;

                if (!empty($seller_data)) {
                    foreach ($seller_data as $s_value) {
                        $field_data [$key]['seller_value'] = $s_value['seller_value'];
                        $field_data [$key]['seller_lang'] = $s_value['seller_lang'];
                        $field_data [$key]['id_mapping'] = $s_value['id_mapping'];
                        break;
                    }
                } else {
                    $field_data [$key]['seller_value'] = '';
                    $field_data [$key]['seller_lang'] = '';
                    $field_data [$key]['id_mapping'] = '';
                }
            }
        }
        return $field_data;
    }

    public function getSeller($customer_id) {
        if (isset($customer_id) && !empty($customer_id)) {
            $sql = "SELECT ks.*, ksd.*, z.name as zone_name, c.name as country_name FROM " . DB_PREFIX . "kb_mp_seller ks "
                    . "INNER JOIN " . DB_PREFIX . "kb_mp_seller_details ksd "
                    . "ON ks.seller_id = ksd.seller_id "
                    . "LEFT JOIN " . DB_PREFIX . "zone z "
                    . "ON ks.state = z.zone_id "
                    . "LEFT JOIN " . DB_PREFIX . "country c "
                    . "ON ks.country_id = c.country_id "
                    . "WHERE ks.customer_id = '" . (int) $customer_id . "'";
            $query = $this->db->query($sql);
            return $query->row;
        } else {
            return false;
        }
    }

    public function getFileName($file_id) {
        $sql = "SELECT value FROM " . DB_PREFIX . "kb_mp_custom_field_seller_mapping WHERE id_mapping = '" . (int) $file_id . "'";
        $query = $this->db->query($sql);
        $row = $query->row;
        if (!empty($row)) {
            return $row['value'];
        } else {
            return false;
        }
    }

}
