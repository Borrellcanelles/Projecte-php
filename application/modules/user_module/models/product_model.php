<?php
class Product_model extends CI_Model
{
    function get($actor_id)
    {
        $result = $this->db->get_where('actor', array('actor_id' => $actor_id));
        return $result->row();
    }
}
