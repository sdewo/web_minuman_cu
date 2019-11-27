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
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[customer.mail]');
		$this->form_validation->set_rules('register_password', 'Password', 'required|trim|min_length[8]');

		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header_page');
			$this->load->view('pages/login_register');
			$this->load->view('layout/footer');
		} else {
			echo 'Account successfully registered';
		}
	}
}
