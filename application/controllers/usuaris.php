<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuaris extends CI_Controller {


	public function crear()
	{
		
		$this->load->view('crear'); 
}
	public function modificar()
	{
		
		$this->load->view('modificar'); 
}
	public function eliminar()
	{
		
		$this->load->view('eliminar'); 
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */