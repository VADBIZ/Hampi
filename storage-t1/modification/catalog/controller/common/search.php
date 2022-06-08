<?php
class ControllerCommonSearch extends Controller {
	public function index() {
		$this->load->language('common/search');

		$data['text_search'] = $this->language->get('text_search');

		if (isset($this->request->get['search'])) {
			$data['search'] = $this->request->get['search'];
		} else {
			$data['search'] = '';
		}


                    $this->load->model('setting/kbmp_marketplace');
                    //Get the module configuration values
                    $store_id = (int) $this->config->get('config_store_id');
                    $settings = $this->model_setting_kbmp_marketplace->getSetting('kbmp_marketplace', $store_id);
                    $data['kbmp_marketplace_settings'] = $settings;

                    //Start - Condition added to check if module is enabled - added on 15-Jan-2019 by Harsh
                    if (isset($settings['kbmp_marketplace_setting']['kbmp_module_enable']) && $settings['kbmp_marketplace_setting']['kbmp_module_enable']) {
                        $data['text_back_to_site'] = $this->language->get('text_back_to_site');
                        $data['text_sellers'] = $this->language->get('text_sellers');		                    
                        $data['sellers'] = $this->url->link('kbmp_marketplace/sellers', '', true);;
                    }          
                    //Ends
                
		return $this->load->view('common/search', $data);
	}
}