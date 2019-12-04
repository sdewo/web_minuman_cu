<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mOrder');
		$this->load->library('cart');
	}

	public function index()
	{
		$this->load->view('layout/header_page');
		$this->load->view('pages/checkout');
		$this->load->view('layout/footer');
	}

	public function proses_order()
	{
		if($this->session->userdata('status') == "login"){
			$idCustomers = $this->session->userdata('id');
			$notes = $this->input->post('orderNotes');
			$data_order = array(
				'orderDate' => date('Y-m-d'),
				'customerID' => $idCustomers,
				'notes' => $notes
			);
			$id_order = $this->mOrder->add_order($data_order);
	
			if ($cart = $this->cart->contents()) {
				foreach ($cart as $item) {
					$data_detail = array(
						'orderID' => $id_order,
						'productID' => $item['id'],
						'productQty' => $item['qty'],
						'price' => $item['price']
					);
					$proses = $this->mOrder->add_detail_order($data_detail);
				}
			}
	
			$this->cart->destroy();
			redirect('success');
		}else{
			redirect('login');
		}
	}
}
