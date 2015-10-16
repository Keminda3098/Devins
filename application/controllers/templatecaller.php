<?php

class Templatecaller extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> helper(array('form', 'url'));
	}

	function index() {
				
		
      if ($this->input->post('submitpic1'))
       {
	
	$img= array(
		'the1img'=>'http://localhost/Devins/templates/Gildan_2000_Antique_Irish_Green_Front_High.jpg');
	
		              $this -> load -> view('common/header');
						$this -> load -> view('design_products/customize', $img);
				$this -> load -> view('common/footer');
				
	
}
	   
else {
	$img= array(
		'the1img'=>'');
	
		      $this -> load -> view('common/header');
		
				$this -> load -> view('design_products/customize', $img);
				$this -> load -> view('common/footer');
				
	
}
				
			
		}
	}


?>