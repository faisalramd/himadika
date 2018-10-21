<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->_init();
	}

	private function _init()
	{
		$this->output->set_template('default');

		$this->load->js("assets/themes/default/js/jquery.min.js");
		$this->load->js("assets/themes/default/js/jquery.easing.min.js");
		$this->load->js("assets/themes/default/js/bootstrap.min.js");
		$this->load->js("assets/themes/default/js/wow.js");
		$this->load->js("assets/themes/default/js/jquery.bxslider.min.js");

		$this->data['navbar_menu'] = array(
			'Home', 
			'HIMADIKA', 
			'Kegiatan Pembelajaran', 
			'Program Studi',
			'Seputar MDK',
			'Berita'
		);
	}

	public function index()
	{
		$this->load->section('HIMADIKA', 'ci_simplicity/HIMADIKA');
		$this->load->section('Kegiatan_Pembelajaran', 'ci_simplicity/Kegiatan_Pembelajaran');
		$this->load->section('Program_Studi', 'ci_simplicity/Program_Studi');
		$this->load->section('Seputar_MDK', 'ci_simplicity/Seputar_MDK');
		$this->load->section('Berita', 'ci_simplicity/Berita');
		$this->load->view('ci_simplicity/welcome', $this->data);

		$this->load->js("assets/themes/default/js_page/news.js");
	}

	public function news()
	{
		$this->load->view('ci_simplicity/news');
	}
}
