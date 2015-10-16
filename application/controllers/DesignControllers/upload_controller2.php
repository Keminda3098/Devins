<?php 

class Upload_controller2 extends CI_Controller
{
function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('design_products/customize_design', array('error' => ' ' ));
	}
	
	function do_upload(){
$config2 = array(
'upload_path' => "./uploads/",
'allowed_types' => "*",
'overwrite' => FALSE,
'max_size' => "2048000"
);

$this->load->library('upload', $config2);
if($this->upload->do_upload() && $this->input->post('submitfile'))
{
$data2= array('pname' =>'',
		'pcategory' =>'',
		'peprice' =>'' ,
		'pdate' =>'' ,
		'pfile'=>'Upload Successful',
		'pimg'=>'');
$this->load->view('common/header');
$this -> load -> view('formsuccess');
$this->load->view('design_products/customize_design',$data2);
$this->load->view('common/footer');
}
else
{
	$data2= array('pname' =>'',
		'pcategory' =>'',
		'peprice' =>'' ,
		'pdate' =>'' ,
		'pfile'=>'Upload Unsuccessful',
		'pimg'=>'');

$this->load->view('design_products/customize_design', $data2);
}
	}
}