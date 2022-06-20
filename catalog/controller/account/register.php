<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerAccountRegister extends Controller {
	private $error = array();

	public function index() {
		if ($this->customer->isLogged()) {
			$this->response->redirect($this->url->link('account/account', '', true));
		}
		
		if (!isset($this->request->get['seller_register']))
			$this->response->redirect($this->url->link('account/login', '', true));

		$this->load->language('account/register');

                    if(isset($this->request->get['seller_register'])){
						
                        $this->load->language('kbmp_marketplace/register');
                        $data['heading_title'] = $this->language->get('heading_title');
                    }
                

		$this->document->setTitle($this->language->get('heading_title'));
		$this->document->setRobots('noindex,follow');

		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');
		$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');

                    $this->document->addScript('catalog/view/javascript/kbmp_marketplace/velovalidation.js');
                

		$this->load->model('account/customer');
			
		//проверка на пустой пароль у продавца
		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			if (isset($this->request->post['seller']) && !empty($this->request->post['seller'])) {
				if ($this->request->post['password'] == "") {
					$genPassword = $this->gen_password(8);
					$this->request->post['password'] = $genPassword;
					$this->request->post['confirm'] = $genPassword;
				}
			}
		}
		
		//делаем из ФИО Фамилию Имя Отчество
		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			if (isset($this->request->post['seller']) && !empty($this->request->post['seller'])) {
				if ($this->request->post['sellerfio'] != "") {
					$fio_array = explode(" ",$this->request->post['sellerfio']);
					$this->request->post['lastname'] = $fio_array[1];
					$this->request->post['firstname'] = $fio_array[0];
					$this->request->post['secondname'] = $fio_array[2];
				}
			}
		}
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$customer_id = $this->model_account_customer->addCustomer($this->request->post);
			
                        $this->load->model('setting/kbmp_marketplace');
                        //Get the module configuration values
                        $store_id = (int) $this->config->get('config_store_id');
                        $settings = $this->model_setting_kbmp_marketplace->getSetting('kbmp_marketplace', $store_id);
                        if (isset($customer_id) && !empty($customer_id) && isset($this->request->post['seller']) && !empty($this->request->post['seller']) && $settings['kbmp_marketplace_setting']['kbmp_seller_registration']) {
							
                            $this->load->model('kbmp_marketplace/kbmp_marketplace');
                           // $this->model_kbmp_marketplace_kbmp_marketplace->addSeller($customer_id, $this->request->post, $settings, $store_id);
                            
                            //Send Welcome Mail
                            $email_template = $this->model_kbmp_marketplace_kbmp_marketplace->getEmailTemplate(1);
                            
                            if (isset($email_template) && !empty($email_template)) {
                                $message = str_replace("{{email}}", $this->request->post['email'] , $email_template['email_content']); //Seller Email
                                $message = str_replace("{{full_name}}", $this->request->post['firstname'] . ' ' . $this->request->post['lastname'] , $message); //Seller Full Name

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

                                $mail->setTo($this->request->post['email']);
                                $mail->setFrom($this->config->get('config_email'));
                                $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
                                $mail->setSubject(html_entity_decode($email_template['email_subject'], ENT_QUOTES, 'UTF-8'));
                                $mail->setHtml($email_content);
                                $mail->send();
                            }
                            
                            //Send Notification to Admin
                            $email_template = $this->model_kbmp_marketplace_kbmp_marketplace->getEmailTemplate(4);
                            
                            if (isset($email_template) && !empty($email_template)) {
                                $message = str_replace("{{email}}", $this->request->post['email'] , $email_template['email_content']); //Seller Email
                                $message = str_replace("{{full_name}}", $this->request->post['firstname'] . ' ' . $this->request->post['lastname'] , $message); //Seller Full Name

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

                                $mail->setTo($this->config->get('config_email'));
                                $mail->setFrom($this->config->get('config_email'));
                                $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
                                $mail->setSubject(html_entity_decode($email_template['email_subject'], ENT_QUOTES, 'UTF-8'));
                                $mail->setHtml($email_content);
                                $mail->send();
                            }
                            //For the custom fields add By DHarmanshu 16-06-2020
                            	$column_names = implode(',',(array_keys($this->request->post)));
                                $this->load->model('kbmp_marketplace/kbmp_marketplace');
                                $seller_id = $this->model_kbmp_marketplace_kbmp_marketplace->get_SellerID($customer_id);
                                $fieldID_array = $this->model_kbmp_marketplace_kbmp_marketplace->get_field_id($column_names);
								$this->model_kbmp_marketplace_kbmp_marketplace->insert_seller_mapping($customer_id,$seller_id,$fieldID_array,$this->request->post);
								if(!empty($this->request->files)){
									foreach ($this->request->files as $key => $value) {
                                        $field_name = [];
                                        $name = $value['tmp_name'];
                                        $file = $value['name'];

                                        $temp = explode(".",$value['name']);
                                        $newfilename = round(microtime(true)) . '.' . end($temp);
                                        $name = $value['tmp_name'];
                                        $file = $value['name'];
                                        $file = $newfilename;
										if (move_uploaded_file($name, DIR_IMAGE . 'seller_custom_field/'. $file)) {
											$field_name[$key] = $file;
											$fieldID_array = $this->model_kbmp_marketplace_kbmp_marketplace->get_field_id($key);
											$this->model_kbmp_marketplace_kbmp_marketplace->insert_seller_mapping($customer_id,$seller_id,$fieldID_array,$field_name);
										}
									}										
								} 
                                //For the custom fields add By DHarmanshu 16-06-2020
                    }
                

			// Clear any previous login attempts for unregistered accounts.
			$this->model_account_customer->deleteLoginAttempts($this->request->post['email']);

			//$this->customer->login($this->request->post['email'], $this->request->post['password']);

			unset($this->session->data['guest']);
			
			if (isset($this->request->post['seller']) && !empty($this->request->post['seller'])) {
				$this->response->redirect($this->url->link('account/successSeller'));
			} else {
				$this->response->redirect($this->url->link('account/success'));
			}
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_register'),
			'href' => $this->url->link('account/register', '', true)
		);
		
		if (isset($this->request->get['seller_register'])) {
			
			$data['text_account_already'] = sprintf($this->language->get('text_account_already'), $this->url->link('account/login', 'seller=1', true));
		
			$data['banner'] = $this->load->controller('extension/module/banner',array(
				'banner_id'=>9,
				'view'=>'sellerlogin',
				'width'=>40,
				'height'=>40
			));
			
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
		
		if (isset($this->error['sellerfio'])) {
			$data['error_sellerfio'] = $this->error['sellerfio'];
		} else {
			$data['error_sellerfio'] = '';
		}

		if (isset($this->error['lastname'])) {
			$data['error_lastname'] = $this->error['lastname'];
		} else {
			$data['error_lastname'] = '';
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

		if (isset($this->error['custom_field'])) {
			$data['error_custom_field'] = $this->error['custom_field'];
		} else {
			$data['error_custom_field'] = array();
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

		$data['action'] = $this->url->link('account/register', '', true);

                    if(isset($this->request->get['seller_register'])){
                        $data['action'] = $this->url->link('account/register', 'seller_register=1', true);
                    }

                    $this->load->language('kbmp_marketplace/account_module');
                    if(isset($this->request->get['seller_register'])){
                        $data['text_register_seller'] = $this->language->get('text_register_seller_info');
                    } else {
                        $data['text_register_seller'] = $this->language->get('text_register_seller');
                    }
                    $data['entry_seller'] = $this->language->get('entry_seller');
                    $data['link_text_seller_agreement'] = $this->language->get('link_text_seller_agreement');
                    $data['heading_seller_agreement'] = $this->language->get('heading_seller_agreement');
                    $this->load->language('account/register');
                
		$data['customer_groups'] = array();

		if (is_array($this->config->get('config_customer_group_display'))) {
			$this->load->model('account/customer_group');

			$customer_groups = $this->model_account_customer_group->getCustomerGroups();

			foreach ($customer_groups as $customer_group) {
				if (in_array($customer_group['customer_group_id'], $this->config->get('config_customer_group_display'))) {
					$data['customer_groups'][] = $customer_group;
				}
			}
		}

		if (isset($this->request->post['customer_group_id'])) {
			$data['customer_group_id'] = $this->request->post['customer_group_id'];
		} else {
			$data['customer_group_id'] = $this->config->get('config_customer_group_id');
		}

		if (isset($this->request->post['firstname'])) {
			$data['firstname'] = $this->request->post['firstname'];
		} else {
			$data['firstname'] = '';
		}

		if (isset($this->request->post['lastname'])) {
			$data['lastname'] = $this->request->post['lastname'];
		} else {
			$data['lastname'] = '';
		}

		if (isset($this->request->post['email'])) {
			$data['email'] = $this->request->post['email'];
		} else {
			$data['email'] = '';
		}

		if (isset($this->request->post['telephone'])) {
			$data['telephone'] = $this->request->post['telephone'];
		} else {
			$data['telephone'] = '';
		}
		
		//делаем из ФИО Фамилию Имя Отчество
			if (isset($this->request->post['seller']) && !empty($this->request->post['seller'])) {
				if (isset($this->request->post['sellerfio'])) {
					$data['sellerfio'] = $this->request->post['sellerfio'];
				} else {
					$data['sellerfio'] = '';
				}
			}

		// Custom Fields
		$data['custom_fields'] = array();
		
		$this->load->model('account/custom_field');
		
		$custom_fields = $this->model_account_custom_field->getCustomFields();
		
		foreach ($custom_fields as $custom_field) {
			if ($custom_field['location'] == 'account') {
				$data['custom_fields'][] = $custom_field;
			}
		}
		
		if (isset($this->request->post['custom_field']['account'])) {
			$data['register_custom_field'] = $this->request->post['custom_field']['account'];
		} else {
			$data['register_custom_field'] = array();
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

		if (isset($this->request->post['newsletter'])) {
			$data['newsletter'] = $this->request->post['newsletter'];
		} else {
			$data['newsletter'] = '';
		}

		// Captcha

                    if (isset($this->request->post['seller'])) {
                        $data['seller'] = $this->request->post['seller'];
                    } else {
                        $data['seller'] = '';
                    }
                            
                    $this->load->model('setting/kbmp_marketplace');
                    //Get the module configuration values
                    $store_id = (int) $this->config->get('config_store_id');
                    $settings = $this->model_setting_kbmp_marketplace->getSetting('kbmp_marketplace', $store_id);
                    $data['kbmp_marketplace_settings'] = $settings;
                    $data['current_language'] = $this->config->get('config_language_id');
                
		if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('register', (array)$this->config->get('config_captcha_page'))) {
			$data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'), $this->error);
		} else {
			$data['captcha'] = '';
		}

		if ($this->config->get('config_account_id')) {
			$this->load->model('catalog/information');

			$information_info = $this->model_catalog_information->getInformation($this->config->get('config_account_id'));

			if ($information_info) {
				$data['text_agree'] = sprintf($this->language->get('text_agree'), $this->url->link('information/information/agree', 'information_id=' . $this->config->get('config_account_id'), true), $information_info['title']);
			} else {
				$data['text_agree'] = '';
			}
		} else {
			$data['text_agree'] = '';
		}

		if (isset($this->request->post['agree'])) {
			$data['agree'] = $this->request->post['agree'];
		} else {
			$data['agree'] = false;
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['headerEmpty'] = $this->load->controller('common/headerEmpty');
		$data['footerEmpty'] = $this->load->controller('common/footerEmpty');

                    $data['file_error'] = $this->language->get('file_error');
                    $data['select_error'] = $this->language->get('select_error');
                    $data['seller_agreement_agree'] = $this->language->get('seller_agreement_agree');

                    $store_id = (int) $this->config->get('config_store_id');
                    $lang_id = $this->config->get('config_language_id');
                    $this->load->model('kbmp_marketplace/kbmp_marketplace');
                    $this->load->model('kbmp_marketplace/register');
                    $data['fields'] = $this->model_kbmp_marketplace_kbmp_marketplace->get_custom_field($lang_id,$store_id);
                    $seller_register = 0;
                    if(isset($this->request->get['seller_register'])){
                        $seller_register = 1;
                    }
                    $data['seller_register'] = $seller_register;
                    
                    //For the custom fields add By DHarmanshu 16-06-2020
                   $custom_field_data = $this->request->post;
                   $select_error = $data['select_error'];
                   $kbmp_marketplace_settings = $data['kbmp_marketplace_settings'];
                   $fields = $data['fields'];
                   $custom_hmtl_data = $this->model_kbmp_marketplace_register->genrate_custom_html($fields,$seller_register,$select_error,$kbmp_marketplace_settings,$custom_field_data);

                   $data['sellerFields'] = $custom_hmtl_data['html'];
		
                   $data['kbmp_marketplace_settings'] = $custom_hmtl_data['kbmp_marketplace_settings'];
                   $this->load->language('kbmp_marketplace/common');

                    //Velovalidation Text
                    $data['empty_fname'] = $this->language->get('empty_fname');
                    $data['maxchar_fname'] = $this->language->get('maxchar_fname');
                    $data['minchar_fname'] = $this->language->get('minchar_fname');
                    $data['empty_mname'] = $this->language->get('empty_mname');
                    $data['maxchar_mname'] = $this->language->get('maxchar_mname');
                    $data['minchar_mname'] = $this->language->get('minchar_mname');
                    $data['only_alphabet'] = $this->language->get('only_alphabet');
                    $data['empty_lname'] = $this->language->get('empty_lname');
                    $data['maxchar_lname'] = $this->language->get('maxchar_lname');
                    $data['minchar_lname'] = $this->language->get('minchar_lname');
                    $data['alphanumeric'] = $this->language->get('alphanumeric');
                    $data['empty_pass'] = $this->language->get('empty_pass');
                    $data['maxchar_pass'] = $this->language->get('maxchar_pass');
                    $data['minchar_pass'] = $this->language->get('minchar_pass');
                    $data['specialchar_pass'] = $this->language->get('specialchar_pass');
                    $data['alphabets_pass'] = $this->language->get('alphabets_pass');
                    $data['capital_alphabets_pass'] = $this->language->get('capital_alphabets_pass');
                    $data['small_alphabets_pass'] = $this->language->get('small_alphabets_pass');
                    $data['digit_pass'] = $this->language->get('digit_pass');
                    $data['empty_field'] = $this->language->get('empty_field');
                    $data['empty_field_lang'] = $this->language->get('empty_field_lang');
                    $data['number_field'] = $this->language->get('number_field');
                    $data['positive_number'] = $this->language->get('positive_number');
                    $data['maxchar_field'] = $this->language->get('maxchar_field');
                    $data['minchar_field'] = $this->language->get('minchar_field');
                    $data['empty_email'] = $this->language->get('empty_email');
                    $data['validate_email'] = $this->language->get('validate_email');
                    $data['empty_country'] = $this->language->get('empty_country');
                    $data['maxchar_country'] = $this->language->get('maxchar_country');
                    $data['minchar_country'] = $this->language->get('minchar_country');
                    $data['empty_city'] = $this->language->get('empty_city');
                    $data['maxchar_city'] = $this->language->get('maxchar_city');
                    $data['minchar_city'] = $this->language->get('minchar_city');
                    $data['empty_state'] = $this->language->get('empty_state');
                    $data['maxchar_state'] = $this->language->get('maxchar_state');
                    $data['minchar_state'] = $this->language->get('minchar_state');
                    $data['empty_proname'] = $this->language->get('empty_proname');
                    $data['maxchar_proname'] = $this->language->get('maxchar_proname');
                    $data['minchar_proname'] = $this->language->get('minchar_proname');
                    $data['empty_catname'] = $this->language->get('empty_catname');
                    $data['maxchar_catname'] = $this->language->get('maxchar_catname');
                    $data['minchar_catname'] = $this->language->get('minchar_catname');
                    $data['empty_zip'] = $this->language->get('empty_zip');
                    $data['maxchar_zip'] = $this->language->get('maxchar_zip');
                    $data['minchar_zip'] = $this->language->get('minchar_zip');
                    $data['empty_username'] = $this->language->get('empty_username');
                    $data['maxchar_username'] = $this->language->get('maxchar_username');
                    $data['minchar_username'] = $this->language->get('minchar_username');
                    $data['invalid_date'] = $this->language->get('invalid_date');
                    $data['maxchar_sku'] = $this->language->get('maxchar_sku');
                    $data['minchar_sku'] = $this->language->get('minchar_sku');
                    $data['invalid_sku'] = $this->language->get('invalid_sku');
                    $data['empty_sku'] = $this->language->get('empty_sku');
                    $data['validate_range'] = $this->language->get('validate_range');
                    $data['empty_address'] = $this->language->get('empty_address');
                    $data['minchar_address'] = $this->language->get('minchar_address');
                    $data['maxchar_address'] = $this->language->get('maxchar_address');
                    $data['empty_company'] = $this->language->get('empty_company');
                    $data['minchar_company'] = $this->language->get('minchar_company');
                    $data['maxchar_company'] = $this->language->get('maxchar_company');
                    $data['invalid_phone'] = $this->language->get('invalid_phone');
                    $data['empty_phone'] = $this->language->get('empty_phone');
                    $data['minchar_phone'] = $this->language->get('minchar_phone');
                    $data['maxchar_phone'] = $this->language->get('maxchar_phone');
                    $data['empty_brand'] = $this->language->get('empty_brand');
                    $data['maxchar_brand'] = $this->language->get('maxchar_brand');
                    $data['minchar_brand'] = $this->language->get('minchar_brand');
                    $data['empty_shipment'] = $this->language->get('empty_shipment');
                    $data['maxchar_shipment'] = $this->language->get('maxchar_shipment');
                    $data['minchar_shipment'] = $this->language->get('minchar_shipment');
                    $data['invalid_ip'] = $this->language->get('invalid_ip');
                    $data['invalid_url'] = $this->language->get('invalid_url');
                    $data['empty_url'] = $this->language->get('empty_url');
                    $data['valid_amount'] = $this->language->get('valid_amount');
                    $data['valid_decimal'] = $this->language->get('valid_decimal');
                    $data['max_email'] = $this->language->get('max_email');
                    $data['specialchar_zip'] = $this->language->get('specialchar_zip');
                    $data['specialchar_sku'] = $this->language->get('specialchar_sku');
                    $data['max_url'] = $this->language->get('max_url');
                    $data['valid_percentage'] = $this->language->get('valid_percentage');
                    $data['between_percentage'] = $this->language->get('between_percentage');
                    $data['maxchar_size'] = $this->language->get('maxchar_size');
                    $data['specialchar_size'] = $this->language->get('specialchar_size');
                    $data['specialchar_upc'] = $this->language->get('specialchar_upc');
                    $data['maxchar_upc'] = $this->language->get('maxchar_upc');
                    $data['specialchar_ean'] = $this->language->get('specialchar_ean');
                    $data['maxchar_ean'] = $this->language->get('maxchar_ean');
                    $data['specialchar_bar'] = $this->language->get('specialchar_bar');
                    $data['maxchar_bar'] = $this->language->get('maxchar_bar');
                    $data['positive_amount'] = $this->language->get('positive_amount');
                    $data['maxchar_color'] = $this->language->get('maxchar_color');
                    $data['invalid_color'] = $this->language->get('invalid_color');
                    $data['specialchar'] = $this->language->get('specialchar');
                    $data['script'] = $this->language->get('script');
                    $data['style'] = $this->language->get('style');
                    $data['iframe'] = $this->language->get('iframe');
                    $data['not_image'] = $this->language->get('not_image');
                    $data['image_size'] = $this->language->get('image_size');
                    $data['html_tags'] = $this->language->get('html_tags');
                    $data['number_pos'] = $this->language->get('number_pos');
                    $data['invalid_separator'] = $this->language->get('invalid_separator');
                    $data['policy_error_message'] = $this->language->get('policy_error_message');
                    $data['text_seller_term_condition'] = $this->language->get('text_seller_term_condition');
                    $data['error_seller_term_condition'] = $this->language->get('error_seller_term_condition');
                    
                    $data['register_fields'] = $this->load->controller('kbmp_marketplace/register_fields', $data);
                    //For the custom fields add By DHarmanshu 16-06-2020
                
		if(isset($this->request->get['seller_register'])){
			$this->response->setOutput($this->load->view('account/registerSeller', $data));
		} else {
			$this->response->setOutput($this->load->view('account/register', $data));
		}
	}

	private function validate() {
		if (!isset($this->request->post['seller']) && empty($this->request->post['seller'])) {
			if ((utf8_strlen(trim($this->request->post['firstname'])) < 1) || (utf8_strlen(trim($this->request->post['firstname'])) > 32)) {
				$this->error['firstname'] = $this->language->get('error_firstname');
			}

			if ((utf8_strlen(trim($this->request->post['lastname'])) < 1) || (utf8_strlen(trim($this->request->post['lastname'])) > 32)) {
				$this->error['lastname'] = $this->language->get('error_lastname');
			}
		}
		
		if (isset($this->request->post['seller']) && !empty($this->request->post['seller'])) {
			if ((utf8_strlen(trim($this->request->post['sellerfio'])) < 1) || (utf8_strlen(trim($this->request->post['sellerfio'])) > 255)) {
				$this->error['sellerfio'] = $this->language->get('error_sellerfio');
			}
		}

		if ((utf8_strlen($this->request->post['email']) > 96) || !filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
			$this->error['email'] = $this->language->get('error_email');
		}

		if (isset($this->request->post['seller']) && !empty($this->request->post['seller'])) {
			$customer_check = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);
			if (count($customer_check) > 0) {
				$seller_count = $this->model_account_customer->getTotalSellersByID($customer_check['customer_id']);
				if ($seller_count > 0) {
					$this->error['warning'] = $this->language->get('error_exists');
				}
			}
		} else {
			if ($this->model_account_customer->getTotalCustomersByEmail($this->request->post['email'])) {
				$this->error['warning'] = $this->language->get('error_exists');
			}
		}

		if ((utf8_strlen($this->request->post['telephone']) < 3) || (utf8_strlen($this->request->post['telephone']) > 32)) {
			$this->error['telephone'] = $this->language->get('error_telephone');
		}

		// Customer Group
		if (isset($this->request->post['customer_group_id']) && is_array($this->config->get('config_customer_group_display')) && in_array($this->request->post['customer_group_id'], $this->config->get('config_customer_group_display'))) {
			$customer_group_id = $this->request->post['customer_group_id'];
		} else {
			$customer_group_id = $this->config->get('config_customer_group_id');
		}

		// Custom field validation
		$this->load->model('account/custom_field');

		$custom_fields = $this->model_account_custom_field->getCustomFields($customer_group_id);

		foreach ($custom_fields as $custom_field) {
			if ($custom_field['location'] == 'account') {
				if ($custom_field['required'] && empty($this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']])) {
					$this->error['custom_field'][$custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
				} elseif (($custom_field['type'] == 'text') && !empty($custom_field['validation']) && !filter_var($this->request->post['custom_field'][$custom_field['location']][$custom_field['custom_field_id']], FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => $custom_field['validation'])))) {
					$this->error['custom_field'][$custom_field['custom_field_id']] = sprintf($this->language->get('error_custom_field'), $custom_field['name']);
				}
			}
		}

		if ((utf8_strlen(html_entity_decode($this->request->post['password'], ENT_QUOTES, 'UTF-8')) < 4) || (utf8_strlen(html_entity_decode($this->request->post['password'], ENT_QUOTES, 'UTF-8')) > 40)) {
			$this->error['password'] = $this->language->get('error_password');
		}

		if ($this->request->post['confirm'] != $this->request->post['password']) {
			$this->error['confirm'] = $this->language->get('error_confirm');
		}

		// Captcha

                    if (isset($this->request->post['seller'])) {
                        $data['seller'] = $this->request->post['seller'];
                    } else {
                        $data['seller'] = '';
                    }
                            
                    $this->load->model('setting/kbmp_marketplace');
                    //Get the module configuration values
                    $store_id = (int) $this->config->get('config_store_id');
                    $settings = $this->model_setting_kbmp_marketplace->getSetting('kbmp_marketplace', $store_id);
                    $data['kbmp_marketplace_settings'] = $settings;
                    $data['current_language'] = $this->config->get('config_language_id');
                
		if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('register', (array)$this->config->get('config_captcha_page'))) {
			$captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

			if ($captcha) {
				$this->error['captcha'] = $captcha;
			}
		}

		// Agree to terms
		if ($this->config->get('config_account_id')) {
			$this->load->model('catalog/information');

			$information_info = $this->model_catalog_information->getInformation($this->config->get('config_account_id'));

			if ($information_info && !isset($this->request->post['agree'])) {
				$this->error['warning'] = sprintf($this->language->get('error_agree'), $information_info['title']);
			}
		}
		
		return !$this->error;
	}

	public function customfield() {
		$json = array();

		$this->load->model('account/custom_field');

		// Customer Group
		if (isset($this->request->get['customer_group_id']) && is_array($this->config->get('config_customer_group_display')) && in_array($this->request->get['customer_group_id'], $this->config->get('config_customer_group_display'))) {
			$customer_group_id = $this->request->get['customer_group_id'];
		} else {
			$customer_group_id = $this->config->get('config_customer_group_id');
		}

		$custom_fields = $this->model_account_custom_field->getCustomFields($customer_group_id);

		foreach ($custom_fields as $custom_field) {
			$json[] = array(
				'custom_field_id' => $custom_field['custom_field_id'],
				'required'        => $custom_field['required']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
		
	function gen_password($length = 6)
	{
		$password = '';
		$arr = array(
			'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 
			'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 
			'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 
			'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 
			'1', '2', '3', '4', '5', '6', '7', '8', '9', '0'
		);

		for ($i = 0; $i < $length; $i++) {
			$password .= $arr[random_int(0, count($arr) - 1)];
		}
		return $password;
	}
}