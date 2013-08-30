<?php

class Email extends CI_Controller{
	function _construct(){
		parent::Controller();
	}

	function index(){
		$config = Array(
			'protocol' => 'sttp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'dhunganadeepamrit@gmail.com', 
			'smtp_pass' => ''
			);
		$this->load->library('email', $config);
		$this->email->set_newline('\r\n');

		$this->email->from('dhunganadeepamrit@gmail.com', 'Amrit Deep Dhungana');
		$this->email->to('dhunganadeepamrit@gmail.com');
		$this->email->subject('This is email test');
		$this->email->message('Its working');

		if($this->email->send()){
			echo "Your email send successful";
		}
		else{
			show_error($this->email->print_debugger());
		}
	}

}