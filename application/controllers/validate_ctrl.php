<?php

class validate_ctrl extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('insert_model');
	}

	function index() {

		if ($this -> input -> post('b1') == "bb") {

			$this -> load -> view('pages/signupform');

		} else {

			$this -> load -> helper(array('form', 'url'));

			$this -> load -> library('Form_validation');

			$this -> form_validation -> set_rules('fname', 'First name', 'required');
			$this -> form_validation -> set_rules('lname', 'Last name', 'required');
			$this -> form_validation -> set_rules('email', 'Email', 'required|valid_email');
			$this -> form_validation -> set_rules('un', 'User name', 'required|min_length[5]|max_length[15]');
			$this -> form_validation -> set_rules('password', 'Password', 'required|matches[cpassword]');
			$this -> form_validation -> set_rules('cpassword', 'Password Confirmation', 'required');
			$this -> form_validation -> set_rules('add', 'Address', 'required|min_length[10]|max_length[50]');
			$this -> form_validation -> set_rules('ag', 'Age', 'required');
			$this -> form_validation -> set_rules('pn', 'Phone Number', 'required|regex_match[/^[0-9]{10}$/]');
			$this -> form_validation -> set_rules('cntry', 'User name', 'required');

			if ($this -> form_validation -> run() == FALSE) {
				$this -> load -> view('common/headerlogged');
				$this -> load -> view('pages/Signupform');
				$this -> load -> view('common/footer');
			} else {

				$data = array(
				'fname' => $this -> input -> post('fname'), 
				'lname' => $this -> input -> post('lname'), 
				'email' => $this -> input -> post('email'), 
				'username' => $this -> input -> post('un'), 
				'password' => $this -> input -> post('password'), 
				'address' => $this -> input -> post('add'), 
				'age' => $this -> input -> post('ag'), 
				'mob' => $this -> input -> post('pn'),
				 'country' => $this -> input -> post('cntry'));

				$this -> insert_model -> form_insert($data);
				$this -> load -> view('pages/signinform');
			}
		}
	}

}
?>