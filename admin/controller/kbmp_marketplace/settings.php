<?php

require DIR_SYSTEM . 'library/kbmp_marketplace/paypal/autoload.php';

use PayPal\Api;
use PayPal\Rest\ApiContext;

class ControllerKbmpmarketplaceSettings extends Controller {

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

    public function order() {

        $this->load->language('kbmp_marketplace/common');
        $this->load->language($this->module_path . '/kbmp_marketplace');
        $this->document->setTitle($this->language->get('heading_title_main'));

        $this->load->language('kbmp_marketplace/order_setting');

        $this->load->model('setting/setting');
        $this->load->model('setting/kbmp_marketplace');
        $this->load->model('localisation/order_status');

        if (isset($this->request->get['store_id'])) {
            $store_id = $this->request->get['store_id'];
        } else {
            $store_id = (int) $this->config->get('config_store_id');
        }

        //Get Language Content
        $data['heading_title'] = $this->language->get('heading_title');
        $data['heading_subtitle'] = $this->language->get('heading_subtitle');

        $data['button_save'] = $this->language->get('button_save');


        //handle Post Request
        if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
            $settings = $this->model_setting_kbmp_marketplace->getSetting('kbmp_marketplace', $store_id);
            $form_data = $this->request->post;
            if(!empty($form_data)){
                // In the setting data, Update the post data & save again in the DB
                foreach($form_data as $field_name => $field_value) {
                    $settings['kbmp_marketplace_setting'][$field_name] = $field_value;
                }
            }
            $this->model_setting_kbmp_marketplace->editSetting('kbmp_marketplace', $settings, $store_id);
            $this->session->data['success'] = $this->language->get('text_setting_success');
            $this->response->redirect($this->url->link('kbmp_marketplace/settings/order', $this->session_token_key . '=' . $this->session_token, 'SSL'));
        }

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

        $settings = $this->model_setting_kbmp_marketplace->getSetting('kbmp_marketplace', $store_id);
        $statusorder = $this->model_localisation_order_status->getOrderStatuses('name');
        $data['order_status'] = $statusorder;


        $data['kbmp_email_on_new_order'] = 1;
        $data['kbmp_enable_seller_order_handling'] = 1;
        foreach($statusorder as $status) {
            $data['allowed_order_status_value'][] = $status['order_status_id'];
        }
        foreach($statusorder as $status) {
            $data['order_status_commission_calculate'][] = $status['order_status_id'];
        }
        $data['seller_info_on_invoice'] = 1;
        $data['admin_info_on_invoice'] = 1;


        if (isset($settings['kbmp_marketplace_setting']['kbmp_email_on_new_order'])) {
            $data['kbmp_email_on_new_order'] = $settings['kbmp_marketplace_setting']['kbmp_email_on_new_order'];
        }

        if (isset($settings['kbmp_marketplace_setting']['kbmp_enable_seller_order_handling'])) {
            $data['kbmp_enable_seller_order_handling'] = $settings['kbmp_marketplace_setting']['kbmp_enable_seller_order_handling'];
        }

        if (!empty($settings['kbmp_marketplace_setting']['allowed_order_status_value'])) {
            $data['allowed_order_status_value'] = $settings['kbmp_marketplace_setting']['allowed_order_status_value'];
        }

        if (!empty($settings['kbmp_marketplace_setting']['order_status_commission_calculate'])) {
            $data['order_status_commission_calculate'] = $settings['kbmp_marketplace_setting']['order_status_commission_calculate'];
        }

        if (isset($settings['kbmp_marketplace_setting']['seller_info_on_invoice'])) {
            $data['seller_info_on_invoice'] = $settings['kbmp_marketplace_setting']['seller_info_on_invoice'];
        }

        if (isset($settings['kbmp_marketplace_setting']['admin_info_on_invoice'])) {
            $data['admin_info_on_invoice'] = $settings['kbmp_marketplace_setting']['admin_info_on_invoice'];
        }

        $data['token'] = $this->session_token;
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $active_tab['active_tab'] = 4;
        $data['tab_common'] = $this->load->controller($this->module_path . '/kbmp_marketplace/common', $active_tab);

        $this->response->setOutput($this->load->view('kbmp_marketplace/order_settings', $data));
    }

}
