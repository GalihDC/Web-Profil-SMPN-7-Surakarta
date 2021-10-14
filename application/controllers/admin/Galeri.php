<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_galeri');
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
		$d=$this->M_galeri->get_galeri();
		$alb=$this->M_galeri->get_galeri_album();
		$data['galeri']=$d;
		$data['album']=$alb;
		$this->load->view('admin/v_galeri', $data);
	}




	// backend
	public function simpan()
	{
		$s = $this->input->post('submit');
		if (isset($s)) 
		{
			$config['upload_path'] = './assets/images/'; //path folder
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	        $config['encrypt_name'] = TRUE; //judul yang terupload nantinya
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
	                        $judul=$this->input->post('judul');
							$album=$this->input->post('album');
							$auth=$this->input->post('author');
							$data = array('galeri_judul' => $judul,
										  'galeri_album_id' => $album,
										  'galeri_author' => $auth,
										  'galeri_gambar' => $photo);
							
							$gr=$this->M_galeri->simpan($data);

							$count = $this->M_galeri->get_count_album($album)['album_count'] + 1;
	                        $this->M_galeri->update_album_count($count, $album);

							$this->session->set_flashdata('msg','success');
							redirect('admin/galeri');
					}else{
	                    $this->session->set_flashdata('msg','warning');
	                    redirect('admin/galeri');
	                }
	                 
	            }else{
	                $judul=$this->input->post('judul');
					$album=$this->input->post('album');
					$auth=$this->input->post('author');
					$data = array('galeri_judul' => $judul,
								  'galeri_album_id' => $album,
								  'galeri_author' => $auth);
					$gr=$this->M_galeri->simpan($data);

					$count = $this->M_galeri->get_count_album($album)['album_count'] + 1;
                    $this->M_galeri->update_album_count($count, $album);

					$this->session->set_flashdata('msg','success');
					redirect('admin/galeri');
				}
		}
		
	}
	public function edit_galeri()
	{
		$s = $this->input->post('submit');
		if (isset($s)) 
		{
			$config['upload_path'] = './assets/images/'; //path folder
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	        $config['encrypt_name'] = TRUE; //judul yang terupload nantinya
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
							
							$id=$this->input->post('id');
							$photo=$gbr['file_name'];
	                        $judul=$this->input->post('judul');
							$album=$this->input->post('album');
							$auth=$this->input->post('author');
							$data = array('galeri_judul' => $judul,
										  'galeri_album_id' => $album,
										  'galeri_author' => $auth,
										  'galeri_gambar' => $photo);
							
							$this->M_galeri->edit_galeri($data, $id);

							$album_id_sbl = $this->input->post('album_id_sbl');
							$count_sbl = $this->M_galeri->get_count_album($album_id_sbl)['album_count'] - 1;
	                        $this->M_galeri->update_album_count($count_sbl, $album_id_sbl);


							$count = $this->M_galeri->get_count_album($album)['album_count'] + 1;
	                        $this->M_galeri->update_album_count($count, $album);

							redirect('admin/galeri','refresh');
						}else{
	                    	echo $this->session->set_flashdata('msg','warning');
	                    	redirect('admin/galeri');
	                	
	                	}
					
					}else{
						$id=$this->input->post('id');

                        $judul=$this->input->post('judul');
						$album=$this->input->post('album');
						$auth=$this->input->post('author');
						$data = array('galeri_judul' => $judul,
									  'galeri_album_id' => $album,
									  'galeri_author' => $auth);
						$this->M_galeri->edit_galeri($data, $id);

						$album_id_sbl = $this->input->post('album_id_sbl');
						$count_sbl = $this->M_galeri->get_count_album($album_id_sbl)['album_count'] - 1;
                        $this->M_galeri->update_album_count($count_sbl, $album_id_sbl);
                        
						$count = $this->M_galeri->get_count_album($album)['album_count'] + 1;
                        $this->M_galeri->update_album_count($count, $album);


						redirect('admin/galeri','refresh');
					}
				}
			}
	public function hapus_galeri()
	{
		$id=$this->input->post('id');
		$album_id=$this->input->post('album_id');
		$this->M_galeri->hapus_galeri($id);

		$count = $this->M_galeri->get_count_album($album_id)['album_count'] - 1;
        $this->M_galeri->update_album_count($count, $album_id);

		redirect('admin/galeri','refresh');
	}





}



/* End of file Galeri.php */
/* Location: ./application/controllers/admin/Galeri.php */