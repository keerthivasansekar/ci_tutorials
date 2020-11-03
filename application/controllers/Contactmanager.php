<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactmanager extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mdl_contacts');
	}

	public function index()
	{
		$data['contacts'] = $this->mdl_contacts->get()->result_array();
		$this->load->view('contactmanager/list', $data);
	}

	public function add()
	{
		$this->form_validation->set_rules('full_name', 'Full Name', 'required');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|min_length[10]|is_numeric');

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path']          = './uploads';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('profile_pic')) {
            	$this->session->set_flashdata(array('message' => $this->upload->display_errors()));
            	redirect('contactmanager/add','refresh');
            }
			$contact = array(
				'full_name' => $this->input->post('full_name', TRUE),
				'email' => $this->input->post('email', TRUE),
				'mobile' => $this->input->post('mobile', TRUE),
				'profile_pic_url' => 'uploads/'.$this->upload->data('file_name')
			);
			$this->mdl_contacts->insert($contact);
           	redirect('contactmanager','refresh');
		} else {

			$this->load->view('contactmanager/add');
		}
	}

	public function view($id)
	{
		$data['contact'] = $this->mdl_contacts->get_where($id)->row_array();
		$this->load->view('contactmanager/view', $data);
	}
}