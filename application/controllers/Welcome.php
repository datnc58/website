<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library("session");
            $this->load->model('news_model');
            $this->load->library('pagination');
        }
	public function index($o = 0)
	{
            $data = array(
                'k' => $this->news_model->getDanhmuc(),
                'key' => $this->news_model->getRows($o, 3),
                'key2' => $this->news_model->getRows2($o, 3),
                'key3' => $this->news_model->getRows3($o, 3),
                'row1' => $this->news_model->getslides(),
                'row' => $this->news_model->getSlide()
            );
            $this->load->view('index', $data);
	}
        public function login($o = 0){
            if(isset($_POST['login'])){
                if($_POST['username']!=''&& $_POST['password']!=''){
                    if($this->news_model->check_password($_POST['username'],$_POST['password'])){
                        $row = $this->news_model->get_user($_POST['username']);
                        foreach ($row as $k =>$val):              
                        $username = $val->taikhoan_kh;
                        $id = $val->kh_id;
                        $email = $val->email_kh;
                        endforeach;
                        $data1 = array ('username' => $username,'id' => $id, 'email' => $email);
                        $this->session->set_userdata($data1);
                        $data = array (
                            'username' => $this->session->userdata("username"),
                            'id' => $this->session->userdata("id"),
                            'email' => $this->session->userdata("email"),
                             'k' => $this->news_model->getDanhmuc(),
                            'key' => $this->news_model->getRows($o, 3),
                            'key2' => $this->news_model->getRows2($o, 3),
                            'key3' => $this->news_model->getRows3($o, 3),
                            'row1' => $this->news_model->getslides(),
                            'row' => $this->news_model->getSlide()
                        );
                            $this->load->view('index', $data);
                    }
                    else{
                        echo '<script language="javascript">';
                        echo 'alert("Tài khoản hoặc mật khẩu không đúng")';
                        echo '</script>';
                        $this->index();
                    }
                }
                else{
                    echo '<script language="javascript">';
                    echo 'alert("Bạn chưa điền đầy đủ thông tin")';
                    echo '</script>';
                    $this->index();
                }
                
            }else{
                    echo '<script language="javascript">';
                    echo 'alert("Bạn chưa điền đầy đủ thông tin")';
                    echo '</script>';
                    $this->index();
                }
        }
        public function sigin(){
            if(isset($_POST['ok'])){
                $ret = $this->news_model->insert_kh();
                redirect('welcome');
            }
        }
        public function logout(){         
            $this->session->sess_destroy();         
            redirect('welcome');
        }
        public function read($id= ''){
            $data = array (
                            'username' => $this->session->userdata("username"),
                            'id' => $this->session->userdata("id"),
                            'email' => $this->session->userdata("email"),
                             'k' => $this->news_model->getDanhmuc(),
                            'key' => $this->news_model->getRows(0,3),
                            'row' => $this->news_model->getRead($id)
                        );
            $this->load->view('blog', $data);
        }
        public function giaydep($o = 0){
            
            $this->load->library('pagination');
            $config['base_url'] = base_url('welcome/giaydep');
            $config['total_rows'] = $this->news_model->countList1();
            $config['per_page'] = 2;
            $config['prev_link']  = '&laquo;';
            $config['next_link'] = '&raquo;';
            $config['last_link']  = 'Cuối';
            $config['first_link'] = 'Đầu';
            $config['cur_tag_open'] = '<li class="active"><a href="">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['num_tag_close'] = '</li>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $this->pagination->initialize($config);
            $data = array(
                'username' => $this->session->userdata("username"),
                'id' => $this->session->userdata("id"),
                'email' => $this->session->userdata("email"),
                'k' => $this->news_model->getDanhmuc(),
                'key' => $this->news_model->getRows($o, 2),
                'pagination' => $this->pagination->create_links(),
            );
            $this->load->view('view_product', $data);
        }
        public function quanao($o = 0){
             
            $this->load->library('pagination');
            $config['base_url'] = base_url('welcome/quanao');
            $config['total_rows'] = $this->news_model->countList2();
            $config['per_page'] = 2;
            $config['cur_tag_open'] = '<li class="active"><a href="">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['num_tag_close'] = '</li>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $this->pagination->initialize($config);
            $data = array(
                'username' => $this->session->userdata("username"),
                'id' => $this->session->userdata("id"),
                'email' => $this->session->userdata("email"),
                'k' => $this->news_model->getDanhmuc(),
                'key' => $this->news_model->getRows2($o, 2),
                'pagination' => $this->pagination->create_links(),
            );
            $this->load->view('view_product', $data);
        }
        public function phukien($o = 0){
            $this->load->library('pagination');
            $config['base_url'] = base_url('welcome/phukien');
            $config['total_rows'] = $this->news_model->countList3();
            $config['per_page'] = 2;
            $config['prev_link']  = '&laquo;';
            $config['next_link'] = '&raquo;';
            $config['last_link']  = 'Cuối';
            $config['first_link'] = 'Đầu';
            $config['cur_tag_open'] = '<li class="active"><a href="">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['num_tag_close'] = '</li>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $this->pagination->initialize($config);
            $data = array(
                'username' => $this->session->userdata("username"),
                'id' => $this->session->userdata("id"),
                'email' => $this->session->userdata("email"),
                'k' => $this->news_model->getDanhmuc(),
                'key' => $this->news_model->getRows3($o,2),
                'pagination' => $this->pagination->create_links(),
            );
            $this->load->view('view_product', $data);
        }
        public function news(){
            $data = array (
                        'username' => $this->session->userdata("username"),
                        'id' => $this->session->userdata("id"),
                        'email' => $this->session->userdata("email"),
                         'k' => $this->news_model->getDanhmuc(),
                        'key' => $this->news_model->getRows(),
                        'key2' => $this->news_model->getRows2(),
                        'key3' => $this->news_model->getRows3(),
                        'row1' => $this->news_model->getslides(),
                        'row' => $this->news_model->getSlide()
                    );
            $this->load->view('news.php', $data);
        }
        public function add() {
        if ($this->input->post()) {
            echo FCPATH . DIRECTORY_SEPARATOR . 'uploads';
            $config['upload_path'] = FCPATH . DIRECTORY_SEPARATOR . 'uploads';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2048000;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('images')) {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
                die;
            } else {
                $data = $this->upload->data();
                $filename = $data['file_name'];
                $username = $this->session->userdata("email");
                $this->load->model('news_model');
                $ret = $this->news_model->insert($filename,$username);
            }
        }
        $this->load->view('ok');
    }
}
