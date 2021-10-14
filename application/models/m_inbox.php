<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_inbox extends CI_Model {

	///Admin
	function get_inbox()
	{
		$sql= "SELECT * FROM inbox";
		return $this->db->query($sql)->result_array();
	}
	function simpan($data)
	{
		return $this->db->insert('inbox', $data);

	}
	function hapus_inbox($id)
	{
		$sql = "DELETE FROM inbox WHERE inbox_id='$id'";
		return $this->db->query($sql);
	}
	function edit_inbox($data, $id)
	{
		$this->db->where('inbox_id', $id);
		return $this->db->update('inbox', $data);
	}

}