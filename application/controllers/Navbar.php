<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class navbar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("biodata_model");
	}
	public function index()
	{
		$data['navbar']= $this->biodata_model->getAllBiodata1();
		var_dump($data);
		$this->load->view('admin/pages/navbar', $data);
		// $this->load->view('home');
	}
}
