<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers_m extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    public function add_customers($params){
        $this->db->insert('jre_customers',$params);
        return $this->db->insert_id();
    }
    public function update_customers($customers_id,$params){
        $this->db->where('customers_id', $customers_id);
        return $this->db->update('jre_customers',$params);
    }

    public function customers_exist($customers_email = null){

        if($customers_email == null || empty($customers_email))
           return array(
               'success'=> false
           );

        $result = $this->db->query("SELECT * FROM jre_customers WHERE customers_email  = '{$customers_email}'");

        $check_customer = $result->result_array();

        $customer_exist = false;
        if(is_array($check_customer) && sizeof($check_customer) > 0)
            $customer_exist = true;

        return array(
            'success'=> true,
            'customer_exist'=> $customer_exist,
            'customers_data'=> current($check_customer)
        );

    }
}