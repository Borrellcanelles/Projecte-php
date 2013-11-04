<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class principal extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}


	public function principal1()
	{
		$this->load->view('principal'); 
		$query = $this->db->get('actor');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				echo $row['actor_id']. $row['fullname']. "<br>";
			}
		}	
	}
	
	public function provainsert(){
	$data = array(
		'actor_id' => 9141 ,
		'fullname' => 'Mi nombre' ,
            );
            
            $this->db->insert('actor', $data); 
		}
		

	/*
	public function provainsert() {
	    class Myclass {
        var $actor_id = 900;
        var $fullname = 'pepitolospalotes';
    }
    $objeto = new Myclass;
    $this->db->insert('actors', $objeto);
*/
}
