<?php

class ControllerKbmpMarketplaceSellersTransaction extends Controller {

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

        $this->load->model('kbmp_marketplace/kbmp_marketplace');
        $this->load->model('kbmp_marketplace/seller_balance');
        $this->load->language('kbmp_marketplace/common');
        $this->getList();
    }

    // Function definition to get Sellers List
    protected function getList() {

        if (isset($this->request->get['seller_id'])) {
            $seller_id = $this->request->get['seller_id'];
        } else {
            $this->response->redirect($this->url->link('kbmp_marketplace/sellers_balance', $this->session_token_key . '=' . $this->session_token, true));
        }

        $data['heading_title'] = $this->language->get('heading_title');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            if ($this->model_kbmp_marketplace_kbmp_marketplace->addNewTransaction($this->request->post)) {

                //Send email to seller in case of amount debit
                if (isset($this->request->post['new_transaction_send_mail']) && $this->request->post['new_transaction_send_mail']) {
                    if (isset($this->request->post['transaction_type']) && $this->request->post['transaction_type'] == '1') {
                        $email_template = $this->model_kbmp_marketplace_kbmp_marketplace->getEmailTemplate(19, $this->config->get('config_language_id'));
                    } else {
                        $email_template = $this->model_kbmp_marketplace_kbmp_marketplace->getEmailTemplate(24, $this->config->get('config_language_id'));
                    }
                    $seller_details = $this->model_kbmp_marketplace_kbmp_marketplace->getSellerAccountDetails($this->request->post['seller_id']);


                    if (isset($email_template) && !empty($email_template)) {
                        $message = str_replace("{{seller_name}}", $seller_details['firstname'] . ' ' . $seller_details['lastname'], $email_template['email_content']); //Seller Full Name
                        $message = str_replace("{{shop_title}}", $seller_details['title'], $message); //Shop Title
                        $message = str_replace("{{seller_email}}", $seller_details['email'], $message); //Seller Full Name
                        $message = str_replace("{{seller_contact}}", $seller_details['telephone'], $message); //Seller Full Name
                        $message = str_replace("{{amount}}", $this->currency->format($this->request->post['amount'], $this->config->get('config_currency')), $message); //Amount
                        $message = str_replace("{{comment}}", $this->request->post['comment'], $message); //Comment
                        $message = str_replace("{{shop_url}}", HTTPS_CATALOG, $message); //Shop URL

                        $email_content = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd">' . "\n";
                        $email_content .= '<html>' . "\n";
                        $email_content .= '  <head>' . "\n";
                        $email_content .= '    <title>' . $email_template['email_subject'] . '</title>' . "\n";
                        $email_content .= '    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">' . "\n";
                        $email_content .= '  </head>' . "\n";
                        $email_content .= '  <body>' . html_entity_decode($message, ENT_QUOTES, 'UTF-8') . '</body>' . "\n";
                        $email_content .= '</html>' . "\n";

                        if (VERSION < 3.0) {
                            $mail = new Mail();
                        } else {
                            $mail = new Mail($this->config->get('config_mail_engine'));
                        }
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
                $this->session->data['success'] = $this->language->get('text_success');
                $this->response->redirect($this->url->link('kbmp_marketplace/sellers_transaction', $this->session_token_key . '=' . $this->session_token . "&seller_id=" . $seller_id, true));
            } else {
                $this->error['warning'] = $this->language->get('text_error');
            }
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

        $data['action'] = $this->url->link('kbmp_marketplace/sellers_transaction', $this->session_token_key . '=' . $this->session_token . "&seller_id=" . $seller_id, true);
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

        $data['column_transaction_id'] = $this->language->get('column_transaction_id');
        $data['column_type'] = $this->language->get('column_type');
        $data['column_comment'] = $this->language->get('column_comment');
        $data['column_amount'] = $this->language->get('column_amount');
        $data['column_transaction_date'] = $this->language->get('column_transaction_date');

        $data['button_save'] = $this->language->get('button_save');
        $data['seller_id'] = $seller_id;

        
        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_knowband_marketplace'),
            'href' => $this->url->link('extension/module/kbmp_marketplace', $this->session_token_key . '=' . $this->session_token, true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('kbmp_marketplace/sellers_transaction', $this->session_token_key . '=' . $this->session_token . "&seller_id=" . $seller_id, true)
        );

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }


        $total = $this->model_kbmp_marketplace_seller_balance->getTotalSellerTransaction($seller_id);
        $results = $this->model_kbmp_marketplace_seller_balance->getSellerTransaction($seller_id);
        
        foreach ($results as $result) {
            $data['transactions'][] = array(
                'transaction_number' => $result['transaction_number'],
                'transaction_type' => $result['transaction_type'] == 0 ? $this->language->get('text_debit') : $this->language->get('text_credit_earning'),
                'amount' => $this->currency->format($result['amount'],$this->config->get('config_currency')),
                'comment' => substr($result['comment'],0, 30),
                'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
            );
        }

        $url = '';

        if (isset($this->request->get['seller_id'])) {
            $url .= '&seller_id=' . urlencode(html_entity_decode($this->request->get['seller_id'], ENT_QUOTES, 'UTF-8'));
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $pagination = new Pagination();
        $pagination->total = $total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('kbmp_marketplace/sellers_transaction', $this->session_token_key . '=' . $this->session_token . $url . '&page={page}', true);
        $data['pagination'] = $pagination->render();
        $data['results'] = sprintf($this->language->get('text_pagination'), ($total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($total - $this->config->get('config_limit_admin'))) ? $total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $total, ceil($total / $this->config->get('config_limit_admin')));

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $active_tab['active_tab'] = 43;
        $data['tab_common'] = $this->load->controller($this->module_path . '/kbmp_marketplace/common', $active_tab);

        if (VERSION < 2.2) {
            $this->response->setOutput($this->load->view('kbmp_marketplace/sellers_transaction.tpl', $data));
        } else {
            $this->response->setOutput($this->load->view('kbmp_marketplace/sellers_transaction', $data));
        }
    }

    protected function validateForm() {

        $this->load->model('kbmp_marketplace/kbmp_marketplace');

        if (!$this->user->hasPermission('modify', 'kbmp_marketplace/sellers_transaction')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (empty($this->request->post['seller_id'])) {
            $this->error['seller_id'] = $this->language->get('error_seller_id');
        }

        if (utf8_strlen($this->request->post['transaction_number']) < 1 || utf8_strlen($this->request->post['transaction_number']) > 255) {
            $this->error['transaction_number'] = $this->language->get('error_transaction_number');
        } else {
            //Check for Unique Transaction Number
            if ($this->model_kbmp_marketplace_kbmp_marketplace->isUniqueTransactionNumber($this->request->post['transaction_number'])) {
                $this->error['transaction_number'] = $this->language->get('error_transaction_number');
            }
        }

        $pattern = '/^\d+(?:\.\d{2})?$/';
        if (preg_match($pattern, $this->request->post['amount']) == '0') {
            $this->error['amount'] = $this->language->get('error_amount');
        }

        return !$this->error;
    }

}
