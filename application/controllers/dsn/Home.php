<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('m_daftar');
		
	}
	function index(){
			$x['data']=$this->m_daftar->list_aju();
		
			$this->load->view('dsn/home',$x);
	
	}
	function terima(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_daftar->terima($kode);
		
		redirect('dsn/home');
	}

	function tolak(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_daftar->tolak($kode);
		redirect('dsn/home');
	}
	
	
}