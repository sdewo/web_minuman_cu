<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wishlist extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('cart');
	}

	public function index()
	{
		$this->load->view('layout/header_page');
		$this->load->view('pages/wishlist');
		$this->load->view('layout/footer');
	}
}
