<?php
class acc extends CI_Controller{
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

		$x['data']=$this->m_dosen->get_request($username);
		
			$this->load->view('dosen/acc_mhs',$x);
	
	}
	function terima(){
		$kode=$this->session->userdata('user');
		$user=$this->m_dosen->get_namadosen($kode);
		$p=$user->row_array(); 
		$namadosen=$p['name'];
		$nim=$this->input->post('xnim');
	    $nama=$this->input->post('xnama');
	    $judul=$this->input->post('xjudul');
	   	$kode=strip_tags($this->input->post('kode'));
		$this->m_daftar->terima($kode);
	    $this->m_dosen->simpan_mahasiswa($nim,$nama,$judul,$namadosen);
	    redirect('dosen/acc');
	}
	function tolak(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_daftar->tolak($kode);
		redirect('dosen/acc');
	}
	
}