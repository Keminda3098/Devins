<?php

class Formvcontroller extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> helper(array('form', 'url'));
	}

	function index() {
		$data = array('pname' => '', 'pcategory' => '', 'peprice' => '', 'pdate' => '', 'pfile' => '', 'pimg' => '');

		$this -> load -> helper(array('form', 'url'));

		$this -> load -> library('form_validation');

		$this -> form_validation -> set_rules('productname', 'Product Name', 'required');
		$this -> form_validation -> set_rules('textdescrpt', 'Description', 'required');
		$this -> form_validation -> set_rules('pricetext', '  Price', 'callback_get_numericvalue');
		$this -> form_validation -> set_rules('amounttext', ' Amount', 'callback_get_numericvalue2');
		$this -> form_validation -> set_rules('datepicker', 'Expected Date', 'required');
				$this->form_validation->set_rules('mobile', 'Contact No.', 'required|regex_match[/^[0-9]{10}$/]');

		if ($this -> input -> post('submit2')) {
			

			if ($this -> form_validation -> run() == FALSE) {
				$this -> load -> view('common/header');
				$this -> load -> view('form_errorf');
				$this -> load -> view('design_products/customize_design', $data);
				$this -> load -> view('common/footer');
			} else {
				
				
				
				$productname = $this -> input -> post('productname');
			    $catogory = $this -> input -> post('catogory');
			    $exprice = $this -> input -> post('exprice');
			    $exdate = $this -> input -> post('exdate');
			    $description = $this -> input -> post('description');
			    $imageurl = $this -> input -> post('userfile');
		

			$this -> load -> model('design_request_db');

			$this -> design_request_db -> Insertrequest($productname, $catogory, $exprice, $exdate, $description,$imageurl);
				
			}
			
		}
	}

  public function get_numericvalue($pricetext) {
  if (is_numeric($pricetext)) {
      
                        return TRUE;
  }
  else{
      $this->form_validation->set_message('get_numericvalue', 'The Price Should be a Numeric value');
	 
	
	   return FALSE;
  }
 
	  }

	  
	  
	  public function get_numericvalue2($amounttext) {
  if (is_numeric($amounttext)) {
      
                        return TRUE;
  }
  else{
      $this->form_validation->set_message('get_numericvalue2', 'Quantity Should be a Numeric value');
	 
	
	   return FALSE;
  }
 
 
 
}

}
?>