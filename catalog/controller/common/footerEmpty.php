<?php
class ControllerCommonFooterEmpty extends Controller {
	public function index() {
		$this->load->language('common/footer');

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}
		
		$host = isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1')) ? HTTPS_SERVER : HTTP_SERVER;
		if ($this->request->server['REQUEST_URI'] == '/') {
			$data['currPage'] = $this->url->link('common/home');
		} else {
			$data['currPage'] = $host . substr($this->request->server['REQUEST_URI'], 1, (strlen($this->request->server['REQUEST_URI'])-1));
		}
		
		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}
		
		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/logo.svg';
		} else {
			$data['logo'] = '';
		}

		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);
		
		$data['wa'] = $this->config->get('config_wa');
		$data['tg'] = $this->config->get('config_tg');
		
		//ссылки на страницы
		$data['link_contact'] = $this->url->link('information/contact');
		$data['link_about'] = '/o_nas';
		$data['link_howbuy'] = $this->url->link('information/information&information_id=7');
		$data['link_policy'] = $this->url->link('information/information&information_id=3');
		$data['link_rules'] = $this->url->link('information/information&information_id=9');
		$data['link_accept'] = $this->url->link('information/information&information_id=10');
		$data['link_howsell'] = $this->url->link('information/information&information_id=6');
		$data['link_sellerlogin'] = $this->url->link('account/register&seller_register=1');
		$data['link_other'] = $this->url->link('information/information&information_id=14');

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}
      
       // $this->load->model('catalog/newsletter');
       // $data['konts'] = $this->model_catalog_newsletter->getTotalSubscribed();
      $data['konts'] = '';
      

		$data['scripts'] = $this->document->getScripts('footer');
		$data['styles'] = $this->document->getStyles('footer');
		
		return $this->load->view('common/footerEmpty', $data);
	}
  
    public function emails() {
        $json = array();

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $this->load->model('catalog/newsletter');
          
            if(isset($this->request->post['email'])) {
                $inde = $this->model_catalog_newsletter->isSubscribed($this->request->post['email']);
               
                if($inde && (int)$inde > 0) {
                    $json['error'] = 'Вы уже подписаны!';
                    
                } else {
                    $inde = $this->model_catalog_newsletter->addSubscribed($this->request->post['email']);
                    $json['success'] = 'Вы успешно подписались на новости!';
                }
            }
        }
      
        $this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }
}
