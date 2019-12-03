<?php
    class mOrder extends CI_Model{

        public function add_order($data)
        {
            $this->db->insert('orders', $data);
            $id = $this->db->insert_id();
            return (isset($id)) ? $id : FALSE;
        }
        
        public function add_detail_order($data)
        {
            $this->db->insert('orderdetail', $data);
        }
       
    }
?>