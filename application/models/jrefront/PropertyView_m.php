<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PropertyView_m extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    public function get_properties(){

        try{
            $result = $this->db->query("SELECT * FROM property_master WHERE property_status = 1");
            $data = $result->result_array();
            if($data){
                return
                    array(
                        'success'=> true,
                        'properties'=> $data
                    );
            }
            return false;
        }catch (Exception $ex){
            return array(
                'success'=> false,
                'error'=>$ex
            );
        }
    }

    public function add_application($params){
        $this->db->insert('rental_property_viewing',$params);
        return $this->db->insert_id();
    }

}