<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->library('migration');

        if ($this->migration->latest() === FALSE)
		{
			show_error($this->migration->error_string());
		}


		$this->load->library('grocery_CRUD');

		$crud = new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('data');
		$crud->set_subject('Berita');

		$output = $crud->render();
		$this->load->view('admin',(array)$output);
	}
}
