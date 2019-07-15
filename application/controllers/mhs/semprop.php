<?php
class semprop extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('m_mhs');
		
	}
	function index(){
			
			$this->load->view('mhs/semprop');
	
	}
	function updatestatus(){
		$nim=$this->input->post('xnim');
	    $status="SEMPROP";
	     $this->m_mhs->status($nim,$status);
	    redirect('mhs/semprop');
	}
	
}