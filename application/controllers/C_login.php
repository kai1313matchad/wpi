<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class C_login extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
	{
		//fungsi login
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$valid->set_rules('username','Username','required');
		$valid->set_rules('password','Password','required');
		if($valid->run())
		{
			$this->simple_login->login($username,$password, base_url('C_admin'), base_url('C_login'));
		}
		//end fungsi login
		$data = array ('title' => 'Halaman Login');
		$this->load->view('menu/backend/login', $data);
	}
	}
?>