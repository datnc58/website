<?php

class Admin_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    public function getRows($offset = 0, $limit = 10) {
        $this->db->select('*');
        $this->db->offset($offset);
        $this->db->limit($limit);
        $this->db->from('product');
        $this->db->where('product.product_check', 0);
        $query = $this->db->get();
        return $query->result();
    }
    public function countList2(){
        $this->db->select('COUNT(*) as total');
        $this->db->from('product');
        $this->db->where('product.product_check', 0);
        $query = $this->db->get();
        $result = $query->row();
        return $result->total;
    }
    public function countList1(){
        $this->db->select('COUNT(*) as total');
        $this->db->from('product');
        $this->db->where('product.product_check', 1);
        $query = $this->db->get();
        $result = $query->row();
        return $result->total;
    }
    public function getProduct($offset = 0, $limit = 10) {
        $this->db->select('*');
        $this->db->offset($offset);
        $this->db->limit($limit);
        $this->db->from('product');
        $this->db->where('product.product_check', 1);
        $query = $this->db->get();
        return $query->result();
    }
    public function getDanhmuc(){
        $query = $this->db->get('danhmuc');
        return $query->result();
    }
    public function edit_product($id){
        $this->product_check = 1;
        $this->db->update('product', $this, array('product_id' => $id));
    }
    public function delete_product($id){
        $this->db->delete('product', array('product_id' => $id));
    }
    public function check_password($username,$password) {
            $query = $this->db->query("SELECT user_id from user where user_name='$username' and user_pass='$password';");
            if($query->num_rows() ==1){
                return true;
            }
                else return false; 
    }
    public function get_user($username)
        {
                $query = $this->db->query("SELECT user_name,user_id from user where user_name='$username';");
                $rows = array();
                if($query->num_rows() > 0){
                    foreach ($query->result() as $row){
                        $rows[] = $row;
                    }
                }
        }
    public function getRow($id) {
        $query = $this->db->get_where('product', array('product_id' => $id));
        return $query->row();
    }
    public function insert($filename){
        $this->product_name = $this->input->post('name'); // please read the below note
        $this->product_price = $this->input->post('price');
        $this->product_pid = $this->input->post('product_pid');
        $this->product_title = $this->input->post('title');
        $this->product_content = $this->input->post('content');
        $this->product_address = $this->input->post('address');
        $this->product_date = date('Y-m-d H:i:s');
        $this->product_images = $filename;
        $this->product_check = 1;
        return $this->db->insert('product', $this);
    }


}

