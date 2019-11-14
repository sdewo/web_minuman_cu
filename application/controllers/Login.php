<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header_page');
		$this->load->view('pages/login_register');
		$this->load->view('layout/footer');
	}
}
