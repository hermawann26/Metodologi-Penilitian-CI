<?php
class Rjudul extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_daftar');
		$this->load->model('m_rekomen');
		$this->load->model('m_dosen');
	}


	function index(){
		$x['data']=$this->m_rekomen->get_all_rek();
		
			$this->load->view('mhs/v_ambil_judul',$x);
	}	
	function ambil(){

	                $id=$this->input->post('xid');
	                $nim=$this->input->post('xnim');
	                $nama=$this->input->post('xnama');
	                $judul=$this->input->post('xjudul');
	                $dosen=$this->input->post('xdosen');
	                $status=$this->input->post('xstatus');
	                $namadosen=$dosen;
					$this->m_daftar->simpan_daftar_rek($nim,$nama,$judul,$dosen);
					$this->m_rekomen->update($judul,$dosen);
					$this->m_dosen->simpan_mahasiswa($nim,$nama,$judul,$namadosen);
					redirect('mhs/home');
				}

	
}