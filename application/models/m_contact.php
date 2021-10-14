	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_contact extends CI_Model {

	function get_all_inbox()
	{
		$sql= "SELECT * FROM inbox";
		return $this->db->query($sql)->result_array();

	}
	function kirim_pesan($data)
	{
		$this->db->insert('inbox', $data);

	}
	function hapus_contact($id)
	{
		$sql = "DELETE FROM inbox WHERE inbox_id='$id'";
		return $this->db->query($sql);
	}
	function edit_contact($data, $id)
	{
		$this->db->where('inbox_id', $id);
		return $this->db->update('inbox', $data);

	}

}

/* End of file m_contact.php */
/* Location: ./application/models/m_contact.php */