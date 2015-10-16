<?php

class Shirtscontroller extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> helper(array('form', 'url'));
	}

	function index() {
		$data = array('pname' => '', 'pcategory' => '', 'peprice' => '', 'pdate' => '', 'pfile' => '', 'pimg' => '');
		$this -> load -> helper(array('form', 'url'));

		$this -> load -> library('form_validation');

		$this -> form_validation -> set_rules('pricetext', 'Price', 'callback_get_numericvalue');
		$this -> form_validation -> set_rules('amounttext', 'Amount', 'required');
		$this->form_validation->set_rules('datetext', 'date', 'trim|required|valid_date[y-m-d,-]');
		
		$this->form_validation->set_rules('textdescrpt', 'Description', 'required');
		$this->form_validation->set_rules('imagetext', 'Please ', 'Upload Image');
		$this->form_validation->set_rules('mobile', 'Contact No.', 'required|regex_match[/^[0-9]{10}$/]');
$pricetext = $this -> input -> post('pricetext');
		
		


   if ($this -> input -> post('submitrqst')) {

			if ($this -> form_validation -> run() == FALSE) {
$this -> load -> model('design_request_db');
				$colrcode = '#ffffff';
				$data ['urlname'] ="";
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
				$this -> load -> view('common/header');
				$this -> load -> view('form_errorf');
				$this -> load -> view('design_products/customize', $data);
				$this -> load -> view('common/footer');
			} 
			
			else {
				$this -> load -> model('design_request_db');
				$colrcode = '#ffffff';
				$data ['urlname'] ="";
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
			

				$pricetext = $this -> input -> post('pricetext');
				$amounttext = $this -> input -> post('amounttext');
				$datetext = $this -> input -> post('datetext');
				$textdescrpt = $this -> input -> post('textdescrpt');
				$mobile = $this -> input -> post('mobile');
                $url=$this -> input -> post('imagetext');
				$baseurl= 'http://localhost/devinsnew/userdesigns/' ;
				$urlimage=$baseurl.$url;
				$this -> load -> model('design_request_db');
             $designtype='Shirt';
				$this -> design_request_db -> Insertshirtdesignonlinerequest($amounttext,$datetext,$urlimage,$pricetext,$mobile,$textdescrpt,$designtype);
				
					$this -> load -> view('common/header');
				$this -> load -> view('formsuccess');
				$this -> load -> view('design_products/customize', $data);
				$this -> load -> view('common/footer');

			}

		}
	}

  public function valid_date($date, $format = 'Y-m-d')
      {
   $d = DateTime::createFromFormat($format, $date);
 
   if($d && $d->format($format) == $date) {
      return true;
   } else {
     $this->form_validation->set_message('valid_date', 
               'The %s date is not valid it should match this Year-Month-Date format (ex - 2015-01-23)');
        return false;
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

}
?>