<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_files extends CI_Model {

	///adminnnn
	function get_file()
	{
		$sql= "SELECT * FROM files";
		return $this->db->query($sql)->result_array();
	}
	function simpan($data)
	{
		return $this->db->insert('files', $data);
	}
	function hapus_file($id)
	{
		$sql = "DELETE FROM files WHERE file_id='$id'";
		return $this->db->query($sql);
	}
	function edit_file($data, $id)
	{
		$this->db->where('file_id', $id);
		return $this->db->update('files', $data);

	}	

}

/* End of file m_download.php */
/* Location: ./application/models/m_download.php */