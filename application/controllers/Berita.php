<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Controller {

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

		$this->load->js("assets/themes/sailor/js/jquery.min.js");
		$this->load->js("assets/themes/sailor/js/modernizr.custom.js");
		$this->load->js("assets/themes/sailor/js/jquery.easing.1.3.js");
		$this->load->js("assets/themes/sailor/js/bootstrap.min.js");
		$this->load->js("assets/themes/sailor/js/jquery.appear.js");
		$this->load->js("assets/themes/sailor/js/stellar.js");
		$this->load->js("assets/themes/sailor/js/classie.js");
		$this->load->js("assets/themes/sailor/js/uisearch.js");

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
	}

	public function index()
	{
        $this->load->model('m_berita');        
        $this->data['data']=$this->m_berita->get_all_berita();

		$this->load->view('ci_simplicity/berita', $this->data);

		//$this->load->js("assets/themes/default/js_page/news.js");
	}

	function berita_detail($kode){

        $this->load->model('m_berita');
        $this->data['data']=$this->m_berita->get_berita_by_kode($kode);

		$this->load->view('ci_simplicity/berita_detail', $this->data);
    }
}
