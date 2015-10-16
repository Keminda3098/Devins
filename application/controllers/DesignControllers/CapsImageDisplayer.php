<?php

class CapsImageDisplayer extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index() {

        $this->load->helper(array('form', 'url'));

        if ($this->input->post('submitevalidate')) {

            if ($this->form_validation->run() == FALSE) {

                $this->load->model('design_request_db');
                $colrcode = '#ffffff';
                $cat = "SuperHero";
                $data['logo'] = $this->design_request_db->getplogos($cat);
                $data['locat'] = $this->design_request_db->getlocationcaps($colrcode);
                $data['subcato'] = $this->design_request_db->getprmprdctcatogoriesToView();
                $data['urlname'] = "";
                $data['urlname'] = "";
                $font_size = 10;
                $font_size_array = array();
                $a = 0;
                for ($i = 1; $i < 50; $i++) {
                    $font_size_array[$a] = $font_size;
                    $font_size++;
                    $a++;
                }
                $data['font_size'] = $font_size_array;
                $this->load->view('common/header');
                $this->load->view('form_errorf');
                $this->load->view('design_products/customize_caps', $data);
                $this->load->view('common/footer');
            } else {
                $this->load->model('design_request_db');
                $colrcode = '#f6f6f6';
                $cat = "SuperHero";
                $data['logo'] = $this->design_request_db->getplogos($cat);
                $data['locat'] = $this->design_request_db->getlocationcaps($colrcode);
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
                $this->load->view('common/header');
                $this->load->view('formsuccess');
                $this->load->view('design_products/customize_caps', $data);

                $this->load->view('common/footer');
                $this->load->view('common/header');
            }
        }


        if ($this->input->post('submitwhitefrontcap')) {

            $colrcode = '#f6f6f6';

            $this->load->model('design_request_db');
            $data['subcato'] = $this->design_request_db->getprmprdctcatogoriesToView();
            $data['urlname'] = "";
            $cat = "SuperHero";
            $data['logo'] = $this->design_request_db->getplogos($cat);
            $data['locat'] = $this->design_request_db->getlocationcaps($colrcode);
            $font_size = 10;
            $font_size_array = array();
            $a = 0;
            for ($i = 1; $i < 50; $i++) {
                $font_size_array[$a] = $font_size;
                $font_size++;
                $a++;
            }
            $data['font_size'] = $font_size_array;
            $this->load->view('common/header');

            $this->load->view('design_products/customize_caps', $data);

            $this->load->view('common/footer');
        }

        if ($this->input->post('submityellowfrontcap')) {

            $colrcode = '#f2ba00';
            $this->load->model('design_request_db');
            $data['subcato'] = $this->design_request_db->getprmprdctcatogoriesToView();
            $data['urlname'] = "";
            $cat = "SuperHero";
            $data['logo'] = $this->design_request_db->getplogos($cat);
            $data['locat'] = $this->design_request_db->getlocationcaps($colrcode);
            $font_size = 10;
            $font_size_array = array();
            $a = 0;
            for ($i = 1; $i < 50; $i++) {
                $font_size_array[$a] = $font_size;
                $font_size++;
                $a++;
            }
            $data['font_size'] = $font_size_array;
            $this->load->view('common/header');

            $this->load->view('design_products/customize_caps', $data);

            $this->load->view('common/footer');
        }
        if ($this->input->post('submitgreenfrontcap')) {
            $colrcode = '#008946';
            $this->load->model('design_request_db');
            $data['subcato'] = $this->design_request_db->getprmprdctcatogoriesToView();
            $data['urlname'] = "";
            $cat = "SuperHero";
            $data['logo'] = $this->design_request_db->getplogos($cat);
            $data['locat'] = $this->design_request_db->getlocationcaps($colrcode);
            $font_size = 10;
            $font_size_array = array();
            $a = 0;
            for ($i = 1; $i < 50; $i++) {
                $font_size_array[$a] = $font_size;
                $font_size++;
                $a++;
            }
            $data['font_size'] = $font_size_array;
            $this->load->view('common/header');

            $this->load->view('design_products/customize_caps', $data);

            $this->load->view('common/footer');
        }

        if ($this->input->post('submitpurplefrontcap')) {
            $this->load->model('design_request_db');
            $colrcode = '#71387d';
            $data['subcato'] = $this->design_request_db->getprmprdctcatogoriesToView();
            $data['urlname'] = "";
            $cat = "SuperHero";
            $data['logo'] = $this->design_request_db->getplogos($cat);
            $data['locat'] = $this->design_request_db->getlocationcaps($colrcode);
            $font_size = 10;
            $font_size_array = array();
            $a = 0;
            for ($i = 1; $i < 50; $i++) {
                $font_size_array[$a] = $font_size;
                $font_size++;
                $a++;
            }
            $data['font_size'] = $font_size_array;
            $this->load->view('common/header');

            $this->load->view('design_products/customize_caps', $data);

            $this->load->view('common/footer');
        }
        if ($this->input->post('submitredfrontcap')) {
            $this->load->model('design_request_db');
            $colrcode = '#cc0d1a';
            $cat = "SuperHero";
            $data['logo'] = $this->design_request_db->getplogos($cat);
            $data['subcato'] = $this->design_request_db->getprmprdctcatogoriesToView();
            $data['urlname'] = "";
            $data['locat'] = $this->design_request_db->getlocationcaps($colrcode);
            $font_size = 10;
            $font_size_array = array();
            $a = 0;
            for ($i = 1; $i < 50; $i++) {
                $font_size_array[$a] = $font_size;
                $font_size++;
                $a++;
            }
            $data['font_size'] = $font_size_array;
            $this->load->view('common/header');

            $this->load->view('design_products/customize_caps', $data);

            $this->load->view('common/footer');
            $this->load->view('common/header');
            $this->load->view('design_products/customize_caps', $data);
            $this->load->view('common/footer');
        }

        if ($this->input->post('submitdarkbluefrontcap')) {
            $this->load->model('design_request_db');
            $colrcode = '#373f54';
            $data['subcato'] = $this->design_request_db->getprmprdctcatogoriesToView();
            $data['urlname'] = "";
            $cat = "SuperHero";
            $data['logo'] = $this->design_request_db->getplogos($cat);
            $data['locat'] = $this->design_request_db->getlocationcaps($colrcode);
            $font_size = 10;
            $font_size_array = array();
            $a = 0;
            for ($i = 1; $i < 50; $i++) {
                $font_size_array[$a] = $font_size;
                $font_size++;
                $a++;
            }
            $data['font_size'] = $font_size_array;
            $this->load->view('common/header');

            $this->load->view('design_products/customize_caps', $data);

            $this->load->view('common/footer');
        }

        if ($this->input->post('submitgreyfrontcap')) {
            $this->load->model('design_request_db');
            $colrcode = '#b8b8b8';
            $data['subcato'] = $this->design_request_db->getprmprdctcatogoriesToView();
            $data['urlname'] = "";
            $cat = "SuperHero";
            $data['logo'] = $this->design_request_db->getplogos($cat);
            $data['locat'] = $this->design_request_db->getlocationcaps($colrcode);
            $font_size = 10;
            $font_size_array = array();
            $a = 0;
            for ($i = 1; $i < 50; $i++) {
                $font_size_array[$a] = $font_size;
                $font_size++;
                $a++;
            }
            $data['font_size'] = $font_size_array;
            $this->load->view('common/header');

            $this->load->view('design_products/customize_caps', $data);

            $this->load->view('common/footer');
        }

        if ($this->input->post('submitbrownfrontcap')) {
            $this->load->model('design_request_db');
            $colrcode = '#534631';
            $data['subcato'] = $this->design_request_db->getprmprdctcatogoriesToView();
            $data['urlname'] = "";
            $cat = "SuperHero";
            $data['logo'] = $this->design_request_db->getplogos($cat);
            $data['locat'] = $this->design_request_db->getlocationcaps($colrcode);
            $font_size = 10;
            $font_size_array = array();
            $a = 0;
            for ($i = 1; $i < 50; $i++) {
                $font_size_array[$a] = $font_size;
                $font_size++;
                $a++;
            }
            $data['font_size'] = $font_size_array;
            $this->load->view('common/header');

            $this->load->view('design_products/customize_caps', $data);

            $this->load->view('common/footer');
        }

        if ($this->input->post('submitblackfrontcap')) {
            $this->load->model('design_request_db');
            $colrcode = '#313131';
            $cat = "SuperHero";
            $data['logo'] = $this->design_request_db->getplogos($cat);
            $data['subcato'] = $this->design_request_db->getprmprdctcatogoriesToView();
            $data['urlname'] = "";
            $data['locat'] = $this->design_request_db->getlocationcaps($colrcode);
            $font_size = 10;
            $font_size_array = array();
            $a = 0;
            for ($i = 1; $i < 50; $i++) {
                $font_size_array[$a] = $font_size;
                $font_size++;
                $a++;
            }
            $data['font_size'] = $font_size_array;
            $this->load->view('common/header');

            $this->load->view('design_products/customize_caps', $data);

            $this->load->view('common/footer');
        }
        if ($this->input->post('submitbluefrontcap')) {
            $this->load->model('design_request_db');
            $colrcode = '#3a3d87';
            $data['subcato'] = $this->design_request_db->getprmprdctcatogoriesToView();
            $data['urlname'] = "";
            $cat = "SuperHero";
            $data['logo'] = $this->design_request_db->getplogos($cat);
            $data['locat'] = $this->design_request_db->getlocationcaps($colrcode);
            $font_size = 10;
            $font_size_array = array();
            $a = 0;
            for ($i = 1; $i < 50; $i++) {
                $font_size_array[$a] = $font_size;
                $font_size++;
                $a++;
            }
            $data['font_size'] = $font_size_array;
            $this->load->view('common/header');

            $this->load->view('design_products/customize_caps', $data);

            $this->load->view('common/footer');
        }
    }

}

?>
