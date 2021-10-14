<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengumuman extends CI_Model {

///Front End
	function get_pengumuman(){
		$sql = "SELECT * FROM pengumuman ORDER BY pengumuman_tanggal DESC LIMIT 5";
		return $this->db->query($sql)->result_array();
	}
	function get_pengumuman_admin(){
		$sql = "SELECT * FROM pengumuman ORDER BY pengumuman_tanggal DESC";
		return $this->db->query($sql)->result_array();
	}
	function pengumuman_perpage($offset,$limit){
		$sql="SELECT * FROM pengumuman LIMIT $offset,$limit";
		return $this->db->query($sql);
	}
	
	function get_pengumuman_home(){
		$sql = "SELECT * FROM pengumuman ORDER BY pengumuman_tanggal DESC";
		return $this->db->query($sql);
	}	









	// backend
	function simpan($data)
	{
		return $this->db->insert('pengumuman', $data);

	}
	function hapus_pengumuman($id)
	{
		$sql = "DELETE FROM pengumuman WHERE pengumuman_id='$id'";
		return $this->db->query($sql);
	}
	function edit_pengumuman($data, $id)
	{
		$this->db->where('pengumuman_id', $id);
		return $this->db->update('pengumuman', $data);

	}

	

}

/* End of file m_pengumuman.php */
/* Location: ./application/models/m_pengumuman.php */