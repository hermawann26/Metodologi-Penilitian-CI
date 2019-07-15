<?php
class kelola extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('akses') !='1'){
            $url=base_url('login');
            redirect($url);
        };
		$this->load->model('m_dosen');
		$this->load->model('m_daftar');
	}
	function index(){
		$kode=$this->session->userdata('user');
		$user=$this->m_dosen->get_namadosen($kode);
		$p=$user->row_array(); 
		$username=$p['name'];

		$x['data']=$this->m_dosen->get_ampu($username);
		
			$this->load->view('dosen/kelola_mhs',$x);
	
	}
	function updatenilaiuts(){
		$nim=$this->input->post('kode');
		$nilai=$this->input->post('xnilai');
		if($nilai>=70){
			$status="UAS";
		}
		else{
			$status="DAFTARPPS";
		}
		$this->m_daftar->updatenilaiuts($nim,$nilai,$status);
		$kode=$this->session->userdata('user');
		$user=$this->m_dosen->get_namadosen($kode);
		$p=$user->row_array(); 
		$username=$p['name'];

		$x['data']=$this->m_dosen->get_ampu($username);
		
			$this->load->view('dosen/kelola_mhs',$x);

	}
	function updatenilaiuas(){
		$nim=$this->input->post('kode');
		$nilai=$this->input->post('xnilai');
		if($nilai>=70){
			$status="SELESAI";
		}
		else{
			$status="DAFTARPTTA";
		}
		$this->m_daftar->updatenilaiuas($nim,$nilai,$status);
		$kode=$this->session->userdata('user');
		$user=$this->m_dosen->get_namadosen($kode);
		$p=$user->row_array(); 
		$username=$p['name'];
		
		$x['data']=$this->m_dosen->get_ampu($username);
		
			$this->load->view('dosen/kelola_mhs',$x);

	}
	
}