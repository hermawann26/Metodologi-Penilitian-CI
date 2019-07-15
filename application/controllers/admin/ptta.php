<?php
class Ptta extends CI_Controller{
	function __construct(){
		parent::__construct();
$this->load->model('m_admin');
		$this->load->model('m_mhs');
		
		
	}
	function index(){
			$status='ptta';
			$x['data']=$this->m_admin->list($status);
		
			$this->load->view('admin/v_ptta',$x);
	
	}
	function gantistatus(){
		$status="SELESAIPTTA";
		$nim=$this->input->post('kode');
		 $this->m_mhs->status($nim,$status);
		 redirect('admin/ptta');


	}
	
	
}