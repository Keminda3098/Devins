<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Storecontroller extends CI_Controller {

	
	public function index() {
		$this -> load -> helper('form');
		if ($this -> input -> post('ids') == "formss") {
			$ID = $this -> input -> post('email');
					$this -> getDatabaseToAddOrder($ID);

		} else if ($this -> input -> post('ids') == "oder_display") {
			$input = $this -> input -> post('idss');
			$input1 = $this -> input -> post('price');
			$input2 = $this -> input -> post('txtQty');
			$total = $input1 * $input2;
			$this -> getDatabaseValues($input, $input2, $total);
		} else if ($this -> input -> post('Display') == "order_display") {
			$input = $this -> input -> post('name');
			$input1 = $this -> input -> post('cat');
			$input2 = $this -> input -> post('sub');
			$input3 = $this -> input -> post('price');
			$input4 = $this -> input -> post('car');
			$input5 = $this -> input -> post('total');
			$this -> insert_to_db($input, $input1, $input2, $input3, $input4, $input5);
		} else if ($this -> input -> post('Display') == "Reject_Order") {

			$this -> getDatabaseToViewReject();

			/*$result=$this->validate();

			 if($result==TRUE){
			 $this->load->view('ViewAll');

			 }
			 $this->load->view('select');*/

		} else if ($this -> input -> post('View') == "ViewAll") {

			$input = $this -> input -> post('p_ID');
			$this -> getDatabaseToAddOrder($input);

		} else if ($this -> input -> post('OnlineS') == "OnlineStore") {

			$this -> getDatabaseToView();

		} else {
			if ($this -> input -> get('page') == "online") {
				$this -> getDatabaseToView();
			} else if ($this -> input -> get('page') == "promotion") {

				$this -> addProduct1();
			}
			//$this->getDatabaseToView();
			else {
				$this -> load -> view('Header');
				$this -> load -> view('Home');
				$this -> load -> view('footer');
			}

		}

	

	}

	public function validate() {
		if (confirm('Do you want to submit?')) {

			return TRUE;
		}
		return FALSE;
	

	}

	public function getDatabaseValues($input, $input2, $total) {
	
		$this -> load -> model('get_db');
		$data['query'] = $this -> get_db -> getAll($input);
		$data['car'] = $input2;
		$data['total'] = $total;
		$this -> load -> view('Header');
		$this -> load -> view('orderDisplay', $data);
		$this -> load -> view('Footer');
	}

	public function addProduct1() {
		$this -> load -> view('Header');
		$this -> load -> view('Addition');
		$p_Name = $this -> input -> post('p_Name');
		$p_Category = $this -> input -> post('p_Category');
		$p_SubCategory = $this -> input -> post('p_SubCategory');
		$p_Price = $this -> input -> post('p_Price');
		$p_Quantity = $this -> input -> post('p_Quantity');

		$this -> load -> model('AddProducts');

		$this -> AddProducts -> addproduct($p_Name, $p_SubCategory, $p_SubCategory, $p_Price, $p_Quantity);
		$this -> load -> view('Footer');
	}

	public function getDatabaseToAddOrder($ID) {
		//$ID=$this -> input -> post('Name');
		$this -> load -> model('get_db');
		$data['query'] = $this -> get_db -> getAll($ID);
		$this -> load -> view('Header');
		//echo $ID;
		$this -> load -> view('AddOrder', $data);
		$this -> load -> view('Footer');
	}

	public function getDatabaseToView() {
		//$ID=$this -> input -> post('Name');
		$this -> load -> model('get_db');
		$data['query'] = $this -> get_db -> getAllView();
		$this -> load -> view('Header');
		//echo $ID;
		$this -> load -> view('ViewAll', $data);
		$this -> load -> view('Footer');
	}

	public function getDatabaseToViewConfirm() {
		//$ID=$this -> input -> post('Name');
		$this -> load -> model('get_db');
		$data['query'] = $this -> get_db -> getAllView();
		$this -> load -> view('Header');
		//echo $ID;
		$this -> load -> view('ConfirmMessage');
		$this -> load -> view('ViewAll', $data);
		$this -> load -> view('Footer');
	}

	public function getDatabaseToViewReject() {
		//$ID=$this -> input -> post('Name');
		$this -> load -> model('get_db');
		$data['query'] = $this -> get_db -> getAllView();
		$this -> load -> view('Header');
		//echo $ID;
		$this -> load -> view('RejectMessage');
		$this -> load -> view('ViewAll', $data);
		$this -> load -> view('Footer');
	}

	function insert_to_db($input, $input1, $input2, $input3, $input4, $input5) {
		$this -> load -> model('get_db');
		$this -> get_db -> InsertAll($input, $input1, $input2, $input3, $input4, $input5);
				$this -> getDatabaseToViewConfirm();
		
	}

}


