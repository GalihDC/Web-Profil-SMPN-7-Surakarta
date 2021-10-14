<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct(){
		parent::__construct();
                $this->load->model('M_contact');
                $this->load->library('googlemaps');
              
	}
	function index(){
		
	    $config=array();
	    $config['center']="-7.5503212,110.8307765";
	    $config['zoom']=17;
	    $config['map_height']="400px";
	    $this->googlemaps->initialize($config);
	    $marker=array();
	    $marker['position']="-7.5503212,110.8307765";
	    $this->googlemaps->add_marker($marker);
	    $data['map']=$this->googlemaps->create_map();
		$this->load->view('v_contact',$data);
	}



	function kirim_pesan(){

        $nama=$this->input->post('nama');
        $email=$this->input->post('email');
        $pesan=$this->input->post('pesan');
        $contact=$this->input->post('contact');
        $data = array(  'inbox_nama' => $nama,
				  		'inbox_email'	=> $email,
				  		'inbox_pesan' => $pesan,
				  		'inbox_kontak' =>$contact);
        $this->M_contact->kirim_pesan($data);
        $this->session->set_flashdata('msg','<div class="note1"><p><strong> NB: </strong> Terima Kasih Telah Menghubungi Kami.</p></div>');
        redirect('contact');
     

     
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */