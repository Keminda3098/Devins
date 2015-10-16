<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class DesignControllersUrlCaller extends CI_Controller {

    public function index() {

        $this->load->helper('form');
        if ($this->input->get('page') == "choose") {
            $this->load->view('common/header');
            $this->load->view('design_products/choose');
            $this->load->view('common/footer');
        } else if ($this->input->get('page') == "ud") {
          
          
         $this->load->model('UserProfileDatabaseAccess');
            $data['query'] = $this->UserProfileDatabaseAccess->getuserdetails();

            $this->load->view('common/header');
            $this->load->view('profile/Adminuserprofilemanagement', $data);
            $this->load->view('common/footer');
        } else if ($this->input->get('page') == "admindesign") {
            $this->getallDsgnsupld();
        } else if ($this->input->get('page') == "shirts") {
            $this->loadcustomizepage();
        } else if ($this->input->get('page') == "bags") {
            $this->loadcustomizebagspage();
        } else if ($this->input->get('page') == "caps") {
            $this->loadcustomizecapspage();
        } else if ($this->input->get('page') == "umbrellas") {
            $this->loadcustomizeumbrellaspage();
        } else if ($this->input->get('page') == "mugs") {
            $this->loadcustomizemugspage();
        } else {
            
        }
    }

    public function loadcustomizecapspage() {

        $this->load->model('design_request_db');
        $colrcode = '#313131';

        $data = array('pname' => '', 'pcategory' => '', 'peprice' => '', 'pdate' => '', 'pfile' => '', 'pimg' => '', 'main_content' => 'design_products/customize', 'active' => 'home');
        $data['locat'] = $this->design_request_db->getlocationcaps($colrcode);
        $cat = "SuperHero";
        $data['logo'] = $this->design_request_db->getplogos($cat);
        $data['subcato'] = $this->design_request_db->getprmprdctcatogoriesToView();
        $data ['urlname'] = "";


        $font_size = 10;
        $font_size_array = array();
        $a = 0;
        for ($i = 1; $i < 50; $i++) {
            $font_size_array[$a] = $font_size;
            $font_size++;
            $a++;
        }
        $data['font_size'] = $font_size_array;
        $this->load->view('common/header');

        $this->load->view('design_products/customize_caps', $data);

        $this->load->view('common/footer');
    }

    public function loadcustomizeumbrellaspage() {

        $this->load->model('design_request_db');
        $colrcode = '#313131';

        $data = array('pname' => '', 'pcategory' => '', 'peprice' => '', 'pdate' => '', 'pfile' => '', 'pimg' => '', 'main_content' => 'design_products/customize', 'active' => 'home');
        $data['locat'] = $this->design_request_db->getlocationumbs($colrcode);
        $cat = "SuperHero";
        $data['logo'] = $this->design_request_db->getplogos($cat);
        $data['subcato'] = $this->design_request_db->getprmprdctcatogoriesToView();
        $data ['urlname'] = "";


        $font_size = 10;
        $font_size_array = array();
        $a = 0;
        for ($i = 1; $i < 50; $i++) {
            $font_size_array[$a] = $font_size;
            $font_size++;
            $a++;
        }
        $data['font_size'] = $font_size_array;
        $this->load->view('common/header');

        $this->load->view('design_products/customize_umbrellas', $data);

        $this->load->view('common/footer');
    }

    public function loadcustomizemugspage() {

        $this->load->model('design_request_db');
        $colrcode = '#313131';

        $data = array('pname' => '', 'pcategory' => '', 'peprice' => '', 'pdate' => '', 'pfile' => '', 'pimg' => '', 'main_content' => 'design_products/customize', 'active' => 'home');
        $data['locat'] = $this->design_request_db->getlocationmugs($colrcode);
        $cat = "SuperHero";
        $data['logo'] = $this->design_request_db->getplogos($cat);
        $data['subcato'] = $this->design_request_db->getprmprdctcatogoriesToView();
        $data ['urlname'] = "";


        $font_size = 10;
        $font_size_array = array();
        $a = 0;
        for ($i = 1; $i < 50; $i++) {
            $font_size_array[$a] = $font_size;
            $font_size++;
            $a++;
        }
        $data['font_size'] = $font_size_array;
        $this->load->view('common/header');

        $this->load->view('design_products/customize_mugs', $data);

        $this->load->view('common/footer');
    }

    public function loadcustomizepage() {

        $user = $this->session->userdata('username');

        $this->load->model('UserProfileDatabaseAccess');
        $data['query'] = $this->UserProfileDatabaseAccess->getuserdetails($user);
        $this->load->view('common/header');

        $this->load->view('design_products/customize_design', $data);
        $this->load->view('common/footer');
    }

    public function getallDsgnsupld() {
        $this->load->model('design_request_db');
        $data['query'] = $this->design_request_db->getallDesignsuploaded();
        $this->load->view('common/header');
        $this->load->view('design_products/Admingetcustomerdesigns', $data);
        $this->load->view('common/footer');
    }

}
