<?php
class ModelCustomerCustomer extends Model {
	public function addCustomer($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "customer SET customer_group_id = '" . (int)$data['customer_group_id'] . "', firstname = '" . $this->db->escape($data['firstname']) . "', lastname = '" . $this->db->escape($data['lastname']) . "', email = '" . $this->db->escape($data['email']) . "', telephone = '" . $this->db->escape($data['telephone']) . "', custom_field = '" . $this->db->escape(isset($data['custom_field']) ? json_encode($data['custom_field']) : json_encode(array())) . "', newsletter = '" . (int)$data['newsletter'] . "', salt = '" . $this->db->escape($salt = token(9)) . "', password = '" . $this->db->escape(sha1($salt . sha1($salt . sha1($data['password'])))) . "', status = '" . (int)$data['status'] . "', safe = '" . (int)$data['safe'] . "', date_added = NOW()");

		$customer_id = $this->db->getLastId();

		if (isset($data['address'])) {
			foreach ($data['address'] as $address) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "address SET customer_id = '" . (int)$customer_id . "', firstname = '" . $this->db->escape($address['firstname']) . "', lastname = '" . $this->db->escape($address['lastname']) . "', company = '" . $this->db->escape($address['company']) . "', address_1 = '" . $this->db->escape($address['address_1']) . "', address_2 = '" . $this->db->escape($address['address_2']) . "', city = '" . $this->db->escape($address['city']) . "', postcode = '" . $this->db->escape($address['postcode']) . "', country_id = '" . (int)$address['country_id'] . "', zone_id = '" . (int)$address['zone_id'] . "', custom_field = '" . $this->db->escape(isset($address['custom_field']) ? json_encode($address['custom_field']) : json_encode(array())) . "'");

				if (isset($address['default'])) {
					$address_id = $this->db->getLastId();

					$this->db->query("UPDATE " . DB_PREFIX . "customer SET address_id = '" . (int)$address_id . "' WHERE customer_id = '" . (int)$customer_id . "'");
				}
			}
		}
		
		if ($data['affiliate']) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "customer_affiliate SET customer_id = '" . (int)$customer_id . "', company = '" . $this->db->escape($data['company']) . "', website = '" . $this->db->escape($data['website']) . "', tracking = '" . $this->db->escape($data['tracking']) . "', commission = '" . (float)$data['commission'] . "', tax = '" . $this->db->escape($data['tax']) . "', payment = '" . $this->db->escape($data['payment']) . "', cheque = '" . $this->db->escape($data['cheque']) . "', paypal = '" . $this->db->escape($data['paypal']) . "', bank_name = '" . $this->db->escape($data['bank_name']) . "', bank_branch_number = '" . $this->db->escape($data['bank_branch_number']) . "', bank_swift_code = '" . $this->db->escape($data['bank_swift_code']) . "', bank_account_name = '" . $this->db->escape($data['bank_account_name']) . "', bank_account_number = '" . $this->db->escape($data['bank_account_number']) . "', custom_field = '" . $this->db->escape(isset($data['custom_field']) ? json_encode($data['custom_field']) : json_encode(array())) . "', status = '" . (int)$data['affiliate'] . "', date_added = NOW()");
		}
		
		return $customer_id;
	}

	public function editCustomer($customer_id, $data) {

			$customer_details = $this->db->query("SELECT status FROM " . DB_PREFIX . "customer WHERE customer_id = '" . $customer_id . "'");
			//Marketplace
                        $this->load->model('kbmp_marketplace/kbmp_marketplace');
                        $is_seller = $this->model_kbmp_marketplace_kbmp_marketplace->is_seller($customer_id);
                        if ($is_seller) {
                            $seller = $this->model_kbmp_marketplace_kbmp_marketplace->getSellerByCustomerId($customer_id);
                            if (isset($data['status']) && empty($data['status'])) {
                                //If seller is being disabled then disable all its products
                                //Get All Enabled products
                                $enabledProducts = $this->model_kbmp_marketplace_kbmp_marketplace->getSellerEnabledProducts($seller['seller_id']);
                                if (isset($enabledProducts) && !empty($enabledProducts)) {
                                    if ($this->model_kbmp_marketplace_kbmp_marketplace->addSellerProductsForTracking($seller['seller_id'], $enabledProducts)) {
                                        //Disable all products
                                        $this->model_kbmp_marketplace_kbmp_marketplace->disableSellerProducts($seller['seller_id']);
                                    }
                                }
                            
                                //Send notification to seller that account is disabled now
				if (isset($customer_details->row['status']) && !empty($customer_details->row['status'])) {
                                $seller_details = $this->model_kbmp_marketplace_kbmp_marketplace->getSellerAccountDetails($seller['seller_id']);
                                $email_template = $this->model_kbmp_marketplace_kbmp_marketplace->getEmailTemplate(23, $this->config->get('config_language_id'));
                            
                                if (isset($email_template) && !empty($email_template)) {
                                    $message = $email_template['email_content']; //Seller Email
                                    
                                    $email_content  = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd">' . "\n";
                                    $email_content .= '<html>' . "\n";
                                    $email_content .= '  <head>' . "\n";
                                    $email_content .= '    <title>' . $email_template['email_subject'] . '</title>' . "\n";
                                    $email_content .= '    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">' . "\n";
                                    $email_content .= '  </head>' . "\n";
                                    $email_content .= '  <body>' . html_entity_decode($message, ENT_QUOTES, 'UTF-8') . '</body>' . "\n";
                                    $email_content .= '</html>' . "\n";

                                    $mail = new Mail($this->config->get('config_mail_engine'));
                                    $mail->protocol = $this->config->get('config_mail_protocol');
                                    $mail->parameter = $this->config->get('config_mail_parameter');
                                    $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
                                    $mail->smtp_username = $this->config->get('config_mail_smtp_username');
                                    $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
                                    $mail->smtp_port = $this->config->get('config_mail_smtp_port');
                                    $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

                                    //Send Email to seller on the basis of notification type
                                    if (isset($seller_details['notification_type'])) {
                                        switch ($seller_details['notification_type']) {
                                            case 0:
                                                if (isset($seller_details['email']) && !empty($seller_details['email'])) {
                                                    $mail->setTo($seller_details['email']);
                                                    $mail->setFrom($this->config->get('config_email'));
                                                    $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
                                                    $mail->setSubject(html_entity_decode($email_template['email_subject'], ENT_QUOTES, 'UTF-8'));
                                                    $mail->setHtml($email_content);
                                                    $mail->send();
                                                }

                                                if (isset($seller_details['business_email']) && !empty($seller_details['business_email'])) {
                                                    $mail->setTo($seller_details['business_email']);
                                                    $mail->setFrom($this->config->get('config_email'));
                                                    $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
                                                    $mail->setSubject(html_entity_decode($email_template['email_subject'], ENT_QUOTES, 'UTF-8'));
                                                    $mail->setHtml($email_content);
                                                    $mail->send();
                                                }
                                                break;
                                            case 1:
                                                if (isset($seller_details['email']) && !empty($seller_details['email'])) {
                                                    $mail->setTo($seller_details['email']);
                                                    $mail->setFrom($this->config->get('config_email'));
                                                    $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
                                                    $mail->setSubject(html_entity_decode($email_template['email_subject'], ENT_QUOTES, 'UTF-8'));
                                                    $mail->setHtml($email_content);
                                                    $mail->send();
                                                }
                                                break;
                                            case 2:
                                                if (isset($seller_details['business_email']) && !empty($seller_details['business_email'])) {
                                                    $mail->setTo($seller_details['business_email']);
                                                    $mail->setFrom($this->config->get('config_email'));
                                                    $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
                                                    $mail->setSubject(html_entity_decode($email_template['email_subject'], ENT_QUOTES, 'UTF-8'));
                                                    $mail->setHtml($email_content);
                                                    $mail->send();
                                                }
                                                break;
                                        }
                                    }
                                }
				}
                            } else {
                                //Get All products from Tracking table
                                $enabledProducts = $this->model_kbmp_marketplace_kbmp_marketplace->getSellerTrackingProducts($seller['seller_id']);
                                if (isset($enabledProducts) && !empty($enabledProducts)) {
                                    if ($this->model_kbmp_marketplace_kbmp_marketplace->enableSellerProducts($enabledProducts)) {
                                        //Delete products from tracking
                                        $this->model_kbmp_marketplace_kbmp_marketplace->deleteSellerTrackingProducts($seller['seller_id']);
                                    }
                                }
                            
                                //Send notification to seller that account is enabled now
				if (isset($customer_details->row['status']) && empty($customer_details->row['status'])) {
                                $seller_details = $this->model_kbmp_marketplace_kbmp_marketplace->getSellerAccountDetails($seller['seller_id']);
                                $email_template = $this->model_kbmp_marketplace_kbmp_marketplace->getEmailTemplate(22, $this->config->get('config_language_id'));

                                if (isset($email_template) && !empty($email_template)) {
                                    $message = str_replace("{{email}}", $seller_details['email'] , $email_template['email_content']); //Seller Email
                                    $message = str_replace("{{full_name}}", $seller_details['firstname'] . ' ' . $seller_details['lastname'] , $message); //Seller Full Name

                                    $email_content  = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd">' . "\n";
                                    $email_content .= '<html>' . "\n";
                                    $email_content .= '  <head>' . "\n";
                                    $email_content .= '    <title>' . $email_template['email_subject'] . '</title>' . "\n";
                                    $email_content .= '    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">' . "\n";
                                    $email_content .= '  </head>' . "\n";
                                    $email_content .= '  <body>' . html_entity_decode($message, ENT_QUOTES, 'UTF-8') . '</body>' . "\n";
                                    $email_content .= '</html>' . "\n";

                                    $mail = new Mail($this->config->get('config_mail_engine'));
                                    $mail->protocol = $this->config->get('config_mail_protocol');
                                    $mail->parameter = $this->config->get('config_mail_parameter');
                                    $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
                                    $mail->smtp_username = $this->config->get('config_mail_smtp_username');
                                    $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
                                    $mail->smtp_port = $this->config->get('config_mail_smtp_port');
                                    $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

                                    //Send Email to seller on the basis of notification type
                                    if (isset($seller_details['notification_type'])) {
                                        switch ($seller_details['notification_type']) {
                                            case 0:
                                                if (isset($seller_details['email']) && !empty($seller_details['email'])) {
                                                    $mail->setTo($seller_details['email']);
                                                    $mail->setFrom($this->config->get('config_email'));
                                                    $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
                                                    $mail->setSubject(html_entity_decode($email_template['email_subject'], ENT_QUOTES, 'UTF-8'));
                                                    $mail->setHtml($email_content);
                                                    $mail->send();
                                                }

                                                if (isset($seller_details['business_email']) && !empty($seller_details['business_email'])) {
                                                    $mail->setTo($seller_details['business_email']);
                                                    $mail->setFrom($this->config->get('config_email'));
                                                    $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
                                                    $mail->setSubject(html_entity_decode($email_template['email_subject'], ENT_QUOTES, 'UTF-8'));
                                                    $mail->setHtml($email_content);
                                                    $mail->send();
                                                }
                                                break;
                                            case 1:
                                                if (isset($seller_details['email']) && !empty($seller_details['email'])) {
                                                    $mail->setTo($seller_details['email']);
                                                    $mail->setFrom($this->config->get('config_email'));
                                                    $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
                                                    $mail->setSubject(html_entity_decode($email_template['email_subject'], ENT_QUOTES, 'UTF-8'));
                                                    $mail->setHtml($email_content);
                                                    $mail->send();
                                                }
                                                break;
                                            case 2:
                                                if (isset($seller_details['business_email']) && !empty($seller_details['business_email'])) {
                                                    $mail->setTo($seller_details['business_email']);
                                                    $mail->setFrom($this->config->get('config_email'));
                                                    $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
                                                    $mail->setSubject(html_entity_decode($email_template['email_subject'], ENT_QUOTES, 'UTF-8'));
                                                    $mail->setHtml($email_content);
                                                    $mail->send();
                                                }
                                                break;
                                        }
                                    }
                                }
				}
                            }
                        }
                        //Ends
			
		$this->db->query("UPDATE " . DB_PREFIX . "customer SET customer_group_id = '" . (int)$data['customer_group_id'] . "', firstname = '" . $this->db->escape($data['firstname']) . "', lastname = '" . $this->db->escape($data['lastname']) . "', email = '" . $this->db->escape($data['email']) . "', telephone = '" . $this->db->escape($data['telephone']) . "', custom_field = '" . $this->db->escape(isset($data['custom_field']) ? json_encode($data['custom_field']) : json_encode(array())) . "', newsletter = '" . (int)$data['newsletter'] . "', status = '" . (int)$data['status'] . "', safe = '" . (int)$data['safe'] . "' WHERE customer_id = '" . (int)$customer_id . "'");

		if ($data['password']) {
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET salt = '" . $this->db->escape($salt = token(9)) . "', password = '" . $this->db->escape(sha1($salt . sha1($salt . sha1($data['password'])))) . "' WHERE customer_id = '" . (int)$customer_id . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "address WHERE customer_id = '" . (int)$customer_id . "'");

		if (isset($data['address'])) {
			foreach ($data['address'] as $address) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "address SET address_id = '" . (int)$address['address_id'] . "', customer_id = '" . (int)$customer_id . "', firstname = '" . $this->db->escape($address['firstname']) . "', lastname = '" . $this->db->escape($address['lastname']) . "', company = '" . $this->db->escape($address['company']) . "', address_1 = '" . $this->db->escape($address['address_1']) . "', address_2 = '" . $this->db->escape($address['address_2']) . "', city = '" . $this->db->escape($address['city']) . "', postcode = '" . $this->db->escape($address['postcode']) . "', country_id = '" . (int)$address['country_id'] . "', zone_id = '" . (int)$address['zone_id'] . "', custom_field = '" . $this->db->escape(isset($address['custom_field']) ? json_encode($address['custom_field']) : json_encode(array())) . "'");

				if (isset($address['default'])) {
					$address_id = $this->db->getLastId();

					$this->db->query("UPDATE " . DB_PREFIX . "customer SET address_id = '" . (int)$address_id . "' WHERE customer_id = '" . (int)$customer_id . "'");
				}
			}
		}
		
		if ($data['affiliate']) {
			$this->db->query("REPLACE INTO " . DB_PREFIX . "customer_affiliate SET customer_id = '" . (int)$customer_id . "', company = '" . $this->db->escape($data['company']) . "', website = '" . $this->db->escape($data['website']) . "', tracking = '" . $this->db->escape($data['tracking']) . "', commission = '" . (float)$data['commission'] . "', tax = '" . $this->db->escape($data['tax']) . "', payment = '" . $this->db->escape($data['payment']) . "', cheque = '" . $this->db->escape($data['cheque']) . "', paypal = '" . $this->db->escape($data['paypal']) . "', bank_name = '" . $this->db->escape($data['bank_name']) . "', bank_branch_number = '" . $this->db->escape($data['bank_branch_number']) . "', bank_swift_code = '" . $this->db->escape($data['bank_swift_code']) . "', bank_account_name = '" . $this->db->escape($data['bank_account_name']) . "', bank_account_number = '" . $this->db->escape($data['bank_account_number']) . "', status = '" . (int)$data['affiliate'] . "', date_added = NOW()");
		}		
	}

	public function editToken($customer_id, $token) {
		$this->db->query("UPDATE " . DB_PREFIX . "customer SET token = '" . $this->db->escape($token) . "' WHERE customer_id = '" . (int)$customer_id . "'");
	}

	public function deleteCustomer($customer_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "customer WHERE customer_id = '" . (int)$customer_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "customer_activity WHERE customer_id = '" . (int)$customer_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "customer_affiliate WHERE customer_id = '" . (int)$customer_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "customer_approval WHERE customer_id = '" . (int)$customer_id . "'");
 		$this->db->query("DELETE FROM " . DB_PREFIX . "customer_history WHERE customer_id = '" . (int)$customer_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "customer_reward WHERE customer_id = '" . (int)$customer_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "customer_transaction WHERE customer_id = '" . (int)$customer_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "customer_ip WHERE customer_id = '" . (int)$customer_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "address WHERE customer_id = '" . (int)$customer_id . "'");
	}

	public function getCustomer($customer_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "customer WHERE customer_id = '" . (int)$customer_id . "'");

		return $query->row;
	}

	public function getCustomerByEmail($email) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "customer WHERE LCASE(email) = '" . $this->db->escape(utf8_strtolower($email)) . "'");

		return $query->row;
	}
	
	public function getCustomers($data = array()) {
		$sql = "SELECT *, CONCAT(c.firstname, ' ', c.lastname) AS name, cgd.name AS customer_group FROM " . DB_PREFIX . "customer c LEFT JOIN " . DB_PREFIX . "customer_group_description cgd ON (c.customer_group_id = cgd.customer_group_id)";
		
		if (!empty($data['filter_affiliate'])) {
			$sql .= " LEFT JOIN " . DB_PREFIX . "customer_affiliate ca ON (c.customer_id = ca.customer_id)";
		}		
		
		$sql .= " WHERE cgd.language_id = '" . (int)$this->config->get('config_language_id') . "'";
		
		$implode = array();

		if (!empty($data['filter_name'])) {
			$implode[] = "CONCAT(c.firstname, ' ', c.lastname) LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (!empty($data['filter_email'])) {
			$implode[] = "c.email LIKE '" . $this->db->escape($data['filter_email']) . "%'";
		}

		if (isset($data['filter_newsletter']) && !is_null($data['filter_newsletter'])) {
			$implode[] = "c.newsletter = '" . (int)$data['filter_newsletter'] . "'";
		}

		if (!empty($data['filter_customer_group_id'])) {
			$implode[] = "c.customer_group_id = '" . (int)$data['filter_customer_group_id'] . "'";
		}

		if (!empty($data['filter_affiliate'])) {
			$implode[] = "ca.status = '" . (int)$data['filter_affiliate'] . "'";
		}
		
		if (!empty($data['filter_ip'])) {
			$implode[] = "c.customer_id IN (SELECT customer_id FROM " . DB_PREFIX . "customer_ip WHERE ip = '" . $this->db->escape($data['filter_ip']) . "')";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$implode[] = "c.status = '" . (int)$data['filter_status'] . "'";
		}

		if (!empty($data['filter_date_added'])) {
			$implode[] = "DATE(c.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		if ($implode) {
			$sql .= " AND " . implode(" AND ", $implode);
		}

		$sort_data = array(
			'name',
			'c.email',
			'customer_group',
			'c.status',
			'c.ip',
			'c.date_added'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
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

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getAddress($address_id) {
		$address_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "address WHERE address_id = '" . (int)$address_id . "'");

		if ($address_query->num_rows) {
			$country_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "country` WHERE country_id = '" . (int)$address_query->row['country_id'] . "'");

			if ($country_query->num_rows) {
				$country = $country_query->row['name'];
				$iso_code_2 = $country_query->row['iso_code_2'];
				$iso_code_3 = $country_query->row['iso_code_3'];
				$address_format = $country_query->row['address_format'];
			} else {
				$country = '';
				$iso_code_2 = '';
				$iso_code_3 = '';
				$address_format = '';
			}

			$zone_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "zone` WHERE zone_id = '" . (int)$address_query->row['zone_id'] . "'");

			if ($zone_query->num_rows) {
				$zone = $zone_query->row['name'];
				$zone_code = $zone_query->row['code'];
			} else {
				$zone = '';
				$zone_code = '';
			}

			return array(
				'address_id'     => $address_query->row['address_id'],
				'customer_id'    => $address_query->row['customer_id'],
				'firstname'      => $address_query->row['firstname'],
				'lastname'       => $address_query->row['lastname'],
				'company'        => $address_query->row['company'],
				'address_1'      => $address_query->row['address_1'],
				'address_2'      => $address_query->row['address_2'],
				'postcode'       => $address_query->row['postcode'],
				'city'           => $address_query->row['city'],
				'zone_id'        => $address_query->row['zone_id'],
				'zone'           => $zone,
				'zone_code'      => $zone_code,
				'country_id'     => $address_query->row['country_id'],
				'country'        => $country,
				'iso_code_2'     => $iso_code_2,
				'iso_code_3'     => $iso_code_3,
				'address_format' => $address_format,
				'custom_field'   => json_decode($address_query->row['custom_field'], true)
			);
		}
	}

	public function getAddresses($customer_id) {
		$address_data = array();

		$query = $this->db->query("SELECT address_id FROM " . DB_PREFIX . "address WHERE customer_id = '" . (int)$customer_id . "'");

		foreach ($query->rows as $result) {
			$address_info = $this->getAddress($result['address_id']);

			if ($address_info) {
				$address_data[$result['address_id']] = $address_info;
			}
		}

		return $address_data;
	}

	public function getTotalCustomers($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer c";

		$implode = array();

		if (!empty($data['filter_name'])) {
			$implode[] = "CONCAT(firstname, ' ', lastname) LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (!empty($data['filter_email'])) {
			$implode[] = "email LIKE '" . $this->db->escape($data['filter_email']) . "%'";
		}

		if (isset($data['filter_newsletter']) && !is_null($data['filter_newsletter'])) {
			$implode[] = "newsletter = '" . (int)$data['filter_newsletter'] . "'";
		}

		if (!empty($data['filter_customer_group_id'])) {
			$implode[] = "customer_group_id = '" . (int)$data['filter_customer_group_id'] . "'";
		}

		if (!empty($data['filter_ip'])) {
			$implode[] = "customer_id IN (SELECT customer_id FROM " . DB_PREFIX . "customer_ip WHERE ip = '" . $this->db->escape($data['filter_ip']) . "')";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$implode[] = "status = '" . (int)$data['filter_status'] . "'";
		}

		if (!empty($data['filter_date_added'])) {
			$implode[] = "DATE(date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}
        
        public function getAffliateByTracking($tracking) {
                $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_affiliate WHERE tracking = '" . $this->db->escape($tracking) . "'");
                
                return $query->row;
        }
	
	public function getAffiliate($customer_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_affiliate WHERE customer_id = '" . (int)$customer_id . "'");

		return $query->row;
	}
	
	public function getAffiliates($data = array()) {
		$sql = "SELECT DISTINCT *, CONCAT(c.firstname, ' ', c.lastname) AS name FROM " . DB_PREFIX . "customer_affiliate ca LEFT JOIN " . DB_PREFIX . "customer c ON (ca.customer_id = c.customer_id)";
		
		$implode = array();

		if (!empty($data['filter_name'])) {
			$implode[] = "CONCAT(c.firstname, ' ', c.lastname) LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}		
		
		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}
		
		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}
						
		$query = $this->db->query($sql . "ORDER BY name");

		return $query->rows;
	}
	
	public function getTotalAffiliates($data = array()) {
		$sql = "SELECT DISTINCT COUNT(*) AS total FROM " . DB_PREFIX . "customer_affiliate ca LEFT JOIN " . DB_PREFIX . "customer c ON (ca.customer_id = c.customer_id)";
		
		$implode = array();

		if (!empty($data['filter_name'])) {
			$implode[] = "CONCAT(c.firstname, ' ', c.lastname) LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
		}		
		
		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}
		
		return $query->row['total'];
	}

	public function getTotalAddressesByCustomerId($customer_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "address WHERE customer_id = '" . (int)$customer_id . "'");

		return $query->row['total'];
	}

	public function getTotalAddressesByCountryId($country_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "address WHERE country_id = '" . (int)$country_id . "'");

		return $query->row['total'];
	}

	public function getTotalAddressesByZoneId($zone_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "address WHERE zone_id = '" . (int)$zone_id . "'");

		return $query->row['total'];
	}

	public function getTotalCustomersByCustomerGroupId($customer_group_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer WHERE customer_group_id = '" . (int)$customer_group_id . "'");

		return $query->row['total'];
	}

	public function addHistory($customer_id, $comment) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "customer_history SET customer_id = '" . (int)$customer_id . "', comment = '" . $this->db->escape(strip_tags($comment)) . "', date_added = NOW()");
	}

	public function getHistories($customer_id, $start = 0, $limit = 10) {
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 10;
		}

		$query = $this->db->query("SELECT comment, date_added FROM " . DB_PREFIX . "customer_history WHERE customer_id = '" . (int)$customer_id . "' ORDER BY date_added DESC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}

	public function getTotalHistories($customer_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer_history WHERE customer_id = '" . (int)$customer_id . "'");

		return $query->row['total'];
	}

	public function addTransaction($customer_id, $description = '', $amount = '', $order_id = 0) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "customer_transaction SET customer_id = '" . (int)$customer_id . "', order_id = '" . (int)$order_id . "', description = '" . $this->db->escape($description) . "', amount = '" . (float)$amount . "', date_added = NOW()");
	}

	public function deleteTransactionByOrderId($order_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "customer_transaction WHERE order_id = '" . (int)$order_id . "'");
	}

	public function getTransactions($customer_id, $start = 0, $limit = 10) {
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 10;
		}

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_transaction WHERE customer_id = '" . (int)$customer_id . "' ORDER BY date_added DESC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}

	public function getTotalTransactions($customer_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total  FROM " . DB_PREFIX . "customer_transaction WHERE customer_id = '" . (int)$customer_id . "'");

		return $query->row['total'];
	}

	public function getTransactionTotal($customer_id) {
		$query = $this->db->query("SELECT SUM(amount) AS total FROM " . DB_PREFIX . "customer_transaction WHERE customer_id = '" . (int)$customer_id . "'");

		return $query->row['total'];
	}

	public function getTotalTransactionsByOrderId($order_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer_transaction WHERE order_id = '" . (int)$order_id . "'");

		return $query->row['total'];
	}

	public function addReward($customer_id, $description = '', $points = '', $order_id = 0) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "customer_reward SET customer_id = '" . (int)$customer_id . "', order_id = '" . (int)$order_id . "', points = '" . (int)$points . "', description = '" . $this->db->escape($description) . "', date_added = NOW()");
	}

	public function deleteReward($order_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "customer_reward WHERE order_id = '" . (int)$order_id . "' AND points > 0");
	}

	public function getRewards($customer_id, $start = 0, $limit = 10) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_reward WHERE customer_id = '" . (int)$customer_id . "' ORDER BY date_added DESC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}

	public function getTotalRewards($customer_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer_reward WHERE customer_id = '" . (int)$customer_id . "'");

		return $query->row['total'];
	}

	public function getRewardTotal($customer_id) {
		$query = $this->db->query("SELECT SUM(points) AS total FROM " . DB_PREFIX . "customer_reward WHERE customer_id = '" . (int)$customer_id . "'");

		return $query->row['total'];
	}

	public function getTotalCustomerRewardsByOrderId($order_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer_reward WHERE order_id = '" . (int)$order_id . "' AND points > 0");

		return $query->row['total'];
	}

	public function getIps($customer_id, $start = 0, $limit = 10) {
		if ($start < 0) {
			$start = 0;
		}
		if ($limit < 1) {
			$limit = 10;
		}

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_ip WHERE customer_id = '" . (int)$customer_id . "' ORDER BY date_added DESC LIMIT " . (int)$start . "," . (int)$limit);
		
		return $query->rows;
	}

	public function getTotalIps($customer_id) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer_ip WHERE customer_id = '" . (int)$customer_id . "'");

		return $query->row['total'];
	}

	public function getTotalCustomersByIp($ip) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer_ip WHERE ip = '" . $this->db->escape($ip) . "'");

		return $query->row['total'];
	}

	public function getTotalLoginAttempts($email) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer_login` WHERE `email` = '" . $this->db->escape($email) . "'");

		return $query->row;
	}

	public function deleteLoginAttempts($email) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "customer_login` WHERE `email` = '" . $this->db->escape($email) . "'");
	}
  
    public function disapproveCustomer($customer_id) {
        $this->db->query("UPDATE " . DB_PREFIX . "customer SET status = '0' WHERE customer_id = '" . (int)$customer_id . "'");
    }
  
    public function approveCustomer($customer_id) {
        $this->db->query("UPDATE " . DB_PREFIX . "customer SET status = '1' WHERE customer_id = '" . (int)$customer_id . "'");
    }
}
