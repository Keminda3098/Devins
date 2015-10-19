<?php

class ProfileUrlCaller extends CI_Controller {

    public function index() {

        $this->load->helper('form');
        if ($this->input->get('page') == "customprof") {
            $user = $this->session->userdata('username');
            $this->load->model('UserProfileDatabaseAccess');
            $data['query2'] = $this->UserProfileDatabaseAccess->getuserdetails($user);
            $this->load->view('common/header');
            $this->load->view('profile/ProfileView', $data);
            $this->load->view('common/footer');
        }

        if ($this->input->get('page') == "adminprof") {
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

        
           if ($this->input->get('page') == "usermailbox") {


            $this->load->view('common/header');
            $this->load->view('profile/MailBox');
        
            $this->load->view('common/footer');
        }
        if ($this->input->get('page') == "paymentsprof") {
            $user = $this->session->userdata('username');
            $this->load->model('UserProfileDatabaseAccess');
            $data['query'] = $this->UserProfileDatabaseAccess->getuserpaymentsdetails($user);
            $this->load->view('common/header');
            $this->load->view('profile/ProfilePayments', $data);
            $this->load->view('common/footer');
        }
        if ($this->input->get('page') == "paymentsprof") {


            $user = $this->session->userdata('usernaeditprofileme');
            $this->load->model('UserProfileDatabaseAccess');
            $data['query'] = $this->UserProfileDatabaseAccess->getuserpaymentsdetails($user);
            $this->load->view('common/header');
            $this->load->view('profile/ProfilePayments', $data);
            $this->load->view('common/footer');
        }

        if ($this->input->get('page') == "messege") {


            $this->load->view('common/header');
            $this->load->view('profile/MailToAdmin');
            $this->load->view('common/footer');
        }
    }

}
