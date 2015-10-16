<?php
class Urllinker extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> helper(array('form', 'url'));
	}

	function index() {

	
		if ($this -> input -> get('page')== "promotionalproducts") {

		

				$this -> load -> model('urldbfinder');
		$ID="Promotional Products";
				$data['query'] = $this -> urldbfinder -> getpromotionalproducts($ID) ;
					$this -> load -> view('common/header');
				$this -> load -> view('pages/SearchResult');
				$this -> load -> view('common/footer');
		
			
			
		}


		}
		
	}


?>
