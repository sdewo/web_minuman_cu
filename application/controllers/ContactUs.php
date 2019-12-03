<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactUs extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('cart');
	}

	public function index()
	{
		$data['customer'] = $this->db->get_where('customer', ['mail' => $this->session->userdata('mail')])->row_array();
		$customer['user_name'] = $data['customer']['mail'];
		$this->load->view('layout/header_page', $customer);
		$this->load->view('pages/contactus');
		$this->load->view('layout/footer');
	}
}
