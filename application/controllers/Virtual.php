<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Virtual extends CI_Controller {

	public function pictures()
	{
		$this->load->view('virtual tour/Picture Gallery');
	}
	
	public function videos()
	{
		$this->load->view('virtual tour/Video Gallery');
	}
	
}
