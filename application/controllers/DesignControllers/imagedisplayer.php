<?php

class Imagedisplayer extends CI_Controller {

    function index() {


        function imagecaller($colrcode) {
            $this->load->model('design_request_db');

            $cat = "SuperHero";
            $data['logo'] = $this->design_request_db->getplogos($cat);
            $data['locat'] = $this->design_request_db->getlocation($colrcode);
            $data['subcato'] = $this->design_request_db->getprmprdctcatogoriesToView();

            $font_size = 10;
            $font_size_array = array();
            $a = 0;
            for ($i = 1; $i < 50; $i++) {
                $font_size_array[$a] = $font_size;
                $font_size++;
                $a++;
            }
            $data['font_size'] = $font_size_array;

            $data['font_size'] = $font_size_array;
            $this->load->view('common/header');

            $this->load->view('design_products/customize', $data);

            $this->load->view('common/footer');
        }

        if ($this->input->post('submitwhitefront')) {
            imagecaller('#f6f6f6');
        }

        else if ($this->input->post('submityellowfront')) {


            imagecaller('#f2ba00');
        }
        else if ($this->input->post('submitgreenfront')) {

            imagecaller('#008946');
        }

       else if ($this->input->post('submitpurplefront')) {

            imagecaller('#71387d');
        }
       else if ($this->input->post('submitredfront')) {


            imagecaller('#cc0d1a');
        }

       else if ($this->input->post('submitgreyfront')) {

            imagecaller('#b8b8b8');
        }

       else if ($this->input->post('submitbrownfront')) {
            imagecaller('#534631');
        }

       else if ($this->input->post('submitblackfront')) {
            imagecaller('#313131');
        }
      else  if ($this->input->post('sumitbluefront')) {

            imagecaller('#3a3d87');
        }
        
        else 
        {
             $this->load->view('index');
        }
    }

}
