<?php

//<!--/* Starts Changes done by Mahima on 22nd April 2020 for adding commission new page */-->
class ControllerKbmpMarketplaceCommission extends Controller {

    public function __construct($params) {
        parent::__construct($params);
        $this->load->model('kbmp_marketplace/kbmp_marketplace');
        $this->model_kbmp_marketplace_kbmp_marketplace->getSellerLoggedStatus($this->url->link('kbmp_marketplace/commission', '', true));
    }

    public function index() {

        $this->load->language('kbmp_marketplace/common');
        $this->load->language('kbmp_marketplace/commission');

        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('kbmp_marketplace/kbmp_marketplace');
        $this->getList();
    }

    // Function definition to get Transactions List
    protected function getList() {
        $data['title'] = $this->document->getTitle();
        $data['footer'] = $this->load->view('kbmp_marketplace/footer', $data);
        $data['header'] = $this->load->controller('kbmp_marketplace/header');
        $data['text_back_to_site'] = $this->language->get('text_back_to_site');
        $data['text_my_account1'] = $this->language->get('text_my_account1');
        $data['text_logout'] = $this->language->get('text_logout');
        $data['text_commission'] = $this->language->get('text_commission');
        $data['error_account_warning'] = $this->language->get('error_account_warning');
        $data['text_account_warning'] = $this->language->get('text_account_warning');

        $data['home_link'] = $this->url->link('common/home');
        $data['account_link'] = $this->url->link('account/account', '', true);
        $data['logout_link'] = $this->url->link('account/logout', '', true);

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        $data['commissions'] = array();

        //Get Seller ID
        $sellerId = $this->model_kbmp_marketplace_kbmp_marketplace->getSellerByCustomerId();

        $c_id = $this->customer->getId();
        $s_id = $sellerId['seller_id'];
        $sellersCommission = $this->model_kbmp_marketplace_kbmp_marketplace->getSellersCommissionBySellerId($s_id);

        $seller_config = $this->model_kbmp_marketplace_kbmp_marketplace->getSellerConfigs($s_id);
        foreach ($seller_config as $sellerconfig) {
            $global = $sellerconfig['use_global'];
        }
        if ($global == 0) {
            if ($this->config->get('kbmp_marketplace_setting')['kbmp_default_commission'] != $sellersCommission['value']) {
                $data['sellers_default_commission'] = $sellersCommission['value'];
            } else {
                $data['sellers_default_commission'] = $this->config->get('kbmp_marketplace_setting')['kbmp_default_commission'];
            }
        } else {
            $data['sellers_default_commission'] = $this->config->get('kbmp_marketplace_setting')['kbmp_default_commission'];
        }

        $commission_total = $this->model_kbmp_marketplace_kbmp_marketplace->getTotalSellerCommissions($c_id);

        $data['commission_total'] = $commission_total;

        $results = $this->model_kbmp_marketplace_kbmp_marketplace->getCommissions($c_id);
        foreach ($results as $result) {

            $data['commissions'][] = array(
                'category' => $result['name'],
                'commission' => $result['commission'],
            );
        }

        $data['heading_title'] = $this->language->get('heading_title');
        $data['text_my_account'] = $this->language->get('text_my_account');

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
            'text' => $this->language->get('text_current_title'),
            'href' => $this->url->link('common/home')
        );

        $data['text_general_commission'] = $this->language->get('text_general_commission');
        $data['text_no_record'] = $this->language->get('text_no_record');

        //Button Text
        $data['button_filter'] = $this->language->get('button_filter');
        $data['button_reset'] = $this->language->get('button_reset');

        //Column
        $data['column_category'] = $this->language->get('column_category');
        $data['column_commission'] = $this->language->get('column_commission');

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

        /* Starts Changes done by Dharmanshu on 10th JULY 2020 for adding commission new page */
        $data['default_commission_txt'] = $this->language->get('default_commission_txt');
        $data['default_commission_per'] = $this->language->get('default_commission_per');
        /* End Changes done by Dharmanshu on 10th JULY 2020 for adding commission new page */

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

        $pagination = new Pagination();
        $pagination->total = $commission_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('kbmp_marketplace/commission', '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($commission_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($commission_total - $this->config->get('config_limit_admin'))) ? $commission_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $commission_total, ceil($commission_total / $this->config->get('config_limit_admin')));

        $this->load->model('setting/kbmp_marketplace');
        //Get the module configuration values
        $store_id = (int) $this->config->get('config_store_id');
        $settings = $this->model_setting_kbmp_marketplace->getSetting('kbmp_marketplace', $store_id);
        $data['kbmp_marketplace_settings'] = $settings;
        $sellerId = $this->model_kbmp_marketplace_kbmp_marketplace->getSellerByCustomerId();
        $data['seller_details'] = $sellerId;

        $this->response->setOutput($this->load->view('kbmp_marketplace/commission', $data));
    }

}
