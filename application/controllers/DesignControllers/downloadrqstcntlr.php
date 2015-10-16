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
 
 public function download()
 {
 	
	$filename=$this -> input -> post('hiddendownload');
 	 $this->load->helper('download');
	 $data= file_get_contents($filename);
	
	
	force_download($filename,$data);
 }
 
}
 
?>