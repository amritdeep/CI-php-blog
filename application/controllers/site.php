<?php

class Site extends CI_Controller{
	function index(){
		$data = array();
		// $this->load->view('opt_view');

		$this->load->library('pagination');
		$this->load->library('table');

		$config['base_url'] = 'http://localhost:90/CI-php-blog/index.php/site/index';
		$config['total_rows'] = $this->db->get('data')->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 20;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';

		$this->pagination->initialize($config);

		// $data['records'] = $this->db->get_records('data', $config['per_page'], $this->uri->segment(3));

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