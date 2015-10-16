<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Downloadrqstcntlr extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
  $this->load->helper('download');
 }
 
 public function upload()
 {
 	
	$filename=$this -> input -> post('hidden3');
 	 $this->load->helper('download');
	 $data= file_get_contents($filename);
	$name="nice.jpg";
	
	force_download($name,$data);
 }
 
}
 
?>