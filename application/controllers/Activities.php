<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends CI_Controller {

	public function inter()
	{
		$this->load->view('activities/Inter School');
    }
    public function intra()
	{
		$this->load->view('activities/Intra School');
    }
    
}
