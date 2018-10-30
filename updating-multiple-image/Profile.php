function editProfile(){

    $ngo_id = $this->profile_model->editNgoProfile();

        /************* File Upload ************/
  if (!empty($_FILES['ngo_logo']['name'])) {


        $config['upload_path'] = './assets/uploads/ngo_logo/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|zip|xls';
        $config['overwrite'] = true;
        $config['remove_spaces']=true;
        $config['max_size']='10600';// in KB

        $this->load->library('upload', $config);


        $filetype = $_FILES['ngo_logo']['type'];
        $file_name = $_FILES['ngo_logo']['name'];

        if($filetype == "image/jpg")
                $file_type='jpg';
            else if ($filetype == "image/jpeg")
                $file_type='jpeg';
            else if ($filetype == "image/gif")
                $file_type='gif';
            else if($filetype == "image/jpeg")
                $file_type='jpg';

            else if($filetype == "image/pjpeg")
                $file_type='pjpeg';
            else if($filetype ==  "image/png")
                $file_type='png';

        $_FILES['ngo_logo']['name']=$ngo_id.'.'.$file_type;

        $this->upload->do_upload('ngo_logo');


        $up_dtat = array('ngo_logo' => $_FILES['ngo_logo']['name']);
        $this->db->where('ngo_id',$ngo_id);
        $this->db->update('tbl_ngo_users',$up_dtat);

   }


  if (!empty($_FILES['ngo_license_pic']['name'])) {


        $config['upload_path'] = './assets/uploads/ngo_license_pic/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|zip|xls';
        $config['overwrite'] = true;
        $config['remove_spaces']=true;
        $config['max_size']='10600';// in KB

        $this->load->library('upload', $config);


        $filetype = $_FILES['ngo_license_pic']['type'];
        $file_name = $_FILES['ngo_license_pic']['name'];

        if($filetype == "image/jpg")
                $file_type='jpg';
            else if ($filetype == "image/jpeg")
                $file_type='jpeg';
            else if ($filetype == "image/gif")
                $file_type='gif';
            else if($filetype == "image/jpeg")
                $file_type='jpg';

            else if($filetype == "image/pjpeg")
                $file_type='pjpeg';
            else if($filetype ==  "image/png")
                $file_type='png';

        $_FILES['ngo_license_pic']['name']=$ngo_id.'.'.$file_type;

        $this->upload->do_upload('ngo_license_pic');


        $up_dtat = array('ngo_license_pic' => $_FILES['ngo_license_pic']['name']);
        $this->db->where('ngo_id',$ngo_id);
        $this->db->update('tbl_ngo_users',$up_dtat);

 }
    redirect('NGO_Profile');

}
