<?php

class AdminProfileController extends CI_Controller {
function index() {
		$this->load->library('pagination');
                
                $config['base_url']=  base_url().'AdminProfileController/index';
                $config['total_rows']=34;
                        $config['per_page']=10;
                        $config['num_links']=20;
                        $this->pagination->initialize($config);
                       
	}
}