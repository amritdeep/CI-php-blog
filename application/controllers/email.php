<?php

class Email extends CI_Controller{
	function _construct(){
		parent::Controller();
	}

	function index(){
		
		$this->load->library('email');
		$this->email->set_newline('\r\n');

		$this->email->from('dhunganadeepamrit@gmail.com', 'Amrit Deep Dhungana');
		$this->email->to('dhunganadeepamrit@gmail.com');
		$this->email->subject('This is email test');
		$this->email->message('Its working');

		$path = $this->config->item('server_root');
		$file = $path. '/ci-php-blog/attractments/info.txt';

		$this->email->attach($file);

		if($this->email->send()){
			echo "Your email send successful";
		}
		else{
			show_error($this->email->print_debugger());
		}
	}

}