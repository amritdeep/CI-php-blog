<?php

class Email extends CI_Controller{
	function _construct(){
		parent::Controller();
	}

	function index(){
		$this->load->view('newsletter');
	}

	function send(){
		$this->load->library('form_validation');

		// field name, error message, , validations rules
		$this->form_validation->set_rules('name', 'Name', 'trin|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trin|required|valid_email');

		if($this->form_validation->run() == FALSE){
			$this->load->view('newsletter');
		}
		else{
			//validation has passed. Now send the email
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			$this->load->library('email');
			$this->email->set_newline('\r\n');

			$this->email->from('dhunganadeepamrit@gmail.com', 'Amrit Deep Dhungana');
			$this->email->to($email);
			$this->email->subject('Newletter SignUp configuration');
			$this->email->message('Your are signup now');

			$path = $this->config->item('server_root');
			$file = $path. '/ci-php-blog/attractments/newsletter.txt';

			$this->email->attach($file);

			if($this->email->send()){
				// echo "Your email send successful";
				$this->load->view('signup_confirmation_view');
			}
			else{
				show_error($this->email->print_debugger());
			}
		}
	}
}