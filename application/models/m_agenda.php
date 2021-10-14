<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_agenda extends CI_Model {
	///adminnnn
	function get_agenda(){
		$sql= "SELECT * FROM agenda ORDER BY agenda_tanggal DESC";
		return $this->db->query($sql)->result_array();
	}
	function simpan($data)
	{
		return $this->db->insert('agenda', $data);
	}
	function hapus_agenda($id)
	{
		$sql = "DELETE FROM agenda WHERE agenda_id='$id'";
		return $this->db->query($sql);
	}
	function edit_agenda($data, $id)
	{
		$this->db->where('agenda_id', $id);
		return $this->db->update('agenda', $data);

	}




	// ----------------------------------------------HOME-----------------------------------------------------	

	function get_agenda_home(){
		$sql= "SELECT * FROM agenda ORDER BY agenda_tanggal DESC LIMIT 5";
		return $this->db->query($sql);
	}

	function agenda_perpage($offset,$limit){
		$sql="SELECT * FROM agenda ORDER BY agenda_tanggal DESC LIMIT $offset,$limit";
		return $this->db->query($sql);
		
	}


	function cari_agenda($keyword){
		// $sql="SELECT * FROM agenda WHERE agenda_nama LIKE '%keyword%'";
		// return $this->db->query($sql)->result->array();
		$hsl=$this->db->query("SELECT agenda.*,DATE_FORMAT(agenda_tanggal,'%Y-%m-%d') AS tanggal FROM agenda WHERE agenda_nama LIKE '%$keyword%'");
		return $hsl;
	}

}

/* End of file m_agenda.php */
/* Location: ./application/models/m_agenda.php */
