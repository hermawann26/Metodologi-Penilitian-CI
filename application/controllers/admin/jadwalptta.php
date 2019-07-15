<?php
class jadwalptta extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('m_admin');
		$this->load->model('m_semprop');

		
	}
	function index(){
			$x['data']=$this->m_semprop->get();
			
			$this->load->view('admin/v_jptta',$x);
	
	}
	
	
}