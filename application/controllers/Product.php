<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		$this->load->model('mProduct');
		$this->load->helper('url');
		$this->load->library('cart');
	}

	public function index()
	{
		$data['product'] = $this->mProduct->get_all_product()->result();
		$data['customer'] = $this->db->get_where('customer', ['mail' => $this->session->userdata('mail')])->row_array();
		$customer['user_name'] = $data['customer']['mail'];

		$this->load->view('layout/header_page', $customer);
		$this->load->view('pages/product', $data);
		$this->load->view('layout/footer');
	}
}
