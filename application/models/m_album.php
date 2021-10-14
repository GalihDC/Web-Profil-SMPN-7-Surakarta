<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_album extends CI_Model {

	function get_album(){
		$sql = "SELECT * FROM album ";
		return $this->db->query($sql)->result_array();
	}




	// backend
	function simpan($data)
	{
		return $this->db->insert('album', $data);

	}
	function hapus_album($id)
	{
		$sql = "DELETE FROM album WHERE album_id='$id'";
		return $this->db->query($sql);
	}
	function edit_album($data, $id)
	{
		$this->db->where('album_id', $id);
		return $this->db->update('album', $data);

	}

	

}

/* End of file m_album.php */
/* Location: ./application/models/m_album.php */