<?php

class ControllerKbmpMarketplaceSellerActivation extends Controller {

	private $error = array();
	
    public function __construct($params) {
        parent::__construct($params);
        $this->load->model('kbmp_marketplace/kbmp_marketplace');
    }

    public function index() {
		
		$token = $this->request->get['token'];
		$customer_id = $this->model_kbmp_marketplace_kbmp_marketplace->getSellerByToken($token);
		$existSeller = false;
		if (isset($this->model_kbmp_marketplace_kbmp_marketplace->getSellerFirst($customer_id)['email']))
			$existSeller = true;
		
		if (empty($token) || !$customer_id || !$existSeller) {
			
			$this->response->redirect($this->url->link('account/register', 'seller_register=1', true));
			
		} else {
			
			$token = $this->request->get['token'];

			$this->load->language('kbmp_marketplace/common');
			$this->load->language('kbmp_marketplace/seller_activation');
			$this->document->setTitle($this->language->get('heading_title'));

			$data['header'] = $this->load->controller('common/header');
			$data['footer'] = $this->load->controller('common/footer');
			
			$data['customer_id'] = $customer_id;

			$this->document->setRobots('noindex,follow');
			
			if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
				$postData = $this->request->post;
				$password = $postData['password'];
				$customer_id = $postData['customer_id'];
				if ($this->model_kbmp_marketplace_kbmp_marketplace->setSellerPassword($customer_id,$password)) {
					
					//удаляем токен
					$this->model_kbmp_marketplace_kbmp_marketplace->removeSellerToken($token);
					
					//узнаем email продавца
					$email = $this->model_kbmp_marketplace_kbmp_marketplace->getSellerFirst($customer_id)['email'];
					
					//меняем статус в первый раз при входе
					$dataFields = array(
						'fields' => array(
							7 => 'd'
						),
						'customer_id' => $customer_id
					);
					$this->model_kbmp_marketplace_kbmp_marketplace->setseller_field_values($dataFields);
					
					//удаляем сессию гостя
					unset($this->session->data['guest']);
					
					//заходим в учетку
					$this->customer->login($email,$password);
					
					//редирект в личный кабинет продавца
					$this->response->redirect($this->url->link('kbmp_marketplace/dashboard', '', true));
				}
			}
			
			if (isset($this->error['error_warning'])) {
				$data['error_warning'] = $this->error['error_warning'];
			} else {
				$data['error_warning'] = '';
			}
			
			if (isset($this->error['password'])) {
				$data['error_password'] = $this->error['password'];
			} else {
				$data['error_password'] = '';
			}
			
			if (isset($this->error['password_confirm'])) {
				$data['error_password_confirm'] = $this->error['password_confirm'];
			} else {
				$data['error_password_confirm'] = '';
			}
			
			if (isset($this->request->post['password'])) {
				$data['password'] = $this->request->post['password'];
			} else {
				$data['password'] = '';
			}
			
			if (isset($this->request->post['password_confirm'])) {
				$data['password_confirm'] = $this->request->post['password_confirm'];
			} else {
				$data['password_confirm'] = '';
			}
			
			$this->response->setOutput($this->load->view('kbmp_marketplace/seller_activation', $data));
			
		}
	}
	
	//валидация формы
	public function validate(){
		$postData = $this->request->post;
		
		//если пароля нет
		if (empty($postData['password']))
			$this->error['password'] = $this->language->get('error_password');
		
		//если подтверждения пароля нет
		if (empty($postData['password_confirm']))
			$this->error['password_confirm'] = $this->language->get('error_password_confirm');
		
		//если пароли не совпадают
		if ((!empty($postData['password']) && !empty($postData['password_confirm'])) && ($postData['password'] != $postData['password_confirm'])) {
			$this->error['error_warning'] = $this->language->get('error_password_match');
		}
		
		//есть ли продавец с таким email'ом?
		
		
		return !$this->error;
	}

}
