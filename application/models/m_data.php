<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	function get_data()
	{
		$sql= "SELECT * FROM data";
		return $this->db->query($sql)->result_array();
	}
	function simpan($data)
	{
		return $this->db->insert('data', $data);
	}
	function hapus_data($id)
	{
		$sql = "DELETE FROM data WHERE data_id='$id'";
		return $this->db->query($sql);
	}
	function edit_data($data, $id)
	{
		$this->db->where('data_id', $id);
		return $this->db->update('data', $data);

	}

	

}

/* End of file m_data.php */
/* Location: ./application/models/m_data.php */