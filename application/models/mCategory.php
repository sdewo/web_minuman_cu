<?php
    class mCategory extends CI_Model{
    
        public function get_all_category()
        {
            $query = $this->db->get('category');
            return $query->result_array();
        }
        
    }
?>