<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['customer'] = $this->db->get_where('customer', ['mail' => $this->session->userdata('mail')])->row_array();
        echo 'Selamat Datang ' . $data['customer']['mail'];
    }
}
