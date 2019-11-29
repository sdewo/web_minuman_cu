<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result(); 
		$this->load->view('layout/header');
		$this->load->view('pages/home', $data);
		$this->load->view('layout/footer');
	}
}
