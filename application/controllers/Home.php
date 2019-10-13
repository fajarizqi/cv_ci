<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("home_model");
		$this->load->model("pendidikan_model");
		$this->load->model("pengalaman_model");
		$this->load->model("keahlian_model");
		$this->load->model("skill_model");
	}
	public function index()
	{
		$data['home'] = $this->home_model->getall();
		$data['pendidikan'] = $this->pendidikan_model->getAllPendidikan();
		$data['pengalaman'] = $this->pengalaman_model->getAllPengalaman();
		$data['keahlian'] = $this->keahlian_model->getAllKeahlian();
		$data['skill'] = $this->skill_model->getAllSkill();
		// var_dump($data);
		$this->load->view('home', $data);
		// $this->load->view('home');
	}
}
