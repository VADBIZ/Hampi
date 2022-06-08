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

            $data['sellers'][] = array(
                'seller_id' => $result['seller_id'],
                'customer_id' => $result['customer_id'],
                'firstname' => $result['firstname'],
                'lastname' => $result['lastname'],
                'email' => $result['email'],
                'shop' => $result['shop'],
                'state' => $result['state_name'],
                'country' => $result['country'],
                'status' => $result['active'],
                'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
                'disable' => $this->url->link('kbmp_marketplace/sellers_list/disable', $this->session_token_key . '=' . $this->session_token . '&customer_id=' . $result['customer_id'], true),
                'activate' => $this->url->link('kbmp_marketplace/sellers_list/activate', $this->session_token_key . '=' . $this->session_token . '&customer_id=' . $result['customer_id'], true),
                'edit' => $this->url->link('customer/customer/edit', $this->session_token_key . '=' . $this->session_token . '&customer_id=' . $result['customer_id'] . '&redirect=sellers_list', true)
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
            $value["seller_value"] = html_entity_decode(nl2br($value["seller_value"]));
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

}
