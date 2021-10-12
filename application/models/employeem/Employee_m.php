<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_m extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    public function add_property($params) {       
        $this->db->insert('property_master',$params);
        return $this->db->insert_id();        
    }       
     public function edit_property($property_id,$params) {                   
        $this->db->where('property_id', $property_id);
        return $this->db->update('property_master',$params);
    }
    public function approve_status($params) {                          
        $table=$params['table'];
        $table_update_field=$params['updatefield'];
        $table_where_field=$params['wherefield'];        
        $query_res = $this->db->query("UPDATE  $table SET $table_update_field = '{$params['status']}' WHERE $table_where_field='{$params['table_id']}'");       
        if ($query_res) {
            return true;
        }
    } 
    
    public function update_note($params) {                          
        $table=$params['table'];
        $table_update_field=$params['updatefield'];
        $table_where_field=$params['wherefield'];        
        $query_res = $this->db->query("UPDATE  $table SET $table_update_field = '{$params['notes']}' WHERE $table_where_field='{$params['table_id']}'");       
        if ($query_res) {
            return true;
        }
    } 
    
    
    public function edit_note($rental_view_id,$params) {                   
        $this->db->where('rental_view_id', $rental_view_id);
        return $this->db->update('rental_property_viewing',$params);
    }    
    
    public function get_property_by_id($property_id) {        
        $result = $this->db->query("SELECT * FROM property_master WHERE property_id={$property_id}");
        $data = $result->row_array();        
        if($data){
            return $data;
        }
        return false;
    }
     public function get_note_by_id($rental_view_id) {        
        $result = $this->db->query("SELECT * FROM rental_property_viewing WHERE rental_view_id={$rental_view_id}");
        $data = $result->row_array();        
        if($data){
            return $data;
        }
        return false;
    }

    public function get_inquiry_by_id($inquiry_id = null){
        $inquiry_id = (int)$inquiry_id;


        $inquiry_data = array();

        if($inquiry_id === 0)
            return $inquiry_data;

        $result = $this->db->query("SELECT rv.*,pm.property_name FROM rental_property_viewing rv
                                    LEFT JOIN property_master pm ON rv.property_address_id = pm.property_id                 
                                    WHERE rental_view_id = {$inquiry_id}");
        $data = $result->row_array();
        if($data){
            return $data;
        }
        return $inquiry_data;

    }
}
