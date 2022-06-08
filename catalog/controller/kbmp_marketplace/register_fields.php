<?php

class ControllerKbmpMarketplaceRegisterFields extends Controller {

    public function index($data) {
        if (version_compare(VERSION, '2.2.0.0', '<')) {
            return $this->load->view('default/template/kbmp_marketplace/seller_register.tpl', $data);
        } else {
            return $this->load->view('kbmp_marketplace/seller_register', $data);
        }
    }

}
