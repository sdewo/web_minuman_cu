<?php
    class mWishlist extends CI_Model{
    
        public function get_all_wishlist()
        {
            $id = $this->session->userdata('id');

            $this->db->select('*');    
            $this->db->from('wishlist');
            $this->db->join('product', 'product.idProduct = wishlist.productID');
            $this->db->where('customerID', $id);

            $query = $this->db->get();
            return $query->result_array();
        }

        public function add_wishlist($data)
        {
            $this->db->insert('wishlist', $data);
        }

        public function delete_wishlist($where)
        {
            $this->db->where($where);
		    $this->db->delete('wishlist');
        }
        
    }
?>