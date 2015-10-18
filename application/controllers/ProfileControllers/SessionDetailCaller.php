<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class SessionDetailCaller extends CI_Controller {

    private $page1;
    private $page2;

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->page1 = "usermanage";
        $this->page2 = "useract";
        $this->load->model('SessionDetailModel');
    }

    function CallDropDown_User() {
        if ($this->input->post('submit2')) {
            $val = $this->input->post('selectn2');
            $data['query'] = $this->SessionDetailModel->gettallbyuname($val);
             // For Filtering Dropdown
            $data['groups'] = $this->SessionDetailModel->gettodropdown();
            $data['groups1'] = $this->SessionDetailModel->gettodropdowndate();
            // END - For Filtering Dropdown
            $this->load->view('common/header');
            $this->load->view('profile/Adminuserprofilemanagement', $data);
            $this->load->view('common/footer');
        }
    }

    function CallDropDown_Date() {
        if ($this->input->post('submit1')) {
            $val = $this->input->post('selectn1');
            $data['query'] = $this->SessionDetailModel->gettallbydate($val);
             // For Filtering Dropdown
            $data['groups'] = $this->SessionDetailModel->gettodropdown();
            $data['groups1'] = $this->SessionDetailModel->gettodropdowndate();
            // END - For Filtering Dropdown
            $this->load->view('common/header');
            $this->load->view('profile/Adminuserprofilemanagement', $data);
            $this->load->view('common/footer');
        }
    }

    public function index() {

        if ($this->input->get('page') == $this->page1) {
            $this->load->model('SessionDetailModel');

            $data['query'] = $this->SessionDetailModel->getsessiondetails();
            // For Filtering Dropdown
            $data['groups'] = $this->SessionDetailModel->gettodropdown();
            $data['groups1'] = $this->SessionDetailModel->gettodropdowndate();
            // END - For Filtering Dropdown
            $this->load->view('common/header');
            $this->load->view('profile/Adminuserprofilemanagement', $data);
            $this->load->view('common/footer');
        } else if ($this->input->get('page') == $this->page2) {
            $this->load->model('UserLogModel');
            $data['query'] = $this->UserLogModel->getonlinedetails();
            $this->load->view('common/header');
            $this->load->view('profile/Adminuseractivitymanagement', $data);
            $this->load->view('common/footer');
        } else {
            $this->load->view('common/header');
            $this->load->view('index.php');
            $this->load->view('common/footer');
        }
    }

}
