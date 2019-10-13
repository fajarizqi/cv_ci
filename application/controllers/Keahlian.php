<?php

class Keahlian extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model("keahlian_model");
        $this->load->library('form_validation');
    }
    
	public function index()
	{
        $data['keahlian']= $this->keahlian_model->getAllKeahlian();
        // var_dump($data);
        $this->load->view('admin/pages/keahlian', $data);
    }

    public function tambah(){
		$data = $this->keahlian_model;
		$validation = $this->form_validation;
		$validation->set_rules($data->rules());

		if($validation->run()){
			$data->tambah();
			$this->session->set_flashdata('succes', 'data sukses diunggah');
			redirect('keahlian');
		}
    }
    
    public function edit($id = null){
		$data = $this->keahlian_model;
		$validation = $this->form_validation;
		$validation->set_rules($data->rules());

		if($validation->run()){
			$data->edit();
			$this->session->set_flashdata('succes', 'data sukses diunggah');
			redirect('admin/keahlian');
		}
		$data->keahlian = $data->getById($id);
		if(!$data->keahlian) show_404();

		// var_dump($data);
		$this->load->view("admin/pages/edit-keahlian", $data);
	}

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->keahlian_model->delete($id)) {
            redirect(site_url('keahlian'));
        }
    }
}