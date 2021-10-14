<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/v_pengguna');
	}

}

/* End of file Pengguna.php */
/* Location: ./application/controllers/admin/Pengguna.php */