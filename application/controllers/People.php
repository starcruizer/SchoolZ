<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class People extends CI_Controller {

	public function pricipal()
	{
		$this->load->view('People/Principal');
	}

	public function faculty()
	{
		$this->load->view('People/Faculty Staff');
	}
    
}
