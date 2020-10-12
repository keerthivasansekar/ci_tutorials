<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mdl_users');
    }

    public function index()
    {
    	$this->check_loginpage();
    	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    	$this->form_validation->set_rules('passwrd', 'Password', 'required|min_length[5]|max_length[12]');

    	if ($this->form_validation->run() == TRUE) {
    		$email = $this->input->post('email', TRUE);
    		$pword = $this->input->post('passwrd', TRUE);

    		$user = $this->Mdl_users->get_where_custom('email', $email)->row_array();

    		if(password_verify($pword, $user['pword']))
    		{
    			$user = array(   				
   					'name' => $user['name'],
   					'email' => $user['email']
    			);
    			if ($this->set_session_data($user, TRUE)) {
	    			redirect('news','refresh');
    			} else {
	    			$this->session->set_flashdata(array('login_error' => "Error processing your login, Please try again"));
	    			redirect('authentication','refresh');
    			}
    		}
    		else
    		{
    			$this->session->set_flashdata(array('login_error' => "Username or password is incorrect"));
    			redirect('authentication','refresh');
    		}
    	} else {
	    	$this->load->view('authentication/login');
    	}
    }

    public function adduser()
    {
    	$this->form_validation->set_rules('name', 'Name', 'required|min_length[5]|max_length[50]');
    	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    	$this->form_validation->set_rules('passwrd', 'Password', 'required|min_length[5]|max_length[12]');
    	$this->form_validation->set_rules('conf_passwrd', 'Confirm Password', 'required|min_length[5]|max_length[12]|matches[passwrd]');

    	if ($this->form_validation->run() == TRUE) {
    		$user = [
    			'name' => $this->input->post('name', TRUE),
    			'email' => $this->input->post('email', TRUE),
    			'pword' => password_hash($this->input->post('passwrd', TRUE), PASSWORD_DEFAULT)
    		];

    		$this->Mdl_users->insert($user);
    		
    		redirect('authenticate/adduser','refresh');
    	} else {
    		$this->load->view('authentication/addUser');
    	}
    }

    public function logout()
    {
    	session_destroy();
    	redirect('authentication','refresh');
    }

    private function set_session_data($user, $is_loggedin = false)
    {
    	$logindata = array(
    		'user' => $user,
    		'is_loggedin' => $is_loggedin
    	);
    	$this->session->set_userdata($logindata);
    	return TRUE;
    }


}
