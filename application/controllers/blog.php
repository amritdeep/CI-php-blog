<?php
class Blog extends CI_Controller{
	function index(){
		$this->load->model('data_model');
		$data["records"] = $this->data_model->getAll();
		$this->load->view('home', $data);
	}
}