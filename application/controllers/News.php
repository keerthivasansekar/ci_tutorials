<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mdl_news');
	}

	public function index()
	{
		$this->check_login_status();
		$data['all_news'] = $this->Mdl_news->get()->result_array();
		$this->load->view('news/view_all', $data);
	}

	public function add()
	{
		$this->check_login_status();
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[5]|max_length[255]');
		$this->form_validation->set_rules('content', 'Content', 'trim|required');
		if ($this->form_validation->run() == TRUE) {

			$new_news = [
				'title' => $this->input->post('title', True),
				'content' => $this->input->post('content', True),
				'slug' => url_title($this->input->post('title', True), '-', True)
			];

			$this->Mdl_news->insert($new_news);
			redirect('news','refresh');
			
		} else {
			$this->load->view('news/add');
		}
	}

	public function edit($id = null)
	{
		$this->check_login_status();
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[5]|max_length[35]');
		$this->form_validation->set_rules('content', 'Content', 'trim|required');
		if ($this->form_validation->run() == TRUE) {

			$new_news = [
				'title' => $this->input->post('title', True),
				'content' => $this->input->post('content', True),
				'slug' => url_title($this->input->post('title', True), '-', True)
			];

			$result = $this->Mdl_news->update($id, $new_news);
			if($result)
			{
				redirect('news','refresh');
			}
			else{
				$this->load->view('news/edit', $data);
			}
			
		} else {
			$data['news'] = $this->Mdl_news->get_where($id)->row_array();
			$this->load->view('news/edit', $data);
		}		
	}

	public function view($slug = null)
	{
		$this->check_login_status();
		$data['news'] = $this->Mdl_news->get_where_custom('slug', $slug)->row_array();
		$this->load->view('news/view', $data);
	}

	public function delete($id = null)
	{
		$this->check_login_status();
		$this->Mdl_news->delete($id);
		redirect('news','refresh');
	}

}