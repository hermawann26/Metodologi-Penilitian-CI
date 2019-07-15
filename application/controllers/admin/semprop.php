<?php
class semprop extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('m_semprop');

		$this->load->model('m_admin');
		
	}
	function index(){
		$x['data']=$this->m_semprop->get();
			
			$this->load->view('admin/v_semprop',$x);
	
	}
	function daftar(){
		$nim=$this->input->post('xnim');
		$dsn=$this->input->post('xdosen');
		$this->m_semprop->insert($nim,$dsn);
			$x['data']=$this->m_semprop->get();
		$this->load->view('admin/v_semprop',$x);
	
	}
	
	
}