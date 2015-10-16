<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chat extends CI_Controller {

	//Global variable  
    public $outputData;		//Holds the output data for each view
	public $loggedInUser;

	public function index()
    {
		
		//Load the users model 
		
		
		$this->load->model('users_model');
		
		
		//Load the session library
		$this->load->library('session');	
		
		// Redirect if not logged
		$sessionUserID = $this->session->userdata('cus_id');
		if(!$sessionUserID) 
			redirect('welcome');
		
		//Get all users
		$this->outputData['listOfUsers']	= $this->users_model->getUsers();
		
		//$this -> load -> view('common/headerlogged');
						
		 $this->load->view('chat/userList',$this->outputData);
		 //$this -> load -> view('common/footer');
    }
	

}