<?php

class ModelKbmpMarketplaceCronAdminReminder extends Model {

    //function for getting seller order in the basis of the time
    public function get_sellerOrders($new_currenttime){
        
        $sql = "Select 
        ksod.*,cast(`date_updated` as time) order_time,oc.*,oc.customer_id as order_customerID
            FROM " . DB_PREFIX . "kb_mp_seller_order_detail ksod
            INNER JOIN " . DB_PREFIX . "order  oc  ON ksod.order_id = oc.order_id 
            WHERE 
            ksod.is_delivered = 0
            ";
            $sql .= "
                AND 
                ksod.date_added >= '".$this->db->escape($new_currenttime)."'
            ";
            //echo $sql; die;
        $query = $this->db->query($sql);
        return $query->rows;
    }
    public function get_allsellers($dicontinue = null){
        
        $sql = "SELECT c.customer_id, c.firstname, c.lastname, c.email, ksd.title as shop, ks.seller_id, ks.state, ks.country_id, ks.active, ks.date_added, ct.name as country, s.name as state_name FROM " . DB_PREFIX . "kb_mp_seller ks LEFT JOIN " . DB_PREFIX . "kb_mp_seller_details ksd ON (ks.seller_id = ksd.seller_id) INNER JOIN " . DB_PREFIX . "customer c ON (c.customer_id = ks.customer_id) LEFT JOIN " . DB_PREFIX . "country ct ON (ks.country_id = ct.country_id) LEFT JOIN " . DB_PREFIX . "zone s ON (s.zone_id = ks.state)  ";
        $sql .= "WHERE ksd.language_id = '" . (int) $this->config->get('config_language_id') . "' AND ks.approved = '1' AND ks.active = '1'";
        if($dicontinue == 1){
            $sql .= "AND ks.discontinue = 1";
        }
        $sql .= " GROUP BY ks.seller_id";
        $sql .= " ORDER BY ks.date_added";
        $sql .= " ASC, LCASE(ksd.title) ASC";
        
        $query = $this->db->query($sql);
        return $query->rows;
    }
    //function for getting seller balance
    public function get_seller_balance($sellerID){
        
        $amount1 = 0;
        $amount2 = 0;
        
        $sql = "SELECT sum(amount) as balance   FROM " . DB_PREFIX . "kb_mp_seller_transaction "
        . "WHERE  seller_id = ".(int)$sellerID." "
        . "group by seller_id";
        
        $query = $this->db->query($sql);
        
        $amount1 = -1 * ($query->row['balance']);
        
        $this->load->model('setting/kbmp_marketplace');
        $settings = $this->model_setting_kbmp_marketplace->getSetting('kbmp_marketplace'); 
        $cancelled = $settings['kbmp_marketplace_setting']['cancel_order_status_value'];
        if (!empty($cancelled)){
           //condition to ignore cancelled order 
           $statusSql = "AND os.name NOT IN ('".implode("','", $cancelled)."')";
        }else{
           $statusSql = " "; 
        }
        
        $sql1 = "SELECT SUM(kmsod.seller_earning) as seller_earning "
        . "FROM " . DB_PREFIX . "kb_mp_seller_order_detail kmsod INNER JOIN `".DB_PREFIX."order` o "
        . "ON (o.order_id = kmsod.order_id) INNER JOIN ".DB_PREFIX."order_status os ON (o.order_status_id = os.order_status_id AND os.language_id='" . (int)$this->config->get('config_language_id') . "')"
        . "WHERE  kmsod.is_consider = '1' AND kmsod.is_canceled = '0' ".$statusSql." "
        . "AND  kmsod.seller_id = ".(int)$sellerID." GROUP BY kmsod.seller_id";
        
        $query1 = $this->db->query($sql1);
        
        $amount2 = $query1->row['seller_earning'];
        
        /* $sql = "Select ksod.seller_earning - kst.amount as balance
                FROM (SELECT SUM(ksod.seller_earning) as seller_earning,ksod.seller_id FROM " . DB_PREFIX . "kb_mp_seller_order_detail ksod WHERE seller_id = ".(int)$sellerID.") ksod
                INNER JOIN (SELECT SUM(amount) as amount,seller_id FROM " . DB_PREFIX . "kb_mp_seller_transaction kst WHERE kst.seller_id = ".(int)$sellerID." ) kst ON ksod.seller_id = kst.seller_id";
                */
        
        
        
        return ($amount1 + $amount2);
    }
    //function to update the discontinue status
    public function update_seller_discontinue($sellerID,$value){
        $sql = "UPDATE " . DB_PREFIX . "kb_mp_seller
                SET discontinue = ".(int)$value."
                WHERE seller_id = ".(int)$sellerID."
                ";
        $query = $this->db->query($sql);
        return true;
    }
    //function to add amount in the transaction table
    public function insert_transaction_amount($data){
        $sql = "INSERT INTO " . DB_PREFIX . "kb_mp_seller_transaction SET seller_transaction_id = '', seller_id = '" . (int)$data['seller_id'] . "', store_id = '0', transaction_number = '" . $data['transaction_number'] . "', amount = '" . $data['amount'] . "', transaction_type = '" . (int)$data['transaction_type'] . "', comment = '" . $data['comment'] . "', date_added = '" . date("Y-m-d H:i:s") . "'";

        $query = $this->db->query($sql);
        return false;
    }
}