<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class orderController extends CI_Controller {
public function __construct()
	{
    }

	public function index()
	{
		if ($this -> input -> get('page') == "myOrderPay") {
			session_start();
			if(isset($_SESSION['myOrderPay'])){
					$this->load->model('get_db');
					$id=$_SESSION['myOrderPay'];
					$this->get_db->updatePaid($id,'Paid');
		            redirect('http://localhost/Devins/index.php?page=ViewMyCart');
		    }
			else{
				//redirect('http://localhost/Devins/index.php?page='.$this->session->userdata('myOrderPay'));
			}
		}
		else if ($this -> input -> post('pay') == "payPal") {
			$upload=$this->input->post('upload');
			$return=$this->input->post('return');
			$cmd=$this->input->post('cmd');
			$business=$this->input->post('business');
			$item_name_1=$this->input->post('item_name_1');
			$item_number_1=$this->input->post('item_number_1');
			$amount=$this->input->post('amount_1'); //amount in LKR
			$quantity_1=$this->input->post('quantity_1');
			
			$amount_1 = $this->converCurrency($amount); //converting LKR to USD

			session_start();
			unset($_SESSION['myOrderPay']);
			$_SESSION['myOrderPay']=$this->input->post('orderID');
			$Data = array('upload' => $upload, 
								'return' => $return,
								'cmd' => $cmd,
								'business' => $business,
								'item_name_1' => $item_name_1,
								'item_number_1' => $item_number_1,
								'amount_1' => $amount_1,
								'quantity_1' => $quantity_1);
								

			 $query_string = http_build_query($Data);
			 $posturl= $this->config->item('posturl');

    		header('Location: '.$posturl.'?' . $query_string);
    		

		}else if ($this -> input -> post('pay') == "ForAll") {
			session_start();
			$user = $this->session->userdata('username');
			$this->payForAll($user);
		}
	}


	function converCurrency($amount){
		 		$from = 'LKR';
			    $to = 'USD';

			    $url = "http://www.google.com/finance/converter?a=$amount&from=$from&to=$to"; 
			
			    $req = curl_init();
			
			    $timeout = 0; 
			    curl_setopt ($req, CURLOPT_URL, $url); 
			    curl_setopt ($req, CURLOPT_RETURNTRANSFER, 1); 
			
			    curl_setopt ($req, CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)"); 
			    curl_setopt ($req, CURLOPT_CONNECTTIMEOUT, $timeout); 
			    $rawdata = curl_exec($req);
			
			
			    $data = explode('bld>', $rawdata);
			    $data = explode($to, $data[1]);
			    $amount_1 = round($data[0], 2);
			    return $amount_1;
	} 
	
	function payForAll($user)
	{
		$this->load->model('get_db');
		$orders=$this->get_db->getMyAllOrdersToPay($user);
		
		unset($_SESSION['myOrderPay']);
		$_SESSION['myOrderPay']="PayForAll";
		
		$Data = array('upload' => "1",'return' => $this->config->item('returnurl'),'cmd' => "_cart",'business' => $this->config->item('business'));
		$i=1;
		
		foreach ($orders as $row)
		{
			
				$Data['item_name_'.$i]=$row->Name;
				$Data['item_number_'.$i]=$i;
				$Data['amount_'.$i]=$this->converCurrency($row->UPrice);
				$Data['quantity_'.$i]=$row->Qty;
								
			$i++;
		
		}
			 $query_string = http_build_query($Data);
			 $posturl= $this->config->item('posturl');

    		header('Location: '.$posturl.'?' . $query_string);
    		
		
	}
	
	function a()
	{
		    $upload=$_POST['upload'];
			$return=$_POST['return'];
			$cmd=$_POST['cmd'];
			$business=$_POST['business'];
			$item_name_1=$_POST['item_name_1'];
			$item_number_1=$_POST['item_number_1'];
			$amount=$_POST['amount_1']; //amount in LKR
			$quantity_1=$_POST['quantity_1'];
			
			$amount_1 = $this->converCurrency($amount); //converting LKR to USD

			session_start();
			unset($_SESSION['myOrderPay']);
			$_SESSION['myOrderPay']=$_POST['orderID'];
			$Data = array('upload' => $upload, 
								'return' => $return,
								'cmd' => $cmd,
								'business' => $business,
								'item_name_1' => $item_name_1,
								'item_number_1' => $item_number_1,
								'amount_1' => $amount_1,
								'quantity_1' => $quantity_1);
								

			 $query_string = http_build_query($Data);
			 $posturl= $this->config->item('posturl');

    		header('Location: '.$posturl.'?' . $query_string);
	}

function b()
{
	echo "sjkhkdfhskdksjdhfksdhfk";
	$upload=$_POST['pay'];
	echo $upload;
}

   }
