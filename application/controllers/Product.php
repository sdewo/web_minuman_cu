<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mProduct');
		$this->load->model('mCategory');
		$this->load->library('cart');
	}

	public function index()
	{
		$kategory = $this->input->get('id', TRUE);

		$data['product'] = $this->mProduct->get_all_product($kategory);
		$data['category'] = $this->mCategory->get_all_category();

		$this->load->view('layout/header_page');
		$this->load->view('pages/product', $data);
		$this->load->view('layout/footer');
	}
}
