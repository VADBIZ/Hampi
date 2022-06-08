<?php
class ControllerCommonPopups extends Controller {
	public function index() {
		$this->load->language('common/popups');
      
        $data['name'] = $this->customer->getFirstName();
        $data['email'] = $this->customer->getEmail();
      
        $data['action'] = $this->url->link('common/popups/add', '', true);

		$this->response->setOutput($this->load->view('common/popups', $data));
	}
  
    public function add() {
        $this->load->language('common/popups');

		$json = array();

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 25)) {
				$json['error'] = $this->language->get('error_name');
			}
          
            if (!filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
			    $json['error'] = $this->language->get('error_email');
		    }
          
            if (!isset($json['error'])) {
                $json['success'] = $this->language->get('text_success');
            }
        }
      
        $this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }
}