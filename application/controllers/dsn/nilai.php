<?php
class Nilai extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('m_mhs');
		
	}
	function index(){
			$x['data']=$this->m_mhs->get_all();
		
			$this->load->view('dsn/nilai',$x);
	
	}
	
	
}