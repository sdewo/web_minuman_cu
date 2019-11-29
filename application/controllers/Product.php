<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result(); 
		$this->load->view('layout/header_page');
		$this->load->view('pages/product', $data);
		$this->load->view('layout/footer');
	}
}
