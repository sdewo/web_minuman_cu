<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('cart');
    }

    public function index()
    {
        // Rules for registration form
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[customer.mail]', [
            'is_unique' => 'This e-mail has been registered !'
        ]);
        $this->form_validation->set_rules('register_password', 'Password', 'required|trim|min_length[8]');

        if ($this->form_validation->run() == false) {
            $customer['user_name'] = null;
            $this->load->view('layout/header_page', $customer);
            $this->load->view('pages/register');
            $this->load->view('layout/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
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
            redirect(base_url('register'));
        }
    }
}
