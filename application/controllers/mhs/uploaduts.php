<?php
class uploaduts extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('m_mhs');
		$this->load->helper(array('form', 'url'));
		
	}
	function index(){
			
			$this->load->view('mhs/uts');
	
	}
	function updateuts(){
		

	      		$config['upload_path']          = './assets/images/';
                $config['allowed_types']        = 'doc|docx|pdf';
                $config['max_size']             = 0;
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('xuts'))
                {
                        redirect('mhs/uploaduts');
                }
                else
                {		$file =  $this->upload->data();
                        $nim=$this->input->post('xnim');
	     				$this->m_mhs->updateuts($nim,$file);
	    				redirect('mhs');
                }
	}
	
}