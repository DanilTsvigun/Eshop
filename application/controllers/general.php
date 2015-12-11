<?php

class General extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('cart_model');
    }

    public function index() {
        if (isset($this->session->userdata['logged_in'])) {
            $username = ($this->session->userdata['logged_in']['username']);
            $email = ($this->session->userdata['logged_in']['email']);
            $this->db->select('id');
            $this->db->from('user_login');
            $this->db->where('user_name', $username);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $row->id;
            }
        } else {
            header("location: user_authentication/user_login_process");
        }
        $data['title'] = 'Bikes::list';
        $data['id'] = $row->id;
        $this->load->model('products_model');
        $data['products'] = $this->products_model->get_products();
        $this->load->view('header', $data);
        $this->load->view('cart_view', $data);
        $this->load->view('footer');
    }

    function add_cart_item() {

        $data = array(
            'id' => $this->input->post('b_id'),
            'b_id' => $this->input->post('id'),
            'quantity' => $this->input->post('quantity')
        );
        $this->cart_model->set_cart($data['id'],$data['b_id'],$data['quantity']);
        
    }

}
