<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header_page');
		$this->load->view('pages/contactus');
		$this->load->view('layout/footer');
	}
}
