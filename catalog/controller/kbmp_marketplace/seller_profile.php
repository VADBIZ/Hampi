<?php

class ControllerKbmpMarketplaceSellerProfile extends Controller {

    public function __construct($params) {
        parent::__construct($params);
        $this->load->model('kbmp_marketplace/kbmp_marketplace');
        $this->model_kbmp_marketplace_kbmp_marketplace->getSellerLoggedStatus($this->url->link('kbmp_marketplace/seller_profile', '', true));
    }

    public function index() {

        $this->load->language('kbmp_marketplace/common');
        $this->load->language('kbmp_marketplace/seller_profile');
        $this->document->setTitle($this->language->get('heading_title'));

        $data['title'] = $this->document->getTitle();
        $data['footer'] = $this->load->view('kbmp_marketplace/footer', $data);
        $data['header'] = $this->load->controller('kbmp_marketplace/header');
        $data['text_back_to_site'] = $this->language->get('text_back_to_site');
        $data['text_my_account1'] = $this->language->get('text_my_account1');
        $data['text_seller_profile'] = $this->language->get('text_seller_profile');
        $data['text_logout'] = $this->language->get('text_logout');
        $data['error_account_warning'] = $this->language->get('error_account_warning');
        $data['text_account_warning'] = $this->language->get('text_account_warning');

        $this->load->model('kbmp_marketplace/kbmp_marketplace');

        //For the custom fields add By DHarmanshu 16-06-2020
        $this->document->addScript('catalog/view/javascript/kbmp_marketplace/velovalidation.js');
        $this->load->language('account/register_seller');

        $data['file_error'] = $this->language->get('file_error');
        $data['select_error'] = $this->language->get('select_error');
        $lang_id = $this->config->get('config_language_id');
        $store_id = (int) $this->config->get('config_store_id');

        $custm_field_data = $this->model_kbmp_marketplace_kbmp_marketplace->get_custom_field_seller($lang_id, $store_id);
        $download_url = $this->url->link('kbmp_marketplace/seller_profile/download_sys', '', true);
        $non_download = $this->url->link('kbmp_marketplace/seller_profile', '', true);

        $data['download_url'] = $this->url->link('kbmp_marketplace/seller_profile/download_sys', '', true);
        $data['non_download'] = $this->url->link('kbmp_marketplace/seller_profile', '', true);
        $data['file_path'] = DIR_IMAGE . 'seller_custom_field/';
        $download_file = $this->language->get('download_file');
        $select_error = $this->language->get('select_error');

        $html = $this->genrate_custom_fields($custm_field_data, $download_url, $non_download, $download_file, $select_error);
        $data['custm_field_data'] = $custm_field_data;
        $data['html_1'] = isset($html[1]) ? $html[1] : '';
        $data['html_2'] = isset($html[2]) ? $html[2] : '';
        $data['html_3'] = isset($html[3]) ? $html[3] : '';
        $data['html_4'] = isset($html[4]) ? $html[4] : '';

        //For the custom fields add By DHarmanshu 16-06-2020
        //Handle the Post Request
        if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
            //for the modification in the marketplace module 17-06-2020 Dharmanshu Start
            $lang_id = 0;
            $custom_idname = $this->model_kbmp_marketplace_kbmp_marketplace->get_custom_field_Idname();
            $get_language_details = $this->model_kbmp_marketplace_kbmp_marketplace->getLanguage();

            $this->saveCustomField($custom_idname);
            //for the modification in the marketplace module 17-06-2020 Dharmanshu End
            //Get Seller Information
            $seller = $this->model_kbmp_marketplace_kbmp_marketplace->getSellerByCustomerId();

            $post_data = $this->request->post;
            //Check if logo added to upload
            if (isset($this->request->post['logo_remove']) && !empty($this->request->post['logo_remove'])) {
                //Remove old image if exists
                if (!empty($seller['logo']) && file_exists(DIR_IMAGE . 'sellers_logo/' . $seller['logo'])) {
                    unlink(DIR_IMAGE . 'sellers_logo/' . $seller['logo']);
                }
                $post_data['logo'] = '';
            } else {
                if (isset($this->request->files['logo_file']['name']) && !empty($this->request->files['logo_file']['name'])) {
                    //Remove old image if exists
                    if (!empty($seller['logo']) && file_exists(DIR_IMAGE . 'sellers_logo/' . $seller['logo'])) {
                        unlink(DIR_IMAGE . 'sellers_logo/' . $seller['logo']);
                    }
                    $ext = pathinfo($this->request->files['logo_file']['name'], PATHINFO_EXTENSION);
                    $file = $seller['seller_id'] . '_logo.' . $ext;
                    if (move_uploaded_file($this->request->files['logo_file']['tmp_name'], DIR_IMAGE . 'sellers_logo/' . $file)) {
                        $post_data['logo'] = $file;
                    }
                }
            }

            //Check if banner added to upload
            if (isset($this->request->post['banner_remove']) && !empty($this->request->post['banner_remove'])) {
                //Remove old image if exists
                if (!empty($seller['banner']) && file_exists(DIR_IMAGE . 'sellers_banner/' . $seller['banner'])) {
                    unlink(DIR_IMAGE . 'sellers_banner/' . $seller['banner']);
                }
                $post_data['banner'] = '';
            } else {
                if (isset($this->request->files['banner_file']['name']) && !empty($this->request->files['banner_file']['name'])) {
                    //Remove old image if exists
                    if (!empty($seller['banner']) && file_exists(DIR_IMAGE . 'sellers_banner/' . $seller['banner'])) {
                        unlink(DIR_IMAGE . 'sellers_banner/' . $seller['banner']);
                    }
                    $ext = pathinfo($this->request->files['banner_file']['name'], PATHINFO_EXTENSION);
                    $file = $seller['seller_id'] . '_banner.' . $ext;
                    if (move_uploaded_file($this->request->files['banner_file']['tmp_name'], DIR_IMAGE . 'sellers_banner/' . $file)) {
                        $post_data['banner'] = $file;
                    }
                }
            }

            $this->model_kbmp_marketplace_kbmp_marketplace->updateSellerProfile($post_data);

            $this->session->data['success'] = $this->language->get('text_seller_update_success');

            $this->response->redirect($this->url->link('kbmp_marketplace/seller_profile', '', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        if (isset($this->session->data['error'])) {
            $data['error'] = $this->session->data['error'];
            unset($this->session->data['error']);
        } else {
            $data['error'] = '';
        }

        $data['heading_title'] = $this->language->get('heading_title');
        $data['text_my_account'] = $this->language->get('text_my_account');

        $data['home_link'] = $this->url->link('common/home');
        $data['account_link'] = $this->url->link('account/account', '', true);
        $data['logout_link'] = $this->url->link('account/logout', '', true);

        //Form Labels
        $data['text_general'] = $this->language->get('text_general');
        $data['text_meta_info'] = $this->language->get('text_meta_info');
        $data['text_policy'] = $this->language->get('text_policy');
        $data['text_payout_info'] = $this->language->get('text_payout_info');
        $data['text_view_profile'] = $this->language->get('text_view_profile');
        $data['text_shop_title'] = $this->language->get('text_shop_title');
        $data['text_phone_number'] = $this->language->get('text_phone_number');
        $data['text_business_email'] = $this->language->get('text_business_email');
        $data['text_business_email_both'] = $this->language->get('text_business_email_both');
        $data['text_business_email_primary'] = $this->language->get('text_business_email_primary');
        $data['text_business_email_business'] = $this->language->get('text_business_email_business');
        $data['text_get_notification'] = $this->language->get('text_get_notification');
        $data['text_country'] = $this->language->get('text_country');
        $data['text_select_country'] = $this->language->get('text_select_country');
        $data['text_state'] = $this->language->get('text_state');
        $data['text_select_state'] = $this->language->get('text_select_state');
        $data['text_address'] = $this->language->get('text_address');
        $data['text_description'] = $this->language->get('text_description');
        $data['text_profile_url'] = $this->language->get('text_profile_url');
        $data['text_profile_url_like'] = $this->language->get('text_profile_url_like');
        $data['text_fb_link'] = $this->language->get('text_fb_link');
        $data['text_google_link'] = $this->language->get('text_google_link');
        $data['text_twitter_link'] = $this->language->get('text_twitter_link');
        $data['text_logo'] = $this->language->get('text_logo');
        $data['text_logo_info'] = $this->language->get('text_logo_info');
        $data['text_shop_banner'] = $this->language->get('text_shop_banner');
        $data['text_banner_info'] = $this->language->get('text_banner_info');
        $data['text_meta_keywords'] = $this->language->get('text_meta_keywords');
        $data['text_meta_description'] = $this->language->get('text_meta_description');
        $data['text_return_policy'] = $this->language->get('text_return_policy');
        $data['text_shipping_policy'] = $this->language->get('text_shipping_policy');
        $data['text_select_payout'] = $this->language->get('text_select_payout');
        $data['text_paypal_id'] = $this->language->get('text_paypal_id');
        $data['text_additional_info'] = $this->language->get('text_additional_info');
        $data['text_account_owner'] = $this->language->get('text_account_owner');
        $data['text_details'] = $this->language->get('text_details');
        $data['text_bank_address'] = $this->language->get('text_bank_address');
        $data['text_select_method'] = $this->language->get('text_select_method');
        $data['text_bankwire_method'] = $this->language->get('text_bankwire_method');
        $data['text_paypal_method'] = $this->language->get('text_paypal_method');
        $data['help_text_bank_details'] = $this->language->get('help_text_bank_details');
        $data['text_additional_info'] = $this->language->get('text_additional_info');

        //Button Text
        $data['button_upload'] = $this->language->get('button_upload');
        $data['button_remove'] = $this->language->get('button_remove');
        $data['button_save'] = $this->language->get('button_save');

        //Column Right Text
        $data['text_dashboard'] = $this->language->get('text_dashboard');
        $data['text_seller_profile'] = $this->language->get('text_seller_profile');
        $data['text_seller_products'] = $this->language->get('text_seller_products');
        $data['text_seller_orders'] = $this->language->get('text_seller_orders');
        $data['text_product_reviews'] = $this->language->get('text_product_reviews');
        $data['text_seller_reviews'] = $this->language->get('text_seller_reviews');
        $data['text_seller_earning'] = $this->language->get('text_seller_earning');
        $data['text_seller_transactions'] = $this->language->get('text_seller_transactions');
        $data['text_category_request'] = $this->language->get('text_category_request');
        $data['text_seller_shipping'] = $this->language->get('text_seller_shipping');

        $data['dashboard_link'] = $this->url->link('kbmp_marketplace/dashboard');
        $data['seller_profile_link'] = $this->url->link('kbmp_marketplace/seller_profile');
        $data['products_link'] = $this->url->link('kbmp_marketplace/products');
        $data['orders_link'] = $this->url->link('kbmp_marketplace/orders');
        $data['product_reviews_link'] = $this->url->link('kbmp_marketplace/product_reviews');
        $data['seller_reviews_link'] = $this->url->link('kbmp_marketplace/seller_reviews');
        $data['earning_link'] = $this->url->link('kbmp_marketplace/earning');
        $data['transactions_link'] = $this->url->link('kbmp_marketplace/transactions');
        $data['category_request_link'] = $this->url->link('kbmp_marketplace/category_request');
        $data['shipping_link'] = $this->url->link('kbmp_marketplace/shipping');

        $this->load->model('localisation/country');

        $data['countries'] = $this->model_localisation_country->getCountries();
        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();

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
        $data['download_file'] = $this->language->get('download_file');

        //Get Seller Information
        $seller = $this->model_kbmp_marketplace_kbmp_marketplace->getSellerByCustomerId();

        if (isset($seller['seller_id']) && !empty($seller['seller_id'])) {
            $this->load->model('tool/image');

            //Set Seller Logo
            if (is_file(DIR_IMAGE . 'sellers_logo/' . $seller['logo'])) {
                $seller_logo = $this->model_tool_image->resize('sellers_logo/' . $seller['logo'], 150, 150);
            } else {
                $seller_logo = $this->model_tool_image->resize('sellers_logo/no_image.png', 150, 150);
            }
            $data['seller_logo'] = $seller_logo;

            //Set Seller Banner
            if (is_file(DIR_IMAGE . 'sellers_banner/' . $seller['banner'])) {
                $seller_banner = $this->model_tool_image->resize('sellers_banner/' . $seller['banner'], 800, 100);
            } else {
                $seller_banner = $this->model_tool_image->resize('sellers_banner/seller_banner.png', 800, 100);
            }
            $data['seller_banner'] = $seller_banner;

            $data['seller_details'] = $this->model_kbmp_marketplace_kbmp_marketplace->getSeller($seller['seller_id']);
            $langs = $this->model_localisation_language->getLanguages();
            $id_seller = $seller['seller_id'];
            foreach ($langs as $lang) {
                $lang_id = $lang['language_id'];
                $sellerDetails = $this->model_kbmp_marketplace_kbmp_marketplace->getSellerByLang($id_seller, $lang_id);

                $data['seller_title'][$lang_id] = isset($sellerDetails['title']) ? $sellerDetails['title'] : $data['seller_details']['title'];
                $data['seller_meta_description'][$lang_id] = isset($sellerDetails['meta_description']) ? $sellerDetails['meta_description'] : $data['seller_details']['meta_description'];
                $data['seller_description'][$lang_id] = isset($sellerDetails['description']) ? $sellerDetails['description'] : $data['seller_details']['description'];
                $data['seller_meta_keywords'][$lang_id] = isset($sellerDetails['meta_keyword']) ? $sellerDetails['meta_keyword'] : $data['seller_details']['meta_keyword'];
                $data['shipping_policy'][$lang_id] = isset($sellerDetails['shipping_policy']) ? $sellerDetails['shipping_policy'] : $data['seller_details']['shipping_policy'];
                $data['return_policy'][$lang_id] = isset($sellerDetails['return_policy']) ? $sellerDetails['return_policy'] : $data['seller_details']['return_policy'];
            }

            $data['seller_details']['phone_number'] = isset($data['seller_details']['phone_number']) ? trim($data['seller_details']['phone_number']) : '';
            $data['seller_details']['address'] = isset($data['seller_details']['address']) ? trim($data['seller_details']['address']) : '';
            $data['seller_view_link'] = $this->url->link('kbmp_marketplace/sellers/view', '&seller_id=' . $seller['seller_id']);
            $data['text_seller_approval_request'] = sprintf($this->language->get('text_seller_approval_request'), $this->url->link('kbmp_marketplace/sellers/approval_request'));
        }


        $this->load->model('setting/kbmp_marketplace');
        
        $data['lang_id'] = $this->config->get('config_language_id'); //By dharmanshu for the issue fix of language TAB
        //Get the module configuration values
        $settings = $this->model_setting_kbmp_marketplace->getSetting('kbmp_marketplace', $store_id);
        $data['kbmp_marketplace_settings'] = $settings;
        $this->response->setOutput($this->load->view('kbmp_marketplace/seller_profile', $data));
    }

    public function download_sys() {
        if (isset($this->request->get['file_id'])) {
            $this->load->model('kbmp_marketplace/kbmp_marketplace');
            $file_name = $this->model_kbmp_marketplace_kbmp_marketplace->getFileName($this->request->get['file_id']);
            if ($file_name) {
                $file_url = DIR_IMAGE . 'seller_custom_field/' . $file_name;
                header('Content-Type: application/octet-stream');
                header("Content-Transfer-Encoding: Binary");
                header("Content-disposition: attachment; filename=\"" . $file_name . "\"");
                readfile($file_url);
                exit;
            } else {
                echo "Error";
                die();
            }
        } else {
            echo "Error";
            die();
        }
    }

    private function saveCustomField($custom_idname) {
        $lang_id = "";
        if (!empty($custom_idname)) {
            foreach ($custom_idname as $key => $custom_value) {

                if (isset($this->request->post[$custom_value['field_name']])) {
                    $field_name_value = $this->request->post[$custom_value['field_name']];
                    $field_id = $custom_value['id_field'];
                    if ($this->model_kbmp_marketplace_kbmp_marketplace->check_seller_data($lang_id, $field_id)) {
                        $this->model_kbmp_marketplace_kbmp_marketplace->update_seller_data($lang_id, $field_id, $field_name_value);
                    } else {
                        $this->model_kbmp_marketplace_kbmp_marketplace->insert_seller_data($lang_id, $field_id, $field_name_value);
                    }
                }



                if (isset($this->request->files[$custom_value['field_name']])) {
                    $temp = explode(".", $this->request->files[$custom_value['field_name']]['name']);
                    $newfilename = round(microtime(true)) . '.' . end($temp);
                    $name = $this->request->files[$custom_value['field_name']]['tmp_name'];
                    $file = $this->request->files[$custom_value['field_name']]['name'];
                    $file = $newfilename;
                    if (move_uploaded_file($name, DIR_IMAGE . 'seller_custom_field/' . $file)) {
                        $field_id = $custom_value['id_field'];
                        $field_name_value = $file;
                        if ($this->model_kbmp_marketplace_kbmp_marketplace->check_seller_data($lang_id, $field_id)) {
                            $this->model_kbmp_marketplace_kbmp_marketplace->update_seller_data($lang_id, $field_id, $field_name_value);
                        } else {
                            $this->model_kbmp_marketplace_kbmp_marketplace->insert_seller_data($lang_id, $field_id, $field_name_value);
                        }
                    }
                }
            }
        }
    }

    private function saveCustomFieldMulti() {
        if (!empty($get_language_details)) {
            foreach ($get_language_details as $key => $value) {
                $lang_id = $value['language_id'];
                $lang_id = "";
                if (!empty($custom_idname)) {
                    foreach ($custom_idname as $key => $custom_value) {

                        if (isset($this->request->post[$custom_value['field_name'] . '_' . $lang_id])) {
                            $field_name_value = $this->request->post[$custom_value['field_name'] . '_' . $lang_id];
                            $field_id = $custom_value['id_field'];
                            if ($this->model_kbmp_marketplace_kbmp_marketplace->check_seller_data($lang_id, $field_id)) {
                                $this->model_kbmp_marketplace_kbmp_marketplace->update_seller_data($lang_id, $field_id, $field_name_value);
                            } else {
                                $this->model_kbmp_marketplace_kbmp_marketplace->insert_seller_data($lang_id, $field_id, $field_name_value);
                            }
                        }



                        if (isset($this->request->files[$custom_value['field_name'] . '_' . $lang_id])) {
                            $temp = explode(".", $this->request->files[$custom_value['field_name'] . '_' . $lang_id]['name']);
                            $newfilename = round(microtime(true)) . '.' . end($temp);
                            $name = $this->request->files[$custom_value['field_name'] . '_' . $lang_id]['tmp_name'];
                            $file = $this->request->files[$custom_value['field_name'] . '_' . $lang_id]['name'];
                            $file = $newfilename;
                            if (move_uploaded_file($name, DIR_IMAGE . 'seller_custom_field/' . $file)) {
                                $field_id = $custom_value['id_field'];
                                $field_name_value = $file;
                                if ($this->model_kbmp_marketplace_kbmp_marketplace->check_seller_data($lang_id, $field_id)) {
                                    $this->model_kbmp_marketplace_kbmp_marketplace->update_seller_data($lang_id, $field_id, $field_name_value);
                                } else {
                                    $this->model_kbmp_marketplace_kbmp_marketplace->insert_seller_data($lang_id, $field_id, $field_name_value);
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    public function genrate_custom_fields($custm_field_data, $download_url, $non_download, $download_file, $select_error) {
        $arr = array();
        if (!empty($custm_field_data)) {
            $i = 1;
            $html = '';
            while ($i <= 4) {
                foreach ($custm_field_data as $k => $field_data) {
                    $seller_lang = $field_data['seller_lang'];
                    $lang = $field_data['id_lang'];

                    if ($field_data['id_section'] == $i) {
                        if ($field_data['id_lang'] == 1) {
                            $display = 'style="display:block"';
                        } else {
                            $display = 'style="display:block"';
                        }
                        $required = '';
                        if ($field_data['required'] == 1) {
                            $required = 'required';
                        }
                        $class_name = "";
                        $class_name_2 = "";
                        if ($i == 1) {
                            $class_name = 'custom_field_';
                            $class_name_2 = 'custom_lang_fields';
                        } else if ($i == 2) {
                            $class_name = 'meta_custom_field_';
                            $class_name_2 = 'meta_custom_lang_fields';
                        } else if ($i == 3) {
                            $class_name = 'policy_custom_field_';
                            $class_name_2 = 'policy_custom_lang_fields';
                        } else if ($i == 4) {
                            $class_name = 'payout_custom_field_';
                            $class_name_2 = 'payout_custom_lang_fields';
                        }

                        $html.= '<div class="row tab-pane"' . $display . '>';
                        $html.= '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
                        $html.= '<div class="form-group ' . $required . '">';
                        $html.= '<label class="control-label">' . $field_data["label"] . ' (<span class="help-block" style="display: inline">' . $field_data["description"] . '</span>)</label>';
                        $html.= '<div>';
                        if ($field_data['type'] == 'text') {
                            $value = $field_data['seller_value'];
                            $html.= '<input type="text" name="' . $field_data["field_name"] . '" value="' . $value . '" placeholder="' . $field_data["placeholder"] . '" id="' . $field_data["html_id"] . '"  class="form-control ' . $field_data["html_class"] . ' ' . $required . '" maxlength="' . $field_data["max_length"] . '" minlength="' . $field_data["min_length"] . '" data-validation= "' . $field_data["validation"] . '" data-type="text" data-error="' . $field_data["error_msg"] . '" />';
                        } else if ($field_data['type'] == 'select') {
                            $multiple = '';
                            if ($field_data['multiselect'] == 1) {
                                $multiple = 'multiple';
                            }
                            $value_select = explode(',', $field_data['seller_value']);
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
                                        if (in_array($value[0], $value_select)) {
                                            $select_txt = 'selected';
                                        }
                                        $html.= '<option value="' . $value[0] . '" ' . $select_txt . '>' . $value[1] . '</option>';
                                    }
                                }
                            }
                            $html.= ' </select>';
                        } else if ($field_data['type'] == 'radio') {
                            $explode = explode(PHP_EOL, $field_data["value"]);
                            $default_value = explode('|', $field_data["default_value"]);
                            $value_select = $field_data['seller_value'];
                            if (!empty($explode)) {
                                foreach ($explode as $index => $value) {
                                    $value = explode('|', $value);
                                    if (count($value) > 1) {
                                        $checked = '';
                                        if (count($default_value) > 1 && $default_value[0] == $value[0]) {
                                            $checked = 'checked';
                                        }
                                        if ($value_select == $value[0]) {
                                            $checked = 'checked';
                                        }
                                        $html.= '<label  style="margin-left: 1%;">';
                                        $html.= '<input style="vertical-align: text-bottom;margin: 0px 4px;" data-type="radio" type="radio" ' . $checked . ' value="' . $value[0] . '" name="' . $field_data["field_name"] . '" id="' . $field_data["html_id"] . '" class="' . $field_data["html_class"] . ' ' . $required . '">' . $value[1];
                                        $html.= '</label>';
                                    }
                                }
                                $html.= '<div class="radio_' . $field_data["field_name"] . '" style="display:none; color:red">' . $select_error . '</div>';
                            }
                        } else if ($field_data['type'] == 'checkbox') {
                            $explode = explode(PHP_EOL, $field_data["value"]);
                            $default_value = explode('|', $field_data["default_value"]);
                            $value_select = explode(',', $field_data['seller_value']);

                            if (!empty($explode)) {
                                foreach ($explode as $index => $value) {
                                    $value = explode('|', $value);
                                    if (count($value) > 1) {
                                        $checked = '';
                                        if (count($default_value) > 1 && $default_value[0] == $value[0]) {
                                            $checked = 'checked';
                                        }
                                        if (in_array($value[0], $value_select)) {
                                            $checked = 'checked';
                                        }
                                        $html.= '<label  style="margin-left: 1%;">';
                                        $html.= '<input style="vertical-align: text-bottom;margin: 0px 4px;" data-type="checkbox" type="checkbox" ' . $checked . ' value="' . $value[0] . '" name="' . $field_data["field_name"] . '[]" id="' . $field_data["html_id"] . '" class="' . $field_data["html_class"] . ' ' . $required . '">' . $value[1];
                                        $html.= '</label>';
                                    }
                                }
                                $html.= '<div class="checkbox_' . $field_data["html_id"] . '" style="display:none;  color: red">' . $select_error . '</div>';
                            }
                        } else if ($field_data['type'] == 'textarea') {
                            $summernote = '';
                            $value = $field_data['seller_value'];

                            if ($field_data['show_text_editor'] == 1) {
                                $summernote = 'summernote';
                            }
                            $html.= '<textarea type="textarea" name="' . $field_data["field_name"] . '" value="" placeholder="' . $field_data["placeholder"] . '" id="' . $field_data["html_id"] . '"  class=" ' . $summernote . ' ' . $required . ' form-control ' . $field_data["html_class"] . '" maxlength="' . $field_data["max_length"] . '" minlength="' . $field_data["min_length"] . '" data-validation= "' . $field_data["validation"] . '" data-type="textarea" data-error="' . $field_data["error_msg"] . '">' . $value . '</textarea>';
                        } else if ($field_data['type'] == 'file') {
                            $file_extension = explode(',', $field_data['file_extension']);
                            $file_ext_data = [];
                            $display = "style='display:block'";
                            if ($field_data['editable'] == 0) {
                                $display = "style='display:none'";
                            }
                            foreach ($file_extension as $fil_ext) {
                                $file_ext_data [] = strtolower($fil_ext);
                            }
                            $file_extension = implode(',', $file_ext_data);
                            $value_file = $field_data['seller_value'];
                            if ($value_file == '') {
                                $download_url = $non_download;
                            }
                            if (!empty($value_file)) {
                                $html .= '<a style="font-size: 13px; padding: 4px;float:right;" class="btn btn-warning" href="' . $download_url . '&file_id=' . $field_data['id_mapping'] . '"><i class="fa fa-arrow-down"></i>' . $download_file . '</a>';
                            }
                            $html .= '<span ' . $display . '>';
                            $html .= '<input type="file" data-lang="' . $field_data['id_lang'] . '" data-type="file" name="' . $field_data["field_name"] . '"  id="' . $field_data["html_id"] . '"  class="file_input_data ' . $required . ' form-control ' . $field_data["html_class"] . '">';
                            $html .= '<input type="hidden" name="file_' . $field_data["html_id"] . '" id="file_' . $field_data["html_id"] . '" value="' . $file_extension . '">';
                            $html .= '<input type="hidden" name="file_value_' . $field_data["html_id"] . '" class="file_value_' . $field_data["html_id"] . '" id="file_' . $field_data["html_id"] . '" value="' . $value_file . '">';
                            if (!empty($field_data['file_extension'])) {
                                $html.= $this->language->get('valid_extension_file') . $field_data['file_extension'];
                            }
                            $html .= '</span>';
                        } else if ($field_data['type'] == 'date') {
                            $value = $field_data['seller_value'];
                            $html .= '<div class="input-group date" data-provide="datepicker">';
                            $html .= '<input type="text" class="' . $required . ' form-control" data-type="date" name="' . $field_data["field_name"] . '"  value="' . $value . '" id="' . $field_data["html_id"] . '">';
                            $html .= '<div class="input-group-addon">';
                            $html .= '<span class="glyphicon glyphicon-th"></span>';
                            $html .= '</div>';
                            $html .= '</div>';
                        }
                        $html.= '</div></div></div></div>';
                    }
                }
                $arr[$i] = $html;
                $html = '';
                $i++;
            }
        }
        return $arr;
    }

    // THis function is not being used. THis fucntion is just for refernce to create the field multilanguage 
    public function genrate_custom_fields_multi($custm_field_data, $download_url, $non_download, $download_file, $select_error) {
        $arr = array();
        if (!empty($custm_field_data)) {
            $i = 1;
            $html = '';
            while ($i <= 4) {
                foreach ($custm_field_data as $k => $field_data) {
                    $seller_lang = $field_data['seller_lang'];
                    $lang = $field_data['id_lang'];

                    if ($field_data['id_section'] == $i) {
                        if ($field_data['id_lang'] == 1) {
                            $display = 'style="display:block"';
                        } else {
                            $display = 'style="display:block"';
                        }
                        $required = '';
                        if ($field_data['required'] == 1) {
                            $required = 'required';
                        }
                        $class_name = "";
                        $class_name_2 = "";
                        if ($i == 1) {
                            $class_name = 'custom_field_';
                            $class_name_2 = 'custom_lang_fields';
                        } else if ($i == 2) {
                            $class_name = 'meta_custom_field_';
                            $class_name_2 = 'meta_custom_lang_fields';
                        } else if ($i == 3) {
                            $class_name = 'policy_custom_field_';
                            $class_name_2 = 'policy_custom_lang_fields';
                        } else if ($i == 4) {
                            $class_name = 'payout_custom_field_';
                            $class_name_2 = 'payout_custom_lang_fields';
                        }

                        $html.= '<div class="row tab-pane ' . $class_name_2 . ' ' . $class_name . '' . $field_data['id_lang'] . '" ' . $display . '>';
                        $html.= '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
                        $html.= '<div class="form-group ' . $required . '">';
                        $html.= '<label class="control-label">' . $field_data["label"] . ' (<span class="help-block" style="display: inline">' . $field_data["description"] . '</span>)</label>';
                        $html.= '<div>';
                        if ($field_data['type'] == 'text') {
                            $value = '';
                            if ($seller_lang == $lang) {
                                $value = $field_data['seller_value'];
                            }
                            $html.= '<input type="text" name="' . $field_data["field_name"] . '_' . $field_data['id_lang'] . '" value="' . $value . '" placeholder="' . $field_data["placeholder"] . '" id="' . $field_data["html_id"] . '"  class="form-control ' . $field_data["html_class"] . ' ' . $required . '" maxlength="' . $field_data["max_length"] . '" minlength="' . $field_data["min_length"] . '" data-validation= "' . $field_data["validation"] . '" data-type="text" data-error="' . $field_data["error_msg"] . '" />';
                        } else if ($field_data['type'] == 'select') {
                            $multiple = '';
                            if ($field_data['multiselect'] == 1) {
                                $multiple = 'multiple';
                            }
                            $value_select = [];
                            if ($seller_lang == $lang) {
                                $value_select = explode(',', $field_data['seller_value']);
                            }
                            $html.= '<select ' . $multiple . ' data-type="select" name="' . $field_data["field_name"] . '_' . $field_data['id_lang'] . '" placeholder="' . $field_data["placeholder"] . '" id="' . $field_data["html_id"] . '"  class="' . $required . ' form-control ' . $field_data["html_class"] . ' ' . $required . '"/>';
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
                                        if (in_array($value[0], $value_select)) {
                                            $select_txt = 'selected';
                                        }
                                        $html.= '<option value="' . $value[0] . '" ' . $select_txt . '>' . $value[1] . '</option>';
                                    }
                                }
                            }
                            $html.= ' </select>';
                        } else if ($field_data['type'] == 'radio') {
                            $explode = explode(PHP_EOL, $field_data["value"]);
                            $default_value = explode('|', $field_data["default_value"]);
                            $value_select = '';
                            if ($seller_lang == $lang) {
                                $value_select = $field_data['seller_value'];
                            }
                            if (!empty($explode)) {
                                foreach ($explode as $index => $value) {
                                    $value = explode('|', $value);
                                    if (count($value) > 1) {
                                        $checked = '';
                                        if (count($default_value) > 1 && $default_value[0] == $value[0]) {
                                            $checked = 'checked';
                                        }
                                        if ($value_select == $value[0]) {
                                            $checked = 'checked';
                                        }
                                        $html.= '<label  style="margin-left: 1%;">';
                                        $html.= '<input style="vertical-align: text-bottom;margin: 0px 4px;" data-type="radio" type="radio" ' . $checked . ' value="' . $value[0] . '" name="' . $field_data["field_name"] . '_' . $field_data['id_lang'] . '" id="' . $field_data["html_id"] . '" class="' . $field_data["html_class"] . ' ' . $required . '">' . $value[1];
                                        $html.= '</label>';
                                    }
                                }
                                $html.= '<div class="radio_' . $field_data["field_name"] . '" style="display:none; color:red">' . $select_error . '</div>';
                            }
                        } else if ($field_data['type'] == 'checkbox') {
                            $explode = explode(PHP_EOL, $field_data["value"]);
                            $default_value = explode('|', $field_data["default_value"]);
                            $value_select = [];
                            if ($seller_lang == $lang) {
                                $value_select = explode(',', $field_data['seller_value']);
                            }

                            if (!empty($explode)) {
                                foreach ($explode as $index => $value) {
                                    $value = explode('|', $value);
                                    if (count($value) > 1) {
                                        $checked = '';
                                        if (count($default_value) > 1 && $default_value[0] == $value[0]) {
                                            $checked = 'checked';
                                        }
                                        if (in_array($value[0], $value_select)) {
                                            $checked = 'checked';
                                        }
                                        $html.= '<label  style="margin-left: 1%;">';
                                        $html.= '<input style="vertical-align: text-bottom;margin: 0px 4px;" data-type="checkbox" type="checkbox" ' . $checked . ' value="' . $value[0] . '" name="' . $field_data["field_name"] . '_' . $field_data['id_lang'] . '[]" id="' . $field_data["html_id"] . '" class="' . $field_data["html_class"] . ' ' . $required . '">' . $value[1];
                                        $html.= '</label>';
                                    }
                                }
                                $html.= '<div class="checkbox_' . $field_data["html_id"] . '" style="display:none;  color: red">' . $select_error . '</div>';
                            }
                        } else if ($field_data['type'] == 'textarea') {
                            $value = '';
                            $summernote = '';
                            if ($seller_lang == $lang) {
                                $value = $field_data['seller_value'];
                            }

                            if ($field_data['show_text_editor'] == 1) {
                                $summernote = 'summernote';
                            }
                            $html.= '<textarea type="textarea" name="' . $field_data["field_name"] . '_' . $field_data['id_lang'] . '" value="" placeholder="' . $field_data["placeholder"] . '" id="' . $field_data["html_id"] . '"  class=" ' . $summernote . ' ' . $required . ' form-control ' . $field_data["html_class"] . '" maxlength="' . $field_data["max_length"] . '" minlength="' . $field_data["min_length"] . '" data-validation= "' . $field_data["validation"] . '" data-type="textarea" data-error="' . $field_data["error_msg"] . '">' . $value . '</textarea>';
                        } else if ($field_data['type'] == 'file') {
                            $file_extension = explode(',', $field_data['file_extension']);
                            $file_ext_data = [];
                            $display = "style='display:block'";
                            if ($field_data['editable'] == 0) {
                                $display = "style='display:none'";
                            }
                            foreach ($file_extension as $fil_ext) {
                                $file_ext_data [] = strtolower($fil_ext);
                            }
                            $file_extension = implode(',', $file_ext_data);
                            $value_file = '';
                            if ($seller_lang == $lang) {
                                $value_file = $field_data['seller_value'];
                            }
                            if ($value_file == '') {
                                $download_url = $non_download;
                            }
                            if (!empty($value_file)) {
                                $html .= '<a style="font-size: 13px; padding: 4px;float:right;" class="btn btn-warning" href="' . $download_url . '&file_id=' . $field_data['id_mapping'] . '"><i class="fa fa-arrow-down"></i>' . $download_file . '</a>';
                            }
                            $html .= '<span ' . $display . '>';
                            $html .= '<input type="file" data-lang="' . $field_data['id_lang'] . '" data-type="file" name="' . $field_data["field_name"] . '_' . $field_data['id_lang'] . '"  id="' . $field_data["html_id"] . '"  class="file_input_data ' . $required . ' form-control ' . $field_data["html_class"] . '">';
                            $html .= '<input type="hidden" name="file_' . $field_data["html_id"] . '" id="file_' . $field_data["html_id"] . '" value="' . $file_extension . '">';
                            $html .= '<input type="hidden" name="file_value_' . $field_data["html_id"] . '" class="file_value_' . $field_data["html_id"] . '_' . $field_data['id_lang'] . '" id="file_' . $field_data["html_id"] . '" value="' . $value_file . '">';
                            if (!empty($field_data['file_extension'])) {
                                $html.= $this->language->get('valid_extension_file') . $field_data['file_extension'];
                            }
                            $html .= '</span>';
                        } else if ($field_data['type'] == 'date') {
                            $value = '';
                            if ($seller_lang == $lang) {
                                $value = $field_data['seller_value'];
                            }
                            $html .= '<div class="input-group date" data-provide="datepicker">';
                            $html .= '<input type="text" class="' . $required . ' form-control" data-type="date" name="' . $field_data["field_name"] . '_' . $field_data['id_lang'] . '"  value="' . $value . '" id="' . $field_data["html_id"] . '">';
                            $html .= '<div class="input-group-addon">';
                            $html .= '<span class="glyphicon glyphicon-th"></span>';
                            $html .= '</div>';
                            $html .= '</div>';
                        }
                        $html.= '</div></div></div></div>';
                    }
                }
                $arr[$i] = $html;
                $html = '';
                $i++;
            }
        }
        return $arr;
    }

}
