<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_galeri');
		$this->load->model('m_album');
	
	}

	public function index()
	{
		$sql = "SELECT * FROM galeri";
		$data['data'] = $this->db->query($sql);
		$this->load->view('v_galeri', $data);

	}
	function album(){
		$idalbum=$this->uri->segment(3);
		$data['alb']=$this->m_album->get_album();
		$data['data']=$this->m_galeri->get_galeri_by_album_id($idalbum);
		$this->load->view('v_galeri_per_album',$data);

	}
}

/* End of file Galeri.php */
/* Location: ./application/controllers/Galeri.php */