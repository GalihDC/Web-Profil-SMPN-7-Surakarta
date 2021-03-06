<?php
class Siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_siswa');
	}
	function index(){
		$jum=$this->M_siswa->get_siswa_home();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=7;
        $config['base_url'] = base_url() . 'siswa/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
            $x['page'] =$this->pagination->create_links();
		$x['data']=$this->M_siswa->siswa_perpage($offset,$limit);
		//$x['brt']=$this->berita->beritaasc();
		$this->load->view('/v_siswa',$x);
	}

    

}