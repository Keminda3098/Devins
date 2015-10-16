<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adminViewProduct extends CI_Controller {


	public function index()
	{
		
		if($this-> input->post('selection')=='product'){
			
			$this->load->view('products/AdminViewSite.php');
				$this -> load -> view('common/footer');
		//	redirect('adminViewProduct/webpage');
		}else{
		
		$this -> load -> view('common/header');
		//$this -> load -> view('pages/Home', $data);
		$this->home();
		$this -> load -> view('common/footer');
		}
	}
	
	function home()
	{
	
		$this->load->view('products/AdminViewProduct.php');
		
	}
	
function delete()
	{
		$id=  $this->uri->segment(3);  
		
		$this->db->delete('feedback',array('f_Id' => $id));
		redirect('adminViewProduct');
	}
	function webpage()
	{
	
		if($this-> input->post('selection')=='site'){
			$this->load->view('products/AdminViewProduct.php');
		}
		else{
		$this->load->view('products/AdminViewProduct.php');
		}
		
	}
	
}
