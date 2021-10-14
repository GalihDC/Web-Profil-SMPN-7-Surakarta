<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_files');
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
		$f=$this->M_files->get_file();
		$data['files']=$f;
		$this->load->view('admin/v_files', $data);
	}

	public function aksi_download(){
		$this->load->helper('download');
		$nama = $this->uri->segment(4);
			force_download('assets/files/'.$nama, NULL);
	
	}
	public function simpan(){
		$s = $this->input->post('submit');
		if (isset($s)) {
			$config['upload_path'] = './assets/files/'; //path folder
	        $config['allowed_types'] = 'docx|doc|ppt|pdf|xls'; //type yang dapat diakses bisa anda sesuaikan
	        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if(!empty($_FILES['filemtr']['name']))
	            {
	                if ($this->upload->do_upload('filemtr'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress
	                        $config['source_image']='./assets/files/'.$gbr['file_name'];
	                        $config['new_image']= './assets/files/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $nama_file=$gbr['file_name'];
	                        $file=$this->input->post('file');
							$author=$this->input->post('author');
							$data = array('file_judul' => $file,
										  'file_oleh' => $author,
										  'file_data' => $nama_file);
							
							$s=$this->M_files->simpan($data);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/files');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/files');
	                }
	                 
	            }
		}
	}
	public function edit_file(){
				
	        $config['upload_path'] = './assets/files/'; //path folder
	        $config['allowed_types'] = 'docx|doc|ppt|pdf|xls'; //type yang dapat diakses bisa anda sesuaikan
	        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
	            $this->upload->initialize($config);
	            if(!empty($_FILES['filemtr']['name']))
	            {
	                if ($this->upload->do_upload('filemtr'))
	                {
	                         $gbr = $this->upload->data();
	                        //Compress
	                        $config['source_image']='./assets/files/'.$gbr['file_name'];
	                        $config['new_image']= './assets/files/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $nama_file=$gbr['file_name'];
	                        $file=$this->input->post('file');
							$author=$this->input->post('author');
							$id = $this->input->post('id');
							$data = array('file_judul' => $file,
										  'file_oleh' => $author,
										  'file_data' => $nama_file);
							
							$this->M_files->edit_file($data, $id);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/files');
	                
	                }else{
	                    $this->session->set_flashdata('msg','warning');
	                    redirect('admin/files');
	                
	                }
	            }else{
						
                        $file=$this->input->post('file');
						$author=$this->input->post('author');
						$id = $this->input->post('id');
						$data = array('file_judul' => $file,
									  'file_oleh' => $author);
						$this->M_files->edit_file($data, $id);
						echo $this->session->set_flashdata('msg','info');
						redirect('admin/files');
	            } 
	        }


	public function hapus_file(){
		$id=$this->input->post('id');
		$this->M_files->hapus_file($id);
		redirect('admin/files','refresh');
	}
}



/* End of file Files.php */
/* Location: ./application/controllers/admin/Files.php */