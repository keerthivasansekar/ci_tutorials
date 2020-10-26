<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MY_Controller {

	public function index($page = 'home')
	{
		if (! file_exists(APPPATH.'views/'.$page.'.php')) {
			show_404();
		}
		$data['header']['title'] = ucfirst($page);
		$data['_viewfile'] = $page;
		$this->load->view('layouts/main', $data);
	}

	public function email()
	{
		$data['message']['reset_link'] = base_url();
		$this->load->view('emails/forgot_password', $data);
	}
}