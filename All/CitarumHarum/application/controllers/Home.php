<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			//Load Dependencies
			$this->load->model("goldar_model");
			$this->load->library('form_validation');
		}

		// List all your items
		public function index()
		{
			$data["goldar"] = $this->goldar_model->getData();
			$this->load->view("admin/goldar/index", $data);
		}

		// Add a new item
		public function insert()
		{
			$goldar = $this->goldar_model;
			$validation = $this->form_validation;
			$validation->set_rules($goldar->rules());

			if ($validation->run()) {
			    $goldar->insert();
			    $this->session->set_flashdata('success', 'DATA BERHASIL DISIMPAN');
			}

			$this->load->view("admin/goldar/insert");
		}

		//Update one item
		public function edit( $nik = NULL )
		{

	        if (!isset($nik)) redirect('home');
	       
	        $goldar = $this->goldar_model;
	        $validation = $this->form_validation;
	        $validation->set_rules($goldar->rules());

	        if ($validation->run()) {
	            $goldar->edit();
	            $this->session->set_flashdata('success', 'DATA BERHASIL DI EDIT');
	        }

	        $data["goldar"] = $goldar->getById($nik);
	        if (!$data["goldar"]) show_404();
	        
	        $this->load->view("admin/goldar/edit", $data);
	    }


		//Delete one item
		public function delete( $nik = NULL )
		{
			if (!isset($nik)) show_404();
			
			if ($this->goldar_model->delete($nik)) {
			    redirect(site_url('home'));
			}
		}


}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
