<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('cart');
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('pages/home');
		$this->load->view('layout/footer');
	}
}
