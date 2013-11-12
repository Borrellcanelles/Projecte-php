<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Model{




    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function getUser(){
		
		$query=$this->db->get('actor');
		
		return $query;
	}
	
	
	function insertUser($actor_id, $fullname){
        $data = array(
        'actor_id' => $actor_id,
        'fullname'=> $fullname);
        return $this->db->insert('actor', $data);
	}
}

?>
    
    
