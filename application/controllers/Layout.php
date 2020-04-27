<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	//Menu List
	public function index()
	{
		$this->load->view('layout');
	}

	function about() {
		$this->load->view('about');
	}

	function services() {
		$this->load->view('services');
	}

	function products() {
		$this->load->view('products');
	}

	function contact() {
		$this->load->view('contact');
	}

	function news() {
		$this->load->view('news');
	}

	function career() {
		$this->load->view('career');
	}

	function clients() {
		$this->load->view('clients');
	}
}