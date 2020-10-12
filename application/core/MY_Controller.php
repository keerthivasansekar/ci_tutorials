<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	protected function check_login_status()
	{
		if ($this->session->userdata('is_loggedin') === null || $this->session->userdata('is_loggedin') === false) {
			$this->session->set_flashdata(array('login_error' => "You need to be logged in to view this page"));
			redirect('authentication','refresh');
		}
	}

	protected function check_loginpage()
	{
		if ($this->session->userdata('is_loggedin') !== null || $this->session->userdata('is_loggedin') === true) {
			if ($this->uri->segment(1) == 'authentication' && $this->uri->segment(2) == null) {
				redirect('news','refresh');			
			}
		}

	}
}