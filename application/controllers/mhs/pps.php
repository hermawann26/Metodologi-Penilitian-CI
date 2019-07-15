<?php
class pps extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('m_mhs');
		
	}
	function index(){
			
			$this->load->view('mhs/pps');

	}
	function updatestatus(){
		$nim=$this->input->post('xnim');
	    $status="PPS";
	     $this->m_mhs->status($nim,$status);
	    redirect('mhs/pps');
	}
	
}