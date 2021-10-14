<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_guru');
	}

	public function index()
	{
		$sql = "SELECT * FROM guru JOIN jabatan JOIN jenis_guru WHERE guru.guru_jabatan_id=jabatan.jabatan_id AND guru.guru_jenis_id=jenis_guru.jenis_guru_id";
		$data['data'] = $this->db->query($sql);	
		$juml=$this->M_guru->get_guru_home();
		$page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=7;
        $config['base_url'] = base_url() . 'guru/index/';

	        $config['per_page'] = $limit;
	        $config['total_rows'] = $juml->num_rows();
	        $config['uri_segment'] = 3;
	        $config['first_link'] = 'Awal';
	        $config['last_link'] = 'Akhir';
	        $config['next_link'] = 'Next >>';
	        $config['prev_link'] = '<< Prev';
	        $this->pagination->initialize($config);
	        $data['page'] =$this->pagination->create_links();
		$data['data']=$this->M_guru->guru_perpage($offset,$limit);




			$this->load->view('v_guru', $data);
	}


}

/* End of file guru.php */
/* Location: ./application/controllers/guru.php */