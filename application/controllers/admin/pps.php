<?php
class Pps extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('m_admin');
		$this->load->model('m_mhs');
		
	}
	function index(){
			$status='pps';
			$x['data']=$this->m_admin->list($status);
		
			$this->load->view('admin/v_pps',$x);
	
	}
		function gantistatus(){
		$status='pps';
		$nim=$this->input->post('kode');
		 $this->m_mhs->status($nim,$status);
		 redirect('admin/pps');


	}
	
	
}