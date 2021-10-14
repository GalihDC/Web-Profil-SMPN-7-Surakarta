<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengumuman');
	}	

	public 	function index(){
		
		$sql = "SELECT * FROM pengumuman ORDER BY pengumuman_tanggal DESC";
		$data['data'] = $this->db->query($sql);
		$juml=$this->M_pengumuman->get_pengumuman_home();
		$page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=5;
        $config['base_url'] = base_url() . 'pengumuman/index/';

        $config['per_page'] = $limit;
        $config['total_rows'] = $juml->num_rows();
        $config['uri_segment'] = 3;
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['next_link'] = 'Next >>';
        $config['prev_link'] = '<< Prev';
        $this->pagination->initialize($config);
	        $data['page'] =$this->pagination->create_links();
		$data['data']=$this->M_pengumuman->pengumuman_perpage($offset,$limit);


		$this->load->view('v_pengumuman', $data);
	}
}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/Pengumuman.php */