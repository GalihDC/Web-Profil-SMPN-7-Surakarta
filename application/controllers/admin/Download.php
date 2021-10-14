<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/v_download');
	}

}

/* End of file Download.php */
/* Location: ./application/controllers/admin/Download.php */