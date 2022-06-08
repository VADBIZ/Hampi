<?php

class ControllerKbmpMarketplaceSellersBalance extends Controller {

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

    public function index() {
        $this->load->language($this->module_path . '/kbmp_marketplace');
        $this->load->language('kbmp_marketplace/sellers_transaction');

        $this->document->setTitle($this->language->get('heading_title_main'));

        $this->load->language('kbmp_marketplace/common');
        $data['heading_title'] = $this->language->get('heading_balance_title');

        $this->load->model('kbmp_marketplace/kbmp_marketplace');
        $this->load->model('kbmp_marketplace/seller_balance');

        if (isset($this->request->get['filter_shop'])) {
            $filter_shop = $this->request->get['filter_shop'];
        } else {
            $filter_shop = null;
        }

        if (isset($this->request->get['filter_email'])) {
            $filter_email = $this->request->get['filter_email'];
        } else {
            $filter_email = null;
        }

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'ksod.seller_id';
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

        if (isset($this->request->get['filter_shop'])) {
            $url .= '&filter_shop=' . urlencode(html_entity_decode($this->request->get['filter_shop'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_email'])) {
            $url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
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

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];

            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['seller_id'])) {
            $data['error_seller_id'] = $this->error['seller_id'];
        } else {
            $data['error_seller_id'] = '';
        }

        if (isset($this->error['transaction_number'])) {
            $data['error_transaction_number'] = $this->error['transaction_number'];
        } else {
            $data['error_transaction_number'] = '';
        }

        if (isset($this->error['amount'])) {
            $data['error_amount'] = $this->error['amount'];
        } else {
            $data['error_amount'] = '';
        }

        $data['action'] = $this->url->link('kbmp_marketplace/sellers_balance', $this->session_token_key . '=' . $this->session_token, true);

        if (isset($this->request->post['seller_id'])) {
            $data['seller_id'] = $this->request->post['seller_id'];
        } else {
            $data['seller_id'] = '';
        }

        $data['token'] = $this->session_token;

        $data['view_title'] = $this->language->get('view_title');
        $data['new_transaction_title'] = $this->language->get('new_transaction_title');
        $data['add_transaction_title'] = $this->language->get('add_transaction_title');
        $data['close_transaction_form'] = $this->language->get('close_transaction_form');

        $data['text_no_results'] = $this->language->get('text_no_results');
        $data['text_from_date'] = $this->language->get('text_from_date');
        $data['text_to_date'] = $this->language->get('text_to_date');
        $data['text_view'] = $this->language->get('text_view');
        $data['text_edit'] = $this->language->get('text_edit');
        $data['text_filter'] = $this->language->get('text_filter');
        $data['text_reset'] = $this->language->get('text_reset');
        $data['text_select_type'] = $this->language->get('text_select_type');
        $data['text_balance_history'] = $this->language->get('text_balance_history');
        $data['text_transaction_history'] = $this->language->get('text_transaction_history');
        $data['text_credit'] = $this->language->get('text_credit');
        $data['text_debit'] = $this->language->get('text_debit');
        $data['text_select_seller'] = $this->language->get('text_select_seller');
        $data['text_choose_seller'] = $this->language->get('text_choose_seller');
        $data['text_transaction_id'] = $this->language->get('text_transaction_id');
        $data['text_transaction_type'] = $this->language->get('text_transaction_type');
        $data['text_amount'] = $this->language->get('text_amount');
        $data['text_comment'] = $this->language->get('text_comment');
        $data['text_notification'] = $this->language->get('text_notification');
        $data['text_seller_transaction'] = $this->language->get('text_seller_transaction');

        $data['column_seller'] = $this->language->get('column_seller');
        $data['column_email'] = $this->language->get('column_email');
        $data['column_total_earning'] = $this->language->get('column_total_earning');
        $data['column_admin_earning'] = $this->language->get('column_admin_earning');
        $data['column_seller_earning'] = $this->language->get('column_seller_earning');
        $data['column_amount_transferred'] = $this->language->get('column_amount_transferred');
        $data['column_balance'] = $this->language->get('column_balance');
        $data['column_transaction_id'] = $this->language->get('column_transaction_id');
        $data['column_type'] = $this->language->get('column_type');
        $data['column_comment'] = $this->language->get('column_comment');
        $data['column_amount'] = $this->language->get('column_amount');
        $data['column_transaction_date'] = $this->language->get('column_transaction_date');
        $data['column_seller_eligible_earning'] = $this->language->get('column_seller_eligible_earning');

        $data['button_save'] = $this->language->get('button_save');

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_knowband_marketplace'),
            'href' => $this->url->link('extension/module/kbmp_marketplace', $this->session_token_key . '=' . $this->session_token, true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_balance_title'),
            'href' => $this->url->link('kbmp_marketplace/sellers_balance', $this->session_token_key . '=' . $this->session_token . $url, true)
        );

        $data['sellers_balance_history'] = array();

        $filter_data = array(
            'filter_shop' => trim($filter_shop),
            'filter_email' => trim($filter_email),
            'sort' => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        );
        $data['filter_data'] = $filter_data;

        //Get Sellers List
        $total_records = $this->model_kbmp_marketplace_kbmp_marketplace->getTotalSellers($filter_data);

        $sellersList = $this->model_kbmp_marketplace_kbmp_marketplace->getSellers($filter_data);
        $data['sellers_list'] = array();
        if ($sellersList && !empty($sellersList)) {
            foreach ($sellersList as $sellersList) {
                $total_earning = $this->model_kbmp_marketplace_seller_balance->getTotalSellerSale($sellersList['seller_id']);
                $amount_transferred = $this->model_kbmp_marketplace_seller_balance->getTotalSellerPayout($sellersList['seller_id']);
                $seller_earning = $this->model_kbmp_marketplace_seller_balance->getTotalSellerEarning($sellersList['seller_id'], 0);
                $admin_earning = $this->model_kbmp_marketplace_seller_balance->getTotalAdminCommission($sellersList['seller_id']);

                $seller_earning_eligible = $this->model_kbmp_marketplace_seller_balance->getTotalSellerEarning($sellersList['seller_id'], 1);
                
                //Total Credit Amount Added By Admin from the Admin
                $total_credited = $this->model_kbmp_marketplace_seller_balance->getTotalCreditAmountPayout($sellersList['seller_id']);

                //Total Balance = Earning + Credit - Payment Done
                $total_balance = $seller_earning_eligible + $total_credited - $amount_transferred;

        
                $data['sellers_list'][] = array(
                    'seller_id' => $sellersList['seller_id'],
                    'title' => $sellersList['shop'],
                    'seller_email' => $sellersList['email'],
                    'total_earning' => $this->currency->format($total_earning, $this->config->get('config_currency')),
                    'admin_earning' => $this->currency->format($admin_earning, $this->config->get('config_currency')),
                    'seller_earning' => $this->currency->format($seller_earning, $this->config->get('config_currency')),
                    'seller_earning_eligible' => $this->currency->format($seller_earning_eligible, $this->config->get('config_currency')),
                    'amount_transferred' => $this->currency->format($amount_transferred, $this->config->get('config_currency')),
                    'balance' => $this->currency->format($total_balance, $this->config->get('config_currency')),
                    'transaction_url' => $this->url->link('kbmp_marketplace/sellers_transaction', $this->session_token_key . '=' . $this->session_token . '&seller_id=' . $sellersList['seller_id'], true),
                );
            }
        }

        $url = '';

        if (isset($this->request->get['filter_seller'])) {
            $url .= '&filter_seller=' . urlencode(html_entity_decode($this->request->get['filter_seller'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_email'])) {
            $url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
        }

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_seller'] = $this->url->link('kbmp_marketplace/sellers_balance', $this->session_token_key . '=' . $this->session_token . '&sort=ksd.title' . $url, true);
        $data['sort_email'] = $this->url->link('kbmp_marketplace/sellers_balance', $this->session_token_key . '=' . $this->session_token . '&sort=c.email' . $url, true);

        $url = '';

        if (isset($this->request->get['filter_seller'])) {
            $url .= '&filter_seller=' . urlencode(html_entity_decode($this->request->get['filter_seller'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['filter_email'])) {
            $url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $total_records;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('kbmp_marketplace/sellers_balance', $this->session_token_key . '=' . $this->session_token . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();
        $data['results'] = sprintf($this->language->get('text_pagination'), ($total_records) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($total_records - $this->config->get('config_limit_admin'))) ? $total_records : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $total_records, ceil($total_records / $this->config->get('config_limit_admin')));

        $data['sort'] = $sort;
        $data['order'] = $order;

        $active_tab['active_tab'] = 43;
        $data['tab_common'] = $this->load->controller($this->module_path . '/kbmp_marketplace/common', $active_tab);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        if (VERSION < 2.2) {
            $this->response->setOutput($this->load->view('kbmp_marketplace/sellers_balance.tpl', $data));
        } else {
            $this->response->setOutput($this->load->view('kbmp_marketplace/sellers_balance', $data));
        }
    }

}
