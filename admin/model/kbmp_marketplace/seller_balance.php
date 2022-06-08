<?php

class ModelKbmpMarketplaceSellerBalance extends Model {

    // Function to get the total sale for dashboard stats
    public function getTotalSellerSale($seller_id) {
        $sql = "SELECT SUM(so.total) as total FROM " . DB_PREFIX . "kb_mp_seller_orders so "
                . "INNER JOIN " . DB_PREFIX . "kb_mp_seller ks "
                . "ON so.seller_id = ks.seller_id "
                . "INNER JOIN " . DB_PREFIX . "order o "
                . "ON so.order_id = o.order_id "
                . "WHERE ks.seller_id = '" . (int) $seller_id . "' "
                . "AND o.order_status_id > 0";
        $query = $this->db->query($sql);

        if (isset($query->row['total'])) {
            return $query->row['total'];
        } else {
            return 0;
        }
        return 0;
    }

    //Function to get the total earning for dashboard stats
    public function getTotalSellerEarning($seller_id, $eligible = 0) {
        $sql = "SELECT SUM(so.seller_earning) as total FROM " . DB_PREFIX . "kb_mp_seller_orders so "
                . "INNER JOIN " . DB_PREFIX . "kb_mp_seller ks "
                . "ON so.seller_id = ks.seller_id "
                . "INNER JOIN " . DB_PREFIX . "order o "
                . "ON so.order_id = o.order_id "
                . "WHERE ks.seller_id = '" . (int) $seller_id . "' "
                . "AND o.order_status_id > 0";

        if ($eligible == 1) {
            $this->load->model('setting/kbmp_marketplace');
            $settings = $this->model_setting_kbmp_marketplace->getSetting('kbmp_marketplace', $this->config->get('config_store_id'));
            $order_status_commission_calculate = $settings['kbmp_marketplace_setting']['order_status_commission_calculate'];
            if (!empty($order_status_commission_calculate)) {
                //Order table status if different from the seller_orders table. Seller order status will be considered from the seller order status
                $sql .= " AND so.order_status_id IN (" . implode(",", $order_status_commission_calculate) . ")";
            }
        }
        $query = $this->db->query($sql);

        if (isset($query->row['total'])) {
            return $query->row['total'];
        } else {
            return 0;
        }
        return 0;
    }

    //Function to get the total earning for dashboard stats
    public function getTotalAdminCommission($seller_id) {
        $sql = "SELECT SUM(so.admin_earning) as total FROM " . DB_PREFIX . "kb_mp_seller_orders so "
                . "INNER JOIN " . DB_PREFIX . "kb_mp_seller ks "
                . "ON so.seller_id = ks.seller_id "
                . "INNER JOIN " . DB_PREFIX . "order o "
                . "ON so.order_id = o.order_id "
                . "WHERE ks.seller_id = '" . (int) $seller_id . "' "
                . "AND o.order_status_id > 0";

        $query = $this->db->query($sql);

        if (isset($query->row['total'])) {
            return $query->row['total'];
        } else {
            return 0;
        }
        return 0;
    }

    //Total Paid Amount to seller
    public function getTotalSellerPayout($seller_id) {
        $sql = "SELECT SUM(amount) as total FROM " . DB_PREFIX . "kb_mp_seller_transaction "
                . "WHERE transaction_type = '0' "
                . "AND seller_id = " . (int) $seller_id;
        $query = $this->db->query($sql);

        if (isset($query->row['total'])) {
            return $query->row['total'];
        } else {
            return 0;
        }
    }

    //Total Pending Amount to Paid to seller. Credit Added from the Admin side.
    public function getTotalCreditAmountPayout($seller_id) {
        // Amont which is credited into the account
        $sql = "SELECT SUM(amount) as total FROM " . DB_PREFIX . "kb_mp_seller_transaction "
                . "WHERE transaction_type = '1' AND order_id IS NULL "
                . "AND seller_id = " . (int) $seller_id;
        $query = $this->db->query($sql);

        if (isset($query->row['total'])) {
            return $query->row['total'];
        } else {
            return 0;
        }
    }

    public function getTotalSellerTransaction($seller_id) {
        $sql = "SELECT count(*) as total FROM " . DB_PREFIX . "kb_mp_seller_transaction WHERE seller_id = " . (int) $seller_id;
        $query = $this->db->query($sql);
        if (!empty($query->row['total'])) {
            return $query->row['total'];
        } else {
            return 0;
        }
    }

    public function getSellerTransaction($seller_id) {
        $sql = "SELECT * FROM " . DB_PREFIX . "kb_mp_seller_transaction WHERE seller_id = " . (int) $seller_id . " ORDER BY date_added DESC";
        $query = $this->db->query($sql);
        if (!empty($query->rows)) {
            return $query->rows;
        } else {
            return 0;
        }
    }

}
