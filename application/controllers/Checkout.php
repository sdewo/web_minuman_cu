<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		$this->load->model('mOrder');
		$this->load->helper('url');
		$this->load->library('cart');
	}

	public function index()
	{
		$data['customer'] = $this->db->get_where('customer', ['mail' => $this->session->userdata('mail')])->row_array();
		$customer['user_name'] = $data['customer']['mail'];
		$this->load->view('layout/header_page', $customer);
		$this->load->view('pages/checkout');
		$this->load->view('layout/footer');
	}

	public function proses_order()
	{
		$data_order = array('orderDate' => date('Y-m-d'),
							   'customerID' => 1,
							   'notes' => "itu notes");
		$id_order = $this->mOrder->add_order($data_order);
			
		if ($cart = $this->cart->contents())
			{
				foreach ($cart as $item)
					{
						$data_detail = array('orderID' =>$id_order,
										'productID' => $item['id'],
										'productQty' => $item['qty'],
										'price' => $item['price']);			
						$proses = $this->mOrder->add_detail_order($data_detail);
					}
			}
			
		$this->cart->destroy();
		redirect('success');
		
	}
}
