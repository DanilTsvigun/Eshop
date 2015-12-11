<?php

class Cart_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function get_products() {
        $query = $this->db->query('SELECT b_id,aval, name, image, price FROM products');
        return $query->result_array();
    }

    function get_cart() {
        $query=$this->db->query('SELECT name, image, quantity FROM u_p NATURAL JOIN products');
        return $query->result_array();
    }
    
    function set_cart($id,$b_id,$quantity) {
        $data=array(
            'id'=> $id,
            'b_id' => $b_id,
            'quantity'=>$quantity
        );
        $this->db->insert('u_p', $data);
    }

}
