<?php
class daftarpps extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_mhs');
}

	function index(){
		$x['data']=$this->m_mhs->daftarpps();
		
			$this->load->view('mhs/listpps',$x);
	}	
	

	
}