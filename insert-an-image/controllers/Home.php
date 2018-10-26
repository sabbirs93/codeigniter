<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	function __construct(){
		parent:: __construct();


		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('home');
	
	}
	
	
	
	 function index()
	{
		$data['title'] = 'Photo Upload';
		$this->load->view('photo',$data);
	}

	function addImage(){

		$img_id = $this->home_model->addImage();

			/************* File Upload ************/
			$config['upload_path'] = './uploads/photo/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			//$config['overwrite'] = TRUE;
			$this->load->library('upload',$config);


			// pic1 //
			
			$filetype = $_FILES['img_1']['type'];
			$file_name = $_FILES['img_1']['name'];
			
			if($filetype == "image/jpg")
					$file_type='jpg';
				else if ($filetype == "image/gif")
					$file_type='gif';
				else if($filetype == "image/jpeg")
					$file_type='jpg';

				else if($filetype == "image/pjpeg")
					$file_type='pjpeg';
				else if($filetype ==  "image/png")
					$file_type='png';

			$_FILES['img_1']['name']=$img_id.'_1.'.$file_type;
			
			$this->upload->do_upload('img_1');

			$up_dtat = array('img_1' => $_FILES['img_1']['name']);
			$this->db->where('img_id',$img_id);
			$this->db->update('tbl_image',$up_dtat);
		redirect('Donation');
	}


	

}
?>