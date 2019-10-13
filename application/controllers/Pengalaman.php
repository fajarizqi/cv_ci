<?php

class Pengalaman extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model("pengalaman_model");
        $this->load->library('form_validation');
    }
    
	public function index()
	{
        $data['pengalaman']= $this->pengalaman_model->getAllPengalaman();
        // var_dump($data);
        $this->load->view('admin/pages/pengalaman', $data);
    }

    public function tambah(){
		$data = $this->pengalaman_model;
		$validation = $this->form_validation;
		$validation->set_rules($data->rules());

		if($validation->run()){
			$data->tambah();
			$this->session->set_flashdata('succes', 'data sukses diunggah');
			redirect('pengalaman');
		}
    }
    
    public function edit($id = null){
		$data = $this->pengalaman_model;
		$validation = $this->form_validation;
		$validation->set_rules($data->rules());

		if($validation->run()){
			$data->edit();
			$this->session->set_flashdata('succes', 'data sukses diunggah');
			redirect('pengalaman');
		}
		$data->pengalaman = $data->getById($id);
		if(!$data->pengalaman) show_404();

		// var_dump($data);
		$this->load->view("admin/pages/edit-pengalaman", $data);
	}

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->pengalaman_model->delete($id)) {
            redirect(site_url('pengalaman'));
        }
    }
}