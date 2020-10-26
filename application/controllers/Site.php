<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$data['header']['title'] = "Home";
		$data['_viewfile'] = "home";
		$this->load->view('layouts/main', $data);
	}

	public function about()
	{
		$data['header']['title'] = "About";
		$data['_viewfile'] = "about";
		$this->load->view('layouts/main', $data);
	}

	public function services()
	{
		$data['header']['title'] = "Services";
		$data['_viewfile'] = "services";
		$this->load->view('layouts/main', $data);
	}

	public function contact()
	{
		$data['header']['title'] = "Contact";
		$data['_viewfile'] = "contact";
		$this->load->view('layouts/main', $data);
	}	

	public function email()
	{
		$data['message']['reset_link'] = base_url();
		$this->load->view('emails/forgot_password', $data);
	}
}