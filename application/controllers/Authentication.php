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
    		
    		redirect('authentication/adduser','refresh');
    	} else {
    		$this->load->view('authentication/addUser');
    	}
    }

    public function logout()
    {
    	session_destroy();
    	redirect('authentication','refresh');
    }

    public function forgotpassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == TRUE) {
            $userEmail = $this->input->post('email', TRUE);

            $userData = $this->Mdl_users->get_where_custom('email', $userEmail)->row_array();
            if($userData != null)
            {
                $random_no = rand(1000, 100000);
                $reset_token = md5($random_no);

                $data = [
                    'rst_token' => $reset_token
                ];
                $this->Mdl_users->update($userData['id'], $data);

                $this->session->set_flashdata(array('login_error' => "Password reset email sent successfully - $reset_token"));
                redirect('authentication','refresh');
            }
        } else {
            $this->load->view('authentication/forgot_password');
        }
    }

    public function resetpassword($reset_token = null)
    {
        $check_reset_token = $this->Mdl_users->get_where_custom('rst_token', $reset_token)->row_array();
        if ($check_reset_token != null) {
            $data = ['reset_token' => $reset_token, 'id' => $check_reset_token['id']];
            $this->session->set_userdata($data);
            redirect('authentication/setnewpassword','refresh');
        } else {
            echo "Reset token doesnt match";
        }
        
    }

    public function setnewpassword()
    {
        $this->form_validation->set_rules('passwrd', 'Password', 'required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('conf_passwrd', 'Confirm Password', 'required|min_length[5]|max_length[12]|matches[passwrd]');

        if ($this->form_validation->run() == TRUE) {
            $hashed_pword = password_hash($this->input->post('passwrd', TRUE), PASSWORD_DEFAULT);
            $userId = $this->session->userdata('id');
            $data = ['pword' => $hashed_pword, 'rst_token' => ''];
            $this->Mdl_users->update($userId, $data);
            session_destroy();
            redirect('authentication','refresh');
        } else {
            if($this->session->userdata('reset_token') != null)
            {
                $this->load->view('authentication/password_update');
            }
            else
            {
                $this->session->set_flashdata(array('login_error' => "Something went wrong please try again"));
                redirect('authentication','refresh');
            }
        }
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
