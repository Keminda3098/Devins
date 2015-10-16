<?php
class Imagedisplayer extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> helper(array('form', 'url'));
	}

	function index() {

		$this -> load -> helper(array('form', 'url'));

		$this -> load -> library('form_validation');

		$this -> form_validation -> set_rules('pricetext', 'Price', 'required');
		$this -> form_validation -> set_rules('datetext', 'Date', 'required');
		$this -> form_validation -> set_rules('amounttext', 'Amount', 'required');

		if ($this -> input -> post('submitevalidate')) {

			if ($this -> form_validation -> run() == FALSE) {

				$this -> load -> model('design_request_db');
				$colrcode = '#ffffff';
				$data['locat'] = $this -> design_request_db -> getlocation($colrcode);
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
				$this -> load -> view('design_products/customize', $data);
				$this -> load -> view('common/footer');
			} else {
				$this -> load -> model('design_request_db');
				$colrcode = '#f6f6f6';
				$data['locat'] = $this -> design_request_db -> getlocation($colrcode);
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
				$this -> load -> view('design_products/customize', $data);

				$this -> load -> view('common/footer');
				$this -> load -> view('common/header');

			}

		}
		if ($this -> input -> post('submittext')) {
			$this -> load -> model('design_request_db');

			$colrcode = '#f6f6f6';

			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitwhitefront')) {

			$colrcode = '#f6f6f6';

			$this -> load -> model('design_request_db');
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation($colrcode);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');
		}

		if ($this -> input -> post('submityellowfront')) {

			$colrcode = '#f2ba00';
			$this -> load -> model('design_request_db');
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation($colrcode);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}
		if ($this -> input -> post('submitgreenfront')) {
			$colrcode = '#008946';
			$this -> load -> model('design_request_db');
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation($colrcode);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitpurplefront')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#71387d';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation($colrcode);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}
		if ($this -> input -> post('submitredfront')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#cc0d1a';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation($colrcode);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');
			$this -> load -> view('common/header');
			$this -> load -> view('design_products/customize', $data);
			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitdarkbluefront')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#373f54';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation($colrcode);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitgreyfront')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#b8b8b8';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation($colrcode);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitbrownfront')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#534631';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation($colrcode);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitblackfront')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#313131';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation($colrcode);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}
		if ($this -> input -> post('submitbluefront')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#3a3d87';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation($colrcode);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}
if ($this -> input -> post('submitwhiteback')) {

			$colrcode = '#f6f6f6';

			$this -> load -> model('design_request_db');
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation2($colrcode,1);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');
		}

		if ($this -> input -> post('submityellowback')) {

			$colrcode = '#f2ba00';
			$this -> load -> model('design_request_db');
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation2($colrcode,1);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}
		if ($this -> input -> post('submitgreenback')) {
			$colrcode = '#008946';
			$this -> load -> model('design_request_db');
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation2($colrcode,1);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitpurpleback')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#71387d';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation2($colrcode,1);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}
		if ($this -> input -> post('submitredback')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#cc0d1a';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation2($colrcode,1);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');
			$this -> load -> view('common/header');
			$this -> load -> view('design_products/customize', $data);
			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitdarkblueback')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#373f54';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation2($colrcode,1);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitgreyback')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#b8b8b8';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation2($colrcode,1);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitbrownback')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#534631';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation2($colrcode,1);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}

		if ($this -> input -> post('submitblackback')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#313131';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation2($colrcode,1);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}
		if ($this -> input -> post('submitblueback')) {
			$this -> load -> model('design_request_db');
			$colrcode = '#3a3d87';
			$data['subcato'] = $this -> design_request_db -> getprmprdctcatogoriesToView();
			$data['urlname'] = "";
			$data['locat'] = $this -> design_request_db -> getlocation2($colrcode,1);
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

			$this -> load -> view('design_products/customize', $data);

			$this -> load -> view('common/footer');

		}
		
	}

}
?>
