<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->_init();
	}

	private function _init()
	{
		$this->output->set_template('sailor');

		$this->load->css("assets/themes/sailor/css/bootstrap.min.css");
		$this->load->css("assets/themes/sailor/css/cubeportfolio.min.css");
		$this->load->css("assets/themes/sailor/css/style.css");
		$this->load->css("assets/themes/sailor/skins/default.css");
		$this->load->css("assets/themes/sailor/bodybg/bg1.css");
		$this->load->css("assets/themes/sailor/js/plugins/flexslider/flexslider.css");

		$this->load->js("assets/themes/sailor/js/jquery.min.js");
		$this->load->js("assets/themes/sailor/js/modernizr.custom.js");
		$this->load->js("assets/themes/sailor/js/jquery.easing.1.3.js");
		$this->load->js("assets/themes/sailor/js/bootstrap.min.js");
		$this->load->js("assets/themes/sailor/js/jquery.appear.js");
		$this->load->js("assets/themes/sailor/js/stellar.js");
		$this->load->js("assets/themes/sailor/js/classie.js");
		$this->load->js("assets/themes/sailor/js/uisearch.js");

		$this->load->js("assets/themes/sailor/js/plugins/flexslider/jquery.flexslider-min.js");
		$this->load->js("assets/themes/sailor/js/plugins/flexslider/flexslider.config.js");

		$this->load->js("assets/themes/sailor/js/jquery.cubeportfolio.min.js");
		$this->load->js("assets/themes/sailor/js/google-code-prettify/prettify.js");
		$this->load->js("assets/themes/sailor/js/animate.js");
		$this->load->js("assets/themes/sailor/js/custom.js");

		$this->data['navbar_menu'] = array(
			'Home', 
			'Program Studi',
			'HIMADIKA', 
			'Berita',
			'Kegiatan Mahasiswa',
			'Kegiatan Pembelajaran', 
		);

		$this->data['slide_images'] = array(
			base_url('/images/header1.jpg'),
			base_url('/images/header2.jpg'),
			base_url('/images/header3.jpg'),
		);

		$this->data['slide_title'] = array(
			'Selamat Datang',
			'Selamat Datang',
			'Selamat Datang',
		);

		$this->data['slide_subtitle'] = array(
			'Selamat Datang',
			'Selamat Datang',
			'Selamat Datang',
		);
		
	}

	public function index()
	{
		$this->load->view('ci_simplicity/welcome', $this->data);

		//$this->load->js("assets/themes/default/js_page/home.js");
	}
}
