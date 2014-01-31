<?php
class Product_model extends CI_Model
{
    function get($product_id)
    {
        $result = $this->db->get_where('product', array('id' => $product_id));
        return $result->row();
    }
}
