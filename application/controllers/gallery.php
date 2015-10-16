<?php
class Gallery extends CI_Controller {
	
	var $gallery_path;
	
	function index()
	{
		$this->load->helper('form');
		if($this->input->post('subtemp'))
		{
			$this -> gallery_path = realpath(APPPATH.'../templates');
			echo $this->gallery_path;
	        $this->do_upload();
			
		}
		
	}
	
	function do_upload()
	{
		$config =array(
		'allowed_types'=> 'jpg|jpeg|gif|png',
		'upload_path'=>$this->gallery_path,
		'max_size'=>3000
		);
		
		$this->load->library('upload',$config);
		$this->upload->do_upload();
		$data= array('upload_data'=>$this->upload->data());
		$this->resize($data['upload_data']['full_path'],$data['upload_data']['file_name']);
	}
	
	function resize($path,$file)
	{
		
		$config['image_library'] = 'gd2';
		$config['source_image'] = $path;
		$config['create_thumb'] = true;
		$config['maintain_ratio'] = true;
		$config['width'] = 200;
		$config['height'] = 300;
		$config['new_image'] = './templates/'.$file;
		
		
		
		
		$this->load->library('image_lib',$config);
			$this->image_lib->resize();

	
		$this->image_lib->display_errors();
	
	}
}                                             
?>

