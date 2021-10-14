<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_album');
		if ($this->session->userdata('masuk') == 'sanditampanmasuk') {
			true;
		}else{
			$url=base_url('administrator');
            echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Anda Harus Login </div>');
            redirect($url);
		}
	}
	public function index()
	{
		$d=$this->M_album->get_album();
		$data['album']=$d;
		$this->load->view('admin/v_album', $data);
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

	                        $nama=$this->input->post('nama');
							$auth=$this->input->post('author');
							$data = array('album_nama' => $nama,
										  'album_author' => $auth,
										  'album_cover' => $photo);
							
							$a=$this->M_album->simpan($data);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/album');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/album');
	                }
	                 
	            }else{
	                $nama=$this->input->post('nama');
					$auth=$this->input->post('author');				
					$data = array('album_nama' => $nama,
								  'album_author' => $auth);
					$a=$this->M_album->simpan($data);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/album');
				}
		}
		
	}
	public function edit_album()
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
							$id=$this->input->post('id');

	                        $nama=$this->input->post('nama');
							$auth=$this->input->post('author');
							$data = array('album_nama' => $nama,
										  'album_author' => $auth,
										  'album_cover' => $photo);
							
							$this->M_album->edit_album($data, $id);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/album');
						}else{
	                    	echo $this->session->set_flashdata('msg','warning');
	                    	redirect('admin/album');
	                	
	                	}
					
					}else{
					$id=$this->input->post('id');
	                $nama=$this->input->post('nama');
					$auth=$this->input->post('author');				
					$data = array('album_nama' => $nama,
								  'album_author' => $auth);
					$this->M_album->edit_album($data, $id);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/album');
				}
				
			}
		}
	public function hapus_album()
	{
		$id=$this->input->post('id');
		$this->M_album->hapus_album($id);
		redirect('admin/album','refresh');
	}





}

/* End of file Galeri.php */
/* Location: ./application/controllers/admin/Galeri.php */