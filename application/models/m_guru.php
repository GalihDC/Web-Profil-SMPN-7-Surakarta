<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model {

	// --------------------------------HOME---------------------------------------
	function get_guru_home()
	{
		$sql= "SELECT * FROM guru";
		return $this->db->query($sql);
	}

	function guru_perpage($offset,$limit){
		$sql="SELECT * FROM guru LIMIT $offset,$limit";
		return $this->db->query($sql);
		
	}




///adminnnn
	function get_guru(){
		$sql = "SELECT * FROM guru JOIN jabatan JOIN jenis_guru WHERE guru.guru_jabatan_id=jabatan.jabatan_id AND guru.guru_jenis_id=jenis_guru.jenis_guru_id ORDER BY guru.guru_id " ;
		return $this->db->query($sql)->result_array();
	}
	function get_jabatan(){
		$sql="SELECT * FROM jabatan";
		return $this->db->query($sql)->result_array();
	}
	function get_jenis_guru(){
		$sql="SELECT * FROM jenis_guru";
		return $this->db->query($sql)->result_array();
	}
	function simpan($data)
	{
		return $this->db->insert('guru', $data);
	}
	function hapus_guru($id)
	{
		$sql = "DELETE FROM guru WHERE guru_id='$id'";
		return $this->db->query($sql);
	}
	function edit_guru($data, $id)
	{
		$this->db->where('guru_id', $id);
		return $this->db->update('guru', $data);

	}	

}


// /* End of file m_guru.php */
//  Location: ./application/models/m_guru.php 