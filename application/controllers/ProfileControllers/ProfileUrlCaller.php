<?php

class ProfileUrlCaller extends CI_Controller {

    public function index() {

        $this->load->helper('form');
        if ($this->input->get('page') == "profile") {
            $this->load->model('UserProfileDatabaseAccess');
            $data['query'] = $this->UserProfileDatabaseAccess->getuserdetails();

            $this->load->view('common/header');
            $this->load->view('profile/Adminuserprofilemanagement', $data);
            $this->load->view('common/footer');
        }
        
        if ($this->input->get('page') == "editprofile") {
            $this->load->view('common/header');
            $this->load->view('profile/EditProfileView');
            $this->load->view('common/footer');
        }
        
          if ($this->input->get('page') == "messege") {


            $this->load->view('common/header');
            $this->load->view('profile/MailToAdmin');
            $this->load->view('common/footer');
        }
    }

}
