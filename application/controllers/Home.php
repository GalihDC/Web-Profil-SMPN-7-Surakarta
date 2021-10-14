<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengumuman');
		$this->load->model('M_agenda');
		$this->load->model('M_files');
		$this->load->model('M_galeri');
		$this->load->model('M_guru');

	}
	public function index()
	{
		$p=$this->M_pengumuman->get_pengumuman();
		$ag=$this->M_agenda->get_agenda();
		$f=$this->M_files->get_file();
		$gr=$this->M_galeri->get_galeri();
		$g=$this->M_guru->get_guru_home();
		$data['guru'] = $g;
		$data['pengumuman'] = $p;
		$data['galeri'] = $gr;
		$data['agenda'] = $ag;
		$data['files'] = $f;
		$this->load->view('v_home', $data);

	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */