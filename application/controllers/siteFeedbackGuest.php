<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class siteFeedbackGuest extends CI_Controller {


	public function index()
	{
		$this -> load -> view('common/header');
		//$this -> load -> view('pages/Home', $data);
		$this->home();
		$this -> load -> view('common/footer');
	}
	
	function home()
	{
	
		$this->load->view('products/siteAddFeedbackGuest');
		
	}
	public function Add()
	{
			if($_POST['Add_SiteFeedback']){
				
			
						$data= array(
							'suser_name' =>$this->input->post('username'),
							'suser_feedback' =>$this->input->post('comment'),
							//'p_Category'   =>$this->input->post('category'),
							//'p_SubCategory '   =>$this->input->post('subcategory'),
							//'p_Description '   =>$this->input->post('description'),
							//'p_Price '   =>$this->input->post('price'),
							//'p_Quantity'   =>$this->input->post('quantity'),
							//'p_Url' =>$this->input->post('pic',$url)
							
						);
						
						$this->db->insert('website_feedback', $data);
						
						redirect('siteFeedbackGuest');
					}
	   
				
				
			}
	//site coment delete by user
		public function deleteProductComment()
	{
		
		$id=  $this->uri->segment(3);  
		
		$this->db->delete('website_feedback',array('s_Id' => $id));
		redirect('siteFeedbackGuest');
	}

//site comments update by user
public function editComment(){
		$this->load->view('common/header');
		$this->load->view('products/EditSiteComents');
			$this->load->view('common/footer');
	
			}
		
		function update_comment()
	{
		
			$id=  $this->uri->segment(3);  
		
		  
						$data= array(
						'suser_name'  =>$this->input->post('username'),
							'suser_feedback'   =>$this->input->post('name')
							
						);
						$this->db->where('s_Id', $id);
						$this->db->update('website_feedback', $data);
						//$this->getDatabaseToAddOrder($pId);
						redirect('siteFeedbackGuest');
					
	}

	}

 
