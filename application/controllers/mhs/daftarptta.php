<?php
class daftarptta extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_mhs');
}

	function index(){
		$x['data']=$this->m_mhs->daftarptta();
		
			$this->load->view('mhs/listptta',$x);
	}	
	

	
}