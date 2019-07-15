<?php
class Login extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_login');
    }
    function index(){
        
        $this->load->view('login');
    }
   
    function auth(){
        $username=strip_tags(str_replace("'", "", $this->input->post('username')));
        $password=strip_tags(str_replace("'", "", $this->input->post('password')));
        $u=$username;
        $p=$password;
        $cadmin=$this->m_login->cekdosen($u,$p);
        echo json_encode($cadmin);
        if($cadmin->num_rows() > 0){
         $this->session->set_userdata('akses','1');
         $this->session->set_userdata('user',$u);
         redirect('dosen/acc');

       }else if($u=='admin'&& $p=='admin') {
         redirect('admin/pps');
         
       }
       else{
        echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
         redirect('login');
       }
   }


    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
