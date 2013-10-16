<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuaris extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Hello_model');
    }
   public function say_Hello()
    {
        $data['hello'] = $this->Hello_model->say_hello();

        $this->load->view('hola',$data);
    }

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

	public function grocery()
	{
		$this->load->view('example');
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
