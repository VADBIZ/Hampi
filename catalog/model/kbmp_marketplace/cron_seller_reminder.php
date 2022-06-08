<?php

class ModelKbmpMarketplaceCronSellerReminder extends Model {

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
                ksod.date_added <= '".$this->db->escape($new_currenttime)."'
            ";
        $query = $this->db->query($sql);
        return $query->rows;
    }
    //function for getting seller detail
    public function getSeller_detail($seller_id) {
        if (isset($seller_id) && !empty($seller_id)) {
            $sql = "SELECT *,sd.*,customer.email  FROM " . DB_PREFIX . "kb_mp_seller ks 
            INNER JOIN " . DB_PREFIX . "customer  customer  ON ks.customer_id = customer.customer_id 
            INNER JOIN " . DB_PREFIX . "kb_mp_seller_details  sd  ON ks.seller_id = sd.seller_id
            WHERE
            ks.seller_id = '" . (int) $seller_id . "'";
            
            $query = $this->db->query($sql);
            
            return $query->row;
        }
    }
}