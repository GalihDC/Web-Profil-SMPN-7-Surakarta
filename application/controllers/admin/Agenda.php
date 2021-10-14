<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_agenda');
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

		$ag=$this->M_agenda->get_agenda();
		$data['agenda']=$ag;
		$this->load->view('admin/v_agenda', $data);
	}

	// ADMIN
	public function simpan()
	{
		$s=$this->input->post('submit');
		if(isset($s)){

			$id=$this->input->post('id');
			$tgl=$this->input->post('tanggal');
			$nama=$this->input->post('nama');
			$des=$this->input->post('deskripsi');
			$mulai=$this->input->post('mulai');
			$selesai=$this->input->post('selesai');
			$tmp=$this->input->post('tempat');
			$wkt=$this->input->post('waktu');
			$ket=$this->input->post('keterangan');
			$auth=$this->input->post('author');
			$data =	array('agenda_nama' => $nama,
				           'agenda_deskripsi' => $des,
						   'agenda_mulai' => $mulai,
						   'agenda_selesai' => $selesai,
						   'agenda_tempat' => $tmp,
						   'agenda_waktu' => $wkt,
						   'agenda_keterangan' => $ket,
						   'agenda_author' => $auth);
			$ag=$this->M_agenda->simpan($data);
			if ($ag) {
				echo $this->session->set_flashdata('msg','success');
				redirect('admin/agenda','refresh');
			}
		}
	}
	public function edit_agenda()
	{
		date_default_timezone_set('Asia/Jakarta');
		$id=$this->input->post('id');
		$nama=$this->input->post('nama');
		$des=$this->input->post('deskripsi');
		$mulai=$this->input->post('mulai');
		$selesai=$this->input->post('selesai');
		$tmp=$this->input->post('tempat');
		$wkt=$this->input->post('waktu');
		$ket=$this->input->post('keterangan');
		$auth=$this->input->post('author');
		$data =	array( 'agenda_tanggal' => date('Y-m-d H:i:s'),
					   'agenda_nama' => $nama,
			           'agenda_deskripsi' => $des,
					   'agenda_mulai' => $mulai,
					   'agenda_selesai' => $selesai,
					   'agenda_tempat' => $tmp,
					   'agenda_waktu' => $wkt,
					   'agenda_keterangan' => $ket,
					   'agenda_author' => $auth);
		$ag=$this->M_agenda->edit_agenda($data, $id);
		if ($ag) {
				echo $this->session->set_flashdata('msg','success');
				redirect('admin/agenda','refresh');
			}
	}
	public function hapus_agenda()
	{
		$id=$this->input->post('id');
		$this->M_agenda->hapus_agenda($id);
		redirect('admin/agenda','refresh');
	}

}	


/* End of file Agenda.php */
/* Location: ./application/controllers/admin/Agenda.php */