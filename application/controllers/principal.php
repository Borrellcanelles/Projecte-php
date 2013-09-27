<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class principal extends CI_Controller {


	public function principal1()
	{
		
		$this->load->view('principal'); 
}
	public function zapatos($sandalias, $id) {
		echo $sandalias;
		echo $id;}
	
}
