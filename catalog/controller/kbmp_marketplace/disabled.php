<?php

class ControllerKbmpmarketplaceDisabled extends Controller {

    public function index() {

        if (!$this->customer->isLogged()) {
            $this->session->data['redirect'] = $this->url->link('kbmp_marketplace/disabled', '', true);
            $this->response->redirect($this->url->link('account/login', '', true));
        }

        $this->load->language('kbmp_marketplace/disabled');
        $this->load->language('kbmp_marketplace/common');
        $this->document->setTitle($this->language->get('heading_title'));

        $data['header'] = $this->load->controller('kbmp_marketplace/header');
        $data['footer'] = $this->load->view('kbmp_marketplace/footer', $data);

        if (version_compare(VERSION, '2.2.0.0', '<')) {
            $this->response->setOutput($this->load->view('default/template/kbmp_marketplace/disabled.tpl', $data));
        } else {
            $this->response->setOutput($this->load->view('kbmp_marketplace/disabled', $data));
        }
    }

}
