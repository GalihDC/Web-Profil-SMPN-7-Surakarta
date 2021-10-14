<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	// -----------------------------------HOME------------------------------------
	function get_siswa_home()
	{
		$sql= "SELECT * FROM siswa JOIN kelas WHERE siswa.siswa_kelas_id=kelas.kelas_id";
		return $this->db->query($sql);
	}
	
	function siswa_perpage($offset,$limit){
		$sql= "SELECT * FROM siswa JOIN kelas WHERE siswa.siswa_kelas_id=kelas.kelas_id LIMIT $offset,$limit";
		return $this->db->query($sql);
	}


// admin
	function get_siswa(){
		$sql= "SELECT * FROM siswa JOIN kelas WHERE siswa.siswa_kelas_id=kelas.kelas_id";
		return $this->db->query($sql)->result_array();
	}
	function get_kelas(){
		$sql = "SELECT * FROM kelas";
		return $this->db->query($sql)->result_array();
	
	}

	function simpan($data){
		return $this->db->insert('siswa', $data);
	}
	function edit_siswa($data, $id){
		$this->db->where('siswa_id', $id);
		return $this->db->update('siswa', $data);
	}
	function hapus_siswa($id){
		$sql="DELETE FROM siswa WHERE siswa_id='$id'";
		return $this->db->query($sql);
	}

	public function upload_file($filename){
	    $this->load->library('upload'); // Load librari upload
	    
	    $config['upload_path'] = './excel/';
	    $config['allowed_types'] = 'xlsx';
	    $config['max_size']  = '2048';
	    $config['overwrite'] = true;
	    $config['file_name'] = $filename;
	  
	    $this->upload->initialize($config); // Load konfigurasi uploadnya
	    if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
	      // Jika berhasil :
	      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
	      return $return;
	    }else{
	      // Jika gagal :
	      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
	      return $return;
	    }
  	}

  	function insert_multiple($data){
  		$this->db->insert_batch('siswa', $data);
  	}

	

}

/* End of file m_siswa.php */
/* Location: ./application/models/m_siswa.php */