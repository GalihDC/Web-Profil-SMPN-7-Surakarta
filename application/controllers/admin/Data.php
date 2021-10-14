<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
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
		$dt=$this->M_data->get_data();
		$data['data']=$dt;
		$this->load->view('admin/v_data', $data);
	}
	// ----------------------------------------ADMIN--------------------------------------------------
	public function simpan()
	{
		$s=$this->input->post('submit');
		if(isset($s)){

			$sambutan=$this->input->post('sambutan');
			$visi=$this->input->post('visi');
			$misi=$this->input->post('misi');
			$data =	array('data_sambutan' => $sambutan,
				           'data_visi' => $visi,
						   'data_misi' => $misi);
			$dt=$this->M_data->simpan($data);
			if ($dt) {
				echo $this->session->set_flashdata('msg','success');
				redirect('admin/data','refresh');
			}
		}
	}
	public function edit_data()
	{
		$id=$this->input->post('id');
		$sambutan=$this->input->post('sambutan');
		$visi=$this->input->post('visi');
		$misi=$this->input->post('misi');
		$data =	array('data_sambutan' => $sambutan,
			           'data_visi' => $visi,
					   'data_misi' => $misi);
		$dt=$this->M_data->edit_data($data, $id);
		if ($dt) {
				echo $this->session->set_flashdata('msg','success');
				redirect('admin/data','refresh');
			}
	}
	public function hapus_data()
	{
		$id=$this->input->post('id');
		$this->M_data->hapus_data($id);
		redirect('admin/data','refresh');
	}

}

/* End of file Data.php */
/* Location: ./application/controllers/admin/Data.php */