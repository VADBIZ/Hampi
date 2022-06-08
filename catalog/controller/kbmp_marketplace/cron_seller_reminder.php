<?php
/*
  Start BY Dharmanshu 31-08-2020 for the custom change for chnaging status of the delievery
*/
class ControllerKbmpMarketplaceCronSellerReminder extends Controller {

    public function index(){
        //echo $_SERVER['REQUEST_TIME']; die;
 /*        date_default_timezone_set('America/Chicago'); // CDT
        $info = getdate();
         */
        //date_default_timezone_set("Asia/Kolkata"); //time zone because in sql there was insert in in different time(india) and in php showing different time(UTC)
        $this->load->model('kbmp_marketplace/cron_seller_reminder');
        $this->load->model('kbmp_marketplace/kbmp_marketplace');
        $this->load->model('checkout/order');
        $this->load->model('account/customer');   
            //Check all orders between the current time and (current time - maximum hours)kbmp_maximum_hours
            $kbmp_marketplace_setting = $this->config->get('kbmp_marketplace_setting');
            $kbmp_maximum_hours = 0;
            if(!empty($kbmp_marketplace_setting) && isset($kbmp_marketplace_setting['kbmp_maximum_hours'])){
                $kbmp_maximum_hours = $kbmp_marketplace_setting['kbmp_maximum_hours']; //will get the maximum number of hours
            }
            if($kbmp_maximum_hours > 0){
                $kbmp_maximum_hours = explode('.',$kbmp_maximum_hours);
                if(count($kbmp_maximum_hours) > 0){                    
                    $new_currenttime = date("Y-m-d H:i:s", strtotime('-'.$kbmp_maximum_hours[0].' hours'));//if the time does not iclude .5 then it will add hours
                }
                if(count($kbmp_maximum_hours) > 1){
                    $minutes = $kbmp_maximum_hours[0] * 60 + 30; //if th etime icludes .5 then it will add minutes   
                    //number of hours * 60 minutes +30 minutes                           
                    $new_currenttime = date("Y-m-d H:i:s", strtotime('-'.$minutes.' minutes'));                                                                 
                }
            }
           

            //echo date("Y-m-d H:i:s"); die;
            $current_time = strtotime(date("Y-m-d H:i:s"));
            
            
            $order_status_info = $this->model_kbmp_marketplace_cron_seller_reminder->get_sellerOrders($new_currenttime); //will get the sellers order details so that will send the mail to those orders of hours >  cuurentime-maximum hours       
            
            if(!empty($order_status_info)){
                foreach ($order_status_info as $k => $v) {
                    $date_added = strtotime($v['date_added']);
                    $language_id = $v['language_id'];
                    $order_status = $v['status'];
                    $order_status = $this->model_kbmp_marketplace_kbmp_marketplace->getOrderStatus($order_status); //will get the sellers order details
                    $order_status_name = '';
                    if(!empty($order_status)){
                        $order_status_name = strtolower($order_status['name']);
                    }
                    if($order_status_name != 'complete' || $order_status_name == ''){
                        // if($current_time >= $date_added && $v['is_canceled'] == 0){
                        if($v['is_canceled'] == 0){
                            
                           
                            
                            //condition will check if the date time of the DB is < than the current time
                            $seller_id = $v['seller_id'];
                            $order_id = $v['order_id'];
                            $date_added = $v['date_added'];                            

                            $seller_details = $this->model_kbmp_marketplace_cron_seller_reminder->getSeller_detail($v['seller_id']); //will get the seller detail 
                           
                            
                            
                            $customer_details = $this->model_account_customer->getCustomer($v['order_customerID']); //will get the order details of the customer ordered the product
                            if(!empty($seller_details)){
                                if(!empty($kbmp_marketplace_setting) && isset($kbmp_marketplace_setting['seller_reminder_'.$language_id.''])){
                                    $email_template = $kbmp_marketplace_setting['seller_reminder_'.$language_id.'']; //will get the email template for the seller reminder
                                    
                                    if ($v['shipping_address_format']) {
                                        $format = $v['shipping_address_format'];
                                    } else {
                                        $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
                                    }
                            
                                    $find = array(
                                        '{firstname}',
                                        '{lastname}',
                                        '{company}',
                                        '{address_1}',
                                        '{address_2}',
                                        '{city}',
                                        '{postcode}',
                                        '{zone}',
                                        '{zone_code}',
                                        '{country}'
                                    );
                            
                                    $replace = array(
                                        'firstname' => $v['shipping_firstname'],
                                        'lastname'  => $v['shipping_lastname'],
                                        'company'   => $v['shipping_company'],
                                        'address_1' => $v['shipping_address_1'],
                                        'address_2' => $v['shipping_address_2'],
                                        'city'      => $v['shipping_city'],
                                        'postcode'  => $v['shipping_postcode'],
                                        'zone'      => $v['shipping_zone'],
                                        'zone_code' => isset($v['shipping_zone_code']) ? $v['shipping_zone_code'] : '',
                                        'country'   => $v['shipping_country']
                                    );
                            
                                    $shipping_address = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format)))); //for the shipping address

                                    if ($v['payment_address_format']) {
                                        $format = $v['payment_address_format'];
                                    } else {
                                        $format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
                                    }
                            
                                    $find = array(
                                        '{firstname}',
                                        '{lastname}',
                                        '{company}',
                                        '{address_1}',
                                        '{address_2}',
                                        '{city}',
                                        '{postcode}',
                                        '{zone}',
                                        '{zone_code}',
                                        '{country}'
                                    );
                            
                                    $replace = array(
                                        'firstname' => $v['payment_firstname'],
                                        'lastname'  => $v['payment_lastname'],
                                        'company'   => $v['payment_company'],
                                        'address_1' => $v['payment_address_1'],
                                        'address_2' => $v['payment_address_2'],
                                        'city'      => $v['payment_city'],
                                        'postcode'  => $v['payment_postcode'],
                                        'zone'      => $v['payment_zone'],
                                        'zone_code' => isset($v['payment_zone_code']) ? $v['payment_zone_code'] : '',
                                        'country'   => $v['payment_country']
                                    );
                            
                                    $payment_address = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));//for the payment address

                                    $message = str_replace("{seller_name}", $seller_details['firstname'].'' . ' ' . $seller_details['lastname'], $kbmp_marketplace_setting['seller_reminder_'.$language_id.'']); //Seller Name
                                    $customer_details = $this->model_account_customer->getCustomer($v['customer_id']);

                                    $message = str_replace("{shop_name}", $seller_details['title'], $message); //Shop Name
                                    $message = str_replace("{order_id}", $v['order_id'], $message); //Shop Name
                                    $message = str_replace("{order_name}", '#'.$v['order_id'], $message); //Order ID
                                    $message = str_replace("{date}",$v['date_added'], $message); //Order Date
                                    $message = str_replace("{delivery_block_html}", $shipping_address, $message); //Delivery Address
                                    $message = str_replace("{invoice_block_html}", $payment_address, $message); //Billing Address
                                    $message = str_replace("{firstname}", $customer_details['firstname'], $message); //Customer First Name
                                    $message = str_replace("{lastname}", $customer_details['lastname'], $message); //Customer Last Name
                                    $message = str_replace("{email}", $customer_details['email'], $message); //Customer Email
                                    $this->load->language('kbmp_marketplace/common');
                                    $text_kbmp_product = $this->language->get('text_kbmp_product');
                                    $text_kbmp_model = $this->language->get('text_kbmp_model');
                                    $text_kbmp_quantity = $this->language->get('text_kbmp_quantity');
                                    $text_kbmp_price = $this->language->get('text_kbmp_price');
                                    $text_kbmp_total = $this->language->get('text_kbmp_total');
                                    
                                    $product_html = '<table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;"><thead><tr><td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">'.$text_kbmp_product.'</td><td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">'.$text_kbmp_model.'</td><td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;">'.$text_kbmp_quantity.'</td><td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;">'.$text_kbmp_price.'</td><td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;">'.$text_kbmp_total.'</td></tr></thead><tbody>';

                                    //start for getting the orderd product data
                                    $order_products = $this->model_checkout_order->getOrderProducts($v['order_id']);
                                    
                                    $data['products'] = array();

                                    foreach ($order_products as $order_product) {
                                        
                                        $data['products'][] = array(
                            
                                            'product_id'     => $order_product['product_id'],                                                        
                                            'name'     => $order_product['name'],
                                            'model'    => $order_product['model'],
                                            'quantity' => $order_product['quantity'],
                                            'price'    => $this->currency->format($order_product['price'] + ($this->config->get('config_tax') ? $order_product['tax'] : 0), $v['currency_code'], $v['currency_value']),
                                            'total'    => $this->currency->format($order_product['total'] + ($this->config->get('config_tax') ? ($order_product['tax'] * $order_product['quantity']) : 0), $v['currency_code'], $v['currency_value'])
                                        );
                                    }
                                    $seller_for_mail = [];
                                    if (isset($data['products']) && !empty($data['products'])) {
                                        $this->load->model('kbmp_marketplace/kbmp_marketplace');
                                        foreach ($data['products'] as $product) {
                                            if (isset($seller_details) && !empty($seller_details)) {
                                                $seller_for_mail [] = $product;
                                            }
                                        }
                                    }
                                    
                                    

                                    foreach ($seller_for_mail as $product) {
                                        $product_html .= '<tr><td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">'.$product['name'];
                                        /* foreach ($product['option'] as $option) {
                                            $product_html .= '<br />&nbsp;<small> - '.$option['name'].': '.$option['value'].'</small>';
                                        } */
                                        $product_html .= '</td><td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">'.$product['model'].'</td><td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">'.$product['quantity'].'</td><td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">'.$product['price'].'</td><td style="font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;">'.$product['total'].'</td></tr>';
                                    }
                                    //end for getting the orderd product data
                                    $product_html .= '</tbody></table>';
                                    
                                    $email_subject = $this->language->get('text_seller_email_reminder');
                                    
                                    $message = str_replace("{products}", $product_html, $message); //Products
                                    $email_content  = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd">' . "\n";
                                    $email_content .= '<html>' . "\n";
                                    $email_content .= '  <head>' . "\n";
                                    $email_content .= '    <title>' . $email_subject . '</title>' . "\n";
                                    $email_content .= '    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">' . "\n";
                                    $email_content .= '  </head>' . "\n";
                                    $email_content .= '  <body>' . html_entity_decode($message, ENT_QUOTES, 'UTF-8') . '</body>' . "\n";
                                    $email_content .= '</html>' . "\n";
                                    
                                    
                                    $mail = new Mail($this->config->get('config_mail_engine'));
                                    $mail->parameter = $this->config->get('config_mail_parameter');
                                    $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
                                    $mail->smtp_username = $this->config->get('config_mail_smtp_username');
                                    $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
                                    $mail->smtp_port = $this->config->get('config_mail_smtp_port');
                                    $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');
                                    
                                    $mail->setTo($seller_details['email']);
                                    $mail->setFrom($this->config->get('config_email'));
                                    $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
                                    $mail->setSubject(html_entity_decode($email_subject, ENT_QUOTES, 'UTF-8'));
                                    $mail->setHtml($email_content);
                                    $mail->send();
                                    /* echo '<pre>';
                                    print_r($email_content);
                                    die; */
                                    echo $v['order_id'].'<br>';
                                    
                                    // die;
                                }                              
                            }
                        }
                    }
                }
            }        
    }
}
/*
  End BY Dharmanshu 31-08-2020 for the custom change for chnaging status of the delievery
*/
