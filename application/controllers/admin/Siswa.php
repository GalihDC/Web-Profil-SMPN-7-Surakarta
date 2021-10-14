	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	private $filename = "import_data"; // Kita tentukan nama filenya

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_siswa');
		if ($this->session->userdata('masuk') == 'sanditampanmasuk') {
			true;
		}else{
			$url=base_url('index.php/administrator');
            echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Anda Harus Login </div>');
            redirect($url);
		}
	}

	public function index()
	{
		$s=$this->M_siswa->get_siswa();
		$k=$this->M_siswa->get_kelas();
		$data['siswa']=$s;
		$data['kelas']=$k;		

		$this->load->view('admin/v_siswa', $data);
	}

// backend
	public function simpan()
	{
		$s = $this->input->post('submit');
		if (isset($s)) 
		{
			$config['upload_path'] = './assets/images/'; //path folder
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
	                        $nis=$this->input->post('nis');
							$nama=$this->input->post('nama');
							$jenkel=$this->input->post('jenkel');
							$tmplahir=$this->input->post('tempatlahir');
							$tgllahir=$this->input->post('tanggallahir');
							$kelas=$this->input->post('kelas');
							$alamat=$this->input->post('alamat');
							$ket=$this->input->post('keterangan');
							$data = array('siswa_nis' => $nis,
										  'siswa_nama' => $nama,
										  'siswa_jenkel' => $jenkel,
										  'siswa_tmp_lahir' => $tmplahir,
										  'siswa_tgl_lahir' => $tgllahir,
										  'siswa_kelas_id' => $kelas,
										  'siswa_alamat' => $alamat,
										  'siswa_keterangan' => $ket,
 										  'siswa_photo' => $photo);
							
							$s=$this->M_siswa->simpan($data);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/siswa');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/siswa');
	                }
	                 
	            }else{
	                
                    $nis=$this->input->post('nis');
					$nama=$this->input->post('nama');
					$jenkel=$this->input->post('jenkel');
					$tmplahir=$this->input->post('tempatlahir');
					$tgllahir=$this->input->post('tanggallahir');
					$kelas=$this->input->post('kelas');
					$alamat=$this->input->post('alamat');
					$ket=$this->input->post('keterangan');
					$data = array('siswa_nis' => $nis,
								  'siswa_nama' => $nama,
								  'siswa_jenkel' => $jenkel,
								  'siswa_tmp_lahir' => $tmplahir,
								  'siswa_tgl_lahir' => $tgllahir,
								  'siswa_kelas_id' => $kelas,
								  'siswa_alamat' => $alamat,
								  'siswa_keterangan' => $ket);
	
					$s=$this->M_siswa->simpan($data);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/siswa');
				}
		}
		
	}
	public function edit_siswa()
	{
		$s = $this->input->post('submit');
		if (isset($s)) 
		{
			$config['upload_path'] = './assets/images/'; //path folder
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
							
							$id=$this->input->post('eid');
							$photo=$gbr['file_name'];
	                        $nis=$this->input->post('enis');
							$nama=$this->input->post('enama');
							$jenkel=$this->input->post('ejenkel');
							$tmplahir=$this->input->post('etempatlahir');
							$tgllahir=$this->input->post('etanggallahir');
							$kelas=$this->input->post('ekelas');
							$alamat=$this->input->post('ealamat');
							$ket=$this->input->post('eketerangan');
							$data = array('siswa_nis' => $nis,
										  'siswa_nama' => $nama,
										  'siswa_jenkel' => $jenkel,
										  'siswa_tmp_lahir' => $tmplahir,
										  'siswa_tgl_lahir' => $tgllahir,
										  'siswa_kelas_id' => $kelas,
										  'siswa_alamat' => $alamat,
										  'siswa_keterangan' => $ket,
										  'siswa_photo' => $photo);
							
							$s=$this->M_siswa->edit_siswa($data, $id);
							$this->session->set_flashdata('msg','success');
							redirect('admin/siswa');
						}else{

	                        
	                        $id=$this->input->post('eid');
	                        $nis=$this->input->post('enis');
							$nama=$this->input->post('enama');
							$jenkel=$this->input->post('ejenkel');
							$tmplahir=$this->input->post('etempatlahir');
							$tgllahir=$this->input->post('etanggallahir');
							$kelas=$this->input->post('ekelas');
							$alamat=$this->input->post('ealamat');
							$ket=$this->input->post('eketerangan');
							$data = array('siswa_nis' => $nis,
										  'siswa_nama' => $nama,
										  'siswa_jenkel' => $jenkel,
										  'siswa_tmp_lahir' => $tmplahir,
										  'siswa_tgl_lahir' => $tgllahir,
										  'siswa_kelas_id' => $kelas,
										  'siswa_alamat' => $alamat,
										  'siswa_keterangan' => $ket);
							
							$s=$this->M_siswa->edit_siswa($data, $id);
							$this->session->set_flashdata('msg','success');
							redirect('admin/siswa');
	                	
	                	}
					
					}else{
						$id=$this->input->post('eid');
                        $nis=$this->input->post('enis');
						$nama=$this->input->post('enama');
						$jenkel=$this->input->post('ejenkel');
						$tmplahir=$this->input->post('etempatlahir');
						$tgllahir=$this->input->post('etanggallahir');
						$kelas=$this->input->post('ekelas');
						$alamat=$this->input->post('ealamat');
						$ket=$this->input->post('eketerangan');
						$data = array('siswa_nis' => $nis,
									  'siswa_nama' => $nama,
									  'siswa_jenkel' => $jenkel,
									  'siswa_tmp_lahir' => $tmplahir,
									  'siswa_tgl_lahir' => $tgllahir,
									  'siswa_kelas_id' => $kelas,
									  'siswa_alamat' => $alamat,
									  'siswa_keterangan' => $ket);
					
						$s=$this->M_siswa->edit_siswa($data, $id);
						$this->session->set_flashdata('msg','success');
						redirect('admin/siswa');
	                	
					}
				}
			}
	public function hapus_siswa()
	{
		$id=$this->input->post('id');
		$this->M_siswa->hapus_siswa($id);
		redirect('admin/siswa','refresh');
	}

	public function simpan_review(){
		$data = array(); // Buat variabel $data sebagai array
    
	    if(isset($_POST['upload'])){ // Jika user menekan tombol Preview pada form
	      // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
	      $upload = $this->M_siswa->upload_file($this->filename);
	      
	      if($upload['result'] == "success"){ // Jika proses upload sukses
	        // Load plugin PHPExcel nya
	        include APPPATH.'third_party/PHPExcel/PHPExcel.php';
	        
	        $excelreader = new PHPExcel_Reader_Excel2007();
	        $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
	        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
	        
	        // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
	        // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
	        $data['sheet'] = $sheet; 
	      }else{ // Jika proses upload gagal
	        $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
	      }
	    }
	    
	    $this->load->view('admin/v_review_excel', $data);
		}


	public function import(){
	    // Load plugin PHPExcel nya
	    include APPPATH.'third_party/PHPExcel/PHPExcel.php';
	    
	    $excelreader = new PHPExcel_Reader_Excel2007();
	    $loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
	    $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
	    
	    // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
	    $data = array();
	    
	    $numrow = 1;
	    foreach($sheet as $row){
	      // Cek $numrow apakah lebih dari 1
	      // Artinya karena baris pertama adalah nama-nama kolom
	      // Jadi dilewat saja, tidak usah diimport
	      if($numrow > 1){
	        // Kita push (add) array data ke variabel data
	        $kls_siswa = $row['D'];
	        $id_kelas = $this->db->query("SELECT * FROM kelas WHERE kelas_nama='$kls_siswa'")->row_array();
	        if ($id_kelas) {
		        	array_push($data, array(
		          'siswa_nis'=>$row['A'], // Insert data nis dari kolom A di excel
		          'siswa_nama'=>$row['B'], // Insert data nama dari kolom B di excel
		          'siswa_jenkel'=>$row['C'], // Insert data jenis kelamin dari kolom C di excel
		          'siswa_kelas_id'=>$id_kelas['kelas_id'] // Insert data alamat dari kolom D di excel
		        ));
	        }
	        
	      }
	      
	      $numrow++; // Tambah 1 setiap kali looping
	    }
	    // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
	    $this->M_siswa->insert_multiple($data);
	    
	    redirect("admin/siswa"); // Redirect ke halaman awal (ke controller siswa fungsi index)
  }

}

/* End of file siswa.php */
/* Location: ./application/controllers/siswa.php */