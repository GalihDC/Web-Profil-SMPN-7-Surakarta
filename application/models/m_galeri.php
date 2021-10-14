<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galeri extends CI_Model {

	function get_galeri(){
		$sql = "SELECT * FROM galeri JOIN album WHERE album.album_id=galeri.galeri_album_id";
		return $this->db->query($sql)->result_array();
	}




	// backend
	function simpan($data)
	{
		return $this->db->insert('galeri', $data);

	}
	function hapus_galeri($id)
	{
		$sql = "DELETE FROM galeri WHERE galeri_id='$id'";
		return $this->db->query($sql);
	}
	function edit_galeri($data, $id)
	{
		$this->db->where('galeri_id', $id);
		return $this->db->update('galeri', $data);

	}
	function get_galeri_album()
	{
		$sql = "SELECT * FROM album";
		return $this->db->query($sql)->result_array();
	}


	// --------------------- Update Count Album ------------------

	function get_count_album($album_id){
		$sql = "SELECT album_count FROM album WHERE album_id='$album_id'";
		return $this->db->query($sql)->row_array();
	}
	function update_album_count($data, $id)
	{
		$this->db->where('album_id', $id);
		return $this->db->update('album', array('album_count' => $data));
	}


	function get_galeri_by_album_id($id){
		$sql = "SELECT * FROM galeri WHERE galeri_album_id=$id";
		return $this->db->query($sql)->result_array();
	}
	

}

/* End of file m_galeri.php */
/* Location: ./application/models/m_galeri.php */