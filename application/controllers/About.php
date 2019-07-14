<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->load->view('about/about');
	}
    public function location()
	{
		$this->load->view('about/Location');
    }
    public function prospectus()
	{
		$this->load->view('about/home');
    }
    public function ignatius()
	{
		$this->load->view('about/Saint Ignatius');
    }
    public function credo()
	{
		$this->load->view('about/Loyola Credo');
    }
    public function vision()
	{
		$this->load->view('about/vision_mission');
    }
    
}
