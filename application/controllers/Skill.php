<?php

class Skill extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("biodata_model");
        $this->load->model("skill_model");
        $this->load->library('form_validation');
    }
    
	public function index()
	{
		$data['skill']= $this->skill_model->getAllSkill();
		$data['navbar']= $this->biodata_model->getAllBiodata1();
        // var_dump($data);
        $this->load->view('admin/pages/skill', $data);
    }

    public function tambah(){
		$data = $this->skill_model;
		$validation = $this->form_validation;
		$validation->set_rules($data->rules());

		if($validation->run()){
			$data->tambah();
			$this->session->set_flashdata('succes', 'data sukses diunggah');
			redirect('skill');
		}
    }
    
    public function edit($id = null){
		$data = $this->skill_model;
		$data1 = $this->biodata_model;
		$validation = $this->form_validation;
		$validation->set_rules($data->rules());

		if($validation->run()){
			$data->edit();
			$this->session->set_flashdata('succes', 'data sukses diunggah');
			redirect('admin/skill');
		}
		$data->skill = $data->getById($id);
		if(!$data->skill) show_404();

		// var_dump($data);
		$data->navbar = $data->getAllBiodata1();
		$this->load->view("admin/pages/edit-skill", $data);
	}

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->skill_model->delete($id)) {
            redirect(site_url('skill'));
        }
    }
}