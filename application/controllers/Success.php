<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Success extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
    }

	public function index()
	{
		$this->load->view('layout/header_page');
		$this->load->view('pages/success');
		$this->load->view('layout/footer');
	}
}
