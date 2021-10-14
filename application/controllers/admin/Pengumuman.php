<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengumuman');
		if ($this->session->userdata('masuk') == 'sanditampanmasuk') {
			true;
		}else{
			$url=base_url('index.php/administrator');
            echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Anda Harus Login </div>');
            redirect($url);
		}
	}
	public function index()
	{
		$d=$this->M_pengumuman->get_pengumuman_admin();
		$data['pengumuman']=$d;
		$this->load->view('admin/v_pengumuman', $data);









		// BACKEND
	}
	public function simpan()
	{
		$s = $this->input->post('submit');
		if (isset($s)) 
		{
			$judul=$this->input->post('judul');
			$isi=$this->input->post('isi');
			$auth=$this->input->post('author');
			$data = array('pengumuman_judul' => $judul,
						  'pengumuman_isi' => $isi,
						  'pengumuman_author' => $auth);
			$p=$this->M_pengumuman->simpan($data);
			if ($p) {
				redirect('admin/pengumuman','refresh');
			}
		}
		
	}
	public function edit_pengumuman()
	{
		$id=$this->input->post('id');
		$judul=$this->input->post('judul');
		$isi=$this->input->post('isi');
		$auth=$this->input->post('author');
		$data = array(		'pengumuman_judul' => $judul,
							'pengumuman_isi' => $isi,
						    'pengumuman_author' => $auth);
		$this->M_pengumuman->edit_pengumuman($data, $id);
		redirect('admin/pengumuman','refresh');
	}
	public function hapus_pengumuman()
	{
		$id=$this->input->post('id');
		$this->M_pengumuman->hapus_pengumuman($id);
		redirect('admin/pengumuman','refresh');
	}

}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/admin/Pengumuman.php */