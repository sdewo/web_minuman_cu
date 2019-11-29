<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{

	public function index()
	{
		$data['customer'] = $this->db->get_where('customer', ['mail' => $this->session->userdata('mail')])->row_array();
		$customer['user_name'] = $data['customer']['mail'];
		$this->load->view('layout/header_page', $customer);
		$this->load->view('pages/checkout');
		$this->load->view('layout/footer');
	}
}
