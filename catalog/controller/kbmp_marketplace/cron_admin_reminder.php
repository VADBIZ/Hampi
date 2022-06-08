<?php
class ControllerKbmpMarketplaceCronAdminReminder extends Controller {
    public function index(){
        $this->load->model('kbmp_marketplace/cron_admin_reminder');
        $this->load->model('kbmp_marketplace/kbmp_marketplace'); 
        $this->load->language('kbmp_marketplace/common');  
        //Check all orders between the current time and (current time - maximum hours)kbmp_maximum_hours
        $kbmp_marketplace_setting = $this->config->get('kbmp_marketplace_setting');   
        
        $kbmp_deduction_amount = $kbmp_marketplace_setting['kbmp_deduction_amount'];
        $month_day = $kbmp_marketplace_setting['kbmp_monthly_deduction_day'];


        if(!empty($kbmp_deduction_amount) && !empty($month_day) && $kbmp_deduction_amount > 0  && $month_day > 0){
            $mail_reminder = 0;
            $status = 0;
            
            if(date('j') == $month_day || date('d') == $month_day){
                $status = 1;
                //will get the  data if tthe current day match the month day
                $all_seller = $this->model_kbmp_marketplace_cron_admin_reminder->get_allsellers();
                
            }
            
            if(date('j') == $month_day+7 || date('j') == $month_day+7){
                //echo $all_seller; die;
                $mail_reminder = 1;//status to send email when the consition for monthday+7 dyas will match true
                $status = 1;
                $all_seller = $this->model_kbmp_marketplace_cron_admin_reminder->get_allsellers(1);
                /* echo '<pre>';
                print_r($all_seller);
                die; */
            }
           
            //condition to check if the month day is equal to the today day
            if($status == 1){
                      
                foreach ($all_seller as $key => $value) {
                       
                        $seller_id = $value['seller_id'];
                        $discontinue = 0;
                        
                        // $seller_balance = $this->model_kbmp_marketplace_cron_admin_reminder->get_seller_balance(5);
                        $seller_balance = $this->model_kbmp_marketplace_cron_admin_reminder->get_seller_balance($value['seller_id']);
                        
                        //function to get the seller balance for the monthaly deduction                        
                        if(($seller_balance) && $seller_balance > 0 && $seller_balance >= $kbmp_deduction_amount){
                            $discontinue = 0;
                            $insert_data = array(
                                                'seller_id' => $seller_id,
                                                'transaction_number' => rand(100,100000),
                                                'amount' => (int)("-".$kbmp_deduction_amount),
                                                'transaction_type' => 1,
                                                'comment' => $this->language->get('monthly_fee_txt')
                                            );
                            
                            $seller_balance = $this->model_kbmp_marketplace_cron_admin_reminder->insert_transaction_amount($insert_data);//function to insert data in transaction table to deduct amount from the seller balance
                            $discontinue = 0;    
                            $seller_balance = $this->model_kbmp_marketplace_cron_admin_reminder->update_seller_discontinue($seller_id,$discontinue);//function to update the discontinue
                            echo"Success";
                        } else {
                            $discontinue = 1;    
                            $seller_balance = $this->model_kbmp_marketplace_cron_admin_reminder->update_seller_discontinue($seller_id,$discontinue);//function to update the 
                            if($mail_reminder == 1){
                                $this->admin_reminder_mail($value,$kbmp_marketplace_setting,$kbmp_deduction_amount); 
                            }
                        }
                }
            }
            
        }        
    }
    //functtion to send the remionder email after 7 days of the monthday to seller
    public function admin_reminder_mail($seller_detail,$kbmp_marketplace_setting,$kbmp_deduction_amount){
        $language_id = $this->config->get('config_language_id');
        if(isset($kbmp_marketplace_setting['admin_reminder_'.$language_id.''])){
            $message = str_replace("{seller_name}", $seller_detail['firstname'].'' . ' ' . $seller_detail['lastname'], $kbmp_marketplace_setting['admin_reminder_'.$language_id.'']);
            $message = str_replace("{firstname}", $seller_detail['firstname'], $message);
            $message = str_replace("{lastname}", $seller_detail['lastname'], $message);
            $message = str_replace("{email}", $seller_detail['email'], $message);
            $message = str_replace("{amount}", $kbmp_deduction_amount, $message);
            $this->load->language('kbmp_marketplace/common');
            $email_subject = $this->language->get('subscription_title_txt');
            $email_content = '';
            $email_content  = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd">' . "\n";
            $email_content .= '<html>' . "\n";
            $email_content .= '  <head>' . "\n";
            $email_content .= '    <title>' . $email_subject . '</title>' . "\n";
            $email_content .= '    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">' . "\n";
            $email_content .= '  </head>' . "\n";
            $email_content .= '  <body>' . html_entity_decode($message, ENT_QUOTES, 'UTF-8') . '</body>' . "\n";
            $email_content .= '</html>' . "\n";

            $mail = new Mail($this->config->get('config_mail_engine'));
            $mail->protocol = $this->config->get('config_mail_protocol');
            $mail->parameter = $this->config->get('config_mail_parameter');
            $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
            $mail->smtp_username = $this->config->get('config_mail_smtp_username');
            $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
            $mail->smtp_port = $this->config->get('config_mail_smtp_port');
            $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');
            
            $mail->setTo($this->config->get('config_email'));
            $mail->setFrom($this->config->get('config_email'));
            $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
            $mail->setSubject(html_entity_decode($email_subject, ENT_QUOTES, 'UTF-8'));
            $mail->setHtml($email_content);
            $mail->send();
            return true;
        }
    }
}
