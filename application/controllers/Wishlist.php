<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wishlist extends CI_Controller
{

	public function index()
	{
		$data['customer'] = $this->db->get_where('customer', ['mail' => $this->session->userdata('mail')])->row_array();
		$customer['user_name'] = $data['customer']['mail'];
		$this->load->view('layout/header_page', $customer);
		$this->load->view('pages/wishlist');
		$this->load->view('layout/footer');
	}
}
