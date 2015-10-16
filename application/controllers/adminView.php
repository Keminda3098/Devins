<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adminView extends CI_Controller {


	public function index()
	{if($this-> input->post('selection')=='site'){
		$this -> load -> view('common/header');
			$this->load->view('products/AdminViewProduct.php');
		//	redirect('adminViewProduct/webpage');
		}
		else{
		$this -> load -> view('common/header');
		//$this -> load -> view('pages/Home', $data);
		$this->home();
		
		$this -> load -> view('common/footer');
		}
		
		//$this -> load -> view('common/header');
		//$this -> load -> view('pages/HomSe', $data);
	//$this->home();
		
		$this -> load -> view('common/footer');
	}
	
	function home()
	{
	
		$this->load->view('products/AdminViewSite.php');
		
	}
	function webpage()
	{
	
		if($this-> input->post('selection')=='site'){
			$this->load->view('products/AdminViewSite.php');
		//	redirect('adminViewProduct/webpage');
		}
		else{
		$this->load->view('products/AdminViewSite.php');
		}
		
	}
	
function delete()
	{
		$id=  $this->uri->segment(3);  
		
		$this->db->delete('website_feedback',array('s_Id' => $id));
		redirect('adminView');
	}
	
	
}
