<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuaris extends CI_Controller {

	public function listusers()
	{
		$this->load->view('list');
	}

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
	public function modificarusuari()
	{
		
		$this->load->view('modificarusuari'); 
}
	public function eliminarusuari()
	{
		
		$this->load->view('eliminarusuari'); 
}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
