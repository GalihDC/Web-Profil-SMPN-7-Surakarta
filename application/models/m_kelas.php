<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {
	
	function get_all_kelas(){

		$sql= "SELECT * FROM kelas";
		return $sql

	}

	

}

/* End of file m_kelas.php */
/* Location: ./application/models/m_kelas.php */