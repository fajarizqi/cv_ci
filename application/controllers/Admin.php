<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("biodata_model");
		$this->load->library('form_validation');
	}
	public function biodata()
	{
		$data['biodata']= $this->biodata_model->getAllBiodata();
		$data['navbar']= $this->biodata_model->getAllBiodata1();
		// var_dump($data);`
		$this->load->view('admin/pages/biodata', $data);
	}
	
	public function tambah(){
		$data = $this->biodata_model;
		$validation = $this->form_validation;
		$validation->set_rules($data->rules());

		if($validation->run()){
			$data->tambah();
			$this->session->set_flashdata('succes', 'data sukses diunggah');
			redirect('admin/pages/biodata');
		}
	}

	public function edit($id = null){
		$data = $this->biodata_model;
		$validation = $this->form_validation;
		$validation->set_rules($data->rules());

		if($validation->run()){
			echo "valid";
			$data->edit();
			$this->session->set_flashdata('succes', 'data sukses diunggah');
			var_dump($data);
			redirect('admin/biodata');
		}
		$data->biodata = $data->getById($id);
		if(!$data->biodata) show_404();

		$data->navbar = $data->getAllBiodata1();
		// var_dump($data);
		echo "admin/simpan";
		$this->load->view("admin/pages/edit-biodata", $data);
	}

	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->biodata_model->delete($id)) {
            redirect(site_url('admin/biodata'));
        }
    }
}	
