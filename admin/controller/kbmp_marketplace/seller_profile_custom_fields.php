<?php

class ControllerKbmpMarketplaceSellerProfileCustomFields extends Controller {

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
        $this->document->addScript('view/javascript/kbmp_marketplace/seller_custom_fields/seller_custom_fields.js');

        $this->document->addStyle('view/javascript/summernote/summernote.css');
        $this->document->addStyle('view/stylesheet/kbmp_marketplace/bootstrap-tagsinput.css');
        $this->document->addStyle('view/stylesheet/kbmp_marketplace/scrolltabs.css');
        $this->document->addStyle('view/stylesheet/kbmp_marketplace/kbmp_validation.css');
        $this->document->addStyle('view/stylesheet/seller_custom_fields/seller_custom_fields.css');

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

    public function index() {
        $this->load->language($this->module_path . '/kbmp_marketplace');
        $this->load->language('kbmp_marketplace/sellers_profile_custom_fields');
        $this->document->setTitle($this->language->get('heading_title_main'));
        $this->load->model('localisation/country');
        $this->load->model('kbmp_marketplace/kbmp_marketplace');
        $this->load->model('kbmp_marketplace/sellers_profile_custom_fields');

        $this->getList();
    }

    protected function getList() {

        if (isset($this->request->get['id_field'])) {
            $id_field = $this->request->get['id_field'];
        } else {
            $id_field = null;
        }

        if (isset($this->request->get['type'])) {
            $type = $this->request->get['type'];
        } else {
            $type = null;
        }

        if (isset($this->request->get['id_section'])) {
            $id_section = $this->request->get['id_section'];
        } else {
            $id_section = null;
        }

        if (isset($this->request->get['active'])) {
            $active = $this->request->get['active'];
        } else {
            $active = null;
        }

        if (isset($this->request->get['label'])) {
            $label = $this->request->get['label'];
        } else {
            $label = null;
        }
        if (isset($this->request->get['from_date'])) {
            $from_date = date('Y-m-d', strtotime($this->request->get['from_date']));
        } else {
            $from_date = null;
        }
        if (isset($this->request->get['to_date'])) {
            $to_date = date('Y-m-d', strtotime($this->request->get['to_date']));
        } else {
            $to_date = null;
        }

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }


        $data['id_field_filter'] = trim($id_field);
        $data['type_filter'] = trim($type);
        $data['id_section_filter'] = trim($id_section);
        $data['active_filter'] = trim($active);
        $data['label_filter'] = trim($label);
        $data['from_date_filter'] = trim($from_date);
        $data['to_date_filter'] = trim($to_date);

        $url = '';

        if (isset($this->request->get['id_field'])) {
            $url .= '&id_field=' . urlencode(html_entity_decode($this->request->get['id_field'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['type'])) {
            $url .= '&type=' . urlencode(html_entity_decode($this->request->get['type'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['id_section'])) {
            $url .= '&id_section=' . urlencode(html_entity_decode($this->request->get['id_section'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['active'])) {
            $url .= '&active=' . urlencode(html_entity_decode($this->request->get['active'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['label'])) {
            $url .= '&label=' . urlencode(html_entity_decode($this->request->get['label'], ENT_QUOTES, 'UTF-8'));
        }
        if (isset($this->request->get['from_date'])) {
            $url .= '&from_date=' . urlencode(html_entity_decode($this->request->get['from_date'], ENT_QUOTES, 'UTF-8'));
        }
        if (isset($this->request->get['to_date'])) {
            $url .= '&to_date=' . urlencode(html_entity_decode($this->request->get['to_date'], ENT_QUOTES, 'UTF-8'));
        }
        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }
        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = '';
        }
        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }
        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_knowband_marketplace'),
            'href' => $this->url->link('extension/module/kbmp_marketplace', $this->session_token_key . '=' . $this->session_token, true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('kbmp_marketplace/seller_profile_custom_fields', $this->session_token_key . '=' . $this->session_token . $url, true)
        );

        $data['sellers'] = array();
        $get_language_details = $this->model_kbmp_marketplace_sellers_profile_custom_fields->getLanguage();
        $lang_id = 0;
        if (!empty($get_language_details)) {
            foreach ($get_language_details as $key => $value) {
                $lang_id = $value['language_id'];
                break;
            }
        }
        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'ASC';
        }

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }
        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'field.id_field';
        }


        $filter_data = array(
            'id_field' => trim($id_field),
            'type' => trim($type),
            'id_section' => trim($id_section),
            'active' => trim($active),
            'label' => trim($label),
            'sort' => $sort,
            'order' => $order,
            'lang_id' => $lang_id,
            'from_date' => $from_date,
            'to_date' => $to_date,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        );

        $data['filter_data'] = $filter_data;
        $data['sort'] = $sort;
        $data['order'] = $order;
        $custom_fields_total = $this->model_kbmp_marketplace_sellers_profile_custom_fields->getTotalcustom_fields($filter_data);

        $data['custom_fields_total'] = $custom_fields_total;

        $results = $this->model_kbmp_marketplace_sellers_profile_custom_fields->getcustom_fields($filter_data);

        $data['custom_field'] = [];
        foreach ($results as $result) {
            $data['custom_field'][] = array(
                'id_field' => $result['id_field'],
                'type' => $result['type'],
                'id_section' => $result['id_section'],
                'active' => $result['active'],
                'position' => $result['position'],
                'label' => $result['label'],
                'date_upd' => $result['date_upd'],
                'edit' => $this->url->link('kbmp_marketplace/seller_profile_custom_fields/add&id_field=' . $result['id_field'] . '', $this->session_token_key . '=' . $this->session->data['user_token'], true),
                'delete' => $this->url->link('kbmp_marketplace/seller_profile_custom_fields/delete&id_field=' . $result['id_field'] . '', $this->session_token_key . '=' . $this->session->data['user_token'], true)
            );
        }

        $data['heading_title'] = $this->language->get('heading_title');

        //Menu Options Text
        $data['text_seller_catgory_commision'] = $this->language->get('text_seller_catgory_commision');
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

        $data['token'] = $this->session->data['user_token'];

        $data['text_no_results'] = $this->language->get('text_no_results');
        $data['text_from_date'] = $this->language->get('text_from_date');
        $data['text_to_date'] = $this->language->get('text_to_date');
        $data['text_view'] = $this->language->get('text_view');
        $data['text_edit'] = $this->language->get('text_edit');
        $data['text_delete'] = $this->language->get('text_delete');
        $data['text_filter'] = $this->language->get('text_filter');
        $data['text_reset'] = $this->language->get('text_reset');

        $data['id'] = $this->language->get('id');
        $data['label'] = $this->language->get('label');
        $data['input_type'] = $this->language->get('input_type');
        $data['section'] = $this->language->get('section');
        $data['position'] = $this->language->get('position');
        $data['status'] = $this->language->get('status');
        $data['last_update'] = $this->language->get('last_update');

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_id_field'] = $this->url->link('kbmp_marketplace/seller_profile_custom_fields', 'user_token=' . $this->session->data['user_token'] . '&sort=field.id_field' . $url, true);
        $data['sort_type'] = $this->url->link('kbmp_marketplace/seller_profile_custom_fields', 'user_token=' . $this->session->data['user_token'] . '&sort=field.type' . $url, true);
        $data['sort_id_section'] = $this->url->link('kbmp_marketplace/seller_profile_custom_fields', 'user_token=' . $this->session->data['user_token'] . '&sort=field.id_section' . $url, true);
        $data['sort_id_position'] = $this->url->link('kbmp_marketplace/seller_profile_custom_fields', 'user_token=' . $this->session->data['user_token'] . '&sort=field.position' . $url, true);
        $data['sort_active'] = $this->url->link('kbmp_marketplace/seller_profile_custom_fields', 'user_token=' . $this->session->data['user_token'] . '&sort=field.active' . $url, true);
        $data['sort_label'] = $this->url->link('kbmp_marketplace/seller_profile_custom_fields', 'user_token=' . $this->session->data['user_token'] . '&sort=field_lang.label' . $url, true);
        $data['sort_date_upd'] = $this->url->link('kbmp_marketplace/seller_profile_custom_fields', 'user_token=' . $this->session->data['user_token'] . '&sort=field.date_upd' . $url, true);

        $pagination = new Pagination();
        $pagination->total = $custom_fields_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('kbmp_marketplace/seller_profile_custom_fields', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);
        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($custom_fields_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($custom_fields_total - $this->config->get('config_limit_admin'))) ? $custom_fields_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $custom_fields_total, ceil($custom_fields_total / $this->config->get('config_limit_admin')));

        $data['sort'] = $sort;
        $data['order'] = $order;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $active_tab['active_tab'] = 18;
        $data['tab_common'] = $this->load->controller($this->module_path . '/kbmp_marketplace/common', $active_tab);

        $data['text_general'] = $this->language->get('text_general');
        $data['text_meta_info'] = $this->language->get('text_meta_info');
        $data['text_policy'] = $this->language->get('text_policy');
        $data['text_payout_info'] = $this->language->get('text_payout_info');
        $data['filter_status'] = $this->language->get('filter_status');
        $data['filter_status'] = $this->language->get('filter_status');
        $data['text_active'] = $this->language->get('text_active_status');
        $data['text_inactive'] = $this->language->get('text_inactive_status');
        $data['text_add'] = $this->language->get('text_add');
        $data['add_url'] = $this->url->link('kbmp_marketplace/seller_profile_custom_fields/add', 'user_token=' . $this->session->data['user_token']);
        if (VERSION < 2.2) {
            $this->response->setOutput($this->load->view('kbmp_marketplace/seller_profile_custom_fields.tpl', $data));
        } else {
            $this->response->setOutput($this->load->view('kbmp_marketplace/seller_profile_custom_fields', $data));
        }
    }

    public function add() {
        $this->load->language($this->module_path . '/kbmp_marketplace');
        $this->load->language('kbmp_marketplace/common');
        $this->load->model('kbmp_marketplace/sellers_profile_custom_fields');
        $this->load->language('kbmp_marketplace/sellers_profile_custom_fields');

        $get_language_details = $this->model_kbmp_marketplace_sellers_profile_custom_fields->getLanguage();
        $this->document->setTitle($this->language->get('heading_title_main'));


        $this->load->model('setting/setting');

        /* Create a array for passing all the data in the front views */
        $data = array();
        $store_id = (int) $this->config->get('config_store_id');
        $data['store_id'] = $store_id;
        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $edit_field_id = $this->request->post['edit_field_id'];
            //check if the edit form is or not
            if ($edit_field_id > 0) {
                $inserted_id_prev = $this->model_kbmp_marketplace_sellers_profile_custom_fields->get_fieldID($this->request->post['field_name']);

                if ($inserted_id_prev == $edit_field_id || empty($inserted_id_prev)) {
                    // Loop for all the fields according to the language and non languagae //BY DHARMANSHU 20-06-2020
                    $field_id = $this->model_kbmp_marketplace_sellers_profile_custom_fields->updateCustomfields($this->request->post, $edit_field_id);
                    if (!empty($get_language_details)) {
                        foreach ($get_language_details as $key => $lang) {
                            $lang = $lang['language_id'];
                            $this->model_kbmp_marketplace_sellers_profile_custom_fields->update_custom_fields_lang($store_id, $this->request->post, $lang, $edit_field_id);
                        }
                        $redirect_url = $this->url->link('kbmp_marketplace/seller_profile_custom_fields', $this->session_token_key . '=' . $this->session->data['user_token']);
                        $this->response->redirect($redirect_url);
                    }
                } else {
                    $this->session->data['error_status'] = $this->language->get('error_status');
                }
            } else {
                //add
                $inserted_id_prev = $this->model_kbmp_marketplace_sellers_profile_custom_fields->get_fieldID($this->request->post['field_name']);
                if (empty($inserted_id_prev)) {
                    //will add the data acording to the language and non language //BY DHARMANSHU 20-06-2020
                    $field_id = $this->model_kbmp_marketplace_sellers_profile_custom_fields->addCustomfields($this->request->post);
                    if (!empty($get_language_details)) {
                        foreach ($get_language_details as $key => $lang) {
                            $lang = $lang['language_id'];
                            //will add the data acording to the language
                            $this->model_kbmp_marketplace_sellers_profile_custom_fields->add_custom_fields_lang($store_id, $this->request->post, $lang, $field_id);
                        }
                        $redirect_url = $this->url->link('kbmp_marketplace/seller_profile_custom_fields', $this->session_token_key . '=' . $this->session->data['user_token']);
                        $this->response->redirect($redirect_url);
                    }
                } else {
                    $this->session->data['error_status'] = $this->language->get('error_status');
                }
            }
        }

        //for the edit functionality
        $data['custom_fields'] = [];
        $data['custom_fields_lang_data'] = [];
        $data['edit_status'] = 0;
        $data['select_type_edit'] = '';
        if (isset($this->request->get['id_field'])) {
            $id_field = $this->request->get['id_field'];
            $data['custom_fields'] = $this->model_kbmp_marketplace_sellers_profile_custom_fields->get_Customfields_data($id_field);
            $data['custom_fields_lang_data'] = $this->model_kbmp_marketplace_sellers_profile_custom_fields->get_custom_fields_lang_data($id_field);
        }
        if (!empty($data['custom_fields'])) {
            $data['edit_status'] = 1;
            $data['select_type_edit'] = $data['custom_fields']['type'];
        }

        $data['heading_add_custom_fields'] = $this->language->get('heading_add_custom_fields');
        $data['select_field'] = $this->language->get('select_field');
        $data['empty_keyword'] = $this->language->get('empty_keyword');
        $data['add_keyword_heading'] = $this->language->get('add_keyword_heading');
        $data['button_close'] = $this->language->get('button_close');
        $data['button_save'] = $this->language->get('button_save');
        $data['button_cancel'] = $this->language->get('button_cancel');
        $data['heading_title'] = $this->language->get('heading_title');
        $data['heading_module_configuration'] = $this->language->get('heading_module_configuration');
        $data['template_name'] = $this->language->get('template_name');
        $data['template_name_hint'] = $this->language->get('template_name_hint');
        $data['template_image'] = $this->language->get('template_image');
        $data['template_image_hint'] = $this->language->get('template_image_hint');
        $data['select_template_image'] = $this->language->get('select_template_image');
        $data['view_image'] = $this->language->get('view_image');
        $data['add_image'] = $this->language->get('add_image');
        $data['template_keywords'] = $this->language->get('template_keywords');
        $data['template_keywords_hint'] = $this->language->get('template_keywords_hint');
        $data['add_keyword'] = $this->language->get('add_keyword');
        $data['token'] = $this->session_token;
        $data['token_key'] = $this->session_token_key;
        $data['module_path'] = $this->module_path;
        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_disabled'] = $this->language->get('text_disabled');
        $data['select_language_hint'] = $this->language->get('select_language_hint');
        $data['select_language'] = $this->language->get('select_language');
        $data['enter_keywords'] = $this->language->get('enter_keywords');
        $data['enter_keywords_hint'] = $this->language->get('enter_keywords_hint');
        $data['error_empty'] = $this->language->get('error_empty');
        $data['form_error'] = $this->language->get('text_error_forms');

        $data['get_language_details'] = $get_language_details;

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_knowband_marketplace'),
            'href' => $this->url->link('extension/module/kbmp_marketplace', $this->session_token_key . '=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('kbmp_marketplace/seller_profile_custom_fields', $this->session_token_key . '=' . $this->session->data['user_token'], true)
        );


        $data['cancel'] = $this->url->link('kbmp_marketplace/seller_profile_custom_fields', $this->session_token_key . '=' . $this->session->data['user_token'] . '&store_id=' . $store_id . '', true);

        $active_tab['active_tab'] = 18;
        $data['tab_common'] = $this->load->controller($this->module_path . '/kbmp_marketplace/common', $active_tab);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $data['store_id'] = $store_id;
        $data['select_field'] = $this->language->get('select_field');
        $data['select'] = $this->language->get('select');
        $data['radio'] = $this->language->get('radio');
        $data['checkbox'] = $this->language->get('checkbox');
        $data['textarea'] = $this->language->get('textarea');
        $data['file_type'] = $this->language->get('file_type');
        $data['date'] = $this->language->get('date');
        $data['text'] = $this->language->get('text');
        $data['select_type'] = $this->language->get('select_type');

        /* For the fiels */
        $data['required_field'] = $this->language->get('required_field');
        $data['required_field_hint'] = $this->language->get('required_field_hint');
        $data['seller_registration'] = $this->language->get('seller_registration');
        $data['textseller_profile_page'] = $this->language->get('textseller_profile_page');
        $data['textseller_profile_page_hint'] = $this->language->get('textseller_profile_page_hint');
        $data['field_status'] = $this->language->get('field_status');
        $data['field_status_hint'] = $this->language->get('field_status_hint');
        $data['field_label'] = $this->language->get('field_label');
        $data['field_label_hint'] = $this->language->get('field_label_hint');
        $data['field_description'] = $this->language->get('field_description');

        $data['html_id'] = $this->language->get('html_id');
        $data['html_class'] = $this->language->get('html_class');
        $data['field_name_data'] = $this->language->get('field_name');

        $data['section'] = $this->language->get('section');
        $data['text_general'] = $this->language->get('text_general');
        $data['text_meta_info'] = $this->language->get('text_meta_info');
        $data['text_policy'] = $this->language->get('text_policy');
        $data['text_payout_info'] = $this->language->get('text_payout_info');

        //for the text field
        $data['text_placeholder'] = $this->language->get('text_placeholder');
        $data['error_message'] = $this->language->get('error_message');
        $data['error_message_hint'] = $this->language->get('error_message_hint');
        $data['min_length'] = $this->language->get('min_length');
        $data['max_length'] = $this->language->get('max_length');

        //for the select field
        $data['select_option'] = $this->language->get('select_option');
        $data['select_option_msg'] = $this->language->get('select_option_msg');
        $data['select_option_default'] = $this->language->get('select_option_default');
        $data['select_option_default_msg'] = $this->language->get('select_option_default_msg');
        $data['multiselect'] = $this->language->get('multiselect');

        //for the textarea
        $data['validation_textarea'] = $this->language->get('validation_textarea');
        $data['isGenericName'] = $this->language->get('isGenericName');
        $data['isAddress'] = $this->language->get('isAddress');
        $data['isCityName'] = $this->language->get('isCityName');
        $data['isMessage'] = $this->language->get('isMessage');
        $data['isPhoneNumber'] = $this->language->get('isPhoneNumber');
        $data['isDniLite'] = $this->language->get('isDniLite');
        $data['isEmail'] = $this->language->get('isEmail');
        $data['isPasswd'] = $this->language->get('isPasswd');
        $data['text_editor_show'] = $this->language->get('text_editor_show');

        //for the file type 
        $data['editable_label'] = $this->language->get('editable_label');
        $data['editable_label_hint'] = $this->language->get('editable_label_hint');
        $data['file_extension'] = $this->language->get('file_extension');
        $data['file_extension_msg'] = $this->language->get('file_extension_msg');
        $data['field_position'] = $this->language->get('field_position');

        $data['languages'] = $get_language_details;
        $data['field_name'] = 1;

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

        //for the field name
        $field_name = $this->model_kbmp_marketplace_sellers_profile_custom_fields->get_lastID_field();
        if (!empty($field_name)) {
            $field_name = $field_name['id_field'] + 1;
            $data['field_name'] = $field_name;
        }
        if (isset($this->session->data['submit_status'])) {
            $data['submit_status'] = $this->session->data['submit_status'];
            unset($this->session->data['submit_status']);
        } else {
            $data['submit_status'] = '';
        }
        if (isset($this->session->data['error_status'])) {
            $data['error_status'] = $this->session->data['error_status'];
            unset($this->session->data['error_status']);
        } else {
            $data['error_status'] = '';
        }
        if (VERSION < 2.2) {
            $this->response->setOutput($this->load->view('kbmp_marketplace/seller_profile_custom_fields_add.tpl', $data));
        } else {
            $this->response->setOutput($this->load->view('kbmp_marketplace/seller_profile_custom_fields_add', $data));
        }
    }

    public function delete() {
        $id_field = $this->request->get['id_field'];
        $this->load->model('kbmp_marketplace/sellers_profile_custom_fields');
        $this->model_kbmp_marketplace_sellers_profile_custom_fields->delete_custom_field($id_field);
        $redirect_url = $this->url->link('kbmp_marketplace/seller_profile_custom_fields', $this->session_token_key . '=' . $this->session->data['user_token']);
        $this->response->redirect($redirect_url);
    }

}
