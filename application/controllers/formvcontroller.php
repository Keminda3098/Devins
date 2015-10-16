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
		$this -> form_validation -> set_rules('description', 'Description', 'required');
		$this -> form_validation -> set_rules('exdate', 'Expected Date', 'required');
		$this -> form_validation -> set_rules('exprice', 'Expected Price', 'required');

		if ($this -> input -> post('submit2')) {

			if ($this -> form_validation -> run() == FALSE) {
				$this -> load -> view('common/header');
				$this -> load -> view('form_errorf');
				$this -> load -> view('design_products/customize_design', $data);
				$this -> load -> view('common/footer');
			} else {
				$this -> load -> view('common/header');
				$this -> load -> view('formsuccess');
				$this -> load -> view('design_products/customize_design', $data);
				$this -> load -> view('common/footer');
				
				
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

}
?>