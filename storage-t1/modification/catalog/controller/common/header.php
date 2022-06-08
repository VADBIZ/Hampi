<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerCommonHeader extends Controller {
	public function index() {

                    $this->load->model('kbmp_marketplace/kbmp_marketplace');
                    $data['is_seller'] = $this->model_kbmp_marketplace_kbmp_marketplace->is_seller();
                

			$megamenu_setting = $this->config->get('megamenu_setting');
			if($megamenu_setting['status']=='1'){
				$main_menu_selection = $megamenu_setting['main_menu_selection'];
				$data['megamenu_status']=true;
				$this->document->addScript('catalog/view/javascript/megamenu/megamenu.js');
				$this->document->addScript('catalog/view/javascript/megamenu/jquery.menu-aim.js?v3');
				if ($main_menu_selection == '1') {
				$this->document->addStyle('catalog/view/theme/default/stylesheet/megamenu.css');
				}
				if ($main_menu_selection == '0') {
				$this->document->addStyle('catalog/view/theme/default/stylesheet/megamenu_h.css');
				}
				$data['menuvh'] = $this->load->controller('common/menuvh');
			} else { 
				$data['megamenu_status']=false;
			}
			
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		
                    if (isset($this->request->get['route']) && $this->request->get['route'] == 'kbmp_marketplace/sellers') {
                        $data['description'] = $this->language->get('listing_meta_keywords');
                    } else {
                        $data['description'] = $this->document->getDescription();
                    }
                
		
                    if (isset($this->request->get['route']) && $this->request->get['route'] == 'kbmp_marketplace/sellers') {
                        $data['keywords'] = $this->language->get('listing_meta_keywords');
                    } else {
                        $data['keywords'] = $this->document->getKeywords();
                    }
                
		$data['links'] = $this->document->getLinks();
		$data['robots'] = $this->document->getRobots();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/logo.svg';
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');
		
		
		$host = isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1')) ? HTTPS_SERVER : HTTP_SERVER;
		if ($this->request->server['REQUEST_URI'] == '/') {
			$data['og_url'] = $this->url->link('common/home');
		} else {
			$data['og_url'] = $host . substr($this->request->server['REQUEST_URI'], 1, (strlen($this->request->server['REQUEST_URI'])-1));
		}
		
		$data['og_image'] = $this->document->getOgImage();

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');
			$data['text_wishlist'] = $this->model_account_wishlist->getTotalWishlist();
		} else {
			$data['text_wishlist'] = isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0;
		}
		
		// Comparelist
		$this->load->model('catalog/product');
		$this->load->language('product/compare');
		$compareTotal = 0;
		if (isset($this->session->data['compare'])) {
			foreach($this->session->data['compare'] as $cat => $value) {
				$compareTotal += count($value);
			}
		}
		$data['text_comparelist'] = sprintf($this->language->get('text_compare_count'), $compareTotal);

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['link_likes'] = $this->url->link('account/wishlist', '', true);
		$data['link_compare'] = $this->url->link('product/compare', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');

                    $this->load->language('kbmp_marketplace/header');  
                    $this->load->model('setting/kbmp_marketplace');
                    //Get the module configuration values
                    $store_id = (int) $this->config->get('config_store_id');
                    $settings = $this->model_setting_kbmp_marketplace->getSetting('kbmp_marketplace', $store_id);
                    $data['kbmp_marketplace_settings'] = $settings;

                    //Start - Condition added to check if module is enabled - added on 15-Jan-2019 by Harsh
                    if (isset($settings['kbmp_marketplace_setting']['kbmp_module_enable']) && $settings['kbmp_marketplace_setting']['kbmp_module_enable']) {
                        $data['text_dashboard'] = $this->language->get('text_dashboard');
                        $data['text_seller_profile'] = $this->language->get('text_seller_profile');
                        //Starts Changes done by Mahima on 22nd April 2020 for adding commission link 
                        $data['text_commission'] = $this->language->get('text_commission');
                        //Ends Changes done by Mahima on 22nd April 2020 for adding commission link
                        $data['text_seller_products'] = $this->language->get('text_products');
                        $data['text_seller_orders'] = $this->language->get('text_orders');
                        $data['text_product_reviews'] = $this->language->get('text_product_reviews');
                        $data['text_seller_reviews'] = $this->language->get('text_seller_reviews');
                        $data['text_seller_earning'] = $this->language->get('text_earning');
                        $data['text_seller_transactions'] = $this->language->get('text_transactions');
                        $data['text_payoutRequest'] = $this->language->get('text_payoutRequest');
                        $data['text_category_request'] = $this->language->get('text_category_request');
                        $data['text_seller_shipping'] = $this->language->get('text_shipping');
                        $data['text_product_return'] = $this->language->get('text_product_return');
                        $data['text_product_import'] = $this->language->get('listing_meta_keywords');
                        $data['text_coupons'] = $this->language->get('text_coupons');
                        $data['text_downloads'] = $this->language->get('text_downloads');
                        $data['text_support_system'] = $this->language->get('text_support_system');
                        $data['text_back_to_site'] = $this->language->get('text_back_to_site');
                        $data['text_sellers'] = $this->language->get('text_sellers');
                        $data['text_seller_account'] = $this->language->get('text_seller_account');
                        $data['register_seller_txt'] = $this->language->get('text_seller_register'); //by dharmanshu 6-02-2021 for the header text

                        $data['sellers'] = $this->url->link('kbmp_marketplace/sellers', '', true);
                        $data['home_link'] = $this->url->link('common/home');
                        $data['dashboard_link'] = $this->url->link('kbmp_marketplace/dashboard');
                        $data['seller_profile_link'] = $this->url->link('kbmp_marketplace/seller_profile');
                        //Starts Changes done by Mahima on 22nd April 2020 for adding commission link 
                        $data['commission_link'] = $this->url->link('kbmp_marketplace/commission');
                        //Ends Changes done by Mahima on 22nd April 2020 for adding commission link 
                        $data['products_link'] = $this->url->link('kbmp_marketplace/products');
                        $data['orders_link'] = $this->url->link('kbmp_marketplace/orders');
                        $data['product_reviews_link'] = $this->url->link('kbmp_marketplace/product_reviews');
                        $data['seller_reviews_link'] = $this->url->link('kbmp_marketplace/seller_reviews');
                        $data['earning_link'] = $this->url->link('kbmp_marketplace/earning');
                        $data['transactions_link'] = $this->url->link('kbmp_marketplace/transactions');
                        $data['payoutRequest_link'] = $this->url->link('kbmp_marketplace/payoutRequest');
                        $data['category_request_link'] = $this->url->link('kbmp_marketplace/category_request');
                        $data['shipping_link'] = $this->url->link('kbmp_marketplace/shipping');
                        $data['product_import_link'] = $this->url->link('kbmp_marketplace/product_import');
                        $data['return_link'] = $this->url->link('kbmp_marketplace/return');
                        $data['coupon_link'] = $this->url->link('kbmp_marketplace/coupon');
                        $data['downloads_link'] = $this->url->link('kbmp_marketplace/download');
                        $data['support_link'] = $this->url->link('kbmp_marketplace/support');
                         $data['seller_register'] =  $data['action'] = $this->url->link('account/register', 'seller_register=1', true); //by dharmanshu 6-02-2021 for the header text
                         $data['common_seller_register'] =  $data['action'] = $this->url->link('account/register', true); //by dharmanshu 6-02-2021 for the header text
                    }  
                    $this->load->language('common/header');          
                    //Ends
                
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		if ($this->config->get('configblog_blog_menu')) {
			$data['blog_menu'] = $this->load->controller('blog/menu');
		} else {
			$data['blog_menu'] = '';
		}
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menuvh');

		return $this->load->view('common/header', $data);
	}
}
