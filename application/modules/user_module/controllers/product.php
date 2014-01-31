<?php
class Product extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('product_model');
    }
    function index($actor_id)
    {
        $data['json'] = $this->product_model->get($actor_id);
        if (!$data['json']) show_404();

        $this->load->view('profile', $data);
    }
    
    
    function merda() {
		$this->load->view('test');
}

function json($actor_id)
    {
        $data['json'] = $this->product_model->get($actor_id);
        if (!$data['json']) show_404();

        $this->load->view('json_view', $data);
    }
    
}
