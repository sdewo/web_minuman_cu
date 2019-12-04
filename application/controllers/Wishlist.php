<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wishlist extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->library('cart');
		$this->load->model('mWishlist');
	}

	public function index()
	{
		$data['wishlist'] = $this->mWishlist->get_all_wishlist();

		$this->load->view('layout/header_page');
		$this->load->view('pages/wishlist', $data);
		$this->load->view('layout/footer');
	}

	public function addWishlist()
	{
		$product = $this->input->get('id', TRUE);
		$idCustomers = $this->session->userdata('id');

		if($idCustomers == null){
			redirect('login');
		}else{
			$data_wishlist = array(
				'productID' => $product,
				'customerID' => $idCustomers
			);
			$proses = $this->mWishlist->add_wishlist($data_wishlist);
			redirect('product');
		}
	}

	public function deleteWishlist()
	{
		$id = $this->input->get('id', TRUE);
		$where = array('idWishlist' => $id);

		$proses = $this->mWishlist->delete_wishlist($where);
		redirect('wishlist');
	}

	function add_cart()
	{
		$data_produk = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('nama'),
			'price' => $this->input->post('harga'),
			'gambar' => $this->input->post('gambar'),
			'qty' => $this->input->post('qty')
		);
		$this->cart->insert($data_produk);
		redirect('wishlist');
	}
}
