<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProfileDetailLoader extends CI_Controller {

function __construct() {
		parent::__construct();
	 $this->load->helper('form');	
	}
        
        
	public function index()
	{
        $user = $this->session->userdata('username');
        $this->load->model('UserProfileDatabaseAccess');
        $data['query'] = $this->UserProfileDatabaseAccess->getuserdetails($user);
        $this -> load -> view('common/header');
	$this -> load -> view('profile/ProfileView', $data);
        $this -> load -> view('common/footer');
        }
}