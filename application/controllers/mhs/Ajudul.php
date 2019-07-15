<?php
class Ajudul extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->model('m_daftar');
	}


	function index(){

		$this->load->view('mhs/v_aju_judul2');
	}	
	function daftar_judul(){
	                $nim=$this->input->post('xnim');
	                $nama=$this->input->post('xnama');
	                $judul=$this->input->post('xjudul');
	                $dosen=$this->input->post('xdosen');
	                $status=3;
					$this->m_daftar->simpan_daftar($nim,$nama,$judul,$dosen,$status);
					redirect('mhs/home');
				}

	
}