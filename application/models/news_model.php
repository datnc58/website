<?php

class News_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function getRows($offset = 0, $limit = 10) {
        $this->db->select('*');
        $this->db->offset($offset);
        $this->db->limit($limit);
        $this->db->from('product');
        $this->db->join('danhmuc', 'product.product_pid = danhmuc.danhmuc_pid');
        $this->db->where('product.product_pid', '1');
        $this->db->where('product.product_check', 1);
        $query = $this->db->get();
        return $query->result();
}
    public function getRows2($offset = 0, $limit = 10) {
        $this->db->select('*');
        $this->db->offset($offset);
        $this->db->limit($limit);
        $this->db->from('product');
        $this->db->join('danhmuc', 'product.product_pid = danhmuc.danhmuc_pid');
        $this->db->where('product.product_pid', '2');
        $this->db->where('product.product_check', 1);
        $query = $this->db->get();
        return $query->result();
    }
    public function getRows3($offset = 0, $limit = 10) {
        $this->db->select('*');    
        $this->db->offset($offset);
        $this->db->limit($limit);       
        $this->db->from('product');
        $this->db->join('danhmuc', 'product.product_pid = danhmuc.danhmuc_pid');
        $this->db->where('product.product_pid', '3');
         $this->db->where('product.product_check', 1);
        $query = $this->db->get();
        return $query->result();
    }						
    public function getDanhmuc(){
        $query = $this->db->get('danhmuc');
        return $query->result();
    }

    public function insert($filename,$username){
        $this->product_name = $this->input->post('name'); // please read the below note
        $this->product_price = $this->input->post('price');
        $this->product_pid = $this->input->post('product_pid');
        $this->product_title = $this->input->post('title');
        $this->product_content = $this->input->post('content');
        $this->product_address = $this->input->post('address');
        $this->product_date = date('Y-m-d H:i:s');
        $this->product_images = $filename;
        $this->product_check = 0;
        $this->product_email = $username;
        return $this->db->insert('product', $this);
    }
    
    public function getRow($id) {
        $query = $this->db->get_where('product', array('product_id' => $id));
        return $query->row();
    }

    public function update($id) {
        $this->date = time();
        $this->product_check = 1;
        $this->db->update('product', $this, array('product_id' => $id));
    }

    public function delete_news($id) {
        $this->db->delete('product', array('product_id' => $id));
    }
    public function insert_kh(){
        $this->name_kh = $this->input->post('name');
        $this->taikhoan_kh = $this->input->post('taikhoan');
        $this->email_kh = $this->input->post('email');
        $this->pass_kh = $this->input->post('password');
        $this->address = $this->input->post('address');
        return $this->db->insert('khachhang', $this);
    }
    public function check_password($username,$password) {
            $query = $this->db->query("SELECT kh_id from khachhang where taikhoan_kh='$username' and pass_kh='$password';");
            if($query->num_rows() ==1){
                return true;
            }
                else return false; 
    }
    public function get_user($username)
        {
                $query = $this->db->query("SELECT taikhoan_kh,kh_id,email_kh from khachhang where taikhoan_kh='$username';");
                $rows = array();
                if($query->num_rows() > 0){
                    foreach ($query->result() as $row){
                        $rows[] = $row;
                    }
                }
                return $rows;
        }
    public function getRead($id){
        $query = $this->db->get_where('product', array('product_id' => $id));
        return $query->row();
    }
    public function getSlide(){
        $this->db->where('slide_id', 2);
        $this->db->or_where('slide_id', 3);
        $query = $this->db->get('slide');
        return $query->result();
    }
    public function getslides() {
        $this->db->where('slide_id', 1);
        $query = $this->db->get('slide');
        return $query->row();
    }
    public function countList1(){
        $this->db->select('COUNT(*) as total');
        $this->db->from('product');
        $this->db->join('danhmuc', 'product.product_pid = danhmuc.danhmuc_pid');
        $this->db->where('product.product_pid', 1);
        $this->db->where('product.product_check', 1);
        $query = $this->db->get();
        $result = $query->row();
        return $result->total;
    }
    public function countList2(){
        $this->db->select('COUNT(*) as total');
        $this->db->from('product');
        $this->db->join('danhmuc', 'product.product_pid = danhmuc.danhmuc_pid');
        $this->db->where('product.product_pid', 2);
        $this->db->where('product.product_check', 1);
        $query = $this->db->get();
        $result = $query->row();
        return $result->total;
    }
    public function countList3(){
        $this->db->select('COUNT(*) as total');
        $this->db->from('product');
        $this->db->join('danhmuc', 'product.product_pid = danhmuc.danhmuc_pid');
        $this->db->where('product.product_pid', 3);
        $this->db->where('product.product_check', 1);
        $query = $this->db->get();
        $result = $query->row();
        return $result->total;
    }
}
