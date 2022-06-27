<?php

class ModelKbmpMarketplaceCustomerFields extends Model {

	//функция получения общего списка полей
	public function getcustom_fields($data) {
        $sql = "SELECT field.id_field,field.type,field.active,field_lang.label,field.required,field.max_length,field.min_length,field.file_extension,field.html_class,field.html_id FROM " . DB_PREFIX . "kb_mp_custom_fields as field " . "INNER JOIN " . DB_PREFIX . "kb_mp_custom_fields_lang field_lang "
		. "ON field.id_field = field_lang.id_field "
		. "WHERE field_lang.id_lang =  '" . (int) $data['lang_id'] . "'";
		$query = $this->db->query($sql);
        return $query->rows;
	}
	
	//функция получения значений полей по customer id и id поля
	public function getseller_field($data) {
		$sql = "SELECT field.id_field,field.value FROM " . DB_PREFIX . "kb_mp_custom_field_seller_mapping as field "
                . "WHERE field.id_customer =  '" . (int) $data['customer_id'] . "'";
		$query = $this->db->query($sql);
		
		$seller_field = array();
		foreach($query->rows as $row) {
			$seller_field[$row['id_field']] = $row['value'];
		}
        return $seller_field;
	}
	
	//функция получения id продавца
	public function get_SellerID($customer_id) {
        $sql = "SELECT seller_id FROM " . DB_PREFIX . "kb_mp_seller WHERE customer_id = '" . (int) $customer_id . "'";
        $query = $this->db->query($sql);
        $row = $query->row;
        return $row['seller_id'];
    }
	
	//функция получения id пользователя
	public function get_CustomerID($seller_id) {
        $sql = "SELECT customer_id FROM " . DB_PREFIX . "kb_mp_seller WHERE seller_id = '" . (int) $seller_id . "'";
        $query = $this->db->query($sql);
        $row = $query->row;
        return $row['customer_id'];
    }
	
	//функция обновления/добавления значения полей по customer id
	public function setseller_field_values($data) {
		foreach($data['fields'] as $key => $field) {
			$sql = "SELECT COUNT(*) as exist FROM " . DB_PREFIX . "kb_mp_custom_field_seller_mapping as field "
                . "WHERE id_customer =  '" . (int) $data['customer_id'] . "' AND id_field = '" . $key . "'";
			$checkFieldExist = (int)$this->db->query($sql)->row['exist'];
			if ($checkFieldExist > 0) {
				$sql = "UPDATE " . DB_PREFIX . "kb_mp_custom_field_seller_mapping SET ";
					$sql .= " value = '" . $field . "'";
				$sql .= " WHERE id_customer = '" . (int)$data['customer_id'] . "' AND id_field = '" . (int)$key . "'";
			} else {
				$sql = "INSERT INTO " . DB_PREFIX . "kb_mp_custom_field_seller_mapping SET id_customer = '" . (int)$data['customer_id'] . "', id_seller = '" . (int)$data['seller_id'] . "', id_field = '" . (int)$key . "', value = '" . $this->db->escape($field) . "'";
			}
			$this->db->query($sql);
		}
		return $data['customer_id'];
	}
	
	//функция проверки поля
	public function getErrorMessage_Field_seller($data) {
		$sql = "SELECT error_msg FROM " . DB_PREFIX . "kb_mp_custom_fields_lang WHERE id_field = '" . (int) $data['id_field'] . "' AND id_lang = '" . (int) $data['id_lang'] . "' AND id_shop = '" . (int) $data['id_shop'] . "'";
        $query = $this->db->query($sql);
        $row = $query->row;
        return $row['error_msg'];
	}
	
}