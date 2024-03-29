<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('cart');
	}

	private function _login()
	{
		$email = $this->input->post('login_email');
		$password = $this->input->post('login_password');

		$user = $this->db->get_where('customer', ['mail' => $email])->row_array();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'id' => $user['id'],
					'nama' => $user['nama'],
					'mail' => $user['mail'],
					'status' => 'login'
				];
				$this->session->set_userdata($data);
				redirect('home');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
				Wrong Password!
				</div>');
				redirect(base_url('login'));
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
			No Such Account!
			 </div>');
			redirect(base_url('login'));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	public function index()
	{
		// Rules for login form
		$this->form_validation->set_rules('login_email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('login_password', 'Password', 'required|trim');

		$customer['user_name'] = null;
		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header_page', $customer);
			$this->load->view('pages/login');
			$this->load->view('layout/footer');
		} else {
			$this->_login();
		}
	}
}
