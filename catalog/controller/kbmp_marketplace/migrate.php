<?php

class ControllerKbmpMarketplaceMigrate extends Controller {

    public function index() {
        $this->load->model('kbmp_marketplace/kbmp_marketplace');

        $sql = "SELECT  order_id FROM " . DB_PREFIX . "order  WHERE order_status_id > 0";
        $query = $this->db->query($sql);
        $data = $query->rows;
        if (!empty($data)) {
            foreach ($data as $order) {
                $this->model_kbmp_marketplace_kbmp_marketplace->setSellersEarning($order['order_id']);
            }
        }
        die();
        $sql = "SELECT "
                . "ksod.order_id, "
                . "ksod.seller_id, "
                . "ksod.commission_percent, "
                . "o.total, "
                . "SUM(ksod.qty) AS quantity, "
                . "sum(COALESCE(total_earning,0) + COALESCE(shipping,0)) AS order_total, "
                . "sum(COALESCE(seller_earning,0) + COALESCE(shipping,0)) AS seller_earning, "
                . "sum(admin_earning) AS admin_earning, "
                . "ksod.date_added, "
                . "os.name as order_status, "
                . "o.order_status_id as order_status_id "
                . "FROM " . DB_PREFIX . "kb_mp_seller_order_detail ksod "
                . "INNER JOIN " . DB_PREFIX . "order o ON (o.order_id = ksod.order_id) "
                . "INNER JOIN " . DB_PREFIX . "order_status os "
                . "ON (os.order_status_id = o.order_status_id) "
                . "WHERE "
                . "os.language_id = '" . (int) $this->config->get('config_language_id') . "'";

        $sql .= " GROUP BY ksod.order_id";
        $query = $this->db->query($sql);
        $data = $query->rows;
        if (!empty($data)) {
            foreach ($data as $order) {
                $sql = "SELECT * FROM " . DB_PREFIX . "kb_mp_seller_orders WHERE order_id = '" . $this->db->escape($order['order_id']) . "'";
                $order_exist = $this->db->query($sql);
                if (empty($order_exist->row)) {
                    $sql = "INSERT INTO " . DB_PREFIX . "kb_mp_seller_orders SET "
                            . "order_id = '" . $this->db->escape($order['order_id']) . "',"
                            . "seller_id = '" . $this->db->escape($order['seller_id']) . "',"
                            . "order_status_id = '" . (int) $order['order_status_id'] . "',"
                            . "commission_percent = '" . $this->db->escape($order['commission_percent']) . "',"
                            . "total = '" . $this->db->escape($order['total']) . "',"
                            . "admin_earning = '" . $this->db->escape($order['admin_earning']) . "', "
                            . "seller_earning = '" . $this->db->escape($order['seller_earning']) . "',"
                            . "seller_earning_adjusted_price= '" . $this->db->escape($order['seller_earning']) . "',"
                            . "invoice_generated = '0'";
                    $this->db->query($sql);
                }
            }
        }
        die();
    }

}
