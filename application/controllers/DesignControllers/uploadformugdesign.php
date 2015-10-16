<?php 

class Uploadformugdesign extends CI_Controller
{
function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('design_products/customize', array('error' => ' ' ));
	}
	
	function do_upload(){
$config = array(
'upload_path' => "./userdesigns/",
'allowed_types' => "jpg|png|gif",
'overwrite' => FALSE,
'max_size' => "2048000"
);

$this->load->library('upload', $config);
if($this->upload->do_upload() && $this->input->post('submitimage'))
{$this -> load -> model('design_request_db');
	$colrcode = '#ffffff';
	$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationmugs($colrcode);
			$data ['urlname'] ="";
			$font_size = 10;
			$font_size_array = array();
			$a = 0;
			for ($i = 1; $i < 50; $i++) {
				$font_size_array[$a] = $font_size;
				$font_size++;
				$a++;
			}
			$data['font_size'] = $font_size_array;
		
			$data ['urlname'] = $this->upload->file_name;
			
			$this -> load -> view('common/header');

			$this -> load -> view('design_products/customize_mugs', $data);

			$this -> load -> view('common/footer');
         
				
}
else
{
		
	$this -> load -> model('design_request_db');
	$colrcode = '#ffffff';
$data['locat'] = $this -> design_request_db -> getlocationmugs($colrcode);
$data ['urlname'] ="";
			$font_size = 10;
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
				$data['txt'] = $this -> input -> post('textarea11');
			$font_size_array = array();
			$a = 0;
			for ($i = 1; $i < 50; $i++) {
				$font_size_array[$a] = $font_size;
				$font_size++;
				$a++;
			}
$this -> load -> view('common/header');

			$this -> load -> view('design_products/customize_mugs', $data);

			$this -> load -> view('common/footer');

}
	}
}