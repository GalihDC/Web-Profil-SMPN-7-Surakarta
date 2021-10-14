<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_guru');
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
		
		$g=$this->M_guru->get_guru();
		$jabatan=$this->M_guru->get_jabatan();
		$jns=$this->M_guru->get_jenis_guru();
		$data['guru']=$g;
		$data['jabatan']=$jabatan;
		$data['jenis']=$jns;
		$this->load->view('admin/v_guru', $data);
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
	                        $nip=$this->input->post('nip');
							$nama=$this->input->post('nama');
							$jenkel=$this->input->post('jenkel');
							$tmplahir=$this->input->post('tempatlahir');
							$tgllahir=$this->input->post('tanggallahir');
							$mapel=$this->input->post('mapel');
							$jbt=$this->input->post('jabatan');
							$ket=$this->input->post('keterangan');
							$jenis=$this->input->post('jenis');
							$data = array('guru_nip' => $nip,
										  'guru_nama' => $nama,
										  'guru_jenkel' => $jenkel,
										  'guru_tmp_lahir' => $tmplahir,
										  'guru_tgl_lahir' => $tgllahir,
										  'guru_mapel' => $mapel,
										  'guru_jenis_id' => $jenis,
										  'guru_jabatan_id' => $jbt,
										  'guru_keterangan' => $ket,
										  'guru_photo' => $photo);
							
							$g=$this->M_guru->simpan($data);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/guru');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/guru');
	                }
	                 
	            }else{
	                $nip=$this->input->post('nip');
					$nama=$this->input->post('nama');
					$jenkel=$this->input->post('jenkel');
					$tmplahir=$this->input->post('tempatlahir');
					$tgllahir=$this->input->post('tanggallahir');
					$mapel=$this->input->post('mapel');
					$jbt=$this->input->post('jabatan');
					$ket=$this->input->post('keterangan');
					$jenis=$this->input->post('jenis');
					$data = array('guru_nip' => $nip,
										  'guru_nama' => $nama,
										  'guru_jenkel' => $jenkel,
										  'guru_tmp_lahir' => $tmplahir,
										  'guru_tgl_lahir' => $tgllahir,
										  'guru_mapel' => $mapel,
										  'guru_jenis_id' => $jenis,
										  'guru_jabatan_id' => $jbt,
										  'guru_keterangan' => $ket);
					$g=$this->M_guru->simpan($data);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/guru');
				}
		}
		
	}
	public function edit_guru()
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
							$nama = $this->input->post('enama');
							$photo=$gbr['file_name'];
							$nip=$this->input->post('enip');
							$jenkel=$this->input->post('ejenkel');
							$tmplahir=$this->input->post('etmplahir');
							$tgllahir=$this->input->post('etgllahir');
							$mapel=$this->input->post('emapel');
							$jbt=$this->input->post('ejabatan');
							$ket=$this->input->post('eketerangan');
							$jenis=$this->input->post('ejenis');
							$data = array(	'guru_nip' => $nip,
											'guru_nama' => $nama,
											'guru_jenkel' => $jenkel,
											'guru_tmp_lahir' => $tmplahir,
											'guru_tgl_lahir' => $tgllahir,
											'guru_mapel' => $mapel,
											'guru_jenis_id' => $jenis,
											'guru_jabatan_id' => $jbt,
											'guru_keterangan' => $ket,
											'guru_photo' => $photo);
							$this->M_guru->edit_guru($data, $id);
							redirect('admin/guru','refresh');
						}else{
	                    	echo $this->session->set_flashdata('msg','warning');
	                    	redirect('admin/guru');
	                	
	                	}
					
					}else{
						$id=$this->input->post('eid');
							$nama = $this->input->post('enama');	
							$nip=$this->input->post('enip');
							$jenkel=$this->input->post('ejenkel');
							$tmplahir=$this->input->post('etmplahir');
							$tgllahir=$this->input->post('etgllahir');
							$mapel=$this->input->post('emapel');
							$jbt=$this->input->post('ejabatan');
							$ket=$this->input->post('eketerangan');
							$jenis=$this->input->post('ejenis');

							$data = array(	'guru_nip' => $nip,
											'guru_nama' => $nama,
											'guru_jenkel' => $jenkel,
											'guru_tmp_lahir' => $tmplahir,
											'guru_tgl_lahir' => $tgllahir,
											'guru_mapel' => $mapel,
											'guru_jenis_id' => $jenis,
											'guru_jabatan_id' => $jbt,
											'guru_keterangan' => $ket);
							$this->M_guru->edit_guru($data, $id);
							redirect('admin/guru','refresh');
					}
				}
			}
	public function hapus_guru()
	{
		$id=$this->input->post('id');
		$this->M_guru->hapus_guru($id);
		redirect('admin/guru','refresh');
	}

}

/* End of file Guru.php */
/* Location: ./application/controllers/admin/Guru.php */