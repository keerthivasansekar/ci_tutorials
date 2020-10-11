<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendemail extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$email_parameters = array(
			'to' => "s.keerthivasan7@gmail.com",
			'subject' => "Email test",
			'message' => "This is a test message"
		);


		if($this->send($email_parameters) == true)
		{
			echo "Email sent succesfully";
		}
		else
		{
			echo "Email sending Failed";
		}
	}

	public function send($email_parameters)
	{
		$this->email->from('s.keerthivasan7@gmail.com', 'Keerthivasan Sekar');
		$this->email->to($email_parameters['to']);
		$this->email->subject($email_parameters['subject']);
		$this->email->message($email_parameters['message']);

		if($this->email->send())
		{
			return true;
		}
		else
		{
			echo $this->email->print_debugger();
			die();
			return false;
		}
	}
}