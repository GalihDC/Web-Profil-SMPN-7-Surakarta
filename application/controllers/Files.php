<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_files');
	
	}

	public function index()
	{
		$f=$this->M_files->get_file();
		$data['files']=$f;
		$this->load->view('v_files', $data);
	}

	public function aksi_download(){
		$this->load->helper('download');
		$nama = $this->uri->segment(3);
			force_download('assets/files/'.$nama, NULL);
	
	}

}

