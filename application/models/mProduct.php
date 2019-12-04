<?php
    class mProduct extends CI_Model{
    
        function get_all_product($kategori){
            if($kategori>0)
			{
				$this->db->where('kategori',$kategori);
			}
            $query = $this->db->get('product');
            return $query->result_array();
        }
        
    }
?>