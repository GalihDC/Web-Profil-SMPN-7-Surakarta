<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_agenda');
		
	}

	public function index(){
		
		$sql = "SELECT * FROM agenda ORDER BY agenda_tanggal DESC LIMIT 5";
		$data['data'] = $this->db->query($sql);
		$juml=$this->M_agenda->get_agenda_home();
		$page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=7;
        $config['base_url'] = base_url() . 'index.php/agenda/index/';

	        $config['per_page'] = $limit;
	        $config['total_rows'] = $juml->num_rows();
	        $config['uri_segment'] = 3;
	        $config['first_link'] = 'Awal';
	        $config['last_link'] = 'Akhir';
	        $config['next_link'] = 'Next >>';
	        $config['prev_link'] = '<< Prev';
	        $this->pagination->initialize($config);
	        $data['page'] =$this->pagination->create_links();
		$data['data']=$this->M_agenda->agenda_perpage($offset,$limit);
		$this->load->view('v_agenda', $data);
	}
	function search(){
        $keyword=str_replace("'", "", $this->input->post('textcari'));
        $x['data']=$this->M_agenda->cari_agenda($keyword);
        $this->load->view('v_agenda_search',$x);
    }
}

/* End of file Agenda.php */
/* Location: ./application/controllers/Agenda.php */