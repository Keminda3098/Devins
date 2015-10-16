<?php

class AcceptRejectDesign extends CI_Controller {
function __construct() {
		parent::__construct();
		$this -> load -> helper(array('form', 'url'));
	}

	function index() {
	
if($this->input->post('rjctreqst'))
{
	$designid = $this->input->post('hidden2');
	$this -> load -> model('design_request_db');
     
    $this -> design_request_db ->deletedesignrequest($designid);
	$data['query'] = $this -> design_request_db -> getallDesignsuploaded();
	           $this -> load -> view('common/header');
	
				$this -> load -> view('design_products/Admingetcustomerdesigns',$data);
				$this -> load -> view('common/footer'); 
}
if($this->input->post('acpptrequst'))	
{
	$designid = $this->input->post('hidden2');
	$user=$this->input->post('hiduser');
	 $data['url']=$this->input->post('hidurl');
	$this -> load -> model('design_request_db');
     $data['selectuser']=$this->input->post('hiduser');
    $this -> design_request_db ->deletedesignrequest($designid);
	
	
	$data['emailgot'] = $this -> design_request_db ->getemail($user);
	           $this -> load -> view('common/header');
	
				$this -> load -> view('design_products/responduser',$data);
				$this -> load -> view('common/footer'); 
}
}

}
?>