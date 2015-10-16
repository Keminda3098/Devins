<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdvertisingView extends CI_Controller {
	public function index()
	{
		$this -> load -> view('common/header');
		$this ->viewA();
		$this -> load -> view('common/footer');
	}
	//View function at online store
	public function viewA()
	{
		$this->load->view('products/ViewAdvertising');
	}
	
}
