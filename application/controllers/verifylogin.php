<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class VerifyLogin extends CI_Controller {
 public $outputData;	
 function __construct()
 {
   parent::__construct();
        $this->load->model('user','',TRUE);
           
	 $this->load->helper('date');
	 $this->load->library('session');
         $this->load->model('SessionDetailModel');
 }
 
  

 function index()
 {
   
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
      $this->load->view('common/header');
     $this->load->view('pages/signinform');
	   $this->load->view('common/footer');
   }
   else
   {  
		 $this -> checkType();
 	    
   }
 
 }
 
  function check_database($password)
 {
      $username = $this->input->post('username');
 
   $result = $this->user->login($username, $password);
 
   if($result)
   {
   
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
  
         'username' => $row->username
            
       );
    
     }  
     $loggedtime= date('Y-m-d H:i:s'); 
               $loggedouttime = '';
$this->session->set_userdata('username', $row->username);
$this->session->set_userdata('login_time', $loggedtime);
$this->session->set_userdata('logout_time', $loggedouttime);


   }
   else
   {
   	
	 $this->load->view('form_errorf');
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
 
 public function checkType() {
		$this -> load -> model('get_db');
   		$username = $this->input->post('username');
   		$result = $this -> get_db -> checkLoginType($username);
	    foreach($result as $row)
	    {
			$type = $row -> type;
			if($type == "administrator")
			{	
			$this -> load -> view('common/header');
				$this -> load -> view('pages/Admin');
				$this -> load -> view('common/footer');
			}
			else if($type == "staff")
			{	
				$this -> load -> view('common/header');
				$this -> load -> view('pages/Admin');
				$this -> load -> view('common/footer');
			}
			else 
			{
		$this -> load -> model('get_db');
		$data['query'] = $this -> get_db -> getAllDBToView();
		$data['query1'] = $this -> get_db -> getSliderToView();
		$this -> load -> view('common/header');
		$this -> load -> view('pages/Home', $data);
		$this -> load -> view('common/footer');
		      
			}
		}
	}
}

?>