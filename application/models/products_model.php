<?php

class Products_model extends CI_Model {

    function get_products() {
        $query = $this->db->query('SELECT b_id,aval, name, image, price FROM products');
        return $query->result_array();
    }
}
