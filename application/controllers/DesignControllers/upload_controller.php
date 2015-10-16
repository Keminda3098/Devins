<?php 

class Upload_controller extends CI_Controller
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
$config = array(
'upload_path' => "./uploads/",
'allowed_types' => "jpg|png|gif",
'overwrite' => FALSE,
'max_size' => "2048000"
);

$this->load->library('upload', $config);
if($this->upload->do_upload() && $this->input->post('submitrqst'))
{
$data2= array('pname' =>'',
		'pcategory' =>'',
		'peprice' =>'' ,
		'pdate' =>'' ,
		'pfile'=>'',
		'pimg'=>'Upload Successful');
$this -> load -> view('common/headerlogged');
$this -> load -> view('formsuccess');
$this->load->view('design_products/customize',$data2);
$this->load->view('common/footer');

}
else
{
	$data2= array('pname' =>'',
		'pcategory' =>'',
		'peprice' =>'' ,
		'pdate' =>'' ,
		'pfile'=>'',
		'pimg'=>'Upload Unsuccessful');
$this -> load -> view('common/headerlogged');
$this->load->view('design_products/customize_design',$data2);
$this->load->view('common/footer');

}
	}
}