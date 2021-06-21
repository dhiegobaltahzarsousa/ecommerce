<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    
	public function index()
	{
		$this->load->view('store/header');
		$this->load->view('store/principal');
		$this->load->view('store/footer');
	}
}
