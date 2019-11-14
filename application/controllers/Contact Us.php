<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_US extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('pages/contact_us');
		$this->load->view('layout/footer');
	}
}