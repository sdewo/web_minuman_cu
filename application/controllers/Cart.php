<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('cart');
	}

	public function index()
	{
		$data['customer'] = $this->db->get_where('customer', ['mail' => $this->session->userdata('mail')])->row_array();
		$customer['user_name'] = $data['customer']['mail'];
		$this->load->view('layout/header_page', $customer);
		$this->load->view('pages/cart');
		$this->load->view('layout/footer');
	}

	function add_cart(){
		$data_produk= array('id' => $this->input->post('id'),
						 'name' => $this->input->post('nama'),
						 'price' => $this->input->post('harga'),
						 'gambar' => $this->input->post('gambar'),
						 'qty' =>$this->input->post('qty')
						);
		$this->cart->insert($data_produk);
		redirect('product');
	}

	function ubah_cart()
	{
		$cart_info = $_POST['cart'] ;
		foreach( $cart_info as $id => $cart)
		{
			$rowid = $cart['rowid'];
			$price = $cart['price'];
			$gambar = $cart['gambar'];
			$amount = $price * $cart['qty'];
			$qty = $cart['qty'];
			$data = array('rowid' => $rowid,
							'price' => $price,
							'gambar' => $gambar,
							'amount' => $amount,
							'qty' => $qty);
			$this->cart->update($data);
		}
		redirect('cart');
	}

	function hapus_cart($rowid) 
	{
		if ($rowid=="all"){
			$this->cart->destroy();
		} else {
			$data = array('rowid' => $rowid,
						'qty' =>0);
			$this->cart->update($data);
		}
		redirect('cart');
	}
}
