<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Sendingtoinnovations extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
$hidid=$this -> input -> post('hidid');
$hiduser=$this -> input -> post('hiduser');
$hidurl=$this -> input -> post('hidurl');
$hidprice=$this -> input -> post('hidprice');

$this -> load -> model('innovationdb');
$this -> innovationdb-> sendtoinno($hidid,$hiduser,$hidurl,$hidprice);
$this -> load -> model('design_request_db');
$data['query'] = $this -> design_request_db -> getallDesignsuploaded();
$this -> load -> view('common/header');
		
				$this -> load -> view('design_products/Admingetcustomerdesigns', $data);
				$this -> load -> view('common/footer');

 }
 

 
}
 
?>