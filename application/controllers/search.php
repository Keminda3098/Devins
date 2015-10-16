<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index() {
		$this -> load -> helper('form');
		if ($this -> input -> post('searchsubmit')) {
			$name = $this -> input -> post('searchtext');
			$this -> SearchDatabaseValues($name);

		}
	}

	public function SearchDatabaseValues($search) {
		$this -> load -> model('get_db');
		$data['query'] = $this -> get_db -> SearchProduct($search);
		$this -> load -> view('common/header');
		$this -> load -> view('pages/SearchResult', $data);
		$this -> load -> view('common/footer');
	}

}
