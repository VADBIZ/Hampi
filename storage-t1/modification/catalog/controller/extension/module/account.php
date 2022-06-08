<?php
class ControllerExtensionModuleAccount extends Controller {
	public function index() {
		$this->load->language('extension/module/account');

		$data['logged'] = $this->customer->isLogged();
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['forgotten'] = $this->url->link('account/forgotten', '', true);
		$data['account'] = $this->url->link('account/account', '', true);
		$data['edit'] = $this->url->link('account/edit', '', true);
		$data['password'] = $this->url->link('account/password', '', true);
		$data['address'] = $this->url->link('account/address', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist');
		$data['order'] = $this->url->link('account/order', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['reward'] = $this->url->link('account/reward', '', true);
		$data['return'] = $this->url->link('account/return', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);
		$data['recurring'] = $this->url->link('account/recurring', '', true);

			$this->load->model('setting/kbmp_marketplace');
                        $this->load->language('kbmp_marketplace/account_module'); 
                        //Get the module configuration values
                        $store_id = (int) $this->config->get('config_store_id');
                        $settings = $this->model_setting_kbmp_marketplace->getSetting('kbmp_marketplace', $store_id);
                        $data['kbmp_marketplace_settings'] = $settings;

                        //Start - Condition added to check if module is enabled - added on 15-Jan-2019 by Harsh
                        if (isset($settings['kbmp_marketplace_setting']['kbmp_module_enable']) && $settings['kbmp_marketplace_setting']['kbmp_module_enable']) {
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
		                    
		                $data['dashboard'] = $this->url->link('kbmp_marketplace/dashboard', '', true);
		                $data['seller_profile'] = $this->url->link('kbmp_marketplace/seller_profile', '', true);
		                $data['seller_products'] = $this->url->link('kbmp_marketplace/products', '', true);
		                $data['seller_orders'] = $this->url->link('kbmp_marketplace/orders', '', true);
		                $data['product_reviews'] = $this->url->link('kbmp_marketplace/product_reviews', '', true);
		                $data['seller_reviews'] = $this->url->link('kbmp_marketplace/seller_reviews', '', true);
		                $data['seller_earning'] = $this->url->link('kbmp_marketplace/earning', '', true);
		                $data['seller_transactions'] = $this->url->link('kbmp_marketplace/transactions', '', true);
		                $data['category_request'] = $this->url->link('kbmp_marketplace/category_request', '', true);
		                $data['seller_shipping'] = $this->url->link('kbmp_marketplace/shipping', '', true);
		                    
		                $this->load->model('kbmp_marketplace/kbmp_marketplace');
		                $data['is_seller'] = $this->model_kbmp_marketplace_kbmp_marketplace->is_seller();
			}
                        $this->load->language('extension/module/account');
			//Ends
			

		return $this->load->view('extension/module/account', $data);
	}
}