<?php

class CapsController extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> helper(array('form', 'url'));
	}

	function index() {
		$data = array('pname' => '', 'pcategory' => '', 'peprice' => '', 'pdate' => '', 'pfile' => '', 'pimg' => '');
		$this -> load -> helper(array('form', 'url'));

		$this -> load -> library('form_validation');

		$this -> form_validation -> set_rules('pricetext', '  Price', 'callback_get_numericvalue');
		$this -> form_validation -> set_rules('amounttext', ' Amount', 'callback_get_numericvalue2');
		$this->form_validation->set_rules('datetext', 'Date', 'required');
		$this->form_validation->set_rules('uname', 'Username is', 'required');
		$this->form_validation->set_rules('textdescrpt', 'Description', 'required');
		$this->form_validation->set_rules('imagetext', 'Please ', 'Upload Image');
		$this->form_validation->set_rules('mobile', 'Contact No.', 'required|regex_match[/^[0-9]{10}$/]');

   if ($this -> input -> post('submitrqst')) {
   	
$this -> load -> model('design_request_db');
				$colrcode = '#ffffff';
				$data ['urlname'] ="";
				$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
				$data['txt'] = $this -> input -> post('textarea11');
				$data['locat'] = $this -> design_request_db -> getlocation($colrcode);
				
				$font_size = 10;
				$font_size_array = array();
				$a = 0;
				for ($i = 1; $i < 50; $i++) {
					$font_size_array[$a] = $font_size;
					$font_size++;
					$a++;
				}
		$data['font_size'] = $font_size_array;
			if ($this -> form_validation -> run() == FALSE) {
                						
                $this -> load -> view('common/header');
				$this -> load -> view('form_errorf');
				$this -> load -> view('design_products/customize_caps', $data);
				$this -> load -> view('common/footer');
				}
		
			else {
				
			$pricetext = $this -> input -> post('pricetext');
				$amounttext = $this -> input -> post('amounttext');
				$datetext = $this -> input -> post('datetext');
				$textdescrpt = $this -> input -> post('textdescrpt');
				$mobile = $this -> input -> post('mobile');
                $url=$this -> input -> post('imagetext');
				 $size=$this -> input -> post('sizetext');
				$username= $this -> input -> post('uname');
				$baseurl= 'http://localhost/devinsnew/userdesigns/' ;
				$urlimage=$baseurl.$url;
				$this -> load -> model('design_request_db');
             $designtype='caps';
				$this -> design_request_db -> Insertshirtdesignonlinerequest($amounttext,$datetext,$urlimage,$pricetext,$mobile,$textdescrpt,$designtype,$size,$username);
				
					$this -> load -> view('common/header');
				$this -> load -> view('formsuccess');
				$this -> load -> view('design_products/customize_caps', $data);
				$this -> load -> view('common/footer');

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