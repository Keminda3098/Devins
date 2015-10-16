<?php
class Umbrellaimagedisplayer extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> helper(array('form', 'url'));
	}

	function index() {

		$this -> load -> helper(array('form', 'url'));

		

		if ($this -> input -> post('submitwhitefrontumb')) {

			$colrcode = '#f6f6f6';

			$this -> load -> model('design_request_db');
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationumbs($colrcode);
			$font_size = 10;
			$font_size_array = array();
			$a = 0;
			for ($i = 1; $i < 50; $i++) {
				$font_size_array[$a] = $font_size;
				$font_size++;
				$a++;
			}
			$data['font_size'] = $font_size_array;
			$this -> load -> view('common/header');

			$this -> load -> view('design_products/customize_umbrellas', $data);

			$this -> load -> view('common/footer');
		}

		if ($this -> input -> post('submityellowfrontumb')) {

			$colrcode = '#f2ba00';
			$this -> load -> model('design_request_db');
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationumbs($colrcode);
			$font_size = 10;
			$font_size_array = array();
			$a = 0;
			for ($i = 1; $i < 50; $i++) {
				$font_size_array[$a] = $font_size;
				$font_size++;
				$a++;
			}
			$data['font_size'] = $font_size_array;
			$this -> load -> view('common/header');

			$this -> load -> view('design_products/customize_umbrellas', $data);

			$this -> load -> view('common/footer');

		}
		if ($this -> input -> post('submitgreenfrontumb')) {
			$colrcode = '#008946';
			$this -> load -> model('design_request_db');
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationumbs($colrcode);
			$font_size = 10;
			$font_size_array = array();
			$a = 0;
			for ($i = 1; $i < 50; $i++) {
				$font_size_array[$a] = $font_size;
				$font_size++;
				$a++;
			}
			$data['font_size'] = $font_size_array;
			$this -> load -> view('common/header');

			$this -> load -> view('design_products/customize_umbrellas', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitpurplefrontumb')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#71387d';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationumbs($colrcode);
			$font_size = 10;
			$font_size_array = array();
			$a = 0;
			for ($i = 1; $i < 50; $i++) {
				$font_size_array[$a] = $font_size;
				$font_size++;
				$a++;
			}
			$data['font_size'] = $font_size_array;
			$this -> load -> view('common/header');

			$this -> load -> view('design_products/customize_umbrellas', $data);

			$this -> load -> view('common/footer');

		}
		if ($this -> input -> post('submitredfrontumb')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#cc0d1a';
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocationumbs($colrcode);
			$font_size = 10;
			$font_size_array = array();
			$a = 0;
			for ($i = 1; $i < 50; $i++) {
				$font_size_array[$a] = $font_size;
				$font_size++;
				$a++;
			}
			$data['font_size'] = $font_size_array;
			$this -> load -> view('common/header');

			$this -> load -> view('design_products/customize_umbrellas', $data);

			$this -> load -> view('common/footer');
			$this -> load -> view('common/header');
			

		}

		if ($this -> input -> post('submitdarkbluefrontumb')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#373f54';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationumbs($colrcode);
			$font_size = 10;
			$font_size_array = array();
			$a = 0;
			for ($i = 1; $i < 50; $i++) {
				$font_size_array[$a] = $font_size;
				$font_size++;
				$a++;
			}
			$data['font_size'] = $font_size_array;
			$this -> load -> view('common/header');

			$this -> load -> view('design_products/customize_umbrellas', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitgreyfrontumb')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#b8b8b8';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationumbs($colrcode);
			$font_size = 10;
			$font_size_array = array();
			$a = 0;
			for ($i = 1; $i < 50; $i++) {
				$font_size_array[$a] = $font_size;
				$font_size++;
				$a++;
			}
			$data['font_size'] = $font_size_array;
			$this -> load -> view('common/header');

			$this -> load -> view('design_products/customize_umbrellas', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitbrownfrontumb')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#534631';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationumbs($colrcode);
			$font_size = 10;
			$font_size_array = array();
			$a = 0;
			for ($i = 1; $i < 50; $i++) {
				$font_size_array[$a] = $font_size;
				$font_size++;
				$a++;
			}
			$data['font_size'] = $font_size_array;
			$this -> load -> view('common/header');

			$this -> load -> view('design_products/customize_umbrellas', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitblackfrontumb')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#313131';
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocationumbs($colrcode);
			$font_size = 10;
			$font_size_array = array();
			$a = 0;
			for ($i = 1; $i < 50; $i++) {
				$font_size_array[$a] = $font_size;
				$font_size++;
				$a++;
			}
			$data['font_size'] = $font_size_array;
			$this -> load -> view('common/header');

			$this -> load -> view('design_products/customize_umbrellas', $data);

			$this -> load -> view('common/footer');

		}
		if ($this -> input -> post('submitbluefrontumb')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#3a3d87';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationumbs($colrcode);
			$font_size = 10;
			$font_size_array = array();
			$a = 0;
			for ($i = 1; $i < 50; $i++) {
				$font_size_array[$a] = $font_size;
				$font_size++;
				$a++;
			}
			$data['font_size'] = $font_size_array;
			$this -> load -> view('common/header');

			$this -> load -> view('design_products/customize_umbrellas', $data);

			$this -> load -> view('common/footer');

		}

	}

}
?>
