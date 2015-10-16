<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addFeedBack extends CI_Controller {
	public function index()
	{
		if($this-> input->post('submit_Add')=='product')
		{
			$this -> load -> view('common/header');
			
			//$this->addFeedback();
		}else{
				$this -> load -> view('common/header');
		$this ->Home();
		$this -> load -> view('common/footer');
		
		}

	}
	
	public function Home()
	{
		$this->load->view('Orders/addOrder');
	}
	
	public function GoBack()
	{
		$this->load->view('Orders/addOrder');
	}
	
		public function editComment(){
		
		$this->load->view('products/EditProductComment');
	
			}
	public function Add(){
       	
			if($_POST['submit_Add']){
							
						$data= array(
						//	'p_Id'  =>$this->input->post('id'),
							'feedback'  =>$this->input->post('newfeedback')
						
						);
						$this->db->insert('feedback', $data);
						
						redirect('addFeedBack/Home');
					
	   
				
				
			}
			function addFeedback(){
					$data= array(
						//	'p_Id'  =>$this->input->post('id'),
							'feedback'  =>$this->input->post('newfeedback')
						
						);
						$this->db->insert('feedback', $data);
						
						redirect('addFeedBack/Home');
			}
			
		
			


		}
	 
	
		
}
