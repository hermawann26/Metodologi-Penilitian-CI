<?php
class uploaduas extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('m_mhs');
		
	}
	function index(){
			
			$this->load->view('mhs/uas');
	
	}
	function updateuas(){
		$nim=$this->input->post('xnim');
	    $link=$this->input->post('xlink');
	     $this->m_mhs->updateuas($nim,$link);
	    redirect('mhs/uploaduas');
	}
	
}