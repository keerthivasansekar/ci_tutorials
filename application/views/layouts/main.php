<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/includes/header', $header);
$this->load->view($_viewfile);
$this->load->view('layouts/includes/footer');