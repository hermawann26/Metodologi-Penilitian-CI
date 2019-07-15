<?php
class ptta extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('m_mhs');
		
	}
	function index(){
			
			$this->load->view('mhs/ptta');
	
	}
	function updatestatus(){
		$nim=$this->input->post('xnim');
	    $status="PTTA";
	     $this->m_mhs->status($nim,$status);
	    redirect('mhs');
	}
	
}