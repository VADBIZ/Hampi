<?php

class ControllerKbmpMarketplacesellersList extends Controller {

    private $error = array();
    private $session_token_key = 'token';
    private $session_token = '';
    private $module_path = '';

    public function __construct($params) {

        parent::__construct($params);
        $this->document->addScript('view/javascript/kbmp_marketplace/validation/velovalidation.js');
        $this->document->addScript('view/javascript/kbmp_marketplace/validation/marketplace-validation.js');
        $this->document->addScript('view/javascript/kbmp_marketplace/jquery.mousewheel.js');
        $this->document->addScript('view/javascript/kbmp_marketplace/jquery.scrolltabs.js');
        $this->document->addScript('view/javascript/summernote/summernote.js');
        $this->document->addScript('view/javascript/summernote/opencart.js');
        $this->document->addScript('view/javascript/kbmp_marketplace/bootstrap-tagsinput.js');

        $this->document->addStyle('view/javascript/summernote/summernote.css');
        $this->document->addStyle('view/stylesheet/kbmp_marketplace/bootstrap-tagsinput.css');
        $this->document->addStyle('view/stylesheet/kbmp_marketplace/scrolltabs.css');
        if (VERSION >= 3.0) {
            $this->session_token_key = 'user_token';
            $this->session_token = $this->session->data['user_token'];
        } else {
            $this->session_token_key = 'token';
            $this->session_token = $this->session->data['token'];
        }
        if (VERSION <= 2.2) {
            $this->module_path = 'module';
        } else {
            $this->module_path = 'extension/module';
        }
    }

	//функция отправки письма продавцу из админки
	public function sendWelcomeEmailToSeller($email = "",$fio = "",$password = "") {
		$this->load->model('setting/kbmp_marketplace');
		$email_template = $this->model_kbmp_marketplace_kbmp_marketplace->getEmailTemplate(1)[0];
		if (isset($email_template) && !empty($email_template)) {
			$message = str_replace("{{email}}", $email, $email_template['email_content']); //Seller Email
			$message = str_replace("{{full_name}}", $fio , $message); //Seller Full Name
			$message = str_replace("{{password}}", $password , $message); //Пароль
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
			$mail->setTo($email);
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode($email_template['email_subject'], ENT_QUOTES, 'UTF-8'));
			$mail->setHtml($email_content);
			$mail->send();
		}
	}
	
	//функция отправки письма всем модераторам на почту
	public function sendNewSellerToModerator($email = "",$login = "",$password = "",$linkToEdit = "") {
		$this->load->model('setting/kbmp_marketplace');
		$email_template = $this->model_kbmp_marketplace_kbmp_marketplace->getEmailTemplate(29)[0];
		if (isset($email_template) && !empty($email_template)) {
			$message = str_replace("{{login}}", $login, $email_template['email_content']); //Seller login
			$message = str_replace("{{linkToEdit}}", $linkToEdit, $message); //Seller edit
			$message = str_replace("{{password}}", $password, $message); //Seller edit
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
			$mail->setTo($email);
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode($email_template['email_subject'], ENT_QUOTES, 'UTF-8'));
			$mail->setHtml($email_content);
			$mail->send();
		}
	}
	
	public function add() {

		$this->load->language('kbmp_marketplace/sellers_list');
		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('customer/customer');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_customer_customer->addCustomer($this->request->post);
			
			 if($this->request->post['seller'] == 1) {
                        $customer_address_details = array();
                        $this->load->model('kbmp_marketplace/kbmp_marketplace');
                        $this->load->model('setting/setting');
                        $customer_id = $this->model_kbmp_marketplace_kbmp_marketplace->get_customer_id();
                        $store_id = (int) $this->config->get('config_store_id');
                        $settings = $this->model_setting_setting->getSetting('kbmp_marketplace', $store_id);
                        $this->model_kbmp_marketplace_kbmp_marketplace->addSeller($customer_id, $customer_address_details, $settings, $store_id);
				 
				 	$seller_fields = $this->request->post['seller_field'];
					$edit_data['customer_id'] = $customer_id;
					$edit_data['fields'] = $seller_fields;
					$edit_data['seller_id'] = $this->model_kbmp_marketplace_customer_fields->get_SellerID($customer_id);
					$this->model_kbmp_marketplace_customer_fields->setseller_field_values($edit_data);
				 
				 $sendEmail = array (
				 	'email' => $this->request->post['email'],
				 	'fio' => $this->request->post['lastname'] . " " . $this->request->post['firstname'] . " " . $this->request->post['secondname'],
				 	'password' => $this->request->post['password']
				 );
				 
				 $this->sendWelcomeEmailToSeller($sendEmail['email'],$sendEmail['fio'],$sendEmail['password']);
					 
				$this->load->model('user/user_group');
				$this->load->model('customer/customer');
				$moderators[] = $this->model_user_user_group->getUsersByGroup(20);
				$moderators[] = $this->model_user_user_group->getUsersByGroup(19);
				$moderators[] = $this->model_user_user_group->getUsersByGroup(18);
				$moderators[] = $this->model_user_user_group->getUsersByGroup(17);
				$moderators[] = $this->model_user_user_group->getUsersByGroup(15);

				$Moderators = array();

				$login = $this->request->post['email'];
				$password = $this->request->post['password'];
				$linkToEdit = $this->url->link('kbmp_marketplace/sellers_list/edit', $this->session_token_key . '=' . $this->session_token . '&customer_id=' . $customer_id . '&redirect=sellers_list', true);

				foreach($moderators as $moderator) {
					foreach($moderator as $moder) {
						$email = $moder['email'];
						$name = $moder['lastname'] . " " . $moder['firstname'];
						$this->sendNewSellerToModerator($email,$login,$password,$linkToEdit);
					}
				}
				 
                    }

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_email'])) {
				$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_customer_group_id'])) {
				$url .= '&filter_customer_group_id=' . $this->request->get['filter_customer_group_id'];
			}

			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}

			if (isset($this->request->get['filter_ip'])) {
				$url .= '&filter_ip=' . $this->request->get['filter_ip'];
			}

			if (isset($this->request->get['filter_date_added'])) {
				$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('kbmp_marketplace/sellers_list', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}
	
	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['customer_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->request->get['customer_id'])) {
			$data['customer_id'] = (int)$this->request->get['customer_id'];
		} else {
			$data['customer_id'] = 0;
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['firstname'])) {
			$data['error_firstname'] = $this->error['firstname'];
		} else {
			$data['error_firstname'] = '';
		}

		if (isset($this->error['lastname'])) {
			$data['error_lastname'] = $this->error['lastname'];
		} else {
			$data['error_lastname'] = '';
		}
		
		if (isset($this->error['secondname'])) {
			$data['error_secondname'] = $this->error['secondname'];
		} else {
			$data['error_secondname'] = '';
		}

		if (isset($this->error['email'])) {
			$data['error_email'] = $this->error['email'];
		} else {
			$data['error_email'] = '';
		}

		if (isset($this->error['telephone'])) {
			$data['error_telephone'] = $this->error['telephone'];
		} else {
			$data['error_telephone'] = '';
		}

		if (isset($this->error['tracking'])) {
			$data['error_tracking'] = $this->error['tracking'];
		} else {
			$data['error_tracking'] = '';
		}

		if (isset($this->error['cheque'])) {
			$data['error_cheque'] = $this->error['cheque'];
		} else {
			$data['error_cheque'] = '';
		}

		if (isset($this->error['paypal'])) {
			$data['error_paypal'] = $this->error['paypal'];
		} else {
			$data['error_paypal'] = '';
		}

		if (isset($this->error['bank_account_name'])) {
			$data['error_bank_account_name'] = $this->error['bank_account_name'];
		} else {
			$data['error_bank_account_name'] = '';
		}

		if (isset($this->error['bank_account_number'])) {
			$data['error_bank_account_number'] = $this->error['bank_account_number'];
		} else {
			$data['error_bank_account_number'] = '';
		}

		if (isset($this->error['password'])) {
			$data['error_password'] = $this->error['password'];
		} else {
			$data['error_password'] = '';
		}

		if (isset($this->error['confirm'])) {
			$data['error_confirm'] = $this->error['confirm'];
		} else {
			$data['error_confirm'] = '';
		}

		if (isset($this->error['custom_field'])) {
			$data['error_custom_field'] = $this->error['custom_field'];
		} else {
			$data['error_custom_field'] = array();
		}
		
		if (isset($this->error['error_seller_field'])) {
			$data['error_seller_field'] = $this->error['error_seller_field'];
		} else {
			$data['error_seller_field'] = array();
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_customer_group_id'])) {
			$url .= '&filter_customer_group_id=' . $this->request->get['filter_customer_group_id'];
		}

		if (isset($this->request->get['filter_status'])) {
			$url .= '&filter_status=' . $this->request->get['filter_status'];
		}

		if (isset($this->request->get['filter_ip'])) {
			$url .= '&filter_ip=' . $this->request->get['filter_ip'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('kbmp_marketplace/sellers_list', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		if (!isset($this->request->get['customer_id'])) {
			$data['action'] = $this->url->link('kbmp_marketplace/sellers_list/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('kbmp_marketplace/sellers_list/edit', 'user_token=' . $this->session->data['user_token'] . '&customer_id=' . $this->request->get['customer_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('kbmp_marketplace/sellers_list', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['customer_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$customer_info = $this->model_customer_customer->getCustomer($this->request->get['customer_id']);
		}

		$this->load->model('customer/customer_group');

		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

		if (isset($this->request->post['customer_group_id'])) {
			$data['customer_group_id'] = $this->request->post['customer_group_id'];
		} elseif (!empty($customer_info)) {
			$data['customer_group_id'] = $customer_info['customer_group_id'];
		} else {
			$data['customer_group_id'] = $this->config->get('config_customer_group_id');
		}

		if (isset($this->request->post['firstname'])) {
			$data['firstname'] = $this->request->post['firstname'];
		} elseif (!empty($customer_info)) {
			$data['firstname'] = $customer_info['firstname'];
		} else {
			$data['firstname'] = '';
		}

		if (isset($this->request->post['lastname'])) {
			$data['lastname'] = $this->request->post['lastname'];
		} elseif (!empty($customer_info)) {
			$data['lastname'] = $customer_info['lastname'];
		} else {
			$data['lastname'] = '';
		}
		
		if (isset($this->request->post['secondname'])) {
			$data['secondname'] = $this->request->post['secondname'];
		} elseif (!empty($customer_info)) {
			$data['secondname'] = $customer_info['secondname'];
		} else {
			$data['secondname'] = '';
		}

		if (isset($this->request->post['email'])) {
			$data['email'] = $this->request->post['email'];
		} elseif (!empty($customer_info)) {
			$data['email'] = $customer_info['email'];
		} else {
			$data['email'] = '';
		}

		if (isset($this->request->post['telephone'])) {
			$data['telephone'] = $this->request->post['telephone'];
		} elseif (!empty($customer_info)) {
			$data['telephone'] = $customer_info['telephone'];
		} else {
			$data['telephone'] = '';
		}

		// Custom Fields
		$this->load->model('customer/custom_field');

		$data['custom_fields'] = array();

		$filter_data = array(
			'sort'  => 'cf.sort_order',
			'order' => 'ASC'
		);

		$custom_fields = $this->model_customer_custom_field->getCustomFields($filter_data);

		foreach ($custom_fields as $custom_field) {
			$data['custom_fields'][] = array(
				'custom_field_id'    => $custom_field['custom_field_id'],
				'custom_field_value' => $this->model_customer_custom_field->getCustomFieldValues($custom_field['custom_field_id']),
				'name'               => $custom_field['name'],
				'value'              => $custom_field['value'],
				'type'               => $custom_field['type'],
				'location'           => $custom_field['location'],
				'sort_order'         => $custom_field['sort_order']
			);
		}

		if (isset($this->request->post['custom_field'])) {
			$data['account_custom_field'] = $this->request->post['custom_field'];
		} elseif (!empty($customer_info)) {
			$data['account_custom_field'] = json_decode($customer_info['custom_field'], true);
		} else {
			$data['account_custom_field'] = array();
		}

		if (isset($this->request->post['newsletter'])) {
			$data['newsletter'] = $this->request->post['newsletter'];
		} elseif (!empty($customer_info)) {
			$data['newsletter'] = $customer_info['newsletter'];
		} else {
			$data['newsletter'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($customer_info)) {
			$data['status'] = $customer_info['status'];
		} else {
			$data['status'] = true;
		}

		if (isset($this->request->post['safe'])) {
			$data['safe'] = $this->request->post['safe'];
		} elseif (!empty($customer_info)) {
			$data['safe'] = $customer_info['safe'];
		} else {
			$data['safe'] = 0;
		}

		if (isset($this->request->post['password'])) {
			$data['password'] = $this->request->post['password'];
		} else {
			$data['password'] = '';
		}

		if (isset($this->request->post['confirm'])) {
			$data['confirm'] = $this->request->post['confirm'];
		} else {
			$data['confirm'] = '';
		}

		$this->load->model('localisation/country');

		$data['countries'] = $this->model_localisation_country->getCountries();

		if (isset($this->request->post['address'])) {
			$data['addresses'] = $this->request->post['address'];
		} elseif (isset($this->request->get['customer_id'])) {
			$data['addresses'] = $this->model_customer_customer->getAddresses($this->request->get['customer_id']);
		} else {
			$data['addresses'] = array();
		}

		if (isset($this->request->post['address_id'])) {
			$data['address_id'] = $this->request->post['address_id'];
		} elseif (!empty($customer_info)) {
			$data['address_id'] = $customer_info['address_id'];
		} else {
			$data['address_id'] = '';
		}

		if (isset($this->request->post['company'])) {
			$data['company'] = $this->request->post['company'];
		} elseif (!empty($affiliate_info)) {
			$data['company'] = $affiliate_info['company'];
		} else {
			$data['company'] = '';
		}

		if (isset($this->request->post['website'])) {
			$data['website'] = $this->request->post['website'];
		} elseif (!empty($affiliate_info)) {
			$data['website'] = $affiliate_info['website'];
		} else {
			$data['website'] = '';
		}

		if (isset($this->request->post['tracking'])) {
			$data['tracking'] = $this->request->post['tracking'];
		} elseif (!empty($affiliate_info)) {
			$data['tracking'] = $affiliate_info['tracking'];
		} else {
			$data['tracking'] = '';
		}

		if (isset($this->request->post['commission'])) {
			$data['commission'] = $this->request->post['commission'];
		} elseif (!empty($affiliate_info)) {
			$data['commission'] = $affiliate_info['commission'];
		} else {
			$data['commission'] = $this->config->get('config_affiliate_commission');
		}

		if (isset($this->request->post['tax'])) {
			$data['tax'] = $this->request->post['tax'];
		} elseif (!empty($affiliate_info)) {
			$data['tax'] = $affiliate_info['tax'];
		} else {
			$data['tax'] = '';
		}

		if (isset($this->request->post['payment'])) {
			$data['payment'] = $this->request->post['payment'];
		} elseif (!empty($affiliate_info)) {
			$data['payment'] = $affiliate_info['payment'];
		} else {
			$data['payment'] = 'cheque';
		}

		if (isset($this->request->post['cheque'])) {
			$data['cheque'] = $this->request->post['cheque'];
		} elseif (!empty($affiliate_info)) {
			$data['cheque'] = $affiliate_info['cheque'];
		} else {
			$data['cheque'] = '';
		}

		if (isset($this->request->post['paypal'])) {
			$data['paypal'] = $this->request->post['paypal'];
		} elseif (!empty($affiliate_info)) {
			$data['paypal'] = $affiliate_info['paypal'];
		} else {
			$data['paypal'] = '';
		}

		if (isset($this->request->post['bank_name'])) {
			$data['bank_name'] = $this->request->post['bank_name'];
		} elseif (!empty($affiliate_info)) {
			$data['bank_name'] = $affiliate_info['bank_name'];
		} else {
			$data['bank_name'] = '';
		}

		if (isset($this->request->post['bank_branch_number'])) {
			$data['bank_branch_number'] = $this->request->post['bank_branch_number'];
		} elseif (!empty($affiliate_info)) {
			$data['bank_branch_number'] = $affiliate_info['bank_branch_number'];
		} else {
			$data['bank_branch_number'] = '';
		}

		if (isset($this->request->post['bank_swift_code'])) {
			$data['bank_swift_code'] = $this->request->post['bank_swift_code'];
		} elseif (!empty($affiliate_info)) {
			$data['bank_swift_code'] = $affiliate_info['bank_swift_code'];
		} else {
			$data['bank_swift_code'] = '';
		}

		if (isset($this->request->post['bank_account_name'])) {
			$data['bank_account_name'] = $this->request->post['bank_account_name'];
		} elseif (!empty($affiliate_info)) {
			$data['bank_account_name'] = $affiliate_info['bank_account_name'];
		} else {
			$data['bank_account_name'] = '';
		}

		if (isset($this->request->post['bank_account_number'])) {
			$data['bank_account_number'] = $this->request->post['bank_account_number'];
		} elseif (!empty($affiliate_info)) {
			$data['bank_account_number'] = $affiliate_info['bank_account_number'];
		} else {
			$data['bank_account_number'] = '';
		}

		if (isset($this->request->post['custom_field'])) {
			$data['affiliate_custom_field'] = $this->request->post['custom_field'];
		} elseif (!empty($affiliate_info)) {
			$data['affiliate_custom_field'] = json_decode($affiliate_info['custom_field'], true);
		} else {
			$data['affiliate_custom_field'] = array();
		}
		
		//добавляем поля продавца
		
			$this->load->model('kbmp_marketplace/sellers_profile_custom_fields');
			$this->load->model('kbmp_marketplace/customer_fields');

			$lang_id = 0;
			$get_language_details = $this->model_kbmp_marketplace_sellers_profile_custom_fields->getLanguage();
			if (!empty($get_language_details)) {
				foreach ($get_language_details as $key => $value) {
					$lang_id = $value['language_id'];
					break;
				}
			}
			$customer_field_data['lang_id'] = $lang_id;

			$sellers_get_fields = $this->model_kbmp_marketplace_customer_fields->getcustom_fields($customer_field_data);
			
			foreach($sellers_get_fields as $sellers_get_field) {
				if ($sellers_get_field["type"] == "select") {
					$id_field = $sellers_get_field["id_field"];
					$select_value = $this->model_kbmp_marketplace_sellers_profile_custom_fields->get_custom_fields_lang_data($id_field)[0]["value"];
					$select_value_default = $this->model_kbmp_marketplace_sellers_profile_custom_fields->get_custom_fields_lang_data($id_field)[0]["default_value"];
					$select_value = explode("<br>",str_replace(PHP_EOL, '<br>', $select_value));
					$i=0;
					foreach($select_value as $sval) {
						$sval = explode(" | ", $sval);
						$sellers_get_fields[$id_field - 1]['custom_field_value'][$i]["name"] = $sval[1];
						$sellers_get_fields[$id_field - 1]['custom_field_value'][$i]["value"] = $sval[0];
						if ($select_value_default == $sval[0])
							$sellers_get_fields[$id_field - 1]['custom_field_value'][$i]["default"] = 1;
						else
							$sellers_get_fields[$id_field - 1]['custom_field_value'][$i]["default"] = 0;
						$i++;
					}
				}
			}

			$data['sellers_fields'] = $sellers_get_fields;
		
		if (isset($this->request->get['customer_id'])) {
			$field_data = array (
				'customer_id' => (int)$this->request->get['customer_id']
			);
			$seller_fields = $this->model_kbmp_marketplace_customer_fields->getseller_field($field_data);
			$data['seller_field'] = $seller_fields;
		} else {
			
			if (isset($this->request->post['seller_field'])) {
				$data['seller_field'] = $this->request->post['seller_field'];
			} else {
				$data['seller_field'] = array();
			}
		}
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('kbmp_marketplace/seller_form', $data));
	}
	
	public function edit() {
		
		$this->load->language('kbmp_marketplace/sellers_list');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('customer/customer');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_customer_customer->editCustomer($this->request->get['customer_id'], $this->request->post);
			
			$customer_id = $this->request->get['customer_id'];
			$seller_fields = $this->request->post['seller_field'];
			$edit_data['customer_id'] = $customer_id;
			$edit_data['fields'] = $seller_fields;
			$edit_data['seller_id'] = $this->model_kbmp_marketplace_customer_fields->get_SellerID($customer_id);
			$this->model_kbmp_marketplace_customer_fields->setseller_field_values($edit_data);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_email'])) {
				$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_customer_group_id'])) {
				$url .= '&filter_customer_group_id=' . $this->request->get['filter_customer_group_id'];
			}

			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}

			if (isset($this->request->get['filter_ip'])) {
				$url .= '&filter_ip=' . $this->request->get['filter_ip'];
			}

			if (isset($this->request->get['filter_date_added'])) {
				$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('kbmp_marketplace/sellers_list', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}
	
    // Index function to display default page of controller
    public function index() {
        $this->load->language($this->module_path . '/kbmp_marketplace');
        $this->load->language('kbmp_marketplace/sellers_list');

        $this->document->setTitle($this->language->get('heading_title_main'));

        $this->load->model('localisation/country');

        $this->load->model('kbmp_marketplace/kbmp_marketplace');

        $this->getList();
    }

    // Function definition to get Sellers List
    protected function getList() {
		
        //Set Error Message to display
        if (isset($this->session->data['error'])) {
            $data['error'] = $this->session->data['error'];
            unset($this->session->data['error']);
        } else {
            $data['error'] = '';
        }
        
        //Set Success Message to display
        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }
        
        if (isset($this->request->get['filter_firstname'])) {
            $filter_firstname = $this->request->get['filter_firstname'];
        } else {
            $filter_firstname = null;
        }

        if (isset($this->request->get['filter_lastname'])) {
            $filter_lastname = $this->request->get['filter_lastname'];
        } else {
            $filter_lastname = null;
        }

        if (isset($this->request->get['filter_email'])) {
            $filter_email = $this->request->get['filter_email'];
        } else {
            $filter_email = null;
        }

        if (isset($this->request->get['filter_shop'])) {
            $filter_shop = $this->request->get['filter_shop'];
        } else {
            $filter_shop = null;
        }

        if (isset($this->request->get['filter_state'])) {
            $filter_state = $this->request->get['filter_state'];
        } else {
            $filter_state = null;
        }

        if (isset($this->request->get['filter_country'])) {
            $filter_country = $this->request->get['filter_country'];
        } else {
            $filter_country = null;
        }

        if (isset($this->request->get['filter_status'])) {
            $filter_status = $this->request->get['filter_status'];
        } else {
            $filter_status = null;
        }

        if (isset($this->request->get['filter_from_date'])) {
            $filter_from_date = $this->request->get['filter_from_date'];
        } else {
            $filter_from_date = null;
        }

        if (isset($this->request->get['filter_to_date'])) {
            $filter_to_date = $this->request->get['filter_to_date'];
        } else {
            $filter_to_date = null;
        }

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'ks.date_added';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'DESC';
        }

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        $url = '';

        if (isset($this->request->get['filter_firstname'])) {
            $url .= '&filter_firstname=' . urlencode(html_entity_decode($this->request->get['filter_firstname'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_lastname'])) {
            $url .= '&filter_lastname=' . urlencode(html_entity_decode($this->request->get['filter_lastname'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_email'])) {
            $url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_shop'])) {
            $url .= '&filter_shop=' . urlencode(html_entity_decode($this->request->get['filter_shop'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_state'])) {
            $url .= '&filter_state=' . urlencode(html_entity_decode($this->request->get['filter_state'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_country'])) {
            $url .= '&filter_country=' . urlencode(html_entity_decode($this->request->get['filter_country'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_status'])) {
            $url .= '&filter_status=' . urlencode(html_entity_decode($this->request->get['filter_status'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_from_date'])) {
            $url .= '&filter_from_date=' . urlencode(html_entity_decode($this->request->get['filter_from_date'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_to_date'])) {
            $url .= '&filter_to_date=' . urlencode(html_entity_decode($this->request->get['filter_to_date'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $countries = $this->model_localisation_country->getCountries();
        $data['countries'] = $countries;

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_knowband_marketplace'),
            'href' => $this->url->link('extension/module/kbmp_marketplace', $this->session_token_key . '=' . $this->session_token, true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key . '=' . $this->session_token . $url, true)
        );
		
		$data['seller_add'] = $this->url->link('kbmp_marketplace/sellers_list/add', $this->session_token_key . '=' . $this->session_token . $url, true);

        $data['sellers'] = array();

        $filter_data = array(
            'filter_firstname' => trim($filter_firstname),
            'filter_lastname' => trim($filter_lastname),
            'filter_email' => trim($filter_email),
            'filter_shop' => trim($filter_shop),
            'filter_state' => trim($filter_state),
            'filter_country' => trim($filter_country),
            'filter_status' => trim($filter_status),
            'filter_from_date' => trim($filter_from_date),
            'filter_to_date' => trim($filter_to_date),
            'sort' => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        );

        $data['filter_data'] = $filter_data;

        $sellers_total = $this->model_kbmp_marketplace_kbmp_marketplace->getTotalSellers($filter_data);

        $data['sellers_total'] = $sellers_total;

        $results = $this->model_kbmp_marketplace_kbmp_marketplace->getSellers($filter_data);
		
		
		
        foreach ($results as $result) {
			
			$customer_id = $result['customer_id'];
			$this->load->model('kbmp_marketplace/sellers_profile_custom_fields');
			$fields = $this->model_kbmp_marketplace_sellers_profile_custom_fields->get_custom_field_seller($customer_id, $this->config->get('config_store_id'), $this->config->get('config_language_id'));
			
			$seller_companyname = "";
			$seller_status = "";
			foreach ($fields as $field) {
//				echo "<pre>";
//					var_dump($field['seller_value']);
//				echo "</pre>";
				if ($field["field_name"] == "field_urname") {
					$seller_companyname = $field['seller_value'];
				}
				if (($field["field_name"] == "field_7")) {
					if ($field['seller_value'] == "") {
						$seller_status = "Нет данных";	
					} else {
						$seller_status = $this->getStatus($field['seller_value']);
					}
				}
			}
			
			if ($seller_companyname == "") {
				$seller_companyname = $this->language->get('column_companyname_empty');
			}
			
            $data['sellers'][] = array(
                'seller_id' => $result['seller_id'],
                'customer_id' => $result['customer_id'],
                'firstname' => $result['firstname'],
                'lastname' => $result['lastname'],
                'secondname' => $result['secondname'],
				'fio' => $result['fio'],
                'lastname' => $result['lastname'],
                'secondname' => $result['secondname'],
                'email' => $result['email'],
				'companyname' => $seller_companyname,
                'status' => $result['active'],
                'statusmain' => $seller_status,
                'date_added' => date($this->language->get('datetime_format'), strtotime($result['date_added'])),
                'disable' => $this->url->link('kbmp_marketplace/sellers_list/disable', $this->session_token_key . '=' . $this->session_token . '&customer_id=' . $result['customer_id'], true),
                'activate' => $this->url->link('kbmp_marketplace/sellers_list/activate', $this->session_token_key . '=' . $this->session_token . '&customer_id=' . $result['customer_id'], true),
                'edit' => $this->url->link('kbmp_marketplace/sellers_list/edit', $this->session_token_key . '=' . $this->session_token . '&customer_id=' . $result['customer_id'] . '&redirect=sellers_list', true)
            );
        }

        $data['heading_title'] = $this->language->get('heading_title');

        //Menu Options Text
        $data['text_settings'] = $this->language->get('text_settings');
        $data['text_support'] = $this->language->get('text_support');
        $data['text_sellers_list'] = $this->language->get('text_sellers_list');
        $data['text_custom_fields'] = $this->language->get('text_custom_fields');
        $data['text_seller_account_approval_list'] = $this->language->get('text_seller_account_approval_list');
        $data['text_product_approval_list'] = $this->language->get('text_product_approval_list');
        $data['text_seller_products'] = $this->language->get('text_seller_products');
        $data['text_seller_orders'] = $this->language->get('text_seller_orders');
        $data['text_admin_orders'] = $this->language->get('text_admin_orders');
        $data['text_product_reviews'] = $this->language->get('text_product_reviews');
        $data['text_reviews_approval_list'] = $this->language->get('text_reviews_approval_list');
        $data['text_seller_reviews'] = $this->language->get('text_seller_reviews');
        $data['text_seller_category_request_list'] = $this->language->get('text_seller_category_request_list');
        $data['text_seller_shippings'] = $this->language->get('text_seller_shippings');
        $data['text_admin_commissions'] = $this->language->get('text_admin_commissions');
        $data['text_seller_transactions'] = $this->language->get('text_seller_transactions');
        $data['text_seller_payout_request'] = $this->language->get('text_seller_payout_request');
        $data['text_paypal_payout'] = $this->language->get('text_paypal_payout');
        $data['text_email_templates'] = $this->language->get('text_email_templates');
        $data['text_seller_catgory_commision'] = $this->language->get('text_seller_catgory_commision');
        $data['text_seller_info'] = $this->language->get('text_seller_info');

        $data['token'] = $this->session_token;

        $data['text_no_results'] = $this->language->get('text_no_results');
        $data['text_from_date'] = $this->language->get('text_from_date');
        $data['text_to_date'] = $this->language->get('text_to_date');
        $data['text_view'] = $this->language->get('text_view');
        $data['text_edit'] = $this->language->get('text_edit');
        $data['text_filter'] = $this->language->get('text_filter');
        $data['text_reset'] = $this->language->get('text_reset');
        $data['text_active'] = $this->language->get('text_active');
        $data['text_inactive'] = $this->language->get('text_inactive');

        $data['column_firstname'] = $this->language->get('column_firstname');
        $data['column_lastname'] = $this->language->get('column_lastname');
        $data['column_fio'] = $this->language->get('column_fio');
        $data['column_email'] = $this->language->get('column_email');
        $data['column_shop'] = $this->language->get('column_shop');
        $data['column_state'] = $this->language->get('column_state');
        $data['column_country'] = $this->language->get('column_country');
        $data['column_status'] = $this->language->get('column_status');
        $data['column_seller_since'] = $this->language->get('column_seller_since');

        $url = '';

        if (isset($this->request->get['filter_firstname'])) {
            $url .= '&filter_firstname=' . urlencode(html_entity_decode($this->request->get['filter_firstname'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_lastname'])) {
            $url .= '&filter_lastname=' . urlencode(html_entity_decode($this->request->get['filter_lastname'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_email'])) {
            $url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_shop'])) {
            $url .= '&filter_shop=' . urlencode(html_entity_decode($this->request->get['filter_shop'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_state'])) {
            $url .= '&filter_state=' . urlencode(html_entity_decode($this->request->get['filter_state'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_country'])) {
            $url .= '&filter_country=' . urlencode(html_entity_decode($this->request->get['filter_country'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_status'])) {
            $url .= '&filter_status=' . urlencode(html_entity_decode($this->request->get['filter_status'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_from_date'])) {
            $url .= '&filter_from_date=' . urlencode(html_entity_decode($this->request->get['filter_from_date'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_to_date'])) {
            $url .= '&filter_to_date=' . urlencode(html_entity_decode($this->request->get['filter_to_date'], ENT_QUOTES, 'UTF-8'));
        }

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_firstname'] = $this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key . '=' . $this->session_token . '&sort=c.firstname' . $url, true);
        $data['sort_fio'] = $this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key . '=' . $this->session_token . '&sort=c.name' . $url, true);
        $data['sort_companyname'] = $this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key . '=' . $this->session_token . '&sort=companyname' . $url, true);
        $data['sort_statusmain'] = $this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key . '=' . $this->session_token . '&sort=statusmain' . $url, true);
        $data['sort_lastname'] = $this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key . '=' . $this->session_token . '&sort=c.lastname' . $url, true);
        $data['sort_email'] = $this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key . '=' . $this->session_token . '&sort=c.email' . $url, true);
        $data['sort_shop'] = $this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key . '=' . $this->session_token . '&sort=ksd.title' . $url, true);
        $data['sort_state'] = $this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key . '=' . $this->session_token . '&sort=ks.state' . $url, true);
        $data['sort_country'] = $this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key . '=' . $this->session_token . '&sort=ct.name' . $url, true);
        $data['sort_status'] = $this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key . '=' . $this->session_token . '&sort=ks.active' . $url, true);
        $data['sort_seller_since'] = $this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key . '=' . $this->session_token . '&sort=ks.date_added' . $url, true);

        $url = '';

        if (isset($this->request->get['filter_firstname'])) {
            $url .= '&filter_firstname=' . urlencode(html_entity_decode($this->request->get['filter_firstname'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_lastname'])) {
            $url .= '&filter_lastname=' . urlencode(html_entity_decode($this->request->get['filter_lastname'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_email'])) {
            $url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_shop'])) {
            $url .= '&filter_shop=' . urlencode(html_entity_decode($this->request->get['filter_shop'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_state'])) {
            $url .= '&filter_state=' . urlencode(html_entity_decode($this->request->get['filter_state'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_country'])) {
            $url .= '&filter_country=' . urlencode(html_entity_decode($this->request->get['filter_country'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_status'])) {
            $url .= '&filter_status=' . urlencode(html_entity_decode($this->request->get['filter_status'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_from_date'])) {
            $url .= '&filter_from_date=' . urlencode(html_entity_decode($this->request->get['filter_from_date'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_to_date'])) {
            $url .= '&filter_to_date=' . urlencode(html_entity_decode($this->request->get['filter_to_date'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $sellers_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key . '=' . $this->session_token . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($sellers_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($sellers_total - $this->config->get('config_limit_admin'))) ? $sellers_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $sellers_total, ceil($sellers_total / $this->config->get('config_limit_admin')));

        $data['sort'] = $sort;
        $data['order'] = $order;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $active_tab['active_tab'] = 11;
        $data['tab_common'] = $this->load->controller($this->module_path . '/kbmp_marketplace/common', $active_tab);

		$data['delete'] = $this->url->link('kbmp_marketplace/sellers_list/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);
		
        $this->load->language('kbmp_marketplace/sellers_profile_custom_fields');
        $data['text_custom_fields'] = $this->language->get('text_custom_fields');
        if (VERSION < 2.2) {
            $this->response->setOutput($this->load->view('kbmp_marketplace/sellers_list.tpl', $data));
        } else {
            $this->response->setOutput($this->load->view('kbmp_marketplace/sellers_list', $data));
        }
    }

    public function disable() {
        $this->load->model('kbmp_marketplace/kbmp_marketplace');
        $this->load->language('kbmp_marketplace/sellers_list');        
        
        if (!empty($this->request->get['customer_id'])) {
            $seller_info = $this->model_kbmp_marketplace_kbmp_marketplace->getSellerByCustomerId($this->request->get['customer_id']);
            if(!empty($seller_info)) {
                $this->model_kbmp_marketplace_kbmp_marketplace->disableSeller($seller_info['seller_id']);
                $this->session->data['success'] = $this->language->get('text_disable_success');
                $this->response->redirect($this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key.'=' . $this->session_token, true));
            } else {
                $this->session->data['error'] = $this->language->get('text_error_occurred');
                $this->response->redirect($this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key.'=' . $this->session_token, true));
            }
        } else {
            $this->session->data['error'] = $this->language->get('text_error_occurred');
            $this->response->redirect($this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key.'=' . $this->session_token, true));
        }
    }
    
    public function activate() {
        $this->load->model('kbmp_marketplace/kbmp_marketplace');
        $this->load->language('kbmp_marketplace/sellers_list');        
        
        if (!empty($this->request->get['customer_id'])) {
            $seller_info = $this->model_kbmp_marketplace_kbmp_marketplace->getSellerByCustomerId($this->request->get['customer_id']);
            if(!empty($seller_info)) {
                $this->model_kbmp_marketplace_kbmp_marketplace->enableSeller($seller_info['seller_id']);
                $this->session->data['success'] = $this->language->get('text_enable_success');
                $this->response->redirect($this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key.'=' . $this->session_token, true));
            } else {
                $this->session->data['error'] = $this->language->get('text_error_occurred');
                $this->response->redirect($this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key.'=' . $this->session_token, true));
            }
        } else {
            $this->session->data['error'] = $this->language->get('text_error_occurred');
            $this->response->redirect($this->url->link('kbmp_marketplace/sellers_list', $this->session_token_key.'=' . $this->session_token, true));
        }
        
    }
    
    
    public function seller_info() {
        if (!empty($this->request->get['customer_id'])) {
            $data['customer_id'] = $this->request->get['customer_id'];
            $this->load->controller('kbmp_marketplace/sellers_list/seller_info_details', $data);
        }
    }

    public function seller_info_details($info) {
        $customer_id = $info['customer_id'];
        $this->load->language('kbmp_marketplace/sellers_profile_custom_fields');
        $this->load->model('kbmp_marketplace/sellers_profile_custom_fields');
        $data['fields'] = $this->model_kbmp_marketplace_sellers_profile_custom_fields->get_custom_field_seller($customer_id, $this->config->get('config_store_id'), $this->config->get('config_language_id'));
        foreach ($data['fields'] as $key => &$value) {
			if ($value['type'] == "select") {
					if ($value['seller_value'] == "") {
						$value["seller_value"] = "Нет данных";
					} else {
						$value["seller_value"] = $this->getStatus($value['seller_value']);
					}
				
			} else {
            	$value["seller_value"] = html_entity_decode(nl2br($value["seller_value"]));
			}
        }

        $data['seller'] = $this->model_kbmp_marketplace_sellers_profile_custom_fields->getSeller($customer_id);
        $data['token'] = $this->session_token;
        $this->load->model('tool/image');
        if (!empty($data['seller']['logo'])) {
            $data['thumb'] = $this->model_tool_image->resize($data['seller']['logo'], 75, 75);
        } else {
            $data['thumb'] = $this->model_tool_image->resize('no_image.png', 75, 75);
        }
        if (VERSION < 2.2) {
            $this->response->setOutput($this->load->view('kbmp_marketplace/sellers_info.tpl', $data));
        } else {
            $this->response->setOutput($this->load->view('kbmp_marketplace/sellers_info', $data));
        }
    }

    public function downloadfile() {
        $this->load->language('kbmp_marketplace/sellers_profile_custom_fields');
        if (isset($this->request->get['file_id'])) {
            $this->load->model('kbmp_marketplace/sellers_profile_custom_fields');
            $file_name = $this->model_kbmp_marketplace_sellers_profile_custom_fields->getFileName($this->request->get['file_id']);
            if ($file_name) {
                $file_url = DIR_IMAGE . 'seller_custom_field/' . $file_name;
                header('Content-Type: application/octet-stream');
                header("Content-Transfer-Encoding: Binary");
                header("Content-disposition: attachment; filename=\"" . $file_name . "\"");
                readfile($file_url);
                exit;
            } else {
                echo $this->language->get('text_download_file');
                die();
            }
        } else {
            echo $this->language->get('text_download_file');
            die();
        }
    }
	
	public function getStatus($symbol_code = "") {
		$this->load->model('kbmp_marketplace/customer_fields');
		
		$lang_id = 0;
		$customer_statuses = array();
		$get_language_details = $this->model_kbmp_marketplace_sellers_profile_custom_fields->getLanguage();
		if (!empty($get_language_details)) {
			foreach ($get_language_details as $key => $value) {
				$lang_id = $value['language_id'];
				break;
			}
		}
		$customer_field_data['lang_id'] = $lang_id;
		$sellers_get_fields = $this->model_kbmp_marketplace_customer_fields->getcustom_fields($customer_field_data);
		
		foreach($sellers_get_fields as $sellers_get_field) {
			if ($sellers_get_field["type"] == "select") {
				$id_field = $sellers_get_field["id_field"];
				$select_value = $this->model_kbmp_marketplace_sellers_profile_custom_fields->get_custom_fields_lang_data($id_field)[0]["value"];
				$select_value = explode("<br>",str_replace(PHP_EOL, '<br>', $select_value));
				foreach($select_value as $sval) {
					$sval = explode(" | ", $sval);
					$customer_statuses[$sval[0]] = $sval[1];
				}
			}
		}
		
		return $customer_statuses[$symbol_code];
	}
	
	protected function validateForm() {
		
		if (!$this->checkPermission("sellers")) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		

		if ((utf8_strlen($this->request->post['firstname']) < 1) || (utf8_strlen(trim($this->request->post['firstname'])) > 32)) {
			$this->error['firstname'] = $this->language->get('error_firstname');
		}

		if ((utf8_strlen($this->request->post['lastname']) < 1) || (utf8_strlen(trim($this->request->post['lastname'])) > 32)) {
			$this->error['lastname'] = $this->language->get('error_lastname');
		}
		
		if ((utf8_strlen($this->request->post['secondname']) < 1) || (utf8_strlen(trim($this->request->post['secondname'])) > 32)) {
			$this->error['secondname'] = $this->language->get('error_secondname');
		}

		if ((utf8_strlen($this->request->post['email']) > 96) || !filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
			$this->error['email'] = $this->language->get('error_email');
		}

		$customer_info = $this->model_customer_customer->getCustomerByEmail($this->request->post['email']);

		if (!isset($this->request->get['customer_id'])) {
			if ($customer_info) {
				$this->error['warning'] = $this->language->get('error_exists');
			}
		} else {
			if ($customer_info && ($this->request->get['customer_id'] != $customer_info['customer_id'])) {
				$this->error['warning'] = $this->language->get('error_exists');
			}
		}

		if ((utf8_strlen($this->request->post['telephone']) < 3) || (utf8_strlen($this->request->post['telephone']) > 32)) {
			$this->error['telephone'] = $this->language->get('error_telephone');
		}

		// Custom field validation
		$this->load->model('customer/custom_field');

		$custom_fields = $this->model_customer_custom_field->getCustomFields(array('filter_customer_group_id' => $this->request->post['customer_group_id']));

		foreach ($custom_fields as $custom_field) {
			if (($custom_field['location'] == 'account') && $custom_field['required'] && empty($this->request->post['custom_field'][$custom_field['custom_field_id']])) {
				$this->error['custom_field'][$custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
			} elseif (($custom_field['location'] == 'account') && ($custom_field['type'] == 'text') && !empty($custom_field['validation']) && !filter_var($this->request->post['custom_field'][$custom_field['custom_field_id']], FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => $custom_field['validation'])))) {
				$this->error['custom_field'][$custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
			}
		}

		if ($this->request->post['password'] || (!isset($this->request->get['customer_id']))) {
			if ((utf8_strlen(html_entity_decode($this->request->post['password'], ENT_QUOTES, 'UTF-8')) < 4) || (utf8_strlen(html_entity_decode($this->request->post['password'], ENT_QUOTES, 'UTF-8')) > 40)) {
				$this->error['password'] = $this->language->get('error_password');
			}

			if ($this->request->post['password'] != $this->request->post['confirm']) {
				$this->error['confirm'] = $this->language->get('error_confirm');
			}
		}
		
		//осталось: обновление данных
		$this->load->model('kbmp_marketplace/customer_fields');
		$this->load->model('kbmp_marketplace/sellers_profile_custom_fields');
		if (isset($this->request->post['seller_field'])) {
			
			$lang_id = 0;
			$get_language_details = $this->model_kbmp_marketplace_sellers_profile_custom_fields->getLanguage();
			if (!empty($get_language_details)) {
				foreach ($get_language_details as $key => $value) {
					$lang_id = $value['language_id'];
					break;
				}
			}
			$customer_field_data['lang_id'] = $lang_id;

			$sellers_get_fields = $this->model_kbmp_marketplace_customer_fields->getcustom_fields($customer_field_data);
			
			$check_sellers_fields = array();
			foreach($sellers_get_fields as $field) {
				$check_sellers_fields[$field['id_field']]['min_length'] = $field['min_length'];
				$check_sellers_fields[$field['id_field']]['max_length'] = $field['max_length'];
				$check_sellers_fields[$field['id_field']]['required'] = $field['required'];
				$check_sellers_fields[$field['id_field']]['type'] = $field['type'];
				$check_sellers_fields[$field['id_field']]['file_extension'] = $field['file_extension'];
			}
			
			$error_seller_field = array();
			$seller_fields = $this->request->post['seller_field'];
			
			foreach($seller_fields as $key => $field) {
				$error_data['id_field'] = $key;
				$error_data['id_shop'] = (int) $this->config->get('config_store_id');
				$error_data['id_lang'] = $lang_id;
				$error_msg = $this->model_kbmp_marketplace_customer_fields->getErrorMessage_Field_seller($error_data);
				
				$type = $check_sellers_fields[$key]['type'];
				$min_length = $check_sellers_fields[$key]['min_length'];
				$max_length = $check_sellers_fields[$key]['max_length'];
				$required = $check_sellers_fields[$key]['required'];
				$file_extension = $check_sellers_fields[$key]['file_extension'];
				$error_field = false;
				
				if ($type == "text" || $type == "textarea") {
					if ((strlen($field) == 0 && $required) || (strlen($field) < $min_length || strlen($field) > $max_length)) {
						$error_field = true;
					}
				}
				
				if ($type == "file") {
					$get_extension = substr(strrchr($field, "."), 1);
					$file_ext = explode(", ", $file_extension);
					if ((strlen($field) > 0 && $required) && !in_array($get_extension, $file_ext)) {
						$error_field = true;
					}
				}
				
				if ($error_field) {
					if (strlen($error_msg) == 0) {
						if ($type == "text" || $type == "textarea")
							$error_msg = $this->language->get('error_type_text');
						if ($type == "file")
							$error_msg = $this->language->get('error_type_file');
					}
					$error_seller_field[$key] = $error_msg;
				}
					
			}
			
//			$customer_id = $this->request->get['customer_id'];
			
//			$lastCustomerID = $this->model_customer_customer->getLastID();
//			$lastCustomerID++;
			
			
			
			if (count($error_seller_field) > 0)
				$this->error['error_seller_field'] = $error_seller_field;
		}

		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		return !$this->error;
	}
	
	protected function validateDelete() {
		if (!$this->checkPermission("sellers")) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
	
	public function delete() {

		$this->load->language('kbmp_marketplace/sellers_list');
		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('customer/customer');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $customer_id) {
				$this->model_customer_customer->deleteCustomer($customer_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter_name'])) {
				$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_email'])) {
				$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['filter_customer_group_id'])) {
				$url .= '&filter_customer_group_id=' . $this->request->get['filter_customer_group_id'];
			}

			if (isset($this->request->get['filter_status'])) {
				$url .= '&filter_status=' . $this->request->get['filter_status'];
			}

			if (isset($this->request->get['filter_ip'])) {
				$url .= '&filter_ip=' . $this->request->get['filter_ip'];
			}

			if (isset($this->request->get['filter_date_added'])) {
				$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('kbmp_marketplace/sellers_list', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}
	
	public function checkPermission($slug = "") {
		$this->load->model('user/user');
		$user_id = $this->user->getId();
		$user_group = $this->user->getGroupId();
		if ((int)$user_group == 15) {
			$access_slug = explode(",",$this->model_user_user->getPermissionModerator($user_id)['access_slug']);
			if (in_array($slug,$access_slug))
				return true;
			else
				return false;
		}
		if ((int)$user_group == 1) {
			return true;
		}
	}

}