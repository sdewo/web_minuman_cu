<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header_page');
			$this->load->view('pages/login_register');
			$this->load->view('layout/footer');
		} else {
			echo 'Account successfully registered';
		}
	}
}
