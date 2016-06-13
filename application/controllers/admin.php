<?php

class Admin extends CI_Controller{
    public function __construct() 
        {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library("session");
            $this->load->model('admin_model');
            $this->load->library('email');
        }
        public function index(){
            $this->load->view('login');
        }
        public function login($o = 0){
            if(isset($_POST['ok'])){
                if($_POST['username']!=''&& $_POST['password']!=''){
                    if($this->admin_model->check_password($_POST['username'],$_POST['password'])){
                        $this->session->set_userdata($_POST['username']);
                        $username = $_POST['username'];

                        $this->load->library('pagination');
                        $config['base_url'] = base_url('admin/detail');
                        $config['total_rows'] = $this->admin_model->countList2();
                        $config['per_page'] = 2;
                        $config['prev_link']  = '&laquo;';
                        $config['next_link'] = '&raquo;';
                        $config['last_link']  = '';
                        $config['first_link'] = '';
                        $config['cur_tag_open'] = '<li class="active"><a href="">';
                        $config['cur_tag_close'] = '</a></li>';
                        $config['num_tag_open'] = '<li>';
                        $config['next_tag_open'] = '<li>';
                        $config['next_tag_close'] = '</li>';
                        $config['num_tag_close'] = '</li>';
                        $config['prev_tag_open'] = '<li>';
                        $config['prev_tag_close'] = '</li>';
                        $this->pagination->initialize($config);

                        $data = array (
                            'username' => $this->session->userdata("username"),
                            'k' => $this->admin_model->getDanhmuc(),
                            'key' => $this->admin_model->getRows($o, 4),
                            'pagination' => $this->pagination->create_links(),
                        );
                            $this->load->view('admin', $data);
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
                    $this->login();
                }
        }
        public function pheduyet($id = ''){
            $data2 = $this->admin_model->getRow($id);

            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'datnc95.uet@gmail.com',
                'smtp_pass' => 'congdat95',
                'mailtype'  => 'html',
                'charset'   => 'iso-8859-1'
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('datnc95.uet@gmail.com', 'MY_SALE');
            $this->email->to('ngocnghechlamthe@gmail.com');
            $this->email->subject('Your Subject');
            $this->email->message('Your Message');

            if (!$this->email->send()) {
                show_error($this->email->print_debugger());
            }
            else {
                $row = $this->admin_model->edit_product($id);
                   echo '<script language="javascript">';
                   echo 'alert("gửi email thành công")';
                   echo '</script>';
                $data = array (
                   'username' => $this->session->userdata("username"),
                   'key' => $this->admin_model->getRows(),
               );
               $this->load->view('admin', $data);
            }
        }
        public function delete($id = ''){
            $data2 = $this->admin_model->getRow($id);
            $emailConfig = array(
                'protocol' => 'smtp',
                 'smtp_host' => 'ssl://smtp.googlemail.com',
                 'smtp_port' => 465,
                 'smtp_user' => 'yourEmail@gmail.com',
                 'smtp_pass' => 'yourEmailPassword',
                 'mailtype'  => 'html',
                 'charset'   => 'iso-8859-1'
             );
             $from = array('email' => 'datnc95.uet@gmail.com', 'name' => 'Your Name');
             $to = array($data2->product_email);
             $subject = 'Your gmail subject here';
             $message = 'Bài đăng của bạn không được chập thuận';
             $this->load->library('email', $emailConfig);
             $this->email->set_newline("rn");
             $this->email->from($from['email'], $from['name']);
             $this->email->to($to);
             $this->email->subject($subject);
             $this->email->message($message);

             if (!$this->email->send()) {
                 show_error($this->email->print_debugger());
             }
             else {
                 $this->admin_model->delete_product($id);
                    echo '<script language="javascript">';
                    echo 'alert("gửi email thành công")';
                    echo '</script>';
                 $data = array (
                    'username' => $this->session->userdata("username"),
                    'key' => $this->admin_model->getRows(),
                );
                $this->load->view('admin', $data);
             }

        }

        public function logout(){
            $this->session->sess_destroy();         
            redirect('admin');
        }
    public function news2(){
        $data = array (
            'username' => $this->session->userdata("username"),
            'id' => $this->session->userdata("id"),
            'k' => $this->admin_model->getDanhmuc(),
        );
        $this->load->view('news2.php', $data);
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
            } else {
                $data = $this->upload->data();
                $filename = $data['file_name'];
                $this->load->model('news_model');
                $ret = $this->admin_model->insert($filename);
            }
        }
        redirect('admin/news2');
    }
    public function detail($o = 0){

        $this->load->library('pagination');
        $config['base_url'] = base_url('admin/detail');
        $config['total_rows'] = $this->admin_model->countList1();
        $config['per_page'] = 2;
        $config['prev_link']  = '&laquo;';
        $config['next_link'] = '&raquo;';
        $config['last_link']  = '';
        $config['first_link'] = '';
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
            'key' => $this->admin_model->getProduct($o, 4),
            'pagination' => $this->pagination->create_links(),
        );
        $this->load->view('admin/detail.php', $data);
    }
}

