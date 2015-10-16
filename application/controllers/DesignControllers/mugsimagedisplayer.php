<?php
class Mugsimagedisplayer extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> helper(array('form', 'url'));
	}

	function index() {

		$this -> load -> helper(array('form', 'url'));

		if ($this -> input -> post('submitevalidate')) {

			if ($this -> form_validation -> run() == FALSE) {

				$this -> load -> model('design_request_db');
				$colrcode = '#ffffff';
				$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
				$data['locat'] = $this -> design_request_db -> getlocationmugs($colrcode);
				$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
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
				$this -> load -> view('common/header');
				$this -> load -> view('form_errorf');
				$this -> load -> view('design_products/customize_mugs', $data);
				$this -> load -> view('common/footer');
			} else {
				$this -> load -> model('design_request_db');
				$colrcode = '#f6f6f6';
				$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
				$data['locat'] = $this -> design_request_db -> getlocationmugs($colrcode);
				$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();

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
				$this -> load -> view('formsuccess');
				$this -> load -> view('design_products/customize_mugs', $data);

				$this -> load -> view('common/footer');
				$this -> load -> view('common/header');

			}

		}
		

		if ($this -> input -> post('submitwhitefrontmug')) {

			$colrcode = '#f6f6f6';

			$this -> load -> model('design_request_db');
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationmugs($colrcode);
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

			$this -> load -> view('design_products/customize_mugs', $data);

			$this -> load -> view('common/footer');
		}

		if ($this -> input -> post('submityellowfrontmug')) {

			$colrcode = '#f2ba00';
			$this -> load -> model('design_request_db');
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationmugs($colrcode);
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

			$this -> load -> view('design_products/customize_mugs', $data);

			$this -> load -> view('common/footer');

		}
		if ($this -> input -> post('submitgreenfrontmug')) {
			$colrcode = '#008946';
			$this -> load -> model('design_request_db');
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationmugs($colrcode);
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

			$this -> load -> view('design_products/customize_mugs', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitpurplefrontmug')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#71387d';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationmugs($colrcode);
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

			$this -> load -> view('design_products/customize_mugs', $data);

			$this -> load -> view('common/footer');

		}
		if ($this -> input -> post('submitredfrontmug')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#cc0d1a';
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocationmugs($colrcode);
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

			$this -> load -> view('design_products/customize_mugs', $data);

			$this -> load -> view('common/footer');
			$this -> load -> view('common/header');
			$this -> load -> view('design_products/customize_mugs', $data);
			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitdarkbluefrontmug')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#373f54';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationmugs($colrcode);
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

			$this -> load -> view('design_products/customize_mugs', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitgreyfrontmug')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#b8b8b8';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationmugs($colrcode);
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

			$this -> load -> view('design_products/customize_mugs', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitbrownfrontmug')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#534631';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationmugs($colrcode);
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

			$this -> load -> view('design_products/customize_mugs', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitblackfrontmug')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#313131';
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocationmugs($colrcode);
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

			$this -> load -> view('design_products/customize_mugs', $data);

			$this -> load -> view('common/footer');

		}
		if ($this -> input -> post('submitbluefrontmug')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#3a3d87';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$cat="SuperHero";
				$data['logo']=$this -> design_request_db -> getplogos($cat);
			$data['locat'] = $this -> design_request_db -> getlocationmugs($colrcode);
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

			$this -> load -> view('design_products/customize_mugs', $data);

			$this -> load -> view('common/footer');

		}

	}

}
?>
