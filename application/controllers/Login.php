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
		// Rules for login form
		$this->form_validation->set_rules('login_email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('login_password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header_page');
			$this->load->view('pages/login');
			$this->load->view('layout/footer');
		} else {
			$data = [
				'mail' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('register_password'), PASSWORD_DEFAULT)
			];

			// Insert data to connected database
			$this->db->insert('customer', $data);

			// Create notification when successfully registered
			$this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
			Account Successfully Registered!
			 </div>');

			// Page to open after creating account
			redirect(base_url('login'));
		}
	}
}
