<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Home_model extends CI_Model {
		function __construct(){
          // Call the Model constructor
          parent::__construct();
		  
			
		}



 	function addImage(){
			date_default_timezone_set('Asia/Dhaka');
			$date = date('Y-m-d',time());

			$insert_data= array(
					'img_name' => $this->input->post('img_name'),
						);
			if($this->db->insert('tbl_image',$insert_data)){
				$data['status'] = 'success';
				return $this->db->insert_id();
			}
			else{
				$data['status'] = 'error';
				return FALSE;
			}
			
			
		}
	
	}

?>