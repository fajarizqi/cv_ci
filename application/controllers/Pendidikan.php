<?php

class Pendidikan extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model("pendidikan_model");
        $this->load->library('form_validation');
    }
    
	public function index()
	{
        $data['pendidikan']= $this->pendidikan_model->getAllPendidikan();
        // var_dump($data);
        $this->load->view('admin/pages/pendidikan', $data);
    }

    public function tambah(){
		$data = $this->pendidikan_model;
		$validation = $this->form_validation;
		$validation->set_rules($data->rules());

		if($validation->run()){
			$data->tambah();
			$this->session->set_flashdata('succes', 'data sukses diunggah');
			redirect('pendidikan');
		}
    }
    
    public function edit($id = null){
		$data = $this->pendidikan_model;
		$validation = $this->form_validation;
		$validation->set_rules($data->rules());

		if($validation->run()){
			$data->edit();
			$this->session->set_flashdata('succes', 'data sukses diunggah');
			redirect('admin/pendidikan');
		}
		$data->pendidikan = $data->getById($id);
		if(!$data->pendidikan) show_404();

		// var_dump($data);
		$this->load->view("admin/pages/edit-pendidikan", $data);
	}

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->pendidikan_model->delete($id)) {
            redirect(site_url('pendidikan'));
        }
    }
}