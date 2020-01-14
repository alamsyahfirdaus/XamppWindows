<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index()
	{
		$data['title'] = 'Login';
		$this->load->view('indexLogin', $data);
	}

	public function create()
	{
		$data['title'] = 'Register';
		$this->load->view('vRegister', $data);
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
