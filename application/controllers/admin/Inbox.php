<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_inbox');
		$this->load->model('M_contact');
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
		$i=$this->M_inbox->get_inbox();
		$this->db->query("UPDATE inbox SET inbox_status=0");
		$data['inbox']=$i;
		$this->load->view('admin/v_inbox', $data);
	}
	// BACKEND
	 public function simpan()
	{
		$s = $this->input->post('submit');
		if (isset($s)) 
		{
			$id=$this->input->post('id');
			$tgl=$this->input->post('tanggal');
			$nama=$this->input->post('nama');
			$email=$this->input->post('email');
			$pesan=$this->input->post('pesan');
			$nomer=$this->input->post('nomer');
			$status=$this->input->post('status');
			$data = array('inbox_tanggal'=> $tgl,
						  'inbox_nama' => $nama,
						  'inbox_email'	=> $email,
						  'inbox_pesan' => $pesan);
			$i=$this->M_inbox->simpan($data);
			if ($i) {
				redirect('admin/inbox','refresh');
			}
		}
		
	}
	public function edit_inbox()
	{
		$id=$this->input->post('id');
		$tgl=$this->input->post('tanggal');
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$pesan=$this->input->post('pesan');
		$nomer=$this->input->post('nomer');
		$status=$this->input->post('status');
		$data = array('inbox_tanggal'=> $tgl,
					  'inbox_nama' => $nama,
					  'inbox_email'	=> $email,
					  'inbox_pesan' => $pesan);
		$i=$this->M_inbox->edit_inbox($data, $id);
		if ($i) {
			redirect('admin/inbox','refresh');
		}
	}	
	public function hapus_inbox()
	{
		$id=$this->input->post('id');
		$this->M_contact->hapus_contact($id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/inbox','refresh');
	}

}	


/* End of file Pesan.php */
/* Location: ./application/controllers/admin/Pesan.php */