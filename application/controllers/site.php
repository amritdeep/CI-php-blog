<?php

class Site extends CI_Controller{
	function index(){
		$data = array();
		// $this->load->view('opt_view');

		if($query = $this->site_model->get_records()){
			$data['records'] = $query;
		}

		$this->load->view('opt_view', $data);
	}

	function create(){
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content')
			);

		// $this->load->model('site_model'); # site_model is autoload
		$this->site_model->add_records($data);
		$this->index();
	}

	function update(){
		$data = array(
			'title' => 'My Freshly UPdate title', 
			'content' => 'Content shd go there'
			);

		$this->site_model->update_records($data);
	}

	function delete(){
		$this->site_model->delete_row();
		$this->index();
	}

}