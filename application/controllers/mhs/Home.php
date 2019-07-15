<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('m_daftar');
		
	}
	function index(){
			$x['data']=$this->m_daftar->get_all_daftar();
		
			$this->load->view('mhs/home',$x);
	
	}
	function rek(){
		$this->load->view('mhs/v_ambil_judul');
	}
	
}